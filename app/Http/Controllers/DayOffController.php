<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\DayOff;
use App\Models\Employees;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DayOffController extends Controller
{
    // الحد الأقصى لعدد الأيام لكل موظف
    const MAX_DAYS_PER_EMPLOYEE = 5;

    // الحد الأقصى من نفس الوظيفة في اليوم الواحد
    const MAX_SAME_JOB_PER_DAY = 2;

    // عدد الأيام المعروضة
    const DAYS_TO_SHOW = 15;

    /**
     * صفحة الموظف العامة - بدون لوجين
     */
    public function index()
    {
        $days = collect();

        for ($i = 0; $i < self::DAYS_TO_SHOW; $i++) {
            $day = Carbon::today()->addDays($i);
            $dateStr = $day->toDateString();

            // كل الحجوزات على اليوم ده (pending أو approved)
            $bookings = DayOff::where('date', $dateStr)
                ->whereIn('status', ['pending', 'approved'])
                ->with('employee.job')
                ->get();

            // جمع الوظائف وعددها في اليوم ده
            $jobCounts = $bookings->groupBy('employee.job_id')
                ->map(fn($group) => $group->count());

            // هل اليوم محجوز بالكامل؟
            // (مش لازم — لأن كل وظيفة ليها حد مختلف)
            // بس لو مفيش موظفين خالص يبقى متاح للكل

            $days->push([
                'date'      => $day,
                'date_str'  => $dateStr,
                'day_name'  => $day->locale('ar')->isoFormat('dddd'),
                'day_num'   => $day->format('d'),
                'month'     => $day->locale('ar')->isoFormat('MMMM'),
                'bookings'  => $bookings, // كل الحجوزات
                'job_counts'=> $jobCounts,
            ]);
        }

        return view('dasboard.pages.DayOff.dayoff_index', compact('days'));
    }

    /**
     * تسجيل الراحة
     */
    public function store(Request $request)
    {
        $request->validate([
            'date'          => 'required|date|after_or_equal:today',
            'employee_code' => 'required|integer',
        ]);

        // 1. التحقق من رقم الموظف
        $employee = Employees::where('code', $request->employee_code)
            ->with('job')
            ->first();

        if (!$employee) {
            Alert::error('خطأ', 'رقم الموظف غير صحيح، تأكد من الرقم وحاول مرة تانية');
            return back()->withInput();
        }

        // 2. التحقق إن الموظف ده مسجلش نفس اليوم ده قبل كده
        $alreadyBookedSameDay = DayOff::where('employee_id', $employee->id)
            ->where('date', $request->date)
            ->whereIn('status', ['pending', 'approved'])
            ->exists();

        if ($alreadyBookedSameDay) {
            Alert::error('مسجل قبل كده', 'أنت سجلت راحة في اليوم ده بالفعل');
            return back()->withInput();
        }

        // 3. التحقق من الحد الأقصى للموظف (5 أيام)
        $myBookingsCount = DayOff::where('employee_id', $employee->id)
            ->whereIn('status', ['pending', 'approved'])
            ->where('date', '>=', Carbon::today())
            ->count();

        if ($myBookingsCount >= self::MAX_DAYS_PER_EMPLOYEE) {
            Alert::error(
                'وصلت الحد الأقصى',
                'عندك ' . $myBookingsCount . ' أيام راحة مسجلة، الحد الأقصى هو ' . self::MAX_DAYS_PER_EMPLOYEE . ' أيام'
            );
            return back()->withInput();
        }

        // 4. التحقق من نفس الوظيفة في اليوم ده (حد أقصى 2 من نفس الوظيفة)
        $sameJobCount = DayOff::where('date', $request->date)
            ->whereIn('status', ['pending', 'approved'])
            ->whereHas('employee', function ($q) use ($employee) {
                $q->where('job_id', $employee->job_id);
            })
            ->count();

        if ($sameJobCount >= self::MAX_SAME_JOB_PER_DAY) {
            $jobName = $employee->job->name ?? 'وظيفتك';
            Alert::error(
                'الوظيفة مكتملة',
                'في اليوم ده عدد ' . $jobName . ' وصل للحد الأقصى (' . self::MAX_SAME_JOB_PER_DAY . ' موظفين)'
            );
            return back()->withInput();
        }

        // 5. تسجيل الراحة
        DayOff::create([
            'employee_id' => $employee->id,
            'date'        => $request->date,
            'status'      => 'pending',
        ]);

        $dayLabel = Carbon::parse($request->date)->locale('ar')->isoFormat('dddd D MMMM');
        Alert::success(
            'تم التسجيل ✓',
            'تم تسجيل راحتك يوم ' . $dayLabel . ' بنجاح يا ' . $employee->name
        );
        return redirect()->route('dayoff.index');
    }

    // ======================== الأدمن ========================

    public function adminIndex()
    {
        $dayoffs = DayOff::with('employee.job')
            ->orderBy('date', 'ASC')
            ->get();

        $title = 'Delete row !';
        $text  = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('dasboard.pages.DayOff.dayoff_admin_index', compact('dayoffs'));
    }

    /**
     * تغيير حالة الطلب — POST عادي
     */
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected',
        ]);

        $dayOff = DayOff::findOrFail($id);
        $dayOff->status = $request->status;
        $dayOff->save();

        Alert::success('تم التحديث', 'تم تحديث حالة الطلب بنجاح');
        return redirect()->route('dashboard.dayoff.index');
    }

    public function destroy($id)
    {
        DayOff::findOrFail($id)->delete();
        Alert::success('تم الحذف', 'تم حذف الطلب بنجاح');
        return redirect()->back();
    }
}

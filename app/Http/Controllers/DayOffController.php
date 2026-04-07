<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\DayOff;
use App\Models\Employees;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DayOffController extends Controller
{
    /**
     * صفحة الموظف العامة - بدون لوجين
     */
    public function index()
    {
        $days = collect();
        for ($i = 0; $i < 15; $i++) {
            $day = Carbon::today()->addDays($i);

            // ✅ الإصلاح: بس pending أو approved يعتبر محجوز
            // لو rejected → اليوم يتفتح تاني
            $bookedEntry = DayOff::where('date', $day->toDateString())
                ->whereIn('status', ['pending', 'approved'])
                ->with('employee')
                ->first();

            $days->push([
                'date'      => $day,
                'date_str'  => $day->toDateString(),
                'day_name'  => $day->locale('ar')->isoFormat('dddd'),
                'day_num'   => $day->format('d'),
                'month'     => $day->locale('ar')->isoFormat('MMMM'),
                'is_booked' => $bookedEntry ? true : false,
                'booked_by' => $bookedEntry ? $bookedEntry->employee->name : null,
                'status'    => $bookedEntry ? $bookedEntry->status : null,
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

        // التحقق من رقم الموظف
        $employee = Employees::where('code', $request->employee_code)->first();

        if (!$employee) {
            Alert::error('خطأ', 'رقم الموظف غير صحيح، تأكد من الرقم وحاول مرة تانية');
            return back()->withInput();
        }

        // التحقق إن اليوم مش محجوز (pending أو approved بس)
        $existing = DayOff::where('date', $request->date)
            ->whereIn('status', ['pending', 'approved'])
            ->first();

        if ($existing) {
            Alert::error('اليوم محجوز', 'الموظف ' . $existing->employee->name . ' حجز الراحة في اليوم ده قبلك');
            return back()->withInput();
        }

        // التحقق إن الموظف مش عنده حجز تاني في المستقبل
        $myExisting = DayOff::where('employee_id', $employee->id)
            ->whereIn('status', ['pending', 'approved'])
            ->where('date', '>=', Carbon::today())
            ->first();

        if ($myExisting) {
            Alert::error(
                'عندك راحة مسجلة',
                'عندك راحة مسجلة بالفعل يوم ' . $myExisting->date->locale('ar')->isoFormat('dddd D MMMM')
            );
            return back()->withInput();
        }

        DayOff::create([
            'employee_id' => $employee->id,
            'date'        => $request->date,
            'status'      => 'pending',
        ]);

        Alert::success(
            'تم التسجيل',
            'تم تسجيل راحتك يوم ' . Carbon::parse($request->date)->locale('ar')->isoFormat('dddd D MMMM') . ' بنجاح يا ' . $employee->name
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
        // return view('dasboard.pages.DayOff.admin_index', compact('dayoffs'));
    }

    /**
     * ✅ الإصلاح: POST عادي بدل PATCH — بيشتغل صح مع الـ select
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

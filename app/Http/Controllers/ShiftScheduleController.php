<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Jobs;
use App\Models\ShiftSchedule;
use Illuminate\Http\Request;

class ShiftScheduleController extends Controller
{
    public function index()
    {
        $date = request('date', today()->toDateString());
        $jobs = Jobs::all();
        $selectedJobId = request('job_id');
        $employees = collect();
        $schedules = collect();

        if ($selectedJobId) {
            $employees = Employees::where('job_id', $selectedJobId)->get();
            $schedules = ShiftSchedule::where('date', $date)
                ->where('job_id', $selectedJobId)
                ->get()
                ->keyBy('employee_id');
        }

        return view('dasboard.pages.ShiftSchedule.index', compact(
            'jobs',
            'employees',
            'schedules',
            'date',
            'selectedJobId'
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'date'   => 'required|date',
            'job_id' => 'required',
        ]);

        // حذف بيانات اليوم ده للوظيفة دي وإعادة الحفظ
        ShiftSchedule::where('date', $request->date)
            ->where('job_id', $request->job_id)
            ->delete();

        if ($request->shifts) {
            foreach ($request->shifts as $employee_id => $shift_start) {
                if (!empty($shift_start)) {
                    ShiftSchedule::create([
                        'date'        => $request->date,
                        'employee_id' => $employee_id,
                        'job_id'      => $request->job_id,
                        'shift_start' => $shift_start,
                    ]);
                }
            }
        }

        return redirect()->route('dashboard.shift_schedule.index', [
            'date'   => $request->date,
            'job_id' => $request->job_id,
        ])->with('success', 'تم حفظ الجدول بنجاح ✅');
    }
}

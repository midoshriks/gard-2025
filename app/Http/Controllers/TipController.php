<?php

namespace App\Http\Controllers;

use App\Models\Tip;
use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreTipRequest;
use App\Http\Requests\UpdateTipRequest;
use App\Models\Jobs;
use RealRashid\SweetAlert\Facades\Alert;

class TipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // هات الموظفين
        $CapId = Jobs::where('name', 'Captain')->first();
        $WaiterId = Jobs::where('name', 'Waiter')->first();
        $BusBoyId = Jobs::where('name', 'Bus Boy')->first();


        // dd($CapId->id, $WaiterId->id, $BusBoyId->id);
        $employees = Employees::whereIn('job_id', [$CapId->id, $WaiterId->id, $BusBoyId->id])->get();
        // $employees = User::all(); // أو Employee::all() لو بتسميهم Employee

        // هات التواريخ المميزة
        $dates = Tip::selectRaw('DATE(date) as date')
            ->distinct()
            ->orderBy('date')
            ->pluck('date');

        // هات التيبس واجمعهم date -> employe_id
        $tips = Tip::select('employe_id', 'amount', DB::raw('DATE(date) as date'))
            ->get()
            ->groupBy(['date', 'employe_id']);

        return view('dasboard.pages.Tips.index', compact('dates', 'employees', 'tips'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $CapId = Jobs::where('name', 'Captain')->first();
        $WaiterId = Jobs::where('name', 'Waiter')->first();
        $BusBoyId = Jobs::where('name', 'Bus Boy')->first();

        // dd($CapId->id, $WaiterId->id, $BusBoyId->id);
        $employees = Employees::whereIn('job_id', [$CapId->id, $WaiterId->id, $BusBoyId->id])->get();
        // $employees = Employees::whereIn('job_id', ['8', '9'])->get();

        return view('dasboard.pages.Tips.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTipRequest $request)
    {
        $request->validate([
            'date' => 'required|date',
            'amounts' => 'required|array',
            'amounts.*' => 'nullable|numeric'
        ]);


        // تحقق هل التاريخ موجود قبل كده
        $exists = Tip::whereDate('date', $request->date)->exists();
        if ($exists) {
            Alert::toast('هذا التاريخ مدخل بالفعل. لا يمكن تكرار الإدخال.', 'error');
            return back();
        }

        // لو التاريخ مش موجود يبدأ يسجل
        foreach ($request->amounts as $employe_id => $amount) {
            if (!is_null($amount) && $amount != '') {
                Tip::create([
                    'employe_id' => $employe_id,
                    'amount' => $amount,
                    'date' => $request->date
                ]);
            }
        }

        Alert::toast('تم إضافة البيانات بنجاح', 'success');
        return redirect()->route('dashboard.tip.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tip $tip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tip $tip, $date)
    {
        // dd($tip);
        $CapId = Jobs::where('name', 'Captain')->first();
        $WaiterId = Jobs::where('name', 'Waiter')->first();
        $BusBoyId = Jobs::where('name', 'Bus Boy')->first();

        // dd($CapId->id, $WaiterId->id, $BusBoyId->id);
        $employees = Employees::whereIn('job_id', [$CapId->id, $WaiterId->id, $BusBoyId->id])->get();

        // $employees = Employees::whereIn('job_id', ['8', '9'])->get();

        // هات التيبس حسب التاريخ
        $tips = Tip::whereDate('date', $date)->get()->keyBy('employe_id');

        return view('dasboard.pages.Tips.edit', compact('employees', 'tips', 'date'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTipRequest $request, Tip $tip, $date)
    {
        $request->validate([
            'amounts' => 'required|array',
            'amounts.*' => 'nullable|numeric'
        ]);

        foreach ($request->amounts as $employe_id => $amount) {
            if (!is_null($amount) && $amount !== '') {
                Tip::updateOrCreate(
                    ['employe_id' => $employe_id, 'date' => $date],
                    ['amount' => $amount]
                );
            }
        }

        return redirect()->route('dashboard.tip.index', $tip->date)->with('تم تحديث البيانات بنجاح.', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tip $tip, $date)
    {
        Tip::whereDate('date', $date)->delete();

        return redirect()->route('dashboard.tip.index')->with('تم حذف بيانات اليوم بنجاح.', 'success');
    }

    public function delets(Request $request)
    {
        $this->validate($request, [
            'ids' => 'required',
        ]);
        $ids = $request->ids;
        // dd($ids);

        tip::whereIn('id', $ids)->delete();

        Alert::toast('deleted successfully all',);
        return redirect()->route('dashboard.tip.index');
    }

    public function leaderboard()
    {
        $employees = DB::table('tips')
            ->select('employe_id', DB::raw('SUM(amount) as total_amount'))
            ->groupBy('employe_id')
            ->orderByDesc('total_amount')
            ->get();

        // هات بيانات الموظفين عشان نجيب أسمائهم
        $employees = $employees->map(function ($item) {
            $employee = Employees::find($item->employe_id);
            $item->name = $employee ? $employee->name : 'غير معروف';
            return $item;
        });

        return view('dasboard.pages.Tips.leaderboard', compact('employees'));
    }
}

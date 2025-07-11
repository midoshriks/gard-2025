<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Employees;
use Illuminate\Http\Request;
use App\Exports\EmployeesExport;
use App\Imports\EmployeesImport;
use App\Http\Controllers\Controller;
use App\Models\Jobs;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employees::orderby('job_id', 'ASC')->get();

        // dd('',);
        $title = 'Delete row ' . '!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('dasboard.pages.Employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'jobs' => Jobs::all(),
        ];
        return view('dasboard.pages.Employees.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employee = new Employees();
        $employee->name = $request->name;
        $employee->job_id = $request->job_id;
        $employee->code = $request->code;
        $employee->save();

        Alert::toast('add successfully',);
        return redirect()->route('dashboard.employees.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employees $employees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employees $employees, $id)
    {
        $employee  = Employees::find($id);
        $data = [
            'jobs' => Jobs::all(),
        ];

        return view('dasboard.pages.Employees.edit', compact('data', 'employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employees $employees, $id)
    {
        $employee  = Employees::find($id);
        $employee->name = $request->name;
        $employee->job_id = $request->job_id;
        $employee->code = $request->code;
        $employee->update();

        Alert::toast('Update successfully',);
        return redirect()->route('dashboard.employees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employees $employees, $id)
    {
        $employee = Employees::find($id)->delete();
        // dd($employee);
        Alert::toast('Delete successfully',);
        return redirect()->route('dashboard.employees.index');
    }

    /**
     * Export Data Excel.
     */
    public function exportexcel()
    {
        return Excel::download(new EmployeesExport, 'employees.xlsx');
    }

    public function importexcel(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
        ]);

        // تحديد المسار داخل مجلد public
        $fileName = $request->file('file')->getClientOriginalName() . '.' . time() . '.' . $request->file('file')->getClientOriginalExtension();
        $filePath = $request->file('file')->move(public_path('uploads/excel'), $fileName);

        // استيراد الملف من المسار
        Excel::import(new EmployeesImport, $filePath);

        Alert::toast('successfully Import file',);
        return redirect()->back();

        // $data = $request->file('file');

        // $namefile = $data->getClientOriginalName();
        // $data->move('uploads/excel/', $namefile);
        // // dd($data);

        // Excel::import(new EmployeesImport, \public_path('uploads/excel/' . $namefile));

        // Alert::toast('successfully Import file',);

        // return redirect()->back();
    }

    public function delets(Request $request)
    {
        $this->validate($request, [
            'ids' => 'required',
        ]);

        $ids = $request->ids;

        // Answer::whereIn('question_id', $ids)->delete();
        Employees::whereIn('id', $ids)->delete();
        // $ids->answers()->delete();

        Alert::toast('deleted successfullyall',);
        return redirect()->route('dashboard.employees.index');
    }
}

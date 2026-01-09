<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Jobs;
use App\Models\Employees;
use App\Models\CashierPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class CashierPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cashierposts = CashierPost::all();

        // dd('',);
        $title = 'Delete row ' . '!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('dasboard.pages.CashierPost.index', compact('cashierposts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $CashierId = Jobs::where('name', 'Cashier')->first();

        $data = [
            'cashiers' =>  Employees::whereIn('job_id', [$CashierId->id])->get(),
        ];
        return view('dasboard.pages.CashierPost.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'date' => 'required|date',
        ]);

        $cashierpost = new CashierPost();
        $cashierpost->date = $request->date;
        $cashierpost->employe_id = $request->employe_id;
        $emploeey_name = Employees::whereIn('id', [$request->employe_id])->first();
        // dd($emploeey_name);
        $cashierpost->name = $emploeey_name->name;
        $cashierpost->totalepost = $request->totalepost;
        $cashierpost->mandate = $request->mandate;
        $cashierpost->memoirs = $request->memoirs;
        $cashierpost->purchases = $request->purchases;
        // dd($cashierpost);
        $cashierpost->save();

        Alert::toast('تم إضافة البيانات بنجاح', 'success');
        return redirect()->route('dashboard.cashierpost.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(CashierPost $cashierPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CashierPost $cashierPost, $id)
    {
        // dd($cashierPost);
        $cashierpost = CashierPost::findOrFail($id);

        $CashierId = Jobs::where('name', 'Cashier')->first();

        $data = [
            'cashiers' => Employees::whereIn('job_id', [$CashierId->id])->get(),
        ];

        return view('dasboard.pages.CashierPost.edit', compact('cashierpost', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CashierPost $cashierPost,$id)
    {
        // dd($request->all());
        $request->validate([
            'date' => 'required|date',
        ]);

        $cashierpost = CashierPost::findOrFail($id);
        // dd($cashierpost);

        $cashierpost->date = $request->date;
        $cashierpost->employe_id = $request->employe_id;
        $emploeey_name = Employees::whereIn('id', [$request->employe_id])->first();
        // dd($emploeey_name);
        $cashierpost->name = $emploeey_name->name;
        $cashierpost->totalepost = $request->totalepost;
        $cashierpost->mandate = $request->mandate;
        $cashierpost->memoirs = $request->memoirs;
        $cashierpost->purchases = $request->purchases;
        // dd($cashierpost);
        $cashierpost->update();

        Alert::toast('تم تحديث البيانات بنجاح', 'success');
        return redirect()->route('dashboard.cashierpost.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CashierPost $cashierPost)
    {
        //
    }
}

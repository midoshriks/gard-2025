<?php

namespace App\Http\Controllers\Gard;

use Illuminate\Http\Request;
use App\Models\SweetProduction;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class SweetProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sweet_productions = SweetProduction::orderBy('date_A', 'ASC')->get();
        // $sweet_productions = SweetProduction::all();

        $milka = SweetProduction::all();

        // count  milka
        $count_milka = 0;
        foreach ($sweet_productions as $value) {
            $count_milka += $value->pure_milka_B;
        }

        // count boxes
        $count_boxes = 0;
        foreach ($sweet_productions as $value) {
            # code...
            $count_boxes += $value->boxes_C;
        }

        $title = 'Delete row ' . '!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        // dd($milka, $count_boxes);

        // dd($sweet_productions);
        return view('dasboard.pages.SweetProduction.index', compact('sweet_productions', 'count_milka', 'count_boxes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'date_A' => 'required|date|unique:sweet_productions,date_A,except,date_A',
            'pure_milka_B' => 'required|integer',
            'boxes_C' => 'required|integer',
        ]);

        // dd($request->all(), $sweet_productions);
        $sweet_productions = new SweetProduction();
        $sweet_productions->date_A = $request->date_A;
        $sweet_productions->pure_milka_B = $request->pure_milka_B;
        $sweet_productions->boxes_C = $request->boxes_C;
        $sweet_productions->convert_from_D = $request->convert_from_D;
        $sweet_productions->convert_to_E = $request->convert_to_E;
        $sweet_productions->harmony_F = $request->harmony_F;
        $sweet_productions->a_cook_G = $request->a_cook_G;
        $sweet_productions->save();

        return redirect()->route('dashboard.sweetProduction.index');

        // return view('dasboard.pages.SweetProduction.index', compact('sweet_productions'));
    }

    /**
     * Display the specified resource.
     */
    public function show(SweetProduction $sweetProduction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SweetProduction $sweetProduction)
    {
        $sweet_product = SweetProduction::find($sweetProduction->id);
        return view('dasboard.pages.SweetProduction.edit', compact('sweet_product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SweetProduction $sweetProduction)
    {
        // dd($request->all());

        $sweet_product = SweetProduction::find($sweetProduction->id);
        $sweet_product->date_A = $request->date_A;
        $sweet_product->pure_milka_B = $request->pure_milka_B;
        $sweet_product->boxes_C = $request->boxes_C;
        $sweet_product->convert_from_D = $request->convert_from_D;
        $sweet_product->convert_to_E = $request->convert_to_E;
        $sweet_product->harmony_F = $request->harmony_F;
        $sweet_product->a_cook_G = $request->a_cook_G;
        $sweet_product->update();

        return redirect()->route('dashboard.sweetProduction.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SweetProduction $sweetProduction)
    {
        $sweet_product = SweetProduction::find($sweetProduction->id)->delete();
        // session()->flash('success',trans('record deleted successfully'));
        return redirect()->back();
    }

    public function delets(Request $request)
    {
        $this->validate($request, [
            'ids' => 'required',
        ]);

        $ids = $request->ids;

        SweetProduction::whereIn('id', $ids)->delete();

        Alert::toast('deleted successfully all',);
        return redirect()->route('dashboard.sweetProduction.index');
    }
}

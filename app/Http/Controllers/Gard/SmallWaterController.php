<?php

namespace App\Http\Controllers\Gard;

use App\Models\SmallWater;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class SmallWaterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $smallwaters = SmallWater::orderBy('date_A', 'ASC')->get();
        // $smallwaters = SmallWater::all();
        $row_first_term = SmallWater::all();

        // count disability
        $count_disability = 0;
        foreach ($smallwaters as $smallwater) {
            # code...
            $count_disability += $smallwater->disability_J;
        }
        // dd($count_disability);

        $title = 'Delete row ' . '!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('dasboard.pages.SmallWater.index', compact('smallwaters', 'row_first_term', 'count_disability'));
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
        // dd($request->all());

        $request->validate([
            'date_A' => 'required|date|unique:small_waters,date_A,except,date_A',
            'last_term_I' => 'required|integer',
        ]);

        $smallwater = new SmallWater();
        $smallwater->first_term_B = $request->first_term_B;

        if (!$smallwater->first_term_B) {
            $last_first_term = SmallWater::all();
            // dd($last_first_term->last()->last_term_I);
            $smallwater->first_term_B = $last_first_term->last()->last_term_I;
        }

        $smallwater->date_A = $request->date_A;
        $smallwater->sales_G = $request->sales_G;
        $smallwater->last_term_I = $request->last_term_I;
        $smallwater->harmony_F = $request->harmony_F;
        $smallwater->come_in_C = $request->come_in_C;
        $smallwater->convert_from_D = $request->convert_from_D;
        $smallwater->convert_to_E = $request->convert_to_E;
        $smallwater->save();

        // first term smallwater
        // if ($smallwater) {
        //     // = (I3)
        //     // $first_term = 0;

        //     $value = SmallWater::where('id', $smallwater->id)->first();
        //     $first_term = new SmallWater();
        //     $first_term->first_term_B = $value->last_term_I;
        //     $first_term->date_A = Carbon::now();
        //     $first_term->save();
        // }

        // residual smallwater
        if ($smallwater) {
            $residual = 0;
            // = (B3+C3+D3)-(E3+F3+G3)
            foreach ($smallwater as $value) {
                $value = SmallWater::where('id', $smallwater->id)->first();
                // dd($value);
                // dd($value->first_term_B , $value->come_in_C , $value->convert_from_D,  $value->convert_to_E , $value->harmony_F , $value->sales_G);
                $residual = ($value->first_term_B + $value->come_in_C + $value->convert_from_D) - ($value->convert_to_E + $value->harmony_F + $value->sales_G);
                // dd($residual);
                $value->residual_H = $residual;
                $value->update();
            }
        }


        // disability smallwater
        if ($smallwater) {
            // = (I3-H3)
            $disability = 0;

            foreach ($smallwater as $value) {
                # code...
                $value = SmallWater::where('id', $smallwater->id)->first();
                // dd($value->residual_H);
                // dd($value->last_term_I , $value->residual_H);
                $disability = ($value->last_term_I - $value->residual_H); // $value->residual() = $value->H
                $value->disability_j = $disability;
                // dd($disability);
                $value->update();
            }
        }

        // dd($smallwater);
        return redirect()->route('dashboard.smallwater.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(SmallWater $smallWater)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SmallWater $smallWater, $id)
    {
        $smallwater = SmallWater::find($id);
        $row_first_term = SmallWater::all();

        return view('dasboard.pages.SmallWater.edit', compact('smallwater', 'row_first_term'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SmallWater $smallWater, $id)
    {
        // dd($request->all());

        $request->validate([
            // 'date_A' => 'required|date|unique:small_waters,date_A,except,date_A',
            'last_term_I' => 'required|integer',
        ]);

        $smallwater =  SmallWater::find($id);
        $smallwater->first_term_B = $request->first_term_B;
        $smallwater->date_A = $request->date_A;
        $smallwater->sales_G = $request->sales_G;
        $smallwater->last_term_I = $request->last_term_I;
        $smallwater->harmony_F = $request->harmony_F;
        $smallwater->come_in_C = $request->come_in_C;
        $smallwater->convert_from_D = $request->convert_from_D;
        $smallwater->convert_to_E = $request->convert_to_E;
        $smallwater->update();

        // residual smallwater
        if ($smallwater) {
            $residual = 0;
            // = (B3+C3+D3)-(E3+F3+G3)
            foreach ($smallwater as $value) {
                $value = SmallWater::where('id', $smallwater->id)->first();
                // dd($value->first_term_B , $value->come_in_C , $value->convert_from_D,  $value->convert_to_E , $value->harmony_F , $value->sales_G);
                $residual = ($value->first_term_B + $value->come_in_C + $value->convert_from_D) - ($value->convert_to_E + $value->harmony_F + $value->sales_G);
                // dd($residual);
                $value->residual_H = $residual;
                $value->update();
            }
        }

        // disability smallwater
        if ($smallwater) {
            // = (I3-H3)
            $disability = 0;

            foreach ($smallwater as $value) {
                # code...
                $value = SmallWater::where('id', $smallwater->id)->first();
                // dd($value->residual_H);
                // dd($value->last_term_I , $value->residual_H);
                $disability = ($value->last_term_I - $value->residual_H); // $value->residual() = $value->H
                $value->disability_j = $disability;
                // dd($disability);
                $value->update();
            }
        }

        // if ($smallwater) {
        //     // = (I3)
        //     // $first_term = 0;
        //     $value = SmallWater::where('id', $smallwater->id)->first();
        //     $first_term = new SmallWater();
        //     $first_term->first_term_B = $value->last_term_I;
        //     $first_term->date_A = Carbon::now();
        //     $first_term->save();
        // }

        // dd($smallwater);
        return redirect()->route('dashboard.smallwater.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SmallWater $smallWater, $id)
    {
        // dd($id);
        $smallwater = SmallWater::find($id)->delete();
        // session()->flash('success',trans('record deleted successfully'));
        return redirect()->back();
    }

    public function delets(Request $request)
    {
        $this->validate($request, [
            'ids' => 'required',
        ]);

        $ids = $request->ids;

        SmallWater::whereIn('id', $ids)->delete();

        Alert::toast('deleted successfully all',);
        return redirect()->route('dashboard.smallwater.index');
    }
}

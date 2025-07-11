<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Section_Report;
use Illuminate\Http\Request;

class SectionReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $section_repots = Section_Report::all();

        // dd('', $section_repots);
        $title = 'Delete row ' . '!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('dasboard.pages.SectioneReports.index', compact('section_repots'));
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
        $section_repot = new Section_Report();
        $section_repot->name = $request->name;
        $section_repot->status = $request->status;
        $section_repot->save();

        // dd($section_repot,);

        return redirect()->route('dashboard.sections_repots.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Section_Report $section_Report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Section_Report $section_Report, $id)
    {
        $section_repot = Section_Report::find($id);

        return view('dasboard.pages.SectioneReports.edit', compact('section_repot'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Section_Report $section_Report, $id)
    {
        $section_repot = Section_Report::find($id);
        $section_repot->name = $request->name;
        $section_repot->status = $request->status;
        $section_repot->update();

        // dd($section_repot,);

        return redirect()->route('dashboard.sections_repots.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section_Report $section_Report, $id)
    {
        $section_Report = Section_Report::find($id)->delete();

        return redirect()->back();
    }
}

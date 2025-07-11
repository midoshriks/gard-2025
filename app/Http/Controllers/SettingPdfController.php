<?php

namespace App\Http\Controllers;

use App\Models\SettingPdf;
use Illuminate\Http\Request;

class SettingPdfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting_pdf = SettingPdf::all();

        $title = 'Delete row ' . '!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('dasboard.pages.Advances.setting_pdf.index', compact('setting_pdf'));
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
        $settingpdf = new SettingPdf();
        $settingpdf->month = $request->month;
        $settingpdf->branch_manager = $request->branch_manager;
        $settingpdf->save();

        // dd($settingpdf,);

        return redirect()->route('dashboard.setting_pdf.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(SettingPdf $settingPdf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SettingPdf $settingPdf)
    {
        $settingpdf = SettingPdf::find($settingPdf->id);
        return view('dasboard.pages.Advances.setting_pdf.edit', compact('settingpdf'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SettingPdf $settingPdf)
    {
        $settingpdf = SettingPdf::find($settingPdf->id);
        $settingpdf->month = $request->month;
        $settingpdf->branch_manager = $request->branch_manager;
        $settingpdf->update();

        // dd($settingpdf,);

        return redirect()->route('dashboard.setting_pdf.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SettingPdf $settingPdf)
    {
        $settingpdf = SettingPdf::find($settingPdf->id)->delete();
        return redirect()->back();
    }
}

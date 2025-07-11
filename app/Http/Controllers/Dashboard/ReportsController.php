<?php

namespace App\Http\Controllers\Dashboard;

use Mpdf\Mpdf;
use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Report::all();

        // dd('', $reports);
        $title = 'Delete row ' . '!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('dasboard.pages.Reports.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dasboard.pages.Reports.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $report = new Report();
        $report->date = $request->date;
        $report->name = $request->name;
        $report->title = $request->title;
        $report->branch = $request->branch;
        $report->body = $request->body;
        $report->section_report_id = 1;
        $report->save();
        // dd($report,);

        return redirect()->route('dashboard.reports.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    // public function show(Report $report, $id)
    {
        // $report = Report::where('id', $report->id)->first();
        // $report = Report::where('id', $id)->first();
        // dd($report->title);
        // return view('dasboard.pages.Reports.show', compact('report'));

        // Sample Arabic data
        $data = [
            // 'title' => 'تقرير باللغة العربية',
            // 'content' => 'هذا هو المحتوى الخاص بالتقرير ويحتوي على نصوص عربية.'
            $report = Report::where('id', $report->id)->first(),
        ];
        // return view('dasboard.pages.Reports.show', compact('report'));

        // Generate HTML from Blade view
        $html = View::make('dasboard/pages/Reports/show', compact('report'))->render();

        // Create an instance of the class:
        $mpdf = new Mpdf([
            'default_font' => 'dejavusans', // Use a font that supports Arabic
            'mode' => 'utf-8', // Set the PDF to support UTF-8
            // 'format' => 'A4',
            // 'format' => 'A4-L',
            'format' => [330, 536],
        ]);

        // Write the HTML to the PDF
        $mpdf->WriteHTML($html);

        // Output the PDF to the browser
        $mpdf->Output('report.pdf', 'I'); //* 'I' for inline display, 'D' for show
        // return $mpdf->Output('report.pdf', 'D'); //* 'I' for inline display, 'D' for download
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        $report = Report::where('id', $report->id)->first();

        return view('dasboard.pages.Reports.edit', compact('report'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Report $report)
    {
        $report = Report::find($report->id);
        $report->date = $request->date;
        $report->name = $request->name;
        $report->title = $request->title;
        $report->branch = $request->branch;
        $report->body = $request->body;
        $report->section_report_id = 1;
        $report->save();
        // dd($report,);

        return redirect()->route('dashboard.reports.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        $report->delete();
        // dd($report);
        return redirect()->route('dashboard.reports.index');
    }
}

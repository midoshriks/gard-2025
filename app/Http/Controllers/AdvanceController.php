<?php

namespace App\Http\Controllers;

use Mpdf\Mpdf;
use Mpdf\Tag\Br;
use App\Models\Job;
use App\Models\Jobs;
use App\Models\Advance;
// use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\SettingPdf;
use Illuminate\Http\Request;
use App\Exports\AdvanceExport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreAdvanceRequest;
use App\Http\Requests\UpdateAdvanceRequest;

class AdvanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Jobs::all();
        $advances = Advance::orderby('job_id', 'ASC')->get();

        // dd('',);
        $title = 'Delete row ' . '!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('dasboard.pages.Advances.index', compact('advances', 'jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jobs = Jobs::all();
        $advnames = Advance::all();

        return view('dasboard.pages.Advances.create_developer', compact('jobs', 'advnames'));
        // return view('dasboard.pages.Advances.create_blank', compact('jobs', 'advnames'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdvanceRequest $request)
    {
        $request->validate([
            'name_employee' => 'required|string|unique:advances,name_employee',
            'amount' => 'required|integer',
        ]);

        $advance = new Advance();
        $advance->name_employee = $request->name_employee;
        $advance->amount = $request->amount;
        $advance->job_id = $request->job_id;
        $advance->save();
        if (!Auth::user()) {
            // dd($advance);
            $advance = Advance::where('id', $advance->id)->first();
            // dd($advance, Auth::user());
            Alert::toast('Successfully responding to your advance request ' . $advance->name_employee,);
            return view('dasboard.pages.Advances.thinkes', compact('advance'));
        }
        // dd($advance,);

        Alert::toast('Successfully responding to your advance request');
        return redirect()->route('dashboard.advance.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Advance $advance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Advance $advance)
    {
        $jobs = Jobs::all();
        $advance = Advance::find($advance->id);

        return view('dasboard.pages.Advances.edit', compact('advance', 'jobs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdvanceRequest $request, Advance $advance)
    {
        $advance = Advance::find($advance->id);
        $advance->name_employee = $request->name_employee;
        $advance->amount = $request->amount;
        $advance->job_id = $request->job_id;
        // dd($advance);
        $advance->update();

        return redirect()->route('dashboard.advance.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Advance $advance)
    {
        $advance = Advance::find($advance->id)->delete();

        return redirect()->back();
    }

    /**
     * Export Data Excel.
     */
    public function exportexcel()
    {

        return Excel::download(new AdvanceExport, 'advance.xlsx');
        // return Excel::download(new AdvanceExport, 'advance.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }


    /**
     * Pdf Data pdf.
     */
    public function exportpdf()
    {
        // Sample Arabic data
        $data = [
            // 'title' => 'تقرير باللغة العربية',
            // 'content' => 'هذا هو المحتوى الخاص بالتقرير ويحتوي على نصوص عربية.'
            'advances' => Advance::orderby('job_id', 'ASC')->get(),
            // 'advances' => DB::table('advances')->orderby('job_id', 'ASC')->get(),
            'settingpdf' => SettingPdf::all(),
        ];

        // Generate HTML from Blade view
        $html = View::make('dasboard/pages/Advances/advance_pdf', $data)->render();
        // $html = View::make('dasboard/pages/Advances/advance_pdf', compact('data'))->render();

        // Create an instance of the class:
        $mpdf = new Mpdf([
            'default_font' => 'dejavusans', // Use a font that supports Arabic
            'mode' => 'utf-8', // Set the PDF to support UTF-8
            // 'format' => 'A4',
            // 'format' => 'A4-L',
            'format' => [310, 736],
        ]);

        // Write the HTML to the PDF
        $mpdf->WriteHTML($html);

        // Output the PDF to the browser
        $mpdf->Output('report.pdf', 'I'); //* 'I' for inline display, 'D' for show
        // return $mpdf->Output('report.pdf', 'D'); //* 'I' for inline display, 'D' for download

        //* =================================================================================================================


        // $data = [
        //     'title' => 'مرحبا بالعالم',
        //     'content' => 'هذا نص تجريبي لإختبار PDF باللغة العربية في لارافيل.'
        // ];

        // $pdf = Pdf::loadView('dasboard/pages/Advances/advance_pdf', $data);

        // // Apply the Arabic font in the PDF
        // $pdf->setPaper('A4', 'portrait')
        //     ->setOptions(['isHtml5ParserEnabled' => true, 'isPhpEnabled' => true]);

        // return $pdf->download('arabic_document.pdf');

        //* =================================================================================================================

        // // Create an instance of mPDF
        // // Instantiate mPDF with custom configuration
        // $mpdf = new Mpdf([
        //     'default_font' => 'DejaVuSans', // Supports most Arabic and non-Latin characters
        //     'mode' => 'utf-8',
        // ]);

        // // Add content to the PDF
        // $htmlContent = '<h1>مرحبا بالعالم!</h1>';
        // $mpdf->WriteHTML($htmlContent);

        // // Output the PDF to browser or save it as a file
        // $mpdf->Output(); // To display in browser
        // // $mpdf->Output('document.pdf', \Mpdf\Output\Destination::FILE); // To save on the server

        // exit;

        //* =================================================================================================================
    }


    public function showEmployees(Request $request)
    {
        $jobId = $request->input('job');
        $jobs = Jobs::all(); // جلب جميع الوظائف
        // dd($jobs->employees);
        $employees = Jobs::find($jobId)?->employees ?? [];
        // dd($job_id,$employees);
        // $employees = Jobs::find($jobId)?->employees ?? [];

        $advances = Advance::orderby('job_id', 'ASC')->get();

        return view('dasboard.pages.Advances.create_developer', compact('jobs', 'employees', 'jobId', 'advances'));
    }

}

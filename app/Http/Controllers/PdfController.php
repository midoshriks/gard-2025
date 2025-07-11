<?php

namespace App\Http\Controllers;

use Mpdf\Mpdf;
use App\Models\SettingPdf;
use Illuminate\Http\Request;
use App\Models\SweetProduction;
use Illuminate\Support\Facades\View;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function sweet()
    {
        // Sample Arabic data
        $data = [
            // 'title' => 'تقرير باللغة العربية',
            // 'content' => 'هذا هو المحتوى الخاص بالتقرير ويحتوي على نصوص عربية.'
            'sweets' => SweetProduction::all(),
            'settingpdf' => SettingPdf::all(),
        ];

        // Generate HTML from Blade view
        $html = View::make('dasboard.pages.Pdf.pages.sweet_pdf', $data)->render();

        // Create an instance of the class:
        $mpdf = new Mpdf([
            'default_font' => 'dejavusans', // Use a font that supports Arabic
            'mode' => 'utf-8', // Set the PDF to support UTF-8
            // 'format' => 'A4',
            // 'format' => 'A4-L',
            'format' => [320, 536],
        ]);

        // Write the HTML to the PDF
        $mpdf->WriteHTML($html);

        // Output the PDF to the browser
        $mpdf->Output('report-sweet.pdf', 'I'); //* 'I' for inline display, 'D' for show
        // return $mpdf->Output('report-sweet.pdf', 'D'); //* 'I' for inline display, 'D' for download
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

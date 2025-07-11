<?php

namespace App\Exports;

use App\Models\Advance;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Contracts\View\View as ViewView;

class AdvanceExport implements
        FromCollection,
        // FromView,
        ShouldAutoSize
        // WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // 'advances' => Advance::orderby('job_id', 'ASC')->get();
        // $settingpdf = SettingPdf::all();
        return Advance::orderby('job_id', 'ASC')->get();
    }
}

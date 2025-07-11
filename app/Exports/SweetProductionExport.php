<?php

namespace App\Exports;

use App\Models\SweetProduction;
use Maatwebsite\Excel\Concerns\FromCollection;

class SweetProductionExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SweetProduction::all();
    }
}

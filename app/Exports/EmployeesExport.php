<?php

namespace App\Exports;

use App\Models\Employees;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Contracts\View\View as ViewView;


class EmployeesExport implements
    // FromCollection,
    FromView,
    ShouldAutoSize
    // WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    // public function headings(): array
    // {
    //     return ["#", "questios", "type", "level", "answer 1", "answer 2", "answer 3", "answer 4", "correct"];
    // }

    public function view(): ViewView
    {
        return view('dasboard.pages.Employees.export', [
            'employees' => Employees::all(),
        ]);
    }

    // public function collection()
    // {
    //     return Employees::all();
    // }
}

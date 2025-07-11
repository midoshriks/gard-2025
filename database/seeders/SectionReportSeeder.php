<?php

namespace Database\Seeders;

use App\Models\Section_Report;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $section_reports = [
            "1" => 'note',
            "2" => 'maintenance',
        ];

        foreach ($section_reports as  $section_report) {
            # code...
            Section_Report::create([
                "name" => $section_report,
            ]);
        }
    }
}

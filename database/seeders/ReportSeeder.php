<?php

namespace Database\Seeders;

use App\Models\Report;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $section_reports = [
            ["section_report_id" => '1', "name" => 'note money', "branch" => 'branch', "title" => 'title', "date"  => Carbon::parse('2024-12-19'), "body" => 'here masaage'],
            ["section_report_id" => '2', "name" => 'note maintenance', "branch" => 'branch', "title" => 'title', "date"  => Carbon::parse('2024-12-19'), "body" => 'here masaage'],
        ];

        foreach ($section_reports as $key => $value) {
            # code...
            Report::create($value);
        }
    }
}

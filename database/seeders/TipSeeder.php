<?php

namespace Database\Seeders;

use App\Models\Tip;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Tips = [
            ["date" => Carbon::parse('2025-07-5'), "employe_id" => '6', "amount" => '10'],
            ["date" => Carbon::parse('2025-07-5'), "employe_id" => '7', "amount" => '8'],
            ["date" => Carbon::parse('2025-07-5'), "employe_id" => '8', "amount" => '40'],
        ];

        foreach ($Tips as $tip) {
            # code...
            Tip::create($tip);
        }
    }
}

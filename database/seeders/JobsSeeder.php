<?php

namespace Database\Seeders;

use App\Models\Jobs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = [
            "1" => display('Manager'),
            "2" => display('Assistant Manager'),
            "3" => display('Supervisor Delivery'),
            "4" => display('Quality Control'),
            "5" => display('Control'),
            "6" => display('Supervisor'),
            "7" => display('Cashier'),
            "8" => display('Captain'),
            "9" => display('Waiter'),
            "10" => display('Front'),
            "11" => display('Salsagi'),
            "12" => display('cook'),
            "13" => display('Assistant cook'),
            "14" => display('Taker'),
            "15" => display('pilot'),
            "16" => display('security'),
            "17" => display('Steward'),
            "18" => display('technical'),
            "19" => display('Bus Boy'),

        ];
        foreach ($jobs as  $job) {
            # code...
            Jobs::create([
                "name" => display($job),
            ]);
        }
        // $jops = Jobs::
    }
}

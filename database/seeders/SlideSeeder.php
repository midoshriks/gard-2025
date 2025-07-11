<?php

namespace Database\Seeders;

use App\Models\Slide;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $slides = [
            ["name" => 'A'],
            ["name" => 'B'],
            ["name" => 'C'],
        ];

        foreach ($slides as $slide) {
            # code...
            Slide::create($slide);
        }
    }
}

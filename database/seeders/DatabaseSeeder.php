<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Rol;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(RolSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(JobsSeeder::class);
        $this->call(GardSeeder::class);
        $this->call(SlideSeeder::class);
        $this->call(EmployeesSeeder::class);
        $this->call(SectionReportSeeder::class);
        $this->call(ReportSeeder::class);
        $this->call(TipSeeder::class);
    }
}

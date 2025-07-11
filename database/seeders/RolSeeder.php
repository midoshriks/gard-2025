<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rols = [
            "1" => 'Admin',
            "2" => 'Manager',
            "3" => 'user',
            "4" => 'Guset',
        ];
        foreach ($rols as  $rol) {
            # code...
            Rol::create([
                "name" => $rol,
            ]);
        }
    }
}

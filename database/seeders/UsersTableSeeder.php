<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // use account fixed data
        $admin = User::create([
            "name" => 'mido shriks',
            "email" => 'midoshriks36@gmail.com',
            "phone" => '01207200622',
            "whatsapp" => '01550344838',
            "code" => '449',
            "rol_id" => '1',
            "password" => bcrypt('12345678'),
        ]);

        $admin = User::create([
            "name" => 'moahmed said',
            "email" => 'moahmedsaid@gmail.com',
            "phone" => '01143938378',
            "whatsapp" => '01200792739',
            "code" => '3310',
            "rol_id" => '1',
            "password" => bcrypt('12345678'),
        ]);
    }
}

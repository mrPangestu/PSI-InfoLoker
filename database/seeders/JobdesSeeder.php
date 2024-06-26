<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class JobdesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('jobdescs')->insert([
            ['title' => 'Freelance'],
            ['title' => 'Sales'],
            ['title' => 'Staff Restoran'],
            ['title' => 'Pendidikan'],
            ['title' => 'IT'],
            ['title' => 'Admin'],
            ['title' => 'Marketing'],
            ['title' => 'Perhotelan'],
        ]);
    }
}

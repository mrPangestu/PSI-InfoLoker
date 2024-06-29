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
            ['title' => 'Freelance'], //1
            ['title' => 'Sales'], //2
            ['title' => 'Staff Restoran'], //3
            ['title' => 'Pendidikan'], //4
            ['title' => 'IT'], //5
            ['title' => 'Admin'], //6
            ['title' => 'Marketing'], //7
            ['title' => 'Perhotelan'], //8
            ['title' => 'Keuangan'], //9
        ]);
    }
}

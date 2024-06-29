<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('studies')->insert([
            ['title' => 'SMK/SMA/Sederajat'], //1
            ['title' => 'D3/D4'], //2
            ['title' => 'S1'], //3
            ['title' => 'S2'], //4
            ['title' => 'S3'], //5
        ]);
    }
}

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
            ['title' => 'SMK/SMA/Sederajat'],
            ['title' => 'D3/D4'],
            ['title' => 'S1'],
            ['title' => 'S2'],
            ['title' => 'S3'],
        ]);
    }
}

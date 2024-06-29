<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('jobs')->insert([
            [
                'jobdesc_id' => '5',
                'title' => 'FullStack Development',
                'company' => 'PT. Telkom (persero)',
                'desc_company' => 'Perusahaan dalam bidang Teknologi Informasi',
                'area' => 'Bandung',
                'type' => 'Fulltime',
                'location' => 'Kerja di Kantor (WFO)',
                'position' => 'Developer',
                'desc_job' => '1. Good looking 2. Kaya 3. Punya Pajero',
                'salary' => 10000000,
                'gender' => 'Laki-Laki',
                'age' => 25,
                'study_id' => 3,
                'experience' => '2',
                'workday_start' => 'Senin',
                'workday_end' => 'Jumat',
                'workhour_start' => '09:00:00',
                'workhour_end' => '17:00:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'jobdesc_id' => '7',
                'title' => 'Digital marketing',
                'company' => 'AHM ',
                'desc_company' => 'Perusahaan dalam bidang kendaraan',
                'area' => 'Jakarta',
                'type' => 'kontrak',
                'location' => 'Kerja di Rumah (WFH)',
                'position' => 'Bagian Pemasaran',
                'desc_job' => '1. Good looking',
                'salary' => 4000000,
                'gender' => 'Perempuan',
                'age' => 20,
                'study_id' => 1,
                'experience' => '1',
                'workday_start' => 'Senin',
                'workday_end' => 'Jumat',
                'workhour_start' => '09:00:00',
                'workhour_end' => '17:00:00',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}

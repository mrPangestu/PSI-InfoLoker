<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder1 extends Seeder
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
                'title' => 'Graphic Designer',
                'company' => 'Docilwork',
                'desc_company' => 'Perusahaan dalam bidang Otomotif',
                'area' => 'Bandung',
                'type' => 'Fulltime',
                'location' => 'Kerja di Kantor (WFO)',
                'position' => 'Disigner',
                'desc_job' => '1. Good looking,menyenangkan 2. Menguasai aplikasi adobe',
                'salary' => 2000000,
                'gender' => 'Laki-Laki',
                'age' => 22,
                'study_id' => 1,
                'experience' => '1',
                'workday_start' => 'Senin',
                'workday_end' => 'Jumat',
                'workhour_start' => '08:00:00',
                'workhour_end' => '16:00:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'jobdesc_id' => '5',
                'title' => 'Back-end Developer',
                'company' => 'PT. Mathema',
                'desc_company' => 'Perusahaan dalam bidang Teknologi',
                'area' => 'Bandung',
                'type' => 'Fulltime',
                'location' => 'Kerja di Kantor (WFO)',
                'position' => 'Developer',
                'desc_job' => '1. Good looking 2. Menguasai bahasa pemograman',
                'salary' => 8000000,
                'gender' => 'Laki-Laki',
                'age' => 24,
                'study_id' => 3,
                'experience' => '1',
                'workday_start' => 'Senin',
                'workday_end' => 'Jumat',
                'workhour_start' => '08:00:00',
                'workhour_end' => '16:00:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'jobdesc_id' => '6',
                'title' => 'Admin E-commers',
                'company' => 'PT. Surya',
                'desc_company' => 'Perusahaan dalam bidang makanan',
                'area' => 'Bandung',
                'type' => 'Fulltime',
                'location' => 'Kerja di Kantor (WFO)',
                'position' => 'Admin',
                'desc_job' => '1. Komunikasi yang bagus 2. Memahami market',
                'salary' => 2000000,
                'gender' => 'Perempuan',
                'age' => 22,
                'study_id' => 1,
                'experience' => '0',
                'workday_start' => 'Senin',
                'workday_end' => 'Jumat',
                'workhour_start' => '08:00:00',
                'workhour_end' => '16:00:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'jobdesc_id' => '5',
                'title' => 'Data Engineer',
                'company' => 'PT. Santosa',
                'desc_company' => 'Perusahaan dalam bidang IT consulting',
                'area' => 'Bandung',
                'type' => 'Fulltime',
                'location' => 'Kerja di Kantor (WFO)',
                'position' => 'Engineer',
                'desc_job' => '1. Good looking 2. Memahami dalam mengolah data',
                'salary' => 2000000,
                'gender' => 'Perempuan',
                'age' => 20,
                'study_id' => 3,
                'experience' => '1',
                'workday_start' => 'Senin',
                'workday_end' => 'Jumat',
                'workhour_start' => '08:00:00',
                'workhour_end' => '17:00:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'jobdesc_id' => '2',
                'title' => 'Sales Wifi',
                'company' => 'PT. Generasi',
                'desc_company' => 'Perusahaan dalam bidang Internet',
                'area' => 'Bandung',
                'type' => 'Fulltime',
                'location' => 'Kerja di Kantor (WFO)',
                'position' => 'Pemasaran',
                'desc_job' => '1. Good looking 2. Komunikasi yang bagus',
                'salary' => 2500000,
                'gender' => 'Perempuan',
                'age' => 22,
                'study_id' => 2,
                'experience' => '1',
                'workday_start' => 'Senin',
                'workday_end' => 'Jumat',
                'workhour_start' => '08:00:00',
                'workhour_end' => '17:00:00',
                'created_at' => now(),
                'updated_at' => now()
            ]
            ]);
    }
}

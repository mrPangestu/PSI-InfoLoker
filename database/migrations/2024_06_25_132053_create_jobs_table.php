<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id('job_id');
            $table->unsignedBigInteger('jobdesc_id');
            $table->string('title', 30);
            $table->string('company', 30);
            $table->text('desc_company')->nullable();

            $table->string('area', 30);
            $table->enum('type', ['Freelance', 'Magang', 'Part-time', 'Fulltime', 'Kontrak']);
            $table->enum('location', ['Kerja di Rumah (WFH)', 'Kerja di Kantor (WFO)']);
            $table->string('position', 20);
            $table->text('desc_job')->nullable();
            $table->decimal('salary', 10, 0)->nullable();

            $table->enum('gender', ['Semua', 'Laki-laki', 'Perempuan']);
            $table->tinyInteger('age')->nullable();
            $table->unsignedBigInteger('study_id');
            $table->tinyInteger('experience')->nullable();

            $table->enum('workday_start', ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu']);
            $table->enum('workday_end', ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu']);
            $table->time('workhour_start');
            $table->time('workhour_end');

            $table->timestamps();

            $table->foreign('jobdesc_id')->references('jobdesc_id')->on('jobdescs')->onDelete('cascade');
            $table->foreign('study_id')->references('study_id')->on('studies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}

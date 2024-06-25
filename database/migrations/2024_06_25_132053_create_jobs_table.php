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
            $table->string('location', 40);
            $table->unsignedBigInteger('study_id');
            $table->decimal('salary', 10, 0)->nullable();
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

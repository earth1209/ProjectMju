<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->bigIncrements('resume_id');
            $table->string('resume_name');
            $table->string('resume_lname');
            $table->double('resume_grade');
            $table->string('skill_id');
            $table->string('resume_contact');
            $table->timestamps('created_at');
            $table->string('rm_img');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resumes');

        Schema::drop("resumes");
    }
}

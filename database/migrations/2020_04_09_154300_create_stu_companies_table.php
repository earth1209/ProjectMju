<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStuCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stu_companies', function (Blueprint $table) {
            $table->bigIncrements('stu_companies_id');
            $table->bigInteger('students_id');
            $table->bigInteger('companies_id');
            $table->bigInteger('ct_status_id');
            $table->bigInteger('intern_stt_id');
            $table->integer('academic_year')->comment('ปีการศึกษา');
            $table->integer('term')->comment('เทอม');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stu_companies');
    }
}

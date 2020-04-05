<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternshipLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internship_location', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('student_id')->comment('ไอดีตารางนักศึกษา');
            $table->integer('company_id')->comment('ไอดีตารางบริษัท');
            $table->integer('contact_id')->comment('ไอดีตารางcontact');
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
        Schema::dropIfExists('internship_location');
    }
}

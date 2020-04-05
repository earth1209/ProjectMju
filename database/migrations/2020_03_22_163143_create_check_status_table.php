<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_status', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('student_id')->comment('ไอดีนศ.');
            $table->integer('check_status')->comment('ตรวจสอบฝึกงาน');
            $table->integer('student_options')->comment('ทางเลือกนศ.');
            $table->string('stu_internship_location')->comment('สถานที่ฝึกงานของนักศึกษา');
            $table->integer('contact_status')->comment('สถานะการติดต่อ');
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
        Schema::dropIfExists('check_status');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckSubjectStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_subject_statuses', function (Blueprint $table) {
            $table->bigIncrements('subject_stt_id');
            $table->string('subject_stt_name')->comment('ชื่อสถานะตรวจสอบวิชาบังคับ');
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
        Schema::dropIfExists('check_subject_statuses');
    }
}

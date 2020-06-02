<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckInternshipStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_internship_statuses', function (Blueprint $table) {
            $table->bigIncrements('internship_stt_id');
            $table->string('internship_stt_name')->comment('ชื่อสถานะตรวจสอบฝึกงาน');
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
        Schema::dropIfExists('check_internship_statuses');
    }
}

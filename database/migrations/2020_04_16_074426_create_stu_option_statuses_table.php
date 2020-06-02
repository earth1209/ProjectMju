<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStuOptionStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stu_option_statuses', function (Blueprint $table) {
            $table->bigIncrements('stu_option_stt_id');
            $table->string('stu_option_stt_name')->comment('ชื่อสถานะทางเลือกนักศึกษา');
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
        Schema::dropIfExists('stu_option_statuses');
    }
}

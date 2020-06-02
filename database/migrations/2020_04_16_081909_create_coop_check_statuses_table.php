<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoopCheckStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coop_check_statuses', function (Blueprint $table) {
            $table->bigIncrements('coop_check_stt_id');
            $table->string('coop_stt_name')->comment('ชื่อสถานะตรวจสอบสหกิจ');
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
        Schema::dropIfExists('coop_check_statuses');
    }
}

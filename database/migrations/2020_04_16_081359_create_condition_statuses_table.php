<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConditionStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condition_statuses', function (Blueprint $table) {
            $table->bigIncrements('cond_stt_id');
            $table->string('cond_stt_name')->comment('ชื่อสถานะเงื่อนไขหลังการฝึกงาน');
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
        Schema::dropIfExists('condition_statuses');
    }
}

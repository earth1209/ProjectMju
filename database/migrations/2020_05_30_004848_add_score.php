<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddScore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stu_companies', function (Blueprint $table) {
            $table->double('score', 8, 2)->comment('คะแนนประเมิน');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stu_companies', function (Blueprint $table) {
            $table->dropColumn('score');
        });
    }
}

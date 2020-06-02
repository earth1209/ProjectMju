<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStuOption extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stu_companies', function (Blueprint $table) {
            $table->integer('stu_option_stt_id');
            $table->integer('internship_stt_id');
            $table->integer('subject_stt_id');
            $table->integer('cond_stt_id');
            $table->integer('coop_check_stt_id');
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
            $table->dropColumn('stu_option_stt_id');
            $table->dropColumn('internship_stt_id');
            $table->dropColumn('subject_stt_id');
            $table->dropColumn('cond_stt_id');
            $table->dropColumn('coop_check_stt_id');
        });
    }
}

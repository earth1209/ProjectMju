<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stu_companies', function (Blueprint $table) {
            $table->string('comment')->comment('คอมเม้นบริษัท'); 
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
            $table->dropColumn('comment');
        });
    }
}

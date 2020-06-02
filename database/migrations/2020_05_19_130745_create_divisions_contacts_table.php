<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDivisionsContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divisions_contacts', function (Blueprint $table) {
            $table->bigIncrements('divisions_ct_id')->comment('ไอดีแผนกที่ติดต่อ');
            $table->string('division_name')->comment('ชื่อแผนกที่ติดต่อ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('divisions_contacts');
    }
}

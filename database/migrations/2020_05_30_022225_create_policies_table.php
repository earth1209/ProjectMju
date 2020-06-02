<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policies', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ไอดีpolicies'); 
            $table->text('name_acc')->comment('ชื่อแอคเคาท.'); 
            $table->string('field_name',20)->comment('ชื่อ name_accxx คอลัมน์ในเทเบิ้ล roles'); 
            $table->bigInteger('roles_id')->comment('ไอดีบทบาท.'); 
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
        Schema::dropIfExists('policies');
    }
}

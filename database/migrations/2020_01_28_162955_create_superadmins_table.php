<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuperadminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('superadmins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name_ac')->comment('สิทธิ์การเข้าถึง');
            $table->integer('officer')->unsigned()->comment('0=disable,1=view only,2=editable');
            $table->integer('student')->unsigned()->comment('0=disable,1=view only,2=editable');
            $table->integer('teacher')->unsigned()->comment('0=disable,1=view only,2=editable');
            $table->integer('company')->unsigned()->comment('0=disable,1=view only,2=editable');
            $table->integer('admin')->unsigned()->comment('0=disable,1=view only,2=editable');
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
        Schema::dropIfExists('superadmins');
    }
}

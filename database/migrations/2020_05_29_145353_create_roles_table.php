<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('role_name');
            $table->string('role_thai');
            $table->integer('name_acc01');
            $table->integer('name_acc02');
            $table->integer('name_acc03');
            $table->integer('name_acc04');
            $table->integer('name_acc05');
            $table->integer('name_acc06');
            $table->integer('name_acc07');
            $table->integer('name_acc08');
            $table->integer('name_acc09');
            $table->integer('name_acc10');
            $table->integer('name_acc11');
            $table->integer('name_acc12');
            $table->integer('name_acc13');
            $table->integer('name_acc14');
            $table->integer('name_acc15');
            $table->integer('name_acc16');
            $table->integer('name_acc17');
            $table->integer('name_acc18');
            $table->integer('name_acc19');
            $table->integer('name_acc20');
            $table->integer('name_acc21');
            $table->integer('name_acc22');
            $table->integer('name_acc23');
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
        Schema::dropIfExists('roles');
    }
}

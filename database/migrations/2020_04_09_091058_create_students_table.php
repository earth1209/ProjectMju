<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('students_id');
            $table->string('code');
            $table->string('stu_name');
            $table->double('gpa');
            $table->string('contact');
            $table->date('birthday');
            $table->integer('age');
            $table->string('gender');
            $table->string('nationality');
            $table->string('race');
            $table->string('language');
            $table->text('aim');
            $table->text('hobby');
            $table->text('education');
            $table->text('experience');
            $table->text('event');
            $table->string('maritalStatus');
            $table->string('img');
            $table->bigInteger('ct_status_id');
            $table->bigInteger('diaries_id');
            $table->bigInteger('users_id');
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
        Schema::dropIfExists('students');
    }
}

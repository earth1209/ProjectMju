<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmindbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admindbs', function (Blueprint $table) {
            $table->bigIncrements('idactors_as');
            $table->string('nameactors', 100);
            $table->integer('v_admissions_companies')->unsigned()->comment('0=disable,1=view only,2=editable');
            $table->integer('v_student_information')->unsigned()->comment('0=disable,1=view only,2=editable');
            $table->integer('v_student_journals')->unsigned()->comment('0=disable,1=view only,2=editable');
            $table->integer('v_student_scores')->unsigned()->comment('0=disable,1=view only,2=editable');
            $table->integer('v_student_GPA')->unsigned()->comment('0=disable,1=view only,2=editable');
            $table->integer('v_preparation_hours')->unsigned()->comment('0=disable,1=view only,2=editable');
            $table->integer('contact_students')->unsigned()->comment('0=disable,1=view only,2=editable');
            $table->integer('choose_place_students')->unsigned()->comment('0=disable,1=view only,2=editable');
            $table->integer('v_student_internships')->unsigned()->comment('0=disable,1=view only,2=editable');
            $table->integer('send_nformation_companies')->unsigned()->comment('0=disable,1=view only,2=editable');
            $table->integer('document_startdate_internship')->unsigned()->comment('0=disable,1=view only,2=editable');
            $table->integer('check_diaries_comments')->unsigned()->comment('0=disable,1=view only,2=editable');
            $table->integer('add_delete_edit')->unsigned()->comment('0=disable,1=view only,2=editable');
            $table->integer('staff_registration')->unsigned()->comment('0=disable,1=view only,2=editable');
            $table->integer('manage_documentation')->unsigned()->comment('0=disable,1=view only,2=editable');
            $table->integer('v_location_internshippast')->unsigned()->comment('0=disable,1=view only,2=editable');
            $table->integer('a_new_internshiplo')->unsigned()->comment('0=disable,1=view only,2=editable');
            $table->integer('c_record')->unsigned()->comment('0=disable,1=view only,2=editable');
            $table->integer('s_GPAhours_passornot')->unsigned()->comment('0=disable,1=view only,2=editable');
            $table->integer('c_internship')->unsigned()->comment('0=disable,1=view only,2=editable');
            $table->integer('v_information_select')->unsigned()->comment('0=disable,1=view only,2=editable');
            $table->integer('assess_students')->unsigned()->comment('0=disable,1=view only,2=editable');
            $table->integer('contact_staff')->unsigned()->comment('0=disable,1=view only,2=editable');
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
        Schema::dropIfExists('admindbs');
    }
}

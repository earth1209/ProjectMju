<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('companies_id');
            $table->string('companies_name')->comment('ชื่อบริษัท');
            $table->string('address')->comment('ที่อยู่บริษัท');
            $table->string('website')->comment('เว็บไซต์บริษัท');
            $table->bigInteger('location_id')->comment('ไอดีจังหวัดบริษัท');
            $table->bigInteger('divisions_ct_id')->comment('ไอดีแผนกที่มาติดต่อ');
            $table->bigInteger('users_id')->comment('ไอดี users');
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
        Schema::dropIfExists('companies');
    }
}

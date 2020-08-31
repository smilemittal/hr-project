<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('title');
            $table->string('employee_id');
            $table->string('user_name')->unique();
            $table->string('email')->unique();
            $table->string('company');
            $table->string('location');
            $table->string('department');
            $table->string('designation');
            $table->string('date_of_joining');
            $table->string('date_of_leaving');
            $table->string('role');
            $table->string('gender');
            $table->string('martial_status');
            $table->string('contact_number');
            $table->string('status');
            $table->string('office_shift');
            $table->string('date_of_birth');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('zip_code');
            $table->string('address');
            $table->string('profile_picture');
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
        Schema::dropIfExists('employee_registrations');
    }
}

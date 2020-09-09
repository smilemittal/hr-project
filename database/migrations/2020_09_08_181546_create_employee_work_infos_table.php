<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeWorkInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_work_infos', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id');
            $table->string('Company');
            $table->string('Branch');
            $table->string('Department');
            $table->string('Designation');
            $table->string('Date_of_joining');
            $table->string('Date_of_leaving');
            $table->string('Employee_Type');
            $table->string('Contract_Type');
            $table->string('Employee_id');
            $table->string('Manager');
            $table->string('Job_position');
            $table->string('Work_Mobile_no');
            $table->string('Work_phone_no');
            $table->string('Work_Email');
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
        Schema::dropIfExists('employee_work_infos');
    }
}

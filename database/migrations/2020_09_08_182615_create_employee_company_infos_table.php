<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeCompanyInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_company_infos', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id');
            $table->string('Company_Name');
            $table->string('Job_Profile');
            $table->string('Joining_Date');
            $table->string('Leaving_Date');
            $table->string('Remarks');
            $table->string('status');
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
        Schema::dropIfExists('employee_company_infos');
    }
}

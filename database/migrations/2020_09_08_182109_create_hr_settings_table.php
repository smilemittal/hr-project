<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hr_settings', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id');
            $table->string('Office_Shift');
            $table->string('User_Name');
            $table->string('Role');
            $table->string('payrole');
            $table->string('Timesheet_Cost');
            $table->string('Annual_Gross_Salary');
            $table->string('Attendance');
            $table->string('Badge_ID');
            $table->string('Manual_Attendance');
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
        Schema::dropIfExists('hr_settings');
    }
}

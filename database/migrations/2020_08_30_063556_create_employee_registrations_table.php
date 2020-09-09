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
            $table->string('First_Name');
            $table->string('Middle_Name');
            $table->string('Last_Name');
            $table->string('Title');
            $table->string('Email');
            $table->string('Marital_Status');
            $table->string('Contact_Mobile_Number');
            $table->string('Contact_phone_Number');
            $table->string('Date_of_birth');
            $table->string('House_Number');
            $table->string('House_Name');
            $table->string('Street');
            $table->string('City');
            $table->string('CountryState');
            $table->string('Post_Code');
            $table->string('Country');
            $table->string('Work_Permit_No');
            $table->string('Nationality');
            $table->string('Identification_No');
            $table->string('Visa_No');
            $table->string('Visa_Expiry_Date');
            $table->string('Blood_Group');
            $table->string('Bank_Account_Name');
            $table->string('Bank_Short_Code');
            $table->string('Bank_Account_Number');
            $table->string('Bank_IFSC_Code');
            $table->string('Bank_IBAN_Code');
            $table->string('profile_image');
            $table->string('status')->default('active');
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactAddressInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_address_information', function (Blueprint $table) {
            $table->id();
            $table->integer('contact_id');
            $table->enum('type',['Corrospondance' ,'Invoice', 'Registered', 'Shipping', 'Other'])->defalut('Registered');
            $table->string('house_number');
            $table->string('house_name');
            $table->string('address_info')->nullable();
            $table->string('street')->nullable();
            $table->integer('city_id');
            $table->integer('state_id');
            $table->integer('country_id');
            $table->string('pincode');
            $table->string('mobile');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
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
        Schema::dropIfExists('contact_address_information');
    }
}

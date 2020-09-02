<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('company_name');
            $table->string('vat');
            $table->string('address_1');
            $table->string('address_2')->nullable();
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('mobile');
            $table->unsignedInteger('country_id');
            $table->unsignedInteger('state_id');
            $table->string('city');
            $table->string('zip_code');
            $table->string('website_url')->nullable();
            $table->string('logo')->nullable();
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

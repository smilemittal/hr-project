<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('company_id');
            $table->string('branch_name');
            $table->string('address_1');
            $table->string('address_2')->nullable();
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('mobile');
            $table->unsignedInteger('country_id');
            $table->unsignedInteger('state_id');
            $table->string('city');
            $table->string('zip_code');
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
        Schema::dropIfExists('branches');
    }
}

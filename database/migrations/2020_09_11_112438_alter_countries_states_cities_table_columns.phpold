<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCountriesStatesCitiesTableColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('countries', function (Blueprint $table) {
            $table->string('status')->default('active')->change();
            $table->string('code');
            $table->integer('phonecode');
        });
      
        Schema::table('states', function (Blueprint $table) {
            $table->string('status')->default('active')->change();
            $table->dropUnique('states_value_unique');
        });
        Schema::table('cities', function (Blueprint $table) {
            $table->string('status')->default('active')->change();
            $table->dropUnique('cities_value_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('countries', function (Blueprint $table) {
           
            $table->string('status')->change();
            $table->dropColumn('code');
            $table->dropColumn('phonecode');

        });
        Schema::table('states', function (Blueprint $table) {
          $table->string('value')->unique()->change();
            $table->string('status')->change();
        });
        Schema::table('cities', function (Blueprint $table) {
             $table->string('value')->unique()->change();
            $table->string('status')->change();
        });
    }
}

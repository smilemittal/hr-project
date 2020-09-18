<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCompaniesTableRenameCityColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->renameColumn('city', 'city_id');
        });
        Schema::table('branches', function (Blueprint $table) {
            $table->renameColumn('city', 'city_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->renameColumn('city_id', 'city');
        });
         Schema::table('branches', function (Blueprint $table) {
            $table->renameColumn('city_id', 'city');
        });
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotographerAndAdminNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photographer_and_admin_notes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('pgh_studio');
            $table->string('pgh_availability');
            $table->string('pgh_Equipment');
            $table->text('pgh_about_lbo');
            $table->text('pgh_note');
            $table->text('pgh_bio');
            $table->text('pgh_formal_education');
            $table->text('pgh_famous_client');
            $table->text('pgh_customer_comfertable');
            $table->text('pgh_fvrt_location');
            $table->text('pgh_about_studio');
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
        Schema::dropIfExists('photographer_and_admin_notes');
    }
}

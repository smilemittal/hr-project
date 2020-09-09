<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotographerExtraInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photographer_extra_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('available_on_location');
            $table->string('drive_distance');
            $table->string('hair_makeup_price');
            $table->text('any_comment');
            $table->string('pager');
            $table->string('dob');
            $table->string('agreed_with_tc');
            $table->string('amare')->nullable();
            $table->string('brainiacdating')->nullable();
            $table->string('christiancafe')->nullable();
            $table->string('cupidscoach')->nullable();
            $table->string('e_cyran')->nullable();
            $table->string('facebook')->nullable();
            $table->string('find_a_sweethear')->nullable();
            $table->string('fitness-singles')->nullable();
            $table->string('HurryDate')->nullable();
            $table->string('JDate')->nullable();
            $table->string('match')->nullable();
            $table->string('mate1')->nullable();
            $table->string('ourtime')->nullable();
            $table->string('personalads')->nullable();
            $table->string('photopro')->nullable();
            $table->string('profilehelper')->nullable();
            $table->string('seniorpeoplemeet')->nullable();
            $table->string('seniorsmeet')->nullable();
            $table->string('singleedition')->nullable();
            $table->string('singleshot')->nullable();
            $table->string('smartmanhunting')->nullable();
            $table->string('spiritualsingles')->nullable();
            $table->string('testing')->nullable();
            $table->string('therulesbook')->nullable();
            $table->string('vida')->nullable();
            $table->string('vida2')->nullable();
            $table->string('www')->nullable();
            $table->string('www1')->nullable();
            $table->string('www2')->nullable();
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
        Schema::dropIfExists('photographer_extra_information');
    }
}

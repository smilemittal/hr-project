<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('contact_type');
            $table->string('contact_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('job_position')->nullable();
            $table->string('business_info')->nullable();
            $table->string('business_classifications')->nullable();
            $table->string('account_status')->nullable();
            $table->text('tags')->nullable();
            $table->text('social_info')->nullable();
            $table->string('cxrm')->nullable();
            $table->text('other_information')->nullable();
            $table->string('photo')->nullable();
            $table->integer('parent_id')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('contacts');
    }
}

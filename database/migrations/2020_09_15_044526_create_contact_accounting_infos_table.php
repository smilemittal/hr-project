<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactAccountingInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_accounting_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('contact_id');
            $table->integer('sales_person');
            $table->string('account_receivable');
            $table->string('sales_price_list');
            $table->string('accounts_payable');
            $table->string('customer_payments_terms')->nullable();
            $table->string('vendor_payments_terms')->nullable();
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
        Schema::dropIfExists('contact_accounting_infos');
    }
}

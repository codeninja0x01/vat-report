<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxPayerAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_payer_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('region');
            $table->string('city');
            $table->string('zone');
            $table->string('woreda');
            $table->integer('kebele');
            $table->integer('house_no');
            $table->integer('po_box');
            $table->bigInteger('ph_num');
            $table->bigInteger('fax_number');
            $table->string('email_address');
            $table->integer('tax_payer_id')->unsigned();

           
            

            $table->timestamps();
        });

        Schema::table('tax_payer_addresses',function($table){
            $table->foreign('tax_payer_id')
            ->references('id')->on('tax_payers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tax_payer_addresses');
    }
}

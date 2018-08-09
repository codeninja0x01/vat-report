<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxPayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_payers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('tin');
            $table->string('trade_name');
            $table->double('service_income');
            $table->string('commencemement_of_bussiness');
            $table->string('business_activities');
            $table->integer('business_leg_status_id')->unsigned();
            $table->integer('registration_no')->unsigned();

            $table->timestamps();
        });

        Schema::table('tax_payers',function($table){
            $table->foreign('business_leg_status_id')
            ->references('id')->on('business_legal_status');
            $table->foreign('registration_no')->references('vat_reg_no')->on('registration_dept');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tax_payers');
    }
}

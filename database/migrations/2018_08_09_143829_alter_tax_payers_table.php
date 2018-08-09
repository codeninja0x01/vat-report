<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTaxPayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('tax_payers',function($table){
            $table->foreign('business_leg_status_id')
            ->references('id')->on('business_legal_status');
            $table->foreign('registration_no')->references('vat_reg_no')->on('registration_dept');
            $table->foreign('commitment_id')->references('id')->on('commitments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

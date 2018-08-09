<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxPayersCommitmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_payers_commitments', function (Blueprint $table) {
            $table->increments('id');

            $table->timestamps();
        });

        Schema::table('tax_payers_commitments',function($table){
            $table->foreign('tax_payer_id')->references('id')->on('tax_payers');
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
        Schema::dropIfExists('tax_payers_commitments');
    }
}

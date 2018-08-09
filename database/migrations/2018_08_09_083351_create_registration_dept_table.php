<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationDeptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_dept', function (Blueprint $table) {
            $table->increments('vat_reg_no');
            $table->string('tax-center');
            $table->integer('revenue_code');
            $table->string('tax_authority');
            $table->string('registration_type');
            // $table->date('created_at');
            $table->date('vat_reg_date');
            $table->string('common_revenue');
            $table->string('approved_by');
            $table->string('entered_by');
            $table->integer('commitment_id');


            // $table->foreign('commitment_id')->references('id')->on('commitments');
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
        Schema::dropIfExists('registration_dept');
    }
}

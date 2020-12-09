<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPaymentTransactionTableAddPayu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payment_transactions', function (Blueprint $table) {
            //
            $table->string('payuMoneyId')->nullable();
             $table->string('bank_ref_num')->nullable();
             $table->string('status')->nullable();
             $table->string('mihpayid')->nullable();
              $table->string('unmappedstatus')->nullable();
               $table->string('name_on_card')->nullable();
                 $table->string('cardnum')->nullable();
                  $table->string('mode')->nullable();
                

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payment_transactions', function (Blueprint $table) {
            //
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');  
            $table->char('payment_amount',10)->default(0);  
            $table->char('payment_method',1)->default(0); 
            //  0 = Offline 1 = Online
            $table->char('payment_status',1)->default(0); 
            // 0 = Pending ,1 = Success ,2 = Failed ,3 = Refunded, 4 = Invalid Payment
            $table->string('receipt_path')->nullable();
            $table->string('transaction_id')->nullable();
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
        Schema::dropIfExists('payment_transactions');
    }
}

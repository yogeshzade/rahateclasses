<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstallmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installments', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->bigInteger('course_id')->references('id')->on('courses');
             $table->char('installment_no',5)->default(1);
             $table->string('installments_name');
             $table->char('days_after_admission')->default(0);  //0 = At time of admission
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
        Schema::dropIfExists('installments');
    }
}

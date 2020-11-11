<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamCalendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_calenders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',100);
            $table->text('details');
            $table->string('file_path',100)->nullable();
            $table->char('status',1)->default(1);
            $table->char('date',12)->nullable();
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
        Schema::dropIfExists('exam_calenders');
    }
}

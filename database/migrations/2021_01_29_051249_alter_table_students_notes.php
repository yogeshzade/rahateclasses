<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableStudentsNotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students_notes', function (Blueprint $table) {
            //
            $table->string('img')->default('open-book.png');
            $table->char('type',1)->default(1); //1 PDF 2 Videos
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students_notes', function (Blueprint $table) {
            //
        });
    }
}

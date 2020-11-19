<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->references('id')->on('users');
            $table->char('applicant_name',100);
            $table->char('father_name',100);
            $table->char('mother_name',100);
            $table->char('state_of_domicile',100);
            $table->char('dob',20);
            $table->char('gender',2)->nullable();
            $table->char('category',4)->default('GEN');
            $table->char('religion',20)->default('Hinduism');
            $table->char('class',3)->nullable();
            $table->char('board',10)->nullable();
            $table->string('selected_subjects')->nullable();
            $table->string('students_school')->nullable();
            $table->string('parent_address')->nullable();
            $table->char('parent_no',10)->nullable();
            $table->string('student_address');
            $table->char('student_aadhar',20)->nullable();
            $table->string('student_photo')->nullable();
            $table->char('student_no',10)->nullable();

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
        Schema::dropIfExists('student_profiles');
    }
}

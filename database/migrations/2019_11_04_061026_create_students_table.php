<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {

            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('gender');
            $table->date('dob');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image')->nullable();
            $table->string('phone');
            $table->string('address');
            $table->integer('student_category_id')->unsigned();
            $table->integer('batch_id')->unsigned();
            $table->integer('section_id')->unsigned();
            $table->integer('ifuser');
            $table->integer('due');            
            $table->string('company_name');            
            $table->string('group_name');
            $table->string('business_number');
            $table->string('type');
            $table->string('types');           
            $table->string('registration_no');
            $table->string('pan');
            $table->string('city');
            $table->string('state');
            $table->integer('country_id')->nullable()->unsigned();           
            $table->string('first_contact_person');
            $table->string('first_designation');
            $table->string('first_email');
            $table->string('first_phone');
            $table->string('second_contact_person')->nullable();
            $table->string('second_designation')->nullable();
            $table->string('second_email')->nullable();
            $table->string('second_phone')->nullable();
            $table->tinyInteger('status');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}

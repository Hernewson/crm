<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquiries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('s_name');
            $table->string('s_phone');
            $table->string('s_mobile');
            $table->string('s_mail');
            $table->string('s_address');
            $table->string('s_eduLevel');
            $table->string('s_subject');
            $table->string('s_qual');
            $table->string('s_exp');
            $table->string('s_work');
            $table->string('s_serviceInterest');
            $table->string('s_langTest');
            $table->integer('s_langScore');
            $table->string('s_countryInterest');
            $table->integer('visited')->nullable();
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
        Schema::dropIfExists('enquiries');
    }
}

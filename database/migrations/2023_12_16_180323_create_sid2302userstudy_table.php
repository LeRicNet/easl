<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sid2302userstudy', function (Blueprint $table) {
            $table->string('sessionID')->unique();
            $table->string('userID')->unique();
            $table->string('lastName');
            $table->string('firstName');
            $table->string('gender');
            $table->string('email')->unique();
            $table->boolean('consent');
            $table->dateTime('consentedAt');
            $table->string('institution');
            $table->string('subspecialty');
            $table->integer('mdYear');
            $table->dateTime('sessionEnd')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sid2302userstudy');
    }
};

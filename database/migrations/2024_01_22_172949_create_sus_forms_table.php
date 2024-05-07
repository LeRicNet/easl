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
        Schema::create('sus_form', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('sessionID');
            $table->string('sus_1')->nullable();
            $table->string('sus_2')->nullable();
            $table->string('sus_3')->nullable();
            $table->string('sus_4')->nullable();
            $table->string('sus_5')->nullable();
            $table->string('sus_6')->nullable();
            $table->string('sus_7')->nullable();
            $table->string('sus_8')->nullable();
            $table->string('sus_9')->nullable();
            $table->string('sus_10')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sus_form');
    }
};

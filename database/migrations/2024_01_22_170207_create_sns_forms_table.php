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
        Schema::create('sns_form', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('sessionID');
            $table->string('sns_1')->nullable();
            $table->string('sns_2')->nullable();
            $table->string('sns_3')->nullable();
            $table->string('sns_4')->nullable();
            $table->string('sns_5')->nullable();
            $table->string('sns_6')->nullable();
            $table->string('sns_7')->nullable();
            $table->string('sns_8')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sns_form');
    }
};

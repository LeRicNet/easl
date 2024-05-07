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
        Schema::create('task_survey_form', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('sessionID');
            $table->string('currentPatient');
            $table->string('difficulty')->nullable();
            $table->string('most_difficult')->nullable();
            $table->string('confidence')->nullable();
            $table->string('most_confident')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_survey_form');
    }
};

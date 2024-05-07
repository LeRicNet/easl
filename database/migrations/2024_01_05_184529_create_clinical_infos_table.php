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
        Schema::create('clinical_info', function (Blueprint $table) {
            $table->string('patient');
            $table->string('sex');
            $table->integer('age');
            $table->float('height', $precision=4, $scale=1);
            $table->string('weight', $precision=4, $scale=1);
            $table->string('primary_symptom');
            $table->string('secondary_symptom');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clinical_info');
    }
};

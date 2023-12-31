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
        Schema::create('similar_patients_test', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Name');
            $table->string('DateOfBirth');
            $table->string('Sex');
            $table->string('PrimarySymptom');
            $table->string('Modality');
            $table->string('ProtocolName');
            $table->string('PredDx');
            $table->string('Similarity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('similar_patients_test');
    }
};

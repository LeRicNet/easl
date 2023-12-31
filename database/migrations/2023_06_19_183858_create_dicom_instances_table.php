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
        Schema::create('dicom_instances', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('user_id');
            $table->string('study_id')->nullable();
            $table->string('image')->nullable();
            $table->string('slug')->unique();
            $table->string('path');
            $table->string('orthancid');
            $table->string('parent_patient');
            $table->string('parent_series');
            $table->string('status');
            $table->string('modality');
            $table->string('ProtocolName');
            $table->string('Manufacturer');
            $table->string('SeriesDescription');
            $table->string('PatientID');
            $table->string('PatientName');
            $table->string('PatientSex');
            $table->string('InstitutionName');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dicom_instances');
    }
};

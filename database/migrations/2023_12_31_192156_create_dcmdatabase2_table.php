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
        Schema::create('dcmdatabase2', function (Blueprint $table) {
            $table->string('patient');
            $table->string('dcm_file');
            $table->string('modality');
            $table->string('mfg');
            $table->string('study_description');
            $table->string('study_uid');
            $table->string('series_uid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dcmdatabase2');
    }
};

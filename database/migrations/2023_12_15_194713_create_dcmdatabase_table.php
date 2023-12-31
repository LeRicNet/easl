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
        Schema::create('dcmdatabase', function (Blueprint $table) {
            $table->string('patient');
            $table->string('modality');
            $table->string('mfg');
            $table->string('mfg_model');
            $table->string('study_id');
            $table->string('series_id');
            $table->string('acquiredOn');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dcmdatabase');
    }
};

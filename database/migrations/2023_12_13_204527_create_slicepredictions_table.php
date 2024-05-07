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
        Schema::create('slicepredictions', function (Blueprint $table) {
            $table->string('patient');
            $table->string('study');
            $table->string('series');
            $table->string('location');
            $table->string('tumortype');
            $table->string('modality');
            $table->string('skullbaseinvasion');
            $table->string('hypothalamicinvasion');
            $table->string('hypothalamicedema');
            $table->string('mamillarybody');
            $table->string('opticchiasm');
            $table->string('chiasmedema');
            $table->string('acf');
            $table->string('mcf');
            $table->string('pcf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slicepredictions');
    }
};

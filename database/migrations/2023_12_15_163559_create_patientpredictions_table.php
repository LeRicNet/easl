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
        Schema::create('patientpredictions', function (Blueprint $table) {
            $table->string('patient');
            $table->string('location_1');
            $table->string('location_2');
            $table->string('tumortype_1');
            $table->string('tumortype_2');
//            $table->string('tumortype_3');
            $table->string('modality_1');
            $table->string('modality_2');
//            $table->string('skullbaseinvasion_1');
//            $table->string('skullbaseinvasion_2');
            $table->string('hypothalamicinvasion_1');
            $table->string('hypothalamicinvasion_2');
            $table->string('hypothalamicinvasion_3');
            $table->string('hypothalamicedema_1');
            $table->string('hypothalamicedema_2');
            $table->string('mamillarybody_1');
            $table->string('mamillarybody_2');
            $table->string('opticchiasm_1');
            $table->string('opticchiasm_2');
            $table->string('opticchiasm_3');
            $table->string('chiasmedema_1');
            $table->string('chiasmedema_2');
            $table->string('acf_1');
            $table->string('acf_2');
            $table->string('mcf_1');
            $table->string('mcf_2');
            $table->string('pcf_1');
            $table->string('pcf_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patientpredictions');
    }
};

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
        Schema::create('patientpredictions2', function (Blueprint $table) {
            $table->string('patient');
            $table->string('dcm');
            $table->string('predicted_suprasellar_location_0');
            $table->string('predicted_suprasellar_location_1');
            $table->string('predicted_intrasellar_location_0');
            $table->string('predicted_mixed_location_0');
            $table->string('predicted_mixed_location_1');
            $table->string('predicted_cystic_tumortype_0');
            $table->string('predicted_cystic_tumortype_1');
            $table->string('predicted_solid_tumortype_0');
            $table->string('predicted_solid_tumortype_1');
            $table->string('predicted_mixed_tumortype_0');
            $table->string('predicted_mixed_tumortype_1');
            $table->string('predicted_modality_0');
            $table->string('predicted_modality_1');
            $table->string('predicted_skullbaseinvasion_0');
            $table->string('predicted_skullbaseinvasion_1');
            $table->string('predicted_hypothalamicinvasion_0');
            $table->string('predicted_hypothalamicinvasion_1');
            $table->string('predicted_hypothalamicedema_0');
            $table->string('predicted_hypothalamicedema_1');
            $table->string('predicted_mamillarybody_0');
            $table->string('predicted_mamillarybody_1');
            $table->string('predicted_opticchiasm_0');
            $table->string('predicted_opticchiasm_1');
            $table->string('predicted_chiasmedema_0');
            $table->string('predicted_chiasmedema_1');
            $table->string('predicted_acf_0');
            $table->string('predicted_acf_1');
            $table->string('predicted_mcf_0');
            $table->string('predicted_mcf_1');
            $table->string('predicted_pcf_0');
            $table->string('predicted_pcf_1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patientpredictions2');
    }
};

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
        Schema::create('patientpredsargmax', function (Blueprint $table) {
            $table->string('patient');
            $table->string('dcm');
            $table->string('predicted_suprasellar_location');
            $table->string('predicted_intrasellar_location');
            $table->string('predicted_mixed_location');
            $table->string('predicted_cystic_tumortype');
            $table->string('predicted_solid_tumortype');
            $table->string('predicted_mixed_tumortype');
            $table->string('predicted_modality');
            $table->string('predicted_skullbaseinvasion');
            $table->string('predicted_hypothalamicinvasion');
            $table->string('predicted_hypothalamicedema');
            $table->string('predicted_mamillarybody');
            $table->string('predicted_opticchiasm');
            $table->string('predicted_chiasmedema');
            $table->string('predicted_acf');
            $table->string('predicted_mcf');
            $table->string('predicted_pcf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patientpredsargmax');
    }
};

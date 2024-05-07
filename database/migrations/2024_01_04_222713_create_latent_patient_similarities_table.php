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
        Schema::create('latent_patient_similarities', function (Blueprint $table) {
            $table->string('from_patient');
            $table->string('to_patient');
            $table->float('dist_l1', $precision = 8, $scale = 7);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('latent_patient_similarities');
    }
};

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
        Schema::create('task_form', function (Blueprint $table) {
            $table->string('sessionID');
            $table->string('currentPatient');
            $table->string('tumor_location')->nullable();
            $table->string('tumor_type')->nullable();
            $table->string('hypoinvasion')->nullable();
            $table->string('skullbase_invasion_involvement')->nullable();
            $table->string('mamillarybody_invasion_involvement')->nullable();
            $table->string('opticchiasm_invasion_involvement')->nullable();
            $table->string('hypo_edema')->nullable();
            $table->string('chiasm_edema')->nullable();
            $table->string('acf_involvement')->nullable();
            $table->string('mcf_involvement')->nullable();
            $table->string('pcf_involvement')->nullable();
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_form');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('équipement_propertie', function (Blueprint $table) {
            $table->foreignId( 'propertie_id')->constrained('properties');
            $table->foreignId( 'equipment_id')->constrained('equipements');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

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
       

        Schema::create('équipement', function (Blueprint $table) {
            $table->id();
            $table->boolean('wifi')->default(0);
            $table->boolean('Climatisation')->default(0); 
            $table->boolean('parking')->default(0);
            $table->boolean('piscine')->default(0);
            $table->foreignId( 'propertie_id')->constrained('properties');
            $table->timestamps();
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

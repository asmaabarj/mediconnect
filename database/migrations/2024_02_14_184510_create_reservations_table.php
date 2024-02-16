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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->enum('statut', ['1', '0'])->default('1');
            $table->foreignId('Medecin')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('patient')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->enum('date',['8h-9h','9h-10h','10h-11h','11h-12h','14h-15h','15h-16h'])->default('10h-11h');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};

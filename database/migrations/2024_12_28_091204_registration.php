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
        Schema::create('registration', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('users_id')->constrained();
            $table->foreignId('competiton_id')->constrained();
            $table->enum('status', ['en_attente', 'accepté', 'rejeté'])->default('pending');
            $table->integer('score')->default(0);
            
            $table->timestamp('registration_date')->nullable();
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
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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('email', 100)->unique();
            $table->integer('edad')->unsigned(); //unsigned para evitar edades negativas
            $table->decimal('altura', 5, 2); // 5 digitos en total, 2 despues del punto decimal
            $table->decimal('peso', 5, 2);
            $table->enum('objetivo', [
                'perder peso',
                'ganar masa muscular',
                'tonificar',
                'mantener forma',
                'aumentar resistencia',
                'mejorar flexibilidad',
                'recomposición corporal'
            ]);
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete(); 
            $table->timestamps();
        });
        
    }

    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};

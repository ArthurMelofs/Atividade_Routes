<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration

{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jogos', function (Blueprint $table) { 

            $table -> id();
            $table -> string ('nome',55);
            $table-> string('empresa',55);
            $table -> year ('ano_criação') ->default('2021');
            $table -> double ('valor',8,2);
        });    
        
        Schema::create('categoria', function (Blueprint $table) { 

            $table-> id();
            $table-> foreignId('jogos_id');
            $table-> string ('categoria',55);
            
        
          
        });   
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jogos');
        Schema::dropIfExists('categoria');
    }
};

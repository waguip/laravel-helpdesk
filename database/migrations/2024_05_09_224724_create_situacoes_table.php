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
        Schema::create('situacoes', function (Blueprint $table) {
            $table->id();            
            $table->string('nome');
            $table->timestamps();
        });

        DB::table('situacoes')->insert([
            ['nome' => 'Novo'],
            ['nome' => 'Pendente'],
            ['nome' => 'Resolvido']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('situacoes');
    }
};

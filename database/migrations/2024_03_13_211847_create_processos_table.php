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
        Schema::create('processos', function (Blueprint $table) {
            $table->id();
            $table->string('numero_cnj');
            $table->string('titulo_polo_ativo');
            $table->string('titulo_polo_passivo');
            $table->integer('ano_inicio');
            $table->date('data_inicio');
            $table->date('data_ultima_movimentacao');
            $table->boolean('fontes_tribunais_estao_arquivadas');
            $table->date('data_ultima_verificacao');
            $table->string('tempo_desde_ultima_verificacao');
            $table->float('valor_causa',10,4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('processos');
    }
};

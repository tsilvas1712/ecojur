<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processos extends Model
{
    use HasFactory;

    protected $fillable = ['numero_cnj','titulo_polo_ativo','titulo_polo_passivo','ano_inicio','data_inicio',
        'data_ultima_movimentacao','fontes_tribunais_estao_arquivadas','data_ultima_verificacao',
        'tempo_desde_ultima_verificacao','valor_causa'];
}

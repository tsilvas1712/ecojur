<?php

namespace App\Filament\Pages;

use App\Models\Mongo\ProcessoFonte;
use App\Services\Escavador;
use Filament\Pages\Page;

class Processos extends Page
{
    protected static ?string $navigationGroup = 'Gestão';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Gestão de Processos';
    protected static ?int $navigationSort = 2;

    public  ?string $cnj = '';

    public array $data = [];

    public function mount()
    {

    }

    public function getProcesso()
    {
        $api_escavador = new Escavador();

        $response = $api_escavador->getProcesso($this->cnj);


        $data = [
            'numero_cnj' => $response->numero_cnj,
            'titulo_polo_ativo' => $response->titulo_polo_ativo,
            'titulo_polo_passivo' => $response->titulo_polo_passivo,
            'ano_inicio' => $response->ano_inicio,
            'data_inicio' => $response->data_inicio,
            'data_ultima_movimentacao' => $response->data_ultima_movimentacao,
            'fontes_tribunais_estao_arquivadas' => $response->fontes_tribunais_estao_arquivadas,
            'data_ultima_verificacao' => $response->data_ultima_verificacao,
            'tempo_desde_ultima_verificacao' => $response->tempo_desde_ultima_verificacao,
            'valor_causa' => $response->fontes[0]->capa->valor_causa->valor
        ];

        \App\Models\Processos::create($data);


        //dd($response);
    }



    protected static string $view = 'filament.pages.processos';


}

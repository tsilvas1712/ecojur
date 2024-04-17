<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Config;

class Escavador
{
    protected ?string $token;
    protected Client $api;
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        $this->token = config('escavador.token');

        $this->api = new Client([
            'base_url' => config('escavador.api_escavador'),
            'headers' => [
                "Authorization" => "Bearer ".$this->token,
                "X-Requested-With" => "XMLHttpRequest",
            ],
        ]);



    }

    /**
     * @throws GuzzleException
     */
    public function getProcesso(string $cnj)
    {
        $uri = config('escavador.api_escavador');
        $response = $this->api->get($uri.'/processos/numero_cnj/'.$cnj,[
            'headers' => [
                "Authorization" => "Bearer ".$this->token,
                "X-Requested-With" => "XMLHttpRequest",
            ],
        ]);

        $body = $response->getBody();

        return json_decode((string) $body);
    }
}

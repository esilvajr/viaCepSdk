<?php

namespace ViaCep\Requests;

use GuzzleHttp\Client;
use ViaCep\Responses\Response;

abstract class Request
{

    protected $client;
    protected $endpoint = 'https://viacep.com.br/ws';

    public function __construct()
    {
        $this->client = new Client();
    }

    abstract public function request($params);
}

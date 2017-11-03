<?php

namespace ViaCep\Services;

use ViaCep\Requests\Request;
use ViaCep\Responses\Addresses;
use ViaCep\Responses\Response;

class Address implements Service
{
    private $state;
    private $city;
    private $street;

    public function __construct(?string $state, ?string $city, ?string $street)
    {
        $this->state  = $state;
        $this->city   = $city;
        $this->street = $street;
    }

    public function find(Request $request) : Response
    {
        return $request->request($this->getParameters());
    }

    private function getParameters()
    {
        $parameters = [];
        if (!is_null($this->state)) {
            $parameters[] = $this->state;
        }
        if (!is_null($this->city)) {
            $parameters[] = $this->city;
        }
        if (!is_null($this->street)) {
            $parameters[] = $this->street;
        }
        return $parameters;
    }
}
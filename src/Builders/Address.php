<?php

namespace ViaCep\Builders;

use ViaCep\Responses\Response;

class Address
{

    private $address;

    public function __construct(array $address)
    {
        $this->address = $address;
    }

    public function build() : Response
    {
        return new \ViaCep\Responses\Address(
            $this->address["cep"],
            $this->address["logradouro"],
            $this->address["complemento"],
            $this->address["bairro"],
            $this->address["localidade"],
            $this->address["uf"],
            $this->address["unidade"],
            $this->address["ibge"],
            $this->address["gia"]
        );
    }

}
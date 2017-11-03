<?php

namespace ViaCep\Builders;

use ViaCep\Responses\Response;

class Addresses
{

    private $addresses;

    public function __construct(array $addresses)
    {
        $this->addresses = $addresses;
    }

    public function build() : Response
    {
        $addresses = new \ViaCep\Responses\Addresses();
        foreach ($this->addresses as $address) {
            $addresses->add(
                new \ViaCep\Responses\Address(
                    $address["cep"],
                    $address["logradouro"],
                    $address["complemento"],
                    $address["bairro"],
                    $address["localidade"],
                    $address["uf"],
                    $address["unidade"],
                    $address["ibge"],
                    $address["gia"]
                )
            );
        }
        return $addresses;
    }
}

<?php

namespace ViaCep\Requests;

use ViaCep\Builders\Address as AddressBuilder;
use ViaCep\Builders\Addresses as AddressesBuilder;
use ViaCep\Exceptions\AddressNotFoundException;

class Json extends Request
{
    const ENDPOINT = "/json";

    public function request($params)
    {
        try {
            if (is_array($params)) {
                $params = implode('/', $params);
            }
            $response = $this->client->request('GET', sprintf('%s/%s/json', $this->endpoint, $params));
            return $this->parse(json_decode($response->getBody(), true));
        } catch (\GuzzleHttp\Exception\ClientException $exception) {
            throw new AddressNotFoundException();
        }
    }

    private function parse(array $response)
    {
        if ($this->isAddress($response)) {
            return (new AddressBuilder($response))->build();
        }
        return (new AddressesBuilder($response))->build();
    }

    private function isAddress($response)
    {
        if (array_key_exists('cep', $response)) {
            return true;
        }
        return false;
    }
}

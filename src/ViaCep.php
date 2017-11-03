<?php

namespace ViaCep;


use ViaCep\Exceptions\InvalidZipCodeFormatException;
use ViaCep\Services\Address;
use ViaCep\Services\ZipCode;

class ViaCep
{

    public function Address(?string $state, ?string $city, ?string $street)
    {
        return new Address($state, $city, $street);
    }

    public function ZipCode(string $zipcode)
    {
        if (preg_match('/[^0-9]/', $zipcode)) {
            throw new InvalidZipCodeFormatException();
        }
        return new ZipCode($zipcode);
    }
}
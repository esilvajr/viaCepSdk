<?php

namespace ViaCep\Responses;

class Address implements Response
{
    private $zipcode;
    private $street;
    private $complement;
    private $neighbor;
    private $city;
    private $state;
    private $unit;
    private $ibge;
    private $gia;

    public function __construct(
        string $zipcode,
        string $street,
        string $complement,
        string $neighbor,
        string $city,
        string $state,
        string $unit,
        string $ibge,
        string $gia
    ){
        $this->zipcode    = $zipcode;
        $this->street     = $street;
        $this->complement = $complement;
        $this->neighbor   = $neighbor;
        $this->city       = $city;
        $this->state      = $state;
        $this->unit       = $unit;
        $this->ibge       = $ibge;
        $this->gia        = $gia;
    }

    public function getZipcode() : string
    {
        return $this->zipcode;
    }

    public function getStreet() : string
    {
        return $this->street;
    }

    public function getComplement() : string
    {
        return $this->complement;
    }

    public function getNeighbor() : string
    {
        return $this->neighbor;
    }

    public function getCity() : string
    {
        return $this->city;
    }

    public function getState() : string
    {
        return $this->state;
    }

    public function getUnit() : string
    {
        return $this->unit;
    }

    public function getIbge() : string
    {
        return $this->ibge;
    }

    public function getGia() : string
    {
        return $this->gia;
    }

    public function toArray() : array
    {
        return get_object_vars($this);
    }
}

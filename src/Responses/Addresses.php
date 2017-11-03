<?php

namespace ViaCep\Responses;

class Addresses implements Response
{
   private $addresses;

   public function add(Address $address) : void
   {
       $this->addresses[] = $address;
   }

   public function getAddresses() : array
   {
       return $this->addresses;
   }

   public function toArray() : array
   {
       return $this->addresses;
   }
}

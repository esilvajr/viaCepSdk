<?php


namespace ViaCep\Services;

use ViaCep\Requests\Request;
use ViaCep\Responses\Response;

class ZipCode implements Service
{

    private $zipcode;

    public function __construct(string $zipcode)
    {
        $this->zipcode = $zipcode;
    }

    public function find(Request $request) : Response
    {
        return $request->request($this->zipcode);
    }

}

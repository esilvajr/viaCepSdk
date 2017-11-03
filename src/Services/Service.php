<?php

namespace ViaCep\Services;

use ViaCep\Requests\Request;
use ViaCep\Responses\Response;

interface Service
{
    public function find(Request $request) : Response;
}
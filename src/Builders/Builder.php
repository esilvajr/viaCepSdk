<?php

namespace ViaCep\Builders;

use ViaCep\Responses\Response;

interface Builder
{
    public function build() : Response;
}
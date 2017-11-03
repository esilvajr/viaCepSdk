<?php


namespace ViaCep\Exceptions;

use Throwable;

class InvalidZipCodeFormatException extends \Exception
{
    public function __construct(
        $message = "ZipCode must be a string that contains only number. See: https://viacep.com.br/ in Validação do Cep sector.",
        $code = 400,
        Throwable $previous = null
    ){
        parent::__construct($message, $code, $previous);
    }
}

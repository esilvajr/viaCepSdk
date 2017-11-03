<?php


namespace ViaCep\Exceptions;

use Throwable;

class AddressNotFoundException extends \Exception
{
    public function __construct(
        $message = "Addresses not found. Try again with a different one.",
        $code = 404,
        Throwable $previous = null
    ){
        parent::__construct($message, $code, $previous);
    }
}

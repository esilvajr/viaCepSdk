### Installation

```
composer require esilvajr/viaCep
```

### How to use

##### Search using zipcode
```
$viaCep = new \ViaCep\ViaCep();
$address = $viaCep->ZipCode('13566590')
                  ->find(new \ViaCep\Requests\Json());
return $address->toArray();

```

##### Search using address
```
$viaCep = new \ViaCep\ViaCep();
$addresses = $viaCep->Address('SP', 'São Carlos', 'Carlos Botelho')
                    ->find(new \ViaCep\Requests\Json());
return $address->toArray();
```

### Dev

##### Exceptions

```
AddressNotFoundException: {
    "code": 404,
    'Message: "Addresses not found. Try again with a different one."
}

InvalidZipCodeFormatException: {
    "code": 400,
    'Message: "ZipCode must be a string that contains only number. See: https://viacep.com.br/ in Validação do Cep sector."
}

```

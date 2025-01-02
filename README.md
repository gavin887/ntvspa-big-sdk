# NTVSPA SDK

> This is a library that uses NTVSPA Big API by `soap`

---

## Installation

```bash
composer require gavin887/ntvspa-big-sdk
```

---

## Usage

This is a simple example of how to use the NTVSPA Big API.

```php
<?php

use Ntvspa\Big\ServiceFactory;
use Ntvspa\Big\Session\Enums\SourceSystem;
use Ntvspa\Big\Session\Services\Login;
use Ntvspa\Big\Session\Structs\LoginRequest;
use Ntvspa\Big\Session\Structs\LoginResponse;

require_once __DIR__ . '/vendor/autoload.php';

$username = 'WWW_Anonymous';
$password = 'Accenture$1';
$domain = 'WWW';

/** @var Login $oLoginSvc */
$oLoginSvc = ServiceFactory::create(Login::class, ['debug_mode' => true]);
$oLoginReq = (new LoginRequest)->setSourceSystem(SourceSystem::VALUE_FOREIGN_AGENCY)
    ->setLogin(
        (new \Ntvspa\Big\Session\Structs\Login())
            ->setUsername($username)
            ->setPassword($password)
            ->setDomain($domain));

if ($oLoginSvc->Login($oLoginReq) !== false) {
    /** @var LoginResponse $result */
    $result = $oLoginSvc->getResult();
} else {
    /** @var \SoapFault[] $result */
    $result = $oLoginSvc->getLastError();
    foreach ($result as $error) {
        if ($error instanceof \SoapFault) {
            echo "SoapFault: ", $error->getMessage(), PHP_EOL;
        } else {
            echo get_class($error), ": ", $error->getMessage(), PHP_EOL;
        }
    }
    exit;
}

print("--------------- Result map to class ------------------". PHP_EOL);
print(get_class($result). PHP_EOL);

print("--------------- Agent ------------------". PHP_EOL);
print(json_encode($result->getAgent()->jsonSerialize(), JSON_PRETTY_PRINT). PHP_EOL);

print("--------------- Signature ------------------". PHP_EOL);
print($result->getSignature(). PHP_EOL);
```

---

## Thanks

+ [wsdltophp/packagegenerator](https://packagist.org/packages/wsdltophp/packagegenerator)

---

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session\Services;

use Ntvspa\Big\Session\Structs\LoginRequest;
use Ntvspa\Big\Session\Structs\LoginResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Login Services
 *
 * @subpackage Services
 */
class Login extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Login
     *
     * @param LoginRequest $loginRequest
     *
     * @return LoginResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function Login(LoginRequest $loginRequest)
    {
        try {
            $this->setResult($resultLogin = $this->getSoapClient()->__soapCall('Login', [
                $loginRequest,
            ], [], [], $this->outputHeaders));

            return $resultLogin;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return LoginResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

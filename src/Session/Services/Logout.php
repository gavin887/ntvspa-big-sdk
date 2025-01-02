<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session\Services;

use Ntvspa\Big\Session\Structs\LogoutRequest;
use Ntvspa\Big\Session\Structs\LogoutResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Logout Services
 *
 * @subpackage Services
 */
class Logout extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Logout
     *
     * @param LogoutRequest $logoutRequest
     *
     * @return LogoutResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function Logout(LogoutRequest $logoutRequest)
    {
        try {
            $this->setResult($resultLogout = $this->getSoapClient()->__soapCall('Logout', [
                $logoutRequest,
            ], [], [], $this->outputHeaders));

            return $resultLogout;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return LogoutResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

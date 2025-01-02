<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session\Services;

use Ntvspa\Big\Session\Structs\ChangePasswordRequest;
use Ntvspa\Big\Session\Structs\ChangePasswordResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Change Services
 *
 * @subpackage Services
 */
class Change extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ChangePassword
     *
     * @param ChangePasswordRequest $changePasswordRequest
     *
     * @return ChangePasswordResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function ChangePassword(ChangePasswordRequest $changePasswordRequest)
    {
        try {
            $this->setResult($resultChangePassword = $this->getSoapClient()->__soapCall('ChangePassword', [
                $changePasswordRequest,
            ], [], [], $this->outputHeaders));

            return $resultChangePassword;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return ChangePasswordResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

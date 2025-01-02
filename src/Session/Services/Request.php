<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session\Services;

use Ntvspa\Big\Session\Structs\RequestResetPasswordRequest;
use Ntvspa\Big\Session\Structs\RequestResetPasswordResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Request Services
 *
 * @subpackage Services
 */
class Request extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named RequestResetPassword
     *
     * @param RequestResetPasswordRequest $requestResetPasswordRequest
     *
     * @return RequestResetPasswordResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function RequestResetPassword(RequestResetPasswordRequest $requestResetPasswordRequest)
    {
        try {
            $this->setResult($resultRequestResetPassword = $this->getSoapClient()->__soapCall('RequestResetPassword', [
                $requestResetPasswordRequest,
            ], [], [], $this->outputHeaders));

            return $resultRequestResetPassword;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return RequestResetPasswordResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

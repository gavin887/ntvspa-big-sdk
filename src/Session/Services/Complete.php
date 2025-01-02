<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session\Services;

use Ntvspa\Big\Session\Structs\CompleteResetPasswordRequest;
use Ntvspa\Big\Session\Structs\CompleteResetPasswordResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Complete Services
 *
 * @subpackage Services
 */
class Complete extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named CompleteResetPassword
     *
     * @param CompleteResetPasswordRequest $completeResetPasswordRequest
     *
     * @return CompleteResetPasswordResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function CompleteResetPassword(CompleteResetPasswordRequest $completeResetPasswordRequest)
    {
        try {
            $this->setResult($resultCompleteResetPassword = $this->getSoapClient()->__soapCall('CompleteResetPassword', [
                $completeResetPasswordRequest,
            ], [], [], $this->outputHeaders));

            return $resultCompleteResetPassword;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return CompleteResetPasswordResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

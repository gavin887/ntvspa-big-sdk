<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Services;

use Ntvspa\Big\Travel\Structs\CheckPlatformAccessAuthorizationRequest;
use Ntvspa\Big\Travel\Structs\CheckPlatformAccessAuthorizationResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Check Services
 *
 * @subpackage Services
 */
class Check extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named CheckPlatformAccessAuthorization
     *
     * @param CheckPlatformAccessAuthorizationRequest $checkPlatformAccessAuthorizationRequest
     *
     * @return CheckPlatformAccessAuthorizationResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function CheckPlatformAccessAuthorization(CheckPlatformAccessAuthorizationRequest $checkPlatformAccessAuthorizationRequest)
    {
        try {
            $this->setResult($resultCheckPlatformAccessAuthorization = $this->getSoapClient()->__soapCall('CheckPlatformAccessAuthorization', [
                $checkPlatformAccessAuthorizationRequest,
            ], [], [], $this->outputHeaders));

            return $resultCheckPlatformAccessAuthorization;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return CheckPlatformAccessAuthorizationResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

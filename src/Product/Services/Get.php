<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Services;

use Ntvspa\Big\Product\Structs\GetAccountByReferenceRequest;
use Ntvspa\Big\Product\Structs\GetAccountByReferenceResponse;
use Ntvspa\Big\Product\Structs\GetProductsAvailabilityRequest;
use Ntvspa\Big\Product\Structs\GetProductsAvailabilityResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get Services
 *
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetAccountByReference
     *
     * @param GetAccountByReferenceRequest $getAccountByReferenceRequest
     *
     * @return GetAccountByReferenceResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function GetAccountByReference(GetAccountByReferenceRequest $getAccountByReferenceRequest)
    {
        try {
            $this->setResult($resultGetAccountByReference = $this->getSoapClient()->__soapCall('GetAccountByReference', [
                $getAccountByReferenceRequest,
            ], [], [], $this->outputHeaders));

            return $resultGetAccountByReference;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetProductsAvailability
     *
     * @param GetProductsAvailabilityRequest $getProductsAvailabilityRequest
     *
     * @return GetProductsAvailabilityResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function GetProductsAvailability(GetProductsAvailabilityRequest $getProductsAvailabilityRequest)
    {
        try {
            $this->setResult($resultGetProductsAvailability = $this->getSoapClient()->__soapCall('GetProductsAvailability', [
                $getProductsAvailabilityRequest,
            ], [], [], $this->outputHeaders));

            return $resultGetProductsAvailability;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return GetAccountByReferenceResponse|GetProductsAvailabilityResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

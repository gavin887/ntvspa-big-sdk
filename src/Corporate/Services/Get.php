<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Services;

use Ntvspa\Big\Corporate\Structs\GetCorporatePromotionAvailabilityRequest;
use Ntvspa\Big\Corporate\Structs\GetCorporatePromotionAvailabilityResponse;
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
     * Method to call the operation originally named GetCorporatePromotionAvailability
     *
     * @param GetCorporatePromotionAvailabilityRequest $getCorporatePromotionAvailabilityRequest
     *
     * @return GetCorporatePromotionAvailabilityResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function GetCorporatePromotionAvailability(GetCorporatePromotionAvailabilityRequest $getCorporatePromotionAvailabilityRequest)
    {
        try {
            $this->setResult($resultGetCorporatePromotionAvailability = $this->getSoapClient()->__soapCall('GetCorporatePromotionAvailability', [
                $getCorporatePromotionAvailabilityRequest,
            ], [], [], $this->outputHeaders));

            return $resultGetCorporatePromotionAvailability;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return GetCorporatePromotionAvailabilityResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

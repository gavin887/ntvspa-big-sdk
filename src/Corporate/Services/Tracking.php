<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Services;

use Ntvspa\Big\Corporate\Structs\TrackingCorporatePromotionRequest;
use Ntvspa\Big\Corporate\Structs\TrackingCorporatePromotionResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Tracking Services
 *
 * @subpackage Services
 */
class Tracking extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named TrackingCorporatePromotion
     *
     * @param TrackingCorporatePromotionRequest $trackingCorporatePromotionRequest
     *
     * @return TrackingCorporatePromotionResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function TrackingCorporatePromotion(TrackingCorporatePromotionRequest $trackingCorporatePromotionRequest)
    {
        try {
            $this->setResult($resultTrackingCorporatePromotion = $this->getSoapClient()->__soapCall('TrackingCorporatePromotion', [
                $trackingCorporatePromotionRequest,
            ], [], [], $this->outputHeaders));

            return $resultTrackingCorporatePromotion;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return TrackingCorporatePromotionResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

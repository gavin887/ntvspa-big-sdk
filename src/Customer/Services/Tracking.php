<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Services;

use Ntvspa\Big\Customer\Structs\TrackingCustomerPromotionRequest;
use Ntvspa\Big\Customer\Structs\TrackingCustomerPromotionResponse;
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
     * Method to call the operation originally named TrackingCustomerPromotion
     *
     * @param TrackingCustomerPromotionRequest $trackingCustomerPromotionRequest
     *
     * @return TrackingCustomerPromotionResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function TrackingCustomerPromotion(TrackingCustomerPromotionRequest $trackingCustomerPromotionRequest)
    {
        try {
            $this->setResult($resultTrackingCustomerPromotion = $this->getSoapClient()->__soapCall('TrackingCustomerPromotion', [
                $trackingCustomerPromotionRequest,
            ], [], [], $this->outputHeaders));

            return $resultTrackingCustomerPromotion;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return TrackingCustomerPromotionResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

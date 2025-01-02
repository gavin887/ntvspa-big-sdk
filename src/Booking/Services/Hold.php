<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Services;

use Ntvspa\Big\Booking\Structs\HoldBookingRequest;
use Ntvspa\Big\Booking\Structs\HoldBookingResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Hold Services
 *
 * @subpackage Services
 */
class Hold extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named HoldBooking
     *
     * @param HoldBookingRequest $holdBookingRequest
     *
     * @return HoldBookingResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function HoldBooking(HoldBookingRequest $holdBookingRequest)
    {
        try {
            $this->setResult($resultHoldBooking = $this->getSoapClient()->__soapCall('HoldBooking', [
                $holdBookingRequest,
            ], [], [], $this->outputHeaders));

            return $resultHoldBooking;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return HoldBookingResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

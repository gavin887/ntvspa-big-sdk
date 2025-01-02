<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Services;

use Ntvspa\Big\Booking\Structs\ExternalPaymentFinalizeBookingRequest;
use Ntvspa\Big\Booking\Structs\ExternalPaymentFinalizeBookingResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for External Services
 *
 * @subpackage Services
 */
class External extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ExternalPaymentFinalizeBooking
     *
     * @param ExternalPaymentFinalizeBookingRequest $externalPaymentFinalizeBookingRequest
     *
     * @return ExternalPaymentFinalizeBookingResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function ExternalPaymentFinalizeBooking(ExternalPaymentFinalizeBookingRequest $externalPaymentFinalizeBookingRequest)
    {
        try {
            $this->setResult($resultExternalPaymentFinalizeBooking = $this->getSoapClient()->__soapCall('ExternalPaymentFinalizeBooking', [
                $externalPaymentFinalizeBookingRequest,
            ], [], [], $this->outputHeaders));

            return $resultExternalPaymentFinalizeBooking;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return ExternalPaymentFinalizeBookingResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

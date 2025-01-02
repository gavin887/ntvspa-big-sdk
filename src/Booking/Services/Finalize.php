<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Services;

use Ntvspa\Big\Booking\Structs\FinalizeBookingRequest;
use Ntvspa\Big\Booking\Structs\FinalizeBookingResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Finalize Services
 *
 * @subpackage Services
 */
class Finalize extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named FinalizeBooking
     *
     * @param FinalizeBookingRequest $finalizeBookingRequest
     *
     * @return FinalizeBookingResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function FinalizeBooking(FinalizeBookingRequest $finalizeBookingRequest)
    {
        try {
            $this->setResult($resultFinalizeBooking = $this->getSoapClient()->__soapCall('FinalizeBooking', [
                $finalizeBookingRequest,
            ], [], [], $this->outputHeaders));

            return $resultFinalizeBooking;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return FinalizeBookingResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

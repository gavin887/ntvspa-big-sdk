<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Services;

use Ntvspa\Big\Booking\Structs\FindBookingInternalRequest;
use Ntvspa\Big\Booking\Structs\FindBookingInternalResponse;
use Ntvspa\Big\Booking\Structs\FindBookingRequest;
use Ntvspa\Big\Booking\Structs\FindBookingResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Find Services
 *
 * @subpackage Services
 */
class Find extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named FindBooking
     *
     * @param FindBookingRequest $findBookingRequest
     *
     * @return FindBookingResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function FindBooking(FindBookingRequest $findBookingRequest)
    {
        try {
            $this->setResult($resultFindBooking = $this->getSoapClient()->__soapCall('FindBooking', [
                $findBookingRequest,
            ], [], [], $this->outputHeaders));

            return $resultFindBooking;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named FindBookingInternal
     *
     * @param FindBookingInternalRequest $findBookingInternalRequest
     *
     * @return FindBookingInternalResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function FindBookingInternal(FindBookingInternalRequest $findBookingInternalRequest)
    {
        try {
            $this->setResult($resultFindBookingInternal = $this->getSoapClient()->__soapCall('FindBookingInternal', [
                $findBookingInternalRequest,
            ], [], [], $this->outputHeaders));

            return $resultFindBookingInternal;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return FindBookingInternalResponse|FindBookingResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

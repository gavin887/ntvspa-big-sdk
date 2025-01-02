<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Services;

use Ntvspa\Big\Booking\Structs\GetAvailableTrainsRequest;
use Ntvspa\Big\Booking\Structs\GetAvailableTrainsResponse;
use Ntvspa\Big\Booking\Structs\GetBestPriceForJourneyRequest;
use Ntvspa\Big\Booking\Structs\GetBestPriceForJourneyResponse;
use Ntvspa\Big\Booking\Structs\GetBookingFromStateRequest;
use Ntvspa\Big\Booking\Structs\GetBookingFromStateResponse;
use Ntvspa\Big\Booking\Structs\GetBookingRequest;
use Ntvspa\Big\Booking\Structs\GetBookingResponse;
use Ntvspa\Big\Booking\Structs\GetGRMContentRequest;
use Ntvspa\Big\Booking\Structs\GetGRMContentResponse;
use Ntvspa\Big\Booking\Structs\GetLowFareTripRequest;
use Ntvspa\Big\Booking\Structs\GetLowFareTripResponse;
use Ntvspa\Big\Booking\Structs\GetPDFTicketRequest;
use Ntvspa\Big\Booking\Structs\GetPDFTicketResponse;
use Ntvspa\Big\Booking\Structs\GetSeatAvailabilityRequest;
use Ntvspa\Big\Booking\Structs\GetSeatAvailabilityResponse;
use Ntvspa\Big\Booking\Structs\GetUpgradeAvailabilityRequest;
use Ntvspa\Big\Booking\Structs\GetUpgradeAvailabilityResponse;
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
     * Method to call the operation originally named GetAvailableTrains
     *
     * @param GetAvailableTrainsRequest $getAvailableTrainsRequest
     *
     * @return GetAvailableTrainsResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function GetAvailableTrains(GetAvailableTrainsRequest $getAvailableTrainsRequest)
    {
        try {
            $this->setResult($resultGetAvailableTrains = $this->getSoapClient()->__soapCall('GetAvailableTrains', [
                $getAvailableTrainsRequest,
            ], [], [], $this->outputHeaders));

            return $resultGetAvailableTrains;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetBooking
     *
     * @param GetBookingRequest $getBookingRequest
     *
     * @return GetBookingResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function GetBooking(GetBookingRequest $getBookingRequest)
    {
        try {
            $this->setResult($resultGetBooking = $this->getSoapClient()->__soapCall('GetBooking', [
                $getBookingRequest,
            ], [], [], $this->outputHeaders));

            return $resultGetBooking;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetBookingFromState
     *
     * @param GetBookingFromStateRequest $getBookingFromStateRequest
     *
     * @return GetBookingFromStateResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function GetBookingFromState(GetBookingFromStateRequest $getBookingFromStateRequest)
    {
        try {
            $this->setResult($resultGetBookingFromState = $this->getSoapClient()->__soapCall('GetBookingFromState', [
                $getBookingFromStateRequest,
            ], [], [], $this->outputHeaders));

            return $resultGetBookingFromState;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetPDFTicket
     *
     * @param GetPDFTicketRequest $getPDFTicketRequest
     *
     * @return GetPDFTicketResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function GetPDFTicket(GetPDFTicketRequest $getPDFTicketRequest)
    {
        try {
            $this->setResult($resultGetPDFTicket = $this->getSoapClient()->__soapCall('GetPDFTicket', [
                $getPDFTicketRequest,
            ], [], [], $this->outputHeaders));

            return $resultGetPDFTicket;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetGRMContent
     *
     * @param GetGRMContentRequest $getGRMContentRequest
     *
     * @return GetGRMContentResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function GetGRMContent(GetGRMContentRequest $getGRMContentRequest)
    {
        try {
            $this->setResult($resultGetGRMContent = $this->getSoapClient()->__soapCall('GetGRMContent', [
                $getGRMContentRequest,
            ], [], [], $this->outputHeaders));

            return $resultGetGRMContent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetBestPriceForJourney
     *
     * @param GetBestPriceForJourneyRequest $getBestPriceForJourneyRequest
     *
     * @return GetBestPriceForJourneyResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function GetBestPriceForJourney(GetBestPriceForJourneyRequest $getBestPriceForJourneyRequest)
    {
        try {
            $this->setResult($resultGetBestPriceForJourney = $this->getSoapClient()->__soapCall('GetBestPriceForJourney', [
                $getBestPriceForJourneyRequest,
            ], [], [], $this->outputHeaders));

            return $resultGetBestPriceForJourney;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetSeatAvailability
     *
     * @param GetSeatAvailabilityRequest $getSeatAvailabilityRequest
     *
     * @return GetSeatAvailabilityResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function GetSeatAvailability(GetSeatAvailabilityRequest $getSeatAvailabilityRequest)
    {
        try {
            $this->setResult($resultGetSeatAvailability = $this->getSoapClient()->__soapCall('GetSeatAvailability', [
                $getSeatAvailabilityRequest,
            ], [], [], $this->outputHeaders));

            return $resultGetSeatAvailability;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetLowFareTrip
     *
     * @param GetLowFareTripRequest $getLowFareTripRequest
     *
     * @return GetLowFareTripResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function GetLowFareTrip(GetLowFareTripRequest $getLowFareTripRequest)
    {
        try {
            $this->setResult($resultGetLowFareTrip = $this->getSoapClient()->__soapCall('GetLowFareTrip', [
                $getLowFareTripRequest,
            ], [], [], $this->outputHeaders));

            return $resultGetLowFareTrip;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetUpgradeAvailability
     *
     * @param GetUpgradeAvailabilityRequest $getUpgradeAvailabilityRequest
     *
     * @return GetUpgradeAvailabilityResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function GetUpgradeAvailability(GetUpgradeAvailabilityRequest $getUpgradeAvailabilityRequest)
    {
        try {
            $this->setResult($resultGetUpgradeAvailability = $this->getSoapClient()->__soapCall('GetUpgradeAvailability', [
                $getUpgradeAvailabilityRequest,
            ], [], [], $this->outputHeaders));

            return $resultGetUpgradeAvailability;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return GetAvailableTrainsResponse|GetBestPriceForJourneyResponse|GetBookingFromStateResponse|GetBookingResponse|GetGRMContentResponse|GetLowFareTripResponse|GetPDFTicketResponse|GetSeatAvailabilityResponse|GetUpgradeAvailabilityResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

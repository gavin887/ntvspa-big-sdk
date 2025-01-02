<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Services;

use Ntvspa\Big\Customer\Structs\GetCustomerContactsRequest;
use Ntvspa\Big\Customer\Structs\GetCustomerContactsResponse;
use Ntvspa\Big\Customer\Structs\GetCustomerPromotionAvailabilityRequest;
use Ntvspa\Big\Customer\Structs\GetCustomerPromotionAvailabilityResponse;
use Ntvspa\Big\Customer\Structs\GetLoyaltyPointsRequest;
use Ntvspa\Big\Customer\Structs\GetLoyaltyPointsResponse;
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
     * Method to call the operation originally named GetLoyaltyPoints
     *
     * @param GetLoyaltyPointsRequest $getLoyaltyPointsRequest
     *
     * @return GetLoyaltyPointsResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function GetLoyaltyPoints(GetLoyaltyPointsRequest $getLoyaltyPointsRequest)
    {
        try {
            $this->setResult($resultGetLoyaltyPoints = $this->getSoapClient()->__soapCall('GetLoyaltyPoints', [
                $getLoyaltyPointsRequest,
            ], [], [], $this->outputHeaders));

            return $resultGetLoyaltyPoints;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetCustomerPromotionAvailability
     *
     * @param GetCustomerPromotionAvailabilityRequest $getCustomerPromotionAvailabilityRequest
     *
     * @return GetCustomerPromotionAvailabilityResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function GetCustomerPromotionAvailability(GetCustomerPromotionAvailabilityRequest $getCustomerPromotionAvailabilityRequest)
    {
        try {
            $this->setResult($resultGetCustomerPromotionAvailability = $this->getSoapClient()->__soapCall('GetCustomerPromotionAvailability', [
                $getCustomerPromotionAvailabilityRequest,
            ], [], [], $this->outputHeaders));

            return $resultGetCustomerPromotionAvailability;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetCustomerContacts
     *
     * @param GetCustomerContactsRequest $getCustomerContactsRequest
     *
     * @return GetCustomerContactsResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function GetCustomerContacts(GetCustomerContactsRequest $getCustomerContactsRequest)
    {
        try {
            $this->setResult($resultGetCustomerContacts = $this->getSoapClient()->__soapCall('GetCustomerContacts', [
                $getCustomerContactsRequest,
            ], [], [], $this->outputHeaders));

            return $resultGetCustomerContacts;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return GetCustomerContactsResponse|GetCustomerPromotionAvailabilityResponse|GetLoyaltyPointsResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

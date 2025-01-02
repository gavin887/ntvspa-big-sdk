<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Services;

use Ntvspa\Big\Customer\Structs\RetrieveCustomerPromotionRequest;
use Ntvspa\Big\Customer\Structs\RetrieveCustomerPromotionResponse;
use Ntvspa\Big\Customer\Structs\RetrieveCustomerRequest;
use Ntvspa\Big\Customer\Structs\RetrieveCustomerResponse;
use Ntvspa\Big\Customer\Structs\RetrieveFopRequest;
use Ntvspa\Big\Customer\Structs\RetrieveFopResponse;
use Ntvspa\Big\Customer\Structs\RetrieveInvoiceProfileRequest;
use Ntvspa\Big\Customer\Structs\RetrieveInvoiceProfileResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Retrieve Services
 *
 * @subpackage Services
 */
class Retrieve extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named RetrieveCustomerPromotion
     *
     * @param RetrieveCustomerPromotionRequest $retrieveCustomerPromotionRequest
     *
     * @return RetrieveCustomerPromotionResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function RetrieveCustomerPromotion(RetrieveCustomerPromotionRequest $retrieveCustomerPromotionRequest)
    {
        try {
            $this->setResult($resultRetrieveCustomerPromotion = $this->getSoapClient()->__soapCall('RetrieveCustomerPromotion', [
                $retrieveCustomerPromotionRequest,
            ], [], [], $this->outputHeaders));

            return $resultRetrieveCustomerPromotion;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named RetrieveCustomer
     *
     * @param RetrieveCustomerRequest $retrieveCustomerRequest
     *
     * @return RetrieveCustomerResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function RetrieveCustomer(RetrieveCustomerRequest $retrieveCustomerRequest)
    {
        try {
            $this->setResult($resultRetrieveCustomer = $this->getSoapClient()->__soapCall('RetrieveCustomer', [
                $retrieveCustomerRequest,
            ], [], [], $this->outputHeaders));

            return $resultRetrieveCustomer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named RetrieveFop
     *
     * @param RetrieveFopRequest $retrieveFopRequest
     *
     * @return RetrieveFopResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function RetrieveFop(RetrieveFopRequest $retrieveFopRequest)
    {
        try {
            $this->setResult($resultRetrieveFop = $this->getSoapClient()->__soapCall('RetrieveFop', [
                $retrieveFopRequest,
            ], [], [], $this->outputHeaders));

            return $resultRetrieveFop;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named RetrieveInvoiceProfile
     *
     * @param RetrieveInvoiceProfileRequest $retrieveInvoiceProfileRequest
     *
     * @return RetrieveInvoiceProfileResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function RetrieveInvoiceProfile(RetrieveInvoiceProfileRequest $retrieveInvoiceProfileRequest)
    {
        try {
            $this->setResult($resultRetrieveInvoiceProfile = $this->getSoapClient()->__soapCall('RetrieveInvoiceProfile', [
                $retrieveInvoiceProfileRequest,
            ], [], [], $this->outputHeaders));

            return $resultRetrieveInvoiceProfile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return RetrieveCustomerPromotionResponse|RetrieveCustomerResponse|RetrieveFopResponse|RetrieveInvoiceProfileResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Services;

use Ntvspa\Big\Customer\Structs\UpsertCustomerContactsRequest;
use Ntvspa\Big\Customer\Structs\UpsertCustomerContactsResponse;
use Ntvspa\Big\Customer\Structs\UpsertCustomerRequest;
use Ntvspa\Big\Customer\Structs\UpsertCustomerResponse;
use Ntvspa\Big\Customer\Structs\UpsertFopRequest;
use Ntvspa\Big\Customer\Structs\UpsertFopResponse;
use Ntvspa\Big\Customer\Structs\UpsertInvoiceProfileRequest;
use Ntvspa\Big\Customer\Structs\UpsertInvoiceProfileResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Upsert Services
 *
 * @subpackage Services
 */
class Upsert extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named UpsertCustomer
     *
     * @param UpsertCustomerRequest $upsertCustomerRequest
     *
     * @return UpsertCustomerResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function UpsertCustomer(UpsertCustomerRequest $upsertCustomerRequest)
    {
        try {
            $this->setResult($resultUpsertCustomer = $this->getSoapClient()->__soapCall('UpsertCustomer', [
                $upsertCustomerRequest,
            ], [], [], $this->outputHeaders));

            return $resultUpsertCustomer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named UpsertCustomerContatcs
     *
     * @param UpsertCustomerContactsRequest $upsertCustomerContactsRequest
     *
     * @return UpsertCustomerContactsResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function UpsertCustomerContatcs(UpsertCustomerContactsRequest $upsertCustomerContactsRequest)
    {
        try {
            $this->setResult($resultUpsertCustomerContatcs = $this->getSoapClient()->__soapCall('UpsertCustomerContatcs', [
                $upsertCustomerContactsRequest,
            ], [], [], $this->outputHeaders));

            return $resultUpsertCustomerContatcs;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named UpsertFop
     *
     * @param UpsertFopRequest $upsertFopRequest
     *
     * @return UpsertFopResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function UpsertFop(UpsertFopRequest $upsertFopRequest)
    {
        try {
            $this->setResult($resultUpsertFop = $this->getSoapClient()->__soapCall('UpsertFop', [
                $upsertFopRequest,
            ], [], [], $this->outputHeaders));

            return $resultUpsertFop;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named UpsertInvoiceProfile
     *
     * @param UpsertInvoiceProfileRequest $upsertInvoiceProfileRequest
     *
     * @return UpsertInvoiceProfileResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function UpsertInvoiceProfile(UpsertInvoiceProfileRequest $upsertInvoiceProfileRequest)
    {
        try {
            $this->setResult($resultUpsertInvoiceProfile = $this->getSoapClient()->__soapCall('UpsertInvoiceProfile', [
                $upsertInvoiceProfileRequest,
            ], [], [], $this->outputHeaders));

            return $resultUpsertInvoiceProfile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return UpsertCustomerContactsResponse|UpsertCustomerResponse|UpsertFopResponse|UpsertInvoiceProfileResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Services;

use Ntvspa\Big\Booking\Structs\ManageFeeRequest;
use Ntvspa\Big\Booking\Structs\ManageFeeResponse;
use Ntvspa\Big\Booking\Structs\ManagePaymentRequest;
use Ntvspa\Big\Booking\Structs\ManagePaymentResponse;
use Ntvspa\Big\Booking\Structs\ManageSSRRequest;
use Ntvspa\Big\Booking\Structs\ManageSSRResponse;
use Ntvspa\Big\Booking\Structs\ManageUpgradeRequest;
use Ntvspa\Big\Booking\Structs\ManageUpgradeResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Manage Services
 *
 * @subpackage Services
 */
class Manage extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ManagePayment
     *
     * @param ManagePaymentRequest $managePaymentRequest
     *
     * @return ManagePaymentResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function ManagePayment(ManagePaymentRequest $managePaymentRequest)
    {
        try {
            $this->setResult($resultManagePayment = $this->getSoapClient()->__soapCall('ManagePayment', [
                $managePaymentRequest,
            ], [], [], $this->outputHeaders));

            return $resultManagePayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named ManageSSR
     *
     * @param ManageSSRRequest $manageSSRRequest
     *
     * @return ManageSSRResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function ManageSSR(ManageSSRRequest $manageSSRRequest)
    {
        try {
            $this->setResult($resultManageSSR = $this->getSoapClient()->__soapCall('ManageSSR', [
                $manageSSRRequest,
            ], [], [], $this->outputHeaders));

            return $resultManageSSR;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named ManageFee
     *
     * @param ManageFeeRequest $manageFeeRequest
     *
     * @return ManageFeeResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function ManageFee(ManageFeeRequest $manageFeeRequest)
    {
        try {
            $this->setResult($resultManageFee = $this->getSoapClient()->__soapCall('ManageFee', [
                $manageFeeRequest,
            ], [], [], $this->outputHeaders));

            return $resultManageFee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named ManageUpgrade
     *
     * @param ManageUpgradeRequest $manageUpgradeRequest
     *
     * @return ManageUpgradeResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function ManageUpgrade(ManageUpgradeRequest $manageUpgradeRequest)
    {
        try {
            $this->setResult($resultManageUpgrade = $this->getSoapClient()->__soapCall('ManageUpgrade', [
                $manageUpgradeRequest,
            ], [], [], $this->outputHeaders));

            return $resultManageUpgrade;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return ManageFeeResponse|ManagePaymentResponse|ManageSSRResponse|ManageUpgradeResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Services;

use Ntvspa\Big\Product\Structs\FinalizeOrderRequest;
use Ntvspa\Big\Product\Structs\FinalizeOrderResponse;
use Ntvspa\Big\Product\Structs\FinalizeProductOrderPaymentRequest;
use Ntvspa\Big\Product\Structs\FinalizeProductOrderPaymentResponse;
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
     * Method to call the operation originally named FinalizeOrder
     *
     * @param FinalizeOrderRequest $finalizeOrderRequest
     *
     * @return FinalizeOrderResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function FinalizeOrder(FinalizeOrderRequest $finalizeOrderRequest)
    {
        try {
            $this->setResult($resultFinalizeOrder = $this->getSoapClient()->__soapCall('FinalizeOrder', [
                $finalizeOrderRequest,
            ], [], [], $this->outputHeaders));

            return $resultFinalizeOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named FinalizeProductOrderPayment
     *
     * @param FinalizeProductOrderPaymentRequest $finalizeProductOrderPaymentRequest
     *
     * @return FinalizeProductOrderPaymentResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function FinalizeProductOrderPayment(FinalizeProductOrderPaymentRequest $finalizeProductOrderPaymentRequest)
    {
        try {
            $this->setResult($resultFinalizeProductOrderPayment = $this->getSoapClient()->__soapCall('FinalizeProductOrderPayment', [
                $finalizeProductOrderPaymentRequest,
            ], [], [], $this->outputHeaders));

            return $resultFinalizeProductOrderPayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return FinalizeOrderResponse|FinalizeProductOrderPaymentResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

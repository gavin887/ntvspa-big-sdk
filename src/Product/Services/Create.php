<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Services;

use Ntvspa\Big\Product\Structs\CreateOrderRequest;
use Ntvspa\Big\Product\Structs\CreateOrderResponse;
use Ntvspa\Big\Product\Structs\CreateProductOrderRequest;
use Ntvspa\Big\Product\Structs\CreateProductOrderResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create Services
 *
 * @subpackage Services
 */
class Create extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named CreateOrder
     *
     * @param CreateOrderRequest $createOrderRequest
     *
     * @return CreateOrderResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function CreateOrder(CreateOrderRequest $createOrderRequest)
    {
        try {
            $this->setResult($resultCreateOrder = $this->getSoapClient()->__soapCall('CreateOrder', [
                $createOrderRequest,
            ], [], [], $this->outputHeaders));

            return $resultCreateOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named CreateProductOrder
     *
     * @param CreateProductOrderRequest $createProductOrderRequest
     *
     * @return CreateProductOrderResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function CreateProductOrder(CreateProductOrderRequest $createProductOrderRequest)
    {
        try {
            $this->setResult($resultCreateProductOrder = $this->getSoapClient()->__soapCall('CreateProductOrder', [
                $createProductOrderRequest,
            ], [], [], $this->outputHeaders));

            return $resultCreateProductOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return CreateOrderResponse|CreateProductOrderResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Services;

use Ntvspa\Big\Product\Structs\RequestInvoiceRequest;
use Ntvspa\Big\Product\Structs\RequestInvoiceResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Request Services
 *
 * @subpackage Services
 */
class Request extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named RequestInvoice
     *
     * @param RequestInvoiceRequest $requestInvoiceRequest
     *
     * @return RequestInvoiceResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function RequestInvoice(RequestInvoiceRequest $requestInvoiceRequest)
    {
        try {
            $this->setResult($resultRequestInvoice = $this->getSoapClient()->__soapCall('RequestInvoice', [
                $requestInvoiceRequest,
            ], [], [], $this->outputHeaders));

            return $resultRequestInvoice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return RequestInvoiceResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

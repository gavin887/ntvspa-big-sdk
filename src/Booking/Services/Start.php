<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Services;

use Ntvspa\Big\Booking\Structs\StartPaypalTransactionRequest;
use Ntvspa\Big\Booking\Structs\StartPaypalTransactionResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Start Services
 *
 * @subpackage Services
 */
class Start extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named StartPaypalTransaction
     *
     * @param StartPaypalTransactionRequest $startPaypalTransactionRequest
     *
     * @return StartPaypalTransactionResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function StartPaypalTransaction(StartPaypalTransactionRequest $startPaypalTransactionRequest)
    {
        try {
            $this->setResult($resultStartPaypalTransaction = $this->getSoapClient()->__soapCall('StartPaypalTransaction', [
                $startPaypalTransactionRequest,
            ], [], [], $this->outputHeaders));

            return $resultStartPaypalTransaction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return StartPaypalTransactionResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

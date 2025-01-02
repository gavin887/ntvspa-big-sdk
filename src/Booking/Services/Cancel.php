<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Services;

use Ntvspa\Big\Booking\Structs\CancelInProcessPaymentRequest;
use Ntvspa\Big\Booking\Structs\CancelInProcessPaymentResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Cancel Services
 *
 * @subpackage Services
 */
class Cancel extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named CancelInProcessPayment
     *
     * @param CancelInProcessPaymentRequest $cancelInProcessPaymentRequest
     *
     * @return CancelInProcessPaymentResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function CancelInProcessPayment(CancelInProcessPaymentRequest $cancelInProcessPaymentRequest)
    {
        try {
            $this->setResult($resultCancelInProcessPayment = $this->getSoapClient()->__soapCall('CancelInProcessPayment', [
                $cancelInProcessPaymentRequest,
            ], [], [], $this->outputHeaders));

            return $resultCancelInProcessPayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return CancelInProcessPaymentResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

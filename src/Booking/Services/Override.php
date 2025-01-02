<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Services;

use Ntvspa\Big\Booking\Structs\OverrideFeeRequest;
use Ntvspa\Big\Booking\Structs\OverrideFeeResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Override Services
 *
 * @subpackage Services
 */
class Override extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named OverrideFee
     *
     * @param OverrideFeeRequest $overrideFeeRequest
     *
     * @return OverrideFeeResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function OverrideFee(OverrideFeeRequest $overrideFeeRequest)
    {
        try {
            $this->setResult($resultOverrideFee = $this->getSoapClient()->__soapCall('OverrideFee', [
                $overrideFeeRequest,
            ], [], [], $this->outputHeaders));

            return $resultOverrideFee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return OverrideFeeResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

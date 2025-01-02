<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Services;

use Ntvspa\Big\Booking\Structs\DivideSplitRequest;
use Ntvspa\Big\Booking\Structs\DivideSplitResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Divide Services
 *
 * @subpackage Services
 */
class Divide extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named DivideSplit
     *
     * @param DivideSplitRequest $divideSplitRequest
     *
     * @return DivideSplitResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function DivideSplit(DivideSplitRequest $divideSplitRequest)
    {
        try {
            $this->setResult($resultDivideSplit = $this->getSoapClient()->__soapCall('DivideSplit', [
                $divideSplitRequest,
            ], [], [], $this->outputHeaders));

            return $resultDivideSplit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return DivideSplitResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

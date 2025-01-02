<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Services;

use Ntvspa\Big\Booking\Structs\UpdatePassengersRequest;
use Ntvspa\Big\Booking\Structs\UpdatePassengersResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Update Services
 *
 * @subpackage Services
 */
class Update extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named UpdatePassengers
     *
     * @param UpdatePassengersRequest $updatePassengersRequest
     *
     * @return UpdatePassengersResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function UpdatePassengers(UpdatePassengersRequest $updatePassengersRequest)
    {
        try {
            $this->setResult($resultUpdatePassengers = $this->getSoapClient()->__soapCall('UpdatePassengers', [
                $updatePassengersRequest,
            ], [], [], $this->outputHeaders));

            return $resultUpdatePassengers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return UpdatePassengersResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

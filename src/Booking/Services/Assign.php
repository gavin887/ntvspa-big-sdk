<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Services;

use Ntvspa\Big\Booking\Structs\AssignSeatRequest;
use Ntvspa\Big\Booking\Structs\AssignSeatResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Assign Services
 *
 * @subpackage Services
 */
class Assign extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named AssignSeat
     *
     * @param AssignSeatRequest $assignSeatRequest
     *
     * @return AssignSeatResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function AssignSeat(AssignSeatRequest $assignSeatRequest)
    {
        try {
            $this->setResult($resultAssignSeat = $this->getSoapClient()->__soapCall('AssignSeat', [
                $assignSeatRequest,
            ], [], [], $this->outputHeaders));

            return $resultAssignSeat;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return AssignSeatResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

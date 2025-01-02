<?php

declare(strict_types=1);

namespace Ntvspa\Big\Operation\Services;

use Ntvspa\Big\Operation\Structs\AssignCongiuntiSeatsRequest;
use Ntvspa\Big\Operation\Structs\AssignCongiuntiSeatsResponse;
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
     * Method to call the operation originally named AssignCongiuntiSeats
     *
     * @param AssignCongiuntiSeatsRequest $assignCongiuntiSeatsRequest
     *
     * @return AssignCongiuntiSeatsResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function AssignCongiuntiSeats(AssignCongiuntiSeatsRequest $assignCongiuntiSeatsRequest)
    {
        try {
            $this->setResult($resultAssignCongiuntiSeats = $this->getSoapClient()->__soapCall('AssignCongiuntiSeats', [
                $assignCongiuntiSeatsRequest,
            ], [], [], $this->outputHeaders));

            return $resultAssignCongiuntiSeats;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return AssignCongiuntiSeatsResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

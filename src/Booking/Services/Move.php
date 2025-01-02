<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Services;

use Ntvspa\Big\Booking\Structs\MoveRequest;
use Ntvspa\Big\Booking\Structs\MoveResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Move Services
 *
 * @subpackage Services
 */
class Move extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Move
     *
     * @param MoveRequest $moveRequest
     *
     * @return MoveResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function Move(MoveRequest $moveRequest)
    {
        try {
            $this->setResult($resultMove = $this->getSoapClient()->__soapCall('Move', [
                $moveRequest,
            ], [], [], $this->outputHeaders));

            return $resultMove;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return MoveResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

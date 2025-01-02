<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Services;

use Ntvspa\Big\Travel\Structs\GetTrainSchedulesRequest;
use Ntvspa\Big\Travel\Structs\GetTrainSchedulesResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get Services
 *
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetTrainSchedules
     *
     * @param GetTrainSchedulesRequest $getTrainSchedulesRequest
     *
     * @return GetTrainSchedulesResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function GetTrainSchedules(GetTrainSchedulesRequest $getTrainSchedulesRequest)
    {
        try {
            $this->setResult($resultGetTrainSchedules = $this->getSoapClient()->__soapCall('GetTrainSchedules', [
                $getTrainSchedulesRequest,
            ], [], [], $this->outputHeaders));

            return $resultGetTrainSchedules;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return GetTrainSchedulesResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

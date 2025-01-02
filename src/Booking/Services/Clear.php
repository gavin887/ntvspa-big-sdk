<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Services;

use Ntvspa\Big\Booking\Structs\ClearSeatsPreferencesRequest;
use Ntvspa\Big\Booking\Structs\ClearSeatsPreferencesResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Clear Services
 *
 * @subpackage Services
 */
class Clear extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ClearSeatsPreferences
     *
     * @param ClearSeatsPreferencesRequest $clearSeatsPreferencesRequest
     *
     * @return ClearSeatsPreferencesResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function ClearSeatsPreferences(ClearSeatsPreferencesRequest $clearSeatsPreferencesRequest)
    {
        try {
            $this->setResult($resultClearSeatsPreferences = $this->getSoapClient()->__soapCall('ClearSeatsPreferences', [
                $clearSeatsPreferencesRequest,
            ], [], [], $this->outputHeaders));

            return $resultClearSeatsPreferences;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return ClearSeatsPreferencesResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

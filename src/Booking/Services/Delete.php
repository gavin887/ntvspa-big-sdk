<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Services;

use Ntvspa\Big\Booking\Structs\DeleteJourneyRequest;
use Ntvspa\Big\Booking\Structs\DeleteJourneyResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete Services
 *
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named DeleteJourney
     *
     * @param DeleteJourneyRequest $deleteJourneyRequest
     *
     * @return DeleteJourneyResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function DeleteJourney(DeleteJourneyRequest $deleteJourneyRequest)
    {
        try {
            $this->setResult($resultDeleteJourney = $this->getSoapClient()->__soapCall('DeleteJourney', [
                $deleteJourneyRequest,
            ], [], [], $this->outputHeaders));

            return $resultDeleteJourney;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return DeleteJourneyResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

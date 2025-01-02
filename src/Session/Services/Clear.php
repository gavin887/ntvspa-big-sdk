<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session\Services;

use Ntvspa\Big\Session\Structs\ClearSessionRequest;
use Ntvspa\Big\Session\Structs\ClearSessionResponse;
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
     * Method to call the operation originally named ClearSession
     *
     * @param ClearSessionRequest $clearSessionRequest
     *
     * @return ClearSessionResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function ClearSession(ClearSessionRequest $clearSessionRequest)
    {
        try {
            $this->setResult($resultClearSession = $this->getSoapClient()->__soapCall('ClearSession', [
                $clearSessionRequest,
            ], [], [], $this->outputHeaders));

            return $resultClearSession;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return ClearSessionResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Services;

use Ntvspa\Big\Booking\Structs\UpgradeRequest;
use Ntvspa\Big\Booking\Structs\UpgradeResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Upgrade Services
 *
 * @subpackage Services
 */
class Upgrade extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Upgrade
     *
     * @param UpgradeRequest $upgradeRequest
     *
     * @return UpgradeResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function Upgrade(UpgradeRequest $upgradeRequest)
    {
        try {
            $this->setResult($resultUpgrade = $this->getSoapClient()->__soapCall('Upgrade', [
                $upgradeRequest,
            ], [], [], $this->outputHeaders));

            return $resultUpgrade;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return UpgradeResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

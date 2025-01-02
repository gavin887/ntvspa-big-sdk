<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Services;

use Ntvspa\Big\Corporate\Structs\UpsertAgencyProfileRequest;
use Ntvspa\Big\Corporate\Structs\UpsertAgencyProfileResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Upsert Services
 *
 * @subpackage Services
 */
class Upsert extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named UpsertAgencyProfile
     *
     * @param UpsertAgencyProfileRequest $upsertAgencyProfileRequest
     *
     * @return UpsertAgencyProfileResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function UpsertAgencyProfile(UpsertAgencyProfileRequest $upsertAgencyProfileRequest)
    {
        try {
            $this->setResult($resultUpsertAgencyProfile = $this->getSoapClient()->__soapCall('UpsertAgencyProfile', [
                $upsertAgencyProfileRequest,
            ], [], [], $this->outputHeaders));

            return $resultUpsertAgencyProfile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return UpsertAgencyProfileResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

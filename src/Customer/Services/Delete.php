<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Services;

use Ntvspa\Big\Customer\Structs\DeleteCustomerProfileRequest;
use Ntvspa\Big\Customer\Structs\DeleteCustomerProfileResponse;
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
     * Method to call the operation originally named DeleteCustomerProfile
     *
     * @param DeleteCustomerProfileRequest $deleteCustomerProfileRequest
     *
     * @return DeleteCustomerProfileResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function DeleteCustomerProfile(DeleteCustomerProfileRequest $deleteCustomerProfileRequest)
    {
        try {
            $this->setResult($resultDeleteCustomerProfile = $this->getSoapClient()->__soapCall('DeleteCustomerProfile', [
                $deleteCustomerProfileRequest,
            ], [], [], $this->outputHeaders));

            return $resultDeleteCustomerProfile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return DeleteCustomerProfileResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

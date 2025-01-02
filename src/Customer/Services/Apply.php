<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Services;

use Ntvspa\Big\Customer\Structs\ApplyCustomerPromotionRequest;
use Ntvspa\Big\Customer\Structs\ApplyCustomerPromotionResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Apply Services
 *
 * @subpackage Services
 */
class Apply extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ApplyCustomerPromotion
     *
     * @param ApplyCustomerPromotionRequest $applyCustomerPromotionRequest
     *
     * @return ApplyCustomerPromotionResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function ApplyCustomerPromotion(ApplyCustomerPromotionRequest $applyCustomerPromotionRequest)
    {
        try {
            $this->setResult($resultApplyCustomerPromotion = $this->getSoapClient()->__soapCall('ApplyCustomerPromotion', [
                $applyCustomerPromotionRequest,
            ], [], [], $this->outputHeaders));

            return $resultApplyCustomerPromotion;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return ApplyCustomerPromotionResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

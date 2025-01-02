<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Services;

use Ntvspa\Big\Corporate\Structs\ApplyCorporatePromotionRequest;
use Ntvspa\Big\Corporate\Structs\ApplyCorporatePromotionResponse;
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
     * Method to call the operation originally named ApplyCorporatePromotion
     *
     * @param ApplyCorporatePromotionRequest $applyCorporatePromotionRequest
     *
     * @return ApplyCorporatePromotionResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function ApplyCorporatePromotion(ApplyCorporatePromotionRequest $applyCorporatePromotionRequest)
    {
        try {
            $this->setResult($resultApplyCorporatePromotion = $this->getSoapClient()->__soapCall('ApplyCorporatePromotion', [
                $applyCorporatePromotionRequest,
            ], [], [], $this->outputHeaders));

            return $resultApplyCorporatePromotion;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return ApplyCorporatePromotionResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

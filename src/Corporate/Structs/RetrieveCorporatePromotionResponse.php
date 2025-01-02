<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;

/**
 * This class stands for RetrieveCorporatePromotionResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q14:RetrieveCorporatePromotionResponse | tns:RetrieveCorporatePromotionResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveCorporatePromotionResponse extends ResponseBase
{
    /**
     * The Promotion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Promotion|null
     */
    protected ?\Ntvspa\Big\Corporate\Structs\Promotion $Promotion = null;

    /**
     * Constructor method for RetrieveCorporatePromotionResponse
     *
     * @param Promotion $promotion
     *
     * @uses RetrieveCorporatePromotionResponse::setPromotion()
     */
    public function __construct(?\Ntvspa\Big\Corporate\Structs\Promotion $promotion = null)
    {
        $this
            ->setPromotion($promotion);
    }

    /**
     * Get Promotion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Promotion|null
     */
    public function getPromotion(): ?\Ntvspa\Big\Corporate\Structs\Promotion
    {
        return $this->Promotion ?? null;
    }

    /**
     * Set Promotion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Promotion $promotion
     *
     * @return RetrieveCorporatePromotionResponse
     */
    public function setPromotion(?\Ntvspa\Big\Corporate\Structs\Promotion $promotion = null): self
    {
        if (is_null($promotion) || (is_array($promotion) && empty($promotion))) {
            unset($this->Promotion);
        } else {
            $this->Promotion = $promotion;
        }

        return $this;
    }
}

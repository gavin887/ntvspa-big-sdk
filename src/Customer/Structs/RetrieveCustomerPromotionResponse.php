<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Structs;

use AllowDynamicProperties;
use Customer\Arrays\ArrayOfPromotion;

/**
 * This class stands for RetrieveCustomerPromotionResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q4:RetrieveCustomerPromotionResponse | tns:RetrieveCustomerPromotionResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveCustomerPromotionResponse extends ResponseBase
{
    /**
     * The Promotions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Customer\Arrays\ArrayOfPromotion|null
     */
    protected ?ArrayOfPromotion $Promotions = null;

    /**
     * Constructor method for RetrieveCustomerPromotionResponse
     *
     * @param \Ntvspa\Big\Customer\Arrays\ArrayOfPromotion $promotions
     *
     * @uses RetrieveCustomerPromotionResponse::setPromotions()
     */
    public function __construct(?ArrayOfPromotion $promotions = null)
    {
        $this
            ->setPromotions($promotions);
    }

    /**
     * Get Promotions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Customer\Arrays\ArrayOfPromotion|null
     */
    public function getPromotions(): ?ArrayOfPromotion
    {
        return $this->Promotions ?? null;
    }

    /**
     * Set Promotions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Customer\Arrays\ArrayOfPromotion $promotions
     *
     * @return RetrieveCustomerPromotionResponse
     */
    public function setPromotions(?ArrayOfPromotion $promotions = null): self
    {
        if (is_null($promotions) || (is_array($promotions) && empty($promotions))) {
            unset($this->Promotions);
        } else {
            $this->Promotions = $promotions;
        }

        return $this;
    }
}

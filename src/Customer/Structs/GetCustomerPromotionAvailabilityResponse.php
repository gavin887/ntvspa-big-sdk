<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Structs;

use AllowDynamicProperties;
use Customer\Arrays\ArrayOfJourneyPromotionApplicable;
use InvalidArgumentException;

/**
 * This class stands for GetCustomerPromotionAvailabilityResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q8:GetCustomerPromotionAvailabilityResponse | tns:GetCustomerPromotionAvailabilityResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetCustomerPromotionAvailabilityResponse extends ResponseBase
{
    /**
     * The PromotionId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PromotionId = null;
    /**
     * The JourneysPromotionApplicable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Customer\Arrays\ArrayOfJourneyPromotionApplicable|null
     */
    protected ?ArrayOfJourneyPromotionApplicable $JourneysPromotionApplicable = null;

    /**
     * Constructor method for GetCustomerPromotionAvailabilityResponse
     *
     * @param string                                                        $promotionId
     * @param \Ntvspa\Big\Customer\Arrays\ArrayOfJourneyPromotionApplicable $journeysPromotionApplicable
     *
     * @uses GetCustomerPromotionAvailabilityResponse::setPromotionId()
     * @uses GetCustomerPromotionAvailabilityResponse::setJourneysPromotionApplicable()
     */
    public function __construct(?string $promotionId = null, ?ArrayOfJourneyPromotionApplicable $journeysPromotionApplicable = null)
    {
        $this
            ->setPromotionId($promotionId)
            ->setJourneysPromotionApplicable($journeysPromotionApplicable);
    }

    /**
     * Get PromotionId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPromotionId(): ?string
    {
        return $this->PromotionId ?? null;
    }

    /**
     * Set PromotionId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $promotionId
     *
     * @return GetCustomerPromotionAvailabilityResponse
     */
    public function setPromotionId(?string $promotionId = null): self
    {
        // validation for constraint: string
        if (!is_null($promotionId) && !is_string($promotionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotionId, true), gettype($promotionId)), __LINE__);
        }
        if (is_null($promotionId) || (is_array($promotionId) && empty($promotionId))) {
            unset($this->PromotionId);
        } else {
            $this->PromotionId = $promotionId;
        }

        return $this;
    }

    /**
     * Get JourneysPromotionApplicable value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Customer\Arrays\ArrayOfJourneyPromotionApplicable|null
     */
    public function getJourneysPromotionApplicable(): ?ArrayOfJourneyPromotionApplicable
    {
        return $this->JourneysPromotionApplicable ?? null;
    }

    /**
     * Set JourneysPromotionApplicable value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Customer\Arrays\ArrayOfJourneyPromotionApplicable $journeysPromotionApplicable
     *
     * @return GetCustomerPromotionAvailabilityResponse
     */
    public function setJourneysPromotionApplicable(?ArrayOfJourneyPromotionApplicable $journeysPromotionApplicable = null): self
    {
        if (is_null($journeysPromotionApplicable) || (is_array($journeysPromotionApplicable) && empty($journeysPromotionApplicable))) {
            unset($this->JourneysPromotionApplicable);
        } else {
            $this->JourneysPromotionApplicable = $journeysPromotionApplicable;
        }

        return $this;
    }
}

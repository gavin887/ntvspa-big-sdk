<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Customer\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ApplyCustomerPromotionRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q9:ApplyCustomerPromotionRequest | tns:ApplyCustomerPromotionRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ApplyCustomerPromotionRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The PromotionId
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PromotionId = null;
    /**
     * The Journey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Journey|null
     */
    protected ?\Ntvspa\Big\Customer\Structs\Journey $Journey = null;

    /**
     * Constructor method for ApplyCustomerPromotionRequest
     *
     * @param string  $sourceSystem
     * @param string  $signature
     * @param string  $promotionId
     * @param Journey $journey
     *
     * @uses ApplyCustomerPromotionRequest::setSourceSystem()
     * @uses ApplyCustomerPromotionRequest::setSignature()
     * @uses ApplyCustomerPromotionRequest::setPromotionId()
     * @uses ApplyCustomerPromotionRequest::setJourney()
     */
    public function __construct(?string $sourceSystem = null, ?string $signature = null, ?string $promotionId = null, ?\Ntvspa\Big\Customer\Structs\Journey $journey = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setSignature($signature)
            ->setPromotionId($promotionId)
            ->setJourney($journey);
    }

    /**
     * Get SourceSystem value
     *
     * @return string|null
     */
    public function getSourceSystem(): ?string
    {
        return $this->SourceSystem;
    }

    /**
     * Set SourceSystem value
     *
     * @param string $sourceSystem
     *
     * @return ApplyCustomerPromotionRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\SourceSystem::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\SourceSystem::valueIsValid()
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\SourceSystem::valueIsValid($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\SourceSystem', is_array($sourceSystem) ? implode(', ', $sourceSystem) : var_export($sourceSystem, true), implode(', ', SourceSystem::getValidValues())), __LINE__);
        }
        $this->SourceSystem = $sourceSystem;

        return $this;
    }

    /**
     * Get Signature value
     *
     * @return string|null
     */
    public function getSignature(): ?string
    {
        return $this->Signature;
    }

    /**
     * Set Signature value
     *
     * @param string $signature
     *
     * @return ApplyCustomerPromotionRequest
     */
    public function setSignature(?string $signature = null): self
    {
        // validation for constraint: string
        if (!is_null($signature) && !is_string($signature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signature, true), gettype($signature)), __LINE__);
        }
        $this->Signature = $signature;

        return $this;
    }

    /**
     * Get PromotionId value
     *
     * @return string|null
     */
    public function getPromotionId(): ?string
    {
        return $this->PromotionId;
    }

    /**
     * Set PromotionId value
     *
     * @param string $promotionId
     *
     * @return ApplyCustomerPromotionRequest
     */
    public function setPromotionId(?string $promotionId = null): self
    {
        // validation for constraint: string
        if (!is_null($promotionId) && !is_string($promotionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotionId, true), gettype($promotionId)), __LINE__);
        }
        $this->PromotionId = $promotionId;

        return $this;
    }

    /**
     * Get Journey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Journey|null
     */
    public function getJourney(): ?\Ntvspa\Big\Customer\Structs\Journey
    {
        return $this->Journey ?? null;
    }

    /**
     * Set Journey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Journey $journey
     *
     * @return ApplyCustomerPromotionRequest
     */
    public function setJourney(?\Ntvspa\Big\Customer\Structs\Journey $journey = null): self
    {
        if (is_null($journey) || (is_array($journey) && empty($journey))) {
            unset($this->Journey);
        } else {
            $this->Journey = $journey;
        }

        return $this;
    }
}
<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Customer\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerPromotionAvailabilityRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q7:GetCustomerPromotionAvailabilityRequest | tns:GetCustomerPromotionAvailabilityRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetCustomerPromotionAvailabilityRequest extends AbstractStructBase
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
     * Constructor method for GetCustomerPromotionAvailabilityRequest
     *
     * @param string $sourceSystem
     * @param string $signature
     * @param string $promotionId
     *
     * @uses GetCustomerPromotionAvailabilityRequest::setSourceSystem()
     * @uses GetCustomerPromotionAvailabilityRequest::setSignature()
     * @uses GetCustomerPromotionAvailabilityRequest::setPromotionId()
     */
    public function __construct(?string $sourceSystem = null, ?string $signature = null, ?string $promotionId = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setSignature($signature)
            ->setPromotionId($promotionId);
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
     * @return GetCustomerPromotionAvailabilityRequest
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
     * @return GetCustomerPromotionAvailabilityRequest
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
     * @return GetCustomerPromotionAvailabilityRequest
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
}

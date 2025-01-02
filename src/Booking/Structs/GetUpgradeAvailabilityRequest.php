<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUpgradeAvailabilityRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q51:GetUpgradeAvailabilityRequest | tns:GetUpgradeAvailabilityRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetUpgradeAvailabilityRequest extends AbstractStructBase
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
     * The GetUpgradeAvailabilityData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var GetUpgradeAvailabilityData|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\GetUpgradeAvailabilityData $GetUpgradeAvailabilityData = null;

    /**
     * Constructor method for GetUpgradeAvailabilityRequest
     *
     * @param string                     $sourceSystem
     * @param string                     $signature
     * @param GetUpgradeAvailabilityData $getUpgradeAvailabilityData
     *
     * @uses GetUpgradeAvailabilityRequest::setSourceSystem()
     * @uses GetUpgradeAvailabilityRequest::setSignature()
     * @uses GetUpgradeAvailabilityRequest::setGetUpgradeAvailabilityData()
     */
    public function __construct(?string $sourceSystem = null, ?string $signature = null, ?\Ntvspa\Big\Booking\Structs\GetUpgradeAvailabilityData $getUpgradeAvailabilityData = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setSignature($signature)
            ->setGetUpgradeAvailabilityData($getUpgradeAvailabilityData);
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
     * @return GetUpgradeAvailabilityRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\SourceSystem::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\SourceSystem::valueIsValid()
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\SourceSystem::valueIsValid($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\SourceSystem', is_array($sourceSystem) ? implode(', ', $sourceSystem) : var_export($sourceSystem, true), implode(', ', SourceSystem::getValidValues())), __LINE__);
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
     * @return GetUpgradeAvailabilityRequest
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
     * Get GetUpgradeAvailabilityData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return GetUpgradeAvailabilityData|null
     */
    public function getGetUpgradeAvailabilityData(): ?\Ntvspa\Big\Booking\Structs\GetUpgradeAvailabilityData
    {
        return $this->GetUpgradeAvailabilityData ?? null;
    }

    /**
     * Set GetUpgradeAvailabilityData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param GetUpgradeAvailabilityData $getUpgradeAvailabilityData
     *
     * @return GetUpgradeAvailabilityRequest
     */
    public function setGetUpgradeAvailabilityData(?\Ntvspa\Big\Booking\Structs\GetUpgradeAvailabilityData $getUpgradeAvailabilityData = null): self
    {
        if (is_null($getUpgradeAvailabilityData) || (is_array($getUpgradeAvailabilityData) && empty($getUpgradeAvailabilityData))) {
            unset($this->GetUpgradeAvailabilityData);
        } else {
            $this->GetUpgradeAvailabilityData = $getUpgradeAvailabilityData;
        }

        return $this;
    }
}

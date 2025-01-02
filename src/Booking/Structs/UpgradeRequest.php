<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpgradeRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q53:UpgradeRequest | tns:UpgradeRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class UpgradeRequest extends AbstractStructBase
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
     * The UpgradeData
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var UpgradeData|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\UpgradeData $UpgradeData = null;

    /**
     * Constructor method for UpgradeRequest
     *
     * @param string      $sourceSystem
     * @param string      $signature
     * @param UpgradeData $upgradeData
     *
     * @uses UpgradeRequest::setSourceSystem()
     * @uses UpgradeRequest::setSignature()
     * @uses UpgradeRequest::setUpgradeData()
     */
    public function __construct(?string $sourceSystem = null, ?string $signature = null, ?\Ntvspa\Big\Booking\Structs\UpgradeData $upgradeData = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setSignature($signature)
            ->setUpgradeData($upgradeData);
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
     * @return UpgradeRequest
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
     * @return UpgradeRequest
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
     * Get UpgradeData value
     *
     * @return UpgradeData|null
     */
    public function getUpgradeData(): ?\Ntvspa\Big\Booking\Structs\UpgradeData
    {
        return $this->UpgradeData;
    }

    /**
     * Set UpgradeData value
     *
     * @param UpgradeData $upgradeData
     *
     * @return UpgradeRequest
     */
    public function setUpgradeData(?\Ntvspa\Big\Booking\Structs\UpgradeData $upgradeData = null): self
    {
        $this->UpgradeData = $upgradeData;

        return $this;
    }
}

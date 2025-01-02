<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClearSeatsPreferencesRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q55:ClearSeatsPreferencesRequest | tns:ClearSeatsPreferencesRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ClearSeatsPreferencesRequest extends AbstractStructBase
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
     * The Segment
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var Segment|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\Segment $Segment = null;

    /**
     * Constructor method for ClearSeatsPreferencesRequest
     *
     * @param string  $sourceSystem
     * @param string  $signature
     * @param Segment $segment
     *
     * @uses ClearSeatsPreferencesRequest::setSourceSystem()
     * @uses ClearSeatsPreferencesRequest::setSignature()
     * @uses ClearSeatsPreferencesRequest::setSegment()
     */
    public function __construct(?string $sourceSystem = null, ?string $signature = null, ?\Ntvspa\Big\Booking\Structs\Segment $segment = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setSignature($signature)
            ->setSegment($segment);
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
     * @return ClearSeatsPreferencesRequest
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
     * @return ClearSeatsPreferencesRequest
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
     * Get Segment value
     *
     * @return Segment|null
     */
    public function getSegment(): ?\Ntvspa\Big\Booking\Structs\Segment
    {
        return $this->Segment;
    }

    /**
     * Set Segment value
     *
     * @param Segment $segment
     *
     * @return ClearSeatsPreferencesRequest
     */
    public function setSegment(?\Ntvspa\Big\Booking\Structs\Segment $segment = null): self
    {
        $this->Segment = $segment;

        return $this;
    }
}

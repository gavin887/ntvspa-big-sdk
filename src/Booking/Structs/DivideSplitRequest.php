<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfshort;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DivideSplitRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q33:DivideSplitRequest | tns:DivideSplitRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class DivideSplitRequest extends AbstractStructBase
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
     * The PassengerNumberToDivide
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfshort|null
     */
    protected ?ArrayOfshort $PassengerNumberToDivide = null;

    /**
     * Constructor method for DivideSplitRequest
     *
     * @param string                                  $sourceSystem
     * @param string                                  $signature
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfshort $passengerNumberToDivide
     *
     * @uses DivideSplitRequest::setSourceSystem()
     * @uses DivideSplitRequest::setSignature()
     * @uses DivideSplitRequest::setPassengerNumberToDivide()
     */
    public function __construct(?string $sourceSystem = null, ?string $signature = null, ?ArrayOfshort $passengerNumberToDivide = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setSignature($signature)
            ->setPassengerNumberToDivide($passengerNumberToDivide);
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
     * @return DivideSplitRequest
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
     * @return DivideSplitRequest
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
     * Get PassengerNumberToDivide value
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfshort|null
     */
    public function getPassengerNumberToDivide(): ?ArrayOfshort
    {
        return $this->PassengerNumberToDivide;
    }

    /**
     * Set PassengerNumberToDivide value
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfshort $passengerNumberToDivide
     *
     * @return DivideSplitRequest
     */
    public function setPassengerNumberToDivide(?ArrayOfshort $passengerNumberToDivide = null): self
    {
        $this->PassengerNumberToDivide = $passengerNumberToDivide;

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OverrideFeeRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q29:OverrideFeeRequest | tns:OverrideFeeRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class OverrideFeeRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The FeeNumber
     *
     * @var int|null
     */
    protected ?int $FeeNumber = null;
    /**
     * The PassengerNumber
     *
     * @var int|null
     */
    protected ?int $PassengerNumber = null;
    /**
     * The NetAmount
     *
     * @var float|null
     */
    protected ?float $NetAmount = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;

    /**
     * Constructor method for OverrideFeeRequest
     *
     * @param string $sourceSystem
     * @param int    $feeNumber
     * @param int    $passengerNumber
     * @param float  $netAmount
     * @param string $signature
     *
     * @uses OverrideFeeRequest::setSourceSystem()
     * @uses OverrideFeeRequest::setFeeNumber()
     * @uses OverrideFeeRequest::setPassengerNumber()
     * @uses OverrideFeeRequest::setNetAmount()
     * @uses OverrideFeeRequest::setSignature()
     */
    public function __construct(?string $sourceSystem = null, ?int $feeNumber = null, ?int $passengerNumber = null, ?float $netAmount = null, ?string $signature = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setFeeNumber($feeNumber)
            ->setPassengerNumber($passengerNumber)
            ->setNetAmount($netAmount)
            ->setSignature($signature);
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
     * @return OverrideFeeRequest
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
     * Get FeeNumber value
     *
     * @return int|null
     */
    public function getFeeNumber(): ?int
    {
        return $this->FeeNumber;
    }

    /**
     * Set FeeNumber value
     *
     * @param int $feeNumber
     *
     * @return OverrideFeeRequest
     */
    public function setFeeNumber(?int $feeNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($feeNumber) && !(is_int($feeNumber) || ctype_digit($feeNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feeNumber, true), gettype($feeNumber)), __LINE__);
        }
        $this->FeeNumber = $feeNumber;

        return $this;
    }

    /**
     * Get PassengerNumber value
     *
     * @return int|null
     */
    public function getPassengerNumber(): ?int
    {
        return $this->PassengerNumber;
    }

    /**
     * Set PassengerNumber value
     *
     * @param int $passengerNumber
     *
     * @return OverrideFeeRequest
     */
    public function setPassengerNumber(?int $passengerNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($passengerNumber) && !(is_int($passengerNumber) || ctype_digit($passengerNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($passengerNumber, true), gettype($passengerNumber)), __LINE__);
        }
        $this->PassengerNumber = $passengerNumber;

        return $this;
    }

    /**
     * Get NetAmount value
     *
     * @return float|null
     */
    public function getNetAmount(): ?float
    {
        return $this->NetAmount;
    }

    /**
     * Set NetAmount value
     *
     * @param float $netAmount
     *
     * @return OverrideFeeRequest
     */
    public function setNetAmount(?float $netAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($netAmount) && !(is_float($netAmount) || is_numeric($netAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($netAmount, true), gettype($netAmount)), __LINE__);
        }
        $this->NetAmount = $netAmount;

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
     * @return OverrideFeeRequest
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
}

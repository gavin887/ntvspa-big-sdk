<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\SSRState;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaxSSR Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PaxSSR
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class PaxSSR extends AbstractStructBase
{
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $Amount = null;
    /**
     * The State
     *
     * @var string|null
     */
    protected ?string $State = null;
    /**
     * The Quantity
     *
     * @var int|null
     */
    protected ?int $Quantity = null;
    /**
     * The SSRCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $SSRCode = null;
    /**
     * The PassengerNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var int|null
     */
    protected ?int $PassengerNumber = null;
    /**
     * The Note
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Note = null;
    /**
     * The FeeCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FeeCode = null;
    /**
     * The SSRDetail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $SSRDetail = null;

    /**
     * Constructor method for PaxSSR
     *
     * @param float  $amount
     * @param string $state
     * @param int    $quantity
     * @param string $sSRCode
     * @param int    $passengerNumber
     * @param string $note
     * @param string $feeCode
     * @param string $sSRDetail
     *
     * @uses PaxSSR::setAmount()
     * @uses PaxSSR::setState()
     * @uses PaxSSR::setQuantity()
     * @uses PaxSSR::setSSRCode()
     * @uses PaxSSR::setPassengerNumber()
     * @uses PaxSSR::setNote()
     * @uses PaxSSR::setFeeCode()
     * @uses PaxSSR::setSSRDetail()
     */
    public function __construct(?float $amount = null, ?string $state = null, ?int $quantity = null, ?string $sSRCode = null, ?int $passengerNumber = null, ?string $note = null, ?string $feeCode = null, ?string $sSRDetail = null)
    {
        $this
            ->setAmount($amount)
            ->setState($state)
            ->setQuantity($quantity)
            ->setSSRCode($sSRCode)
            ->setPassengerNumber($passengerNumber)
            ->setNote($note)
            ->setFeeCode($feeCode)
            ->setSSRDetail($sSRDetail);
    }

    /**
     * Get Amount value
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->Amount;
    }

    /**
     * Set Amount value
     *
     * @param float $amount
     *
     * @return PaxSSR
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;

        return $this;
    }

    /**
     * Get State value
     *
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->State;
    }

    /**
     * Set State value
     *
     * @param string $state
     *
     * @return PaxSSR
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\SSRState::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\SSRState::valueIsValid()
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\SSRState::valueIsValid($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\SSRState', is_array($state) ? implode(', ', $state) : var_export($state, true), implode(', ', SSRState::getValidValues())), __LINE__);
        }
        $this->State = $state;

        return $this;
    }

    /**
     * Get Quantity value
     *
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->Quantity;
    }

    /**
     * Set Quantity value
     *
     * @param int $quantity
     *
     * @return PaxSSR
     */
    public function setQuantity(?int $quantity = null): self
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;

        return $this;
    }

    /**
     * Get SSRCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getSSRCode(): ?string
    {
        return $this->SSRCode ?? null;
    }

    /**
     * Set SSRCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $sSRCode
     *
     * @return PaxSSR
     */
    public function setSSRCode(?string $sSRCode = null): self
    {
        // validation for constraint: string
        if (!is_null($sSRCode) && !is_string($sSRCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sSRCode, true), gettype($sSRCode)), __LINE__);
        }
        if (is_null($sSRCode) || (is_array($sSRCode) && empty($sSRCode))) {
            unset($this->SSRCode);
        } else {
            $this->SSRCode = $sSRCode;
        }

        return $this;
    }

    /**
     * Get PassengerNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return int|null
     */
    public function getPassengerNumber(): ?int
    {
        return $this->PassengerNumber ?? null;
    }

    /**
     * Set PassengerNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param int $passengerNumber
     *
     * @return PaxSSR
     */
    public function setPassengerNumber(?int $passengerNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($passengerNumber) && !(is_int($passengerNumber) || ctype_digit($passengerNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($passengerNumber, true), gettype($passengerNumber)), __LINE__);
        }
        if (is_null($passengerNumber) || (is_array($passengerNumber) && empty($passengerNumber))) {
            unset($this->PassengerNumber);
        } else {
            $this->PassengerNumber = $passengerNumber;
        }

        return $this;
    }

    /**
     * Get Note value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->Note ?? null;
    }

    /**
     * Set Note value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $note
     *
     * @return PaxSSR
     */
    public function setNote(?string $note = null): self
    {
        // validation for constraint: string
        if (!is_null($note) && !is_string($note)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($note, true), gettype($note)), __LINE__);
        }
        if (is_null($note) || (is_array($note) && empty($note))) {
            unset($this->Note);
        } else {
            $this->Note = $note;
        }

        return $this;
    }

    /**
     * Get FeeCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFeeCode(): ?string
    {
        return $this->FeeCode ?? null;
    }

    /**
     * Set FeeCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $feeCode
     *
     * @return PaxSSR
     */
    public function setFeeCode(?string $feeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($feeCode) && !is_string($feeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeCode, true), gettype($feeCode)), __LINE__);
        }
        if (is_null($feeCode) || (is_array($feeCode) && empty($feeCode))) {
            unset($this->FeeCode);
        } else {
            $this->FeeCode = $feeCode;
        }

        return $this;
    }

    /**
     * Get SSRDetail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getSSRDetail(): ?string
    {
        return $this->SSRDetail ?? null;
    }

    /**
     * Set SSRDetail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $sSRDetail
     *
     * @return PaxSSR
     */
    public function setSSRDetail(?string $sSRDetail = null): self
    {
        // validation for constraint: string
        if (!is_null($sSRDetail) && !is_string($sSRDetail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sSRDetail, true), gettype($sSRDetail)), __LINE__);
        }
        if (is_null($sSRDetail) || (is_array($sSRDetail) && empty($sSRDetail))) {
            unset($this->SSRDetail);
        } else {
            $this->SSRDetail = $sSRDetail;
        }

        return $this;
    }
}

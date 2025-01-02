<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareLockInfoChoiceData Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FareLockInfoChoiceData
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class FareLockInfoChoiceData extends AbstractStructBase
{
    /**
     * The PriceForPax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $PriceForPax = null;
    /**
     * The PriceForBooking
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $PriceForBooking = null;
    /**
     * The HoldUntil
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $HoldUntil = null;
    /**
     * The FareLockID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $FareLockID = null;

    /**
     * Constructor method for FareLockInfoChoiceData
     *
     * @param float  $priceForPax
     * @param float  $priceForBooking
     * @param string $holdUntil
     * @param int    $fareLockID
     *
     * @uses FareLockInfoChoiceData::setPriceForPax()
     * @uses FareLockInfoChoiceData::setPriceForBooking()
     * @uses FareLockInfoChoiceData::setHoldUntil()
     * @uses FareLockInfoChoiceData::setFareLockID()
     */
    public function __construct(?float $priceForPax = null, ?float $priceForBooking = null, ?string $holdUntil = null, ?int $fareLockID = null)
    {
        $this
            ->setPriceForPax($priceForPax)
            ->setPriceForBooking($priceForBooking)
            ->setHoldUntil($holdUntil)
            ->setFareLockID($fareLockID);
    }

    /**
     * Get PriceForPax value
     *
     * @return float|null
     */
    public function getPriceForPax(): ?float
    {
        return $this->PriceForPax;
    }

    /**
     * Set PriceForPax value
     *
     * @param float $priceForPax
     *
     * @return FareLockInfoChoiceData
     */
    public function setPriceForPax(?float $priceForPax = null): self
    {
        // validation for constraint: float
        if (!is_null($priceForPax) && !(is_float($priceForPax) || is_numeric($priceForPax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($priceForPax, true), gettype($priceForPax)), __LINE__);
        }
        $this->PriceForPax = $priceForPax;

        return $this;
    }

    /**
     * Get PriceForBooking value
     *
     * @return float|null
     */
    public function getPriceForBooking(): ?float
    {
        return $this->PriceForBooking;
    }

    /**
     * Set PriceForBooking value
     *
     * @param float $priceForBooking
     *
     * @return FareLockInfoChoiceData
     */
    public function setPriceForBooking(?float $priceForBooking = null): self
    {
        // validation for constraint: float
        if (!is_null($priceForBooking) && !(is_float($priceForBooking) || is_numeric($priceForBooking))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($priceForBooking, true), gettype($priceForBooking)), __LINE__);
        }
        $this->PriceForBooking = $priceForBooking;

        return $this;
    }

    /**
     * Get HoldUntil value
     *
     * @return string|null
     */
    public function getHoldUntil(): ?string
    {
        return $this->HoldUntil;
    }

    /**
     * Set HoldUntil value
     *
     * @param string $holdUntil
     *
     * @return FareLockInfoChoiceData
     */
    public function setHoldUntil(?string $holdUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($holdUntil) && !is_string($holdUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($holdUntil, true), gettype($holdUntil)), __LINE__);
        }
        $this->HoldUntil = $holdUntil;

        return $this;
    }

    /**
     * Get FareLockID value
     *
     * @return int|null
     */
    public function getFareLockID(): ?int
    {
        return $this->FareLockID;
    }

    /**
     * Set FareLockID value
     *
     * @param int $fareLockID
     *
     * @return FareLockInfoChoiceData
     */
    public function setFareLockID(?int $fareLockID = null): self
    {
        // validation for constraint: int
        if (!is_null($fareLockID) && !(is_int($fareLockID) || ctype_digit($fareLockID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fareLockID, true), gettype($fareLockID)), __LINE__);
        }
        $this->FareLockID = $fareLockID;

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfFareLockInfoChoiceData;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareLockInfoData Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FareLockInfoData
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class FareLockInfoData extends AbstractStructBase
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
     * The IdleTimeout
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $IdleTimeout = null;
    /**
     * The DurationTimeout
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $DurationTimeout = null;
    /**
     * The FareLockID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $FareLockID = null;
    /**
     * The FareLockInfoChoiceData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfFareLockInfoChoiceData|null
     */
    protected ?ArrayOfFareLockInfoChoiceData $FareLockInfoChoiceData = null;

    /**
     * Constructor method for FareLockInfoData
     *
     * @param float                                                    $priceForPax
     * @param float                                                    $priceForBooking
     * @param string                                                   $holdUntil
     * @param int                                                      $idleTimeout
     * @param int                                                      $durationTimeout
     * @param int                                                      $fareLockID
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfFareLockInfoChoiceData $fareLockInfoChoiceData
     *
     * @uses FareLockInfoData::setPriceForPax()
     * @uses FareLockInfoData::setPriceForBooking()
     * @uses FareLockInfoData::setHoldUntil()
     * @uses FareLockInfoData::setIdleTimeout()
     * @uses FareLockInfoData::setDurationTimeout()
     * @uses FareLockInfoData::setFareLockID()
     * @uses FareLockInfoData::setFareLockInfoChoiceData()
     */
    public function __construct(?float $priceForPax = null, ?float $priceForBooking = null, ?string $holdUntil = null, ?int $idleTimeout = null, ?int $durationTimeout = null, ?int $fareLockID = null, ?ArrayOfFareLockInfoChoiceData $fareLockInfoChoiceData = null)
    {
        $this
            ->setPriceForPax($priceForPax)
            ->setPriceForBooking($priceForBooking)
            ->setHoldUntil($holdUntil)
            ->setIdleTimeout($idleTimeout)
            ->setDurationTimeout($durationTimeout)
            ->setFareLockID($fareLockID)
            ->setFareLockInfoChoiceData($fareLockInfoChoiceData);
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
     * @return FareLockInfoData
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
     * @return FareLockInfoData
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
     * @return FareLockInfoData
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
     * Get IdleTimeout value
     *
     * @return int|null
     */
    public function getIdleTimeout(): ?int
    {
        return $this->IdleTimeout;
    }

    /**
     * Set IdleTimeout value
     *
     * @param int $idleTimeout
     *
     * @return FareLockInfoData
     */
    public function setIdleTimeout(?int $idleTimeout = null): self
    {
        // validation for constraint: int
        if (!is_null($idleTimeout) && !(is_int($idleTimeout) || ctype_digit($idleTimeout))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idleTimeout, true), gettype($idleTimeout)), __LINE__);
        }
        $this->IdleTimeout = $idleTimeout;

        return $this;
    }

    /**
     * Get DurationTimeout value
     *
     * @return int|null
     */
    public function getDurationTimeout(): ?int
    {
        return $this->DurationTimeout;
    }

    /**
     * Set DurationTimeout value
     *
     * @param int $durationTimeout
     *
     * @return FareLockInfoData
     */
    public function setDurationTimeout(?int $durationTimeout = null): self
    {
        // validation for constraint: int
        if (!is_null($durationTimeout) && !(is_int($durationTimeout) || ctype_digit($durationTimeout))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($durationTimeout, true), gettype($durationTimeout)), __LINE__);
        }
        $this->DurationTimeout = $durationTimeout;

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
     * @return FareLockInfoData
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

    /**
     * Get FareLockInfoChoiceData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfFareLockInfoChoiceData|null
     */
    public function getFareLockInfoChoiceData(): ?ArrayOfFareLockInfoChoiceData
    {
        return $this->FareLockInfoChoiceData ?? null;
    }

    /**
     * Set FareLockInfoChoiceData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfFareLockInfoChoiceData $fareLockInfoChoiceData
     *
     * @return FareLockInfoData
     */
    public function setFareLockInfoChoiceData(?ArrayOfFareLockInfoChoiceData $fareLockInfoChoiceData = null): self
    {
        if (is_null($fareLockInfoChoiceData) || (is_array($fareLockInfoChoiceData) && empty($fareLockInfoChoiceData))) {
            unset($this->FareLockInfoChoiceData);
        } else {
            $this->FareLockInfoChoiceData = $fareLockInfoChoiceData;
        }

        return $this;
    }
}

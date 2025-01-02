<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatGroupPassengerFee Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SeatGroupPassengerFee
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class SeatGroupPassengerFee extends AbstractStructBase
{
    /**
     * The SeatGroup
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $SeatGroup = null;
    /**
     * The PassengerNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $PassengerNumber = null;
    /**
     * The LoyaltyOverride
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $LoyaltyOverride = null;
    /**
     * The PassengerFee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var PassengerFee|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\PassengerFee $PassengerFee = null;

    /**
     * Constructor method for SeatGroupPassengerFee
     *
     * @param int          $seatGroup
     * @param int          $passengerNumber
     * @param bool         $loyaltyOverride
     * @param PassengerFee $passengerFee
     *
     * @uses SeatGroupPassengerFee::setSeatGroup()
     * @uses SeatGroupPassengerFee::setPassengerNumber()
     * @uses SeatGroupPassengerFee::setLoyaltyOverride()
     * @uses SeatGroupPassengerFee::setPassengerFee()
     */
    public function __construct(?int $seatGroup = null, ?int $passengerNumber = null, ?bool $loyaltyOverride = null, ?\Ntvspa\Big\Booking\Structs\PassengerFee $passengerFee = null)
    {
        $this
            ->setSeatGroup($seatGroup)
            ->setPassengerNumber($passengerNumber)
            ->setLoyaltyOverride($loyaltyOverride)
            ->setPassengerFee($passengerFee);
    }

    /**
     * Get SeatGroup value
     *
     * @return int|null
     */
    public function getSeatGroup(): ?int
    {
        return $this->SeatGroup;
    }

    /**
     * Set SeatGroup value
     *
     * @param int $seatGroup
     *
     * @return SeatGroupPassengerFee
     */
    public function setSeatGroup(?int $seatGroup = null): self
    {
        // validation for constraint: int
        if (!is_null($seatGroup) && !(is_int($seatGroup) || ctype_digit($seatGroup))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($seatGroup, true), gettype($seatGroup)), __LINE__);
        }
        $this->SeatGroup = $seatGroup;

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
     * @return SeatGroupPassengerFee
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
     * Get LoyaltyOverride value
     *
     * @return bool|null
     */
    public function getLoyaltyOverride(): ?bool
    {
        return $this->LoyaltyOverride;
    }

    /**
     * Set LoyaltyOverride value
     *
     * @param bool $loyaltyOverride
     *
     * @return SeatGroupPassengerFee
     */
    public function setLoyaltyOverride(?bool $loyaltyOverride = null): self
    {
        // validation for constraint: boolean
        if (!is_null($loyaltyOverride) && !is_bool($loyaltyOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($loyaltyOverride, true), gettype($loyaltyOverride)), __LINE__);
        }
        $this->LoyaltyOverride = $loyaltyOverride;

        return $this;
    }

    /**
     * Get PassengerFee value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return PassengerFee|null
     */
    public function getPassengerFee(): ?\Ntvspa\Big\Booking\Structs\PassengerFee
    {
        return $this->PassengerFee ?? null;
    }

    /**
     * Set PassengerFee value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param PassengerFee $passengerFee
     *
     * @return SeatGroupPassengerFee
     */
    public function setPassengerFee(?\Ntvspa\Big\Booking\Structs\PassengerFee $passengerFee = null): self
    {
        if (is_null($passengerFee) || (is_array($passengerFee) && empty($passengerFee))) {
            unset($this->PassengerFee);
        } else {
            $this->PassengerFee = $passengerFee;
        }

        return $this;
    }
}

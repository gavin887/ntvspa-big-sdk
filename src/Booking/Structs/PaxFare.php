<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfBookingServiceCharge;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaxFare Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PaxFare
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class PaxFare extends AbstractStructBase
{
    /**
     * The FullPaxFarePrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $FullPaxFarePrice = null;
    /**
     * The DiscountedPaxFarePrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $DiscountedPaxFarePrice = null;
    /**
     * The PaxDiscountCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PaxDiscountCode = null;
    /**
     * The FareDiscountCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FareDiscountCode = null;
    /**
     * The PaxType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PaxType = null;
    /**
     * The BookingServiceCharges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfBookingServiceCharge|null
     */
    protected ?ArrayOfBookingServiceCharge $BookingServiceCharges = null;

    /**
     * Constructor method for PaxFare
     *
     * @param float                                                  $fullPaxFarePrice
     * @param float                                                  $discountedPaxFarePrice
     * @param string                                                 $paxDiscountCode
     * @param string                                                 $fareDiscountCode
     * @param string                                                 $paxType
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfBookingServiceCharge $bookingServiceCharges
     *
     * @uses PaxFare::setFullPaxFarePrice()
     * @uses PaxFare::setDiscountedPaxFarePrice()
     * @uses PaxFare::setPaxDiscountCode()
     * @uses PaxFare::setFareDiscountCode()
     * @uses PaxFare::setPaxType()
     * @uses PaxFare::setBookingServiceCharges()
     */
    public function __construct(?float $fullPaxFarePrice = null, ?float $discountedPaxFarePrice = null, ?string $paxDiscountCode = null, ?string $fareDiscountCode = null, ?string $paxType = null, ?ArrayOfBookingServiceCharge $bookingServiceCharges = null)
    {
        $this
            ->setFullPaxFarePrice($fullPaxFarePrice)
            ->setDiscountedPaxFarePrice($discountedPaxFarePrice)
            ->setPaxDiscountCode($paxDiscountCode)
            ->setFareDiscountCode($fareDiscountCode)
            ->setPaxType($paxType)
            ->setBookingServiceCharges($bookingServiceCharges);
    }

    /**
     * Get FullPaxFarePrice value
     *
     * @return float|null
     */
    public function getFullPaxFarePrice(): ?float
    {
        return $this->FullPaxFarePrice;
    }

    /**
     * Set FullPaxFarePrice value
     *
     * @param float $fullPaxFarePrice
     *
     * @return PaxFare
     */
    public function setFullPaxFarePrice(?float $fullPaxFarePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($fullPaxFarePrice) && !(is_float($fullPaxFarePrice) || is_numeric($fullPaxFarePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($fullPaxFarePrice, true), gettype($fullPaxFarePrice)), __LINE__);
        }
        $this->FullPaxFarePrice = $fullPaxFarePrice;

        return $this;
    }

    /**
     * Get DiscountedPaxFarePrice value
     *
     * @return float|null
     */
    public function getDiscountedPaxFarePrice(): ?float
    {
        return $this->DiscountedPaxFarePrice;
    }

    /**
     * Set DiscountedPaxFarePrice value
     *
     * @param float $discountedPaxFarePrice
     *
     * @return PaxFare
     */
    public function setDiscountedPaxFarePrice(?float $discountedPaxFarePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($discountedPaxFarePrice) && !(is_float($discountedPaxFarePrice) || is_numeric($discountedPaxFarePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($discountedPaxFarePrice, true), gettype($discountedPaxFarePrice)), __LINE__);
        }
        $this->DiscountedPaxFarePrice = $discountedPaxFarePrice;

        return $this;
    }

    /**
     * Get PaxDiscountCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPaxDiscountCode(): ?string
    {
        return $this->PaxDiscountCode ?? null;
    }

    /**
     * Set PaxDiscountCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $paxDiscountCode
     *
     * @return PaxFare
     */
    public function setPaxDiscountCode(?string $paxDiscountCode = null): self
    {
        // validation for constraint: string
        if (!is_null($paxDiscountCode) && !is_string($paxDiscountCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paxDiscountCode, true), gettype($paxDiscountCode)), __LINE__);
        }
        if (is_null($paxDiscountCode) || (is_array($paxDiscountCode) && empty($paxDiscountCode))) {
            unset($this->PaxDiscountCode);
        } else {
            $this->PaxDiscountCode = $paxDiscountCode;
        }

        return $this;
    }

    /**
     * Get FareDiscountCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFareDiscountCode(): ?string
    {
        return $this->FareDiscountCode ?? null;
    }

    /**
     * Set FareDiscountCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $fareDiscountCode
     *
     * @return PaxFare
     */
    public function setFareDiscountCode(?string $fareDiscountCode = null): self
    {
        // validation for constraint: string
        if (!is_null($fareDiscountCode) && !is_string($fareDiscountCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareDiscountCode, true), gettype($fareDiscountCode)), __LINE__);
        }
        if (is_null($fareDiscountCode) || (is_array($fareDiscountCode) && empty($fareDiscountCode))) {
            unset($this->FareDiscountCode);
        } else {
            $this->FareDiscountCode = $fareDiscountCode;
        }

        return $this;
    }

    /**
     * Get PaxType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPaxType(): ?string
    {
        return $this->PaxType ?? null;
    }

    /**
     * Set PaxType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $paxType
     *
     * @return PaxFare
     */
    public function setPaxType(?string $paxType = null): self
    {
        // validation for constraint: string
        if (!is_null($paxType) && !is_string($paxType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paxType, true), gettype($paxType)), __LINE__);
        }
        if (is_null($paxType) || (is_array($paxType) && empty($paxType))) {
            unset($this->PaxType);
        } else {
            $this->PaxType = $paxType;
        }

        return $this;
    }

    /**
     * Get BookingServiceCharges value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfBookingServiceCharge|null
     */
    public function getBookingServiceCharges(): ?ArrayOfBookingServiceCharge
    {
        return $this->BookingServiceCharges ?? null;
    }

    /**
     * Set BookingServiceCharges value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfBookingServiceCharge $bookingServiceCharges
     *
     * @return PaxFare
     */
    public function setBookingServiceCharges(?ArrayOfBookingServiceCharge $bookingServiceCharges = null): self
    {
        if (is_null($bookingServiceCharges) || (is_array($bookingServiceCharges) && empty($bookingServiceCharges))) {
            unset($this->BookingServiceCharges);
        } else {
            $this->BookingServiceCharges = $bookingServiceCharges;
        }

        return $this;
    }
}

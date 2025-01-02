<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\ChargeType;
use Ntvspa\Big\Booking\Enums\CollectType;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingServiceCharge Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BookingServiceCharge
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class BookingServiceCharge extends AbstractStructBase
{
    /**
     * The CollectType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $CollectType = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var float|null
     */
    protected ?float $Amount = null;
    /**
     * The ChargeCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ChargeCode = null;
    /**
     * The ChargeDetail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ChargeDetail = null;
    /**
     * The ChargeType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ChargeType = null;
    /**
     * The TicketCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $TicketCode = null;

    /**
     * Constructor method for BookingServiceCharge
     *
     * @param string $collectType
     * @param float  $amount
     * @param string $chargeCode
     * @param string $chargeDetail
     * @param string $chargeType
     * @param string $ticketCode
     *
     * @uses BookingServiceCharge::setCollectType()
     * @uses BookingServiceCharge::setAmount()
     * @uses BookingServiceCharge::setChargeCode()
     * @uses BookingServiceCharge::setChargeDetail()
     * @uses BookingServiceCharge::setChargeType()
     * @uses BookingServiceCharge::setTicketCode()
     */
    public function __construct(?string $collectType = null, ?float $amount = null, ?string $chargeCode = null, ?string $chargeDetail = null, ?string $chargeType = null, ?string $ticketCode = null)
    {
        $this
            ->setCollectType($collectType)
            ->setAmount($amount)
            ->setChargeCode($chargeCode)
            ->setChargeDetail($chargeDetail)
            ->setChargeType($chargeType)
            ->setTicketCode($ticketCode);
    }

    /**
     * Get CollectType value
     *
     * @return string|null
     */
    public function getCollectType(): ?string
    {
        return $this->CollectType;
    }

    /**
     * Set CollectType value
     *
     * @param string $collectType
     *
     * @return BookingServiceCharge
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\CollectType::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\CollectType::valueIsValid()
     */
    public function setCollectType(?string $collectType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\CollectType::valueIsValid($collectType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\CollectType', is_array($collectType) ? implode(', ', $collectType) : var_export($collectType, true), implode(', ', CollectType::getValidValues())), __LINE__);
        }
        $this->CollectType = $collectType;

        return $this;
    }

    /**
     * Get Amount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->Amount ?? null;
    }

    /**
     * Set Amount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param float $amount
     *
     * @return BookingServiceCharge
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        if (is_null($amount) || (is_array($amount) && empty($amount))) {
            unset($this->Amount);
        } else {
            $this->Amount = $amount;
        }

        return $this;
    }

    /**
     * Get ChargeCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getChargeCode(): ?string
    {
        return $this->ChargeCode ?? null;
    }

    /**
     * Set ChargeCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $chargeCode
     *
     * @return BookingServiceCharge
     */
    public function setChargeCode(?string $chargeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($chargeCode) && !is_string($chargeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($chargeCode, true), gettype($chargeCode)), __LINE__);
        }
        if (is_null($chargeCode) || (is_array($chargeCode) && empty($chargeCode))) {
            unset($this->ChargeCode);
        } else {
            $this->ChargeCode = $chargeCode;
        }

        return $this;
    }

    /**
     * Get ChargeDetail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getChargeDetail(): ?string
    {
        return $this->ChargeDetail ?? null;
    }

    /**
     * Set ChargeDetail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $chargeDetail
     *
     * @return BookingServiceCharge
     */
    public function setChargeDetail(?string $chargeDetail = null): self
    {
        // validation for constraint: string
        if (!is_null($chargeDetail) && !is_string($chargeDetail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($chargeDetail, true), gettype($chargeDetail)), __LINE__);
        }
        if (is_null($chargeDetail) || (is_array($chargeDetail) && empty($chargeDetail))) {
            unset($this->ChargeDetail);
        } else {
            $this->ChargeDetail = $chargeDetail;
        }

        return $this;
    }

    /**
     * Get ChargeType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getChargeType(): ?string
    {
        return $this->ChargeType ?? null;
    }

    /**
     * Set ChargeType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $chargeType
     *
     * @return BookingServiceCharge
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\ChargeType::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\ChargeType::valueIsValid()
     */
    public function setChargeType(?string $chargeType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\ChargeType::valueIsValid($chargeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\ChargeType', is_array($chargeType) ? implode(', ', $chargeType) : var_export($chargeType, true), implode(', ', ChargeType::getValidValues())), __LINE__);
        }
        if (is_null($chargeType) || (is_array($chargeType) && empty($chargeType))) {
            unset($this->ChargeType);
        } else {
            $this->ChargeType = $chargeType;
        }

        return $this;
    }

    /**
     * Get TicketCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTicketCode(): ?string
    {
        return $this->TicketCode ?? null;
    }

    /**
     * Set TicketCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $ticketCode
     *
     * @return BookingServiceCharge
     */
    public function setTicketCode(?string $ticketCode = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketCode) && !is_string($ticketCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketCode, true), gettype($ticketCode)), __LINE__);
        }
        if (is_null($ticketCode) || (is_array($ticketCode) && empty($ticketCode))) {
            unset($this->TicketCode);
        } else {
            $this->TicketCode = $ticketCode;
        }

        return $this;
    }
}

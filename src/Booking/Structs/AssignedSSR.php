<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssignedSSR Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AssignedSSR
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class AssignedSSR extends AbstractStructBase
{
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
     * The Quantity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var int|null
     */
    protected ?int $Quantity = null;
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
     * The SSRDetail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $SSRDetail = null;

    /**
     * Constructor method for AssignedSSR
     *
     * @param string $sSRCode
     * @param int    $quantity
     * @param int    $passengerNumber
     * @param string $sSRDetail
     *
     * @uses AssignedSSR::setSSRCode()
     * @uses AssignedSSR::setQuantity()
     * @uses AssignedSSR::setPassengerNumber()
     * @uses AssignedSSR::setSSRDetail()
     */
    public function __construct(?string $sSRCode = null, ?int $quantity = null, ?int $passengerNumber = null, ?string $sSRDetail = null)
    {
        $this
            ->setSSRCode($sSRCode)
            ->setQuantity($quantity)
            ->setPassengerNumber($passengerNumber)
            ->setSSRDetail($sSRDetail);
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
     * @return AssignedSSR
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
     * Get Quantity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->Quantity ?? null;
    }

    /**
     * Set Quantity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param int $quantity
     *
     * @return AssignedSSR
     */
    public function setQuantity(?int $quantity = null): self
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        if (is_null($quantity) || (is_array($quantity) && empty($quantity))) {
            unset($this->Quantity);
        } else {
            $this->Quantity = $quantity;
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
     * @return AssignedSSR
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
     * @return AssignedSSR
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

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfNullableOfshort;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailableSSR Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AvailableSSR
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class AvailableSSR extends AbstractStructBase
{
    /**
     * The SSRNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var int|null
     */
    protected ?int $SSRNumber = null;
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
     * The PassengerNumberList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfNullableOfshort|null
     */
    protected ?ArrayOfNullableOfshort $PassengerNumberList = null;
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
     * The Available
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var int|null
     */
    protected ?int $Available = null;
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
     * Constructor method for AvailableSSR
     *
     * @param int                                               $sSRNumber
     * @param string                                            $sSRCode
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfNullableOfshort $passengerNumberList
     * @param string                                            $note
     * @param string                                            $feeCode
     * @param string                                            $sSRDetail
     * @param int                                               $available
     * @param float                                             $amount
     *
     * @uses AvailableSSR::setSSRNumber()
     * @uses AvailableSSR::setSSRCode()
     * @uses AvailableSSR::setPassengerNumberList()
     * @uses AvailableSSR::setNote()
     * @uses AvailableSSR::setFeeCode()
     * @uses AvailableSSR::setSSRDetail()
     * @uses AvailableSSR::setAvailable()
     * @uses AvailableSSR::setAmount()
     */
    public function __construct(?int $sSRNumber = null, ?string $sSRCode = null, ?ArrayOfNullableOfshort $passengerNumberList = null, ?string $note = null, ?string $feeCode = null, ?string $sSRDetail = null, ?int $available = null, ?float $amount = null)
    {
        $this
            ->setSSRNumber($sSRNumber)
            ->setSSRCode($sSRCode)
            ->setPassengerNumberList($passengerNumberList)
            ->setNote($note)
            ->setFeeCode($feeCode)
            ->setSSRDetail($sSRDetail)
            ->setAvailable($available)
            ->setAmount($amount);
    }

    /**
     * Get SSRNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return int|null
     */
    public function getSSRNumber(): ?int
    {
        return $this->SSRNumber ?? null;
    }

    /**
     * Set SSRNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param int $sSRNumber
     *
     * @return AvailableSSR
     */
    public function setSSRNumber(?int $sSRNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($sSRNumber) && !(is_int($sSRNumber) || ctype_digit($sSRNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sSRNumber, true), gettype($sSRNumber)), __LINE__);
        }
        if (is_null($sSRNumber) || (is_array($sSRNumber) && empty($sSRNumber))) {
            unset($this->SSRNumber);
        } else {
            $this->SSRNumber = $sSRNumber;
        }

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
     * @return AvailableSSR
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
     * Get PassengerNumberList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfNullableOfshort|null
     */
    public function getPassengerNumberList(): ?ArrayOfNullableOfshort
    {
        return $this->PassengerNumberList ?? null;
    }

    /**
     * Set PassengerNumberList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfNullableOfshort $passengerNumberList
     *
     * @return AvailableSSR
     */
    public function setPassengerNumberList(?ArrayOfNullableOfshort $passengerNumberList = null): self
    {
        if (is_null($passengerNumberList) || (is_array($passengerNumberList) && empty($passengerNumberList))) {
            unset($this->PassengerNumberList);
        } else {
            $this->PassengerNumberList = $passengerNumberList;
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
     * @return AvailableSSR
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
     * @return AvailableSSR
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
     * @return AvailableSSR
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

    /**
     * Get Available value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return int|null
     */
    public function getAvailable(): ?int
    {
        return $this->Available ?? null;
    }

    /**
     * Set Available value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param int $available
     *
     * @return AvailableSSR
     */
    public function setAvailable(?int $available = null): self
    {
        // validation for constraint: int
        if (!is_null($available) && !(is_int($available) || ctype_digit($available))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($available, true), gettype($available)), __LINE__);
        }
        if (is_null($available) || (is_array($available) && empty($available))) {
            unset($this->Available);
        } else {
            $this->Available = $available;
        }

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
     * @return AvailableSSR
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
}

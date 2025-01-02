<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfBookingServiceCharge;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerFee Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PassengerFee
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class PassengerFee extends AbstractStructBase
{
    /**
     * The CreatedDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CreatedDate = null;
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
     * The FeeDetail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FeeDetail = null;
    /**
     * The FeeNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var int|null
     */
    protected ?int $FeeNumber = null;
    /**
     * The FeeOverride
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var bool|null
     */
    protected ?bool $FeeOverride = null;
    /**
     * The TrainReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $TrainReference = null;
    /**
     * The IsProtected
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var bool|null
     */
    protected ?bool $IsProtected = null;
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
     * The PaymentNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var int|null
     */
    protected ?int $PaymentNumber = null;
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
     * The SSRNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var int|null
     */
    protected ?int $SSRNumber = null;
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
     * Constructor method for PassengerFee
     *
     * @param string                                                 $createdDate
     * @param string                                                 $feeCode
     * @param string                                                 $feeDetail
     * @param int                                                    $feeNumber
     * @param bool                                                   $feeOverride
     * @param string                                                 $trainReference
     * @param bool                                                   $isProtected
     * @param string                                                 $note
     * @param int                                                    $paymentNumber
     * @param string                                                 $sSRCode
     * @param int                                                    $sSRNumber
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfBookingServiceCharge $bookingServiceCharges
     *
     * @uses PassengerFee::setCreatedDate()
     * @uses PassengerFee::setFeeCode()
     * @uses PassengerFee::setFeeDetail()
     * @uses PassengerFee::setFeeNumber()
     * @uses PassengerFee::setFeeOverride()
     * @uses PassengerFee::setTrainReference()
     * @uses PassengerFee::setIsProtected()
     * @uses PassengerFee::setNote()
     * @uses PassengerFee::setPaymentNumber()
     * @uses PassengerFee::setSSRCode()
     * @uses PassengerFee::setSSRNumber()
     * @uses PassengerFee::setBookingServiceCharges()
     */
    public function __construct(?string $createdDate = null, ?string $feeCode = null, ?string $feeDetail = null, ?int $feeNumber = null, ?bool $feeOverride = null, ?string $trainReference = null, ?bool $isProtected = null, ?string $note = null, ?int $paymentNumber = null, ?string $sSRCode = null, ?int $sSRNumber = null, ?ArrayOfBookingServiceCharge $bookingServiceCharges = null)
    {
        $this
            ->setCreatedDate($createdDate)
            ->setFeeCode($feeCode)
            ->setFeeDetail($feeDetail)
            ->setFeeNumber($feeNumber)
            ->setFeeOverride($feeOverride)
            ->setTrainReference($trainReference)
            ->setIsProtected($isProtected)
            ->setNote($note)
            ->setPaymentNumber($paymentNumber)
            ->setSSRCode($sSRCode)
            ->setSSRNumber($sSRNumber)
            ->setBookingServiceCharges($bookingServiceCharges);
    }

    /**
     * Get CreatedDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCreatedDate(): ?string
    {
        return $this->CreatedDate ?? null;
    }

    /**
     * Set CreatedDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $createdDate
     *
     * @return PassengerFee
     */
    public function setCreatedDate(?string $createdDate = null): self
    {
        // validation for constraint: string
        if (!is_null($createdDate) && !is_string($createdDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdDate, true), gettype($createdDate)), __LINE__);
        }
        if (is_null($createdDate) || (is_array($createdDate) && empty($createdDate))) {
            unset($this->CreatedDate);
        } else {
            $this->CreatedDate = $createdDate;
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
     * @return PassengerFee
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
     * Get FeeDetail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFeeDetail(): ?string
    {
        return $this->FeeDetail ?? null;
    }

    /**
     * Set FeeDetail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $feeDetail
     *
     * @return PassengerFee
     */
    public function setFeeDetail(?string $feeDetail = null): self
    {
        // validation for constraint: string
        if (!is_null($feeDetail) && !is_string($feeDetail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeDetail, true), gettype($feeDetail)), __LINE__);
        }
        if (is_null($feeDetail) || (is_array($feeDetail) && empty($feeDetail))) {
            unset($this->FeeDetail);
        } else {
            $this->FeeDetail = $feeDetail;
        }

        return $this;
    }

    /**
     * Get FeeNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return int|null
     */
    public function getFeeNumber(): ?int
    {
        return $this->FeeNumber ?? null;
    }

    /**
     * Set FeeNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param int $feeNumber
     *
     * @return PassengerFee
     */
    public function setFeeNumber(?int $feeNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($feeNumber) && !(is_int($feeNumber) || ctype_digit($feeNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feeNumber, true), gettype($feeNumber)), __LINE__);
        }
        if (is_null($feeNumber) || (is_array($feeNumber) && empty($feeNumber))) {
            unset($this->FeeNumber);
        } else {
            $this->FeeNumber = $feeNumber;
        }

        return $this;
    }

    /**
     * Get FeeOverride value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return bool|null
     */
    public function getFeeOverride(): ?bool
    {
        return $this->FeeOverride ?? null;
    }

    /**
     * Set FeeOverride value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param bool $feeOverride
     *
     * @return PassengerFee
     */
    public function setFeeOverride(?bool $feeOverride = null): self
    {
        // validation for constraint: boolean
        if (!is_null($feeOverride) && !is_bool($feeOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($feeOverride, true), gettype($feeOverride)), __LINE__);
        }
        if (is_null($feeOverride) || (is_array($feeOverride) && empty($feeOverride))) {
            unset($this->FeeOverride);
        } else {
            $this->FeeOverride = $feeOverride;
        }

        return $this;
    }

    /**
     * Get TrainReference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTrainReference(): ?string
    {
        return $this->TrainReference ?? null;
    }

    /**
     * Set TrainReference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $trainReference
     *
     * @return PassengerFee
     */
    public function setTrainReference(?string $trainReference = null): self
    {
        // validation for constraint: string
        if (!is_null($trainReference) && !is_string($trainReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trainReference, true), gettype($trainReference)), __LINE__);
        }
        if (is_null($trainReference) || (is_array($trainReference) && empty($trainReference))) {
            unset($this->TrainReference);
        } else {
            $this->TrainReference = $trainReference;
        }

        return $this;
    }

    /**
     * Get IsProtected value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return bool|null
     */
    public function getIsProtected(): ?bool
    {
        return $this->IsProtected ?? null;
    }

    /**
     * Set IsProtected value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param bool $isProtected
     *
     * @return PassengerFee
     */
    public function setIsProtected(?bool $isProtected = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isProtected) && !is_bool($isProtected)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isProtected, true), gettype($isProtected)), __LINE__);
        }
        if (is_null($isProtected) || (is_array($isProtected) && empty($isProtected))) {
            unset($this->IsProtected);
        } else {
            $this->IsProtected = $isProtected;
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
     * @return PassengerFee
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
     * Get PaymentNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return int|null
     */
    public function getPaymentNumber(): ?int
    {
        return $this->PaymentNumber ?? null;
    }

    /**
     * Set PaymentNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param int $paymentNumber
     *
     * @return PassengerFee
     */
    public function setPaymentNumber(?int $paymentNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($paymentNumber) && !(is_int($paymentNumber) || ctype_digit($paymentNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paymentNumber, true), gettype($paymentNumber)), __LINE__);
        }
        if (is_null($paymentNumber) || (is_array($paymentNumber) && empty($paymentNumber))) {
            unset($this->PaymentNumber);
        } else {
            $this->PaymentNumber = $paymentNumber;
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
     * @return PassengerFee
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
     * @return PassengerFee
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
     * @return PassengerFee
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

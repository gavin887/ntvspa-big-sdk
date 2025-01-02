<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfPaymentField;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\AuthorizationStatus;
use Ntvspa\Big\Booking\Enums\BookingPaymentStatus;
use Ntvspa\Big\Booking\Enums\PaymentAccountType;
use Ntvspa\Big\Booking\Enums\RequestPaymentMethodType;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Payment Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Payment
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Payment extends AbstractStructBase
{
    /**
     * The QuotedAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $QuotedAmount = null;
    /**
     * The BookingPaymentStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $BookingPaymentStatus = null;
    /**
     * The WaiveFee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $WaiveFee = null;
    /**
     * The ParentPaymentId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $ParentPaymentId = null;
    /**
     * The AutorizationStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $AutorizationStatus = null;
    /**
     * The AccountNumberId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $AccountNumberId = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $Amount = null;
    /**
     * The PaymentMethodType
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PaymentMethodType = null;
    /**
     * The PaymentMethodCode
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PaymentMethodCode = null;
    /**
     * The QuotedCurrencyCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $QuotedCurrencyCode = null;
    /**
     * The PaymentID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var int|null
     */
    protected ?int $PaymentID = null;
    /**
     * The AccountNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $AccountNumber = null;
    /**
     * The PaymentAccountType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PaymentAccountType = null;
    /**
     * The Expiration
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Expiration = null;
    /**
     * The PaymentFields
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfPaymentField|null
     */
    protected ?ArrayOfPaymentField $PaymentFields = null;
    /**
     * The PointOfSale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var PointOfSale|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\PointOfSale $PointOfSale = null;
    /**
     * The SourcePointOfSale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var PointOfSale|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\PointOfSale $SourcePointOfSale = null;
    /**
     * The AccountNumberID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var int|null
     */
    protected ?int $AccountNumberID = null;
    /**
     * The ParentPaymentID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var int|null
     */
    protected ?int $ParentPaymentID = null;
    /**
     * The ThreeDSecureAuthRes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var ThreeDSecureAuthRes|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\ThreeDSecureAuthRes $ThreeDSecureAuthRes = null;
    /**
     * The PayPalPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var PayPalPayment|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\PayPalPayment $PayPalPayment = null;
    /**
     * The ThreeDSecureAuthReq
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var ThreeDSecureAuthReq|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\ThreeDSecureAuthReq $ThreeDSecureAuthReq = null;
    /**
     * The ThreeDSecureAcsResponse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var ThreeDSecureAcsResponse|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\ThreeDSecureAcsResponse $ThreeDSecureAcsResponse = null;
    /**
     * The AmazonPayPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var AmazonPayPayment|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\AmazonPayPayment $AmazonPayPayment = null;

    /**
     * Constructor method for Payment
     *
     * @param float                                          $quotedAmount
     * @param string                                         $bookingPaymentStatus
     * @param bool                                           $waiveFee
     * @param int                                            $parentPaymentId
     * @param string                                         $autorizationStatus
     * @param int                                            $accountNumberId
     * @param float                                          $amount
     * @param string                                         $paymentMethodType
     * @param string                                         $paymentMethodCode
     * @param string                                         $quotedCurrencyCode
     * @param int                                            $paymentID
     * @param string                                         $accountNumber
     * @param string                                         $paymentAccountType
     * @param string                                         $expiration
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfPaymentField $paymentFields
     * @param PointOfSale                                    $pointOfSale
     * @param PointOfSale                                    $sourcePointOfSale
     * @param int                                            $accountNumberID
     * @param int                                            $parentPaymentID
     * @param ThreeDSecureAuthRes                            $threeDSecureAuthRes
     * @param PayPalPayment                                  $payPalPayment
     * @param ThreeDSecureAuthReq                            $threeDSecureAuthReq
     * @param ThreeDSecureAcsResponse                        $threeDSecureAcsResponse
     * @param AmazonPayPayment                               $amazonPayPayment
     *
     * @uses Payment::setQuotedAmount()
     * @uses Payment::setBookingPaymentStatus()
     * @uses Payment::setWaiveFee()
     * @uses Payment::setParentPaymentId()
     * @uses Payment::setAutorizationStatus()
     * @uses Payment::setAccountNumberId()
     * @uses Payment::setAmount()
     * @uses Payment::setPaymentMethodType()
     * @uses Payment::setPaymentMethodCode()
     * @uses Payment::setQuotedCurrencyCode()
     * @uses Payment::setPaymentID()
     * @uses Payment::setAccountNumber()
     * @uses Payment::setPaymentAccountType()
     * @uses Payment::setExpiration()
     * @uses Payment::setPaymentFields()
     * @uses Payment::setPointOfSale()
     * @uses Payment::setSourcePointOfSale()
     * @uses Payment::setAccountNumberID_1()
     * @uses Payment::setParentPaymentID_1()
     * @uses Payment::setThreeDSecureAuthRes()
     * @uses Payment::setPayPalPayment()
     * @uses Payment::setThreeDSecureAuthReq()
     * @uses Payment::setThreeDSecureAcsResponse()
     * @uses Payment::setAmazonPayPayment()
     */
    public function __construct(?float $quotedAmount = null, ?string $bookingPaymentStatus = null, ?bool $waiveFee = null, ?int $parentPaymentId = null, ?string $autorizationStatus = null, ?int $accountNumberId = null, ?float $amount = null, ?string $paymentMethodType = null, ?string $paymentMethodCode = null, ?string $quotedCurrencyCode = null, ?int $paymentID = null, ?string $accountNumber = null, ?string $paymentAccountType = null, ?string $expiration = null, ?ArrayOfPaymentField $paymentFields = null, ?\Ntvspa\Big\Booking\Structs\PointOfSale $pointOfSale = null, ?\Ntvspa\Big\Booking\Structs\PointOfSale $sourcePointOfSale = null, ?int $accountNumberID_1 = null, ?int $parentPaymentID_1 = null, ?\Ntvspa\Big\Booking\Structs\ThreeDSecureAuthRes $threeDSecureAuthRes = null, ?\Ntvspa\Big\Booking\Structs\PayPalPayment $payPalPayment = null, ?\Ntvspa\Big\Booking\Structs\ThreeDSecureAuthReq $threeDSecureAuthReq = null, ?\Ntvspa\Big\Booking\Structs\ThreeDSecureAcsResponse $threeDSecureAcsResponse = null, ?\Ntvspa\Big\Booking\Structs\AmazonPayPayment $amazonPayPayment = null)
    {
        $this
            ->setQuotedAmount($quotedAmount)
            ->setBookingPaymentStatus($bookingPaymentStatus)
            ->setWaiveFee($waiveFee)
            ->setParentPaymentId($parentPaymentId)
            ->setAutorizationStatus($autorizationStatus)
            ->setAccountNumberId($accountNumberId)
            ->setAmount($amount)
            ->setPaymentMethodType($paymentMethodType)
            ->setPaymentMethodCode($paymentMethodCode)
            ->setQuotedCurrencyCode($quotedCurrencyCode)
            ->setPaymentID($paymentID)
            ->setAccountNumber($accountNumber)
            ->setPaymentAccountType($paymentAccountType)
            ->setExpiration($expiration)
            ->setPaymentFields($paymentFields)
            ->setPointOfSale($pointOfSale)
            ->setSourcePointOfSale($sourcePointOfSale)
            ->setAccountNumberID_1($accountNumberID_1)
            ->setParentPaymentID_1($parentPaymentID_1)
            ->setThreeDSecureAuthRes($threeDSecureAuthRes)
            ->setPayPalPayment($payPalPayment)
            ->setThreeDSecureAuthReq($threeDSecureAuthReq)
            ->setThreeDSecureAcsResponse($threeDSecureAcsResponse)
            ->setAmazonPayPayment($amazonPayPayment);
    }

    /**
     * Set ParentPaymentID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param int $parentPaymentID
     *
     * @return Payment
     */
    public function setParentPaymentID_1(?int $parentPaymentID_1 = null): self
    {
        // validation for constraint: int
        if (!is_null($parentPaymentID_1) && !(is_int($parentPaymentID_1) || ctype_digit($parentPaymentID_1))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentPaymentID_1, true), gettype($parentPaymentID_1)), __LINE__);
        }
        if (is_null($parentPaymentID_1) || (is_array($parentPaymentID_1) && empty($parentPaymentID_1))) {
            unset($this->ParentPaymentID);
        } else {
            $this->ParentPaymentID = $parentPaymentID_1;
        }

        return $this;
    }

    /**
     * Set AccountNumberID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param int $accountNumberID
     *
     * @return Payment
     */
    public function setAccountNumberID_1(?int $accountNumberID_1 = null): self
    {
        // validation for constraint: int
        if (!is_null($accountNumberID_1) && !(is_int($accountNumberID_1) || ctype_digit($accountNumberID_1))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountNumberID_1, true), gettype($accountNumberID_1)), __LINE__);
        }
        if (is_null($accountNumberID_1) || (is_array($accountNumberID_1) && empty($accountNumberID_1))) {
            unset($this->AccountNumberID);
        } else {
            $this->AccountNumberID = $accountNumberID_1;
        }

        return $this;
    }

    /**
     * Get QuotedAmount value
     *
     * @return float|null
     */
    public function getQuotedAmount(): ?float
    {
        return $this->QuotedAmount;
    }

    /**
     * Set QuotedAmount value
     *
     * @param float $quotedAmount
     *
     * @return Payment
     */
    public function setQuotedAmount(?float $quotedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($quotedAmount) && !(is_float($quotedAmount) || is_numeric($quotedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($quotedAmount, true), gettype($quotedAmount)), __LINE__);
        }
        $this->QuotedAmount = $quotedAmount;

        return $this;
    }

    /**
     * Get BookingPaymentStatus value
     *
     * @return string|null
     */
    public function getBookingPaymentStatus(): ?string
    {
        return $this->BookingPaymentStatus;
    }

    /**
     * Set BookingPaymentStatus value
     *
     * @param string $bookingPaymentStatus
     *
     * @return Payment
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\BookingPaymentStatus::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\BookingPaymentStatus::valueIsValid()
     */
    public function setBookingPaymentStatus(?string $bookingPaymentStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\BookingPaymentStatus::valueIsValid($bookingPaymentStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\BookingPaymentStatus', is_array($bookingPaymentStatus) ? implode(', ', $bookingPaymentStatus) : var_export($bookingPaymentStatus, true), implode(', ', BookingPaymentStatus::getValidValues())), __LINE__);
        }
        $this->BookingPaymentStatus = $bookingPaymentStatus;

        return $this;
    }

    /**
     * Get WaiveFee value
     *
     * @return bool|null
     */
    public function getWaiveFee(): ?bool
    {
        return $this->WaiveFee;
    }

    /**
     * Set WaiveFee value
     *
     * @param bool $waiveFee
     *
     * @return Payment
     */
    public function setWaiveFee(?bool $waiveFee = null): self
    {
        // validation for constraint: boolean
        if (!is_null($waiveFee) && !is_bool($waiveFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($waiveFee, true), gettype($waiveFee)), __LINE__);
        }
        $this->WaiveFee = $waiveFee;

        return $this;
    }

    /**
     * Get ParentPaymentId value
     *
     * @return int|null
     */
    public function getParentPaymentId(): ?int
    {
        return $this->ParentPaymentId;
    }

    /**
     * Set ParentPaymentId value
     *
     * @param int $parentPaymentId
     *
     * @return Payment
     */
    public function setParentPaymentId(?int $parentPaymentId = null): self
    {
        // validation for constraint: int
        if (!is_null($parentPaymentId) && !(is_int($parentPaymentId) || ctype_digit($parentPaymentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentPaymentId, true), gettype($parentPaymentId)), __LINE__);
        }
        $this->ParentPaymentId = $parentPaymentId;

        return $this;
    }

    /**
     * Get AutorizationStatus value
     *
     * @return string|null
     */
    public function getAutorizationStatus(): ?string
    {
        return $this->AutorizationStatus;
    }

    /**
     * Set AutorizationStatus value
     *
     * @param string $autorizationStatus
     *
     * @return Payment
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\AuthorizationStatus::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\AuthorizationStatus::valueIsValid()
     */
    public function setAutorizationStatus(?string $autorizationStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\AuthorizationStatus::valueIsValid($autorizationStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\AuthorizationStatus', is_array($autorizationStatus) ? implode(', ', $autorizationStatus) : var_export($autorizationStatus, true), implode(', ', AuthorizationStatus::getValidValues())), __LINE__);
        }
        $this->AutorizationStatus = $autorizationStatus;

        return $this;
    }

    /**
     * Get AccountNumberId value
     *
     * @return int|null
     */
    public function getAccountNumberId(): ?int
    {
        return $this->AccountNumberId;
    }

    /**
     * Set AccountNumberId value
     *
     * @param int $accountNumberId
     *
     * @return Payment
     */
    public function setAccountNumberId(?int $accountNumberId = null): self
    {
        // validation for constraint: int
        if (!is_null($accountNumberId) && !(is_int($accountNumberId) || ctype_digit($accountNumberId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountNumberId, true), gettype($accountNumberId)), __LINE__);
        }
        $this->AccountNumberId = $accountNumberId;

        return $this;
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
     * @return Payment
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
     * Get PaymentMethodType value
     *
     * @return string|null
     */
    public function getPaymentMethodType(): ?string
    {
        return $this->PaymentMethodType;
    }

    /**
     * Set PaymentMethodType value
     *
     * @param string $paymentMethodType
     *
     * @return Payment
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\RequestPaymentMethodType::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\RequestPaymentMethodType::valueIsValid()
     */
    public function setPaymentMethodType(?string $paymentMethodType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\RequestPaymentMethodType::valueIsValid($paymentMethodType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\RequestPaymentMethodType', is_array($paymentMethodType) ? implode(', ', $paymentMethodType) : var_export($paymentMethodType, true), implode(', ', RequestPaymentMethodType::getValidValues())), __LINE__);
        }
        $this->PaymentMethodType = $paymentMethodType;

        return $this;
    }

    /**
     * Get PaymentMethodCode value
     *
     * @return string|null
     */
    public function getPaymentMethodCode(): ?string
    {
        return $this->PaymentMethodCode;
    }

    /**
     * Set PaymentMethodCode value
     *
     * @param string $paymentMethodCode
     *
     * @return Payment
     */
    public function setPaymentMethodCode(?string $paymentMethodCode = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentMethodCode) && !is_string($paymentMethodCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentMethodCode, true), gettype($paymentMethodCode)), __LINE__);
        }
        $this->PaymentMethodCode = $paymentMethodCode;

        return $this;
    }

    /**
     * Get QuotedCurrencyCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getQuotedCurrencyCode(): ?string
    {
        return $this->QuotedCurrencyCode ?? null;
    }

    /**
     * Set QuotedCurrencyCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $quotedCurrencyCode
     *
     * @return Payment
     */
    public function setQuotedCurrencyCode(?string $quotedCurrencyCode = null): self
    {
        // validation for constraint: string
        if (!is_null($quotedCurrencyCode) && !is_string($quotedCurrencyCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quotedCurrencyCode, true), gettype($quotedCurrencyCode)), __LINE__);
        }
        if (is_null($quotedCurrencyCode) || (is_array($quotedCurrencyCode) && empty($quotedCurrencyCode))) {
            unset($this->QuotedCurrencyCode);
        } else {
            $this->QuotedCurrencyCode = $quotedCurrencyCode;
        }

        return $this;
    }

    /**
     * Get PaymentID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return int|null
     */
    public function getPaymentID(): ?int
    {
        return $this->PaymentID ?? null;
    }

    /**
     * Set PaymentID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param int $paymentID
     *
     * @return Payment
     */
    public function setPaymentID(?int $paymentID = null): self
    {
        // validation for constraint: int
        if (!is_null($paymentID) && !(is_int($paymentID) || ctype_digit($paymentID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paymentID, true), gettype($paymentID)), __LINE__);
        }
        if (is_null($paymentID) || (is_array($paymentID) && empty($paymentID))) {
            unset($this->PaymentID);
        } else {
            $this->PaymentID = $paymentID;
        }

        return $this;
    }

    /**
     * Get AccountNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getAccountNumber(): ?string
    {
        return $this->AccountNumber ?? null;
    }

    /**
     * Set AccountNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $accountNumber
     *
     * @return Payment
     */
    public function setAccountNumber(?string $accountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        if (is_null($accountNumber) || (is_array($accountNumber) && empty($accountNumber))) {
            unset($this->AccountNumber);
        } else {
            $this->AccountNumber = $accountNumber;
        }

        return $this;
    }

    /**
     * Get PaymentAccountType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPaymentAccountType(): ?string
    {
        return $this->PaymentAccountType ?? null;
    }

    /**
     * Set PaymentAccountType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $paymentAccountType
     *
     * @return Payment
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\PaymentAccountType::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\PaymentAccountType::valueIsValid()
     */
    public function setPaymentAccountType(?string $paymentAccountType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\PaymentAccountType::valueIsValid($paymentAccountType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\PaymentAccountType', is_array($paymentAccountType) ? implode(', ', $paymentAccountType) : var_export($paymentAccountType, true), implode(', ', PaymentAccountType::getValidValues())), __LINE__);
        }
        if (is_null($paymentAccountType) || (is_array($paymentAccountType) && empty($paymentAccountType))) {
            unset($this->PaymentAccountType);
        } else {
            $this->PaymentAccountType = $paymentAccountType;
        }

        return $this;
    }

    /**
     * Get Expiration value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getExpiration(): ?string
    {
        return $this->Expiration ?? null;
    }

    /**
     * Set Expiration value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $expiration
     *
     * @return Payment
     */
    public function setExpiration(?string $expiration = null): self
    {
        // validation for constraint: string
        if (!is_null($expiration) && !is_string($expiration)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiration, true), gettype($expiration)), __LINE__);
        }
        if (is_null($expiration) || (is_array($expiration) && empty($expiration))) {
            unset($this->Expiration);
        } else {
            $this->Expiration = $expiration;
        }

        return $this;
    }

    /**
     * Get PaymentFields value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfPaymentField|null
     */
    public function getPaymentFields(): ?ArrayOfPaymentField
    {
        return $this->PaymentFields ?? null;
    }

    /**
     * Set PaymentFields value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfPaymentField $paymentFields
     *
     * @return Payment
     */
    public function setPaymentFields(?ArrayOfPaymentField $paymentFields = null): self
    {
        if (is_null($paymentFields) || (is_array($paymentFields) && empty($paymentFields))) {
            unset($this->PaymentFields);
        } else {
            $this->PaymentFields = $paymentFields;
        }

        return $this;
    }

    /**
     * Get PointOfSale value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return PointOfSale|null
     */
    public function getPointOfSale(): ?\Ntvspa\Big\Booking\Structs\PointOfSale
    {
        return $this->PointOfSale ?? null;
    }

    /**
     * Set PointOfSale value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param PointOfSale $pointOfSale
     *
     * @return Payment
     */
    public function setPointOfSale(?\Ntvspa\Big\Booking\Structs\PointOfSale $pointOfSale = null): self
    {
        if (is_null($pointOfSale) || (is_array($pointOfSale) && empty($pointOfSale))) {
            unset($this->PointOfSale);
        } else {
            $this->PointOfSale = $pointOfSale;
        }

        return $this;
    }

    /**
     * Get SourcePointOfSale value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return PointOfSale|null
     */
    public function getSourcePointOfSale(): ?\Ntvspa\Big\Booking\Structs\PointOfSale
    {
        return $this->SourcePointOfSale ?? null;
    }

    /**
     * Set SourcePointOfSale value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param PointOfSale $sourcePointOfSale
     *
     * @return Payment
     */
    public function setSourcePointOfSale(?\Ntvspa\Big\Booking\Structs\PointOfSale $sourcePointOfSale = null): self
    {
        if (is_null($sourcePointOfSale) || (is_array($sourcePointOfSale) && empty($sourcePointOfSale))) {
            unset($this->SourcePointOfSale);
        } else {
            $this->SourcePointOfSale = $sourcePointOfSale;
        }

        return $this;
    }

    /**
     * Get AccountNumberID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return int|null
     */
    public function getAccountNumberID_1(): ?int
    {
        return $this->AccountNumberID ?? null;
    }

    /**
     * Get ParentPaymentID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return int|null
     */
    public function getParentPaymentID_1(): ?int
    {
        return $this->ParentPaymentID ?? null;
    }

    /**
     * Get ThreeDSecureAuthRes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return ThreeDSecureAuthRes|null
     */
    public function getThreeDSecureAuthRes(): ?\Ntvspa\Big\Booking\Structs\ThreeDSecureAuthRes
    {
        return $this->ThreeDSecureAuthRes ?? null;
    }

    /**
     * Set ThreeDSecureAuthRes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param ThreeDSecureAuthRes $threeDSecureAuthRes
     *
     * @return Payment
     */
    public function setThreeDSecureAuthRes(?\Ntvspa\Big\Booking\Structs\ThreeDSecureAuthRes $threeDSecureAuthRes = null): self
    {
        if (is_null($threeDSecureAuthRes) || (is_array($threeDSecureAuthRes) && empty($threeDSecureAuthRes))) {
            unset($this->ThreeDSecureAuthRes);
        } else {
            $this->ThreeDSecureAuthRes = $threeDSecureAuthRes;
        }

        return $this;
    }

    /**
     * Get PayPalPayment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return PayPalPayment|null
     */
    public function getPayPalPayment(): ?\Ntvspa\Big\Booking\Structs\PayPalPayment
    {
        return $this->PayPalPayment ?? null;
    }

    /**
     * Set PayPalPayment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param PayPalPayment $payPalPayment
     *
     * @return Payment
     */
    public function setPayPalPayment(?\Ntvspa\Big\Booking\Structs\PayPalPayment $payPalPayment = null): self
    {
        if (is_null($payPalPayment) || (is_array($payPalPayment) && empty($payPalPayment))) {
            unset($this->PayPalPayment);
        } else {
            $this->PayPalPayment = $payPalPayment;
        }

        return $this;
    }

    /**
     * Get ThreeDSecureAuthReq value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return ThreeDSecureAuthReq|null
     */
    public function getThreeDSecureAuthReq(): ?\Ntvspa\Big\Booking\Structs\ThreeDSecureAuthReq
    {
        return $this->ThreeDSecureAuthReq ?? null;
    }

    /**
     * Set ThreeDSecureAuthReq value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param ThreeDSecureAuthReq $threeDSecureAuthReq
     *
     * @return Payment
     */
    public function setThreeDSecureAuthReq(?\Ntvspa\Big\Booking\Structs\ThreeDSecureAuthReq $threeDSecureAuthReq = null): self
    {
        if (is_null($threeDSecureAuthReq) || (is_array($threeDSecureAuthReq) && empty($threeDSecureAuthReq))) {
            unset($this->ThreeDSecureAuthReq);
        } else {
            $this->ThreeDSecureAuthReq = $threeDSecureAuthReq;
        }

        return $this;
    }

    /**
     * Get ThreeDSecureAcsResponse value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return ThreeDSecureAcsResponse|null
     */
    public function getThreeDSecureAcsResponse(): ?\Ntvspa\Big\Booking\Structs\ThreeDSecureAcsResponse
    {
        return $this->ThreeDSecureAcsResponse ?? null;
    }

    /**
     * Set ThreeDSecureAcsResponse value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param ThreeDSecureAcsResponse $threeDSecureAcsResponse
     *
     * @return Payment
     */
    public function setThreeDSecureAcsResponse(?\Ntvspa\Big\Booking\Structs\ThreeDSecureAcsResponse $threeDSecureAcsResponse = null): self
    {
        if (is_null($threeDSecureAcsResponse) || (is_array($threeDSecureAcsResponse) && empty($threeDSecureAcsResponse))) {
            unset($this->ThreeDSecureAcsResponse);
        } else {
            $this->ThreeDSecureAcsResponse = $threeDSecureAcsResponse;
        }

        return $this;
    }

    /**
     * Get AmazonPayPayment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return AmazonPayPayment|null
     */
    public function getAmazonPayPayment(): ?\Ntvspa\Big\Booking\Structs\AmazonPayPayment
    {
        return $this->AmazonPayPayment ?? null;
    }

    /**
     * Set AmazonPayPayment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param AmazonPayPayment $amazonPayPayment
     *
     * @return Payment
     */
    public function setAmazonPayPayment(?\Ntvspa\Big\Booking\Structs\AmazonPayPayment $amazonPayPayment = null): self
    {
        if (is_null($amazonPayPayment) || (is_array($amazonPayPayment) && empty($amazonPayPayment))) {
            unset($this->AmazonPayPayment);
        } else {
            $this->AmazonPayPayment = $amazonPayPayment;
        }

        return $this;
    }
}

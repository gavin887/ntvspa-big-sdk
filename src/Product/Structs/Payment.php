<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Product\Enums\PaymentAccountType;
use Ntvspa\Big\Product\Enums\RequestPaymentMethodType;
use Product\Arrays\ArrayOfPaymentField;
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
     * The PaymentMethodType
     *
     * @var string|null
     */
    protected ?string $PaymentMethodType = null;
    /**
     * The Expiration
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $Expiration = null;
    /**
     * The PaymentAccountType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $PaymentAccountType = null;
    /**
     * The PaymentID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $PaymentID = null;
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
     * The AccountNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $AccountNumber = null;
    /**
     * The PaymentFields
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfPaymentField|null
     */
    protected ?ArrayOfPaymentField $PaymentFields = null;
    /**
     * The PayPalPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var PayPalPayment|null
     */
    protected ?\Ntvspa\Big\Product\Structs\PayPalPayment $PayPalPayment = null;
    /**
     * The ThreeDSecureAuthReq
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var ThreeDSecureAuthReq|null
     */
    protected ?\Ntvspa\Big\Product\Structs\ThreeDSecureAuthReq $ThreeDSecureAuthReq = null;
    /**
     * The ThreeDSecureAcsResponse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var ThreeDSecureAcsResponse|null
     */
    protected ?\Ntvspa\Big\Product\Structs\ThreeDSecureAcsResponse $ThreeDSecureAcsResponse = null;
    /**
     * The AmazonPayPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var AmazonPayPayment|null
     */
    protected ?\Ntvspa\Big\Product\Structs\AmazonPayPayment $AmazonPayPayment = null;

    /**
     * Constructor method for Payment
     *
     * @param string                                         $paymentMethodType
     * @param string                                         $expiration
     * @param string                                         $paymentAccountType
     * @param int                                            $paymentID
     * @param int                                            $accountNumberId
     * @param float                                          $amount
     * @param string                                         $paymentMethodCode
     * @param string                                         $quotedCurrencyCode
     * @param string                                         $accountNumber
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfPaymentField $paymentFields
     * @param PayPalPayment                                  $payPalPayment
     * @param ThreeDSecureAuthReq                            $threeDSecureAuthReq
     * @param ThreeDSecureAcsResponse                        $threeDSecureAcsResponse
     * @param AmazonPayPayment                               $amazonPayPayment
     *
     * @uses Payment::setPaymentMethodType()
     * @uses Payment::setExpiration()
     * @uses Payment::setPaymentAccountType()
     * @uses Payment::setPaymentID()
     * @uses Payment::setAccountNumberId()
     * @uses Payment::setAmount()
     * @uses Payment::setPaymentMethodCode()
     * @uses Payment::setQuotedCurrencyCode()
     * @uses Payment::setAccountNumber()
     * @uses Payment::setPaymentFields()
     * @uses Payment::setPayPalPayment()
     * @uses Payment::setThreeDSecureAuthReq()
     * @uses Payment::setThreeDSecureAcsResponse()
     * @uses Payment::setAmazonPayPayment()
     */
    public function __construct(?string $paymentMethodType = null, ?string $expiration = null, ?string $paymentAccountType = null, ?int $paymentID = null, ?int $accountNumberId = null, ?float $amount = null, ?string $paymentMethodCode = null, ?string $quotedCurrencyCode = null, ?string $accountNumber = null, ?ArrayOfPaymentField $paymentFields = null, ?\Ntvspa\Big\Product\Structs\PayPalPayment $payPalPayment = null, ?\Ntvspa\Big\Product\Structs\ThreeDSecureAuthReq $threeDSecureAuthReq = null, ?\Ntvspa\Big\Product\Structs\ThreeDSecureAcsResponse $threeDSecureAcsResponse = null, ?\Ntvspa\Big\Product\Structs\AmazonPayPayment $amazonPayPayment = null)
    {
        $this
            ->setPaymentMethodType($paymentMethodType)
            ->setExpiration($expiration)
            ->setPaymentAccountType($paymentAccountType)
            ->setPaymentID($paymentID)
            ->setAccountNumberId($accountNumberId)
            ->setAmount($amount)
            ->setPaymentMethodCode($paymentMethodCode)
            ->setQuotedCurrencyCode($quotedCurrencyCode)
            ->setAccountNumber($accountNumber)
            ->setPaymentFields($paymentFields)
            ->setPayPalPayment($payPalPayment)
            ->setThreeDSecureAuthReq($threeDSecureAuthReq)
            ->setThreeDSecureAcsResponse($threeDSecureAcsResponse)
            ->setAmazonPayPayment($amazonPayPayment);
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
     * @uses \Ntvspa\Big\Product\Enums\RequestPaymentMethodType::getValidValues()
     * @uses \Ntvspa\Big\Product\Enums\RequestPaymentMethodType::valueIsValid()
     */
    public function setPaymentMethodType(?string $paymentMethodType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Product\Enums\RequestPaymentMethodType::valueIsValid($paymentMethodType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Product\Enums\RequestPaymentMethodType', is_array($paymentMethodType) ? implode(', ', $paymentMethodType) : var_export($paymentMethodType, true), implode(', ', RequestPaymentMethodType::getValidValues())), __LINE__);
        }
        $this->PaymentMethodType = $paymentMethodType;

        return $this;
    }

    /**
     * Get Expiration value
     *
     * @return string|null
     */
    public function getExpiration(): ?string
    {
        return $this->Expiration;
    }

    /**
     * Set Expiration value
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
        $this->Expiration = $expiration;

        return $this;
    }

    /**
     * Get PaymentAccountType value
     *
     * @return string|null
     */
    public function getPaymentAccountType(): ?string
    {
        return $this->PaymentAccountType;
    }

    /**
     * Set PaymentAccountType value
     *
     * @param string $paymentAccountType
     *
     * @return Payment
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Product\Enums\PaymentAccountType::getValidValues()
     * @uses \Ntvspa\Big\Product\Enums\PaymentAccountType::valueIsValid()
     */
    public function setPaymentAccountType(?string $paymentAccountType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Product\Enums\PaymentAccountType::valueIsValid($paymentAccountType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Product\Enums\PaymentAccountType', is_array($paymentAccountType) ? implode(', ', $paymentAccountType) : var_export($paymentAccountType, true), implode(', ', PaymentAccountType::getValidValues())), __LINE__);
        }
        $this->PaymentAccountType = $paymentAccountType;

        return $this;
    }

    /**
     * Get PaymentID value
     *
     * @return int|null
     */
    public function getPaymentID(): ?int
    {
        return $this->PaymentID;
    }

    /**
     * Set PaymentID value
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
        $this->PaymentID = $paymentID;

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
     * Get PaymentFields value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfPaymentField|null
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
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfPaymentField $paymentFields
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
     * Get PayPalPayment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return PayPalPayment|null
     */
    public function getPayPalPayment(): ?\Ntvspa\Big\Product\Structs\PayPalPayment
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
    public function setPayPalPayment(?\Ntvspa\Big\Product\Structs\PayPalPayment $payPalPayment = null): self
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
    public function getThreeDSecureAuthReq(): ?\Ntvspa\Big\Product\Structs\ThreeDSecureAuthReq
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
    public function setThreeDSecureAuthReq(?\Ntvspa\Big\Product\Structs\ThreeDSecureAuthReq $threeDSecureAuthReq = null): self
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
    public function getThreeDSecureAcsResponse(): ?\Ntvspa\Big\Product\Structs\ThreeDSecureAcsResponse
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
    public function setThreeDSecureAcsResponse(?\Ntvspa\Big\Product\Structs\ThreeDSecureAcsResponse $threeDSecureAcsResponse = null): self
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
    public function getAmazonPayPayment(): ?\Ntvspa\Big\Product\Structs\AmazonPayPayment
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
    public function setAmazonPayPayment(?\Ntvspa\Big\Product\Structs\AmazonPayPayment $amazonPayPayment = null): self
    {
        if (is_null($amazonPayPayment) || (is_array($amazonPayPayment) && empty($amazonPayPayment))) {
            unset($this->AmazonPayPayment);
        } else {
            $this->AmazonPayPayment = $amazonPayPayment;
        }

        return $this;
    }
}

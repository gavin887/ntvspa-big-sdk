<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Fop Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Fop
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Fop extends AbstractStructBase
{
    /**
     * The FopId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $FopId = null;
    /**
     * The Expiration
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $Expiration = null;
    /**
     * The AccountNumberId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $AccountNumberId = null;
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
     * The PaymentMethodeCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PaymentMethodeCode = null;
    /**
     * The PaymentMethodeType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PaymentMethodeType = null;
    /**
     * The AccountName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $AccountName = null;

    /**
     * Constructor method for Fop
     *
     * @param int    $fopId
     * @param string $expiration
     * @param int    $accountNumberId
     * @param string $accountNumber
     * @param string $paymentMethodeCode
     * @param string $paymentMethodeType
     * @param string $accountName
     *
     * @uses Fop::setFopId()
     * @uses Fop::setExpiration()
     * @uses Fop::setAccountNumberId()
     * @uses Fop::setAccountNumber()
     * @uses Fop::setPaymentMethodeCode()
     * @uses Fop::setPaymentMethodeType()
     * @uses Fop::setAccountName()
     */
    public function __construct(?int $fopId = null, ?string $expiration = null, ?int $accountNumberId = null, ?string $accountNumber = null, ?string $paymentMethodeCode = null, ?string $paymentMethodeType = null, ?string $accountName = null)
    {
        $this
            ->setFopId($fopId)
            ->setExpiration($expiration)
            ->setAccountNumberId($accountNumberId)
            ->setAccountNumber($accountNumber)
            ->setPaymentMethodeCode($paymentMethodeCode)
            ->setPaymentMethodeType($paymentMethodeType)
            ->setAccountName($accountName);
    }

    /**
     * Get FopId value
     *
     * @return int|null
     */
    public function getFopId(): ?int
    {
        return $this->FopId;
    }

    /**
     * Set FopId value
     *
     * @param int $fopId
     *
     * @return Fop
     */
    public function setFopId(?int $fopId = null): self
    {
        // validation for constraint: int
        if (!is_null($fopId) && !(is_int($fopId) || ctype_digit($fopId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fopId, true), gettype($fopId)), __LINE__);
        }
        $this->FopId = $fopId;

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
     * @return Fop
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
     * @return Fop
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
     * @return Fop
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
     * Get PaymentMethodeCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPaymentMethodeCode(): ?string
    {
        return $this->PaymentMethodeCode ?? null;
    }

    /**
     * Set PaymentMethodeCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $paymentMethodeCode
     *
     * @return Fop
     */
    public function setPaymentMethodeCode(?string $paymentMethodeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentMethodeCode) && !is_string($paymentMethodeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentMethodeCode, true), gettype($paymentMethodeCode)), __LINE__);
        }
        if (is_null($paymentMethodeCode) || (is_array($paymentMethodeCode) && empty($paymentMethodeCode))) {
            unset($this->PaymentMethodeCode);
        } else {
            $this->PaymentMethodeCode = $paymentMethodeCode;
        }

        return $this;
    }

    /**
     * Get PaymentMethodeType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPaymentMethodeType(): ?string
    {
        return $this->PaymentMethodeType ?? null;
    }

    /**
     * Set PaymentMethodeType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $paymentMethodeType
     *
     * @return Fop
     */
    public function setPaymentMethodeType(?string $paymentMethodeType = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentMethodeType) && !is_string($paymentMethodeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentMethodeType, true), gettype($paymentMethodeType)), __LINE__);
        }
        if (is_null($paymentMethodeType) || (is_array($paymentMethodeType) && empty($paymentMethodeType))) {
            unset($this->PaymentMethodeType);
        } else {
            $this->PaymentMethodeType = $paymentMethodeType;
        }

        return $this;
    }

    /**
     * Get AccountName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getAccountName(): ?string
    {
        return $this->AccountName ?? null;
    }

    /**
     * Set AccountName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $accountName
     *
     * @return Fop
     */
    public function setAccountName(?string $accountName = null): self
    {
        // validation for constraint: string
        if (!is_null($accountName) && !is_string($accountName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountName, true), gettype($accountName)), __LINE__);
        }
        if (is_null($accountName) || (is_array($accountName) && empty($accountName))) {
            unset($this->AccountName);
        } else {
            $this->AccountName = $accountName;
        }

        return $this;
    }
}

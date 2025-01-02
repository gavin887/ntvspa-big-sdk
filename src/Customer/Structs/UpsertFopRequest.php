<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Customer\Enums\OperationType;
use Ntvspa\Big\Customer\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpsertFopRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q21:UpsertFopRequest | tns:UpsertFopRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class UpsertFopRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The OperationType
     *
     * @var string|null
     */
    protected ?string $OperationType = null;
    /**
     * The Expiration
     *
     * @var string|null
     */
    protected ?string $Expiration = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The PaymentMethodCode
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PaymentMethodCode = null;
    /**
     * The AccountNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $AccountNumber = null;
    /**
     * The AccountName
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $AccountName = null;
    /**
     * The FopId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var int|null
     */
    protected ?int $FopId = null;

    /**
     * Constructor method for UpsertFopRequest
     *
     * @param string $sourceSystem
     * @param string $operationType
     * @param string $expiration
     * @param string $signature
     * @param string $paymentMethodCode
     * @param string $accountNumber
     * @param string $accountName
     * @param int    $fopId
     *
     * @uses UpsertFopRequest::setSourceSystem()
     * @uses UpsertFopRequest::setOperationType()
     * @uses UpsertFopRequest::setExpiration()
     * @uses UpsertFopRequest::setSignature()
     * @uses UpsertFopRequest::setPaymentMethodCode()
     * @uses UpsertFopRequest::setAccountNumber()
     * @uses UpsertFopRequest::setAccountName()
     * @uses UpsertFopRequest::setFopId()
     */
    public function __construct(?string $sourceSystem = null, ?string $operationType = null, ?string $expiration = null, ?string $signature = null, ?string $paymentMethodCode = null, ?string $accountNumber = null, ?string $accountName = null, ?int $fopId = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setOperationType($operationType)
            ->setExpiration($expiration)
            ->setSignature($signature)
            ->setPaymentMethodCode($paymentMethodCode)
            ->setAccountNumber($accountNumber)
            ->setAccountName($accountName)
            ->setFopId($fopId);
    }

    /**
     * Get SourceSystem value
     *
     * @return string|null
     */
    public function getSourceSystem(): ?string
    {
        return $this->SourceSystem;
    }

    /**
     * Set SourceSystem value
     *
     * @param string $sourceSystem
     *
     * @return UpsertFopRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\SourceSystem::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\SourceSystem::valueIsValid()
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\SourceSystem::valueIsValid($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\SourceSystem', is_array($sourceSystem) ? implode(', ', $sourceSystem) : var_export($sourceSystem, true), implode(', ', SourceSystem::getValidValues())), __LINE__);
        }
        $this->SourceSystem = $sourceSystem;

        return $this;
    }

    /**
     * Get OperationType value
     *
     * @return string|null
     */
    public function getOperationType(): ?string
    {
        return $this->OperationType;
    }

    /**
     * Set OperationType value
     *
     * @param string $operationType
     *
     * @return UpsertFopRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\OperationType::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\OperationType::valueIsValid()
     */
    public function setOperationType(?string $operationType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\OperationType::valueIsValid($operationType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\OperationType', is_array($operationType) ? implode(', ', $operationType) : var_export($operationType, true), implode(', ', OperationType::getValidValues())), __LINE__);
        }
        $this->OperationType = $operationType;

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
     * @return UpsertFopRequest
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
     * Get Signature value
     *
     * @return string|null
     */
    public function getSignature(): ?string
    {
        return $this->Signature;
    }

    /**
     * Set Signature value
     *
     * @param string $signature
     *
     * @return UpsertFopRequest
     */
    public function setSignature(?string $signature = null): self
    {
        // validation for constraint: string
        if (!is_null($signature) && !is_string($signature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signature, true), gettype($signature)), __LINE__);
        }
        $this->Signature = $signature;

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
     * @return UpsertFopRequest
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
     * Get AccountNumber value
     *
     * @return string|null
     */
    public function getAccountNumber(): ?string
    {
        return $this->AccountNumber;
    }

    /**
     * Set AccountNumber value
     *
     * @param string $accountNumber
     *
     * @return UpsertFopRequest
     */
    public function setAccountNumber(?string $accountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->AccountNumber = $accountNumber;

        return $this;
    }

    /**
     * Get AccountName value
     *
     * @return string|null
     */
    public function getAccountName(): ?string
    {
        return $this->AccountName;
    }

    /**
     * Set AccountName value
     *
     * @param string $accountName
     *
     * @return UpsertFopRequest
     */
    public function setAccountName(?string $accountName = null): self
    {
        // validation for constraint: string
        if (!is_null($accountName) && !is_string($accountName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountName, true), gettype($accountName)), __LINE__);
        }
        $this->AccountName = $accountName;

        return $this;
    }

    /**
     * Get FopId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return int|null
     */
    public function getFopId(): ?int
    {
        return $this->FopId ?? null;
    }

    /**
     * Set FopId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param int $fopId
     *
     * @return UpsertFopRequest
     */
    public function setFopId(?int $fopId = null): self
    {
        // validation for constraint: int
        if (!is_null($fopId) && !(is_int($fopId) || ctype_digit($fopId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fopId, true), gettype($fopId)), __LINE__);
        }
        if (is_null($fopId) || (is_array($fopId) && empty($fopId))) {
            unset($this->FopId);
        } else {
            $this->FopId = $fopId;
        }

        return $this;
    }
}

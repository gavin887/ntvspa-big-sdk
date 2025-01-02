<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Product\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccountByReferenceRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q7:GetAccountByReferenceRequest | tns:GetAccountByReferenceRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetAccountByReferenceRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The AccountReference
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $AccountReference = null;
    /**
     * The CurrencyCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CurrencyCode = null;

    /**
     * Constructor method for GetAccountByReferenceRequest
     *
     * @param string $sourceSystem
     * @param string $signature
     * @param string $accountReference
     * @param string $currencyCode
     *
     * @uses GetAccountByReferenceRequest::setSourceSystem()
     * @uses GetAccountByReferenceRequest::setSignature()
     * @uses GetAccountByReferenceRequest::setAccountReference()
     * @uses GetAccountByReferenceRequest::setCurrencyCode()
     */
    public function __construct(?string $sourceSystem = null, ?string $signature = null, ?string $accountReference = null, ?string $currencyCode = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setSignature($signature)
            ->setAccountReference($accountReference)
            ->setCurrencyCode($currencyCode);
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
     * @return GetAccountByReferenceRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Product\Enums\SourceSystem::getValidValues()
     * @uses \Ntvspa\Big\Product\Enums\SourceSystem::valueIsValid()
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Product\Enums\SourceSystem::valueIsValid($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Product\Enums\SourceSystem', is_array($sourceSystem) ? implode(', ', $sourceSystem) : var_export($sourceSystem, true), implode(', ', SourceSystem::getValidValues())), __LINE__);
        }
        $this->SourceSystem = $sourceSystem;

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
     * @return GetAccountByReferenceRequest
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
     * Get AccountReference value
     *
     * @return string|null
     */
    public function getAccountReference(): ?string
    {
        return $this->AccountReference;
    }

    /**
     * Set AccountReference value
     *
     * @param string $accountReference
     *
     * @return GetAccountByReferenceRequest
     */
    public function setAccountReference(?string $accountReference = null): self
    {
        // validation for constraint: string
        if (!is_null($accountReference) && !is_string($accountReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountReference, true), gettype($accountReference)), __LINE__);
        }
        $this->AccountReference = $accountReference;

        return $this;
    }

    /**
     * Get CurrencyCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->CurrencyCode ?? null;
    }

    /**
     * Set CurrencyCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $currencyCode
     *
     * @return GetAccountByReferenceRequest
     */
    public function setCurrencyCode(?string $currencyCode = null): self
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currencyCode, true), gettype($currencyCode)), __LINE__);
        }
        if (is_null($currencyCode) || (is_array($currencyCode) && empty($currencyCode))) {
            unset($this->CurrencyCode);
        } else {
            $this->CurrencyCode = $currencyCode;
        }

        return $this;
    }
}

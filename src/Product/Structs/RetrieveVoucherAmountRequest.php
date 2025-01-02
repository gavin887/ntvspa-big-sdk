<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Product\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetrieveVoucherAmountRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q13:RetrieveVoucherAmountRequest | tns:RetrieveVoucherAmountRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveVoucherAmountRequest extends AbstractStructBase
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
     * The VoucherReference
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $VoucherReference = null;
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
     * Constructor method for RetrieveVoucherAmountRequest
     *
     * @param string $sourceSystem
     * @param string $signature
     * @param string $voucherReference
     * @param string $currencyCode
     *
     * @uses RetrieveVoucherAmountRequest::setSourceSystem()
     * @uses RetrieveVoucherAmountRequest::setSignature()
     * @uses RetrieveVoucherAmountRequest::setVoucherReference()
     * @uses RetrieveVoucherAmountRequest::setCurrencyCode()
     */
    public function __construct(?string $sourceSystem = null, ?string $signature = null, ?string $voucherReference = null, ?string $currencyCode = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setSignature($signature)
            ->setVoucherReference($voucherReference)
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
     * @return RetrieveVoucherAmountRequest
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
     * @return RetrieveVoucherAmountRequest
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
     * Get VoucherReference value
     *
     * @return string|null
     */
    public function getVoucherReference(): ?string
    {
        return $this->VoucherReference;
    }

    /**
     * Set VoucherReference value
     *
     * @param string $voucherReference
     *
     * @return RetrieveVoucherAmountRequest
     */
    public function setVoucherReference(?string $voucherReference = null): self
    {
        // validation for constraint: string
        if (!is_null($voucherReference) && !is_string($voucherReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voucherReference, true), gettype($voucherReference)), __LINE__);
        }
        $this->VoucherReference = $voucherReference;

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
     * @return RetrieveVoucherAmountRequest
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

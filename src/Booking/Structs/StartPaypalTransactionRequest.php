<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\Culture;
use Ntvspa\Big\Booking\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StartPaypalTransactionRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q37:StartPaypalTransactionRequest | tns:StartPaypalTransactionRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class StartPaypalTransactionRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $Amount = null;
    /**
     * The Culture
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $Culture = null;
    /**
     * The EnableBillingAgreement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $EnableBillingAgreement = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
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
     * The SuccessURL
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $SuccessURL = null;
    /**
     * The FailURL
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FailURL = null;

    /**
     * Constructor method for StartPaypalTransactionRequest
     *
     * @param string $sourceSystem
     * @param float  $amount
     * @param string $culture
     * @param bool   $enableBillingAgreement
     * @param string $signature
     * @param string $quotedCurrencyCode
     * @param string $successURL
     * @param string $failURL
     *
     * @uses StartPaypalTransactionRequest::setSourceSystem()
     * @uses StartPaypalTransactionRequest::setAmount()
     * @uses StartPaypalTransactionRequest::setCulture()
     * @uses StartPaypalTransactionRequest::setEnableBillingAgreement()
     * @uses StartPaypalTransactionRequest::setSignature()
     * @uses StartPaypalTransactionRequest::setQuotedCurrencyCode()
     * @uses StartPaypalTransactionRequest::setSuccessURL()
     * @uses StartPaypalTransactionRequest::setFailURL()
     */
    public function __construct(?string $sourceSystem = null, ?float $amount = null, ?string $culture = null, ?bool $enableBillingAgreement = null, ?string $signature = null, ?string $quotedCurrencyCode = null, ?string $successURL = null, ?string $failURL = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setAmount($amount)
            ->setCulture($culture)
            ->setEnableBillingAgreement($enableBillingAgreement)
            ->setSignature($signature)
            ->setQuotedCurrencyCode($quotedCurrencyCode)
            ->setSuccessURL($successURL)
            ->setFailURL($failURL);
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
     * @return StartPaypalTransactionRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\SourceSystem::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\SourceSystem::valueIsValid()
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\SourceSystem::valueIsValid($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\SourceSystem', is_array($sourceSystem) ? implode(', ', $sourceSystem) : var_export($sourceSystem, true), implode(', ', SourceSystem::getValidValues())), __LINE__);
        }
        $this->SourceSystem = $sourceSystem;

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
     * @return StartPaypalTransactionRequest
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
     * Get Culture value
     *
     * @return string|null
     */
    public function getCulture(): ?string
    {
        return $this->Culture;
    }

    /**
     * Set Culture value
     *
     * @param string $culture
     *
     * @return StartPaypalTransactionRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\Culture::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\Culture::valueIsValid()
     */
    public function setCulture(?string $culture = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\Culture::valueIsValid($culture)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\Culture', is_array($culture) ? implode(', ', $culture) : var_export($culture, true), implode(', ', Culture::getValidValues())), __LINE__);
        }
        $this->Culture = $culture;

        return $this;
    }

    /**
     * Get EnableBillingAgreement value
     *
     * @return bool|null
     */
    public function getEnableBillingAgreement(): ?bool
    {
        return $this->EnableBillingAgreement;
    }

    /**
     * Set EnableBillingAgreement value
     *
     * @param bool $enableBillingAgreement
     *
     * @return StartPaypalTransactionRequest
     */
    public function setEnableBillingAgreement(?bool $enableBillingAgreement = null): self
    {
        // validation for constraint: boolean
        if (!is_null($enableBillingAgreement) && !is_bool($enableBillingAgreement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enableBillingAgreement, true), gettype($enableBillingAgreement)), __LINE__);
        }
        $this->EnableBillingAgreement = $enableBillingAgreement;

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
     * @return StartPaypalTransactionRequest
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
     * @return StartPaypalTransactionRequest
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
     * Get SuccessURL value
     *
     * @return string|null
     */
    public function getSuccessURL(): ?string
    {
        return $this->SuccessURL;
    }

    /**
     * Set SuccessURL value
     *
     * @param string $successURL
     *
     * @return StartPaypalTransactionRequest
     */
    public function setSuccessURL(?string $successURL = null): self
    {
        // validation for constraint: string
        if (!is_null($successURL) && !is_string($successURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($successURL, true), gettype($successURL)), __LINE__);
        }
        $this->SuccessURL = $successURL;

        return $this;
    }

    /**
     * Get FailURL value
     *
     * @return string|null
     */
    public function getFailURL(): ?string
    {
        return $this->FailURL;
    }

    /**
     * Set FailURL value
     *
     * @param string $failURL
     *
     * @return StartPaypalTransactionRequest
     */
    public function setFailURL(?string $failURL = null): self
    {
        // validation for constraint: string
        if (!is_null($failURL) && !is_string($failURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($failURL, true), gettype($failURL)), __LINE__);
        }
        $this->FailURL = $failURL;

        return $this;
    }
}

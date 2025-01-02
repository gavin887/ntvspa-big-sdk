<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Product\Enums\Culture;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StartPayPalPayment Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:StartPayPalPayment
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class StartPayPalPayment extends AbstractStructBase
{
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
     * The FailURL
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FailURL = null;
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
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $SuccessURL = null;

    /**
     * Constructor method for StartPayPalPayment
     *
     * @param float  $amount
     * @param string $culture
     * @param bool   $enableBillingAgreement
     * @param string $failURL
     * @param string $quotedCurrencyCode
     * @param string $successURL
     *
     * @uses StartPayPalPayment::setAmount()
     * @uses StartPayPalPayment::setCulture()
     * @uses StartPayPalPayment::setEnableBillingAgreement()
     * @uses StartPayPalPayment::setFailURL()
     * @uses StartPayPalPayment::setQuotedCurrencyCode()
     * @uses StartPayPalPayment::setSuccessURL()
     */
    public function __construct(?float $amount = null, ?string $culture = null, ?bool $enableBillingAgreement = null, ?string $failURL = null, ?string $quotedCurrencyCode = null, ?string $successURL = null)
    {
        $this
            ->setAmount($amount)
            ->setCulture($culture)
            ->setEnableBillingAgreement($enableBillingAgreement)
            ->setFailURL($failURL)
            ->setQuotedCurrencyCode($quotedCurrencyCode)
            ->setSuccessURL($successURL);
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
     * @return StartPayPalPayment
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
     * @return StartPayPalPayment
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Product\Enums\Culture::getValidValues()
     * @uses \Ntvspa\Big\Product\Enums\Culture::valueIsValid()
     */
    public function setCulture(?string $culture = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Product\Enums\Culture::valueIsValid($culture)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Product\Enums\Culture', is_array($culture) ? implode(', ', $culture) : var_export($culture, true), implode(', ', Culture::getValidValues())), __LINE__);
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
     * @return StartPayPalPayment
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
     * Get FailURL value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFailURL(): ?string
    {
        return $this->FailURL ?? null;
    }

    /**
     * Set FailURL value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $failURL
     *
     * @return StartPayPalPayment
     */
    public function setFailURL(?string $failURL = null): self
    {
        // validation for constraint: string
        if (!is_null($failURL) && !is_string($failURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($failURL, true), gettype($failURL)), __LINE__);
        }
        if (is_null($failURL) || (is_array($failURL) && empty($failURL))) {
            unset($this->FailURL);
        } else {
            $this->FailURL = $failURL;
        }

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
     * @return StartPayPalPayment
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
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getSuccessURL(): ?string
    {
        return $this->SuccessURL ?? null;
    }

    /**
     * Set SuccessURL value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $successURL
     *
     * @return StartPayPalPayment
     */
    public function setSuccessURL(?string $successURL = null): self
    {
        // validation for constraint: string
        if (!is_null($successURL) && !is_string($successURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($successURL, true), gettype($successURL)), __LINE__);
        }
        if (is_null($successURL) || (is_array($successURL) && empty($successURL))) {
            unset($this->SuccessURL);
        } else {
            $this->SuccessURL = $successURL;
        }

        return $this;
    }
}

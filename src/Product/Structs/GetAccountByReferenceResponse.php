<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;

/**
 * This class stands for GetAccountByReferenceResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q8:GetAccountByReferenceResponse | tns:GetAccountByReferenceResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetAccountByReferenceResponse extends ResponseBase
{
    /**
     * The AvailableAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $AvailableAmount = null;
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
     * Constructor method for GetAccountByReferenceResponse
     *
     * @param float  $availableAmount
     * @param string $currencyCode
     *
     * @uses GetAccountByReferenceResponse::setAvailableAmount()
     * @uses GetAccountByReferenceResponse::setCurrencyCode()
     */
    public function __construct(?float $availableAmount = null, ?string $currencyCode = null)
    {
        $this
            ->setAvailableAmount($availableAmount)
            ->setCurrencyCode($currencyCode);
    }

    /**
     * Get AvailableAmount value
     *
     * @return float|null
     */
    public function getAvailableAmount(): ?float
    {
        return $this->AvailableAmount;
    }

    /**
     * Set AvailableAmount value
     *
     * @param float $availableAmount
     *
     * @return GetAccountByReferenceResponse
     */
    public function setAvailableAmount(?float $availableAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($availableAmount) && !(is_float($availableAmount) || is_numeric($availableAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($availableAmount, true), gettype($availableAmount)), __LINE__);
        }
        $this->AvailableAmount = $availableAmount;

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
     * @return GetAccountByReferenceResponse
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

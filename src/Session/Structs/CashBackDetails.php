<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CashBackDetails Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CashBackDetails
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class CashBackDetails extends AbstractStructBase
{
    /**
     * The CashBackEnabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $CashBackEnabled = null;
    /**
     * The CashBackAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $CashBackAmount = null;
    /**
     * The CashBackPNR
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CashBackPNR = null;
    /**
     * The CashBackAmountCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CashBackAmountCurrency = null;

    /**
     * Constructor method for CashBackDetails
     *
     * @param bool   $cashBackEnabled
     * @param float  $cashBackAmount
     * @param string $cashBackPNR
     * @param string $cashBackAmountCurrency
     *
     * @uses CashBackDetails::setCashBackEnabled()
     * @uses CashBackDetails::setCashBackAmount()
     * @uses CashBackDetails::setCashBackPNR()
     * @uses CashBackDetails::setCashBackAmountCurrency()
     */
    public function __construct(?bool $cashBackEnabled = null, ?float $cashBackAmount = null, ?string $cashBackPNR = null, ?string $cashBackAmountCurrency = null)
    {
        $this
            ->setCashBackEnabled($cashBackEnabled)
            ->setCashBackAmount($cashBackAmount)
            ->setCashBackPNR($cashBackPNR)
            ->setCashBackAmountCurrency($cashBackAmountCurrency);
    }

    /**
     * Get CashBackEnabled value
     *
     * @return bool|null
     */
    public function getCashBackEnabled(): ?bool
    {
        return $this->CashBackEnabled;
    }

    /**
     * Set CashBackEnabled value
     *
     * @param bool $cashBackEnabled
     *
     * @return CashBackDetails
     */
    public function setCashBackEnabled(?bool $cashBackEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cashBackEnabled) && !is_bool($cashBackEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cashBackEnabled, true), gettype($cashBackEnabled)), __LINE__);
        }
        $this->CashBackEnabled = $cashBackEnabled;

        return $this;
    }

    /**
     * Get CashBackAmount value
     *
     * @return float|null
     */
    public function getCashBackAmount(): ?float
    {
        return $this->CashBackAmount;
    }

    /**
     * Set CashBackAmount value
     *
     * @param float $cashBackAmount
     *
     * @return CashBackDetails
     */
    public function setCashBackAmount(?float $cashBackAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($cashBackAmount) && !(is_float($cashBackAmount) || is_numeric($cashBackAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($cashBackAmount, true), gettype($cashBackAmount)), __LINE__);
        }
        $this->CashBackAmount = $cashBackAmount;

        return $this;
    }

    /**
     * Get CashBackPNR value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCashBackPNR(): ?string
    {
        return $this->CashBackPNR ?? null;
    }

    /**
     * Set CashBackPNR value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $cashBackPNR
     *
     * @return CashBackDetails
     */
    public function setCashBackPNR(?string $cashBackPNR = null): self
    {
        // validation for constraint: string
        if (!is_null($cashBackPNR) && !is_string($cashBackPNR)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cashBackPNR, true), gettype($cashBackPNR)), __LINE__);
        }
        if (is_null($cashBackPNR) || (is_array($cashBackPNR) && empty($cashBackPNR))) {
            unset($this->CashBackPNR);
        } else {
            $this->CashBackPNR = $cashBackPNR;
        }

        return $this;
    }

    /**
     * Get CashBackAmountCurrency value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCashBackAmountCurrency(): ?string
    {
        return $this->CashBackAmountCurrency ?? null;
    }

    /**
     * Set CashBackAmountCurrency value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $cashBackAmountCurrency
     *
     * @return CashBackDetails
     */
    public function setCashBackAmountCurrency(?string $cashBackAmountCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($cashBackAmountCurrency) && !is_string($cashBackAmountCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cashBackAmountCurrency, true), gettype($cashBackAmountCurrency)), __LINE__);
        }
        if (is_null($cashBackAmountCurrency) || (is_array($cashBackAmountCurrency) && empty($cashBackAmountCurrency))) {
            unset($this->CashBackAmountCurrency);
        } else {
            $this->CashBackAmountCurrency = $cashBackAmountCurrency;
        }

        return $this;
    }
}

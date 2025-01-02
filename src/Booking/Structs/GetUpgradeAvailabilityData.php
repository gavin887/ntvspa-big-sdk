<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUpgradeAvailabilityData Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetUpgradeAvailabilityData
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetUpgradeAvailabilityData extends AbstractStructBase
{
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
     * Constructor method for GetUpgradeAvailabilityData
     *
     * @param string $currencyCode
     *
     * @uses GetUpgradeAvailabilityData::setCurrencyCode()
     */
    public function __construct(?string $currencyCode = null)
    {
        $this
            ->setCurrencyCode($currencyCode);
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
     * @return GetUpgradeAvailabilityData
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

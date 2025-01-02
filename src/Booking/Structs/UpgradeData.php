<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfSegmentUpgrade;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpgradeData Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:UpgradeData
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class UpgradeData extends AbstractStructBase
{
    /**
     * The FeeOverride
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $FeeOverride = null;
    /**
     * The Segments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfSegmentUpgrade|null
     */
    protected ?ArrayOfSegmentUpgrade $Segments = null;
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
     * Constructor method for UpgradeData
     *
     * @param bool                                             $feeOverride
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfSegmentUpgrade $segments
     * @param string                                           $currencyCode
     *
     * @uses UpgradeData::setFeeOverride()
     * @uses UpgradeData::setSegments()
     * @uses UpgradeData::setCurrencyCode()
     */
    public function __construct(?bool $feeOverride = null, ?ArrayOfSegmentUpgrade $segments = null, ?string $currencyCode = null)
    {
        $this
            ->setFeeOverride($feeOverride)
            ->setSegments($segments)
            ->setCurrencyCode($currencyCode);
    }

    /**
     * Get FeeOverride value
     *
     * @return bool|null
     */
    public function getFeeOverride(): ?bool
    {
        return $this->FeeOverride;
    }

    /**
     * Set FeeOverride value
     *
     * @param bool $feeOverride
     *
     * @return UpgradeData
     */
    public function setFeeOverride(?bool $feeOverride = null): self
    {
        // validation for constraint: boolean
        if (!is_null($feeOverride) && !is_bool($feeOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($feeOverride, true), gettype($feeOverride)), __LINE__);
        }
        $this->FeeOverride = $feeOverride;

        return $this;
    }

    /**
     * Get Segments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfSegmentUpgrade|null
     */
    public function getSegments(): ?ArrayOfSegmentUpgrade
    {
        return $this->Segments ?? null;
    }

    /**
     * Set Segments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfSegmentUpgrade $segments
     *
     * @return UpgradeData
     */
    public function setSegments(?ArrayOfSegmentUpgrade $segments = null): self
    {
        if (is_null($segments) || (is_array($segments) && empty($segments))) {
            unset($this->Segments);
        } else {
            $this->Segments = $segments;
        }

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
     * @return UpgradeData
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

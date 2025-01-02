<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfAvailableUpgrade;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SegmentUpgrade Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SegmentUpgrade
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class SegmentUpgrade extends AbstractStructBase
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
     * The STD
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $STD = null;
    /**
     * The Selected
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $Selected = null;
    /**
     * The SegmentSellKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $SegmentSellKey = null;
    /**
     * The UpgradeClassOfService
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $UpgradeClassOfService = null;
    /**
     * The ArrivalStation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ArrivalStation = null;
    /**
     * The DepartureStation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DepartureStation = null;
    /**
     * The AvailableUpgrades
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfAvailableUpgrade|null
     */
    protected ?ArrayOfAvailableUpgrade $AvailableUpgrades = null;

    /**
     * Constructor method for SegmentUpgrade
     *
     * @param float                                              $amount
     * @param string                                             $sTD
     * @param bool                                               $selected
     * @param string                                             $segmentSellKey
     * @param string                                             $upgradeClassOfService
     * @param string                                             $arrivalStation
     * @param string                                             $departureStation
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfAvailableUpgrade $availableUpgrades
     *
     * @uses SegmentUpgrade::setAmount()
     * @uses SegmentUpgrade::setSTD()
     * @uses SegmentUpgrade::setSelected()
     * @uses SegmentUpgrade::setSegmentSellKey()
     * @uses SegmentUpgrade::setUpgradeClassOfService()
     * @uses SegmentUpgrade::setArrivalStation()
     * @uses SegmentUpgrade::setDepartureStation()
     * @uses SegmentUpgrade::setAvailableUpgrades()
     */
    public function __construct(?float $amount = null, ?string $sTD = null, ?bool $selected = null, ?string $segmentSellKey = null, ?string $upgradeClassOfService = null, ?string $arrivalStation = null, ?string $departureStation = null, ?ArrayOfAvailableUpgrade $availableUpgrades = null)
    {
        $this
            ->setAmount($amount)
            ->setSTD($sTD)
            ->setSelected($selected)
            ->setSegmentSellKey($segmentSellKey)
            ->setUpgradeClassOfService($upgradeClassOfService)
            ->setArrivalStation($arrivalStation)
            ->setDepartureStation($departureStation)
            ->setAvailableUpgrades($availableUpgrades);
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
     * @return SegmentUpgrade
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
     * Get STD value
     *
     * @return string|null
     */
    public function getSTD(): ?string
    {
        return $this->STD;
    }

    /**
     * Set STD value
     *
     * @param string $sTD
     *
     * @return SegmentUpgrade
     */
    public function setSTD(?string $sTD = null): self
    {
        // validation for constraint: string
        if (!is_null($sTD) && !is_string($sTD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sTD, true), gettype($sTD)), __LINE__);
        }
        $this->STD = $sTD;

        return $this;
    }

    /**
     * Get Selected value
     *
     * @return bool|null
     */
    public function getSelected(): ?bool
    {
        return $this->Selected;
    }

    /**
     * Set Selected value
     *
     * @param bool $selected
     *
     * @return SegmentUpgrade
     */
    public function setSelected(?bool $selected = null): self
    {
        // validation for constraint: boolean
        if (!is_null($selected) && !is_bool($selected)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($selected, true), gettype($selected)), __LINE__);
        }
        $this->Selected = $selected;

        return $this;
    }

    /**
     * Get SegmentSellKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getSegmentSellKey(): ?string
    {
        return $this->SegmentSellKey ?? null;
    }

    /**
     * Set SegmentSellKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $segmentSellKey
     *
     * @return SegmentUpgrade
     */
    public function setSegmentSellKey(?string $segmentSellKey = null): self
    {
        // validation for constraint: string
        if (!is_null($segmentSellKey) && !is_string($segmentSellKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($segmentSellKey, true), gettype($segmentSellKey)), __LINE__);
        }
        if (is_null($segmentSellKey) || (is_array($segmentSellKey) && empty($segmentSellKey))) {
            unset($this->SegmentSellKey);
        } else {
            $this->SegmentSellKey = $segmentSellKey;
        }

        return $this;
    }

    /**
     * Get UpgradeClassOfService value
     *
     * @return string|null
     */
    public function getUpgradeClassOfService(): ?string
    {
        return $this->UpgradeClassOfService;
    }

    /**
     * Set UpgradeClassOfService value
     *
     * @param string $upgradeClassOfService
     *
     * @return SegmentUpgrade
     */
    public function setUpgradeClassOfService(?string $upgradeClassOfService = null): self
    {
        // validation for constraint: string
        if (!is_null($upgradeClassOfService) && !is_string($upgradeClassOfService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($upgradeClassOfService, true), gettype($upgradeClassOfService)), __LINE__);
        }
        $this->UpgradeClassOfService = $upgradeClassOfService;

        return $this;
    }

    /**
     * Get ArrivalStation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getArrivalStation(): ?string
    {
        return $this->ArrivalStation ?? null;
    }

    /**
     * Set ArrivalStation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $arrivalStation
     *
     * @return SegmentUpgrade
     */
    public function setArrivalStation(?string $arrivalStation = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalStation) && !is_string($arrivalStation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalStation, true), gettype($arrivalStation)), __LINE__);
        }
        if (is_null($arrivalStation) || (is_array($arrivalStation) && empty($arrivalStation))) {
            unset($this->ArrivalStation);
        } else {
            $this->ArrivalStation = $arrivalStation;
        }

        return $this;
    }

    /**
     * Get DepartureStation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDepartureStation(): ?string
    {
        return $this->DepartureStation ?? null;
    }

    /**
     * Set DepartureStation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $departureStation
     *
     * @return SegmentUpgrade
     */
    public function setDepartureStation(?string $departureStation = null): self
    {
        // validation for constraint: string
        if (!is_null($departureStation) && !is_string($departureStation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureStation, true), gettype($departureStation)), __LINE__);
        }
        if (is_null($departureStation) || (is_array($departureStation) && empty($departureStation))) {
            unset($this->DepartureStation);
        } else {
            $this->DepartureStation = $departureStation;
        }

        return $this;
    }

    /**
     * Get AvailableUpgrades value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfAvailableUpgrade|null
     */
    public function getAvailableUpgrades(): ?ArrayOfAvailableUpgrade
    {
        return $this->AvailableUpgrades ?? null;
    }

    /**
     * Set AvailableUpgrades value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfAvailableUpgrade $availableUpgrades
     *
     * @return SegmentUpgrade
     */
    public function setAvailableUpgrades(?ArrayOfAvailableUpgrade $availableUpgrades = null): self
    {
        if (is_null($availableUpgrades) || (is_array($availableUpgrades) && empty($availableUpgrades))) {
            unset($this->AvailableUpgrades);
        } else {
            $this->AvailableUpgrades = $availableUpgrades;
        }

        return $this;
    }
}

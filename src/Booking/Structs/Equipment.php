<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfCompartment;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Equipment Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Equipment
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Equipment extends AbstractStructBase
{
    /**
     * The AvailableUnits
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $AvailableUnits = null;
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
     * The EquipmentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $EquipmentType = null;
    /**
     * The EquipmentTypeSuffix
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $EquipmentTypeSuffix = null;
    /**
     * The Compartments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfCompartment|null
     */
    protected ?ArrayOfCompartment $Compartments = null;
    /**
     * The MarketingCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $MarketingCode = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Name = null;

    /**
     * Constructor method for Equipment
     *
     * @param int                                           $availableUnits
     * @param string                                        $arrivalStation
     * @param string                                        $departureStation
     * @param string                                        $equipmentType
     * @param string                                        $equipmentTypeSuffix
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfCompartment $compartments
     * @param string                                        $marketingCode
     * @param string                                        $name
     *
     * @uses Equipment::setAvailableUnits()
     * @uses Equipment::setArrivalStation()
     * @uses Equipment::setDepartureStation()
     * @uses Equipment::setEquipmentType()
     * @uses Equipment::setEquipmentTypeSuffix()
     * @uses Equipment::setCompartments()
     * @uses Equipment::setMarketingCode()
     * @uses Equipment::setName()
     */
    public function __construct(?int $availableUnits = null, ?string $arrivalStation = null, ?string $departureStation = null, ?string $equipmentType = null, ?string $equipmentTypeSuffix = null, ?ArrayOfCompartment $compartments = null, ?string $marketingCode = null, ?string $name = null)
    {
        $this
            ->setAvailableUnits($availableUnits)
            ->setArrivalStation($arrivalStation)
            ->setDepartureStation($departureStation)
            ->setEquipmentType($equipmentType)
            ->setEquipmentTypeSuffix($equipmentTypeSuffix)
            ->setCompartments($compartments)
            ->setMarketingCode($marketingCode)
            ->setName($name);
    }

    /**
     * Get AvailableUnits value
     *
     * @return int|null
     */
    public function getAvailableUnits(): ?int
    {
        return $this->AvailableUnits;
    }

    /**
     * Set AvailableUnits value
     *
     * @param int $availableUnits
     *
     * @return Equipment
     */
    public function setAvailableUnits(?int $availableUnits = null): self
    {
        // validation for constraint: int
        if (!is_null($availableUnits) && !(is_int($availableUnits) || ctype_digit($availableUnits))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($availableUnits, true), gettype($availableUnits)), __LINE__);
        }
        $this->AvailableUnits = $availableUnits;

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
     * @return Equipment
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
     * @return Equipment
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
     * Get EquipmentType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getEquipmentType(): ?string
    {
        return $this->EquipmentType ?? null;
    }

    /**
     * Set EquipmentType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $equipmentType
     *
     * @return Equipment
     */
    public function setEquipmentType(?string $equipmentType = null): self
    {
        // validation for constraint: string
        if (!is_null($equipmentType) && !is_string($equipmentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($equipmentType, true), gettype($equipmentType)), __LINE__);
        }
        if (is_null($equipmentType) || (is_array($equipmentType) && empty($equipmentType))) {
            unset($this->EquipmentType);
        } else {
            $this->EquipmentType = $equipmentType;
        }

        return $this;
    }

    /**
     * Get EquipmentTypeSuffix value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getEquipmentTypeSuffix(): ?string
    {
        return $this->EquipmentTypeSuffix ?? null;
    }

    /**
     * Set EquipmentTypeSuffix value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $equipmentTypeSuffix
     *
     * @return Equipment
     */
    public function setEquipmentTypeSuffix(?string $equipmentTypeSuffix = null): self
    {
        // validation for constraint: string
        if (!is_null($equipmentTypeSuffix) && !is_string($equipmentTypeSuffix)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($equipmentTypeSuffix, true), gettype($equipmentTypeSuffix)), __LINE__);
        }
        if (is_null($equipmentTypeSuffix) || (is_array($equipmentTypeSuffix) && empty($equipmentTypeSuffix))) {
            unset($this->EquipmentTypeSuffix);
        } else {
            $this->EquipmentTypeSuffix = $equipmentTypeSuffix;
        }

        return $this;
    }

    /**
     * Get Compartments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfCompartment|null
     */
    public function getCompartments(): ?ArrayOfCompartment
    {
        return $this->Compartments ?? null;
    }

    /**
     * Set Compartments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfCompartment $compartments
     *
     * @return Equipment
     */
    public function setCompartments(?ArrayOfCompartment $compartments = null): self
    {
        if (is_null($compartments) || (is_array($compartments) && empty($compartments))) {
            unset($this->Compartments);
        } else {
            $this->Compartments = $compartments;
        }

        return $this;
    }

    /**
     * Get MarketingCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getMarketingCode(): ?string
    {
        return $this->MarketingCode ?? null;
    }

    /**
     * Set MarketingCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $marketingCode
     *
     * @return Equipment
     */
    public function setMarketingCode(?string $marketingCode = null): self
    {
        // validation for constraint: string
        if (!is_null($marketingCode) && !is_string($marketingCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($marketingCode, true), gettype($marketingCode)), __LINE__);
        }
        if (is_null($marketingCode) || (is_array($marketingCode) && empty($marketingCode))) {
            unset($this->MarketingCode);
        } else {
            $this->MarketingCode = $marketingCode;
        }

        return $this;
    }

    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $name
     *
     * @return Equipment
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }

        return $this;
    }
}

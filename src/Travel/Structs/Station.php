<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Station Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Station
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Station extends AbstractStructBase
{
    /**
     * The EstimatedDepartureTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $EstimatedDepartureTime = null;
    /**
     * The ActualDepartureTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $ActualDepartureTime = null;
    /**
     * The EstimatedArrivalTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $EstimatedArrivalTime = null;
    /**
     * The ActualArrivalTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $ActualArrivalTime = null;
    /**
     * The StationNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $StationNumber = null;
    /**
     * The Direction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $Direction = null;
    /**
     * The DepartureTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $DepartureTime = null;
    /**
     * The ArrivalTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $ArrivalTime = null;
    /**
     * The LocationCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $LocationCode = null;
    /**
     * The LocationDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $LocationDescription = null;
    /**
     * The RfiLocationCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $RfiLocationCode = null;
    /**
     * The ActualArrivalPlatform
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ActualArrivalPlatform = null;
    /**
     * The ActualPlatform
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ActualPlatform = null;

    /**
     * Constructor method for Station
     *
     * @param string $estimatedDepartureTime
     * @param string $actualDepartureTime
     * @param string $estimatedArrivalTime
     * @param string $actualArrivalTime
     * @param int    $stationNumber
     * @param bool   $direction
     * @param string $departureTime
     * @param string $arrivalTime
     * @param string $locationCode
     * @param string $locationDescription
     * @param string $rfiLocationCode
     * @param string $actualArrivalPlatform
     * @param string $actualPlatform
     *
     * @uses Station::setEstimatedDepartureTime()
     * @uses Station::setActualDepartureTime()
     * @uses Station::setEstimatedArrivalTime()
     * @uses Station::setActualArrivalTime()
     * @uses Station::setStationNumber()
     * @uses Station::setDirection()
     * @uses Station::setDepartureTime()
     * @uses Station::setArrivalTime()
     * @uses Station::setLocationCode()
     * @uses Station::setLocationDescription()
     * @uses Station::setRfiLocationCode()
     * @uses Station::setActualArrivalPlatform()
     * @uses Station::setActualPlatform()
     */
    public function __construct(?string $estimatedDepartureTime = null, ?string $actualDepartureTime = null, ?string $estimatedArrivalTime = null, ?string $actualArrivalTime = null, ?int $stationNumber = null, ?bool $direction = null, ?string $departureTime = null, ?string $arrivalTime = null, ?string $locationCode = null, ?string $locationDescription = null, ?string $rfiLocationCode = null, ?string $actualArrivalPlatform = null, ?string $actualPlatform = null)
    {
        $this
            ->setEstimatedDepartureTime($estimatedDepartureTime)
            ->setActualDepartureTime($actualDepartureTime)
            ->setEstimatedArrivalTime($estimatedArrivalTime)
            ->setActualArrivalTime($actualArrivalTime)
            ->setStationNumber($stationNumber)
            ->setDirection($direction)
            ->setDepartureTime($departureTime)
            ->setArrivalTime($arrivalTime)
            ->setLocationCode($locationCode)
            ->setLocationDescription($locationDescription)
            ->setRfiLocationCode($rfiLocationCode)
            ->setActualArrivalPlatform($actualArrivalPlatform)
            ->setActualPlatform($actualPlatform);
    }

    /**
     * Get EstimatedDepartureTime value
     *
     * @return string|null
     */
    public function getEstimatedDepartureTime(): ?string
    {
        return $this->EstimatedDepartureTime;
    }

    /**
     * Set EstimatedDepartureTime value
     *
     * @param string $estimatedDepartureTime
     *
     * @return Station
     */
    public function setEstimatedDepartureTime(?string $estimatedDepartureTime = null): self
    {
        // validation for constraint: string
        if (!is_null($estimatedDepartureTime) && !is_string($estimatedDepartureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estimatedDepartureTime, true), gettype($estimatedDepartureTime)), __LINE__);
        }
        $this->EstimatedDepartureTime = $estimatedDepartureTime;

        return $this;
    }

    /**
     * Get ActualDepartureTime value
     *
     * @return string|null
     */
    public function getActualDepartureTime(): ?string
    {
        return $this->ActualDepartureTime;
    }

    /**
     * Set ActualDepartureTime value
     *
     * @param string $actualDepartureTime
     *
     * @return Station
     */
    public function setActualDepartureTime(?string $actualDepartureTime = null): self
    {
        // validation for constraint: string
        if (!is_null($actualDepartureTime) && !is_string($actualDepartureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actualDepartureTime, true), gettype($actualDepartureTime)), __LINE__);
        }
        $this->ActualDepartureTime = $actualDepartureTime;

        return $this;
    }

    /**
     * Get EstimatedArrivalTime value
     *
     * @return string|null
     */
    public function getEstimatedArrivalTime(): ?string
    {
        return $this->EstimatedArrivalTime;
    }

    /**
     * Set EstimatedArrivalTime value
     *
     * @param string $estimatedArrivalTime
     *
     * @return Station
     */
    public function setEstimatedArrivalTime(?string $estimatedArrivalTime = null): self
    {
        // validation for constraint: string
        if (!is_null($estimatedArrivalTime) && !is_string($estimatedArrivalTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estimatedArrivalTime, true), gettype($estimatedArrivalTime)), __LINE__);
        }
        $this->EstimatedArrivalTime = $estimatedArrivalTime;

        return $this;
    }

    /**
     * Get ActualArrivalTime value
     *
     * @return string|null
     */
    public function getActualArrivalTime(): ?string
    {
        return $this->ActualArrivalTime;
    }

    /**
     * Set ActualArrivalTime value
     *
     * @param string $actualArrivalTime
     *
     * @return Station
     */
    public function setActualArrivalTime(?string $actualArrivalTime = null): self
    {
        // validation for constraint: string
        if (!is_null($actualArrivalTime) && !is_string($actualArrivalTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actualArrivalTime, true), gettype($actualArrivalTime)), __LINE__);
        }
        $this->ActualArrivalTime = $actualArrivalTime;

        return $this;
    }

    /**
     * Get StationNumber value
     *
     * @return int|null
     */
    public function getStationNumber(): ?int
    {
        return $this->StationNumber;
    }

    /**
     * Set StationNumber value
     *
     * @param int $stationNumber
     *
     * @return Station
     */
    public function setStationNumber(?int $stationNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($stationNumber) && !(is_int($stationNumber) || ctype_digit($stationNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($stationNumber, true), gettype($stationNumber)), __LINE__);
        }
        $this->StationNumber = $stationNumber;

        return $this;
    }

    /**
     * Get Direction value
     *
     * @return bool|null
     */
    public function getDirection(): ?bool
    {
        return $this->Direction;
    }

    /**
     * Set Direction value
     *
     * @param bool $direction
     *
     * @return Station
     */
    public function setDirection(?bool $direction = null): self
    {
        // validation for constraint: boolean
        if (!is_null($direction) && !is_bool($direction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($direction, true), gettype($direction)), __LINE__);
        }
        $this->Direction = $direction;

        return $this;
    }

    /**
     * Get DepartureTime value
     *
     * @return string|null
     */
    public function getDepartureTime(): ?string
    {
        return $this->DepartureTime;
    }

    /**
     * Set DepartureTime value
     *
     * @param string $departureTime
     *
     * @return Station
     */
    public function setDepartureTime(?string $departureTime = null): self
    {
        // validation for constraint: string
        if (!is_null($departureTime) && !is_string($departureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureTime, true), gettype($departureTime)), __LINE__);
        }
        $this->DepartureTime = $departureTime;

        return $this;
    }

    /**
     * Get ArrivalTime value
     *
     * @return string|null
     */
    public function getArrivalTime(): ?string
    {
        return $this->ArrivalTime;
    }

    /**
     * Set ArrivalTime value
     *
     * @param string $arrivalTime
     *
     * @return Station
     */
    public function setArrivalTime(?string $arrivalTime = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalTime) && !is_string($arrivalTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalTime, true), gettype($arrivalTime)), __LINE__);
        }
        $this->ArrivalTime = $arrivalTime;

        return $this;
    }

    /**
     * Get LocationCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getLocationCode(): ?string
    {
        return $this->LocationCode ?? null;
    }

    /**
     * Set LocationCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $locationCode
     *
     * @return Station
     */
    public function setLocationCode(?string $locationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($locationCode) && !is_string($locationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationCode, true), gettype($locationCode)), __LINE__);
        }
        if (is_null($locationCode) || (is_array($locationCode) && empty($locationCode))) {
            unset($this->LocationCode);
        } else {
            $this->LocationCode = $locationCode;
        }

        return $this;
    }

    /**
     * Get LocationDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getLocationDescription(): ?string
    {
        return $this->LocationDescription ?? null;
    }

    /**
     * Set LocationDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $locationDescription
     *
     * @return Station
     */
    public function setLocationDescription(?string $locationDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($locationDescription) && !is_string($locationDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationDescription, true), gettype($locationDescription)), __LINE__);
        }
        if (is_null($locationDescription) || (is_array($locationDescription) && empty($locationDescription))) {
            unset($this->LocationDescription);
        } else {
            $this->LocationDescription = $locationDescription;
        }

        return $this;
    }

    /**
     * Get RfiLocationCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getRfiLocationCode(): ?string
    {
        return $this->RfiLocationCode ?? null;
    }

    /**
     * Set RfiLocationCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $rfiLocationCode
     *
     * @return Station
     */
    public function setRfiLocationCode(?string $rfiLocationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($rfiLocationCode) && !is_string($rfiLocationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rfiLocationCode, true), gettype($rfiLocationCode)), __LINE__);
        }
        if (is_null($rfiLocationCode) || (is_array($rfiLocationCode) && empty($rfiLocationCode))) {
            unset($this->RfiLocationCode);
        } else {
            $this->RfiLocationCode = $rfiLocationCode;
        }

        return $this;
    }

    /**
     * Get ActualArrivalPlatform value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getActualArrivalPlatform(): ?string
    {
        return $this->ActualArrivalPlatform ?? null;
    }

    /**
     * Set ActualArrivalPlatform value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $actualArrivalPlatform
     *
     * @return Station
     */
    public function setActualArrivalPlatform(?string $actualArrivalPlatform = null): self
    {
        // validation for constraint: string
        if (!is_null($actualArrivalPlatform) && !is_string($actualArrivalPlatform)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actualArrivalPlatform, true), gettype($actualArrivalPlatform)), __LINE__);
        }
        if (is_null($actualArrivalPlatform) || (is_array($actualArrivalPlatform) && empty($actualArrivalPlatform))) {
            unset($this->ActualArrivalPlatform);
        } else {
            $this->ActualArrivalPlatform = $actualArrivalPlatform;
        }

        return $this;
    }

    /**
     * Get ActualPlatform value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getActualPlatform(): ?string
    {
        return $this->ActualPlatform ?? null;
    }

    /**
     * Set ActualPlatform value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $actualPlatform
     *
     * @return Station
     */
    public function setActualPlatform(?string $actualPlatform = null): self
    {
        // validation for constraint: string
        if (!is_null($actualPlatform) && !is_string($actualPlatform)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actualPlatform, true), gettype($actualPlatform)), __LINE__);
        }
        if (is_null($actualPlatform) || (is_array($actualPlatform) && empty($actualPlatform))) {
            unset($this->ActualPlatform);
        } else {
            $this->ActualPlatform = $actualPlatform;
        }

        return $this;
    }
}

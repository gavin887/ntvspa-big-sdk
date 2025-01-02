<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Travel\Enums\LegStatus;
use Travel\Arrays\ArrayOfLegSSR;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Leg Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Leg
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Leg extends AbstractStructBase
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
     * The STD
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $STD = null;
    /**
     * The STA
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $STA = null;
    /**
     * The LegStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $LegStatus = null;
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
     * The ArrivalStation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ArrivalStation = null;
    /**
     * The ArrivalStationDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ArrivalStationDescription = null;
    /**
     * The TrainOrientation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $TrainOrientation = null;
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
     * The LegSSRs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Travel\Arrays\ArrayOfLegSSR|null
     */
    protected ?ArrayOfLegSSR $LegSSRs = null;

    /**
     * Constructor method for Leg
     *
     * @param string                                  $estimatedDepartureTime
     * @param string                                  $actualDepartureTime
     * @param string                                  $estimatedArrivalTime
     * @param string                                  $actualArrivalTime
     * @param string                                  $sTD
     * @param string                                  $sTA
     * @param string                                  $legStatus
     * @param string                                  $departureStation
     * @param string                                  $arrivalStation
     * @param string                                  $arrivalStationDescription
     * @param string                                  $trainOrientation
     * @param string                                  $actualArrivalPlatform
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfLegSSR $legSSRs
     *
     * @uses Leg::setEstimatedDepartureTime()
     * @uses Leg::setActualDepartureTime()
     * @uses Leg::setEstimatedArrivalTime()
     * @uses Leg::setActualArrivalTime()
     * @uses Leg::setSTD()
     * @uses Leg::setSTA()
     * @uses Leg::setLegStatus()
     * @uses Leg::setDepartureStation()
     * @uses Leg::setArrivalStation()
     * @uses Leg::setArrivalStationDescription()
     * @uses Leg::setTrainOrientation()
     * @uses Leg::setActualArrivalPlatform()
     * @uses Leg::setLegSSRs()
     */
    public function __construct(?string $estimatedDepartureTime = null, ?string $actualDepartureTime = null, ?string $estimatedArrivalTime = null, ?string $actualArrivalTime = null, ?string $sTD = null, ?string $sTA = null, ?string $legStatus = null, ?string $departureStation = null, ?string $arrivalStation = null, ?string $arrivalStationDescription = null, ?string $trainOrientation = null, ?string $actualArrivalPlatform = null, ?ArrayOfLegSSR $legSSRs = null)
    {
        $this
            ->setEstimatedDepartureTime($estimatedDepartureTime)
            ->setActualDepartureTime($actualDepartureTime)
            ->setEstimatedArrivalTime($estimatedArrivalTime)
            ->setActualArrivalTime($actualArrivalTime)
            ->setSTD($sTD)
            ->setSTA($sTA)
            ->setLegStatus($legStatus)
            ->setDepartureStation($departureStation)
            ->setArrivalStation($arrivalStation)
            ->setArrivalStationDescription($arrivalStationDescription)
            ->setTrainOrientation($trainOrientation)
            ->setActualArrivalPlatform($actualArrivalPlatform)
            ->setLegSSRs($legSSRs);
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
     * @return Leg
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
     * @return Leg
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
     * @return Leg
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
     * @return Leg
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
     * @return Leg
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
     * Get STA value
     *
     * @return string|null
     */
    public function getSTA(): ?string
    {
        return $this->STA;
    }

    /**
     * Set STA value
     *
     * @param string $sTA
     *
     * @return Leg
     */
    public function setSTA(?string $sTA = null): self
    {
        // validation for constraint: string
        if (!is_null($sTA) && !is_string($sTA)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sTA, true), gettype($sTA)), __LINE__);
        }
        $this->STA = $sTA;

        return $this;
    }

    /**
     * Get LegStatus value
     *
     * @return string|null
     */
    public function getLegStatus(): ?string
    {
        return $this->LegStatus;
    }

    /**
     * Set LegStatus value
     *
     * @param string $legStatus
     *
     * @return Leg
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Travel\Enums\LegStatus::getValidValues()
     * @uses \Ntvspa\Big\Travel\Enums\LegStatus::valueIsValid()
     */
    public function setLegStatus(?string $legStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Travel\Enums\LegStatus::valueIsValid($legStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Travel\Enums\LegStatus', is_array($legStatus) ? implode(', ', $legStatus) : var_export($legStatus, true), implode(', ', LegStatus::getValidValues())), __LINE__);
        }
        $this->LegStatus = $legStatus;

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
     * @return Leg
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
     * @return Leg
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
     * Get ArrivalStationDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getArrivalStationDescription(): ?string
    {
        return $this->ArrivalStationDescription ?? null;
    }

    /**
     * Set ArrivalStationDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $arrivalStationDescription
     *
     * @return Leg
     */
    public function setArrivalStationDescription(?string $arrivalStationDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalStationDescription) && !is_string($arrivalStationDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalStationDescription, true), gettype($arrivalStationDescription)), __LINE__);
        }
        if (is_null($arrivalStationDescription) || (is_array($arrivalStationDescription) && empty($arrivalStationDescription))) {
            unset($this->ArrivalStationDescription);
        } else {
            $this->ArrivalStationDescription = $arrivalStationDescription;
        }

        return $this;
    }

    /**
     * Get TrainOrientation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTrainOrientation(): ?string
    {
        return $this->TrainOrientation ?? null;
    }

    /**
     * Set TrainOrientation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $trainOrientation
     *
     * @return Leg
     */
    public function setTrainOrientation(?string $trainOrientation = null): self
    {
        // validation for constraint: string
        if (!is_null($trainOrientation) && !is_string($trainOrientation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trainOrientation, true), gettype($trainOrientation)), __LINE__);
        }
        if (is_null($trainOrientation) || (is_array($trainOrientation) && empty($trainOrientation))) {
            unset($this->TrainOrientation);
        } else {
            $this->TrainOrientation = $trainOrientation;
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
     * @return Leg
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
     * Get LegSSRs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Travel\Arrays\ArrayOfLegSSR|null
     */
    public function getLegSSRs(): ?ArrayOfLegSSR
    {
        return $this->LegSSRs ?? null;
    }

    /**
     * Set LegSSRs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfLegSSR $legSSRs
     *
     * @return Leg
     */
    public function setLegSSRs(?ArrayOfLegSSR $legSSRs = null): self
    {
        if (is_null($legSSRs) || (is_array($legSSRs) && empty($legSSRs))) {
            unset($this->LegSSRs);
        } else {
            $this->LegSSRs = $legSSRs;
        }

        return $this;
    }
}

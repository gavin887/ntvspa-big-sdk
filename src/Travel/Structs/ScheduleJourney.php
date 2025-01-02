<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Travel\Arrays\ArrayOfSegment;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ScheduleJourney Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ScheduleJourney
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ScheduleJourney extends AbstractStructBase
{
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
     * The NoStopTrain
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $NoStopTrain = null;
    /**
     * The Availability
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $Availability = null;
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
     * The Segments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Travel\Arrays\ArrayOfSegment|null
     */
    protected ?ArrayOfSegment $Segments = null;

    /**
     * Constructor method for ScheduleJourney
     *
     * @param string                                   $sTD
     * @param string                                   $sTA
     * @param bool                                     $noStopTrain
     * @param int                                      $availability
     * @param string                                   $departureStation
     * @param string                                   $arrivalStation
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfSegment $segments
     *
     * @uses ScheduleJourney::setSTD()
     * @uses ScheduleJourney::setSTA()
     * @uses ScheduleJourney::setNoStopTrain()
     * @uses ScheduleJourney::setAvailability()
     * @uses ScheduleJourney::setDepartureStation()
     * @uses ScheduleJourney::setArrivalStation()
     * @uses ScheduleJourney::setSegments()
     */
    public function __construct(?string $sTD = null, ?string $sTA = null, ?bool $noStopTrain = null, ?int $availability = null, ?string $departureStation = null, ?string $arrivalStation = null, ?ArrayOfSegment $segments = null)
    {
        $this
            ->setSTD($sTD)
            ->setSTA($sTA)
            ->setNoStopTrain($noStopTrain)
            ->setAvailability($availability)
            ->setDepartureStation($departureStation)
            ->setArrivalStation($arrivalStation)
            ->setSegments($segments);
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
     * @return ScheduleJourney
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
     * @return ScheduleJourney
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
     * Get NoStopTrain value
     *
     * @return bool|null
     */
    public function getNoStopTrain(): ?bool
    {
        return $this->NoStopTrain;
    }

    /**
     * Set NoStopTrain value
     *
     * @param bool $noStopTrain
     *
     * @return ScheduleJourney
     */
    public function setNoStopTrain(?bool $noStopTrain = null): self
    {
        // validation for constraint: boolean
        if (!is_null($noStopTrain) && !is_bool($noStopTrain)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($noStopTrain, true), gettype($noStopTrain)), __LINE__);
        }
        $this->NoStopTrain = $noStopTrain;

        return $this;
    }

    /**
     * Get Availability value
     *
     * @return int|null
     */
    public function getAvailability(): ?int
    {
        return $this->Availability;
    }

    /**
     * Set Availability value
     *
     * @param int $availability
     *
     * @return ScheduleJourney
     */
    public function setAvailability(?int $availability = null): self
    {
        // validation for constraint: int
        if (!is_null($availability) && !(is_int($availability) || ctype_digit($availability))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($availability, true), gettype($availability)), __LINE__);
        }
        $this->Availability = $availability;

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
     * @return ScheduleJourney
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
     * @return ScheduleJourney
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
     * Get Segments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Travel\Arrays\ArrayOfSegment|null
     */
    public function getSegments(): ?ArrayOfSegment
    {
        return $this->Segments ?? null;
    }

    /**
     * Set Segments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfSegment $segments
     *
     * @return ScheduleJourney
     */
    public function setSegments(?ArrayOfSegment $segments = null): self
    {
        if (is_null($segments) || (is_array($segments) && empty($segments))) {
            unset($this->Segments);
        } else {
            $this->Segments = $segments;
        }

        return $this;
    }
}

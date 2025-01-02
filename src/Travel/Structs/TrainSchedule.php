<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Travel\Arrays\ArrayOfStation;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrainSchedule Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TrainSchedule
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class TrainSchedule extends AbstractStructBase
{
    /**
     * The DepartureDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $DepartureDate = null;
    /**
     * The ArrivalDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $ArrivalDate = null;
    /**
     * The TrainNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $TrainNumber = null;
    /**
     * The RfiTrainNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $RfiTrainNumber = null;
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
     * The DepartureStationDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DepartureStationDescription = null;
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
     * The Distruption
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Distruption|null
     */
    protected ?\Ntvspa\Big\Travel\Structs\Distruption $Distruption = null;
    /**
     * The Leg
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Leg|null
     */
    protected ?\Ntvspa\Big\Travel\Structs\Leg $Leg = null;
    /**
     * The Station
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Travel\Arrays\ArrayOfStation|null
     */
    protected ?ArrayOfStation $Station = null;
    /**
     * The InfoRoute
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $InfoRoute = null;
    /**
     * The InfoExtra
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $InfoExtra = null;

    /**
     * Constructor method for TrainSchedule
     *
     * @param string                                   $departureDate
     * @param string                                   $arrivalDate
     * @param string                                   $trainNumber
     * @param string                                   $rfiTrainNumber
     * @param string                                   $departureStation
     * @param string                                   $departureStationDescription
     * @param string                                   $arrivalStation
     * @param string                                   $arrivalStationDescription
     * @param Distruption                              $distruption
     * @param Leg                                      $leg
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfStation $station
     * @param string                                   $infoRoute
     * @param string                                   $infoExtra
     *
     * @uses TrainSchedule::setDepartureDate()
     * @uses TrainSchedule::setArrivalDate()
     * @uses TrainSchedule::setTrainNumber()
     * @uses TrainSchedule::setRfiTrainNumber()
     * @uses TrainSchedule::setDepartureStation()
     * @uses TrainSchedule::setDepartureStationDescription()
     * @uses TrainSchedule::setArrivalStation()
     * @uses TrainSchedule::setArrivalStationDescription()
     * @uses TrainSchedule::setDistruption()
     * @uses TrainSchedule::setLeg()
     * @uses TrainSchedule::setStation()
     * @uses TrainSchedule::setInfoRoute()
     * @uses TrainSchedule::setInfoExtra()
     */
    public function __construct(?string $departureDate = null, ?string $arrivalDate = null, ?string $trainNumber = null, ?string $rfiTrainNumber = null, ?string $departureStation = null, ?string $departureStationDescription = null, ?string $arrivalStation = null, ?string $arrivalStationDescription = null, ?\Ntvspa\Big\Travel\Structs\Distruption $distruption = null, ?\Ntvspa\Big\Travel\Structs\Leg $leg = null, ?ArrayOfStation $station = null, ?string $infoRoute = null, ?string $infoExtra = null)
    {
        $this
            ->setDepartureDate($departureDate)
            ->setArrivalDate($arrivalDate)
            ->setTrainNumber($trainNumber)
            ->setRfiTrainNumber($rfiTrainNumber)
            ->setDepartureStation($departureStation)
            ->setDepartureStationDescription($departureStationDescription)
            ->setArrivalStation($arrivalStation)
            ->setArrivalStationDescription($arrivalStationDescription)
            ->setDistruption($distruption)
            ->setLeg($leg)
            ->setStation($station)
            ->setInfoRoute($infoRoute)
            ->setInfoExtra($infoExtra);
    }

    /**
     * Get DepartureDate value
     *
     * @return string|null
     */
    public function getDepartureDate(): ?string
    {
        return $this->DepartureDate;
    }

    /**
     * Set DepartureDate value
     *
     * @param string $departureDate
     *
     * @return TrainSchedule
     */
    public function setDepartureDate(?string $departureDate = null): self
    {
        // validation for constraint: string
        if (!is_null($departureDate) && !is_string($departureDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureDate, true), gettype($departureDate)), __LINE__);
        }
        $this->DepartureDate = $departureDate;

        return $this;
    }

    /**
     * Get ArrivalDate value
     *
     * @return string|null
     */
    public function getArrivalDate(): ?string
    {
        return $this->ArrivalDate;
    }

    /**
     * Set ArrivalDate value
     *
     * @param string $arrivalDate
     *
     * @return TrainSchedule
     */
    public function setArrivalDate(?string $arrivalDate = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalDate) && !is_string($arrivalDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalDate, true), gettype($arrivalDate)), __LINE__);
        }
        $this->ArrivalDate = $arrivalDate;

        return $this;
    }

    /**
     * Get TrainNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTrainNumber(): ?string
    {
        return $this->TrainNumber ?? null;
    }

    /**
     * Set TrainNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $trainNumber
     *
     * @return TrainSchedule
     */
    public function setTrainNumber(?string $trainNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($trainNumber) && !is_string($trainNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trainNumber, true), gettype($trainNumber)), __LINE__);
        }
        if (is_null($trainNumber) || (is_array($trainNumber) && empty($trainNumber))) {
            unset($this->TrainNumber);
        } else {
            $this->TrainNumber = $trainNumber;
        }

        return $this;
    }

    /**
     * Get RfiTrainNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getRfiTrainNumber(): ?string
    {
        return $this->RfiTrainNumber ?? null;
    }

    /**
     * Set RfiTrainNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $rfiTrainNumber
     *
     * @return TrainSchedule
     */
    public function setRfiTrainNumber(?string $rfiTrainNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($rfiTrainNumber) && !is_string($rfiTrainNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rfiTrainNumber, true), gettype($rfiTrainNumber)), __LINE__);
        }
        if (is_null($rfiTrainNumber) || (is_array($rfiTrainNumber) && empty($rfiTrainNumber))) {
            unset($this->RfiTrainNumber);
        } else {
            $this->RfiTrainNumber = $rfiTrainNumber;
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
     * @return TrainSchedule
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
     * Get DepartureStationDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDepartureStationDescription(): ?string
    {
        return $this->DepartureStationDescription ?? null;
    }

    /**
     * Set DepartureStationDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $departureStationDescription
     *
     * @return TrainSchedule
     */
    public function setDepartureStationDescription(?string $departureStationDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($departureStationDescription) && !is_string($departureStationDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureStationDescription, true), gettype($departureStationDescription)), __LINE__);
        }
        if (is_null($departureStationDescription) || (is_array($departureStationDescription) && empty($departureStationDescription))) {
            unset($this->DepartureStationDescription);
        } else {
            $this->DepartureStationDescription = $departureStationDescription;
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
     * @return TrainSchedule
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
     * @return TrainSchedule
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
     * Get Distruption value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Distruption|null
     */
    public function getDistruption(): ?\Ntvspa\Big\Travel\Structs\Distruption
    {
        return $this->Distruption ?? null;
    }

    /**
     * Set Distruption value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Distruption $distruption
     *
     * @return TrainSchedule
     */
    public function setDistruption(?\Ntvspa\Big\Travel\Structs\Distruption $distruption = null): self
    {
        if (is_null($distruption) || (is_array($distruption) && empty($distruption))) {
            unset($this->Distruption);
        } else {
            $this->Distruption = $distruption;
        }

        return $this;
    }

    /**
     * Get Leg value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Leg|null
     */
    public function getLeg(): ?\Ntvspa\Big\Travel\Structs\Leg
    {
        return $this->Leg ?? null;
    }

    /**
     * Set Leg value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Leg $leg
     *
     * @return TrainSchedule
     */
    public function setLeg(?\Ntvspa\Big\Travel\Structs\Leg $leg = null): self
    {
        if (is_null($leg) || (is_array($leg) && empty($leg))) {
            unset($this->Leg);
        } else {
            $this->Leg = $leg;
        }

        return $this;
    }

    /**
     * Get Station value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Travel\Arrays\ArrayOfStation|null
     */
    public function getStation(): ?ArrayOfStation
    {
        return $this->Station ?? null;
    }

    /**
     * Set Station value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfStation $station
     *
     * @return TrainSchedule
     */
    public function setStation(?ArrayOfStation $station = null): self
    {
        if (is_null($station) || (is_array($station) && empty($station))) {
            unset($this->Station);
        } else {
            $this->Station = $station;
        }

        return $this;
    }

    /**
     * Get InfoRoute value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getInfoRoute(): ?string
    {
        return $this->InfoRoute ?? null;
    }

    /**
     * Set InfoRoute value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $infoRoute
     *
     * @return TrainSchedule
     */
    public function setInfoRoute(?string $infoRoute = null): self
    {
        // validation for constraint: string
        if (!is_null($infoRoute) && !is_string($infoRoute)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infoRoute, true), gettype($infoRoute)), __LINE__);
        }
        if (is_null($infoRoute) || (is_array($infoRoute) && empty($infoRoute))) {
            unset($this->InfoRoute);
        } else {
            $this->InfoRoute = $infoRoute;
        }

        return $this;
    }

    /**
     * Get InfoExtra value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getInfoExtra(): ?string
    {
        return $this->InfoExtra ?? null;
    }

    /**
     * Set InfoExtra value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $infoExtra
     *
     * @return TrainSchedule
     */
    public function setInfoExtra(?string $infoExtra = null): self
    {
        // validation for constraint: string
        if (!is_null($infoExtra) && !is_string($infoExtra)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infoExtra, true), gettype($infoExtra)), __LINE__);
        }
        if (is_null($infoExtra) || (is_array($infoExtra) && empty($infoExtra))) {
            unset($this->InfoExtra);
        } else {
            $this->InfoExtra = $infoExtra;
        }

        return $this;
    }
}

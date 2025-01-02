<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Travel\Arrays\ArrayOfJourney;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JourneyDateMarket Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:JourneyDateMarket
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class JourneyDateMarket extends AbstractStructBase
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
     * The Journeys
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Travel\Arrays\ArrayOfJourney|null
     */
    protected ?ArrayOfJourney $Journeys = null;

    /**
     * Constructor method for JourneyDateMarket
     *
     * @param string                                   $departureDate
     * @param string                                   $arrivalStation
     * @param string                                   $departureStation
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfJourney $journeys
     *
     * @uses JourneyDateMarket::setDepartureDate()
     * @uses JourneyDateMarket::setArrivalStation()
     * @uses JourneyDateMarket::setDepartureStation()
     * @uses JourneyDateMarket::setJourneys()
     */
    public function __construct(?string $departureDate = null, ?string $arrivalStation = null, ?string $departureStation = null, ?ArrayOfJourney $journeys = null)
    {
        $this
            ->setDepartureDate($departureDate)
            ->setArrivalStation($arrivalStation)
            ->setDepartureStation($departureStation)
            ->setJourneys($journeys);
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
     * @return JourneyDateMarket
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
     * @return JourneyDateMarket
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
     * @return JourneyDateMarket
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
     * Get Journeys value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Travel\Arrays\ArrayOfJourney|null
     */
    public function getJourneys(): ?ArrayOfJourney
    {
        return $this->Journeys ?? null;
    }

    /**
     * Set Journeys value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfJourney $journeys
     *
     * @return JourneyDateMarket
     */
    public function setJourneys(?ArrayOfJourney $journeys = null): self
    {
        if (is_null($journeys) || (is_array($journeys) && empty($journeys))) {
            unset($this->Journeys);
        } else {
            $this->Journeys = $journeys;
        }

        return $this;
    }
}

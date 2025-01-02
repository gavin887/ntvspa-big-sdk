<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfJourney;
use Booking\Arrays\ArrayOfJourneyLowFare;
use InvalidArgumentException;
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
     * The BestFareForDateMarketPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $BestFareForDateMarketPrice = null;
    /**
     * The AvailableCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $AvailableCount = null;
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
     * The Journeys
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfJourney|null
     */
    protected ?ArrayOfJourney $Journeys = null;
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
     * The JourneysLowFareList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfJourneyLowFare|null
     */
    protected ?ArrayOfJourneyLowFare $JourneysLowFareList = null;

    /**
     * Constructor method for JourneyDateMarket
     *
     * @param string                                           $departureDate
     * @param float                                            $bestFareForDateMarketPrice
     * @param int                                              $availableCount
     * @param string                                           $departureStation
     * @param string                                           $arrivalStation
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfJourney        $journeys
     * @param string                                           $currencyCode
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfJourneyLowFare $journeysLowFareList
     *
     * @uses JourneyDateMarket::setDepartureDate()
     * @uses JourneyDateMarket::setBestFareForDateMarketPrice()
     * @uses JourneyDateMarket::setAvailableCount()
     * @uses JourneyDateMarket::setDepartureStation()
     * @uses JourneyDateMarket::setArrivalStation()
     * @uses JourneyDateMarket::setJourneys()
     * @uses JourneyDateMarket::setCurrencyCode()
     * @uses JourneyDateMarket::setJourneysLowFareList()
     */
    public function __construct(?string $departureDate = null, ?float $bestFareForDateMarketPrice = null, ?int $availableCount = null, ?string $departureStation = null, ?string $arrivalStation = null, ?ArrayOfJourney $journeys = null, ?string $currencyCode = null, ?ArrayOfJourneyLowFare $journeysLowFareList = null)
    {
        $this
            ->setDepartureDate($departureDate)
            ->setBestFareForDateMarketPrice($bestFareForDateMarketPrice)
            ->setAvailableCount($availableCount)
            ->setDepartureStation($departureStation)
            ->setArrivalStation($arrivalStation)
            ->setJourneys($journeys)
            ->setCurrencyCode($currencyCode)
            ->setJourneysLowFareList($journeysLowFareList);
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
     * Get BestFareForDateMarketPrice value
     *
     * @return float|null
     */
    public function getBestFareForDateMarketPrice(): ?float
    {
        return $this->BestFareForDateMarketPrice;
    }

    /**
     * Set BestFareForDateMarketPrice value
     *
     * @param float $bestFareForDateMarketPrice
     *
     * @return JourneyDateMarket
     */
    public function setBestFareForDateMarketPrice(?float $bestFareForDateMarketPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($bestFareForDateMarketPrice) && !(is_float($bestFareForDateMarketPrice) || is_numeric($bestFareForDateMarketPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bestFareForDateMarketPrice, true), gettype($bestFareForDateMarketPrice)), __LINE__);
        }
        $this->BestFareForDateMarketPrice = $bestFareForDateMarketPrice;

        return $this;
    }

    /**
     * Get AvailableCount value
     *
     * @return int|null
     */
    public function getAvailableCount(): ?int
    {
        return $this->AvailableCount;
    }

    /**
     * Set AvailableCount value
     *
     * @param int $availableCount
     *
     * @return JourneyDateMarket
     */
    public function setAvailableCount(?int $availableCount = null): self
    {
        // validation for constraint: int
        if (!is_null($availableCount) && !(is_int($availableCount) || ctype_digit($availableCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($availableCount, true), gettype($availableCount)), __LINE__);
        }
        $this->AvailableCount = $availableCount;

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
     * Get Journeys value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfJourney|null
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
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfJourney $journeys
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
     * @return JourneyDateMarket
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

    /**
     * Get JourneysLowFareList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfJourneyLowFare|null
     */
    public function getJourneysLowFareList(): ?ArrayOfJourneyLowFare
    {
        return $this->JourneysLowFareList ?? null;
    }

    /**
     * Set JourneysLowFareList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfJourneyLowFare $journeysLowFareList
     *
     * @return JourneyDateMarket
     */
    public function setJourneysLowFareList(?ArrayOfJourneyLowFare $journeysLowFareList = null): self
    {
        if (is_null($journeysLowFareList) || (is_array($journeysLowFareList) && empty($journeysLowFareList))) {
            unset($this->JourneysLowFareList);
        } else {
            $this->JourneysLowFareList = $journeysLowFareList;
        }

        return $this;
    }
}

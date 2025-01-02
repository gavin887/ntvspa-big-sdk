<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Parameter Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Parameter
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Parameter extends AbstractStructBase
{
    /**
     * The CardType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CardType = null;
    /**
     * The CardSubType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CardSubType = null;
    /**
     * The JourneyType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $JourneyType = null;
    /**
     * The PaxType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PaxType = null;
    /**
     * The Stations
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Stations = null;
    /**
     * The Farebasis
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Farebasis = null;
    /**
     * The Faretype
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Faretype = null;
    /**
     * The ProductClass
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ProductClass = null;
    /**
     * The DaysOfWeekValidity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DaysOfWeekValidity = null;
    /**
     * The BlackOutPeriod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $BlackOutPeriod = null;
    /**
     * The CalendarBooking
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CalendarBooking = null;
    /**
     * The DaysOfValidity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DaysOfValidity = null;
    /**
     * The TotalNumTrips
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $TotalNumTrips = null;
    /**
     * The DailyNumTrips
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DailyNumTrips = null;
    /**
     * The TravelPeriod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $TravelPeriod = null;
    /**
     * The TravelInterval
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $TravelInterval = null;
    /**
     * The AdvancedBooking
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $AdvancedBooking = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Description = null;

    /**
     * Constructor method for Parameter
     *
     * @param string $cardType
     * @param string $cardSubType
     * @param string $journeyType
     * @param string $paxType
     * @param string $stations
     * @param string $farebasis
     * @param string $faretype
     * @param string $productClass
     * @param string $daysOfWeekValidity
     * @param string $blackOutPeriod
     * @param string $calendarBooking
     * @param string $daysOfValidity
     * @param string $totalNumTrips
     * @param string $dailyNumTrips
     * @param string $travelPeriod
     * @param string $travelInterval
     * @param string $advancedBooking
     * @param string $description
     *
     * @uses Parameter::setCardType()
     * @uses Parameter::setCardSubType()
     * @uses Parameter::setJourneyType()
     * @uses Parameter::setPaxType()
     * @uses Parameter::setStations()
     * @uses Parameter::setFarebasis()
     * @uses Parameter::setFaretype()
     * @uses Parameter::setProductClass()
     * @uses Parameter::setDaysOfWeekValidity()
     * @uses Parameter::setBlackOutPeriod()
     * @uses Parameter::setCalendarBooking()
     * @uses Parameter::setDaysOfValidity()
     * @uses Parameter::setTotalNumTrips()
     * @uses Parameter::setDailyNumTrips()
     * @uses Parameter::setTravelPeriod()
     * @uses Parameter::setTravelInterval()
     * @uses Parameter::setAdvancedBooking()
     * @uses Parameter::setDescription()
     */
    public function __construct(?string $cardType = null, ?string $cardSubType = null, ?string $journeyType = null, ?string $paxType = null, ?string $stations = null, ?string $farebasis = null, ?string $faretype = null, ?string $productClass = null, ?string $daysOfWeekValidity = null, ?string $blackOutPeriod = null, ?string $calendarBooking = null, ?string $daysOfValidity = null, ?string $totalNumTrips = null, ?string $dailyNumTrips = null, ?string $travelPeriod = null, ?string $travelInterval = null, ?string $advancedBooking = null, ?string $description = null)
    {
        $this
            ->setCardType($cardType)
            ->setCardSubType($cardSubType)
            ->setJourneyType($journeyType)
            ->setPaxType($paxType)
            ->setStations($stations)
            ->setFarebasis($farebasis)
            ->setFaretype($faretype)
            ->setProductClass($productClass)
            ->setDaysOfWeekValidity($daysOfWeekValidity)
            ->setBlackOutPeriod($blackOutPeriod)
            ->setCalendarBooking($calendarBooking)
            ->setDaysOfValidity($daysOfValidity)
            ->setTotalNumTrips($totalNumTrips)
            ->setDailyNumTrips($dailyNumTrips)
            ->setTravelPeriod($travelPeriod)
            ->setTravelInterval($travelInterval)
            ->setAdvancedBooking($advancedBooking)
            ->setDescription($description);
    }

    /**
     * Get CardType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCardType(): ?string
    {
        return $this->CardType ?? null;
    }

    /**
     * Set CardType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $cardType
     *
     * @return Parameter
     */
    public function setCardType(?string $cardType = null): self
    {
        // validation for constraint: string
        if (!is_null($cardType) && !is_string($cardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardType, true), gettype($cardType)), __LINE__);
        }
        if (is_null($cardType) || (is_array($cardType) && empty($cardType))) {
            unset($this->CardType);
        } else {
            $this->CardType = $cardType;
        }

        return $this;
    }

    /**
     * Get CardSubType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCardSubType(): ?string
    {
        return $this->CardSubType ?? null;
    }

    /**
     * Set CardSubType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $cardSubType
     *
     * @return Parameter
     */
    public function setCardSubType(?string $cardSubType = null): self
    {
        // validation for constraint: string
        if (!is_null($cardSubType) && !is_string($cardSubType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardSubType, true), gettype($cardSubType)), __LINE__);
        }
        if (is_null($cardSubType) || (is_array($cardSubType) && empty($cardSubType))) {
            unset($this->CardSubType);
        } else {
            $this->CardSubType = $cardSubType;
        }

        return $this;
    }

    /**
     * Get JourneyType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getJourneyType(): ?string
    {
        return $this->JourneyType ?? null;
    }

    /**
     * Set JourneyType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $journeyType
     *
     * @return Parameter
     */
    public function setJourneyType(?string $journeyType = null): self
    {
        // validation for constraint: string
        if (!is_null($journeyType) && !is_string($journeyType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($journeyType, true), gettype($journeyType)), __LINE__);
        }
        if (is_null($journeyType) || (is_array($journeyType) && empty($journeyType))) {
            unset($this->JourneyType);
        } else {
            $this->JourneyType = $journeyType;
        }

        return $this;
    }

    /**
     * Get PaxType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPaxType(): ?string
    {
        return $this->PaxType ?? null;
    }

    /**
     * Set PaxType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $paxType
     *
     * @return Parameter
     */
    public function setPaxType(?string $paxType = null): self
    {
        // validation for constraint: string
        if (!is_null($paxType) && !is_string($paxType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paxType, true), gettype($paxType)), __LINE__);
        }
        if (is_null($paxType) || (is_array($paxType) && empty($paxType))) {
            unset($this->PaxType);
        } else {
            $this->PaxType = $paxType;
        }

        return $this;
    }

    /**
     * Get Stations value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getStations(): ?string
    {
        return $this->Stations ?? null;
    }

    /**
     * Set Stations value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $stations
     *
     * @return Parameter
     */
    public function setStations(?string $stations = null): self
    {
        // validation for constraint: string
        if (!is_null($stations) && !is_string($stations)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stations, true), gettype($stations)), __LINE__);
        }
        if (is_null($stations) || (is_array($stations) && empty($stations))) {
            unset($this->Stations);
        } else {
            $this->Stations = $stations;
        }

        return $this;
    }

    /**
     * Get Farebasis value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFarebasis(): ?string
    {
        return $this->Farebasis ?? null;
    }

    /**
     * Set Farebasis value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $farebasis
     *
     * @return Parameter
     */
    public function setFarebasis(?string $farebasis = null): self
    {
        // validation for constraint: string
        if (!is_null($farebasis) && !is_string($farebasis)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($farebasis, true), gettype($farebasis)), __LINE__);
        }
        if (is_null($farebasis) || (is_array($farebasis) && empty($farebasis))) {
            unset($this->Farebasis);
        } else {
            $this->Farebasis = $farebasis;
        }

        return $this;
    }

    /**
     * Get Faretype value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFaretype(): ?string
    {
        return $this->Faretype ?? null;
    }

    /**
     * Set Faretype value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $faretype
     *
     * @return Parameter
     */
    public function setFaretype(?string $faretype = null): self
    {
        // validation for constraint: string
        if (!is_null($faretype) && !is_string($faretype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($faretype, true), gettype($faretype)), __LINE__);
        }
        if (is_null($faretype) || (is_array($faretype) && empty($faretype))) {
            unset($this->Faretype);
        } else {
            $this->Faretype = $faretype;
        }

        return $this;
    }

    /**
     * Get ProductClass value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getProductClass(): ?string
    {
        return $this->ProductClass ?? null;
    }

    /**
     * Set ProductClass value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $productClass
     *
     * @return Parameter
     */
    public function setProductClass(?string $productClass = null): self
    {
        // validation for constraint: string
        if (!is_null($productClass) && !is_string($productClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productClass, true), gettype($productClass)), __LINE__);
        }
        if (is_null($productClass) || (is_array($productClass) && empty($productClass))) {
            unset($this->ProductClass);
        } else {
            $this->ProductClass = $productClass;
        }

        return $this;
    }

    /**
     * Get DaysOfWeekValidity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDaysOfWeekValidity(): ?string
    {
        return $this->DaysOfWeekValidity ?? null;
    }

    /**
     * Set DaysOfWeekValidity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $daysOfWeekValidity
     *
     * @return Parameter
     */
    public function setDaysOfWeekValidity(?string $daysOfWeekValidity = null): self
    {
        // validation for constraint: string
        if (!is_null($daysOfWeekValidity) && !is_string($daysOfWeekValidity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($daysOfWeekValidity, true), gettype($daysOfWeekValidity)), __LINE__);
        }
        if (is_null($daysOfWeekValidity) || (is_array($daysOfWeekValidity) && empty($daysOfWeekValidity))) {
            unset($this->DaysOfWeekValidity);
        } else {
            $this->DaysOfWeekValidity = $daysOfWeekValidity;
        }

        return $this;
    }

    /**
     * Get BlackOutPeriod value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getBlackOutPeriod(): ?string
    {
        return $this->BlackOutPeriod ?? null;
    }

    /**
     * Set BlackOutPeriod value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $blackOutPeriod
     *
     * @return Parameter
     */
    public function setBlackOutPeriod(?string $blackOutPeriod = null): self
    {
        // validation for constraint: string
        if (!is_null($blackOutPeriod) && !is_string($blackOutPeriod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($blackOutPeriod, true), gettype($blackOutPeriod)), __LINE__);
        }
        if (is_null($blackOutPeriod) || (is_array($blackOutPeriod) && empty($blackOutPeriod))) {
            unset($this->BlackOutPeriod);
        } else {
            $this->BlackOutPeriod = $blackOutPeriod;
        }

        return $this;
    }

    /**
     * Get CalendarBooking value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCalendarBooking(): ?string
    {
        return $this->CalendarBooking ?? null;
    }

    /**
     * Set CalendarBooking value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $calendarBooking
     *
     * @return Parameter
     */
    public function setCalendarBooking(?string $calendarBooking = null): self
    {
        // validation for constraint: string
        if (!is_null($calendarBooking) && !is_string($calendarBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calendarBooking, true), gettype($calendarBooking)), __LINE__);
        }
        if (is_null($calendarBooking) || (is_array($calendarBooking) && empty($calendarBooking))) {
            unset($this->CalendarBooking);
        } else {
            $this->CalendarBooking = $calendarBooking;
        }

        return $this;
    }

    /**
     * Get DaysOfValidity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDaysOfValidity(): ?string
    {
        return $this->DaysOfValidity ?? null;
    }

    /**
     * Set DaysOfValidity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $daysOfValidity
     *
     * @return Parameter
     */
    public function setDaysOfValidity(?string $daysOfValidity = null): self
    {
        // validation for constraint: string
        if (!is_null($daysOfValidity) && !is_string($daysOfValidity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($daysOfValidity, true), gettype($daysOfValidity)), __LINE__);
        }
        if (is_null($daysOfValidity) || (is_array($daysOfValidity) && empty($daysOfValidity))) {
            unset($this->DaysOfValidity);
        } else {
            $this->DaysOfValidity = $daysOfValidity;
        }

        return $this;
    }

    /**
     * Get TotalNumTrips value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTotalNumTrips(): ?string
    {
        return $this->TotalNumTrips ?? null;
    }

    /**
     * Set TotalNumTrips value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $totalNumTrips
     *
     * @return Parameter
     */
    public function setTotalNumTrips(?string $totalNumTrips = null): self
    {
        // validation for constraint: string
        if (!is_null($totalNumTrips) && !is_string($totalNumTrips)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalNumTrips, true), gettype($totalNumTrips)), __LINE__);
        }
        if (is_null($totalNumTrips) || (is_array($totalNumTrips) && empty($totalNumTrips))) {
            unset($this->TotalNumTrips);
        } else {
            $this->TotalNumTrips = $totalNumTrips;
        }

        return $this;
    }

    /**
     * Get DailyNumTrips value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDailyNumTrips(): ?string
    {
        return $this->DailyNumTrips ?? null;
    }

    /**
     * Set DailyNumTrips value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $dailyNumTrips
     *
     * @return Parameter
     */
    public function setDailyNumTrips(?string $dailyNumTrips = null): self
    {
        // validation for constraint: string
        if (!is_null($dailyNumTrips) && !is_string($dailyNumTrips)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dailyNumTrips, true), gettype($dailyNumTrips)), __LINE__);
        }
        if (is_null($dailyNumTrips) || (is_array($dailyNumTrips) && empty($dailyNumTrips))) {
            unset($this->DailyNumTrips);
        } else {
            $this->DailyNumTrips = $dailyNumTrips;
        }

        return $this;
    }

    /**
     * Get TravelPeriod value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTravelPeriod(): ?string
    {
        return $this->TravelPeriod ?? null;
    }

    /**
     * Set TravelPeriod value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $travelPeriod
     *
     * @return Parameter
     */
    public function setTravelPeriod(?string $travelPeriod = null): self
    {
        // validation for constraint: string
        if (!is_null($travelPeriod) && !is_string($travelPeriod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelPeriod, true), gettype($travelPeriod)), __LINE__);
        }
        if (is_null($travelPeriod) || (is_array($travelPeriod) && empty($travelPeriod))) {
            unset($this->TravelPeriod);
        } else {
            $this->TravelPeriod = $travelPeriod;
        }

        return $this;
    }

    /**
     * Get TravelInterval value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTravelInterval(): ?string
    {
        return $this->TravelInterval ?? null;
    }

    /**
     * Set TravelInterval value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $travelInterval
     *
     * @return Parameter
     */
    public function setTravelInterval(?string $travelInterval = null): self
    {
        // validation for constraint: string
        if (!is_null($travelInterval) && !is_string($travelInterval)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelInterval, true), gettype($travelInterval)), __LINE__);
        }
        if (is_null($travelInterval) || (is_array($travelInterval) && empty($travelInterval))) {
            unset($this->TravelInterval);
        } else {
            $this->TravelInterval = $travelInterval;
        }

        return $this;
    }

    /**
     * Get AdvancedBooking value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getAdvancedBooking(): ?string
    {
        return $this->AdvancedBooking ?? null;
    }

    /**
     * Set AdvancedBooking value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $advancedBooking
     *
     * @return Parameter
     */
    public function setAdvancedBooking(?string $advancedBooking = null): self
    {
        // validation for constraint: string
        if (!is_null($advancedBooking) && !is_string($advancedBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($advancedBooking, true), gettype($advancedBooking)), __LINE__);
        }
        if (is_null($advancedBooking) || (is_array($advancedBooking) && empty($advancedBooking))) {
            unset($this->AdvancedBooking);
        } else {
            $this->AdvancedBooking = $advancedBooking;
        }

        return $this;
    }

    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description ?? null;
    }

    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $description
     *
     * @return Parameter
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }

        return $this;
    }
}

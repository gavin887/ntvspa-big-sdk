<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use Corporate\Arrays\ArrayOfAllowedFare;
use Corporate\Arrays\ArrayOfBlackDayOfWeek;
use Corporate\Arrays\ArrayOfBlackMarket;
use Corporate\Arrays\ArrayOfBlackPeriodJourney;
use Corporate\Arrays\ArrayOfBlackPeriodPurchase;
use Corporate\Arrays\ArrayOfBlackTrain;
use Corporate\Arrays\ArrayOfIncentive;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FilterList Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FilterList
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class FilterList extends AbstractStructBase
{
    /**
     * The AllowedFares
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Corporate\Arrays\ArrayOfAllowedFare|null
     */
    protected ?ArrayOfAllowedFare $AllowedFares = null;
    /**
     * The BlackPeriodsPurchase
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Corporate\Arrays\ArrayOfBlackPeriodPurchase|null
     */
    protected ?ArrayOfBlackPeriodPurchase $BlackPeriodsPurchase = null;
    /**
     * The BlackPeriodsJourney
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Corporate\Arrays\ArrayOfBlackPeriodJourney|null
     */
    protected ?ArrayOfBlackPeriodJourney $BlackPeriodsJourney = null;
    /**
     * The BlackMarkets
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Corporate\Arrays\ArrayOfBlackMarket|null
     */
    protected ?ArrayOfBlackMarket $BlackMarkets = null;
    /**
     * The BlackDaysOfWeek
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Corporate\Arrays\ArrayOfBlackDayOfWeek|null
     */
    protected ?ArrayOfBlackDayOfWeek $BlackDaysOfWeek = null;
    /**
     * The BlackTrains
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Corporate\Arrays\ArrayOfBlackTrain|null
     */
    protected ?ArrayOfBlackTrain $BlackTrains = null;
    /**
     * The Incentives
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Corporate\Arrays\ArrayOfIncentive|null
     */
    protected ?ArrayOfIncentive $Incentives = null;

    /**
     * Constructor method for FilterList
     *
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfAllowedFare         $allowedFares
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfBlackPeriodPurchase $blackPeriodsPurchase
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfBlackPeriodJourney  $blackPeriodsJourney
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfBlackMarket         $blackMarkets
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfBlackDayOfWeek      $blackDaysOfWeek
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfBlackTrain          $blackTrains
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfIncentive           $incentives
     *
     * @uses FilterList::setAllowedFares()
     * @uses FilterList::setBlackPeriodsPurchase()
     * @uses FilterList::setBlackPeriodsJourney()
     * @uses FilterList::setBlackMarkets()
     * @uses FilterList::setBlackDaysOfWeek()
     * @uses FilterList::setBlackTrains()
     * @uses FilterList::setIncentives()
     */
    public function __construct(?ArrayOfAllowedFare $allowedFares = null, ?ArrayOfBlackPeriodPurchase $blackPeriodsPurchase = null, ?ArrayOfBlackPeriodJourney $blackPeriodsJourney = null, ?ArrayOfBlackMarket $blackMarkets = null, ?ArrayOfBlackDayOfWeek $blackDaysOfWeek = null, ?ArrayOfBlackTrain $blackTrains = null, ?ArrayOfIncentive $incentives = null)
    {
        $this
            ->setAllowedFares($allowedFares)
            ->setBlackPeriodsPurchase($blackPeriodsPurchase)
            ->setBlackPeriodsJourney($blackPeriodsJourney)
            ->setBlackMarkets($blackMarkets)
            ->setBlackDaysOfWeek($blackDaysOfWeek)
            ->setBlackTrains($blackTrains)
            ->setIncentives($incentives);
    }

    /**
     * Get AllowedFares value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Corporate\Arrays\ArrayOfAllowedFare|null
     */
    public function getAllowedFares(): ?ArrayOfAllowedFare
    {
        return $this->AllowedFares ?? null;
    }

    /**
     * Set AllowedFares value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfAllowedFare $allowedFares
     *
     * @return FilterList
     */
    public function setAllowedFares(?ArrayOfAllowedFare $allowedFares = null): self
    {
        if (is_null($allowedFares) || (is_array($allowedFares) && empty($allowedFares))) {
            unset($this->AllowedFares);
        } else {
            $this->AllowedFares = $allowedFares;
        }

        return $this;
    }

    /**
     * Get BlackPeriodsPurchase value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Corporate\Arrays\ArrayOfBlackPeriodPurchase|null
     */
    public function getBlackPeriodsPurchase(): ?ArrayOfBlackPeriodPurchase
    {
        return $this->BlackPeriodsPurchase ?? null;
    }

    /**
     * Set BlackPeriodsPurchase value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfBlackPeriodPurchase $blackPeriodsPurchase
     *
     * @return FilterList
     */
    public function setBlackPeriodsPurchase(?ArrayOfBlackPeriodPurchase $blackPeriodsPurchase = null): self
    {
        if (is_null($blackPeriodsPurchase) || (is_array($blackPeriodsPurchase) && empty($blackPeriodsPurchase))) {
            unset($this->BlackPeriodsPurchase);
        } else {
            $this->BlackPeriodsPurchase = $blackPeriodsPurchase;
        }

        return $this;
    }

    /**
     * Get BlackPeriodsJourney value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Corporate\Arrays\ArrayOfBlackPeriodJourney|null
     */
    public function getBlackPeriodsJourney(): ?ArrayOfBlackPeriodJourney
    {
        return $this->BlackPeriodsJourney ?? null;
    }

    /**
     * Set BlackPeriodsJourney value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfBlackPeriodJourney $blackPeriodsJourney
     *
     * @return FilterList
     */
    public function setBlackPeriodsJourney(?ArrayOfBlackPeriodJourney $blackPeriodsJourney = null): self
    {
        if (is_null($blackPeriodsJourney) || (is_array($blackPeriodsJourney) && empty($blackPeriodsJourney))) {
            unset($this->BlackPeriodsJourney);
        } else {
            $this->BlackPeriodsJourney = $blackPeriodsJourney;
        }

        return $this;
    }

    /**
     * Get BlackMarkets value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Corporate\Arrays\ArrayOfBlackMarket|null
     */
    public function getBlackMarkets(): ?ArrayOfBlackMarket
    {
        return $this->BlackMarkets ?? null;
    }

    /**
     * Set BlackMarkets value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfBlackMarket $blackMarkets
     *
     * @return FilterList
     */
    public function setBlackMarkets(?ArrayOfBlackMarket $blackMarkets = null): self
    {
        if (is_null($blackMarkets) || (is_array($blackMarkets) && empty($blackMarkets))) {
            unset($this->BlackMarkets);
        } else {
            $this->BlackMarkets = $blackMarkets;
        }

        return $this;
    }

    /**
     * Get BlackDaysOfWeek value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Corporate\Arrays\ArrayOfBlackDayOfWeek|null
     */
    public function getBlackDaysOfWeek(): ?ArrayOfBlackDayOfWeek
    {
        return $this->BlackDaysOfWeek ?? null;
    }

    /**
     * Set BlackDaysOfWeek value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfBlackDayOfWeek $blackDaysOfWeek
     *
     * @return FilterList
     */
    public function setBlackDaysOfWeek(?ArrayOfBlackDayOfWeek $blackDaysOfWeek = null): self
    {
        if (is_null($blackDaysOfWeek) || (is_array($blackDaysOfWeek) && empty($blackDaysOfWeek))) {
            unset($this->BlackDaysOfWeek);
        } else {
            $this->BlackDaysOfWeek = $blackDaysOfWeek;
        }

        return $this;
    }

    /**
     * Get BlackTrains value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Corporate\Arrays\ArrayOfBlackTrain|null
     */
    public function getBlackTrains(): ?ArrayOfBlackTrain
    {
        return $this->BlackTrains ?? null;
    }

    /**
     * Set BlackTrains value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfBlackTrain $blackTrains
     *
     * @return FilterList
     */
    public function setBlackTrains(?ArrayOfBlackTrain $blackTrains = null): self
    {
        if (is_null($blackTrains) || (is_array($blackTrains) && empty($blackTrains))) {
            unset($this->BlackTrains);
        } else {
            $this->BlackTrains = $blackTrains;
        }

        return $this;
    }

    /**
     * Get Incentives value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Corporate\Arrays\ArrayOfIncentive|null
     */
    public function getIncentives(): ?ArrayOfIncentive
    {
        return $this->Incentives ?? null;
    }

    /**
     * Set Incentives value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfIncentive $incentives
     *
     * @return FilterList
     */
    public function setIncentives(?ArrayOfIncentive $incentives = null): self
    {
        if (is_null($incentives) || (is_array($incentives) && empty($incentives))) {
            unset($this->Incentives);
        } else {
            $this->Incentives = $incentives;
        }

        return $this;
    }
}

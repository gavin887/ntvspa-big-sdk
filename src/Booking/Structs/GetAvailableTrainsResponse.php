<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfJourneyDateMarket;

/**
 * This class stands for GetAvailableTrainsResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetAvailableTrainsResponse | q2:GetAvailableTrainsResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetAvailableTrainsResponse extends ResponseBase
{
    /**
     * The JourneyDateMarkets
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfJourneyDateMarket|null
     */
    protected ?ArrayOfJourneyDateMarket $JourneyDateMarkets = null;
    /**
     * The FareBasisRestrictionRules
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var FareBasisRestrictionRules|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\FareBasisRestrictionRules $FareBasisRestrictionRules = null;
    /**
     * The FareLockInfoData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var FareLockInfoData|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\FareLockInfoData $FareLockInfoData = null;

    /**
     * Constructor method for GetAvailableTrainsResponse
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfJourneyDateMarket $journeyDateMarkets
     * @param FareBasisRestrictionRules                           $fareBasisRestrictionRules
     * @param FareLockInfoData                                    $fareLockInfoData
     *
     * @uses GetAvailableTrainsResponse::setJourneyDateMarkets()
     * @uses GetAvailableTrainsResponse::setFareBasisRestrictionRules()
     * @uses GetAvailableTrainsResponse::setFareLockInfoData()
     */
    public function __construct(?ArrayOfJourneyDateMarket $journeyDateMarkets = null, ?\Ntvspa\Big\Booking\Structs\FareBasisRestrictionRules $fareBasisRestrictionRules = null, ?\Ntvspa\Big\Booking\Structs\FareLockInfoData $fareLockInfoData = null)
    {
        $this
            ->setJourneyDateMarkets($journeyDateMarkets)
            ->setFareBasisRestrictionRules($fareBasisRestrictionRules)
            ->setFareLockInfoData($fareLockInfoData);
    }

    /**
     * Get JourneyDateMarkets value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfJourneyDateMarket|null
     */
    public function getJourneyDateMarkets(): ?ArrayOfJourneyDateMarket
    {
        return $this->JourneyDateMarkets ?? null;
    }

    /**
     * Set JourneyDateMarkets value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfJourneyDateMarket $journeyDateMarkets
     *
     * @return GetAvailableTrainsResponse
     */
    public function setJourneyDateMarkets(?ArrayOfJourneyDateMarket $journeyDateMarkets = null): self
    {
        if (is_null($journeyDateMarkets) || (is_array($journeyDateMarkets) && empty($journeyDateMarkets))) {
            unset($this->JourneyDateMarkets);
        } else {
            $this->JourneyDateMarkets = $journeyDateMarkets;
        }

        return $this;
    }

    /**
     * Get FareBasisRestrictionRules value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return FareBasisRestrictionRules|null
     */
    public function getFareBasisRestrictionRules(): ?\Ntvspa\Big\Booking\Structs\FareBasisRestrictionRules
    {
        return $this->FareBasisRestrictionRules ?? null;
    }

    /**
     * Set FareBasisRestrictionRules value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param FareBasisRestrictionRules $fareBasisRestrictionRules
     *
     * @return GetAvailableTrainsResponse
     */
    public function setFareBasisRestrictionRules(?\Ntvspa\Big\Booking\Structs\FareBasisRestrictionRules $fareBasisRestrictionRules = null): self
    {
        if (is_null($fareBasisRestrictionRules) || (is_array($fareBasisRestrictionRules) && empty($fareBasisRestrictionRules))) {
            unset($this->FareBasisRestrictionRules);
        } else {
            $this->FareBasisRestrictionRules = $fareBasisRestrictionRules;
        }

        return $this;
    }

    /**
     * Get FareLockInfoData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return FareLockInfoData|null
     */
    public function getFareLockInfoData(): ?\Ntvspa\Big\Booking\Structs\FareLockInfoData
    {
        return $this->FareLockInfoData ?? null;
    }

    /**
     * Set FareLockInfoData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param FareLockInfoData $fareLockInfoData
     *
     * @return GetAvailableTrainsResponse
     */
    public function setFareLockInfoData(?\Ntvspa\Big\Booking\Structs\FareLockInfoData $fareLockInfoData = null): self
    {
        if (is_null($fareLockInfoData) || (is_array($fareLockInfoData) && empty($fareLockInfoData))) {
            unset($this->FareLockInfoData);
        } else {
            $this->FareLockInfoData = $fareLockInfoData;
        }

        return $this;
    }
}

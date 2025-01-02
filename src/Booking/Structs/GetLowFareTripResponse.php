<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfJourneyMarket;

/**
 * This class stands for GetLowFareTripResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q44:GetLowFareTripResponse | tns:GetLowFareTripResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetLowFareTripResponse extends ResponseBase
{
    /**
     * The JourneyMarkets
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfJourneyMarket|null
     */
    protected ?ArrayOfJourneyMarket $JourneyMarkets = null;

    /**
     * Constructor method for GetLowFareTripResponse
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfJourneyMarket $journeyMarkets
     *
     * @uses GetLowFareTripResponse::setJourneyMarkets()
     */
    public function __construct(?ArrayOfJourneyMarket $journeyMarkets = null)
    {
        $this
            ->setJourneyMarkets($journeyMarkets);
    }

    /**
     * Get JourneyMarkets value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfJourneyMarket|null
     */
    public function getJourneyMarkets(): ?ArrayOfJourneyMarket
    {
        return $this->JourneyMarkets ?? null;
    }

    /**
     * Set JourneyMarkets value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfJourneyMarket $journeyMarkets
     *
     * @return GetLowFareTripResponse
     */
    public function setJourneyMarkets(?ArrayOfJourneyMarket $journeyMarkets = null): self
    {
        if (is_null($journeyMarkets) || (is_array($journeyMarkets) && empty($journeyMarkets))) {
            unset($this->JourneyMarkets);
        } else {
            $this->JourneyMarkets = $journeyMarkets;
        }

        return $this;
    }
}

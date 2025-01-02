<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;

/**
 * This class stands for GetBestPriceForJourneyResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q24:GetBestPriceForJourneyResponse | tns:GetBestPriceForJourneyResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetBestPriceForJourneyResponse extends ResponseBase
{
    /**
     * The JourneyDateMarkets
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var JourneyDateMarket|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\JourneyDateMarket $JourneyDateMarkets = null;

    /**
     * Constructor method for GetBestPriceForJourneyResponse
     *
     * @param JourneyDateMarket $journeyDateMarkets
     *
     * @uses GetBestPriceForJourneyResponse::setJourneyDateMarkets()
     */
    public function __construct(?\Ntvspa\Big\Booking\Structs\JourneyDateMarket $journeyDateMarkets = null)
    {
        $this
            ->setJourneyDateMarkets($journeyDateMarkets);
    }

    /**
     * Get JourneyDateMarkets value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return JourneyDateMarket|null
     */
    public function getJourneyDateMarkets(): ?\Ntvspa\Big\Booking\Structs\JourneyDateMarket
    {
        return $this->JourneyDateMarkets ?? null;
    }

    /**
     * Set JourneyDateMarkets value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param JourneyDateMarket $journeyDateMarkets
     *
     * @return GetBestPriceForJourneyResponse
     */
    public function setJourneyDateMarkets(?\Ntvspa\Big\Booking\Structs\JourneyDateMarket $journeyDateMarkets = null): self
    {
        if (is_null($journeyDateMarkets) || (is_array($journeyDateMarkets) && empty($journeyDateMarkets))) {
            unset($this->JourneyDateMarkets);
        } else {
            $this->JourneyDateMarkets = $journeyDateMarkets;
        }

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfJourneyDateMarket;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JourneyMarket Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:JourneyMarket
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class JourneyMarket extends AbstractStructBase
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
     * Constructor method for JourneyMarket
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfJourneyDateMarket $journeyDateMarkets
     *
     * @uses JourneyMarket::setJourneyDateMarkets()
     */
    public function __construct(?ArrayOfJourneyDateMarket $journeyDateMarkets = null)
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
     * @return JourneyMarket
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
}

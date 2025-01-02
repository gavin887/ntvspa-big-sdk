<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use Travel\Arrays\ArrayOfJourneyDateMarket;

/**
 * This class stands for RetrieveItaloTrainsResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q10:RetrieveItaloTrainsResponse | tns:RetrieveItaloTrainsResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveItaloTrainsResponse extends ResponseBase
{
    /**
     * The JourneysDateMarket
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Travel\Arrays\ArrayOfJourneyDateMarket|null
     */
    protected ?ArrayOfJourneyDateMarket $JourneysDateMarket = null;

    /**
     * Constructor method for RetrieveItaloTrainsResponse
     *
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfJourneyDateMarket $journeysDateMarket
     *
     * @uses RetrieveItaloTrainsResponse::setJourneysDateMarket()
     */
    public function __construct(?ArrayOfJourneyDateMarket $journeysDateMarket = null)
    {
        $this
            ->setJourneysDateMarket($journeysDateMarket);
    }

    /**
     * Get JourneysDateMarket value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Travel\Arrays\ArrayOfJourneyDateMarket|null
     */
    public function getJourneysDateMarket(): ?ArrayOfJourneyDateMarket
    {
        return $this->JourneysDateMarket ?? null;
    }

    /**
     * Set JourneysDateMarket value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfJourneyDateMarket $journeysDateMarket
     *
     * @return RetrieveItaloTrainsResponse
     */
    public function setJourneysDateMarket(?ArrayOfJourneyDateMarket $journeysDateMarket = null): self
    {
        if (is_null($journeysDateMarket) || (is_array($journeysDateMarket) && empty($journeysDateMarket))) {
            unset($this->JourneysDateMarket);
        } else {
            $this->JourneysDateMarket = $journeysDateMarket;
        }

        return $this;
    }
}

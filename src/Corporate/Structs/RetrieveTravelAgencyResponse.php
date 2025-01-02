<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;

/**
 * This class stands for RetrieveTravelAgencyResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:RetrieveTravelAgencyResponse | q2:RetrieveTravelAgencyResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveTravelAgencyResponse extends ResponseBase
{
    /**
     * The TravelAgency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var TravelAgency|null
     */
    protected ?\Ntvspa\Big\Corporate\Structs\TravelAgency $TravelAgency = null;

    /**
     * Constructor method for RetrieveTravelAgencyResponse
     *
     * @param TravelAgency $travelAgency
     *
     * @uses RetrieveTravelAgencyResponse::setTravelAgency()
     */
    public function __construct(?\Ntvspa\Big\Corporate\Structs\TravelAgency $travelAgency = null)
    {
        $this
            ->setTravelAgency($travelAgency);
    }

    /**
     * Get TravelAgency value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return TravelAgency|null
     */
    public function getTravelAgency(): ?\Ntvspa\Big\Corporate\Structs\TravelAgency
    {
        return $this->TravelAgency ?? null;
    }

    /**
     * Set TravelAgency value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param TravelAgency $travelAgency
     *
     * @return RetrieveTravelAgencyResponse
     */
    public function setTravelAgency(?\Ntvspa\Big\Corporate\Structs\TravelAgency $travelAgency = null): self
    {
        if (is_null($travelAgency) || (is_array($travelAgency) && empty($travelAgency))) {
            unset($this->TravelAgency);
        } else {
            $this->TravelAgency = $travelAgency;
        }

        return $this;
    }
}

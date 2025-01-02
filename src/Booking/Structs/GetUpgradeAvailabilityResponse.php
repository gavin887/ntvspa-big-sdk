<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfSegment;

/**
 * This class stands for GetUpgradeAvailabilityResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q52:GetUpgradeAvailabilityResponse | tns:GetUpgradeAvailabilityResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetUpgradeAvailabilityResponse extends ResponseBase
{
    /**
     * The Segments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfSegment|null
     */
    protected ?ArrayOfSegment $Segments = null;

    /**
     * Constructor method for GetUpgradeAvailabilityResponse
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfSegment $segments
     *
     * @uses GetUpgradeAvailabilityResponse::setSegments()
     */
    public function __construct(?ArrayOfSegment $segments = null)
    {
        $this
            ->setSegments($segments);
    }

    /**
     * Get Segments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfSegment|null
     */
    public function getSegments(): ?ArrayOfSegment
    {
        return $this->Segments ?? null;
    }

    /**
     * Set Segments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfSegment $segments
     *
     * @return GetUpgradeAvailabilityResponse
     */
    public function setSegments(?ArrayOfSegment $segments = null): self
    {
        if (is_null($segments) || (is_array($segments) && empty($segments))) {
            unset($this->Segments);
        } else {
            $this->Segments = $segments;
        }

        return $this;
    }
}

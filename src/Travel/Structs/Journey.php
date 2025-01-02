<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use Travel\Arrays\ArrayOfSegment;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Journey Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Journey
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Journey extends AbstractStructBase
{
    /**
     * The Segments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Travel\Arrays\ArrayOfSegment|null
     */
    protected ?ArrayOfSegment $Segments = null;

    /**
     * Constructor method for Journey
     *
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfSegment $segments
     *
     * @uses Journey::setSegments()
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
     * @return \Ntvspa\Big\Travel\Arrays\ArrayOfSegment|null
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
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfSegment $segments
     *
     * @return Journey
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

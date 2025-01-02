<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfFareBasisGroup;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareBasisRestrictionRules Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FareBasisRestrictionRules
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class FareBasisRestrictionRules extends AbstractStructBase
{
    /**
     * The FareBasisGroups
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfFareBasisGroup|null
     */
    protected ?ArrayOfFareBasisGroup $FareBasisGroups = null;

    /**
     * Constructor method for FareBasisRestrictionRules
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfFareBasisGroup $fareBasisGroups
     *
     * @uses FareBasisRestrictionRules::setFareBasisGroups()
     */
    public function __construct(?ArrayOfFareBasisGroup $fareBasisGroups = null)
    {
        $this
            ->setFareBasisGroups($fareBasisGroups);
    }

    /**
     * Get FareBasisGroups value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfFareBasisGroup|null
     */
    public function getFareBasisGroups(): ?ArrayOfFareBasisGroup
    {
        return $this->FareBasisGroups ?? null;
    }

    /**
     * Set FareBasisGroups value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfFareBasisGroup $fareBasisGroups
     *
     * @return FareBasisRestrictionRules
     */
    public function setFareBasisGroups(?ArrayOfFareBasisGroup $fareBasisGroups = null): self
    {
        if (is_null($fareBasisGroups) || (is_array($fareBasisGroups) && empty($fareBasisGroups))) {
            unset($this->FareBasisGroups);
        } else {
            $this->FareBasisGroups = $fareBasisGroups;
        }

        return $this;
    }
}

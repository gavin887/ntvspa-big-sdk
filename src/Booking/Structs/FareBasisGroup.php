<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfstring;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareBasisGroup Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FareBasisGroup
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class FareBasisGroup extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The FareBasis
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfstring|null
     */
    protected ?ArrayOfstring $FareBasis = null;

    /**
     * Constructor method for FareBasisGroup
     *
     * @param string                                   $name
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfstring $fareBasis
     *
     * @uses FareBasisGroup::setName()
     * @uses FareBasisGroup::setFareBasis()
     */
    public function __construct(?string $name = null, ?ArrayOfstring $fareBasis = null)
    {
        $this
            ->setName($name)
            ->setFareBasis($fareBasis);
    }

    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $name
     *
     * @return FareBasisGroup
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }

        return $this;
    }

    /**
     * Get FareBasis value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfstring|null
     */
    public function getFareBasis(): ?ArrayOfstring
    {
        return $this->FareBasis ?? null;
    }

    /**
     * Set FareBasis value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfstring $fareBasis
     *
     * @return FareBasisGroup
     */
    public function setFareBasis(?ArrayOfstring $fareBasis = null): self
    {
        if (is_null($fareBasis) || (is_array($fareBasis) && empty($fareBasis))) {
            unset($this->FareBasis);
        } else {
            $this->FareBasis = $fareBasis;
        }

        return $this;
    }
}

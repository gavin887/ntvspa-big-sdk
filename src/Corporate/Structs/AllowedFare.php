<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AllowedFare Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AllowedFare
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class AllowedFare extends AbstractStructBase
{
    /**
     * The FareBasis
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FareBasis = null;

    /**
     * Constructor method for AllowedFare
     *
     * @param string $fareBasis
     *
     * @uses AllowedFare::setFareBasis()
     */
    public function __construct(?string $fareBasis = null)
    {
        $this
            ->setFareBasis($fareBasis);
    }

    /**
     * Get FareBasis value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFareBasis(): ?string
    {
        return $this->FareBasis ?? null;
    }

    /**
     * Set FareBasis value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $fareBasis
     *
     * @return AllowedFare
     */
    public function setFareBasis(?string $fareBasis = null): self
    {
        // validation for constraint: string
        if (!is_null($fareBasis) && !is_string($fareBasis)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareBasis, true), gettype($fareBasis)), __LINE__);
        }
        if (is_null($fareBasis) || (is_array($fareBasis) && empty($fareBasis))) {
            unset($this->FareBasis);
        } else {
            $this->FareBasis = $fareBasis;
        }

        return $this;
    }
}

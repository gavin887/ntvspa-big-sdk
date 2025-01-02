<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Fare Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Fare
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Fare extends AbstractStructBase
{
    /**
     * The FareName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FareName = null;
    /**
     * The FareBasisCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FareBasisCode = null;

    /**
     * Constructor method for Fare
     *
     * @param string $fareName
     * @param string $fareBasisCode
     *
     * @uses Fare::setFareName()
     * @uses Fare::setFareBasisCode()
     */
    public function __construct(?string $fareName = null, ?string $fareBasisCode = null)
    {
        $this
            ->setFareName($fareName)
            ->setFareBasisCode($fareBasisCode);
    }

    /**
     * Get FareName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFareName(): ?string
    {
        return $this->FareName ?? null;
    }

    /**
     * Set FareName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $fareName
     *
     * @return Fare
     */
    public function setFareName(?string $fareName = null): self
    {
        // validation for constraint: string
        if (!is_null($fareName) && !is_string($fareName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareName, true), gettype($fareName)), __LINE__);
        }
        if (is_null($fareName) || (is_array($fareName) && empty($fareName))) {
            unset($this->FareName);
        } else {
            $this->FareName = $fareName;
        }

        return $this;
    }

    /**
     * Get FareBasisCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFareBasisCode(): ?string
    {
        return $this->FareBasisCode ?? null;
    }

    /**
     * Set FareBasisCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $fareBasisCode
     *
     * @return Fare
     */
    public function setFareBasisCode(?string $fareBasisCode = null): self
    {
        // validation for constraint: string
        if (!is_null($fareBasisCode) && !is_string($fareBasisCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareBasisCode, true), gettype($fareBasisCode)), __LINE__);
        }
        if (is_null($fareBasisCode) || (is_array($fareBasisCode) && empty($fareBasisCode))) {
            unset($this->FareBasisCode);
        } else {
            $this->FareBasisCode = $fareBasisCode;
        }

        return $this;
    }
}

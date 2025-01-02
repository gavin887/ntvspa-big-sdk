<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LegSSR Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LegSSR
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class LegSSR extends AbstractStructBase
{
    /**
     * The SSRAvailability
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $SSRAvailability = null;
    /**
     * The SSRCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $SSRCode = null;

    /**
     * Constructor method for LegSSR
     *
     * @param int    $sSRAvailability
     * @param string $sSRCode
     *
     * @uses LegSSR::setSSRAvailability()
     * @uses LegSSR::setSSRCode()
     */
    public function __construct(?int $sSRAvailability = null, ?string $sSRCode = null)
    {
        $this
            ->setSSRAvailability($sSRAvailability)
            ->setSSRCode($sSRCode);
    }

    /**
     * Get SSRAvailability value
     *
     * @return int|null
     */
    public function getSSRAvailability(): ?int
    {
        return $this->SSRAvailability;
    }

    /**
     * Set SSRAvailability value
     *
     * @param int $sSRAvailability
     *
     * @return LegSSR
     */
    public function setSSRAvailability(?int $sSRAvailability = null): self
    {
        // validation for constraint: int
        if (!is_null($sSRAvailability) && !(is_int($sSRAvailability) || ctype_digit($sSRAvailability))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sSRAvailability, true), gettype($sSRAvailability)), __LINE__);
        }
        $this->SSRAvailability = $sSRAvailability;

        return $this;
    }

    /**
     * Get SSRCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getSSRCode(): ?string
    {
        return $this->SSRCode ?? null;
    }

    /**
     * Set SSRCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $sSRCode
     *
     * @return LegSSR
     */
    public function setSSRCode(?string $sSRCode = null): self
    {
        // validation for constraint: string
        if (!is_null($sSRCode) && !is_string($sSRCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sSRCode, true), gettype($sSRCode)), __LINE__);
        }
        if (is_null($sSRCode) || (is_array($sSRCode) && empty($sSRCode))) {
            unset($this->SSRCode);
        } else {
            $this->SSRCode = $sSRCode;
        }

        return $this;
    }
}

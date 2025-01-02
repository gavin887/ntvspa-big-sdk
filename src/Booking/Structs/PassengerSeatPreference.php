<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerSeatPreference Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PassengerSeatPreference
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class PassengerSeatPreference extends AbstractStructBase
{
    /**
     * The PropertyCode
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PropertyCode = null;
    /**
     * The PropertyTypeCode
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PropertyTypeCode = null;

    /**
     * Constructor method for PassengerSeatPreference
     *
     * @param string $propertyCode
     * @param string $propertyTypeCode
     *
     * @uses PassengerSeatPreference::setPropertyCode()
     * @uses PassengerSeatPreference::setPropertyTypeCode()
     */
    public function __construct(?string $propertyCode = null, ?string $propertyTypeCode = null)
    {
        $this
            ->setPropertyCode($propertyCode)
            ->setPropertyTypeCode($propertyTypeCode);
    }

    /**
     * Get PropertyCode value
     *
     * @return string|null
     */
    public function getPropertyCode(): ?string
    {
        return $this->PropertyCode;
    }

    /**
     * Set PropertyCode value
     *
     * @param string $propertyCode
     *
     * @return PassengerSeatPreference
     */
    public function setPropertyCode(?string $propertyCode = null): self
    {
        // validation for constraint: string
        if (!is_null($propertyCode) && !is_string($propertyCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($propertyCode, true), gettype($propertyCode)), __LINE__);
        }
        $this->PropertyCode = $propertyCode;

        return $this;
    }

    /**
     * Get PropertyTypeCode value
     *
     * @return string|null
     */
    public function getPropertyTypeCode(): ?string
    {
        return $this->PropertyTypeCode;
    }

    /**
     * Set PropertyTypeCode value
     *
     * @param string $propertyTypeCode
     *
     * @return PassengerSeatPreference
     */
    public function setPropertyTypeCode(?string $propertyTypeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($propertyTypeCode) && !is_string($propertyTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($propertyTypeCode, true), gettype($propertyTypeCode)), __LINE__);
        }
        $this->PropertyTypeCode = $propertyTypeCode;

        return $this;
    }
}

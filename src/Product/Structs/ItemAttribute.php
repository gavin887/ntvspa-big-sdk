<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemAttribute Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ItemAttribute
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ItemAttribute extends AbstractStructBase
{
    /**
     * The DepartureCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DepartureCity = null;
    /**
     * The ArrivalCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ArrivalCity = null;
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
     * The Class
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Class = null;

    /**
     * Constructor method for ItemAttribute
     *
     * @param string $departureCity
     * @param string $arrivalCity
     * @param string $fareBasis
     * @param string $class
     *
     * @uses ItemAttribute::setDepartureCity()
     * @uses ItemAttribute::setArrivalCity()
     * @uses ItemAttribute::setFareBasis()
     * @uses ItemAttribute::setClass()
     */
    public function __construct(?string $departureCity = null, ?string $arrivalCity = null, ?string $fareBasis = null, ?string $class = null)
    {
        $this
            ->setDepartureCity($departureCity)
            ->setArrivalCity($arrivalCity)
            ->setFareBasis($fareBasis)
            ->setClass($class);
    }

    /**
     * Get DepartureCity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDepartureCity(): ?string
    {
        return $this->DepartureCity ?? null;
    }

    /**
     * Set DepartureCity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $departureCity
     *
     * @return ItemAttribute
     */
    public function setDepartureCity(?string $departureCity = null): self
    {
        // validation for constraint: string
        if (!is_null($departureCity) && !is_string($departureCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureCity, true), gettype($departureCity)), __LINE__);
        }
        if (is_null($departureCity) || (is_array($departureCity) && empty($departureCity))) {
            unset($this->DepartureCity);
        } else {
            $this->DepartureCity = $departureCity;
        }

        return $this;
    }

    /**
     * Get ArrivalCity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getArrivalCity(): ?string
    {
        return $this->ArrivalCity ?? null;
    }

    /**
     * Set ArrivalCity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $arrivalCity
     *
     * @return ItemAttribute
     */
    public function setArrivalCity(?string $arrivalCity = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalCity) && !is_string($arrivalCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalCity, true), gettype($arrivalCity)), __LINE__);
        }
        if (is_null($arrivalCity) || (is_array($arrivalCity) && empty($arrivalCity))) {
            unset($this->ArrivalCity);
        } else {
            $this->ArrivalCity = $arrivalCity;
        }

        return $this;
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
     * @return ItemAttribute
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

    /**
     * Get Class value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getClass(): ?string
    {
        return $this->Class ?? null;
    }

    /**
     * Set Class value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $class
     *
     * @return ItemAttribute
     */
    public function setClass(?string $class = null): self
    {
        // validation for constraint: string
        if (!is_null($class) && !is_string($class)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($class, true), gettype($class)), __LINE__);
        }
        if (is_null($class) || (is_array($class) && empty($class))) {
            unset($this->Class);
        } else {
            $this->Class = $class;
        }

        return $this;
    }
}

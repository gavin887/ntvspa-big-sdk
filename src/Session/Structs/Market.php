<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Market Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Market
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Market extends AbstractStructBase
{
    /**
     * The DepartureCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DepartureCode = null;
    /**
     * The ArrivalCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ArrivalCode = null;

    /**
     * Constructor method for Market
     *
     * @param string $departureCode
     * @param string $arrivalCode
     *
     * @uses Market::setDepartureCode()
     * @uses Market::setArrivalCode()
     */
    public function __construct(?string $departureCode = null, ?string $arrivalCode = null)
    {
        $this
            ->setDepartureCode($departureCode)
            ->setArrivalCode($arrivalCode);
    }

    /**
     * Get DepartureCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDepartureCode(): ?string
    {
        return $this->DepartureCode ?? null;
    }

    /**
     * Set DepartureCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $departureCode
     *
     * @return Market
     */
    public function setDepartureCode(?string $departureCode = null): self
    {
        // validation for constraint: string
        if (!is_null($departureCode) && !is_string($departureCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureCode, true), gettype($departureCode)), __LINE__);
        }
        if (is_null($departureCode) || (is_array($departureCode) && empty($departureCode))) {
            unset($this->DepartureCode);
        } else {
            $this->DepartureCode = $departureCode;
        }

        return $this;
    }

    /**
     * Get ArrivalCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getArrivalCode(): ?string
    {
        return $this->ArrivalCode ?? null;
    }

    /**
     * Set ArrivalCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $arrivalCode
     *
     * @return Market
     */
    public function setArrivalCode(?string $arrivalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalCode) && !is_string($arrivalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalCode, true), gettype($arrivalCode)), __LINE__);
        }
        if (is_null($arrivalCode) || (is_array($arrivalCode) && empty($arrivalCode))) {
            unset($this->ArrivalCode);
        } else {
            $this->ArrivalCode = $arrivalCode;
        }

        return $this;
    }
}

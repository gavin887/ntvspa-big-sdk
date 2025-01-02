<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BlackMarket Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BlackMarket
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class BlackMarket extends AbstractStructBase
{
    /**
     * The StationFrom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $StationFrom = null;
    /**
     * The StationTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $StationTo = null;

    /**
     * Constructor method for BlackMarket
     *
     * @param string $stationFrom
     * @param string $stationTo
     *
     * @uses BlackMarket::setStationFrom()
     * @uses BlackMarket::setStationTo()
     */
    public function __construct(?string $stationFrom = null, ?string $stationTo = null)
    {
        $this
            ->setStationFrom($stationFrom)
            ->setStationTo($stationTo);
    }

    /**
     * Get StationFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getStationFrom(): ?string
    {
        return $this->StationFrom ?? null;
    }

    /**
     * Set StationFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $stationFrom
     *
     * @return BlackMarket
     */
    public function setStationFrom(?string $stationFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($stationFrom) && !is_string($stationFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stationFrom, true), gettype($stationFrom)), __LINE__);
        }
        if (is_null($stationFrom) || (is_array($stationFrom) && empty($stationFrom))) {
            unset($this->StationFrom);
        } else {
            $this->StationFrom = $stationFrom;
        }

        return $this;
    }

    /**
     * Get StationTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getStationTo(): ?string
    {
        return $this->StationTo ?? null;
    }

    /**
     * Set StationTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $stationTo
     *
     * @return BlackMarket
     */
    public function setStationTo(?string $stationTo = null): self
    {
        // validation for constraint: string
        if (!is_null($stationTo) && !is_string($stationTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stationTo, true), gettype($stationTo)), __LINE__);
        }
        if (is_null($stationTo) || (is_array($stationTo) && empty($stationTo))) {
            unset($this->StationTo);
        } else {
            $this->StationTo = $stationTo;
        }

        return $this;
    }
}

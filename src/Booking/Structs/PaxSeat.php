<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaxSeat Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PaxSeat
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class PaxSeat extends AbstractStructBase
{
    /**
     * The PassengerNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $PassengerNumber = null;
    /**
     * The CompartmentDesignator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CompartmentDesignator = null;
    /**
     * The UnitDesignator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $UnitDesignator = null;

    /**
     * Constructor method for PaxSeat
     *
     * @param int    $passengerNumber
     * @param string $compartmentDesignator
     * @param string $unitDesignator
     *
     * @uses PaxSeat::setPassengerNumber()
     * @uses PaxSeat::setCompartmentDesignator()
     * @uses PaxSeat::setUnitDesignator()
     */
    public function __construct(?int $passengerNumber = null, ?string $compartmentDesignator = null, ?string $unitDesignator = null)
    {
        $this
            ->setPassengerNumber($passengerNumber)
            ->setCompartmentDesignator($compartmentDesignator)
            ->setUnitDesignator($unitDesignator);
    }

    /**
     * Get PassengerNumber value
     *
     * @return int|null
     */
    public function getPassengerNumber(): ?int
    {
        return $this->PassengerNumber;
    }

    /**
     * Set PassengerNumber value
     *
     * @param int $passengerNumber
     *
     * @return PaxSeat
     */
    public function setPassengerNumber(?int $passengerNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($passengerNumber) && !(is_int($passengerNumber) || ctype_digit($passengerNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($passengerNumber, true), gettype($passengerNumber)), __LINE__);
        }
        $this->PassengerNumber = $passengerNumber;

        return $this;
    }

    /**
     * Get CompartmentDesignator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCompartmentDesignator(): ?string
    {
        return $this->CompartmentDesignator ?? null;
    }

    /**
     * Set CompartmentDesignator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $compartmentDesignator
     *
     * @return PaxSeat
     */
    public function setCompartmentDesignator(?string $compartmentDesignator = null): self
    {
        // validation for constraint: string
        if (!is_null($compartmentDesignator) && !is_string($compartmentDesignator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($compartmentDesignator, true), gettype($compartmentDesignator)), __LINE__);
        }
        if (is_null($compartmentDesignator) || (is_array($compartmentDesignator) && empty($compartmentDesignator))) {
            unset($this->CompartmentDesignator);
        } else {
            $this->CompartmentDesignator = $compartmentDesignator;
        }

        return $this;
    }

    /**
     * Get UnitDesignator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getUnitDesignator(): ?string
    {
        return $this->UnitDesignator ?? null;
    }

    /**
     * Set UnitDesignator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $unitDesignator
     *
     * @return PaxSeat
     */
    public function setUnitDesignator(?string $unitDesignator = null): self
    {
        // validation for constraint: string
        if (!is_null($unitDesignator) && !is_string($unitDesignator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitDesignator, true), gettype($unitDesignator)), __LINE__);
        }
        if (is_null($unitDesignator) || (is_array($unitDesignator) && empty($unitDesignator))) {
            unset($this->UnitDesignator);
        } else {
            $this->UnitDesignator = $unitDesignator;
        }

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfEquipmentProperty;
use Booking\Arrays\ArrayOfSeat;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Compartment Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Compartment
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Compartment extends AbstractStructBase
{
    /**
     * The Length
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $Length = null;
    /**
     * The Width
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $Width = null;
    /**
     * The AvailableUnits
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $AvailableUnits = null;
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
     * The Seats
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfSeat|null
     */
    protected ?ArrayOfSeat $Seats = null;
    /**
     * The PropertyList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfEquipmentProperty|null
     */
    protected ?ArrayOfEquipmentProperty $PropertyList = null;

    /**
     * Constructor method for Compartment
     *
     * @param int                                                 $length
     * @param int                                                 $width
     * @param int                                                 $availableUnits
     * @param string                                              $compartmentDesignator
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfSeat              $seats
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfEquipmentProperty $propertyList
     *
     * @uses Compartment::setLength()
     * @uses Compartment::setWidth()
     * @uses Compartment::setAvailableUnits()
     * @uses Compartment::setCompartmentDesignator()
     * @uses Compartment::setSeats()
     * @uses Compartment::setPropertyList()
     */
    public function __construct(?int $length = null, ?int $width = null, ?int $availableUnits = null, ?string $compartmentDesignator = null, ?ArrayOfSeat $seats = null, ?ArrayOfEquipmentProperty $propertyList = null)
    {
        $this
            ->setLength($length)
            ->setWidth($width)
            ->setAvailableUnits($availableUnits)
            ->setCompartmentDesignator($compartmentDesignator)
            ->setSeats($seats)
            ->setPropertyList($propertyList);
    }

    /**
     * Get Length value
     *
     * @return int|null
     */
    public function getLength(): ?int
    {
        return $this->Length;
    }

    /**
     * Set Length value
     *
     * @param int $length
     *
     * @return Compartment
     */
    public function setLength(?int $length = null): self
    {
        // validation for constraint: int
        if (!is_null($length) && !(is_int($length) || ctype_digit($length))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($length, true), gettype($length)), __LINE__);
        }
        $this->Length = $length;

        return $this;
    }

    /**
     * Get Width value
     *
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->Width;
    }

    /**
     * Set Width value
     *
     * @param int $width
     *
     * @return Compartment
     */
    public function setWidth(?int $width = null): self
    {
        // validation for constraint: int
        if (!is_null($width) && !(is_int($width) || ctype_digit($width))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        $this->Width = $width;

        return $this;
    }

    /**
     * Get AvailableUnits value
     *
     * @return int|null
     */
    public function getAvailableUnits(): ?int
    {
        return $this->AvailableUnits;
    }

    /**
     * Set AvailableUnits value
     *
     * @param int $availableUnits
     *
     * @return Compartment
     */
    public function setAvailableUnits(?int $availableUnits = null): self
    {
        // validation for constraint: int
        if (!is_null($availableUnits) && !(is_int($availableUnits) || ctype_digit($availableUnits))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($availableUnits, true), gettype($availableUnits)), __LINE__);
        }
        $this->AvailableUnits = $availableUnits;

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
     * @return Compartment
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
     * Get Seats value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfSeat|null
     */
    public function getSeats(): ?ArrayOfSeat
    {
        return $this->Seats ?? null;
    }

    /**
     * Set Seats value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfSeat $seats
     *
     * @return Compartment
     */
    public function setSeats(?ArrayOfSeat $seats = null): self
    {
        if (is_null($seats) || (is_array($seats) && empty($seats))) {
            unset($this->Seats);
        } else {
            $this->Seats = $seats;
        }

        return $this;
    }

    /**
     * Get PropertyList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfEquipmentProperty|null
     */
    public function getPropertyList(): ?ArrayOfEquipmentProperty
    {
        return $this->PropertyList ?? null;
    }

    /**
     * Set PropertyList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfEquipmentProperty $propertyList
     *
     * @return Compartment
     */
    public function setPropertyList(?ArrayOfEquipmentProperty $propertyList = null): self
    {
        if (is_null($propertyList) || (is_array($propertyList) && empty($propertyList))) {
            unset($this->PropertyList);
        } else {
            $this->PropertyList = $propertyList;
        }

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\Passenger;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPassenger Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPassenger
 *
 * @subpackage Arrays
 */
class ArrayOfPassenger extends AbstractStructArrayBase
{
    /**
     * The Passenger
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Passenger[]|null
     */
    protected ?array $Passenger = null;

    /**
     * Constructor method for ArrayOfPassenger
     *
     * @param Passenger[] $passenger
     *
     * @uses ArrayOfPassenger::setPassenger()
     */
    public function __construct(?array $passenger = null)
    {
        $this
            ->setPassenger($passenger);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setPassenger method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassenger method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePassengerForArrayConstraintFromSetPassenger(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPassengerPassengerItem) {
            // validation for constraint: itemType
            if (!$arrayOfPassengerPassengerItem instanceof Passenger) {
                $invalidValues[] = is_object($arrayOfPassengerPassengerItem) ? get_class($arrayOfPassengerPassengerItem) : sprintf('%s(%s)', gettype($arrayOfPassengerPassengerItem), var_export($arrayOfPassengerPassengerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Passenger property can only contain items of type \Ntvspa\Big\Booking\Structs\Passenger, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Passenger value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Passenger[]|null
     */
    public function getPassenger(): ?array
    {
        return $this->Passenger ?? null;
    }

    /**
     * Set Passenger value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Passenger[] $passenger
     *
     * @return ArrayOfPassenger
     * @throws InvalidArgumentException
     */
    public function setPassenger(?array $passenger = null): self
    {
        // validation for constraint: array
        if ('' !== ($passengerArrayErrorMessage = self::validatePassengerForArrayConstraintFromSetPassenger($passenger))) {
            throw new InvalidArgumentException($passengerArrayErrorMessage, __LINE__);
        }
        if (is_null($passenger) || (is_array($passenger) && empty($passenger))) {
            unset($this->Passenger);
        } else {
            $this->Passenger = $passenger;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Passenger|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\Passenger
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Passenger|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\Passenger
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Passenger|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\Passenger
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Passenger|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\Passenger
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Passenger|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\Passenger
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Passenger $item
     *
     * @return ArrayOfPassenger
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Passenger) {
            throw new InvalidArgumentException(sprintf('The Passenger property can only contain items of type \Ntvspa\Big\Booking\Structs\Passenger, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Passenger
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Passenger';
    }
}

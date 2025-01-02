<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\Seat;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSeat Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSeat
 *
 * @subpackage Arrays
 */
class ArrayOfSeat extends AbstractStructArrayBase
{
    /**
     * The Seat
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Seat[]|null
     */
    protected ?array $Seat = null;

    /**
     * Constructor method for ArrayOfSeat
     *
     * @param Seat[] $seat
     *
     * @uses ArrayOfSeat::setSeat()
     */
    public function __construct(?array $seat = null)
    {
        $this
            ->setSeat($seat);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setSeat method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSeat method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSeatForArrayConstraintFromSetSeat(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSeatSeatItem) {
            // validation for constraint: itemType
            if (!$arrayOfSeatSeatItem instanceof Seat) {
                $invalidValues[] = is_object($arrayOfSeatSeatItem) ? get_class($arrayOfSeatSeatItem) : sprintf('%s(%s)', gettype($arrayOfSeatSeatItem), var_export($arrayOfSeatSeatItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Seat property can only contain items of type \Ntvspa\Big\Booking\Structs\Seat, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Seat value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Seat[]|null
     */
    public function getSeat(): ?array
    {
        return $this->Seat ?? null;
    }

    /**
     * Set Seat value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Seat[] $seat
     *
     * @return ArrayOfSeat
     * @throws InvalidArgumentException
     */
    public function setSeat(?array $seat = null): self
    {
        // validation for constraint: array
        if ('' !== ($seatArrayErrorMessage = self::validateSeatForArrayConstraintFromSetSeat($seat))) {
            throw new InvalidArgumentException($seatArrayErrorMessage, __LINE__);
        }
        if (is_null($seat) || (is_array($seat) && empty($seat))) {
            unset($this->Seat);
        } else {
            $this->Seat = $seat;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Seat|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\Seat
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Seat|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\Seat
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Seat|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\Seat
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Seat|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\Seat
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Seat|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\Seat
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Seat $item
     *
     * @return ArrayOfSeat
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Seat) {
            throw new InvalidArgumentException(sprintf('The Seat property can only contain items of type \Ntvspa\Big\Booking\Structs\Seat, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Seat
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Seat';
    }
}

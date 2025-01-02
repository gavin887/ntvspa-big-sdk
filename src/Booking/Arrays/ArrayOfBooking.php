<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\Booking;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBooking Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBooking
 *
 * @subpackage Arrays
 */
class ArrayOfBooking extends AbstractStructArrayBase
{
    /**
     * The Booking
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Booking[]|null
     */
    protected ?array $Booking = null;

    /**
     * Constructor method for ArrayOfBooking
     *
     * @param Booking[] $booking
     *
     * @uses ArrayOfBooking::setBooking()
     */
    public function __construct(?array $booking = null)
    {
        $this
            ->setBooking($booking);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBooking method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingForArrayConstraintFromSetBooking(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBookingBookingItem) {
            // validation for constraint: itemType
            if (!$arrayOfBookingBookingItem instanceof Booking) {
                $invalidValues[] = is_object($arrayOfBookingBookingItem) ? get_class($arrayOfBookingBookingItem) : sprintf('%s(%s)', gettype($arrayOfBookingBookingItem), var_export($arrayOfBookingBookingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Booking property can only contain items of type \Ntvspa\Big\Booking\Structs\Booking, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Booking value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Booking[]|null
     */
    public function getBooking(): ?array
    {
        return $this->Booking ?? null;
    }

    /**
     * Set Booking value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Booking[] $booking
     *
     * @return ArrayOfBooking
     * @throws InvalidArgumentException
     */
    public function setBooking(?array $booking = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingArrayErrorMessage = self::validateBookingForArrayConstraintFromSetBooking($booking))) {
            throw new InvalidArgumentException($bookingArrayErrorMessage, __LINE__);
        }
        if (is_null($booking) || (is_array($booking) && empty($booking))) {
            unset($this->Booking);
        } else {
            $this->Booking = $booking;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Booking|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\Booking
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Booking|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\Booking
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Booking|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\Booking
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Booking|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\Booking
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Booking|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\Booking
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Booking $item
     *
     * @return ArrayOfBooking
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Booking) {
            throw new InvalidArgumentException(sprintf('The Booking property can only contain items of type \Ntvspa\Big\Booking\Structs\Booking, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Booking
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Booking';
    }
}

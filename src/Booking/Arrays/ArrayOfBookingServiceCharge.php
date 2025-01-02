<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\BookingServiceCharge;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBookingServiceCharge Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBookingServiceCharge
 *
 * @subpackage Arrays
 */
class ArrayOfBookingServiceCharge extends AbstractStructArrayBase
{
    /**
     * The BookingServiceCharge
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var BookingServiceCharge[]|null
     */
    protected ?array $BookingServiceCharge = null;

    /**
     * Constructor method for ArrayOfBookingServiceCharge
     *
     * @param BookingServiceCharge[] $bookingServiceCharge
     *
     * @uses ArrayOfBookingServiceCharge::setBookingServiceCharge()
     */
    public function __construct(?array $bookingServiceCharge = null)
    {
        $this
            ->setBookingServiceCharge($bookingServiceCharge);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setBookingServiceCharge method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingServiceCharge method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingServiceChargeForArrayConstraintFromSetBookingServiceCharge(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBookingServiceChargeBookingServiceChargeItem) {
            // validation for constraint: itemType
            if (!$arrayOfBookingServiceChargeBookingServiceChargeItem instanceof BookingServiceCharge) {
                $invalidValues[] = is_object($arrayOfBookingServiceChargeBookingServiceChargeItem) ? get_class($arrayOfBookingServiceChargeBookingServiceChargeItem) : sprintf('%s(%s)', gettype($arrayOfBookingServiceChargeBookingServiceChargeItem), var_export($arrayOfBookingServiceChargeBookingServiceChargeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingServiceCharge property can only contain items of type \Ntvspa\Big\Booking\Structs\BookingServiceCharge, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get BookingServiceCharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return BookingServiceCharge[]|null
     */
    public function getBookingServiceCharge(): ?array
    {
        return $this->BookingServiceCharge ?? null;
    }

    /**
     * Set BookingServiceCharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param BookingServiceCharge[] $bookingServiceCharge
     *
     * @return ArrayOfBookingServiceCharge
     * @throws InvalidArgumentException
     */
    public function setBookingServiceCharge(?array $bookingServiceCharge = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingServiceChargeArrayErrorMessage = self::validateBookingServiceChargeForArrayConstraintFromSetBookingServiceCharge($bookingServiceCharge))) {
            throw new InvalidArgumentException($bookingServiceChargeArrayErrorMessage, __LINE__);
        }
        if (is_null($bookingServiceCharge) || (is_array($bookingServiceCharge) && empty($bookingServiceCharge))) {
            unset($this->BookingServiceCharge);
        } else {
            $this->BookingServiceCharge = $bookingServiceCharge;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return BookingServiceCharge|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\BookingServiceCharge
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return BookingServiceCharge|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\BookingServiceCharge
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return BookingServiceCharge|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\BookingServiceCharge
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return BookingServiceCharge|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\BookingServiceCharge
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return BookingServiceCharge|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\BookingServiceCharge
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param BookingServiceCharge $item
     *
     * @return ArrayOfBookingServiceCharge
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof BookingServiceCharge) {
            throw new InvalidArgumentException(sprintf('The BookingServiceCharge property can only contain items of type \Ntvspa\Big\Booking\Structs\BookingServiceCharge, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string BookingServiceCharge
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'BookingServiceCharge';
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\SegmentSeat;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSegmentSeat Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSegmentSeat
 *
 * @subpackage Arrays
 */
class ArrayOfSegmentSeat extends AbstractStructArrayBase
{
    /**
     * The SegmentSeat
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var SegmentSeat[]|null
     */
    protected ?array $SegmentSeat = null;

    /**
     * Constructor method for ArrayOfSegmentSeat
     *
     * @param SegmentSeat[] $segmentSeat
     *
     * @uses ArrayOfSegmentSeat::setSegmentSeat()
     */
    public function __construct(?array $segmentSeat = null)
    {
        $this
            ->setSegmentSeat($segmentSeat);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setSegmentSeat method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSegmentSeat method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSegmentSeatForArrayConstraintFromSetSegmentSeat(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSegmentSeatSegmentSeatItem) {
            // validation for constraint: itemType
            if (!$arrayOfSegmentSeatSegmentSeatItem instanceof SegmentSeat) {
                $invalidValues[] = is_object($arrayOfSegmentSeatSegmentSeatItem) ? get_class($arrayOfSegmentSeatSegmentSeatItem) : sprintf('%s(%s)', gettype($arrayOfSegmentSeatSegmentSeatItem), var_export($arrayOfSegmentSeatSegmentSeatItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SegmentSeat property can only contain items of type \Ntvspa\Big\Booking\Structs\SegmentSeat, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get SegmentSeat value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return SegmentSeat[]|null
     */
    public function getSegmentSeat(): ?array
    {
        return $this->SegmentSeat ?? null;
    }

    /**
     * Set SegmentSeat value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param SegmentSeat[] $segmentSeat
     *
     * @return ArrayOfSegmentSeat
     * @throws InvalidArgumentException
     */
    public function setSegmentSeat(?array $segmentSeat = null): self
    {
        // validation for constraint: array
        if ('' !== ($segmentSeatArrayErrorMessage = self::validateSegmentSeatForArrayConstraintFromSetSegmentSeat($segmentSeat))) {
            throw new InvalidArgumentException($segmentSeatArrayErrorMessage, __LINE__);
        }
        if (is_null($segmentSeat) || (is_array($segmentSeat) && empty($segmentSeat))) {
            unset($this->SegmentSeat);
        } else {
            $this->SegmentSeat = $segmentSeat;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return SegmentSeat|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\SegmentSeat
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return SegmentSeat|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\SegmentSeat
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return SegmentSeat|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\SegmentSeat
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return SegmentSeat|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\SegmentSeat
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return SegmentSeat|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\SegmentSeat
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param SegmentSeat $item
     *
     * @return ArrayOfSegmentSeat
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof SegmentSeat) {
            throw new InvalidArgumentException(sprintf('The SegmentSeat property can only contain items of type \Ntvspa\Big\Booking\Structs\SegmentSeat, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string SegmentSeat
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'SegmentSeat';
    }
}

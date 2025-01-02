<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Travel\Structs\Segment;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSegment Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSegment
 *
 * @subpackage Arrays
 */
class ArrayOfSegment extends AbstractStructArrayBase
{
    /**
     * The Segment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Segment[]|null
     */
    protected ?array $Segment = null;

    /**
     * Constructor method for ArrayOfSegment
     *
     * @param Segment[] $segment
     *
     * @uses ArrayOfSegment::setSegment()
     */
    public function __construct(?array $segment = null)
    {
        $this
            ->setSegment($segment);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setSegment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSegment method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSegmentForArrayConstraintFromSetSegment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSegmentSegmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfSegmentSegmentItem instanceof Segment) {
                $invalidValues[] = is_object($arrayOfSegmentSegmentItem) ? get_class($arrayOfSegmentSegmentItem) : sprintf('%s(%s)', gettype($arrayOfSegmentSegmentItem), var_export($arrayOfSegmentSegmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Segment property can only contain items of type \Ntvspa\Big\Travel\Structs\Segment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Segment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Segment[]|null
     */
    public function getSegment(): ?array
    {
        return $this->Segment ?? null;
    }

    /**
     * Set Segment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Segment[] $segment
     *
     * @return ArrayOfSegment
     * @throws InvalidArgumentException
     */
    public function setSegment(?array $segment = null): self
    {
        // validation for constraint: array
        if ('' !== ($segmentArrayErrorMessage = self::validateSegmentForArrayConstraintFromSetSegment($segment))) {
            throw new InvalidArgumentException($segmentArrayErrorMessage, __LINE__);
        }
        if (is_null($segment) || (is_array($segment) && empty($segment))) {
            unset($this->Segment);
        } else {
            $this->Segment = $segment;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Segment|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Travel\Structs\Segment
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Segment|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Travel\Structs\Segment
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Segment|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Travel\Structs\Segment
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Segment|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Travel\Structs\Segment
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Segment|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Travel\Structs\Segment
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Segment $item
     *
     * @return ArrayOfSegment
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Segment) {
            throw new InvalidArgumentException(sprintf('The Segment property can only contain items of type \Ntvspa\Big\Travel\Structs\Segment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Segment
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Segment';
    }
}

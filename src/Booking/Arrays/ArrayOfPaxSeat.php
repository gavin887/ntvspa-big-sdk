<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\PaxSeat;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPaxSeat Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPaxSeat
 *
 * @subpackage Arrays
 */
class ArrayOfPaxSeat extends AbstractStructArrayBase
{
    /**
     * The PaxSeat
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var PaxSeat[]|null
     */
    protected ?array $PaxSeat = null;

    /**
     * Constructor method for ArrayOfPaxSeat
     *
     * @param PaxSeat[] $paxSeat
     *
     * @uses ArrayOfPaxSeat::setPaxSeat()
     */
    public function __construct(?array $paxSeat = null)
    {
        $this
            ->setPaxSeat($paxSeat);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setPaxSeat method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaxSeat method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaxSeatForArrayConstraintFromSetPaxSeat(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPaxSeatPaxSeatItem) {
            // validation for constraint: itemType
            if (!$arrayOfPaxSeatPaxSeatItem instanceof PaxSeat) {
                $invalidValues[] = is_object($arrayOfPaxSeatPaxSeatItem) ? get_class($arrayOfPaxSeatPaxSeatItem) : sprintf('%s(%s)', gettype($arrayOfPaxSeatPaxSeatItem), var_export($arrayOfPaxSeatPaxSeatItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaxSeat property can only contain items of type \Ntvspa\Big\Booking\Structs\PaxSeat, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get PaxSeat value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return PaxSeat[]|null
     */
    public function getPaxSeat(): ?array
    {
        return $this->PaxSeat ?? null;
    }

    /**
     * Set PaxSeat value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param PaxSeat[] $paxSeat
     *
     * @return ArrayOfPaxSeat
     * @throws InvalidArgumentException
     */
    public function setPaxSeat(?array $paxSeat = null): self
    {
        // validation for constraint: array
        if ('' !== ($paxSeatArrayErrorMessage = self::validatePaxSeatForArrayConstraintFromSetPaxSeat($paxSeat))) {
            throw new InvalidArgumentException($paxSeatArrayErrorMessage, __LINE__);
        }
        if (is_null($paxSeat) || (is_array($paxSeat) && empty($paxSeat))) {
            unset($this->PaxSeat);
        } else {
            $this->PaxSeat = $paxSeat;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return PaxSeat|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\PaxSeat
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return PaxSeat|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\PaxSeat
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return PaxSeat|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\PaxSeat
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return PaxSeat|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\PaxSeat
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return PaxSeat|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\PaxSeat
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param PaxSeat $item
     *
     * @return ArrayOfPaxSeat
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof PaxSeat) {
            throw new InvalidArgumentException(sprintf('The PaxSeat property can only contain items of type \Ntvspa\Big\Booking\Structs\PaxSeat, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string PaxSeat
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'PaxSeat';
    }
}

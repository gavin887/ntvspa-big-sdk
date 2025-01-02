<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\SeatGroupPassengerFee;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSeatGroupPassengerFee Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSeatGroupPassengerFee
 *
 * @subpackage Arrays
 */
class ArrayOfSeatGroupPassengerFee extends AbstractStructArrayBase
{
    /**
     * The SeatGroupPassengerFee
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var SeatGroupPassengerFee[]|null
     */
    protected ?array $SeatGroupPassengerFee = null;

    /**
     * Constructor method for ArrayOfSeatGroupPassengerFee
     *
     * @param SeatGroupPassengerFee[] $seatGroupPassengerFee
     *
     * @uses ArrayOfSeatGroupPassengerFee::setSeatGroupPassengerFee()
     */
    public function __construct(?array $seatGroupPassengerFee = null)
    {
        $this
            ->setSeatGroupPassengerFee($seatGroupPassengerFee);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setSeatGroupPassengerFee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSeatGroupPassengerFee method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSeatGroupPassengerFeeForArrayConstraintFromSetSeatGroupPassengerFee(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSeatGroupPassengerFeeSeatGroupPassengerFeeItem) {
            // validation for constraint: itemType
            if (!$arrayOfSeatGroupPassengerFeeSeatGroupPassengerFeeItem instanceof SeatGroupPassengerFee) {
                $invalidValues[] = is_object($arrayOfSeatGroupPassengerFeeSeatGroupPassengerFeeItem) ? get_class($arrayOfSeatGroupPassengerFeeSeatGroupPassengerFeeItem) : sprintf('%s(%s)', gettype($arrayOfSeatGroupPassengerFeeSeatGroupPassengerFeeItem), var_export($arrayOfSeatGroupPassengerFeeSeatGroupPassengerFeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SeatGroupPassengerFee property can only contain items of type \Ntvspa\Big\Booking\Structs\SeatGroupPassengerFee, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get SeatGroupPassengerFee value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return SeatGroupPassengerFee[]|null
     */
    public function getSeatGroupPassengerFee(): ?array
    {
        return $this->SeatGroupPassengerFee ?? null;
    }

    /**
     * Set SeatGroupPassengerFee value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param SeatGroupPassengerFee[] $seatGroupPassengerFee
     *
     * @return ArrayOfSeatGroupPassengerFee
     * @throws InvalidArgumentException
     */
    public function setSeatGroupPassengerFee(?array $seatGroupPassengerFee = null): self
    {
        // validation for constraint: array
        if ('' !== ($seatGroupPassengerFeeArrayErrorMessage = self::validateSeatGroupPassengerFeeForArrayConstraintFromSetSeatGroupPassengerFee($seatGroupPassengerFee))) {
            throw new InvalidArgumentException($seatGroupPassengerFeeArrayErrorMessage, __LINE__);
        }
        if (is_null($seatGroupPassengerFee) || (is_array($seatGroupPassengerFee) && empty($seatGroupPassengerFee))) {
            unset($this->SeatGroupPassengerFee);
        } else {
            $this->SeatGroupPassengerFee = $seatGroupPassengerFee;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return SeatGroupPassengerFee|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\SeatGroupPassengerFee
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return SeatGroupPassengerFee|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\SeatGroupPassengerFee
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return SeatGroupPassengerFee|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\SeatGroupPassengerFee
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return SeatGroupPassengerFee|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\SeatGroupPassengerFee
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return SeatGroupPassengerFee|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\SeatGroupPassengerFee
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param SeatGroupPassengerFee $item
     *
     * @return ArrayOfSeatGroupPassengerFee
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof SeatGroupPassengerFee) {
            throw new InvalidArgumentException(sprintf('The SeatGroupPassengerFee property can only contain items of type \Ntvspa\Big\Booking\Structs\SeatGroupPassengerFee, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string SeatGroupPassengerFee
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'SeatGroupPassengerFee';
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\PassengerFee;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPassengerFee Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPassengerFee
 *
 * @subpackage Arrays
 */
class ArrayOfPassengerFee extends AbstractStructArrayBase
{
    /**
     * The PassengerFee
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var PassengerFee[]|null
     */
    protected ?array $PassengerFee = null;

    /**
     * Constructor method for ArrayOfPassengerFee
     *
     * @param PassengerFee[] $passengerFee
     *
     * @uses ArrayOfPassengerFee::setPassengerFee()
     */
    public function __construct(?array $passengerFee = null)
    {
        $this
            ->setPassengerFee($passengerFee);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setPassengerFee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassengerFee method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePassengerFeeForArrayConstraintFromSetPassengerFee(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPassengerFeePassengerFeeItem) {
            // validation for constraint: itemType
            if (!$arrayOfPassengerFeePassengerFeeItem instanceof PassengerFee) {
                $invalidValues[] = is_object($arrayOfPassengerFeePassengerFeeItem) ? get_class($arrayOfPassengerFeePassengerFeeItem) : sprintf('%s(%s)', gettype($arrayOfPassengerFeePassengerFeeItem), var_export($arrayOfPassengerFeePassengerFeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PassengerFee property can only contain items of type \Ntvspa\Big\Booking\Structs\PassengerFee, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get PassengerFee value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return PassengerFee[]|null
     */
    public function getPassengerFee(): ?array
    {
        return $this->PassengerFee ?? null;
    }

    /**
     * Set PassengerFee value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param PassengerFee[] $passengerFee
     *
     * @return ArrayOfPassengerFee
     * @throws InvalidArgumentException
     */
    public function setPassengerFee(?array $passengerFee = null): self
    {
        // validation for constraint: array
        if ('' !== ($passengerFeeArrayErrorMessage = self::validatePassengerFeeForArrayConstraintFromSetPassengerFee($passengerFee))) {
            throw new InvalidArgumentException($passengerFeeArrayErrorMessage, __LINE__);
        }
        if (is_null($passengerFee) || (is_array($passengerFee) && empty($passengerFee))) {
            unset($this->PassengerFee);
        } else {
            $this->PassengerFee = $passengerFee;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return PassengerFee|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\PassengerFee
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return PassengerFee|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\PassengerFee
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return PassengerFee|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\PassengerFee
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return PassengerFee|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\PassengerFee
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return PassengerFee|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\PassengerFee
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param PassengerFee $item
     *
     * @return ArrayOfPassengerFee
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof PassengerFee) {
            throw new InvalidArgumentException(sprintf('The PassengerFee property can only contain items of type \Ntvspa\Big\Booking\Structs\PassengerFee, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string PassengerFee
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'PassengerFee';
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Travel\Structs\PassengerInfant;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPassengerInfant Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPassengerInfant
 *
 * @subpackage Arrays
 */
class ArrayOfPassengerInfant extends AbstractStructArrayBase
{
    /**
     * The PassengerInfant
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var PassengerInfant[]|null
     */
    protected ?array $PassengerInfant = null;

    /**
     * Constructor method for ArrayOfPassengerInfant
     *
     * @param PassengerInfant[] $passengerInfant
     *
     * @uses ArrayOfPassengerInfant::setPassengerInfant()
     */
    public function __construct(?array $passengerInfant = null)
    {
        $this
            ->setPassengerInfant($passengerInfant);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setPassengerInfant method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassengerInfant method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePassengerInfantForArrayConstraintFromSetPassengerInfant(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPassengerInfantPassengerInfantItem) {
            // validation for constraint: itemType
            if (!$arrayOfPassengerInfantPassengerInfantItem instanceof PassengerInfant) {
                $invalidValues[] = is_object($arrayOfPassengerInfantPassengerInfantItem) ? get_class($arrayOfPassengerInfantPassengerInfantItem) : sprintf('%s(%s)', gettype($arrayOfPassengerInfantPassengerInfantItem), var_export($arrayOfPassengerInfantPassengerInfantItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PassengerInfant property can only contain items of type \Ntvspa\Big\Travel\Structs\PassengerInfant, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get PassengerInfant value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return PassengerInfant[]|null
     */
    public function getPassengerInfant(): ?array
    {
        return $this->PassengerInfant ?? null;
    }

    /**
     * Set PassengerInfant value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param PassengerInfant[] $passengerInfant
     *
     * @return ArrayOfPassengerInfant
     * @throws InvalidArgumentException
     */
    public function setPassengerInfant(?array $passengerInfant = null): self
    {
        // validation for constraint: array
        if ('' !== ($passengerInfantArrayErrorMessage = self::validatePassengerInfantForArrayConstraintFromSetPassengerInfant($passengerInfant))) {
            throw new InvalidArgumentException($passengerInfantArrayErrorMessage, __LINE__);
        }
        if (is_null($passengerInfant) || (is_array($passengerInfant) && empty($passengerInfant))) {
            unset($this->PassengerInfant);
        } else {
            $this->PassengerInfant = $passengerInfant;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return PassengerInfant|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Travel\Structs\PassengerInfant
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return PassengerInfant|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Travel\Structs\PassengerInfant
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return PassengerInfant|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Travel\Structs\PassengerInfant
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return PassengerInfant|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Travel\Structs\PassengerInfant
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return PassengerInfant|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Travel\Structs\PassengerInfant
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param PassengerInfant $item
     *
     * @return ArrayOfPassengerInfant
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof PassengerInfant) {
            throw new InvalidArgumentException(sprintf('The PassengerInfant property can only contain items of type \Ntvspa\Big\Travel\Structs\PassengerInfant, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string PassengerInfant
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'PassengerInfant';
    }
}

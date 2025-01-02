<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\PassengerSeatPreference;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPassengerSeatPreference Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPassengerSeatPreference
 *
 * @subpackage Arrays
 */
class ArrayOfPassengerSeatPreference extends AbstractStructArrayBase
{
    /**
     * The PassengerSeatPreference
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var PassengerSeatPreference[]|null
     */
    protected ?array $PassengerSeatPreference = null;

    /**
     * Constructor method for ArrayOfPassengerSeatPreference
     *
     * @param PassengerSeatPreference[] $passengerSeatPreference
     *
     * @uses ArrayOfPassengerSeatPreference::setPassengerSeatPreference()
     */
    public function __construct(?array $passengerSeatPreference = null)
    {
        $this
            ->setPassengerSeatPreference($passengerSeatPreference);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setPassengerSeatPreference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassengerSeatPreference method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePassengerSeatPreferenceForArrayConstraintFromSetPassengerSeatPreference(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPassengerSeatPreferencePassengerSeatPreferenceItem) {
            // validation for constraint: itemType
            if (!$arrayOfPassengerSeatPreferencePassengerSeatPreferenceItem instanceof PassengerSeatPreference) {
                $invalidValues[] = is_object($arrayOfPassengerSeatPreferencePassengerSeatPreferenceItem) ? get_class($arrayOfPassengerSeatPreferencePassengerSeatPreferenceItem) : sprintf('%s(%s)', gettype($arrayOfPassengerSeatPreferencePassengerSeatPreferenceItem), var_export($arrayOfPassengerSeatPreferencePassengerSeatPreferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PassengerSeatPreference property can only contain items of type \Ntvspa\Big\Booking\Structs\PassengerSeatPreference, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get PassengerSeatPreference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return PassengerSeatPreference[]|null
     */
    public function getPassengerSeatPreference(): ?array
    {
        return $this->PassengerSeatPreference ?? null;
    }

    /**
     * Set PassengerSeatPreference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param PassengerSeatPreference[] $passengerSeatPreference
     *
     * @return ArrayOfPassengerSeatPreference
     * @throws InvalidArgumentException
     */
    public function setPassengerSeatPreference(?array $passengerSeatPreference = null): self
    {
        // validation for constraint: array
        if ('' !== ($passengerSeatPreferenceArrayErrorMessage = self::validatePassengerSeatPreferenceForArrayConstraintFromSetPassengerSeatPreference($passengerSeatPreference))) {
            throw new InvalidArgumentException($passengerSeatPreferenceArrayErrorMessage, __LINE__);
        }
        if (is_null($passengerSeatPreference) || (is_array($passengerSeatPreference) && empty($passengerSeatPreference))) {
            unset($this->PassengerSeatPreference);
        } else {
            $this->PassengerSeatPreference = $passengerSeatPreference;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return PassengerSeatPreference|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\PassengerSeatPreference
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return PassengerSeatPreference|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\PassengerSeatPreference
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return PassengerSeatPreference|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\PassengerSeatPreference
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return PassengerSeatPreference|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\PassengerSeatPreference
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return PassengerSeatPreference|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\PassengerSeatPreference
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param PassengerSeatPreference $item
     *
     * @return ArrayOfPassengerSeatPreference
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof PassengerSeatPreference) {
            throw new InvalidArgumentException(sprintf('The PassengerSeatPreference property can only contain items of type \Ntvspa\Big\Booking\Structs\PassengerSeatPreference, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string PassengerSeatPreference
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'PassengerSeatPreference';
    }
}

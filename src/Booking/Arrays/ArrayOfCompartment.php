<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\Compartment;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCompartment Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCompartment
 *
 * @subpackage Arrays
 */
class ArrayOfCompartment extends AbstractStructArrayBase
{
    /**
     * The Compartment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Compartment[]|null
     */
    protected ?array $Compartment = null;

    /**
     * Constructor method for ArrayOfCompartment
     *
     * @param Compartment[] $compartment
     *
     * @uses ArrayOfCompartment::setCompartment()
     */
    public function __construct(?array $compartment = null)
    {
        $this
            ->setCompartment($compartment);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setCompartment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCompartment method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCompartmentForArrayConstraintFromSetCompartment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCompartmentCompartmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfCompartmentCompartmentItem instanceof Compartment) {
                $invalidValues[] = is_object($arrayOfCompartmentCompartmentItem) ? get_class($arrayOfCompartmentCompartmentItem) : sprintf('%s(%s)', gettype($arrayOfCompartmentCompartmentItem), var_export($arrayOfCompartmentCompartmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Compartment property can only contain items of type \Ntvspa\Big\Booking\Structs\Compartment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Compartment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Compartment[]|null
     */
    public function getCompartment(): ?array
    {
        return $this->Compartment ?? null;
    }

    /**
     * Set Compartment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Compartment[] $compartment
     *
     * @return ArrayOfCompartment
     * @throws InvalidArgumentException
     */
    public function setCompartment(?array $compartment = null): self
    {
        // validation for constraint: array
        if ('' !== ($compartmentArrayErrorMessage = self::validateCompartmentForArrayConstraintFromSetCompartment($compartment))) {
            throw new InvalidArgumentException($compartmentArrayErrorMessage, __LINE__);
        }
        if (is_null($compartment) || (is_array($compartment) && empty($compartment))) {
            unset($this->Compartment);
        } else {
            $this->Compartment = $compartment;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Compartment|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\Compartment
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Compartment|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\Compartment
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Compartment|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\Compartment
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Compartment|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\Compartment
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Compartment|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\Compartment
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Compartment $item
     *
     * @return ArrayOfCompartment
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Compartment) {
            throw new InvalidArgumentException(sprintf('The Compartment property can only contain items of type \Ntvspa\Big\Booking\Structs\Compartment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Compartment
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Compartment';
    }
}

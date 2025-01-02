<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\Pet;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPet Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPet
 *
 * @subpackage Arrays
 */
class ArrayOfPet extends AbstractStructArrayBase
{
    /**
     * The Pet
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Pet[]|null
     */
    protected ?array $Pet = null;

    /**
     * Constructor method for ArrayOfPet
     *
     * @param Pet[] $pet
     *
     * @uses ArrayOfPet::setPet()
     */
    public function __construct(?array $pet = null)
    {
        $this
            ->setPet($pet);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setPet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPet method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePetForArrayConstraintFromSetPet(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPetPetItem) {
            // validation for constraint: itemType
            if (!$arrayOfPetPetItem instanceof Pet) {
                $invalidValues[] = is_object($arrayOfPetPetItem) ? get_class($arrayOfPetPetItem) : sprintf('%s(%s)', gettype($arrayOfPetPetItem), var_export($arrayOfPetPetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Pet property can only contain items of type \Ntvspa\Big\Booking\Structs\Pet, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Pet value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Pet[]|null
     */
    public function getPet(): ?array
    {
        return $this->Pet ?? null;
    }

    /**
     * Set Pet value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Pet[] $pet
     *
     * @return ArrayOfPet
     * @throws InvalidArgumentException
     */
    public function setPet(?array $pet = null): self
    {
        // validation for constraint: array
        if ('' !== ($petArrayErrorMessage = self::validatePetForArrayConstraintFromSetPet($pet))) {
            throw new InvalidArgumentException($petArrayErrorMessage, __LINE__);
        }
        if (is_null($pet) || (is_array($pet) && empty($pet))) {
            unset($this->Pet);
        } else {
            $this->Pet = $pet;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Pet|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\Pet
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Pet|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\Pet
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Pet|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\Pet
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Pet|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\Pet
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Pet|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\Pet
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Pet $item
     *
     * @return ArrayOfPet
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Pet) {
            throw new InvalidArgumentException(sprintf('The Pet property can only contain items of type \Ntvspa\Big\Booking\Structs\Pet, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Pet
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Pet';
    }
}

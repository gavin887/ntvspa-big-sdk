<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Corporate\Structs\AllowedFare;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAllowedFare Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAllowedFare
 *
 * @subpackage Arrays
 */
class ArrayOfAllowedFare extends AbstractStructArrayBase
{
    /**
     * The AllowedFare
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var AllowedFare[]|null
     */
    protected ?array $AllowedFare = null;

    /**
     * Constructor method for ArrayOfAllowedFare
     *
     * @param AllowedFare[] $allowedFare
     *
     * @uses ArrayOfAllowedFare::setAllowedFare()
     */
    public function __construct(?array $allowedFare = null)
    {
        $this
            ->setAllowedFare($allowedFare);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setAllowedFare method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAllowedFare method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAllowedFareForArrayConstraintFromSetAllowedFare(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAllowedFareAllowedFareItem) {
            // validation for constraint: itemType
            if (!$arrayOfAllowedFareAllowedFareItem instanceof AllowedFare) {
                $invalidValues[] = is_object($arrayOfAllowedFareAllowedFareItem) ? get_class($arrayOfAllowedFareAllowedFareItem) : sprintf('%s(%s)', gettype($arrayOfAllowedFareAllowedFareItem), var_export($arrayOfAllowedFareAllowedFareItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AllowedFare property can only contain items of type \Ntvspa\Big\Corporate\Structs\AllowedFare, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get AllowedFare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return AllowedFare[]|null
     */
    public function getAllowedFare(): ?array
    {
        return $this->AllowedFare ?? null;
    }

    /**
     * Set AllowedFare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param AllowedFare[] $allowedFare
     *
     * @return ArrayOfAllowedFare
     * @throws InvalidArgumentException
     */
    public function setAllowedFare(?array $allowedFare = null): self
    {
        // validation for constraint: array
        if ('' !== ($allowedFareArrayErrorMessage = self::validateAllowedFareForArrayConstraintFromSetAllowedFare($allowedFare))) {
            throw new InvalidArgumentException($allowedFareArrayErrorMessage, __LINE__);
        }
        if (is_null($allowedFare) || (is_array($allowedFare) && empty($allowedFare))) {
            unset($this->AllowedFare);
        } else {
            $this->AllowedFare = $allowedFare;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return AllowedFare|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Corporate\Structs\AllowedFare
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return AllowedFare|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Corporate\Structs\AllowedFare
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return AllowedFare|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Corporate\Structs\AllowedFare
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return AllowedFare|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Corporate\Structs\AllowedFare
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return AllowedFare|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Corporate\Structs\AllowedFare
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param AllowedFare $item
     *
     * @return ArrayOfAllowedFare
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof AllowedFare) {
            throw new InvalidArgumentException(sprintf('The AllowedFare property can only contain items of type \Ntvspa\Big\Corporate\Structs\AllowedFare, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string AllowedFare
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'AllowedFare';
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfanyType Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfanyType
 *
 * @subpackage Arrays
 */
class ArrayOfanyType extends AbstractStructArrayBase
{
    /**
     * The anyType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string[]|null
     */
    protected ?array $anyType = null;

    /**
     * Constructor method for ArrayOfanyType
     *
     * @param string[] $anyType
     *
     * @uses ArrayOfanyType::setAnyType()
     */
    public function __construct(?array $anyType = null)
    {
        $this
            ->setAnyType($anyType);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setAnyType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAnyType method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAnyTypeForArrayConstraintFromSetAnyType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfanyTypeAnyTypeItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfanyTypeAnyTypeItem)) {
                $invalidValues[] = is_object($arrayOfanyTypeAnyTypeItem) ? get_class($arrayOfanyTypeAnyTypeItem) : sprintf('%s(%s)', gettype($arrayOfanyTypeAnyTypeItem), var_export($arrayOfanyTypeAnyTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The anyType property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get anyType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string[]|null
     */
    public function getAnyType(): ?array
    {
        return $this->anyType ?? null;
    }

    /**
     * Set anyType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string[] $anyType
     *
     * @return ArrayOfanyType
     * @throws InvalidArgumentException
     */
    public function setAnyType(?array $anyType = null): self
    {
        // validation for constraint: array
        if ('' !== ($anyTypeArrayErrorMessage = self::validateAnyTypeForArrayConstraintFromSetAnyType($anyType))) {
            throw new InvalidArgumentException($anyTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($anyType) || (is_array($anyType) && empty($anyType))) {
            unset($this->anyType);
        } else {
            $this->anyType = $anyType;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return string|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?string
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return string|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?string
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return string|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?string
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return string|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?string
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return string|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?string
    {
        return parent::offsetGet($offset);
    }

    /**
     * Returns the attribute name
     *
     * @return string anyType
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'anyType';
    }
}

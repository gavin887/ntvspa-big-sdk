<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Product\Structs\CatalogProductAttribute;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCatalogProductAttribute Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCatalogProductAttribute
 *
 * @subpackage Arrays
 */
class ArrayOfCatalogProductAttribute extends AbstractStructArrayBase
{
    /**
     * The CatalogProductAttribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var CatalogProductAttribute[]|null
     */
    protected ?array $CatalogProductAttribute = null;

    /**
     * Constructor method for ArrayOfCatalogProductAttribute
     *
     * @param CatalogProductAttribute[] $catalogProductAttribute
     *
     * @uses ArrayOfCatalogProductAttribute::setCatalogProductAttribute()
     */
    public function __construct(?array $catalogProductAttribute = null)
    {
        $this
            ->setCatalogProductAttribute($catalogProductAttribute);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setCatalogProductAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCatalogProductAttribute method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCatalogProductAttributeForArrayConstraintFromSetCatalogProductAttribute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCatalogProductAttributeCatalogProductAttributeItem) {
            // validation for constraint: itemType
            if (!$arrayOfCatalogProductAttributeCatalogProductAttributeItem instanceof CatalogProductAttribute) {
                $invalidValues[] = is_object($arrayOfCatalogProductAttributeCatalogProductAttributeItem) ? get_class($arrayOfCatalogProductAttributeCatalogProductAttributeItem) : sprintf('%s(%s)', gettype($arrayOfCatalogProductAttributeCatalogProductAttributeItem), var_export($arrayOfCatalogProductAttributeCatalogProductAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CatalogProductAttribute property can only contain items of type \Ntvspa\Big\Product\Structs\CatalogProductAttribute, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get CatalogProductAttribute value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return CatalogProductAttribute[]|null
     */
    public function getCatalogProductAttribute(): ?array
    {
        return $this->CatalogProductAttribute ?? null;
    }

    /**
     * Set CatalogProductAttribute value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param CatalogProductAttribute[] $catalogProductAttribute
     *
     * @return ArrayOfCatalogProductAttribute
     * @throws InvalidArgumentException
     */
    public function setCatalogProductAttribute(?array $catalogProductAttribute = null): self
    {
        // validation for constraint: array
        if ('' !== ($catalogProductAttributeArrayErrorMessage = self::validateCatalogProductAttributeForArrayConstraintFromSetCatalogProductAttribute($catalogProductAttribute))) {
            throw new InvalidArgumentException($catalogProductAttributeArrayErrorMessage, __LINE__);
        }
        if (is_null($catalogProductAttribute) || (is_array($catalogProductAttribute) && empty($catalogProductAttribute))) {
            unset($this->CatalogProductAttribute);
        } else {
            $this->CatalogProductAttribute = $catalogProductAttribute;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return CatalogProductAttribute|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Product\Structs\CatalogProductAttribute
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return CatalogProductAttribute|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Product\Structs\CatalogProductAttribute
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return CatalogProductAttribute|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Product\Structs\CatalogProductAttribute
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return CatalogProductAttribute|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Product\Structs\CatalogProductAttribute
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return CatalogProductAttribute|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Product\Structs\CatalogProductAttribute
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param CatalogProductAttribute $item
     *
     * @return ArrayOfCatalogProductAttribute
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof CatalogProductAttribute) {
            throw new InvalidArgumentException(sprintf('The CatalogProductAttribute property can only contain items of type \Ntvspa\Big\Product\Structs\CatalogProductAttribute, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string CatalogProductAttribute
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'CatalogProductAttribute';
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Travel\Structs\Category;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCategory Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCategory
 *
 * @subpackage Arrays
 */
class ArrayOfCategory extends AbstractStructArrayBase
{
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Category[]|null
     */
    protected ?array $Category = null;

    /**
     * Constructor method for ArrayOfCategory
     *
     * @param Category[] $category
     *
     * @uses ArrayOfCategory::setCategory()
     */
    public function __construct(?array $category = null)
    {
        $this
            ->setCategory($category);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setCategory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategory method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategoryForArrayConstraintFromSetCategory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCategoryCategoryItem) {
            // validation for constraint: itemType
            if (!$arrayOfCategoryCategoryItem instanceof Category) {
                $invalidValues[] = is_object($arrayOfCategoryCategoryItem) ? get_class($arrayOfCategoryCategoryItem) : sprintf('%s(%s)', gettype($arrayOfCategoryCategoryItem), var_export($arrayOfCategoryCategoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Category property can only contain items of type \Ntvspa\Big\Travel\Structs\Category, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Category value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Category[]|null
     */
    public function getCategory(): ?array
    {
        return $this->Category ?? null;
    }

    /**
     * Set Category value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Category[] $category
     *
     * @return ArrayOfCategory
     * @throws InvalidArgumentException
     */
    public function setCategory(?array $category = null): self
    {
        // validation for constraint: array
        if ('' !== ($categoryArrayErrorMessage = self::validateCategoryForArrayConstraintFromSetCategory($category))) {
            throw new InvalidArgumentException($categoryArrayErrorMessage, __LINE__);
        }
        if (is_null($category) || (is_array($category) && empty($category))) {
            unset($this->Category);
        } else {
            $this->Category = $category;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Category|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Travel\Structs\Category
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Category|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Travel\Structs\Category
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Category|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Travel\Structs\Category
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Category|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Travel\Structs\Category
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Category|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Travel\Structs\Category
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Category $item
     *
     * @return ArrayOfCategory
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Category) {
            throw new InvalidArgumentException(sprintf('The Category property can only contain items of type \Ntvspa\Big\Travel\Structs\Category, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Category
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Category';
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Product\Structs\CatalogProductChild;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCatalogProductChild Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCatalogProductChild
 *
 * @subpackage Arrays
 */
class ArrayOfCatalogProductChild extends AbstractStructArrayBase
{
    /**
     * The CatalogProductChild
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var CatalogProductChild[]|null
     */
    protected ?array $CatalogProductChild = null;

    /**
     * Constructor method for ArrayOfCatalogProductChild
     *
     * @param CatalogProductChild[] $catalogProductChild
     *
     * @uses ArrayOfCatalogProductChild::setCatalogProductChild()
     */
    public function __construct(?array $catalogProductChild = null)
    {
        $this
            ->setCatalogProductChild($catalogProductChild);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setCatalogProductChild method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCatalogProductChild method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCatalogProductChildForArrayConstraintFromSetCatalogProductChild(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCatalogProductChildCatalogProductChildItem) {
            // validation for constraint: itemType
            if (!$arrayOfCatalogProductChildCatalogProductChildItem instanceof CatalogProductChild) {
                $invalidValues[] = is_object($arrayOfCatalogProductChildCatalogProductChildItem) ? get_class($arrayOfCatalogProductChildCatalogProductChildItem) : sprintf('%s(%s)', gettype($arrayOfCatalogProductChildCatalogProductChildItem), var_export($arrayOfCatalogProductChildCatalogProductChildItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CatalogProductChild property can only contain items of type \Ntvspa\Big\Product\Structs\CatalogProductChild, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get CatalogProductChild value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return CatalogProductChild[]|null
     */
    public function getCatalogProductChild(): ?array
    {
        return $this->CatalogProductChild ?? null;
    }

    /**
     * Set CatalogProductChild value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param CatalogProductChild[] $catalogProductChild
     *
     * @return ArrayOfCatalogProductChild
     * @throws InvalidArgumentException
     */
    public function setCatalogProductChild(?array $catalogProductChild = null): self
    {
        // validation for constraint: array
        if ('' !== ($catalogProductChildArrayErrorMessage = self::validateCatalogProductChildForArrayConstraintFromSetCatalogProductChild($catalogProductChild))) {
            throw new InvalidArgumentException($catalogProductChildArrayErrorMessage, __LINE__);
        }
        if (is_null($catalogProductChild) || (is_array($catalogProductChild) && empty($catalogProductChild))) {
            unset($this->CatalogProductChild);
        } else {
            $this->CatalogProductChild = $catalogProductChild;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return CatalogProductChild|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Product\Structs\CatalogProductChild
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return CatalogProductChild|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Product\Structs\CatalogProductChild
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return CatalogProductChild|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Product\Structs\CatalogProductChild
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return CatalogProductChild|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Product\Structs\CatalogProductChild
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return CatalogProductChild|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Product\Structs\CatalogProductChild
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param CatalogProductChild $item
     *
     * @return ArrayOfCatalogProductChild
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof CatalogProductChild) {
            throw new InvalidArgumentException(sprintf('The CatalogProductChild property can only contain items of type \Ntvspa\Big\Product\Structs\CatalogProductChild, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string CatalogProductChild
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'CatalogProductChild';
    }
}

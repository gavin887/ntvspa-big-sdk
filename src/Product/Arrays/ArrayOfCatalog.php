<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Product\Structs\Catalog;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCatalog Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCatalog
 *
 * @subpackage Arrays
 */
class ArrayOfCatalog extends AbstractStructArrayBase
{
    /**
     * The Catalog
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Catalog[]|null
     */
    protected ?array $Catalog = null;

    /**
     * Constructor method for ArrayOfCatalog
     *
     * @param Catalog[] $catalog
     *
     * @uses ArrayOfCatalog::setCatalog()
     */
    public function __construct(?array $catalog = null)
    {
        $this
            ->setCatalog($catalog);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setCatalog method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCatalog method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCatalogForArrayConstraintFromSetCatalog(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCatalogCatalogItem) {
            // validation for constraint: itemType
            if (!$arrayOfCatalogCatalogItem instanceof Catalog) {
                $invalidValues[] = is_object($arrayOfCatalogCatalogItem) ? get_class($arrayOfCatalogCatalogItem) : sprintf('%s(%s)', gettype($arrayOfCatalogCatalogItem), var_export($arrayOfCatalogCatalogItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Catalog property can only contain items of type \Ntvspa\Big\Product\Structs\Catalog, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Catalog value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Catalog[]|null
     */
    public function getCatalog(): ?array
    {
        return $this->Catalog ?? null;
    }

    /**
     * Set Catalog value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Catalog[] $catalog
     *
     * @return ArrayOfCatalog
     * @throws InvalidArgumentException
     */
    public function setCatalog(?array $catalog = null): self
    {
        // validation for constraint: array
        if ('' !== ($catalogArrayErrorMessage = self::validateCatalogForArrayConstraintFromSetCatalog($catalog))) {
            throw new InvalidArgumentException($catalogArrayErrorMessage, __LINE__);
        }
        if (is_null($catalog) || (is_array($catalog) && empty($catalog))) {
            unset($this->Catalog);
        } else {
            $this->Catalog = $catalog;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Catalog|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Product\Structs\Catalog
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Catalog|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Product\Structs\Catalog
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Catalog|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Product\Structs\Catalog
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Catalog|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Product\Structs\Catalog
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Catalog|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Product\Structs\Catalog
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Catalog $item
     *
     * @return ArrayOfCatalog
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Catalog) {
            throw new InvalidArgumentException(sprintf('The Catalog property can only contain items of type \Ntvspa\Big\Product\Structs\Catalog, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Catalog
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Catalog';
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Product\Structs\CatalogEligibilityCondition;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCatalogEligibilityCondition Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCatalogEligibilityCondition
 *
 * @subpackage Arrays
 */
class ArrayOfCatalogEligibilityCondition extends AbstractStructArrayBase
{
    /**
     * The CatalogEligibilityCondition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var CatalogEligibilityCondition[]|null
     */
    protected ?array $CatalogEligibilityCondition = null;

    /**
     * Constructor method for ArrayOfCatalogEligibilityCondition
     *
     * @param CatalogEligibilityCondition[] $catalogEligibilityCondition
     *
     * @uses ArrayOfCatalogEligibilityCondition::setCatalogEligibilityCondition()
     */
    public function __construct(?array $catalogEligibilityCondition = null)
    {
        $this
            ->setCatalogEligibilityCondition($catalogEligibilityCondition);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setCatalogEligibilityCondition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCatalogEligibilityCondition method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCatalogEligibilityConditionForArrayConstraintFromSetCatalogEligibilityCondition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCatalogEligibilityConditionCatalogEligibilityConditionItem) {
            // validation for constraint: itemType
            if (!$arrayOfCatalogEligibilityConditionCatalogEligibilityConditionItem instanceof CatalogEligibilityCondition) {
                $invalidValues[] = is_object($arrayOfCatalogEligibilityConditionCatalogEligibilityConditionItem) ? get_class($arrayOfCatalogEligibilityConditionCatalogEligibilityConditionItem) : sprintf('%s(%s)', gettype($arrayOfCatalogEligibilityConditionCatalogEligibilityConditionItem), var_export($arrayOfCatalogEligibilityConditionCatalogEligibilityConditionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CatalogEligibilityCondition property can only contain items of type \Ntvspa\Big\Product\Structs\CatalogEligibilityCondition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get CatalogEligibilityCondition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return CatalogEligibilityCondition[]|null
     */
    public function getCatalogEligibilityCondition(): ?array
    {
        return $this->CatalogEligibilityCondition ?? null;
    }

    /**
     * Set CatalogEligibilityCondition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param CatalogEligibilityCondition[] $catalogEligibilityCondition
     *
     * @return ArrayOfCatalogEligibilityCondition
     * @throws InvalidArgumentException
     */
    public function setCatalogEligibilityCondition(?array $catalogEligibilityCondition = null): self
    {
        // validation for constraint: array
        if ('' !== ($catalogEligibilityConditionArrayErrorMessage = self::validateCatalogEligibilityConditionForArrayConstraintFromSetCatalogEligibilityCondition($catalogEligibilityCondition))) {
            throw new InvalidArgumentException($catalogEligibilityConditionArrayErrorMessage, __LINE__);
        }
        if (is_null($catalogEligibilityCondition) || (is_array($catalogEligibilityCondition) && empty($catalogEligibilityCondition))) {
            unset($this->CatalogEligibilityCondition);
        } else {
            $this->CatalogEligibilityCondition = $catalogEligibilityCondition;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return CatalogEligibilityCondition|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Product\Structs\CatalogEligibilityCondition
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return CatalogEligibilityCondition|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Product\Structs\CatalogEligibilityCondition
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return CatalogEligibilityCondition|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Product\Structs\CatalogEligibilityCondition
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return CatalogEligibilityCondition|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Product\Structs\CatalogEligibilityCondition
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return CatalogEligibilityCondition|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Product\Structs\CatalogEligibilityCondition
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param CatalogEligibilityCondition $item
     *
     * @return ArrayOfCatalogEligibilityCondition
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof CatalogEligibilityCondition) {
            throw new InvalidArgumentException(sprintf('The CatalogEligibilityCondition property can only contain items of type \Ntvspa\Big\Product\Structs\CatalogEligibilityCondition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string CatalogEligibilityCondition
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'CatalogEligibilityCondition';
    }
}

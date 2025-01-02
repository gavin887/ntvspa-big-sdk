<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Product\Structs\Asset;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAsset Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAsset
 *
 * @subpackage Arrays
 */
class ArrayOfAsset extends AbstractStructArrayBase
{
    /**
     * The Asset
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Asset[]|null
     */
    protected ?array $Asset = null;

    /**
     * Constructor method for ArrayOfAsset
     *
     * @param Asset[] $asset
     *
     * @uses ArrayOfAsset::setAsset()
     */
    public function __construct(?array $asset = null)
    {
        $this
            ->setAsset($asset);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setAsset method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAsset method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAssetForArrayConstraintFromSetAsset(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAssetAssetItem) {
            // validation for constraint: itemType
            if (!$arrayOfAssetAssetItem instanceof Asset) {
                $invalidValues[] = is_object($arrayOfAssetAssetItem) ? get_class($arrayOfAssetAssetItem) : sprintf('%s(%s)', gettype($arrayOfAssetAssetItem), var_export($arrayOfAssetAssetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Asset property can only contain items of type \Ntvspa\Big\Product\Structs\Asset, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Asset value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Asset[]|null
     */
    public function getAsset(): ?array
    {
        return $this->Asset ?? null;
    }

    /**
     * Set Asset value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Asset[] $asset
     *
     * @return ArrayOfAsset
     * @throws InvalidArgumentException
     */
    public function setAsset(?array $asset = null): self
    {
        // validation for constraint: array
        if ('' !== ($assetArrayErrorMessage = self::validateAssetForArrayConstraintFromSetAsset($asset))) {
            throw new InvalidArgumentException($assetArrayErrorMessage, __LINE__);
        }
        if (is_null($asset) || (is_array($asset) && empty($asset))) {
            unset($this->Asset);
        } else {
            $this->Asset = $asset;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Asset|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Product\Structs\Asset
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Asset|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Product\Structs\Asset
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Asset|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Product\Structs\Asset
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Asset|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Product\Structs\Asset
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Asset|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Product\Structs\Asset
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Asset $item
     *
     * @return ArrayOfAsset
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Asset) {
            throw new InvalidArgumentException(sprintf('The Asset property can only contain items of type \Ntvspa\Big\Product\Structs\Asset, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Asset
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Asset';
    }
}

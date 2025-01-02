<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\FareLockInfoChoiceData;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFareLockInfoChoiceData Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFareLockInfoChoiceData
 *
 * @subpackage Arrays
 */
class ArrayOfFareLockInfoChoiceData extends AbstractStructArrayBase
{
    /**
     * The FareLockInfoChoiceData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var FareLockInfoChoiceData[]|null
     */
    protected ?array $FareLockInfoChoiceData = null;

    /**
     * Constructor method for ArrayOfFareLockInfoChoiceData
     *
     * @param FareLockInfoChoiceData[] $fareLockInfoChoiceData
     *
     * @uses ArrayOfFareLockInfoChoiceData::setFareLockInfoChoiceData()
     */
    public function __construct(?array $fareLockInfoChoiceData = null)
    {
        $this
            ->setFareLockInfoChoiceData($fareLockInfoChoiceData);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setFareLockInfoChoiceData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareLockInfoChoiceData method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareLockInfoChoiceDataForArrayConstraintFromSetFareLockInfoChoiceData(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFareLockInfoChoiceDataFareLockInfoChoiceDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfFareLockInfoChoiceDataFareLockInfoChoiceDataItem instanceof FareLockInfoChoiceData) {
                $invalidValues[] = is_object($arrayOfFareLockInfoChoiceDataFareLockInfoChoiceDataItem) ? get_class($arrayOfFareLockInfoChoiceDataFareLockInfoChoiceDataItem) : sprintf('%s(%s)', gettype($arrayOfFareLockInfoChoiceDataFareLockInfoChoiceDataItem), var_export($arrayOfFareLockInfoChoiceDataFareLockInfoChoiceDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareLockInfoChoiceData property can only contain items of type \Ntvspa\Big\Booking\Structs\FareLockInfoChoiceData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get FareLockInfoChoiceData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return FareLockInfoChoiceData[]|null
     */
    public function getFareLockInfoChoiceData(): ?array
    {
        return $this->FareLockInfoChoiceData ?? null;
    }

    /**
     * Set FareLockInfoChoiceData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param FareLockInfoChoiceData[] $fareLockInfoChoiceData
     *
     * @return ArrayOfFareLockInfoChoiceData
     * @throws InvalidArgumentException
     */
    public function setFareLockInfoChoiceData(?array $fareLockInfoChoiceData = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareLockInfoChoiceDataArrayErrorMessage = self::validateFareLockInfoChoiceDataForArrayConstraintFromSetFareLockInfoChoiceData($fareLockInfoChoiceData))) {
            throw new InvalidArgumentException($fareLockInfoChoiceDataArrayErrorMessage, __LINE__);
        }
        if (is_null($fareLockInfoChoiceData) || (is_array($fareLockInfoChoiceData) && empty($fareLockInfoChoiceData))) {
            unset($this->FareLockInfoChoiceData);
        } else {
            $this->FareLockInfoChoiceData = $fareLockInfoChoiceData;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return FareLockInfoChoiceData|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\FareLockInfoChoiceData
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return FareLockInfoChoiceData|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\FareLockInfoChoiceData
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return FareLockInfoChoiceData|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\FareLockInfoChoiceData
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return FareLockInfoChoiceData|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\FareLockInfoChoiceData
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return FareLockInfoChoiceData|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\FareLockInfoChoiceData
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param FareLockInfoChoiceData $item
     *
     * @return ArrayOfFareLockInfoChoiceData
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof FareLockInfoChoiceData) {
            throw new InvalidArgumentException(sprintf('The FareLockInfoChoiceData property can only contain items of type \Ntvspa\Big\Booking\Structs\FareLockInfoChoiceData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string FareLockInfoChoiceData
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'FareLockInfoChoiceData';
    }
}

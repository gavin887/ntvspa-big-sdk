<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Corporate\Structs\BlackTrain;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBlackTrain Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBlackTrain
 *
 * @subpackage Arrays
 */
class ArrayOfBlackTrain extends AbstractStructArrayBase
{
    /**
     * The BlackTrain
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var BlackTrain[]|null
     */
    protected ?array $BlackTrain = null;

    /**
     * Constructor method for ArrayOfBlackTrain
     *
     * @param BlackTrain[] $blackTrain
     *
     * @uses ArrayOfBlackTrain::setBlackTrain()
     */
    public function __construct(?array $blackTrain = null)
    {
        $this
            ->setBlackTrain($blackTrain);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setBlackTrain method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBlackTrain method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBlackTrainForArrayConstraintFromSetBlackTrain(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBlackTrainBlackTrainItem) {
            // validation for constraint: itemType
            if (!$arrayOfBlackTrainBlackTrainItem instanceof BlackTrain) {
                $invalidValues[] = is_object($arrayOfBlackTrainBlackTrainItem) ? get_class($arrayOfBlackTrainBlackTrainItem) : sprintf('%s(%s)', gettype($arrayOfBlackTrainBlackTrainItem), var_export($arrayOfBlackTrainBlackTrainItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BlackTrain property can only contain items of type \Ntvspa\Big\Corporate\Structs\BlackTrain, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get BlackTrain value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return BlackTrain[]|null
     */
    public function getBlackTrain(): ?array
    {
        return $this->BlackTrain ?? null;
    }

    /**
     * Set BlackTrain value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param BlackTrain[] $blackTrain
     *
     * @return ArrayOfBlackTrain
     * @throws InvalidArgumentException
     */
    public function setBlackTrain(?array $blackTrain = null): self
    {
        // validation for constraint: array
        if ('' !== ($blackTrainArrayErrorMessage = self::validateBlackTrainForArrayConstraintFromSetBlackTrain($blackTrain))) {
            throw new InvalidArgumentException($blackTrainArrayErrorMessage, __LINE__);
        }
        if (is_null($blackTrain) || (is_array($blackTrain) && empty($blackTrain))) {
            unset($this->BlackTrain);
        } else {
            $this->BlackTrain = $blackTrain;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return BlackTrain|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Corporate\Structs\BlackTrain
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return BlackTrain|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Corporate\Structs\BlackTrain
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return BlackTrain|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Corporate\Structs\BlackTrain
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return BlackTrain|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Corporate\Structs\BlackTrain
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return BlackTrain|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Corporate\Structs\BlackTrain
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param BlackTrain $item
     *
     * @return ArrayOfBlackTrain
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof BlackTrain) {
            throw new InvalidArgumentException(sprintf('The BlackTrain property can only contain items of type \Ntvspa\Big\Corporate\Structs\BlackTrain, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string BlackTrain
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'BlackTrain';
    }
}

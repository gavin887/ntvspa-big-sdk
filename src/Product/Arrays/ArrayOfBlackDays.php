<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Product\Structs\BlackDays;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBlackDays Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBlackDays
 *
 * @subpackage Arrays
 */
class ArrayOfBlackDays extends AbstractStructArrayBase
{
    /**
     * The BlackDays
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var BlackDays[]|null
     */
    protected ?array $BlackDays = null;

    /**
     * Constructor method for ArrayOfBlackDays
     *
     * @param BlackDays[] $blackDays
     *
     * @uses ArrayOfBlackDays::setBlackDays()
     */
    public function __construct(?array $blackDays = null)
    {
        $this
            ->setBlackDays($blackDays);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setBlackDays method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBlackDays method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBlackDaysForArrayConstraintFromSetBlackDays(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBlackDaysBlackDaysItem) {
            // validation for constraint: itemType
            if (!$arrayOfBlackDaysBlackDaysItem instanceof BlackDays) {
                $invalidValues[] = is_object($arrayOfBlackDaysBlackDaysItem) ? get_class($arrayOfBlackDaysBlackDaysItem) : sprintf('%s(%s)', gettype($arrayOfBlackDaysBlackDaysItem), var_export($arrayOfBlackDaysBlackDaysItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BlackDays property can only contain items of type \Ntvspa\Big\Product\Structs\BlackDays, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get BlackDays value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return BlackDays[]|null
     */
    public function getBlackDays(): ?array
    {
        return $this->BlackDays ?? null;
    }

    /**
     * Set BlackDays value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param BlackDays[] $blackDays
     *
     * @return ArrayOfBlackDays
     * @throws InvalidArgumentException
     */
    public function setBlackDays(?array $blackDays = null): self
    {
        // validation for constraint: array
        if ('' !== ($blackDaysArrayErrorMessage = self::validateBlackDaysForArrayConstraintFromSetBlackDays($blackDays))) {
            throw new InvalidArgumentException($blackDaysArrayErrorMessage, __LINE__);
        }
        if (is_null($blackDays) || (is_array($blackDays) && empty($blackDays))) {
            unset($this->BlackDays);
        } else {
            $this->BlackDays = $blackDays;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return BlackDays|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Product\Structs\BlackDays
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return BlackDays|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Product\Structs\BlackDays
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return BlackDays|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Product\Structs\BlackDays
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return BlackDays|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Product\Structs\BlackDays
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return BlackDays|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Product\Structs\BlackDays
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param BlackDays $item
     *
     * @return ArrayOfBlackDays
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof BlackDays) {
            throw new InvalidArgumentException(sprintf('The BlackDays property can only contain items of type \Ntvspa\Big\Product\Structs\BlackDays, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string BlackDays
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'BlackDays';
    }
}

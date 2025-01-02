<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfshort Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfshort
 *
 * @subpackage Arrays
 */
class ArrayOfshort extends AbstractStructArrayBase
{
    /**
     * The short
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     *
     * @var int[]
     */
    protected ?array $short = null;

    /**
     * Constructor method for ArrayOfshort
     *
     * @param int[] $short
     *
     * @uses ArrayOfshort::setShort()
     */
    public function __construct(?array $short = null)
    {
        $this
            ->setShort($short);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setShort method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShort method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShortForArrayConstraintFromSetShort(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfshortShortItem) {
            // validation for constraint: itemType
            if (!(is_int($arrayOfshortShortItem) || ctype_digit($arrayOfshortShortItem))) {
                $invalidValues[] = is_object($arrayOfshortShortItem) ? get_class($arrayOfshortShortItem) : sprintf('%s(%s)', gettype($arrayOfshortShortItem), var_export($arrayOfshortShortItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The short property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get short value
     *
     * @return int[]
     */
    public function getShort(): ?array
    {
        return $this->short;
    }

    /**
     * Set short value
     *
     * @param int[] $short
     *
     * @return ArrayOfshort
     * @throws InvalidArgumentException
     */
    public function setShort(?array $short = null): self
    {
        // validation for constraint: array
        if ('' !== ($shortArrayErrorMessage = self::validateShortForArrayConstraintFromSetShort($short))) {
            throw new InvalidArgumentException($shortArrayErrorMessage, __LINE__);
        }
        $this->short = $short;

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return int|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?int
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return int|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?int
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return int|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?int
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return int|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?int
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return int|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?int
    {
        return parent::offsetGet($offset);
    }

    /**
     * Returns the attribute name
     *
     * @return string short
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'short';
    }
}

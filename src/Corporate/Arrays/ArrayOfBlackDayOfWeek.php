<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Corporate\Structs\BlackDayOfWeek;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBlackDayOfWeek Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBlackDayOfWeek
 *
 * @subpackage Arrays
 */
class ArrayOfBlackDayOfWeek extends AbstractStructArrayBase
{
    /**
     * The BlackDayOfWeek
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var BlackDayOfWeek[]|null
     */
    protected ?array $BlackDayOfWeek = null;

    /**
     * Constructor method for ArrayOfBlackDayOfWeek
     *
     * @param BlackDayOfWeek[] $blackDayOfWeek
     *
     * @uses ArrayOfBlackDayOfWeek::setBlackDayOfWeek()
     */
    public function __construct(?array $blackDayOfWeek = null)
    {
        $this
            ->setBlackDayOfWeek($blackDayOfWeek);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setBlackDayOfWeek method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBlackDayOfWeek method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBlackDayOfWeekForArrayConstraintFromSetBlackDayOfWeek(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBlackDayOfWeekBlackDayOfWeekItem) {
            // validation for constraint: itemType
            if (!$arrayOfBlackDayOfWeekBlackDayOfWeekItem instanceof BlackDayOfWeek) {
                $invalidValues[] = is_object($arrayOfBlackDayOfWeekBlackDayOfWeekItem) ? get_class($arrayOfBlackDayOfWeekBlackDayOfWeekItem) : sprintf('%s(%s)', gettype($arrayOfBlackDayOfWeekBlackDayOfWeekItem), var_export($arrayOfBlackDayOfWeekBlackDayOfWeekItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BlackDayOfWeek property can only contain items of type \Ntvspa\Big\Corporate\Structs\BlackDayOfWeek, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get BlackDayOfWeek value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return BlackDayOfWeek[]|null
     */
    public function getBlackDayOfWeek(): ?array
    {
        return $this->BlackDayOfWeek ?? null;
    }

    /**
     * Set BlackDayOfWeek value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param BlackDayOfWeek[] $blackDayOfWeek
     *
     * @return ArrayOfBlackDayOfWeek
     * @throws InvalidArgumentException
     */
    public function setBlackDayOfWeek(?array $blackDayOfWeek = null): self
    {
        // validation for constraint: array
        if ('' !== ($blackDayOfWeekArrayErrorMessage = self::validateBlackDayOfWeekForArrayConstraintFromSetBlackDayOfWeek($blackDayOfWeek))) {
            throw new InvalidArgumentException($blackDayOfWeekArrayErrorMessage, __LINE__);
        }
        if (is_null($blackDayOfWeek) || (is_array($blackDayOfWeek) && empty($blackDayOfWeek))) {
            unset($this->BlackDayOfWeek);
        } else {
            $this->BlackDayOfWeek = $blackDayOfWeek;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return BlackDayOfWeek|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Corporate\Structs\BlackDayOfWeek
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return BlackDayOfWeek|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Corporate\Structs\BlackDayOfWeek
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return BlackDayOfWeek|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Corporate\Structs\BlackDayOfWeek
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return BlackDayOfWeek|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Corporate\Structs\BlackDayOfWeek
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return BlackDayOfWeek|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Corporate\Structs\BlackDayOfWeek
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param BlackDayOfWeek $item
     *
     * @return ArrayOfBlackDayOfWeek
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof BlackDayOfWeek) {
            throw new InvalidArgumentException(sprintf('The BlackDayOfWeek property can only contain items of type \Ntvspa\Big\Corporate\Structs\BlackDayOfWeek, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string BlackDayOfWeek
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'BlackDayOfWeek';
    }
}

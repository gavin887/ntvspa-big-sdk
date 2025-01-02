<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Corporate\Structs\BlackPeriodPurchase;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBlackPeriodPurchase Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBlackPeriodPurchase
 *
 * @subpackage Arrays
 */
class ArrayOfBlackPeriodPurchase extends AbstractStructArrayBase
{
    /**
     * The BlackPeriodPurchase
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var BlackPeriodPurchase[]|null
     */
    protected ?array $BlackPeriodPurchase = null;

    /**
     * Constructor method for ArrayOfBlackPeriodPurchase
     *
     * @param BlackPeriodPurchase[] $blackPeriodPurchase
     *
     * @uses ArrayOfBlackPeriodPurchase::setBlackPeriodPurchase()
     */
    public function __construct(?array $blackPeriodPurchase = null)
    {
        $this
            ->setBlackPeriodPurchase($blackPeriodPurchase);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setBlackPeriodPurchase method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBlackPeriodPurchase method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBlackPeriodPurchaseForArrayConstraintFromSetBlackPeriodPurchase(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBlackPeriodPurchaseBlackPeriodPurchaseItem) {
            // validation for constraint: itemType
            if (!$arrayOfBlackPeriodPurchaseBlackPeriodPurchaseItem instanceof BlackPeriodPurchase) {
                $invalidValues[] = is_object($arrayOfBlackPeriodPurchaseBlackPeriodPurchaseItem) ? get_class($arrayOfBlackPeriodPurchaseBlackPeriodPurchaseItem) : sprintf('%s(%s)', gettype($arrayOfBlackPeriodPurchaseBlackPeriodPurchaseItem), var_export($arrayOfBlackPeriodPurchaseBlackPeriodPurchaseItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BlackPeriodPurchase property can only contain items of type \Ntvspa\Big\Corporate\Structs\BlackPeriodPurchase, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get BlackPeriodPurchase value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return BlackPeriodPurchase[]|null
     */
    public function getBlackPeriodPurchase(): ?array
    {
        return $this->BlackPeriodPurchase ?? null;
    }

    /**
     * Set BlackPeriodPurchase value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param BlackPeriodPurchase[] $blackPeriodPurchase
     *
     * @return ArrayOfBlackPeriodPurchase
     * @throws InvalidArgumentException
     */
    public function setBlackPeriodPurchase(?array $blackPeriodPurchase = null): self
    {
        // validation for constraint: array
        if ('' !== ($blackPeriodPurchaseArrayErrorMessage = self::validateBlackPeriodPurchaseForArrayConstraintFromSetBlackPeriodPurchase($blackPeriodPurchase))) {
            throw new InvalidArgumentException($blackPeriodPurchaseArrayErrorMessage, __LINE__);
        }
        if (is_null($blackPeriodPurchase) || (is_array($blackPeriodPurchase) && empty($blackPeriodPurchase))) {
            unset($this->BlackPeriodPurchase);
        } else {
            $this->BlackPeriodPurchase = $blackPeriodPurchase;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return BlackPeriodPurchase|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Corporate\Structs\BlackPeriodPurchase
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return BlackPeriodPurchase|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Corporate\Structs\BlackPeriodPurchase
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return BlackPeriodPurchase|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Corporate\Structs\BlackPeriodPurchase
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return BlackPeriodPurchase|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Corporate\Structs\BlackPeriodPurchase
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return BlackPeriodPurchase|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Corporate\Structs\BlackPeriodPurchase
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param BlackPeriodPurchase $item
     *
     * @return ArrayOfBlackPeriodPurchase
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof BlackPeriodPurchase) {
            throw new InvalidArgumentException(sprintf('The BlackPeriodPurchase property can only contain items of type \Ntvspa\Big\Corporate\Structs\BlackPeriodPurchase, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string BlackPeriodPurchase
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'BlackPeriodPurchase';
    }
}

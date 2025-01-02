<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Corporate\Structs\BlackMarket;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBlackMarket Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBlackMarket
 *
 * @subpackage Arrays
 */
class ArrayOfBlackMarket extends AbstractStructArrayBase
{
    /**
     * The BlackMarket
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var BlackMarket[]|null
     */
    protected ?array $BlackMarket = null;

    /**
     * Constructor method for ArrayOfBlackMarket
     *
     * @param BlackMarket[] $blackMarket
     *
     * @uses ArrayOfBlackMarket::setBlackMarket()
     */
    public function __construct(?array $blackMarket = null)
    {
        $this
            ->setBlackMarket($blackMarket);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setBlackMarket method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBlackMarket method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBlackMarketForArrayConstraintFromSetBlackMarket(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBlackMarketBlackMarketItem) {
            // validation for constraint: itemType
            if (!$arrayOfBlackMarketBlackMarketItem instanceof BlackMarket) {
                $invalidValues[] = is_object($arrayOfBlackMarketBlackMarketItem) ? get_class($arrayOfBlackMarketBlackMarketItem) : sprintf('%s(%s)', gettype($arrayOfBlackMarketBlackMarketItem), var_export($arrayOfBlackMarketBlackMarketItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BlackMarket property can only contain items of type \Ntvspa\Big\Corporate\Structs\BlackMarket, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get BlackMarket value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return BlackMarket[]|null
     */
    public function getBlackMarket(): ?array
    {
        return $this->BlackMarket ?? null;
    }

    /**
     * Set BlackMarket value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param BlackMarket[] $blackMarket
     *
     * @return ArrayOfBlackMarket
     * @throws InvalidArgumentException
     */
    public function setBlackMarket(?array $blackMarket = null): self
    {
        // validation for constraint: array
        if ('' !== ($blackMarketArrayErrorMessage = self::validateBlackMarketForArrayConstraintFromSetBlackMarket($blackMarket))) {
            throw new InvalidArgumentException($blackMarketArrayErrorMessage, __LINE__);
        }
        if (is_null($blackMarket) || (is_array($blackMarket) && empty($blackMarket))) {
            unset($this->BlackMarket);
        } else {
            $this->BlackMarket = $blackMarket;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return BlackMarket|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Corporate\Structs\BlackMarket
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return BlackMarket|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Corporate\Structs\BlackMarket
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return BlackMarket|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Corporate\Structs\BlackMarket
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return BlackMarket|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Corporate\Structs\BlackMarket
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return BlackMarket|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Corporate\Structs\BlackMarket
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param BlackMarket $item
     *
     * @return ArrayOfBlackMarket
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof BlackMarket) {
            throw new InvalidArgumentException(sprintf('The BlackMarket property can only contain items of type \Ntvspa\Big\Corporate\Structs\BlackMarket, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string BlackMarket
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'BlackMarket';
    }
}

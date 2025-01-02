<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Corporate\Structs\Market;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMarket Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfMarket
 *
 * @subpackage Arrays
 */
class ArrayOfMarket extends AbstractStructArrayBase
{
    /**
     * The Market
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Market[]|null
     */
    protected ?array $Market = null;

    /**
     * Constructor method for ArrayOfMarket
     *
     * @param Market[] $market
     *
     * @uses ArrayOfMarket::setMarket()
     */
    public function __construct(?array $market = null)
    {
        $this
            ->setMarket($market);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setMarket method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMarket method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMarketForArrayConstraintFromSetMarket(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfMarketMarketItem) {
            // validation for constraint: itemType
            if (!$arrayOfMarketMarketItem instanceof Market) {
                $invalidValues[] = is_object($arrayOfMarketMarketItem) ? get_class($arrayOfMarketMarketItem) : sprintf('%s(%s)', gettype($arrayOfMarketMarketItem), var_export($arrayOfMarketMarketItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Market property can only contain items of type \Ntvspa\Big\Corporate\Structs\Market, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Market value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Market[]|null
     */
    public function getMarket(): ?array
    {
        return $this->Market ?? null;
    }

    /**
     * Set Market value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Market[] $market
     *
     * @return ArrayOfMarket
     * @throws InvalidArgumentException
     */
    public function setMarket(?array $market = null): self
    {
        // validation for constraint: array
        if ('' !== ($marketArrayErrorMessage = self::validateMarketForArrayConstraintFromSetMarket($market))) {
            throw new InvalidArgumentException($marketArrayErrorMessage, __LINE__);
        }
        if (is_null($market) || (is_array($market) && empty($market))) {
            unset($this->Market);
        } else {
            $this->Market = $market;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Market|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Corporate\Structs\Market
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Market|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Corporate\Structs\Market
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Market|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Corporate\Structs\Market
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Market|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Corporate\Structs\Market
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Market|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Corporate\Structs\Market
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Market $item
     *
     * @return ArrayOfMarket
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Market) {
            throw new InvalidArgumentException(sprintf('The Market property can only contain items of type \Ntvspa\Big\Corporate\Structs\Market, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Market
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Market';
    }
}

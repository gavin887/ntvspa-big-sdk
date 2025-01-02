<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\JourneyDateMarket;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfJourneyDateMarket Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfJourneyDateMarket
 *
 * @subpackage Arrays
 */
class ArrayOfJourneyDateMarket extends AbstractStructArrayBase
{
    /**
     * The JourneyDateMarket
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var JourneyDateMarket[]|null
     */
    protected ?array $JourneyDateMarket = null;

    /**
     * Constructor method for ArrayOfJourneyDateMarket
     *
     * @param JourneyDateMarket[] $journeyDateMarket
     *
     * @uses ArrayOfJourneyDateMarket::setJourneyDateMarket()
     */
    public function __construct(?array $journeyDateMarket = null)
    {
        $this
            ->setJourneyDateMarket($journeyDateMarket);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setJourneyDateMarket method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJourneyDateMarket method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJourneyDateMarketForArrayConstraintFromSetJourneyDateMarket(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfJourneyDateMarketJourneyDateMarketItem) {
            // validation for constraint: itemType
            if (!$arrayOfJourneyDateMarketJourneyDateMarketItem instanceof JourneyDateMarket) {
                $invalidValues[] = is_object($arrayOfJourneyDateMarketJourneyDateMarketItem) ? get_class($arrayOfJourneyDateMarketJourneyDateMarketItem) : sprintf('%s(%s)', gettype($arrayOfJourneyDateMarketJourneyDateMarketItem), var_export($arrayOfJourneyDateMarketJourneyDateMarketItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The JourneyDateMarket property can only contain items of type \Ntvspa\Big\Booking\Structs\JourneyDateMarket, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get JourneyDateMarket value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return JourneyDateMarket[]|null
     */
    public function getJourneyDateMarket(): ?array
    {
        return $this->JourneyDateMarket ?? null;
    }

    /**
     * Set JourneyDateMarket value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param JourneyDateMarket[] $journeyDateMarket
     *
     * @return ArrayOfJourneyDateMarket
     * @throws InvalidArgumentException
     */
    public function setJourneyDateMarket(?array $journeyDateMarket = null): self
    {
        // validation for constraint: array
        if ('' !== ($journeyDateMarketArrayErrorMessage = self::validateJourneyDateMarketForArrayConstraintFromSetJourneyDateMarket($journeyDateMarket))) {
            throw new InvalidArgumentException($journeyDateMarketArrayErrorMessage, __LINE__);
        }
        if (is_null($journeyDateMarket) || (is_array($journeyDateMarket) && empty($journeyDateMarket))) {
            unset($this->JourneyDateMarket);
        } else {
            $this->JourneyDateMarket = $journeyDateMarket;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return JourneyDateMarket|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\JourneyDateMarket
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return JourneyDateMarket|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\JourneyDateMarket
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return JourneyDateMarket|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\JourneyDateMarket
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return JourneyDateMarket|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\JourneyDateMarket
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return JourneyDateMarket|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\JourneyDateMarket
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param JourneyDateMarket $item
     *
     * @return ArrayOfJourneyDateMarket
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof JourneyDateMarket) {
            throw new InvalidArgumentException(sprintf('The JourneyDateMarket property can only contain items of type \Ntvspa\Big\Booking\Structs\JourneyDateMarket, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string JourneyDateMarket
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'JourneyDateMarket';
    }
}

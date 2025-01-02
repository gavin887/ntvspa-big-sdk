<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\JourneyMarket;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfJourneyMarket Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfJourneyMarket
 *
 * @subpackage Arrays
 */
class ArrayOfJourneyMarket extends AbstractStructArrayBase
{
    /**
     * The JourneyMarket
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var JourneyMarket[]|null
     */
    protected ?array $JourneyMarket = null;

    /**
     * Constructor method for ArrayOfJourneyMarket
     *
     * @param JourneyMarket[] $journeyMarket
     *
     * @uses ArrayOfJourneyMarket::setJourneyMarket()
     */
    public function __construct(?array $journeyMarket = null)
    {
        $this
            ->setJourneyMarket($journeyMarket);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setJourneyMarket method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJourneyMarket method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJourneyMarketForArrayConstraintFromSetJourneyMarket(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfJourneyMarketJourneyMarketItem) {
            // validation for constraint: itemType
            if (!$arrayOfJourneyMarketJourneyMarketItem instanceof JourneyMarket) {
                $invalidValues[] = is_object($arrayOfJourneyMarketJourneyMarketItem) ? get_class($arrayOfJourneyMarketJourneyMarketItem) : sprintf('%s(%s)', gettype($arrayOfJourneyMarketJourneyMarketItem), var_export($arrayOfJourneyMarketJourneyMarketItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The JourneyMarket property can only contain items of type \Ntvspa\Big\Booking\Structs\JourneyMarket, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get JourneyMarket value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return JourneyMarket[]|null
     */
    public function getJourneyMarket(): ?array
    {
        return $this->JourneyMarket ?? null;
    }

    /**
     * Set JourneyMarket value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param JourneyMarket[] $journeyMarket
     *
     * @return ArrayOfJourneyMarket
     * @throws InvalidArgumentException
     */
    public function setJourneyMarket(?array $journeyMarket = null): self
    {
        // validation for constraint: array
        if ('' !== ($journeyMarketArrayErrorMessage = self::validateJourneyMarketForArrayConstraintFromSetJourneyMarket($journeyMarket))) {
            throw new InvalidArgumentException($journeyMarketArrayErrorMessage, __LINE__);
        }
        if (is_null($journeyMarket) || (is_array($journeyMarket) && empty($journeyMarket))) {
            unset($this->JourneyMarket);
        } else {
            $this->JourneyMarket = $journeyMarket;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return JourneyMarket|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\JourneyMarket
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return JourneyMarket|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\JourneyMarket
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return JourneyMarket|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\JourneyMarket
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return JourneyMarket|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\JourneyMarket
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return JourneyMarket|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\JourneyMarket
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param JourneyMarket $item
     *
     * @return ArrayOfJourneyMarket
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof JourneyMarket) {
            throw new InvalidArgumentException(sprintf('The JourneyMarket property can only contain items of type \Ntvspa\Big\Booking\Structs\JourneyMarket, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string JourneyMarket
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'JourneyMarket';
    }
}

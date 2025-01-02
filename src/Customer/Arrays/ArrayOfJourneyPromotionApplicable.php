<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Customer\Structs\JourneyPromotionApplicable;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfJourneyPromotionApplicable Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfJourneyPromotionApplicable
 *
 * @subpackage Arrays
 */
class ArrayOfJourneyPromotionApplicable extends AbstractStructArrayBase
{
    /**
     * The JourneyPromotionApplicable
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var JourneyPromotionApplicable[]|null
     */
    protected ?array $JourneyPromotionApplicable = null;

    /**
     * Constructor method for ArrayOfJourneyPromotionApplicable
     *
     * @param JourneyPromotionApplicable[] $journeyPromotionApplicable
     *
     * @uses ArrayOfJourneyPromotionApplicable::setJourneyPromotionApplicable()
     */
    public function __construct(?array $journeyPromotionApplicable = null)
    {
        $this
            ->setJourneyPromotionApplicable($journeyPromotionApplicable);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setJourneyPromotionApplicable method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJourneyPromotionApplicable method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJourneyPromotionApplicableForArrayConstraintFromSetJourneyPromotionApplicable(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfJourneyPromotionApplicableJourneyPromotionApplicableItem) {
            // validation for constraint: itemType
            if (!$arrayOfJourneyPromotionApplicableJourneyPromotionApplicableItem instanceof JourneyPromotionApplicable) {
                $invalidValues[] = is_object($arrayOfJourneyPromotionApplicableJourneyPromotionApplicableItem) ? get_class($arrayOfJourneyPromotionApplicableJourneyPromotionApplicableItem) : sprintf('%s(%s)', gettype($arrayOfJourneyPromotionApplicableJourneyPromotionApplicableItem), var_export($arrayOfJourneyPromotionApplicableJourneyPromotionApplicableItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The JourneyPromotionApplicable property can only contain items of type \Ntvspa\Big\Customer\Structs\JourneyPromotionApplicable, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get JourneyPromotionApplicable value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return JourneyPromotionApplicable[]|null
     */
    public function getJourneyPromotionApplicable(): ?array
    {
        return $this->JourneyPromotionApplicable ?? null;
    }

    /**
     * Set JourneyPromotionApplicable value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param JourneyPromotionApplicable[] $journeyPromotionApplicable
     *
     * @return ArrayOfJourneyPromotionApplicable
     * @throws InvalidArgumentException
     */
    public function setJourneyPromotionApplicable(?array $journeyPromotionApplicable = null): self
    {
        // validation for constraint: array
        if ('' !== ($journeyPromotionApplicableArrayErrorMessage = self::validateJourneyPromotionApplicableForArrayConstraintFromSetJourneyPromotionApplicable($journeyPromotionApplicable))) {
            throw new InvalidArgumentException($journeyPromotionApplicableArrayErrorMessage, __LINE__);
        }
        if (is_null($journeyPromotionApplicable) || (is_array($journeyPromotionApplicable) && empty($journeyPromotionApplicable))) {
            unset($this->JourneyPromotionApplicable);
        } else {
            $this->JourneyPromotionApplicable = $journeyPromotionApplicable;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return JourneyPromotionApplicable|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Customer\Structs\JourneyPromotionApplicable
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return JourneyPromotionApplicable|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Customer\Structs\JourneyPromotionApplicable
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return JourneyPromotionApplicable|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Customer\Structs\JourneyPromotionApplicable
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return JourneyPromotionApplicable|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Customer\Structs\JourneyPromotionApplicable
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return JourneyPromotionApplicable|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Customer\Structs\JourneyPromotionApplicable
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param JourneyPromotionApplicable $item
     *
     * @return ArrayOfJourneyPromotionApplicable
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof JourneyPromotionApplicable) {
            throw new InvalidArgumentException(sprintf('The JourneyPromotionApplicable property can only contain items of type \Ntvspa\Big\Customer\Structs\JourneyPromotionApplicable, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string JourneyPromotionApplicable
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'JourneyPromotionApplicable';
    }
}

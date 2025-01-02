<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\AvailableUpgrade;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAvailableUpgrade Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAvailableUpgrade
 *
 * @subpackage Arrays
 */
class ArrayOfAvailableUpgrade extends AbstractStructArrayBase
{
    /**
     * The AvailableUpgrade
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var AvailableUpgrade[]|null
     */
    protected ?array $AvailableUpgrade = null;

    /**
     * Constructor method for ArrayOfAvailableUpgrade
     *
     * @param AvailableUpgrade[] $availableUpgrade
     *
     * @uses ArrayOfAvailableUpgrade::setAvailableUpgrade()
     */
    public function __construct(?array $availableUpgrade = null)
    {
        $this
            ->setAvailableUpgrade($availableUpgrade);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setAvailableUpgrade method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAvailableUpgrade method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAvailableUpgradeForArrayConstraintFromSetAvailableUpgrade(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAvailableUpgradeAvailableUpgradeItem) {
            // validation for constraint: itemType
            if (!$arrayOfAvailableUpgradeAvailableUpgradeItem instanceof AvailableUpgrade) {
                $invalidValues[] = is_object($arrayOfAvailableUpgradeAvailableUpgradeItem) ? get_class($arrayOfAvailableUpgradeAvailableUpgradeItem) : sprintf('%s(%s)', gettype($arrayOfAvailableUpgradeAvailableUpgradeItem), var_export($arrayOfAvailableUpgradeAvailableUpgradeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AvailableUpgrade property can only contain items of type \Ntvspa\Big\Booking\Structs\AvailableUpgrade, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get AvailableUpgrade value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return AvailableUpgrade[]|null
     */
    public function getAvailableUpgrade(): ?array
    {
        return $this->AvailableUpgrade ?? null;
    }

    /**
     * Set AvailableUpgrade value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param AvailableUpgrade[] $availableUpgrade
     *
     * @return ArrayOfAvailableUpgrade
     * @throws InvalidArgumentException
     */
    public function setAvailableUpgrade(?array $availableUpgrade = null): self
    {
        // validation for constraint: array
        if ('' !== ($availableUpgradeArrayErrorMessage = self::validateAvailableUpgradeForArrayConstraintFromSetAvailableUpgrade($availableUpgrade))) {
            throw new InvalidArgumentException($availableUpgradeArrayErrorMessage, __LINE__);
        }
        if (is_null($availableUpgrade) || (is_array($availableUpgrade) && empty($availableUpgrade))) {
            unset($this->AvailableUpgrade);
        } else {
            $this->AvailableUpgrade = $availableUpgrade;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return AvailableUpgrade|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\AvailableUpgrade
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return AvailableUpgrade|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\AvailableUpgrade
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return AvailableUpgrade|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\AvailableUpgrade
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return AvailableUpgrade|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\AvailableUpgrade
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return AvailableUpgrade|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\AvailableUpgrade
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param AvailableUpgrade $item
     *
     * @return ArrayOfAvailableUpgrade
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof AvailableUpgrade) {
            throw new InvalidArgumentException(sprintf('The AvailableUpgrade property can only contain items of type \Ntvspa\Big\Booking\Structs\AvailableUpgrade, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string AvailableUpgrade
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'AvailableUpgrade';
    }
}

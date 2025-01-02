<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Corporate\Structs\Incentive;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfIncentive Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfIncentive
 *
 * @subpackage Arrays
 */
class ArrayOfIncentive extends AbstractStructArrayBase
{
    /**
     * The Incentive
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Incentive[]|null
     */
    protected ?array $Incentive = null;

    /**
     * Constructor method for ArrayOfIncentive
     *
     * @param Incentive[] $incentive
     *
     * @uses ArrayOfIncentive::setIncentive()
     */
    public function __construct(?array $incentive = null)
    {
        $this
            ->setIncentive($incentive);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setIncentive method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIncentive method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIncentiveForArrayConstraintFromSetIncentive(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfIncentiveIncentiveItem) {
            // validation for constraint: itemType
            if (!$arrayOfIncentiveIncentiveItem instanceof Incentive) {
                $invalidValues[] = is_object($arrayOfIncentiveIncentiveItem) ? get_class($arrayOfIncentiveIncentiveItem) : sprintf('%s(%s)', gettype($arrayOfIncentiveIncentiveItem), var_export($arrayOfIncentiveIncentiveItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Incentive property can only contain items of type \Ntvspa\Big\Corporate\Structs\Incentive, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Incentive value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Incentive[]|null
     */
    public function getIncentive(): ?array
    {
        return $this->Incentive ?? null;
    }

    /**
     * Set Incentive value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Incentive[] $incentive
     *
     * @return ArrayOfIncentive
     * @throws InvalidArgumentException
     */
    public function setIncentive(?array $incentive = null): self
    {
        // validation for constraint: array
        if ('' !== ($incentiveArrayErrorMessage = self::validateIncentiveForArrayConstraintFromSetIncentive($incentive))) {
            throw new InvalidArgumentException($incentiveArrayErrorMessage, __LINE__);
        }
        if (is_null($incentive) || (is_array($incentive) && empty($incentive))) {
            unset($this->Incentive);
        } else {
            $this->Incentive = $incentive;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Incentive|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Corporate\Structs\Incentive
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Incentive|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Corporate\Structs\Incentive
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Incentive|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Corporate\Structs\Incentive
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Incentive|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Corporate\Structs\Incentive
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Incentive|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Corporate\Structs\Incentive
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Incentive $item
     *
     * @return ArrayOfIncentive
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Incentive) {
            throw new InvalidArgumentException(sprintf('The Incentive property can only contain items of type \Ntvspa\Big\Corporate\Structs\Incentive, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Incentive
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Incentive';
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Corporate\Structs\Corporate;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCorporate Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCorporate
 *
 * @subpackage Arrays
 */
class ArrayOfCorporate extends AbstractStructArrayBase
{
    /**
     * The Corporate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Corporate[]|null
     */
    protected ?array $Corporate = null;

    /**
     * Constructor method for ArrayOfCorporate
     *
     * @param Corporate[] $corporate
     *
     * @uses ArrayOfCorporate::setCorporate()
     */
    public function __construct(?array $corporate = null)
    {
        $this
            ->setCorporate($corporate);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setCorporate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCorporate method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCorporateForArrayConstraintFromSetCorporate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCorporateCorporateItem) {
            // validation for constraint: itemType
            if (!$arrayOfCorporateCorporateItem instanceof Corporate) {
                $invalidValues[] = is_object($arrayOfCorporateCorporateItem) ? get_class($arrayOfCorporateCorporateItem) : sprintf('%s(%s)', gettype($arrayOfCorporateCorporateItem), var_export($arrayOfCorporateCorporateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Corporate property can only contain items of type \Ntvspa\Big\Corporate\Structs\Corporate, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Corporate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Corporate[]|null
     */
    public function getCorporate(): ?array
    {
        return $this->Corporate ?? null;
    }

    /**
     * Set Corporate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Corporate[] $corporate
     *
     * @return ArrayOfCorporate
     * @throws InvalidArgumentException
     */
    public function setCorporate(?array $corporate = null): self
    {
        // validation for constraint: array
        if ('' !== ($corporateArrayErrorMessage = self::validateCorporateForArrayConstraintFromSetCorporate($corporate))) {
            throw new InvalidArgumentException($corporateArrayErrorMessage, __LINE__);
        }
        if (is_null($corporate) || (is_array($corporate) && empty($corporate))) {
            unset($this->Corporate);
        } else {
            $this->Corporate = $corporate;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Corporate|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Corporate\Structs\Corporate
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Corporate|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Corporate\Structs\Corporate
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Corporate|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Corporate\Structs\Corporate
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Corporate|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Corporate\Structs\Corporate
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Corporate|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Corporate\Structs\Corporate
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Corporate $item
     *
     * @return ArrayOfCorporate
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Corporate) {
            throw new InvalidArgumentException(sprintf('The Corporate property can only contain items of type \Ntvspa\Big\Corporate\Structs\Corporate, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Corporate
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Corporate';
    }
}

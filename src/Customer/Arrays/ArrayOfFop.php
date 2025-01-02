<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Customer\Structs\Fop;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFop Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFop
 *
 * @subpackage Arrays
 */
class ArrayOfFop extends AbstractStructArrayBase
{
    /**
     * The Fop
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Fop[]|null
     */
    protected ?array $Fop = null;

    /**
     * Constructor method for ArrayOfFop
     *
     * @param Fop[] $fop
     *
     * @uses ArrayOfFop::setFop()
     */
    public function __construct(?array $fop = null)
    {
        $this
            ->setFop($fop);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setFop method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFop method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFopForArrayConstraintFromSetFop(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFopFopItem) {
            // validation for constraint: itemType
            if (!$arrayOfFopFopItem instanceof Fop) {
                $invalidValues[] = is_object($arrayOfFopFopItem) ? get_class($arrayOfFopFopItem) : sprintf('%s(%s)', gettype($arrayOfFopFopItem), var_export($arrayOfFopFopItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Fop property can only contain items of type \Ntvspa\Big\Customer\Structs\Fop, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Fop value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Fop[]|null
     */
    public function getFop(): ?array
    {
        return $this->Fop ?? null;
    }

    /**
     * Set Fop value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Fop[] $fop
     *
     * @return ArrayOfFop
     * @throws InvalidArgumentException
     */
    public function setFop(?array $fop = null): self
    {
        // validation for constraint: array
        if ('' !== ($fopArrayErrorMessage = self::validateFopForArrayConstraintFromSetFop($fop))) {
            throw new InvalidArgumentException($fopArrayErrorMessage, __LINE__);
        }
        if (is_null($fop) || (is_array($fop) && empty($fop))) {
            unset($this->Fop);
        } else {
            $this->Fop = $fop;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Fop|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Customer\Structs\Fop
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Fop|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Customer\Structs\Fop
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Fop|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Customer\Structs\Fop
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Fop|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Customer\Structs\Fop
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Fop|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Customer\Structs\Fop
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Fop $item
     *
     * @return ArrayOfFop
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Fop) {
            throw new InvalidArgumentException(sprintf('The Fop property can only contain items of type \Ntvspa\Big\Customer\Structs\Fop, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Fop
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Fop';
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Travel\Structs\LegSSR;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLegSSR Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLegSSR
 *
 * @subpackage Arrays
 */
class ArrayOfLegSSR extends AbstractStructArrayBase
{
    /**
     * The LegSSR
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var LegSSR[]|null
     */
    protected ?array $LegSSR = null;

    /**
     * Constructor method for ArrayOfLegSSR
     *
     * @param LegSSR[] $legSSR
     *
     * @uses ArrayOfLegSSR::setLegSSR()
     */
    public function __construct(?array $legSSR = null)
    {
        $this
            ->setLegSSR($legSSR);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setLegSSR method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLegSSR method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLegSSRForArrayConstraintFromSetLegSSR(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLegSSRLegSSRItem) {
            // validation for constraint: itemType
            if (!$arrayOfLegSSRLegSSRItem instanceof LegSSR) {
                $invalidValues[] = is_object($arrayOfLegSSRLegSSRItem) ? get_class($arrayOfLegSSRLegSSRItem) : sprintf('%s(%s)', gettype($arrayOfLegSSRLegSSRItem), var_export($arrayOfLegSSRLegSSRItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LegSSR property can only contain items of type \Ntvspa\Big\Travel\Structs\LegSSR, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get LegSSR value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return LegSSR[]|null
     */
    public function getLegSSR(): ?array
    {
        return $this->LegSSR ?? null;
    }

    /**
     * Set LegSSR value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param LegSSR[] $legSSR
     *
     * @return ArrayOfLegSSR
     * @throws InvalidArgumentException
     */
    public function setLegSSR(?array $legSSR = null): self
    {
        // validation for constraint: array
        if ('' !== ($legSSRArrayErrorMessage = self::validateLegSSRForArrayConstraintFromSetLegSSR($legSSR))) {
            throw new InvalidArgumentException($legSSRArrayErrorMessage, __LINE__);
        }
        if (is_null($legSSR) || (is_array($legSSR) && empty($legSSR))) {
            unset($this->LegSSR);
        } else {
            $this->LegSSR = $legSSR;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return LegSSR|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Travel\Structs\LegSSR
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return LegSSR|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Travel\Structs\LegSSR
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return LegSSR|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Travel\Structs\LegSSR
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return LegSSR|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Travel\Structs\LegSSR
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return LegSSR|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Travel\Structs\LegSSR
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param LegSSR $item
     *
     * @return ArrayOfLegSSR
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof LegSSR) {
            throw new InvalidArgumentException(sprintf('The LegSSR property can only contain items of type \Ntvspa\Big\Travel\Structs\LegSSR, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string LegSSR
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'LegSSR';
    }
}

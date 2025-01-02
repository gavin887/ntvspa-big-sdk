<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Travel\Structs\InfoTreno;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfInfoTreno Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfInfoTreno
 *
 * @subpackage Arrays
 */
class ArrayOfInfoTreno extends AbstractStructArrayBase
{
    /**
     * The InfoTreno
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var InfoTreno[]|null
     */
    protected ?array $InfoTreno = null;

    /**
     * Constructor method for ArrayOfInfoTreno
     *
     * @param InfoTreno[] $infoTreno
     *
     * @uses ArrayOfInfoTreno::setInfoTreno()
     */
    public function __construct(?array $infoTreno = null)
    {
        $this
            ->setInfoTreno($infoTreno);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setInfoTreno method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInfoTreno method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInfoTrenoForArrayConstraintFromSetInfoTreno(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfInfoTrenoInfoTrenoItem) {
            // validation for constraint: itemType
            if (!$arrayOfInfoTrenoInfoTrenoItem instanceof InfoTreno) {
                $invalidValues[] = is_object($arrayOfInfoTrenoInfoTrenoItem) ? get_class($arrayOfInfoTrenoInfoTrenoItem) : sprintf('%s(%s)', gettype($arrayOfInfoTrenoInfoTrenoItem), var_export($arrayOfInfoTrenoInfoTrenoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The InfoTreno property can only contain items of type \Ntvspa\Big\Travel\Structs\InfoTreno, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get InfoTreno value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return InfoTreno[]|null
     */
    public function getInfoTreno(): ?array
    {
        return $this->InfoTreno ?? null;
    }

    /**
     * Set InfoTreno value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param InfoTreno[] $infoTreno
     *
     * @return ArrayOfInfoTreno
     * @throws InvalidArgumentException
     */
    public function setInfoTreno(?array $infoTreno = null): self
    {
        // validation for constraint: array
        if ('' !== ($infoTrenoArrayErrorMessage = self::validateInfoTrenoForArrayConstraintFromSetInfoTreno($infoTreno))) {
            throw new InvalidArgumentException($infoTrenoArrayErrorMessage, __LINE__);
        }
        if (is_null($infoTreno) || (is_array($infoTreno) && empty($infoTreno))) {
            unset($this->InfoTreno);
        } else {
            $this->InfoTreno = $infoTreno;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return InfoTreno|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Travel\Structs\InfoTreno
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return InfoTreno|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Travel\Structs\InfoTreno
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return InfoTreno|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Travel\Structs\InfoTreno
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return InfoTreno|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Travel\Structs\InfoTreno
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return InfoTreno|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Travel\Structs\InfoTreno
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param InfoTreno $item
     *
     * @return ArrayOfInfoTreno
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof InfoTreno) {
            throw new InvalidArgumentException(sprintf('The InfoTreno property can only contain items of type \Ntvspa\Big\Travel\Structs\InfoTreno, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string InfoTreno
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'InfoTreno';
    }
}

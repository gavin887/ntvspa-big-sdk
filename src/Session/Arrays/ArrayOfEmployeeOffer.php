<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Session\Structs\EmployeeOffer;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEmployeeOffer Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfEmployeeOffer
 *
 * @subpackage Arrays
 */
class ArrayOfEmployeeOffer extends AbstractStructArrayBase
{
    /**
     * The EmployeeOffer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var EmployeeOffer[]|null
     */
    protected ?array $EmployeeOffer = null;

    /**
     * Constructor method for ArrayOfEmployeeOffer
     *
     * @param EmployeeOffer[] $employeeOffer
     *
     * @uses ArrayOfEmployeeOffer::setEmployeeOffer()
     */
    public function __construct(?array $employeeOffer = null)
    {
        $this
            ->setEmployeeOffer($employeeOffer);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setEmployeeOffer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployeeOffer method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmployeeOfferForArrayConstraintFromSetEmployeeOffer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEmployeeOfferEmployeeOfferItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmployeeOfferEmployeeOfferItem instanceof EmployeeOffer) {
                $invalidValues[] = is_object($arrayOfEmployeeOfferEmployeeOfferItem) ? get_class($arrayOfEmployeeOfferEmployeeOfferItem) : sprintf('%s(%s)', gettype($arrayOfEmployeeOfferEmployeeOfferItem), var_export($arrayOfEmployeeOfferEmployeeOfferItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EmployeeOffer property can only contain items of type \Ntvspa\Big\Session\Structs\EmployeeOffer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get EmployeeOffer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return EmployeeOffer[]|null
     */
    public function getEmployeeOffer(): ?array
    {
        return $this->EmployeeOffer ?? null;
    }

    /**
     * Set EmployeeOffer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param EmployeeOffer[] $employeeOffer
     *
     * @return ArrayOfEmployeeOffer
     * @throws InvalidArgumentException
     */
    public function setEmployeeOffer(?array $employeeOffer = null): self
    {
        // validation for constraint: array
        if ('' !== ($employeeOfferArrayErrorMessage = self::validateEmployeeOfferForArrayConstraintFromSetEmployeeOffer($employeeOffer))) {
            throw new InvalidArgumentException($employeeOfferArrayErrorMessage, __LINE__);
        }
        if (is_null($employeeOffer) || (is_array($employeeOffer) && empty($employeeOffer))) {
            unset($this->EmployeeOffer);
        } else {
            $this->EmployeeOffer = $employeeOffer;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return EmployeeOffer|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Session\Structs\EmployeeOffer
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return EmployeeOffer|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Session\Structs\EmployeeOffer
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return EmployeeOffer|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Session\Structs\EmployeeOffer
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return EmployeeOffer|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Session\Structs\EmployeeOffer
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return EmployeeOffer|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Session\Structs\EmployeeOffer
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param EmployeeOffer $item
     *
     * @return ArrayOfEmployeeOffer
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof EmployeeOffer) {
            throw new InvalidArgumentException(sprintf('The EmployeeOffer property can only contain items of type \Ntvspa\Big\Session\Structs\EmployeeOffer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string EmployeeOffer
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'EmployeeOffer';
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Corporate\Structs\TravelAgencyInvoice;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTravelAgencyInvoice Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTravelAgencyInvoice
 *
 * @subpackage Arrays
 */
class ArrayOfTravelAgencyInvoice extends AbstractStructArrayBase
{
    /**
     * The TravelAgencyInvoice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var TravelAgencyInvoice[]|null
     */
    protected ?array $TravelAgencyInvoice = null;

    /**
     * Constructor method for ArrayOfTravelAgencyInvoice
     *
     * @param TravelAgencyInvoice[] $travelAgencyInvoice
     *
     * @uses ArrayOfTravelAgencyInvoice::setTravelAgencyInvoice()
     */
    public function __construct(?array $travelAgencyInvoice = null)
    {
        $this
            ->setTravelAgencyInvoice($travelAgencyInvoice);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setTravelAgencyInvoice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTravelAgencyInvoice method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTravelAgencyInvoiceForArrayConstraintFromSetTravelAgencyInvoice(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTravelAgencyInvoiceTravelAgencyInvoiceItem) {
            // validation for constraint: itemType
            if (!$arrayOfTravelAgencyInvoiceTravelAgencyInvoiceItem instanceof TravelAgencyInvoice) {
                $invalidValues[] = is_object($arrayOfTravelAgencyInvoiceTravelAgencyInvoiceItem) ? get_class($arrayOfTravelAgencyInvoiceTravelAgencyInvoiceItem) : sprintf('%s(%s)', gettype($arrayOfTravelAgencyInvoiceTravelAgencyInvoiceItem), var_export($arrayOfTravelAgencyInvoiceTravelAgencyInvoiceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TravelAgencyInvoice property can only contain items of type \Ntvspa\Big\Corporate\Structs\TravelAgencyInvoice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get TravelAgencyInvoice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return TravelAgencyInvoice[]|null
     */
    public function getTravelAgencyInvoice(): ?array
    {
        return $this->TravelAgencyInvoice ?? null;
    }

    /**
     * Set TravelAgencyInvoice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param TravelAgencyInvoice[] $travelAgencyInvoice
     *
     * @return ArrayOfTravelAgencyInvoice
     * @throws InvalidArgumentException
     */
    public function setTravelAgencyInvoice(?array $travelAgencyInvoice = null): self
    {
        // validation for constraint: array
        if ('' !== ($travelAgencyInvoiceArrayErrorMessage = self::validateTravelAgencyInvoiceForArrayConstraintFromSetTravelAgencyInvoice($travelAgencyInvoice))) {
            throw new InvalidArgumentException($travelAgencyInvoiceArrayErrorMessage, __LINE__);
        }
        if (is_null($travelAgencyInvoice) || (is_array($travelAgencyInvoice) && empty($travelAgencyInvoice))) {
            unset($this->TravelAgencyInvoice);
        } else {
            $this->TravelAgencyInvoice = $travelAgencyInvoice;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return TravelAgencyInvoice|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Corporate\Structs\TravelAgencyInvoice
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return TravelAgencyInvoice|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Corporate\Structs\TravelAgencyInvoice
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return TravelAgencyInvoice|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Corporate\Structs\TravelAgencyInvoice
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return TravelAgencyInvoice|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Corporate\Structs\TravelAgencyInvoice
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return TravelAgencyInvoice|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Corporate\Structs\TravelAgencyInvoice
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param TravelAgencyInvoice $item
     *
     * @return ArrayOfTravelAgencyInvoice
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof TravelAgencyInvoice) {
            throw new InvalidArgumentException(sprintf('The TravelAgencyInvoice property can only contain items of type \Ntvspa\Big\Corporate\Structs\TravelAgencyInvoice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string TravelAgencyInvoice
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'TravelAgencyInvoice';
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\Lounge;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLounge Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLounge
 *
 * @subpackage Arrays
 */
class ArrayOfLounge extends AbstractStructArrayBase
{
    /**
     * The Lounge
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Lounge[]|null
     */
    protected ?array $Lounge = null;

    /**
     * Constructor method for ArrayOfLounge
     *
     * @param Lounge[] $lounge
     *
     * @uses ArrayOfLounge::setLounge()
     */
    public function __construct(?array $lounge = null)
    {
        $this
            ->setLounge($lounge);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setLounge method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLounge method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLoungeForArrayConstraintFromSetLounge(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLoungeLoungeItem) {
            // validation for constraint: itemType
            if (!$arrayOfLoungeLoungeItem instanceof Lounge) {
                $invalidValues[] = is_object($arrayOfLoungeLoungeItem) ? get_class($arrayOfLoungeLoungeItem) : sprintf('%s(%s)', gettype($arrayOfLoungeLoungeItem), var_export($arrayOfLoungeLoungeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Lounge property can only contain items of type \Ntvspa\Big\Booking\Structs\Lounge, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Lounge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Lounge[]|null
     */
    public function getLounge(): ?array
    {
        return $this->Lounge ?? null;
    }

    /**
     * Set Lounge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Lounge[] $lounge
     *
     * @return ArrayOfLounge
     * @throws InvalidArgumentException
     */
    public function setLounge(?array $lounge = null): self
    {
        // validation for constraint: array
        if ('' !== ($loungeArrayErrorMessage = self::validateLoungeForArrayConstraintFromSetLounge($lounge))) {
            throw new InvalidArgumentException($loungeArrayErrorMessage, __LINE__);
        }
        if (is_null($lounge) || (is_array($lounge) && empty($lounge))) {
            unset($this->Lounge);
        } else {
            $this->Lounge = $lounge;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Lounge|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\Lounge
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Lounge|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\Lounge
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Lounge|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\Lounge
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Lounge|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\Lounge
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Lounge|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\Lounge
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Lounge $item
     *
     * @return ArrayOfLounge
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Lounge) {
            throw new InvalidArgumentException(sprintf('The Lounge property can only contain items of type \Ntvspa\Big\Booking\Structs\Lounge, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Lounge
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Lounge';
    }
}

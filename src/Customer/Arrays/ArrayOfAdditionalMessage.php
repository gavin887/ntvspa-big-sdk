<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Customer\Structs\AdditionalMessage;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAdditionalMessage Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAdditionalMessage
 *
 * @subpackage Arrays
 */
class ArrayOfAdditionalMessage extends AbstractStructArrayBase
{
    /**
     * The AdditionalMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var AdditionalMessage[]|null
     */
    protected ?array $AdditionalMessage = null;

    /**
     * Constructor method for ArrayOfAdditionalMessage
     *
     * @param AdditionalMessage[] $additionalMessage
     *
     * @uses ArrayOfAdditionalMessage::setAdditionalMessage()
     */
    public function __construct(?array $additionalMessage = null)
    {
        $this
            ->setAdditionalMessage($additionalMessage);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setAdditionalMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditionalMessage method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdditionalMessageForArrayConstraintFromSetAdditionalMessage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAdditionalMessageAdditionalMessageItem) {
            // validation for constraint: itemType
            if (!$arrayOfAdditionalMessageAdditionalMessageItem instanceof AdditionalMessage) {
                $invalidValues[] = is_object($arrayOfAdditionalMessageAdditionalMessageItem) ? get_class($arrayOfAdditionalMessageAdditionalMessageItem) : sprintf('%s(%s)', gettype($arrayOfAdditionalMessageAdditionalMessageItem), var_export($arrayOfAdditionalMessageAdditionalMessageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AdditionalMessage property can only contain items of type \Ntvspa\Big\Customer\Structs\AdditionalMessage, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get AdditionalMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return AdditionalMessage[]|null
     */
    public function getAdditionalMessage(): ?array
    {
        return $this->AdditionalMessage ?? null;
    }

    /**
     * Set AdditionalMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param AdditionalMessage[] $additionalMessage
     *
     * @return ArrayOfAdditionalMessage
     * @throws InvalidArgumentException
     */
    public function setAdditionalMessage(?array $additionalMessage = null): self
    {
        // validation for constraint: array
        if ('' !== ($additionalMessageArrayErrorMessage = self::validateAdditionalMessageForArrayConstraintFromSetAdditionalMessage($additionalMessage))) {
            throw new InvalidArgumentException($additionalMessageArrayErrorMessage, __LINE__);
        }
        if (is_null($additionalMessage) || (is_array($additionalMessage) && empty($additionalMessage))) {
            unset($this->AdditionalMessage);
        } else {
            $this->AdditionalMessage = $additionalMessage;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return AdditionalMessage|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Customer\Structs\AdditionalMessage
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return AdditionalMessage|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Customer\Structs\AdditionalMessage
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return AdditionalMessage|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Customer\Structs\AdditionalMessage
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return AdditionalMessage|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Customer\Structs\AdditionalMessage
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return AdditionalMessage|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Customer\Structs\AdditionalMessage
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param AdditionalMessage $item
     *
     * @return ArrayOfAdditionalMessage
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof AdditionalMessage) {
            throw new InvalidArgumentException(sprintf('The AdditionalMessage property can only contain items of type \Ntvspa\Big\Customer\Structs\AdditionalMessage, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string AdditionalMessage
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'AdditionalMessage';
    }
}

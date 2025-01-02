<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Travel\Structs\Notice;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfNotice Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfNotice
 *
 * @subpackage Arrays
 */
class ArrayOfNotice extends AbstractStructArrayBase
{
    /**
     * The Notice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Notice[]|null
     */
    protected ?array $Notice = null;

    /**
     * Constructor method for ArrayOfNotice
     *
     * @param Notice[] $notice
     *
     * @uses ArrayOfNotice::setNotice()
     */
    public function __construct(?array $notice = null)
    {
        $this
            ->setNotice($notice);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setNotice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNotice method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNoticeForArrayConstraintFromSetNotice(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfNoticeNoticeItem) {
            // validation for constraint: itemType
            if (!$arrayOfNoticeNoticeItem instanceof Notice) {
                $invalidValues[] = is_object($arrayOfNoticeNoticeItem) ? get_class($arrayOfNoticeNoticeItem) : sprintf('%s(%s)', gettype($arrayOfNoticeNoticeItem), var_export($arrayOfNoticeNoticeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Notice property can only contain items of type \Ntvspa\Big\Travel\Structs\Notice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get Notice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Notice[]|null
     */
    public function getNotice(): ?array
    {
        return $this->Notice ?? null;
    }

    /**
     * Set Notice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Notice[] $notice
     *
     * @return ArrayOfNotice
     * @throws InvalidArgumentException
     */
    public function setNotice(?array $notice = null): self
    {
        // validation for constraint: array
        if ('' !== ($noticeArrayErrorMessage = self::validateNoticeForArrayConstraintFromSetNotice($notice))) {
            throw new InvalidArgumentException($noticeArrayErrorMessage, __LINE__);
        }
        if (is_null($notice) || (is_array($notice) && empty($notice))) {
            unset($this->Notice);
        } else {
            $this->Notice = $notice;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return Notice|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Travel\Structs\Notice
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return Notice|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Travel\Structs\Notice
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return Notice|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Travel\Structs\Notice
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return Notice|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Travel\Structs\Notice
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return Notice|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Travel\Structs\Notice
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param Notice $item
     *
     * @return ArrayOfNotice
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Notice) {
            throw new InvalidArgumentException(sprintf('The Notice property can only contain items of type \Ntvspa\Big\Travel\Structs\Notice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string Notice
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'Notice';
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Arrays;

use InvalidArgumentException;
use Ntvspa\Big\Booking\Structs\BookingComment;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBookingComment Arrays
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBookingComment
 *
 * @subpackage Arrays
 */
class ArrayOfBookingComment extends AbstractStructArrayBase
{
    /**
     * The BookingComment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var BookingComment[]|null
     */
    protected ?array $BookingComment = null;

    /**
     * Constructor method for ArrayOfBookingComment
     *
     * @param BookingComment[] $bookingComment
     *
     * @uses ArrayOfBookingComment::setBookingComment()
     */
    public function __construct(?array $bookingComment = null)
    {
        $this
            ->setBookingComment($bookingComment);
    }

    /**
     * This method is responsible for validating the value(s) passed to the setBookingComment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingComment method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingCommentForArrayConstraintFromSetBookingComment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBookingCommentBookingCommentItem) {
            // validation for constraint: itemType
            if (!$arrayOfBookingCommentBookingCommentItem instanceof BookingComment) {
                $invalidValues[] = is_object($arrayOfBookingCommentBookingCommentItem) ? get_class($arrayOfBookingCommentBookingCommentItem) : sprintf('%s(%s)', gettype($arrayOfBookingCommentBookingCommentItem), var_export($arrayOfBookingCommentBookingCommentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingComment property can only contain items of type \Ntvspa\Big\Booking\Structs\BookingComment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Get BookingComment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return BookingComment[]|null
     */
    public function getBookingComment(): ?array
    {
        return $this->BookingComment ?? null;
    }

    /**
     * Set BookingComment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param BookingComment[] $bookingComment
     *
     * @return ArrayOfBookingComment
     * @throws InvalidArgumentException
     */
    public function setBookingComment(?array $bookingComment = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingCommentArrayErrorMessage = self::validateBookingCommentForArrayConstraintFromSetBookingComment($bookingComment))) {
            throw new InvalidArgumentException($bookingCommentArrayErrorMessage, __LINE__);
        }
        if (is_null($bookingComment) || (is_array($bookingComment) && empty($bookingComment))) {
            unset($this->BookingComment);
        } else {
            $this->BookingComment = $bookingComment;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @return BookingComment|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Ntvspa\Big\Booking\Structs\BookingComment
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @param int $index
     *
     * @return BookingComment|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Ntvspa\Big\Booking\Structs\BookingComment
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @return BookingComment|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Ntvspa\Big\Booking\Structs\BookingComment
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @return BookingComment|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Ntvspa\Big\Booking\Structs\BookingComment
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @param int $offset
     *
     * @return BookingComment|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Ntvspa\Big\Booking\Structs\BookingComment
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @param BookingComment $item
     *
     * @return ArrayOfBookingComment
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof BookingComment) {
            throw new InvalidArgumentException(sprintf('The BookingComment property can only contain items of type \Ntvspa\Big\Booking\Structs\BookingComment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @return string BookingComment
     * @see AbstractStructArrayBase::getAttributeName()
     */
    public function getAttributeName(): string
    {
        return 'BookingComment';
    }
}

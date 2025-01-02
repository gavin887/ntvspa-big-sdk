<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingComment Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BookingComment
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class BookingComment extends AbstractStructBase
{
    /**
     * The CommentText
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CommentText = null;

    /**
     * Constructor method for BookingComment
     *
     * @param string $commentText
     *
     * @uses BookingComment::setCommentText()
     */
    public function __construct(?string $commentText = null)
    {
        $this
            ->setCommentText($commentText);
    }

    /**
     * Get CommentText value
     *
     * @return string|null
     */
    public function getCommentText(): ?string
    {
        return $this->CommentText;
    }

    /**
     * Set CommentText value
     *
     * @param string $commentText
     *
     * @return BookingComment
     */
    public function setCommentText(?string $commentText = null): self
    {
        // validation for constraint: string
        if (!is_null($commentText) && !is_string($commentText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commentText, true), gettype($commentText)), __LINE__);
        }
        $this->CommentText = $commentText;

        return $this;
    }
}

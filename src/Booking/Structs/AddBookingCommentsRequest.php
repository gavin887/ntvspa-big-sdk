<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfBookingComment;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddBookingCommentsRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q25:AddBookingCommentsRequest | tns:AddBookingCommentsRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class AddBookingCommentsRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The RecordLocator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $RecordLocator = null;
    /**
     * The BookingComments
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfBookingComment|null
     */
    protected ?ArrayOfBookingComment $BookingComments = null;

    /**
     * Constructor method for AddBookingCommentsRequest
     *
     * @param string                                           $sourceSystem
     * @param string                                           $signature
     * @param string                                           $recordLocator
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfBookingComment $bookingComments
     *
     * @uses AddBookingCommentsRequest::setSourceSystem()
     * @uses AddBookingCommentsRequest::setSignature()
     * @uses AddBookingCommentsRequest::setRecordLocator()
     * @uses AddBookingCommentsRequest::setBookingComments()
     */
    public function __construct(?string $sourceSystem = null, ?string $signature = null, ?string $recordLocator = null, ?ArrayOfBookingComment $bookingComments = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setSignature($signature)
            ->setRecordLocator($recordLocator)
            ->setBookingComments($bookingComments);
    }

    /**
     * Get SourceSystem value
     *
     * @return string|null
     */
    public function getSourceSystem(): ?string
    {
        return $this->SourceSystem;
    }

    /**
     * Set SourceSystem value
     *
     * @param string $sourceSystem
     *
     * @return AddBookingCommentsRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\SourceSystem::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\SourceSystem::valueIsValid()
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\SourceSystem::valueIsValid($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\SourceSystem', is_array($sourceSystem) ? implode(', ', $sourceSystem) : var_export($sourceSystem, true), implode(', ', SourceSystem::getValidValues())), __LINE__);
        }
        $this->SourceSystem = $sourceSystem;

        return $this;
    }

    /**
     * Get Signature value
     *
     * @return string|null
     */
    public function getSignature(): ?string
    {
        return $this->Signature;
    }

    /**
     * Set Signature value
     *
     * @param string $signature
     *
     * @return AddBookingCommentsRequest
     */
    public function setSignature(?string $signature = null): self
    {
        // validation for constraint: string
        if (!is_null($signature) && !is_string($signature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signature, true), gettype($signature)), __LINE__);
        }
        $this->Signature = $signature;

        return $this;
    }

    /**
     * Get RecordLocator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getRecordLocator(): ?string
    {
        return $this->RecordLocator ?? null;
    }

    /**
     * Set RecordLocator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $recordLocator
     *
     * @return AddBookingCommentsRequest
     */
    public function setRecordLocator(?string $recordLocator = null): self
    {
        // validation for constraint: string
        if (!is_null($recordLocator) && !is_string($recordLocator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recordLocator, true), gettype($recordLocator)), __LINE__);
        }
        if (is_null($recordLocator) || (is_array($recordLocator) && empty($recordLocator))) {
            unset($this->RecordLocator);
        } else {
            $this->RecordLocator = $recordLocator;
        }

        return $this;
    }

    /**
     * Get BookingComments value
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfBookingComment|null
     */
    public function getBookingComments(): ?ArrayOfBookingComment
    {
        return $this->BookingComments;
    }

    /**
     * Set BookingComments value
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfBookingComment $bookingComments
     *
     * @return AddBookingCommentsRequest
     */
    public function setBookingComments(?ArrayOfBookingComment $bookingComments = null): self
    {
        $this->BookingComments = $bookingComments;

        return $this;
    }
}

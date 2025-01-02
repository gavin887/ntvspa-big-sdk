<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportBookingInfoRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q45:ExportBookingInfoRequest | tns:ExportBookingInfoRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ExportBookingInfoRequest extends AbstractStructBase
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
     * The BookingNotes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var BookingNote|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\BookingNote $BookingNotes = null;

    /**
     * Constructor method for ExportBookingInfoRequest
     *
     * @param string      $sourceSystem
     * @param string      $signature
     * @param BookingNote $bookingNotes
     *
     * @uses ExportBookingInfoRequest::setSourceSystem()
     * @uses ExportBookingInfoRequest::setSignature()
     * @uses ExportBookingInfoRequest::setBookingNotes()
     */
    public function __construct(?string $sourceSystem = null, ?string $signature = null, ?\Ntvspa\Big\Booking\Structs\BookingNote $bookingNotes = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setSignature($signature)
            ->setBookingNotes($bookingNotes);
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
     * @return ExportBookingInfoRequest
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
     * @return ExportBookingInfoRequest
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
     * Get BookingNotes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return BookingNote|null
     */
    public function getBookingNotes(): ?\Ntvspa\Big\Booking\Structs\BookingNote
    {
        return $this->BookingNotes ?? null;
    }

    /**
     * Set BookingNotes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param BookingNote $bookingNotes
     *
     * @return ExportBookingInfoRequest
     */
    public function setBookingNotes(?\Ntvspa\Big\Booking\Structs\BookingNote $bookingNotes = null): self
    {
        if (is_null($bookingNotes) || (is_array($bookingNotes) && empty($bookingNotes))) {
            unset($this->BookingNotes);
        } else {
            $this->BookingNotes = $bookingNotes;
        }

        return $this;
    }
}

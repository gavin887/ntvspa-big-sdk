<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Product\Arrays\ArrayOfSegment;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Booking Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Booking
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Booking extends AbstractStructBase
{
    /**
     * The CreatedDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $CreatedDate = null;
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
     * The Segments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfSegment|null
     */
    protected ?ArrayOfSegment $Segments = null;
    /**
     * The BookingContact
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var BookingContact|null
     */
    protected ?\Ntvspa\Big\Product\Structs\BookingContact $BookingContact = null;

    /**
     * Constructor method for Booking
     *
     * @param string                                    $createdDate
     * @param string                                    $recordLocator
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfSegment $segments
     * @param BookingContact                            $bookingContact
     *
     * @uses Booking::setCreatedDate()
     * @uses Booking::setRecordLocator()
     * @uses Booking::setSegments()
     * @uses Booking::setBookingContact()
     */
    public function __construct(?string $createdDate = null, ?string $recordLocator = null, ?ArrayOfSegment $segments = null, ?\Ntvspa\Big\Product\Structs\BookingContact $bookingContact = null)
    {
        $this
            ->setCreatedDate($createdDate)
            ->setRecordLocator($recordLocator)
            ->setSegments($segments)
            ->setBookingContact($bookingContact);
    }

    /**
     * Get CreatedDate value
     *
     * @return string|null
     */
    public function getCreatedDate(): ?string
    {
        return $this->CreatedDate;
    }

    /**
     * Set CreatedDate value
     *
     * @param string $createdDate
     *
     * @return Booking
     */
    public function setCreatedDate(?string $createdDate = null): self
    {
        // validation for constraint: string
        if (!is_null($createdDate) && !is_string($createdDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdDate, true), gettype($createdDate)), __LINE__);
        }
        $this->CreatedDate = $createdDate;

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
     * @return Booking
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
     * Get Segments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfSegment|null
     */
    public function getSegments(): ?ArrayOfSegment
    {
        return $this->Segments ?? null;
    }

    /**
     * Set Segments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfSegment $segments
     *
     * @return Booking
     */
    public function setSegments(?ArrayOfSegment $segments = null): self
    {
        if (is_null($segments) || (is_array($segments) && empty($segments))) {
            unset($this->Segments);
        } else {
            $this->Segments = $segments;
        }

        return $this;
    }

    /**
     * Get BookingContact value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return BookingContact|null
     */
    public function getBookingContact(): ?\Ntvspa\Big\Product\Structs\BookingContact
    {
        return $this->BookingContact ?? null;
    }

    /**
     * Set BookingContact value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param BookingContact $bookingContact
     *
     * @return Booking
     */
    public function setBookingContact(?\Ntvspa\Big\Product\Structs\BookingContact $bookingContact = null): self
    {
        if (is_null($bookingContact) || (is_array($bookingContact) && empty($bookingContact))) {
            unset($this->BookingContact);
        } else {
            $this->BookingContact = $bookingContact;
        }

        return $this;
    }
}

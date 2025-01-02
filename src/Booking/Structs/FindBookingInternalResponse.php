<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfBooking;
use InvalidArgumentException;

/**
 * This class stands for FindBookingInternalResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q50:FindBookingInternalResponse | tns:FindBookingInternalResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class FindBookingInternalResponse extends ResponseBase
{
    /**
     * The LastId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $LastId = null;
    /**
     * The Bookings
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfBooking|null
     */
    protected ?ArrayOfBooking $Bookings = null;

    /**
     * Constructor method for FindBookingInternalResponse
     *
     * @param int                                       $lastId
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfBooking $bookings
     *
     * @uses FindBookingInternalResponse::setLastId()
     * @uses FindBookingInternalResponse::setBookings()
     */
    public function __construct(?int $lastId = null, ?ArrayOfBooking $bookings = null)
    {
        $this
            ->setLastId($lastId)
            ->setBookings($bookings);
    }

    /**
     * Get LastId value
     *
     * @return int|null
     */
    public function getLastId(): ?int
    {
        return $this->LastId;
    }

    /**
     * Set LastId value
     *
     * @param int $lastId
     *
     * @return FindBookingInternalResponse
     */
    public function setLastId(?int $lastId = null): self
    {
        // validation for constraint: int
        if (!is_null($lastId) && !(is_int($lastId) || ctype_digit($lastId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lastId, true), gettype($lastId)), __LINE__);
        }
        $this->LastId = $lastId;

        return $this;
    }

    /**
     * Get Bookings value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfBooking|null
     */
    public function getBookings(): ?ArrayOfBooking
    {
        return $this->Bookings ?? null;
    }

    /**
     * Set Bookings value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfBooking $bookings
     *
     * @return FindBookingInternalResponse
     */
    public function setBookings(?ArrayOfBooking $bookings = null): self
    {
        if (is_null($bookings) || (is_array($bookings) && empty($bookings))) {
            unset($this->Bookings);
        } else {
            $this->Bookings = $bookings;
        }

        return $this;
    }
}

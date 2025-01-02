<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfPassenger;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdatePassengersRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q57:UpdatePassengersRequest | tns:UpdatePassengersRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class UpdatePassengersRequest extends AbstractStructBase
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
     * The BookingContact
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var BookingContact|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\BookingContact $BookingContact = null;
    /**
     * The Passengers
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfPassenger|null
     */
    protected ?ArrayOfPassenger $Passengers = null;

    /**
     * Constructor method for UpdatePassengersRequest
     *
     * @param string                                      $sourceSystem
     * @param string                                      $signature
     * @param BookingContact                              $bookingContact
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfPassenger $passengers
     *
     * @uses UpdatePassengersRequest::setSourceSystem()
     * @uses UpdatePassengersRequest::setSignature()
     * @uses UpdatePassengersRequest::setBookingContact()
     * @uses UpdatePassengersRequest::setPassengers()
     */
    public function __construct(?string $sourceSystem = null, ?string $signature = null, ?\Ntvspa\Big\Booking\Structs\BookingContact $bookingContact = null, ?ArrayOfPassenger $passengers = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setSignature($signature)
            ->setBookingContact($bookingContact)
            ->setPassengers($passengers);
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
     * @return UpdatePassengersRequest
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
     * @return UpdatePassengersRequest
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
     * Get BookingContact value
     *
     * @return BookingContact|null
     */
    public function getBookingContact(): ?\Ntvspa\Big\Booking\Structs\BookingContact
    {
        return $this->BookingContact;
    }

    /**
     * Set BookingContact value
     *
     * @param BookingContact $bookingContact
     *
     * @return UpdatePassengersRequest
     */
    public function setBookingContact(?\Ntvspa\Big\Booking\Structs\BookingContact $bookingContact = null): self
    {
        $this->BookingContact = $bookingContact;

        return $this;
    }

    /**
     * Get Passengers value
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfPassenger|null
     */
    public function getPassengers(): ?ArrayOfPassenger
    {
        return $this->Passengers;
    }

    /**
     * Set Passengers value
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfPassenger $passengers
     *
     * @return UpdatePassengersRequest
     */
    public function setPassengers(?ArrayOfPassenger $passengers = null): self
    {
        $this->Passengers = $passengers;

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfJourney;
use Booking\Arrays\ArrayOfPassenger;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HoldBookingRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q3:HoldBookingRequest | tns:HoldBookingRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class HoldBookingRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The WaiveFee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $WaiveFee = null;
    /**
     * The RequestFareLock
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $RequestFareLock = null;
    /**
     * The RequestAncillaryService
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $RequestAncillaryService = null;
    /**
     * The RequestFareLockID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $RequestFareLockID = null;
    /**
     * The RequestPetAncillaryService
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $RequestPetAncillaryService = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The Journeys
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfJourney|null
     */
    protected ?ArrayOfJourney $Journeys = null;
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
     * The AncillaryService
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var AncillaryService|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\AncillaryService $AncillaryService = null;
    /**
     * The JourneySpecialOperation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var JourneySpecialOperation|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\JourneySpecialOperation $JourneySpecialOperation = null;
    /**
     * The AssetNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $AssetNumber = null;

    /**
     * Constructor method for HoldBookingRequest
     *
     * @param string                                      $sourceSystem
     * @param bool                                        $waiveFee
     * @param bool                                        $requestFareLock
     * @param bool                                        $requestAncillaryService
     * @param int                                         $requestFareLockID
     * @param bool                                        $requestPetAncillaryService
     * @param string                                      $signature
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfJourney   $journeys
     * @param BookingContact                              $bookingContact
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfPassenger $passengers
     * @param AncillaryService                            $ancillaryService
     * @param JourneySpecialOperation                     $journeySpecialOperation
     * @param string                                      $assetNumber
     *
     * @uses HoldBookingRequest::setSourceSystem()
     * @uses HoldBookingRequest::setWaiveFee()
     * @uses HoldBookingRequest::setRequestFareLock()
     * @uses HoldBookingRequest::setRequestAncillaryService()
     * @uses HoldBookingRequest::setRequestFareLockID()
     * @uses HoldBookingRequest::setRequestPetAncillaryService()
     * @uses HoldBookingRequest::setSignature()
     * @uses HoldBookingRequest::setJourneys()
     * @uses HoldBookingRequest::setBookingContact()
     * @uses HoldBookingRequest::setPassengers()
     * @uses HoldBookingRequest::setAncillaryService()
     * @uses HoldBookingRequest::setJourneySpecialOperation()
     * @uses HoldBookingRequest::setAssetNumber()
     */
    public function __construct(?string $sourceSystem = null, ?bool $waiveFee = null, ?bool $requestFareLock = null, ?bool $requestAncillaryService = null, ?int $requestFareLockID = null, ?bool $requestPetAncillaryService = null, ?string $signature = null, ?ArrayOfJourney $journeys = null, ?\Ntvspa\Big\Booking\Structs\BookingContact $bookingContact = null, ?ArrayOfPassenger $passengers = null, ?\Ntvspa\Big\Booking\Structs\AncillaryService $ancillaryService = null, ?\Ntvspa\Big\Booking\Structs\JourneySpecialOperation $journeySpecialOperation = null, ?string $assetNumber = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setWaiveFee($waiveFee)
            ->setRequestFareLock($requestFareLock)
            ->setRequestAncillaryService($requestAncillaryService)
            ->setRequestFareLockID($requestFareLockID)
            ->setRequestPetAncillaryService($requestPetAncillaryService)
            ->setSignature($signature)
            ->setJourneys($journeys)
            ->setBookingContact($bookingContact)
            ->setPassengers($passengers)
            ->setAncillaryService($ancillaryService)
            ->setJourneySpecialOperation($journeySpecialOperation)
            ->setAssetNumber($assetNumber);
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
     * @return HoldBookingRequest
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
     * Get WaiveFee value
     *
     * @return bool|null
     */
    public function getWaiveFee(): ?bool
    {
        return $this->WaiveFee;
    }

    /**
     * Set WaiveFee value
     *
     * @param bool $waiveFee
     *
     * @return HoldBookingRequest
     */
    public function setWaiveFee(?bool $waiveFee = null): self
    {
        // validation for constraint: boolean
        if (!is_null($waiveFee) && !is_bool($waiveFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($waiveFee, true), gettype($waiveFee)), __LINE__);
        }
        $this->WaiveFee = $waiveFee;

        return $this;
    }

    /**
     * Get RequestFareLock value
     *
     * @return bool|null
     */
    public function getRequestFareLock(): ?bool
    {
        return $this->RequestFareLock;
    }

    /**
     * Set RequestFareLock value
     *
     * @param bool $requestFareLock
     *
     * @return HoldBookingRequest
     */
    public function setRequestFareLock(?bool $requestFareLock = null): self
    {
        // validation for constraint: boolean
        if (!is_null($requestFareLock) && !is_bool($requestFareLock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($requestFareLock, true), gettype($requestFareLock)), __LINE__);
        }
        $this->RequestFareLock = $requestFareLock;

        return $this;
    }

    /**
     * Get RequestAncillaryService value
     *
     * @return bool|null
     */
    public function getRequestAncillaryService(): ?bool
    {
        return $this->RequestAncillaryService;
    }

    /**
     * Set RequestAncillaryService value
     *
     * @param bool $requestAncillaryService
     *
     * @return HoldBookingRequest
     */
    public function setRequestAncillaryService(?bool $requestAncillaryService = null): self
    {
        // validation for constraint: boolean
        if (!is_null($requestAncillaryService) && !is_bool($requestAncillaryService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($requestAncillaryService, true), gettype($requestAncillaryService)), __LINE__);
        }
        $this->RequestAncillaryService = $requestAncillaryService;

        return $this;
    }

    /**
     * Get RequestFareLockID value
     *
     * @return int|null
     */
    public function getRequestFareLockID(): ?int
    {
        return $this->RequestFareLockID;
    }

    /**
     * Set RequestFareLockID value
     *
     * @param int $requestFareLockID
     *
     * @return HoldBookingRequest
     */
    public function setRequestFareLockID(?int $requestFareLockID = null): self
    {
        // validation for constraint: int
        if (!is_null($requestFareLockID) && !(is_int($requestFareLockID) || ctype_digit($requestFareLockID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($requestFareLockID, true), gettype($requestFareLockID)), __LINE__);
        }
        $this->RequestFareLockID = $requestFareLockID;

        return $this;
    }

    /**
     * Get RequestPetAncillaryService value
     *
     * @return bool|null
     */
    public function getRequestPetAncillaryService(): ?bool
    {
        return $this->RequestPetAncillaryService;
    }

    /**
     * Set RequestPetAncillaryService value
     *
     * @param bool $requestPetAncillaryService
     *
     * @return HoldBookingRequest
     */
    public function setRequestPetAncillaryService(?bool $requestPetAncillaryService = null): self
    {
        // validation for constraint: boolean
        if (!is_null($requestPetAncillaryService) && !is_bool($requestPetAncillaryService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($requestPetAncillaryService, true), gettype($requestPetAncillaryService)), __LINE__);
        }
        $this->RequestPetAncillaryService = $requestPetAncillaryService;

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
     * @return HoldBookingRequest
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
     * Get Journeys value
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfJourney|null
     */
    public function getJourneys(): ?ArrayOfJourney
    {
        return $this->Journeys;
    }

    /**
     * Set Journeys value
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfJourney $journeys
     *
     * @return HoldBookingRequest
     */
    public function setJourneys(?ArrayOfJourney $journeys = null): self
    {
        $this->Journeys = $journeys;

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
     * @return HoldBookingRequest
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
     * @return HoldBookingRequest
     */
    public function setPassengers(?ArrayOfPassenger $passengers = null): self
    {
        $this->Passengers = $passengers;

        return $this;
    }

    /**
     * Get AncillaryService value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return AncillaryService|null
     */
    public function getAncillaryService(): ?\Ntvspa\Big\Booking\Structs\AncillaryService
    {
        return $this->AncillaryService ?? null;
    }

    /**
     * Set AncillaryService value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param AncillaryService $ancillaryService
     *
     * @return HoldBookingRequest
     */
    public function setAncillaryService(?\Ntvspa\Big\Booking\Structs\AncillaryService $ancillaryService = null): self
    {
        if (is_null($ancillaryService) || (is_array($ancillaryService) && empty($ancillaryService))) {
            unset($this->AncillaryService);
        } else {
            $this->AncillaryService = $ancillaryService;
        }

        return $this;
    }

    /**
     * Get JourneySpecialOperation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return JourneySpecialOperation|null
     */
    public function getJourneySpecialOperation(): ?\Ntvspa\Big\Booking\Structs\JourneySpecialOperation
    {
        return $this->JourneySpecialOperation ?? null;
    }

    /**
     * Set JourneySpecialOperation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param JourneySpecialOperation $journeySpecialOperation
     *
     * @return HoldBookingRequest
     */
    public function setJourneySpecialOperation(?\Ntvspa\Big\Booking\Structs\JourneySpecialOperation $journeySpecialOperation = null): self
    {
        if (is_null($journeySpecialOperation) || (is_array($journeySpecialOperation) && empty($journeySpecialOperation))) {
            unset($this->JourneySpecialOperation);
        } else {
            $this->JourneySpecialOperation = $journeySpecialOperation;
        }

        return $this;
    }

    /**
     * Get AssetNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getAssetNumber(): ?string
    {
        return $this->AssetNumber ?? null;
    }

    /**
     * Set AssetNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $assetNumber
     *
     * @return HoldBookingRequest
     */
    public function setAssetNumber(?string $assetNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($assetNumber) && !is_string($assetNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assetNumber, true), gettype($assetNumber)), __LINE__);
        }
        if (is_null($assetNumber) || (is_array($assetNumber) && empty($assetNumber))) {
            unset($this->AssetNumber);
        } else {
            $this->AssetNumber = $assetNumber;
        }

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfBookingComment;
use Booking\Arrays\ArrayOfJourney;
use Booking\Arrays\ArrayOfPassenger;
use Booking\Arrays\ArrayOfPayment;
use Booking\Arrays\ArrayOfstring;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\BookingStatus;
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
     * The PaxCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $PaxCount = null;
    /**
     * The CreatedDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $CreatedDate = null;
    /**
     * The ExpiredDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $ExpiredDate = null;
    /**
     * The ModifiedDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $ModifiedDate = null;
    /**
     * The BookingStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $BookingStatus = null;
    /**
     * The IsClosedBooking
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $IsClosedBooking = null;
    /**
     * The AdultNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $AdultNumber = null;
    /**
     * The SeniorNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $SeniorNumber = null;
    /**
     * The ChildNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $ChildNumber = null;
    /**
     * The YoungNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $YoungNumber = null;
    /**
     * The ExpireDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $ExpireDate = null;
    /**
     * The MealNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $MealNumber = null;
    /**
     * The PnrShellAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $PnrShellAmount = null;
    /**
     * The CostUpgradeForPax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $CostUpgradeForPax = null;
    /**
     * The CurrencyCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CurrencyCode = null;
    /**
     * The BookingSum
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var BookingSum|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\BookingSum $BookingSum = null;
    /**
     * The Passengers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfPassenger|null
     */
    protected ?ArrayOfPassenger $Passengers = null;
    /**
     * The Journeys
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfJourney|null
     */
    protected ?ArrayOfJourney $Journeys = null;
    /**
     * The Payments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfPayment|null
     */
    protected ?ArrayOfPayment $Payments = null;
    /**
     * The ExtraInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var ExtraInfo|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\ExtraInfo $ExtraInfo = null;
    /**
     * The FareLockInfoData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var FareLockInfoData|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\FareLockInfoData $FareLockInfoData = null;
    /**
     * The PNR
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PNR = null;
    /**
     * The ReceivedBy
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ReceivedBy = null;
    /**
     * The BookingContact
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var BookingContact|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\BookingContact $BookingContact = null;
    /**
     * The BookingComments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfBookingComment|null
     */
    protected ?ArrayOfBookingComment $BookingComments = null;
    /**
     * The ExternalPartnerUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ExternalPartnerUrl = null;
    /**
     * The BookingSpecialType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfstring|null
     */
    protected ?ArrayOfstring $BookingSpecialType = null;
    /**
     * The Pnr
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Pnr = null;
    /**
     * The ContactFirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ContactFirstName = null;
    /**
     * The ContactLastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ContactLastName = null;
    /**
     * The ContactEmail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ContactEmail = null;
    /**
     * The BookingInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Booking|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\Booking $BookingInformation = null;

    /**
     * Constructor method for Booking
     *
     * @param int                                              $paxCount
     * @param string                                           $createdDate
     * @param string                                           $expiredDate
     * @param string                                           $modifiedDate
     * @param string                                           $bookingStatus
     * @param bool                                             $isClosedBooking
     * @param int                                              $adultNumber
     * @param int                                              $seniorNumber
     * @param int                                              $childNumber
     * @param int                                              $youngNumber
     * @param string                                           $expireDate
     * @param int                                              $mealNumber
     * @param float                                            $pnrShellAmount
     * @param float                                            $costUpgradeForPax
     * @param string                                           $currencyCode
     * @param BookingSum                                       $bookingSum
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfPassenger      $passengers
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfJourney        $journeys
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfPayment        $payments
     * @param ExtraInfo                                        $extraInfo
     * @param FareLockInfoData                                 $fareLockInfoData
     * @param string                                           $pNR
     * @param string                                           $receivedBy
     * @param BookingContact                                   $bookingContact
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfBookingComment $bookingComments
     * @param string                                           $externalPartnerUrl
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfstring         $bookingSpecialType
     * @param string                                           $pnr
     * @param string                                           $contactFirstName
     * @param string                                           $contactLastName
     * @param string                                           $contactEmail
     * @param Booking                                          $bookingInformation
     *
     * @uses Booking::setPaxCount()
     * @uses Booking::setCreatedDate()
     * @uses Booking::setExpiredDate()
     * @uses Booking::setModifiedDate()
     * @uses Booking::setBookingStatus()
     * @uses Booking::setIsClosedBooking()
     * @uses Booking::setAdultNumber()
     * @uses Booking::setSeniorNumber()
     * @uses Booking::setChildNumber()
     * @uses Booking::setYoungNumber()
     * @uses Booking::setExpireDate()
     * @uses Booking::setMealNumber()
     * @uses Booking::setPnrShellAmount()
     * @uses Booking::setCostUpgradeForPax()
     * @uses Booking::setCurrencyCode()
     * @uses Booking::setBookingSum()
     * @uses Booking::setPassengers()
     * @uses Booking::setJourneys()
     * @uses Booking::setPayments()
     * @uses Booking::setExtraInfo()
     * @uses Booking::setFareLockInfoData()
     * @uses Booking::setPNR()
     * @uses Booking::setReceivedBy()
     * @uses Booking::setBookingContact()
     * @uses Booking::setBookingComments()
     * @uses Booking::setExternalPartnerUrl()
     * @uses Booking::setBookingSpecialType()
     * @uses Booking::setPnr_1()
     * @uses Booking::setContactFirstName()
     * @uses Booking::setContactLastName()
     * @uses Booking::setContactEmail()
     * @uses Booking::setBookingInformation()
     */
    public function __construct(?int $paxCount = null, ?string $createdDate = null, ?string $expiredDate = null, ?string $modifiedDate = null, ?string $bookingStatus = null, ?bool $isClosedBooking = null, ?int $adultNumber = null, ?int $seniorNumber = null, ?int $childNumber = null, ?int $youngNumber = null, ?string $expireDate = null, ?int $mealNumber = null, ?float $pnrShellAmount = null, ?float $costUpgradeForPax = null, ?string $currencyCode = null, ?\Ntvspa\Big\Booking\Structs\BookingSum $bookingSum = null, ?ArrayOfPassenger $passengers = null, ?ArrayOfJourney $journeys = null, ?ArrayOfPayment $payments = null, ?\Ntvspa\Big\Booking\Structs\ExtraInfo $extraInfo = null, ?\Ntvspa\Big\Booking\Structs\FareLockInfoData $fareLockInfoData = null, ?string $pNR = null, ?string $receivedBy = null, ?\Ntvspa\Big\Booking\Structs\BookingContact $bookingContact = null, ?ArrayOfBookingComment $bookingComments = null, ?string $externalPartnerUrl = null, ?ArrayOfstring $bookingSpecialType = null, ?string $pnr_1 = null, ?string $contactFirstName = null, ?string $contactLastName = null, ?string $contactEmail = null, ?\Ntvspa\Big\Booking\Structs\Booking $bookingInformation = null)
    {
        $this
            ->setPaxCount($paxCount)
            ->setCreatedDate($createdDate)
            ->setExpiredDate($expiredDate)
            ->setModifiedDate($modifiedDate)
            ->setBookingStatus($bookingStatus)
            ->setIsClosedBooking($isClosedBooking)
            ->setAdultNumber($adultNumber)
            ->setSeniorNumber($seniorNumber)
            ->setChildNumber($childNumber)
            ->setYoungNumber($youngNumber)
            ->setExpireDate($expireDate)
            ->setMealNumber($mealNumber)
            ->setPnrShellAmount($pnrShellAmount)
            ->setCostUpgradeForPax($costUpgradeForPax)
            ->setCurrencyCode($currencyCode)
            ->setBookingSum($bookingSum)
            ->setPassengers($passengers)
            ->setJourneys($journeys)
            ->setPayments($payments)
            ->setExtraInfo($extraInfo)
            ->setFareLockInfoData($fareLockInfoData)
            ->setPNR($pNR)
            ->setReceivedBy($receivedBy)
            ->setBookingContact($bookingContact)
            ->setBookingComments($bookingComments)
            ->setExternalPartnerUrl($externalPartnerUrl)
            ->setBookingSpecialType($bookingSpecialType)
            ->setPnr_1($pnr_1)
            ->setContactFirstName($contactFirstName)
            ->setContactLastName($contactLastName)
            ->setContactEmail($contactEmail)
            ->setBookingInformation($bookingInformation);
    }

    /**
     * Set Pnr value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $pnr
     *
     * @return Booking
     */
    public function setPnr_1(?string $pnr_1 = null): self
    {
        // validation for constraint: string
        if (!is_null($pnr_1) && !is_string($pnr_1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pnr_1, true), gettype($pnr_1)), __LINE__);
        }
        if (is_null($pnr_1) || (is_array($pnr_1) && empty($pnr_1))) {
            unset($this->Pnr);
        } else {
            $this->Pnr = $pnr_1;
        }

        return $this;
    }

    /**
     * Get PaxCount value
     *
     * @return int|null
     */
    public function getPaxCount(): ?int
    {
        return $this->PaxCount;
    }

    /**
     * Set PaxCount value
     *
     * @param int $paxCount
     *
     * @return Booking
     */
    public function setPaxCount(?int $paxCount = null): self
    {
        // validation for constraint: int
        if (!is_null($paxCount) && !(is_int($paxCount) || ctype_digit($paxCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paxCount, true), gettype($paxCount)), __LINE__);
        }
        $this->PaxCount = $paxCount;

        return $this;
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
     * Get ExpiredDate value
     *
     * @return string|null
     */
    public function getExpiredDate(): ?string
    {
        return $this->ExpiredDate;
    }

    /**
     * Set ExpiredDate value
     *
     * @param string $expiredDate
     *
     * @return Booking
     */
    public function setExpiredDate(?string $expiredDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expiredDate) && !is_string($expiredDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiredDate, true), gettype($expiredDate)), __LINE__);
        }
        $this->ExpiredDate = $expiredDate;

        return $this;
    }

    /**
     * Get ModifiedDate value
     *
     * @return string|null
     */
    public function getModifiedDate(): ?string
    {
        return $this->ModifiedDate;
    }

    /**
     * Set ModifiedDate value
     *
     * @param string $modifiedDate
     *
     * @return Booking
     */
    public function setModifiedDate(?string $modifiedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($modifiedDate) && !is_string($modifiedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifiedDate, true), gettype($modifiedDate)), __LINE__);
        }
        $this->ModifiedDate = $modifiedDate;

        return $this;
    }

    /**
     * Get BookingStatus value
     *
     * @return string|null
     */
    public function getBookingStatus(): ?string
    {
        return $this->BookingStatus;
    }

    /**
     * Set BookingStatus value
     *
     * @param string $bookingStatus
     *
     * @return Booking
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\BookingStatus::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\BookingStatus::valueIsValid()
     */
    public function setBookingStatus(?string $bookingStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\BookingStatus::valueIsValid($bookingStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\BookingStatus', is_array($bookingStatus) ? implode(', ', $bookingStatus) : var_export($bookingStatus, true), implode(', ', BookingStatus::getValidValues())), __LINE__);
        }
        $this->BookingStatus = $bookingStatus;

        return $this;
    }

    /**
     * Get IsClosedBooking value
     *
     * @return bool|null
     */
    public function getIsClosedBooking(): ?bool
    {
        return $this->IsClosedBooking;
    }

    /**
     * Set IsClosedBooking value
     *
     * @param bool $isClosedBooking
     *
     * @return Booking
     */
    public function setIsClosedBooking(?bool $isClosedBooking = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isClosedBooking) && !is_bool($isClosedBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isClosedBooking, true), gettype($isClosedBooking)), __LINE__);
        }
        $this->IsClosedBooking = $isClosedBooking;

        return $this;
    }

    /**
     * Get AdultNumber value
     *
     * @return int|null
     */
    public function getAdultNumber(): ?int
    {
        return $this->AdultNumber;
    }

    /**
     * Set AdultNumber value
     *
     * @param int $adultNumber
     *
     * @return Booking
     */
    public function setAdultNumber(?int $adultNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($adultNumber) && !(is_int($adultNumber) || ctype_digit($adultNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($adultNumber, true), gettype($adultNumber)), __LINE__);
        }
        $this->AdultNumber = $adultNumber;

        return $this;
    }

    /**
     * Get SeniorNumber value
     *
     * @return int|null
     */
    public function getSeniorNumber(): ?int
    {
        return $this->SeniorNumber;
    }

    /**
     * Set SeniorNumber value
     *
     * @param int $seniorNumber
     *
     * @return Booking
     */
    public function setSeniorNumber(?int $seniorNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($seniorNumber) && !(is_int($seniorNumber) || ctype_digit($seniorNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($seniorNumber, true), gettype($seniorNumber)), __LINE__);
        }
        $this->SeniorNumber = $seniorNumber;

        return $this;
    }

    /**
     * Get ChildNumber value
     *
     * @return int|null
     */
    public function getChildNumber(): ?int
    {
        return $this->ChildNumber;
    }

    /**
     * Set ChildNumber value
     *
     * @param int $childNumber
     *
     * @return Booking
     */
    public function setChildNumber(?int $childNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($childNumber) && !(is_int($childNumber) || ctype_digit($childNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($childNumber, true), gettype($childNumber)), __LINE__);
        }
        $this->ChildNumber = $childNumber;

        return $this;
    }

    /**
     * Get YoungNumber value
     *
     * @return int|null
     */
    public function getYoungNumber(): ?int
    {
        return $this->YoungNumber;
    }

    /**
     * Set YoungNumber value
     *
     * @param int $youngNumber
     *
     * @return Booking
     */
    public function setYoungNumber(?int $youngNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($youngNumber) && !(is_int($youngNumber) || ctype_digit($youngNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($youngNumber, true), gettype($youngNumber)), __LINE__);
        }
        $this->YoungNumber = $youngNumber;

        return $this;
    }

    /**
     * Get ExpireDate value
     *
     * @return string|null
     */
    public function getExpireDate(): ?string
    {
        return $this->ExpireDate;
    }

    /**
     * Set ExpireDate value
     *
     * @param string $expireDate
     *
     * @return Booking
     */
    public function setExpireDate(?string $expireDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expireDate) && !is_string($expireDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expireDate, true), gettype($expireDate)), __LINE__);
        }
        $this->ExpireDate = $expireDate;

        return $this;
    }

    /**
     * Get MealNumber value
     *
     * @return int|null
     */
    public function getMealNumber(): ?int
    {
        return $this->MealNumber;
    }

    /**
     * Set MealNumber value
     *
     * @param int $mealNumber
     *
     * @return Booking
     */
    public function setMealNumber(?int $mealNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($mealNumber) && !(is_int($mealNumber) || ctype_digit($mealNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mealNumber, true), gettype($mealNumber)), __LINE__);
        }
        $this->MealNumber = $mealNumber;

        return $this;
    }

    /**
     * Get PnrShellAmount value
     *
     * @return float|null
     */
    public function getPnrShellAmount(): ?float
    {
        return $this->PnrShellAmount;
    }

    /**
     * Set PnrShellAmount value
     *
     * @param float $pnrShellAmount
     *
     * @return Booking
     */
    public function setPnrShellAmount(?float $pnrShellAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($pnrShellAmount) && !(is_float($pnrShellAmount) || is_numeric($pnrShellAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($pnrShellAmount, true), gettype($pnrShellAmount)), __LINE__);
        }
        $this->PnrShellAmount = $pnrShellAmount;

        return $this;
    }

    /**
     * Get CostUpgradeForPax value
     *
     * @return float|null
     */
    public function getCostUpgradeForPax(): ?float
    {
        return $this->CostUpgradeForPax;
    }

    /**
     * Set CostUpgradeForPax value
     *
     * @param float $costUpgradeForPax
     *
     * @return Booking
     */
    public function setCostUpgradeForPax(?float $costUpgradeForPax = null): self
    {
        // validation for constraint: float
        if (!is_null($costUpgradeForPax) && !(is_float($costUpgradeForPax) || is_numeric($costUpgradeForPax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($costUpgradeForPax, true), gettype($costUpgradeForPax)), __LINE__);
        }
        $this->CostUpgradeForPax = $costUpgradeForPax;

        return $this;
    }

    /**
     * Get CurrencyCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->CurrencyCode ?? null;
    }

    /**
     * Set CurrencyCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $currencyCode
     *
     * @return Booking
     */
    public function setCurrencyCode(?string $currencyCode = null): self
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currencyCode, true), gettype($currencyCode)), __LINE__);
        }
        if (is_null($currencyCode) || (is_array($currencyCode) && empty($currencyCode))) {
            unset($this->CurrencyCode);
        } else {
            $this->CurrencyCode = $currencyCode;
        }

        return $this;
    }

    /**
     * Get BookingSum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return BookingSum|null
     */
    public function getBookingSum(): ?\Ntvspa\Big\Booking\Structs\BookingSum
    {
        return $this->BookingSum ?? null;
    }

    /**
     * Set BookingSum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param BookingSum $bookingSum
     *
     * @return Booking
     */
    public function setBookingSum(?\Ntvspa\Big\Booking\Structs\BookingSum $bookingSum = null): self
    {
        if (is_null($bookingSum) || (is_array($bookingSum) && empty($bookingSum))) {
            unset($this->BookingSum);
        } else {
            $this->BookingSum = $bookingSum;
        }

        return $this;
    }

    /**
     * Get Passengers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfPassenger|null
     */
    public function getPassengers(): ?ArrayOfPassenger
    {
        return $this->Passengers ?? null;
    }

    /**
     * Set Passengers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfPassenger $passengers
     *
     * @return Booking
     */
    public function setPassengers(?ArrayOfPassenger $passengers = null): self
    {
        if (is_null($passengers) || (is_array($passengers) && empty($passengers))) {
            unset($this->Passengers);
        } else {
            $this->Passengers = $passengers;
        }

        return $this;
    }

    /**
     * Get Journeys value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfJourney|null
     */
    public function getJourneys(): ?ArrayOfJourney
    {
        return $this->Journeys ?? null;
    }

    /**
     * Set Journeys value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfJourney $journeys
     *
     * @return Booking
     */
    public function setJourneys(?ArrayOfJourney $journeys = null): self
    {
        if (is_null($journeys) || (is_array($journeys) && empty($journeys))) {
            unset($this->Journeys);
        } else {
            $this->Journeys = $journeys;
        }

        return $this;
    }

    /**
     * Get Payments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfPayment|null
     */
    public function getPayments(): ?ArrayOfPayment
    {
        return $this->Payments ?? null;
    }

    /**
     * Set Payments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfPayment $payments
     *
     * @return Booking
     */
    public function setPayments(?ArrayOfPayment $payments = null): self
    {
        if (is_null($payments) || (is_array($payments) && empty($payments))) {
            unset($this->Payments);
        } else {
            $this->Payments = $payments;
        }

        return $this;
    }

    /**
     * Get ExtraInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return ExtraInfo|null
     */
    public function getExtraInfo(): ?\Ntvspa\Big\Booking\Structs\ExtraInfo
    {
        return $this->ExtraInfo ?? null;
    }

    /**
     * Set ExtraInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param ExtraInfo $extraInfo
     *
     * @return Booking
     */
    public function setExtraInfo(?\Ntvspa\Big\Booking\Structs\ExtraInfo $extraInfo = null): self
    {
        if (is_null($extraInfo) || (is_array($extraInfo) && empty($extraInfo))) {
            unset($this->ExtraInfo);
        } else {
            $this->ExtraInfo = $extraInfo;
        }

        return $this;
    }

    /**
     * Get FareLockInfoData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return FareLockInfoData|null
     */
    public function getFareLockInfoData(): ?\Ntvspa\Big\Booking\Structs\FareLockInfoData
    {
        return $this->FareLockInfoData ?? null;
    }

    /**
     * Set FareLockInfoData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param FareLockInfoData $fareLockInfoData
     *
     * @return Booking
     */
    public function setFareLockInfoData(?\Ntvspa\Big\Booking\Structs\FareLockInfoData $fareLockInfoData = null): self
    {
        if (is_null($fareLockInfoData) || (is_array($fareLockInfoData) && empty($fareLockInfoData))) {
            unset($this->FareLockInfoData);
        } else {
            $this->FareLockInfoData = $fareLockInfoData;
        }

        return $this;
    }

    /**
     * Get PNR value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPNR(): ?string
    {
        return $this->PNR ?? null;
    }

    /**
     * Set PNR value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $pNR
     *
     * @return Booking
     */
    public function setPNR(?string $pNR = null): self
    {
        // validation for constraint: string
        if (!is_null($pNR) && !is_string($pNR)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pNR, true), gettype($pNR)), __LINE__);
        }
        if (is_null($pNR) || (is_array($pNR) && empty($pNR))) {
            unset($this->PNR);
        } else {
            $this->PNR = $pNR;
        }

        return $this;
    }

    /**
     * Get ReceivedBy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getReceivedBy(): ?string
    {
        return $this->ReceivedBy ?? null;
    }

    /**
     * Set ReceivedBy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $receivedBy
     *
     * @return Booking
     */
    public function setReceivedBy(?string $receivedBy = null): self
    {
        // validation for constraint: string
        if (!is_null($receivedBy) && !is_string($receivedBy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receivedBy, true), gettype($receivedBy)), __LINE__);
        }
        if (is_null($receivedBy) || (is_array($receivedBy) && empty($receivedBy))) {
            unset($this->ReceivedBy);
        } else {
            $this->ReceivedBy = $receivedBy;
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
    public function getBookingContact(): ?\Ntvspa\Big\Booking\Structs\BookingContact
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
    public function setBookingContact(?\Ntvspa\Big\Booking\Structs\BookingContact $bookingContact = null): self
    {
        if (is_null($bookingContact) || (is_array($bookingContact) && empty($bookingContact))) {
            unset($this->BookingContact);
        } else {
            $this->BookingContact = $bookingContact;
        }

        return $this;
    }

    /**
     * Get BookingComments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfBookingComment|null
     */
    public function getBookingComments(): ?ArrayOfBookingComment
    {
        return $this->BookingComments ?? null;
    }

    /**
     * Set BookingComments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfBookingComment $bookingComments
     *
     * @return Booking
     */
    public function setBookingComments(?ArrayOfBookingComment $bookingComments = null): self
    {
        if (is_null($bookingComments) || (is_array($bookingComments) && empty($bookingComments))) {
            unset($this->BookingComments);
        } else {
            $this->BookingComments = $bookingComments;
        }

        return $this;
    }

    /**
     * Get ExternalPartnerUrl value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getExternalPartnerUrl(): ?string
    {
        return $this->ExternalPartnerUrl ?? null;
    }

    /**
     * Set ExternalPartnerUrl value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $externalPartnerUrl
     *
     * @return Booking
     */
    public function setExternalPartnerUrl(?string $externalPartnerUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($externalPartnerUrl) && !is_string($externalPartnerUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalPartnerUrl, true), gettype($externalPartnerUrl)), __LINE__);
        }
        if (is_null($externalPartnerUrl) || (is_array($externalPartnerUrl) && empty($externalPartnerUrl))) {
            unset($this->ExternalPartnerUrl);
        } else {
            $this->ExternalPartnerUrl = $externalPartnerUrl;
        }

        return $this;
    }

    /**
     * Get BookingSpecialType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfstring|null
     */
    public function getBookingSpecialType(): ?ArrayOfstring
    {
        return $this->BookingSpecialType ?? null;
    }

    /**
     * Set BookingSpecialType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfstring $bookingSpecialType
     *
     * @return Booking
     */
    public function setBookingSpecialType(?ArrayOfstring $bookingSpecialType = null): self
    {
        if (is_null($bookingSpecialType) || (is_array($bookingSpecialType) && empty($bookingSpecialType))) {
            unset($this->BookingSpecialType);
        } else {
            $this->BookingSpecialType = $bookingSpecialType;
        }

        return $this;
    }

    /**
     * Get Pnr value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPnr_1(): ?string
    {
        return $this->Pnr ?? null;
    }

    /**
     * Get ContactFirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getContactFirstName(): ?string
    {
        return $this->ContactFirstName ?? null;
    }

    /**
     * Set ContactFirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $contactFirstName
     *
     * @return Booking
     */
    public function setContactFirstName(?string $contactFirstName = null): self
    {
        // validation for constraint: string
        if (!is_null($contactFirstName) && !is_string($contactFirstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactFirstName, true), gettype($contactFirstName)), __LINE__);
        }
        if (is_null($contactFirstName) || (is_array($contactFirstName) && empty($contactFirstName))) {
            unset($this->ContactFirstName);
        } else {
            $this->ContactFirstName = $contactFirstName;
        }

        return $this;
    }

    /**
     * Get ContactLastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getContactLastName(): ?string
    {
        return $this->ContactLastName ?? null;
    }

    /**
     * Set ContactLastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $contactLastName
     *
     * @return Booking
     */
    public function setContactLastName(?string $contactLastName = null): self
    {
        // validation for constraint: string
        if (!is_null($contactLastName) && !is_string($contactLastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactLastName, true), gettype($contactLastName)), __LINE__);
        }
        if (is_null($contactLastName) || (is_array($contactLastName) && empty($contactLastName))) {
            unset($this->ContactLastName);
        } else {
            $this->ContactLastName = $contactLastName;
        }

        return $this;
    }

    /**
     * Get ContactEmail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getContactEmail(): ?string
    {
        return $this->ContactEmail ?? null;
    }

    /**
     * Set ContactEmail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $contactEmail
     *
     * @return Booking
     */
    public function setContactEmail(?string $contactEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($contactEmail) && !is_string($contactEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactEmail, true), gettype($contactEmail)), __LINE__);
        }
        if (is_null($contactEmail) || (is_array($contactEmail) && empty($contactEmail))) {
            unset($this->ContactEmail);
        } else {
            $this->ContactEmail = $contactEmail;
        }

        return $this;
    }

    /**
     * Get BookingInformation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Booking|null
     */
    public function getBookingInformation(): ?\Ntvspa\Big\Booking\Structs\Booking
    {
        return $this->BookingInformation ?? null;
    }

    /**
     * Set BookingInformation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Booking $bookingInformation
     *
     * @return Booking
     */
    public function setBookingInformation(?\Ntvspa\Big\Booking\Structs\Booking $bookingInformation = null): self
    {
        if (is_null($bookingInformation) || (is_array($bookingInformation) && empty($bookingInformation))) {
            unset($this->BookingInformation);
        } else {
            $this->BookingInformation = $bookingInformation;
        }

        return $this;
    }
}

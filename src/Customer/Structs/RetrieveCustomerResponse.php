<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Structs;

use AllowDynamicProperties;
use Customer\Arrays\ArrayOfAddress;
use Customer\Arrays\ArrayOfContactPerson;
use Customer\Arrays\ArrayOfInterest;
use InvalidArgumentException;
use Ntvspa\Big\Customer\Enums\AcquisitionChannel;
use Ntvspa\Big\Customer\Enums\ContactMode;
use Ntvspa\Big\Customer\Enums\Culture;
use Ntvspa\Big\Customer\Enums\Document;
use Ntvspa\Big\Customer\Enums\FavoriteContactMethod;
use Ntvspa\Big\Customer\Enums\FavoriteContactSlot;
use Ntvspa\Big\Customer\Enums\FixedPhone;
use Ntvspa\Big\Customer\Enums\Gender;
use Ntvspa\Big\Customer\Enums\PaymentMethod;
use Ntvspa\Big\Customer\Enums\PreferredClassOfService;
use Ntvspa\Big\Customer\Enums\PreferredFareClass;
use Ntvspa\Big\Customer\Enums\PreferredFilmCategory;
use Ntvspa\Big\Customer\Enums\PreferredMeal;
use Ntvspa\Big\Customer\Enums\PreferredSeat;
use Ntvspa\Big\Customer\Enums\Profession;
use Ntvspa\Big\Customer\Enums\ProfessionalSector;
use Ntvspa\Big\Customer\Enums\Segment;
use Ntvspa\Big\Customer\Enums\SeverityBlackList;
use Ntvspa\Big\Customer\Enums\SpecialCustomer;
use Ntvspa\Big\Customer\Enums\Status;
use Ntvspa\Big\Customer\Enums\Title;
use Ntvspa\Big\Customer\Enums\TravelReason;

/**
 * This class stands for RetrieveCustomerResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q16:RetrieveCustomerResponse | tns:RetrieveCustomerResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveCustomerResponse extends ResponseBase
{
    /**
     * The ForeignVatNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $ForeignVatNumber = null;
    /**
     * The SoleProprietorship
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $SoleProprietorship = null;
    /**
     * The ConsensusForProcessingOfPersonalData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $ConsensusForProcessingOfPersonalData = null;
    /**
     * The ConsensusToMarketingInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $ConsensusToMarketingInformation = null;
    /**
     * The ConsensusToThirdPartyPrivacy
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $ConsensusToThirdPartyPrivacy = null;
    /**
     * The ConsensusToProfiling
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $ConsensusToProfiling = null;
    /**
     * The ConsensusToProfilingDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $ConsensusToProfilingDate = null;
    /**
     * The ConsensusToMarketingInformationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $ConsensusToMarketingInformationDate = null;
    /**
     * The SpecialNeeds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $SpecialNeeds = null;
    /**
     * The DOB
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $DOB = null;
    /**
     * The FlagOnboardWiFi
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $FlagOnboardWiFi = null;
    /**
     * The DateOfConsensusAcceptance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $DateOfConsensusAcceptance = null;
    /**
     * The FlagIsEmployee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $FlagIsEmployee = null;
    /**
     * The FlagIsEmployeeParent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $FlagIsEmployeeParent = null;
    /**
     * The ClubDellaClub
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $ClubDellaClub = null;
    /**
     * The ClubDellaClubStartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $ClubDellaClubStartDate = null;
    /**
     * The ClubDellaClubFinishDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $ClubDellaClubFinishDate = null;
    /**
     * The AmexCardHolder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $AmexCardHolder = null;
    /**
     * The AmexCardActivationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $AmexCardActivationDate = null;
    /**
     * The AmexCardExpirationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $AmexCardExpirationDate = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The SurnameLegalName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $SurnameLegalName = null;
    /**
     * The TaxCodeVatNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $TaxCodeVatNumber = null;
    /**
     * The CustomerId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CustomerId = null;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Title = null;
    /**
     * The Segment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Segment = null;
    /**
     * The FixedPhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FixedPhone = null;
    /**
     * The FixedPhoneType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FixedPhoneType = null;
    /**
     * The AlternativePhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $AlternativePhone = null;
    /**
     * The MobilePhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $MobilePhone = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Email = null;
    /**
     * The Fax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Fax = null;
    /**
     * The InstantMessaging
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $InstantMessaging = null;
    /**
     * The TravelReason
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $TravelReason = null;
    /**
     * The Birthplace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Birthplace = null;
    /**
     * The Gender
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Gender = null;
    /**
     * The FavoritePaymentMethod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FavoritePaymentMethod = null;
    /**
     * The FavoriteContactMethod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FavoriteContactMethod = null;
    /**
     * The FavoriteContactSlot
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FavoriteContactSlot = null;
    /**
     * The CultureLanguage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CultureLanguage = null;
    /**
     * The Profession
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Profession = null;
    /**
     * The ProfessionalSector
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ProfessionalSector = null;
    /**
     * The Notes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Notes = null;
    /**
     * The AcquisitionChannel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $AcquisitionChannel = null;
    /**
     * The ContactMode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ContactMode = null;
    /**
     * The PreferredSeat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PreferredSeat = null;
    /**
     * The PreferredMeal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PreferredMeal = null;
    /**
     * The PreferredClassOfService
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PreferredClassOfService = null;
    /**
     * The PreferredFareClass
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PreferredFareClass = null;
    /**
     * The PreferredFilmCategory
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PreferredFilmCategory = null;
    /**
     * The UsualTransport
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $UsualTransport = null;
    /**
     * The InterestsType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Customer\Arrays\ArrayOfInterest|null
     */
    protected ?ArrayOfInterest $InterestsType = null;
    /**
     * The DocumentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DocumentType = null;
    /**
     * The DocumentNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DocumentNumber = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The BelongingToSpecialCustomerClass
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $BelongingToSpecialCustomerClass = null;
    /**
     * The CustomerRating
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CustomerRating = null;
    /**
     * The CustomerRisk
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CustomerRisk = null;
    /**
     * The SeverityBlackList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $SeverityBlackList = null;
    /**
     * The ReasonBlackList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ReasonBlackList = null;
    /**
     * The BillingAgreementId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $BillingAgreementId = null;
    /**
     * The ContactPerson
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Customer\Arrays\ArrayOfContactPerson|null
     */
    protected ?ArrayOfContactPerson $ContactPerson = null;
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Customer\Arrays\ArrayOfAddress|null
     */
    protected ?ArrayOfAddress $Address = null;

    /**
     * Constructor method for RetrieveCustomerResponse
     *
     * @param bool                                             $foreignVatNumber
     * @param bool                                             $soleProprietorship
     * @param bool                                             $consensusForProcessingOfPersonalData
     * @param bool                                             $consensusToMarketingInformation
     * @param bool                                             $consensusToThirdPartyPrivacy
     * @param bool                                             $consensusToProfiling
     * @param string                                           $consensusToProfilingDate
     * @param string                                           $consensusToMarketingInformationDate
     * @param bool                                             $specialNeeds
     * @param string                                           $dOB
     * @param bool                                             $flagOnboardWiFi
     * @param string                                           $dateOfConsensusAcceptance
     * @param bool                                             $flagIsEmployee
     * @param bool                                             $flagIsEmployeeParent
     * @param bool                                             $clubDellaClub
     * @param string                                           $clubDellaClubStartDate
     * @param string                                           $clubDellaClubFinishDate
     * @param bool                                             $amexCardHolder
     * @param string                                           $amexCardActivationDate
     * @param string                                           $amexCardExpirationDate
     * @param string                                           $name
     * @param string                                           $surnameLegalName
     * @param string                                           $taxCodeVatNumber
     * @param string                                           $customerId
     * @param string                                           $title
     * @param string                                           $segment
     * @param string                                           $fixedPhone
     * @param string                                           $fixedPhoneType
     * @param string                                           $alternativePhone
     * @param string                                           $mobilePhone
     * @param string                                           $email
     * @param string                                           $fax
     * @param string                                           $instantMessaging
     * @param string                                           $travelReason
     * @param string                                           $birthplace
     * @param string                                           $gender
     * @param string                                           $favoritePaymentMethod
     * @param string                                           $favoriteContactMethod
     * @param string                                           $favoriteContactSlot
     * @param string                                           $cultureLanguage
     * @param string                                           $profession
     * @param string                                           $professionalSector
     * @param string                                           $notes
     * @param string                                           $acquisitionChannel
     * @param string                                           $contactMode
     * @param string                                           $preferredSeat
     * @param string                                           $preferredMeal
     * @param string                                           $preferredClassOfService
     * @param string                                           $preferredFareClass
     * @param string                                           $preferredFilmCategory
     * @param string                                           $usualTransport
     * @param \Ntvspa\Big\Customer\Arrays\ArrayOfInterest      $interestsType
     * @param string                                           $documentType
     * @param string                                           $documentNumber
     * @param string                                           $status
     * @param string                                           $belongingToSpecialCustomerClass
     * @param string                                           $customerRating
     * @param string                                           $customerRisk
     * @param string                                           $severityBlackList
     * @param string                                           $reasonBlackList
     * @param string                                           $billingAgreementId
     * @param \Ntvspa\Big\Customer\Arrays\ArrayOfContactPerson $contactPerson
     * @param \Ntvspa\Big\Customer\Arrays\ArrayOfAddress       $address
     *
     * @uses RetrieveCustomerResponse::setForeignVatNumber()
     * @uses RetrieveCustomerResponse::setSoleProprietorship()
     * @uses RetrieveCustomerResponse::setConsensusForProcessingOfPersonalData()
     * @uses RetrieveCustomerResponse::setConsensusToMarketingInformation()
     * @uses RetrieveCustomerResponse::setConsensusToThirdPartyPrivacy()
     * @uses RetrieveCustomerResponse::setConsensusToProfiling()
     * @uses RetrieveCustomerResponse::setConsensusToProfilingDate()
     * @uses RetrieveCustomerResponse::setConsensusToMarketingInformationDate()
     * @uses RetrieveCustomerResponse::setSpecialNeeds()
     * @uses RetrieveCustomerResponse::setDOB()
     * @uses RetrieveCustomerResponse::setFlagOnboardWiFi()
     * @uses RetrieveCustomerResponse::setDateOfConsensusAcceptance()
     * @uses RetrieveCustomerResponse::setFlagIsEmployee()
     * @uses RetrieveCustomerResponse::setFlagIsEmployeeParent()
     * @uses RetrieveCustomerResponse::setClubDellaClub()
     * @uses RetrieveCustomerResponse::setClubDellaClubStartDate()
     * @uses RetrieveCustomerResponse::setClubDellaClubFinishDate()
     * @uses RetrieveCustomerResponse::setAmexCardHolder()
     * @uses RetrieveCustomerResponse::setAmexCardActivationDate()
     * @uses RetrieveCustomerResponse::setAmexCardExpirationDate()
     * @uses RetrieveCustomerResponse::setName()
     * @uses RetrieveCustomerResponse::setSurnameLegalName()
     * @uses RetrieveCustomerResponse::setTaxCodeVatNumber()
     * @uses RetrieveCustomerResponse::setCustomerId()
     * @uses RetrieveCustomerResponse::setTitle()
     * @uses RetrieveCustomerResponse::setSegment()
     * @uses RetrieveCustomerResponse::setFixedPhone()
     * @uses RetrieveCustomerResponse::setFixedPhoneType()
     * @uses RetrieveCustomerResponse::setAlternativePhone()
     * @uses RetrieveCustomerResponse::setMobilePhone()
     * @uses RetrieveCustomerResponse::setEmail()
     * @uses RetrieveCustomerResponse::setFax()
     * @uses RetrieveCustomerResponse::setInstantMessaging()
     * @uses RetrieveCustomerResponse::setTravelReason()
     * @uses RetrieveCustomerResponse::setBirthplace()
     * @uses RetrieveCustomerResponse::setGender()
     * @uses RetrieveCustomerResponse::setFavoritePaymentMethod()
     * @uses RetrieveCustomerResponse::setFavoriteContactMethod()
     * @uses RetrieveCustomerResponse::setFavoriteContactSlot()
     * @uses RetrieveCustomerResponse::setCultureLanguage()
     * @uses RetrieveCustomerResponse::setProfession()
     * @uses RetrieveCustomerResponse::setProfessionalSector()
     * @uses RetrieveCustomerResponse::setNotes()
     * @uses RetrieveCustomerResponse::setAcquisitionChannel()
     * @uses RetrieveCustomerResponse::setContactMode()
     * @uses RetrieveCustomerResponse::setPreferredSeat()
     * @uses RetrieveCustomerResponse::setPreferredMeal()
     * @uses RetrieveCustomerResponse::setPreferredClassOfService()
     * @uses RetrieveCustomerResponse::setPreferredFareClass()
     * @uses RetrieveCustomerResponse::setPreferredFilmCategory()
     * @uses RetrieveCustomerResponse::setUsualTransport()
     * @uses RetrieveCustomerResponse::setInterestsType()
     * @uses RetrieveCustomerResponse::setDocumentType()
     * @uses RetrieveCustomerResponse::setDocumentNumber()
     * @uses RetrieveCustomerResponse::setStatus()
     * @uses RetrieveCustomerResponse::setBelongingToSpecialCustomerClass()
     * @uses RetrieveCustomerResponse::setCustomerRating()
     * @uses RetrieveCustomerResponse::setCustomerRisk()
     * @uses RetrieveCustomerResponse::setSeverityBlackList()
     * @uses RetrieveCustomerResponse::setReasonBlackList()
     * @uses RetrieveCustomerResponse::setBillingAgreementId()
     * @uses RetrieveCustomerResponse::setContactPerson()
     * @uses RetrieveCustomerResponse::setAddress()
     */
    public function __construct(?bool $foreignVatNumber = null, ?bool $soleProprietorship = null, ?bool $consensusForProcessingOfPersonalData = null, ?bool $consensusToMarketingInformation = null, ?bool $consensusToThirdPartyPrivacy = null, ?bool $consensusToProfiling = null, ?string $consensusToProfilingDate = null, ?string $consensusToMarketingInformationDate = null, ?bool $specialNeeds = null, ?string $dOB = null, ?bool $flagOnboardWiFi = null, ?string $dateOfConsensusAcceptance = null, ?bool $flagIsEmployee = null, ?bool $flagIsEmployeeParent = null, ?bool $clubDellaClub = null, ?string $clubDellaClubStartDate = null, ?string $clubDellaClubFinishDate = null, ?bool $amexCardHolder = null, ?string $amexCardActivationDate = null, ?string $amexCardExpirationDate = null, ?string $name = null, ?string $surnameLegalName = null, ?string $taxCodeVatNumber = null, ?string $customerId = null, ?string $title = null, ?string $segment = null, ?string $fixedPhone = null, ?string $fixedPhoneType = null, ?string $alternativePhone = null, ?string $mobilePhone = null, ?string $email = null, ?string $fax = null, ?string $instantMessaging = null, ?string $travelReason = null, ?string $birthplace = null, ?string $gender = null, ?string $favoritePaymentMethod = null, ?string $favoriteContactMethod = null, ?string $favoriteContactSlot = null, ?string $cultureLanguage = null, ?string $profession = null, ?string $professionalSector = null, ?string $notes = null, ?string $acquisitionChannel = null, ?string $contactMode = null, ?string $preferredSeat = null, ?string $preferredMeal = null, ?string $preferredClassOfService = null, ?string $preferredFareClass = null, ?string $preferredFilmCategory = null, ?string $usualTransport = null, ?ArrayOfInterest $interestsType = null, ?string $documentType = null, ?string $documentNumber = null, ?string $status = null, ?string $belongingToSpecialCustomerClass = null, ?string $customerRating = null, ?string $customerRisk = null, ?string $severityBlackList = null, ?string $reasonBlackList = null, ?string $billingAgreementId = null, ?ArrayOfContactPerson $contactPerson = null, ?ArrayOfAddress $address = null)
    {
        $this
            ->setForeignVatNumber($foreignVatNumber)
            ->setSoleProprietorship($soleProprietorship)
            ->setConsensusForProcessingOfPersonalData($consensusForProcessingOfPersonalData)
            ->setConsensusToMarketingInformation($consensusToMarketingInformation)
            ->setConsensusToThirdPartyPrivacy($consensusToThirdPartyPrivacy)
            ->setConsensusToProfiling($consensusToProfiling)
            ->setConsensusToProfilingDate($consensusToProfilingDate)
            ->setConsensusToMarketingInformationDate($consensusToMarketingInformationDate)
            ->setSpecialNeeds($specialNeeds)
            ->setDOB($dOB)
            ->setFlagOnboardWiFi($flagOnboardWiFi)
            ->setDateOfConsensusAcceptance($dateOfConsensusAcceptance)
            ->setFlagIsEmployee($flagIsEmployee)
            ->setFlagIsEmployeeParent($flagIsEmployeeParent)
            ->setClubDellaClub($clubDellaClub)
            ->setClubDellaClubStartDate($clubDellaClubStartDate)
            ->setClubDellaClubFinishDate($clubDellaClubFinishDate)
            ->setAmexCardHolder($amexCardHolder)
            ->setAmexCardActivationDate($amexCardActivationDate)
            ->setAmexCardExpirationDate($amexCardExpirationDate)
            ->setName($name)
            ->setSurnameLegalName($surnameLegalName)
            ->setTaxCodeVatNumber($taxCodeVatNumber)
            ->setCustomerId($customerId)
            ->setTitle($title)
            ->setSegment($segment)
            ->setFixedPhone($fixedPhone)
            ->setFixedPhoneType($fixedPhoneType)
            ->setAlternativePhone($alternativePhone)
            ->setMobilePhone($mobilePhone)
            ->setEmail($email)
            ->setFax($fax)
            ->setInstantMessaging($instantMessaging)
            ->setTravelReason($travelReason)
            ->setBirthplace($birthplace)
            ->setGender($gender)
            ->setFavoritePaymentMethod($favoritePaymentMethod)
            ->setFavoriteContactMethod($favoriteContactMethod)
            ->setFavoriteContactSlot($favoriteContactSlot)
            ->setCultureLanguage($cultureLanguage)
            ->setProfession($profession)
            ->setProfessionalSector($professionalSector)
            ->setNotes($notes)
            ->setAcquisitionChannel($acquisitionChannel)
            ->setContactMode($contactMode)
            ->setPreferredSeat($preferredSeat)
            ->setPreferredMeal($preferredMeal)
            ->setPreferredClassOfService($preferredClassOfService)
            ->setPreferredFareClass($preferredFareClass)
            ->setPreferredFilmCategory($preferredFilmCategory)
            ->setUsualTransport($usualTransport)
            ->setInterestsType($interestsType)
            ->setDocumentType($documentType)
            ->setDocumentNumber($documentNumber)
            ->setStatus($status)
            ->setBelongingToSpecialCustomerClass($belongingToSpecialCustomerClass)
            ->setCustomerRating($customerRating)
            ->setCustomerRisk($customerRisk)
            ->setSeverityBlackList($severityBlackList)
            ->setReasonBlackList($reasonBlackList)
            ->setBillingAgreementId($billingAgreementId)
            ->setContactPerson($contactPerson)
            ->setAddress($address);
    }

    /**
     * Get ForeignVatNumber value
     *
     * @return bool|null
     */
    public function getForeignVatNumber(): ?bool
    {
        return $this->ForeignVatNumber;
    }

    /**
     * Set ForeignVatNumber value
     *
     * @param bool $foreignVatNumber
     *
     * @return RetrieveCustomerResponse
     */
    public function setForeignVatNumber(?bool $foreignVatNumber = null): self
    {
        // validation for constraint: boolean
        if (!is_null($foreignVatNumber) && !is_bool($foreignVatNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($foreignVatNumber, true), gettype($foreignVatNumber)), __LINE__);
        }
        $this->ForeignVatNumber = $foreignVatNumber;

        return $this;
    }

    /**
     * Get SoleProprietorship value
     *
     * @return bool|null
     */
    public function getSoleProprietorship(): ?bool
    {
        return $this->SoleProprietorship;
    }

    /**
     * Set SoleProprietorship value
     *
     * @param bool $soleProprietorship
     *
     * @return RetrieveCustomerResponse
     */
    public function setSoleProprietorship(?bool $soleProprietorship = null): self
    {
        // validation for constraint: boolean
        if (!is_null($soleProprietorship) && !is_bool($soleProprietorship)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($soleProprietorship, true), gettype($soleProprietorship)), __LINE__);
        }
        $this->SoleProprietorship = $soleProprietorship;

        return $this;
    }

    /**
     * Get ConsensusForProcessingOfPersonalData value
     *
     * @return bool|null
     */
    public function getConsensusForProcessingOfPersonalData(): ?bool
    {
        return $this->ConsensusForProcessingOfPersonalData;
    }

    /**
     * Set ConsensusForProcessingOfPersonalData value
     *
     * @param bool $consensusForProcessingOfPersonalData
     *
     * @return RetrieveCustomerResponse
     */
    public function setConsensusForProcessingOfPersonalData(?bool $consensusForProcessingOfPersonalData = null): self
    {
        // validation for constraint: boolean
        if (!is_null($consensusForProcessingOfPersonalData) && !is_bool($consensusForProcessingOfPersonalData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($consensusForProcessingOfPersonalData, true), gettype($consensusForProcessingOfPersonalData)), __LINE__);
        }
        $this->ConsensusForProcessingOfPersonalData = $consensusForProcessingOfPersonalData;

        return $this;
    }

    /**
     * Get ConsensusToMarketingInformation value
     *
     * @return bool|null
     */
    public function getConsensusToMarketingInformation(): ?bool
    {
        return $this->ConsensusToMarketingInformation;
    }

    /**
     * Set ConsensusToMarketingInformation value
     *
     * @param bool $consensusToMarketingInformation
     *
     * @return RetrieveCustomerResponse
     */
    public function setConsensusToMarketingInformation(?bool $consensusToMarketingInformation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($consensusToMarketingInformation) && !is_bool($consensusToMarketingInformation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($consensusToMarketingInformation, true), gettype($consensusToMarketingInformation)), __LINE__);
        }
        $this->ConsensusToMarketingInformation = $consensusToMarketingInformation;

        return $this;
    }

    /**
     * Get ConsensusToThirdPartyPrivacy value
     *
     * @return bool|null
     */
    public function getConsensusToThirdPartyPrivacy(): ?bool
    {
        return $this->ConsensusToThirdPartyPrivacy;
    }

    /**
     * Set ConsensusToThirdPartyPrivacy value
     *
     * @param bool $consensusToThirdPartyPrivacy
     *
     * @return RetrieveCustomerResponse
     */
    public function setConsensusToThirdPartyPrivacy(?bool $consensusToThirdPartyPrivacy = null): self
    {
        // validation for constraint: boolean
        if (!is_null($consensusToThirdPartyPrivacy) && !is_bool($consensusToThirdPartyPrivacy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($consensusToThirdPartyPrivacy, true), gettype($consensusToThirdPartyPrivacy)), __LINE__);
        }
        $this->ConsensusToThirdPartyPrivacy = $consensusToThirdPartyPrivacy;

        return $this;
    }

    /**
     * Get ConsensusToProfiling value
     *
     * @return bool|null
     */
    public function getConsensusToProfiling(): ?bool
    {
        return $this->ConsensusToProfiling;
    }

    /**
     * Set ConsensusToProfiling value
     *
     * @param bool $consensusToProfiling
     *
     * @return RetrieveCustomerResponse
     */
    public function setConsensusToProfiling(?bool $consensusToProfiling = null): self
    {
        // validation for constraint: boolean
        if (!is_null($consensusToProfiling) && !is_bool($consensusToProfiling)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($consensusToProfiling, true), gettype($consensusToProfiling)), __LINE__);
        }
        $this->ConsensusToProfiling = $consensusToProfiling;

        return $this;
    }

    /**
     * Get ConsensusToProfilingDate value
     *
     * @return string|null
     */
    public function getConsensusToProfilingDate(): ?string
    {
        return $this->ConsensusToProfilingDate;
    }

    /**
     * Set ConsensusToProfilingDate value
     *
     * @param string $consensusToProfilingDate
     *
     * @return RetrieveCustomerResponse
     */
    public function setConsensusToProfilingDate(?string $consensusToProfilingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($consensusToProfilingDate) && !is_string($consensusToProfilingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consensusToProfilingDate, true), gettype($consensusToProfilingDate)), __LINE__);
        }
        $this->ConsensusToProfilingDate = $consensusToProfilingDate;

        return $this;
    }

    /**
     * Get ConsensusToMarketingInformationDate value
     *
     * @return string|null
     */
    public function getConsensusToMarketingInformationDate(): ?string
    {
        return $this->ConsensusToMarketingInformationDate;
    }

    /**
     * Set ConsensusToMarketingInformationDate value
     *
     * @param string $consensusToMarketingInformationDate
     *
     * @return RetrieveCustomerResponse
     */
    public function setConsensusToMarketingInformationDate(?string $consensusToMarketingInformationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($consensusToMarketingInformationDate) && !is_string($consensusToMarketingInformationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consensusToMarketingInformationDate, true), gettype($consensusToMarketingInformationDate)), __LINE__);
        }
        $this->ConsensusToMarketingInformationDate = $consensusToMarketingInformationDate;

        return $this;
    }

    /**
     * Get SpecialNeeds value
     *
     * @return bool|null
     */
    public function getSpecialNeeds(): ?bool
    {
        return $this->SpecialNeeds;
    }

    /**
     * Set SpecialNeeds value
     *
     * @param bool $specialNeeds
     *
     * @return RetrieveCustomerResponse
     */
    public function setSpecialNeeds(?bool $specialNeeds = null): self
    {
        // validation for constraint: boolean
        if (!is_null($specialNeeds) && !is_bool($specialNeeds)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($specialNeeds, true), gettype($specialNeeds)), __LINE__);
        }
        $this->SpecialNeeds = $specialNeeds;

        return $this;
    }

    /**
     * Get DOB value
     *
     * @return string|null
     */
    public function getDOB(): ?string
    {
        return $this->DOB;
    }

    /**
     * Set DOB value
     *
     * @param string $dOB
     *
     * @return RetrieveCustomerResponse
     */
    public function setDOB(?string $dOB = null): self
    {
        // validation for constraint: string
        if (!is_null($dOB) && !is_string($dOB)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dOB, true), gettype($dOB)), __LINE__);
        }
        $this->DOB = $dOB;

        return $this;
    }

    /**
     * Get FlagOnboardWiFi value
     *
     * @return bool|null
     */
    public function getFlagOnboardWiFi(): ?bool
    {
        return $this->FlagOnboardWiFi;
    }

    /**
     * Set FlagOnboardWiFi value
     *
     * @param bool $flagOnboardWiFi
     *
     * @return RetrieveCustomerResponse
     */
    public function setFlagOnboardWiFi(?bool $flagOnboardWiFi = null): self
    {
        // validation for constraint: boolean
        if (!is_null($flagOnboardWiFi) && !is_bool($flagOnboardWiFi)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($flagOnboardWiFi, true), gettype($flagOnboardWiFi)), __LINE__);
        }
        $this->FlagOnboardWiFi = $flagOnboardWiFi;

        return $this;
    }

    /**
     * Get DateOfConsensusAcceptance value
     *
     * @return string|null
     */
    public function getDateOfConsensusAcceptance(): ?string
    {
        return $this->DateOfConsensusAcceptance;
    }

    /**
     * Set DateOfConsensusAcceptance value
     *
     * @param string $dateOfConsensusAcceptance
     *
     * @return RetrieveCustomerResponse
     */
    public function setDateOfConsensusAcceptance(?string $dateOfConsensusAcceptance = null): self
    {
        // validation for constraint: string
        if (!is_null($dateOfConsensusAcceptance) && !is_string($dateOfConsensusAcceptance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateOfConsensusAcceptance, true), gettype($dateOfConsensusAcceptance)), __LINE__);
        }
        $this->DateOfConsensusAcceptance = $dateOfConsensusAcceptance;

        return $this;
    }

    /**
     * Get FlagIsEmployee value
     *
     * @return bool|null
     */
    public function getFlagIsEmployee(): ?bool
    {
        return $this->FlagIsEmployee;
    }

    /**
     * Set FlagIsEmployee value
     *
     * @param bool $flagIsEmployee
     *
     * @return RetrieveCustomerResponse
     */
    public function setFlagIsEmployee(?bool $flagIsEmployee = null): self
    {
        // validation for constraint: boolean
        if (!is_null($flagIsEmployee) && !is_bool($flagIsEmployee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($flagIsEmployee, true), gettype($flagIsEmployee)), __LINE__);
        }
        $this->FlagIsEmployee = $flagIsEmployee;

        return $this;
    }

    /**
     * Get FlagIsEmployeeParent value
     *
     * @return bool|null
     */
    public function getFlagIsEmployeeParent(): ?bool
    {
        return $this->FlagIsEmployeeParent;
    }

    /**
     * Set FlagIsEmployeeParent value
     *
     * @param bool $flagIsEmployeeParent
     *
     * @return RetrieveCustomerResponse
     */
    public function setFlagIsEmployeeParent(?bool $flagIsEmployeeParent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($flagIsEmployeeParent) && !is_bool($flagIsEmployeeParent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($flagIsEmployeeParent, true), gettype($flagIsEmployeeParent)), __LINE__);
        }
        $this->FlagIsEmployeeParent = $flagIsEmployeeParent;

        return $this;
    }

    /**
     * Get ClubDellaClub value
     *
     * @return bool|null
     */
    public function getClubDellaClub(): ?bool
    {
        return $this->ClubDellaClub;
    }

    /**
     * Set ClubDellaClub value
     *
     * @param bool $clubDellaClub
     *
     * @return RetrieveCustomerResponse
     */
    public function setClubDellaClub(?bool $clubDellaClub = null): self
    {
        // validation for constraint: boolean
        if (!is_null($clubDellaClub) && !is_bool($clubDellaClub)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($clubDellaClub, true), gettype($clubDellaClub)), __LINE__);
        }
        $this->ClubDellaClub = $clubDellaClub;

        return $this;
    }

    /**
     * Get ClubDellaClubStartDate value
     *
     * @return string|null
     */
    public function getClubDellaClubStartDate(): ?string
    {
        return $this->ClubDellaClubStartDate;
    }

    /**
     * Set ClubDellaClubStartDate value
     *
     * @param string $clubDellaClubStartDate
     *
     * @return RetrieveCustomerResponse
     */
    public function setClubDellaClubStartDate(?string $clubDellaClubStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($clubDellaClubStartDate) && !is_string($clubDellaClubStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clubDellaClubStartDate, true), gettype($clubDellaClubStartDate)), __LINE__);
        }
        $this->ClubDellaClubStartDate = $clubDellaClubStartDate;

        return $this;
    }

    /**
     * Get ClubDellaClubFinishDate value
     *
     * @return string|null
     */
    public function getClubDellaClubFinishDate(): ?string
    {
        return $this->ClubDellaClubFinishDate;
    }

    /**
     * Set ClubDellaClubFinishDate value
     *
     * @param string $clubDellaClubFinishDate
     *
     * @return RetrieveCustomerResponse
     */
    public function setClubDellaClubFinishDate(?string $clubDellaClubFinishDate = null): self
    {
        // validation for constraint: string
        if (!is_null($clubDellaClubFinishDate) && !is_string($clubDellaClubFinishDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clubDellaClubFinishDate, true), gettype($clubDellaClubFinishDate)), __LINE__);
        }
        $this->ClubDellaClubFinishDate = $clubDellaClubFinishDate;

        return $this;
    }

    /**
     * Get AmexCardHolder value
     *
     * @return bool|null
     */
    public function getAmexCardHolder(): ?bool
    {
        return $this->AmexCardHolder;
    }

    /**
     * Set AmexCardHolder value
     *
     * @param bool $amexCardHolder
     *
     * @return RetrieveCustomerResponse
     */
    public function setAmexCardHolder(?bool $amexCardHolder = null): self
    {
        // validation for constraint: boolean
        if (!is_null($amexCardHolder) && !is_bool($amexCardHolder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($amexCardHolder, true), gettype($amexCardHolder)), __LINE__);
        }
        $this->AmexCardHolder = $amexCardHolder;

        return $this;
    }

    /**
     * Get AmexCardActivationDate value
     *
     * @return string|null
     */
    public function getAmexCardActivationDate(): ?string
    {
        return $this->AmexCardActivationDate;
    }

    /**
     * Set AmexCardActivationDate value
     *
     * @param string $amexCardActivationDate
     *
     * @return RetrieveCustomerResponse
     */
    public function setAmexCardActivationDate(?string $amexCardActivationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($amexCardActivationDate) && !is_string($amexCardActivationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amexCardActivationDate, true), gettype($amexCardActivationDate)), __LINE__);
        }
        $this->AmexCardActivationDate = $amexCardActivationDate;

        return $this;
    }

    /**
     * Get AmexCardExpirationDate value
     *
     * @return string|null
     */
    public function getAmexCardExpirationDate(): ?string
    {
        return $this->AmexCardExpirationDate;
    }

    /**
     * Set AmexCardExpirationDate value
     *
     * @param string $amexCardExpirationDate
     *
     * @return RetrieveCustomerResponse
     */
    public function setAmexCardExpirationDate(?string $amexCardExpirationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($amexCardExpirationDate) && !is_string($amexCardExpirationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amexCardExpirationDate, true), gettype($amexCardExpirationDate)), __LINE__);
        }
        $this->AmexCardExpirationDate = $amexCardExpirationDate;

        return $this;
    }

    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $name
     *
     * @return RetrieveCustomerResponse
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }

        return $this;
    }

    /**
     * Get SurnameLegalName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getSurnameLegalName(): ?string
    {
        return $this->SurnameLegalName ?? null;
    }

    /**
     * Set SurnameLegalName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $surnameLegalName
     *
     * @return RetrieveCustomerResponse
     */
    public function setSurnameLegalName(?string $surnameLegalName = null): self
    {
        // validation for constraint: string
        if (!is_null($surnameLegalName) && !is_string($surnameLegalName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($surnameLegalName, true), gettype($surnameLegalName)), __LINE__);
        }
        if (is_null($surnameLegalName) || (is_array($surnameLegalName) && empty($surnameLegalName))) {
            unset($this->SurnameLegalName);
        } else {
            $this->SurnameLegalName = $surnameLegalName;
        }

        return $this;
    }

    /**
     * Get TaxCodeVatNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTaxCodeVatNumber(): ?string
    {
        return $this->TaxCodeVatNumber ?? null;
    }

    /**
     * Set TaxCodeVatNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $taxCodeVatNumber
     *
     * @return RetrieveCustomerResponse
     */
    public function setTaxCodeVatNumber(?string $taxCodeVatNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($taxCodeVatNumber) && !is_string($taxCodeVatNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxCodeVatNumber, true), gettype($taxCodeVatNumber)), __LINE__);
        }
        if (is_null($taxCodeVatNumber) || (is_array($taxCodeVatNumber) && empty($taxCodeVatNumber))) {
            unset($this->TaxCodeVatNumber);
        } else {
            $this->TaxCodeVatNumber = $taxCodeVatNumber;
        }

        return $this;
    }

    /**
     * Get CustomerId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->CustomerId ?? null;
    }

    /**
     * Set CustomerId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $customerId
     *
     * @return RetrieveCustomerResponse
     */
    public function setCustomerId(?string $customerId = null): self
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        if (is_null($customerId) || (is_array($customerId) && empty($customerId))) {
            unset($this->CustomerId);
        } else {
            $this->CustomerId = $customerId;
        }

        return $this;
    }

    /**
     * Get Title value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->Title ?? null;
    }

    /**
     * Set Title value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $title
     *
     * @return RetrieveCustomerResponse
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\Title::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\Title::valueIsValid()
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\Title::valueIsValid($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\Title', is_array($title) ? implode(', ', $title) : var_export($title, true), implode(', ', Title::getValidValues())), __LINE__);
        }
        if (is_null($title) || (is_array($title) && empty($title))) {
            unset($this->Title);
        } else {
            $this->Title = $title;
        }

        return $this;
    }

    /**
     * Get Segment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getSegment(): ?string
    {
        return $this->Segment ?? null;
    }

    /**
     * Set Segment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $segment
     *
     * @return RetrieveCustomerResponse
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\Segment::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\Segment::valueIsValid()
     */
    public function setSegment(?string $segment = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\Segment::valueIsValid($segment)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\Segment', is_array($segment) ? implode(', ', $segment) : var_export($segment, true), implode(', ', Segment::getValidValues())), __LINE__);
        }
        if (is_null($segment) || (is_array($segment) && empty($segment))) {
            unset($this->Segment);
        } else {
            $this->Segment = $segment;
        }

        return $this;
    }

    /**
     * Get FixedPhone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFixedPhone(): ?string
    {
        return $this->FixedPhone ?? null;
    }

    /**
     * Set FixedPhone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $fixedPhone
     *
     * @return RetrieveCustomerResponse
     */
    public function setFixedPhone(?string $fixedPhone = null): self
    {
        // validation for constraint: string
        if (!is_null($fixedPhone) && !is_string($fixedPhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fixedPhone, true), gettype($fixedPhone)), __LINE__);
        }
        if (is_null($fixedPhone) || (is_array($fixedPhone) && empty($fixedPhone))) {
            unset($this->FixedPhone);
        } else {
            $this->FixedPhone = $fixedPhone;
        }

        return $this;
    }

    /**
     * Get FixedPhoneType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFixedPhoneType(): ?string
    {
        return $this->FixedPhoneType ?? null;
    }

    /**
     * Set FixedPhoneType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $fixedPhoneType
     *
     * @return RetrieveCustomerResponse
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\FixedPhone::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\FixedPhone::valueIsValid()
     */
    public function setFixedPhoneType(?string $fixedPhoneType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\FixedPhone::valueIsValid($fixedPhoneType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\FixedPhone', is_array($fixedPhoneType) ? implode(', ', $fixedPhoneType) : var_export($fixedPhoneType, true), implode(', ', FixedPhone::getValidValues())), __LINE__);
        }
        if (is_null($fixedPhoneType) || (is_array($fixedPhoneType) && empty($fixedPhoneType))) {
            unset($this->FixedPhoneType);
        } else {
            $this->FixedPhoneType = $fixedPhoneType;
        }

        return $this;
    }

    /**
     * Get AlternativePhone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getAlternativePhone(): ?string
    {
        return $this->AlternativePhone ?? null;
    }

    /**
     * Set AlternativePhone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $alternativePhone
     *
     * @return RetrieveCustomerResponse
     */
    public function setAlternativePhone(?string $alternativePhone = null): self
    {
        // validation for constraint: string
        if (!is_null($alternativePhone) && !is_string($alternativePhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alternativePhone, true), gettype($alternativePhone)), __LINE__);
        }
        if (is_null($alternativePhone) || (is_array($alternativePhone) && empty($alternativePhone))) {
            unset($this->AlternativePhone);
        } else {
            $this->AlternativePhone = $alternativePhone;
        }

        return $this;
    }

    /**
     * Get MobilePhone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getMobilePhone(): ?string
    {
        return $this->MobilePhone ?? null;
    }

    /**
     * Set MobilePhone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $mobilePhone
     *
     * @return RetrieveCustomerResponse
     */
    public function setMobilePhone(?string $mobilePhone = null): self
    {
        // validation for constraint: string
        if (!is_null($mobilePhone) && !is_string($mobilePhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobilePhone, true), gettype($mobilePhone)), __LINE__);
        }
        if (is_null($mobilePhone) || (is_array($mobilePhone) && empty($mobilePhone))) {
            unset($this->MobilePhone);
        } else {
            $this->MobilePhone = $mobilePhone;
        }

        return $this;
    }

    /**
     * Get Email value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->Email ?? null;
    }

    /**
     * Set Email value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $email
     *
     * @return RetrieveCustomerResponse
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        if (is_null($email) || (is_array($email) && empty($email))) {
            unset($this->Email);
        } else {
            $this->Email = $email;
        }

        return $this;
    }

    /**
     * Get Fax value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->Fax ?? null;
    }

    /**
     * Set Fax value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $fax
     *
     * @return RetrieveCustomerResponse
     */
    public function setFax(?string $fax = null): self
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fax, true), gettype($fax)), __LINE__);
        }
        if (is_null($fax) || (is_array($fax) && empty($fax))) {
            unset($this->Fax);
        } else {
            $this->Fax = $fax;
        }

        return $this;
    }

    /**
     * Get InstantMessaging value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getInstantMessaging(): ?string
    {
        return $this->InstantMessaging ?? null;
    }

    /**
     * Set InstantMessaging value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $instantMessaging
     *
     * @return RetrieveCustomerResponse
     */
    public function setInstantMessaging(?string $instantMessaging = null): self
    {
        // validation for constraint: string
        if (!is_null($instantMessaging) && !is_string($instantMessaging)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instantMessaging, true), gettype($instantMessaging)), __LINE__);
        }
        if (is_null($instantMessaging) || (is_array($instantMessaging) && empty($instantMessaging))) {
            unset($this->InstantMessaging);
        } else {
            $this->InstantMessaging = $instantMessaging;
        }

        return $this;
    }

    /**
     * Get TravelReason value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTravelReason(): ?string
    {
        return $this->TravelReason ?? null;
    }

    /**
     * Set TravelReason value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $travelReason
     *
     * @return RetrieveCustomerResponse
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\TravelReason::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\TravelReason::valueIsValid()
     */
    public function setTravelReason(?string $travelReason = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\TravelReason::valueIsValid($travelReason)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\TravelReason', is_array($travelReason) ? implode(', ', $travelReason) : var_export($travelReason, true), implode(', ', TravelReason::getValidValues())), __LINE__);
        }
        if (is_null($travelReason) || (is_array($travelReason) && empty($travelReason))) {
            unset($this->TravelReason);
        } else {
            $this->TravelReason = $travelReason;
        }

        return $this;
    }

    /**
     * Get Birthplace value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getBirthplace(): ?string
    {
        return $this->Birthplace ?? null;
    }

    /**
     * Set Birthplace value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $birthplace
     *
     * @return RetrieveCustomerResponse
     */
    public function setBirthplace(?string $birthplace = null): self
    {
        // validation for constraint: string
        if (!is_null($birthplace) && !is_string($birthplace)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthplace, true), gettype($birthplace)), __LINE__);
        }
        if (is_null($birthplace) || (is_array($birthplace) && empty($birthplace))) {
            unset($this->Birthplace);
        } else {
            $this->Birthplace = $birthplace;
        }

        return $this;
    }

    /**
     * Get Gender value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->Gender ?? null;
    }

    /**
     * Set Gender value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $gender
     *
     * @return RetrieveCustomerResponse
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\Gender::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\Gender::valueIsValid()
     */
    public function setGender(?string $gender = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\Gender::valueIsValid($gender)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\Gender', is_array($gender) ? implode(', ', $gender) : var_export($gender, true), implode(', ', Gender::getValidValues())), __LINE__);
        }
        if (is_null($gender) || (is_array($gender) && empty($gender))) {
            unset($this->Gender);
        } else {
            $this->Gender = $gender;
        }

        return $this;
    }

    /**
     * Get FavoritePaymentMethod value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFavoritePaymentMethod(): ?string
    {
        return $this->FavoritePaymentMethod ?? null;
    }

    /**
     * Set FavoritePaymentMethod value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $favoritePaymentMethod
     *
     * @return RetrieveCustomerResponse
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\PaymentMethod::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\PaymentMethod::valueIsValid()
     */
    public function setFavoritePaymentMethod(?string $favoritePaymentMethod = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\PaymentMethod::valueIsValid($favoritePaymentMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\PaymentMethod', is_array($favoritePaymentMethod) ? implode(', ', $favoritePaymentMethod) : var_export($favoritePaymentMethod, true), implode(', ', PaymentMethod::getValidValues())), __LINE__);
        }
        if (is_null($favoritePaymentMethod) || (is_array($favoritePaymentMethod) && empty($favoritePaymentMethod))) {
            unset($this->FavoritePaymentMethod);
        } else {
            $this->FavoritePaymentMethod = $favoritePaymentMethod;
        }

        return $this;
    }

    /**
     * Get FavoriteContactMethod value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFavoriteContactMethod(): ?string
    {
        return $this->FavoriteContactMethod ?? null;
    }

    /**
     * Set FavoriteContactMethod value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $favoriteContactMethod
     *
     * @return RetrieveCustomerResponse
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\FavoriteContactMethod::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\FavoriteContactMethod::valueIsValid()
     */
    public function setFavoriteContactMethod(?string $favoriteContactMethod = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\FavoriteContactMethod::valueIsValid($favoriteContactMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\FavoriteContactMethod', is_array($favoriteContactMethod) ? implode(', ', $favoriteContactMethod) : var_export($favoriteContactMethod, true), implode(', ', FavoriteContactMethod::getValidValues())), __LINE__);
        }
        if (is_null($favoriteContactMethod) || (is_array($favoriteContactMethod) && empty($favoriteContactMethod))) {
            unset($this->FavoriteContactMethod);
        } else {
            $this->FavoriteContactMethod = $favoriteContactMethod;
        }

        return $this;
    }

    /**
     * Get FavoriteContactSlot value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFavoriteContactSlot(): ?string
    {
        return $this->FavoriteContactSlot ?? null;
    }

    /**
     * Set FavoriteContactSlot value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $favoriteContactSlot
     *
     * @return RetrieveCustomerResponse
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\FavoriteContactSlot::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\FavoriteContactSlot::valueIsValid()
     */
    public function setFavoriteContactSlot(?string $favoriteContactSlot = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\FavoriteContactSlot::valueIsValid($favoriteContactSlot)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\FavoriteContactSlot', is_array($favoriteContactSlot) ? implode(', ', $favoriteContactSlot) : var_export($favoriteContactSlot, true), implode(', ', FavoriteContactSlot::getValidValues())), __LINE__);
        }
        if (is_null($favoriteContactSlot) || (is_array($favoriteContactSlot) && empty($favoriteContactSlot))) {
            unset($this->FavoriteContactSlot);
        } else {
            $this->FavoriteContactSlot = $favoriteContactSlot;
        }

        return $this;
    }

    /**
     * Get CultureLanguage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCultureLanguage(): ?string
    {
        return $this->CultureLanguage ?? null;
    }

    /**
     * Set CultureLanguage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $cultureLanguage
     *
     * @return RetrieveCustomerResponse
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\Culture::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\Culture::valueIsValid()
     */
    public function setCultureLanguage(?string $cultureLanguage = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\Culture::valueIsValid($cultureLanguage)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\Culture', is_array($cultureLanguage) ? implode(', ', $cultureLanguage) : var_export($cultureLanguage, true), implode(', ', Culture::getValidValues())), __LINE__);
        }
        if (is_null($cultureLanguage) || (is_array($cultureLanguage) && empty($cultureLanguage))) {
            unset($this->CultureLanguage);
        } else {
            $this->CultureLanguage = $cultureLanguage;
        }

        return $this;
    }

    /**
     * Get Profession value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getProfession(): ?string
    {
        return $this->Profession ?? null;
    }

    /**
     * Set Profession value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $profession
     *
     * @return RetrieveCustomerResponse
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\Profession::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\Profession::valueIsValid()
     */
    public function setProfession(?string $profession = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\Profession::valueIsValid($profession)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\Profession', is_array($profession) ? implode(', ', $profession) : var_export($profession, true), implode(', ', Profession::getValidValues())), __LINE__);
        }
        if (is_null($profession) || (is_array($profession) && empty($profession))) {
            unset($this->Profession);
        } else {
            $this->Profession = $profession;
        }

        return $this;
    }

    /**
     * Get ProfessionalSector value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getProfessionalSector(): ?string
    {
        return $this->ProfessionalSector ?? null;
    }

    /**
     * Set ProfessionalSector value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $professionalSector
     *
     * @return RetrieveCustomerResponse
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\ProfessionalSector::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\ProfessionalSector::valueIsValid()
     */
    public function setProfessionalSector(?string $professionalSector = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\ProfessionalSector::valueIsValid($professionalSector)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\ProfessionalSector', is_array($professionalSector) ? implode(', ', $professionalSector) : var_export($professionalSector, true), implode(', ', ProfessionalSector::getValidValues())), __LINE__);
        }
        if (is_null($professionalSector) || (is_array($professionalSector) && empty($professionalSector))) {
            unset($this->ProfessionalSector);
        } else {
            $this->ProfessionalSector = $professionalSector;
        }

        return $this;
    }

    /**
     * Get Notes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getNotes(): ?string
    {
        return $this->Notes ?? null;
    }

    /**
     * Set Notes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $notes
     *
     * @return RetrieveCustomerResponse
     */
    public function setNotes(?string $notes = null): self
    {
        // validation for constraint: string
        if (!is_null($notes) && !is_string($notes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notes, true), gettype($notes)), __LINE__);
        }
        if (is_null($notes) || (is_array($notes) && empty($notes))) {
            unset($this->Notes);
        } else {
            $this->Notes = $notes;
        }

        return $this;
    }

    /**
     * Get AcquisitionChannel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getAcquisitionChannel(): ?string
    {
        return $this->AcquisitionChannel ?? null;
    }

    /**
     * Set AcquisitionChannel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $acquisitionChannel
     *
     * @return RetrieveCustomerResponse
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\AcquisitionChannel::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\AcquisitionChannel::valueIsValid()
     */
    public function setAcquisitionChannel(?string $acquisitionChannel = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\AcquisitionChannel::valueIsValid($acquisitionChannel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\AcquisitionChannel', is_array($acquisitionChannel) ? implode(', ', $acquisitionChannel) : var_export($acquisitionChannel, true), implode(', ', AcquisitionChannel::getValidValues())), __LINE__);
        }
        if (is_null($acquisitionChannel) || (is_array($acquisitionChannel) && empty($acquisitionChannel))) {
            unset($this->AcquisitionChannel);
        } else {
            $this->AcquisitionChannel = $acquisitionChannel;
        }

        return $this;
    }

    /**
     * Get ContactMode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getContactMode(): ?string
    {
        return $this->ContactMode ?? null;
    }

    /**
     * Set ContactMode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $contactMode
     *
     * @return RetrieveCustomerResponse
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\ContactMode::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\ContactMode::valueIsValid()
     */
    public function setContactMode(?string $contactMode = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\ContactMode::valueIsValid($contactMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\ContactMode', is_array($contactMode) ? implode(', ', $contactMode) : var_export($contactMode, true), implode(', ', ContactMode::getValidValues())), __LINE__);
        }
        if (is_null($contactMode) || (is_array($contactMode) && empty($contactMode))) {
            unset($this->ContactMode);
        } else {
            $this->ContactMode = $contactMode;
        }

        return $this;
    }

    /**
     * Get PreferredSeat value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPreferredSeat(): ?string
    {
        return $this->PreferredSeat ?? null;
    }

    /**
     * Set PreferredSeat value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $preferredSeat
     *
     * @return RetrieveCustomerResponse
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\PreferredSeat::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\PreferredSeat::valueIsValid()
     */
    public function setPreferredSeat(?string $preferredSeat = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\PreferredSeat::valueIsValid($preferredSeat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\PreferredSeat', is_array($preferredSeat) ? implode(', ', $preferredSeat) : var_export($preferredSeat, true), implode(', ', PreferredSeat::getValidValues())), __LINE__);
        }
        if (is_null($preferredSeat) || (is_array($preferredSeat) && empty($preferredSeat))) {
            unset($this->PreferredSeat);
        } else {
            $this->PreferredSeat = $preferredSeat;
        }

        return $this;
    }

    /**
     * Get PreferredMeal value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPreferredMeal(): ?string
    {
        return $this->PreferredMeal ?? null;
    }

    /**
     * Set PreferredMeal value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $preferredMeal
     *
     * @return RetrieveCustomerResponse
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\PreferredMeal::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\PreferredMeal::valueIsValid()
     */
    public function setPreferredMeal(?string $preferredMeal = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\PreferredMeal::valueIsValid($preferredMeal)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\PreferredMeal', is_array($preferredMeal) ? implode(', ', $preferredMeal) : var_export($preferredMeal, true), implode(', ', PreferredMeal::getValidValues())), __LINE__);
        }
        if (is_null($preferredMeal) || (is_array($preferredMeal) && empty($preferredMeal))) {
            unset($this->PreferredMeal);
        } else {
            $this->PreferredMeal = $preferredMeal;
        }

        return $this;
    }

    /**
     * Get PreferredClassOfService value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPreferredClassOfService(): ?string
    {
        return $this->PreferredClassOfService ?? null;
    }

    /**
     * Set PreferredClassOfService value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $preferredClassOfService
     *
     * @return RetrieveCustomerResponse
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\PreferredClassOfService::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\PreferredClassOfService::valueIsValid()
     */
    public function setPreferredClassOfService(?string $preferredClassOfService = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\PreferredClassOfService::valueIsValid($preferredClassOfService)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\PreferredClassOfService', is_array($preferredClassOfService) ? implode(', ', $preferredClassOfService) : var_export($preferredClassOfService, true), implode(', ', PreferredClassOfService::getValidValues())), __LINE__);
        }
        if (is_null($preferredClassOfService) || (is_array($preferredClassOfService) && empty($preferredClassOfService))) {
            unset($this->PreferredClassOfService);
        } else {
            $this->PreferredClassOfService = $preferredClassOfService;
        }

        return $this;
    }

    /**
     * Get PreferredFareClass value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPreferredFareClass(): ?string
    {
        return $this->PreferredFareClass ?? null;
    }

    /**
     * Set PreferredFareClass value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $preferredFareClass
     *
     * @return RetrieveCustomerResponse
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\PreferredFareClass::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\PreferredFareClass::valueIsValid()
     */
    public function setPreferredFareClass(?string $preferredFareClass = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\PreferredFareClass::valueIsValid($preferredFareClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\PreferredFareClass', is_array($preferredFareClass) ? implode(', ', $preferredFareClass) : var_export($preferredFareClass, true), implode(', ', PreferredFareClass::getValidValues())), __LINE__);
        }
        if (is_null($preferredFareClass) || (is_array($preferredFareClass) && empty($preferredFareClass))) {
            unset($this->PreferredFareClass);
        } else {
            $this->PreferredFareClass = $preferredFareClass;
        }

        return $this;
    }

    /**
     * Get PreferredFilmCategory value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPreferredFilmCategory(): ?string
    {
        return $this->PreferredFilmCategory ?? null;
    }

    /**
     * Set PreferredFilmCategory value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $preferredFilmCategory
     *
     * @return RetrieveCustomerResponse
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\PreferredFilmCategory::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\PreferredFilmCategory::valueIsValid()
     */
    public function setPreferredFilmCategory(?string $preferredFilmCategory = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\PreferredFilmCategory::valueIsValid($preferredFilmCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\PreferredFilmCategory', is_array($preferredFilmCategory) ? implode(', ', $preferredFilmCategory) : var_export($preferredFilmCategory, true), implode(', ', PreferredFilmCategory::getValidValues())), __LINE__);
        }
        if (is_null($preferredFilmCategory) || (is_array($preferredFilmCategory) && empty($preferredFilmCategory))) {
            unset($this->PreferredFilmCategory);
        } else {
            $this->PreferredFilmCategory = $preferredFilmCategory;
        }

        return $this;
    }

    /**
     * Get UsualTransport value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getUsualTransport(): ?string
    {
        return $this->UsualTransport ?? null;
    }

    /**
     * Set UsualTransport value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $usualTransport
     *
     * @return RetrieveCustomerResponse
     */
    public function setUsualTransport(?string $usualTransport = null): self
    {
        // validation for constraint: string
        if (!is_null($usualTransport) && !is_string($usualTransport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($usualTransport, true), gettype($usualTransport)), __LINE__);
        }
        if (is_null($usualTransport) || (is_array($usualTransport) && empty($usualTransport))) {
            unset($this->UsualTransport);
        } else {
            $this->UsualTransport = $usualTransport;
        }

        return $this;
    }

    /**
     * Get InterestsType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Customer\Arrays\ArrayOfInterest|null
     */
    public function getInterestsType(): ?ArrayOfInterest
    {
        return $this->InterestsType ?? null;
    }

    /**
     * Set InterestsType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Customer\Arrays\ArrayOfInterest $interestsType
     *
     * @return RetrieveCustomerResponse
     */
    public function setInterestsType(?ArrayOfInterest $interestsType = null): self
    {
        if (is_null($interestsType) || (is_array($interestsType) && empty($interestsType))) {
            unset($this->InterestsType);
        } else {
            $this->InterestsType = $interestsType;
        }

        return $this;
    }

    /**
     * Get DocumentType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDocumentType(): ?string
    {
        return $this->DocumentType ?? null;
    }

    /**
     * Set DocumentType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $documentType
     *
     * @return RetrieveCustomerResponse
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\Document::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\Document::valueIsValid()
     */
    public function setDocumentType(?string $documentType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\Document::valueIsValid($documentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\Document', is_array($documentType) ? implode(', ', $documentType) : var_export($documentType, true), implode(', ', Document::getValidValues())), __LINE__);
        }
        if (is_null($documentType) || (is_array($documentType) && empty($documentType))) {
            unset($this->DocumentType);
        } else {
            $this->DocumentType = $documentType;
        }

        return $this;
    }

    /**
     * Get DocumentNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDocumentNumber(): ?string
    {
        return $this->DocumentNumber ?? null;
    }

    /**
     * Set DocumentNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $documentNumber
     *
     * @return RetrieveCustomerResponse
     */
    public function setDocumentNumber(?string $documentNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($documentNumber) && !is_string($documentNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentNumber, true), gettype($documentNumber)), __LINE__);
        }
        if (is_null($documentNumber) || (is_array($documentNumber) && empty($documentNumber))) {
            unset($this->DocumentNumber);
        } else {
            $this->DocumentNumber = $documentNumber;
        }

        return $this;
    }

    /**
     * Get Status value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status ?? null;
    }

    /**
     * Set Status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $status
     *
     * @return RetrieveCustomerResponse
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\Status::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\Status::valueIsValid()
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\Status::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\Status', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', Status::getValidValues())), __LINE__);
        }
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->Status);
        } else {
            $this->Status = $status;
        }

        return $this;
    }

    /**
     * Get BelongingToSpecialCustomerClass value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getBelongingToSpecialCustomerClass(): ?string
    {
        return $this->BelongingToSpecialCustomerClass ?? null;
    }

    /**
     * Set BelongingToSpecialCustomerClass value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $belongingToSpecialCustomerClass
     *
     * @return RetrieveCustomerResponse
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\SpecialCustomer::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\SpecialCustomer::valueIsValid()
     */
    public function setBelongingToSpecialCustomerClass(?string $belongingToSpecialCustomerClass = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\SpecialCustomer::valueIsValid($belongingToSpecialCustomerClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\SpecialCustomer', is_array($belongingToSpecialCustomerClass) ? implode(', ', $belongingToSpecialCustomerClass) : var_export($belongingToSpecialCustomerClass, true), implode(', ', SpecialCustomer::getValidValues())), __LINE__);
        }
        if (is_null($belongingToSpecialCustomerClass) || (is_array($belongingToSpecialCustomerClass) && empty($belongingToSpecialCustomerClass))) {
            unset($this->BelongingToSpecialCustomerClass);
        } else {
            $this->BelongingToSpecialCustomerClass = $belongingToSpecialCustomerClass;
        }

        return $this;
    }

    /**
     * Get CustomerRating value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCustomerRating(): ?string
    {
        return $this->CustomerRating ?? null;
    }

    /**
     * Set CustomerRating value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $customerRating
     *
     * @return RetrieveCustomerResponse
     */
    public function setCustomerRating(?string $customerRating = null): self
    {
        // validation for constraint: string
        if (!is_null($customerRating) && !is_string($customerRating)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerRating, true), gettype($customerRating)), __LINE__);
        }
        if (is_null($customerRating) || (is_array($customerRating) && empty($customerRating))) {
            unset($this->CustomerRating);
        } else {
            $this->CustomerRating = $customerRating;
        }

        return $this;
    }

    /**
     * Get CustomerRisk value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCustomerRisk(): ?string
    {
        return $this->CustomerRisk ?? null;
    }

    /**
     * Set CustomerRisk value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $customerRisk
     *
     * @return RetrieveCustomerResponse
     */
    public function setCustomerRisk(?string $customerRisk = null): self
    {
        // validation for constraint: string
        if (!is_null($customerRisk) && !is_string($customerRisk)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerRisk, true), gettype($customerRisk)), __LINE__);
        }
        if (is_null($customerRisk) || (is_array($customerRisk) && empty($customerRisk))) {
            unset($this->CustomerRisk);
        } else {
            $this->CustomerRisk = $customerRisk;
        }

        return $this;
    }

    /**
     * Get SeverityBlackList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getSeverityBlackList(): ?string
    {
        return $this->SeverityBlackList ?? null;
    }

    /**
     * Set SeverityBlackList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $severityBlackList
     *
     * @return RetrieveCustomerResponse
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\SeverityBlackList::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\SeverityBlackList::valueIsValid()
     */
    public function setSeverityBlackList(?string $severityBlackList = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\SeverityBlackList::valueIsValid($severityBlackList)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\SeverityBlackList', is_array($severityBlackList) ? implode(', ', $severityBlackList) : var_export($severityBlackList, true), implode(', ', SeverityBlackList::getValidValues())), __LINE__);
        }
        if (is_null($severityBlackList) || (is_array($severityBlackList) && empty($severityBlackList))) {
            unset($this->SeverityBlackList);
        } else {
            $this->SeverityBlackList = $severityBlackList;
        }

        return $this;
    }

    /**
     * Get ReasonBlackList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getReasonBlackList(): ?string
    {
        return $this->ReasonBlackList ?? null;
    }

    /**
     * Set ReasonBlackList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $reasonBlackList
     *
     * @return RetrieveCustomerResponse
     */
    public function setReasonBlackList(?string $reasonBlackList = null): self
    {
        // validation for constraint: string
        if (!is_null($reasonBlackList) && !is_string($reasonBlackList)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reasonBlackList, true), gettype($reasonBlackList)), __LINE__);
        }
        if (is_null($reasonBlackList) || (is_array($reasonBlackList) && empty($reasonBlackList))) {
            unset($this->ReasonBlackList);
        } else {
            $this->ReasonBlackList = $reasonBlackList;
        }

        return $this;
    }

    /**
     * Get BillingAgreementId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getBillingAgreementId(): ?string
    {
        return $this->BillingAgreementId ?? null;
    }

    /**
     * Set BillingAgreementId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $billingAgreementId
     *
     * @return RetrieveCustomerResponse
     */
    public function setBillingAgreementId(?string $billingAgreementId = null): self
    {
        // validation for constraint: string
        if (!is_null($billingAgreementId) && !is_string($billingAgreementId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingAgreementId, true), gettype($billingAgreementId)), __LINE__);
        }
        if (is_null($billingAgreementId) || (is_array($billingAgreementId) && empty($billingAgreementId))) {
            unset($this->BillingAgreementId);
        } else {
            $this->BillingAgreementId = $billingAgreementId;
        }

        return $this;
    }

    /**
     * Get ContactPerson value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Customer\Arrays\ArrayOfContactPerson|null
     */
    public function getContactPerson(): ?ArrayOfContactPerson
    {
        return $this->ContactPerson ?? null;
    }

    /**
     * Set ContactPerson value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Customer\Arrays\ArrayOfContactPerson $contactPerson
     *
     * @return RetrieveCustomerResponse
     */
    public function setContactPerson(?ArrayOfContactPerson $contactPerson = null): self
    {
        if (is_null($contactPerson) || (is_array($contactPerson) && empty($contactPerson))) {
            unset($this->ContactPerson);
        } else {
            $this->ContactPerson = $contactPerson;
        }

        return $this;
    }

    /**
     * Get Address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Customer\Arrays\ArrayOfAddress|null
     */
    public function getAddress(): ?ArrayOfAddress
    {
        return $this->Address ?? null;
    }

    /**
     * Set Address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Customer\Arrays\ArrayOfAddress $address
     *
     * @return RetrieveCustomerResponse
     */
    public function setAddress(?ArrayOfAddress $address = null): self
    {
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->Address);
        } else {
            $this->Address = $address;
        }

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use Corporate\Arrays\ArrayOfCorporate;
use Corporate\Arrays\ArrayOfTravelAgencyInfo;
use Corporate\Arrays\ArrayOfTravelAgencyNetwork;
use InvalidArgumentException;
use Ntvspa\Big\Corporate\Enums\BillingCenterTypeTypeEnum;
use Ntvspa\Big\Corporate\Enums\CountryTypeEnum;
use Ntvspa\Big\Corporate\Enums\PartnershipTypeEnum;
use Ntvspa\Big\Corporate\Enums\TravelAgencyStatusTypeEnum;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelAgency Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TravelAgency
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class TravelAgency extends AbstractStructBase
{
    /**
     * The PartnershipType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $PartnershipType = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The BankCountryKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $BankCountryKey = null;
    /**
     * The BookingSourceWeb
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $BookingSourceWeb = null;
    /**
     * The SaleActivationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $SaleActivationDate = null;
    /**
     * The SaleTerminationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $SaleTerminationDate = null;
    /**
     * The BillingCenterType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $BillingCenterType = null;
    /**
     * The LastModifiedDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $LastModifiedDate = null;
    /**
     * The IsLoyalty
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $IsLoyalty = null;
    /**
     * The LoyaltySubscribedDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $LoyaltySubscribedDate = null;
    /**
     * The FlagPrivacy
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $FlagPrivacy = null;
    /**
     * The FlagMonthStatement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $FlagMonthStatement = null;
    /**
     * The AccountBalanceEnabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $AccountBalanceEnabled = null;
    /**
     * The CashBackEnabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $CashBackEnabled = null;
    /**
     * The FlagCaptureTicketData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $FlagCaptureTicketData = null;
    /**
     * The ConsensusToCommercialInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $ConsensusToCommercialInformation = null;
    /**
     * The ConsensusToThirdPartyPrivacy
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $ConsensusToThirdPartyPrivacy = null;
    /**
     * The ConsensusToProfilingInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $ConsensusToProfilingInformation = null;
    /**
     * The ConsensusToMandate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $ConsensusToMandate = null;
    /**
     * The FlagOnlus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $FlagOnlus = null;
    /**
     * The FlagGruppoIva
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $FlagGruppoIva = null;
    /**
     * The IdPartner
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $IdPartner = null;
    /**
     * The TradingName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $TradingName = null;
    /**
     * The LegalName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $LegalName = null;
    /**
     * The VatNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $VatNumber = null;
    /**
     * The RailwayAgency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $RailwayAgency = null;
    /**
     * The IATACode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $IATACode = null;
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
     * The EmailPEC
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $EmailPEC = null;
    /**
     * The RecipientCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $RecipientCode = null;
    /**
     * The AccountNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $AccountNumber = null;
    /**
     * The AccountHolder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $AccountHolder = null;
    /**
     * The BankControlCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $BankControlCode = null;
    /**
     * The IBAN
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $IBAN = null;
    /**
     * The BankName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $BankName = null;
    /**
     * The ABICAB
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ABICAB = null;
    /**
     * The SWIFT
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $SWIFT = null;
    /**
     * The PaymentMethod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PaymentMethod = null;
    /**
     * The PaymentCondition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PaymentCondition = null;
    /**
     * The Class
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Class = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The BookingSourceGDS
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $BookingSourceGDS = null;
    /**
     * The MIDBackOffice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $MIDBackOffice = null;
    /**
     * The WorkPhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $WorkPhone = null;
    /**
     * The FAX
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FAX = null;
    /**
     * The CCIAARegistrationNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CCIAARegistrationNumber = null;
    /**
     * The LodgeCardType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $LodgeCardType = null;
    /**
     * The LodgeCardNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $LodgeCardNumber = null;
    /**
     * The LodgeCardHolder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $LodgeCardHolder = null;
    /**
     * The LodgeCardEndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $LodgeCardEndDate = null;
    /**
     * The DistributionTool
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DistributionTool = null;
    /**
     * The Promocode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Promocode = null;
    /**
     * The CarnetType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CarnetType = null;
    /**
     * The CashBackPNR
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CashBackPNR = null;
    /**
     * The ParentAgency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var TravelAgencyInfo|null
     */
    protected ?\Ntvspa\Big\Corporate\Structs\TravelAgencyInfo $ParentAgency = null;
    /**
     * The BaseAgencyBillingCenter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var TravelAgencyInfo|null
     */
    protected ?\Ntvspa\Big\Corporate\Structs\TravelAgencyInfo $BaseAgencyBillingCenter = null;
    /**
     * The OverAgencyBillingCenter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var TravelAgencyInfo|null
     */
    protected ?\Ntvspa\Big\Corporate\Structs\TravelAgencyInfo $OverAgencyBillingCenter = null;
    /**
     * The ContactPerson
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Contact|null
     */
    protected ?\Ntvspa\Big\Corporate\Structs\Contact $ContactPerson = null;
    /**
     * The Addresses
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var AddressesList|null
     */
    protected ?\Ntvspa\Big\Corporate\Structs\AddressesList $Addresses = null;
    /**
     * The TravelAgencyHierarchy
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Corporate\Arrays\ArrayOfTravelAgencyInfo|null
     */
    protected ?ArrayOfTravelAgencyInfo $TravelAgencyHierarchy = null;
    /**
     * The TravelAgencyNetworks
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Corporate\Arrays\ArrayOfTravelAgencyNetwork|null
     */
    protected ?ArrayOfTravelAgencyNetwork $TravelAgencyNetworks = null;
    /**
     * The Corporates
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Corporate\Arrays\ArrayOfCorporate|null
     */
    protected ?ArrayOfCorporate $Corporates = null;
    /**
     * The CorporateSegment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var CorporateSegment|null
     */
    protected ?\Ntvspa\Big\Corporate\Structs\CorporateSegment $CorporateSegment = null;
    /**
     * The MandateResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $MandateResult = null;
    /**
     * The Cluster
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Cluster = null;
    /**
     * The PromoterCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PromoterCode = null;
    /**
     * The MasterTravelAgent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var MasterTravelAgent|null
     */
    protected ?\Ntvspa\Big\Corporate\Structs\MasterTravelAgent $MasterTravelAgent = null;
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
     * The FiscalCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FiscalCode = null;

    /**
     * Constructor method for TravelAgency
     *
     * @param string                                                  $partnershipType
     * @param string                                                  $status
     * @param string                                                  $bankCountryKey
     * @param bool                                                    $bookingSourceWeb
     * @param string                                                  $saleActivationDate
     * @param string                                                  $saleTerminationDate
     * @param string                                                  $billingCenterType
     * @param string                                                  $lastModifiedDate
     * @param bool                                                    $isLoyalty
     * @param string                                                  $loyaltySubscribedDate
     * @param bool                                                    $flagPrivacy
     * @param bool                                                    $flagMonthStatement
     * @param bool                                                    $accountBalanceEnabled
     * @param bool                                                    $cashBackEnabled
     * @param bool                                                    $flagCaptureTicketData
     * @param bool                                                    $consensusToCommercialInformation
     * @param bool                                                    $consensusToThirdPartyPrivacy
     * @param bool                                                    $consensusToProfilingInformation
     * @param bool                                                    $consensusToMandate
     * @param bool                                                    $flagOnlus
     * @param bool                                                    $flagGruppoIva
     * @param string                                                  $idPartner
     * @param string                                                  $tradingName
     * @param string                                                  $legalName
     * @param string                                                  $vatNumber
     * @param string                                                  $railwayAgency
     * @param string                                                  $iATACode
     * @param string                                                  $contactEmail
     * @param string                                                  $emailPEC
     * @param string                                                  $recipientCode
     * @param string                                                  $accountNumber
     * @param string                                                  $accountHolder
     * @param string                                                  $bankControlCode
     * @param string                                                  $iBAN
     * @param string                                                  $bankName
     * @param string                                                  $aBICAB
     * @param string                                                  $sWIFT
     * @param string                                                  $paymentMethod
     * @param string                                                  $paymentCondition
     * @param string                                                  $class
     * @param string                                                  $type
     * @param string                                                  $bookingSourceGDS
     * @param string                                                  $mIDBackOffice
     * @param string                                                  $workPhone
     * @param string                                                  $fAX
     * @param string                                                  $cCIAARegistrationNumber
     * @param string                                                  $lodgeCardType
     * @param string                                                  $lodgeCardNumber
     * @param string                                                  $lodgeCardHolder
     * @param string                                                  $lodgeCardEndDate
     * @param string                                                  $distributionTool
     * @param string                                                  $promocode
     * @param string                                                  $carnetType
     * @param string                                                  $cashBackPNR
     * @param TravelAgencyInfo                                        $parentAgency
     * @param TravelAgencyInfo                                        $baseAgencyBillingCenter
     * @param TravelAgencyInfo                                        $overAgencyBillingCenter
     * @param Contact                                                 $contactPerson
     * @param AddressesList                                           $addresses
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfTravelAgencyInfo    $travelAgencyHierarchy
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfTravelAgencyNetwork $travelAgencyNetworks
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfCorporate           $corporates
     * @param CorporateSegment                                        $corporateSegment
     * @param string                                                  $mandateResult
     * @param string                                                  $cluster
     * @param string                                                  $promoterCode
     * @param MasterTravelAgent                                       $masterTravelAgent
     * @param string                                                  $notes
     * @param string                                                  $fiscalCode
     *
     * @uses TravelAgency::setPartnershipType()
     * @uses TravelAgency::setStatus()
     * @uses TravelAgency::setBankCountryKey()
     * @uses TravelAgency::setBookingSourceWeb()
     * @uses TravelAgency::setSaleActivationDate()
     * @uses TravelAgency::setSaleTerminationDate()
     * @uses TravelAgency::setBillingCenterType()
     * @uses TravelAgency::setLastModifiedDate()
     * @uses TravelAgency::setIsLoyalty()
     * @uses TravelAgency::setLoyaltySubscribedDate()
     * @uses TravelAgency::setFlagPrivacy()
     * @uses TravelAgency::setFlagMonthStatement()
     * @uses TravelAgency::setAccountBalanceEnabled()
     * @uses TravelAgency::setCashBackEnabled()
     * @uses TravelAgency::setFlagCaptureTicketData()
     * @uses TravelAgency::setConsensusToCommercialInformation()
     * @uses TravelAgency::setConsensusToThirdPartyPrivacy()
     * @uses TravelAgency::setConsensusToProfilingInformation()
     * @uses TravelAgency::setConsensusToMandate()
     * @uses TravelAgency::setFlagOnlus()
     * @uses TravelAgency::setFlagGruppoIva()
     * @uses TravelAgency::setIdPartner()
     * @uses TravelAgency::setTradingName()
     * @uses TravelAgency::setLegalName()
     * @uses TravelAgency::setVatNumber()
     * @uses TravelAgency::setRailwayAgency()
     * @uses TravelAgency::setIATACode()
     * @uses TravelAgency::setContactEmail()
     * @uses TravelAgency::setEmailPEC()
     * @uses TravelAgency::setRecipientCode()
     * @uses TravelAgency::setAccountNumber()
     * @uses TravelAgency::setAccountHolder()
     * @uses TravelAgency::setBankControlCode()
     * @uses TravelAgency::setIBAN()
     * @uses TravelAgency::setBankName()
     * @uses TravelAgency::setABICAB()
     * @uses TravelAgency::setSWIFT()
     * @uses TravelAgency::setPaymentMethod()
     * @uses TravelAgency::setPaymentCondition()
     * @uses TravelAgency::setClass()
     * @uses TravelAgency::setType()
     * @uses TravelAgency::setBookingSourceGDS()
     * @uses TravelAgency::setMIDBackOffice()
     * @uses TravelAgency::setWorkPhone()
     * @uses TravelAgency::setFAX()
     * @uses TravelAgency::setCCIAARegistrationNumber()
     * @uses TravelAgency::setLodgeCardType()
     * @uses TravelAgency::setLodgeCardNumber()
     * @uses TravelAgency::setLodgeCardHolder()
     * @uses TravelAgency::setLodgeCardEndDate()
     * @uses TravelAgency::setDistributionTool()
     * @uses TravelAgency::setPromocode()
     * @uses TravelAgency::setCarnetType()
     * @uses TravelAgency::setCashBackPNR()
     * @uses TravelAgency::setParentAgency()
     * @uses TravelAgency::setBaseAgencyBillingCenter()
     * @uses TravelAgency::setOverAgencyBillingCenter()
     * @uses TravelAgency::setContactPerson()
     * @uses TravelAgency::setAddresses()
     * @uses TravelAgency::setTravelAgencyHierarchy()
     * @uses TravelAgency::setTravelAgencyNetworks()
     * @uses TravelAgency::setCorporates()
     * @uses TravelAgency::setCorporateSegment()
     * @uses TravelAgency::setMandateResult()
     * @uses TravelAgency::setCluster()
     * @uses TravelAgency::setPromoterCode()
     * @uses TravelAgency::setMasterTravelAgent()
     * @uses TravelAgency::setNotes()
     * @uses TravelAgency::setFiscalCode()
     */
    public function __construct(?string $partnershipType = null, ?string $status = null, ?string $bankCountryKey = null, ?bool $bookingSourceWeb = null, ?string $saleActivationDate = null, ?string $saleTerminationDate = null, ?string $billingCenterType = null, ?string $lastModifiedDate = null, ?bool $isLoyalty = null, ?string $loyaltySubscribedDate = null, ?bool $flagPrivacy = null, ?bool $flagMonthStatement = null, ?bool $accountBalanceEnabled = null, ?bool $cashBackEnabled = null, ?bool $flagCaptureTicketData = null, ?bool $consensusToCommercialInformation = null, ?bool $consensusToThirdPartyPrivacy = null, ?bool $consensusToProfilingInformation = null, ?bool $consensusToMandate = null, ?bool $flagOnlus = null, ?bool $flagGruppoIva = null, ?string $idPartner = null, ?string $tradingName = null, ?string $legalName = null, ?string $vatNumber = null, ?string $railwayAgency = null, ?string $iATACode = null, ?string $contactEmail = null, ?string $emailPEC = null, ?string $recipientCode = null, ?string $accountNumber = null, ?string $accountHolder = null, ?string $bankControlCode = null, ?string $iBAN = null, ?string $bankName = null, ?string $aBICAB = null, ?string $sWIFT = null, ?string $paymentMethod = null, ?string $paymentCondition = null, ?string $class = null, ?string $type = null, ?string $bookingSourceGDS = null, ?string $mIDBackOffice = null, ?string $workPhone = null, ?string $fAX = null, ?string $cCIAARegistrationNumber = null, ?string $lodgeCardType = null, ?string $lodgeCardNumber = null, ?string $lodgeCardHolder = null, ?string $lodgeCardEndDate = null, ?string $distributionTool = null, ?string $promocode = null, ?string $carnetType = null, ?string $cashBackPNR = null, ?\Ntvspa\Big\Corporate\Structs\TravelAgencyInfo $parentAgency = null, ?\Ntvspa\Big\Corporate\Structs\TravelAgencyInfo $baseAgencyBillingCenter = null, ?\Ntvspa\Big\Corporate\Structs\TravelAgencyInfo $overAgencyBillingCenter = null, ?\Ntvspa\Big\Corporate\Structs\Contact $contactPerson = null, ?\Ntvspa\Big\Corporate\Structs\AddressesList $addresses = null, ?ArrayOfTravelAgencyInfo $travelAgencyHierarchy = null, ?ArrayOfTravelAgencyNetwork $travelAgencyNetworks = null, ?ArrayOfCorporate $corporates = null, ?\Ntvspa\Big\Corporate\Structs\CorporateSegment $corporateSegment = null, ?string $mandateResult = null, ?string $cluster = null, ?string $promoterCode = null, ?\Ntvspa\Big\Corporate\Structs\MasterTravelAgent $masterTravelAgent = null, ?string $notes = null, ?string $fiscalCode = null)
    {
        $this
            ->setPartnershipType($partnershipType)
            ->setStatus($status)
            ->setBankCountryKey($bankCountryKey)
            ->setBookingSourceWeb($bookingSourceWeb)
            ->setSaleActivationDate($saleActivationDate)
            ->setSaleTerminationDate($saleTerminationDate)
            ->setBillingCenterType($billingCenterType)
            ->setLastModifiedDate($lastModifiedDate)
            ->setIsLoyalty($isLoyalty)
            ->setLoyaltySubscribedDate($loyaltySubscribedDate)
            ->setFlagPrivacy($flagPrivacy)
            ->setFlagMonthStatement($flagMonthStatement)
            ->setAccountBalanceEnabled($accountBalanceEnabled)
            ->setCashBackEnabled($cashBackEnabled)
            ->setFlagCaptureTicketData($flagCaptureTicketData)
            ->setConsensusToCommercialInformation($consensusToCommercialInformation)
            ->setConsensusToThirdPartyPrivacy($consensusToThirdPartyPrivacy)
            ->setConsensusToProfilingInformation($consensusToProfilingInformation)
            ->setConsensusToMandate($consensusToMandate)
            ->setFlagOnlus($flagOnlus)
            ->setFlagGruppoIva($flagGruppoIva)
            ->setIdPartner($idPartner)
            ->setTradingName($tradingName)
            ->setLegalName($legalName)
            ->setVatNumber($vatNumber)
            ->setRailwayAgency($railwayAgency)
            ->setIATACode($iATACode)
            ->setContactEmail($contactEmail)
            ->setEmailPEC($emailPEC)
            ->setRecipientCode($recipientCode)
            ->setAccountNumber($accountNumber)
            ->setAccountHolder($accountHolder)
            ->setBankControlCode($bankControlCode)
            ->setIBAN($iBAN)
            ->setBankName($bankName)
            ->setABICAB($aBICAB)
            ->setSWIFT($sWIFT)
            ->setPaymentMethod($paymentMethod)
            ->setPaymentCondition($paymentCondition)
            ->setClass($class)
            ->setType($type)
            ->setBookingSourceGDS($bookingSourceGDS)
            ->setMIDBackOffice($mIDBackOffice)
            ->setWorkPhone($workPhone)
            ->setFAX($fAX)
            ->setCCIAARegistrationNumber($cCIAARegistrationNumber)
            ->setLodgeCardType($lodgeCardType)
            ->setLodgeCardNumber($lodgeCardNumber)
            ->setLodgeCardHolder($lodgeCardHolder)
            ->setLodgeCardEndDate($lodgeCardEndDate)
            ->setDistributionTool($distributionTool)
            ->setPromocode($promocode)
            ->setCarnetType($carnetType)
            ->setCashBackPNR($cashBackPNR)
            ->setParentAgency($parentAgency)
            ->setBaseAgencyBillingCenter($baseAgencyBillingCenter)
            ->setOverAgencyBillingCenter($overAgencyBillingCenter)
            ->setContactPerson($contactPerson)
            ->setAddresses($addresses)
            ->setTravelAgencyHierarchy($travelAgencyHierarchy)
            ->setTravelAgencyNetworks($travelAgencyNetworks)
            ->setCorporates($corporates)
            ->setCorporateSegment($corporateSegment)
            ->setMandateResult($mandateResult)
            ->setCluster($cluster)
            ->setPromoterCode($promoterCode)
            ->setMasterTravelAgent($masterTravelAgent)
            ->setNotes($notes)
            ->setFiscalCode($fiscalCode);
    }

    /**
     * Get PartnershipType value
     *
     * @return string|null
     */
    public function getPartnershipType(): ?string
    {
        return $this->PartnershipType;
    }

    /**
     * Set PartnershipType value
     *
     * @param string $partnershipType
     *
     * @return TravelAgency
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Corporate\Enums\PartnershipTypeEnum::getValidValues()
     * @uses \Ntvspa\Big\Corporate\Enums\PartnershipTypeEnum::valueIsValid()
     */
    public function setPartnershipType(?string $partnershipType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Corporate\Enums\PartnershipTypeEnum::valueIsValid($partnershipType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Corporate\Enums\PartnershipTypeEnum', is_array($partnershipType) ? implode(', ', $partnershipType) : var_export($partnershipType, true), implode(', ', PartnershipTypeEnum::getValidValues())), __LINE__);
        }
        $this->PartnershipType = $partnershipType;

        return $this;
    }

    /**
     * Get Status value
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }

    /**
     * Set Status value
     *
     * @param string $status
     *
     * @return TravelAgency
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Corporate\Enums\TravelAgencyStatusTypeEnum::getValidValues()
     * @uses \Ntvspa\Big\Corporate\Enums\TravelAgencyStatusTypeEnum::valueIsValid()
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Corporate\Enums\TravelAgencyStatusTypeEnum::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Corporate\Enums\TravelAgencyStatusTypeEnum', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', TravelAgencyStatusTypeEnum::getValidValues())), __LINE__);
        }
        $this->Status = $status;

        return $this;
    }

    /**
     * Get BankCountryKey value
     *
     * @return string|null
     */
    public function getBankCountryKey(): ?string
    {
        return $this->BankCountryKey;
    }

    /**
     * Set BankCountryKey value
     *
     * @param string $bankCountryKey
     *
     * @return TravelAgency
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Corporate\Enums\CountryTypeEnum::getValidValues()
     * @uses \Ntvspa\Big\Corporate\Enums\CountryTypeEnum::valueIsValid()
     */
    public function setBankCountryKey(?string $bankCountryKey = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Corporate\Enums\CountryTypeEnum::valueIsValid($bankCountryKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Corporate\Enums\CountryTypeEnum', is_array($bankCountryKey) ? implode(', ', $bankCountryKey) : var_export($bankCountryKey, true), implode(', ', CountryTypeEnum::getValidValues())), __LINE__);
        }
        $this->BankCountryKey = $bankCountryKey;

        return $this;
    }

    /**
     * Get BookingSourceWeb value
     *
     * @return bool|null
     */
    public function getBookingSourceWeb(): ?bool
    {
        return $this->BookingSourceWeb;
    }

    /**
     * Set BookingSourceWeb value
     *
     * @param bool $bookingSourceWeb
     *
     * @return TravelAgency
     */
    public function setBookingSourceWeb(?bool $bookingSourceWeb = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bookingSourceWeb) && !is_bool($bookingSourceWeb)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bookingSourceWeb, true), gettype($bookingSourceWeb)), __LINE__);
        }
        $this->BookingSourceWeb = $bookingSourceWeb;

        return $this;
    }

    /**
     * Get SaleActivationDate value
     *
     * @return string|null
     */
    public function getSaleActivationDate(): ?string
    {
        return $this->SaleActivationDate;
    }

    /**
     * Set SaleActivationDate value
     *
     * @param string $saleActivationDate
     *
     * @return TravelAgency
     */
    public function setSaleActivationDate(?string $saleActivationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($saleActivationDate) && !is_string($saleActivationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($saleActivationDate, true), gettype($saleActivationDate)), __LINE__);
        }
        $this->SaleActivationDate = $saleActivationDate;

        return $this;
    }

    /**
     * Get SaleTerminationDate value
     *
     * @return string|null
     */
    public function getSaleTerminationDate(): ?string
    {
        return $this->SaleTerminationDate;
    }

    /**
     * Set SaleTerminationDate value
     *
     * @param string $saleTerminationDate
     *
     * @return TravelAgency
     */
    public function setSaleTerminationDate(?string $saleTerminationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($saleTerminationDate) && !is_string($saleTerminationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($saleTerminationDate, true), gettype($saleTerminationDate)), __LINE__);
        }
        $this->SaleTerminationDate = $saleTerminationDate;

        return $this;
    }

    /**
     * Get BillingCenterType value
     *
     * @return string|null
     */
    public function getBillingCenterType(): ?string
    {
        return $this->BillingCenterType;
    }

    /**
     * Set BillingCenterType value
     *
     * @param string $billingCenterType
     *
     * @return TravelAgency
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Corporate\Enums\BillingCenterTypeTypeEnum::getValidValues()
     * @uses \Ntvspa\Big\Corporate\Enums\BillingCenterTypeTypeEnum::valueIsValid()
     */
    public function setBillingCenterType(?string $billingCenterType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Corporate\Enums\BillingCenterTypeTypeEnum::valueIsValid($billingCenterType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Corporate\Enums\BillingCenterTypeTypeEnum', is_array($billingCenterType) ? implode(', ', $billingCenterType) : var_export($billingCenterType, true), implode(', ', BillingCenterTypeTypeEnum::getValidValues())), __LINE__);
        }
        $this->BillingCenterType = $billingCenterType;

        return $this;
    }

    /**
     * Get LastModifiedDate value
     *
     * @return string|null
     */
    public function getLastModifiedDate(): ?string
    {
        return $this->LastModifiedDate;
    }

    /**
     * Set LastModifiedDate value
     *
     * @param string $lastModifiedDate
     *
     * @return TravelAgency
     */
    public function setLastModifiedDate(?string $lastModifiedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastModifiedDate) && !is_string($lastModifiedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastModifiedDate, true), gettype($lastModifiedDate)), __LINE__);
        }
        $this->LastModifiedDate = $lastModifiedDate;

        return $this;
    }

    /**
     * Get IsLoyalty value
     *
     * @return bool|null
     */
    public function getIsLoyalty(): ?bool
    {
        return $this->IsLoyalty;
    }

    /**
     * Set IsLoyalty value
     *
     * @param bool $isLoyalty
     *
     * @return TravelAgency
     */
    public function setIsLoyalty(?bool $isLoyalty = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isLoyalty) && !is_bool($isLoyalty)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isLoyalty, true), gettype($isLoyalty)), __LINE__);
        }
        $this->IsLoyalty = $isLoyalty;

        return $this;
    }

    /**
     * Get LoyaltySubscribedDate value
     *
     * @return string|null
     */
    public function getLoyaltySubscribedDate(): ?string
    {
        return $this->LoyaltySubscribedDate;
    }

    /**
     * Set LoyaltySubscribedDate value
     *
     * @param string $loyaltySubscribedDate
     *
     * @return TravelAgency
     */
    public function setLoyaltySubscribedDate(?string $loyaltySubscribedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($loyaltySubscribedDate) && !is_string($loyaltySubscribedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($loyaltySubscribedDate, true), gettype($loyaltySubscribedDate)), __LINE__);
        }
        $this->LoyaltySubscribedDate = $loyaltySubscribedDate;

        return $this;
    }

    /**
     * Get FlagPrivacy value
     *
     * @return bool|null
     */
    public function getFlagPrivacy(): ?bool
    {
        return $this->FlagPrivacy;
    }

    /**
     * Set FlagPrivacy value
     *
     * @param bool $flagPrivacy
     *
     * @return TravelAgency
     */
    public function setFlagPrivacy(?bool $flagPrivacy = null): self
    {
        // validation for constraint: boolean
        if (!is_null($flagPrivacy) && !is_bool($flagPrivacy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($flagPrivacy, true), gettype($flagPrivacy)), __LINE__);
        }
        $this->FlagPrivacy = $flagPrivacy;

        return $this;
    }

    /**
     * Get FlagMonthStatement value
     *
     * @return bool|null
     */
    public function getFlagMonthStatement(): ?bool
    {
        return $this->FlagMonthStatement;
    }

    /**
     * Set FlagMonthStatement value
     *
     * @param bool $flagMonthStatement
     *
     * @return TravelAgency
     */
    public function setFlagMonthStatement(?bool $flagMonthStatement = null): self
    {
        // validation for constraint: boolean
        if (!is_null($flagMonthStatement) && !is_bool($flagMonthStatement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($flagMonthStatement, true), gettype($flagMonthStatement)), __LINE__);
        }
        $this->FlagMonthStatement = $flagMonthStatement;

        return $this;
    }

    /**
     * Get AccountBalanceEnabled value
     *
     * @return bool|null
     */
    public function getAccountBalanceEnabled(): ?bool
    {
        return $this->AccountBalanceEnabled;
    }

    /**
     * Set AccountBalanceEnabled value
     *
     * @param bool $accountBalanceEnabled
     *
     * @return TravelAgency
     */
    public function setAccountBalanceEnabled(?bool $accountBalanceEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($accountBalanceEnabled) && !is_bool($accountBalanceEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($accountBalanceEnabled, true), gettype($accountBalanceEnabled)), __LINE__);
        }
        $this->AccountBalanceEnabled = $accountBalanceEnabled;

        return $this;
    }

    /**
     * Get CashBackEnabled value
     *
     * @return bool|null
     */
    public function getCashBackEnabled(): ?bool
    {
        return $this->CashBackEnabled;
    }

    /**
     * Set CashBackEnabled value
     *
     * @param bool $cashBackEnabled
     *
     * @return TravelAgency
     */
    public function setCashBackEnabled(?bool $cashBackEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cashBackEnabled) && !is_bool($cashBackEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cashBackEnabled, true), gettype($cashBackEnabled)), __LINE__);
        }
        $this->CashBackEnabled = $cashBackEnabled;

        return $this;
    }

    /**
     * Get FlagCaptureTicketData value
     *
     * @return bool|null
     */
    public function getFlagCaptureTicketData(): ?bool
    {
        return $this->FlagCaptureTicketData;
    }

    /**
     * Set FlagCaptureTicketData value
     *
     * @param bool $flagCaptureTicketData
     *
     * @return TravelAgency
     */
    public function setFlagCaptureTicketData(?bool $flagCaptureTicketData = null): self
    {
        // validation for constraint: boolean
        if (!is_null($flagCaptureTicketData) && !is_bool($flagCaptureTicketData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($flagCaptureTicketData, true), gettype($flagCaptureTicketData)), __LINE__);
        }
        $this->FlagCaptureTicketData = $flagCaptureTicketData;

        return $this;
    }

    /**
     * Get ConsensusToCommercialInformation value
     *
     * @return bool|null
     */
    public function getConsensusToCommercialInformation(): ?bool
    {
        return $this->ConsensusToCommercialInformation;
    }

    /**
     * Set ConsensusToCommercialInformation value
     *
     * @param bool $consensusToCommercialInformation
     *
     * @return TravelAgency
     */
    public function setConsensusToCommercialInformation(?bool $consensusToCommercialInformation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($consensusToCommercialInformation) && !is_bool($consensusToCommercialInformation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($consensusToCommercialInformation, true), gettype($consensusToCommercialInformation)), __LINE__);
        }
        $this->ConsensusToCommercialInformation = $consensusToCommercialInformation;

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
     * @return TravelAgency
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
     * Get ConsensusToProfilingInformation value
     *
     * @return bool|null
     */
    public function getConsensusToProfilingInformation(): ?bool
    {
        return $this->ConsensusToProfilingInformation;
    }

    /**
     * Set ConsensusToProfilingInformation value
     *
     * @param bool $consensusToProfilingInformation
     *
     * @return TravelAgency
     */
    public function setConsensusToProfilingInformation(?bool $consensusToProfilingInformation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($consensusToProfilingInformation) && !is_bool($consensusToProfilingInformation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($consensusToProfilingInformation, true), gettype($consensusToProfilingInformation)), __LINE__);
        }
        $this->ConsensusToProfilingInformation = $consensusToProfilingInformation;

        return $this;
    }

    /**
     * Get ConsensusToMandate value
     *
     * @return bool|null
     */
    public function getConsensusToMandate(): ?bool
    {
        return $this->ConsensusToMandate;
    }

    /**
     * Set ConsensusToMandate value
     *
     * @param bool $consensusToMandate
     *
     * @return TravelAgency
     */
    public function setConsensusToMandate(?bool $consensusToMandate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($consensusToMandate) && !is_bool($consensusToMandate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($consensusToMandate, true), gettype($consensusToMandate)), __LINE__);
        }
        $this->ConsensusToMandate = $consensusToMandate;

        return $this;
    }

    /**
     * Get FlagOnlus value
     *
     * @return bool|null
     */
    public function getFlagOnlus(): ?bool
    {
        return $this->FlagOnlus;
    }

    /**
     * Set FlagOnlus value
     *
     * @param bool $flagOnlus
     *
     * @return TravelAgency
     */
    public function setFlagOnlus(?bool $flagOnlus = null): self
    {
        // validation for constraint: boolean
        if (!is_null($flagOnlus) && !is_bool($flagOnlus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($flagOnlus, true), gettype($flagOnlus)), __LINE__);
        }
        $this->FlagOnlus = $flagOnlus;

        return $this;
    }

    /**
     * Get FlagGruppoIva value
     *
     * @return bool|null
     */
    public function getFlagGruppoIva(): ?bool
    {
        return $this->FlagGruppoIva;
    }

    /**
     * Set FlagGruppoIva value
     *
     * @param bool $flagGruppoIva
     *
     * @return TravelAgency
     */
    public function setFlagGruppoIva(?bool $flagGruppoIva = null): self
    {
        // validation for constraint: boolean
        if (!is_null($flagGruppoIva) && !is_bool($flagGruppoIva)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($flagGruppoIva, true), gettype($flagGruppoIva)), __LINE__);
        }
        $this->FlagGruppoIva = $flagGruppoIva;

        return $this;
    }

    /**
     * Get IdPartner value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getIdPartner(): ?string
    {
        return $this->IdPartner ?? null;
    }

    /**
     * Set IdPartner value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $idPartner
     *
     * @return TravelAgency
     */
    public function setIdPartner(?string $idPartner = null): self
    {
        // validation for constraint: string
        if (!is_null($idPartner) && !is_string($idPartner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idPartner, true), gettype($idPartner)), __LINE__);
        }
        if (is_null($idPartner) || (is_array($idPartner) && empty($idPartner))) {
            unset($this->IdPartner);
        } else {
            $this->IdPartner = $idPartner;
        }

        return $this;
    }

    /**
     * Get TradingName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTradingName(): ?string
    {
        return $this->TradingName ?? null;
    }

    /**
     * Set TradingName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $tradingName
     *
     * @return TravelAgency
     */
    public function setTradingName(?string $tradingName = null): self
    {
        // validation for constraint: string
        if (!is_null($tradingName) && !is_string($tradingName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tradingName, true), gettype($tradingName)), __LINE__);
        }
        if (is_null($tradingName) || (is_array($tradingName) && empty($tradingName))) {
            unset($this->TradingName);
        } else {
            $this->TradingName = $tradingName;
        }

        return $this;
    }

    /**
     * Get LegalName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getLegalName(): ?string
    {
        return $this->LegalName ?? null;
    }

    /**
     * Set LegalName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $legalName
     *
     * @return TravelAgency
     */
    public function setLegalName(?string $legalName = null): self
    {
        // validation for constraint: string
        if (!is_null($legalName) && !is_string($legalName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($legalName, true), gettype($legalName)), __LINE__);
        }
        if (is_null($legalName) || (is_array($legalName) && empty($legalName))) {
            unset($this->LegalName);
        } else {
            $this->LegalName = $legalName;
        }

        return $this;
    }

    /**
     * Get VatNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getVatNumber(): ?string
    {
        return $this->VatNumber ?? null;
    }

    /**
     * Set VatNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $vatNumber
     *
     * @return TravelAgency
     */
    public function setVatNumber(?string $vatNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($vatNumber) && !is_string($vatNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatNumber, true), gettype($vatNumber)), __LINE__);
        }
        if (is_null($vatNumber) || (is_array($vatNumber) && empty($vatNumber))) {
            unset($this->VatNumber);
        } else {
            $this->VatNumber = $vatNumber;
        }

        return $this;
    }

    /**
     * Get RailwayAgency value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getRailwayAgency(): ?string
    {
        return $this->RailwayAgency ?? null;
    }

    /**
     * Set RailwayAgency value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $railwayAgency
     *
     * @return TravelAgency
     */
    public function setRailwayAgency(?string $railwayAgency = null): self
    {
        // validation for constraint: string
        if (!is_null($railwayAgency) && !is_string($railwayAgency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($railwayAgency, true), gettype($railwayAgency)), __LINE__);
        }
        if (is_null($railwayAgency) || (is_array($railwayAgency) && empty($railwayAgency))) {
            unset($this->RailwayAgency);
        } else {
            $this->RailwayAgency = $railwayAgency;
        }

        return $this;
    }

    /**
     * Get IATACode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getIATACode(): ?string
    {
        return $this->IATACode ?? null;
    }

    /**
     * Set IATACode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $iATACode
     *
     * @return TravelAgency
     */
    public function setIATACode(?string $iATACode = null): self
    {
        // validation for constraint: string
        if (!is_null($iATACode) && !is_string($iATACode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iATACode, true), gettype($iATACode)), __LINE__);
        }
        if (is_null($iATACode) || (is_array($iATACode) && empty($iATACode))) {
            unset($this->IATACode);
        } else {
            $this->IATACode = $iATACode;
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
     * @return TravelAgency
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
     * Get EmailPEC value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getEmailPEC(): ?string
    {
        return $this->EmailPEC ?? null;
    }

    /**
     * Set EmailPEC value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $emailPEC
     *
     * @return TravelAgency
     */
    public function setEmailPEC(?string $emailPEC = null): self
    {
        // validation for constraint: string
        if (!is_null($emailPEC) && !is_string($emailPEC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailPEC, true), gettype($emailPEC)), __LINE__);
        }
        if (is_null($emailPEC) || (is_array($emailPEC) && empty($emailPEC))) {
            unset($this->EmailPEC);
        } else {
            $this->EmailPEC = $emailPEC;
        }

        return $this;
    }

    /**
     * Get RecipientCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getRecipientCode(): ?string
    {
        return $this->RecipientCode ?? null;
    }

    /**
     * Set RecipientCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $recipientCode
     *
     * @return TravelAgency
     */
    public function setRecipientCode(?string $recipientCode = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientCode) && !is_string($recipientCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientCode, true), gettype($recipientCode)), __LINE__);
        }
        if (is_null($recipientCode) || (is_array($recipientCode) && empty($recipientCode))) {
            unset($this->RecipientCode);
        } else {
            $this->RecipientCode = $recipientCode;
        }

        return $this;
    }

    /**
     * Get AccountNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getAccountNumber(): ?string
    {
        return $this->AccountNumber ?? null;
    }

    /**
     * Set AccountNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $accountNumber
     *
     * @return TravelAgency
     */
    public function setAccountNumber(?string $accountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        if (is_null($accountNumber) || (is_array($accountNumber) && empty($accountNumber))) {
            unset($this->AccountNumber);
        } else {
            $this->AccountNumber = $accountNumber;
        }

        return $this;
    }

    /**
     * Get AccountHolder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getAccountHolder(): ?string
    {
        return $this->AccountHolder ?? null;
    }

    /**
     * Set AccountHolder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $accountHolder
     *
     * @return TravelAgency
     */
    public function setAccountHolder(?string $accountHolder = null): self
    {
        // validation for constraint: string
        if (!is_null($accountHolder) && !is_string($accountHolder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountHolder, true), gettype($accountHolder)), __LINE__);
        }
        if (is_null($accountHolder) || (is_array($accountHolder) && empty($accountHolder))) {
            unset($this->AccountHolder);
        } else {
            $this->AccountHolder = $accountHolder;
        }

        return $this;
    }

    /**
     * Get BankControlCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getBankControlCode(): ?string
    {
        return $this->BankControlCode ?? null;
    }

    /**
     * Set BankControlCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $bankControlCode
     *
     * @return TravelAgency
     */
    public function setBankControlCode(?string $bankControlCode = null): self
    {
        // validation for constraint: string
        if (!is_null($bankControlCode) && !is_string($bankControlCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankControlCode, true), gettype($bankControlCode)), __LINE__);
        }
        if (is_null($bankControlCode) || (is_array($bankControlCode) && empty($bankControlCode))) {
            unset($this->BankControlCode);
        } else {
            $this->BankControlCode = $bankControlCode;
        }

        return $this;
    }

    /**
     * Get IBAN value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getIBAN(): ?string
    {
        return $this->IBAN ?? null;
    }

    /**
     * Set IBAN value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $iBAN
     *
     * @return TravelAgency
     */
    public function setIBAN(?string $iBAN = null): self
    {
        // validation for constraint: string
        if (!is_null($iBAN) && !is_string($iBAN)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iBAN, true), gettype($iBAN)), __LINE__);
        }
        if (is_null($iBAN) || (is_array($iBAN) && empty($iBAN))) {
            unset($this->IBAN);
        } else {
            $this->IBAN = $iBAN;
        }

        return $this;
    }

    /**
     * Get BankName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getBankName(): ?string
    {
        return $this->BankName ?? null;
    }

    /**
     * Set BankName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $bankName
     *
     * @return TravelAgency
     */
    public function setBankName(?string $bankName = null): self
    {
        // validation for constraint: string
        if (!is_null($bankName) && !is_string($bankName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankName, true), gettype($bankName)), __LINE__);
        }
        if (is_null($bankName) || (is_array($bankName) && empty($bankName))) {
            unset($this->BankName);
        } else {
            $this->BankName = $bankName;
        }

        return $this;
    }

    /**
     * Get ABICAB value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getABICAB(): ?string
    {
        return $this->ABICAB ?? null;
    }

    /**
     * Set ABICAB value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $aBICAB
     *
     * @return TravelAgency
     */
    public function setABICAB(?string $aBICAB = null): self
    {
        // validation for constraint: string
        if (!is_null($aBICAB) && !is_string($aBICAB)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($aBICAB, true), gettype($aBICAB)), __LINE__);
        }
        if (is_null($aBICAB) || (is_array($aBICAB) && empty($aBICAB))) {
            unset($this->ABICAB);
        } else {
            $this->ABICAB = $aBICAB;
        }

        return $this;
    }

    /**
     * Get SWIFT value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getSWIFT(): ?string
    {
        return $this->SWIFT ?? null;
    }

    /**
     * Set SWIFT value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $sWIFT
     *
     * @return TravelAgency
     */
    public function setSWIFT(?string $sWIFT = null): self
    {
        // validation for constraint: string
        if (!is_null($sWIFT) && !is_string($sWIFT)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sWIFT, true), gettype($sWIFT)), __LINE__);
        }
        if (is_null($sWIFT) || (is_array($sWIFT) && empty($sWIFT))) {
            unset($this->SWIFT);
        } else {
            $this->SWIFT = $sWIFT;
        }

        return $this;
    }

    /**
     * Get PaymentMethod value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPaymentMethod(): ?string
    {
        return $this->PaymentMethod ?? null;
    }

    /**
     * Set PaymentMethod value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $paymentMethod
     *
     * @return TravelAgency
     */
    public function setPaymentMethod(?string $paymentMethod = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentMethod) && !is_string($paymentMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentMethod, true), gettype($paymentMethod)), __LINE__);
        }
        if (is_null($paymentMethod) || (is_array($paymentMethod) && empty($paymentMethod))) {
            unset($this->PaymentMethod);
        } else {
            $this->PaymentMethod = $paymentMethod;
        }

        return $this;
    }

    /**
     * Get PaymentCondition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPaymentCondition(): ?string
    {
        return $this->PaymentCondition ?? null;
    }

    /**
     * Set PaymentCondition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $paymentCondition
     *
     * @return TravelAgency
     */
    public function setPaymentCondition(?string $paymentCondition = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentCondition) && !is_string($paymentCondition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentCondition, true), gettype($paymentCondition)), __LINE__);
        }
        if (is_null($paymentCondition) || (is_array($paymentCondition) && empty($paymentCondition))) {
            unset($this->PaymentCondition);
        } else {
            $this->PaymentCondition = $paymentCondition;
        }

        return $this;
    }

    /**
     * Get Class value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getClass(): ?string
    {
        return $this->Class ?? null;
    }

    /**
     * Set Class value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $class
     *
     * @return TravelAgency
     */
    public function setClass(?string $class = null): self
    {
        // validation for constraint: string
        if (!is_null($class) && !is_string($class)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($class, true), gettype($class)), __LINE__);
        }
        if (is_null($class) || (is_array($class) && empty($class))) {
            unset($this->Class);
        } else {
            $this->Class = $class;
        }

        return $this;
    }

    /**
     * Get Type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * Set Type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $type
     *
     * @return TravelAgency
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->Type);
        } else {
            $this->Type = $type;
        }

        return $this;
    }

    /**
     * Get BookingSourceGDS value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getBookingSourceGDS(): ?string
    {
        return $this->BookingSourceGDS ?? null;
    }

    /**
     * Set BookingSourceGDS value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $bookingSourceGDS
     *
     * @return TravelAgency
     */
    public function setBookingSourceGDS(?string $bookingSourceGDS = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingSourceGDS) && !is_string($bookingSourceGDS)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingSourceGDS, true), gettype($bookingSourceGDS)), __LINE__);
        }
        if (is_null($bookingSourceGDS) || (is_array($bookingSourceGDS) && empty($bookingSourceGDS))) {
            unset($this->BookingSourceGDS);
        } else {
            $this->BookingSourceGDS = $bookingSourceGDS;
        }

        return $this;
    }

    /**
     * Get MIDBackOffice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getMIDBackOffice(): ?string
    {
        return $this->MIDBackOffice ?? null;
    }

    /**
     * Set MIDBackOffice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $mIDBackOffice
     *
     * @return TravelAgency
     */
    public function setMIDBackOffice(?string $mIDBackOffice = null): self
    {
        // validation for constraint: string
        if (!is_null($mIDBackOffice) && !is_string($mIDBackOffice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mIDBackOffice, true), gettype($mIDBackOffice)), __LINE__);
        }
        if (is_null($mIDBackOffice) || (is_array($mIDBackOffice) && empty($mIDBackOffice))) {
            unset($this->MIDBackOffice);
        } else {
            $this->MIDBackOffice = $mIDBackOffice;
        }

        return $this;
    }

    /**
     * Get WorkPhone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getWorkPhone(): ?string
    {
        return $this->WorkPhone ?? null;
    }

    /**
     * Set WorkPhone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $workPhone
     *
     * @return TravelAgency
     */
    public function setWorkPhone(?string $workPhone = null): self
    {
        // validation for constraint: string
        if (!is_null($workPhone) && !is_string($workPhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workPhone, true), gettype($workPhone)), __LINE__);
        }
        if (is_null($workPhone) || (is_array($workPhone) && empty($workPhone))) {
            unset($this->WorkPhone);
        } else {
            $this->WorkPhone = $workPhone;
        }

        return $this;
    }

    /**
     * Get FAX value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFAX(): ?string
    {
        return $this->FAX ?? null;
    }

    /**
     * Set FAX value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $fAX
     *
     * @return TravelAgency
     */
    public function setFAX(?string $fAX = null): self
    {
        // validation for constraint: string
        if (!is_null($fAX) && !is_string($fAX)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fAX, true), gettype($fAX)), __LINE__);
        }
        if (is_null($fAX) || (is_array($fAX) && empty($fAX))) {
            unset($this->FAX);
        } else {
            $this->FAX = $fAX;
        }

        return $this;
    }

    /**
     * Get CCIAARegistrationNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCCIAARegistrationNumber(): ?string
    {
        return $this->CCIAARegistrationNumber ?? null;
    }

    /**
     * Set CCIAARegistrationNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $cCIAARegistrationNumber
     *
     * @return TravelAgency
     */
    public function setCCIAARegistrationNumber(?string $cCIAARegistrationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($cCIAARegistrationNumber) && !is_string($cCIAARegistrationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cCIAARegistrationNumber, true), gettype($cCIAARegistrationNumber)), __LINE__);
        }
        if (is_null($cCIAARegistrationNumber) || (is_array($cCIAARegistrationNumber) && empty($cCIAARegistrationNumber))) {
            unset($this->CCIAARegistrationNumber);
        } else {
            $this->CCIAARegistrationNumber = $cCIAARegistrationNumber;
        }

        return $this;
    }

    /**
     * Get LodgeCardType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getLodgeCardType(): ?string
    {
        return $this->LodgeCardType ?? null;
    }

    /**
     * Set LodgeCardType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $lodgeCardType
     *
     * @return TravelAgency
     */
    public function setLodgeCardType(?string $lodgeCardType = null): self
    {
        // validation for constraint: string
        if (!is_null($lodgeCardType) && !is_string($lodgeCardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lodgeCardType, true), gettype($lodgeCardType)), __LINE__);
        }
        if (is_null($lodgeCardType) || (is_array($lodgeCardType) && empty($lodgeCardType))) {
            unset($this->LodgeCardType);
        } else {
            $this->LodgeCardType = $lodgeCardType;
        }

        return $this;
    }

    /**
     * Get LodgeCardNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getLodgeCardNumber(): ?string
    {
        return $this->LodgeCardNumber ?? null;
    }

    /**
     * Set LodgeCardNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $lodgeCardNumber
     *
     * @return TravelAgency
     */
    public function setLodgeCardNumber(?string $lodgeCardNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($lodgeCardNumber) && !is_string($lodgeCardNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lodgeCardNumber, true), gettype($lodgeCardNumber)), __LINE__);
        }
        if (is_null($lodgeCardNumber) || (is_array($lodgeCardNumber) && empty($lodgeCardNumber))) {
            unset($this->LodgeCardNumber);
        } else {
            $this->LodgeCardNumber = $lodgeCardNumber;
        }

        return $this;
    }

    /**
     * Get LodgeCardHolder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getLodgeCardHolder(): ?string
    {
        return $this->LodgeCardHolder ?? null;
    }

    /**
     * Set LodgeCardHolder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $lodgeCardHolder
     *
     * @return TravelAgency
     */
    public function setLodgeCardHolder(?string $lodgeCardHolder = null): self
    {
        // validation for constraint: string
        if (!is_null($lodgeCardHolder) && !is_string($lodgeCardHolder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lodgeCardHolder, true), gettype($lodgeCardHolder)), __LINE__);
        }
        if (is_null($lodgeCardHolder) || (is_array($lodgeCardHolder) && empty($lodgeCardHolder))) {
            unset($this->LodgeCardHolder);
        } else {
            $this->LodgeCardHolder = $lodgeCardHolder;
        }

        return $this;
    }

    /**
     * Get LodgeCardEndDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getLodgeCardEndDate(): ?string
    {
        return $this->LodgeCardEndDate ?? null;
    }

    /**
     * Set LodgeCardEndDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $lodgeCardEndDate
     *
     * @return TravelAgency
     */
    public function setLodgeCardEndDate(?string $lodgeCardEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lodgeCardEndDate) && !is_string($lodgeCardEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lodgeCardEndDate, true), gettype($lodgeCardEndDate)), __LINE__);
        }
        if (is_null($lodgeCardEndDate) || (is_array($lodgeCardEndDate) && empty($lodgeCardEndDate))) {
            unset($this->LodgeCardEndDate);
        } else {
            $this->LodgeCardEndDate = $lodgeCardEndDate;
        }

        return $this;
    }

    /**
     * Get DistributionTool value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDistributionTool(): ?string
    {
        return $this->DistributionTool ?? null;
    }

    /**
     * Set DistributionTool value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $distributionTool
     *
     * @return TravelAgency
     */
    public function setDistributionTool(?string $distributionTool = null): self
    {
        // validation for constraint: string
        if (!is_null($distributionTool) && !is_string($distributionTool)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($distributionTool, true), gettype($distributionTool)), __LINE__);
        }
        if (is_null($distributionTool) || (is_array($distributionTool) && empty($distributionTool))) {
            unset($this->DistributionTool);
        } else {
            $this->DistributionTool = $distributionTool;
        }

        return $this;
    }

    /**
     * Get Promocode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPromocode(): ?string
    {
        return $this->Promocode ?? null;
    }

    /**
     * Set Promocode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $promocode
     *
     * @return TravelAgency
     */
    public function setPromocode(?string $promocode = null): self
    {
        // validation for constraint: string
        if (!is_null($promocode) && !is_string($promocode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promocode, true), gettype($promocode)), __LINE__);
        }
        if (is_null($promocode) || (is_array($promocode) && empty($promocode))) {
            unset($this->Promocode);
        } else {
            $this->Promocode = $promocode;
        }

        return $this;
    }

    /**
     * Get CarnetType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCarnetType(): ?string
    {
        return $this->CarnetType ?? null;
    }

    /**
     * Set CarnetType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $carnetType
     *
     * @return TravelAgency
     */
    public function setCarnetType(?string $carnetType = null): self
    {
        // validation for constraint: string
        if (!is_null($carnetType) && !is_string($carnetType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carnetType, true), gettype($carnetType)), __LINE__);
        }
        if (is_null($carnetType) || (is_array($carnetType) && empty($carnetType))) {
            unset($this->CarnetType);
        } else {
            $this->CarnetType = $carnetType;
        }

        return $this;
    }

    /**
     * Get CashBackPNR value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCashBackPNR(): ?string
    {
        return $this->CashBackPNR ?? null;
    }

    /**
     * Set CashBackPNR value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $cashBackPNR
     *
     * @return TravelAgency
     */
    public function setCashBackPNR(?string $cashBackPNR = null): self
    {
        // validation for constraint: string
        if (!is_null($cashBackPNR) && !is_string($cashBackPNR)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cashBackPNR, true), gettype($cashBackPNR)), __LINE__);
        }
        if (is_null($cashBackPNR) || (is_array($cashBackPNR) && empty($cashBackPNR))) {
            unset($this->CashBackPNR);
        } else {
            $this->CashBackPNR = $cashBackPNR;
        }

        return $this;
    }

    /**
     * Get ParentAgency value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return TravelAgencyInfo|null
     */
    public function getParentAgency(): ?\Ntvspa\Big\Corporate\Structs\TravelAgencyInfo
    {
        return $this->ParentAgency ?? null;
    }

    /**
     * Set ParentAgency value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param TravelAgencyInfo $parentAgency
     *
     * @return TravelAgency
     */
    public function setParentAgency(?\Ntvspa\Big\Corporate\Structs\TravelAgencyInfo $parentAgency = null): self
    {
        if (is_null($parentAgency) || (is_array($parentAgency) && empty($parentAgency))) {
            unset($this->ParentAgency);
        } else {
            $this->ParentAgency = $parentAgency;
        }

        return $this;
    }

    /**
     * Get BaseAgencyBillingCenter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return TravelAgencyInfo|null
     */
    public function getBaseAgencyBillingCenter(): ?\Ntvspa\Big\Corporate\Structs\TravelAgencyInfo
    {
        return $this->BaseAgencyBillingCenter ?? null;
    }

    /**
     * Set BaseAgencyBillingCenter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param TravelAgencyInfo $baseAgencyBillingCenter
     *
     * @return TravelAgency
     */
    public function setBaseAgencyBillingCenter(?\Ntvspa\Big\Corporate\Structs\TravelAgencyInfo $baseAgencyBillingCenter = null): self
    {
        if (is_null($baseAgencyBillingCenter) || (is_array($baseAgencyBillingCenter) && empty($baseAgencyBillingCenter))) {
            unset($this->BaseAgencyBillingCenter);
        } else {
            $this->BaseAgencyBillingCenter = $baseAgencyBillingCenter;
        }

        return $this;
    }

    /**
     * Get OverAgencyBillingCenter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return TravelAgencyInfo|null
     */
    public function getOverAgencyBillingCenter(): ?\Ntvspa\Big\Corporate\Structs\TravelAgencyInfo
    {
        return $this->OverAgencyBillingCenter ?? null;
    }

    /**
     * Set OverAgencyBillingCenter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param TravelAgencyInfo $overAgencyBillingCenter
     *
     * @return TravelAgency
     */
    public function setOverAgencyBillingCenter(?\Ntvspa\Big\Corporate\Structs\TravelAgencyInfo $overAgencyBillingCenter = null): self
    {
        if (is_null($overAgencyBillingCenter) || (is_array($overAgencyBillingCenter) && empty($overAgencyBillingCenter))) {
            unset($this->OverAgencyBillingCenter);
        } else {
            $this->OverAgencyBillingCenter = $overAgencyBillingCenter;
        }

        return $this;
    }

    /**
     * Get ContactPerson value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Contact|null
     */
    public function getContactPerson(): ?\Ntvspa\Big\Corporate\Structs\Contact
    {
        return $this->ContactPerson ?? null;
    }

    /**
     * Set ContactPerson value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Contact $contactPerson
     *
     * @return TravelAgency
     */
    public function setContactPerson(?\Ntvspa\Big\Corporate\Structs\Contact $contactPerson = null): self
    {
        if (is_null($contactPerson) || (is_array($contactPerson) && empty($contactPerson))) {
            unset($this->ContactPerson);
        } else {
            $this->ContactPerson = $contactPerson;
        }

        return $this;
    }

    /**
     * Get Addresses value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return AddressesList|null
     */
    public function getAddresses(): ?\Ntvspa\Big\Corporate\Structs\AddressesList
    {
        return $this->Addresses ?? null;
    }

    /**
     * Set Addresses value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param AddressesList $addresses
     *
     * @return TravelAgency
     */
    public function setAddresses(?\Ntvspa\Big\Corporate\Structs\AddressesList $addresses = null): self
    {
        if (is_null($addresses) || (is_array($addresses) && empty($addresses))) {
            unset($this->Addresses);
        } else {
            $this->Addresses = $addresses;
        }

        return $this;
    }

    /**
     * Get TravelAgencyHierarchy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Corporate\Arrays\ArrayOfTravelAgencyInfo|null
     */
    public function getTravelAgencyHierarchy(): ?ArrayOfTravelAgencyInfo
    {
        return $this->TravelAgencyHierarchy ?? null;
    }

    /**
     * Set TravelAgencyHierarchy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfTravelAgencyInfo $travelAgencyHierarchy
     *
     * @return TravelAgency
     */
    public function setTravelAgencyHierarchy(?ArrayOfTravelAgencyInfo $travelAgencyHierarchy = null): self
    {
        if (is_null($travelAgencyHierarchy) || (is_array($travelAgencyHierarchy) && empty($travelAgencyHierarchy))) {
            unset($this->TravelAgencyHierarchy);
        } else {
            $this->TravelAgencyHierarchy = $travelAgencyHierarchy;
        }

        return $this;
    }

    /**
     * Get TravelAgencyNetworks value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Corporate\Arrays\ArrayOfTravelAgencyNetwork|null
     */
    public function getTravelAgencyNetworks(): ?ArrayOfTravelAgencyNetwork
    {
        return $this->TravelAgencyNetworks ?? null;
    }

    /**
     * Set TravelAgencyNetworks value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfTravelAgencyNetwork $travelAgencyNetworks
     *
     * @return TravelAgency
     */
    public function setTravelAgencyNetworks(?ArrayOfTravelAgencyNetwork $travelAgencyNetworks = null): self
    {
        if (is_null($travelAgencyNetworks) || (is_array($travelAgencyNetworks) && empty($travelAgencyNetworks))) {
            unset($this->TravelAgencyNetworks);
        } else {
            $this->TravelAgencyNetworks = $travelAgencyNetworks;
        }

        return $this;
    }

    /**
     * Get Corporates value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Corporate\Arrays\ArrayOfCorporate|null
     */
    public function getCorporates(): ?ArrayOfCorporate
    {
        return $this->Corporates ?? null;
    }

    /**
     * Set Corporates value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfCorporate $corporates
     *
     * @return TravelAgency
     */
    public function setCorporates(?ArrayOfCorporate $corporates = null): self
    {
        if (is_null($corporates) || (is_array($corporates) && empty($corporates))) {
            unset($this->Corporates);
        } else {
            $this->Corporates = $corporates;
        }

        return $this;
    }

    /**
     * Get CorporateSegment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return CorporateSegment|null
     */
    public function getCorporateSegment(): ?\Ntvspa\Big\Corporate\Structs\CorporateSegment
    {
        return $this->CorporateSegment ?? null;
    }

    /**
     * Set CorporateSegment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param CorporateSegment $corporateSegment
     *
     * @return TravelAgency
     */
    public function setCorporateSegment(?\Ntvspa\Big\Corporate\Structs\CorporateSegment $corporateSegment = null): self
    {
        if (is_null($corporateSegment) || (is_array($corporateSegment) && empty($corporateSegment))) {
            unset($this->CorporateSegment);
        } else {
            $this->CorporateSegment = $corporateSegment;
        }

        return $this;
    }

    /**
     * Get MandateResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getMandateResult(): ?string
    {
        return $this->MandateResult ?? null;
    }

    /**
     * Set MandateResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $mandateResult
     *
     * @return TravelAgency
     */
    public function setMandateResult(?string $mandateResult = null): self
    {
        // validation for constraint: string
        if (!is_null($mandateResult) && !is_string($mandateResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mandateResult, true), gettype($mandateResult)), __LINE__);
        }
        if (is_null($mandateResult) || (is_array($mandateResult) && empty($mandateResult))) {
            unset($this->MandateResult);
        } else {
            $this->MandateResult = $mandateResult;
        }

        return $this;
    }

    /**
     * Get Cluster value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCluster(): ?string
    {
        return $this->Cluster ?? null;
    }

    /**
     * Set Cluster value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $cluster
     *
     * @return TravelAgency
     */
    public function setCluster(?string $cluster = null): self
    {
        // validation for constraint: string
        if (!is_null($cluster) && !is_string($cluster)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cluster, true), gettype($cluster)), __LINE__);
        }
        if (is_null($cluster) || (is_array($cluster) && empty($cluster))) {
            unset($this->Cluster);
        } else {
            $this->Cluster = $cluster;
        }

        return $this;
    }

    /**
     * Get PromoterCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPromoterCode(): ?string
    {
        return $this->PromoterCode ?? null;
    }

    /**
     * Set PromoterCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $promoterCode
     *
     * @return TravelAgency
     */
    public function setPromoterCode(?string $promoterCode = null): self
    {
        // validation for constraint: string
        if (!is_null($promoterCode) && !is_string($promoterCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promoterCode, true), gettype($promoterCode)), __LINE__);
        }
        if (is_null($promoterCode) || (is_array($promoterCode) && empty($promoterCode))) {
            unset($this->PromoterCode);
        } else {
            $this->PromoterCode = $promoterCode;
        }

        return $this;
    }

    /**
     * Get MasterTravelAgent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return MasterTravelAgent|null
     */
    public function getMasterTravelAgent(): ?\Ntvspa\Big\Corporate\Structs\MasterTravelAgent
    {
        return $this->MasterTravelAgent ?? null;
    }

    /**
     * Set MasterTravelAgent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param MasterTravelAgent $masterTravelAgent
     *
     * @return TravelAgency
     */
    public function setMasterTravelAgent(?\Ntvspa\Big\Corporate\Structs\MasterTravelAgent $masterTravelAgent = null): self
    {
        if (is_null($masterTravelAgent) || (is_array($masterTravelAgent) && empty($masterTravelAgent))) {
            unset($this->MasterTravelAgent);
        } else {
            $this->MasterTravelAgent = $masterTravelAgent;
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
     * @return TravelAgency
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
     * Get FiscalCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFiscalCode(): ?string
    {
        return $this->FiscalCode ?? null;
    }

    /**
     * Set FiscalCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $fiscalCode
     *
     * @return TravelAgency
     */
    public function setFiscalCode(?string $fiscalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($fiscalCode) && !is_string($fiscalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fiscalCode, true), gettype($fiscalCode)), __LINE__);
        }
        if (is_null($fiscalCode) || (is_array($fiscalCode) && empty($fiscalCode))) {
            unset($this->FiscalCode);
        } else {
            $this->FiscalCode = $fiscalCode;
        }

        return $this;
    }
}

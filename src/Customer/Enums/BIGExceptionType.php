<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BIGExceptionType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BIGExceptionType
 *
 * @subpackage Enumerations
 */
class BIGExceptionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'GenericInfrastructureError'
     *
     * @return string 'GenericInfrastructureError'
     */
    const VALUE_GENERIC_INFRASTRUCTURE_ERROR = 'GenericInfrastructureError';
    /**
     * Constant for value 'OtherServiceInformation'
     *
     * @return string 'OtherServiceInformation'
     */
    const VALUE_OTHER_SERVICE_INFORMATION = 'OtherServiceInformation';
    /**
     * Constant for value 'GenericApplicationWarning'
     *
     * @return string 'GenericApplicationWarning'
     */
    const VALUE_GENERIC_APPLICATION_WARNING = 'GenericApplicationWarning';
    /**
     * Constant for value 'GenericApplicationError'
     *
     * @return string 'GenericApplicationError'
     */
    const VALUE_GENERIC_APPLICATION_ERROR = 'GenericApplicationError';
    /**
     * Constant for value 'ValidationFailed'
     *
     * @return string 'ValidationFailed'
     */
    const VALUE_VALIDATION_FAILED = 'ValidationFailed';
    /**
     * Constant for value 'BookingNotFound'
     *
     * @return string 'BookingNotFound'
     */
    const VALUE_BOOKING_NOT_FOUND = 'BookingNotFound';
    /**
     * Constant for value 'BalanceDuePositive'
     *
     * @return string 'BalanceDuePositive'
     */
    const VALUE_BALANCE_DUE_POSITIVE = 'BalanceDuePositive';
    /**
     * Constant for value 'FailedToAssignSeats'
     *
     * @return string 'FailedToAssignSeats'
     */
    const VALUE_FAILED_TO_ASSIGN_SEATS = 'FailedToAssignSeats';
    /**
     * Constant for value 'LogonFailed'
     *
     * @return string 'LogonFailed'
     */
    const VALUE_LOGON_FAILED = 'LogonFailed';
    /**
     * Constant for value 'UnableToRetrieveFareRestrictions'
     *
     * @return string 'UnableToRetrieveFareRestrictions'
     */
    const VALUE_UNABLE_TO_RETRIEVE_FARE_RESTRICTIONS = 'UnableToRetrieveFareRestrictions';
    /**
     * Constant for value 'UnableToRetrievePNR'
     *
     * @return string 'UnableToRetrievePNR'
     */
    const VALUE_UNABLE_TO_RETRIEVE_PNR = 'UnableToRetrievePNR';
    /**
     * Constant for value 'NoCreditOnPNR'
     *
     * @return string 'NoCreditOnPNR'
     */
    const VALUE_NO_CREDIT_ON_PNR = 'NoCreditOnPNR';
    /**
     * Constant for value 'UnableToRetrieveVoucher'
     *
     * @return string 'UnableToRetrieveVoucher'
     */
    const VALUE_UNABLE_TO_RETRIEVE_VOUCHER = 'UnableToRetrieveVoucher';
    /**
     * Constant for value 'PaymentError'
     *
     * @return string 'PaymentError'
     */
    const VALUE_PAYMENT_ERROR = 'PaymentError';
    /**
     * Constant for value 'FareApplicationFailure'
     *
     * @return string 'FareApplicationFailure'
     */
    const VALUE_FARE_APPLICATION_FAILURE = 'FareApplicationFailure';
    /**
     * Constant for value 'CorporateAccountPaymentMethodNotAllowed'
     *
     * @return string 'CorporateAccountPaymentMethodNotAllowed'
     */
    const VALUE_CORPORATE_ACCOUNT_PAYMENT_METHOD_NOT_ALLOWED = 'CorporateAccountPaymentMethodNotAllowed';
    /**
     * Constant for value 'FinalizeBookingFailure'
     *
     * @return string 'FinalizeBookingFailure'
     */
    const VALUE_FINALIZE_BOOKING_FAILURE = 'FinalizeBookingFailure';
    /**
     * Constant for value 'DuplicateBooking'
     *
     * @return string 'DuplicateBooking'
     */
    const VALUE_DUPLICATE_BOOKING = 'DuplicateBooking';
    /**
     * Constant for value 'UnableToRetrieveRFITrainNumber'
     *
     * @return string 'UnableToRetrieveRFITrainNumber'
     */
    const VALUE_UNABLE_TO_RETRIEVE_RFITRAIN_NUMBER = 'UnableToRetrieveRFITrainNumber';
    /**
     * Constant for value 'CustomerNumberNotMatch'
     *
     * @return string 'CustomerNumberNotMatch'
     */
    const VALUE_CUSTOMER_NUMBER_NOT_MATCH = 'CustomerNumberNotMatch';
    /**
     * Constant for value 'CustomerNumberNotExist'
     *
     * @return string 'CustomerNumberNotExist'
     */
    const VALUE_CUSTOMER_NUMBER_NOT_EXIST = 'CustomerNumberNotExist';
    /**
     * Constant for value 'SellFailure'
     *
     * @return string 'SellFailure'
     */
    const VALUE_SELL_FAILURE = 'SellFailure';
    /**
     * Constant for value 'JourneyOverlap'
     *
     * @return string 'JourneyOverlap'
     */
    const VALUE_JOURNEY_OVERLAP = 'JourneyOverlap';
    /**
     * Constant for value 'AgentNotAuthorized'
     *
     * @return string 'AgentNotAuthorized'
     */
    const VALUE_AGENT_NOT_AUTHORIZED = 'AgentNotAuthorized';
    /**
     * Constant for value 'CommitNotAuthorized'
     *
     * @return string 'CommitNotAuthorized'
     */
    const VALUE_COMMIT_NOT_AUTHORIZED = 'CommitNotAuthorized';
    /**
     * Constant for value 'GetFareRestrictionError'
     *
     * @return string 'GetFareRestrictionError'
     */
    const VALUE_GET_FARE_RESTRICTION_ERROR = 'GetFareRestrictionError';
    /**
     * Constant for value 'CancelNotAllow'
     *
     * @return string 'CancelNotAllow'
     */
    const VALUE_CANCEL_NOT_ALLOW = 'CancelNotAllow';
    /**
     * Constant for value 'JourneySellKey'
     *
     * @return string 'JourneySellKey'
     */
    const VALUE_JOURNEY_SELL_KEY = 'JourneySellKey';
    /**
     * Constant for value 'ModifyNumPax'
     *
     * @return string 'ModifyNumPax'
     */
    const VALUE_MODIFY_NUM_PAX = 'ModifyNumPax';
    /**
     * Constant for value 'SegmentSellKey'
     *
     * @return string 'SegmentSellKey'
     */
    const VALUE_SEGMENT_SELL_KEY = 'SegmentSellKey';
    /**
     * Constant for value 'PaxSSRNotFound'
     *
     * @return string 'PaxSSRNotFound'
     */
    const VALUE_PAX_SSRNOT_FOUND = 'PaxSSRNotFound';
    /**
     * Constant for value 'ModifyNumJurneys'
     *
     * @return string 'ModifyNumJurneys'
     */
    const VALUE_MODIFY_NUM_JURNEYS = 'ModifyNumJurneys';
    /**
     * Constant for value 'ModifyStation'
     *
     * @return string 'ModifyStation'
     */
    const VALUE_MODIFY_STATION = 'ModifyStation';
    /**
     * Constant for value 'UnableToModifyBooking'
     *
     * @return string 'UnableToModifyBooking'
     */
    const VALUE_UNABLE_TO_MODIFY_BOOKING = 'UnableToModifyBooking';
    /**
     * Constant for value 'ModifyNotAllow'
     *
     * @return string 'ModifyNotAllow'
     */
    const VALUE_MODIFY_NOT_ALLOW = 'ModifyNotAllow';
    /**
     * Constant for value 'FailedToUnassignSeats'
     *
     * @return string 'FailedToUnassignSeats'
     */
    const VALUE_FAILED_TO_UNASSIGN_SEATS = 'FailedToUnassignSeats';
    /**
     * Constant for value 'InvalidSessionToken'
     *
     * @return string 'InvalidSessionToken'
     */
    const VALUE_INVALID_SESSION_TOKEN = 'InvalidSessionToken';
    /**
     * Constant for value 'UnableToAssignToken'
     *
     * @return string 'UnableToAssignToken'
     */
    const VALUE_UNABLE_TO_ASSIGN_TOKEN = 'UnableToAssignToken';
    /**
     * Constant for value 'PaymentIDNotFound'
     *
     * @return string 'PaymentIDNotFound'
     */
    const VALUE_PAYMENT_IDNOT_FOUND = 'PaymentIDNotFound';
    /**
     * Constant for value 'NoRefundableAmount'
     *
     * @return string 'NoRefundableAmount'
     */
    const VALUE_NO_REFUNDABLE_AMOUNT = 'NoRefundableAmount';
    /**
     * Constant for value 'CCRefundMandatory'
     *
     * @return string 'CCRefundMandatory'
     */
    const VALUE_CCREFUND_MANDATORY = 'CCRefundMandatory';
    /**
     * Constant for value 'IgnoreRestriction'
     *
     * @return string 'IgnoreRestriction'
     */
    const VALUE_IGNORE_RESTRICTION = 'IgnoreRestriction';
    /**
     * Constant for value 'QueryNotAllow'
     *
     * @return string 'QueryNotAllow'
     */
    const VALUE_QUERY_NOT_ALLOW = 'QueryNotAllow';
    /**
     * Constant for value 'UnableToRetrievePromocode'
     *
     * @return string 'UnableToRetrievePromocode'
     */
    const VALUE_UNABLE_TO_RETRIEVE_PROMOCODE = 'UnableToRetrievePromocode';
    /**
     * Constant for value 'PromocodeNotFound'
     *
     * @return string 'PromocodeNotFound'
     */
    const VALUE_PROMOCODE_NOT_FOUND = 'PromocodeNotFound';
    /**
     * Constant for value 'PassengerEntityRequired'
     *
     * @return string 'PassengerEntityRequired'
     */
    const VALUE_PASSENGER_ENTITY_REQUIRED = 'PassengerEntityRequired';
    /**
     * Constant for value 'SpecialMealValidation'
     *
     * @return string 'SpecialMealValidation'
     */
    const VALUE_SPECIAL_MEAL_VALIDATION = 'SpecialMealValidation';
    /**
     * Constant for value 'SegmentNotFound'
     *
     * @return string 'SegmentNotFound'
     */
    const VALUE_SEGMENT_NOT_FOUND = 'SegmentNotFound';
    /**
     * Constant for value 'NothingToPay'
     *
     * @return string 'NothingToPay'
     */
    const VALUE_NOTHING_TO_PAY = 'NothingToPay';
    /**
     * Constant for value 'NothingToRefund'
     *
     * @return string 'NothingToRefund'
     */
    const VALUE_NOTHING_TO_REFUND = 'NothingToRefund';
    /**
     * Constant for value 'ReassignSSR'
     *
     * @return string 'ReassignSSR'
     */
    const VALUE_REASSIGN_SSR = 'ReassignSSR';
    /**
     * Constant for value 'PartnerNotFound'
     *
     * @return string 'PartnerNotFound'
     */
    const VALUE_PARTNER_NOT_FOUND = 'PartnerNotFound';
    /**
     * Constant for value 'UnableToRetrieveCustomerPoints'
     *
     * @return string 'UnableToRetrieveCustomerPoints'
     */
    const VALUE_UNABLE_TO_RETRIEVE_CUSTOMER_POINTS = 'UnableToRetrieveCustomerPoints';
    /**
     * Constant for value 'UnableToRetrieveCreditShell'
     *
     * @return string 'UnableToRetrieveCreditShell'
     */
    const VALUE_UNABLE_TO_RETRIEVE_CREDIT_SHELL = 'UnableToRetrieveCreditShell';
    /**
     * Constant for value 'UnableToMapLoyaltyPoints'
     *
     * @return string 'UnableToMapLoyaltyPoints'
     */
    const VALUE_UNABLE_TO_MAP_LOYALTY_POINTS = 'UnableToMapLoyaltyPoints';
    /**
     * Constant for value 'UnableToRetrieveLoyaltyCatalog'
     *
     * @return string 'UnableToRetrieveLoyaltyCatalog'
     */
    const VALUE_UNABLE_TO_RETRIEVE_LOYALTY_CATALOG = 'UnableToRetrieveLoyaltyCatalog';
    /**
     * Constant for value 'UnableToModifyBookingWithLoyaltyPoints'
     *
     * @return string 'UnableToModifyBookingWithLoyaltyPoints'
     */
    const VALUE_UNABLE_TO_MODIFY_BOOKING_WITH_LOYALTY_POINTS = 'UnableToModifyBookingWithLoyaltyPoints';
    /**
     * Constant for value 'UnableToModifyFareOfBooking'
     *
     * @return string 'UnableToModifyFareOfBooking'
     */
    const VALUE_UNABLE_TO_MODIFY_FARE_OF_BOOKING = 'UnableToModifyFareOfBooking';
    /**
     * Constant for value 'UnableToAddLoyaltyPayment'
     *
     * @return string 'UnableToAddLoyaltyPayment'
     */
    const VALUE_UNABLE_TO_ADD_LOYALTY_PAYMENT = 'UnableToAddLoyaltyPayment';
    /**
     * Constant for value 'UnableToRetrievePDFTicket'
     *
     * @return string 'UnableToRetrievePDFTicket'
     */
    const VALUE_UNABLE_TO_RETRIEVE_PDFTICKET = 'UnableToRetrievePDFTicket';
    /**
     * Constant for value 'UnableToRetrieveLoyaltyPoints'
     *
     * @return string 'UnableToRetrieveLoyaltyPoints'
     */
    const VALUE_UNABLE_TO_RETRIEVE_LOYALTY_POINTS = 'UnableToRetrieveLoyaltyPoints';
    /**
     * Constant for value 'UnableToDiscardTransaction'
     *
     * @return string 'UnableToDiscardTransaction'
     */
    const VALUE_UNABLE_TO_DISCARD_TRANSACTION = 'UnableToDiscardTransaction';
    /**
     * Constant for value 'UnableToRetrieveAvailableCredit'
     *
     * @return string 'UnableToRetrieveAvailableCredit'
     */
    const VALUE_UNABLE_TO_RETRIEVE_AVAILABLE_CREDIT = 'UnableToRetrieveAvailableCredit';
    /**
     * Constant for value 'UnableToRetrieveVoucherAmount'
     *
     * @return string 'UnableToRetrieveVoucherAmount'
     */
    const VALUE_UNABLE_TO_RETRIEVE_VOUCHER_AMOUNT = 'UnableToRetrieveVoucherAmount';
    /**
     * Constant for value 'UnableToDeactivateCustomerAsset'
     *
     * @return string 'UnableToDeactivateCustomerAsset'
     */
    const VALUE_UNABLE_TO_DEACTIVATE_CUSTOMER_ASSET = 'UnableToDeactivateCustomerAsset';
    /**
     * Constant for value 'WarningFare'
     *
     * @return string 'WarningFare'
     */
    const VALUE_WARNING_FARE = 'WarningFare';
    /**
     * Constant for value 'MaxSrrOnPassenger'
     *
     * @return string 'MaxSrrOnPassenger'
     */
    const VALUE_MAX_SRR_ON_PASSENGER = 'MaxSrrOnPassenger';
    /**
     * Constant for value 'NtvPromoInapplicable'
     *
     * @return string 'NtvPromoInapplicable'
     */
    const VALUE_NTV_PROMO_INAPPLICABLE = 'NtvPromoInapplicable';
    /**
     * Constant for value 'UnableToRetrieveRealTimeStatus'
     *
     * @return string 'UnableToRetrieveRealTimeStatus'
     */
    const VALUE_UNABLE_TO_RETRIEVE_REAL_TIME_STATUS = 'UnableToRetrieveRealTimeStatus';
    /**
     * Constant for value 'ApplicationUnkonwn'
     *
     * @return string 'ApplicationUnkonwn'
     */
    const VALUE_APPLICATION_UNKONWN = 'ApplicationUnkonwn';
    /**
     * Constant for value 'DeactivatedAsset'
     *
     * @return string 'DeactivatedAsset'
     */
    const VALUE_DEACTIVATED_ASSET = 'DeactivatedAsset';
    /**
     * Constant for value 'AgentNotAllowedtoAddPassengers'
     *
     * @return string 'AgentNotAllowedtoAddPassengers'
     */
    const VALUE_AGENT_NOT_ALLOWEDTO_ADD_PASSENGERS = 'AgentNotAllowedtoAddPassengers';
    /**
     * Constant for value 'AgencyCreditPaymentError'
     *
     * @return string 'AgencyCreditPaymentError'
     */
    const VALUE_AGENCY_CREDIT_PAYMENT_ERROR = 'AgencyCreditPaymentError';
    /**
     * Constant for value 'VoucherNotRedeemable'
     *
     * @return string 'VoucherNotRedeemable'
     */
    const VALUE_VOUCHER_NOT_REDEEMABLE = 'VoucherNotRedeemable';
    /**
     * Constant for value 'InvalidJourneyOrder'
     *
     * @return string 'InvalidJourneyOrder'
     */
    const VALUE_INVALID_JOURNEY_ORDER = 'InvalidJourneyOrder';
    /**
     * Constant for value 'UnableToRetrieveGRMContent'
     *
     * @return string 'UnableToRetrieveGRMContent'
     */
    const VALUE_UNABLE_TO_RETRIEVE_GRMCONTENT = 'UnableToRetrieveGRMContent';
    /**
     * Constant for value 'BookingContactIsRequired'
     *
     * @return string 'BookingContactIsRequired'
     */
    const VALUE_BOOKING_CONTACT_IS_REQUIRED = 'BookingContactIsRequired';
    /**
     * Constant for value 'UnableToRetrieveNAVTrainNumber'
     *
     * @return string 'UnableToRetrieveNAVTrainNumber'
     */
    const VALUE_UNABLE_TO_RETRIEVE_NAVTRAIN_NUMBER = 'UnableToRetrieveNAVTrainNumber';
    /**
     * Constant for value 'UnableToRetrieveBestPrice'
     *
     * @return string 'UnableToRetrieveBestPrice'
     */
    const VALUE_UNABLE_TO_RETRIEVE_BEST_PRICE = 'UnableToRetrieveBestPrice';
    /**
     * Constant for value 'CyberErrorPayment'
     *
     * @return string 'CyberErrorPayment'
     */
    const VALUE_CYBER_ERROR_PAYMENT = 'CyberErrorPayment';
    /**
     * Constant for value 'UnableToRetrieveCatalog'
     *
     * @return string 'UnableToRetrieveCatalog'
     */
    const VALUE_UNABLE_TO_RETRIEVE_CATALOG = 'UnableToRetrieveCatalog';
    /**
     * Constant for value 'UnableToCreateOrder'
     *
     * @return string 'UnableToCreateOrder'
     */
    const VALUE_UNABLE_TO_CREATE_ORDER = 'UnableToCreateOrder';
    /**
     * Constant for value 'UnableToFinalizeOrder'
     *
     * @return string 'UnableToFinalizeOrder'
     */
    const VALUE_UNABLE_TO_FINALIZE_ORDER = 'UnableToFinalizeOrder';
    /**
     * Constant for value 'UnableToAddBookingComments'
     *
     * @return string 'UnableToAddBookingComments'
     */
    const VALUE_UNABLE_TO_ADD_BOOKING_COMMENTS = 'UnableToAddBookingComments';
    /**
     * Constant for value 'UnableToOverrideFare'
     *
     * @return string 'UnableToOverrideFare'
     */
    const VALUE_UNABLE_TO_OVERRIDE_FARE = 'UnableToOverrideFare';
    /**
     * Constant for value 'ProductActivationDateNotValid'
     *
     * @return string 'ProductActivationDateNotValid'
     */
    const VALUE_PRODUCT_ACTIVATION_DATE_NOT_VALID = 'ProductActivationDateNotValid';
    /**
     * Constant for value 'UnableToRetrieveAssetID'
     *
     * @return string 'UnableToRetrieveAssetID'
     */
    const VALUE_UNABLE_TO_RETRIEVE_ASSET_ID = 'UnableToRetrieveAssetID';
    /**
     * Constant for value 'InvalidPaymentCode'
     *
     * @return string 'InvalidPaymentCode'
     */
    const VALUE_INVALID_PAYMENT_CODE = 'InvalidPaymentCode';
    /**
     * Constant for value 'InvalidFareBasis'
     *
     * @return string 'InvalidFareBasis'
     */
    const VALUE_INVALID_FARE_BASIS = 'InvalidFareBasis';
    /**
     * Constant for value 'InvalidDateTime'
     *
     * @return string 'InvalidDateTime'
     */
    const VALUE_INVALID_DATE_TIME = 'InvalidDateTime';
    /**
     * Constant for value 'ServiceTimeout'
     *
     * @return string 'ServiceTimeout'
     */
    const VALUE_SERVICE_TIMEOUT = 'ServiceTimeout';
    /**
     * Constant for value 'PayPalAgreementIDCanceled'
     *
     * @return string 'PayPalAgreementIDCanceled'
     */
    const VALUE_PAY_PAL_AGREEMENT_IDCANCELED = 'PayPalAgreementIDCanceled';
    /**
     * Constant for value 'PayPalRetryReferenceTransaction'
     *
     * @return string 'PayPalRetryReferenceTransaction'
     */
    const VALUE_PAY_PAL_RETRY_REFERENCE_TRANSACTION = 'PayPalRetryReferenceTransaction';
    /**
     * Constant for value 'PayPalPaymentValidationError'
     *
     * @return string 'PayPalPaymentValidationError'
     */
    const VALUE_PAY_PAL_PAYMENT_VALIDATION_ERROR = 'PayPalPaymentValidationError';
    /**
     * Constant for value 'FailedToGenerateExpressCheckoutUrl'
     *
     * @return string 'FailedToGenerateExpressCheckoutUrl'
     */
    const VALUE_FAILED_TO_GENERATE_EXPRESS_CHECKOUT_URL = 'FailedToGenerateExpressCheckoutUrl';
    /**
     * Constant for value 'PayPalRefundBookingCommitFailed'
     *
     * @return string 'PayPalRefundBookingCommitFailed'
     */
    const VALUE_PAY_PAL_REFUND_BOOKING_COMMIT_FAILED = 'PayPalRefundBookingCommitFailed';
    /**
     * Constant for value 'FailedToAssignAnySeat'
     *
     * @return string 'FailedToAssignAnySeat'
     */
    const VALUE_FAILED_TO_ASSIGN_ANY_SEAT = 'FailedToAssignAnySeat';
    /**
     * Constant for value 'EmailAlreadyInDb'
     *
     * @return string 'EmailAlreadyInDb'
     */
    const VALUE_EMAIL_ALREADY_IN_DB = 'EmailAlreadyInDb';
    /**
     * Constant for value 'EmailAcquisitoAlreadyInDB'
     *
     * @return string 'EmailAcquisitoAlreadyInDB'
     */
    const VALUE_EMAIL_ACQUISITO_ALREADY_IN_DB = 'EmailAcquisitoAlreadyInDB';
    /**
     * Constant for value 'EmailBasicAlreadyInDB'
     *
     * @return string 'EmailBasicAlreadyInDB'
     */
    const VALUE_EMAIL_BASIC_ALREADY_IN_DB = 'EmailBasicAlreadyInDB';
    /**
     * Constant for value 'PayPalSubmitPaymentFailedOnNSK'
     *
     * @return string 'PayPalSubmitPaymentFailedOnNSK'
     */
    const VALUE_PAY_PAL_SUBMIT_PAYMENT_FAILED_ON_NSK = 'PayPalSubmitPaymentFailedOnNSK';
    /**
     * Constant for value 'RequestInvoiceFailed'
     *
     * @return string 'RequestInvoiceFailed'
     */
    const VALUE_REQUEST_INVOICE_FAILED = 'RequestInvoiceFailed';
    /**
     * Constant for value 'ExternalPaymentMandatory'
     *
     * @return string 'ExternalPaymentMandatory'
     */
    const VALUE_EXTERNAL_PAYMENT_MANDATORY = 'ExternalPaymentMandatory';
    /**
     * Constant for value 'UnauthorizedPromotionUse'
     *
     * @return string 'UnauthorizedPromotionUse'
     */
    const VALUE_UNAUTHORIZED_PROMOTION_USE = 'UnauthorizedPromotionUse';
    /**
     * Constant for value 'InvalidPromotionRequest'
     *
     * @return string 'InvalidPromotionRequest'
     */
    const VALUE_INVALID_PROMOTION_REQUEST = 'InvalidPromotionRequest';
    /**
     * Constant for value 'InvalidPromotionConfiguration'
     *
     * @return string 'InvalidPromotionConfiguration'
     */
    const VALUE_INVALID_PROMOTION_CONFIGURATION = 'InvalidPromotionConfiguration';
    /**
     * Constant for value 'PromotionAlredyApplied'
     *
     * @return string 'PromotionAlredyApplied'
     */
    const VALUE_PROMOTION_ALREDY_APPLIED = 'PromotionAlredyApplied';
    /**
     * Constant for value 'PromotionNotAuthorizedForCurrentBooking'
     *
     * @return string 'PromotionNotAuthorizedForCurrentBooking'
     */
    const VALUE_PROMOTION_NOT_AUTHORIZED_FOR_CURRENT_BOOKING = 'PromotionNotAuthorizedForCurrentBooking';
    /**
     * Constant for value 'PromotionAvailabilitySoldOut'
     *
     * @return string 'PromotionAvailabilitySoldOut'
     */
    const VALUE_PROMOTION_AVAILABILITY_SOLD_OUT = 'PromotionAvailabilitySoldOut';
    /**
     * Constant for value 'PromotionNotAppliedForUnexpectedError'
     *
     * @return string 'PromotionNotAppliedForUnexpectedError'
     */
    const VALUE_PROMOTION_NOT_APPLIED_FOR_UNEXPECTED_ERROR = 'PromotionNotAppliedForUnexpectedError';
    /**
     * Constant for value 'UpsertCustomerFailed'
     *
     * @return string 'UpsertCustomerFailed'
     */
    const VALUE_UPSERT_CUSTOMER_FAILED = 'UpsertCustomerFailed';
    /**
     * Constant for value 'AgentNotFound'
     *
     * @return string 'AgentNotFound'
     */
    const VALUE_AGENT_NOT_FOUND = 'AgentNotFound';
    /**
     * Constant for value 'UpsertCustomerContactsFailed'
     *
     * @return string 'UpsertCustomerContactsFailed'
     */
    const VALUE_UPSERT_CUSTOMER_CONTACTS_FAILED = 'UpsertCustomerContactsFailed';
    /**
     * Constant for value 'NotValidCustomerCredentials'
     *
     * @return string 'NotValidCustomerCredentials'
     */
    const VALUE_NOT_VALID_CUSTOMER_CREDENTIALS = 'NotValidCustomerCredentials';
    /**
     * Constant for value 'UserNotFound'
     *
     * @return string 'UserNotFound'
     */
    const VALUE_USER_NOT_FOUND = 'UserNotFound';
    /**
     * Constant for value 'EmployeeOfferNotApplicable'
     *
     * @return string 'EmployeeOfferNotApplicable'
     */
    const VALUE_EMPLOYEE_OFFER_NOT_APPLICABLE = 'EmployeeOfferNotApplicable';
    /**
     * Constant for value 'OffersNotCombinable'
     *
     * @return string 'OffersNotCombinable'
     */
    const VALUE_OFFERS_NOT_COMBINABLE = 'OffersNotCombinable';
    /**
     * Constant for value 'StationNotFound'
     *
     * @return string 'StationNotFound'
     */
    const VALUE_STATION_NOT_FOUND = 'StationNotFound';
    /**
     * Constant for value 'FailedToChangeLoyaltyLevel'
     *
     * @return string 'FailedToChangeLoyaltyLevel'
     */
    const VALUE_FAILED_TO_CHANGE_LOYALTY_LEVEL = 'FailedToChangeLoyaltyLevel';
    /**
     * Constant for value 'UnauthorizedSeatMapAccess'
     *
     * @return string 'UnauthorizedSeatMapAccess'
     */
    const VALUE_UNAUTHORIZED_SEAT_MAP_ACCESS = 'UnauthorizedSeatMapAccess';
    /**
     * Constant for value 'UnauthorizedAssignSeats'
     *
     * @return string 'UnauthorizedAssignSeats'
     */
    const VALUE_UNAUTHORIZED_ASSIGN_SEATS = 'UnauthorizedAssignSeats';
    /**
     * Constant for value 'UnauthorizedModifySeats'
     *
     * @return string 'UnauthorizedModifySeats'
     */
    const VALUE_UNAUTHORIZED_MODIFY_SEATS = 'UnauthorizedModifySeats';
    /**
     * Constant for value 'CyberErrorFop'
     *
     * @return string 'CyberErrorFop'
     */
    const VALUE_CYBER_ERROR_FOP = 'CyberErrorFop';
    /**
     * Constant for value 'InvalidData'
     *
     * @return string 'InvalidData'
     */
    const VALUE_INVALID_DATA = 'InvalidData';
    /**
     * Constant for value 'CorporateDomainNotAllowed'
     *
     * @return string 'CorporateDomainNotAllowed'
     */
    const VALUE_CORPORATE_DOMAIN_NOT_ALLOWED = 'CorporateDomainNotAllowed';
    /**
     * Constant for value 'ChangePromocodeOnEditFlow'
     *
     * @return string 'ChangePromocodeOnEditFlow'
     */
    const VALUE_CHANGE_PROMOCODE_ON_EDIT_FLOW = 'ChangePromocodeOnEditFlow';
    /**
     * Constant for value 'UnableToRetrieveCustomerPromotion'
     *
     * @return string 'UnableToRetrieveCustomerPromotion'
     */
    const VALUE_UNABLE_TO_RETRIEVE_CUSTOMER_PROMOTION = 'UnableToRetrieveCustomerPromotion';
    /**
     * Constant for value 'UserNotActive'
     *
     * @return string 'UserNotActive'
     */
    const VALUE_USER_NOT_ACTIVE = 'UserNotActive';
    /**
     * Constant for value 'BookingNotInSession'
     *
     * @return string 'BookingNotInSession'
     */
    const VALUE_BOOKING_NOT_IN_SESSION = 'BookingNotInSession';
    /**
     * Constant for value 'BookingDataNotSuitable'
     *
     * @return string 'BookingDataNotSuitable'
     */
    const VALUE_BOOKING_DATA_NOT_SUITABLE = 'BookingDataNotSuitable';
    /**
     * Constant for value 'OrderTransactionNotFound'
     *
     * @return string 'OrderTransactionNotFound'
     */
    const VALUE_ORDER_TRANSACTION_NOT_FOUND = 'OrderTransactionNotFound';
    /**
     * Constant for value 'MaxDateExceed'
     *
     * @return string 'MaxDateExceed'
     */
    const VALUE_MAX_DATE_EXCEED = 'MaxDateExceed';
    /**
     * Constant for value 'WarningCheckVersion'
     *
     * @return string 'WarningCheckVersion'
     */
    const VALUE_WARNING_CHECK_VERSION = 'WarningCheckVersion';
    /**
     * Constant for value 'ErrorCheckVersion'
     *
     * @return string 'ErrorCheckVersion'
     */
    const VALUE_ERROR_CHECK_VERSION = 'ErrorCheckVersion';
    /**
     * Constant for value 'ErrorCheckPaxType'
     *
     * @return string 'ErrorCheckPaxType'
     */
    const VALUE_ERROR_CHECK_PAX_TYPE = 'ErrorCheckPaxType';
    /**
     * Constant for value 'AgentNotAuthorizedForOperation'
     *
     * @return string 'AgentNotAuthorizedForOperation'
     */
    const VALUE_AGENT_NOT_AUTHORIZED_FOR_OPERATION = 'AgentNotAuthorizedForOperation';
    /**
     * Constant for value 'UnableToRecognizePartnerID'
     *
     * @return string 'UnableToRecognizePartnerID'
     */
    const VALUE_UNABLE_TO_RECOGNIZE_PARTNER_ID = 'UnableToRecognizePartnerID';
    /**
     * Constant for value 'ImpresaMustNotUseCustomer'
     *
     * @return string 'ImpresaMustNotUseCustomer'
     */
    const VALUE_IMPRESA_MUST_NOT_USE_CUSTOMER = 'ImpresaMustNotUseCustomer';
    /**
     * Constant for value 'PrevalorizedPartnerID'
     *
     * @return string 'PrevalorizedPartnerID'
     */
    const VALUE_PREVALORIZED_PARTNER_ID = 'PrevalorizedPartnerID';
    /**
     * Constant for value 'MaxFOPReached'
     *
     * @return string 'MaxFOPReached'
     */
    const VALUE_MAX_FOPREACHED = 'MaxFOPReached';
    /**
     * Constant for value 'LimitedOperation'
     *
     * @return string 'LimitedOperation'
     */
    const VALUE_LIMITED_OPERATION = 'LimitedOperation';
    /**
     * Constant for value 'AmazonPayError'
     *
     * @return string 'AmazonPayError'
     */
    const VALUE_AMAZON_PAY_ERROR = 'AmazonPayError';
    /**
     * Constant for value 'AmazonPaySoftDeclinedError'
     *
     * @return string 'AmazonPaySoftDeclinedError'
     */
    const VALUE_AMAZON_PAY_SOFT_DECLINED_ERROR = 'AmazonPaySoftDeclinedError';
    /**
     * Constant for value 'AmazonPayPaymentValidationError'
     *
     * @return string 'AmazonPayPaymentValidationError'
     */
    const VALUE_AMAZON_PAY_PAYMENT_VALIDATION_ERROR = 'AmazonPayPaymentValidationError';
    /**
     * Constant for value 'AmazonPayBillingAgreementNotValidError'
     *
     * @return string 'AmazonPayBillingAgreementNotValidError'
     */
    const VALUE_AMAZON_PAY_BILLING_AGREEMENT_NOT_VALID_ERROR = 'AmazonPayBillingAgreementNotValidError';
    /**
     * Constant for value 'AmazonPayNotEnoughFoundsOnBillingAgreement'
     *
     * @return string 'AmazonPayNotEnoughFoundsOnBillingAgreement'
     */
    const VALUE_AMAZON_PAY_NOT_ENOUGH_FOUNDS_ON_BILLING_AGREEMENT = 'AmazonPayNotEnoughFoundsOnBillingAgreement';
    /**
     * Constant for value 'AmazonPayRefundBookingCommitFailed'
     *
     * @return string 'AmazonPayRefundBookingCommitFailed'
     */
    const VALUE_AMAZON_PAY_REFUND_BOOKING_COMMIT_FAILED = 'AmazonPayRefundBookingCommitFailed';
    /**
     * Constant for value 'ExternalPaymentSubmitFailedOnNSK'
     *
     * @return string 'ExternalPaymentSubmitFailedOnNSK'
     */
    const VALUE_EXTERNAL_PAYMENT_SUBMIT_FAILED_ON_NSK = 'ExternalPaymentSubmitFailedOnNSK';
    /**
     * Constant for value 'ContactPersonPhoneNumberNull'
     *
     * @return string 'ContactPersonPhoneNumberNull'
     */
    const VALUE_CONTACT_PERSON_PHONE_NUMBER_NULL = 'ContactPersonPhoneNumberNull';
    /**
     * Constant for value 'VATNumberAlreadyRegisteredAsTravelAgency'
     *
     * @return string 'VATNumberAlreadyRegisteredAsTravelAgency'
     */
    const VALUE_VATNUMBER_ALREADY_REGISTERED_AS_TRAVEL_AGENCY = 'VATNumberAlreadyRegisteredAsTravelAgency';
    /**
     * Constant for value 'ContactPersonPhoneNumberAlreadyRegisteredAsTravelAgency'
     *
     * @return string 'ContactPersonPhoneNumberAlreadyRegisteredAsTravelAgency'
     */
    const VALUE_CONTACT_PERSON_PHONE_NUMBER_ALREADY_REGISTERED_AS_TRAVEL_AGENCY = 'ContactPersonPhoneNumberAlreadyRegisteredAsTravelAgency';
    /**
     * Constant for value 'VATNumberAlreadyRegisteredAsItaloImpresaCorporate'
     *
     * @return string 'VATNumberAlreadyRegisteredAsItaloImpresaCorporate'
     */
    const VALUE_VATNUMBER_ALREADY_REGISTERED_AS_ITALO_IMPRESA_CORPORATE = 'VATNumberAlreadyRegisteredAsItaloImpresaCorporate';
    /**
     * Constant for value
     * 'ContactPersonPhoneNumberAlreadyRegisteredAsItaloImpresaCorporate'
     *
     * @return string 'ContactPersonPhoneNumberAlreadyRegisteredAsItaloImpresaCorporate'
     */
    const VALUE_CONTACT_PERSON_PHONE_NUMBER_ALREADY_REGISTERED_AS_ITALO_IMPRESA_CORPORATE = 'ContactPersonPhoneNumberAlreadyRegisteredAsItaloImpresaCorporate';
    /**
     * Constant for value 'VATNumberAlreadyRegisteredAsUnmannedCorporate'
     *
     * @return string 'VATNumberAlreadyRegisteredAsUnmannedCorporate'
     */
    const VALUE_VATNUMBER_ALREADY_REGISTERED_AS_UNMANNED_CORPORATE = 'VATNumberAlreadyRegisteredAsUnmannedCorporate';
    /**
     * Constant for value
     * 'ContactPersonPhoneNumberAlreadyRegistrederAsUnmannedCorporate'
     *
     * @return string 'ContactPersonPhoneNumberAlreadyRegistrederAsUnmannedCorporate'
     */
    const VALUE_CONTACT_PERSON_PHONE_NUMBER_ALREADY_REGISTREDER_AS_UNMANNED_CORPORATE = 'ContactPersonPhoneNumberAlreadyRegistrederAsUnmannedCorporate';
    /**
     * Constant for value 'VATNumberAlreadyRegisteredAsMannedCorporate'
     *
     * @return string 'VATNumberAlreadyRegisteredAsMannedCorporate'
     */
    const VALUE_VATNUMBER_ALREADY_REGISTERED_AS_MANNED_CORPORATE = 'VATNumberAlreadyRegisteredAsMannedCorporate';
    /**
     * Constant for value 'ContactPersonPhoneNumberAlreadyRegistrederAsMannedCorporate'
     *
     * @return string 'ContactPersonPhoneNumberAlreadyRegistrederAsMannedCorporate'
     */
    const VALUE_CONTACT_PERSON_PHONE_NUMBER_ALREADY_REGISTREDER_AS_MANNED_CORPORATE = 'ContactPersonPhoneNumberAlreadyRegistrederAsMannedCorporate';
    /**
     * Constant for value 'InvalidVATNumber'
     *
     * @return string 'InvalidVATNumber'
     */
    const VALUE_INVALID_VATNUMBER = 'InvalidVATNumber';
    /**
     * Constant for value 'CartaServiziGenericError'
     *
     * @return string 'CartaServiziGenericError'
     */
    const VALUE_CARTA_SERVIZI_GENERIC_ERROR = 'CartaServiziGenericError';
    /**
     * Constant for value 'DomecGenericError'
     *
     * @return string 'DomecGenericError'
     */
    const VALUE_DOMEC_GENERIC_ERROR = 'DomecGenericError';
    /**
     * Constant for value 'DomecSerialNumberNotFound'
     *
     * @return string 'DomecSerialNumberNotFound'
     */
    const VALUE_DOMEC_SERIAL_NUMBER_NOT_FOUND = 'DomecSerialNumberNotFound';
    /**
     * Constant for value 'IgnoreFareRestrictions'
     *
     * @return string 'IgnoreFareRestrictions'
     */
    const VALUE_IGNORE_FARE_RESTRICTIONS = 'IgnoreFareRestrictions';
    /**
     * Constant for value 'UnableToRefund'
     *
     * @return string 'UnableToRefund'
     */
    const VALUE_UNABLE_TO_REFUND = 'UnableToRefund';
    /**
     * Constant for value 'UnableToApplyFareLock'
     *
     * @return string 'UnableToApplyFareLock'
     */
    const VALUE_UNABLE_TO_APPLY_FARE_LOCK = 'UnableToApplyFareLock';
    /**
     * Constant for value 'PaymentMethodNotValidForDeposit'
     *
     * @return string 'PaymentMethodNotValidForDeposit'
     */
    const VALUE_PAYMENT_METHOD_NOT_VALID_FOR_DEPOSIT = 'PaymentMethodNotValidForDeposit';
    /**
     * Constant for value 'ForgotPasswordInvalidToken'
     *
     * @return string 'ForgotPasswordInvalidToken'
     */
    const VALUE_FORGOT_PASSWORD_INVALID_TOKEN = 'ForgotPasswordInvalidToken';
    /**
     * Constant for value 'ForgotPasswordExpiredToken'
     *
     * @return string 'ForgotPasswordExpiredToken'
     */
    const VALUE_FORGOT_PASSWORD_EXPIRED_TOKEN = 'ForgotPasswordExpiredToken';
    /**
     * Constant for value 'ForgotPasswordAlreadyChanged'
     *
     * @return string 'ForgotPasswordAlreadyChanged'
     */
    const VALUE_FORGOT_PASSWORD_ALREADY_CHANGED = 'ForgotPasswordAlreadyChanged';
    /**
     * Constant for value 'ForgotPasswordInvalidPassword'
     *
     * @return string 'ForgotPasswordInvalidPassword'
     */
    const VALUE_FORGOT_PASSWORD_INVALID_PASSWORD = 'ForgotPasswordInvalidPassword';
    /**
     * Constant for value 'AgentMustUseRegisteredCarnet'
     *
     * @return string 'AgentMustUseRegisteredCarnet'
     */
    const VALUE_AGENT_MUST_USE_REGISTERED_CARNET = 'AgentMustUseRegisteredCarnet';
    /**
     * Constant for value 'AgentNotAuthenticateCarnetRegistered'
     *
     * @return string 'AgentNotAuthenticateCarnetRegistered'
     */
    const VALUE_AGENT_NOT_AUTHENTICATE_CARNET_REGISTERED = 'AgentNotAuthenticateCarnetRegistered';
    /**
     * Constant for value 'UnableToRetrievePromotion'
     *
     * @return string 'UnableToRetrievePromotion'
     */
    const VALUE_UNABLE_TO_RETRIEVE_PROMOTION = 'UnableToRetrievePromotion';
    /**
     * Constant for value 'AesConfigurationError'
     *
     * @return string 'AesConfigurationError'
     */
    const VALUE_AES_CONFIGURATION_ERROR = 'AesConfigurationError';
    /**
     * Constant for value 'UnableToGenerateExternalPartnerUrl'
     *
     * @return string 'UnableToGenerateExternalPartnerUrl'
     */
    const VALUE_UNABLE_TO_GENERATE_EXTERNAL_PARTNER_URL = 'UnableToGenerateExternalPartnerUrl';
    /**
     * Constant for value 'OnlyOnePassenger'
     *
     * @return string 'OnlyOnePassenger'
     */
    const VALUE_ONLY_ONE_PASSENGER = 'OnlyOnePassenger';
    /**
     * Constant for value 'ErrorinUpgradeRequest'
     *
     * @return string 'ErrorinUpgradeRequest'
     */
    const VALUE_ERRORIN_UPGRADE_REQUEST = 'ErrorinUpgradeRequest';
    /**
     * Constant for value 'ErrorinLoungeRequest'
     *
     * @return string 'ErrorinLoungeRequest'
     */
    const VALUE_ERRORIN_LOUNGE_REQUEST = 'ErrorinLoungeRequest';
    /**
     * Constant for value 'ErrorinLeaveNowRequestWrongDirection'
     *
     * @return string 'ErrorinLeaveNowRequestWrongDirection'
     */
    const VALUE_ERRORIN_LEAVE_NOW_REQUEST_WRONG_DIRECTION = 'ErrorinLeaveNowRequestWrongDirection';
    /**
     * Constant for value 'ErrorinLeaveNowRequestPNRUnable'
     *
     * @return string 'ErrorinLeaveNowRequestPNRUnable'
     */
    const VALUE_ERRORIN_LEAVE_NOW_REQUEST_PNRUNABLE = 'ErrorinLeaveNowRequestPNRUnable';
    /**
     * Constant for value 'ErrorinPetRequest'
     *
     * @return string 'ErrorinPetRequest'
     */
    const VALUE_ERRORIN_PET_REQUEST = 'ErrorinPetRequest';
    /**
     * Constant for value 'ErrorInRemovePetSsr'
     *
     * @return string 'ErrorInRemovePetSsr'
     */
    const VALUE_ERROR_IN_REMOVE_PET_SSR = 'ErrorInRemovePetSsr';
    /**
     * Constant for value 'ErrorInAddPetSsr'
     *
     * @return string 'ErrorInAddPetSsr'
     */
    const VALUE_ERROR_IN_ADD_PET_SSR = 'ErrorInAddPetSsr';
    /**
     * Constant for value 'UnableToShowSeatForQuantity'
     *
     * @return string 'UnableToShowSeatForQuantity'
     */
    const VALUE_UNABLE_TO_SHOW_SEAT_FOR_QUANTITY = 'UnableToShowSeatForQuantity';
    /**
     * Constant for value 'FailedCustomerDeleteActiveProduct'
     *
     * @return string 'FailedCustomerDeleteActiveProduct'
     */
    const VALUE_FAILED_CUSTOMER_DELETE_ACTIVE_PRODUCT = 'FailedCustomerDeleteActiveProduct';
    /**
     * Constant for value 'FailedCustomerDeleteActivePurse'
     *
     * @return string 'FailedCustomerDeleteActivePurse'
     */
    const VALUE_FAILED_CUSTOMER_DELETE_ACTIVE_PURSE = 'FailedCustomerDeleteActivePurse';
    /**
     * Constant for value 'AgencyDuplicatePartitaIva'
     *
     * @return string 'AgencyDuplicatePartitaIva'
     */
    const VALUE_AGENCY_DUPLICATE_PARTITA_IVA = 'AgencyDuplicatePartitaIva';
    /**
     * Constant for value 'ItaloImpresaDuplicatePartitaIva'
     *
     * @return string 'ItaloImpresaDuplicatePartitaIva'
     */
    const VALUE_ITALO_IMPRESA_DUPLICATE_PARTITA_IVA = 'ItaloImpresaDuplicatePartitaIva';
    /**
     * Constant for value 'CorporateNPDuplicatePartitaIva'
     *
     * @return string 'CorporateNPDuplicatePartitaIva'
     */
    const VALUE_CORPORATE_NPDUPLICATE_PARTITA_IVA = 'CorporateNPDuplicatePartitaIva';
    /**
     * Constant for value 'CorporateDuplicatePartitaIva'
     *
     * @return string 'CorporateDuplicatePartitaIva'
     */
    const VALUE_CORPORATE_DUPLICATE_PARTITA_IVA = 'CorporateDuplicatePartitaIva';
    /**
     * Constant for value 'ItaloBusinessDuplicatePartitaIva'
     *
     * @return string 'ItaloBusinessDuplicatePartitaIva'
     */
    const VALUE_ITALO_BUSINESS_DUPLICATE_PARTITA_IVA = 'ItaloBusinessDuplicatePartitaIva';
    /**
     * Constant for value 'PartnerDuplicatePartitaIva'
     *
     * @return string 'PartnerDuplicatePartitaIva'
     */
    const VALUE_PARTNER_DUPLICATE_PARTITA_IVA = 'PartnerDuplicatePartitaIva';
    /**
     * Constant for value 'InvalidPartitaIva'
     *
     * @return string 'InvalidPartitaIva'
     */
    const VALUE_INVALID_PARTITA_IVA = 'InvalidPartitaIva';
    /**
     * Constant for value 'AgencyDuplicateMail'
     *
     * @return string 'AgencyDuplicateMail'
     */
    const VALUE_AGENCY_DUPLICATE_MAIL = 'AgencyDuplicateMail';
    /**
     * Constant for value 'ItaloBusinessDuplicateMail'
     *
     * @return string 'ItaloBusinessDuplicateMail'
     */
    const VALUE_ITALO_BUSINESS_DUPLICATE_MAIL = 'ItaloBusinessDuplicateMail';
    /**
     * Constant for value 'PartnerDuplicateMail'
     *
     * @return string 'PartnerDuplicateMail'
     */
    const VALUE_PARTNER_DUPLICATE_MAIL = 'PartnerDuplicateMail';
    /**
     * Constant for value 'ImpresaDuplicateMail'
     *
     * @return string 'ImpresaDuplicateMail'
     */
    const VALUE_IMPRESA_DUPLICATE_MAIL = 'ImpresaDuplicateMail';
    /**
     * Constant for value 'CorporateNPDuplicateMail'
     *
     * @return string 'CorporateNPDuplicateMail'
     */
    const VALUE_CORPORATE_NPDUPLICATE_MAIL = 'CorporateNPDuplicateMail';
    /**
     * Constant for value 'CorporateDuplicateMail'
     *
     * @return string 'CorporateDuplicateMail'
     */
    const VALUE_CORPORATE_DUPLICATE_MAIL = 'CorporateDuplicateMail';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_GENERIC_INFRASTRUCTURE_ERROR
     * @uses self::VALUE_OTHER_SERVICE_INFORMATION
     * @uses self::VALUE_GENERIC_APPLICATION_WARNING
     * @uses self::VALUE_GENERIC_APPLICATION_ERROR
     * @uses self::VALUE_VALIDATION_FAILED
     * @uses self::VALUE_BOOKING_NOT_FOUND
     * @uses self::VALUE_BALANCE_DUE_POSITIVE
     * @uses self::VALUE_FAILED_TO_ASSIGN_SEATS
     * @uses self::VALUE_LOGON_FAILED
     * @uses self::VALUE_UNABLE_TO_RETRIEVE_FARE_RESTRICTIONS
     * @uses self::VALUE_UNABLE_TO_RETRIEVE_PNR
     * @uses self::VALUE_NO_CREDIT_ON_PNR
     * @uses self::VALUE_UNABLE_TO_RETRIEVE_VOUCHER
     * @uses self::VALUE_PAYMENT_ERROR
     * @uses self::VALUE_FARE_APPLICATION_FAILURE
     * @uses self::VALUE_CORPORATE_ACCOUNT_PAYMENT_METHOD_NOT_ALLOWED
     * @uses self::VALUE_FINALIZE_BOOKING_FAILURE
     * @uses self::VALUE_DUPLICATE_BOOKING
     * @uses self::VALUE_UNABLE_TO_RETRIEVE_RFITRAIN_NUMBER
     * @uses self::VALUE_CUSTOMER_NUMBER_NOT_MATCH
     * @uses self::VALUE_CUSTOMER_NUMBER_NOT_EXIST
     * @uses self::VALUE_SELL_FAILURE
     * @uses self::VALUE_JOURNEY_OVERLAP
     * @uses self::VALUE_AGENT_NOT_AUTHORIZED
     * @uses self::VALUE_COMMIT_NOT_AUTHORIZED
     * @uses self::VALUE_GET_FARE_RESTRICTION_ERROR
     * @uses self::VALUE_CANCEL_NOT_ALLOW
     * @uses self::VALUE_JOURNEY_SELL_KEY
     * @uses self::VALUE_MODIFY_NUM_PAX
     * @uses self::VALUE_SEGMENT_SELL_KEY
     * @uses self::VALUE_PAX_SSRNOT_FOUND
     * @uses self::VALUE_MODIFY_NUM_JURNEYS
     * @uses self::VALUE_MODIFY_STATION
     * @uses self::VALUE_UNABLE_TO_MODIFY_BOOKING
     * @uses self::VALUE_MODIFY_NOT_ALLOW
     * @uses self::VALUE_FAILED_TO_UNASSIGN_SEATS
     * @uses self::VALUE_INVALID_SESSION_TOKEN
     * @uses self::VALUE_UNABLE_TO_ASSIGN_TOKEN
     * @uses self::VALUE_PAYMENT_IDNOT_FOUND
     * @uses self::VALUE_NO_REFUNDABLE_AMOUNT
     * @uses self::VALUE_CCREFUND_MANDATORY
     * @uses self::VALUE_IGNORE_RESTRICTION
     * @uses self::VALUE_QUERY_NOT_ALLOW
     * @uses self::VALUE_UNABLE_TO_RETRIEVE_PROMOCODE
     * @uses self::VALUE_PROMOCODE_NOT_FOUND
     * @uses self::VALUE_PASSENGER_ENTITY_REQUIRED
     * @uses self::VALUE_SPECIAL_MEAL_VALIDATION
     * @uses self::VALUE_SEGMENT_NOT_FOUND
     * @uses self::VALUE_NOTHING_TO_PAY
     * @uses self::VALUE_NOTHING_TO_REFUND
     * @uses self::VALUE_REASSIGN_SSR
     * @uses self::VALUE_PARTNER_NOT_FOUND
     * @uses self::VALUE_UNABLE_TO_RETRIEVE_CUSTOMER_POINTS
     * @uses self::VALUE_UNABLE_TO_RETRIEVE_CREDIT_SHELL
     * @uses self::VALUE_UNABLE_TO_MAP_LOYALTY_POINTS
     * @uses self::VALUE_UNABLE_TO_RETRIEVE_LOYALTY_CATALOG
     * @uses self::VALUE_UNABLE_TO_MODIFY_BOOKING_WITH_LOYALTY_POINTS
     * @uses self::VALUE_UNABLE_TO_MODIFY_FARE_OF_BOOKING
     * @uses self::VALUE_UNABLE_TO_ADD_LOYALTY_PAYMENT
     * @uses self::VALUE_UNABLE_TO_RETRIEVE_PDFTICKET
     * @uses self::VALUE_UNABLE_TO_RETRIEVE_LOYALTY_POINTS
     * @uses self::VALUE_UNABLE_TO_DISCARD_TRANSACTION
     * @uses self::VALUE_UNABLE_TO_RETRIEVE_AVAILABLE_CREDIT
     * @uses self::VALUE_UNABLE_TO_RETRIEVE_VOUCHER_AMOUNT
     * @uses self::VALUE_UNABLE_TO_DEACTIVATE_CUSTOMER_ASSET
     * @uses self::VALUE_WARNING_FARE
     * @uses self::VALUE_MAX_SRR_ON_PASSENGER
     * @uses self::VALUE_NTV_PROMO_INAPPLICABLE
     * @uses self::VALUE_UNABLE_TO_RETRIEVE_REAL_TIME_STATUS
     * @uses self::VALUE_APPLICATION_UNKONWN
     * @uses self::VALUE_DEACTIVATED_ASSET
     * @uses self::VALUE_AGENT_NOT_ALLOWEDTO_ADD_PASSENGERS
     * @uses self::VALUE_AGENCY_CREDIT_PAYMENT_ERROR
     * @uses self::VALUE_VOUCHER_NOT_REDEEMABLE
     * @uses self::VALUE_INVALID_JOURNEY_ORDER
     * @uses self::VALUE_UNABLE_TO_RETRIEVE_GRMCONTENT
     * @uses self::VALUE_BOOKING_CONTACT_IS_REQUIRED
     * @uses self::VALUE_UNABLE_TO_RETRIEVE_NAVTRAIN_NUMBER
     * @uses self::VALUE_UNABLE_TO_RETRIEVE_BEST_PRICE
     * @uses self::VALUE_CYBER_ERROR_PAYMENT
     * @uses self::VALUE_UNABLE_TO_RETRIEVE_CATALOG
     * @uses self::VALUE_UNABLE_TO_CREATE_ORDER
     * @uses self::VALUE_UNABLE_TO_FINALIZE_ORDER
     * @uses self::VALUE_UNABLE_TO_ADD_BOOKING_COMMENTS
     * @uses self::VALUE_UNABLE_TO_OVERRIDE_FARE
     * @uses self::VALUE_PRODUCT_ACTIVATION_DATE_NOT_VALID
     * @uses self::VALUE_UNABLE_TO_RETRIEVE_ASSET_ID
     * @uses self::VALUE_INVALID_PAYMENT_CODE
     * @uses self::VALUE_INVALID_FARE_BASIS
     * @uses self::VALUE_INVALID_DATE_TIME
     * @uses self::VALUE_SERVICE_TIMEOUT
     * @uses self::VALUE_PAY_PAL_AGREEMENT_IDCANCELED
     * @uses self::VALUE_PAY_PAL_RETRY_REFERENCE_TRANSACTION
     * @uses self::VALUE_PAY_PAL_PAYMENT_VALIDATION_ERROR
     * @uses self::VALUE_FAILED_TO_GENERATE_EXPRESS_CHECKOUT_URL
     * @uses self::VALUE_PAY_PAL_REFUND_BOOKING_COMMIT_FAILED
     * @uses self::VALUE_FAILED_TO_ASSIGN_ANY_SEAT
     * @uses self::VALUE_EMAIL_ALREADY_IN_DB
     * @uses self::VALUE_EMAIL_ACQUISITO_ALREADY_IN_DB
     * @uses self::VALUE_EMAIL_BASIC_ALREADY_IN_DB
     * @uses self::VALUE_PAY_PAL_SUBMIT_PAYMENT_FAILED_ON_NSK
     * @uses self::VALUE_REQUEST_INVOICE_FAILED
     * @uses self::VALUE_EXTERNAL_PAYMENT_MANDATORY
     * @uses self::VALUE_UNAUTHORIZED_PROMOTION_USE
     * @uses self::VALUE_INVALID_PROMOTION_REQUEST
     * @uses self::VALUE_INVALID_PROMOTION_CONFIGURATION
     * @uses self::VALUE_PROMOTION_ALREDY_APPLIED
     * @uses self::VALUE_PROMOTION_NOT_AUTHORIZED_FOR_CURRENT_BOOKING
     * @uses self::VALUE_PROMOTION_AVAILABILITY_SOLD_OUT
     * @uses self::VALUE_PROMOTION_NOT_APPLIED_FOR_UNEXPECTED_ERROR
     * @uses self::VALUE_UPSERT_CUSTOMER_FAILED
     * @uses self::VALUE_AGENT_NOT_FOUND
     * @uses self::VALUE_UPSERT_CUSTOMER_CONTACTS_FAILED
     * @uses self::VALUE_NOT_VALID_CUSTOMER_CREDENTIALS
     * @uses self::VALUE_USER_NOT_FOUND
     * @uses self::VALUE_EMPLOYEE_OFFER_NOT_APPLICABLE
     * @uses self::VALUE_OFFERS_NOT_COMBINABLE
     * @uses self::VALUE_STATION_NOT_FOUND
     * @uses self::VALUE_FAILED_TO_CHANGE_LOYALTY_LEVEL
     * @uses self::VALUE_UNAUTHORIZED_SEAT_MAP_ACCESS
     * @uses self::VALUE_UNAUTHORIZED_ASSIGN_SEATS
     * @uses self::VALUE_UNAUTHORIZED_MODIFY_SEATS
     * @uses self::VALUE_CYBER_ERROR_FOP
     * @uses self::VALUE_INVALID_DATA
     * @uses self::VALUE_CORPORATE_DOMAIN_NOT_ALLOWED
     * @uses self::VALUE_CHANGE_PROMOCODE_ON_EDIT_FLOW
     * @uses self::VALUE_UNABLE_TO_RETRIEVE_CUSTOMER_PROMOTION
     * @uses self::VALUE_USER_NOT_ACTIVE
     * @uses self::VALUE_BOOKING_NOT_IN_SESSION
     * @uses self::VALUE_BOOKING_DATA_NOT_SUITABLE
     * @uses self::VALUE_ORDER_TRANSACTION_NOT_FOUND
     * @uses self::VALUE_MAX_DATE_EXCEED
     * @uses self::VALUE_WARNING_CHECK_VERSION
     * @uses self::VALUE_ERROR_CHECK_VERSION
     * @uses self::VALUE_ERROR_CHECK_PAX_TYPE
     * @uses self::VALUE_AGENT_NOT_AUTHORIZED_FOR_OPERATION
     * @uses self::VALUE_UNABLE_TO_RECOGNIZE_PARTNER_ID
     * @uses self::VALUE_IMPRESA_MUST_NOT_USE_CUSTOMER
     * @uses self::VALUE_PREVALORIZED_PARTNER_ID
     * @uses self::VALUE_MAX_FOPREACHED
     * @uses self::VALUE_LIMITED_OPERATION
     * @uses self::VALUE_AMAZON_PAY_ERROR
     * @uses self::VALUE_AMAZON_PAY_SOFT_DECLINED_ERROR
     * @uses self::VALUE_AMAZON_PAY_PAYMENT_VALIDATION_ERROR
     * @uses self::VALUE_AMAZON_PAY_BILLING_AGREEMENT_NOT_VALID_ERROR
     * @uses self::VALUE_AMAZON_PAY_NOT_ENOUGH_FOUNDS_ON_BILLING_AGREEMENT
     * @uses self::VALUE_AMAZON_PAY_REFUND_BOOKING_COMMIT_FAILED
     * @uses self::VALUE_EXTERNAL_PAYMENT_SUBMIT_FAILED_ON_NSK
     * @uses self::VALUE_CONTACT_PERSON_PHONE_NUMBER_NULL
     * @uses self::VALUE_VATNUMBER_ALREADY_REGISTERED_AS_TRAVEL_AGENCY
     * @uses self::VALUE_CONTACT_PERSON_PHONE_NUMBER_ALREADY_REGISTERED_AS_TRAVEL_AGENCY
     * @uses self::VALUE_VATNUMBER_ALREADY_REGISTERED_AS_ITALO_IMPRESA_CORPORATE
     * @uses self::VALUE_CONTACT_PERSON_PHONE_NUMBER_ALREADY_REGISTERED_AS_ITALO_IMPRESA_CORPORATE
     * @uses self::VALUE_VATNUMBER_ALREADY_REGISTERED_AS_UNMANNED_CORPORATE
     * @uses self::VALUE_CONTACT_PERSON_PHONE_NUMBER_ALREADY_REGISTREDER_AS_UNMANNED_CORPORATE
     * @uses self::VALUE_VATNUMBER_ALREADY_REGISTERED_AS_MANNED_CORPORATE
     * @uses self::VALUE_CONTACT_PERSON_PHONE_NUMBER_ALREADY_REGISTREDER_AS_MANNED_CORPORATE
     * @uses self::VALUE_INVALID_VATNUMBER
     * @uses self::VALUE_CARTA_SERVIZI_GENERIC_ERROR
     * @uses self::VALUE_DOMEC_GENERIC_ERROR
     * @uses self::VALUE_DOMEC_SERIAL_NUMBER_NOT_FOUND
     * @uses self::VALUE_IGNORE_FARE_RESTRICTIONS
     * @uses self::VALUE_UNABLE_TO_REFUND
     * @uses self::VALUE_UNABLE_TO_APPLY_FARE_LOCK
     * @uses self::VALUE_PAYMENT_METHOD_NOT_VALID_FOR_DEPOSIT
     * @uses self::VALUE_FORGOT_PASSWORD_INVALID_TOKEN
     * @uses self::VALUE_FORGOT_PASSWORD_EXPIRED_TOKEN
     * @uses self::VALUE_FORGOT_PASSWORD_ALREADY_CHANGED
     * @uses self::VALUE_FORGOT_PASSWORD_INVALID_PASSWORD
     * @uses self::VALUE_AGENT_MUST_USE_REGISTERED_CARNET
     * @uses self::VALUE_AGENT_NOT_AUTHENTICATE_CARNET_REGISTERED
     * @uses self::VALUE_UNABLE_TO_RETRIEVE_PROMOTION
     * @uses self::VALUE_AES_CONFIGURATION_ERROR
     * @uses self::VALUE_UNABLE_TO_GENERATE_EXTERNAL_PARTNER_URL
     * @uses self::VALUE_ONLY_ONE_PASSENGER
     * @uses self::VALUE_ERRORIN_UPGRADE_REQUEST
     * @uses self::VALUE_ERRORIN_LOUNGE_REQUEST
     * @uses self::VALUE_ERRORIN_LEAVE_NOW_REQUEST_WRONG_DIRECTION
     * @uses self::VALUE_ERRORIN_LEAVE_NOW_REQUEST_PNRUNABLE
     * @uses self::VALUE_ERRORIN_PET_REQUEST
     * @uses self::VALUE_ERROR_IN_REMOVE_PET_SSR
     * @uses self::VALUE_ERROR_IN_ADD_PET_SSR
     * @uses self::VALUE_UNABLE_TO_SHOW_SEAT_FOR_QUANTITY
     * @uses self::VALUE_FAILED_CUSTOMER_DELETE_ACTIVE_PRODUCT
     * @uses self::VALUE_FAILED_CUSTOMER_DELETE_ACTIVE_PURSE
     * @uses self::VALUE_AGENCY_DUPLICATE_PARTITA_IVA
     * @uses self::VALUE_ITALO_IMPRESA_DUPLICATE_PARTITA_IVA
     * @uses self::VALUE_CORPORATE_NPDUPLICATE_PARTITA_IVA
     * @uses self::VALUE_CORPORATE_DUPLICATE_PARTITA_IVA
     * @uses self::VALUE_ITALO_BUSINESS_DUPLICATE_PARTITA_IVA
     * @uses self::VALUE_PARTNER_DUPLICATE_PARTITA_IVA
     * @uses self::VALUE_INVALID_PARTITA_IVA
     * @uses self::VALUE_AGENCY_DUPLICATE_MAIL
     * @uses self::VALUE_ITALO_BUSINESS_DUPLICATE_MAIL
     * @uses self::VALUE_PARTNER_DUPLICATE_MAIL
     * @uses self::VALUE_IMPRESA_DUPLICATE_MAIL
     * @uses self::VALUE_CORPORATE_NPDUPLICATE_MAIL
     * @uses self::VALUE_CORPORATE_DUPLICATE_MAIL
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_GENERIC_INFRASTRUCTURE_ERROR,
            self::VALUE_OTHER_SERVICE_INFORMATION,
            self::VALUE_GENERIC_APPLICATION_WARNING,
            self::VALUE_GENERIC_APPLICATION_ERROR,
            self::VALUE_VALIDATION_FAILED,
            self::VALUE_BOOKING_NOT_FOUND,
            self::VALUE_BALANCE_DUE_POSITIVE,
            self::VALUE_FAILED_TO_ASSIGN_SEATS,
            self::VALUE_LOGON_FAILED,
            self::VALUE_UNABLE_TO_RETRIEVE_FARE_RESTRICTIONS,
            self::VALUE_UNABLE_TO_RETRIEVE_PNR,
            self::VALUE_NO_CREDIT_ON_PNR,
            self::VALUE_UNABLE_TO_RETRIEVE_VOUCHER,
            self::VALUE_PAYMENT_ERROR,
            self::VALUE_FARE_APPLICATION_FAILURE,
            self::VALUE_CORPORATE_ACCOUNT_PAYMENT_METHOD_NOT_ALLOWED,
            self::VALUE_FINALIZE_BOOKING_FAILURE,
            self::VALUE_DUPLICATE_BOOKING,
            self::VALUE_UNABLE_TO_RETRIEVE_RFITRAIN_NUMBER,
            self::VALUE_CUSTOMER_NUMBER_NOT_MATCH,
            self::VALUE_CUSTOMER_NUMBER_NOT_EXIST,
            self::VALUE_SELL_FAILURE,
            self::VALUE_JOURNEY_OVERLAP,
            self::VALUE_AGENT_NOT_AUTHORIZED,
            self::VALUE_COMMIT_NOT_AUTHORIZED,
            self::VALUE_GET_FARE_RESTRICTION_ERROR,
            self::VALUE_CANCEL_NOT_ALLOW,
            self::VALUE_JOURNEY_SELL_KEY,
            self::VALUE_MODIFY_NUM_PAX,
            self::VALUE_SEGMENT_SELL_KEY,
            self::VALUE_PAX_SSRNOT_FOUND,
            self::VALUE_MODIFY_NUM_JURNEYS,
            self::VALUE_MODIFY_STATION,
            self::VALUE_UNABLE_TO_MODIFY_BOOKING,
            self::VALUE_MODIFY_NOT_ALLOW,
            self::VALUE_FAILED_TO_UNASSIGN_SEATS,
            self::VALUE_INVALID_SESSION_TOKEN,
            self::VALUE_UNABLE_TO_ASSIGN_TOKEN,
            self::VALUE_PAYMENT_IDNOT_FOUND,
            self::VALUE_NO_REFUNDABLE_AMOUNT,
            self::VALUE_CCREFUND_MANDATORY,
            self::VALUE_IGNORE_RESTRICTION,
            self::VALUE_QUERY_NOT_ALLOW,
            self::VALUE_UNABLE_TO_RETRIEVE_PROMOCODE,
            self::VALUE_PROMOCODE_NOT_FOUND,
            self::VALUE_PASSENGER_ENTITY_REQUIRED,
            self::VALUE_SPECIAL_MEAL_VALIDATION,
            self::VALUE_SEGMENT_NOT_FOUND,
            self::VALUE_NOTHING_TO_PAY,
            self::VALUE_NOTHING_TO_REFUND,
            self::VALUE_REASSIGN_SSR,
            self::VALUE_PARTNER_NOT_FOUND,
            self::VALUE_UNABLE_TO_RETRIEVE_CUSTOMER_POINTS,
            self::VALUE_UNABLE_TO_RETRIEVE_CREDIT_SHELL,
            self::VALUE_UNABLE_TO_MAP_LOYALTY_POINTS,
            self::VALUE_UNABLE_TO_RETRIEVE_LOYALTY_CATALOG,
            self::VALUE_UNABLE_TO_MODIFY_BOOKING_WITH_LOYALTY_POINTS,
            self::VALUE_UNABLE_TO_MODIFY_FARE_OF_BOOKING,
            self::VALUE_UNABLE_TO_ADD_LOYALTY_PAYMENT,
            self::VALUE_UNABLE_TO_RETRIEVE_PDFTICKET,
            self::VALUE_UNABLE_TO_RETRIEVE_LOYALTY_POINTS,
            self::VALUE_UNABLE_TO_DISCARD_TRANSACTION,
            self::VALUE_UNABLE_TO_RETRIEVE_AVAILABLE_CREDIT,
            self::VALUE_UNABLE_TO_RETRIEVE_VOUCHER_AMOUNT,
            self::VALUE_UNABLE_TO_DEACTIVATE_CUSTOMER_ASSET,
            self::VALUE_WARNING_FARE,
            self::VALUE_MAX_SRR_ON_PASSENGER,
            self::VALUE_NTV_PROMO_INAPPLICABLE,
            self::VALUE_UNABLE_TO_RETRIEVE_REAL_TIME_STATUS,
            self::VALUE_APPLICATION_UNKONWN,
            self::VALUE_DEACTIVATED_ASSET,
            self::VALUE_AGENT_NOT_ALLOWEDTO_ADD_PASSENGERS,
            self::VALUE_AGENCY_CREDIT_PAYMENT_ERROR,
            self::VALUE_VOUCHER_NOT_REDEEMABLE,
            self::VALUE_INVALID_JOURNEY_ORDER,
            self::VALUE_UNABLE_TO_RETRIEVE_GRMCONTENT,
            self::VALUE_BOOKING_CONTACT_IS_REQUIRED,
            self::VALUE_UNABLE_TO_RETRIEVE_NAVTRAIN_NUMBER,
            self::VALUE_UNABLE_TO_RETRIEVE_BEST_PRICE,
            self::VALUE_CYBER_ERROR_PAYMENT,
            self::VALUE_UNABLE_TO_RETRIEVE_CATALOG,
            self::VALUE_UNABLE_TO_CREATE_ORDER,
            self::VALUE_UNABLE_TO_FINALIZE_ORDER,
            self::VALUE_UNABLE_TO_ADD_BOOKING_COMMENTS,
            self::VALUE_UNABLE_TO_OVERRIDE_FARE,
            self::VALUE_PRODUCT_ACTIVATION_DATE_NOT_VALID,
            self::VALUE_UNABLE_TO_RETRIEVE_ASSET_ID,
            self::VALUE_INVALID_PAYMENT_CODE,
            self::VALUE_INVALID_FARE_BASIS,
            self::VALUE_INVALID_DATE_TIME,
            self::VALUE_SERVICE_TIMEOUT,
            self::VALUE_PAY_PAL_AGREEMENT_IDCANCELED,
            self::VALUE_PAY_PAL_RETRY_REFERENCE_TRANSACTION,
            self::VALUE_PAY_PAL_PAYMENT_VALIDATION_ERROR,
            self::VALUE_FAILED_TO_GENERATE_EXPRESS_CHECKOUT_URL,
            self::VALUE_PAY_PAL_REFUND_BOOKING_COMMIT_FAILED,
            self::VALUE_FAILED_TO_ASSIGN_ANY_SEAT,
            self::VALUE_EMAIL_ALREADY_IN_DB,
            self::VALUE_EMAIL_ACQUISITO_ALREADY_IN_DB,
            self::VALUE_EMAIL_BASIC_ALREADY_IN_DB,
            self::VALUE_PAY_PAL_SUBMIT_PAYMENT_FAILED_ON_NSK,
            self::VALUE_REQUEST_INVOICE_FAILED,
            self::VALUE_EXTERNAL_PAYMENT_MANDATORY,
            self::VALUE_UNAUTHORIZED_PROMOTION_USE,
            self::VALUE_INVALID_PROMOTION_REQUEST,
            self::VALUE_INVALID_PROMOTION_CONFIGURATION,
            self::VALUE_PROMOTION_ALREDY_APPLIED,
            self::VALUE_PROMOTION_NOT_AUTHORIZED_FOR_CURRENT_BOOKING,
            self::VALUE_PROMOTION_AVAILABILITY_SOLD_OUT,
            self::VALUE_PROMOTION_NOT_APPLIED_FOR_UNEXPECTED_ERROR,
            self::VALUE_UPSERT_CUSTOMER_FAILED,
            self::VALUE_AGENT_NOT_FOUND,
            self::VALUE_UPSERT_CUSTOMER_CONTACTS_FAILED,
            self::VALUE_NOT_VALID_CUSTOMER_CREDENTIALS,
            self::VALUE_USER_NOT_FOUND,
            self::VALUE_EMPLOYEE_OFFER_NOT_APPLICABLE,
            self::VALUE_OFFERS_NOT_COMBINABLE,
            self::VALUE_STATION_NOT_FOUND,
            self::VALUE_FAILED_TO_CHANGE_LOYALTY_LEVEL,
            self::VALUE_UNAUTHORIZED_SEAT_MAP_ACCESS,
            self::VALUE_UNAUTHORIZED_ASSIGN_SEATS,
            self::VALUE_UNAUTHORIZED_MODIFY_SEATS,
            self::VALUE_CYBER_ERROR_FOP,
            self::VALUE_INVALID_DATA,
            self::VALUE_CORPORATE_DOMAIN_NOT_ALLOWED,
            self::VALUE_CHANGE_PROMOCODE_ON_EDIT_FLOW,
            self::VALUE_UNABLE_TO_RETRIEVE_CUSTOMER_PROMOTION,
            self::VALUE_USER_NOT_ACTIVE,
            self::VALUE_BOOKING_NOT_IN_SESSION,
            self::VALUE_BOOKING_DATA_NOT_SUITABLE,
            self::VALUE_ORDER_TRANSACTION_NOT_FOUND,
            self::VALUE_MAX_DATE_EXCEED,
            self::VALUE_WARNING_CHECK_VERSION,
            self::VALUE_ERROR_CHECK_VERSION,
            self::VALUE_ERROR_CHECK_PAX_TYPE,
            self::VALUE_AGENT_NOT_AUTHORIZED_FOR_OPERATION,
            self::VALUE_UNABLE_TO_RECOGNIZE_PARTNER_ID,
            self::VALUE_IMPRESA_MUST_NOT_USE_CUSTOMER,
            self::VALUE_PREVALORIZED_PARTNER_ID,
            self::VALUE_MAX_FOPREACHED,
            self::VALUE_LIMITED_OPERATION,
            self::VALUE_AMAZON_PAY_ERROR,
            self::VALUE_AMAZON_PAY_SOFT_DECLINED_ERROR,
            self::VALUE_AMAZON_PAY_PAYMENT_VALIDATION_ERROR,
            self::VALUE_AMAZON_PAY_BILLING_AGREEMENT_NOT_VALID_ERROR,
            self::VALUE_AMAZON_PAY_NOT_ENOUGH_FOUNDS_ON_BILLING_AGREEMENT,
            self::VALUE_AMAZON_PAY_REFUND_BOOKING_COMMIT_FAILED,
            self::VALUE_EXTERNAL_PAYMENT_SUBMIT_FAILED_ON_NSK,
            self::VALUE_CONTACT_PERSON_PHONE_NUMBER_NULL,
            self::VALUE_VATNUMBER_ALREADY_REGISTERED_AS_TRAVEL_AGENCY,
            self::VALUE_CONTACT_PERSON_PHONE_NUMBER_ALREADY_REGISTERED_AS_TRAVEL_AGENCY,
            self::VALUE_VATNUMBER_ALREADY_REGISTERED_AS_ITALO_IMPRESA_CORPORATE,
            self::VALUE_CONTACT_PERSON_PHONE_NUMBER_ALREADY_REGISTERED_AS_ITALO_IMPRESA_CORPORATE,
            self::VALUE_VATNUMBER_ALREADY_REGISTERED_AS_UNMANNED_CORPORATE,
            self::VALUE_CONTACT_PERSON_PHONE_NUMBER_ALREADY_REGISTREDER_AS_UNMANNED_CORPORATE,
            self::VALUE_VATNUMBER_ALREADY_REGISTERED_AS_MANNED_CORPORATE,
            self::VALUE_CONTACT_PERSON_PHONE_NUMBER_ALREADY_REGISTREDER_AS_MANNED_CORPORATE,
            self::VALUE_INVALID_VATNUMBER,
            self::VALUE_CARTA_SERVIZI_GENERIC_ERROR,
            self::VALUE_DOMEC_GENERIC_ERROR,
            self::VALUE_DOMEC_SERIAL_NUMBER_NOT_FOUND,
            self::VALUE_IGNORE_FARE_RESTRICTIONS,
            self::VALUE_UNABLE_TO_REFUND,
            self::VALUE_UNABLE_TO_APPLY_FARE_LOCK,
            self::VALUE_PAYMENT_METHOD_NOT_VALID_FOR_DEPOSIT,
            self::VALUE_FORGOT_PASSWORD_INVALID_TOKEN,
            self::VALUE_FORGOT_PASSWORD_EXPIRED_TOKEN,
            self::VALUE_FORGOT_PASSWORD_ALREADY_CHANGED,
            self::VALUE_FORGOT_PASSWORD_INVALID_PASSWORD,
            self::VALUE_AGENT_MUST_USE_REGISTERED_CARNET,
            self::VALUE_AGENT_NOT_AUTHENTICATE_CARNET_REGISTERED,
            self::VALUE_UNABLE_TO_RETRIEVE_PROMOTION,
            self::VALUE_AES_CONFIGURATION_ERROR,
            self::VALUE_UNABLE_TO_GENERATE_EXTERNAL_PARTNER_URL,
            self::VALUE_ONLY_ONE_PASSENGER,
            self::VALUE_ERRORIN_UPGRADE_REQUEST,
            self::VALUE_ERRORIN_LOUNGE_REQUEST,
            self::VALUE_ERRORIN_LEAVE_NOW_REQUEST_WRONG_DIRECTION,
            self::VALUE_ERRORIN_LEAVE_NOW_REQUEST_PNRUNABLE,
            self::VALUE_ERRORIN_PET_REQUEST,
            self::VALUE_ERROR_IN_REMOVE_PET_SSR,
            self::VALUE_ERROR_IN_ADD_PET_SSR,
            self::VALUE_UNABLE_TO_SHOW_SEAT_FOR_QUANTITY,
            self::VALUE_FAILED_CUSTOMER_DELETE_ACTIVE_PRODUCT,
            self::VALUE_FAILED_CUSTOMER_DELETE_ACTIVE_PURSE,
            self::VALUE_AGENCY_DUPLICATE_PARTITA_IVA,
            self::VALUE_ITALO_IMPRESA_DUPLICATE_PARTITA_IVA,
            self::VALUE_CORPORATE_NPDUPLICATE_PARTITA_IVA,
            self::VALUE_CORPORATE_DUPLICATE_PARTITA_IVA,
            self::VALUE_ITALO_BUSINESS_DUPLICATE_PARTITA_IVA,
            self::VALUE_PARTNER_DUPLICATE_PARTITA_IVA,
            self::VALUE_INVALID_PARTITA_IVA,
            self::VALUE_AGENCY_DUPLICATE_MAIL,
            self::VALUE_ITALO_BUSINESS_DUPLICATE_MAIL,
            self::VALUE_PARTNER_DUPLICATE_MAIL,
            self::VALUE_IMPRESA_DUPLICATE_MAIL,
            self::VALUE_CORPORATE_NPDUPLICATE_MAIL,
            self::VALUE_CORPORATE_DUPLICATE_MAIL,
        ];
    }
}

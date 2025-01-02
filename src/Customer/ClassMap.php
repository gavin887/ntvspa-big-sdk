<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     *
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'GetLoyaltyPointsRequest'                  => '\\Ntvspa\\Big\\Customer\\Structs\\GetLoyaltyPointsRequest',
            'GetLoyaltyPointsResponse'                 => '\\Ntvspa\\Big\\Customer\\Structs\\GetLoyaltyPointsResponse',
            'LoyaltyTransactionFilter'                 => '\\Ntvspa\\Big\\Customer\\Structs\\LoyaltyTransactionFilter',
            'ArrayOfInterest'                          => '\\Ntvspa\\Big\\Customer\\Arrays\\ArrayOfInterest',
            'ResponseBase'                             => '\\Ntvspa\\Big\\Customer\\Structs\\ResponseBase',
            'ArrayOfWarning'                           => '\\Ntvspa\\Big\\Customer\\Arrays\\ArrayOfWarning',
            'Warning'                                  => '\\Ntvspa\\Big\\Customer\\Structs\\Warning',
            'ExceptionInfo'                            => '\\Ntvspa\\Big\\Customer\\Structs\\ExceptionInfo',
            'ArrayOfAdditionalMessage'                 => '\\Ntvspa\\Big\\Customer\\Arrays\\ArrayOfAdditionalMessage',
            'AdditionalMessage'                        => '\\Ntvspa\\Big\\Customer\\Structs\\AdditionalMessage',
            'ServiceFault'                             => '\\Ntvspa\\Big\\Customer\\Structs\\ServiceFault',
            'ArrayOfLoyaltyTransaction'                => '\\Ntvspa\\Big\\Customer\\Arrays\\ArrayOfLoyaltyTransaction',
            'LoyaltyTransaction'                       => '\\Ntvspa\\Big\\Customer\\Structs\\LoyaltyTransaction',
            'RetrieveCustomerPromotionRequest'         => '\\Ntvspa\\Big\\Customer\\Structs\\RetrieveCustomerPromotionRequest',
            'RetrieveCustomerPromotionResponse'        => '\\Ntvspa\\Big\\Customer\\Structs\\RetrieveCustomerPromotionResponse',
            'ArrayOfPromotion'                         => '\\Ntvspa\\Big\\Customer\\Arrays\\ArrayOfPromotion',
            'Promotion'                                => '\\Ntvspa\\Big\\Customer\\Structs\\Promotion',
            'ArrayOfProperty'                          => '\\Ntvspa\\Big\\Customer\\Arrays\\ArrayOfProperty',
            'Property'                                 => '\\Ntvspa\\Big\\Customer\\Structs\\Property',
            'TrackingCustomerPromotionRequest'         => '\\Ntvspa\\Big\\Customer\\Structs\\TrackingCustomerPromotionRequest',
            'TrackingCustomerPromotionResponse'        => '\\Ntvspa\\Big\\Customer\\Structs\\TrackingCustomerPromotionResponse',
            'GetCustomerPromotionAvailabilityRequest'  => '\\Ntvspa\\Big\\Customer\\Structs\\GetCustomerPromotionAvailabilityRequest',
            'GetCustomerPromotionAvailabilityResponse' => '\\Ntvspa\\Big\\Customer\\Structs\\GetCustomerPromotionAvailabilityResponse',
            'ArrayOfJourneyPromotionApplicable'        => '\\Ntvspa\\Big\\Customer\\Arrays\\ArrayOfJourneyPromotionApplicable',
            'JourneyPromotionApplicable'               => '\\Ntvspa\\Big\\Customer\\Structs\\JourneyPromotionApplicable',
            'ApplyCustomerPromotionRequest'            => '\\Ntvspa\\Big\\Customer\\Structs\\ApplyCustomerPromotionRequest',
            'ApplyCustomerPromotionResponse'           => '\\Ntvspa\\Big\\Customer\\Structs\\ApplyCustomerPromotionResponse',
            'Journey'                                  => '\\Ntvspa\\Big\\Customer\\Structs\\Journey',
            'BookingSum'                               => '\\Ntvspa\\Big\\Customer\\Structs\\BookingSum',
            'UpsertCustomerRequest'                    => '\\Ntvspa\\Big\\Customer\\Structs\\UpsertCustomerRequest',
            'UpsertCustomerResponse'                   => '\\Ntvspa\\Big\\Customer\\Structs\\UpsertCustomerResponse',
            'Customer'                                 => '\\Ntvspa\\Big\\Customer\\Structs\\Customer',
            'Address'                                  => '\\Ntvspa\\Big\\Customer\\Structs\\Address',
            'LoginCredentials'                         => '\\Ntvspa\\Big\\Customer\\Structs\\LoginCredentials',
            'Consensus'                                => '\\Ntvspa\\Big\\Customer\\Structs\\Consensus',
            'Preferences'                              => '\\Ntvspa\\Big\\Customer\\Structs\\Preferences',
            'GetCustomerContactsRequest'               => '\\Ntvspa\\Big\\Customer\\Structs\\GetCustomerContactsRequest',
            'GetCustomerContactsResponse'              => '\\Ntvspa\\Big\\Customer\\Structs\\GetCustomerContactsResponse',
            'ArrayOfContact'                           => '\\Ntvspa\\Big\\Customer\\Arrays\\ArrayOfContact',
            'Contact'                                  => '\\Ntvspa\\Big\\Customer\\Structs\\Contact',
            'ArrayOfFop'                               => '\\Ntvspa\\Big\\Customer\\Arrays\\ArrayOfFop',
            'Fop'                                      => '\\Ntvspa\\Big\\Customer\\Structs\\Fop',
            'RetrieveCustomerRequest'                  => '\\Ntvspa\\Big\\Customer\\Structs\\RetrieveCustomerRequest',
            'RetrieveCustomerResponse'                 => '\\Ntvspa\\Big\\Customer\\Structs\\RetrieveCustomerResponse',
            'ArrayOfContactPerson'                     => '\\Ntvspa\\Big\\Customer\\Arrays\\ArrayOfContactPerson',
            'ContactPerson'                            => '\\Ntvspa\\Big\\Customer\\Structs\\ContactPerson',
            'ArrayOfAddress'                           => '\\Ntvspa\\Big\\Customer\\Arrays\\ArrayOfAddress',
            'RetrieveFopRequest'                       => '\\Ntvspa\\Big\\Customer\\Structs\\RetrieveFopRequest',
            'RetrieveFopResponse'                      => '\\Ntvspa\\Big\\Customer\\Structs\\RetrieveFopResponse',
            'UpsertCustomerContactsRequest'            => '\\Ntvspa\\Big\\Customer\\Structs\\UpsertCustomerContactsRequest',
            'UpsertCustomerContactsResponse'           => '\\Ntvspa\\Big\\Customer\\Structs\\UpsertCustomerContactsResponse',
            'UpsertFopRequest'                         => '\\Ntvspa\\Big\\Customer\\Structs\\UpsertFopRequest',
            'UpsertFopResponse'                        => '\\Ntvspa\\Big\\Customer\\Structs\\UpsertFopResponse',
            'DeleteCustomerProfileRequest'             => '\\Ntvspa\\Big\\Customer\\Structs\\DeleteCustomerProfileRequest',
            'DeleteCustomerProfileResponse'            => '\\Ntvspa\\Big\\Customer\\Structs\\DeleteCustomerProfileResponse',
            'RetrieveInvoiceProfileRequest'            => '\\Ntvspa\\Big\\Customer\\Structs\\RetrieveInvoiceProfileRequest',
            'RetrieveInvoiceProfileResponse'           => '\\Ntvspa\\Big\\Customer\\Structs\\RetrieveInvoiceProfileResponse',
            'ArrayOfInvoiceProfile'                    => '\\Ntvspa\\Big\\Customer\\Arrays\\ArrayOfInvoiceProfile',
            'InvoiceProfile'                           => '\\Ntvspa\\Big\\Customer\\Structs\\InvoiceProfile',
            'UpsertInvoiceProfileRequest'              => '\\Ntvspa\\Big\\Customer\\Structs\\UpsertInvoiceProfileRequest',
            'UpsertInvoiceProfileResponse'             => '\\Ntvspa\\Big\\Customer\\Structs\\UpsertInvoiceProfileResponse',
        ];
    }
}

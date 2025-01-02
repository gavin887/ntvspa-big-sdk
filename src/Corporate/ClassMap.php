<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate;

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
            'RetrieveTravelAgencyRequest'               => '\\Ntvspa\\Big\\Corporate\\Structs\\RetrieveTravelAgencyRequest',
            'RetrieveTravelAgencyResponse'              => '\\Ntvspa\\Big\\Corporate\\Structs\\RetrieveTravelAgencyResponse',
            'ResponseBase'                              => '\\Ntvspa\\Big\\Corporate\\Structs\\ResponseBase',
            'ArrayOfWarning'                            => '\\Ntvspa\\Big\\Corporate\\Arrays\\ArrayOfWarning',
            'Warning'                                   => '\\Ntvspa\\Big\\Corporate\\Structs\\Warning',
            'ExceptionInfo'                             => '\\Ntvspa\\Big\\Corporate\\Structs\\ExceptionInfo',
            'ArrayOfAdditionalMessage'                  => '\\Ntvspa\\Big\\Corporate\\Arrays\\ArrayOfAdditionalMessage',
            'AdditionalMessage'                         => '\\Ntvspa\\Big\\Corporate\\Structs\\AdditionalMessage',
            'ServiceFault'                              => '\\Ntvspa\\Big\\Corporate\\Structs\\ServiceFault',
            'TravelAgency'                              => '\\Ntvspa\\Big\\Corporate\\Structs\\TravelAgency',
            'TravelAgencyInfo'                          => '\\Ntvspa\\Big\\Corporate\\Structs\\TravelAgencyInfo',
            'AddressesList'                             => '\\Ntvspa\\Big\\Corporate\\Structs\\AddressesList',
            'Address'                                   => '\\Ntvspa\\Big\\Corporate\\Structs\\Address',
            'ArrayOfTravelAgencyInfo'                   => '\\Ntvspa\\Big\\Corporate\\Arrays\\ArrayOfTravelAgencyInfo',
            'ArrayOfTravelAgencyNetwork'                => '\\Ntvspa\\Big\\Corporate\\Arrays\\ArrayOfTravelAgencyNetwork',
            'TravelAgencyNetwork'                       => '\\Ntvspa\\Big\\Corporate\\Structs\\TravelAgencyNetwork',
            'ArrayOfCorporate'                          => '\\Ntvspa\\Big\\Corporate\\Arrays\\ArrayOfCorporate',
            'Corporate'                                 => '\\Ntvspa\\Big\\Corporate\\Structs\\Corporate',
            'MasterTravelAgent'                         => '\\Ntvspa\\Big\\Corporate\\Structs\\MasterTravelAgent',
            'Contact'                                   => '\\Ntvspa\\Big\\Corporate\\Structs\\Contact',
            'CorporateSegment'                          => '\\Ntvspa\\Big\\Corporate\\Structs\\CorporateSegment',
            'CorporateInfo'                             => '\\Ntvspa\\Big\\Corporate\\Structs\\CorporateInfo',
            'CorporateAddress'                          => '\\Ntvspa\\Big\\Corporate\\Structs\\CorporateAddress',
            'RetrieveCashbackProfileRequest'            => '\\Ntvspa\\Big\\Corporate\\Structs\\RetrieveCashbackProfileRequest',
            'RetrieveCashbackProfileResponse'           => '\\Ntvspa\\Big\\Corporate\\Structs\\RetrieveCashbackProfileResponse',
            'CashbackProfile'                           => '\\Ntvspa\\Big\\Corporate\\Structs\\CashbackProfile',
            'CashbackOffer'                             => '\\Ntvspa\\Big\\Corporate\\Structs\\CashbackOffer',
            'FilterList'                                => '\\Ntvspa\\Big\\Corporate\\Structs\\FilterList',
            'ArrayOfAllowedFare'                        => '\\Ntvspa\\Big\\Corporate\\Arrays\\ArrayOfAllowedFare',
            'AllowedFare'                               => '\\Ntvspa\\Big\\Corporate\\Structs\\AllowedFare',
            'ArrayOfBlackPeriodPurchase'                => '\\Ntvspa\\Big\\Corporate\\Arrays\\ArrayOfBlackPeriodPurchase',
            'BlackPeriodPurchase'                       => '\\Ntvspa\\Big\\Corporate\\Structs\\BlackPeriodPurchase',
            'ArrayOfBlackPeriodJourney'                 => '\\Ntvspa\\Big\\Corporate\\Arrays\\ArrayOfBlackPeriodJourney',
            'BlackPeriodJourney'                        => '\\Ntvspa\\Big\\Corporate\\Structs\\BlackPeriodJourney',
            'ArrayOfBlackMarket'                        => '\\Ntvspa\\Big\\Corporate\\Arrays\\ArrayOfBlackMarket',
            'BlackMarket'                               => '\\Ntvspa\\Big\\Corporate\\Structs\\BlackMarket',
            'ArrayOfBlackDayOfWeek'                     => '\\Ntvspa\\Big\\Corporate\\Arrays\\ArrayOfBlackDayOfWeek',
            'BlackDayOfWeek'                            => '\\Ntvspa\\Big\\Corporate\\Structs\\BlackDayOfWeek',
            'ArrayOfBlackTrain'                         => '\\Ntvspa\\Big\\Corporate\\Arrays\\ArrayOfBlackTrain',
            'BlackTrain'                                => '\\Ntvspa\\Big\\Corporate\\Structs\\BlackTrain',
            'ArrayOfIncentive'                          => '\\Ntvspa\\Big\\Corporate\\Arrays\\ArrayOfIncentive',
            'Incentive'                                 => '\\Ntvspa\\Big\\Corporate\\Structs\\Incentive',
            'ArrayOfCashbackPromotion'                  => '\\Ntvspa\\Big\\Corporate\\Arrays\\ArrayOfCashbackPromotion',
            'CashbackPromotion'                         => '\\Ntvspa\\Big\\Corporate\\Structs\\CashbackPromotion',
            'UpsertAgencyProfileRequest'                => '\\Ntvspa\\Big\\Corporate\\Structs\\UpsertAgencyProfileRequest',
            'UpsertAgencyProfileResponse'               => '\\Ntvspa\\Big\\Corporate\\Structs\\UpsertAgencyProfileResponse',
            'RetrieveAccountStatementRequest'           => '\\Ntvspa\\Big\\Corporate\\Structs\\RetrieveAccountStatementRequest',
            'RetrieveAccountStatementResponse'          => '\\Ntvspa\\Big\\Corporate\\Structs\\RetrieveAccountStatementResponse',
            'Summary'                                   => '\\Ntvspa\\Big\\Corporate\\Structs\\Summary',
            'ArrayOfTravelAgencyInvoice'                => '\\Ntvspa\\Big\\Corporate\\Arrays\\ArrayOfTravelAgencyInvoice',
            'TravelAgencyInvoice'                       => '\\Ntvspa\\Big\\Corporate\\Structs\\TravelAgencyInvoice',
            'RetrieveTransactionDetailsRequest'         => '\\Ntvspa\\Big\\Corporate\\Structs\\RetrieveTransactionDetailsRequest',
            'RetrieveTransactionDetailsResponse'        => '\\Ntvspa\\Big\\Corporate\\Structs\\RetrieveTransactionDetailsResponse',
            'PagingControl'                             => '\\Ntvspa\\Big\\Corporate\\Structs\\PagingControl',
            'ArrayOfCostItem'                           => '\\Ntvspa\\Big\\Corporate\\Arrays\\ArrayOfCostItem',
            'CostItem'                                  => '\\Ntvspa\\Big\\Corporate\\Structs\\CostItem',
            'RetrieveAgencyAccountingPDFURLRequest'     => '\\Ntvspa\\Big\\Corporate\\Structs\\RetrieveAgencyAccountingPDFURLRequest',
            'RetrieveAgencyAccountingPDFURLResponse'    => '\\Ntvspa\\Big\\Corporate\\Structs\\RetrieveAgencyAccountingPDFURLResponse',
            'RetrieveCorporatePromotionRequest'         => '\\Ntvspa\\Big\\Corporate\\Structs\\RetrieveCorporatePromotionRequest',
            'RetrieveCorporatePromotionResponse'        => '\\Ntvspa\\Big\\Corporate\\Structs\\RetrieveCorporatePromotionResponse',
            'Promotion'                                 => '\\Ntvspa\\Big\\Corporate\\Structs\\Promotion',
            'ArrayOfProperty'                           => '\\Ntvspa\\Big\\Corporate\\Arrays\\ArrayOfProperty',
            'Property'                                  => '\\Ntvspa\\Big\\Corporate\\Structs\\Property',
            'ArrayOfstring'                             => '\\Ntvspa\\Big\\Corporate\\Arrays\\ArrayOfstring',
            'ArrayOfMarket'                             => '\\Ntvspa\\Big\\Corporate\\Arrays\\ArrayOfMarket',
            'Market'                                    => '\\Ntvspa\\Big\\Corporate\\Structs\\Market',
            'TrackingCorporatePromotionRequest'         => '\\Ntvspa\\Big\\Corporate\\Structs\\TrackingCorporatePromotionRequest',
            'TrackingCorporatePromotionResponse'        => '\\Ntvspa\\Big\\Corporate\\Structs\\TrackingCorporatePromotionResponse',
            'GetCorporatePromotionAvailabilityRequest'  => '\\Ntvspa\\Big\\Corporate\\Structs\\GetCorporatePromotionAvailabilityRequest',
            'GetCorporatePromotionAvailabilityResponse' => '\\Ntvspa\\Big\\Corporate\\Structs\\GetCorporatePromotionAvailabilityResponse',
            'ArrayOfJourneyPromotionApplicable'         => '\\Ntvspa\\Big\\Corporate\\Arrays\\ArrayOfJourneyPromotionApplicable',
            'JourneyPromotionApplicable'                => '\\Ntvspa\\Big\\Corporate\\Structs\\JourneyPromotionApplicable',
            'ApplyCorporatePromotionRequest'            => '\\Ntvspa\\Big\\Corporate\\Structs\\ApplyCorporatePromotionRequest',
            'ApplyCorporatePromotionResponse'           => '\\Ntvspa\\Big\\Corporate\\Structs\\ApplyCorporatePromotionResponse',
            'Journey'                                   => '\\Ntvspa\\Big\\Corporate\\Structs\\Journey',
            'BookingSum'                                => '\\Ntvspa\\Big\\Corporate\\Structs\\BookingSum',
        ];
    }
}

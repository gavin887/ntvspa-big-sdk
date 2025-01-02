<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel;

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
            'RetrieveItaloRealTimeRequest'             => '\\Ntvspa\\Big\\Travel\\Structs\\RetrieveItaloRealTimeRequest',
            'TrainSchedule'                            => '\\Ntvspa\\Big\\Travel\\Structs\\TrainSchedule',
            'Leg'                                      => '\\Ntvspa\\Big\\Travel\\Structs\\Leg',
            'RetrieveItaloRealTimeResponse'            => '\\Ntvspa\\Big\\Travel\\Structs\\RetrieveItaloRealTimeResponse',
            'ResponseBase'                             => '\\Ntvspa\\Big\\Travel\\Structs\\ResponseBase',
            'ArrayOfWarning'                           => '\\Ntvspa\\Big\\Travel\\Arrays\\ArrayOfWarning',
            'Warning'                                  => '\\Ntvspa\\Big\\Travel\\Structs\\Warning',
            'ExceptionInfo'                            => '\\Ntvspa\\Big\\Travel\\Structs\\ExceptionInfo',
            'ArrayOfAdditionalMessage'                 => '\\Ntvspa\\Big\\Travel\\Arrays\\ArrayOfAdditionalMessage',
            'AdditionalMessage'                        => '\\Ntvspa\\Big\\Travel\\Structs\\AdditionalMessage',
            'ServiceFault'                             => '\\Ntvspa\\Big\\Travel\\Structs\\ServiceFault',
            'Operation'                                => '\\Ntvspa\\Big\\Travel\\Structs\\Operation',
            'ArrayOfTrainSchedule'                     => '\\Ntvspa\\Big\\Travel\\Arrays\\ArrayOfTrainSchedule',
            'Distruption'                              => '\\Ntvspa\\Big\\Travel\\Structs\\Distruption',
            'ArrayOfStation'                           => '\\Ntvspa\\Big\\Travel\\Arrays\\ArrayOfStation',
            'Station'                                  => '\\Ntvspa\\Big\\Travel\\Structs\\Station',
            'RetrieveNtvTrainStationBoardRequest'      => '\\Ntvspa\\Big\\Travel\\Structs\\RetrieveNtvTrainStationBoardRequest',
            'RetrieveNtvTrainStationBoardResponse'     => '\\Ntvspa\\Big\\Travel\\Structs\\RetrieveNtvTrainStationBoardResponse',
            'ArrayOfInfoTreno'                         => '\\Ntvspa\\Big\\Travel\\Arrays\\ArrayOfInfoTreno',
            'InfoTreno'                                => '\\Ntvspa\\Big\\Travel\\Structs\\InfoTreno',
            'RetrieveRegionalTrainConnectionsRequest'  => '\\Ntvspa\\Big\\Travel\\Structs\\RetrieveRegionalTrainConnectionsRequest',
            'RetrieveRegionalTrainConnectionsResponse' => '\\Ntvspa\\Big\\Travel\\Structs\\RetrieveRegionalTrainConnectionsResponse',
            'RetrieveItaloNewsRequest'                 => '\\Ntvspa\\Big\\Travel\\Structs\\RetrieveItaloNewsRequest',
            'RetrieveItaloNewsResponse'                => '\\Ntvspa\\Big\\Travel\\Structs\\RetrieveItaloNewsResponse',
            'ArrayOfNotice'                            => '\\Ntvspa\\Big\\Travel\\Arrays\\ArrayOfNotice',
            'Notice'                                   => '\\Ntvspa\\Big\\Travel\\Structs\\Notice',
            'RetrieveItaloTrainsRequest'               => '\\Ntvspa\\Big\\Travel\\Structs\\RetrieveItaloTrainsRequest',
            'RetrieveItaloTrainsResponse'              => '\\Ntvspa\\Big\\Travel\\Structs\\RetrieveItaloTrainsResponse',
            'ArrayOfJourneyDateMarket'                 => '\\Ntvspa\\Big\\Travel\\Arrays\\ArrayOfJourneyDateMarket',
            'JourneyDateMarket'                        => '\\Ntvspa\\Big\\Travel\\Structs\\JourneyDateMarket',
            'ArrayOfJourney'                           => '\\Ntvspa\\Big\\Travel\\Arrays\\ArrayOfJourney',
            'Journey'                                  => '\\Ntvspa\\Big\\Travel\\Structs\\Journey',
            'ArrayOfSegment'                           => '\\Ntvspa\\Big\\Travel\\Arrays\\ArrayOfSegment',
            'Segment'                                  => '\\Ntvspa\\Big\\Travel\\Structs\\Segment',
            'RetrieveCityServicesRequest'              => '\\Ntvspa\\Big\\Travel\\Structs\\RetrieveCityServicesRequest',
            'RetrieveCityServicesResponse'             => '\\Ntvspa\\Big\\Travel\\Structs\\RetrieveCityServicesResponse',
            'ArrayOfCategory'                          => '\\Ntvspa\\Big\\Travel\\Arrays\\ArrayOfCategory',
            'Category'                                 => '\\Ntvspa\\Big\\Travel\\Structs\\Category',
            'ArrayOfService'                           => '\\Ntvspa\\Big\\Travel\\Arrays\\ArrayOfService',
            'Service'                                  => '\\Ntvspa\\Big\\Travel\\Structs\\Service',
            'CheckPlatformAccessAuthorizationRequest'  => '\\Ntvspa\\Big\\Travel\\Structs\\CheckPlatformAccessAuthorizationRequest',
            'CheckPlatformAccessAuthorizationResponse' => '\\Ntvspa\\Big\\Travel\\Structs\\CheckPlatformAccessAuthorizationResponse',
            'ArrayOfPassenger'                         => '\\Ntvspa\\Big\\Travel\\Arrays\\ArrayOfPassenger',
            'Passenger'                                => '\\Ntvspa\\Big\\Travel\\Structs\\Passenger',
            'ArrayOfPassengerInfant'                   => '\\Ntvspa\\Big\\Travel\\Arrays\\ArrayOfPassengerInfant',
            'PassengerInfant'                          => '\\Ntvspa\\Big\\Travel\\Structs\\PassengerInfant',
            'ArrayOfLeg'                               => '\\Ntvspa\\Big\\Travel\\Arrays\\ArrayOfLeg',
            'ArrayOfLegSSR'                            => '\\Ntvspa\\Big\\Travel\\Arrays\\ArrayOfLegSSR',
            'LegSSR'                                   => '\\Ntvspa\\Big\\Travel\\Structs\\LegSSR',
            'GetTrainSchedulesRequest'                 => '\\Ntvspa\\Big\\Travel\\Structs\\GetTrainSchedulesRequest',
            'GetTrainSchedulesResponse'                => '\\Ntvspa\\Big\\Travel\\Structs\\GetTrainSchedulesResponse',
            'ArrayOfScheduleJourney'                   => '\\Ntvspa\\Big\\Travel\\Arrays\\ArrayOfScheduleJourney',
            'ScheduleJourney'                          => '\\Ntvspa\\Big\\Travel\\Structs\\ScheduleJourney',
        ];
    }
}

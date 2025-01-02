<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Services;

use Ntvspa\Big\Travel\Structs\RetrieveCityServicesRequest;
use Ntvspa\Big\Travel\Structs\RetrieveCityServicesResponse;
use Ntvspa\Big\Travel\Structs\RetrieveItaloNewsRequest;
use Ntvspa\Big\Travel\Structs\RetrieveItaloNewsResponse;
use Ntvspa\Big\Travel\Structs\RetrieveItaloRealTimeRequest;
use Ntvspa\Big\Travel\Structs\RetrieveItaloRealTimeResponse;
use Ntvspa\Big\Travel\Structs\RetrieveItaloTrainsRequest;
use Ntvspa\Big\Travel\Structs\RetrieveItaloTrainsResponse;
use Ntvspa\Big\Travel\Structs\RetrieveNtvTrainStationBoardRequest;
use Ntvspa\Big\Travel\Structs\RetrieveNtvTrainStationBoardResponse;
use Ntvspa\Big\Travel\Structs\RetrieveRegionalTrainConnectionsRequest;
use Ntvspa\Big\Travel\Structs\RetrieveRegionalTrainConnectionsResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Retrieve Services
 *
 * @subpackage Services
 */
class Retrieve extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named RetrieveItaloRealTime
     *
     * @param RetrieveItaloRealTimeRequest $retrieveItaloRealTimeRequest
     *
     * @return RetrieveItaloRealTimeResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function RetrieveItaloRealTime(RetrieveItaloRealTimeRequest $retrieveItaloRealTimeRequest)
    {
        try {
            $this->setResult($resultRetrieveItaloRealTime = $this->getSoapClient()->__soapCall('RetrieveItaloRealTime', [
                $retrieveItaloRealTimeRequest,
            ], [], [], $this->outputHeaders));

            return $resultRetrieveItaloRealTime;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named RetrieveNtvTrainStationBoard
     *
     * @param RetrieveNtvTrainStationBoardRequest $retrieveNtvTrainStationBoardRequest
     *
     * @return RetrieveNtvTrainStationBoardResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function RetrieveNtvTrainStationBoard(RetrieveNtvTrainStationBoardRequest $retrieveNtvTrainStationBoardRequest)
    {
        try {
            $this->setResult($resultRetrieveNtvTrainStationBoard = $this->getSoapClient()->__soapCall('RetrieveNtvTrainStationBoard', [
                $retrieveNtvTrainStationBoardRequest,
            ], [], [], $this->outputHeaders));

            return $resultRetrieveNtvTrainStationBoard;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named RetrieveRegionalTrainConnections
     *
     * @param RetrieveRegionalTrainConnectionsRequest $retrieveRegionalTrainConnectionsRequest
     *
     * @return RetrieveRegionalTrainConnectionsResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function RetrieveRegionalTrainConnections(RetrieveRegionalTrainConnectionsRequest $retrieveRegionalTrainConnectionsRequest)
    {
        try {
            $this->setResult($resultRetrieveRegionalTrainConnections = $this->getSoapClient()->__soapCall('RetrieveRegionalTrainConnections', [
                $retrieveRegionalTrainConnectionsRequest,
            ], [], [], $this->outputHeaders));

            return $resultRetrieveRegionalTrainConnections;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named RetrieveItaloNews
     *
     * @param RetrieveItaloNewsRequest $retrieveItaloNewsRequest
     *
     * @return RetrieveItaloNewsResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function RetrieveItaloNews(RetrieveItaloNewsRequest $retrieveItaloNewsRequest)
    {
        try {
            $this->setResult($resultRetrieveItaloNews = $this->getSoapClient()->__soapCall('RetrieveItaloNews', [
                $retrieveItaloNewsRequest,
            ], [], [], $this->outputHeaders));

            return $resultRetrieveItaloNews;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named RetrieveItaloTrains
     *
     * @param RetrieveItaloTrainsRequest $retrieveItaloTrainsRequest
     *
     * @return RetrieveItaloTrainsResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function RetrieveItaloTrains(RetrieveItaloTrainsRequest $retrieveItaloTrainsRequest)
    {
        try {
            $this->setResult($resultRetrieveItaloTrains = $this->getSoapClient()->__soapCall('RetrieveItaloTrains', [
                $retrieveItaloTrainsRequest,
            ], [], [], $this->outputHeaders));

            return $resultRetrieveItaloTrains;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named RetrieveCityServices
     *
     * @param RetrieveCityServicesRequest $retrieveCityServicesRequest
     *
     * @return RetrieveCityServicesResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function RetrieveCityServices(RetrieveCityServicesRequest $retrieveCityServicesRequest)
    {
        try {
            $this->setResult($resultRetrieveCityServices = $this->getSoapClient()->__soapCall('RetrieveCityServices', [
                $retrieveCityServicesRequest,
            ], [], [], $this->outputHeaders));

            return $resultRetrieveCityServices;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return RetrieveCityServicesResponse|RetrieveItaloNewsResponse|RetrieveItaloRealTimeResponse|RetrieveItaloTrainsResponse|RetrieveNtvTrainStationBoardResponse|RetrieveRegionalTrainConnectionsResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

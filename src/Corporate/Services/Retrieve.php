<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Services;

use Ntvspa\Big\Corporate\Structs\RetrieveAccountStatementRequest;
use Ntvspa\Big\Corporate\Structs\RetrieveAccountStatementResponse;
use Ntvspa\Big\Corporate\Structs\RetrieveAgencyAccountingPDFURLRequest;
use Ntvspa\Big\Corporate\Structs\RetrieveAgencyAccountingPDFURLResponse;
use Ntvspa\Big\Corporate\Structs\RetrieveCashbackProfileRequest;
use Ntvspa\Big\Corporate\Structs\RetrieveCashbackProfileResponse;
use Ntvspa\Big\Corporate\Structs\RetrieveCorporatePromotionRequest;
use Ntvspa\Big\Corporate\Structs\RetrieveCorporatePromotionResponse;
use Ntvspa\Big\Corporate\Structs\RetrieveTransactionDetailsRequest;
use Ntvspa\Big\Corporate\Structs\RetrieveTransactionDetailsResponse;
use Ntvspa\Big\Corporate\Structs\RetrieveTravelAgencyRequest;
use Ntvspa\Big\Corporate\Structs\RetrieveTravelAgencyResponse;
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
     * Method to call the operation originally named RetrieveTravelAgency
     *
     * @param RetrieveTravelAgencyRequest $retrieveTravelAgencyRequest
     *
     * @return RetrieveTravelAgencyResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function RetrieveTravelAgency(RetrieveTravelAgencyRequest $retrieveTravelAgencyRequest)
    {
        try {
            $this->setResult($resultRetrieveTravelAgency = $this->getSoapClient()->__soapCall('RetrieveTravelAgency', [
                $retrieveTravelAgencyRequest,
            ], [], [], $this->outputHeaders));

            return $resultRetrieveTravelAgency;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named RetrieveCashbackProfile
     *
     * @param RetrieveCashbackProfileRequest $retrieveCashbackProfileRequest
     *
     * @return RetrieveCashbackProfileResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function RetrieveCashbackProfile(RetrieveCashbackProfileRequest $retrieveCashbackProfileRequest)
    {
        try {
            $this->setResult($resultRetrieveCashbackProfile = $this->getSoapClient()->__soapCall('RetrieveCashbackProfile', [
                $retrieveCashbackProfileRequest,
            ], [], [], $this->outputHeaders));

            return $resultRetrieveCashbackProfile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named RetrieveAccountStatement
     *
     * @param RetrieveAccountStatementRequest $retrieveAccountStatementRequest
     *
     * @return RetrieveAccountStatementResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function RetrieveAccountStatement(RetrieveAccountStatementRequest $retrieveAccountStatementRequest)
    {
        try {
            $this->setResult($resultRetrieveAccountStatement = $this->getSoapClient()->__soapCall('RetrieveAccountStatement', [
                $retrieveAccountStatementRequest,
            ], [], [], $this->outputHeaders));

            return $resultRetrieveAccountStatement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named RetrieveTransactionDetails
     *
     * @param RetrieveTransactionDetailsRequest $retrieveTransactionDetailsRequest
     *
     * @return RetrieveTransactionDetailsResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function RetrieveTransactionDetails(RetrieveTransactionDetailsRequest $retrieveTransactionDetailsRequest)
    {
        try {
            $this->setResult($resultRetrieveTransactionDetails = $this->getSoapClient()->__soapCall('RetrieveTransactionDetails', [
                $retrieveTransactionDetailsRequest,
            ], [], [], $this->outputHeaders));

            return $resultRetrieveTransactionDetails;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named RetrieveAgencyAccountingPDFURL
     *
     * @param RetrieveAgencyAccountingPDFURLRequest $retrieveAgencyAccountingPDFURLRequest
     *
     * @return RetrieveAgencyAccountingPDFURLResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function RetrieveAgencyAccountingPDFURL(RetrieveAgencyAccountingPDFURLRequest $retrieveAgencyAccountingPDFURLRequest)
    {
        try {
            $this->setResult($resultRetrieveAgencyAccountingPDFURL = $this->getSoapClient()->__soapCall('RetrieveAgencyAccountingPDFURL', [
                $retrieveAgencyAccountingPDFURLRequest,
            ], [], [], $this->outputHeaders));

            return $resultRetrieveAgencyAccountingPDFURL;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named RetrieveCorporatePromotion
     *
     * @param RetrieveCorporatePromotionRequest $retrieveCorporatePromotionRequest
     *
     * @return RetrieveCorporatePromotionResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function RetrieveCorporatePromotion(RetrieveCorporatePromotionRequest $retrieveCorporatePromotionRequest)
    {
        try {
            $this->setResult($resultRetrieveCorporatePromotion = $this->getSoapClient()->__soapCall('RetrieveCorporatePromotion', [
                $retrieveCorporatePromotionRequest,
            ], [], [], $this->outputHeaders));

            return $resultRetrieveCorporatePromotion;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return RetrieveAccountStatementResponse|RetrieveAgencyAccountingPDFURLResponse|RetrieveCashbackProfileResponse|RetrieveCorporatePromotionResponse|RetrieveTransactionDetailsResponse|RetrieveTravelAgencyResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

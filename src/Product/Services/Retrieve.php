<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Services;

use Ntvspa\Big\Product\Structs\RetrieveAssetsRequest;
use Ntvspa\Big\Product\Structs\RetrieveAssetsResponse;
use Ntvspa\Big\Product\Structs\RetrieveBusinessPassCardRequest;
use Ntvspa\Big\Product\Structs\RetrieveBusinessPassCardResponse;
use Ntvspa\Big\Product\Structs\RetrieveBusinessPassCatalogRequest;
use Ntvspa\Big\Product\Structs\RetrieveBusinessPassCatalogResponse;
use Ntvspa\Big\Product\Structs\RetrieveProductAssetsRequest;
use Ntvspa\Big\Product\Structs\RetrieveProductAssetsResponse;
use Ntvspa\Big\Product\Structs\RetrieveProductsCatalogRequest;
use Ntvspa\Big\Product\Structs\RetrieveProductsCatalogResponse;
use Ntvspa\Big\Product\Structs\RetrieveVoucherAmountRequest;
use Ntvspa\Big\Product\Structs\RetrieveVoucherAmountResponse;
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
     * Method to call the operation originally named RetrieveProductsCatalog
     *
     * @param RetrieveProductsCatalogRequest $retrieveProductsCatalogRequest
     *
     * @return RetrieveProductsCatalogResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function RetrieveProductsCatalog(RetrieveProductsCatalogRequest $retrieveProductsCatalogRequest)
    {
        try {
            $this->setResult($resultRetrieveProductsCatalog = $this->getSoapClient()->__soapCall('RetrieveProductsCatalog', [
                $retrieveProductsCatalogRequest,
            ], [], [], $this->outputHeaders));

            return $resultRetrieveProductsCatalog;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named RetrieveAssets
     *
     * @param RetrieveAssetsRequest $retrieveAssetsRequest
     *
     * @return RetrieveAssetsResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function RetrieveAssets(RetrieveAssetsRequest $retrieveAssetsRequest)
    {
        try {
            $this->setResult($resultRetrieveAssets = $this->getSoapClient()->__soapCall('RetrieveAssets', [
                $retrieveAssetsRequest,
            ], [], [], $this->outputHeaders));

            return $resultRetrieveAssets;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named RetrieveVoucherAmount
     *
     * @param RetrieveVoucherAmountRequest $retrieveVoucherAmountRequest
     *
     * @return RetrieveVoucherAmountResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function RetrieveVoucherAmount(RetrieveVoucherAmountRequest $retrieveVoucherAmountRequest)
    {
        try {
            $this->setResult($resultRetrieveVoucherAmount = $this->getSoapClient()->__soapCall('RetrieveVoucherAmount', [
                $retrieveVoucherAmountRequest,
            ], [], [], $this->outputHeaders));

            return $resultRetrieveVoucherAmount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named RetrieveBusinessPassCard
     *
     * @param RetrieveBusinessPassCardRequest $retrieveBusinessPassCardRequest
     *
     * @return RetrieveBusinessPassCardResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function RetrieveBusinessPassCard(RetrieveBusinessPassCardRequest $retrieveBusinessPassCardRequest)
    {
        try {
            $this->setResult($resultRetrieveBusinessPassCard = $this->getSoapClient()->__soapCall('RetrieveBusinessPassCard', [
                $retrieveBusinessPassCardRequest,
            ], [], [], $this->outputHeaders));

            return $resultRetrieveBusinessPassCard;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named RetrieveBusinessPassCatalog
     *
     * @param RetrieveBusinessPassCatalogRequest $retrieveBusinessPassCatalogRequest
     *
     * @return RetrieveBusinessPassCatalogResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function RetrieveBusinessPassCatalog(RetrieveBusinessPassCatalogRequest $retrieveBusinessPassCatalogRequest)
    {
        try {
            $this->setResult($resultRetrieveBusinessPassCatalog = $this->getSoapClient()->__soapCall('RetrieveBusinessPassCatalog', [
                $retrieveBusinessPassCatalogRequest,
            ], [], [], $this->outputHeaders));

            return $resultRetrieveBusinessPassCatalog;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named RetrieveProductAssets
     *
     * @param RetrieveProductAssetsRequest $retrieveProductAssetsRequest
     *
     * @return RetrieveProductAssetsResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function RetrieveProductAssets(RetrieveProductAssetsRequest $retrieveProductAssetsRequest)
    {
        try {
            $this->setResult($resultRetrieveProductAssets = $this->getSoapClient()->__soapCall('RetrieveProductAssets', [
                $retrieveProductAssetsRequest,
            ], [], [], $this->outputHeaders));

            return $resultRetrieveProductAssets;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return RetrieveAssetsResponse|RetrieveBusinessPassCardResponse|RetrieveBusinessPassCatalogResponse|RetrieveProductAssetsResponse|RetrieveProductsCatalogResponse|RetrieveVoucherAmountResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

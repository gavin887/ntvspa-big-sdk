<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Services;

use Ntvspa\Big\Booking\Structs\ExportBookingInfoRequest;
use Ntvspa\Big\Booking\Structs\ExportBookingInfoResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Export Services
 *
 * @subpackage Services
 */
class Export extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ExportBookingInfo
     *
     * @param ExportBookingInfoRequest $exportBookingInfoRequest
     *
     * @return ExportBookingInfoResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function ExportBookingInfo(ExportBookingInfoRequest $exportBookingInfoRequest)
    {
        try {
            $this->setResult($resultExportBookingInfo = $this->getSoapClient()->__soapCall('ExportBookingInfo', [
                $exportBookingInfoRequest,
            ], [], [], $this->outputHeaders));

            return $resultExportBookingInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return ExportBookingInfoResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

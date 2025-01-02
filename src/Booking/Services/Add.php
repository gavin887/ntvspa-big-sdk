<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Services;

use Ntvspa\Big\Booking\Structs\AddBookingCommentsRequest;
use Ntvspa\Big\Booking\Structs\AddBookingCommentsResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Add Services
 *
 * @subpackage Services
 */
class Add extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named AddBookingComments
     *
     * @param AddBookingCommentsRequest $addBookingCommentsRequest
     *
     * @return AddBookingCommentsResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function AddBookingComments(AddBookingCommentsRequest $addBookingCommentsRequest)
    {
        try {
            $this->setResult($resultAddBookingComments = $this->getSoapClient()->__soapCall('AddBookingComments', [
                $addBookingCommentsRequest,
            ], [], [], $this->outputHeaders));

            return $resultAddBookingComments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @return AddBookingCommentsResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

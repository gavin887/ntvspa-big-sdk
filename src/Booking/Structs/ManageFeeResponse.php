<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;

/**
 * This class stands for ManageFeeResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q28:ManageFeeResponse | tns:ManageFeeResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ManageFeeResponse extends ResponseBase
{
    /**
     * The BookingSummary
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var BookingSummary|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\BookingSummary $BookingSummary = null;

    /**
     * Constructor method for ManageFeeResponse
     *
     * @param BookingSummary $bookingSummary
     *
     * @uses ManageFeeResponse::setBookingSummary()
     */
    public function __construct(?\Ntvspa\Big\Booking\Structs\BookingSummary $bookingSummary = null)
    {
        $this
            ->setBookingSummary($bookingSummary);
    }

    /**
     * Get BookingSummary value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return BookingSummary|null
     */
    public function getBookingSummary(): ?\Ntvspa\Big\Booking\Structs\BookingSummary
    {
        return $this->BookingSummary ?? null;
    }

    /**
     * Set BookingSummary value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param BookingSummary $bookingSummary
     *
     * @return ManageFeeResponse
     */
    public function setBookingSummary(?\Ntvspa\Big\Booking\Structs\BookingSummary $bookingSummary = null): self
    {
        if (is_null($bookingSummary) || (is_array($bookingSummary) && empty($bookingSummary))) {
            unset($this->BookingSummary);
        } else {
            $this->BookingSummary = $bookingSummary;
        }

        return $this;
    }
}

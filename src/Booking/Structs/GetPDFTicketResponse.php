<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;

/**
 * This class stands for GetPDFTicketResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q18:GetPDFTicketResponse | tns:GetPDFTicketResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetPDFTicketResponse extends ResponseBase
{
    /**
     * The PdfUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PdfUrl = null;

    /**
     * Constructor method for GetPDFTicketResponse
     *
     * @param string $pdfUrl
     *
     * @uses GetPDFTicketResponse::setPdfUrl()
     */
    public function __construct(?string $pdfUrl = null)
    {
        $this
            ->setPdfUrl($pdfUrl);
    }

    /**
     * Get PdfUrl value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPdfUrl(): ?string
    {
        return $this->PdfUrl ?? null;
    }

    /**
     * Set PdfUrl value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $pdfUrl
     *
     * @return GetPDFTicketResponse
     */
    public function setPdfUrl(?string $pdfUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($pdfUrl) && !is_string($pdfUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pdfUrl, true), gettype($pdfUrl)), __LINE__);
        }
        if (is_null($pdfUrl) || (is_array($pdfUrl) && empty($pdfUrl))) {
            unset($this->PdfUrl);
        } else {
            $this->PdfUrl = $pdfUrl;
        }

        return $this;
    }
}

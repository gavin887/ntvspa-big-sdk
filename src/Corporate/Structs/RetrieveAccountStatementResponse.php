<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use Corporate\Arrays\ArrayOfTravelAgencyInvoice;

/**
 * This class stands for RetrieveAccountStatementResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q8:RetrieveAccountStatementResponse | tns:RetrieveAccountStatementResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveAccountStatementResponse extends ResponseBase
{
    /**
     * The ResponseSummary
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Summary|null
     */
    protected ?\Ntvspa\Big\Corporate\Structs\Summary $ResponseSummary = null;
    /**
     * The Invoices
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Corporate\Arrays\ArrayOfTravelAgencyInvoice|null
     */
    protected ?ArrayOfTravelAgencyInvoice $Invoices = null;

    /**
     * Constructor method for RetrieveAccountStatementResponse
     *
     * @param Summary                                                 $responseSummary
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfTravelAgencyInvoice $invoices
     *
     * @uses RetrieveAccountStatementResponse::setResponseSummary()
     * @uses RetrieveAccountStatementResponse::setInvoices()
     */
    public function __construct(?\Ntvspa\Big\Corporate\Structs\Summary $responseSummary = null, ?ArrayOfTravelAgencyInvoice $invoices = null)
    {
        $this
            ->setResponseSummary($responseSummary)
            ->setInvoices($invoices);
    }

    /**
     * Get ResponseSummary value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Summary|null
     */
    public function getResponseSummary(): ?\Ntvspa\Big\Corporate\Structs\Summary
    {
        return $this->ResponseSummary ?? null;
    }

    /**
     * Set ResponseSummary value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Summary $responseSummary
     *
     * @return RetrieveAccountStatementResponse
     */
    public function setResponseSummary(?\Ntvspa\Big\Corporate\Structs\Summary $responseSummary = null): self
    {
        if (is_null($responseSummary) || (is_array($responseSummary) && empty($responseSummary))) {
            unset($this->ResponseSummary);
        } else {
            $this->ResponseSummary = $responseSummary;
        }

        return $this;
    }

    /**
     * Get Invoices value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Corporate\Arrays\ArrayOfTravelAgencyInvoice|null
     */
    public function getInvoices(): ?ArrayOfTravelAgencyInvoice
    {
        return $this->Invoices ?? null;
    }

    /**
     * Set Invoices value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfTravelAgencyInvoice $invoices
     *
     * @return RetrieveAccountStatementResponse
     */
    public function setInvoices(?ArrayOfTravelAgencyInvoice $invoices = null): self
    {
        if (is_null($invoices) || (is_array($invoices) && empty($invoices))) {
            unset($this->Invoices);
        } else {
            $this->Invoices = $invoices;
        }

        return $this;
    }
}

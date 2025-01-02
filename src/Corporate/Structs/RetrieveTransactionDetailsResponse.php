<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use Corporate\Arrays\ArrayOfCostItem;

/**
 * This class stands for RetrieveTransactionDetailsResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q10:RetrieveTransactionDetailsResponse | tns:RetrieveTransactionDetailsResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveTransactionDetailsResponse extends ResponseBase
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
     * The PagingControl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var PagingControl|null
     */
    protected ?\Ntvspa\Big\Corporate\Structs\PagingControl $PagingControl = null;
    /**
     * The CostItems
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Corporate\Arrays\ArrayOfCostItem|null
     */
    protected ?ArrayOfCostItem $CostItems = null;

    /**
     * Constructor method for RetrieveTransactionDetailsResponse
     *
     * @param Summary                                      $responseSummary
     * @param PagingControl                                $pagingControl
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfCostItem $costItems
     *
     * @uses RetrieveTransactionDetailsResponse::setResponseSummary()
     * @uses RetrieveTransactionDetailsResponse::setPagingControl()
     * @uses RetrieveTransactionDetailsResponse::setCostItems()
     */
    public function __construct(?\Ntvspa\Big\Corporate\Structs\Summary $responseSummary = null, ?\Ntvspa\Big\Corporate\Structs\PagingControl $pagingControl = null, ?ArrayOfCostItem $costItems = null)
    {
        $this
            ->setResponseSummary($responseSummary)
            ->setPagingControl($pagingControl)
            ->setCostItems($costItems);
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
     * @return RetrieveTransactionDetailsResponse
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
     * Get PagingControl value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return PagingControl|null
     */
    public function getPagingControl(): ?\Ntvspa\Big\Corporate\Structs\PagingControl
    {
        return $this->PagingControl ?? null;
    }

    /**
     * Set PagingControl value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param PagingControl $pagingControl
     *
     * @return RetrieveTransactionDetailsResponse
     */
    public function setPagingControl(?\Ntvspa\Big\Corporate\Structs\PagingControl $pagingControl = null): self
    {
        if (is_null($pagingControl) || (is_array($pagingControl) && empty($pagingControl))) {
            unset($this->PagingControl);
        } else {
            $this->PagingControl = $pagingControl;
        }

        return $this;
    }

    /**
     * Get CostItems value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Corporate\Arrays\ArrayOfCostItem|null
     */
    public function getCostItems(): ?ArrayOfCostItem
    {
        return $this->CostItems ?? null;
    }

    /**
     * Set CostItems value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfCostItem $costItems
     *
     * @return RetrieveTransactionDetailsResponse
     */
    public function setCostItems(?ArrayOfCostItem $costItems = null): self
    {
        if (is_null($costItems) || (is_array($costItems) && empty($costItems))) {
            unset($this->CostItems);
        } else {
            $this->CostItems = $costItems;
        }

        return $this;
    }
}

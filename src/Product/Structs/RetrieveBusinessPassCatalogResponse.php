<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use Product\Arrays\ArrayOfOffer;

/**
 * This class stands for RetrieveBusinessPassCatalogResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q18:RetrieveBusinessPassCatalogResponse | tns:RetrieveBusinessPassCatalogResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveBusinessPassCatalogResponse extends ResponseBase
{
    /**
     * The Offers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfOffer|null
     */
    protected ?ArrayOfOffer $Offers = null;

    /**
     * Constructor method for RetrieveBusinessPassCatalogResponse
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfOffer $offers
     *
     * @uses RetrieveBusinessPassCatalogResponse::setOffers()
     */
    public function __construct(?ArrayOfOffer $offers = null)
    {
        $this
            ->setOffers($offers);
    }

    /**
     * Get Offers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfOffer|null
     */
    public function getOffers(): ?ArrayOfOffer
    {
        return $this->Offers ?? null;
    }

    /**
     * Set Offers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfOffer $offers
     *
     * @return RetrieveBusinessPassCatalogResponse
     */
    public function setOffers(?ArrayOfOffer $offers = null): self
    {
        if (is_null($offers) || (is_array($offers) && empty($offers))) {
            unset($this->Offers);
        } else {
            $this->Offers = $offers;
        }

        return $this;
    }
}

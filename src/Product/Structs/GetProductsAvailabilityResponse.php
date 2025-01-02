<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use Product\Arrays\ArrayOfProduct;

/**
 * This class stands for GetProductsAvailabilityResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q22:GetProductsAvailabilityResponse | tns:GetProductsAvailabilityResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetProductsAvailabilityResponse extends ResponseBase
{
    /**
     * The Product
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfProduct|null
     */
    protected ?ArrayOfProduct $Product = null;

    /**
     * Constructor method for GetProductsAvailabilityResponse
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfProduct $product
     *
     * @uses GetProductsAvailabilityResponse::setProduct()
     */
    public function __construct(?ArrayOfProduct $product = null)
    {
        $this
            ->setProduct($product);
    }

    /**
     * Get Product value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfProduct|null
     */
    public function getProduct(): ?ArrayOfProduct
    {
        return $this->Product ?? null;
    }

    /**
     * Set Product value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfProduct $product
     *
     * @return GetProductsAvailabilityResponse
     */
    public function setProduct(?ArrayOfProduct $product = null): self
    {
        if (is_null($product) || (is_array($product) && empty($product))) {
            unset($this->Product);
        } else {
            $this->Product = $product;
        }

        return $this;
    }
}

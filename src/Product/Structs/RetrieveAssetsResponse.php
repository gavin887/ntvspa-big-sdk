<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use Product\Arrays\ArrayOfAsset;

/**
 * This class stands for RetrieveAssetsResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q12:RetrieveAssetsResponse | tns:RetrieveAssetsResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveAssetsResponse extends ResponseBase
{
    /**
     * The Assets
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfAsset|null
     */
    protected ?ArrayOfAsset $Assets = null;

    /**
     * Constructor method for RetrieveAssetsResponse
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfAsset $assets
     *
     * @uses RetrieveAssetsResponse::setAssets()
     */
    public function __construct(?ArrayOfAsset $assets = null)
    {
        $this
            ->setAssets($assets);
    }

    /**
     * Get Assets value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfAsset|null
     */
    public function getAssets(): ?ArrayOfAsset
    {
        return $this->Assets ?? null;
    }

    /**
     * Set Assets value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfAsset $assets
     *
     * @return RetrieveAssetsResponse
     */
    public function setAssets(?ArrayOfAsset $assets = null): self
    {
        if (is_null($assets) || (is_array($assets) && empty($assets))) {
            unset($this->Assets);
        } else {
            $this->Assets = $assets;
        }

        return $this;
    }
}

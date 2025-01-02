<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use Product\Arrays\ArrayOfCatalog;

/**
 * This class stands for RetrieveProductsCatalogResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q6:RetrieveProductsCatalogResponse | tns:RetrieveProductsCatalogResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveProductsCatalogResponse extends ResponseBase
{
    /**
     * The Catalogs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfCatalog|null
     */
    protected ?ArrayOfCatalog $Catalogs = null;

    /**
     * Constructor method for RetrieveProductsCatalogResponse
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfCatalog $catalogs
     *
     * @uses RetrieveProductsCatalogResponse::setCatalogs()
     */
    public function __construct(?ArrayOfCatalog $catalogs = null)
    {
        $this
            ->setCatalogs($catalogs);
    }

    /**
     * Get Catalogs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfCatalog|null
     */
    public function getCatalogs(): ?ArrayOfCatalog
    {
        return $this->Catalogs ?? null;
    }

    /**
     * Set Catalogs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfCatalog $catalogs
     *
     * @return RetrieveProductsCatalogResponse
     */
    public function setCatalogs(?ArrayOfCatalog $catalogs = null): self
    {
        if (is_null($catalogs) || (is_array($catalogs) && empty($catalogs))) {
            unset($this->Catalogs);
        } else {
            $this->Catalogs = $catalogs;
        }

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use Travel\Arrays\ArrayOfCategory;

/**
 * This class stands for RetrieveCityServicesResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q12:RetrieveCityServicesResponse | tns:RetrieveCityServicesResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveCityServicesResponse extends ResponseBase
{
    /**
     * The Categories
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Travel\Arrays\ArrayOfCategory|null
     */
    protected ?ArrayOfCategory $Categories = null;

    /**
     * Constructor method for RetrieveCityServicesResponse
     *
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfCategory $categories
     *
     * @uses RetrieveCityServicesResponse::setCategories()
     */
    public function __construct(?ArrayOfCategory $categories = null)
    {
        $this
            ->setCategories($categories);
    }

    /**
     * Get Categories value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Travel\Arrays\ArrayOfCategory|null
     */
    public function getCategories(): ?ArrayOfCategory
    {
        return $this->Categories ?? null;
    }

    /**
     * Set Categories value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfCategory $categories
     *
     * @return RetrieveCityServicesResponse
     */
    public function setCategories(?ArrayOfCategory $categories = null): self
    {
        if (is_null($categories) || (is_array($categories) && empty($categories))) {
            unset($this->Categories);
        } else {
            $this->Categories = $categories;
        }

        return $this;
    }
}

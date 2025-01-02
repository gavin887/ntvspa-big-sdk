<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Structs;

use AllowDynamicProperties;
use Customer\Arrays\ArrayOfFop;

/**
 * This class stands for RetrieveFopResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q18:RetrieveFopResponse | tns:RetrieveFopResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveFopResponse extends ResponseBase
{
    /**
     * The FopList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Customer\Arrays\ArrayOfFop|null
     */
    protected ?ArrayOfFop $FopList = null;

    /**
     * Constructor method for RetrieveFopResponse
     *
     * @param \Ntvspa\Big\Customer\Arrays\ArrayOfFop $fopList
     *
     * @uses RetrieveFopResponse::setFopList()
     */
    public function __construct(?ArrayOfFop $fopList = null)
    {
        $this
            ->setFopList($fopList);
    }

    /**
     * Get FopList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Customer\Arrays\ArrayOfFop|null
     */
    public function getFopList(): ?ArrayOfFop
    {
        return $this->FopList ?? null;
    }

    /**
     * Set FopList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Customer\Arrays\ArrayOfFop $fopList
     *
     * @return RetrieveFopResponse
     */
    public function setFopList(?ArrayOfFop $fopList = null): self
    {
        if (is_null($fopList) || (is_array($fopList) && empty($fopList))) {
            unset($this->FopList);
        } else {
            $this->FopList = $fopList;
        }

        return $this;
    }
}

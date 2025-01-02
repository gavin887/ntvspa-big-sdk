<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use Travel\Arrays\ArrayOfNotice;

/**
 * This class stands for RetrieveItaloNewsResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q8:RetrieveItaloNewsResponse | tns:RetrieveItaloNewsResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveItaloNewsResponse extends ResponseBase
{
    /**
     * The Notice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Travel\Arrays\ArrayOfNotice|null
     */
    protected ?ArrayOfNotice $Notice = null;

    /**
     * Constructor method for RetrieveItaloNewsResponse
     *
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfNotice $notice
     *
     * @uses RetrieveItaloNewsResponse::setNotice()
     */
    public function __construct(?ArrayOfNotice $notice = null)
    {
        $this
            ->setNotice($notice);
    }

    /**
     * Get Notice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Travel\Arrays\ArrayOfNotice|null
     */
    public function getNotice(): ?ArrayOfNotice
    {
        return $this->Notice ?? null;
    }

    /**
     * Set Notice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfNotice $notice
     *
     * @return RetrieveItaloNewsResponse
     */
    public function setNotice(?ArrayOfNotice $notice = null): self
    {
        if (is_null($notice) || (is_array($notice) && empty($notice))) {
            unset($this->Notice);
        } else {
            $this->Notice = $notice;
        }

        return $this;
    }
}

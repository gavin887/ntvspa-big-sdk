<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session\Structs;

use AllowDynamicProperties;
use Session\Arrays\ArrayOfWarning;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LogoutResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q4:LogoutResponse | tns:LogoutResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class LogoutResponse extends AbstractStructBase
{
    /**
     * The Warnings
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Session\Arrays\ArrayOfWarning|null
     */
    protected ?ArrayOfWarning $Warnings = null;

    /**
     * Constructor method for LogoutResponse
     *
     * @param \Ntvspa\Big\Session\Arrays\ArrayOfWarning $warnings
     *
     * @uses LogoutResponse::setWarnings()
     */
    public function __construct(?ArrayOfWarning $warnings = null)
    {
        $this
            ->setWarnings($warnings);
    }

    /**
     * Get Warnings value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Session\Arrays\ArrayOfWarning|null
     */
    public function getWarnings(): ?ArrayOfWarning
    {
        return $this->Warnings ?? null;
    }

    /**
     * Set Warnings value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Session\Arrays\ArrayOfWarning $warnings
     *
     * @return LogoutResponse
     */
    public function setWarnings(?ArrayOfWarning $warnings = null): self
    {
        if (is_null($warnings) || (is_array($warnings) && empty($warnings))) {
            unset($this->Warnings);
        } else {
            $this->Warnings = $warnings;
        }

        return $this;
    }
}

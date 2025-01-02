<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session\Structs;

use AllowDynamicProperties;

/**
 * This class stands for LoginResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LoginResponse | q2:LoginResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class LoginResponse extends ResponseBase
{
    /**
     * The Agent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Agent|null
     */
    protected ?\Ntvspa\Big\Session\Structs\Agent $Agent = null;

    /**
     * Constructor method for LoginResponse
     *
     * @param Agent $agent
     *
     * @uses LoginResponse::setAgent()
     */
    public function __construct(?\Ntvspa\Big\Session\Structs\Agent $agent = null)
    {
        $this
            ->setAgent($agent);
    }

    /**
     * Get Agent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Agent|null
     */
    public function getAgent(): ?\Ntvspa\Big\Session\Structs\Agent
    {
        return $this->Agent ?? null;
    }

    /**
     * Set Agent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Agent $agent
     *
     * @return LoginResponse
     */
    public function setAgent(?\Ntvspa\Big\Session\Structs\Agent $agent = null): self
    {
        if (is_null($agent) || (is_array($agent) && empty($agent))) {
            unset($this->Agent);
        } else {
            $this->Agent = $agent;
        }

        return $this;
    }
}

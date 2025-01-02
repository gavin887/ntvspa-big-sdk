<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MasterTravelAgent Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:MasterTravelAgent
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class MasterTravelAgent extends AbstractStructBase
{
    /**
     * The Username
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Username = null;

    /**
     * Constructor method for MasterTravelAgent
     *
     * @param string $username
     *
     * @uses MasterTravelAgent::setUsername()
     */
    public function __construct(?string $username = null)
    {
        $this
            ->setUsername($username);
    }

    /**
     * Get Username value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->Username ?? null;
    }

    /**
     * Set Username value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $username
     *
     * @return MasterTravelAgent
     */
    public function setUsername(?string $username = null): self
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($username, true), gettype($username)), __LINE__);
        }
        if (is_null($username) || (is_array($username) && empty($username))) {
            unset($this->Username);
        } else {
            $this->Username = $username;
        }

        return $this;
    }
}

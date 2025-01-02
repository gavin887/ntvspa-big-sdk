<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Session\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoginRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LoginRequest | q1:LoginRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class LoginRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The Login
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Login|null
     */
    protected ?\Ntvspa\Big\Session\Structs\Login $Login = null;

    /**
     * Constructor method for LoginRequest
     *
     * @param string $sourceSystem
     * @param Login  $login
     *
     * @uses LoginRequest::setSourceSystem()
     * @uses LoginRequest::setLogin()
     */
    public function __construct(?string $sourceSystem = null, ?\Ntvspa\Big\Session\Structs\Login $login = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setLogin($login);
    }

    /**
     * Get SourceSystem value
     *
     * @return string|null
     */
    public function getSourceSystem(): ?string
    {
        return $this->SourceSystem;
    }

    /**
     * Set SourceSystem value
     *
     * @param string $sourceSystem
     *
     * @return LoginRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Session\Enums\SourceSystem::getValidValues()
     * @uses \Ntvspa\Big\Session\Enums\SourceSystem::valueIsValid()
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Session\Enums\SourceSystem::valueIsValid($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Session\Enums\SourceSystem', is_array($sourceSystem) ? implode(', ', $sourceSystem) : var_export($sourceSystem, true), implode(', ', SourceSystem::getValidValues())), __LINE__);
        }
        $this->SourceSystem = $sourceSystem;

        return $this;
    }

    /**
     * Get Login value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Login|null
     */
    public function getLogin(): ?\Ntvspa\Big\Session\Structs\Login
    {
        return $this->Login ?? null;
    }

    /**
     * Set Login value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Login $login
     *
     * @return LoginRequest
     */
    public function setLogin(?\Ntvspa\Big\Session\Structs\Login $login = null): self
    {
        if (is_null($login) || (is_array($login) && empty($login))) {
            unset($this->Login);
        } else {
            $this->Login = $login;
        }

        return $this;
    }
}

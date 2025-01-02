<?php

declare(strict_types=1);

namespace Ntvspa\Big\Session\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Login Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Login
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Login extends AbstractStructBase
{
    /**
     * The Username
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Username = null;
    /**
     * The Password
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Password = null;
    /**
     * The Domain
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Domain = null;
    /**
     * The VersionNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $VersionNumber = null;

    /**
     * Constructor method for Login
     *
     * @param string $username
     * @param string $password
     * @param string $domain
     * @param string $versionNumber
     *
     * @uses Login::setUsername()
     * @uses Login::setPassword()
     * @uses Login::setDomain()
     * @uses Login::setVersionNumber()
     */
    public function __construct(?string $username = null, ?string $password = null, ?string $domain = null, ?string $versionNumber = null)
    {
        $this
            ->setUsername($username)
            ->setPassword($password)
            ->setDomain($domain)
            ->setVersionNumber($versionNumber);
    }

    /**
     * Get Username value
     *
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->Username;
    }

    /**
     * Set Username value
     *
     * @param string $username
     *
     * @return Login
     */
    public function setUsername(?string $username = null): self
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($username, true), gettype($username)), __LINE__);
        }
        $this->Username = $username;

        return $this;
    }

    /**
     * Get Password value
     *
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->Password;
    }

    /**
     * Set Password value
     *
     * @param string $password
     *
     * @return Login
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->Password = $password;

        return $this;
    }

    /**
     * Get Domain value
     *
     * @return string|null
     */
    public function getDomain(): ?string
    {
        return $this->Domain;
    }

    /**
     * Set Domain value
     *
     * @param string $domain
     *
     * @return Login
     */
    public function setDomain(?string $domain = null): self
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domain, true), gettype($domain)), __LINE__);
        }
        $this->Domain = $domain;

        return $this;
    }

    /**
     * Get VersionNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getVersionNumber(): ?string
    {
        return $this->VersionNumber ?? null;
    }

    /**
     * Set VersionNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $versionNumber
     *
     * @return Login
     */
    public function setVersionNumber(?string $versionNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($versionNumber) && !is_string($versionNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($versionNumber, true), gettype($versionNumber)), __LINE__);
        }
        if (is_null($versionNumber) || (is_array($versionNumber) && empty($versionNumber))) {
            unset($this->VersionNumber);
        } else {
            $this->VersionNumber = $versionNumber;
        }

        return $this;
    }
}

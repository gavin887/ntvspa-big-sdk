<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoginCredentials Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LoginCredentials
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class LoginCredentials extends AbstractStructBase
{
    /**
     * The UserId
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $UserId = null;
    /**
     * The Password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Password = null;
    /**
     * The NewUserId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $NewUserId = null;
    /**
     * The Domain
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Domain = null;

    /**
     * Constructor method for LoginCredentials
     *
     * @param string $userId
     * @param string $password
     * @param string $newUserId
     * @param string $domain
     *
     * @uses LoginCredentials::setUserId()
     * @uses LoginCredentials::setPassword()
     * @uses LoginCredentials::setNewUserId()
     * @uses LoginCredentials::setDomain()
     */
    public function __construct(?string $userId = null, ?string $password = null, ?string $newUserId = null, ?string $domain = null)
    {
        $this
            ->setUserId($userId)
            ->setPassword($password)
            ->setNewUserId($newUserId)
            ->setDomain($domain);
    }

    /**
     * Get UserId value
     *
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return $this->UserId;
    }

    /**
     * Set UserId value
     *
     * @param string $userId
     *
     * @return LoginCredentials
     */
    public function setUserId(?string $userId = null): self
    {
        // validation for constraint: string
        if (!is_null($userId) && !is_string($userId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->UserId = $userId;

        return $this;
    }

    /**
     * Get Password value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->Password ?? null;
    }

    /**
     * Set Password value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $password
     *
     * @return LoginCredentials
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        if (is_null($password) || (is_array($password) && empty($password))) {
            unset($this->Password);
        } else {
            $this->Password = $password;
        }

        return $this;
    }

    /**
     * Get NewUserId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getNewUserId(): ?string
    {
        return $this->NewUserId ?? null;
    }

    /**
     * Set NewUserId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $newUserId
     *
     * @return LoginCredentials
     */
    public function setNewUserId(?string $newUserId = null): self
    {
        // validation for constraint: string
        if (!is_null($newUserId) && !is_string($newUserId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newUserId, true), gettype($newUserId)), __LINE__);
        }
        if (is_null($newUserId) || (is_array($newUserId) && empty($newUserId))) {
            unset($this->NewUserId);
        } else {
            $this->NewUserId = $newUserId;
        }

        return $this;
    }

    /**
     * Get Domain value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDomain(): ?string
    {
        return $this->Domain ?? null;
    }

    /**
     * Set Domain value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $domain
     *
     * @return LoginCredentials
     */
    public function setDomain(?string $domain = null): self
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domain, true), gettype($domain)), __LINE__);
        }
        if (is_null($domain) || (is_array($domain) && empty($domain))) {
            unset($this->Domain);
        } else {
            $this->Domain = $domain;
        }

        return $this;
    }
}

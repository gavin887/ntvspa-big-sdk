<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PointOfSale Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PointOfSale
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class PointOfSale extends AbstractStructBase
{
    /**
     * The AgentCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $AgentCode = null;
    /**
     * The DomainCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DomainCode = null;
    /**
     * The LocationCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $LocationCode = null;
    /**
     * The OrganizationCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $OrganizationCode = null;

    /**
     * Constructor method for PointOfSale
     *
     * @param string $agentCode
     * @param string $domainCode
     * @param string $locationCode
     * @param string $organizationCode
     *
     * @uses PointOfSale::setAgentCode()
     * @uses PointOfSale::setDomainCode()
     * @uses PointOfSale::setLocationCode()
     * @uses PointOfSale::setOrganizationCode()
     */
    public function __construct(?string $agentCode = null, ?string $domainCode = null, ?string $locationCode = null, ?string $organizationCode = null)
    {
        $this
            ->setAgentCode($agentCode)
            ->setDomainCode($domainCode)
            ->setLocationCode($locationCode)
            ->setOrganizationCode($organizationCode);
    }

    /**
     * Get AgentCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getAgentCode(): ?string
    {
        return $this->AgentCode ?? null;
    }

    /**
     * Set AgentCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $agentCode
     *
     * @return PointOfSale
     */
    public function setAgentCode(?string $agentCode = null): self
    {
        // validation for constraint: string
        if (!is_null($agentCode) && !is_string($agentCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agentCode, true), gettype($agentCode)), __LINE__);
        }
        if (is_null($agentCode) || (is_array($agentCode) && empty($agentCode))) {
            unset($this->AgentCode);
        } else {
            $this->AgentCode = $agentCode;
        }

        return $this;
    }

    /**
     * Get DomainCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDomainCode(): ?string
    {
        return $this->DomainCode ?? null;
    }

    /**
     * Set DomainCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $domainCode
     *
     * @return PointOfSale
     */
    public function setDomainCode(?string $domainCode = null): self
    {
        // validation for constraint: string
        if (!is_null($domainCode) && !is_string($domainCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domainCode, true), gettype($domainCode)), __LINE__);
        }
        if (is_null($domainCode) || (is_array($domainCode) && empty($domainCode))) {
            unset($this->DomainCode);
        } else {
            $this->DomainCode = $domainCode;
        }

        return $this;
    }

    /**
     * Get LocationCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getLocationCode(): ?string
    {
        return $this->LocationCode ?? null;
    }

    /**
     * Set LocationCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $locationCode
     *
     * @return PointOfSale
     */
    public function setLocationCode(?string $locationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($locationCode) && !is_string($locationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationCode, true), gettype($locationCode)), __LINE__);
        }
        if (is_null($locationCode) || (is_array($locationCode) && empty($locationCode))) {
            unset($this->LocationCode);
        } else {
            $this->LocationCode = $locationCode;
        }

        return $this;
    }

    /**
     * Get OrganizationCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getOrganizationCode(): ?string
    {
        return $this->OrganizationCode ?? null;
    }

    /**
     * Set OrganizationCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $organizationCode
     *
     * @return PointOfSale
     */
    public function setOrganizationCode(?string $organizationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($organizationCode) && !is_string($organizationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organizationCode, true), gettype($organizationCode)), __LINE__);
        }
        if (is_null($organizationCode) || (is_array($organizationCode) && empty($organizationCode))) {
            unset($this->OrganizationCode);
        } else {
            $this->OrganizationCode = $organizationCode;
        }

        return $this;
    }
}

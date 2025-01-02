<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ThreeDSecureAuthReq Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ThreeDSecureAuthReq
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ThreeDSecureAuthReq extends AbstractStructBase
{
    /**
     * The BrowserUserAgent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $BrowserUserAgent = null;
    /**
     * The BrowserAccept
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $BrowserAccept = null;
    /**
     * The IPAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $IPAddress = null;
    /**
     * The TermUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $TermUrl = null;

    /**
     * Constructor method for ThreeDSecureAuthReq
     *
     * @param string $browserUserAgent
     * @param string $browserAccept
     * @param string $iPAddress
     * @param string $termUrl
     *
     * @uses ThreeDSecureAuthReq::setBrowserUserAgent()
     * @uses ThreeDSecureAuthReq::setBrowserAccept()
     * @uses ThreeDSecureAuthReq::setIPAddress()
     * @uses ThreeDSecureAuthReq::setTermUrl()
     */
    public function __construct(?string $browserUserAgent = null, ?string $browserAccept = null, ?string $iPAddress = null, ?string $termUrl = null)
    {
        $this
            ->setBrowserUserAgent($browserUserAgent)
            ->setBrowserAccept($browserAccept)
            ->setIPAddress($iPAddress)
            ->setTermUrl($termUrl);
    }

    /**
     * Get BrowserUserAgent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getBrowserUserAgent(): ?string
    {
        return $this->BrowserUserAgent ?? null;
    }

    /**
     * Set BrowserUserAgent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $browserUserAgent
     *
     * @return ThreeDSecureAuthReq
     */
    public function setBrowserUserAgent(?string $browserUserAgent = null): self
    {
        // validation for constraint: string
        if (!is_null($browserUserAgent) && !is_string($browserUserAgent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($browserUserAgent, true), gettype($browserUserAgent)), __LINE__);
        }
        if (is_null($browserUserAgent) || (is_array($browserUserAgent) && empty($browserUserAgent))) {
            unset($this->BrowserUserAgent);
        } else {
            $this->BrowserUserAgent = $browserUserAgent;
        }

        return $this;
    }

    /**
     * Get BrowserAccept value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getBrowserAccept(): ?string
    {
        return $this->BrowserAccept ?? null;
    }

    /**
     * Set BrowserAccept value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $browserAccept
     *
     * @return ThreeDSecureAuthReq
     */
    public function setBrowserAccept(?string $browserAccept = null): self
    {
        // validation for constraint: string
        if (!is_null($browserAccept) && !is_string($browserAccept)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($browserAccept, true), gettype($browserAccept)), __LINE__);
        }
        if (is_null($browserAccept) || (is_array($browserAccept) && empty($browserAccept))) {
            unset($this->BrowserAccept);
        } else {
            $this->BrowserAccept = $browserAccept;
        }

        return $this;
    }

    /**
     * Get IPAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getIPAddress(): ?string
    {
        return $this->IPAddress ?? null;
    }

    /**
     * Set IPAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $iPAddress
     *
     * @return ThreeDSecureAuthReq
     */
    public function setIPAddress(?string $iPAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($iPAddress) && !is_string($iPAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iPAddress, true), gettype($iPAddress)), __LINE__);
        }
        if (is_null($iPAddress) || (is_array($iPAddress) && empty($iPAddress))) {
            unset($this->IPAddress);
        } else {
            $this->IPAddress = $iPAddress;
        }

        return $this;
    }

    /**
     * Get TermUrl value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTermUrl(): ?string
    {
        return $this->TermUrl ?? null;
    }

    /**
     * Set TermUrl value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $termUrl
     *
     * @return ThreeDSecureAuthReq
     */
    public function setTermUrl(?string $termUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($termUrl) && !is_string($termUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($termUrl, true), gettype($termUrl)), __LINE__);
        }
        if (is_null($termUrl) || (is_array($termUrl) && empty($termUrl))) {
            unset($this->TermUrl);
        } else {
            $this->TermUrl = $termUrl;
        }

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;

/**
 * This class stands for StartPaypalTransactionResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q38:StartPaypalTransactionResponse | tns:StartPaypalTransactionResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class StartPaypalTransactionResponse extends ResponseBase
{
    /**
     * The ExpressCheckoutUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ExpressCheckoutUrl = null;
    /**
     * The Token
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Token = null;

    /**
     * Constructor method for StartPaypalTransactionResponse
     *
     * @param string $expressCheckoutUrl
     * @param string $token
     *
     * @uses StartPaypalTransactionResponse::setExpressCheckoutUrl()
     * @uses StartPaypalTransactionResponse::setToken()
     */
    public function __construct(?string $expressCheckoutUrl = null, ?string $token = null)
    {
        $this
            ->setExpressCheckoutUrl($expressCheckoutUrl)
            ->setToken($token);
    }

    /**
     * Get ExpressCheckoutUrl value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getExpressCheckoutUrl(): ?string
    {
        return $this->ExpressCheckoutUrl ?? null;
    }

    /**
     * Set ExpressCheckoutUrl value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $expressCheckoutUrl
     *
     * @return StartPaypalTransactionResponse
     */
    public function setExpressCheckoutUrl(?string $expressCheckoutUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($expressCheckoutUrl) && !is_string($expressCheckoutUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expressCheckoutUrl, true), gettype($expressCheckoutUrl)), __LINE__);
        }
        if (is_null($expressCheckoutUrl) || (is_array($expressCheckoutUrl) && empty($expressCheckoutUrl))) {
            unset($this->ExpressCheckoutUrl);
        } else {
            $this->ExpressCheckoutUrl = $expressCheckoutUrl;
        }

        return $this;
    }

    /**
     * Get Token value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->Token ?? null;
    }

    /**
     * Set Token value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $token
     *
     * @return StartPaypalTransactionResponse
     */
    public function setToken(?string $token = null): self
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($token, true), gettype($token)), __LINE__);
        }
        if (is_null($token) || (is_array($token) && empty($token))) {
            unset($this->Token);
        } else {
            $this->Token = $token;
        }

        return $this;
    }
}
<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PayPalPayment Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PayPalPayment
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class PayPalPayment extends AbstractStructBase
{
    /**
     * The EnableBillingAgreement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $EnableBillingAgreement = null;
    /**
     * The BillingAgreementID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $BillingAgreementID = null;
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
     * Constructor method for PayPalPayment
     *
     * @param bool   $enableBillingAgreement
     * @param string $billingAgreementID
     * @param string $token
     *
     * @uses PayPalPayment::setEnableBillingAgreement()
     * @uses PayPalPayment::setBillingAgreementID()
     * @uses PayPalPayment::setToken()
     */
    public function __construct(?bool $enableBillingAgreement = null, ?string $billingAgreementID = null, ?string $token = null)
    {
        $this
            ->setEnableBillingAgreement($enableBillingAgreement)
            ->setBillingAgreementID($billingAgreementID)
            ->setToken($token);
    }

    /**
     * Get EnableBillingAgreement value
     *
     * @return bool|null
     */
    public function getEnableBillingAgreement(): ?bool
    {
        return $this->EnableBillingAgreement;
    }

    /**
     * Set EnableBillingAgreement value
     *
     * @param bool $enableBillingAgreement
     *
     * @return PayPalPayment
     */
    public function setEnableBillingAgreement(?bool $enableBillingAgreement = null): self
    {
        // validation for constraint: boolean
        if (!is_null($enableBillingAgreement) && !is_bool($enableBillingAgreement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enableBillingAgreement, true), gettype($enableBillingAgreement)), __LINE__);
        }
        $this->EnableBillingAgreement = $enableBillingAgreement;

        return $this;
    }

    /**
     * Get BillingAgreementID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getBillingAgreementID(): ?string
    {
        return $this->BillingAgreementID ?? null;
    }

    /**
     * Set BillingAgreementID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $billingAgreementID
     *
     * @return PayPalPayment
     */
    public function setBillingAgreementID(?string $billingAgreementID = null): self
    {
        // validation for constraint: string
        if (!is_null($billingAgreementID) && !is_string($billingAgreementID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingAgreementID, true), gettype($billingAgreementID)), __LINE__);
        }
        if (is_null($billingAgreementID) || (is_array($billingAgreementID) && empty($billingAgreementID))) {
            unset($this->BillingAgreementID);
        } else {
            $this->BillingAgreementID = $billingAgreementID;
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
     * @return PayPalPayment
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

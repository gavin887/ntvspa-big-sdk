<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AmazonPayPayment Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AmazonPayPayment
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class AmazonPayPayment extends AbstractStructBase
{
    /**
     * The BillingAgreementID
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $BillingAgreementID = null;
    /**
     * The UserID
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $UserID = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Email = null;

    /**
     * Constructor method for AmazonPayPayment
     *
     * @param string $billingAgreementID
     * @param string $userID
     * @param string $email
     *
     * @uses AmazonPayPayment::setBillingAgreementID()
     * @uses AmazonPayPayment::setUserID()
     * @uses AmazonPayPayment::setEmail()
     */
    public function __construct(?string $billingAgreementID = null, ?string $userID = null, ?string $email = null)
    {
        $this
            ->setBillingAgreementID($billingAgreementID)
            ->setUserID($userID)
            ->setEmail($email);
    }

    /**
     * Get BillingAgreementID value
     *
     * @return string|null
     */
    public function getBillingAgreementID(): ?string
    {
        return $this->BillingAgreementID;
    }

    /**
     * Set BillingAgreementID value
     *
     * @param string $billingAgreementID
     *
     * @return AmazonPayPayment
     */
    public function setBillingAgreementID(?string $billingAgreementID = null): self
    {
        // validation for constraint: string
        if (!is_null($billingAgreementID) && !is_string($billingAgreementID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingAgreementID, true), gettype($billingAgreementID)), __LINE__);
        }
        $this->BillingAgreementID = $billingAgreementID;

        return $this;
    }

    /**
     * Get UserID value
     *
     * @return string|null
     */
    public function getUserID(): ?string
    {
        return $this->UserID;
    }

    /**
     * Set UserID value
     *
     * @param string $userID
     *
     * @return AmazonPayPayment
     */
    public function setUserID(?string $userID = null): self
    {
        // validation for constraint: string
        if (!is_null($userID) && !is_string($userID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userID, true), gettype($userID)), __LINE__);
        }
        $this->UserID = $userID;

        return $this;
    }

    /**
     * Get Email value
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->Email;
    }

    /**
     * Set Email value
     *
     * @param string $email
     *
     * @return AmazonPayPayment
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->Email = $email;

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Customer Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Customer
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Customer extends AbstractStructBase
{
    /**
     * The CustomerIdBuyer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CustomerIdBuyer = null;
    /**
     * The CustomerIdHolder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CustomerIdHolder = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Email = null;

    /**
     * Constructor method for Customer
     *
     * @param string $customerIdBuyer
     * @param string $customerIdHolder
     * @param string $email
     *
     * @uses Customer::setCustomerIdBuyer()
     * @uses Customer::setCustomerIdHolder()
     * @uses Customer::setEmail()
     */
    public function __construct(?string $customerIdBuyer = null, ?string $customerIdHolder = null, ?string $email = null)
    {
        $this
            ->setCustomerIdBuyer($customerIdBuyer)
            ->setCustomerIdHolder($customerIdHolder)
            ->setEmail($email);
    }

    /**
     * Get CustomerIdBuyer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCustomerIdBuyer(): ?string
    {
        return $this->CustomerIdBuyer ?? null;
    }

    /**
     * Set CustomerIdBuyer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $customerIdBuyer
     *
     * @return Customer
     */
    public function setCustomerIdBuyer(?string $customerIdBuyer = null): self
    {
        // validation for constraint: string
        if (!is_null($customerIdBuyer) && !is_string($customerIdBuyer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerIdBuyer, true), gettype($customerIdBuyer)), __LINE__);
        }
        if (is_null($customerIdBuyer) || (is_array($customerIdBuyer) && empty($customerIdBuyer))) {
            unset($this->CustomerIdBuyer);
        } else {
            $this->CustomerIdBuyer = $customerIdBuyer;
        }

        return $this;
    }

    /**
     * Get CustomerIdHolder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCustomerIdHolder(): ?string
    {
        return $this->CustomerIdHolder ?? null;
    }

    /**
     * Set CustomerIdHolder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $customerIdHolder
     *
     * @return Customer
     */
    public function setCustomerIdHolder(?string $customerIdHolder = null): self
    {
        // validation for constraint: string
        if (!is_null($customerIdHolder) && !is_string($customerIdHolder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerIdHolder, true), gettype($customerIdHolder)), __LINE__);
        }
        if (is_null($customerIdHolder) || (is_array($customerIdHolder) && empty($customerIdHolder))) {
            unset($this->CustomerIdHolder);
        } else {
            $this->CustomerIdHolder = $customerIdHolder;
        }

        return $this;
    }

    /**
     * Get Email value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->Email ?? null;
    }

    /**
     * Set Email value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $email
     *
     * @return Customer
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        if (is_null($email) || (is_array($email) && empty($email))) {
            unset($this->Email);
        } else {
            $this->Email = $email;
        }

        return $this;
    }
}

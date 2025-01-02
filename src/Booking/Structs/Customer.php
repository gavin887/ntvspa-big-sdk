<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

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
     * The CustomerNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CustomerNumber = null;

    /**
     * Constructor method for Customer
     *
     * @param string $customerNumber
     *
     * @uses Customer::setCustomerNumber()
     */
    public function __construct(?string $customerNumber = null)
    {
        $this
            ->setCustomerNumber($customerNumber);
    }

    /**
     * Get CustomerNumber value
     *
     * @return string|null
     */
    public function getCustomerNumber(): ?string
    {
        return $this->CustomerNumber;
    }

    /**
     * Set CustomerNumber value
     *
     * @param string $customerNumber
     *
     * @return Customer
     */
    public function setCustomerNumber(?string $customerNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($customerNumber) && !is_string($customerNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerNumber, true), gettype($customerNumber)), __LINE__);
        }
        $this->CustomerNumber = $customerNumber;

        return $this;
    }
}

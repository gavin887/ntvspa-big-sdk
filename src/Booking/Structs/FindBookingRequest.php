<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindBookingRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q19:FindBookingRequest | tns:FindBookingRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class FindBookingRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The PageSize
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $PageSize = null;
    /**
     * The LastId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $LastId = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Customer|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\Customer $Customer = null;

    /**
     * Constructor method for FindBookingRequest
     *
     * @param string   $sourceSystem
     * @param int      $pageSize
     * @param int      $lastId
     * @param string   $signature
     * @param Customer $customer
     *
     * @uses FindBookingRequest::setSourceSystem()
     * @uses FindBookingRequest::setPageSize()
     * @uses FindBookingRequest::setLastId()
     * @uses FindBookingRequest::setSignature()
     * @uses FindBookingRequest::setCustomer()
     */
    public function __construct(?string $sourceSystem = null, ?int $pageSize = null, ?int $lastId = null, ?string $signature = null, ?\Ntvspa\Big\Booking\Structs\Customer $customer = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setPageSize($pageSize)
            ->setLastId($lastId)
            ->setSignature($signature)
            ->setCustomer($customer);
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
     * @return FindBookingRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\SourceSystem::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\SourceSystem::valueIsValid()
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\SourceSystem::valueIsValid($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\SourceSystem', is_array($sourceSystem) ? implode(', ', $sourceSystem) : var_export($sourceSystem, true), implode(', ', SourceSystem::getValidValues())), __LINE__);
        }
        $this->SourceSystem = $sourceSystem;

        return $this;
    }

    /**
     * Get PageSize value
     *
     * @return int|null
     */
    public function getPageSize(): ?int
    {
        return $this->PageSize;
    }

    /**
     * Set PageSize value
     *
     * @param int $pageSize
     *
     * @return FindBookingRequest
     */
    public function setPageSize(?int $pageSize = null): self
    {
        // validation for constraint: int
        if (!is_null($pageSize) && !(is_int($pageSize) || ctype_digit($pageSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageSize, true), gettype($pageSize)), __LINE__);
        }
        $this->PageSize = $pageSize;

        return $this;
    }

    /**
     * Get LastId value
     *
     * @return int|null
     */
    public function getLastId(): ?int
    {
        return $this->LastId;
    }

    /**
     * Set LastId value
     *
     * @param int $lastId
     *
     * @return FindBookingRequest
     */
    public function setLastId(?int $lastId = null): self
    {
        // validation for constraint: int
        if (!is_null($lastId) && !(is_int($lastId) || ctype_digit($lastId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lastId, true), gettype($lastId)), __LINE__);
        }
        $this->LastId = $lastId;

        return $this;
    }

    /**
     * Get Signature value
     *
     * @return string|null
     */
    public function getSignature(): ?string
    {
        return $this->Signature;
    }

    /**
     * Set Signature value
     *
     * @param string $signature
     *
     * @return FindBookingRequest
     */
    public function setSignature(?string $signature = null): self
    {
        // validation for constraint: string
        if (!is_null($signature) && !is_string($signature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signature, true), gettype($signature)), __LINE__);
        }
        $this->Signature = $signature;

        return $this;
    }

    /**
     * Get Customer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Customer|null
     */
    public function getCustomer(): ?\Ntvspa\Big\Booking\Structs\Customer
    {
        return $this->Customer ?? null;
    }

    /**
     * Set Customer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Customer $customer
     *
     * @return FindBookingRequest
     */
    public function setCustomer(?\Ntvspa\Big\Booking\Structs\Customer $customer = null): self
    {
        if (is_null($customer) || (is_array($customer) && empty($customer))) {
            unset($this->Customer);
        } else {
            $this->Customer = $customer;
        }

        return $this;
    }
}

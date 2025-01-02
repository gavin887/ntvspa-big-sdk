<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Structs;

use AllowDynamicProperties;
use Customer\Arrays\ArrayOfContact;
use InvalidArgumentException;
use Ntvspa\Big\Customer\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpsertCustomerContactsRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q19:UpsertCustomerContactsRequest | tns:UpsertCustomerContactsRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class UpsertCustomerContactsRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The Contacts
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var \Ntvspa\Big\Customer\Arrays\ArrayOfContact|null
     */
    protected ?ArrayOfContact $Contacts = null;

    /**
     * Constructor method for UpsertCustomerContactsRequest
     *
     * @param string                                     $sourceSystem
     * @param string                                     $signature
     * @param \Ntvspa\Big\Customer\Arrays\ArrayOfContact $contacts
     *
     * @uses UpsertCustomerContactsRequest::setSourceSystem()
     * @uses UpsertCustomerContactsRequest::setSignature()
     * @uses UpsertCustomerContactsRequest::setContacts()
     */
    public function __construct(?string $sourceSystem = null, ?string $signature = null, ?ArrayOfContact $contacts = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setSignature($signature)
            ->setContacts($contacts);
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
     * @return UpsertCustomerContactsRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\SourceSystem::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\SourceSystem::valueIsValid()
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\SourceSystem::valueIsValid($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\SourceSystem', is_array($sourceSystem) ? implode(', ', $sourceSystem) : var_export($sourceSystem, true), implode(', ', SourceSystem::getValidValues())), __LINE__);
        }
        $this->SourceSystem = $sourceSystem;

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
     * @return UpsertCustomerContactsRequest
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
     * Get Contacts value
     *
     * @return \Ntvspa\Big\Customer\Arrays\ArrayOfContact|null
     */
    public function getContacts(): ?ArrayOfContact
    {
        return $this->Contacts;
    }

    /**
     * Set Contacts value
     *
     * @param \Ntvspa\Big\Customer\Arrays\ArrayOfContact $contacts
     *
     * @return UpsertCustomerContactsRequest
     */
    public function setContacts(?ArrayOfContact $contacts = null): self
    {
        $this->Contacts = $contacts;

        return $this;
    }
}

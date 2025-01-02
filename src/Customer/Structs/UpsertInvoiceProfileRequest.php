<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Structs;

use AllowDynamicProperties;
use Customer\Arrays\ArrayOfInvoiceProfile;
use InvalidArgumentException;
use Ntvspa\Big\Customer\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpsertInvoiceProfileRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q27:UpsertInvoiceProfileRequest | tns:UpsertInvoiceProfileRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class UpsertInvoiceProfileRequest extends AbstractStructBase
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
     * The InvoiceProfile
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Customer\Arrays\ArrayOfInvoiceProfile|null
     */
    protected ?ArrayOfInvoiceProfile $InvoiceProfile = null;

    /**
     * Constructor method for UpsertInvoiceProfileRequest
     *
     * @param string                                            $sourceSystem
     * @param string                                            $signature
     * @param \Ntvspa\Big\Customer\Arrays\ArrayOfInvoiceProfile $invoiceProfile
     *
     * @uses UpsertInvoiceProfileRequest::setSourceSystem()
     * @uses UpsertInvoiceProfileRequest::setSignature()
     * @uses UpsertInvoiceProfileRequest::setInvoiceProfile()
     */
    public function __construct(?string $sourceSystem = null, ?string $signature = null, ?ArrayOfInvoiceProfile $invoiceProfile = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setSignature($signature)
            ->setInvoiceProfile($invoiceProfile);
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
     * @return UpsertInvoiceProfileRequest
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
     * @return UpsertInvoiceProfileRequest
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
     * Get InvoiceProfile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Customer\Arrays\ArrayOfInvoiceProfile|null
     */
    public function getInvoiceProfile(): ?ArrayOfInvoiceProfile
    {
        return $this->InvoiceProfile ?? null;
    }

    /**
     * Set InvoiceProfile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Customer\Arrays\ArrayOfInvoiceProfile $invoiceProfile
     *
     * @return UpsertInvoiceProfileRequest
     */
    public function setInvoiceProfile(?ArrayOfInvoiceProfile $invoiceProfile = null): self
    {
        if (is_null($invoiceProfile) || (is_array($invoiceProfile) && empty($invoiceProfile))) {
            unset($this->InvoiceProfile);
        } else {
            $this->InvoiceProfile = $invoiceProfile;
        }

        return $this;
    }
}

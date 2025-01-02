<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Product\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestInvoiceRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q9:RequestInvoiceRequest | tns:RequestInvoiceRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RequestInvoiceRequest extends AbstractStructBase
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
     * - nillable: true
     *
     * @var InvoiceProfile|null
     */
    protected ?\Ntvspa\Big\Product\Structs\InvoiceProfile $InvoiceProfile = null;

    /**
     * Constructor method for RequestInvoiceRequest
     *
     * @param string         $sourceSystem
     * @param string         $signature
     * @param InvoiceProfile $invoiceProfile
     *
     * @uses RequestInvoiceRequest::setSourceSystem()
     * @uses RequestInvoiceRequest::setSignature()
     * @uses RequestInvoiceRequest::setInvoiceProfile()
     */
    public function __construct(?string $sourceSystem = null, ?string $signature = null, ?\Ntvspa\Big\Product\Structs\InvoiceProfile $invoiceProfile = null)
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
     * @return RequestInvoiceRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Product\Enums\SourceSystem::getValidValues()
     * @uses \Ntvspa\Big\Product\Enums\SourceSystem::valueIsValid()
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Product\Enums\SourceSystem::valueIsValid($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Product\Enums\SourceSystem', is_array($sourceSystem) ? implode(', ', $sourceSystem) : var_export($sourceSystem, true), implode(', ', SourceSystem::getValidValues())), __LINE__);
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
     * @return RequestInvoiceRequest
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
     *
     * @return InvoiceProfile|null
     */
    public function getInvoiceProfile(): ?\Ntvspa\Big\Product\Structs\InvoiceProfile
    {
        return $this->InvoiceProfile;
    }

    /**
     * Set InvoiceProfile value
     *
     * @param InvoiceProfile $invoiceProfile
     *
     * @return RequestInvoiceRequest
     */
    public function setInvoiceProfile(?\Ntvspa\Big\Product\Structs\InvoiceProfile $invoiceProfile = null): self
    {
        $this->InvoiceProfile = $invoiceProfile;

        return $this;
    }
}

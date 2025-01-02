<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Corporate\Enums\RetrieveAgencyAccountingDocumentTypeEnum;
use Ntvspa\Big\Corporate\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetrieveAgencyAccountingPDFURLRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q11:RetrieveAgencyAccountingPDFURLRequest | tns:RetrieveAgencyAccountingPDFURLRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveAgencyAccountingPDFURLRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The DocumentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $DocumentType = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The InvoiceId
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $InvoiceId = null;

    /**
     * Constructor method for RetrieveAgencyAccountingPDFURLRequest
     *
     * @param string $sourceSystem
     * @param string $documentType
     * @param string $signature
     * @param string $invoiceId
     *
     * @uses RetrieveAgencyAccountingPDFURLRequest::setSourceSystem()
     * @uses RetrieveAgencyAccountingPDFURLRequest::setDocumentType()
     * @uses RetrieveAgencyAccountingPDFURLRequest::setSignature()
     * @uses RetrieveAgencyAccountingPDFURLRequest::setInvoiceId()
     */
    public function __construct(?string $sourceSystem = null, ?string $documentType = null, ?string $signature = null, ?string $invoiceId = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setDocumentType($documentType)
            ->setSignature($signature)
            ->setInvoiceId($invoiceId);
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
     * @return RetrieveAgencyAccountingPDFURLRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Corporate\Enums\SourceSystem::getValidValues()
     * @uses \Ntvspa\Big\Corporate\Enums\SourceSystem::valueIsValid()
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Corporate\Enums\SourceSystem::valueIsValid($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Corporate\Enums\SourceSystem', is_array($sourceSystem) ? implode(', ', $sourceSystem) : var_export($sourceSystem, true), implode(', ', SourceSystem::getValidValues())), __LINE__);
        }
        $this->SourceSystem = $sourceSystem;

        return $this;
    }

    /**
     * Get DocumentType value
     *
     * @return string|null
     */
    public function getDocumentType(): ?string
    {
        return $this->DocumentType;
    }

    /**
     * Set DocumentType value
     *
     * @param string $documentType
     *
     * @return RetrieveAgencyAccountingPDFURLRequest
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Corporate\Enums\RetrieveAgencyAccountingDocumentTypeEnum::getValidValues()
     * @uses \Ntvspa\Big\Corporate\Enums\RetrieveAgencyAccountingDocumentTypeEnum::valueIsValid()
     */
    public function setDocumentType(?string $documentType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Corporate\Enums\RetrieveAgencyAccountingDocumentTypeEnum::valueIsValid($documentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Corporate\Enums\RetrieveAgencyAccountingDocumentTypeEnum', is_array($documentType) ? implode(', ', $documentType) : var_export($documentType, true), implode(', ', RetrieveAgencyAccountingDocumentTypeEnum::getValidValues())), __LINE__);
        }
        $this->DocumentType = $documentType;

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
     * @return RetrieveAgencyAccountingPDFURLRequest
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
     * Get InvoiceId value
     *
     * @return string|null
     */
    public function getInvoiceId(): ?string
    {
        return $this->InvoiceId;
    }

    /**
     * Set InvoiceId value
     *
     * @param string $invoiceId
     *
     * @return RetrieveAgencyAccountingPDFURLRequest
     */
    public function setInvoiceId(?string $invoiceId = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceId) && !is_string($invoiceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceId, true), gettype($invoiceId)), __LINE__);
        }
        $this->InvoiceId = $invoiceId;

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Corporate\Enums\SourceSystem;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetrieveAccountStatementRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q7:RetrieveAccountStatementRequest | tns:RetrieveAccountStatementRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveAccountStatementRequest extends AbstractStructBase
{
    /**
     * The SourceSystem
     *
     * @var string|null
     */
    protected ?string $SourceSystem = null;
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $StartDate = null;
    /**
     * The EndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $EndDate = null;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Signature = null;
    /**
     * The InvoiceID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $InvoiceID = null;

    /**
     * Constructor method for RetrieveAccountStatementRequest
     *
     * @param string $sourceSystem
     * @param string $startDate
     * @param string $endDate
     * @param string $signature
     * @param string $invoiceID
     *
     * @uses RetrieveAccountStatementRequest::setSourceSystem()
     * @uses RetrieveAccountStatementRequest::setStartDate()
     * @uses RetrieveAccountStatementRequest::setEndDate()
     * @uses RetrieveAccountStatementRequest::setSignature()
     * @uses RetrieveAccountStatementRequest::setInvoiceID()
     */
    public function __construct(?string $sourceSystem = null, ?string $startDate = null, ?string $endDate = null, ?string $signature = null, ?string $invoiceID = null)
    {
        $this
            ->setSourceSystem($sourceSystem)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setSignature($signature)
            ->setInvoiceID($invoiceID);
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
     * @return RetrieveAccountStatementRequest
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
     * Get StartDate value
     *
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->StartDate;
    }

    /**
     * Set StartDate value
     *
     * @param string $startDate
     *
     * @return RetrieveAccountStatementRequest
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;

        return $this;
    }

    /**
     * Get EndDate value
     *
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->EndDate;
    }

    /**
     * Set EndDate value
     *
     * @param string $endDate
     *
     * @return RetrieveAccountStatementRequest
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;

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
     * @return RetrieveAccountStatementRequest
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
     * Get InvoiceID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getInvoiceID(): ?string
    {
        return $this->InvoiceID ?? null;
    }

    /**
     * Set InvoiceID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $invoiceID
     *
     * @return RetrieveAccountStatementRequest
     */
    public function setInvoiceID(?string $invoiceID = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceID) && !is_string($invoiceID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceID, true), gettype($invoiceID)), __LINE__);
        }
        if (is_null($invoiceID) || (is_array($invoiceID) && empty($invoiceID))) {
            unset($this->InvoiceID);
        } else {
            $this->InvoiceID = $invoiceID;
        }

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Corporate\Enums\AccountStatementTypeEnum;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelAgencyInvoice Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TravelAgencyInvoice
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class TravelAgencyInvoice extends AbstractStructBase
{
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $Date = null;
    /**
     * The ValidityStartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $ValidityStartDate = null;
    /**
     * The ValidityEndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $ValidityEndDate = null;
    /**
     * The TotalGrossAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $TotalGrossAmount = null;
    /**
     * The AccountStatementType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $AccountStatementType = null;
    /**
     * The InvoiceId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $InvoiceId = null;
    /**
     * The InvoiceIDReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $InvoiceIDReference = null;

    /**
     * Constructor method for TravelAgencyInvoice
     *
     * @param string $date
     * @param string $validityStartDate
     * @param string $validityEndDate
     * @param float  $totalGrossAmount
     * @param string $accountStatementType
     * @param string $invoiceId
     * @param string $invoiceIDReference
     *
     * @uses TravelAgencyInvoice::setDate()
     * @uses TravelAgencyInvoice::setValidityStartDate()
     * @uses TravelAgencyInvoice::setValidityEndDate()
     * @uses TravelAgencyInvoice::setTotalGrossAmount()
     * @uses TravelAgencyInvoice::setAccountStatementType()
     * @uses TravelAgencyInvoice::setInvoiceId()
     * @uses TravelAgencyInvoice::setInvoiceIDReference()
     */
    public function __construct(?string $date = null, ?string $validityStartDate = null, ?string $validityEndDate = null, ?float $totalGrossAmount = null, ?string $accountStatementType = null, ?string $invoiceId = null, ?string $invoiceIDReference = null)
    {
        $this
            ->setDate($date)
            ->setValidityStartDate($validityStartDate)
            ->setValidityEndDate($validityEndDate)
            ->setTotalGrossAmount($totalGrossAmount)
            ->setAccountStatementType($accountStatementType)
            ->setInvoiceId($invoiceId)
            ->setInvoiceIDReference($invoiceIDReference);
    }

    /**
     * Get Date value
     *
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->Date;
    }

    /**
     * Set Date value
     *
     * @param string $date
     *
     * @return TravelAgencyInvoice
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->Date = $date;

        return $this;
    }

    /**
     * Get ValidityStartDate value
     *
     * @return string|null
     */
    public function getValidityStartDate(): ?string
    {
        return $this->ValidityStartDate;
    }

    /**
     * Set ValidityStartDate value
     *
     * @param string $validityStartDate
     *
     * @return TravelAgencyInvoice
     */
    public function setValidityStartDate(?string $validityStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($validityStartDate) && !is_string($validityStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validityStartDate, true), gettype($validityStartDate)), __LINE__);
        }
        $this->ValidityStartDate = $validityStartDate;

        return $this;
    }

    /**
     * Get ValidityEndDate value
     *
     * @return string|null
     */
    public function getValidityEndDate(): ?string
    {
        return $this->ValidityEndDate;
    }

    /**
     * Set ValidityEndDate value
     *
     * @param string $validityEndDate
     *
     * @return TravelAgencyInvoice
     */
    public function setValidityEndDate(?string $validityEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($validityEndDate) && !is_string($validityEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validityEndDate, true), gettype($validityEndDate)), __LINE__);
        }
        $this->ValidityEndDate = $validityEndDate;

        return $this;
    }

    /**
     * Get TotalGrossAmount value
     *
     * @return float|null
     */
    public function getTotalGrossAmount(): ?float
    {
        return $this->TotalGrossAmount;
    }

    /**
     * Set TotalGrossAmount value
     *
     * @param float $totalGrossAmount
     *
     * @return TravelAgencyInvoice
     */
    public function setTotalGrossAmount(?float $totalGrossAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalGrossAmount) && !(is_float($totalGrossAmount) || is_numeric($totalGrossAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalGrossAmount, true), gettype($totalGrossAmount)), __LINE__);
        }
        $this->TotalGrossAmount = $totalGrossAmount;

        return $this;
    }

    /**
     * Get AccountStatementType value
     *
     * @return string|null
     */
    public function getAccountStatementType(): ?string
    {
        return $this->AccountStatementType;
    }

    /**
     * Set AccountStatementType value
     *
     * @param string $accountStatementType
     *
     * @return TravelAgencyInvoice
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Corporate\Enums\AccountStatementTypeEnum::getValidValues()
     * @uses \Ntvspa\Big\Corporate\Enums\AccountStatementTypeEnum::valueIsValid()
     */
    public function setAccountStatementType(?string $accountStatementType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Corporate\Enums\AccountStatementTypeEnum::valueIsValid($accountStatementType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Corporate\Enums\AccountStatementTypeEnum', is_array($accountStatementType) ? implode(', ', $accountStatementType) : var_export($accountStatementType, true), implode(', ', AccountStatementTypeEnum::getValidValues())), __LINE__);
        }
        $this->AccountStatementType = $accountStatementType;

        return $this;
    }

    /**
     * Get InvoiceId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getInvoiceId(): ?string
    {
        return $this->InvoiceId ?? null;
    }

    /**
     * Set InvoiceId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $invoiceId
     *
     * @return TravelAgencyInvoice
     */
    public function setInvoiceId(?string $invoiceId = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceId) && !is_string($invoiceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceId, true), gettype($invoiceId)), __LINE__);
        }
        if (is_null($invoiceId) || (is_array($invoiceId) && empty($invoiceId))) {
            unset($this->InvoiceId);
        } else {
            $this->InvoiceId = $invoiceId;
        }

        return $this;
    }

    /**
     * Get InvoiceIDReference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getInvoiceIDReference(): ?string
    {
        return $this->InvoiceIDReference ?? null;
    }

    /**
     * Set InvoiceIDReference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $invoiceIDReference
     *
     * @return TravelAgencyInvoice
     */
    public function setInvoiceIDReference(?string $invoiceIDReference = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceIDReference) && !is_string($invoiceIDReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceIDReference, true), gettype($invoiceIDReference)), __LINE__);
        }
        if (is_null($invoiceIDReference) || (is_array($invoiceIDReference) && empty($invoiceIDReference))) {
            unset($this->InvoiceIDReference);
        } else {
            $this->InvoiceIDReference = $invoiceIDReference;
        }

        return $this;
    }
}

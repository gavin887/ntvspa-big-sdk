<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Customer\Enums\TransactionTypeEnum;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoyaltyTransactionFilter Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LoyaltyTransactionFilter
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class LoyaltyTransactionFilter extends AbstractStructBase
{
    /**
     * The TransactionStartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $TransactionStartDate = null;
    /**
     * The TransactionEndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $TransactionEndDate = null;
    /**
     * The TransactionsType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $TransactionsType = null;
    /**
     * The TransactionSubtype
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $TransactionSubtype = null;
    /**
     * The PNR
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PNR = null;

    /**
     * Constructor method for LoyaltyTransactionFilter
     *
     * @param string $transactionStartDate
     * @param string $transactionEndDate
     * @param string $transactionsType
     * @param string $transactionSubtype
     * @param string $pNR
     *
     * @uses LoyaltyTransactionFilter::setTransactionStartDate()
     * @uses LoyaltyTransactionFilter::setTransactionEndDate()
     * @uses LoyaltyTransactionFilter::setTransactionsType()
     * @uses LoyaltyTransactionFilter::setTransactionSubtype()
     * @uses LoyaltyTransactionFilter::setPNR()
     */
    public function __construct(?string $transactionStartDate = null, ?string $transactionEndDate = null, ?string $transactionsType = null, ?string $transactionSubtype = null, ?string $pNR = null)
    {
        $this
            ->setTransactionStartDate($transactionStartDate)
            ->setTransactionEndDate($transactionEndDate)
            ->setTransactionsType($transactionsType)
            ->setTransactionSubtype($transactionSubtype)
            ->setPNR($pNR);
    }

    /**
     * Get TransactionStartDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTransactionStartDate(): ?string
    {
        return $this->TransactionStartDate ?? null;
    }

    /**
     * Set TransactionStartDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $transactionStartDate
     *
     * @return LoyaltyTransactionFilter
     */
    public function setTransactionStartDate(?string $transactionStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionStartDate) && !is_string($transactionStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionStartDate, true), gettype($transactionStartDate)), __LINE__);
        }
        if (is_null($transactionStartDate) || (is_array($transactionStartDate) && empty($transactionStartDate))) {
            unset($this->TransactionStartDate);
        } else {
            $this->TransactionStartDate = $transactionStartDate;
        }

        return $this;
    }

    /**
     * Get TransactionEndDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTransactionEndDate(): ?string
    {
        return $this->TransactionEndDate ?? null;
    }

    /**
     * Set TransactionEndDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $transactionEndDate
     *
     * @return LoyaltyTransactionFilter
     */
    public function setTransactionEndDate(?string $transactionEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionEndDate) && !is_string($transactionEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionEndDate, true), gettype($transactionEndDate)), __LINE__);
        }
        if (is_null($transactionEndDate) || (is_array($transactionEndDate) && empty($transactionEndDate))) {
            unset($this->TransactionEndDate);
        } else {
            $this->TransactionEndDate = $transactionEndDate;
        }

        return $this;
    }

    /**
     * Get TransactionsType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTransactionsType(): ?string
    {
        return $this->TransactionsType ?? null;
    }

    /**
     * Set TransactionsType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $transactionsType
     *
     * @return LoyaltyTransactionFilter
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\TransactionTypeEnum::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\TransactionTypeEnum::valueIsValid()
     */
    public function setTransactionsType(?string $transactionsType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\TransactionTypeEnum::valueIsValid($transactionsType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\TransactionTypeEnum', is_array($transactionsType) ? implode(', ', $transactionsType) : var_export($transactionsType, true), implode(', ', TransactionTypeEnum::getValidValues())), __LINE__);
        }
        if (is_null($transactionsType) || (is_array($transactionsType) && empty($transactionsType))) {
            unset($this->TransactionsType);
        } else {
            $this->TransactionsType = $transactionsType;
        }

        return $this;
    }

    /**
     * Get TransactionSubtype value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTransactionSubtype(): ?string
    {
        return $this->TransactionSubtype ?? null;
    }

    /**
     * Set TransactionSubtype value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $transactionSubtype
     *
     * @return LoyaltyTransactionFilter
     */
    public function setTransactionSubtype(?string $transactionSubtype = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionSubtype) && !is_string($transactionSubtype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionSubtype, true), gettype($transactionSubtype)), __LINE__);
        }
        if (is_null($transactionSubtype) || (is_array($transactionSubtype) && empty($transactionSubtype))) {
            unset($this->TransactionSubtype);
        } else {
            $this->TransactionSubtype = $transactionSubtype;
        }

        return $this;
    }

    /**
     * Get PNR value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPNR(): ?string
    {
        return $this->PNR ?? null;
    }

    /**
     * Set PNR value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $pNR
     *
     * @return LoyaltyTransactionFilter
     */
    public function setPNR(?string $pNR = null): self
    {
        // validation for constraint: string
        if (!is_null($pNR) && !is_string($pNR)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pNR, true), gettype($pNR)), __LINE__);
        }
        if (is_null($pNR) || (is_array($pNR) && empty($pNR))) {
            unset($this->PNR);
        } else {
            $this->PNR = $pNR;
        }

        return $this;
    }
}

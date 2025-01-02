<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Transaction Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Transaction
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Transaction extends AbstractStructBase
{
    /**
     * The CardID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $CardID = null;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $TransactionID = null;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $Value = null;
    /**
     * The TransactionDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $TransactionDate = null;
    /**
     * The TransactionStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $TransactionStatus = null;
    /**
     * The TransactionType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $TransactionType = null;
    /**
     * The Notes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Notes = null;
    /**
     * The AuthorizationCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $AuthorizationCode = null;
    /**
     * The Receipt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Receipt = null;
    /**
     * The Shop
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Shop = null;
    /**
     * The Terminal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Terminal = null;

    /**
     * Constructor method for Transaction
     *
     * @param int    $cardID
     * @param int    $transactionID
     * @param float  $value
     * @param string $transactionDate
     * @param int    $transactionStatus
     * @param int    $transactionType
     * @param string $notes
     * @param string $authorizationCode
     * @param string $receipt
     * @param string $shop
     * @param string $terminal
     *
     * @uses Transaction::setCardID()
     * @uses Transaction::setTransactionID()
     * @uses Transaction::setValue()
     * @uses Transaction::setTransactionDate()
     * @uses Transaction::setTransactionStatus()
     * @uses Transaction::setTransactionType()
     * @uses Transaction::setNotes()
     * @uses Transaction::setAuthorizationCode()
     * @uses Transaction::setReceipt()
     * @uses Transaction::setShop()
     * @uses Transaction::setTerminal()
     */
    public function __construct(?int $cardID = null, ?int $transactionID = null, ?float $value = null, ?string $transactionDate = null, ?int $transactionStatus = null, ?int $transactionType = null, ?string $notes = null, ?string $authorizationCode = null, ?string $receipt = null, ?string $shop = null, ?string $terminal = null)
    {
        $this
            ->setCardID($cardID)
            ->setTransactionID($transactionID)
            ->setValue($value)
            ->setTransactionDate($transactionDate)
            ->setTransactionStatus($transactionStatus)
            ->setTransactionType($transactionType)
            ->setNotes($notes)
            ->setAuthorizationCode($authorizationCode)
            ->setReceipt($receipt)
            ->setShop($shop)
            ->setTerminal($terminal);
    }

    /**
     * Get CardID value
     *
     * @return int|null
     */
    public function getCardID(): ?int
    {
        return $this->CardID;
    }

    /**
     * Set CardID value
     *
     * @param int $cardID
     *
     * @return Transaction
     */
    public function setCardID(?int $cardID = null): self
    {
        // validation for constraint: int
        if (!is_null($cardID) && !(is_int($cardID) || ctype_digit($cardID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cardID, true), gettype($cardID)), __LINE__);
        }
        $this->CardID = $cardID;

        return $this;
    }

    /**
     * Get TransactionID value
     *
     * @return int|null
     */
    public function getTransactionID(): ?int
    {
        return $this->TransactionID;
    }

    /**
     * Set TransactionID value
     *
     * @param int $transactionID
     *
     * @return Transaction
     */
    public function setTransactionID(?int $transactionID = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionID) && !(is_int($transactionID) || ctype_digit($transactionID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;

        return $this;
    }

    /**
     * Get Value value
     *
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->Value;
    }

    /**
     * Set Value value
     *
     * @param float $value
     *
     * @return Transaction
     */
    public function setValue(?float $value = null): self
    {
        // validation for constraint: float
        if (!is_null($value) && !(is_float($value) || is_numeric($value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;

        return $this;
    }

    /**
     * Get TransactionDate value
     *
     * @return string|null
     */
    public function getTransactionDate(): ?string
    {
        return $this->TransactionDate;
    }

    /**
     * Set TransactionDate value
     *
     * @param string $transactionDate
     *
     * @return Transaction
     */
    public function setTransactionDate(?string $transactionDate = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionDate) && !is_string($transactionDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionDate, true), gettype($transactionDate)), __LINE__);
        }
        $this->TransactionDate = $transactionDate;

        return $this;
    }

    /**
     * Get TransactionStatus value
     *
     * @return int|null
     */
    public function getTransactionStatus(): ?int
    {
        return $this->TransactionStatus;
    }

    /**
     * Set TransactionStatus value
     *
     * @param int $transactionStatus
     *
     * @return Transaction
     */
    public function setTransactionStatus(?int $transactionStatus = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionStatus) && !(is_int($transactionStatus) || ctype_digit($transactionStatus))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionStatus, true), gettype($transactionStatus)), __LINE__);
        }
        $this->TransactionStatus = $transactionStatus;

        return $this;
    }

    /**
     * Get TransactionType value
     *
     * @return int|null
     */
    public function getTransactionType(): ?int
    {
        return $this->TransactionType;
    }

    /**
     * Set TransactionType value
     *
     * @param int $transactionType
     *
     * @return Transaction
     */
    public function setTransactionType(?int $transactionType = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionType) && !(is_int($transactionType) || ctype_digit($transactionType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionType, true), gettype($transactionType)), __LINE__);
        }
        $this->TransactionType = $transactionType;

        return $this;
    }

    /**
     * Get Notes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getNotes(): ?string
    {
        return $this->Notes ?? null;
    }

    /**
     * Set Notes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $notes
     *
     * @return Transaction
     */
    public function setNotes(?string $notes = null): self
    {
        // validation for constraint: string
        if (!is_null($notes) && !is_string($notes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notes, true), gettype($notes)), __LINE__);
        }
        if (is_null($notes) || (is_array($notes) && empty($notes))) {
            unset($this->Notes);
        } else {
            $this->Notes = $notes;
        }

        return $this;
    }

    /**
     * Get AuthorizationCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getAuthorizationCode(): ?string
    {
        return $this->AuthorizationCode ?? null;
    }

    /**
     * Set AuthorizationCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $authorizationCode
     *
     * @return Transaction
     */
    public function setAuthorizationCode(?string $authorizationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($authorizationCode) && !is_string($authorizationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authorizationCode, true), gettype($authorizationCode)), __LINE__);
        }
        if (is_null($authorizationCode) || (is_array($authorizationCode) && empty($authorizationCode))) {
            unset($this->AuthorizationCode);
        } else {
            $this->AuthorizationCode = $authorizationCode;
        }

        return $this;
    }

    /**
     * Get Receipt value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getReceipt(): ?string
    {
        return $this->Receipt ?? null;
    }

    /**
     * Set Receipt value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $receipt
     *
     * @return Transaction
     */
    public function setReceipt(?string $receipt = null): self
    {
        // validation for constraint: string
        if (!is_null($receipt) && !is_string($receipt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receipt, true), gettype($receipt)), __LINE__);
        }
        if (is_null($receipt) || (is_array($receipt) && empty($receipt))) {
            unset($this->Receipt);
        } else {
            $this->Receipt = $receipt;
        }

        return $this;
    }

    /**
     * Get Shop value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getShop(): ?string
    {
        return $this->Shop ?? null;
    }

    /**
     * Set Shop value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $shop
     *
     * @return Transaction
     */
    public function setShop(?string $shop = null): self
    {
        // validation for constraint: string
        if (!is_null($shop) && !is_string($shop)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shop, true), gettype($shop)), __LINE__);
        }
        if (is_null($shop) || (is_array($shop) && empty($shop))) {
            unset($this->Shop);
        } else {
            $this->Shop = $shop;
        }

        return $this;
    }

    /**
     * Get Terminal value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTerminal(): ?string
    {
        return $this->Terminal ?? null;
    }

    /**
     * Set Terminal value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $terminal
     *
     * @return Transaction
     */
    public function setTerminal(?string $terminal = null): self
    {
        // validation for constraint: string
        if (!is_null($terminal) && !is_string($terminal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($terminal, true), gettype($terminal)), __LINE__);
        }
        if (is_null($terminal) || (is_array($terminal) && empty($terminal))) {
            unset($this->Terminal);
        } else {
            $this->Terminal = $terminal;
        }

        return $this;
    }
}

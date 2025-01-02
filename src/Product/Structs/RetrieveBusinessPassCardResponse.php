<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Product\Arrays\ArrayOfTransaction;

/**
 * This class stands for RetrieveBusinessPassCardResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q16:RetrieveBusinessPassCardResponse | tns:RetrieveBusinessPassCardResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveBusinessPassCardResponse extends ResponseBase
{
    /**
     * The ExpiryDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $ExpiryDate = null;
    /**
     * The Balance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $Balance = null;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $TransactionID = null;
    /**
     * The ActivationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $ActivationDate = null;
    /**
     * The IssueDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $IssueDate = null;
    /**
     * The SerialNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $SerialNumber = null;
    /**
     * The WebSerialNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $WebSerialNumber = null;
    /**
     * The CardStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CardStatus = null;
    /**
     * The CardData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var CardData|null
     */
    protected ?\Ntvspa\Big\Product\Structs\CardData $CardData = null;
    /**
     * The Parameters
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Parameter|null
     */
    protected ?\Ntvspa\Big\Product\Structs\Parameter $Parameters = null;
    /**
     * The Transactions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfTransaction|null
     */
    protected ?ArrayOfTransaction $Transactions = null;

    /**
     * Constructor method for RetrieveBusinessPassCardResponse
     *
     * @param string                                        $expiryDate
     * @param float                                         $balance
     * @param int                                           $transactionID
     * @param string                                        $activationDate
     * @param string                                        $issueDate
     * @param string                                        $serialNumber
     * @param string                                        $webSerialNumber
     * @param string                                        $cardStatus
     * @param CardData                                      $cardData
     * @param Parameter                                     $parameters
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfTransaction $transactions
     *
     * @uses RetrieveBusinessPassCardResponse::setExpiryDate()
     * @uses RetrieveBusinessPassCardResponse::setBalance()
     * @uses RetrieveBusinessPassCardResponse::setTransactionID()
     * @uses RetrieveBusinessPassCardResponse::setActivationDate()
     * @uses RetrieveBusinessPassCardResponse::setIssueDate()
     * @uses RetrieveBusinessPassCardResponse::setSerialNumber()
     * @uses RetrieveBusinessPassCardResponse::setWebSerialNumber()
     * @uses RetrieveBusinessPassCardResponse::setCardStatus()
     * @uses RetrieveBusinessPassCardResponse::setCardData()
     * @uses RetrieveBusinessPassCardResponse::setParameters()
     * @uses RetrieveBusinessPassCardResponse::setTransactions()
     */
    public function __construct(?string $expiryDate = null, ?float $balance = null, ?int $transactionID = null, ?string $activationDate = null, ?string $issueDate = null, ?string $serialNumber = null, ?string $webSerialNumber = null, ?string $cardStatus = null, ?\Ntvspa\Big\Product\Structs\CardData $cardData = null, ?\Ntvspa\Big\Product\Structs\Parameter $parameters = null, ?ArrayOfTransaction $transactions = null)
    {
        $this
            ->setExpiryDate($expiryDate)
            ->setBalance($balance)
            ->setTransactionID($transactionID)
            ->setActivationDate($activationDate)
            ->setIssueDate($issueDate)
            ->setSerialNumber($serialNumber)
            ->setWebSerialNumber($webSerialNumber)
            ->setCardStatus($cardStatus)
            ->setCardData($cardData)
            ->setParameters($parameters)
            ->setTransactions($transactions);
    }

    /**
     * Get ExpiryDate value
     *
     * @return string|null
     */
    public function getExpiryDate(): ?string
    {
        return $this->ExpiryDate;
    }

    /**
     * Set ExpiryDate value
     *
     * @param string $expiryDate
     *
     * @return RetrieveBusinessPassCardResponse
     */
    public function setExpiryDate(?string $expiryDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expiryDate) && !is_string($expiryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiryDate, true), gettype($expiryDate)), __LINE__);
        }
        $this->ExpiryDate = $expiryDate;

        return $this;
    }

    /**
     * Get Balance value
     *
     * @return float|null
     */
    public function getBalance(): ?float
    {
        return $this->Balance;
    }

    /**
     * Set Balance value
     *
     * @param float $balance
     *
     * @return RetrieveBusinessPassCardResponse
     */
    public function setBalance(?float $balance = null): self
    {
        // validation for constraint: float
        if (!is_null($balance) && !(is_float($balance) || is_numeric($balance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($balance, true), gettype($balance)), __LINE__);
        }
        $this->Balance = $balance;

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
     * @return RetrieveBusinessPassCardResponse
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
     * Get ActivationDate value
     *
     * @return string|null
     */
    public function getActivationDate(): ?string
    {
        return $this->ActivationDate;
    }

    /**
     * Set ActivationDate value
     *
     * @param string $activationDate
     *
     * @return RetrieveBusinessPassCardResponse
     */
    public function setActivationDate(?string $activationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($activationDate) && !is_string($activationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($activationDate, true), gettype($activationDate)), __LINE__);
        }
        $this->ActivationDate = $activationDate;

        return $this;
    }

    /**
     * Get IssueDate value
     *
     * @return string|null
     */
    public function getIssueDate(): ?string
    {
        return $this->IssueDate;
    }

    /**
     * Set IssueDate value
     *
     * @param string $issueDate
     *
     * @return RetrieveBusinessPassCardResponse
     */
    public function setIssueDate(?string $issueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($issueDate) && !is_string($issueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueDate, true), gettype($issueDate)), __LINE__);
        }
        $this->IssueDate = $issueDate;

        return $this;
    }

    /**
     * Get SerialNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getSerialNumber(): ?string
    {
        return $this->SerialNumber ?? null;
    }

    /**
     * Set SerialNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $serialNumber
     *
     * @return RetrieveBusinessPassCardResponse
     */
    public function setSerialNumber(?string $serialNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($serialNumber) && !is_string($serialNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serialNumber, true), gettype($serialNumber)), __LINE__);
        }
        if (is_null($serialNumber) || (is_array($serialNumber) && empty($serialNumber))) {
            unset($this->SerialNumber);
        } else {
            $this->SerialNumber = $serialNumber;
        }

        return $this;
    }

    /**
     * Get WebSerialNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getWebSerialNumber(): ?string
    {
        return $this->WebSerialNumber ?? null;
    }

    /**
     * Set WebSerialNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $webSerialNumber
     *
     * @return RetrieveBusinessPassCardResponse
     */
    public function setWebSerialNumber(?string $webSerialNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($webSerialNumber) && !is_string($webSerialNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($webSerialNumber, true), gettype($webSerialNumber)), __LINE__);
        }
        if (is_null($webSerialNumber) || (is_array($webSerialNumber) && empty($webSerialNumber))) {
            unset($this->WebSerialNumber);
        } else {
            $this->WebSerialNumber = $webSerialNumber;
        }

        return $this;
    }

    /**
     * Get CardStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCardStatus(): ?string
    {
        return $this->CardStatus ?? null;
    }

    /**
     * Set CardStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $cardStatus
     *
     * @return RetrieveBusinessPassCardResponse
     */
    public function setCardStatus(?string $cardStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($cardStatus) && !is_string($cardStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardStatus, true), gettype($cardStatus)), __LINE__);
        }
        if (is_null($cardStatus) || (is_array($cardStatus) && empty($cardStatus))) {
            unset($this->CardStatus);
        } else {
            $this->CardStatus = $cardStatus;
        }

        return $this;
    }

    /**
     * Get CardData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return CardData|null
     */
    public function getCardData(): ?\Ntvspa\Big\Product\Structs\CardData
    {
        return $this->CardData ?? null;
    }

    /**
     * Set CardData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param CardData $cardData
     *
     * @return RetrieveBusinessPassCardResponse
     */
    public function setCardData(?\Ntvspa\Big\Product\Structs\CardData $cardData = null): self
    {
        if (is_null($cardData) || (is_array($cardData) && empty($cardData))) {
            unset($this->CardData);
        } else {
            $this->CardData = $cardData;
        }

        return $this;
    }

    /**
     * Get Parameters value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Parameter|null
     */
    public function getParameters(): ?\Ntvspa\Big\Product\Structs\Parameter
    {
        return $this->Parameters ?? null;
    }

    /**
     * Set Parameters value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Parameter $parameters
     *
     * @return RetrieveBusinessPassCardResponse
     */
    public function setParameters(?\Ntvspa\Big\Product\Structs\Parameter $parameters = null): self
    {
        if (is_null($parameters) || (is_array($parameters) && empty($parameters))) {
            unset($this->Parameters);
        } else {
            $this->Parameters = $parameters;
        }

        return $this;
    }

    /**
     * Get Transactions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfTransaction|null
     */
    public function getTransactions(): ?ArrayOfTransaction
    {
        return $this->Transactions ?? null;
    }

    /**
     * Set Transactions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfTransaction $transactions
     *
     * @return RetrieveBusinessPassCardResponse
     */
    public function setTransactions(?ArrayOfTransaction $transactions = null): self
    {
        if (is_null($transactions) || (is_array($transactions) && empty($transactions))) {
            unset($this->Transactions);
        } else {
            $this->Transactions = $transactions;
        }

        return $this;
    }
}

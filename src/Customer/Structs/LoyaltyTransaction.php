<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Customer\Enums\TransactionTypeEnum;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoyaltyTransaction Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LoyaltyTransaction
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class LoyaltyTransaction extends AbstractStructBase
{
    /**
     * The TransactionDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $TransactionDate = null;
    /**
     * The TransactionType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $TransactionType = null;
    /**
     * The Points
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $Points = null;
    /**
     * The QualifyingPoints
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $QualifyingPoints = null;
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
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Status = null;
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
     * The RewardProduct
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $RewardProduct = null;
    /**
     * The PartnerName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PartnerName = null;
    /**
     * The Note
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Note = null;

    /**
     * Constructor method for LoyaltyTransaction
     *
     * @param string $transactionDate
     * @param string $transactionType
     * @param int    $points
     * @param int    $qualifyingPoints
     * @param string $transactionSubtype
     * @param string $status
     * @param string $pNR
     * @param string $rewardProduct
     * @param string $partnerName
     * @param string $note
     *
     * @uses LoyaltyTransaction::setTransactionDate()
     * @uses LoyaltyTransaction::setTransactionType()
     * @uses LoyaltyTransaction::setPoints()
     * @uses LoyaltyTransaction::setQualifyingPoints()
     * @uses LoyaltyTransaction::setTransactionSubtype()
     * @uses LoyaltyTransaction::setStatus()
     * @uses LoyaltyTransaction::setPNR()
     * @uses LoyaltyTransaction::setRewardProduct()
     * @uses LoyaltyTransaction::setPartnerName()
     * @uses LoyaltyTransaction::setNote()
     */
    public function __construct(?string $transactionDate = null, ?string $transactionType = null, ?int $points = null, ?int $qualifyingPoints = null, ?string $transactionSubtype = null, ?string $status = null, ?string $pNR = null, ?string $rewardProduct = null, ?string $partnerName = null, ?string $note = null)
    {
        $this
            ->setTransactionDate($transactionDate)
            ->setTransactionType($transactionType)
            ->setPoints($points)
            ->setQualifyingPoints($qualifyingPoints)
            ->setTransactionSubtype($transactionSubtype)
            ->setStatus($status)
            ->setPNR($pNR)
            ->setRewardProduct($rewardProduct)
            ->setPartnerName($partnerName)
            ->setNote($note);
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
     * @return LoyaltyTransaction
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
     * Get TransactionType value
     *
     * @return string|null
     */
    public function getTransactionType(): ?string
    {
        return $this->TransactionType;
    }

    /**
     * Set TransactionType value
     *
     * @param string $transactionType
     *
     * @return LoyaltyTransaction
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\TransactionTypeEnum::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\TransactionTypeEnum::valueIsValid()
     */
    public function setTransactionType(?string $transactionType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\TransactionTypeEnum::valueIsValid($transactionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\TransactionTypeEnum', is_array($transactionType) ? implode(', ', $transactionType) : var_export($transactionType, true), implode(', ', TransactionTypeEnum::getValidValues())), __LINE__);
        }
        $this->TransactionType = $transactionType;

        return $this;
    }

    /**
     * Get Points value
     *
     * @return int|null
     */
    public function getPoints(): ?int
    {
        return $this->Points;
    }

    /**
     * Set Points value
     *
     * @param int $points
     *
     * @return LoyaltyTransaction
     */
    public function setPoints(?int $points = null): self
    {
        // validation for constraint: int
        if (!is_null($points) && !(is_int($points) || ctype_digit($points))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($points, true), gettype($points)), __LINE__);
        }
        $this->Points = $points;

        return $this;
    }

    /**
     * Get QualifyingPoints value
     *
     * @return int|null
     */
    public function getQualifyingPoints(): ?int
    {
        return $this->QualifyingPoints;
    }

    /**
     * Set QualifyingPoints value
     *
     * @param int $qualifyingPoints
     *
     * @return LoyaltyTransaction
     */
    public function setQualifyingPoints(?int $qualifyingPoints = null): self
    {
        // validation for constraint: int
        if (!is_null($qualifyingPoints) && !(is_int($qualifyingPoints) || ctype_digit($qualifyingPoints))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($qualifyingPoints, true), gettype($qualifyingPoints)), __LINE__);
        }
        $this->QualifyingPoints = $qualifyingPoints;

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
     * @return LoyaltyTransaction
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
     * Get Status value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status ?? null;
    }

    /**
     * Set Status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $status
     *
     * @return LoyaltyTransaction
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->Status);
        } else {
            $this->Status = $status;
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
     * @return LoyaltyTransaction
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

    /**
     * Get RewardProduct value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getRewardProduct(): ?string
    {
        return $this->RewardProduct ?? null;
    }

    /**
     * Set RewardProduct value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $rewardProduct
     *
     * @return LoyaltyTransaction
     */
    public function setRewardProduct(?string $rewardProduct = null): self
    {
        // validation for constraint: string
        if (!is_null($rewardProduct) && !is_string($rewardProduct)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rewardProduct, true), gettype($rewardProduct)), __LINE__);
        }
        if (is_null($rewardProduct) || (is_array($rewardProduct) && empty($rewardProduct))) {
            unset($this->RewardProduct);
        } else {
            $this->RewardProduct = $rewardProduct;
        }

        return $this;
    }

    /**
     * Get PartnerName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPartnerName(): ?string
    {
        return $this->PartnerName ?? null;
    }

    /**
     * Set PartnerName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $partnerName
     *
     * @return LoyaltyTransaction
     */
    public function setPartnerName(?string $partnerName = null): self
    {
        // validation for constraint: string
        if (!is_null($partnerName) && !is_string($partnerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerName, true), gettype($partnerName)), __LINE__);
        }
        if (is_null($partnerName) || (is_array($partnerName) && empty($partnerName))) {
            unset($this->PartnerName);
        } else {
            $this->PartnerName = $partnerName;
        }

        return $this;
    }

    /**
     * Get Note value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->Note ?? null;
    }

    /**
     * Set Note value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $note
     *
     * @return LoyaltyTransaction
     */
    public function setNote(?string $note = null): self
    {
        // validation for constraint: string
        if (!is_null($note) && !is_string($note)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($note, true), gettype($note)), __LINE__);
        }
        if (is_null($note) || (is_array($note) && empty($note))) {
            unset($this->Note);
        } else {
            $this->Note = $note;
        }

        return $this;
    }
}

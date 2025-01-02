<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use Booking\Arrays\ArrayOfPaxFare;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Fare Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Fare
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Fare extends AbstractStructBase
{
    /**
     * The AvailableCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $AvailableCount = null;
    /**
     * The FullFarePrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $FullFarePrice = null;
    /**
     * The DiscountedFarePrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $DiscountedFarePrice = null;
    /**
     * The RowIndex
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $RowIndex = null;
    /**
     * The FareLockIsAllowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $FareLockIsAllowed = null;
    /**
     * The ClassOfService
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ClassOfService = null;
    /**
     * The ClassType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ClassType = null;
    /**
     * The RuleTariff
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $RuleTariff = null;
    /**
     * The RuleNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $RuleNumber = null;
    /**
     * The FareBasisCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FareBasisCode = null;
    /**
     * The FareSellKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FareSellKey = null;
    /**
     * The ProductClass
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ProductClass = null;
    /**
     * The PaxFares
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Booking\Arrays\ArrayOfPaxFare|null
     */
    protected ?ArrayOfPaxFare $PaxFares = null;
    /**
     * The ClassOfServiceName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ClassOfServiceName = null;
    /**
     * The FarePolicy
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var FarePolicy|null
     */
    protected ?\Ntvspa\Big\Booking\Structs\FarePolicy $FarePolicy = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The ProductClassDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ProductClassDescription = null;
    /**
     * The ProductClassName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ProductClassName = null;

    /**
     * Constructor method for Fare
     *
     * @param int                                       $availableCount
     * @param float                                     $fullFarePrice
     * @param float                                     $discountedFarePrice
     * @param int                                       $rowIndex
     * @param bool                                      $fareLockIsAllowed
     * @param string                                    $classOfService
     * @param string                                    $classType
     * @param string                                    $ruleTariff
     * @param string                                    $ruleNumber
     * @param string                                    $fareBasisCode
     * @param string                                    $fareSellKey
     * @param string                                    $productClass
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfPaxFare $paxFares
     * @param string                                    $classOfServiceName
     * @param FarePolicy                                $farePolicy
     * @param string                                    $description
     * @param string                                    $productClassDescription
     * @param string                                    $productClassName
     *
     * @uses Fare::setAvailableCount()
     * @uses Fare::setFullFarePrice()
     * @uses Fare::setDiscountedFarePrice()
     * @uses Fare::setRowIndex()
     * @uses Fare::setFareLockIsAllowed()
     * @uses Fare::setClassOfService()
     * @uses Fare::setClassType()
     * @uses Fare::setRuleTariff()
     * @uses Fare::setRuleNumber()
     * @uses Fare::setFareBasisCode()
     * @uses Fare::setFareSellKey()
     * @uses Fare::setProductClass()
     * @uses Fare::setPaxFares()
     * @uses Fare::setClassOfServiceName()
     * @uses Fare::setFarePolicy()
     * @uses Fare::setDescription()
     * @uses Fare::setProductClassDescription()
     * @uses Fare::setProductClassName()
     */
    public function __construct(?int $availableCount = null, ?float $fullFarePrice = null, ?float $discountedFarePrice = null, ?int $rowIndex = null, ?bool $fareLockIsAllowed = null, ?string $classOfService = null, ?string $classType = null, ?string $ruleTariff = null, ?string $ruleNumber = null, ?string $fareBasisCode = null, ?string $fareSellKey = null, ?string $productClass = null, ?ArrayOfPaxFare $paxFares = null, ?string $classOfServiceName = null, ?\Ntvspa\Big\Booking\Structs\FarePolicy $farePolicy = null, ?string $description = null, ?string $productClassDescription = null, ?string $productClassName = null)
    {
        $this
            ->setAvailableCount($availableCount)
            ->setFullFarePrice($fullFarePrice)
            ->setDiscountedFarePrice($discountedFarePrice)
            ->setRowIndex($rowIndex)
            ->setFareLockIsAllowed($fareLockIsAllowed)
            ->setClassOfService($classOfService)
            ->setClassType($classType)
            ->setRuleTariff($ruleTariff)
            ->setRuleNumber($ruleNumber)
            ->setFareBasisCode($fareBasisCode)
            ->setFareSellKey($fareSellKey)
            ->setProductClass($productClass)
            ->setPaxFares($paxFares)
            ->setClassOfServiceName($classOfServiceName)
            ->setFarePolicy($farePolicy)
            ->setDescription($description)
            ->setProductClassDescription($productClassDescription)
            ->setProductClassName($productClassName);
    }

    /**
     * Get AvailableCount value
     *
     * @return int|null
     */
    public function getAvailableCount(): ?int
    {
        return $this->AvailableCount;
    }

    /**
     * Set AvailableCount value
     *
     * @param int $availableCount
     *
     * @return Fare
     */
    public function setAvailableCount(?int $availableCount = null): self
    {
        // validation for constraint: int
        if (!is_null($availableCount) && !(is_int($availableCount) || ctype_digit($availableCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($availableCount, true), gettype($availableCount)), __LINE__);
        }
        $this->AvailableCount = $availableCount;

        return $this;
    }

    /**
     * Get FullFarePrice value
     *
     * @return float|null
     */
    public function getFullFarePrice(): ?float
    {
        return $this->FullFarePrice;
    }

    /**
     * Set FullFarePrice value
     *
     * @param float $fullFarePrice
     *
     * @return Fare
     */
    public function setFullFarePrice(?float $fullFarePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($fullFarePrice) && !(is_float($fullFarePrice) || is_numeric($fullFarePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($fullFarePrice, true), gettype($fullFarePrice)), __LINE__);
        }
        $this->FullFarePrice = $fullFarePrice;

        return $this;
    }

    /**
     * Get DiscountedFarePrice value
     *
     * @return float|null
     */
    public function getDiscountedFarePrice(): ?float
    {
        return $this->DiscountedFarePrice;
    }

    /**
     * Set DiscountedFarePrice value
     *
     * @param float $discountedFarePrice
     *
     * @return Fare
     */
    public function setDiscountedFarePrice(?float $discountedFarePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($discountedFarePrice) && !(is_float($discountedFarePrice) || is_numeric($discountedFarePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($discountedFarePrice, true), gettype($discountedFarePrice)), __LINE__);
        }
        $this->DiscountedFarePrice = $discountedFarePrice;

        return $this;
    }

    /**
     * Get RowIndex value
     *
     * @return int|null
     */
    public function getRowIndex(): ?int
    {
        return $this->RowIndex;
    }

    /**
     * Set RowIndex value
     *
     * @param int $rowIndex
     *
     * @return Fare
     */
    public function setRowIndex(?int $rowIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($rowIndex) && !(is_int($rowIndex) || ctype_digit($rowIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rowIndex, true), gettype($rowIndex)), __LINE__);
        }
        $this->RowIndex = $rowIndex;

        return $this;
    }

    /**
     * Get FareLockIsAllowed value
     *
     * @return bool|null
     */
    public function getFareLockIsAllowed(): ?bool
    {
        return $this->FareLockIsAllowed;
    }

    /**
     * Set FareLockIsAllowed value
     *
     * @param bool $fareLockIsAllowed
     *
     * @return Fare
     */
    public function setFareLockIsAllowed(?bool $fareLockIsAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($fareLockIsAllowed) && !is_bool($fareLockIsAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($fareLockIsAllowed, true), gettype($fareLockIsAllowed)), __LINE__);
        }
        $this->FareLockIsAllowed = $fareLockIsAllowed;

        return $this;
    }

    /**
     * Get ClassOfService value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getClassOfService(): ?string
    {
        return $this->ClassOfService ?? null;
    }

    /**
     * Set ClassOfService value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $classOfService
     *
     * @return Fare
     */
    public function setClassOfService(?string $classOfService = null): self
    {
        // validation for constraint: string
        if (!is_null($classOfService) && !is_string($classOfService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($classOfService, true), gettype($classOfService)), __LINE__);
        }
        if (is_null($classOfService) || (is_array($classOfService) && empty($classOfService))) {
            unset($this->ClassOfService);
        } else {
            $this->ClassOfService = $classOfService;
        }

        return $this;
    }

    /**
     * Get ClassType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getClassType(): ?string
    {
        return $this->ClassType ?? null;
    }

    /**
     * Set ClassType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $classType
     *
     * @return Fare
     */
    public function setClassType(?string $classType = null): self
    {
        // validation for constraint: string
        if (!is_null($classType) && !is_string($classType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($classType, true), gettype($classType)), __LINE__);
        }
        if (is_null($classType) || (is_array($classType) && empty($classType))) {
            unset($this->ClassType);
        } else {
            $this->ClassType = $classType;
        }

        return $this;
    }

    /**
     * Get RuleTariff value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getRuleTariff(): ?string
    {
        return $this->RuleTariff ?? null;
    }

    /**
     * Set RuleTariff value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $ruleTariff
     *
     * @return Fare
     */
    public function setRuleTariff(?string $ruleTariff = null): self
    {
        // validation for constraint: string
        if (!is_null($ruleTariff) && !is_string($ruleTariff)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ruleTariff, true), gettype($ruleTariff)), __LINE__);
        }
        if (is_null($ruleTariff) || (is_array($ruleTariff) && empty($ruleTariff))) {
            unset($this->RuleTariff);
        } else {
            $this->RuleTariff = $ruleTariff;
        }

        return $this;
    }

    /**
     * Get RuleNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getRuleNumber(): ?string
    {
        return $this->RuleNumber ?? null;
    }

    /**
     * Set RuleNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $ruleNumber
     *
     * @return Fare
     */
    public function setRuleNumber(?string $ruleNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($ruleNumber) && !is_string($ruleNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ruleNumber, true), gettype($ruleNumber)), __LINE__);
        }
        if (is_null($ruleNumber) || (is_array($ruleNumber) && empty($ruleNumber))) {
            unset($this->RuleNumber);
        } else {
            $this->RuleNumber = $ruleNumber;
        }

        return $this;
    }

    /**
     * Get FareBasisCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFareBasisCode(): ?string
    {
        return $this->FareBasisCode ?? null;
    }

    /**
     * Set FareBasisCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $fareBasisCode
     *
     * @return Fare
     */
    public function setFareBasisCode(?string $fareBasisCode = null): self
    {
        // validation for constraint: string
        if (!is_null($fareBasisCode) && !is_string($fareBasisCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareBasisCode, true), gettype($fareBasisCode)), __LINE__);
        }
        if (is_null($fareBasisCode) || (is_array($fareBasisCode) && empty($fareBasisCode))) {
            unset($this->FareBasisCode);
        } else {
            $this->FareBasisCode = $fareBasisCode;
        }

        return $this;
    }

    /**
     * Get FareSellKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getFareSellKey(): ?string
    {
        return $this->FareSellKey ?? null;
    }

    /**
     * Set FareSellKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $fareSellKey
     *
     * @return Fare
     */
    public function setFareSellKey(?string $fareSellKey = null): self
    {
        // validation for constraint: string
        if (!is_null($fareSellKey) && !is_string($fareSellKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareSellKey, true), gettype($fareSellKey)), __LINE__);
        }
        if (is_null($fareSellKey) || (is_array($fareSellKey) && empty($fareSellKey))) {
            unset($this->FareSellKey);
        } else {
            $this->FareSellKey = $fareSellKey;
        }

        return $this;
    }

    /**
     * Get ProductClass value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getProductClass(): ?string
    {
        return $this->ProductClass ?? null;
    }

    /**
     * Set ProductClass value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $productClass
     *
     * @return Fare
     */
    public function setProductClass(?string $productClass = null): self
    {
        // validation for constraint: string
        if (!is_null($productClass) && !is_string($productClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productClass, true), gettype($productClass)), __LINE__);
        }
        if (is_null($productClass) || (is_array($productClass) && empty($productClass))) {
            unset($this->ProductClass);
        } else {
            $this->ProductClass = $productClass;
        }

        return $this;
    }

    /**
     * Get PaxFares value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Booking\Arrays\ArrayOfPaxFare|null
     */
    public function getPaxFares(): ?ArrayOfPaxFare
    {
        return $this->PaxFares ?? null;
    }

    /**
     * Set PaxFares value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Booking\Arrays\ArrayOfPaxFare $paxFares
     *
     * @return Fare
     */
    public function setPaxFares(?ArrayOfPaxFare $paxFares = null): self
    {
        if (is_null($paxFares) || (is_array($paxFares) && empty($paxFares))) {
            unset($this->PaxFares);
        } else {
            $this->PaxFares = $paxFares;
        }

        return $this;
    }

    /**
     * Get ClassOfServiceName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getClassOfServiceName(): ?string
    {
        return $this->ClassOfServiceName ?? null;
    }

    /**
     * Set ClassOfServiceName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $classOfServiceName
     *
     * @return Fare
     */
    public function setClassOfServiceName(?string $classOfServiceName = null): self
    {
        // validation for constraint: string
        if (!is_null($classOfServiceName) && !is_string($classOfServiceName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($classOfServiceName, true), gettype($classOfServiceName)), __LINE__);
        }
        if (is_null($classOfServiceName) || (is_array($classOfServiceName) && empty($classOfServiceName))) {
            unset($this->ClassOfServiceName);
        } else {
            $this->ClassOfServiceName = $classOfServiceName;
        }

        return $this;
    }

    /**
     * Get FarePolicy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return FarePolicy|null
     */
    public function getFarePolicy(): ?\Ntvspa\Big\Booking\Structs\FarePolicy
    {
        return $this->FarePolicy ?? null;
    }

    /**
     * Set FarePolicy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param FarePolicy $farePolicy
     *
     * @return Fare
     */
    public function setFarePolicy(?\Ntvspa\Big\Booking\Structs\FarePolicy $farePolicy = null): self
    {
        if (is_null($farePolicy) || (is_array($farePolicy) && empty($farePolicy))) {
            unset($this->FarePolicy);
        } else {
            $this->FarePolicy = $farePolicy;
        }

        return $this;
    }

    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description ?? null;
    }

    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $description
     *
     * @return Fare
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }

        return $this;
    }

    /**
     * Get ProductClassDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getProductClassDescription(): ?string
    {
        return $this->ProductClassDescription ?? null;
    }

    /**
     * Set ProductClassDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $productClassDescription
     *
     * @return Fare
     */
    public function setProductClassDescription(?string $productClassDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($productClassDescription) && !is_string($productClassDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productClassDescription, true), gettype($productClassDescription)), __LINE__);
        }
        if (is_null($productClassDescription) || (is_array($productClassDescription) && empty($productClassDescription))) {
            unset($this->ProductClassDescription);
        } else {
            $this->ProductClassDescription = $productClassDescription;
        }

        return $this;
    }

    /**
     * Get ProductClassName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getProductClassName(): ?string
    {
        return $this->ProductClassName ?? null;
    }

    /**
     * Set ProductClassName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $productClassName
     *
     * @return Fare
     */
    public function setProductClassName(?string $productClassName = null): self
    {
        // validation for constraint: string
        if (!is_null($productClassName) && !is_string($productClassName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productClassName, true), gettype($productClassName)), __LINE__);
        }
        if (is_null($productClassName) || (is_array($productClassName) && empty($productClassName))) {
            unset($this->ProductClassName);
        } else {
            $this->ProductClassName = $productClassName;
        }

        return $this;
    }
}

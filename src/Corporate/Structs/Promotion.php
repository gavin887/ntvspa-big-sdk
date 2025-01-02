<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use Corporate\Arrays\ArrayOfMarket;
use Corporate\Arrays\ArrayOfProperty;
use Corporate\Arrays\ArrayOfstring;
use InvalidArgumentException;
use Ntvspa\Big\Corporate\Enums\ActionType;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Promotion Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Promotion
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Promotion extends AbstractStructBase
{
    /**
     * The Action
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $Action = null;
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
     * The AmountResponse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $AmountResponse = null;
    /**
     * The PromotionId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PromotionId = null;
    /**
     * The PromotionName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PromotionName = null;
    /**
     * The DisplayedTextIta
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DisplayedTextIta = null;
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
     * The ClusterTarget
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ClusterTarget = null;
    /**
     * The Limit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var int|null
     */
    protected ?int $Limit = null;
    /**
     * The UrlImage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $UrlImage = null;
    /**
     * The Attributes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Corporate\Arrays\ArrayOfProperty|null
     */
    protected ?ArrayOfProperty $Attributes = null;
    /**
     * The Fares
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Corporate\Arrays\ArrayOfstring|null
     */
    protected ?ArrayOfstring $Fares = null;
    /**
     * The Markets
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Corporate\Arrays\ArrayOfMarket|null
     */
    protected ?ArrayOfMarket $Markets = null;

    /**
     * Constructor method for Promotion
     *
     * @param string                                       $action
     * @param string                                       $startDate
     * @param string                                       $endDate
     * @param int                                          $amountResponse
     * @param string                                       $promotionId
     * @param string                                       $promotionName
     * @param string                                       $displayedTextIta
     * @param string                                       $description
     * @param string                                       $clusterTarget
     * @param int                                          $limit
     * @param string                                       $urlImage
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfProperty $attributes
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfstring   $fares
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfMarket   $markets
     *
     * @uses Promotion::setAction()
     * @uses Promotion::setStartDate()
     * @uses Promotion::setEndDate()
     * @uses Promotion::setAmountResponse()
     * @uses Promotion::setPromotionId()
     * @uses Promotion::setPromotionName()
     * @uses Promotion::setDisplayedTextIta()
     * @uses Promotion::setDescription()
     * @uses Promotion::setClusterTarget()
     * @uses Promotion::setLimit()
     * @uses Promotion::setUrlImage()
     * @uses Promotion::setAttributes()
     * @uses Promotion::setFares()
     * @uses Promotion::setMarkets()
     */
    public function __construct(?string $action = null, ?string $startDate = null, ?string $endDate = null, ?int $amountResponse = null, ?string $promotionId = null, ?string $promotionName = null, ?string $displayedTextIta = null, ?string $description = null, ?string $clusterTarget = null, ?int $limit = null, ?string $urlImage = null, ?ArrayOfProperty $attributes = null, ?ArrayOfstring $fares = null, ?ArrayOfMarket $markets = null)
    {
        $this
            ->setAction($action)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setAmountResponse($amountResponse)
            ->setPromotionId($promotionId)
            ->setPromotionName($promotionName)
            ->setDisplayedTextIta($displayedTextIta)
            ->setDescription($description)
            ->setClusterTarget($clusterTarget)
            ->setLimit($limit)
            ->setUrlImage($urlImage)
            ->setAttributes($attributes)
            ->setFares($fares)
            ->setMarkets($markets);
    }

    /**
     * Get Action value
     *
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->Action;
    }

    /**
     * Set Action value
     *
     * @param string $action
     *
     * @return Promotion
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Corporate\Enums\ActionType::getValidValues()
     * @uses \Ntvspa\Big\Corporate\Enums\ActionType::valueIsValid()
     */
    public function setAction(?string $action = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Corporate\Enums\ActionType::valueIsValid($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Corporate\Enums\ActionType', is_array($action) ? implode(', ', $action) : var_export($action, true), implode(', ', ActionType::getValidValues())), __LINE__);
        }
        $this->Action = $action;

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
     * @return Promotion
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
     * @return Promotion
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
     * Get AmountResponse value
     *
     * @return int|null
     */
    public function getAmountResponse(): ?int
    {
        return $this->AmountResponse;
    }

    /**
     * Set AmountResponse value
     *
     * @param int $amountResponse
     *
     * @return Promotion
     */
    public function setAmountResponse(?int $amountResponse = null): self
    {
        // validation for constraint: int
        if (!is_null($amountResponse) && !(is_int($amountResponse) || ctype_digit($amountResponse))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($amountResponse, true), gettype($amountResponse)), __LINE__);
        }
        $this->AmountResponse = $amountResponse;

        return $this;
    }

    /**
     * Get PromotionId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPromotionId(): ?string
    {
        return $this->PromotionId ?? null;
    }

    /**
     * Set PromotionId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $promotionId
     *
     * @return Promotion
     */
    public function setPromotionId(?string $promotionId = null): self
    {
        // validation for constraint: string
        if (!is_null($promotionId) && !is_string($promotionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotionId, true), gettype($promotionId)), __LINE__);
        }
        if (is_null($promotionId) || (is_array($promotionId) && empty($promotionId))) {
            unset($this->PromotionId);
        } else {
            $this->PromotionId = $promotionId;
        }

        return $this;
    }

    /**
     * Get PromotionName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPromotionName(): ?string
    {
        return $this->PromotionName ?? null;
    }

    /**
     * Set PromotionName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $promotionName
     *
     * @return Promotion
     */
    public function setPromotionName(?string $promotionName = null): self
    {
        // validation for constraint: string
        if (!is_null($promotionName) && !is_string($promotionName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotionName, true), gettype($promotionName)), __LINE__);
        }
        if (is_null($promotionName) || (is_array($promotionName) && empty($promotionName))) {
            unset($this->PromotionName);
        } else {
            $this->PromotionName = $promotionName;
        }

        return $this;
    }

    /**
     * Get DisplayedTextIta value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDisplayedTextIta(): ?string
    {
        return $this->DisplayedTextIta ?? null;
    }

    /**
     * Set DisplayedTextIta value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $displayedTextIta
     *
     * @return Promotion
     */
    public function setDisplayedTextIta(?string $displayedTextIta = null): self
    {
        // validation for constraint: string
        if (!is_null($displayedTextIta) && !is_string($displayedTextIta)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayedTextIta, true), gettype($displayedTextIta)), __LINE__);
        }
        if (is_null($displayedTextIta) || (is_array($displayedTextIta) && empty($displayedTextIta))) {
            unset($this->DisplayedTextIta);
        } else {
            $this->DisplayedTextIta = $displayedTextIta;
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
     * @return Promotion
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
     * Get ClusterTarget value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getClusterTarget(): ?string
    {
        return $this->ClusterTarget ?? null;
    }

    /**
     * Set ClusterTarget value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $clusterTarget
     *
     * @return Promotion
     */
    public function setClusterTarget(?string $clusterTarget = null): self
    {
        // validation for constraint: string
        if (!is_null($clusterTarget) && !is_string($clusterTarget)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clusterTarget, true), gettype($clusterTarget)), __LINE__);
        }
        if (is_null($clusterTarget) || (is_array($clusterTarget) && empty($clusterTarget))) {
            unset($this->ClusterTarget);
        } else {
            $this->ClusterTarget = $clusterTarget;
        }

        return $this;
    }

    /**
     * Get Limit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return int|null
     */
    public function getLimit(): ?int
    {
        return $this->Limit ?? null;
    }

    /**
     * Set Limit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param int $limit
     *
     * @return Promotion
     */
    public function setLimit(?int $limit = null): self
    {
        // validation for constraint: int
        if (!is_null($limit) && !(is_int($limit) || ctype_digit($limit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($limit, true), gettype($limit)), __LINE__);
        }
        if (is_null($limit) || (is_array($limit) && empty($limit))) {
            unset($this->Limit);
        } else {
            $this->Limit = $limit;
        }

        return $this;
    }

    /**
     * Get UrlImage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getUrlImage(): ?string
    {
        return $this->UrlImage ?? null;
    }

    /**
     * Set UrlImage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $urlImage
     *
     * @return Promotion
     */
    public function setUrlImage(?string $urlImage = null): self
    {
        // validation for constraint: string
        if (!is_null($urlImage) && !is_string($urlImage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($urlImage, true), gettype($urlImage)), __LINE__);
        }
        if (is_null($urlImage) || (is_array($urlImage) && empty($urlImage))) {
            unset($this->UrlImage);
        } else {
            $this->UrlImage = $urlImage;
        }

        return $this;
    }

    /**
     * Get Attributes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Corporate\Arrays\ArrayOfProperty|null
     */
    public function getAttributes(): ?ArrayOfProperty
    {
        return $this->Attributes ?? null;
    }

    /**
     * Set Attributes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfProperty $attributes
     *
     * @return Promotion
     */
    public function setAttributes(?ArrayOfProperty $attributes = null): self
    {
        if (is_null($attributes) || (is_array($attributes) && empty($attributes))) {
            unset($this->Attributes);
        } else {
            $this->Attributes = $attributes;
        }

        return $this;
    }

    /**
     * Get Fares value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Corporate\Arrays\ArrayOfstring|null
     */
    public function getFares(): ?ArrayOfstring
    {
        return $this->Fares ?? null;
    }

    /**
     * Set Fares value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfstring $fares
     *
     * @return Promotion
     */
    public function setFares(?ArrayOfstring $fares = null): self
    {
        if (is_null($fares) || (is_array($fares) && empty($fares))) {
            unset($this->Fares);
        } else {
            $this->Fares = $fares;
        }

        return $this;
    }

    /**
     * Get Markets value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Corporate\Arrays\ArrayOfMarket|null
     */
    public function getMarkets(): ?ArrayOfMarket
    {
        return $this->Markets ?? null;
    }

    /**
     * Set Markets value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Corporate\Arrays\ArrayOfMarket $markets
     *
     * @return Promotion
     */
    public function setMarkets(?ArrayOfMarket $markets = null): self
    {
        if (is_null($markets) || (is_array($markets) && empty($markets))) {
            unset($this->Markets);
        } else {
            $this->Markets = $markets;
        }

        return $this;
    }
}

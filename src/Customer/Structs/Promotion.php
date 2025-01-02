<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Structs;

use AllowDynamicProperties;
use Customer\Arrays\ArrayOfProperty;
use InvalidArgumentException;
use Ntvspa\Big\Customer\Enums\PromotionType;
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
     * The PromotionType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $PromotionType = null;
    /**
     * The Expiration
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $Expiration = null;
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
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Name = null;
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
     * The DisplayedTextIta
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DisplayedTextIta = null;
    /**
     * The DisplayedTextEng
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DisplayedTextEng = null;
    /**
     * The Properties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Customer\Arrays\ArrayOfProperty|null
     */
    protected ?ArrayOfProperty $Properties = null;

    /**
     * Constructor method for Promotion
     *
     * @param string                                      $promotionType
     * @param string                                      $expiration
     * @param string                                      $promotionId
     * @param string                                      $name
     * @param string                                      $description
     * @param string                                      $displayedTextIta
     * @param string                                      $displayedTextEng
     * @param \Ntvspa\Big\Customer\Arrays\ArrayOfProperty $properties
     *
     * @uses Promotion::setPromotionType()
     * @uses Promotion::setExpiration()
     * @uses Promotion::setPromotionId()
     * @uses Promotion::setName()
     * @uses Promotion::setDescription()
     * @uses Promotion::setDisplayedTextIta()
     * @uses Promotion::setDisplayedTextEng()
     * @uses Promotion::setProperties()
     */
    public function __construct(?string $promotionType = null, ?string $expiration = null, ?string $promotionId = null, ?string $name = null, ?string $description = null, ?string $displayedTextIta = null, ?string $displayedTextEng = null, ?ArrayOfProperty $properties = null)
    {
        $this
            ->setPromotionType($promotionType)
            ->setExpiration($expiration)
            ->setPromotionId($promotionId)
            ->setName($name)
            ->setDescription($description)
            ->setDisplayedTextIta($displayedTextIta)
            ->setDisplayedTextEng($displayedTextEng)
            ->setProperties($properties);
    }

    /**
     * Get PromotionType value
     *
     * @return string|null
     */
    public function getPromotionType(): ?string
    {
        return $this->PromotionType;
    }

    /**
     * Set PromotionType value
     *
     * @param string $promotionType
     *
     * @return Promotion
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Customer\Enums\PromotionType::getValidValues()
     * @uses \Ntvspa\Big\Customer\Enums\PromotionType::valueIsValid()
     */
    public function setPromotionType(?string $promotionType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Customer\Enums\PromotionType::valueIsValid($promotionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Customer\Enums\PromotionType', is_array($promotionType) ? implode(', ', $promotionType) : var_export($promotionType, true), implode(', ', PromotionType::getValidValues())), __LINE__);
        }
        $this->PromotionType = $promotionType;

        return $this;
    }

    /**
     * Get Expiration value
     *
     * @return string|null
     */
    public function getExpiration(): ?string
    {
        return $this->Expiration;
    }

    /**
     * Set Expiration value
     *
     * @param string $expiration
     *
     * @return Promotion
     */
    public function setExpiration(?string $expiration = null): self
    {
        // validation for constraint: string
        if (!is_null($expiration) && !is_string($expiration)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiration, true), gettype($expiration)), __LINE__);
        }
        $this->Expiration = $expiration;

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
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $name
     *
     * @return Promotion
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
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
     * Get DisplayedTextEng value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDisplayedTextEng(): ?string
    {
        return $this->DisplayedTextEng ?? null;
    }

    /**
     * Set DisplayedTextEng value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $displayedTextEng
     *
     * @return Promotion
     */
    public function setDisplayedTextEng(?string $displayedTextEng = null): self
    {
        // validation for constraint: string
        if (!is_null($displayedTextEng) && !is_string($displayedTextEng)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayedTextEng, true), gettype($displayedTextEng)), __LINE__);
        }
        if (is_null($displayedTextEng) || (is_array($displayedTextEng) && empty($displayedTextEng))) {
            unset($this->DisplayedTextEng);
        } else {
            $this->DisplayedTextEng = $displayedTextEng;
        }

        return $this;
    }

    /**
     * Get Properties value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Customer\Arrays\ArrayOfProperty|null
     */
    public function getProperties(): ?ArrayOfProperty
    {
        return $this->Properties ?? null;
    }

    /**
     * Set Properties value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Customer\Arrays\ArrayOfProperty $properties
     *
     * @return Promotion
     */
    public function setProperties(?ArrayOfProperty $properties = null): self
    {
        if (is_null($properties) || (is_array($properties) && empty($properties))) {
            unset($this->Properties);
        } else {
            $this->Properties = $properties;
        }

        return $this;
    }
}

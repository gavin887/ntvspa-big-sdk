<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Service Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Service
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Service extends AbstractStructBase
{
    /**
     * The ServiceTitle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ServiceTitle = null;
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
     * The ImageURL
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ImageURL = null;
    /**
     * The StoreURL
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $StoreURL = null;

    /**
     * Constructor method for Service
     *
     * @param string $serviceTitle
     * @param string $description
     * @param string $imageURL
     * @param string $storeURL
     *
     * @uses Service::setServiceTitle()
     * @uses Service::setDescription()
     * @uses Service::setImageURL()
     * @uses Service::setStoreURL()
     */
    public function __construct(?string $serviceTitle = null, ?string $description = null, ?string $imageURL = null, ?string $storeURL = null)
    {
        $this
            ->setServiceTitle($serviceTitle)
            ->setDescription($description)
            ->setImageURL($imageURL)
            ->setStoreURL($storeURL);
    }

    /**
     * Get ServiceTitle value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getServiceTitle(): ?string
    {
        return $this->ServiceTitle ?? null;
    }

    /**
     * Set ServiceTitle value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $serviceTitle
     *
     * @return Service
     */
    public function setServiceTitle(?string $serviceTitle = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceTitle) && !is_string($serviceTitle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceTitle, true), gettype($serviceTitle)), __LINE__);
        }
        if (is_null($serviceTitle) || (is_array($serviceTitle) && empty($serviceTitle))) {
            unset($this->ServiceTitle);
        } else {
            $this->ServiceTitle = $serviceTitle;
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
     * @return Service
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
     * Get ImageURL value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getImageURL(): ?string
    {
        return $this->ImageURL ?? null;
    }

    /**
     * Set ImageURL value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $imageURL
     *
     * @return Service
     */
    public function setImageURL(?string $imageURL = null): self
    {
        // validation for constraint: string
        if (!is_null($imageURL) && !is_string($imageURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imageURL, true), gettype($imageURL)), __LINE__);
        }
        if (is_null($imageURL) || (is_array($imageURL) && empty($imageURL))) {
            unset($this->ImageURL);
        } else {
            $this->ImageURL = $imageURL;
        }

        return $this;
    }

    /**
     * Get StoreURL value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getStoreURL(): ?string
    {
        return $this->StoreURL ?? null;
    }

    /**
     * Set StoreURL value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $storeURL
     *
     * @return Service
     */
    public function setStoreURL(?string $storeURL = null): self
    {
        // validation for constraint: string
        if (!is_null($storeURL) && !is_string($storeURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storeURL, true), gettype($storeURL)), __LINE__);
        }
        if (is_null($storeURL) || (is_array($storeURL) && empty($storeURL))) {
            unset($this->StoreURL);
        } else {
            $this->StoreURL = $storeURL;
        }

        return $this;
    }
}

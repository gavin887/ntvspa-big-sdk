<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Travel\Arrays\ArrayOfService;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Category Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Category
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Category extends AbstractStructBase
{
    /**
     * The CategoryName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CategoryName = null;
    /**
     * The IconURL
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $IconURL = null;
    /**
     * The Services
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Travel\Arrays\ArrayOfService|null
     */
    protected ?ArrayOfService $Services = null;

    /**
     * Constructor method for Category
     *
     * @param string                                   $categoryName
     * @param string                                   $iconURL
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfService $services
     *
     * @uses Category::setCategoryName()
     * @uses Category::setIconURL()
     * @uses Category::setServices()
     */
    public function __construct(?string $categoryName = null, ?string $iconURL = null, ?ArrayOfService $services = null)
    {
        $this
            ->setCategoryName($categoryName)
            ->setIconURL($iconURL)
            ->setServices($services);
    }

    /**
     * Get CategoryName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCategoryName(): ?string
    {
        return $this->CategoryName ?? null;
    }

    /**
     * Set CategoryName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $categoryName
     *
     * @return Category
     */
    public function setCategoryName(?string $categoryName = null): self
    {
        // validation for constraint: string
        if (!is_null($categoryName) && !is_string($categoryName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryName, true), gettype($categoryName)), __LINE__);
        }
        if (is_null($categoryName) || (is_array($categoryName) && empty($categoryName))) {
            unset($this->CategoryName);
        } else {
            $this->CategoryName = $categoryName;
        }

        return $this;
    }

    /**
     * Get IconURL value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getIconURL(): ?string
    {
        return $this->IconURL ?? null;
    }

    /**
     * Set IconURL value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $iconURL
     *
     * @return Category
     */
    public function setIconURL(?string $iconURL = null): self
    {
        // validation for constraint: string
        if (!is_null($iconURL) && !is_string($iconURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iconURL, true), gettype($iconURL)), __LINE__);
        }
        if (is_null($iconURL) || (is_array($iconURL) && empty($iconURL))) {
            unset($this->IconURL);
        } else {
            $this->IconURL = $iconURL;
        }

        return $this;
    }

    /**
     * Get Services value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Travel\Arrays\ArrayOfService|null
     */
    public function getServices(): ?ArrayOfService
    {
        return $this->Services ?? null;
    }

    /**
     * Set Services value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfService $services
     *
     * @return Category
     */
    public function setServices(?ArrayOfService $services = null): self
    {
        if (is_null($services) || (is_array($services) && empty($services))) {
            unset($this->Services);
        } else {
            $this->Services = $services;
        }

        return $this;
    }
}

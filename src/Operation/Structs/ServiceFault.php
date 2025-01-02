<?php

declare(strict_types=1);

namespace Ntvspa\Big\Operation\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Operation\Enums\BIGExceptionCategory;

/**
 * This class stands for ServiceFault Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ServiceFault
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ServiceFault extends ExceptionInfo
{
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $Category = null;

    /**
     * Constructor method for ServiceFault
     *
     * @param string $category
     *
     * @uses ServiceFault::setCategory()
     */
    public function __construct(?string $category = null)
    {
        $this
            ->setCategory($category);
    }

    /**
     * Get Category value
     *
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->Category;
    }

    /**
     * Set Category value
     *
     * @param string $category
     *
     * @return ServiceFault
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Operation\Enums\BIGExceptionCategory::getValidValues()
     * @uses \Ntvspa\Big\Operation\Enums\BIGExceptionCategory::valueIsValid()
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Operation\Enums\BIGExceptionCategory::valueIsValid($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Operation\Enums\BIGExceptionCategory', is_array($category) ? implode(', ', $category) : var_export($category, true), implode(', ', BIGExceptionCategory::getValidValues())), __LINE__);
        }
        $this->Category = $category;

        return $this;
    }
}

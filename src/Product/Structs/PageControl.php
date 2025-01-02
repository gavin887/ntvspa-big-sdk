<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PageControl Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PageControl
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class PageControl extends AbstractStructBase
{
    /**
     * The PageSize
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $PageSize = null;
    /**
     * The StartRowNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $StartRowNumber = null;

    /**
     * Constructor method for PageControl
     *
     * @param int $pageSize
     * @param int $startRowNumber
     *
     * @uses PageControl::setPageSize()
     * @uses PageControl::setStartRowNumber()
     */
    public function __construct(?int $pageSize = null, ?int $startRowNumber = null)
    {
        $this
            ->setPageSize($pageSize)
            ->setStartRowNumber($startRowNumber);
    }

    /**
     * Get PageSize value
     *
     * @return int|null
     */
    public function getPageSize(): ?int
    {
        return $this->PageSize;
    }

    /**
     * Set PageSize value
     *
     * @param int $pageSize
     *
     * @return PageControl
     */
    public function setPageSize(?int $pageSize = null): self
    {
        // validation for constraint: int
        if (!is_null($pageSize) && !(is_int($pageSize) || ctype_digit($pageSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageSize, true), gettype($pageSize)), __LINE__);
        }
        $this->PageSize = $pageSize;

        return $this;
    }

    /**
     * Get StartRowNumber value
     *
     * @return int|null
     */
    public function getStartRowNumber(): ?int
    {
        return $this->StartRowNumber;
    }

    /**
     * Set StartRowNumber value
     *
     * @param int $startRowNumber
     *
     * @return PageControl
     */
    public function setStartRowNumber(?int $startRowNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($startRowNumber) && !(is_int($startRowNumber) || ctype_digit($startRowNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($startRowNumber, true), gettype($startRowNumber)), __LINE__);
        }
        $this->StartRowNumber = $startRowNumber;

        return $this;
    }
}

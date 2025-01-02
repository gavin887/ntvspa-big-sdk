<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PagingControl Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PagingControl
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class PagingControl extends AbstractStructBase
{
    /**
     * The StartRowNumber
     *
     * @var int|null
     */
    protected ?int $StartRowNumber = null;
    /**
     * The Pagesize
     *
     * @var int|null
     */
    protected ?int $Pagesize = null;
    /**
     * The LastPage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $LastPage = null;

    /**
     * Constructor method for PagingControl
     *
     * @param int  $startRowNumber
     * @param int  $pagesize
     * @param bool $lastPage
     *
     * @uses PagingControl::setStartRowNumber()
     * @uses PagingControl::setPagesize()
     * @uses PagingControl::setLastPage()
     */
    public function __construct(?int $startRowNumber = null, ?int $pagesize = null, ?bool $lastPage = null)
    {
        $this
            ->setStartRowNumber($startRowNumber)
            ->setPagesize($pagesize)
            ->setLastPage($lastPage);
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
     * @return PagingControl
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

    /**
     * Get Pagesize value
     *
     * @return int|null
     */
    public function getPagesize(): ?int
    {
        return $this->Pagesize;
    }

    /**
     * Set Pagesize value
     *
     * @param int $pagesize
     *
     * @return PagingControl
     */
    public function setPagesize(?int $pagesize = null): self
    {
        // validation for constraint: int
        if (!is_null($pagesize) && !(is_int($pagesize) || ctype_digit($pagesize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pagesize, true), gettype($pagesize)), __LINE__);
        }
        $this->Pagesize = $pagesize;

        return $this;
    }

    /**
     * Get LastPage value
     *
     * @return bool|null
     */
    public function getLastPage(): ?bool
    {
        return $this->LastPage;
    }

    /**
     * Set LastPage value
     *
     * @param bool $lastPage
     *
     * @return PagingControl
     */
    public function setLastPage(?bool $lastPage = null): self
    {
        // validation for constraint: boolean
        if (!is_null($lastPage) && !is_bool($lastPage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($lastPage, true), gettype($lastPage)), __LINE__);
        }
        $this->LastPage = $lastPage;

        return $this;
    }
}

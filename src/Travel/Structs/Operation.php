<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Operation Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Operation
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Operation extends AbstractStructBase
{
    /**
     * The LastUpdate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $LastUpdate = null;

    /**
     * Constructor method for Operation
     *
     * @param string $lastUpdate
     *
     * @uses Operation::setLastUpdate()
     */
    public function __construct(?string $lastUpdate = null)
    {
        $this
            ->setLastUpdate($lastUpdate);
    }

    /**
     * Get LastUpdate value
     *
     * @return string|null
     */
    public function getLastUpdate(): ?string
    {
        return $this->LastUpdate;
    }

    /**
     * Set LastUpdate value
     *
     * @param string $lastUpdate
     *
     * @return Operation
     */
    public function setLastUpdate(?string $lastUpdate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastUpdate) && !is_string($lastUpdate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastUpdate, true), gettype($lastUpdate)), __LINE__);
        }
        $this->LastUpdate = $lastUpdate;

        return $this;
    }
}

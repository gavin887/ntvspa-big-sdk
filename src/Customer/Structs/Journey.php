<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Journey Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Journey
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Journey extends AbstractStructBase
{
    /**
     * The JourneySellKey
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $JourneySellKey = null;

    /**
     * Constructor method for Journey
     *
     * @param string $journeySellKey
     *
     * @uses Journey::setJourneySellKey()
     */
    public function __construct(?string $journeySellKey = null)
    {
        $this
            ->setJourneySellKey($journeySellKey);
    }

    /**
     * Get JourneySellKey value
     *
     * @return string|null
     */
    public function getJourneySellKey(): ?string
    {
        return $this->JourneySellKey;
    }

    /**
     * Set JourneySellKey value
     *
     * @param string $journeySellKey
     *
     * @return Journey
     */
    public function setJourneySellKey(?string $journeySellKey = null): self
    {
        // validation for constraint: string
        if (!is_null($journeySellKey) && !is_string($journeySellKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($journeySellKey, true), gettype($journeySellKey)), __LINE__);
        }
        $this->JourneySellKey = $journeySellKey;

        return $this;
    }
}

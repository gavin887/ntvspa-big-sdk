<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SegmentSeat Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SegmentSeat
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class SegmentSeat extends AbstractStructBase
{
    /**
     * The CompartmentDesignator
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CompartmentDesignator = null;
    /**
     * The UnitDesignator
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $UnitDesignator = null;

    /**
     * Constructor method for SegmentSeat
     *
     * @param string $compartmentDesignator
     * @param string $unitDesignator
     *
     * @uses SegmentSeat::setCompartmentDesignator()
     * @uses SegmentSeat::setUnitDesignator()
     */
    public function __construct(?string $compartmentDesignator = null, ?string $unitDesignator = null)
    {
        $this
            ->setCompartmentDesignator($compartmentDesignator)
            ->setUnitDesignator($unitDesignator);
    }

    /**
     * Get CompartmentDesignator value
     *
     * @return string|null
     */
    public function getCompartmentDesignator(): ?string
    {
        return $this->CompartmentDesignator;
    }

    /**
     * Set CompartmentDesignator value
     *
     * @param string $compartmentDesignator
     *
     * @return SegmentSeat
     */
    public function setCompartmentDesignator(?string $compartmentDesignator = null): self
    {
        // validation for constraint: string
        if (!is_null($compartmentDesignator) && !is_string($compartmentDesignator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($compartmentDesignator, true), gettype($compartmentDesignator)), __LINE__);
        }
        $this->CompartmentDesignator = $compartmentDesignator;

        return $this;
    }

    /**
     * Get UnitDesignator value
     *
     * @return string|null
     */
    public function getUnitDesignator(): ?string
    {
        return $this->UnitDesignator;
    }

    /**
     * Set UnitDesignator value
     *
     * @param string $unitDesignator
     *
     * @return SegmentSeat
     */
    public function setUnitDesignator(?string $unitDesignator = null): self
    {
        // validation for constraint: string
        if (!is_null($unitDesignator) && !is_string($unitDesignator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitDesignator, true), gettype($unitDesignator)), __LINE__);
        }
        $this->UnitDesignator = $unitDesignator;

        return $this;
    }
}

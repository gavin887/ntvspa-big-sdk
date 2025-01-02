<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Corporate\Enums\DaysOfWeekTypeEnum;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BlackDayOfWeek Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BlackDayOfWeek
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class BlackDayOfWeek extends AbstractStructBase
{
    /**
     * The DayOfWeek
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $DayOfWeek = null;

    /**
     * Constructor method for BlackDayOfWeek
     *
     * @param string $dayOfWeek
     *
     * @uses BlackDayOfWeek::setDayOfWeek()
     */
    public function __construct(?string $dayOfWeek = null)
    {
        $this
            ->setDayOfWeek($dayOfWeek);
    }

    /**
     * Get DayOfWeek value
     *
     * @return string|null
     */
    public function getDayOfWeek(): ?string
    {
        return $this->DayOfWeek;
    }

    /**
     * Set DayOfWeek value
     *
     * @param string $dayOfWeek
     *
     * @return BlackDayOfWeek
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Corporate\Enums\DaysOfWeekTypeEnum::getValidValues()
     * @uses \Ntvspa\Big\Corporate\Enums\DaysOfWeekTypeEnum::valueIsValid()
     */
    public function setDayOfWeek(?string $dayOfWeek = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Corporate\Enums\DaysOfWeekTypeEnum::valueIsValid($dayOfWeek)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Corporate\Enums\DaysOfWeekTypeEnum', is_array($dayOfWeek) ? implode(', ', $dayOfWeek) : var_export($dayOfWeek, true), implode(', ', DaysOfWeekTypeEnum::getValidValues())), __LINE__);
        }
        $this->DayOfWeek = $dayOfWeek;

        return $this;
    }
}

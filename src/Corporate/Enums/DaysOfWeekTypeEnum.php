<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DaysOfWeekTypeEnum Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DaysOfWeekTypeEnum
 *
 * @subpackage Enumerations
 */
class DaysOfWeekTypeEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Monday'
     *
     * @return string 'Monday'
     */
    const VALUE_MONDAY = 'Monday';
    /**
     * Constant for value 'Tuesday'
     *
     * @return string 'Tuesday'
     */
    const VALUE_TUESDAY = 'Tuesday';
    /**
     * Constant for value 'Wednesday'
     *
     * @return string 'Wednesday'
     */
    const VALUE_WEDNESDAY = 'Wednesday';
    /**
     * Constant for value 'Thursday'
     *
     * @return string 'Thursday'
     */
    const VALUE_THURSDAY = 'Thursday';
    /**
     * Constant for value 'Friday'
     *
     * @return string 'Friday'
     */
    const VALUE_FRIDAY = 'Friday';
    /**
     * Constant for value 'Saturday'
     *
     * @return string 'Saturday'
     */
    const VALUE_SATURDAY = 'Saturday';
    /**
     * Constant for value 'Sunday'
     *
     * @return string 'Sunday'
     */
    const VALUE_SUNDAY = 'Sunday';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_TUESDAY
     * @uses self::VALUE_WEDNESDAY
     * @uses self::VALUE_THURSDAY
     * @uses self::VALUE_FRIDAY
     * @uses self::VALUE_SATURDAY
     * @uses self::VALUE_SUNDAY
     * @uses self::VALUE_MONDAY
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MONDAY,
            self::VALUE_TUESDAY,
            self::VALUE_WEDNESDAY,
            self::VALUE_THURSDAY,
            self::VALUE_FRIDAY,
            self::VALUE_SATURDAY,
            self::VALUE_SUNDAY,
        ];
    }
}

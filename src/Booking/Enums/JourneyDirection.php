<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for JourneyDirection Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:JourneyDirection
 *
 * @subpackage Enumerations
 */
class JourneyDirection extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Default'
     *
     * @return string 'Default'
     */
    const VALUE_DEFAULT = 'Default';
    /**
     * Constant for value 'Forward'
     *
     * @return string 'Forward'
     */
    const VALUE_FORWARD = 'Forward';
    /**
     * Constant for value 'Return'
     *
     * @return string 'Return'
     */
    const VALUE_RETURN = 'Return';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_FORWARD
     * @uses self::VALUE_RETURN
     * @uses self::VALUE_DEFAULT
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DEFAULT,
            self::VALUE_FORWARD,
            self::VALUE_RETURN,
        ];
    }
}

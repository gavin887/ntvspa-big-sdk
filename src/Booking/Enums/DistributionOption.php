<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DistributionOption Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DistributionOption
 *
 * @subpackage Enumerations
 */
class DistributionOption extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     *
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Mail'
     *
     * @return string 'Mail'
     */
    const VALUE_MAIL = 'Mail';
    /**
     * Constant for value 'SmsMail'
     *
     * @return string 'SmsMail'
     */
    const VALUE_SMS_MAIL = 'SmsMail';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_MAIL
     * @uses self::VALUE_SMS_MAIL
     * @uses self::VALUE_NONE
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_MAIL,
            self::VALUE_SMS_MAIL,
        ];
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for Segment Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Segment
 *
 * @subpackage Enumerations
 */
class Segment extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Corporate'
     *
     * @return string 'Corporate'
     */
    const VALUE_CORPORATE = 'Corporate';
    /**
     * Constant for value 'Consumer'
     *
     * @return string 'Consumer'
     */
    const VALUE_CONSUMER = 'Consumer';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_CONSUMER
     * @uses self::VALUE_CORPORATE
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CORPORATE,
            self::VALUE_CONSUMER,
        ];
    }
}

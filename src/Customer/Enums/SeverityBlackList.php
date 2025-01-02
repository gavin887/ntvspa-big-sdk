<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SeverityBlackList Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SeverityBlackList
 *
 * @subpackage Enumerations
 */
class SeverityBlackList extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Grigio'
     *
     * @return string 'Grigio'
     */
    const VALUE_GRIGIO = 'Grigio';
    /**
     * Constant for value 'Nero'
     *
     * @return string 'Nero'
     */
    const VALUE_NERO = 'Nero';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_NERO
     * @uses self::VALUE_GRIGIO
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_GRIGIO,
            self::VALUE_NERO,
        ];
    }
}

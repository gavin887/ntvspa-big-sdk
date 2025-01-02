<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CorporateCarnetType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CorporateCarnetType
 *
 * @subpackage Enumerations
 */
class CorporateCarnetType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Base'
     *
     * @return string 'Base'
     */
    const VALUE_BASE = 'Base';
    /**
     * Constant for value 'Premium'
     *
     * @return string 'Premium'
     */
    const VALUE_PREMIUM = 'Premium';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_PREMIUM
     * @uses self::VALUE_BASE
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BASE,
            self::VALUE_PREMIUM,
        ];
    }
}

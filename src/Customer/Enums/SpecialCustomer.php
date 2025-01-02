<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SpecialCustomer Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SpecialCustomer
 *
 * @subpackage Enumerations
 */
class SpecialCustomer extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Vip'
     *
     * @return string 'Vip'
     */
    const VALUE_VIP = 'Vip';
    /**
     * Constant for value 'Giornalista'
     *
     * @return string 'Giornalista'
     */
    const VALUE_GIORNALISTA = 'Giornalista';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_GIORNALISTA
     * @uses self::VALUE_VIP
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_VIP,
            self::VALUE_GIORNALISTA,
        ];
    }
}

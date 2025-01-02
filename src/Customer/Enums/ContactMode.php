<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ContactMode Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ContactMode
 *
 * @subpackage Enumerations
 */
class ContactMode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Personalededicato'
     *
     * @return string 'Personalededicato'
     */
    const VALUE_PERSONALEDEDICATO = 'Personalededicato';
    /**
     * Constant for value 'Canaliautomatici'
     *
     * @return string 'Canaliautomatici'
     */
    const VALUE_CANALIAUTOMATICI = 'Canaliautomatici';
    /**
     * Constant for value 'Canalihumantouch'
     *
     * @return string 'Canalihumantouch'
     */
    const VALUE_CANALIHUMANTOUCH = 'Canalihumantouch';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_CANALIAUTOMATICI
     * @uses self::VALUE_CANALIHUMANTOUCH
     * @uses self::VALUE_PERSONALEDEDICATO
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PERSONALEDEDICATO,
            self::VALUE_CANALIAUTOMATICI,
            self::VALUE_CANALIHUMANTOUCH,
        ];
    }
}

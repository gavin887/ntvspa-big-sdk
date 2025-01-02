<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for NationEnum Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:NationEnum
 *
 * @subpackage Enumerations
 */
class NationEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ITALIA'
     *
     * @return string 'ITALIA'
     */
    const VALUE_ITALIA = 'ITALIA';
    /**
     * Constant for value 'SAN MARINO'
     *
     * @return string 'SAN MARINO'
     */
    const VALUE_SAN_MARINO = 'SAN MARINO';
    /**
     * Constant for value 'CITTA DEL VATICANO'
     *
     * @return string 'CITTA DEL VATICANO'
     */
    const VALUE_CITTA_DEL_VATICANO = 'CITTA DEL VATICANO';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_SAN_MARINO
     * @uses self::VALUE_CITTA_DEL_VATICANO
     * @uses self::VALUE_ITALIA
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ITALIA,
            self::VALUE_SAN_MARINO,
            self::VALUE_CITTA_DEL_VATICANO,
        ];
    }
}

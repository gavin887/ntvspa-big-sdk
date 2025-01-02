<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PreferredSeat Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PreferredSeat
 *
 * @subpackage Enumerations
 */
class PreferredSeat extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Finestrino'
     *
     * @return string 'Finestrino'
     */
    const VALUE_FINESTRINO = 'Finestrino';
    /**
     * Constant for value 'Corridoio'
     *
     * @return string 'Corridoio'
     */
    const VALUE_CORRIDOIO = 'Corridoio';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_CORRIDOIO
     * @uses self::VALUE_FINESTRINO
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FINESTRINO,
            self::VALUE_CORRIDOIO,
        ];
    }
}

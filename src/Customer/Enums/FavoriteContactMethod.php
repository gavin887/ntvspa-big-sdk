<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FavoriteContactMethod Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FavoriteContactMethod
 *
 * @subpackage Enumerations
 */
class FavoriteContactMethod extends AbstractStructEnumBase
{
    /**
     * Constant for value 'TelefonoFisso'
     *
     * @return string 'TelefonoFisso'
     */
    const VALUE_TELEFONO_FISSO = 'TelefonoFisso';
    /**
     * Constant for value 'TelefonoMobile'
     *
     * @return string 'TelefonoMobile'
     */
    const VALUE_TELEFONO_MOBILE = 'TelefonoMobile';
    /**
     * Constant for value 'Sms'
     *
     * @return string 'Sms'
     */
    const VALUE_SMS = 'Sms';
    /**
     * Constant for value 'EMail'
     *
     * @return string 'EMail'
     */
    const VALUE_EMAIL = 'EMail';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_TELEFONO_MOBILE
     * @uses self::VALUE_SMS
     * @uses self::VALUE_EMAIL
     * @uses self::VALUE_TELEFONO_FISSO
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_TELEFONO_FISSO,
            self::VALUE_TELEFONO_MOBILE,
            self::VALUE_SMS,
            self::VALUE_EMAIL,
        ];
    }
}

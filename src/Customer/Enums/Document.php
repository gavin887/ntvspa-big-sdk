<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for Document Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Document
 *
 * @subpackage Enumerations
 */
class Document extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CartaIdentita'
     *
     * @return string 'CartaIdentita'
     */
    const VALUE_CARTA_IDENTITA = 'CartaIdentita';
    /**
     * Constant for value 'Passaporto'
     *
     * @return string 'Passaporto'
     */
    const VALUE_PASSAPORTO = 'Passaporto';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_PASSAPORTO
     * @uses self::VALUE_CARTA_IDENTITA
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CARTA_IDENTITA,
            self::VALUE_PASSAPORTO,
        ];
    }
}

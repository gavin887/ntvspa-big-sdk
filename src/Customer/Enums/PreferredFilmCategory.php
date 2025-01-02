<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PreferredFilmCategory Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PreferredFilmCategory
 *
 * @subpackage Enumerations
 */
class PreferredFilmCategory extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Comico'
     *
     * @return string 'Comico'
     */
    const VALUE_COMICO = 'Comico';
    /**
     * Constant for value 'Drammatico'
     *
     * @return string 'Drammatico'
     */
    const VALUE_DRAMMATICO = 'Drammatico';
    /**
     * Constant for value 'Fantascienza'
     *
     * @return string 'Fantascienza'
     */
    const VALUE_FANTASCIENZA = 'Fantascienza';
    /**
     * Constant for value 'Thriller'
     *
     * @return string 'Thriller'
     */
    const VALUE_THRILLER = 'Thriller';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_DRAMMATICO
     * @uses self::VALUE_FANTASCIENZA
     * @uses self::VALUE_THRILLER
     * @uses self::VALUE_COMICO
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_COMICO,
            self::VALUE_DRAMMATICO,
            self::VALUE_FANTASCIENZA,
            self::VALUE_THRILLER,
        ];
    }
}

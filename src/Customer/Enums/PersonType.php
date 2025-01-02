<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PersonType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PersonType
 *
 * @subpackage Enumerations
 */
class PersonType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NATURAL PERSON'
     *
     * @return string 'NATURAL PERSON'
     */
    const VALUE_NATURAL_PERSON = 'NATURAL PERSON';
    /**
     * Constant for value 'LEGAL PERSON'
     *
     * @return string 'LEGAL PERSON'
     */
    const VALUE_LEGAL_PERSON = 'LEGAL PERSON';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_LEGAL_PERSON
     * @uses self::VALUE_NATURAL_PERSON
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NATURAL_PERSON,
            self::VALUE_LEGAL_PERSON,
        ];
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TrackResultType Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TrackResultType
 *
 * @subpackage Enumerations
 */
class TrackResultType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'View'
     *
     * @return string 'View'
     */
    const VALUE_VIEW = 'View';
    /**
     * Constant for value 'Agree'
     *
     * @return string 'Agree'
     */
    const VALUE_AGREE = 'Agree';
    /**
     * Constant for value 'NotAgree'
     *
     * @return string 'NotAgree'
     */
    const VALUE_NOT_AGREE = 'NotAgree';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_AGREE
     * @uses self::VALUE_NOT_AGREE
     * @uses self::VALUE_VIEW
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_VIEW,
            self::VALUE_AGREE,
            self::VALUE_NOT_AGREE,
        ];
    }
}

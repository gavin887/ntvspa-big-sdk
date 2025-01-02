<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BIGExceptionCategory Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BIGExceptionCategory
 *
 * @subpackage Enumerations
 */
class BIGExceptionCategory extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Application'
     *
     * @return string 'Application'
     */
    const VALUE_APPLICATION = 'Application';
    /**
     * Constant for value 'Infrastructure'
     *
     * @return string 'Infrastructure'
     */
    const VALUE_INFRASTRUCTURE = 'Infrastructure';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_INFRASTRUCTURE
     * @uses self::VALUE_APPLICATION
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_APPLICATION,
            self::VALUE_INFRASTRUCTURE,
        ];
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Operation\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ResultStatus Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ResultStatus
 *
 * @subpackage Enumerations
 */
class ResultStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Changed'
     *
     * @return string 'Changed'
     */
    const VALUE_CHANGED = 'Changed';
    /**
     * Constant for value 'Failed'
     *
     * @return string 'Failed'
     */
    const VALUE_FAILED = 'Failed';
    /**
     * Constant for value 'NotEligible'
     *
     * @return string 'NotEligible'
     */
    const VALUE_NOT_ELIGIBLE = 'NotEligible';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_FAILED
     * @uses self::VALUE_NOT_ELIGIBLE
     * @uses self::VALUE_CHANGED
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CHANGED,
            self::VALUE_FAILED,
            self::VALUE_NOT_ELIGIBLE,
        ];
    }
}

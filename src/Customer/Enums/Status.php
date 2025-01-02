<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for Status Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Status
 *
 * @subpackage Enumerations
 */
class Status extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Acquisito'
     *
     * @return string 'Acquisito'
     */
    const VALUE_ACQUISITO = 'Acquisito';
    /**
     * Constant for value 'Fidelizzato'
     *
     * @return string 'Fidelizzato'
     */
    const VALUE_FIDELIZZATO = 'Fidelizzato';
    /**
     * Constant for value 'AcquisitoLight'
     *
     * @return string 'AcquisitoLight'
     */
    const VALUE_ACQUISITO_LIGHT = 'AcquisitoLight';
    /**
     * Constant for value 'Pending'
     *
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'Cancellato'
     *
     * @return string 'Cancellato'
     */
    const VALUE_CANCELLATO = 'Cancellato';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_FIDELIZZATO
     * @uses self::VALUE_ACQUISITO_LIGHT
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_CANCELLATO
     * @uses self::VALUE_ACQUISITO
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ACQUISITO,
            self::VALUE_FIDELIZZATO,
            self::VALUE_ACQUISITO_LIGHT,
            self::VALUE_PENDING,
            self::VALUE_CANCELLATO,
        ];
    }
}

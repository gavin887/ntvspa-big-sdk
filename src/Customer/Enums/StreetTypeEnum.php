<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for StreetTypeEnum Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:StreetTypeEnum
 *
 * @subpackage Enumerations
 */
class StreetTypeEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'BORGO'
     *
     * @return string 'BORGO'
     */
    const VALUE_BORGO = 'BORGO';
    /**
     * Constant for value 'CIRCONVALLAZIONE'
     *
     * @return string 'CIRCONVALLAZIONE'
     */
    const VALUE_CIRCONVALLAZIONE = 'CIRCONVALLAZIONE';
    /**
     * Constant for value 'CONTRADA'
     *
     * @return string 'CONTRADA'
     */
    const VALUE_CONTRADA = 'CONTRADA';
    /**
     * Constant for value 'CORSO'
     *
     * @return string 'CORSO'
     */
    const VALUE_CORSO = 'CORSO';
    /**
     * Constant for value 'CORTE'
     *
     * @return string 'CORTE'
     */
    const VALUE_CORTE = 'CORTE';
    /**
     * Constant for value 'DORSODURO'
     *
     * @return string 'DORSODURO'
     */
    const VALUE_DORSODURO = 'DORSODURO';
    /**
     * Constant for value 'FRAZIONE'
     *
     * @return string 'FRAZIONE'
     */
    const VALUE_FRAZIONE = 'FRAZIONE';
    /**
     * Constant for value 'GALLERIA'
     *
     * @return string 'GALLERIA'
     */
    const VALUE_GALLERIA = 'GALLERIA';
    /**
     * Constant for value 'LARGO'
     *
     * @return string 'LARGO'
     */
    const VALUE_LARGO = 'LARGO';
    /**
     * Constant for value 'LOCALITA'
     *
     * @return string 'LOCALITA'
     */
    const VALUE_LOCALITA = 'LOCALITA';
    /**
     * Constant for value 'PIAZZA'
     *
     * @return string 'PIAZZA'
     */
    const VALUE_PIAZZA = 'PIAZZA';
    /**
     * Constant for value 'PIAZZALE'
     *
     * @return string 'PIAZZALE'
     */
    const VALUE_PIAZZALE = 'PIAZZALE';
    /**
     * Constant for value 'PIAZZETTA'
     *
     * @return string 'PIAZZETTA'
     */
    const VALUE_PIAZZETTA = 'PIAZZETTA';
    /**
     * Constant for value 'RIPA'
     *
     * @return string 'RIPA'
     */
    const VALUE_RIPA = 'RIPA';
    /**
     * Constant for value 'SALITA'
     *
     * @return string 'SALITA'
     */
    const VALUE_SALITA = 'SALITA';
    /**
     * Constant for value 'SESTIERE'
     *
     * @return string 'SESTIERE'
     */
    const VALUE_SESTIERE = 'SESTIERE';
    /**
     * Constant for value 'STRADA'
     *
     * @return string 'STRADA'
     */
    const VALUE_STRADA = 'STRADA';
    /**
     * Constant for value 'STRADONE'
     *
     * @return string 'STRADONE'
     */
    const VALUE_STRADONE = 'STRADONE';
    /**
     * Constant for value 'TRAVERSA'
     *
     * @return string 'TRAVERSA'
     */
    const VALUE_TRAVERSA = 'TRAVERSA';
    /**
     * Constant for value 'VIA'
     *
     * @return string 'VIA'
     */
    const VALUE_VIA = 'VIA';
    /**
     * Constant for value 'VIALE'
     *
     * @return string 'VIALE'
     */
    const VALUE_VIALE = 'VIALE';
    /**
     * Constant for value 'VICO'
     *
     * @return string 'VICO'
     */
    const VALUE_VICO = 'VICO';
    /**
     * Constant for value 'VICOLETTO'
     *
     * @return string 'VICOLETTO'
     */
    const VALUE_VICOLETTO = 'VICOLETTO';
    /**
     * Constant for value 'VICOLO'
     *
     * @return string 'VICOLO'
     */
    const VALUE_VICOLO = 'VICOLO';
    /**
     * Constant for value 'ZONA'
     *
     * @return string 'ZONA'
     */
    const VALUE_ZONA = 'ZONA';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_BORGO
     * @uses self::VALUE_CIRCONVALLAZIONE
     * @uses self::VALUE_CONTRADA
     * @uses self::VALUE_CORSO
     * @uses self::VALUE_CORTE
     * @uses self::VALUE_DORSODURO
     * @uses self::VALUE_FRAZIONE
     * @uses self::VALUE_GALLERIA
     * @uses self::VALUE_LARGO
     * @uses self::VALUE_LOCALITA
     * @uses self::VALUE_PIAZZA
     * @uses self::VALUE_PIAZZALE
     * @uses self::VALUE_PIAZZETTA
     * @uses self::VALUE_RIPA
     * @uses self::VALUE_SALITA
     * @uses self::VALUE_SESTIERE
     * @uses self::VALUE_STRADA
     * @uses self::VALUE_STRADONE
     * @uses self::VALUE_TRAVERSA
     * @uses self::VALUE_VIA
     * @uses self::VALUE_VIALE
     * @uses self::VALUE_VICO
     * @uses self::VALUE_VICOLETTO
     * @uses self::VALUE_VICOLO
     * @uses self::VALUE_ZONA
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BORGO,
            self::VALUE_CIRCONVALLAZIONE,
            self::VALUE_CONTRADA,
            self::VALUE_CORSO,
            self::VALUE_CORTE,
            self::VALUE_DORSODURO,
            self::VALUE_FRAZIONE,
            self::VALUE_GALLERIA,
            self::VALUE_LARGO,
            self::VALUE_LOCALITA,
            self::VALUE_PIAZZA,
            self::VALUE_PIAZZALE,
            self::VALUE_PIAZZETTA,
            self::VALUE_RIPA,
            self::VALUE_SALITA,
            self::VALUE_SESTIERE,
            self::VALUE_STRADA,
            self::VALUE_STRADONE,
            self::VALUE_TRAVERSA,
            self::VALUE_VIA,
            self::VALUE_VIALE,
            self::VALUE_VICO,
            self::VALUE_VICOLETTO,
            self::VALUE_VICOLO,
            self::VALUE_ZONA,
        ];
    }
}

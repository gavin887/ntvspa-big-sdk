<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for Interest Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Interest
 *
 * @subpackage Enumerations
 */
class Interest extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ArteeCultura'
     *
     * @return string 'ArteeCultura'
     */
    const VALUE_ARTEE_CULTURA = 'ArteeCultura';
    /**
     * Constant for value 'AttualitàeSpettacolo'
     *
     * @return string 'AttualitàeSpettacolo'
     */
    const VALUE_ATTUALIT_ÀE_SPETTACOLO = 'AttualitàeSpettacolo';
    /**
     * Constant for value 'Caseearredamento'
     *
     * @return string 'Caseearredamento'
     */
    const VALUE_CASEEARREDAMENTO = 'Caseearredamento';
    /**
     * Constant for value 'CinemaeTeatro'
     *
     * @return string 'CinemaeTeatro'
     */
    const VALUE_CINEMAE_TEATRO = 'CinemaeTeatro';
    /**
     * Constant for value 'CommunityeBlog'
     *
     * @return string 'CommunityeBlog'
     */
    const VALUE_COMMUNITYE_BLOG = 'CommunityeBlog';
    /**
     * Constant for value 'EconomiaFinanzaPolitica'
     *
     * @return string 'EconomiaFinanzaPolitica'
     */
    const VALUE_ECONOMIA_FINANZA_POLITICA = 'EconomiaFinanzaPolitica';
    /**
     * Constant for value 'GastronomiaeCucina'
     *
     * @return string 'GastronomiaeCucina'
     */
    const VALUE_GASTRONOMIAE_CUCINA = 'GastronomiaeCucina';
    /**
     * Constant for value 'Libri'
     *
     * @return string 'Libri'
     */
    const VALUE_LIBRI = 'Libri';
    /**
     * Constant for value 'Meteo'
     *
     * @return string 'Meteo'
     */
    const VALUE_METEO = 'Meteo';
    /**
     * Constant for value 'Musica'
     *
     * @return string 'Musica'
     */
    const VALUE_MUSICA = 'Musica';
    /**
     * Constant for value 'Nuovetecnologie'
     *
     * @return string 'Nuovetecnologie'
     */
    const VALUE_NUOVETECNOLOGIE = 'Nuovetecnologie';
    /**
     * Constant for value 'Sport'
     *
     * @return string 'Sport'
     */
    const VALUE_SPORT = 'Sport';
    /**
     * Constant for value 'Viaggi'
     *
     * @return string 'Viaggi'
     */
    const VALUE_VIAGGI = 'Viaggi';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_ARTEE_CULTURA
     * @uses self::VALUE_ATTUALIT_ÀE_SPETTACOLO
     * @uses self::VALUE_CASEEARREDAMENTO
     * @uses self::VALUE_CINEMAE_TEATRO
     * @uses self::VALUE_COMMUNITYE_BLOG
     * @uses self::VALUE_ECONOMIA_FINANZA_POLITICA
     * @uses self::VALUE_GASTRONOMIAE_CUCINA
     * @uses self::VALUE_LIBRI
     * @uses self::VALUE_METEO
     * @uses self::VALUE_MUSICA
     * @uses self::VALUE_NUOVETECNOLOGIE
     * @uses self::VALUE_SPORT
     * @uses self::VALUE_VIAGGI
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ARTEE_CULTURA,
            self::VALUE_ATTUALIT_ÀE_SPETTACOLO,
            self::VALUE_CASEEARREDAMENTO,
            self::VALUE_CINEMAE_TEATRO,
            self::VALUE_COMMUNITYE_BLOG,
            self::VALUE_ECONOMIA_FINANZA_POLITICA,
            self::VALUE_GASTRONOMIAE_CUCINA,
            self::VALUE_LIBRI,
            self::VALUE_METEO,
            self::VALUE_MUSICA,
            self::VALUE_NUOVETECNOLOGIE,
            self::VALUE_SPORT,
            self::VALUE_VIAGGI,
        ];
    }
}

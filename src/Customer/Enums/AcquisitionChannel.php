<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AcquisitionChannel Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcquisitionChannel
 *
 * @subpackage Enumerations
 */
class AcquisitionChannel extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CONTACTCENTER'
     *
     * @return string 'CONTACTCENTER'
     */
    const VALUE_CONTACTCENTER = 'CONTACTCENTER';
    /**
     * Constant for value 'PORTALEB2C'
     *
     * @return string 'PORTALEB2C'
     */
    const VALUE_PORTALEB_2_C = 'PORTALEB2C';
    /**
     * Constant for value 'PORTALEB2CLIGHT'
     *
     * @return string 'PORTALEB2CLIGHT'
     */
    const VALUE_PORTALEB_2_CLIGHT = 'PORTALEB2CLIGHT';
    /**
     * Constant for value 'PORTALEB2CBASIC'
     *
     * @return string 'PORTALEB2CBASIC'
     */
    const VALUE_PORTALEB_2_CBASIC = 'PORTALEB2CBASIC';
    /**
     * Constant for value 'PORTALEB2B'
     *
     * @return string 'PORTALEB2B'
     */
    const VALUE_PORTALEB_2_B = 'PORTALEB2B';
    /**
     * Constant for value 'PORTALEB2BESTERO'
     *
     * @return string 'PORTALEB2BESTERO'
     */
    const VALUE_PORTALEB_2_BESTERO = 'PORTALEB2BESTERO';
    /**
     * Constant for value 'PORTALEB2CSTANDARD'
     *
     * @return string 'PORTALEB2CSTANDARD'
     */
    const VALUE_PORTALEB_2_CSTANDARD = 'PORTALEB2CSTANDARD';
    /**
     * Constant for value 'TVM'
     *
     * @return string 'TVM'
     */
    const VALUE_TVM = 'TVM';
    /**
     * Constant for value 'MOBILEWORKFORCE'
     *
     * @return string 'MOBILEWORKFORCE'
     */
    const VALUE_MOBILEWORKFORCE = 'MOBILEWORKFORCE';
    /**
     * Constant for value 'CItaloBologna'
     *
     * @return string 'CItaloBologna'
     */
    const VALUE_CITALO_BOLOGNA = 'CItaloBologna';
    /**
     * Constant for value 'CItaloFirenzeSMN'
     *
     * @return string 'CItaloFirenzeSMN'
     */
    const VALUE_CITALO_FIRENZE_SMN = 'CItaloFirenzeSMN';
    /**
     * Constant for value 'CItaloMilanoPortaGaribaldi'
     *
     * @return string 'CItaloMilanoPortaGaribaldi'
     */
    const VALUE_CITALO_MILANO_PORTA_GARIBALDI = 'CItaloMilanoPortaGaribaldi';
    /**
     * Constant for value 'CItaloMilanoRogoredo'
     *
     * @return string 'CItaloMilanoRogoredo'
     */
    const VALUE_CITALO_MILANO_ROGOREDO = 'CItaloMilanoRogoredo';
    /**
     * Constant for value 'CItaloNapoliCentrale'
     *
     * @return string 'CItaloNapoliCentrale'
     */
    const VALUE_CITALO_NAPOLI_CENTRALE = 'CItaloNapoliCentrale';
    /**
     * Constant for value 'CItaloPadova'
     *
     * @return string 'CItaloPadova'
     */
    const VALUE_CITALO_PADOVA = 'CItaloPadova';
    /**
     * Constant for value 'CItaloRomaOstiense'
     *
     * @return string 'CItaloRomaOstiense'
     */
    const VALUE_CITALO_ROMA_OSTIENSE = 'CItaloRomaOstiense';
    /**
     * Constant for value 'CItaloRomaTiburtina'
     *
     * @return string 'CItaloRomaTiburtina'
     */
    const VALUE_CITALO_ROMA_TIBURTINA = 'CItaloRomaTiburtina';
    /**
     * Constant for value 'CItaloSalerno'
     *
     * @return string 'CItaloSalerno'
     */
    const VALUE_CITALO_SALERNO = 'CItaloSalerno';
    /**
     * Constant for value 'CItaloTorino'
     *
     * @return string 'CItaloTorino'
     */
    const VALUE_CITALO_TORINO = 'CItaloTorino';
    /**
     * Constant for value 'CItaloVeneziaMestre'
     *
     * @return string 'CItaloVeneziaMestre'
     */
    const VALUE_CITALO_VENEZIA_MESTRE = 'CItaloVeneziaMestre';
    /**
     * Constant for value 'CItaloVeneziaSantaLucia'
     *
     * @return string 'CItaloVeneziaSantaLucia'
     */
    const VALUE_CITALO_VENEZIA_SANTA_LUCIA = 'CItaloVeneziaSantaLucia';
    /**
     * Constant for value 'CItaloAncona'
     *
     * @return string 'CItaloAncona'
     */
    const VALUE_CITALO_ANCONA = 'CItaloAncona';
    /**
     * Constant for value 'CItaloRimini'
     *
     * @return string 'CItaloRimini'
     */
    const VALUE_CITALO_RIMINI = 'CItaloRimini';
    /**
     * Constant for value 'CItaloPesaro'
     *
     * @return string 'CItaloPesaro'
     */
    const VALUE_CITALO_PESARO = 'CItaloPesaro';
    /**
     * Constant for value 'CItaloForli'
     *
     * @return string 'CItaloForli'
     */
    const VALUE_CITALO_FORLI = 'CItaloForli';
    /**
     * Constant for value 'CItaloTermini'
     *
     * @return string 'CItaloTermini'
     */
    const VALUE_CITALO_TERMINI = 'CItaloTermini';
    /**
     * Constant for value 'BIGSTANDARD'
     *
     * @return string 'BIGSTANDARD'
     */
    const VALUE_BIGSTANDARD = 'BIGSTANDARD';
    /**
     * Constant for value 'BIG'
     *
     * @return string 'BIG'
     */
    const VALUE_BIG = 'BIG';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_CONTACTCENTER
     * @uses self::VALUE_PORTALEB_2_C
     * @uses self::VALUE_PORTALEB_2_CLIGHT
     * @uses self::VALUE_PORTALEB_2_CBASIC
     * @uses self::VALUE_PORTALEB_2_B
     * @uses self::VALUE_PORTALEB_2_BESTERO
     * @uses self::VALUE_PORTALEB_2_CSTANDARD
     * @uses self::VALUE_TVM
     * @uses self::VALUE_MOBILEWORKFORCE
     * @uses self::VALUE_CITALO_BOLOGNA
     * @uses self::VALUE_CITALO_FIRENZE_SMN
     * @uses self::VALUE_CITALO_MILANO_PORTA_GARIBALDI
     * @uses self::VALUE_CITALO_MILANO_ROGOREDO
     * @uses self::VALUE_CITALO_NAPOLI_CENTRALE
     * @uses self::VALUE_CITALO_PADOVA
     * @uses self::VALUE_CITALO_ROMA_OSTIENSE
     * @uses self::VALUE_CITALO_ROMA_TIBURTINA
     * @uses self::VALUE_CITALO_SALERNO
     * @uses self::VALUE_CITALO_TORINO
     * @uses self::VALUE_CITALO_VENEZIA_MESTRE
     * @uses self::VALUE_CITALO_VENEZIA_SANTA_LUCIA
     * @uses self::VALUE_CITALO_ANCONA
     * @uses self::VALUE_CITALO_RIMINI
     * @uses self::VALUE_CITALO_PESARO
     * @uses self::VALUE_CITALO_FORLI
     * @uses self::VALUE_CITALO_TERMINI
     * @uses self::VALUE_BIGSTANDARD
     * @uses self::VALUE_BIG
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CONTACTCENTER,
            self::VALUE_PORTALEB_2_C,
            self::VALUE_PORTALEB_2_CLIGHT,
            self::VALUE_PORTALEB_2_CBASIC,
            self::VALUE_PORTALEB_2_B,
            self::VALUE_PORTALEB_2_BESTERO,
            self::VALUE_PORTALEB_2_CSTANDARD,
            self::VALUE_TVM,
            self::VALUE_MOBILEWORKFORCE,
            self::VALUE_CITALO_BOLOGNA,
            self::VALUE_CITALO_FIRENZE_SMN,
            self::VALUE_CITALO_MILANO_PORTA_GARIBALDI,
            self::VALUE_CITALO_MILANO_ROGOREDO,
            self::VALUE_CITALO_NAPOLI_CENTRALE,
            self::VALUE_CITALO_PADOVA,
            self::VALUE_CITALO_ROMA_OSTIENSE,
            self::VALUE_CITALO_ROMA_TIBURTINA,
            self::VALUE_CITALO_SALERNO,
            self::VALUE_CITALO_TORINO,
            self::VALUE_CITALO_VENEZIA_MESTRE,
            self::VALUE_CITALO_VENEZIA_SANTA_LUCIA,
            self::VALUE_CITALO_ANCONA,
            self::VALUE_CITALO_RIMINI,
            self::VALUE_CITALO_PESARO,
            self::VALUE_CITALO_FORLI,
            self::VALUE_CITALO_TERMINI,
            self::VALUE_BIGSTANDARD,
            self::VALUE_BIG,
        ];
    }
}

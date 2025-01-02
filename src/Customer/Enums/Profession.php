<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for Profession Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Profession
 *
 * @subpackage Enumerations
 */
class Profession extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Casalinga'
     *
     * @return string 'Casalinga'
     */
    const VALUE_CASALINGA = 'Casalinga';
    /**
     * Constant for value 'Dirigente'
     *
     * @return string 'Dirigente'
     */
    const VALUE_DIRIGENTE = 'Dirigente';
    /**
     * Constant for value 'FunzionarioQuadro'
     *
     * @return string 'FunzionarioQuadro'
     */
    const VALUE_FUNZIONARIO_QUADRO = 'FunzionarioQuadro';
    /**
     * Constant for value 'Impiegato'
     *
     * @return string 'Impiegato'
     */
    const VALUE_IMPIEGATO = 'Impiegato';
    /**
     * Constant for value 'InsegnanteProfessore'
     *
     * @return string 'InsegnanteProfessore'
     */
    const VALUE_INSEGNANTE_PROFESSORE = 'InsegnanteProfessore';
    /**
     * Constant for value 'Imprenditore'
     *
     * @return string 'Imprenditore'
     */
    const VALUE_IMPRENDITORE = 'Imprenditore';
    /**
     * Constant for value 'Lavoratoreautonomo'
     *
     * @return string 'Lavoratoreautonomo'
     */
    const VALUE_LAVORATOREAUTONOMO = 'Lavoratoreautonomo';
    /**
     * Constant for value 'Liberoprofessionista'
     *
     * @return string 'Liberoprofessionista'
     */
    const VALUE_LIBEROPROFESSIONISTA = 'Liberoprofessionista';
    /**
     * Constant for value 'Nonoccupato'
     *
     * @return string 'Nonoccupato'
     */
    const VALUE_NONOCCUPATO = 'Nonoccupato';
    /**
     * Constant for value 'Operaio'
     *
     * @return string 'Operaio'
     */
    const VALUE_OPERAIO = 'Operaio';
    /**
     * Constant for value 'Pensionato'
     *
     * @return string 'Pensionato'
     */
    const VALUE_PENSIONATO = 'Pensionato';
    /**
     * Constant for value 'Studente'
     *
     * @return string 'Studente'
     */
    const VALUE_STUDENTE = 'Studente';
    /**
     * Constant for value 'Altro'
     *
     * @return string 'Altro'
     */
    const VALUE_ALTRO = 'Altro';

    /**
     * Return allowed values
     *
     * @return string[]
     * @uses self::VALUE_CASALINGA
     * @uses self::VALUE_DIRIGENTE
     * @uses self::VALUE_FUNZIONARIO_QUADRO
     * @uses self::VALUE_IMPIEGATO
     * @uses self::VALUE_INSEGNANTE_PROFESSORE
     * @uses self::VALUE_IMPRENDITORE
     * @uses self::VALUE_LAVORATOREAUTONOMO
     * @uses self::VALUE_LIBEROPROFESSIONISTA
     * @uses self::VALUE_NONOCCUPATO
     * @uses self::VALUE_OPERAIO
     * @uses self::VALUE_PENSIONATO
     * @uses self::VALUE_STUDENTE
     * @uses self::VALUE_ALTRO
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CASALINGA,
            self::VALUE_DIRIGENTE,
            self::VALUE_FUNZIONARIO_QUADRO,
            self::VALUE_IMPIEGATO,
            self::VALUE_INSEGNANTE_PROFESSORE,
            self::VALUE_IMPRENDITORE,
            self::VALUE_LAVORATOREAUTONOMO,
            self::VALUE_LIBEROPROFESSIONISTA,
            self::VALUE_NONOCCUPATO,
            self::VALUE_OPERAIO,
            self::VALUE_PENSIONATO,
            self::VALUE_STUDENTE,
            self::VALUE_ALTRO,
        ];
    }
}

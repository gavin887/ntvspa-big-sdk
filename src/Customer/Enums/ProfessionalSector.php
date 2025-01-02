<?php

declare(strict_types=1);

namespace Ntvspa\Big\Customer\Enums;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ProfessionalSector Enums
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProfessionalSector
 *
 * @subpackage Enumerations
 */
class ProfessionalSector extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Agricoltura'
     *
     * @return string 'Agricoltura'
     */
    const VALUE_AGRICOLTURA = 'Agricoltura';
    /**
     * Constant for value 'AlimentareRistorazione'
     *
     * @return string 'AlimentareRistorazione'
     */
    const VALUE_ALIMENTARE_RISTORAZIONE = 'AlimentareRistorazione';
    /**
     * Constant for value 'ArchitetturaIngegneria'
     *
     * @return string 'ArchitetturaIngegneria'
     */
    const VALUE_ARCHITETTURA_INGEGNERIA = 'ArchitetturaIngegneria';
    /**
     * Constant for value 'Artigianato'
     *
     * @return string 'Artigianato'
     */
    const VALUE_ARTIGIANATO = 'Artigianato';
    /**
     * Constant for value 'BancheAssicFinanz'
     *
     * @return string 'BancheAssicFinanz'
     */
    const VALUE_BANCHE_ASSIC_FINANZ = 'BancheAssicFinanz';
    /**
     * Constant for value 'ChimicaBiotecFarmac'
     *
     * @return string 'ChimicaBiotecFarmac'
     */
    const VALUE_CHIMICA_BIOTEC_FARMAC = 'ChimicaBiotecFarmac';
    /**
     * Constant for value 'ComGrandeDistrDettaglio'
     *
     * @return string 'ComGrandeDistrDettaglio'
     */
    const VALUE_COM_GRANDE_DISTR_DETTAGLIO = 'ComGrandeDistrDettaglio';
    /**
     * Constant for value 'EdiliziaImmobiliare'
     *
     * @return string 'EdiliziaImmobiliare'
     */
    const VALUE_EDILIZIA_IMMOBILIARE = 'EdiliziaImmobiliare';
    /**
     * Constant for value 'Industria'
     *
     * @return string 'Industria'
     */
    const VALUE_INDUSTRIA = 'Industria';
    /**
     * Constant for value 'InformaticaIT'
     *
     * @return string 'InformaticaIT'
     */
    const VALUE_INFORMATICA_IT = 'InformaticaIT';
    /**
     * Constant for value 'MarketingVendite'
     *
     * @return string 'MarketingVendite'
     */
    const VALUE_MARKETING_VENDITE = 'MarketingVendite';
    /**
     * Constant for value 'MediaEditoriaPubblicità'
     *
     * @return string 'MediaEditoriaPubblicità'
     */
    const VALUE_MEDIA_EDITORIA_PUBBLICIT_À = 'MediaEditoriaPubblicità';
    /**
     * Constant for value 'ModaEventiSpettCult'
     *
     * @return string 'ModaEventiSpettCult'
     */
    const VALUE_MODA_EVENTI_SPETT_CULT = 'ModaEventiSpettCult';
    /**
     * Constant for value 'Sanità'
     *
     * @return string 'Sanità'
     */
    const VALUE_SANIT_À = 'Sanità';
    /**
     * Constant for value 'Servizi'
     *
     * @return string 'Servizi'
     */
    const VALUE_SERVIZI = 'Servizi';
    /**
     * Constant for value 'Telecomunicazioni'
     *
     * @return string 'Telecomunicazioni'
     */
    const VALUE_TELECOMUNICAZIONI = 'Telecomunicazioni';
    /**
     * Constant for value 'Turismo'
     *
     * @return string 'Turismo'
     */
    const VALUE_TURISMO = 'Turismo';
    /**
     * Constant for value 'TrasportiLogistica'
     *
     * @return string 'TrasportiLogistica'
     */
    const VALUE_TRASPORTI_LOGISTICA = 'TrasportiLogistica';
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
     * @uses self::VALUE_AGRICOLTURA
     * @uses self::VALUE_ALIMENTARE_RISTORAZIONE
     * @uses self::VALUE_ARCHITETTURA_INGEGNERIA
     * @uses self::VALUE_ARTIGIANATO
     * @uses self::VALUE_BANCHE_ASSIC_FINANZ
     * @uses self::VALUE_CHIMICA_BIOTEC_FARMAC
     * @uses self::VALUE_COM_GRANDE_DISTR_DETTAGLIO
     * @uses self::VALUE_EDILIZIA_IMMOBILIARE
     * @uses self::VALUE_INDUSTRIA
     * @uses self::VALUE_INFORMATICA_IT
     * @uses self::VALUE_MARKETING_VENDITE
     * @uses self::VALUE_MEDIA_EDITORIA_PUBBLICIT_À
     * @uses self::VALUE_MODA_EVENTI_SPETT_CULT
     * @uses self::VALUE_SANIT_À
     * @uses self::VALUE_SERVIZI
     * @uses self::VALUE_TELECOMUNICAZIONI
     * @uses self::VALUE_TURISMO
     * @uses self::VALUE_TRASPORTI_LOGISTICA
     * @uses self::VALUE_ALTRO
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AGRICOLTURA,
            self::VALUE_ALIMENTARE_RISTORAZIONE,
            self::VALUE_ARCHITETTURA_INGEGNERIA,
            self::VALUE_ARTIGIANATO,
            self::VALUE_BANCHE_ASSIC_FINANZ,
            self::VALUE_CHIMICA_BIOTEC_FARMAC,
            self::VALUE_COM_GRANDE_DISTR_DETTAGLIO,
            self::VALUE_EDILIZIA_IMMOBILIARE,
            self::VALUE_INDUSTRIA,
            self::VALUE_INFORMATICA_IT,
            self::VALUE_MARKETING_VENDITE,
            self::VALUE_MEDIA_EDITORIA_PUBBLICIT_À,
            self::VALUE_MODA_EVENTI_SPETT_CULT,
            self::VALUE_SANIT_À,
            self::VALUE_SERVIZI,
            self::VALUE_TELECOMUNICAZIONI,
            self::VALUE_TURISMO,
            self::VALUE_TRASPORTI_LOGISTICA,
            self::VALUE_ALTRO,
        ];
    }
}

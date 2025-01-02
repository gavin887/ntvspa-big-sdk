<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InfoTreno Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:InfoTreno
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class InfoTreno extends AbstractStructBase
{
    /**
     * The VersioneDati
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $VersioneDati = null;
    /**
     * The Ritardo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $Ritardo = null;
    /**
     * The OraPassaggio
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $OraPassaggio = null;
    /**
     * The BinarioConfermato
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $BinarioConfermato = null;
    /**
     * The TrenoSoppresso
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var bool|null
     */
    protected ?bool $TrenoSoppresso = null;
    /**
     * The DescrizioneLocalita
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $DescrizioneLocalita = null;
    /**
     * The Numero
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Numero = null;
    /**
     * The Categoria
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Categoria = null;
    /**
     * The Vettore
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Vettore = null;
    /**
     * The InfoRoute
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $InfoRoute = null;
    /**
     * The Informazioni
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Informazioni = null;
    /**
     * The Binario
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Binario = null;

    /**
     * Constructor method for InfoTreno
     *
     * @param string $versioneDati
     * @param int    $ritardo
     * @param string $oraPassaggio
     * @param bool   $binarioConfermato
     * @param bool   $trenoSoppresso
     * @param string $descrizioneLocalita
     * @param string $numero
     * @param string $categoria
     * @param string $vettore
     * @param string $infoRoute
     * @param string $informazioni
     * @param string $binario
     *
     * @uses InfoTreno::setVersioneDati()
     * @uses InfoTreno::setRitardo()
     * @uses InfoTreno::setOraPassaggio()
     * @uses InfoTreno::setBinarioConfermato()
     * @uses InfoTreno::setTrenoSoppresso()
     * @uses InfoTreno::setDescrizioneLocalita()
     * @uses InfoTreno::setNumero()
     * @uses InfoTreno::setCategoria()
     * @uses InfoTreno::setVettore()
     * @uses InfoTreno::setInfoRoute()
     * @uses InfoTreno::setInformazioni()
     * @uses InfoTreno::setBinario()
     */
    public function __construct(?string $versioneDati = null, ?int $ritardo = null, ?string $oraPassaggio = null, ?bool $binarioConfermato = null, ?bool $trenoSoppresso = null, ?string $descrizioneLocalita = null, ?string $numero = null, ?string $categoria = null, ?string $vettore = null, ?string $infoRoute = null, ?string $informazioni = null, ?string $binario = null)
    {
        $this
            ->setVersioneDati($versioneDati)
            ->setRitardo($ritardo)
            ->setOraPassaggio($oraPassaggio)
            ->setBinarioConfermato($binarioConfermato)
            ->setTrenoSoppresso($trenoSoppresso)
            ->setDescrizioneLocalita($descrizioneLocalita)
            ->setNumero($numero)
            ->setCategoria($categoria)
            ->setVettore($vettore)
            ->setInfoRoute($infoRoute)
            ->setInformazioni($informazioni)
            ->setBinario($binario);
    }

    /**
     * Get VersioneDati value
     *
     * @return string|null
     */
    public function getVersioneDati(): ?string
    {
        return $this->VersioneDati;
    }

    /**
     * Set VersioneDati value
     *
     * @param string $versioneDati
     *
     * @return InfoTreno
     */
    public function setVersioneDati(?string $versioneDati = null): self
    {
        // validation for constraint: string
        if (!is_null($versioneDati) && !is_string($versioneDati)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($versioneDati, true), gettype($versioneDati)), __LINE__);
        }
        $this->VersioneDati = $versioneDati;

        return $this;
    }

    /**
     * Get Ritardo value
     *
     * @return int|null
     */
    public function getRitardo(): ?int
    {
        return $this->Ritardo;
    }

    /**
     * Set Ritardo value
     *
     * @param int $ritardo
     *
     * @return InfoTreno
     */
    public function setRitardo(?int $ritardo = null): self
    {
        // validation for constraint: int
        if (!is_null($ritardo) && !(is_int($ritardo) || ctype_digit($ritardo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ritardo, true), gettype($ritardo)), __LINE__);
        }
        $this->Ritardo = $ritardo;

        return $this;
    }

    /**
     * Get OraPassaggio value
     *
     * @return string|null
     */
    public function getOraPassaggio(): ?string
    {
        return $this->OraPassaggio;
    }

    /**
     * Set OraPassaggio value
     *
     * @param string $oraPassaggio
     *
     * @return InfoTreno
     */
    public function setOraPassaggio(?string $oraPassaggio = null): self
    {
        // validation for constraint: string
        if (!is_null($oraPassaggio) && !is_string($oraPassaggio)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oraPassaggio, true), gettype($oraPassaggio)), __LINE__);
        }
        $this->OraPassaggio = $oraPassaggio;

        return $this;
    }

    /**
     * Get BinarioConfermato value
     *
     * @return bool|null
     */
    public function getBinarioConfermato(): ?bool
    {
        return $this->BinarioConfermato;
    }

    /**
     * Set BinarioConfermato value
     *
     * @param bool $binarioConfermato
     *
     * @return InfoTreno
     */
    public function setBinarioConfermato(?bool $binarioConfermato = null): self
    {
        // validation for constraint: boolean
        if (!is_null($binarioConfermato) && !is_bool($binarioConfermato)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($binarioConfermato, true), gettype($binarioConfermato)), __LINE__);
        }
        $this->BinarioConfermato = $binarioConfermato;

        return $this;
    }

    /**
     * Get TrenoSoppresso value
     *
     * @return bool|null
     */
    public function getTrenoSoppresso(): ?bool
    {
        return $this->TrenoSoppresso;
    }

    /**
     * Set TrenoSoppresso value
     *
     * @param bool $trenoSoppresso
     *
     * @return InfoTreno
     */
    public function setTrenoSoppresso(?bool $trenoSoppresso = null): self
    {
        // validation for constraint: boolean
        if (!is_null($trenoSoppresso) && !is_bool($trenoSoppresso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($trenoSoppresso, true), gettype($trenoSoppresso)), __LINE__);
        }
        $this->TrenoSoppresso = $trenoSoppresso;

        return $this;
    }

    /**
     * Get DescrizioneLocalita value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getDescrizioneLocalita(): ?string
    {
        return $this->DescrizioneLocalita ?? null;
    }

    /**
     * Set DescrizioneLocalita value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $descrizioneLocalita
     *
     * @return InfoTreno
     */
    public function setDescrizioneLocalita(?string $descrizioneLocalita = null): self
    {
        // validation for constraint: string
        if (!is_null($descrizioneLocalita) && !is_string($descrizioneLocalita)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descrizioneLocalita, true), gettype($descrizioneLocalita)), __LINE__);
        }
        if (is_null($descrizioneLocalita) || (is_array($descrizioneLocalita) && empty($descrizioneLocalita))) {
            unset($this->DescrizioneLocalita);
        } else {
            $this->DescrizioneLocalita = $descrizioneLocalita;
        }

        return $this;
    }

    /**
     * Get Numero value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getNumero(): ?string
    {
        return $this->Numero ?? null;
    }

    /**
     * Set Numero value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $numero
     *
     * @return InfoTreno
     */
    public function setNumero(?string $numero = null): self
    {
        // validation for constraint: string
        if (!is_null($numero) && !is_string($numero)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numero, true), gettype($numero)), __LINE__);
        }
        if (is_null($numero) || (is_array($numero) && empty($numero))) {
            unset($this->Numero);
        } else {
            $this->Numero = $numero;
        }

        return $this;
    }

    /**
     * Get Categoria value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCategoria(): ?string
    {
        return $this->Categoria ?? null;
    }

    /**
     * Set Categoria value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $categoria
     *
     * @return InfoTreno
     */
    public function setCategoria(?string $categoria = null): self
    {
        // validation for constraint: string
        if (!is_null($categoria) && !is_string($categoria)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoria, true), gettype($categoria)), __LINE__);
        }
        if (is_null($categoria) || (is_array($categoria) && empty($categoria))) {
            unset($this->Categoria);
        } else {
            $this->Categoria = $categoria;
        }

        return $this;
    }

    /**
     * Get Vettore value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getVettore(): ?string
    {
        return $this->Vettore ?? null;
    }

    /**
     * Set Vettore value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $vettore
     *
     * @return InfoTreno
     */
    public function setVettore(?string $vettore = null): self
    {
        // validation for constraint: string
        if (!is_null($vettore) && !is_string($vettore)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vettore, true), gettype($vettore)), __LINE__);
        }
        if (is_null($vettore) || (is_array($vettore) && empty($vettore))) {
            unset($this->Vettore);
        } else {
            $this->Vettore = $vettore;
        }

        return $this;
    }

    /**
     * Get InfoRoute value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getInfoRoute(): ?string
    {
        return $this->InfoRoute ?? null;
    }

    /**
     * Set InfoRoute value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $infoRoute
     *
     * @return InfoTreno
     */
    public function setInfoRoute(?string $infoRoute = null): self
    {
        // validation for constraint: string
        if (!is_null($infoRoute) && !is_string($infoRoute)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infoRoute, true), gettype($infoRoute)), __LINE__);
        }
        if (is_null($infoRoute) || (is_array($infoRoute) && empty($infoRoute))) {
            unset($this->InfoRoute);
        } else {
            $this->InfoRoute = $infoRoute;
        }

        return $this;
    }

    /**
     * Get Informazioni value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getInformazioni(): ?string
    {
        return $this->Informazioni ?? null;
    }

    /**
     * Set Informazioni value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $informazioni
     *
     * @return InfoTreno
     */
    public function setInformazioni(?string $informazioni = null): self
    {
        // validation for constraint: string
        if (!is_null($informazioni) && !is_string($informazioni)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($informazioni, true), gettype($informazioni)), __LINE__);
        }
        if (is_null($informazioni) || (is_array($informazioni) && empty($informazioni))) {
            unset($this->Informazioni);
        } else {
            $this->Informazioni = $informazioni;
        }

        return $this;
    }

    /**
     * Get Binario value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getBinario(): ?string
    {
        return $this->Binario ?? null;
    }

    /**
     * Set Binario value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $binario
     *
     * @return InfoTreno
     */
    public function setBinario(?string $binario = null): self
    {
        // validation for constraint: string
        if (!is_null($binario) && !is_string($binario)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($binario, true), gettype($binario)), __LINE__);
        }
        if (is_null($binario) || (is_array($binario) && empty($binario))) {
            unset($this->Binario);
        } else {
            $this->Binario = $binario;
        }

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use Travel\Arrays\ArrayOfInfoTreno;

/**
 * This class stands for RetrieveNtvTrainStationBoardResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q4:RetrieveNtvTrainStationBoardResponse | tns:RetrieveNtvTrainStationBoardResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveNtvTrainStationBoardResponse extends ResponseBase
{
    /**
     * The Operation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Operation|null
     */
    protected ?\Ntvspa\Big\Travel\Structs\Operation $Operation = null;
    /**
     * The ListaTreniArrivo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Travel\Arrays\ArrayOfInfoTreno|null
     */
    protected ?ArrayOfInfoTreno $ListaTreniArrivo = null;
    /**
     * The ListaTreniPartenza
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Travel\Arrays\ArrayOfInfoTreno|null
     */
    protected ?ArrayOfInfoTreno $ListaTreniPartenza = null;

    /**
     * Constructor method for RetrieveNtvTrainStationBoardResponse
     *
     * @param Operation                                  $operation
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfInfoTreno $listaTreniArrivo
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfInfoTreno $listaTreniPartenza
     *
     * @uses RetrieveNtvTrainStationBoardResponse::setOperation()
     * @uses RetrieveNtvTrainStationBoardResponse::setListaTreniArrivo()
     * @uses RetrieveNtvTrainStationBoardResponse::setListaTreniPartenza()
     */
    public function __construct(?\Ntvspa\Big\Travel\Structs\Operation $operation = null, ?ArrayOfInfoTreno $listaTreniArrivo = null, ?ArrayOfInfoTreno $listaTreniPartenza = null)
    {
        $this
            ->setOperation($operation)
            ->setListaTreniArrivo($listaTreniArrivo)
            ->setListaTreniPartenza($listaTreniPartenza);
    }

    /**
     * Get Operation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Operation|null
     */
    public function getOperation(): ?\Ntvspa\Big\Travel\Structs\Operation
    {
        return $this->Operation ?? null;
    }

    /**
     * Set Operation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Operation $operation
     *
     * @return RetrieveNtvTrainStationBoardResponse
     */
    public function setOperation(?\Ntvspa\Big\Travel\Structs\Operation $operation = null): self
    {
        if (is_null($operation) || (is_array($operation) && empty($operation))) {
            unset($this->Operation);
        } else {
            $this->Operation = $operation;
        }

        return $this;
    }

    /**
     * Get ListaTreniArrivo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Travel\Arrays\ArrayOfInfoTreno|null
     */
    public function getListaTreniArrivo(): ?ArrayOfInfoTreno
    {
        return $this->ListaTreniArrivo ?? null;
    }

    /**
     * Set ListaTreniArrivo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfInfoTreno $listaTreniArrivo
     *
     * @return RetrieveNtvTrainStationBoardResponse
     */
    public function setListaTreniArrivo(?ArrayOfInfoTreno $listaTreniArrivo = null): self
    {
        if (is_null($listaTreniArrivo) || (is_array($listaTreniArrivo) && empty($listaTreniArrivo))) {
            unset($this->ListaTreniArrivo);
        } else {
            $this->ListaTreniArrivo = $listaTreniArrivo;
        }

        return $this;
    }

    /**
     * Get ListaTreniPartenza value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Travel\Arrays\ArrayOfInfoTreno|null
     */
    public function getListaTreniPartenza(): ?ArrayOfInfoTreno
    {
        return $this->ListaTreniPartenza ?? null;
    }

    /**
     * Set ListaTreniPartenza value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfInfoTreno $listaTreniPartenza
     *
     * @return RetrieveNtvTrainStationBoardResponse
     */
    public function setListaTreniPartenza(?ArrayOfInfoTreno $listaTreniPartenza = null): self
    {
        if (is_null($listaTreniPartenza) || (is_array($listaTreniPartenza) && empty($listaTreniPartenza))) {
            unset($this->ListaTreniPartenza);
        } else {
            $this->ListaTreniPartenza = $listaTreniPartenza;
        }

        return $this;
    }
}

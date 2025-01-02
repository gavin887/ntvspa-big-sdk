<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use Travel\Arrays\ArrayOfTrainSchedule;

/**
 * This class stands for RetrieveItaloRealTimeResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q2:RetrieveItaloRealTimeResponse | tns:RetrieveItaloRealTimeResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class RetrieveItaloRealTimeResponse extends ResponseBase
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
     * The TrainSchedule
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Travel\Arrays\ArrayOfTrainSchedule|null
     */
    protected ?ArrayOfTrainSchedule $TrainSchedule = null;

    /**
     * Constructor method for RetrieveItaloRealTimeResponse
     *
     * @param Operation                                      $operation
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfTrainSchedule $trainSchedule
     *
     * @uses RetrieveItaloRealTimeResponse::setOperation()
     * @uses RetrieveItaloRealTimeResponse::setTrainSchedule()
     */
    public function __construct(?\Ntvspa\Big\Travel\Structs\Operation $operation = null, ?ArrayOfTrainSchedule $trainSchedule = null)
    {
        $this
            ->setOperation($operation)
            ->setTrainSchedule($trainSchedule);
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
     * @return RetrieveItaloRealTimeResponse
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
     * Get TrainSchedule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Travel\Arrays\ArrayOfTrainSchedule|null
     */
    public function getTrainSchedule(): ?ArrayOfTrainSchedule
    {
        return $this->TrainSchedule ?? null;
    }

    /**
     * Set TrainSchedule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfTrainSchedule $trainSchedule
     *
     * @return RetrieveItaloRealTimeResponse
     */
    public function setTrainSchedule(?ArrayOfTrainSchedule $trainSchedule = null): self
    {
        if (is_null($trainSchedule) || (is_array($trainSchedule) && empty($trainSchedule))) {
            unset($this->TrainSchedule);
        } else {
            $this->TrainSchedule = $trainSchedule;
        }

        return $this;
    }
}

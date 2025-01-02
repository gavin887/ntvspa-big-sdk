<?php

declare(strict_types=1);

namespace Ntvspa\Big\Operation\Structs;

use AllowDynamicProperties;
use Operation\Arrays\ArrayOfResultStatus;
use Operation\Arrays\ArrayOfWarning;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssignCongiuntiSeatsResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AssignCongiuntiSeatsResponse | q2:AssignCongiuntiSeatsResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class AssignCongiuntiSeatsResponse extends AbstractStructBase
{
    /**
     * The Warnings
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Operation\Arrays\ArrayOfWarning|null
     */
    protected ?ArrayOfWarning $Warnings = null;
    /**
     * The Results
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Operation\Arrays\ArrayOfResultStatus|null
     */
    protected ?ArrayOfResultStatus $Results = null;

    /**
     * Constructor method for AssignCongiuntiSeatsResponse
     *
     * @param \Ntvspa\Big\Operation\Arrays\ArrayOfWarning      $warnings
     * @param \Ntvspa\Big\Operation\Arrays\ArrayOfResultStatus $results
     *
     * @uses AssignCongiuntiSeatsResponse::setWarnings()
     * @uses AssignCongiuntiSeatsResponse::setResults()
     */
    public function __construct(?ArrayOfWarning $warnings = null, ?ArrayOfResultStatus $results = null)
    {
        $this
            ->setWarnings($warnings)
            ->setResults($results);
    }

    /**
     * Get Warnings value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Operation\Arrays\ArrayOfWarning|null
     */
    public function getWarnings(): ?ArrayOfWarning
    {
        return $this->Warnings ?? null;
    }

    /**
     * Set Warnings value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Operation\Arrays\ArrayOfWarning $warnings
     *
     * @return AssignCongiuntiSeatsResponse
     */
    public function setWarnings(?ArrayOfWarning $warnings = null): self
    {
        if (is_null($warnings) || (is_array($warnings) && empty($warnings))) {
            unset($this->Warnings);
        } else {
            $this->Warnings = $warnings;
        }

        return $this;
    }

    /**
     * Get Results value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Operation\Arrays\ArrayOfResultStatus|null
     */
    public function getResults(): ?ArrayOfResultStatus
    {
        return $this->Results ?? null;
    }

    /**
     * Set Results value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Operation\Arrays\ArrayOfResultStatus $results
     *
     * @return AssignCongiuntiSeatsResponse
     */
    public function setResults(?ArrayOfResultStatus $results = null): self
    {
        if (is_null($results) || (is_array($results) && empty($results))) {
            unset($this->Results);
        } else {
            $this->Results = $results;
        }

        return $this;
    }
}

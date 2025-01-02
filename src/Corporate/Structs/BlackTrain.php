<?php

declare(strict_types=1);

namespace Ntvspa\Big\Corporate\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BlackTrain Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BlackTrain
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class BlackTrain extends AbstractStructBase
{
    /**
     * The TrainNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $TrainNumber = null;

    /**
     * Constructor method for BlackTrain
     *
     * @param string $trainNumber
     *
     * @uses BlackTrain::setTrainNumber()
     */
    public function __construct(?string $trainNumber = null)
    {
        $this
            ->setTrainNumber($trainNumber);
    }

    /**
     * Get TrainNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getTrainNumber(): ?string
    {
        return $this->TrainNumber ?? null;
    }

    /**
     * Set TrainNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $trainNumber
     *
     * @return BlackTrain
     */
    public function setTrainNumber(?string $trainNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($trainNumber) && !is_string($trainNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trainNumber, true), gettype($trainNumber)), __LINE__);
        }
        if (is_null($trainNumber) || (is_array($trainNumber) && empty($trainNumber))) {
            unset($this->TrainNumber);
        } else {
            $this->TrainNumber = $trainNumber;
        }

        return $this;
    }
}

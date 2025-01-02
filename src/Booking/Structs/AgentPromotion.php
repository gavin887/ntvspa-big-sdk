<?php

declare(strict_types=1);

namespace Ntvspa\Big\Booking\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Booking\Enums\EmployeeOffersType;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgentPromotion Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AgentPromotion
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class AgentPromotion extends AbstractStructBase
{
    /**
     * The AgentPromotionId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $AgentPromotionId = null;
    /**
     * The EmployeeOffersType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $EmployeeOffersType = null;

    /**
     * Constructor method for AgentPromotion
     *
     * @param string $agentPromotionId
     * @param string $employeeOffersType
     *
     * @uses AgentPromotion::setAgentPromotionId()
     * @uses AgentPromotion::setEmployeeOffersType()
     */
    public function __construct(?string $agentPromotionId = null, ?string $employeeOffersType = null)
    {
        $this
            ->setAgentPromotionId($agentPromotionId)
            ->setEmployeeOffersType($employeeOffersType);
    }

    /**
     * Get AgentPromotionId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getAgentPromotionId(): ?string
    {
        return $this->AgentPromotionId ?? null;
    }

    /**
     * Set AgentPromotionId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $agentPromotionId
     *
     * @return AgentPromotion
     */
    public function setAgentPromotionId(?string $agentPromotionId = null): self
    {
        // validation for constraint: string
        if (!is_null($agentPromotionId) && !is_string($agentPromotionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agentPromotionId, true), gettype($agentPromotionId)), __LINE__);
        }
        if (is_null($agentPromotionId) || (is_array($agentPromotionId) && empty($agentPromotionId))) {
            unset($this->AgentPromotionId);
        } else {
            $this->AgentPromotionId = $agentPromotionId;
        }

        return $this;
    }

    /**
     * Get EmployeeOffersType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getEmployeeOffersType(): ?string
    {
        return $this->EmployeeOffersType ?? null;
    }

    /**
     * Set EmployeeOffersType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $employeeOffersType
     *
     * @return AgentPromotion
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Booking\Enums\EmployeeOffersType::getValidValues()
     * @uses \Ntvspa\Big\Booking\Enums\EmployeeOffersType::valueIsValid()
     */
    public function setEmployeeOffersType(?string $employeeOffersType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Booking\Enums\EmployeeOffersType::valueIsValid($employeeOffersType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Booking\Enums\EmployeeOffersType', is_array($employeeOffersType) ? implode(', ', $employeeOffersType) : var_export($employeeOffersType, true), implode(', ', EmployeeOffersType::getValidValues())), __LINE__);
        }
        if (is_null($employeeOffersType) || (is_array($employeeOffersType) && empty($employeeOffersType))) {
            unset($this->EmployeeOffersType);
        } else {
            $this->EmployeeOffersType = $employeeOffersType;
        }

        return $this;
    }
}

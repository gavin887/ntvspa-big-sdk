<?php

declare(strict_types=1);

namespace Ntvspa\Big\Operation\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssignCongiuntiSeatsRequest Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AssignCongiuntiSeatsRequest | q1:AssignCongiuntiSeatsRequest
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class AssignCongiuntiSeatsRequest extends AbstractStructBase
{
    /**
     * The PNR
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $PNR = null;
    /**
     * The FirstName
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $FirstName = null;
    /**
     * The LastName
     * Meta information extracted from the WSDL
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $LastName = null;

    /**
     * Constructor method for AssignCongiuntiSeatsRequest
     *
     * @param string $pNR
     * @param string $firstName
     * @param string $lastName
     *
     * @uses AssignCongiuntiSeatsRequest::setPNR()
     * @uses AssignCongiuntiSeatsRequest::setFirstName()
     * @uses AssignCongiuntiSeatsRequest::setLastName()
     */
    public function __construct(?string $pNR = null, ?string $firstName = null, ?string $lastName = null)
    {
        $this
            ->setPNR($pNR)
            ->setFirstName($firstName)
            ->setLastName($lastName);
    }

    /**
     * Get PNR value
     *
     * @return string|null
     */
    public function getPNR(): ?string
    {
        return $this->PNR;
    }

    /**
     * Set PNR value
     *
     * @param string $pNR
     *
     * @return AssignCongiuntiSeatsRequest
     */
    public function setPNR(?string $pNR = null): self
    {
        // validation for constraint: string
        if (!is_null($pNR) && !is_string($pNR)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pNR, true), gettype($pNR)), __LINE__);
        }
        $this->PNR = $pNR;

        return $this;
    }

    /**
     * Get FirstName value
     *
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }

    /**
     * Set FirstName value
     *
     * @param string $firstName
     *
     * @return AssignCongiuntiSeatsRequest
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        $this->FirstName = $firstName;

        return $this;
    }

    /**
     * Get LastName value
     *
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    /**
     * Set LastName value
     *
     * @param string $lastName
     *
     * @return AssignCongiuntiSeatsRequest
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        $this->LastName = $lastName;

        return $this;
    }
}

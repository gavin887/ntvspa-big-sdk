<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Product\Arrays\ArrayOfanyType;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CardData Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CardData
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class CardData extends AbstractStructBase
{
    /**
     * The NotificationType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $NotificationType = null;
    /**
     * The Password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Password = null;
    /**
     * The AuthorizationPin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $AuthorizationPin = null;
    /**
     * The Approvals
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $Approvals = null;
    /**
     * The SecurityActivationToken
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $SecurityActivationToken = null;
    /**
     * The Holder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Holder|null
     */
    protected ?\Ntvspa\Big\Product\Structs\Holder $Holder = null;
    /**
     * The Partnerships
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Product\Arrays\ArrayOfanyType|null
     */
    protected ?ArrayOfanyType $Partnerships = null;
    /**
     * The MobileDevices
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $MobileDevices = null;

    /**
     * Constructor method for CardData
     *
     * @param int                                       $notificationType
     * @param string                                    $password
     * @param string                                    $authorizationPin
     * @param string                                    $approvals
     * @param string                                    $securityActivationToken
     * @param Holder                                    $holder
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfanyType $partnerships
     * @param string                                    $mobileDevices
     *
     * @uses CardData::setNotificationType()
     * @uses CardData::setPassword()
     * @uses CardData::setAuthorizationPin()
     * @uses CardData::setApprovals()
     * @uses CardData::setSecurityActivationToken()
     * @uses CardData::setHolder()
     * @uses CardData::setPartnerships()
     * @uses CardData::setMobileDevices()
     */
    public function __construct(?int $notificationType = null, ?string $password = null, ?string $authorizationPin = null, ?string $approvals = null, ?string $securityActivationToken = null, ?\Ntvspa\Big\Product\Structs\Holder $holder = null, ?ArrayOfanyType $partnerships = null, ?string $mobileDevices = null)
    {
        $this
            ->setNotificationType($notificationType)
            ->setPassword($password)
            ->setAuthorizationPin($authorizationPin)
            ->setApprovals($approvals)
            ->setSecurityActivationToken($securityActivationToken)
            ->setHolder($holder)
            ->setPartnerships($partnerships)
            ->setMobileDevices($mobileDevices);
    }

    /**
     * Get NotificationType value
     *
     * @return int|null
     */
    public function getNotificationType(): ?int
    {
        return $this->NotificationType;
    }

    /**
     * Set NotificationType value
     *
     * @param int $notificationType
     *
     * @return CardData
     */
    public function setNotificationType(?int $notificationType = null): self
    {
        // validation for constraint: int
        if (!is_null($notificationType) && !(is_int($notificationType) || ctype_digit($notificationType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($notificationType, true), gettype($notificationType)), __LINE__);
        }
        $this->NotificationType = $notificationType;

        return $this;
    }

    /**
     * Get Password value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->Password ?? null;
    }

    /**
     * Set Password value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $password
     *
     * @return CardData
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        if (is_null($password) || (is_array($password) && empty($password))) {
            unset($this->Password);
        } else {
            $this->Password = $password;
        }

        return $this;
    }

    /**
     * Get AuthorizationPin value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getAuthorizationPin(): ?string
    {
        return $this->AuthorizationPin ?? null;
    }

    /**
     * Set AuthorizationPin value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $authorizationPin
     *
     * @return CardData
     */
    public function setAuthorizationPin(?string $authorizationPin = null): self
    {
        // validation for constraint: string
        if (!is_null($authorizationPin) && !is_string($authorizationPin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authorizationPin, true), gettype($authorizationPin)), __LINE__);
        }
        if (is_null($authorizationPin) || (is_array($authorizationPin) && empty($authorizationPin))) {
            unset($this->AuthorizationPin);
        } else {
            $this->AuthorizationPin = $authorizationPin;
        }

        return $this;
    }

    /**
     * Get Approvals value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getApprovals(): ?string
    {
        return $this->Approvals ?? null;
    }

    /**
     * Set Approvals value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $approvals
     *
     * @return CardData
     */
    public function setApprovals(?string $approvals = null): self
    {
        // validation for constraint: string
        if (!is_null($approvals) && !is_string($approvals)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approvals, true), gettype($approvals)), __LINE__);
        }
        if (is_null($approvals) || (is_array($approvals) && empty($approvals))) {
            unset($this->Approvals);
        } else {
            $this->Approvals = $approvals;
        }

        return $this;
    }

    /**
     * Get SecurityActivationToken value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getSecurityActivationToken(): ?string
    {
        return $this->SecurityActivationToken ?? null;
    }

    /**
     * Set SecurityActivationToken value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $securityActivationToken
     *
     * @return CardData
     */
    public function setSecurityActivationToken(?string $securityActivationToken = null): self
    {
        // validation for constraint: string
        if (!is_null($securityActivationToken) && !is_string($securityActivationToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($securityActivationToken, true), gettype($securityActivationToken)), __LINE__);
        }
        if (is_null($securityActivationToken) || (is_array($securityActivationToken) && empty($securityActivationToken))) {
            unset($this->SecurityActivationToken);
        } else {
            $this->SecurityActivationToken = $securityActivationToken;
        }

        return $this;
    }

    /**
     * Get Holder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Holder|null
     */
    public function getHolder(): ?\Ntvspa\Big\Product\Structs\Holder
    {
        return $this->Holder ?? null;
    }

    /**
     * Set Holder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Holder $holder
     *
     * @return CardData
     */
    public function setHolder(?\Ntvspa\Big\Product\Structs\Holder $holder = null): self
    {
        if (is_null($holder) || (is_array($holder) && empty($holder))) {
            unset($this->Holder);
        } else {
            $this->Holder = $holder;
        }

        return $this;
    }

    /**
     * Get Partnerships value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Product\Arrays\ArrayOfanyType|null
     */
    public function getPartnerships(): ?ArrayOfanyType
    {
        return $this->Partnerships ?? null;
    }

    /**
     * Set Partnerships value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Product\Arrays\ArrayOfanyType $partnerships
     *
     * @return CardData
     */
    public function setPartnerships(?ArrayOfanyType $partnerships = null): self
    {
        if (is_null($partnerships) || (is_array($partnerships) && empty($partnerships))) {
            unset($this->Partnerships);
        } else {
            $this->Partnerships = $partnerships;
        }

        return $this;
    }

    /**
     * Get MobileDevices value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getMobileDevices(): ?string
    {
        return $this->MobileDevices ?? null;
    }

    /**
     * Set MobileDevices value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $mobileDevices
     *
     * @return CardData
     */
    public function setMobileDevices(?string $mobileDevices = null): self
    {
        // validation for constraint: string
        if (!is_null($mobileDevices) && !is_string($mobileDevices)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobileDevices, true), gettype($mobileDevices)), __LINE__);
        }
        if (is_null($mobileDevices) || (is_array($mobileDevices) && empty($mobileDevices))) {
            unset($this->MobileDevices);
        } else {
            $this->MobileDevices = $mobileDevices;
        }

        return $this;
    }
}

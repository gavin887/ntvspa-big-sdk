<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use Ntvspa\Big\Product\Enums\BuyerHolderType;
use Ntvspa\Big\Product\Enums\CorporateCarnetType;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CatalogEligibilityCondition Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CatalogEligibilityCondition
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class CatalogEligibilityCondition extends AbstractStructBase
{
    /**
     * The Buyer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $Buyer = null;
    /**
     * The Holder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $Holder = null;
    /**
     * The CarnetType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var string|null
     */
    protected ?string $CarnetType = null;

    /**
     * Constructor method for CatalogEligibilityCondition
     *
     * @param string $buyer
     * @param string $holder
     * @param string $carnetType
     *
     * @uses CatalogEligibilityCondition::setBuyer()
     * @uses CatalogEligibilityCondition::setHolder()
     * @uses CatalogEligibilityCondition::setCarnetType()
     */
    public function __construct(?string $buyer = null, ?string $holder = null, ?string $carnetType = null)
    {
        $this
            ->setBuyer($buyer)
            ->setHolder($holder)
            ->setCarnetType($carnetType);
    }

    /**
     * Get Buyer value
     *
     * @return string|null
     */
    public function getBuyer(): ?string
    {
        return $this->Buyer;
    }

    /**
     * Set Buyer value
     *
     * @param string $buyer
     *
     * @return CatalogEligibilityCondition
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Product\Enums\BuyerHolderType::getValidValues()
     * @uses \Ntvspa\Big\Product\Enums\BuyerHolderType::valueIsValid()
     */
    public function setBuyer(?string $buyer = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Product\Enums\BuyerHolderType::valueIsValid($buyer)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Product\Enums\BuyerHolderType', is_array($buyer) ? implode(', ', $buyer) : var_export($buyer, true), implode(', ', BuyerHolderType::getValidValues())), __LINE__);
        }
        $this->Buyer = $buyer;

        return $this;
    }

    /**
     * Get Holder value
     *
     * @return string|null
     */
    public function getHolder(): ?string
    {
        return $this->Holder;
    }

    /**
     * Set Holder value
     *
     * @param string $holder
     *
     * @return CatalogEligibilityCondition
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Product\Enums\BuyerHolderType::getValidValues()
     * @uses \Ntvspa\Big\Product\Enums\BuyerHolderType::valueIsValid()
     */
    public function setHolder(?string $holder = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Product\Enums\BuyerHolderType::valueIsValid($holder)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Product\Enums\BuyerHolderType', is_array($holder) ? implode(', ', $holder) : var_export($holder, true), implode(', ', BuyerHolderType::getValidValues())), __LINE__);
        }
        $this->Holder = $holder;

        return $this;
    }

    /**
     * Get CarnetType value
     *
     * @return string|null
     */
    public function getCarnetType(): ?string
    {
        return $this->CarnetType;
    }

    /**
     * Set CarnetType value
     *
     * @param string $carnetType
     *
     * @return CatalogEligibilityCondition
     * @throws InvalidArgumentException
     * @uses \Ntvspa\Big\Product\Enums\CorporateCarnetType::getValidValues()
     * @uses \Ntvspa\Big\Product\Enums\CorporateCarnetType::valueIsValid()
     */
    public function setCarnetType(?string $carnetType = null): self
    {
        // validation for constraint: enumeration
        if (!\Ntvspa\Big\Product\Enums\CorporateCarnetType::valueIsValid($carnetType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ntvspa\Big\Product\Enums\CorporateCarnetType', is_array($carnetType) ? implode(', ', $carnetType) : var_export($carnetType, true), implode(', ', CorporateCarnetType::getValidValues())), __LINE__);
        }
        $this->CarnetType = $carnetType;

        return $this;
    }
}

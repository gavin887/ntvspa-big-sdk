<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Offer Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Offer
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Offer extends AbstractStructBase
{
    /**
     * The GrossCardValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $GrossCardValue = null;
    /**
     * The NetCardValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $NetCardValue = null;
    /**
     * The DiscountRate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $DiscountRate = null;
    /**
     * The GrossDiscountValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $GrossDiscountValue = null;
    /**
     * The NetDiscountValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $NetDiscountValue = null;
    /**
     * The GrossPaidValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $GrossPaidValue = null;
    /**
     * The NetPaidValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $NetPaidValue = null;
    /**
     * The TaxRate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $TaxRate = null;
    /**
     * The TaxValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $TaxValue = null;
    /**
     * The MigratingThreshold
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $MigratingThreshold = null;
    /**
     * The ProductId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ProductId = null;
    /**
     * The CardSubType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $CardSubType = null;
    /**
     * The Parameters
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Parameter|null
     */
    protected ?\Ntvspa\Big\Product\Structs\Parameter $Parameters = null;

    /**
     * Constructor method for Offer
     *
     * @param float     $grossCardValue
     * @param float     $netCardValue
     * @param float     $discountRate
     * @param float     $grossDiscountValue
     * @param float     $netDiscountValue
     * @param float     $grossPaidValue
     * @param float     $netPaidValue
     * @param float     $taxRate
     * @param float     $taxValue
     * @param float     $migratingThreshold
     * @param string    $productId
     * @param string    $cardSubType
     * @param Parameter $parameters
     *
     * @uses Offer::setGrossCardValue()
     * @uses Offer::setNetCardValue()
     * @uses Offer::setDiscountRate()
     * @uses Offer::setGrossDiscountValue()
     * @uses Offer::setNetDiscountValue()
     * @uses Offer::setGrossPaidValue()
     * @uses Offer::setNetPaidValue()
     * @uses Offer::setTaxRate()
     * @uses Offer::setTaxValue()
     * @uses Offer::setMigratingThreshold()
     * @uses Offer::setProductId()
     * @uses Offer::setCardSubType()
     * @uses Offer::setParameters()
     */
    public function __construct(?float $grossCardValue = null, ?float $netCardValue = null, ?float $discountRate = null, ?float $grossDiscountValue = null, ?float $netDiscountValue = null, ?float $grossPaidValue = null, ?float $netPaidValue = null, ?float $taxRate = null, ?float $taxValue = null, ?float $migratingThreshold = null, ?string $productId = null, ?string $cardSubType = null, ?\Ntvspa\Big\Product\Structs\Parameter $parameters = null)
    {
        $this
            ->setGrossCardValue($grossCardValue)
            ->setNetCardValue($netCardValue)
            ->setDiscountRate($discountRate)
            ->setGrossDiscountValue($grossDiscountValue)
            ->setNetDiscountValue($netDiscountValue)
            ->setGrossPaidValue($grossPaidValue)
            ->setNetPaidValue($netPaidValue)
            ->setTaxRate($taxRate)
            ->setTaxValue($taxValue)
            ->setMigratingThreshold($migratingThreshold)
            ->setProductId($productId)
            ->setCardSubType($cardSubType)
            ->setParameters($parameters);
    }

    /**
     * Get GrossCardValue value
     *
     * @return float|null
     */
    public function getGrossCardValue(): ?float
    {
        return $this->GrossCardValue;
    }

    /**
     * Set GrossCardValue value
     *
     * @param float $grossCardValue
     *
     * @return Offer
     */
    public function setGrossCardValue(?float $grossCardValue = null): self
    {
        // validation for constraint: float
        if (!is_null($grossCardValue) && !(is_float($grossCardValue) || is_numeric($grossCardValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grossCardValue, true), gettype($grossCardValue)), __LINE__);
        }
        $this->GrossCardValue = $grossCardValue;

        return $this;
    }

    /**
     * Get NetCardValue value
     *
     * @return float|null
     */
    public function getNetCardValue(): ?float
    {
        return $this->NetCardValue;
    }

    /**
     * Set NetCardValue value
     *
     * @param float $netCardValue
     *
     * @return Offer
     */
    public function setNetCardValue(?float $netCardValue = null): self
    {
        // validation for constraint: float
        if (!is_null($netCardValue) && !(is_float($netCardValue) || is_numeric($netCardValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($netCardValue, true), gettype($netCardValue)), __LINE__);
        }
        $this->NetCardValue = $netCardValue;

        return $this;
    }

    /**
     * Get DiscountRate value
     *
     * @return float|null
     */
    public function getDiscountRate(): ?float
    {
        return $this->DiscountRate;
    }

    /**
     * Set DiscountRate value
     *
     * @param float $discountRate
     *
     * @return Offer
     */
    public function setDiscountRate(?float $discountRate = null): self
    {
        // validation for constraint: float
        if (!is_null($discountRate) && !(is_float($discountRate) || is_numeric($discountRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($discountRate, true), gettype($discountRate)), __LINE__);
        }
        $this->DiscountRate = $discountRate;

        return $this;
    }

    /**
     * Get GrossDiscountValue value
     *
     * @return float|null
     */
    public function getGrossDiscountValue(): ?float
    {
        return $this->GrossDiscountValue;
    }

    /**
     * Set GrossDiscountValue value
     *
     * @param float $grossDiscountValue
     *
     * @return Offer
     */
    public function setGrossDiscountValue(?float $grossDiscountValue = null): self
    {
        // validation for constraint: float
        if (!is_null($grossDiscountValue) && !(is_float($grossDiscountValue) || is_numeric($grossDiscountValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grossDiscountValue, true), gettype($grossDiscountValue)), __LINE__);
        }
        $this->GrossDiscountValue = $grossDiscountValue;

        return $this;
    }

    /**
     * Get NetDiscountValue value
     *
     * @return float|null
     */
    public function getNetDiscountValue(): ?float
    {
        return $this->NetDiscountValue;
    }

    /**
     * Set NetDiscountValue value
     *
     * @param float $netDiscountValue
     *
     * @return Offer
     */
    public function setNetDiscountValue(?float $netDiscountValue = null): self
    {
        // validation for constraint: float
        if (!is_null($netDiscountValue) && !(is_float($netDiscountValue) || is_numeric($netDiscountValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($netDiscountValue, true), gettype($netDiscountValue)), __LINE__);
        }
        $this->NetDiscountValue = $netDiscountValue;

        return $this;
    }

    /**
     * Get GrossPaidValue value
     *
     * @return float|null
     */
    public function getGrossPaidValue(): ?float
    {
        return $this->GrossPaidValue;
    }

    /**
     * Set GrossPaidValue value
     *
     * @param float $grossPaidValue
     *
     * @return Offer
     */
    public function setGrossPaidValue(?float $grossPaidValue = null): self
    {
        // validation for constraint: float
        if (!is_null($grossPaidValue) && !(is_float($grossPaidValue) || is_numeric($grossPaidValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grossPaidValue, true), gettype($grossPaidValue)), __LINE__);
        }
        $this->GrossPaidValue = $grossPaidValue;

        return $this;
    }

    /**
     * Get NetPaidValue value
     *
     * @return float|null
     */
    public function getNetPaidValue(): ?float
    {
        return $this->NetPaidValue;
    }

    /**
     * Set NetPaidValue value
     *
     * @param float $netPaidValue
     *
     * @return Offer
     */
    public function setNetPaidValue(?float $netPaidValue = null): self
    {
        // validation for constraint: float
        if (!is_null($netPaidValue) && !(is_float($netPaidValue) || is_numeric($netPaidValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($netPaidValue, true), gettype($netPaidValue)), __LINE__);
        }
        $this->NetPaidValue = $netPaidValue;

        return $this;
    }

    /**
     * Get TaxRate value
     *
     * @return float|null
     */
    public function getTaxRate(): ?float
    {
        return $this->TaxRate;
    }

    /**
     * Set TaxRate value
     *
     * @param float $taxRate
     *
     * @return Offer
     */
    public function setTaxRate(?float $taxRate = null): self
    {
        // validation for constraint: float
        if (!is_null($taxRate) && !(is_float($taxRate) || is_numeric($taxRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($taxRate, true), gettype($taxRate)), __LINE__);
        }
        $this->TaxRate = $taxRate;

        return $this;
    }

    /**
     * Get TaxValue value
     *
     * @return float|null
     */
    public function getTaxValue(): ?float
    {
        return $this->TaxValue;
    }

    /**
     * Set TaxValue value
     *
     * @param float $taxValue
     *
     * @return Offer
     */
    public function setTaxValue(?float $taxValue = null): self
    {
        // validation for constraint: float
        if (!is_null($taxValue) && !(is_float($taxValue) || is_numeric($taxValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($taxValue, true), gettype($taxValue)), __LINE__);
        }
        $this->TaxValue = $taxValue;

        return $this;
    }

    /**
     * Get MigratingThreshold value
     *
     * @return float|null
     */
    public function getMigratingThreshold(): ?float
    {
        return $this->MigratingThreshold;
    }

    /**
     * Set MigratingThreshold value
     *
     * @param float $migratingThreshold
     *
     * @return Offer
     */
    public function setMigratingThreshold(?float $migratingThreshold = null): self
    {
        // validation for constraint: float
        if (!is_null($migratingThreshold) && !(is_float($migratingThreshold) || is_numeric($migratingThreshold))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($migratingThreshold, true), gettype($migratingThreshold)), __LINE__);
        }
        $this->MigratingThreshold = $migratingThreshold;

        return $this;
    }

    /**
     * Get ProductId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getProductId(): ?string
    {
        return $this->ProductId ?? null;
    }

    /**
     * Set ProductId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $productId
     *
     * @return Offer
     */
    public function setProductId(?string $productId = null): self
    {
        // validation for constraint: string
        if (!is_null($productId) && !is_string($productId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productId, true), gettype($productId)), __LINE__);
        }
        if (is_null($productId) || (is_array($productId) && empty($productId))) {
            unset($this->ProductId);
        } else {
            $this->ProductId = $productId;
        }

        return $this;
    }

    /**
     * Get CardSubType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getCardSubType(): ?string
    {
        return $this->CardSubType ?? null;
    }

    /**
     * Set CardSubType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $cardSubType
     *
     * @return Offer
     */
    public function setCardSubType(?string $cardSubType = null): self
    {
        // validation for constraint: string
        if (!is_null($cardSubType) && !is_string($cardSubType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardSubType, true), gettype($cardSubType)), __LINE__);
        }
        if (is_null($cardSubType) || (is_array($cardSubType) && empty($cardSubType))) {
            unset($this->CardSubType);
        } else {
            $this->CardSubType = $cardSubType;
        }

        return $this;
    }

    /**
     * Get Parameters value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Parameter|null
     */
    public function getParameters(): ?\Ntvspa\Big\Product\Structs\Parameter
    {
        return $this->Parameters ?? null;
    }

    /**
     * Set Parameters value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Parameter $parameters
     *
     * @return Offer
     */
    public function setParameters(?\Ntvspa\Big\Product\Structs\Parameter $parameters = null): self
    {
        if (is_null($parameters) || (is_array($parameters) && empty($parameters))) {
            unset($this->Parameters);
        } else {
            $this->Parameters = $parameters;
        }

        return $this;
    }
}

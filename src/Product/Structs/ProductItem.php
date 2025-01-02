<?php

declare(strict_types=1);

namespace Ntvspa\Big\Product\Structs;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductItem Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductItem
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ProductItem extends AbstractStructBase
{
    /**
     * The Price
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $Price = null;
    /**
     * The Vat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var float|null
     */
    protected ?float $Vat = null;
    /**
     * The AvailabiltiyTotal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $AvailabiltiyTotal = null;
    /**
     * The AvailabiltiyResidual
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $AvailabiltiyResidual = null;
    /**
     * The AvailabiltiyPromotiontalTotal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $AvailabiltiyPromotiontalTotal = null;
    /**
     * The AvailabiltiyPromotiontalResidual
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     *
     * @var int|null
     */
    protected ?int $AvailabiltiyPromotiontalResidual = null;
    /**
     * The ProductItemID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var string|null
     */
    protected ?string $ProductItemID = null;
    /**
     * The ItemAttribute
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var ItemAttribute|null
     */
    protected ?\Ntvspa\Big\Product\Structs\ItemAttribute $ItemAttribute = null;
    /**
     * The Promotion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var Promotion|null
     */
    protected ?\Ntvspa\Big\Product\Structs\Promotion $Promotion = null;

    /**
     * Constructor method for ProductItem
     *
     * @param float         $price
     * @param float         $vat
     * @param int           $availabiltiyTotal
     * @param int           $availabiltiyResidual
     * @param int           $availabiltiyPromotiontalTotal
     * @param int           $availabiltiyPromotiontalResidual
     * @param string        $productItemID
     * @param ItemAttribute $itemAttribute
     * @param Promotion     $promotion
     *
     * @uses ProductItem::setPrice()
     * @uses ProductItem::setVat()
     * @uses ProductItem::setAvailabiltiyTotal()
     * @uses ProductItem::setAvailabiltiyResidual()
     * @uses ProductItem::setAvailabiltiyPromotiontalTotal()
     * @uses ProductItem::setAvailabiltiyPromotiontalResidual()
     * @uses ProductItem::setProductItemID()
     * @uses ProductItem::setItemAttribute()
     * @uses ProductItem::setPromotion()
     */
    public function __construct(?float $price = null, ?float $vat = null, ?int $availabiltiyTotal = null, ?int $availabiltiyResidual = null, ?int $availabiltiyPromotiontalTotal = null, ?int $availabiltiyPromotiontalResidual = null, ?string $productItemID = null, ?\Ntvspa\Big\Product\Structs\ItemAttribute $itemAttribute = null, ?\Ntvspa\Big\Product\Structs\Promotion $promotion = null)
    {
        $this
            ->setPrice($price)
            ->setVat($vat)
            ->setAvailabiltiyTotal($availabiltiyTotal)
            ->setAvailabiltiyResidual($availabiltiyResidual)
            ->setAvailabiltiyPromotiontalTotal($availabiltiyPromotiontalTotal)
            ->setAvailabiltiyPromotiontalResidual($availabiltiyPromotiontalResidual)
            ->setProductItemID($productItemID)
            ->setItemAttribute($itemAttribute)
            ->setPromotion($promotion);
    }

    /**
     * Get Price value
     *
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->Price;
    }

    /**
     * Set Price value
     *
     * @param float $price
     *
     * @return ProductItem
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->Price = $price;

        return $this;
    }

    /**
     * Get Vat value
     *
     * @return float|null
     */
    public function getVat(): ?float
    {
        return $this->Vat;
    }

    /**
     * Set Vat value
     *
     * @param float $vat
     *
     * @return ProductItem
     */
    public function setVat(?float $vat = null): self
    {
        // validation for constraint: float
        if (!is_null($vat) && !(is_float($vat) || is_numeric($vat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat, true), gettype($vat)), __LINE__);
        }
        $this->Vat = $vat;

        return $this;
    }

    /**
     * Get AvailabiltiyTotal value
     *
     * @return int|null
     */
    public function getAvailabiltiyTotal(): ?int
    {
        return $this->AvailabiltiyTotal;
    }

    /**
     * Set AvailabiltiyTotal value
     *
     * @param int $availabiltiyTotal
     *
     * @return ProductItem
     */
    public function setAvailabiltiyTotal(?int $availabiltiyTotal = null): self
    {
        // validation for constraint: int
        if (!is_null($availabiltiyTotal) && !(is_int($availabiltiyTotal) || ctype_digit($availabiltiyTotal))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($availabiltiyTotal, true), gettype($availabiltiyTotal)), __LINE__);
        }
        $this->AvailabiltiyTotal = $availabiltiyTotal;

        return $this;
    }

    /**
     * Get AvailabiltiyResidual value
     *
     * @return int|null
     */
    public function getAvailabiltiyResidual(): ?int
    {
        return $this->AvailabiltiyResidual;
    }

    /**
     * Set AvailabiltiyResidual value
     *
     * @param int $availabiltiyResidual
     *
     * @return ProductItem
     */
    public function setAvailabiltiyResidual(?int $availabiltiyResidual = null): self
    {
        // validation for constraint: int
        if (!is_null($availabiltiyResidual) && !(is_int($availabiltiyResidual) || ctype_digit($availabiltiyResidual))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($availabiltiyResidual, true), gettype($availabiltiyResidual)), __LINE__);
        }
        $this->AvailabiltiyResidual = $availabiltiyResidual;

        return $this;
    }

    /**
     * Get AvailabiltiyPromotiontalTotal value
     *
     * @return int|null
     */
    public function getAvailabiltiyPromotiontalTotal(): ?int
    {
        return $this->AvailabiltiyPromotiontalTotal;
    }

    /**
     * Set AvailabiltiyPromotiontalTotal value
     *
     * @param int $availabiltiyPromotiontalTotal
     *
     * @return ProductItem
     */
    public function setAvailabiltiyPromotiontalTotal(?int $availabiltiyPromotiontalTotal = null): self
    {
        // validation for constraint: int
        if (!is_null($availabiltiyPromotiontalTotal) && !(is_int($availabiltiyPromotiontalTotal) || ctype_digit($availabiltiyPromotiontalTotal))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($availabiltiyPromotiontalTotal, true), gettype($availabiltiyPromotiontalTotal)), __LINE__);
        }
        $this->AvailabiltiyPromotiontalTotal = $availabiltiyPromotiontalTotal;

        return $this;
    }

    /**
     * Get AvailabiltiyPromotiontalResidual value
     *
     * @return int|null
     */
    public function getAvailabiltiyPromotiontalResidual(): ?int
    {
        return $this->AvailabiltiyPromotiontalResidual;
    }

    /**
     * Set AvailabiltiyPromotiontalResidual value
     *
     * @param int $availabiltiyPromotiontalResidual
     *
     * @return ProductItem
     */
    public function setAvailabiltiyPromotiontalResidual(?int $availabiltiyPromotiontalResidual = null): self
    {
        // validation for constraint: int
        if (!is_null($availabiltiyPromotiontalResidual) && !(is_int($availabiltiyPromotiontalResidual) || ctype_digit($availabiltiyPromotiontalResidual))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($availabiltiyPromotiontalResidual, true), gettype($availabiltiyPromotiontalResidual)), __LINE__);
        }
        $this->AvailabiltiyPromotiontalResidual = $availabiltiyPromotiontalResidual;

        return $this;
    }

    /**
     * Get ProductItemID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return string|null
     */
    public function getProductItemID(): ?string
    {
        return $this->ProductItemID ?? null;
    }

    /**
     * Set ProductItemID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param string $productItemID
     *
     * @return ProductItem
     */
    public function setProductItemID(?string $productItemID = null): self
    {
        // validation for constraint: string
        if (!is_null($productItemID) && !is_string($productItemID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productItemID, true), gettype($productItemID)), __LINE__);
        }
        if (is_null($productItemID) || (is_array($productItemID) && empty($productItemID))) {
            unset($this->ProductItemID);
        } else {
            $this->ProductItemID = $productItemID;
        }

        return $this;
    }

    /**
     * Get ItemAttribute value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return ItemAttribute|null
     */
    public function getItemAttribute(): ?\Ntvspa\Big\Product\Structs\ItemAttribute
    {
        return $this->ItemAttribute ?? null;
    }

    /**
     * Set ItemAttribute value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param ItemAttribute $itemAttribute
     *
     * @return ProductItem
     */
    public function setItemAttribute(?\Ntvspa\Big\Product\Structs\ItemAttribute $itemAttribute = null): self
    {
        if (is_null($itemAttribute) || (is_array($itemAttribute) && empty($itemAttribute))) {
            unset($this->ItemAttribute);
        } else {
            $this->ItemAttribute = $itemAttribute;
        }

        return $this;
    }

    /**
     * Get Promotion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return Promotion|null
     */
    public function getPromotion(): ?\Ntvspa\Big\Product\Structs\Promotion
    {
        return $this->Promotion ?? null;
    }

    /**
     * Set Promotion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param Promotion $promotion
     *
     * @return ProductItem
     */
    public function setPromotion(?\Ntvspa\Big\Product\Structs\Promotion $promotion = null): self
    {
        if (is_null($promotion) || (is_array($promotion) && empty($promotion))) {
            unset($this->Promotion);
        } else {
            $this->Promotion = $promotion;
        }

        return $this;
    }
}

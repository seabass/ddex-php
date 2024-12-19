<?php

namespace DDEX\DSR\DSR_420;

/**
 * Class representing TaxRateType
 *
 * A Composite containing details of a TaxRate.
 * XSD Type: TaxRate
 */
class TaxRateType
{
    /**
     * The TaxRate as a percentage.
     *
     * @var float $rate
     */
    private $rate = null;

    /**
     * A Composite containing details of the Type of Tax.
     *
     * @var \DDEX\DSR\DSR_420\TaxTypeType[] $taxType
     */
    private $taxType = [
        
    ];

    /**
     * A Composite containing details of the Type of Tax according to its scope.
     *
     * @var \DDEX\DSR\DSR_420\TaxScopeType[] $taxScope
     */
    private $taxScope = [
        
    ];

    /**
     * Gets as rate
     *
     * The TaxRate as a percentage.
     *
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * The TaxRate as a percentage.
     *
     * @param float $rate
     * @return self
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * Adds as taxType
     *
     * A Composite containing details of the Type of Tax.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\TaxTypeType $taxType
     */
    public function addToTaxType(\DDEX\DSR\DSR_420\TaxTypeType $taxType)
    {
        $this->taxType[] = $taxType;
        return $this;
    }

    /**
     * isset taxType
     *
     * A Composite containing details of the Type of Tax.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxType($index)
    {
        return isset($this->taxType[$index]);
    }

    /**
     * unset taxType
     *
     * A Composite containing details of the Type of Tax.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxType($index)
    {
        unset($this->taxType[$index]);
    }

    /**
     * Gets as taxType
     *
     * A Composite containing details of the Type of Tax.
     *
     * @return \DDEX\DSR\DSR_420\TaxTypeType[]
     */
    public function getTaxType()
    {
        return $this->taxType;
    }

    /**
     * Sets a new taxType
     *
     * A Composite containing details of the Type of Tax.
     *
     * @param \DDEX\DSR\DSR_420\TaxTypeType[] $taxType
     * @return self
     */
    public function setTaxType(array $taxType)
    {
        $this->taxType = $taxType;
        return $this;
    }

    /**
     * Adds as taxScope
     *
     * A Composite containing details of the Type of Tax according to its scope.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\TaxScopeType $taxScope
     */
    public function addToTaxScope(\DDEX\DSR\DSR_420\TaxScopeType $taxScope)
    {
        $this->taxScope[] = $taxScope;
        return $this;
    }

    /**
     * isset taxScope
     *
     * A Composite containing details of the Type of Tax according to its scope.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxScope($index)
    {
        return isset($this->taxScope[$index]);
    }

    /**
     * unset taxScope
     *
     * A Composite containing details of the Type of Tax according to its scope.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxScope($index)
    {
        unset($this->taxScope[$index]);
    }

    /**
     * Gets as taxScope
     *
     * A Composite containing details of the Type of Tax according to its scope.
     *
     * @return \DDEX\DSR\DSR_420\TaxScopeType[]
     */
    public function getTaxScope()
    {
        return $this->taxScope;
    }

    /**
     * Sets a new taxScope
     *
     * A Composite containing details of the Type of Tax according to its scope.
     *
     * @param \DDEX\DSR\DSR_420\TaxScopeType[] $taxScope
     * @return self
     */
    public function setTaxScope(array $taxScope)
    {
        $this->taxScope = $taxScope;
        return $this;
    }
}


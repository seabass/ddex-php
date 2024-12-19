<?php

namespace DDEX\MWL\MWL_212;

/**
 * Class representing RoyaltyRateType
 *
 * A ddex:Composite containing details of a
 *  ddex:RoyaltyRate.
 * XSD Type: RoyaltyRate
 */
class RoyaltyRateType
{
    /**
     * A ddex:Composite containing details of the
     *  ddex:Type of the ddex:RoyaltyRate. Either this ddex:Element or ddex:RoyaltyAmount
     *  shall be present, but not both.
     *
     * @var \DDEX\ddexC\RoyaltyCodeType $royaltyCode
     */
    private $royaltyCode = null;

    /**
     * A ddex:Composite containing details of a
     *  ddex:RoyaltyAmount. Either this ddex:Element or ddex:RoyaltyCode shall be present,
     *  but not both.
     *
     * @var \DDEX\ddexC\RoyaltyAmountType $royaltyAmount
     */
    private $royaltyAmount = null;

    /**
     * A ddex:Type of ddex:RoyaltyRateCalculation
     *  according to the ddex:License or ddex:Claim conditions.
     *
     * @var string $royaltyRateCalculationType
     */
    private $royaltyRateCalculationType = null;

    /**
     * A ddex:Type of ddex:RoyaltyRate according
     *  to the ddex:License or ddex:Claim conditions.
     *
     * @var string $royaltyRateType
     */
    private $royaltyRateType = null;

    /**
     * Gets as royaltyCode
     *
     * A ddex:Composite containing details of the
     *  ddex:Type of the ddex:RoyaltyRate. Either this ddex:Element or ddex:RoyaltyAmount
     *  shall be present, but not both.
     *
     * @return \DDEX\ddexC\RoyaltyCodeType
     */
    public function getRoyaltyCode()
    {
        return $this->royaltyCode;
    }

    /**
     * Sets a new royaltyCode
     *
     * A ddex:Composite containing details of the
     *  ddex:Type of the ddex:RoyaltyRate. Either this ddex:Element or ddex:RoyaltyAmount
     *  shall be present, but not both.
     *
     * @param \DDEX\ddexC\RoyaltyCodeType $royaltyCode
     * @return self
     */
    public function setRoyaltyCode(?\DDEX\ddexC\RoyaltyCodeType $royaltyCode = null)
    {
        $this->royaltyCode = $royaltyCode;
        return $this;
    }

    /**
     * Gets as royaltyAmount
     *
     * A ddex:Composite containing details of a
     *  ddex:RoyaltyAmount. Either this ddex:Element or ddex:RoyaltyCode shall be present,
     *  but not both.
     *
     * @return \DDEX\ddexC\RoyaltyAmountType
     */
    public function getRoyaltyAmount()
    {
        return $this->royaltyAmount;
    }

    /**
     * Sets a new royaltyAmount
     *
     * A ddex:Composite containing details of a
     *  ddex:RoyaltyAmount. Either this ddex:Element or ddex:RoyaltyCode shall be present,
     *  but not both.
     *
     * @param \DDEX\ddexC\RoyaltyAmountType $royaltyAmount
     * @return self
     */
    public function setRoyaltyAmount(?\DDEX\ddexC\RoyaltyAmountType $royaltyAmount = null)
    {
        $this->royaltyAmount = $royaltyAmount;
        return $this;
    }

    /**
     * Gets as royaltyRateCalculationType
     *
     * A ddex:Type of ddex:RoyaltyRateCalculation
     *  according to the ddex:License or ddex:Claim conditions.
     *
     * @return string
     */
    public function getRoyaltyRateCalculationType()
    {
        return $this->royaltyRateCalculationType;
    }

    /**
     * Sets a new royaltyRateCalculationType
     *
     * A ddex:Type of ddex:RoyaltyRateCalculation
     *  according to the ddex:License or ddex:Claim conditions.
     *
     * @param string $royaltyRateCalculationType
     * @return self
     */
    public function setRoyaltyRateCalculationType($royaltyRateCalculationType)
    {
        $this->royaltyRateCalculationType = $royaltyRateCalculationType;
        return $this;
    }

    /**
     * Gets as royaltyRateType
     *
     * A ddex:Type of ddex:RoyaltyRate according
     *  to the ddex:License or ddex:Claim conditions.
     *
     * @return string
     */
    public function getRoyaltyRateType()
    {
        return $this->royaltyRateType;
    }

    /**
     * Sets a new royaltyRateType
     *
     * A ddex:Type of ddex:RoyaltyRate according
     *  to the ddex:License or ddex:Claim conditions.
     *
     * @param string $royaltyRateType
     * @return self
     */
    public function setRoyaltyRateType($royaltyRateType)
    {
        $this->royaltyRateType = $royaltyRateType;
        return $this;
    }
}


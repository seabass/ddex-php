<?php

namespace DDEX\MWN\MWN_US_LIC_100;

/**
 * Class representing RoyaltyRateType
 *
 * A Composite containing details of a RoyaltyRate.
 * XSD Type: RoyaltyRate
 */
class RoyaltyRateType
{
    /**
     * A Composite containing details of the Type of the RoyaltyRate. Either this Element or RoyaltyAmount shall be present, but not both.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\RoyaltyCodeType $royaltyCode
     */
    private $royaltyCode = null;

    /**
     * A Composite containing details of a RoyaltyAmount. Either this Element or RoyaltyCode shall be present, but not both.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\RoyaltyAmountType $royaltyAmount
     */
    private $royaltyAmount = null;

    /**
     * A Type of RoyaltyRate Calculation according to the License or Claim conditions.
     *
     * @var string $royaltyRateCalculationType
     */
    private $royaltyRateCalculationType = null;

    /**
     * A Type of RoyaltyRate according to the License or Claim conditions.
     *
     * @var string $royaltyRateType
     */
    private $royaltyRateType = null;

    /**
     * A Composite containing details of a PercentageRate. The percentage is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%).
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\PercentageRateType[] $percentageRate
     */
    private $percentageRate = [
        
    ];

    /**
     * Gets as royaltyCode
     *
     * A Composite containing details of the Type of the RoyaltyRate. Either this Element or RoyaltyAmount shall be present, but not both.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\RoyaltyCodeType
     */
    public function getRoyaltyCode()
    {
        return $this->royaltyCode;
    }

    /**
     * Sets a new royaltyCode
     *
     * A Composite containing details of the Type of the RoyaltyRate. Either this Element or RoyaltyAmount shall be present, but not both.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\RoyaltyCodeType $royaltyCode
     * @return self
     */
    public function setRoyaltyCode(?\DDEX\MWN\MWN_US_LIC_100\RoyaltyCodeType $royaltyCode = null)
    {
        $this->royaltyCode = $royaltyCode;
        return $this;
    }

    /**
     * Gets as royaltyAmount
     *
     * A Composite containing details of a RoyaltyAmount. Either this Element or RoyaltyCode shall be present, but not both.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\RoyaltyAmountType
     */
    public function getRoyaltyAmount()
    {
        return $this->royaltyAmount;
    }

    /**
     * Sets a new royaltyAmount
     *
     * A Composite containing details of a RoyaltyAmount. Either this Element or RoyaltyCode shall be present, but not both.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\RoyaltyAmountType $royaltyAmount
     * @return self
     */
    public function setRoyaltyAmount(?\DDEX\MWN\MWN_US_LIC_100\RoyaltyAmountType $royaltyAmount = null)
    {
        $this->royaltyAmount = $royaltyAmount;
        return $this;
    }

    /**
     * Gets as royaltyRateCalculationType
     *
     * A Type of RoyaltyRate Calculation according to the License or Claim conditions.
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
     * A Type of RoyaltyRate Calculation according to the License or Claim conditions.
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
     * A Type of RoyaltyRate according to the License or Claim conditions.
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
     * A Type of RoyaltyRate according to the License or Claim conditions.
     *
     * @param string $royaltyRateType
     * @return self
     */
    public function setRoyaltyRateType($royaltyRateType)
    {
        $this->royaltyRateType = $royaltyRateType;
        return $this;
    }

    /**
     * Adds as percentageRate
     *
     * A Composite containing details of a PercentageRate. The percentage is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%).
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_100\PercentageRateType $percentageRate
     */
    public function addToPercentageRate(\DDEX\MWN\MWN_US_LIC_100\PercentageRateType $percentageRate)
    {
        $this->percentageRate[] = $percentageRate;
        return $this;
    }

    /**
     * isset percentageRate
     *
     * A Composite containing details of a PercentageRate. The percentage is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPercentageRate($index)
    {
        return isset($this->percentageRate[$index]);
    }

    /**
     * unset percentageRate
     *
     * A Composite containing details of a PercentageRate. The percentage is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPercentageRate($index)
    {
        unset($this->percentageRate[$index]);
    }

    /**
     * Gets as percentageRate
     *
     * A Composite containing details of a PercentageRate. The percentage is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%).
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\PercentageRateType[]
     */
    public function getPercentageRate()
    {
        return $this->percentageRate;
    }

    /**
     * Sets a new percentageRate
     *
     * A Composite containing details of a PercentageRate. The percentage is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%).
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\PercentageRateType[] $percentageRate
     * @return self
     */
    public function setPercentageRate(array $percentageRate = null)
    {
        $this->percentageRate = $percentageRate;
        return $this;
    }
}


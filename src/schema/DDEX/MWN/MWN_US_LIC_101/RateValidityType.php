<?php

namespace DDEX\MWN\MWN_US_LIC_101;

/**
 * Class representing RateValidityType
 *
 * A Composite containing details of the Dates and/or quantity of Use constraints within which the RoyaltyRate is valid. At least one Element must be present. If two or more RoyaltyRates apply to the same Use, Work or RightShare, their respective values for Date and NumberOfUsages data must not overlap.
 * XSD Type: RateValidity
 */
class RateValidityType
{
    /**
     * The Date from which the RoyaltyRate applies. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var string $startDate
     */
    private $startDate = null;

    /**
     * The Date until which the RoyaltyRate applies. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var string $endDate
     */
    private $endDate = null;

    /**
     * The maximum number of Uses of a Resource for which this RoyaltyRate applies. Typically this refers to number of units sold, but the UseType is established by the UseType in the UseComposite. This element is used when there is a 'trigger' for a change in RoyaltyRate as a result of quantity of Use: for example, if a ReducedRate applies after sales of 100,000 units, then the old RoyaltyRate Composite will include a MaxNumberOfUses of 99,999, and the new RoyaltyRate Composite a MinNumberOfUses of 100,000.
     *
     * @var int $maximumNumberOfUsages
     */
    private $maximumNumberOfUsages = null;

    /**
     * The minimum number of Uses of a Resource for which this RoyaltyRate applies. Typically this refers to number of units sold, but the UseType is established by the UseType in the UseComposite. This element is used to show the 'trigger' point at which a change in Rate applies as a result of quantity of Use: for example, if a ReducedRate applies after sales of 100,000 units, then the old RoyaltyRate Composite will include a MaxNumberOfUses of 99,999, and the new RoyaltyRate Composite a MinNumberOfUses of 100,000.
     *
     * @var int $minimumNumberOfUsages
     */
    private $minimumNumberOfUsages = null;

    /**
     * The maximum number of Resources on a Product on which royalties are to be paid under the terms of the ControlledCompositionAgreement.
     *
     * @var int $maxNumberOfRoyaltyPaidResources
     */
    private $maxNumberOfRoyaltyPaidResources = null;

    /**
     * The minimum number of Resources on a Product on which royalties are to be paid under the terms of the ControlledCompositionAgreement.
     *
     * @var int $minNumberOfRoyaltyPaidResources
     */
    private $minNumberOfRoyaltyPaidResources = null;

    /**
     * Gets as startDate
     *
     * The Date from which the RoyaltyRate applies. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * The Date from which the RoyaltyRate applies. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param string $startDate
     * @return self
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * The Date until which the RoyaltyRate applies. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * The Date until which the RoyaltyRate applies. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param string $endDate
     * @return self
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Gets as maximumNumberOfUsages
     *
     * The maximum number of Uses of a Resource for which this RoyaltyRate applies. Typically this refers to number of units sold, but the UseType is established by the UseType in the UseComposite. This element is used when there is a 'trigger' for a change in RoyaltyRate as a result of quantity of Use: for example, if a ReducedRate applies after sales of 100,000 units, then the old RoyaltyRate Composite will include a MaxNumberOfUses of 99,999, and the new RoyaltyRate Composite a MinNumberOfUses of 100,000.
     *
     * @return int
     */
    public function getMaximumNumberOfUsages()
    {
        return $this->maximumNumberOfUsages;
    }

    /**
     * Sets a new maximumNumberOfUsages
     *
     * The maximum number of Uses of a Resource for which this RoyaltyRate applies. Typically this refers to number of units sold, but the UseType is established by the UseType in the UseComposite. This element is used when there is a 'trigger' for a change in RoyaltyRate as a result of quantity of Use: for example, if a ReducedRate applies after sales of 100,000 units, then the old RoyaltyRate Composite will include a MaxNumberOfUses of 99,999, and the new RoyaltyRate Composite a MinNumberOfUses of 100,000.
     *
     * @param int $maximumNumberOfUsages
     * @return self
     */
    public function setMaximumNumberOfUsages($maximumNumberOfUsages)
    {
        $this->maximumNumberOfUsages = $maximumNumberOfUsages;
        return $this;
    }

    /**
     * Gets as minimumNumberOfUsages
     *
     * The minimum number of Uses of a Resource for which this RoyaltyRate applies. Typically this refers to number of units sold, but the UseType is established by the UseType in the UseComposite. This element is used to show the 'trigger' point at which a change in Rate applies as a result of quantity of Use: for example, if a ReducedRate applies after sales of 100,000 units, then the old RoyaltyRate Composite will include a MaxNumberOfUses of 99,999, and the new RoyaltyRate Composite a MinNumberOfUses of 100,000.
     *
     * @return int
     */
    public function getMinimumNumberOfUsages()
    {
        return $this->minimumNumberOfUsages;
    }

    /**
     * Sets a new minimumNumberOfUsages
     *
     * The minimum number of Uses of a Resource for which this RoyaltyRate applies. Typically this refers to number of units sold, but the UseType is established by the UseType in the UseComposite. This element is used to show the 'trigger' point at which a change in Rate applies as a result of quantity of Use: for example, if a ReducedRate applies after sales of 100,000 units, then the old RoyaltyRate Composite will include a MaxNumberOfUses of 99,999, and the new RoyaltyRate Composite a MinNumberOfUses of 100,000.
     *
     * @param int $minimumNumberOfUsages
     * @return self
     */
    public function setMinimumNumberOfUsages($minimumNumberOfUsages)
    {
        $this->minimumNumberOfUsages = $minimumNumberOfUsages;
        return $this;
    }

    /**
     * Gets as maxNumberOfRoyaltyPaidResources
     *
     * The maximum number of Resources on a Product on which royalties are to be paid under the terms of the ControlledCompositionAgreement.
     *
     * @return int
     */
    public function getMaxNumberOfRoyaltyPaidResources()
    {
        return $this->maxNumberOfRoyaltyPaidResources;
    }

    /**
     * Sets a new maxNumberOfRoyaltyPaidResources
     *
     * The maximum number of Resources on a Product on which royalties are to be paid under the terms of the ControlledCompositionAgreement.
     *
     * @param int $maxNumberOfRoyaltyPaidResources
     * @return self
     */
    public function setMaxNumberOfRoyaltyPaidResources($maxNumberOfRoyaltyPaidResources)
    {
        $this->maxNumberOfRoyaltyPaidResources = $maxNumberOfRoyaltyPaidResources;
        return $this;
    }

    /**
     * Gets as minNumberOfRoyaltyPaidResources
     *
     * The minimum number of Resources on a Product on which royalties are to be paid under the terms of the ControlledCompositionAgreement.
     *
     * @return int
     */
    public function getMinNumberOfRoyaltyPaidResources()
    {
        return $this->minNumberOfRoyaltyPaidResources;
    }

    /**
     * Sets a new minNumberOfRoyaltyPaidResources
     *
     * The minimum number of Resources on a Product on which royalties are to be paid under the terms of the ControlledCompositionAgreement.
     *
     * @param int $minNumberOfRoyaltyPaidResources
     * @return self
     */
    public function setMinNumberOfRoyaltyPaidResources($minNumberOfRoyaltyPaidResources)
    {
        $this->minNumberOfRoyaltyPaidResources = $minNumberOfRoyaltyPaidResources;
        return $this;
    }
}


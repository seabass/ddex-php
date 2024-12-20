<?php

namespace DDEX\MWL\MWL_200;

/**
 * Class representing RateValidityType
 *
 * A ddex:Composite containing details of the Dates and/or quantity of ddex:Use constraints within which the ddex:RoyaltyRate is valid. At least one ddex:Element must be present. If two or more ddex:RoyaltyRates apply to the same ddex:Use, ddex:Work or ddex:RightShare, their respective values for Date and NumberOfUses data must not overlap.
 * XSD Type: RateValidity
 */
class RateValidityType
{
    /**
     * The Date from which the ddex:RoyaltyRate applies.
     *
     * @var \DateTime $startDate
     */
    private $startDate = null;

    /**
     * The Date until which the ddex:RoyaltyRate applies.
     *
     * @var \DateTime $endDate
     */
    private $endDate = null;

    /**
     * The maximum number of ddex:Uses of a ddex:Resource for which this ddex:RoyaltyRate applies. Typically this refers to number of units sold, but the ddex:UseType is established by the ddex:UseType in the UseComposite. This element is used when there is a 'trigger' for a change in ddex:RoyaltyRate as a result of quantity of ddex:Use: for example, if a ReducedRate applies after sales of 100,000 units, then the old ddex:RoyaltyRate ddex:Composite will include a MaxNumberOfUses of 99,999, and the new ddex:RoyaltyRate ddex:Composite a MinNumberOfUses of 100,000.
     *
     * @var int $maximumNumberOfUsages
     */
    private $maximumNumberOfUsages = null;

    /**
     * The minimum number of ddex:Uses of a ddex:Resource for which this ddex:RoyaltyRate applies. Typically this refers to number of units sold, but the ddex:UseType is established by the ddex:UseType in the UseComposite. This element is used to show the 'trigger' point at which a change in ddex:Rate applies as a result of quantity of ddex:Use: for example, if a ReducedRate applies after sales of 100,000 units, then the old ddex:RoyaltyRate ddex:Composite will include a MaxNumberOfUses of 99,999, and the new ddex:RoyaltyRate ddex:Composite a MinNumberOfUses of 100,000.
     *
     * @var int $minimumNumberOfUsages
     */
    private $minimumNumberOfUsages = null;

    /**
     * The maximum number of ddex:Resources on a ddex:Product on which ddex:Royalties are to be paid under the terms of the ddex:ControlledCompositionAgreement.
     *
     * @var int $maxNumberOfRoyaltyPaidResources
     */
    private $maxNumberOfRoyaltyPaidResources = null;

    /**
     * The minimum number of ddex:Resources on a ddex:Product on which ddex:Royalties are to be paid under the terms of the ddex:ControlledCompositionAgreement.
     *
     * @var int $minNumberOfRoyaltyPaidResources
     */
    private $minNumberOfRoyaltyPaidResources = null;

    /**
     * Gets as startDate
     *
     * The Date from which the ddex:RoyaltyRate applies.
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * The Date from which the ddex:RoyaltyRate applies.
     *
     * @param \DateTime $startDate
     * @return self
     */
    public function setStartDate(?\DateTime $startDate = null)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * The Date until which the ddex:RoyaltyRate applies.
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * The Date until which the ddex:RoyaltyRate applies.
     *
     * @param \DateTime $endDate
     * @return self
     */
    public function setEndDate(?\DateTime $endDate = null)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Gets as maximumNumberOfUsages
     *
     * The maximum number of ddex:Uses of a ddex:Resource for which this ddex:RoyaltyRate applies. Typically this refers to number of units sold, but the ddex:UseType is established by the ddex:UseType in the UseComposite. This element is used when there is a 'trigger' for a change in ddex:RoyaltyRate as a result of quantity of ddex:Use: for example, if a ReducedRate applies after sales of 100,000 units, then the old ddex:RoyaltyRate ddex:Composite will include a MaxNumberOfUses of 99,999, and the new ddex:RoyaltyRate ddex:Composite a MinNumberOfUses of 100,000.
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
     * The maximum number of ddex:Uses of a ddex:Resource for which this ddex:RoyaltyRate applies. Typically this refers to number of units sold, but the ddex:UseType is established by the ddex:UseType in the UseComposite. This element is used when there is a 'trigger' for a change in ddex:RoyaltyRate as a result of quantity of ddex:Use: for example, if a ReducedRate applies after sales of 100,000 units, then the old ddex:RoyaltyRate ddex:Composite will include a MaxNumberOfUses of 99,999, and the new ddex:RoyaltyRate ddex:Composite a MinNumberOfUses of 100,000.
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
     * The minimum number of ddex:Uses of a ddex:Resource for which this ddex:RoyaltyRate applies. Typically this refers to number of units sold, but the ddex:UseType is established by the ddex:UseType in the UseComposite. This element is used to show the 'trigger' point at which a change in ddex:Rate applies as a result of quantity of ddex:Use: for example, if a ReducedRate applies after sales of 100,000 units, then the old ddex:RoyaltyRate ddex:Composite will include a MaxNumberOfUses of 99,999, and the new ddex:RoyaltyRate ddex:Composite a MinNumberOfUses of 100,000.
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
     * The minimum number of ddex:Uses of a ddex:Resource for which this ddex:RoyaltyRate applies. Typically this refers to number of units sold, but the ddex:UseType is established by the ddex:UseType in the UseComposite. This element is used to show the 'trigger' point at which a change in ddex:Rate applies as a result of quantity of ddex:Use: for example, if a ReducedRate applies after sales of 100,000 units, then the old ddex:RoyaltyRate ddex:Composite will include a MaxNumberOfUses of 99,999, and the new ddex:RoyaltyRate ddex:Composite a MinNumberOfUses of 100,000.
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
     * The maximum number of ddex:Resources on a ddex:Product on which ddex:Royalties are to be paid under the terms of the ddex:ControlledCompositionAgreement.
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
     * The maximum number of ddex:Resources on a ddex:Product on which ddex:Royalties are to be paid under the terms of the ddex:ControlledCompositionAgreement.
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
     * The minimum number of ddex:Resources on a ddex:Product on which ddex:Royalties are to be paid under the terms of the ddex:ControlledCompositionAgreement.
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
     * The minimum number of ddex:Resources on a ddex:Product on which ddex:Royalties are to be paid under the terms of the ddex:ControlledCompositionAgreement.
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


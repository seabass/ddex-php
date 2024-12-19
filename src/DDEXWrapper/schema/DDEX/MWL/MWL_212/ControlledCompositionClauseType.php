<?php

namespace DDEX\MWL\MWL_212;

/**
 * Class representing ControlledCompositionClauseType
 *
 * A Composite containing details of a controlled composition
 *  clause.
 * XSD Type: ControlledCompositionClause
 */
class ControlledCompositionClauseType
{
    /**
     * The system Identifier of the
     *  ControlledCompositionClause.
     *
     * @var string $eventId
     */
    private $eventId = null;

    /**
     * The type of the rate modification.
     *
     * @var string[] $rateModificationType
     */
    private $rateModificationType = [
        
    ];

    /**
     * The RoyaltyRate for a normal uncontrolled Work as in effect between
     *  the MessageSender and the MessageRecipient.
     *
     * @var float $nonControlledWorkBaseRate
     */
    private $nonControlledWorkBaseRate = null;

    /**
     * The lowest PennyRate (or 'floor') which can be paid for any
     *  copyrighted Work according to the contractual relationship between the
     *  MessageSender and the MessageRecipient.
     *
     * @var float $workMinimumRate
     */
    private $workMinimumRate = null;

    /**
     * According to a ControlledCompositionAgreement, the percentage of
     *  the normal NonControlledWorkBaseRate to be used for calculating royalties payable
     *  on RightShares controlled by the agreement.
     *
     * @var float $agreementCCRate
     */
    private $agreementCCRate = null;

    /**
     * According to a ControlledCompositionAgreement, the percentage of
     *  the normal NonControlledWorkBaseRate to be used for calculating the total amount
     *  of royalties for all Tracks on an Album.
     *
     * @var float $agreementCCCapRate
     */
    private $agreementCCCapRate = null;

    /**
     * The percentage of the normal NonControlledWorkBaseRate to be used
     *  for calculating royalties payable on RightShares controlled by the
     *  agreement.
     *
     * @var float $applicableCCRate
     */
    private $applicableCCRate = null;

    /**
     * The percentage of the normal NonControlledWorkBaseRate to be used
     *  for calculating the total amount of royalties payable on all
     *  Tracks.
     *
     * @var float $applicableCCCapRate
     */
    private $applicableCCCapRate = null;

    /**
     * According to the ControlledCompositionAgreement, the maximum number
     *  of Works recognised for the purposes of royalty calculation on an
     *  album.
     *
     * @var int $maximumNumberOfRoyaltyPaidTracks
     */
    private $maximumNumberOfRoyaltyPaidTracks = null;

    /**
     * The number of Works recognised for the purposes of royalty
     *  calculation on an album according to the contractual relationship between the
     *  MessageSender and the MessageRecipient.
     *
     * @var int $minimumNumberOfRoyaltyPaidTracks
     */
    private $minimumNumberOfRoyaltyPaidTracks = null;

    /**
     * According to the ControlledCompositionAgreement, the maximum number
     *  of non-controlled Works recognised for the purposes of royalty calculation on an
     *  album.
     *
     * @var int $maximumNumberOfNonCCTracks
     */
    private $maximumNumberOfNonCCTracks = null;

    /**
     * The maximum permitted length of a Work before the longsong minute
     *  RoyaltyRate applies.
     *
     * @var string $limitationOnDurationOfCCTracks
     */
    private $limitationOnDurationOfCCTracks = null;

    /**
     * The amount of Royalties payable for a Release calculated based on
     *  the following: ApplicableControlledCompositionRate, NumberOfRoyaltyPaidTracks,
     *  LimitationOnDurationOfControlledCompositionTracks,
     *  MaximumNumberOfNonControlledCompositionTracks.
     *
     * @var float $royaltyAmountForRelease
     */
    private $royaltyAmountForRelease = null;

    /**
     * The number of Works on the Product not controlled by the applicable
     *  Agreement. (Note that Works can be partially controlled for one writer who is
     *  party to the Agreement and partially non-controlled for additional
     *  writers.)
     *
     * @var float $numberOfNonControlledWorks
     */
    private $numberOfNonControlledWorks = null;

    /**
     * The number of Works on the Product controlled by the applicable
     *  Agreement. (Note that Works can be partially controlled for one writer who is
     *  party to the Agreement and partially non-controlled for additional
     *  writers.)
     *
     * @var float $numberOfControlledWorks
     */
    private $numberOfControlledWorks = null;

    /**
     * The total Amount of royalties available for all non-controlled
     *  RightShares on a Release.
     *
     * @var float $royaltyAmountForNonControlledRightShares
     */
    private $royaltyAmountForNonControlledRightShares = null;

    /**
     * The total Amount of royalties available for all controlled
     *  RightShares on a Release.
     *
     * @var float $royaltyAmountForControlledRightShares
     */
    private $royaltyAmountForControlledRightShares = null;

    /**
     * The calculated RoyaltyRate applicable to controlled RightShares
     *  before the application (if necessary) of 'ceilings' or
     *  'floors'.
     *
     * @var float $unadjustedControlledRightShareRoyaltyRate
     */
    private $unadjustedControlledRightShareRoyaltyRate = null;

    /**
     * The calculated RoyaltyRate applicable to controlled RightShares
     *  after the application (if necessary) of 'ceilings' or 'floors'.
     *
     * @var float $adjustedControlledRightShareRoyaltyRate
     */
    private $adjustedControlledRightShareRoyaltyRate = null;

    /**
     * Gets as eventId
     *
     * The system Identifier of the
     *  ControlledCompositionClause.
     *
     * @return string
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * Sets a new eventId
     *
     * The system Identifier of the
     *  ControlledCompositionClause.
     *
     * @param string $eventId
     * @return self
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
        return $this;
    }

    /**
     * Adds as rateModificationType
     *
     * The type of the rate modification.
     *
     * @return self
     * @param string $rateModificationType
     */
    public function addToRateModificationType($rateModificationType)
    {
        $this->rateModificationType[] = $rateModificationType;
        return $this;
    }

    /**
     * isset rateModificationType
     *
     * The type of the rate modification.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRateModificationType($index)
    {
        return isset($this->rateModificationType[$index]);
    }

    /**
     * unset rateModificationType
     *
     * The type of the rate modification.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRateModificationType($index)
    {
        unset($this->rateModificationType[$index]);
    }

    /**
     * Gets as rateModificationType
     *
     * The type of the rate modification.
     *
     * @return string[]
     */
    public function getRateModificationType()
    {
        return $this->rateModificationType;
    }

    /**
     * Sets a new rateModificationType
     *
     * The type of the rate modification.
     *
     * @param string $rateModificationType
     * @return self
     */
    public function setRateModificationType(array $rateModificationType = null)
    {
        $this->rateModificationType = $rateModificationType;
        return $this;
    }

    /**
     * Gets as nonControlledWorkBaseRate
     *
     * The RoyaltyRate for a normal uncontrolled Work as in effect between
     *  the MessageSender and the MessageRecipient.
     *
     * @return float
     */
    public function getNonControlledWorkBaseRate()
    {
        return $this->nonControlledWorkBaseRate;
    }

    /**
     * Sets a new nonControlledWorkBaseRate
     *
     * The RoyaltyRate for a normal uncontrolled Work as in effect between
     *  the MessageSender and the MessageRecipient.
     *
     * @param float $nonControlledWorkBaseRate
     * @return self
     */
    public function setNonControlledWorkBaseRate($nonControlledWorkBaseRate)
    {
        $this->nonControlledWorkBaseRate = $nonControlledWorkBaseRate;
        return $this;
    }

    /**
     * Gets as workMinimumRate
     *
     * The lowest PennyRate (or 'floor') which can be paid for any
     *  copyrighted Work according to the contractual relationship between the
     *  MessageSender and the MessageRecipient.
     *
     * @return float
     */
    public function getWorkMinimumRate()
    {
        return $this->workMinimumRate;
    }

    /**
     * Sets a new workMinimumRate
     *
     * The lowest PennyRate (or 'floor') which can be paid for any
     *  copyrighted Work according to the contractual relationship between the
     *  MessageSender and the MessageRecipient.
     *
     * @param float $workMinimumRate
     * @return self
     */
    public function setWorkMinimumRate($workMinimumRate)
    {
        $this->workMinimumRate = $workMinimumRate;
        return $this;
    }

    /**
     * Gets as agreementCCRate
     *
     * According to a ControlledCompositionAgreement, the percentage of
     *  the normal NonControlledWorkBaseRate to be used for calculating royalties payable
     *  on RightShares controlled by the agreement.
     *
     * @return float
     */
    public function getAgreementCCRate()
    {
        return $this->agreementCCRate;
    }

    /**
     * Sets a new agreementCCRate
     *
     * According to a ControlledCompositionAgreement, the percentage of
     *  the normal NonControlledWorkBaseRate to be used for calculating royalties payable
     *  on RightShares controlled by the agreement.
     *
     * @param float $agreementCCRate
     * @return self
     */
    public function setAgreementCCRate($agreementCCRate)
    {
        $this->agreementCCRate = $agreementCCRate;
        return $this;
    }

    /**
     * Gets as agreementCCCapRate
     *
     * According to a ControlledCompositionAgreement, the percentage of
     *  the normal NonControlledWorkBaseRate to be used for calculating the total amount
     *  of royalties for all Tracks on an Album.
     *
     * @return float
     */
    public function getAgreementCCCapRate()
    {
        return $this->agreementCCCapRate;
    }

    /**
     * Sets a new agreementCCCapRate
     *
     * According to a ControlledCompositionAgreement, the percentage of
     *  the normal NonControlledWorkBaseRate to be used for calculating the total amount
     *  of royalties for all Tracks on an Album.
     *
     * @param float $agreementCCCapRate
     * @return self
     */
    public function setAgreementCCCapRate($agreementCCCapRate)
    {
        $this->agreementCCCapRate = $agreementCCCapRate;
        return $this;
    }

    /**
     * Gets as applicableCCRate
     *
     * The percentage of the normal NonControlledWorkBaseRate to be used
     *  for calculating royalties payable on RightShares controlled by the
     *  agreement.
     *
     * @return float
     */
    public function getApplicableCCRate()
    {
        return $this->applicableCCRate;
    }

    /**
     * Sets a new applicableCCRate
     *
     * The percentage of the normal NonControlledWorkBaseRate to be used
     *  for calculating royalties payable on RightShares controlled by the
     *  agreement.
     *
     * @param float $applicableCCRate
     * @return self
     */
    public function setApplicableCCRate($applicableCCRate)
    {
        $this->applicableCCRate = $applicableCCRate;
        return $this;
    }

    /**
     * Gets as applicableCCCapRate
     *
     * The percentage of the normal NonControlledWorkBaseRate to be used
     *  for calculating the total amount of royalties payable on all
     *  Tracks.
     *
     * @return float
     */
    public function getApplicableCCCapRate()
    {
        return $this->applicableCCCapRate;
    }

    /**
     * Sets a new applicableCCCapRate
     *
     * The percentage of the normal NonControlledWorkBaseRate to be used
     *  for calculating the total amount of royalties payable on all
     *  Tracks.
     *
     * @param float $applicableCCCapRate
     * @return self
     */
    public function setApplicableCCCapRate($applicableCCCapRate)
    {
        $this->applicableCCCapRate = $applicableCCCapRate;
        return $this;
    }

    /**
     * Gets as maximumNumberOfRoyaltyPaidTracks
     *
     * According to the ControlledCompositionAgreement, the maximum number
     *  of Works recognised for the purposes of royalty calculation on an
     *  album.
     *
     * @return int
     */
    public function getMaximumNumberOfRoyaltyPaidTracks()
    {
        return $this->maximumNumberOfRoyaltyPaidTracks;
    }

    /**
     * Sets a new maximumNumberOfRoyaltyPaidTracks
     *
     * According to the ControlledCompositionAgreement, the maximum number
     *  of Works recognised for the purposes of royalty calculation on an
     *  album.
     *
     * @param int $maximumNumberOfRoyaltyPaidTracks
     * @return self
     */
    public function setMaximumNumberOfRoyaltyPaidTracks($maximumNumberOfRoyaltyPaidTracks)
    {
        $this->maximumNumberOfRoyaltyPaidTracks = $maximumNumberOfRoyaltyPaidTracks;
        return $this;
    }

    /**
     * Gets as minimumNumberOfRoyaltyPaidTracks
     *
     * The number of Works recognised for the purposes of royalty
     *  calculation on an album according to the contractual relationship between the
     *  MessageSender and the MessageRecipient.
     *
     * @return int
     */
    public function getMinimumNumberOfRoyaltyPaidTracks()
    {
        return $this->minimumNumberOfRoyaltyPaidTracks;
    }

    /**
     * Sets a new minimumNumberOfRoyaltyPaidTracks
     *
     * The number of Works recognised for the purposes of royalty
     *  calculation on an album according to the contractual relationship between the
     *  MessageSender and the MessageRecipient.
     *
     * @param int $minimumNumberOfRoyaltyPaidTracks
     * @return self
     */
    public function setMinimumNumberOfRoyaltyPaidTracks($minimumNumberOfRoyaltyPaidTracks)
    {
        $this->minimumNumberOfRoyaltyPaidTracks = $minimumNumberOfRoyaltyPaidTracks;
        return $this;
    }

    /**
     * Gets as maximumNumberOfNonCCTracks
     *
     * According to the ControlledCompositionAgreement, the maximum number
     *  of non-controlled Works recognised for the purposes of royalty calculation on an
     *  album.
     *
     * @return int
     */
    public function getMaximumNumberOfNonCCTracks()
    {
        return $this->maximumNumberOfNonCCTracks;
    }

    /**
     * Sets a new maximumNumberOfNonCCTracks
     *
     * According to the ControlledCompositionAgreement, the maximum number
     *  of non-controlled Works recognised for the purposes of royalty calculation on an
     *  album.
     *
     * @param int $maximumNumberOfNonCCTracks
     * @return self
     */
    public function setMaximumNumberOfNonCCTracks($maximumNumberOfNonCCTracks)
    {
        $this->maximumNumberOfNonCCTracks = $maximumNumberOfNonCCTracks;
        return $this;
    }

    /**
     * Gets as limitationOnDurationOfCCTracks
     *
     * The maximum permitted length of a Work before the longsong minute
     *  RoyaltyRate applies.
     *
     * @return string
     */
    public function getLimitationOnDurationOfCCTracks()
    {
        return $this->limitationOnDurationOfCCTracks;
    }

    /**
     * Sets a new limitationOnDurationOfCCTracks
     *
     * The maximum permitted length of a Work before the longsong minute
     *  RoyaltyRate applies.
     *
     * @param string $limitationOnDurationOfCCTracks
     * @return self
     */
    public function setLimitationOnDurationOfCCTracks($limitationOnDurationOfCCTracks)
    {
        $this->limitationOnDurationOfCCTracks = $limitationOnDurationOfCCTracks;
        return $this;
    }

    /**
     * Gets as royaltyAmountForRelease
     *
     * The amount of Royalties payable for a Release calculated based on
     *  the following: ApplicableControlledCompositionRate, NumberOfRoyaltyPaidTracks,
     *  LimitationOnDurationOfControlledCompositionTracks,
     *  MaximumNumberOfNonControlledCompositionTracks.
     *
     * @return float
     */
    public function getRoyaltyAmountForRelease()
    {
        return $this->royaltyAmountForRelease;
    }

    /**
     * Sets a new royaltyAmountForRelease
     *
     * The amount of Royalties payable for a Release calculated based on
     *  the following: ApplicableControlledCompositionRate, NumberOfRoyaltyPaidTracks,
     *  LimitationOnDurationOfControlledCompositionTracks,
     *  MaximumNumberOfNonControlledCompositionTracks.
     *
     * @param float $royaltyAmountForRelease
     * @return self
     */
    public function setRoyaltyAmountForRelease($royaltyAmountForRelease)
    {
        $this->royaltyAmountForRelease = $royaltyAmountForRelease;
        return $this;
    }

    /**
     * Gets as numberOfNonControlledWorks
     *
     * The number of Works on the Product not controlled by the applicable
     *  Agreement. (Note that Works can be partially controlled for one writer who is
     *  party to the Agreement and partially non-controlled for additional
     *  writers.)
     *
     * @return float
     */
    public function getNumberOfNonControlledWorks()
    {
        return $this->numberOfNonControlledWorks;
    }

    /**
     * Sets a new numberOfNonControlledWorks
     *
     * The number of Works on the Product not controlled by the applicable
     *  Agreement. (Note that Works can be partially controlled for one writer who is
     *  party to the Agreement and partially non-controlled for additional
     *  writers.)
     *
     * @param float $numberOfNonControlledWorks
     * @return self
     */
    public function setNumberOfNonControlledWorks($numberOfNonControlledWorks)
    {
        $this->numberOfNonControlledWorks = $numberOfNonControlledWorks;
        return $this;
    }

    /**
     * Gets as numberOfControlledWorks
     *
     * The number of Works on the Product controlled by the applicable
     *  Agreement. (Note that Works can be partially controlled for one writer who is
     *  party to the Agreement and partially non-controlled for additional
     *  writers.)
     *
     * @return float
     */
    public function getNumberOfControlledWorks()
    {
        return $this->numberOfControlledWorks;
    }

    /**
     * Sets a new numberOfControlledWorks
     *
     * The number of Works on the Product controlled by the applicable
     *  Agreement. (Note that Works can be partially controlled for one writer who is
     *  party to the Agreement and partially non-controlled for additional
     *  writers.)
     *
     * @param float $numberOfControlledWorks
     * @return self
     */
    public function setNumberOfControlledWorks($numberOfControlledWorks)
    {
        $this->numberOfControlledWorks = $numberOfControlledWorks;
        return $this;
    }

    /**
     * Gets as royaltyAmountForNonControlledRightShares
     *
     * The total Amount of royalties available for all non-controlled
     *  RightShares on a Release.
     *
     * @return float
     */
    public function getRoyaltyAmountForNonControlledRightShares()
    {
        return $this->royaltyAmountForNonControlledRightShares;
    }

    /**
     * Sets a new royaltyAmountForNonControlledRightShares
     *
     * The total Amount of royalties available for all non-controlled
     *  RightShares on a Release.
     *
     * @param float $royaltyAmountForNonControlledRightShares
     * @return self
     */
    public function setRoyaltyAmountForNonControlledRightShares($royaltyAmountForNonControlledRightShares)
    {
        $this->royaltyAmountForNonControlledRightShares = $royaltyAmountForNonControlledRightShares;
        return $this;
    }

    /**
     * Gets as royaltyAmountForControlledRightShares
     *
     * The total Amount of royalties available for all controlled
     *  RightShares on a Release.
     *
     * @return float
     */
    public function getRoyaltyAmountForControlledRightShares()
    {
        return $this->royaltyAmountForControlledRightShares;
    }

    /**
     * Sets a new royaltyAmountForControlledRightShares
     *
     * The total Amount of royalties available for all controlled
     *  RightShares on a Release.
     *
     * @param float $royaltyAmountForControlledRightShares
     * @return self
     */
    public function setRoyaltyAmountForControlledRightShares($royaltyAmountForControlledRightShares)
    {
        $this->royaltyAmountForControlledRightShares = $royaltyAmountForControlledRightShares;
        return $this;
    }

    /**
     * Gets as unadjustedControlledRightShareRoyaltyRate
     *
     * The calculated RoyaltyRate applicable to controlled RightShares
     *  before the application (if necessary) of 'ceilings' or
     *  'floors'.
     *
     * @return float
     */
    public function getUnadjustedControlledRightShareRoyaltyRate()
    {
        return $this->unadjustedControlledRightShareRoyaltyRate;
    }

    /**
     * Sets a new unadjustedControlledRightShareRoyaltyRate
     *
     * The calculated RoyaltyRate applicable to controlled RightShares
     *  before the application (if necessary) of 'ceilings' or
     *  'floors'.
     *
     * @param float $unadjustedControlledRightShareRoyaltyRate
     * @return self
     */
    public function setUnadjustedControlledRightShareRoyaltyRate($unadjustedControlledRightShareRoyaltyRate)
    {
        $this->unadjustedControlledRightShareRoyaltyRate = $unadjustedControlledRightShareRoyaltyRate;
        return $this;
    }

    /**
     * Gets as adjustedControlledRightShareRoyaltyRate
     *
     * The calculated RoyaltyRate applicable to controlled RightShares
     *  after the application (if necessary) of 'ceilings' or 'floors'.
     *
     * @return float
     */
    public function getAdjustedControlledRightShareRoyaltyRate()
    {
        return $this->adjustedControlledRightShareRoyaltyRate;
    }

    /**
     * Sets a new adjustedControlledRightShareRoyaltyRate
     *
     * The calculated RoyaltyRate applicable to controlled RightShares
     *  after the application (if necessary) of 'ceilings' or 'floors'.
     *
     * @param float $adjustedControlledRightShareRoyaltyRate
     * @return self
     */
    public function setAdjustedControlledRightShareRoyaltyRate($adjustedControlledRightShareRoyaltyRate)
    {
        $this->adjustedControlledRightShareRoyaltyRate = $adjustedControlledRightShareRoyaltyRate;
        return $this;
    }
}


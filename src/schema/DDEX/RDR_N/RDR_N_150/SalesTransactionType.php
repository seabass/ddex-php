<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing SalesTransactionType
 *
 * A Composite containing details of a SalesTransaction.
 * XSD Type: SalesTransaction
 */
class SalesTransactionType
{
    /**
     * A Composite containing details of ReleaseIds of the Release. If available, a GRid has to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * A Composite containing details of the Label on which the Release was marketed.
     *
     * @var \DDEX\RDR_N\RDR_N_150\PartyDescriptorType $label
     */
    private $label = null;

    /**
     * A Flag indicating whether the Release is a Compilation (=true) or not (=false).
     *
     * @var bool $isCompilation
     */
    private $isCompilation = null;

    /**
     * The number of SoundRecordings that are claimed.
     *
     * @var int $numberOfSoundRecordingsClaimedInCarrier
     */
    private $numberOfSoundRecordingsClaimedInCarrier = null;

    /**
     * The number of unit sales of the Release.
     *
     * @var int $numberOfUnitsSold
     */
    private $numberOfUnitsSold = null;

    /**
     * Gets as releaseId
     *
     * A Composite containing details of ReleaseIds of the Release. If available, a GRid has to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead.
     *
     * @return \DDEX\RDR_N\RDR_N_150\ReleaseIdType
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of ReleaseIds of the Release. If available, a GRid has to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead.
     *
     * @param \DDEX\RDR_N\RDR_N_150\ReleaseIdType $releaseId
     * @return self
     */
    public function setReleaseId(\DDEX\RDR_N\RDR_N_150\ReleaseIdType $releaseId)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Gets as label
     *
     * A Composite containing details of the Label on which the Release was marketed.
     *
     * @return \DDEX\RDR_N\RDR_N_150\PartyDescriptorType
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * A Composite containing details of the Label on which the Release was marketed.
     *
     * @param \DDEX\RDR_N\RDR_N_150\PartyDescriptorType $label
     * @return self
     */
    public function setLabel(?\DDEX\RDR_N\RDR_N_150\PartyDescriptorType $label = null)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * Gets as isCompilation
     *
     * A Flag indicating whether the Release is a Compilation (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsCompilation()
    {
        return $this->isCompilation;
    }

    /**
     * Sets a new isCompilation
     *
     * A Flag indicating whether the Release is a Compilation (=true) or not (=false).
     *
     * @param bool $isCompilation
     * @return self
     */
    public function setIsCompilation($isCompilation)
    {
        $this->isCompilation = $isCompilation;
        return $this;
    }

    /**
     * Gets as numberOfSoundRecordingsClaimedInCarrier
     *
     * The number of SoundRecordings that are claimed.
     *
     * @return int
     */
    public function getNumberOfSoundRecordingsClaimedInCarrier()
    {
        return $this->numberOfSoundRecordingsClaimedInCarrier;
    }

    /**
     * Sets a new numberOfSoundRecordingsClaimedInCarrier
     *
     * The number of SoundRecordings that are claimed.
     *
     * @param int $numberOfSoundRecordingsClaimedInCarrier
     * @return self
     */
    public function setNumberOfSoundRecordingsClaimedInCarrier($numberOfSoundRecordingsClaimedInCarrier)
    {
        $this->numberOfSoundRecordingsClaimedInCarrier = $numberOfSoundRecordingsClaimedInCarrier;
        return $this;
    }

    /**
     * Gets as numberOfUnitsSold
     *
     * The number of unit sales of the Release.
     *
     * @return int
     */
    public function getNumberOfUnitsSold()
    {
        return $this->numberOfUnitsSold;
    }

    /**
     * Sets a new numberOfUnitsSold
     *
     * The number of unit sales of the Release.
     *
     * @param int $numberOfUnitsSold
     * @return self
     */
    public function setNumberOfUnitsSold($numberOfUnitsSold)
    {
        $this->numberOfUnitsSold = $numberOfUnitsSold;
        return $this;
    }
}


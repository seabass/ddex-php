<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing RevenueDeclarationType
 *
 * A Composite containing details of one or more Revenue declarations.
 * XSD Type: RevenueDeclaration
 */
class RevenueDeclarationType
{
    /**
     * A Composite containing details of a SoundRecordingId of the SoundRecording for which Revenue is declared.
     *
     * @var \DDEX\RDR_N\RDR_N_150\SoundRecordingIdType $soundRecordingId
     */
    private $soundRecordingId = null;

    /**
     * A Composite containing details of the ReferenceTitle of the SoundRecording.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/primary-and-secondary-resources
     *
     * @var \DDEX\RDR_N\RDR_N_150\ReferenceTitleType $referenceTitle
     */
    private $referenceTitle = null;

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     *
     * @var \DDEX\RDR_N\RDR_N_150\DisplayArtistNameWithDefaultType[] $displayArtistName
     */
    private $displayArtistName = [
        
    ];

    /**
     * The Currency in which the Revenues are accounted (represented by an ISO 4217 CurrencyCode).
     *
     * @var string $currencyOfAccounting
     */
    private $currencyOfAccounting = null;

    /**
     * A Composite containing details of one or more Usages for the SoundRecording.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ReportedUsageType[] $reportedUsage
     */
    private $reportedUsage = [
        
    ];

    /**
     * Gets as soundRecordingId
     *
     * A Composite containing details of a SoundRecordingId of the SoundRecording for which Revenue is declared.
     *
     * @return \DDEX\RDR_N\RDR_N_150\SoundRecordingIdType
     */
    public function getSoundRecordingId()
    {
        return $this->soundRecordingId;
    }

    /**
     * Sets a new soundRecordingId
     *
     * A Composite containing details of a SoundRecordingId of the SoundRecording for which Revenue is declared.
     *
     * @param \DDEX\RDR_N\RDR_N_150\SoundRecordingIdType $soundRecordingId
     * @return self
     */
    public function setSoundRecordingId(\DDEX\RDR_N\RDR_N_150\SoundRecordingIdType $soundRecordingId)
    {
        $this->soundRecordingId = $soundRecordingId;
        return $this;
    }

    /**
     * Gets as referenceTitle
     *
     * A Composite containing details of the ReferenceTitle of the SoundRecording.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/primary-and-secondary-resources
     *
     * @return \DDEX\RDR_N\RDR_N_150\ReferenceTitleType
     */
    public function getReferenceTitle()
    {
        return $this->referenceTitle;
    }

    /**
     * Sets a new referenceTitle
     *
     * A Composite containing details of the ReferenceTitle of the SoundRecording.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/primary-and-secondary-resources
     *
     * @param \DDEX\RDR_N\RDR_N_150\ReferenceTitleType $referenceTitle
     * @return self
     */
    public function setReferenceTitle(\DDEX\RDR_N\RDR_N_150\ReferenceTitleType $referenceTitle)
    {
        $this->referenceTitle = $referenceTitle;
        return $this;
    }

    /**
     * Adds as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\DisplayArtistNameWithDefaultType $displayArtistName
     */
    public function addToDisplayArtistName(\DDEX\RDR_N\RDR_N_150\DisplayArtistNameWithDefaultType $displayArtistName)
    {
        $this->displayArtistName[] = $displayArtistName;
        return $this;
    }

    /**
     * isset displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayArtistName($index)
    {
        return isset($this->displayArtistName[$index]);
    }

    /**
     * unset displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayArtistName($index)
    {
        unset($this->displayArtistName[$index]);
    }

    /**
     * Gets as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     *
     * @return \DDEX\RDR_N\RDR_N_150\DisplayArtistNameWithDefaultType[]
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     *
     * @param \DDEX\RDR_N\RDR_N_150\DisplayArtistNameWithDefaultType[] $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(array $displayArtistName)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }

    /**
     * Gets as currencyOfAccounting
     *
     * The Currency in which the Revenues are accounted (represented by an ISO 4217 CurrencyCode).
     *
     * @return string
     */
    public function getCurrencyOfAccounting()
    {
        return $this->currencyOfAccounting;
    }

    /**
     * Sets a new currencyOfAccounting
     *
     * The Currency in which the Revenues are accounted (represented by an ISO 4217 CurrencyCode).
     *
     * @param string $currencyOfAccounting
     * @return self
     */
    public function setCurrencyOfAccounting($currencyOfAccounting)
    {
        $this->currencyOfAccounting = $currencyOfAccounting;
        return $this;
    }

    /**
     * Adds as reportedUsage
     *
     * A Composite containing details of one or more Usages for the SoundRecording.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\ReportedUsageType $reportedUsage
     */
    public function addToReportedUsage(\DDEX\RDR_N\RDR_N_150\ReportedUsageType $reportedUsage)
    {
        $this->reportedUsage[] = $reportedUsage;
        return $this;
    }

    /**
     * isset reportedUsage
     *
     * A Composite containing details of one or more Usages for the SoundRecording.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReportedUsage($index)
    {
        return isset($this->reportedUsage[$index]);
    }

    /**
     * unset reportedUsage
     *
     * A Composite containing details of one or more Usages for the SoundRecording.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReportedUsage($index)
    {
        unset($this->reportedUsage[$index]);
    }

    /**
     * Gets as reportedUsage
     *
     * A Composite containing details of one or more Usages for the SoundRecording.
     *
     * @return \DDEX\RDR_N\RDR_N_150\ReportedUsageType[]
     */
    public function getReportedUsage()
    {
        return $this->reportedUsage;
    }

    /**
     * Sets a new reportedUsage
     *
     * A Composite containing details of one or more Usages for the SoundRecording.
     *
     * @param \DDEX\RDR_N\RDR_N_150\ReportedUsageType[] $reportedUsage
     * @return self
     */
    public function setReportedUsage(array $reportedUsage)
    {
        $this->reportedUsage = $reportedUsage;
        return $this;
    }
}


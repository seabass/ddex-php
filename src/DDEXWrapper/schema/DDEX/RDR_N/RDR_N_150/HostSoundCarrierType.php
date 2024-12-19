<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing HostSoundCarrierType
 *
 * A Composite containing details of a HostSoundCarrier of a SoundRecording. This Composite exists to support the identification and matching of SoundRecording information.
 * XSD Type: HostSoundCarrier
 */
class HostSoundCarrierType
{
    /**
     * A Composite containing details of ReleaseIds of the HostSoundCarrier. If available, a GRid has to be used. If the HostSoundCarrier contains only one SoundRecording, the ISRC of the SoundRecording may be used instead.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ReleaseIdType[] $releaseId
     */
    private $releaseId = [
        
    ];

    /**
     * A Composite containing details of a Title of the HostSoundCarrier.
     *
     * @var \DDEX\RDR_N\RDR_N_150\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the HostSoundCarrier to a Consumer.
     *
     * @var \DDEX\RDR_N\RDR_N_150\DisplayArtistNameWithDefaultType[] $displayArtistName
     */
    private $displayArtistName = [
        
    ];

    /**
     * A Composite containing details of the DisplayArtist for the HostSoundCarrier. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * A Composite containing details of the AdministratingRecordCompany for the Rights in the HostSoundCarrier.
     *
     * @var \DDEX\RDR_N\RDR_N_150\AdministratingRecordCompanyType[] $administratingRecordCompany
     */
    private $administratingRecordCompany = [
        
    ];

    /**
     * The TrackNumber of the SoundRecording within the HostSoundCarrier.
     *
     * @var string $trackNumber
     */
    private $trackNumber = null;

    /**
     * The SequenceNumber within the Set of the volume containing the SoundRecording, where the HostSoundCarrier is a Set (such as a 'box set' of CDs).
     *
     * @var string $volumeNumberInSet
     */
    private $volumeNumberInSet = null;

    /**
     * The SideNumber of the SoundRecording within the Release.
     *
     * @var string $sideNumber
     */
    private $sideNumber = null;

    /**
     * A Composite containing details of the HostSoundCarrier.
     *
     * @var \DDEX\RDR_N\RDR_N_150\CarrierTypeType $carrierType
     */
    private $carrierType = null;

    /**
     * A Composite containing the Name of the primary releasing Label (not the original one) under which this HostSoundCarrier is marketed. The use of multiple LabelNames is discouraged unless used to communicate LabelNames in different languages and/or scripts. This field is solely for matching and not to signal rights claims.
     *
     * @var \DDEX\RDR_N\RDR_N_150\LabelNameType[] $labelName
     */
    private $labelName = [
        
    ];

    /**
     * The number of SoundRecordings that are claimed.
     *
     * @var int $numberOfSoundRecordingsClaimedInCarrier
     */
    private $numberOfSoundRecordingsClaimedInCarrier = null;

    /**
     * The number of Tracks in the HostSoundCarrier. NumberOfTracksInCarrier must be provided if MessageSenderIsCompilationCreator is set to true.
     *
     * @var int $numberOfTracksInCarrier
     */
    private $numberOfTracksInCarrier = null;

    /**
     * The number of disks comprised by the HostSoundCarrier.
     *
     * @var int $numberOfDisks
     */
    private $numberOfDisks = null;

    /**
     * The total Duration of all linear media contained in the HostSoundCarrier (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * A Type of Compilation.
     * Deprecation: This element has been deprecated in 2020-12. DDEX advises that it will be removed at a future date and therefore recommends against using it.
     *
     * @var string $compilationType
     */
    private $compilationType = null;

    /**
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ReleaseTypeType $releaseType
     */
    private $releaseType = null;

    /**
     * The Flag indicating whether the HostSoundCarrier is physical or digital/electronic (=true) or not (=false).
     *
     * @var bool $isPhysicalDistribution
     */
    private $isPhysicalDistribution = null;

    /**
     * A Composite containing details of the PLine for the SoundRecording.
     *
     * @var \DDEX\RDR_N\RDR_N_150\PLineType $pLine
     */
    private $pLine = null;

    /**
     * A Composite containing details of the CLine for the SoundRecording.
     *
     * @var \DDEX\RDR_N\RDR_N_150\CLineType $cLine
     */
    private $cLine = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the Release is made available for Usage. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DDEX\RDR_N\RDR_N_150\EventDateType $releaseDate
     */
    private $releaseDate = null;

    /**
     * A Composite containing details of the company that is releasing the HostSoundCarrier.
     *
     * @var \DDEX\RDR_N\RDR_N_150\PartyDescriptorType $releasingCompany
     */
    private $releasingCompany = null;

    /**
     * A Composite containing details of the company that is distributing the HostSoundCarrier.
     *
     * @var \DDEX\RDR_N\RDR_N_150\PartyDescriptorType $distributingCompany
     */
    private $distributingCompany = null;

    /**
     * A Composite containing details of a CdProtectionType.
     *
     * @var \DDEX\RDR_N\RDR_N_150\CdProtectionTypeType $cdProtectionType
     */
    private $cdProtectionType = null;

    /**
     * A RecordingMode.
     *
     * @var string $recordingMode
     */
    private $recordingMode = null;

    /**
     * A DigitizationMode.
     *
     * @var string $digitizationMode
     */
    private $digitizationMode = null;

    /**
     * The Flag indicating whether the SoundRecording is hidden in some way from the Consumer (=true) or not (=false).
     *
     * @var bool $isHiddenResource
     */
    private $isHiddenResource = null;

    /**
     * The Flag indicating whether the SoundRecording is additional to those on the original Release of which this is a Version (=true) or not (=false).
     *
     * @var bool $isBonusResource
     */
    private $isBonusResource = null;

    /**
     * The Flag indicating whether the HostSoundCarrier is a Compilation where the rights for all contained SoundRecordings are controlled, for the territory at hand, by the same Party that created the Compilation (=true) or not (=false).
     *
     * @var bool $isInternalCompilation
     */
    private $isInternalCompilation = null;

    /**
     * The Flag indicating whether the MessageSender is the Party that has created the Compilation (=true) or no (=false). If this Flag is set to true, the MessageSender is responsible to also provide the NumberOfTracksInCarrier.
     *
     * @var bool $messageSenderIsCompilationCreator
     */
    private $messageSenderIsCompilationCreator = null;

    /**
     * Adds as releaseId
     *
     * A Composite containing details of ReleaseIds of the HostSoundCarrier. If available, a GRid has to be used. If the HostSoundCarrier contains only one SoundRecording, the ISRC of the SoundRecording may be used instead.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\ReleaseIdType $releaseId
     */
    public function addToReleaseId(\DDEX\RDR_N\RDR_N_150\ReleaseIdType $releaseId)
    {
        $this->releaseId[] = $releaseId;
        return $this;
    }

    /**
     * isset releaseId
     *
     * A Composite containing details of ReleaseIds of the HostSoundCarrier. If available, a GRid has to be used. If the HostSoundCarrier contains only one SoundRecording, the ISRC of the SoundRecording may be used instead.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseId($index)
    {
        return isset($this->releaseId[$index]);
    }

    /**
     * unset releaseId
     *
     * A Composite containing details of ReleaseIds of the HostSoundCarrier. If available, a GRid has to be used. If the HostSoundCarrier contains only one SoundRecording, the ISRC of the SoundRecording may be used instead.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseId($index)
    {
        unset($this->releaseId[$index]);
    }

    /**
     * Gets as releaseId
     *
     * A Composite containing details of ReleaseIds of the HostSoundCarrier. If available, a GRid has to be used. If the HostSoundCarrier contains only one SoundRecording, the ISRC of the SoundRecording may be used instead.
     *
     * @return \DDEX\RDR_N\RDR_N_150\ReleaseIdType[]
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of ReleaseIds of the HostSoundCarrier. If available, a GRid has to be used. If the HostSoundCarrier contains only one SoundRecording, the ISRC of the SoundRecording may be used instead.
     *
     * @param \DDEX\RDR_N\RDR_N_150\ReleaseIdType[] $releaseId
     * @return self
     */
    public function setReleaseId(array $releaseId = null)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Adds as title
     *
     * A Composite containing details of a Title of the HostSoundCarrier.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\TitleType $title
     */
    public function addToTitle(\DDEX\RDR_N\RDR_N_150\TitleType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A Composite containing details of a Title of the HostSoundCarrier.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTitle($index)
    {
        return isset($this->title[$index]);
    }

    /**
     * unset title
     *
     * A Composite containing details of a Title of the HostSoundCarrier.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTitle($index)
    {
        unset($this->title[$index]);
    }

    /**
     * Gets as title
     *
     * A Composite containing details of a Title of the HostSoundCarrier.
     *
     * @return \DDEX\RDR_N\RDR_N_150\TitleType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title of the HostSoundCarrier.
     *
     * @param \DDEX\RDR_N\RDR_N_150\TitleType[] $title
     * @return self
     */
    public function setTitle(array $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Adds as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the HostSoundCarrier to a Consumer.
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
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the HostSoundCarrier to a Consumer.
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
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the HostSoundCarrier to a Consumer.
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
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the HostSoundCarrier to a Consumer.
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
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the HostSoundCarrier to a Consumer.
     *
     * @param \DDEX\RDR_N\RDR_N_150\DisplayArtistNameWithDefaultType[] $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(array $displayArtistName = null)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }

    /**
     * Adds as displayArtist
     *
     * A Composite containing details of the DisplayArtist for the HostSoundCarrier. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\ArtistType $displayArtist
     */
    public function addToDisplayArtist(\DDEX\RDR_N\RDR_N_150\ArtistType $displayArtist)
    {
        $this->displayArtist[] = $displayArtist;
        return $this;
    }

    /**
     * isset displayArtist
     *
     * A Composite containing details of the DisplayArtist for the HostSoundCarrier. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayArtist($index)
    {
        return isset($this->displayArtist[$index]);
    }

    /**
     * unset displayArtist
     *
     * A Composite containing details of the DisplayArtist for the HostSoundCarrier. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayArtist($index)
    {
        unset($this->displayArtist[$index]);
    }

    /**
     * Gets as displayArtist
     *
     * A Composite containing details of the DisplayArtist for the HostSoundCarrier. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @return \DDEX\RDR_N\RDR_N_150\ArtistType[]
     */
    public function getDisplayArtist()
    {
        return $this->displayArtist;
    }

    /**
     * Sets a new displayArtist
     *
     * A Composite containing details of the DisplayArtist for the HostSoundCarrier. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @param \DDEX\RDR_N\RDR_N_150\ArtistType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist = null)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }

    /**
     * Adds as administratingRecordCompany
     *
     * A Composite containing details of the AdministratingRecordCompany for the Rights in the HostSoundCarrier.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\AdministratingRecordCompanyType $administratingRecordCompany
     */
    public function addToAdministratingRecordCompany(\DDEX\RDR_N\RDR_N_150\AdministratingRecordCompanyType $administratingRecordCompany)
    {
        $this->administratingRecordCompany[] = $administratingRecordCompany;
        return $this;
    }

    /**
     * isset administratingRecordCompany
     *
     * A Composite containing details of the AdministratingRecordCompany for the Rights in the HostSoundCarrier.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdministratingRecordCompany($index)
    {
        return isset($this->administratingRecordCompany[$index]);
    }

    /**
     * unset administratingRecordCompany
     *
     * A Composite containing details of the AdministratingRecordCompany for the Rights in the HostSoundCarrier.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdministratingRecordCompany($index)
    {
        unset($this->administratingRecordCompany[$index]);
    }

    /**
     * Gets as administratingRecordCompany
     *
     * A Composite containing details of the AdministratingRecordCompany for the Rights in the HostSoundCarrier.
     *
     * @return \DDEX\RDR_N\RDR_N_150\AdministratingRecordCompanyType[]
     */
    public function getAdministratingRecordCompany()
    {
        return $this->administratingRecordCompany;
    }

    /**
     * Sets a new administratingRecordCompany
     *
     * A Composite containing details of the AdministratingRecordCompany for the Rights in the HostSoundCarrier.
     *
     * @param \DDEX\RDR_N\RDR_N_150\AdministratingRecordCompanyType[] $administratingRecordCompany
     * @return self
     */
    public function setAdministratingRecordCompany(array $administratingRecordCompany = null)
    {
        $this->administratingRecordCompany = $administratingRecordCompany;
        return $this;
    }

    /**
     * Gets as trackNumber
     *
     * The TrackNumber of the SoundRecording within the HostSoundCarrier.
     *
     * @return string
     */
    public function getTrackNumber()
    {
        return $this->trackNumber;
    }

    /**
     * Sets a new trackNumber
     *
     * The TrackNumber of the SoundRecording within the HostSoundCarrier.
     *
     * @param string $trackNumber
     * @return self
     */
    public function setTrackNumber($trackNumber)
    {
        $this->trackNumber = $trackNumber;
        return $this;
    }

    /**
     * Gets as volumeNumberInSet
     *
     * The SequenceNumber within the Set of the volume containing the SoundRecording, where the HostSoundCarrier is a Set (such as a 'box set' of CDs).
     *
     * @return string
     */
    public function getVolumeNumberInSet()
    {
        return $this->volumeNumberInSet;
    }

    /**
     * Sets a new volumeNumberInSet
     *
     * The SequenceNumber within the Set of the volume containing the SoundRecording, where the HostSoundCarrier is a Set (such as a 'box set' of CDs).
     *
     * @param string $volumeNumberInSet
     * @return self
     */
    public function setVolumeNumberInSet($volumeNumberInSet)
    {
        $this->volumeNumberInSet = $volumeNumberInSet;
        return $this;
    }

    /**
     * Gets as sideNumber
     *
     * The SideNumber of the SoundRecording within the Release.
     *
     * @return string
     */
    public function getSideNumber()
    {
        return $this->sideNumber;
    }

    /**
     * Sets a new sideNumber
     *
     * The SideNumber of the SoundRecording within the Release.
     *
     * @param string $sideNumber
     * @return self
     */
    public function setSideNumber($sideNumber)
    {
        $this->sideNumber = $sideNumber;
        return $this;
    }

    /**
     * Gets as carrierType
     *
     * A Composite containing details of the HostSoundCarrier.
     *
     * @return \DDEX\RDR_N\RDR_N_150\CarrierTypeType
     */
    public function getCarrierType()
    {
        return $this->carrierType;
    }

    /**
     * Sets a new carrierType
     *
     * A Composite containing details of the HostSoundCarrier.
     *
     * @param \DDEX\RDR_N\RDR_N_150\CarrierTypeType $carrierType
     * @return self
     */
    public function setCarrierType(?\DDEX\RDR_N\RDR_N_150\CarrierTypeType $carrierType = null)
    {
        $this->carrierType = $carrierType;
        return $this;
    }

    /**
     * Adds as labelName
     *
     * A Composite containing the Name of the primary releasing Label (not the original one) under which this HostSoundCarrier is marketed. The use of multiple LabelNames is discouraged unless used to communicate LabelNames in different languages and/or scripts. This field is solely for matching and not to signal rights claims.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\LabelNameType $labelName
     */
    public function addToLabelName(\DDEX\RDR_N\RDR_N_150\LabelNameType $labelName)
    {
        $this->labelName[] = $labelName;
        return $this;
    }

    /**
     * isset labelName
     *
     * A Composite containing the Name of the primary releasing Label (not the original one) under which this HostSoundCarrier is marketed. The use of multiple LabelNames is discouraged unless used to communicate LabelNames in different languages and/or scripts. This field is solely for matching and not to signal rights claims.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLabelName($index)
    {
        return isset($this->labelName[$index]);
    }

    /**
     * unset labelName
     *
     * A Composite containing the Name of the primary releasing Label (not the original one) under which this HostSoundCarrier is marketed. The use of multiple LabelNames is discouraged unless used to communicate LabelNames in different languages and/or scripts. This field is solely for matching and not to signal rights claims.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLabelName($index)
    {
        unset($this->labelName[$index]);
    }

    /**
     * Gets as labelName
     *
     * A Composite containing the Name of the primary releasing Label (not the original one) under which this HostSoundCarrier is marketed. The use of multiple LabelNames is discouraged unless used to communicate LabelNames in different languages and/or scripts. This field is solely for matching and not to signal rights claims.
     *
     * @return \DDEX\RDR_N\RDR_N_150\LabelNameType[]
     */
    public function getLabelName()
    {
        return $this->labelName;
    }

    /**
     * Sets a new labelName
     *
     * A Composite containing the Name of the primary releasing Label (not the original one) under which this HostSoundCarrier is marketed. The use of multiple LabelNames is discouraged unless used to communicate LabelNames in different languages and/or scripts. This field is solely for matching and not to signal rights claims.
     *
     * @param \DDEX\RDR_N\RDR_N_150\LabelNameType[] $labelName
     * @return self
     */
    public function setLabelName(array $labelName = null)
    {
        $this->labelName = $labelName;
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
     * Gets as numberOfTracksInCarrier
     *
     * The number of Tracks in the HostSoundCarrier. NumberOfTracksInCarrier must be provided if MessageSenderIsCompilationCreator is set to true.
     *
     * @return int
     */
    public function getNumberOfTracksInCarrier()
    {
        return $this->numberOfTracksInCarrier;
    }

    /**
     * Sets a new numberOfTracksInCarrier
     *
     * The number of Tracks in the HostSoundCarrier. NumberOfTracksInCarrier must be provided if MessageSenderIsCompilationCreator is set to true.
     *
     * @param int $numberOfTracksInCarrier
     * @return self
     */
    public function setNumberOfTracksInCarrier($numberOfTracksInCarrier)
    {
        $this->numberOfTracksInCarrier = $numberOfTracksInCarrier;
        return $this;
    }

    /**
     * Gets as numberOfDisks
     *
     * The number of disks comprised by the HostSoundCarrier.
     *
     * @return int
     */
    public function getNumberOfDisks()
    {
        return $this->numberOfDisks;
    }

    /**
     * Sets a new numberOfDisks
     *
     * The number of disks comprised by the HostSoundCarrier.
     *
     * @param int $numberOfDisks
     * @return self
     */
    public function setNumberOfDisks($numberOfDisks)
    {
        $this->numberOfDisks = $numberOfDisks;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The total Duration of all linear media contained in the HostSoundCarrier (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The total Duration of all linear media contained in the HostSoundCarrier (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(?\DateInterval $duration = null)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as compilationType
     *
     * A Type of Compilation.
     * Deprecation: This element has been deprecated in 2020-12. DDEX advises that it will be removed at a future date and therefore recommends against using it.
     *
     * @return string
     */
    public function getCompilationType()
    {
        return $this->compilationType;
    }

    /**
     * Sets a new compilationType
     *
     * A Type of Compilation.
     * Deprecation: This element has been deprecated in 2020-12. DDEX advises that it will be removed at a future date and therefore recommends against using it.
     *
     * @param string $compilationType
     * @return self
     */
    public function setCompilationType($compilationType)
    {
        $this->compilationType = $compilationType;
        return $this;
    }

    /**
     * Gets as releaseType
     *
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers.
     *
     * @return \DDEX\RDR_N\RDR_N_150\ReleaseTypeType
     */
    public function getReleaseType()
    {
        return $this->releaseType;
    }

    /**
     * Sets a new releaseType
     *
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers.
     *
     * @param \DDEX\RDR_N\RDR_N_150\ReleaseTypeType $releaseType
     * @return self
     */
    public function setReleaseType(?\DDEX\RDR_N\RDR_N_150\ReleaseTypeType $releaseType = null)
    {
        $this->releaseType = $releaseType;
        return $this;
    }

    /**
     * Gets as isPhysicalDistribution
     *
     * The Flag indicating whether the HostSoundCarrier is physical or digital/electronic (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsPhysicalDistribution()
    {
        return $this->isPhysicalDistribution;
    }

    /**
     * Sets a new isPhysicalDistribution
     *
     * The Flag indicating whether the HostSoundCarrier is physical or digital/electronic (=true) or not (=false).
     *
     * @param bool $isPhysicalDistribution
     * @return self
     */
    public function setIsPhysicalDistribution($isPhysicalDistribution)
    {
        $this->isPhysicalDistribution = $isPhysicalDistribution;
        return $this;
    }

    /**
     * Gets as pLine
     *
     * A Composite containing details of the PLine for the SoundRecording.
     *
     * @return \DDEX\RDR_N\RDR_N_150\PLineType
     */
    public function getPLine()
    {
        return $this->pLine;
    }

    /**
     * Sets a new pLine
     *
     * A Composite containing details of the PLine for the SoundRecording.
     *
     * @param \DDEX\RDR_N\RDR_N_150\PLineType $pLine
     * @return self
     */
    public function setPLine(?\DDEX\RDR_N\RDR_N_150\PLineType $pLine = null)
    {
        $this->pLine = $pLine;
        return $this;
    }

    /**
     * Gets as cLine
     *
     * A Composite containing details of the CLine for the SoundRecording.
     *
     * @return \DDEX\RDR_N\RDR_N_150\CLineType
     */
    public function getCLine()
    {
        return $this->cLine;
    }

    /**
     * Sets a new cLine
     *
     * A Composite containing details of the CLine for the SoundRecording.
     *
     * @param \DDEX\RDR_N\RDR_N_150\CLineType $cLine
     * @return self
     */
    public function setCLine(?\DDEX\RDR_N\RDR_N_150\CLineType $cLine = null)
    {
        $this->cLine = $cLine;
        return $this;
    }

    /**
     * Gets as releaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Release is made available for Usage. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DDEX\RDR_N\RDR_N_150\EventDateType
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Sets a new releaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Release is made available for Usage. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DDEX\RDR_N\RDR_N_150\EventDateType $releaseDate
     * @return self
     */
    public function setReleaseDate(?\DDEX\RDR_N\RDR_N_150\EventDateType $releaseDate = null)
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }

    /**
     * Gets as releasingCompany
     *
     * A Composite containing details of the company that is releasing the HostSoundCarrier.
     *
     * @return \DDEX\RDR_N\RDR_N_150\PartyDescriptorType
     */
    public function getReleasingCompany()
    {
        return $this->releasingCompany;
    }

    /**
     * Sets a new releasingCompany
     *
     * A Composite containing details of the company that is releasing the HostSoundCarrier.
     *
     * @param \DDEX\RDR_N\RDR_N_150\PartyDescriptorType $releasingCompany
     * @return self
     */
    public function setReleasingCompany(?\DDEX\RDR_N\RDR_N_150\PartyDescriptorType $releasingCompany = null)
    {
        $this->releasingCompany = $releasingCompany;
        return $this;
    }

    /**
     * Gets as distributingCompany
     *
     * A Composite containing details of the company that is distributing the HostSoundCarrier.
     *
     * @return \DDEX\RDR_N\RDR_N_150\PartyDescriptorType
     */
    public function getDistributingCompany()
    {
        return $this->distributingCompany;
    }

    /**
     * Sets a new distributingCompany
     *
     * A Composite containing details of the company that is distributing the HostSoundCarrier.
     *
     * @param \DDEX\RDR_N\RDR_N_150\PartyDescriptorType $distributingCompany
     * @return self
     */
    public function setDistributingCompany(?\DDEX\RDR_N\RDR_N_150\PartyDescriptorType $distributingCompany = null)
    {
        $this->distributingCompany = $distributingCompany;
        return $this;
    }

    /**
     * Gets as cdProtectionType
     *
     * A Composite containing details of a CdProtectionType.
     *
     * @return \DDEX\RDR_N\RDR_N_150\CdProtectionTypeType
     */
    public function getCdProtectionType()
    {
        return $this->cdProtectionType;
    }

    /**
     * Sets a new cdProtectionType
     *
     * A Composite containing details of a CdProtectionType.
     *
     * @param \DDEX\RDR_N\RDR_N_150\CdProtectionTypeType $cdProtectionType
     * @return self
     */
    public function setCdProtectionType(?\DDEX\RDR_N\RDR_N_150\CdProtectionTypeType $cdProtectionType = null)
    {
        $this->cdProtectionType = $cdProtectionType;
        return $this;
    }

    /**
     * Gets as recordingMode
     *
     * A RecordingMode.
     *
     * @return string
     */
    public function getRecordingMode()
    {
        return $this->recordingMode;
    }

    /**
     * Sets a new recordingMode
     *
     * A RecordingMode.
     *
     * @param string $recordingMode
     * @return self
     */
    public function setRecordingMode($recordingMode)
    {
        $this->recordingMode = $recordingMode;
        return $this;
    }

    /**
     * Gets as digitizationMode
     *
     * A DigitizationMode.
     *
     * @return string
     */
    public function getDigitizationMode()
    {
        return $this->digitizationMode;
    }

    /**
     * Sets a new digitizationMode
     *
     * A DigitizationMode.
     *
     * @param string $digitizationMode
     * @return self
     */
    public function setDigitizationMode($digitizationMode)
    {
        $this->digitizationMode = $digitizationMode;
        return $this;
    }

    /**
     * Gets as isHiddenResource
     *
     * The Flag indicating whether the SoundRecording is hidden in some way from the Consumer (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsHiddenResource()
    {
        return $this->isHiddenResource;
    }

    /**
     * Sets a new isHiddenResource
     *
     * The Flag indicating whether the SoundRecording is hidden in some way from the Consumer (=true) or not (=false).
     *
     * @param bool $isHiddenResource
     * @return self
     */
    public function setIsHiddenResource($isHiddenResource)
    {
        $this->isHiddenResource = $isHiddenResource;
        return $this;
    }

    /**
     * Gets as isBonusResource
     *
     * The Flag indicating whether the SoundRecording is additional to those on the original Release of which this is a Version (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsBonusResource()
    {
        return $this->isBonusResource;
    }

    /**
     * Sets a new isBonusResource
     *
     * The Flag indicating whether the SoundRecording is additional to those on the original Release of which this is a Version (=true) or not (=false).
     *
     * @param bool $isBonusResource
     * @return self
     */
    public function setIsBonusResource($isBonusResource)
    {
        $this->isBonusResource = $isBonusResource;
        return $this;
    }

    /**
     * Gets as isInternalCompilation
     *
     * The Flag indicating whether the HostSoundCarrier is a Compilation where the rights for all contained SoundRecordings are controlled, for the territory at hand, by the same Party that created the Compilation (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsInternalCompilation()
    {
        return $this->isInternalCompilation;
    }

    /**
     * Sets a new isInternalCompilation
     *
     * The Flag indicating whether the HostSoundCarrier is a Compilation where the rights for all contained SoundRecordings are controlled, for the territory at hand, by the same Party that created the Compilation (=true) or not (=false).
     *
     * @param bool $isInternalCompilation
     * @return self
     */
    public function setIsInternalCompilation($isInternalCompilation)
    {
        $this->isInternalCompilation = $isInternalCompilation;
        return $this;
    }

    /**
     * Gets as messageSenderIsCompilationCreator
     *
     * The Flag indicating whether the MessageSender is the Party that has created the Compilation (=true) or no (=false). If this Flag is set to true, the MessageSender is responsible to also provide the NumberOfTracksInCarrier.
     *
     * @return bool
     */
    public function getMessageSenderIsCompilationCreator()
    {
        return $this->messageSenderIsCompilationCreator;
    }

    /**
     * Sets a new messageSenderIsCompilationCreator
     *
     * The Flag indicating whether the MessageSender is the Party that has created the Compilation (=true) or no (=false). If this Flag is set to true, the MessageSender is responsible to also provide the NumberOfTracksInCarrier.
     *
     * @param bool $messageSenderIsCompilationCreator
     * @return self
     */
    public function setMessageSenderIsCompilationCreator($messageSenderIsCompilationCreator)
    {
        $this->messageSenderIsCompilationCreator = $messageSenderIsCompilationCreator;
        return $this;
    }
}


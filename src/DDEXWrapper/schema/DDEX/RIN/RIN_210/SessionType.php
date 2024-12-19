<?php

namespace DDEX\RIN\RIN_210;

/**
 * Class representing SessionType
 *
 * A Composite containing details of a Session.
 * XSD Type: Session
 */
class SessionType
{
    /**
     * A Composite containing details of an Identifier of the Session.
     *
     * @var \DDEX\RIN\RIN_210\ProprietaryIdType[] $sessionId
     */
    private $sessionId = null;

    /**
     * The Identifier (specific to the File) of the Session. This is a LocalSessionAnchor starting with the letter O.
     *
     * @var string $sessionReference
     */
    private $sessionReference = null;

    /**
     * The Type of Session.
     *
     * @var string $sessionType
     */
    private $sessionType = null;

    /**
     * The DateTime that marks the beginning of the Session (the only allowed format is ISO 8601: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @var \DateTime $startDateTime
     */
    private $startDateTime = null;

    /**
     * The DateTime that marks the end of the Session (the only allowed format is ISO 8601: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @var \DateTime $endDateTime
     */
    private $endDateTime = null;

    /**
     * A Composite containing details of the venue where the Session took place.
     *
     * @var \DDEX\RIN\RIN_210\VenueType[] $venue
     */
    private $venue = [
        
    ];

    /**
     * A Flag indicating whether the Session is a union Session (=true) or not (=false).
     *
     * @var bool $isUnionSession
     */
    private $isUnionSession = null;

    /**
     * A Flag indicating whether the Session is an analog Session (=true) or not (=false).
     *
     * @var bool $isAnalogSession
     */
    private $isAnalogSession = null;

    /**
     * The BitDepth of the Session.
     *
     * @var int $bitDepth
     */
    private $bitDepth = null;

    /**
     * The sample rate of the Session in kHz.
     *
     * @var float $samplingRate
     */
    private $samplingRate = null;

    /**
     * The FrameRate of the Session.
     *
     * @var \DDEX\RIN\RIN_210\TimecodeType $timecode
     */
    private $timecode = null;

    /**
     * A Composite containing a human-readable Comment about the Session.
     *
     * @var \DDEX\RIN\RIN_210\CommentType $comment
     */
    private $comment = null;

    /**
     * A Composite containing details of a Contributor to the Session.
     *
     * @var \DDEX\RIN\RIN_210\SessionContributorReferenceType[] $contributor
     */
    private $contributor = [
        
    ];

    /**
     * A Reference for a Project (specific to the File). This is a LocalProjectAnchorReference starting with the letter J.
     *
     * @var string[] $sessionProjectReference
     */
    private $sessionProjectReference = [
        
    ];

    /**
     * A Reference for Equipment used during the Session (specific to this Message). This is a LocalEquipmentAnchorReference starting with the letter I.
     *
     * @var string[] $sessionEquipmentReference
     */
    private $sessionEquipmentReference = [
        
    ];

    /**
     * A Reference for a DataCarrier recorded during the Session (specific to this Message). This is a LocalDataCarrierAnchorReference starting with the letter D.
     *
     * @var string[] $sessionDataCarrierReference
     */
    private $sessionDataCarrierReference = [
        
    ];

    /**
     * A Reference for a SoundRecording (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @var string[] $sessionSoundRecordingReference
     */
    private $sessionSoundRecordingReference = [
        
    ];

    /**
     * A Reference for a SoundRecording (specific to this Message). This is a LocalRecordingComponentAnchorReference starting with the letter K.
     *
     * @var string[] $sessionRecordingComponentReference
     */
    private $sessionRecordingComponentReference = [
        
    ];

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of an Identifier of the Session.
     *
     * @return self
     * @param \DDEX\RIN\RIN_210\ProprietaryIdType $proprietaryId
     */
    public function addToSessionId(\DDEX\RIN\RIN_210\ProprietaryIdType $proprietaryId)
    {
        $this->sessionId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset sessionId
     *
     * A Composite containing details of an Identifier of the Session.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSessionId($index)
    {
        return isset($this->sessionId[$index]);
    }

    /**
     * unset sessionId
     *
     * A Composite containing details of an Identifier of the Session.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSessionId($index)
    {
        unset($this->sessionId[$index]);
    }

    /**
     * Gets as sessionId
     *
     * A Composite containing details of an Identifier of the Session.
     *
     * @return \DDEX\RIN\RIN_210\ProprietaryIdType[]
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Sets a new sessionId
     *
     * A Composite containing details of an Identifier of the Session.
     *
     * @param \DDEX\RIN\RIN_210\ProprietaryIdType[] $sessionId
     * @return self
     */
    public function setSessionId(array $sessionId = null)
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * Gets as sessionReference
     *
     * The Identifier (specific to the File) of the Session. This is a LocalSessionAnchor starting with the letter O.
     *
     * @return string
     */
    public function getSessionReference()
    {
        return $this->sessionReference;
    }

    /**
     * Sets a new sessionReference
     *
     * The Identifier (specific to the File) of the Session. This is a LocalSessionAnchor starting with the letter O.
     *
     * @param string $sessionReference
     * @return self
     */
    public function setSessionReference($sessionReference)
    {
        $this->sessionReference = $sessionReference;
        return $this;
    }

    /**
     * Gets as sessionType
     *
     * The Type of Session.
     *
     * @return string
     */
    public function getSessionType()
    {
        return $this->sessionType;
    }

    /**
     * Sets a new sessionType
     *
     * The Type of Session.
     *
     * @param string $sessionType
     * @return self
     */
    public function setSessionType($sessionType)
    {
        $this->sessionType = $sessionType;
        return $this;
    }

    /**
     * Gets as startDateTime
     *
     * The DateTime that marks the beginning of the Session (the only allowed format is ISO 8601: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @return \DateTime
     */
    public function getStartDateTime()
    {
        return $this->startDateTime;
    }

    /**
     * Sets a new startDateTime
     *
     * The DateTime that marks the beginning of the Session (the only allowed format is ISO 8601: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @param \DateTime $startDateTime
     * @return self
     */
    public function setStartDateTime(?\DateTime $startDateTime = null)
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    /**
     * Gets as endDateTime
     *
     * The DateTime that marks the end of the Session (the only allowed format is ISO 8601: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @return \DateTime
     */
    public function getEndDateTime()
    {
        return $this->endDateTime;
    }

    /**
     * Sets a new endDateTime
     *
     * The DateTime that marks the end of the Session (the only allowed format is ISO 8601: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @param \DateTime $endDateTime
     * @return self
     */
    public function setEndDateTime(?\DateTime $endDateTime = null)
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }

    /**
     * Adds as venue
     *
     * A Composite containing details of the venue where the Session took place.
     *
     * @return self
     * @param \DDEX\RIN\RIN_210\VenueType $venue
     */
    public function addToVenue(\DDEX\RIN\RIN_210\VenueType $venue)
    {
        $this->venue[] = $venue;
        return $this;
    }

    /**
     * isset venue
     *
     * A Composite containing details of the venue where the Session took place.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVenue($index)
    {
        return isset($this->venue[$index]);
    }

    /**
     * unset venue
     *
     * A Composite containing details of the venue where the Session took place.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVenue($index)
    {
        unset($this->venue[$index]);
    }

    /**
     * Gets as venue
     *
     * A Composite containing details of the venue where the Session took place.
     *
     * @return \DDEX\RIN\RIN_210\VenueType[]
     */
    public function getVenue()
    {
        return $this->venue;
    }

    /**
     * Sets a new venue
     *
     * A Composite containing details of the venue where the Session took place.
     *
     * @param \DDEX\RIN\RIN_210\VenueType[] $venue
     * @return self
     */
    public function setVenue(array $venue = null)
    {
        $this->venue = $venue;
        return $this;
    }

    /**
     * Gets as isUnionSession
     *
     * A Flag indicating whether the Session is a union Session (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsUnionSession()
    {
        return $this->isUnionSession;
    }

    /**
     * Sets a new isUnionSession
     *
     * A Flag indicating whether the Session is a union Session (=true) or not (=false).
     *
     * @param bool $isUnionSession
     * @return self
     */
    public function setIsUnionSession($isUnionSession)
    {
        $this->isUnionSession = $isUnionSession;
        return $this;
    }

    /**
     * Gets as isAnalogSession
     *
     * A Flag indicating whether the Session is an analog Session (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsAnalogSession()
    {
        return $this->isAnalogSession;
    }

    /**
     * Sets a new isAnalogSession
     *
     * A Flag indicating whether the Session is an analog Session (=true) or not (=false).
     *
     * @param bool $isAnalogSession
     * @return self
     */
    public function setIsAnalogSession($isAnalogSession)
    {
        $this->isAnalogSession = $isAnalogSession;
        return $this;
    }

    /**
     * Gets as bitDepth
     *
     * The BitDepth of the Session.
     *
     * @return int
     */
    public function getBitDepth()
    {
        return $this->bitDepth;
    }

    /**
     * Sets a new bitDepth
     *
     * The BitDepth of the Session.
     *
     * @param int $bitDepth
     * @return self
     */
    public function setBitDepth($bitDepth)
    {
        $this->bitDepth = $bitDepth;
        return $this;
    }

    /**
     * Gets as samplingRate
     *
     * The sample rate of the Session in kHz.
     *
     * @return float
     */
    public function getSamplingRate()
    {
        return $this->samplingRate;
    }

    /**
     * Sets a new samplingRate
     *
     * The sample rate of the Session in kHz.
     *
     * @param float $samplingRate
     * @return self
     */
    public function setSamplingRate($samplingRate)
    {
        $this->samplingRate = $samplingRate;
        return $this;
    }

    /**
     * Gets as timecode
     *
     * The FrameRate of the Session.
     *
     * @return \DDEX\RIN\RIN_210\TimecodeType
     */
    public function getTimecode()
    {
        return $this->timecode;
    }

    /**
     * Sets a new timecode
     *
     * The FrameRate of the Session.
     *
     * @param \DDEX\RIN\RIN_210\TimecodeType $timecode
     * @return self
     */
    public function setTimecode(?\DDEX\RIN\RIN_210\TimecodeType $timecode = null)
    {
        $this->timecode = $timecode;
        return $this;
    }

    /**
     * Gets as comment
     *
     * A Composite containing a human-readable Comment about the Session.
     *
     * @return \DDEX\RIN\RIN_210\CommentType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A Composite containing a human-readable Comment about the Session.
     *
     * @param \DDEX\RIN\RIN_210\CommentType $comment
     * @return self
     */
    public function setComment(?\DDEX\RIN\RIN_210\CommentType $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Adds as contributor
     *
     * A Composite containing details of a Contributor to the Session.
     *
     * @return self
     * @param \DDEX\RIN\RIN_210\SessionContributorReferenceType $contributor
     */
    public function addToContributor(\DDEX\RIN\RIN_210\SessionContributorReferenceType $contributor)
    {
        $this->contributor[] = $contributor;
        return $this;
    }

    /**
     * isset contributor
     *
     * A Composite containing details of a Contributor to the Session.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContributor($index)
    {
        return isset($this->contributor[$index]);
    }

    /**
     * unset contributor
     *
     * A Composite containing details of a Contributor to the Session.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContributor($index)
    {
        unset($this->contributor[$index]);
    }

    /**
     * Gets as contributor
     *
     * A Composite containing details of a Contributor to the Session.
     *
     * @return \DDEX\RIN\RIN_210\SessionContributorReferenceType[]
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * Sets a new contributor
     *
     * A Composite containing details of a Contributor to the Session.
     *
     * @param \DDEX\RIN\RIN_210\SessionContributorReferenceType[] $contributor
     * @return self
     */
    public function setContributor(array $contributor = null)
    {
        $this->contributor = $contributor;
        return $this;
    }

    /**
     * Adds as sessionProjectReference
     *
     * A Reference for a Project (specific to the File). This is a LocalProjectAnchorReference starting with the letter J.
     *
     * @return self
     * @param string $sessionProjectReference
     */
    public function addToSessionProjectReference($sessionProjectReference)
    {
        $this->sessionProjectReference[] = $sessionProjectReference;
        return $this;
    }

    /**
     * isset sessionProjectReference
     *
     * A Reference for a Project (specific to the File). This is a LocalProjectAnchorReference starting with the letter J.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSessionProjectReference($index)
    {
        return isset($this->sessionProjectReference[$index]);
    }

    /**
     * unset sessionProjectReference
     *
     * A Reference for a Project (specific to the File). This is a LocalProjectAnchorReference starting with the letter J.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSessionProjectReference($index)
    {
        unset($this->sessionProjectReference[$index]);
    }

    /**
     * Gets as sessionProjectReference
     *
     * A Reference for a Project (specific to the File). This is a LocalProjectAnchorReference starting with the letter J.
     *
     * @return string[]
     */
    public function getSessionProjectReference()
    {
        return $this->sessionProjectReference;
    }

    /**
     * Sets a new sessionProjectReference
     *
     * A Reference for a Project (specific to the File). This is a LocalProjectAnchorReference starting with the letter J.
     *
     * @param string $sessionProjectReference
     * @return self
     */
    public function setSessionProjectReference(array $sessionProjectReference = null)
    {
        $this->sessionProjectReference = $sessionProjectReference;
        return $this;
    }

    /**
     * Adds as sessionEquipmentReference
     *
     * A Reference for Equipment used during the Session (specific to this Message). This is a LocalEquipmentAnchorReference starting with the letter I.
     *
     * @return self
     * @param string $sessionEquipmentReference
     */
    public function addToSessionEquipmentReference($sessionEquipmentReference)
    {
        $this->sessionEquipmentReference[] = $sessionEquipmentReference;
        return $this;
    }

    /**
     * isset sessionEquipmentReference
     *
     * A Reference for Equipment used during the Session (specific to this Message). This is a LocalEquipmentAnchorReference starting with the letter I.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSessionEquipmentReference($index)
    {
        return isset($this->sessionEquipmentReference[$index]);
    }

    /**
     * unset sessionEquipmentReference
     *
     * A Reference for Equipment used during the Session (specific to this Message). This is a LocalEquipmentAnchorReference starting with the letter I.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSessionEquipmentReference($index)
    {
        unset($this->sessionEquipmentReference[$index]);
    }

    /**
     * Gets as sessionEquipmentReference
     *
     * A Reference for Equipment used during the Session (specific to this Message). This is a LocalEquipmentAnchorReference starting with the letter I.
     *
     * @return string[]
     */
    public function getSessionEquipmentReference()
    {
        return $this->sessionEquipmentReference;
    }

    /**
     * Sets a new sessionEquipmentReference
     *
     * A Reference for Equipment used during the Session (specific to this Message). This is a LocalEquipmentAnchorReference starting with the letter I.
     *
     * @param string $sessionEquipmentReference
     * @return self
     */
    public function setSessionEquipmentReference(array $sessionEquipmentReference = null)
    {
        $this->sessionEquipmentReference = $sessionEquipmentReference;
        return $this;
    }

    /**
     * Adds as sessionDataCarrierReference
     *
     * A Reference for a DataCarrier recorded during the Session (specific to this Message). This is a LocalDataCarrierAnchorReference starting with the letter D.
     *
     * @return self
     * @param string $sessionDataCarrierReference
     */
    public function addToSessionDataCarrierReference($sessionDataCarrierReference)
    {
        $this->sessionDataCarrierReference[] = $sessionDataCarrierReference;
        return $this;
    }

    /**
     * isset sessionDataCarrierReference
     *
     * A Reference for a DataCarrier recorded during the Session (specific to this Message). This is a LocalDataCarrierAnchorReference starting with the letter D.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSessionDataCarrierReference($index)
    {
        return isset($this->sessionDataCarrierReference[$index]);
    }

    /**
     * unset sessionDataCarrierReference
     *
     * A Reference for a DataCarrier recorded during the Session (specific to this Message). This is a LocalDataCarrierAnchorReference starting with the letter D.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSessionDataCarrierReference($index)
    {
        unset($this->sessionDataCarrierReference[$index]);
    }

    /**
     * Gets as sessionDataCarrierReference
     *
     * A Reference for a DataCarrier recorded during the Session (specific to this Message). This is a LocalDataCarrierAnchorReference starting with the letter D.
     *
     * @return string[]
     */
    public function getSessionDataCarrierReference()
    {
        return $this->sessionDataCarrierReference;
    }

    /**
     * Sets a new sessionDataCarrierReference
     *
     * A Reference for a DataCarrier recorded during the Session (specific to this Message). This is a LocalDataCarrierAnchorReference starting with the letter D.
     *
     * @param string $sessionDataCarrierReference
     * @return self
     */
    public function setSessionDataCarrierReference(array $sessionDataCarrierReference = null)
    {
        $this->sessionDataCarrierReference = $sessionDataCarrierReference;
        return $this;
    }

    /**
     * Adds as sessionSoundRecordingReference
     *
     * A Reference for a SoundRecording (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @return self
     * @param string $sessionSoundRecordingReference
     */
    public function addToSessionSoundRecordingReference($sessionSoundRecordingReference)
    {
        $this->sessionSoundRecordingReference[] = $sessionSoundRecordingReference;
        return $this;
    }

    /**
     * isset sessionSoundRecordingReference
     *
     * A Reference for a SoundRecording (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSessionSoundRecordingReference($index)
    {
        return isset($this->sessionSoundRecordingReference[$index]);
    }

    /**
     * unset sessionSoundRecordingReference
     *
     * A Reference for a SoundRecording (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSessionSoundRecordingReference($index)
    {
        unset($this->sessionSoundRecordingReference[$index]);
    }

    /**
     * Gets as sessionSoundRecordingReference
     *
     * A Reference for a SoundRecording (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @return string[]
     */
    public function getSessionSoundRecordingReference()
    {
        return $this->sessionSoundRecordingReference;
    }

    /**
     * Sets a new sessionSoundRecordingReference
     *
     * A Reference for a SoundRecording (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @param string $sessionSoundRecordingReference
     * @return self
     */
    public function setSessionSoundRecordingReference(array $sessionSoundRecordingReference = null)
    {
        $this->sessionSoundRecordingReference = $sessionSoundRecordingReference;
        return $this;
    }

    /**
     * Adds as sessionRecordingComponentReference
     *
     * A Reference for a SoundRecording (specific to this Message). This is a LocalRecordingComponentAnchorReference starting with the letter K.
     *
     * @return self
     * @param string $sessionRecordingComponentReference
     */
    public function addToSessionRecordingComponentReference($sessionRecordingComponentReference)
    {
        $this->sessionRecordingComponentReference[] = $sessionRecordingComponentReference;
        return $this;
    }

    /**
     * isset sessionRecordingComponentReference
     *
     * A Reference for a SoundRecording (specific to this Message). This is a LocalRecordingComponentAnchorReference starting with the letter K.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSessionRecordingComponentReference($index)
    {
        return isset($this->sessionRecordingComponentReference[$index]);
    }

    /**
     * unset sessionRecordingComponentReference
     *
     * A Reference for a SoundRecording (specific to this Message). This is a LocalRecordingComponentAnchorReference starting with the letter K.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSessionRecordingComponentReference($index)
    {
        unset($this->sessionRecordingComponentReference[$index]);
    }

    /**
     * Gets as sessionRecordingComponentReference
     *
     * A Reference for a SoundRecording (specific to this Message). This is a LocalRecordingComponentAnchorReference starting with the letter K.
     *
     * @return string[]
     */
    public function getSessionRecordingComponentReference()
    {
        return $this->sessionRecordingComponentReference;
    }

    /**
     * Sets a new sessionRecordingComponentReference
     *
     * A Reference for a SoundRecording (specific to this Message). This is a LocalRecordingComponentAnchorReference starting with the letter K.
     *
     * @param string $sessionRecordingComponentReference
     * @return self
     */
    public function setSessionRecordingComponentReference(array $sessionRecordingComponentReference = null)
    {
        $this->sessionRecordingComponentReference = $sessionRecordingComponentReference;
        return $this;
    }
}


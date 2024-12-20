<?php

namespace DDEX\RDR_N\RDR_N_150\RevokeSoundRecordingRightsClaimMessage;

/**
 * Class representing RevokeSoundRecordingRightsClaimMessageAnonymousPHPType
 */
class RevokeSoundRecordingRightsClaimMessageAnonymousPHPType
{
    /**
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $avsVersionId
     */
    private $avsVersionId = null;

    /**
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the RevokeSoundRecordingRightsClaimMessage.
     *
     * @var \DDEX\RDR_N\RDR_N_150\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of a reporting Period covered by the Message. It must contain at least one out of StartDate or EndDate. The StartDate must be earlier than the EndDate if both are provided.
     *
     * @var \DDEX\RDR_N\RDR_N_150\MessageNotificationPeriodType $messageNotificationPeriod
     */
    private $messageNotificationPeriod = null;

    /**
     * A Composite containing details of a SoundRecordingId.
     *
     * @var \DDEX\RDR_N\RDR_N_150\SoundRecordingIdType[] $soundRecordingId
     */
    private $soundRecordingId = [
        
    ];

    /**
     * A Composite containing details of a VideoId.
     *
     * @var \DDEX\RDR_N\RDR_N_150\VideoIdType[] $videoId
     */
    private $videoId = [
        
    ];

    /**
     * Gets as avsVersionId
     *
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getAvsVersionId()
    {
        return $this->avsVersionId;
    }

    /**
     * Sets a new avsVersionId
     *
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $avsVersionId
     * @return self
     */
    public function setAvsVersionId($avsVersionId)
    {
        $this->avsVersionId = $avsVersionId;
        return $this;
    }

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getLanguageAndScriptCode()
    {
        return $this->languageAndScriptCode;
    }

    /**
     * Sets a new languageAndScriptCode
     *
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $languageAndScriptCode
     * @return self
     */
    public function setLanguageAndScriptCode($languageAndScriptCode)
    {
        $this->languageAndScriptCode = $languageAndScriptCode;
        return $this;
    }

    /**
     * Gets as messageHeader
     *
     * The MessageHeader for the RevokeSoundRecordingRightsClaimMessage.
     *
     * @return \DDEX\RDR_N\RDR_N_150\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the RevokeSoundRecordingRightsClaimMessage.
     *
     * @param \DDEX\RDR_N\RDR_N_150\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\RDR_N\RDR_N_150\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Gets as messageNotificationPeriod
     *
     * A Composite containing details of a reporting Period covered by the Message. It must contain at least one out of StartDate or EndDate. The StartDate must be earlier than the EndDate if both are provided.
     *
     * @return \DDEX\RDR_N\RDR_N_150\MessageNotificationPeriodType
     */
    public function getMessageNotificationPeriod()
    {
        return $this->messageNotificationPeriod;
    }

    /**
     * Sets a new messageNotificationPeriod
     *
     * A Composite containing details of a reporting Period covered by the Message. It must contain at least one out of StartDate or EndDate. The StartDate must be earlier than the EndDate if both are provided.
     *
     * @param \DDEX\RDR_N\RDR_N_150\MessageNotificationPeriodType $messageNotificationPeriod
     * @return self
     */
    public function setMessageNotificationPeriod(?\DDEX\RDR_N\RDR_N_150\MessageNotificationPeriodType $messageNotificationPeriod = null)
    {
        $this->messageNotificationPeriod = $messageNotificationPeriod;
        return $this;
    }

    /**
     * Adds as soundRecordingId
     *
     * A Composite containing details of a SoundRecordingId.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\SoundRecordingIdType $soundRecordingId
     */
    public function addToSoundRecordingId(\DDEX\RDR_N\RDR_N_150\SoundRecordingIdType $soundRecordingId)
    {
        $this->soundRecordingId[] = $soundRecordingId;
        return $this;
    }

    /**
     * isset soundRecordingId
     *
     * A Composite containing details of a SoundRecordingId.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSoundRecordingId($index)
    {
        return isset($this->soundRecordingId[$index]);
    }

    /**
     * unset soundRecordingId
     *
     * A Composite containing details of a SoundRecordingId.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSoundRecordingId($index)
    {
        unset($this->soundRecordingId[$index]);
    }

    /**
     * Gets as soundRecordingId
     *
     * A Composite containing details of a SoundRecordingId.
     *
     * @return \DDEX\RDR_N\RDR_N_150\SoundRecordingIdType[]
     */
    public function getSoundRecordingId()
    {
        return $this->soundRecordingId;
    }

    /**
     * Sets a new soundRecordingId
     *
     * A Composite containing details of a SoundRecordingId.
     *
     * @param \DDEX\RDR_N\RDR_N_150\SoundRecordingIdType[] $soundRecordingId
     * @return self
     */
    public function setSoundRecordingId(array $soundRecordingId = null)
    {
        $this->soundRecordingId = $soundRecordingId;
        return $this;
    }

    /**
     * Adds as videoId
     *
     * A Composite containing details of a VideoId.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\VideoIdType $videoId
     */
    public function addToVideoId(\DDEX\RDR_N\RDR_N_150\VideoIdType $videoId)
    {
        $this->videoId[] = $videoId;
        return $this;
    }

    /**
     * isset videoId
     *
     * A Composite containing details of a VideoId.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVideoId($index)
    {
        return isset($this->videoId[$index]);
    }

    /**
     * unset videoId
     *
     * A Composite containing details of a VideoId.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVideoId($index)
    {
        unset($this->videoId[$index]);
    }

    /**
     * Gets as videoId
     *
     * A Composite containing details of a VideoId.
     *
     * @return \DDEX\RDR_N\RDR_N_150\VideoIdType[]
     */
    public function getVideoId()
    {
        return $this->videoId;
    }

    /**
     * Sets a new videoId
     *
     * A Composite containing details of a VideoId.
     *
     * @param \DDEX\RDR_N\RDR_N_150\VideoIdType[] $videoId
     * @return self
     */
    public function setVideoId(array $videoId = null)
    {
        $this->videoId = $videoId;
        return $this;
    }
}


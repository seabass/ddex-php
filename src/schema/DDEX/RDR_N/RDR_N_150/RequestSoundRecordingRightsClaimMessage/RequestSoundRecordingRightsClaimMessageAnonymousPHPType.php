<?php

namespace DDEX\RDR_N\RDR_N_150\RequestSoundRecordingRightsClaimMessage;

/**
 * Class representing RequestSoundRecordingRightsClaimMessageAnonymousPHPType
 */
class RequestSoundRecordingRightsClaimMessageAnonymousPHPType
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
     * The MessageHeader for the RequestSoundRecordingInformationMessage.
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
     * A Composite containing details of a requested SoundRecording.
     *
     * @var \DDEX\RDR_N\RDR_N_150\RequestedSoundRecordingType[] $requestedSoundRecording
     */
    private $requestedSoundRecording = [
        
    ];

    /**
     * A Composite containing details of a requested Video.
     *
     * @var \DDEX\RDR_N\RDR_N_150\RequestedVideoType[] $requestedVideo
     */
    private $requestedVideo = [
        
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
     * The MessageHeader for the RequestSoundRecordingInformationMessage.
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
     * The MessageHeader for the RequestSoundRecordingInformationMessage.
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
     * Adds as requestedSoundRecording
     *
     * A Composite containing details of a requested SoundRecording.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\RequestedSoundRecordingType $requestedSoundRecording
     */
    public function addToRequestedSoundRecording(\DDEX\RDR_N\RDR_N_150\RequestedSoundRecordingType $requestedSoundRecording)
    {
        $this->requestedSoundRecording[] = $requestedSoundRecording;
        return $this;
    }

    /**
     * isset requestedSoundRecording
     *
     * A Composite containing details of a requested SoundRecording.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestedSoundRecording($index)
    {
        return isset($this->requestedSoundRecording[$index]);
    }

    /**
     * unset requestedSoundRecording
     *
     * A Composite containing details of a requested SoundRecording.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestedSoundRecording($index)
    {
        unset($this->requestedSoundRecording[$index]);
    }

    /**
     * Gets as requestedSoundRecording
     *
     * A Composite containing details of a requested SoundRecording.
     *
     * @return \DDEX\RDR_N\RDR_N_150\RequestedSoundRecordingType[]
     */
    public function getRequestedSoundRecording()
    {
        return $this->requestedSoundRecording;
    }

    /**
     * Sets a new requestedSoundRecording
     *
     * A Composite containing details of a requested SoundRecording.
     *
     * @param \DDEX\RDR_N\RDR_N_150\RequestedSoundRecordingType[] $requestedSoundRecording
     * @return self
     */
    public function setRequestedSoundRecording(array $requestedSoundRecording = null)
    {
        $this->requestedSoundRecording = $requestedSoundRecording;
        return $this;
    }

    /**
     * Adds as requestedVideo
     *
     * A Composite containing details of a requested Video.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\RequestedVideoType $requestedVideo
     */
    public function addToRequestedVideo(\DDEX\RDR_N\RDR_N_150\RequestedVideoType $requestedVideo)
    {
        $this->requestedVideo[] = $requestedVideo;
        return $this;
    }

    /**
     * isset requestedVideo
     *
     * A Composite containing details of a requested Video.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestedVideo($index)
    {
        return isset($this->requestedVideo[$index]);
    }

    /**
     * unset requestedVideo
     *
     * A Composite containing details of a requested Video.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestedVideo($index)
    {
        unset($this->requestedVideo[$index]);
    }

    /**
     * Gets as requestedVideo
     *
     * A Composite containing details of a requested Video.
     *
     * @return \DDEX\RDR_N\RDR_N_150\RequestedVideoType[]
     */
    public function getRequestedVideo()
    {
        return $this->requestedVideo;
    }

    /**
     * Sets a new requestedVideo
     *
     * A Composite containing details of a requested Video.
     *
     * @param \DDEX\RDR_N\RDR_N_150\RequestedVideoType[] $requestedVideo
     * @return self
     */
    public function setRequestedVideo(array $requestedVideo = null)
    {
        $this->requestedVideo = $requestedVideo;
        return $this;
    }
}


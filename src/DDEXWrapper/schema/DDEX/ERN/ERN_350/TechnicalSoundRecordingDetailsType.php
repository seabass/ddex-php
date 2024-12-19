<?php

namespace DDEX\ERN\ERN_350;

/**
 * Class representing TechnicalSoundRecordingDetailsType
 *
 * A ddex:Composite containing technical details of a ddex:SoundRecording.
 * XSD Type: TechnicalSoundRecordingDetails
 */
class TechnicalSoundRecordingDetailsType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ern:TechnicalSoundRecordingDetails as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The ddex:Identifier (specific to the ddex:Message) of the ern:TechnicalSoundRecordingDetails within the ddex:Release which contains it. This is a ddex:LocalTechnicalResourceDetailsAnchor starting with the letter T.
     *
     * @var string $technicalResourceDetailsReference
     */
    private $technicalResourceDetailsReference = null;

    /**
     * A ddex:Composite containing details of a ddex:Type of ddex:DrmPlatform.
     *
     * @var \DDEX\ddexC\DrmPlatformTypeType $drmPlatformType
     */
    private $drmPlatformType = null;

    /**
     * A ddex:Composite containing details of a ddex:ContainerFormat.
     *
     * @var \DDEX\ddexC\ContainerFormatType $containerFormat
     */
    private $containerFormat = null;

    /**
     * A ddex:Composite containing details of a ddex:Type of ddex:AudioCodec.
     *
     * @var \DDEX\ddexC\AudioCodecTypeType $audioCodecType
     */
    private $audioCodecType = null;

    /**
     * A ddex:Composite containing the ddex:BitRate for the audio data and a ddex:UnitOfMeasure (the default is ddex:kbps).
     *
     * @var \DDEX\ddexC\BitRateType $bitRate
     */
    private $bitRate = null;

    /**
     * A number of audio channels.
     *
     * @var int $numberOfChannels
     */
    private $numberOfChannels = null;

    /**
     * A ddex:Composite containing the sampling rate of the ddex:SoundRecording and a ddex:UnitOfMeasure (the default is ddex:Hz).
     *
     * @var \DDEX\ddexC\SamplingRateType $samplingRate
     */
    private $samplingRate = null;

    /**
     * An amount of audio data in a sample.
     *
     * @var int $bitsPerSample
     */
    private $bitsPerSample = null;

    /**
     * The ddex:Duration of the instantiation of the ern:SoundRecording if this differs from the ddex:Duration provided for the ern:SoundRecording itself (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). This element must only be used if and when there are no royalty reporting implications on this change in duration and when the specific technical instantiation is a clip taken from a technical instantiation representing the whole ern:SoundRecording.
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The ddex:Flag indicating whether the ern:SoundRecording needs to be processed (=True) or not (=False) (typically: transcoded) by the ddex:MessageRecipient before being delivered to ddex:Consumers.
     *
     * @var bool $resourceProcessingRequired
     */
    private $resourceProcessingRequired = null;

    /**
     * The ddex:Duration of the ern:SoundRecording that may be sold to a ddex:Consumer if the ern:SoundRecording provided is not intended to be provided to ddex:Consumers 'as is' but will need to be transcoded into an appropriate format by the ddex:MessageRecipient or any other ddex:DSP handling the ddex:Release before it is sold (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $usableResourceDuration
     */
    private $usableResourceDuration = null;

    /**
     * The ddex:Flag indicating whether the ddex:SoundRecording is technically a preview of the parent ddex:Resource (=True) or not (=False). Note that nothing can be implied from this element as to the conditions under which the preview can be made available.
     *
     * @var bool $isPreview
     */
    private $isPreview = null;

    /**
     * A ddex:Composite containing details of a preview.
     *
     * @var \DDEX\ERN\ERN_350\SoundRecordingPreviewDetailsType $previewDetails
     */
    private $previewDetails = null;

    /**
     * A ddex:Composite containing details of a ddex:FulfillmentDate.
     *
     * @var \DDEX\ddexC\FulfillmentDateType $fulfillmentDate
     */
    private $fulfillmentDate = null;

    /**
     * A ddex:Composite containing details of when a consumer is able to get hold of the ddex:SoundRecording.
     *
     * @var \DDEX\ddexC\FulfillmentDateType $consumerFulfillmentDate
     */
    private $consumerFulfillmentDate = null;

    /**
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain a ddex:File that contains the ddex:SoundRecording.
     *
     * @var \DDEX\ddexC\DescriptionType[] $fileAvailabilityDescription
     */
    private $fileAvailabilityDescription = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:File containing the ddex:SoundRecording that a ddex:DSP can obtain.
     *
     * @var \DDEX\ddexC\FileType[] $file
     */
    private $file = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Fingerprint and its governing algorithm.
     *
     * @var \DDEX\ddexC\FingerprintType[] $fingerprint
     */
    private $fingerprint = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ern:TechnicalSoundRecordingDetails as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ern:TechnicalSoundRecordingDetails as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Gets as technicalResourceDetailsReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of the ern:TechnicalSoundRecordingDetails within the ddex:Release which contains it. This is a ddex:LocalTechnicalResourceDetailsAnchor starting with the letter T.
     *
     * @return string
     */
    public function getTechnicalResourceDetailsReference()
    {
        return $this->technicalResourceDetailsReference;
    }

    /**
     * Sets a new technicalResourceDetailsReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of the ern:TechnicalSoundRecordingDetails within the ddex:Release which contains it. This is a ddex:LocalTechnicalResourceDetailsAnchor starting with the letter T.
     *
     * @param string $technicalResourceDetailsReference
     * @return self
     */
    public function setTechnicalResourceDetailsReference($technicalResourceDetailsReference)
    {
        $this->technicalResourceDetailsReference = $technicalResourceDetailsReference;
        return $this;
    }

    /**
     * Gets as drmPlatformType
     *
     * A ddex:Composite containing details of a ddex:Type of ddex:DrmPlatform.
     *
     * @return \DDEX\ddexC\DrmPlatformTypeType
     */
    public function getDrmPlatformType()
    {
        return $this->drmPlatformType;
    }

    /**
     * Sets a new drmPlatformType
     *
     * A ddex:Composite containing details of a ddex:Type of ddex:DrmPlatform.
     *
     * @param \DDEX\ddexC\DrmPlatformTypeType $drmPlatformType
     * @return self
     */
    public function setDrmPlatformType(?\DDEX\ddexC\DrmPlatformTypeType $drmPlatformType = null)
    {
        $this->drmPlatformType = $drmPlatformType;
        return $this;
    }

    /**
     * Gets as containerFormat
     *
     * A ddex:Composite containing details of a ddex:ContainerFormat.
     *
     * @return \DDEX\ddexC\ContainerFormatType
     */
    public function getContainerFormat()
    {
        return $this->containerFormat;
    }

    /**
     * Sets a new containerFormat
     *
     * A ddex:Composite containing details of a ddex:ContainerFormat.
     *
     * @param \DDEX\ddexC\ContainerFormatType $containerFormat
     * @return self
     */
    public function setContainerFormat(?\DDEX\ddexC\ContainerFormatType $containerFormat = null)
    {
        $this->containerFormat = $containerFormat;
        return $this;
    }

    /**
     * Gets as audioCodecType
     *
     * A ddex:Composite containing details of a ddex:Type of ddex:AudioCodec.
     *
     * @return \DDEX\ddexC\AudioCodecTypeType
     */
    public function getAudioCodecType()
    {
        return $this->audioCodecType;
    }

    /**
     * Sets a new audioCodecType
     *
     * A ddex:Composite containing details of a ddex:Type of ddex:AudioCodec.
     *
     * @param \DDEX\ddexC\AudioCodecTypeType $audioCodecType
     * @return self
     */
    public function setAudioCodecType(?\DDEX\ddexC\AudioCodecTypeType $audioCodecType = null)
    {
        $this->audioCodecType = $audioCodecType;
        return $this;
    }

    /**
     * Gets as bitRate
     *
     * A ddex:Composite containing the ddex:BitRate for the audio data and a ddex:UnitOfMeasure (the default is ddex:kbps).
     *
     * @return \DDEX\ddexC\BitRateType
     */
    public function getBitRate()
    {
        return $this->bitRate;
    }

    /**
     * Sets a new bitRate
     *
     * A ddex:Composite containing the ddex:BitRate for the audio data and a ddex:UnitOfMeasure (the default is ddex:kbps).
     *
     * @param \DDEX\ddexC\BitRateType $bitRate
     * @return self
     */
    public function setBitRate(?\DDEX\ddexC\BitRateType $bitRate = null)
    {
        $this->bitRate = $bitRate;
        return $this;
    }

    /**
     * Gets as numberOfChannels
     *
     * A number of audio channels.
     *
     * @return int
     */
    public function getNumberOfChannels()
    {
        return $this->numberOfChannels;
    }

    /**
     * Sets a new numberOfChannels
     *
     * A number of audio channels.
     *
     * @param int $numberOfChannels
     * @return self
     */
    public function setNumberOfChannels($numberOfChannels)
    {
        $this->numberOfChannels = $numberOfChannels;
        return $this;
    }

    /**
     * Gets as samplingRate
     *
     * A ddex:Composite containing the sampling rate of the ddex:SoundRecording and a ddex:UnitOfMeasure (the default is ddex:Hz).
     *
     * @return \DDEX\ddexC\SamplingRateType
     */
    public function getSamplingRate()
    {
        return $this->samplingRate;
    }

    /**
     * Sets a new samplingRate
     *
     * A ddex:Composite containing the sampling rate of the ddex:SoundRecording and a ddex:UnitOfMeasure (the default is ddex:Hz).
     *
     * @param \DDEX\ddexC\SamplingRateType $samplingRate
     * @return self
     */
    public function setSamplingRate(?\DDEX\ddexC\SamplingRateType $samplingRate = null)
    {
        $this->samplingRate = $samplingRate;
        return $this;
    }

    /**
     * Gets as bitsPerSample
     *
     * An amount of audio data in a sample.
     *
     * @return int
     */
    public function getBitsPerSample()
    {
        return $this->bitsPerSample;
    }

    /**
     * Sets a new bitsPerSample
     *
     * An amount of audio data in a sample.
     *
     * @param int $bitsPerSample
     * @return self
     */
    public function setBitsPerSample($bitsPerSample)
    {
        $this->bitsPerSample = $bitsPerSample;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The ddex:Duration of the instantiation of the ern:SoundRecording if this differs from the ddex:Duration provided for the ern:SoundRecording itself (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). This element must only be used if and when there are no royalty reporting implications on this change in duration and when the specific technical instantiation is a clip taken from a technical instantiation representing the whole ern:SoundRecording.
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
     * The ddex:Duration of the instantiation of the ern:SoundRecording if this differs from the ddex:Duration provided for the ern:SoundRecording itself (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). This element must only be used if and when there are no royalty reporting implications on this change in duration and when the specific technical instantiation is a clip taken from a technical instantiation representing the whole ern:SoundRecording.
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
     * Gets as resourceProcessingRequired
     *
     * The ddex:Flag indicating whether the ern:SoundRecording needs to be processed (=True) or not (=False) (typically: transcoded) by the ddex:MessageRecipient before being delivered to ddex:Consumers.
     *
     * @return bool
     */
    public function getResourceProcessingRequired()
    {
        return $this->resourceProcessingRequired;
    }

    /**
     * Sets a new resourceProcessingRequired
     *
     * The ddex:Flag indicating whether the ern:SoundRecording needs to be processed (=True) or not (=False) (typically: transcoded) by the ddex:MessageRecipient before being delivered to ddex:Consumers.
     *
     * @param bool $resourceProcessingRequired
     * @return self
     */
    public function setResourceProcessingRequired($resourceProcessingRequired)
    {
        $this->resourceProcessingRequired = $resourceProcessingRequired;
        return $this;
    }

    /**
     * Gets as usableResourceDuration
     *
     * The ddex:Duration of the ern:SoundRecording that may be sold to a ddex:Consumer if the ern:SoundRecording provided is not intended to be provided to ddex:Consumers 'as is' but will need to be transcoded into an appropriate format by the ddex:MessageRecipient or any other ddex:DSP handling the ddex:Release before it is sold (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @return \DateInterval
     */
    public function getUsableResourceDuration()
    {
        return $this->usableResourceDuration;
    }

    /**
     * Sets a new usableResourceDuration
     *
     * The ddex:Duration of the ern:SoundRecording that may be sold to a ddex:Consumer if the ern:SoundRecording provided is not intended to be provided to ddex:Consumers 'as is' but will need to be transcoded into an appropriate format by the ddex:MessageRecipient or any other ddex:DSP handling the ddex:Release before it is sold (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @param \DateInterval $usableResourceDuration
     * @return self
     */
    public function setUsableResourceDuration(?\DateInterval $usableResourceDuration = null)
    {
        $this->usableResourceDuration = $usableResourceDuration;
        return $this;
    }

    /**
     * Gets as isPreview
     *
     * The ddex:Flag indicating whether the ddex:SoundRecording is technically a preview of the parent ddex:Resource (=True) or not (=False). Note that nothing can be implied from this element as to the conditions under which the preview can be made available.
     *
     * @return bool
     */
    public function getIsPreview()
    {
        return $this->isPreview;
    }

    /**
     * Sets a new isPreview
     *
     * The ddex:Flag indicating whether the ddex:SoundRecording is technically a preview of the parent ddex:Resource (=True) or not (=False). Note that nothing can be implied from this element as to the conditions under which the preview can be made available.
     *
     * @param bool $isPreview
     * @return self
     */
    public function setIsPreview($isPreview)
    {
        $this->isPreview = $isPreview;
        return $this;
    }

    /**
     * Gets as previewDetails
     *
     * A ddex:Composite containing details of a preview.
     *
     * @return \DDEX\ERN\ERN_350\SoundRecordingPreviewDetailsType
     */
    public function getPreviewDetails()
    {
        return $this->previewDetails;
    }

    /**
     * Sets a new previewDetails
     *
     * A ddex:Composite containing details of a preview.
     *
     * @param \DDEX\ERN\ERN_350\SoundRecordingPreviewDetailsType $previewDetails
     * @return self
     */
    public function setPreviewDetails(?\DDEX\ERN\ERN_350\SoundRecordingPreviewDetailsType $previewDetails = null)
    {
        $this->previewDetails = $previewDetails;
        return $this;
    }

    /**
     * Gets as fulfillmentDate
     *
     * A ddex:Composite containing details of a ddex:FulfillmentDate.
     *
     * @return \DDEX\ddexC\FulfillmentDateType
     */
    public function getFulfillmentDate()
    {
        return $this->fulfillmentDate;
    }

    /**
     * Sets a new fulfillmentDate
     *
     * A ddex:Composite containing details of a ddex:FulfillmentDate.
     *
     * @param \DDEX\ddexC\FulfillmentDateType $fulfillmentDate
     * @return self
     */
    public function setFulfillmentDate(?\DDEX\ddexC\FulfillmentDateType $fulfillmentDate = null)
    {
        $this->fulfillmentDate = $fulfillmentDate;
        return $this;
    }

    /**
     * Gets as consumerFulfillmentDate
     *
     * A ddex:Composite containing details of when a consumer is able to get hold of the ddex:SoundRecording.
     *
     * @return \DDEX\ddexC\FulfillmentDateType
     */
    public function getConsumerFulfillmentDate()
    {
        return $this->consumerFulfillmentDate;
    }

    /**
     * Sets a new consumerFulfillmentDate
     *
     * A ddex:Composite containing details of when a consumer is able to get hold of the ddex:SoundRecording.
     *
     * @param \DDEX\ddexC\FulfillmentDateType $consumerFulfillmentDate
     * @return self
     */
    public function setConsumerFulfillmentDate(?\DDEX\ddexC\FulfillmentDateType $consumerFulfillmentDate = null)
    {
        $this->consumerFulfillmentDate = $consumerFulfillmentDate;
        return $this;
    }

    /**
     * Adds as fileAvailabilityDescription
     *
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain a ddex:File that contains the ddex:SoundRecording.
     *
     * @return self
     * @param \DDEX\ddexC\DescriptionType $fileAvailabilityDescription
     */
    public function addToFileAvailabilityDescription(\DDEX\ddexC\DescriptionType $fileAvailabilityDescription)
    {
        $this->fileAvailabilityDescription[] = $fileAvailabilityDescription;
        return $this;
    }

    /**
     * isset fileAvailabilityDescription
     *
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain a ddex:File that contains the ddex:SoundRecording.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFileAvailabilityDescription($index)
    {
        return isset($this->fileAvailabilityDescription[$index]);
    }

    /**
     * unset fileAvailabilityDescription
     *
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain a ddex:File that contains the ddex:SoundRecording.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFileAvailabilityDescription($index)
    {
        unset($this->fileAvailabilityDescription[$index]);
    }

    /**
     * Gets as fileAvailabilityDescription
     *
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain a ddex:File that contains the ddex:SoundRecording.
     *
     * @return \DDEX\ddexC\DescriptionType[]
     */
    public function getFileAvailabilityDescription()
    {
        return $this->fileAvailabilityDescription;
    }

    /**
     * Sets a new fileAvailabilityDescription
     *
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain a ddex:File that contains the ddex:SoundRecording.
     *
     * @param \DDEX\ddexC\DescriptionType[] $fileAvailabilityDescription
     * @return self
     */
    public function setFileAvailabilityDescription(array $fileAvailabilityDescription = null)
    {
        $this->fileAvailabilityDescription = $fileAvailabilityDescription;
        return $this;
    }

    /**
     * Adds as file
     *
     * A ddex:Composite containing details of a ddex:File containing the ddex:SoundRecording that a ddex:DSP can obtain.
     *
     * @return self
     * @param \DDEX\ddexC\FileType $file
     */
    public function addToFile(\DDEX\ddexC\FileType $file)
    {
        $this->file[] = $file;
        return $this;
    }

    /**
     * isset file
     *
     * A ddex:Composite containing details of a ddex:File containing the ddex:SoundRecording that a ddex:DSP can obtain.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFile($index)
    {
        return isset($this->file[$index]);
    }

    /**
     * unset file
     *
     * A ddex:Composite containing details of a ddex:File containing the ddex:SoundRecording that a ddex:DSP can obtain.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFile($index)
    {
        unset($this->file[$index]);
    }

    /**
     * Gets as file
     *
     * A ddex:Composite containing details of a ddex:File containing the ddex:SoundRecording that a ddex:DSP can obtain.
     *
     * @return \DDEX\ddexC\FileType[]
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets a new file
     *
     * A ddex:Composite containing details of a ddex:File containing the ddex:SoundRecording that a ddex:DSP can obtain.
     *
     * @param \DDEX\ddexC\FileType[] $file
     * @return self
     */
    public function setFile(array $file = null)
    {
        $this->file = $file;
        return $this;
    }

    /**
     * Adds as fingerprint
     *
     * A ddex:Composite containing details of a ddex:Fingerprint and its governing algorithm.
     *
     * @return self
     * @param \DDEX\ddexC\FingerprintType $fingerprint
     */
    public function addToFingerprint(\DDEX\ddexC\FingerprintType $fingerprint)
    {
        $this->fingerprint[] = $fingerprint;
        return $this;
    }

    /**
     * isset fingerprint
     *
     * A ddex:Composite containing details of a ddex:Fingerprint and its governing algorithm.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFingerprint($index)
    {
        return isset($this->fingerprint[$index]);
    }

    /**
     * unset fingerprint
     *
     * A ddex:Composite containing details of a ddex:Fingerprint and its governing algorithm.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFingerprint($index)
    {
        unset($this->fingerprint[$index]);
    }

    /**
     * Gets as fingerprint
     *
     * A ddex:Composite containing details of a ddex:Fingerprint and its governing algorithm.
     *
     * @return \DDEX\ddexC\FingerprintType[]
     */
    public function getFingerprint()
    {
        return $this->fingerprint;
    }

    /**
     * Sets a new fingerprint
     *
     * A ddex:Composite containing details of a ddex:Fingerprint and its governing algorithm.
     *
     * @param \DDEX\ddexC\FingerprintType[] $fingerprint
     * @return self
     */
    public function setFingerprint(array $fingerprint = null)
    {
        $this->fingerprint = $fingerprint;
        return $this;
    }
}


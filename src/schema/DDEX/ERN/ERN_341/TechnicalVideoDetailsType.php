<?php

namespace DDEX\ERN\ERN_341;

/**
 * Class representing TechnicalVideoDetailsType
 *
 * A ddex:Composite containing technical details of a ddex:Video.
 * XSD Type: TechnicalVideoDetails
 */
class TechnicalVideoDetailsType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the TechnicalSoundRecordingDetails as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The ddex:Identifier (specific to the ddex:Message) of the ern:TechnicalVideoDetails within the ddex:Release which contains it. This is a ddex:LocalTechnicalResourceDetailsAnchor starting with the letter T.
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
     * A ddex:Composite containing the overall ddex:BitRate and a ddex:UnitOfMeasure (the default is ddex:kbps).
     *
     * @var \DDEX\ddexC\BitRateType $overallBitRate
     */
    private $overallBitRate = null;

    /**
     * A ddex:Composite containing details of a ddex:ContainerFormat.
     *
     * @var \DDEX\ddexC\ContainerFormatType $containerFormat
     */
    private $containerFormat = null;

    /**
     * A ddex:Composite containing details of a ddex:Type of ddex:VideoCodec.
     *
     * @var \DDEX\ddexC\VideoCodecTypeType $videoCodecType
     */
    private $videoCodecType = null;

    /**
     * A ddex:Composite containing the ddex:BitRate for the video data and a ddex:UnitOfMeasure (the default is ddex:kbps).
     *
     * @var \DDEX\ddexC\BitRateType $videoBitRate
     */
    private $videoBitRate = null;

    /**
     * A ddex:Composite containing the ddex:Rate for a number of frames shown in the ddex:Video in a specific ddex:Period of ddex:Time and a ddex:UnitOfMeasure (the default is ddex:Hz, interlaced).
     *
     * @var \DDEX\ddexC\FrameRateType $frameRate
     */
    private $frameRate = null;

    /**
     * A ddex:Composite containing the vertical ddex:Extent of an ddex:Image of the ddex:Video and a ddex:UnitOfMeasure (the default is pixels).
     *
     * @var \DDEX\ddexC\ExtentType $imageHeight
     */
    private $imageHeight = null;

    /**
     * A ddex:Composite containing the horizontal ddex:Extent of an ddex:Image of the ddex:Video and a ddex:UnitOfMeasure (the default is pixels).
     *
     * @var \DDEX\ddexC\ExtentType $imageWidth
     */
    private $imageWidth = null;

    /**
     * The ratio formed by dividing the ddex:ImageHeight by the ddex:ImageWidth.
     *
     * @var float $aspectRatio
     */
    private $aspectRatio = null;

    /**
     * An amount of data determining the color of a pixel of an ddex:Image of the ddex:Video (given in bits per pixel).
     *
     * @var int $colorDepth
     */
    private $colorDepth = null;

    /**
     * A ddex:Type of resolution (or definition) in which the ddex:Video is provided.
     *
     * @var string $videoDefinitionType
     */
    private $videoDefinitionType = null;

    /**
     * A ddex:Composite containing details of a ddex:Type of ddex:AudioCodec.
     *
     * @var \DDEX\ddexC\AudioCodecTypeType $audioCodecType
     */
    private $audioCodecType = null;

    /**
     * A ddex:Composite containing the ddex:BitRate for the audio data and a ddex:UnitOfMeasure (the default is ddex:kbps).
     *
     * @var \DDEX\ddexC\BitRateType $audioBitRate
     */
    private $audioBitRate = null;

    /**
     * A number of audio channels.
     *
     * @var int $numberOfAudioChannels
     */
    private $numberOfAudioChannels = null;

    /**
     * A ddex:Composite containing the ddex:SamplingRate for the audio data and a ddex:UnitOfMeasure (the default is ddex:Hz).
     *
     * @var \DDEX\ddexC\SamplingRateType $audioSamplingRate
     */
    private $audioSamplingRate = null;

    /**
     * An amount of audio data in a sample.
     *
     * @var int $audioBitsPerSample
     */
    private $audioBitsPerSample = null;

    /**
     * The ddex:Duration of the instantiation of the ern:Video if this differs from the ddex:Duration provided for the ern:Video itself (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). This element must only be used if and when there are no royalty reporting implications on this change in duration and when the specific technical instantiation is a clip taken from a technical instantiation representing the whole ern:Video.
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The ddex:Flag indicating whether the ern:Video needs to be processed (=True) or not (=False) (typically: transcoded) by the ddex:MessageRecipient before being delivered to ddex:Consumers.
     *
     * @var bool $resourceProcessingRequired
     */
    private $resourceProcessingRequired = null;

    /**
     * The ddex:Duration of the ern:Video that may be sold to a ddex:Consumer if the ern:Video provided is not intended to be provided to ddex:Consumers 'as is' but will need to be transcoded into an appropriate format by the ddex:MessageRecipient or any other ddex:DSP handling the ddex:Release before it is sold (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $usableResourceDuration
     */
    private $usableResourceDuration = null;

    /**
     * The ddex:Flag indicating whether the ddex:Video is technically a preview of the parent ddex:Resource (=True) or not (=False). Note that nothing can be implied from this element as to the conditions under which the preview can be made available.
     *
     * @var bool $isPreview
     */
    private $isPreview = null;

    /**
     * A ddex:Composite containing details of a preview.
     *
     * @var \DDEX\ERN\ERN_341\SoundRecordingPreviewDetailsType $previewDetails
     */
    private $previewDetails = null;

    /**
     * A ddex:Composite containing details of a ddex:FulfillmentDate.
     *
     * @var \DDEX\ddexC\FulfillmentDateType $fulfillmentDate
     */
    private $fulfillmentDate = null;

    /**
     * A ddex:Composite containing details of when a consumer is able to get hold of the ddex:Video.
     *
     * @var \DDEX\ddexC\FulfillmentDateType $consumerFulfillmentDate
     */
    private $consumerFulfillmentDate = null;

    /**
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain a ddex:File that contains the ddex:Video.
     *
     * @var \DDEX\ddexC\DescriptionType[] $fileAvailabilityDescription
     */
    private $fileAvailabilityDescription = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:File containing the ddex:Video that a ddex:DSP can obtain.
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
     * The ddex:Language and script for the ddex:Elements of the TechnicalSoundRecordingDetails as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the TechnicalSoundRecordingDetails as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Identifier (specific to the ddex:Message) of the ern:TechnicalVideoDetails within the ddex:Release which contains it. This is a ddex:LocalTechnicalResourceDetailsAnchor starting with the letter T.
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
     * The ddex:Identifier (specific to the ddex:Message) of the ern:TechnicalVideoDetails within the ddex:Release which contains it. This is a ddex:LocalTechnicalResourceDetailsAnchor starting with the letter T.
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
     * Gets as overallBitRate
     *
     * A ddex:Composite containing the overall ddex:BitRate and a ddex:UnitOfMeasure (the default is ddex:kbps).
     *
     * @return \DDEX\ddexC\BitRateType
     */
    public function getOverallBitRate()
    {
        return $this->overallBitRate;
    }

    /**
     * Sets a new overallBitRate
     *
     * A ddex:Composite containing the overall ddex:BitRate and a ddex:UnitOfMeasure (the default is ddex:kbps).
     *
     * @param \DDEX\ddexC\BitRateType $overallBitRate
     * @return self
     */
    public function setOverallBitRate(?\DDEX\ddexC\BitRateType $overallBitRate = null)
    {
        $this->overallBitRate = $overallBitRate;
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
     * Gets as videoCodecType
     *
     * A ddex:Composite containing details of a ddex:Type of ddex:VideoCodec.
     *
     * @return \DDEX\ddexC\VideoCodecTypeType
     */
    public function getVideoCodecType()
    {
        return $this->videoCodecType;
    }

    /**
     * Sets a new videoCodecType
     *
     * A ddex:Composite containing details of a ddex:Type of ddex:VideoCodec.
     *
     * @param \DDEX\ddexC\VideoCodecTypeType $videoCodecType
     * @return self
     */
    public function setVideoCodecType(?\DDEX\ddexC\VideoCodecTypeType $videoCodecType = null)
    {
        $this->videoCodecType = $videoCodecType;
        return $this;
    }

    /**
     * Gets as videoBitRate
     *
     * A ddex:Composite containing the ddex:BitRate for the video data and a ddex:UnitOfMeasure (the default is ddex:kbps).
     *
     * @return \DDEX\ddexC\BitRateType
     */
    public function getVideoBitRate()
    {
        return $this->videoBitRate;
    }

    /**
     * Sets a new videoBitRate
     *
     * A ddex:Composite containing the ddex:BitRate for the video data and a ddex:UnitOfMeasure (the default is ddex:kbps).
     *
     * @param \DDEX\ddexC\BitRateType $videoBitRate
     * @return self
     */
    public function setVideoBitRate(?\DDEX\ddexC\BitRateType $videoBitRate = null)
    {
        $this->videoBitRate = $videoBitRate;
        return $this;
    }

    /**
     * Gets as frameRate
     *
     * A ddex:Composite containing the ddex:Rate for a number of frames shown in the ddex:Video in a specific ddex:Period of ddex:Time and a ddex:UnitOfMeasure (the default is ddex:Hz, interlaced).
     *
     * @return \DDEX\ddexC\FrameRateType
     */
    public function getFrameRate()
    {
        return $this->frameRate;
    }

    /**
     * Sets a new frameRate
     *
     * A ddex:Composite containing the ddex:Rate for a number of frames shown in the ddex:Video in a specific ddex:Period of ddex:Time and a ddex:UnitOfMeasure (the default is ddex:Hz, interlaced).
     *
     * @param \DDEX\ddexC\FrameRateType $frameRate
     * @return self
     */
    public function setFrameRate(?\DDEX\ddexC\FrameRateType $frameRate = null)
    {
        $this->frameRate = $frameRate;
        return $this;
    }

    /**
     * Gets as imageHeight
     *
     * A ddex:Composite containing the vertical ddex:Extent of an ddex:Image of the ddex:Video and a ddex:UnitOfMeasure (the default is pixels).
     *
     * @return \DDEX\ddexC\ExtentType
     */
    public function getImageHeight()
    {
        return $this->imageHeight;
    }

    /**
     * Sets a new imageHeight
     *
     * A ddex:Composite containing the vertical ddex:Extent of an ddex:Image of the ddex:Video and a ddex:UnitOfMeasure (the default is pixels).
     *
     * @param \DDEX\ddexC\ExtentType $imageHeight
     * @return self
     */
    public function setImageHeight(?\DDEX\ddexC\ExtentType $imageHeight = null)
    {
        $this->imageHeight = $imageHeight;
        return $this;
    }

    /**
     * Gets as imageWidth
     *
     * A ddex:Composite containing the horizontal ddex:Extent of an ddex:Image of the ddex:Video and a ddex:UnitOfMeasure (the default is pixels).
     *
     * @return \DDEX\ddexC\ExtentType
     */
    public function getImageWidth()
    {
        return $this->imageWidth;
    }

    /**
     * Sets a new imageWidth
     *
     * A ddex:Composite containing the horizontal ddex:Extent of an ddex:Image of the ddex:Video and a ddex:UnitOfMeasure (the default is pixels).
     *
     * @param \DDEX\ddexC\ExtentType $imageWidth
     * @return self
     */
    public function setImageWidth(?\DDEX\ddexC\ExtentType $imageWidth = null)
    {
        $this->imageWidth = $imageWidth;
        return $this;
    }

    /**
     * Gets as aspectRatio
     *
     * The ratio formed by dividing the ddex:ImageHeight by the ddex:ImageWidth.
     *
     * @return float
     */
    public function getAspectRatio()
    {
        return $this->aspectRatio;
    }

    /**
     * Sets a new aspectRatio
     *
     * The ratio formed by dividing the ddex:ImageHeight by the ddex:ImageWidth.
     *
     * @param float $aspectRatio
     * @return self
     */
    public function setAspectRatio($aspectRatio)
    {
        $this->aspectRatio = $aspectRatio;
        return $this;
    }

    /**
     * Gets as colorDepth
     *
     * An amount of data determining the color of a pixel of an ddex:Image of the ddex:Video (given in bits per pixel).
     *
     * @return int
     */
    public function getColorDepth()
    {
        return $this->colorDepth;
    }

    /**
     * Sets a new colorDepth
     *
     * An amount of data determining the color of a pixel of an ddex:Image of the ddex:Video (given in bits per pixel).
     *
     * @param int $colorDepth
     * @return self
     */
    public function setColorDepth($colorDepth)
    {
        $this->colorDepth = $colorDepth;
        return $this;
    }

    /**
     * Gets as videoDefinitionType
     *
     * A ddex:Type of resolution (or definition) in which the ddex:Video is provided.
     *
     * @return string
     */
    public function getVideoDefinitionType()
    {
        return $this->videoDefinitionType;
    }

    /**
     * Sets a new videoDefinitionType
     *
     * A ddex:Type of resolution (or definition) in which the ddex:Video is provided.
     *
     * @param string $videoDefinitionType
     * @return self
     */
    public function setVideoDefinitionType($videoDefinitionType)
    {
        $this->videoDefinitionType = $videoDefinitionType;
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
     * Gets as audioBitRate
     *
     * A ddex:Composite containing the ddex:BitRate for the audio data and a ddex:UnitOfMeasure (the default is ddex:kbps).
     *
     * @return \DDEX\ddexC\BitRateType
     */
    public function getAudioBitRate()
    {
        return $this->audioBitRate;
    }

    /**
     * Sets a new audioBitRate
     *
     * A ddex:Composite containing the ddex:BitRate for the audio data and a ddex:UnitOfMeasure (the default is ddex:kbps).
     *
     * @param \DDEX\ddexC\BitRateType $audioBitRate
     * @return self
     */
    public function setAudioBitRate(?\DDEX\ddexC\BitRateType $audioBitRate = null)
    {
        $this->audioBitRate = $audioBitRate;
        return $this;
    }

    /**
     * Gets as numberOfAudioChannels
     *
     * A number of audio channels.
     *
     * @return int
     */
    public function getNumberOfAudioChannels()
    {
        return $this->numberOfAudioChannels;
    }

    /**
     * Sets a new numberOfAudioChannels
     *
     * A number of audio channels.
     *
     * @param int $numberOfAudioChannels
     * @return self
     */
    public function setNumberOfAudioChannels($numberOfAudioChannels)
    {
        $this->numberOfAudioChannels = $numberOfAudioChannels;
        return $this;
    }

    /**
     * Gets as audioSamplingRate
     *
     * A ddex:Composite containing the ddex:SamplingRate for the audio data and a ddex:UnitOfMeasure (the default is ddex:Hz).
     *
     * @return \DDEX\ddexC\SamplingRateType
     */
    public function getAudioSamplingRate()
    {
        return $this->audioSamplingRate;
    }

    /**
     * Sets a new audioSamplingRate
     *
     * A ddex:Composite containing the ddex:SamplingRate for the audio data and a ddex:UnitOfMeasure (the default is ddex:Hz).
     *
     * @param \DDEX\ddexC\SamplingRateType $audioSamplingRate
     * @return self
     */
    public function setAudioSamplingRate(?\DDEX\ddexC\SamplingRateType $audioSamplingRate = null)
    {
        $this->audioSamplingRate = $audioSamplingRate;
        return $this;
    }

    /**
     * Gets as audioBitsPerSample
     *
     * An amount of audio data in a sample.
     *
     * @return int
     */
    public function getAudioBitsPerSample()
    {
        return $this->audioBitsPerSample;
    }

    /**
     * Sets a new audioBitsPerSample
     *
     * An amount of audio data in a sample.
     *
     * @param int $audioBitsPerSample
     * @return self
     */
    public function setAudioBitsPerSample($audioBitsPerSample)
    {
        $this->audioBitsPerSample = $audioBitsPerSample;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The ddex:Duration of the instantiation of the ern:Video if this differs from the ddex:Duration provided for the ern:Video itself (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). This element must only be used if and when there are no royalty reporting implications on this change in duration and when the specific technical instantiation is a clip taken from a technical instantiation representing the whole ern:Video.
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
     * The ddex:Duration of the instantiation of the ern:Video if this differs from the ddex:Duration provided for the ern:Video itself (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). This element must only be used if and when there are no royalty reporting implications on this change in duration and when the specific technical instantiation is a clip taken from a technical instantiation representing the whole ern:Video.
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
     * The ddex:Flag indicating whether the ern:Video needs to be processed (=True) or not (=False) (typically: transcoded) by the ddex:MessageRecipient before being delivered to ddex:Consumers.
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
     * The ddex:Flag indicating whether the ern:Video needs to be processed (=True) or not (=False) (typically: transcoded) by the ddex:MessageRecipient before being delivered to ddex:Consumers.
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
     * The ddex:Duration of the ern:Video that may be sold to a ddex:Consumer if the ern:Video provided is not intended to be provided to ddex:Consumers 'as is' but will need to be transcoded into an appropriate format by the ddex:MessageRecipient or any other ddex:DSP handling the ddex:Release before it is sold (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * The ddex:Duration of the ern:Video that may be sold to a ddex:Consumer if the ern:Video provided is not intended to be provided to ddex:Consumers 'as is' but will need to be transcoded into an appropriate format by the ddex:MessageRecipient or any other ddex:DSP handling the ddex:Release before it is sold (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * The ddex:Flag indicating whether the ddex:Video is technically a preview of the parent ddex:Resource (=True) or not (=False). Note that nothing can be implied from this element as to the conditions under which the preview can be made available.
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
     * The ddex:Flag indicating whether the ddex:Video is technically a preview of the parent ddex:Resource (=True) or not (=False). Note that nothing can be implied from this element as to the conditions under which the preview can be made available.
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
     * @return \DDEX\ERN\ERN_341\SoundRecordingPreviewDetailsType
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
     * @param \DDEX\ERN\ERN_341\SoundRecordingPreviewDetailsType $previewDetails
     * @return self
     */
    public function setPreviewDetails(?\DDEX\ERN\ERN_341\SoundRecordingPreviewDetailsType $previewDetails = null)
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
     * A ddex:Composite containing details of when a consumer is able to get hold of the ddex:Video.
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
     * A ddex:Composite containing details of when a consumer is able to get hold of the ddex:Video.
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
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain a ddex:File that contains the ddex:Video.
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
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain a ddex:File that contains the ddex:Video.
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
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain a ddex:File that contains the ddex:Video.
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
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain a ddex:File that contains the ddex:Video.
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
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain a ddex:File that contains the ddex:Video.
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
     * A ddex:Composite containing details of a ddex:File containing the ddex:Video that a ddex:DSP can obtain.
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
     * A ddex:Composite containing details of a ddex:File containing the ddex:Video that a ddex:DSP can obtain.
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
     * A ddex:Composite containing details of a ddex:File containing the ddex:Video that a ddex:DSP can obtain.
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
     * A ddex:Composite containing details of a ddex:File containing the ddex:Video that a ddex:DSP can obtain.
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
     * A ddex:Composite containing details of a ddex:File containing the ddex:Video that a ddex:DSP can obtain.
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


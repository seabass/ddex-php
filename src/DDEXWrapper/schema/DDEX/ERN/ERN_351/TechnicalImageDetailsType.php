<?php

namespace DDEX\ERN\ERN_351;

/**
 * Class representing TechnicalImageDetailsType
 *
 * A ddex:Composite containing technical details of a ddex:Image.
 * XSD Type: TechnicalImageDetails
 */
class TechnicalImageDetailsType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ern:TechnicalImageDetails as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The ddex:Identifier (specific to the ddex:Message) of the ern:TechnicalImageDetails within the ddex:Release which contains it. This is a ddex:LocalTechnicalResourceDetailsAnchor starting with the letter T.
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
     * A ddex:Composite containing details of a ddex:Type of ddex:ImageCodec.
     *
     * @var \DDEX\ddexC\ImageCodecTypeType $imageCodecType
     */
    private $imageCodecType = null;

    /**
     * A ddex:Composite containing the vertical ddex:Extent of an ddex:Image of the ddex:Image and a ddex:UnitOfMeasure (the default is pixels).
     *
     * @var \DDEX\ddexC\ExtentType $imageHeight
     */
    private $imageHeight = null;

    /**
     * A ddex:Composite containing the horizontal ddex:Extent of an ddex:Image of the ddex:Image and a ddex:UnitOfMeasure (the default is pixels).
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
     * An amount of data determining the color of a pixel of the ddex:Image (given in bits per pixel).
     *
     * @var int $colorDepth
     */
    private $colorDepth = null;

    /**
     * A number of pixels of the ddex:Image displayed in a specific spatial range (given in dpi).
     *
     * @var int $imageResolution
     */
    private $imageResolution = null;

    /**
     * The ddex:Flag indicating whether the ddex:Image is technically a preview of the parent ddex:Resource (=True) or not (=False). Note that nothing can be implied from this element as to the conditions under which the preview can be made available.
     *
     * @var bool $isPreview
     */
    private $isPreview = null;

    /**
     * A ddex:Composite containing details of a preview.
     *
     * @var \DDEX\ERN\ERN_351\PreviewDetailsType $previewDetails
     */
    private $previewDetails = null;

    /**
     * A ddex:Composite containing details of a ddex:FulfillmentDate.
     *
     * @var \DDEX\ddexC\FulfillmentDateType $fulfillmentDate
     */
    private $fulfillmentDate = null;

    /**
     * A ddex:Composite containing details of when a consumer is able to get hold of the ddex:Image.
     *
     * @var \DDEX\ddexC\FulfillmentDateType $consumerFulfillmentDate
     */
    private $consumerFulfillmentDate = null;

    /**
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain a ddex:File that contains the ddex:Image.
     *
     * @var \DDEX\ddexC\DescriptionType[] $fileAvailabilityDescription
     */
    private $fileAvailabilityDescription = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:File containing the ddex:Image that a ddex:DSP can obtain.
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
     * The ddex:Language and script for the ddex:Elements of the ern:TechnicalImageDetails as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ern:TechnicalImageDetails as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Identifier (specific to the ddex:Message) of the ern:TechnicalImageDetails within the ddex:Release which contains it. This is a ddex:LocalTechnicalResourceDetailsAnchor starting with the letter T.
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
     * The ddex:Identifier (specific to the ddex:Message) of the ern:TechnicalImageDetails within the ddex:Release which contains it. This is a ddex:LocalTechnicalResourceDetailsAnchor starting with the letter T.
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
     * Gets as imageCodecType
     *
     * A ddex:Composite containing details of a ddex:Type of ddex:ImageCodec.
     *
     * @return \DDEX\ddexC\ImageCodecTypeType
     */
    public function getImageCodecType()
    {
        return $this->imageCodecType;
    }

    /**
     * Sets a new imageCodecType
     *
     * A ddex:Composite containing details of a ddex:Type of ddex:ImageCodec.
     *
     * @param \DDEX\ddexC\ImageCodecTypeType $imageCodecType
     * @return self
     */
    public function setImageCodecType(?\DDEX\ddexC\ImageCodecTypeType $imageCodecType = null)
    {
        $this->imageCodecType = $imageCodecType;
        return $this;
    }

    /**
     * Gets as imageHeight
     *
     * A ddex:Composite containing the vertical ddex:Extent of an ddex:Image of the ddex:Image and a ddex:UnitOfMeasure (the default is pixels).
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
     * A ddex:Composite containing the vertical ddex:Extent of an ddex:Image of the ddex:Image and a ddex:UnitOfMeasure (the default is pixels).
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
     * A ddex:Composite containing the horizontal ddex:Extent of an ddex:Image of the ddex:Image and a ddex:UnitOfMeasure (the default is pixels).
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
     * A ddex:Composite containing the horizontal ddex:Extent of an ddex:Image of the ddex:Image and a ddex:UnitOfMeasure (the default is pixels).
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
     * An amount of data determining the color of a pixel of the ddex:Image (given in bits per pixel).
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
     * An amount of data determining the color of a pixel of the ddex:Image (given in bits per pixel).
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
     * Gets as imageResolution
     *
     * A number of pixels of the ddex:Image displayed in a specific spatial range (given in dpi).
     *
     * @return int
     */
    public function getImageResolution()
    {
        return $this->imageResolution;
    }

    /**
     * Sets a new imageResolution
     *
     * A number of pixels of the ddex:Image displayed in a specific spatial range (given in dpi).
     *
     * @param int $imageResolution
     * @return self
     */
    public function setImageResolution($imageResolution)
    {
        $this->imageResolution = $imageResolution;
        return $this;
    }

    /**
     * Gets as isPreview
     *
     * The ddex:Flag indicating whether the ddex:Image is technically a preview of the parent ddex:Resource (=True) or not (=False). Note that nothing can be implied from this element as to the conditions under which the preview can be made available.
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
     * The ddex:Flag indicating whether the ddex:Image is technically a preview of the parent ddex:Resource (=True) or not (=False). Note that nothing can be implied from this element as to the conditions under which the preview can be made available.
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
     * @return \DDEX\ERN\ERN_351\PreviewDetailsType
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
     * @param \DDEX\ERN\ERN_351\PreviewDetailsType $previewDetails
     * @return self
     */
    public function setPreviewDetails(?\DDEX\ERN\ERN_351\PreviewDetailsType $previewDetails = null)
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
     * A ddex:Composite containing details of when a consumer is able to get hold of the ddex:Image.
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
     * A ddex:Composite containing details of when a consumer is able to get hold of the ddex:Image.
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
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain a ddex:File that contains the ddex:Image.
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
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain a ddex:File that contains the ddex:Image.
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
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain a ddex:File that contains the ddex:Image.
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
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain a ddex:File that contains the ddex:Image.
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
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain a ddex:File that contains the ddex:Image.
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
     * A ddex:Composite containing details of a ddex:File containing the ddex:Image that a ddex:DSP can obtain.
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
     * A ddex:Composite containing details of a ddex:File containing the ddex:Image that a ddex:DSP can obtain.
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
     * A ddex:Composite containing details of a ddex:File containing the ddex:Image that a ddex:DSP can obtain.
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
     * A ddex:Composite containing details of a ddex:File containing the ddex:Image that a ddex:DSP can obtain.
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
     * A ddex:Composite containing details of a ddex:File containing the ddex:Image that a ddex:DSP can obtain.
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


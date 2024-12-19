<?php

namespace DDEX\RIN\RIN_200;

/**
 * Class representing ElementType
 *
 * A Composite containing details of a recording Element.
 * XSD Type: Element
 */
class ElementType
{
    /**
     * A Composite containing details of an Identifier of the Element.
     *
     * @var \DDEX\RIN\RIN_200\ProprietaryIdType[] $elementId
     */
    private $elementId = null;

    /**
     * The Identifier (specific to the File) of the Element. This is a LocalElementAnchor starting with the letter M.
     *
     * @var string $elementReference
     */
    private $elementReference = null;

    /**
     * A Composite containing details of a Title of the Element.
     *
     * @var \DDEX\RIN\RIN_200\TitleWithUDVType[] $title
     */
    private $title = [
        
    ];

    /**
     * A Composite containing details of RightsController of Rights in the Element.
     *
     * @var \DDEX\RIN\RIN_200\RightsControllerType[] $rightsController
     */
    private $rightsController = [
        
    ];

    /**
     * A Flag indicating whether the Element is a multitrack Element (=true) or not (=false).
     *
     * @var bool $isMultiTrack
     */
    private $isMultiTrack = null;

    /**
     * A Type of the Element based on its designation.
     *
     * @var string $designation
     */
    private $designation = null;

    /**
     * A Type of the Element based on its configuration.
     *
     * @var string $configuration
     */
    private $configuration = null;

    /**
     * The BitDepth of the Element.
     *
     * @var int $bitDepth
     */
    private $bitDepth = null;

    /**
     * The sample rate of the Element in kHz.
     *
     * @var float $samplingRate
     */
    private $samplingRate = null;

    /**
     * A Composite containing the time code of the Element.
     *
     * @var \DDEX\RIN\RIN_200\TimecodeType $timecode
     */
    private $timecode = null;

    /**
     * The Type of File.
     *
     * @var string $fileType
     */
    private $fileType = null;

    /**
     * A Composite containing details of the PLine for the Element.
     *
     * @var \DDEX\RIN\RIN_200\PLineWithDefaultType $pLine
     */
    private $pLine = null;

    /**
     * A Composite containing details of the classification of the Element according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @var \DDEX\RIN\RIN_200\ParentalWarningTypeWithTerritoryType $parentalWarningType
     */
    private $parentalWarningType = null;

    /**
     * A Composite containing details of a Genre to which the Element belongs.
     *
     * @var \DDEX\RIN\RIN_200\GenreWithTerritoryType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * The Status of the Element.
     *
     * @var \DDEX\RIN\RIN_200\StatusType $status
     */
    private $status = null;

    /**
     * A Composite containing a human-readable Comment about the Element.
     *
     * @var \DDEX\RIN\RIN_200\CommentType $comment
     */
    private $comment = null;

    /**
     * A Composite containing details of a DataCarrier in which the Element is used.
     *
     * @var \DDEX\RIN\RIN_200\ElementDataCarrierReferenceType $elementDataCarrierReference
     */
    private $elementDataCarrierReference = null;

    /**
     * A Reference for a Session (specific to the File). This is a LocalSessionAnchorReference starting with the letter O.
     *
     * @var string[] $elementSessionReference
     */
    private $elementSessionReference = [
        
    ];

    /**
     * A Reference for a SoundRecording for the Element (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @var string[] $elementSoundRecordingReference
     */
    private $elementSoundRecordingReference = [
        
    ];

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of an Identifier of the Element.
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\ProprietaryIdType $proprietaryId
     */
    public function addToElementId(\DDEX\RIN\RIN_200\ProprietaryIdType $proprietaryId)
    {
        $this->elementId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset elementId
     *
     * A Composite containing details of an Identifier of the Element.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetElementId($index)
    {
        return isset($this->elementId[$index]);
    }

    /**
     * unset elementId
     *
     * A Composite containing details of an Identifier of the Element.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetElementId($index)
    {
        unset($this->elementId[$index]);
    }

    /**
     * Gets as elementId
     *
     * A Composite containing details of an Identifier of the Element.
     *
     * @return \DDEX\RIN\RIN_200\ProprietaryIdType[]
     */
    public function getElementId()
    {
        return $this->elementId;
    }

    /**
     * Sets a new elementId
     *
     * A Composite containing details of an Identifier of the Element.
     *
     * @param \DDEX\RIN\RIN_200\ProprietaryIdType[] $elementId
     * @return self
     */
    public function setElementId(array $elementId = null)
    {
        $this->elementId = $elementId;
        return $this;
    }

    /**
     * Gets as elementReference
     *
     * The Identifier (specific to the File) of the Element. This is a LocalElementAnchor starting with the letter M.
     *
     * @return string
     */
    public function getElementReference()
    {
        return $this->elementReference;
    }

    /**
     * Sets a new elementReference
     *
     * The Identifier (specific to the File) of the Element. This is a LocalElementAnchor starting with the letter M.
     *
     * @param string $elementReference
     * @return self
     */
    public function setElementReference($elementReference)
    {
        $this->elementReference = $elementReference;
        return $this;
    }

    /**
     * Adds as title
     *
     * A Composite containing details of a Title of the Element.
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\TitleWithUDVType $title
     */
    public function addToTitle(\DDEX\RIN\RIN_200\TitleWithUDVType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A Composite containing details of a Title of the Element.
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
     * A Composite containing details of a Title of the Element.
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
     * A Composite containing details of a Title of the Element.
     *
     * @return \DDEX\RIN\RIN_200\TitleWithUDVType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title of the Element.
     *
     * @param \DDEX\RIN\RIN_200\TitleWithUDVType[] $title
     * @return self
     */
    public function setTitle(array $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Adds as rightsController
     *
     * A Composite containing details of RightsController of Rights in the Element.
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\RightsControllerType $rightsController
     */
    public function addToRightsController(\DDEX\RIN\RIN_200\RightsControllerType $rightsController)
    {
        $this->rightsController[] = $rightsController;
        return $this;
    }

    /**
     * isset rightsController
     *
     * A Composite containing details of RightsController of Rights in the Element.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightsController($index)
    {
        return isset($this->rightsController[$index]);
    }

    /**
     * unset rightsController
     *
     * A Composite containing details of RightsController of Rights in the Element.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightsController($index)
    {
        unset($this->rightsController[$index]);
    }

    /**
     * Gets as rightsController
     *
     * A Composite containing details of RightsController of Rights in the Element.
     *
     * @return \DDEX\RIN\RIN_200\RightsControllerType[]
     */
    public function getRightsController()
    {
        return $this->rightsController;
    }

    /**
     * Sets a new rightsController
     *
     * A Composite containing details of RightsController of Rights in the Element.
     *
     * @param \DDEX\RIN\RIN_200\RightsControllerType[] $rightsController
     * @return self
     */
    public function setRightsController(array $rightsController = null)
    {
        $this->rightsController = $rightsController;
        return $this;
    }

    /**
     * Gets as isMultiTrack
     *
     * A Flag indicating whether the Element is a multitrack Element (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsMultiTrack()
    {
        return $this->isMultiTrack;
    }

    /**
     * Sets a new isMultiTrack
     *
     * A Flag indicating whether the Element is a multitrack Element (=true) or not (=false).
     *
     * @param bool $isMultiTrack
     * @return self
     */
    public function setIsMultiTrack($isMultiTrack)
    {
        $this->isMultiTrack = $isMultiTrack;
        return $this;
    }

    /**
     * Gets as designation
     *
     * A Type of the Element based on its designation.
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Sets a new designation
     *
     * A Type of the Element based on its designation.
     *
     * @param string $designation
     * @return self
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Gets as configuration
     *
     * A Type of the Element based on its configuration.
     *
     * @return string
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * Sets a new configuration
     *
     * A Type of the Element based on its configuration.
     *
     * @param string $configuration
     * @return self
     */
    public function setConfiguration($configuration)
    {
        $this->configuration = $configuration;
        return $this;
    }

    /**
     * Gets as bitDepth
     *
     * The BitDepth of the Element.
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
     * The BitDepth of the Element.
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
     * The sample rate of the Element in kHz.
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
     * The sample rate of the Element in kHz.
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
     * A Composite containing the time code of the Element.
     *
     * @return \DDEX\RIN\RIN_200\TimecodeType
     */
    public function getTimecode()
    {
        return $this->timecode;
    }

    /**
     * Sets a new timecode
     *
     * A Composite containing the time code of the Element.
     *
     * @param \DDEX\RIN\RIN_200\TimecodeType $timecode
     * @return self
     */
    public function setTimecode(?\DDEX\RIN\RIN_200\TimecodeType $timecode = null)
    {
        $this->timecode = $timecode;
        return $this;
    }

    /**
     * Gets as fileType
     *
     * The Type of File.
     *
     * @return string
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * Sets a new fileType
     *
     * The Type of File.
     *
     * @param string $fileType
     * @return self
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
        return $this;
    }

    /**
     * Gets as pLine
     *
     * A Composite containing details of the PLine for the Element.
     *
     * @return \DDEX\RIN\RIN_200\PLineWithDefaultType
     */
    public function getPLine()
    {
        return $this->pLine;
    }

    /**
     * Sets a new pLine
     *
     * A Composite containing details of the PLine for the Element.
     *
     * @param \DDEX\RIN\RIN_200\PLineWithDefaultType $pLine
     * @return self
     */
    public function setPLine(?\DDEX\RIN\RIN_200\PLineWithDefaultType $pLine = null)
    {
        $this->pLine = $pLine;
        return $this;
    }

    /**
     * Gets as parentalWarningType
     *
     * A Composite containing details of the classification of the Element according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return \DDEX\RIN\RIN_200\ParentalWarningTypeWithTerritoryType
     */
    public function getParentalWarningType()
    {
        return $this->parentalWarningType;
    }

    /**
     * Sets a new parentalWarningType
     *
     * A Composite containing details of the classification of the Element according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @param \DDEX\RIN\RIN_200\ParentalWarningTypeWithTerritoryType $parentalWarningType
     * @return self
     */
    public function setParentalWarningType(?\DDEX\RIN\RIN_200\ParentalWarningTypeWithTerritoryType $parentalWarningType = null)
    {
        $this->parentalWarningType = $parentalWarningType;
        return $this;
    }

    /**
     * Adds as genre
     *
     * A Composite containing details of a Genre to which the Element belongs.
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\GenreWithTerritoryType $genre
     */
    public function addToGenre(\DDEX\RIN\RIN_200\GenreWithTerritoryType $genre)
    {
        $this->genre[] = $genre;
        return $this;
    }

    /**
     * isset genre
     *
     * A Composite containing details of a Genre to which the Element belongs.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGenre($index)
    {
        return isset($this->genre[$index]);
    }

    /**
     * unset genre
     *
     * A Composite containing details of a Genre to which the Element belongs.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGenre($index)
    {
        unset($this->genre[$index]);
    }

    /**
     * Gets as genre
     *
     * A Composite containing details of a Genre to which the Element belongs.
     *
     * @return \DDEX\RIN\RIN_200\GenreWithTerritoryType[]
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Sets a new genre
     *
     * A Composite containing details of a Genre to which the Element belongs.
     *
     * @param \DDEX\RIN\RIN_200\GenreWithTerritoryType[] $genre
     * @return self
     */
    public function setGenre(array $genre = null)
    {
        $this->genre = $genre;
        return $this;
    }

    /**
     * Gets as status
     *
     * The Status of the Element.
     *
     * @return \DDEX\RIN\RIN_200\StatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The Status of the Element.
     *
     * @param \DDEX\RIN\RIN_200\StatusType $status
     * @return self
     */
    public function setStatus(?\DDEX\RIN\RIN_200\StatusType $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as comment
     *
     * A Composite containing a human-readable Comment about the Element.
     *
     * @return \DDEX\RIN\RIN_200\CommentType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A Composite containing a human-readable Comment about the Element.
     *
     * @param \DDEX\RIN\RIN_200\CommentType $comment
     * @return self
     */
    public function setComment(?\DDEX\RIN\RIN_200\CommentType $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Gets as elementDataCarrierReference
     *
     * A Composite containing details of a DataCarrier in which the Element is used.
     *
     * @return \DDEX\RIN\RIN_200\ElementDataCarrierReferenceType
     */
    public function getElementDataCarrierReference()
    {
        return $this->elementDataCarrierReference;
    }

    /**
     * Sets a new elementDataCarrierReference
     *
     * A Composite containing details of a DataCarrier in which the Element is used.
     *
     * @param \DDEX\RIN\RIN_200\ElementDataCarrierReferenceType $elementDataCarrierReference
     * @return self
     */
    public function setElementDataCarrierReference(\DDEX\RIN\RIN_200\ElementDataCarrierReferenceType $elementDataCarrierReference)
    {
        $this->elementDataCarrierReference = $elementDataCarrierReference;
        return $this;
    }

    /**
     * Adds as elementSessionReference
     *
     * A Reference for a Session (specific to the File). This is a LocalSessionAnchorReference starting with the letter O.
     *
     * @return self
     * @param string $elementSessionReference
     */
    public function addToElementSessionReference($elementSessionReference)
    {
        $this->elementSessionReference[] = $elementSessionReference;
        return $this;
    }

    /**
     * isset elementSessionReference
     *
     * A Reference for a Session (specific to the File). This is a LocalSessionAnchorReference starting with the letter O.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetElementSessionReference($index)
    {
        return isset($this->elementSessionReference[$index]);
    }

    /**
     * unset elementSessionReference
     *
     * A Reference for a Session (specific to the File). This is a LocalSessionAnchorReference starting with the letter O.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetElementSessionReference($index)
    {
        unset($this->elementSessionReference[$index]);
    }

    /**
     * Gets as elementSessionReference
     *
     * A Reference for a Session (specific to the File). This is a LocalSessionAnchorReference starting with the letter O.
     *
     * @return string[]
     */
    public function getElementSessionReference()
    {
        return $this->elementSessionReference;
    }

    /**
     * Sets a new elementSessionReference
     *
     * A Reference for a Session (specific to the File). This is a LocalSessionAnchorReference starting with the letter O.
     *
     * @param string $elementSessionReference
     * @return self
     */
    public function setElementSessionReference(array $elementSessionReference = null)
    {
        $this->elementSessionReference = $elementSessionReference;
        return $this;
    }

    /**
     * Adds as elementSoundRecordingReference
     *
     * A Reference for a SoundRecording for the Element (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @return self
     * @param string $elementSoundRecordingReference
     */
    public function addToElementSoundRecordingReference($elementSoundRecordingReference)
    {
        $this->elementSoundRecordingReference[] = $elementSoundRecordingReference;
        return $this;
    }

    /**
     * isset elementSoundRecordingReference
     *
     * A Reference for a SoundRecording for the Element (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetElementSoundRecordingReference($index)
    {
        return isset($this->elementSoundRecordingReference[$index]);
    }

    /**
     * unset elementSoundRecordingReference
     *
     * A Reference for a SoundRecording for the Element (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetElementSoundRecordingReference($index)
    {
        unset($this->elementSoundRecordingReference[$index]);
    }

    /**
     * Gets as elementSoundRecordingReference
     *
     * A Reference for a SoundRecording for the Element (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @return string[]
     */
    public function getElementSoundRecordingReference()
    {
        return $this->elementSoundRecordingReference;
    }

    /**
     * Sets a new elementSoundRecordingReference
     *
     * A Reference for a SoundRecording for the Element (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @param string $elementSoundRecordingReference
     * @return self
     */
    public function setElementSoundRecordingReference(array $elementSoundRecordingReference = null)
    {
        $this->elementSoundRecordingReference = $elementSoundRecordingReference;
        return $this;
    }
}


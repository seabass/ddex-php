<?php

namespace DDEX\RIN\RIN11M;

/**
 * Class representing SoundRecordingType
 *
 * A Composite containing details of a SoundRecording.
 * XSD Type: SoundRecording
 */
class SoundRecordingType
{
    /**
     * A Composite containing details of the Type of the SoundRecording.
     *
     * @var \DDEX\RIN\RIN11M\SoundRecordingTypeType $type
     */
    private $type = null;

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the SoundRecording to a Consumer.
     *
     * @var \DDEX\RIN\RIN11M\DisplayArtistNameWithDefaultType[] $displayArtistName
     */
    private $displayArtistName = [
        
    ];

    /**
     * A Composite containing details of a DisplayArtist of the SoundRecording (specific to this message).
     *
     * @var \DDEX\RIN\RIN11M\DisplayArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * A Composite containing details of SoundRecordingIds.
     *
     * @var \DDEX\RIN\RIN11M\SoundRecordingIdType[] $soundRecordingId
     */
    private $soundRecordingId = [
        
    ];

    /**
     * The Identifier (specific to the Message) of the SoundRecording within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * A Composite containing details of a Title of the SoundRecording.
     *
     * @var \DDEX\RIN\RIN11M\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A Composite containing details of a Type of Version of the SoundRecording.
     *
     * @var \DDEX\RIN\RIN11M\VersionTypeType[] $versionType
     */
    private $versionType = [
        
    ];

    /**
     * The Identifier of the Version of the unique instance of the SoundRecording. Examples include different tempo, key, or take of a SoundRecording of a MusicalWork. This is an addition to the Title composite (with its SubTitle element) to manage different 'versions' of the 'same' recording, and DDEX is considering to replace this Element at some stage with an AllowedValueSet.
     *
     * @var string[] $soundRecordingDescriptorTag
     */
    private $soundRecordingDescriptorTag = [
        
    ];

    /**
     * A Composite containing details of RightsController of Rights in the SoundRecording.
     *
     * @var \DDEX\RIN\RIN11M\RightsControllerType[] $rightsController
     */
    private $rightsController = [
        
    ];

    /**
     * The Duration of the SoundRecording (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * A Composite containing details of the PLine for the SoundRecording.
     *
     * @var \DDEX\RIN\RIN11M\PLineWithDefaultType $pLine
     */
    private $pLine = null;

    /**
     * A Composite containing details of the classification of the SoundRecording according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @var \DDEX\RIN\RIN11M\ParentalWarningTypeWithTerritoryType $parentalWarningType
     */
    private $parentalWarningType = null;

    /**
     * A Composite containing details of a Genre to which the SoundRecording belongs.
     *
     * @var \DDEX\RIN\RIN11M\GenreWithTerritoryType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * The Status of the SoundRecording.
     *
     * @var \DDEX\RIN\RIN11M\StatusType $status
     */
    private $status = null;

    /**
     * A human-readable Comment about the SoundRecording.
     *
     * @var string $comment
     */
    private $comment = null;

    /**
     * A Reference for a MusicalWork (specific to this Message). This is a LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @var string[] $soundRecordingMusicalWorkReference
     */
    private $soundRecordingMusicalWorkReference = [
        
    ];

    /**
     * A Composite containing details of a Contributor to the SoundRecording.
     *
     * @var \DDEX\RIN\RIN11M\SoundRecordingContributorReferenceType[] $contributor
     */
    private $contributor = [
        
    ];

    /**
     * A Reference for a Project (specific to the File). This is a LocalProjectAnchorReference starting with the letter J.
     *
     * @var string[] $soundRecordingProjectReference
     */
    private $soundRecordingProjectReference = [
        
    ];

    /**
     * A Reference for a Session (specific to the File). This is a LocalSessionAnchorReference starting with the letter O.
     *
     * @var string[] $soundRecordingSessionReference
     */
    private $soundRecordingSessionReference = [
        
    ];

    /**
     * The Flag indicating whether the SoundRecording is a Medley (=true) or not (=false).
     *
     * @var bool $isMedley
     */
    private $isMedley = null;

    /**
     * A configuration of audio channels.
     *
     * @var string $audioChannelConfiguration
     */
    private $audioChannelConfiguration = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DDEX\RIN\RIN11M\FirstPublicationDateType[] $firstPublicationDate
     */
    private $firstPublicationDate = [
        
    ];

    /**
     * Gets as type
     *
     * A Composite containing details of the Type of the SoundRecording.
     *
     * @return \DDEX\RIN\RIN11M\SoundRecordingTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * A Composite containing details of the Type of the SoundRecording.
     *
     * @param \DDEX\RIN\RIN11M\SoundRecordingTypeType $type
     * @return self
     */
    public function setType(?\DDEX\RIN\RIN11M\SoundRecordingTypeType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the SoundRecording to a Consumer.
     *
     * @return self
     * @param \DDEX\RIN\RIN11M\DisplayArtistNameWithDefaultType $displayArtistName
     */
    public function addToDisplayArtistName(\DDEX\RIN\RIN11M\DisplayArtistNameWithDefaultType $displayArtistName)
    {
        $this->displayArtistName[] = $displayArtistName;
        return $this;
    }

    /**
     * isset displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the SoundRecording to a Consumer.
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
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the SoundRecording to a Consumer.
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
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the SoundRecording to a Consumer.
     *
     * @return \DDEX\RIN\RIN11M\DisplayArtistNameWithDefaultType[]
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the SoundRecording to a Consumer.
     *
     * @param \DDEX\RIN\RIN11M\DisplayArtistNameWithDefaultType[] $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(array $displayArtistName)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }

    /**
     * Adds as displayArtist
     *
     * A Composite containing details of a DisplayArtist of the SoundRecording (specific to this message).
     *
     * @return self
     * @param \DDEX\RIN\RIN11M\DisplayArtistType $displayArtist
     */
    public function addToDisplayArtist(\DDEX\RIN\RIN11M\DisplayArtistType $displayArtist)
    {
        $this->displayArtist[] = $displayArtist;
        return $this;
    }

    /**
     * isset displayArtist
     *
     * A Composite containing details of a DisplayArtist of the SoundRecording (specific to this message).
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
     * A Composite containing details of a DisplayArtist of the SoundRecording (specific to this message).
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
     * A Composite containing details of a DisplayArtist of the SoundRecording (specific to this message).
     *
     * @return \DDEX\RIN\RIN11M\DisplayArtistType[]
     */
    public function getDisplayArtist()
    {
        return $this->displayArtist;
    }

    /**
     * Sets a new displayArtist
     *
     * A Composite containing details of a DisplayArtist of the SoundRecording (specific to this message).
     *
     * @param \DDEX\RIN\RIN11M\DisplayArtistType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist = null)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }

    /**
     * Adds as soundRecordingId
     *
     * A Composite containing details of SoundRecordingIds.
     *
     * @return self
     * @param \DDEX\RIN\RIN11M\SoundRecordingIdType $soundRecordingId
     */
    public function addToSoundRecordingId(\DDEX\RIN\RIN11M\SoundRecordingIdType $soundRecordingId)
    {
        $this->soundRecordingId[] = $soundRecordingId;
        return $this;
    }

    /**
     * isset soundRecordingId
     *
     * A Composite containing details of SoundRecordingIds.
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
     * A Composite containing details of SoundRecordingIds.
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
     * A Composite containing details of SoundRecordingIds.
     *
     * @return \DDEX\RIN\RIN11M\SoundRecordingIdType[]
     */
    public function getSoundRecordingId()
    {
        return $this->soundRecordingId;
    }

    /**
     * Sets a new soundRecordingId
     *
     * A Composite containing details of SoundRecordingIds.
     *
     * @param \DDEX\RIN\RIN11M\SoundRecordingIdType[] $soundRecordingId
     * @return self
     */
    public function setSoundRecordingId(array $soundRecordingId = null)
    {
        $this->soundRecordingId = $soundRecordingId;
        return $this;
    }

    /**
     * Gets as resourceReference
     *
     * The Identifier (specific to the Message) of the SoundRecording within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
     *
     * @return string
     */
    public function getResourceReference()
    {
        return $this->resourceReference;
    }

    /**
     * Sets a new resourceReference
     *
     * The Identifier (specific to the Message) of the SoundRecording within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
     *
     * @param string $resourceReference
     * @return self
     */
    public function setResourceReference($resourceReference)
    {
        $this->resourceReference = $resourceReference;
        return $this;
    }

    /**
     * Adds as title
     *
     * A Composite containing details of a Title of the SoundRecording.
     *
     * @return self
     * @param \DDEX\RIN\RIN11M\TitleType $title
     */
    public function addToTitle(\DDEX\RIN\RIN11M\TitleType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A Composite containing details of a Title of the SoundRecording.
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
     * A Composite containing details of a Title of the SoundRecording.
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
     * A Composite containing details of a Title of the SoundRecording.
     *
     * @return \DDEX\RIN\RIN11M\TitleType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title of the SoundRecording.
     *
     * @param \DDEX\RIN\RIN11M\TitleType[] $title
     * @return self
     */
    public function setTitle(array $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Adds as versionType
     *
     * A Composite containing details of a Type of Version of the SoundRecording.
     *
     * @return self
     * @param \DDEX\RIN\RIN11M\VersionTypeType $versionType
     */
    public function addToVersionType(\DDEX\RIN\RIN11M\VersionTypeType $versionType)
    {
        $this->versionType[] = $versionType;
        return $this;
    }

    /**
     * isset versionType
     *
     * A Composite containing details of a Type of Version of the SoundRecording.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVersionType($index)
    {
        return isset($this->versionType[$index]);
    }

    /**
     * unset versionType
     *
     * A Composite containing details of a Type of Version of the SoundRecording.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVersionType($index)
    {
        unset($this->versionType[$index]);
    }

    /**
     * Gets as versionType
     *
     * A Composite containing details of a Type of Version of the SoundRecording.
     *
     * @return \DDEX\RIN\RIN11M\VersionTypeType[]
     */
    public function getVersionType()
    {
        return $this->versionType;
    }

    /**
     * Sets a new versionType
     *
     * A Composite containing details of a Type of Version of the SoundRecording.
     *
     * @param \DDEX\RIN\RIN11M\VersionTypeType[] $versionType
     * @return self
     */
    public function setVersionType(array $versionType = null)
    {
        $this->versionType = $versionType;
        return $this;
    }

    /**
     * Adds as soundRecordingDescriptorTag
     *
     * The Identifier of the Version of the unique instance of the SoundRecording. Examples include different tempo, key, or take of a SoundRecording of a MusicalWork. This is an addition to the Title composite (with its SubTitle element) to manage different 'versions' of the 'same' recording, and DDEX is considering to replace this Element at some stage with an AllowedValueSet.
     *
     * @return self
     * @param string $soundRecordingDescriptorTag
     */
    public function addToSoundRecordingDescriptorTag($soundRecordingDescriptorTag)
    {
        $this->soundRecordingDescriptorTag[] = $soundRecordingDescriptorTag;
        return $this;
    }

    /**
     * isset soundRecordingDescriptorTag
     *
     * The Identifier of the Version of the unique instance of the SoundRecording. Examples include different tempo, key, or take of a SoundRecording of a MusicalWork. This is an addition to the Title composite (with its SubTitle element) to manage different 'versions' of the 'same' recording, and DDEX is considering to replace this Element at some stage with an AllowedValueSet.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSoundRecordingDescriptorTag($index)
    {
        return isset($this->soundRecordingDescriptorTag[$index]);
    }

    /**
     * unset soundRecordingDescriptorTag
     *
     * The Identifier of the Version of the unique instance of the SoundRecording. Examples include different tempo, key, or take of a SoundRecording of a MusicalWork. This is an addition to the Title composite (with its SubTitle element) to manage different 'versions' of the 'same' recording, and DDEX is considering to replace this Element at some stage with an AllowedValueSet.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSoundRecordingDescriptorTag($index)
    {
        unset($this->soundRecordingDescriptorTag[$index]);
    }

    /**
     * Gets as soundRecordingDescriptorTag
     *
     * The Identifier of the Version of the unique instance of the SoundRecording. Examples include different tempo, key, or take of a SoundRecording of a MusicalWork. This is an addition to the Title composite (with its SubTitle element) to manage different 'versions' of the 'same' recording, and DDEX is considering to replace this Element at some stage with an AllowedValueSet.
     *
     * @return string[]
     */
    public function getSoundRecordingDescriptorTag()
    {
        return $this->soundRecordingDescriptorTag;
    }

    /**
     * Sets a new soundRecordingDescriptorTag
     *
     * The Identifier of the Version of the unique instance of the SoundRecording. Examples include different tempo, key, or take of a SoundRecording of a MusicalWork. This is an addition to the Title composite (with its SubTitle element) to manage different 'versions' of the 'same' recording, and DDEX is considering to replace this Element at some stage with an AllowedValueSet.
     *
     * @param string[] $soundRecordingDescriptorTag
     * @return self
     */
    public function setSoundRecordingDescriptorTag(array $soundRecordingDescriptorTag = null)
    {
        $this->soundRecordingDescriptorTag = $soundRecordingDescriptorTag;
        return $this;
    }

    /**
     * Adds as rightsController
     *
     * A Composite containing details of RightsController of Rights in the SoundRecording.
     *
     * @return self
     * @param \DDEX\RIN\RIN11M\RightsControllerType $rightsController
     */
    public function addToRightsController(\DDEX\RIN\RIN11M\RightsControllerType $rightsController)
    {
        $this->rightsController[] = $rightsController;
        return $this;
    }

    /**
     * isset rightsController
     *
     * A Composite containing details of RightsController of Rights in the SoundRecording.
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
     * A Composite containing details of RightsController of Rights in the SoundRecording.
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
     * A Composite containing details of RightsController of Rights in the SoundRecording.
     *
     * @return \DDEX\RIN\RIN11M\RightsControllerType[]
     */
    public function getRightsController()
    {
        return $this->rightsController;
    }

    /**
     * Sets a new rightsController
     *
     * A Composite containing details of RightsController of Rights in the SoundRecording.
     *
     * @param \DDEX\RIN\RIN11M\RightsControllerType[] $rightsController
     * @return self
     */
    public function setRightsController(array $rightsController = null)
    {
        $this->rightsController = $rightsController;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The Duration of the SoundRecording (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * The Duration of the SoundRecording (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * Gets as pLine
     *
     * A Composite containing details of the PLine for the SoundRecording.
     *
     * @return \DDEX\RIN\RIN11M\PLineWithDefaultType
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
     * @param \DDEX\RIN\RIN11M\PLineWithDefaultType $pLine
     * @return self
     */
    public function setPLine(?\DDEX\RIN\RIN11M\PLineWithDefaultType $pLine = null)
    {
        $this->pLine = $pLine;
        return $this;
    }

    /**
     * Gets as parentalWarningType
     *
     * A Composite containing details of the classification of the SoundRecording according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return \DDEX\RIN\RIN11M\ParentalWarningTypeWithTerritoryType
     */
    public function getParentalWarningType()
    {
        return $this->parentalWarningType;
    }

    /**
     * Sets a new parentalWarningType
     *
     * A Composite containing details of the classification of the SoundRecording according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @param \DDEX\RIN\RIN11M\ParentalWarningTypeWithTerritoryType $parentalWarningType
     * @return self
     */
    public function setParentalWarningType(?\DDEX\RIN\RIN11M\ParentalWarningTypeWithTerritoryType $parentalWarningType = null)
    {
        $this->parentalWarningType = $parentalWarningType;
        return $this;
    }

    /**
     * Adds as genre
     *
     * A Composite containing details of a Genre to which the SoundRecording belongs.
     *
     * @return self
     * @param \DDEX\RIN\RIN11M\GenreWithTerritoryType $genre
     */
    public function addToGenre(\DDEX\RIN\RIN11M\GenreWithTerritoryType $genre)
    {
        $this->genre[] = $genre;
        return $this;
    }

    /**
     * isset genre
     *
     * A Composite containing details of a Genre to which the SoundRecording belongs.
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
     * A Composite containing details of a Genre to which the SoundRecording belongs.
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
     * A Composite containing details of a Genre to which the SoundRecording belongs.
     *
     * @return \DDEX\RIN\RIN11M\GenreWithTerritoryType[]
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Sets a new genre
     *
     * A Composite containing details of a Genre to which the SoundRecording belongs.
     *
     * @param \DDEX\RIN\RIN11M\GenreWithTerritoryType[] $genre
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
     * The Status of the SoundRecording.
     *
     * @return \DDEX\RIN\RIN11M\StatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The Status of the SoundRecording.
     *
     * @param \DDEX\RIN\RIN11M\StatusType $status
     * @return self
     */
    public function setStatus(?\DDEX\RIN\RIN11M\StatusType $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as comment
     *
     * A human-readable Comment about the SoundRecording.
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A human-readable Comment about the SoundRecording.
     *
     * @param string $comment
     * @return self
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Adds as soundRecordingMusicalWorkReference
     *
     * A Reference for a MusicalWork (specific to this Message). This is a LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @return self
     * @param string $soundRecordingMusicalWorkReference
     */
    public function addToSoundRecordingMusicalWorkReference($soundRecordingMusicalWorkReference)
    {
        $this->soundRecordingMusicalWorkReference[] = $soundRecordingMusicalWorkReference;
        return $this;
    }

    /**
     * isset soundRecordingMusicalWorkReference
     *
     * A Reference for a MusicalWork (specific to this Message). This is a LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSoundRecordingMusicalWorkReference($index)
    {
        return isset($this->soundRecordingMusicalWorkReference[$index]);
    }

    /**
     * unset soundRecordingMusicalWorkReference
     *
     * A Reference for a MusicalWork (specific to this Message). This is a LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSoundRecordingMusicalWorkReference($index)
    {
        unset($this->soundRecordingMusicalWorkReference[$index]);
    }

    /**
     * Gets as soundRecordingMusicalWorkReference
     *
     * A Reference for a MusicalWork (specific to this Message). This is a LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @return string[]
     */
    public function getSoundRecordingMusicalWorkReference()
    {
        return $this->soundRecordingMusicalWorkReference;
    }

    /**
     * Sets a new soundRecordingMusicalWorkReference
     *
     * A Reference for a MusicalWork (specific to this Message). This is a LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @param string $soundRecordingMusicalWorkReference
     * @return self
     */
    public function setSoundRecordingMusicalWorkReference(array $soundRecordingMusicalWorkReference)
    {
        $this->soundRecordingMusicalWorkReference = $soundRecordingMusicalWorkReference;
        return $this;
    }

    /**
     * Adds as contributor
     *
     * A Composite containing details of a Contributor to the SoundRecording.
     *
     * @return self
     * @param \DDEX\RIN\RIN11M\SoundRecordingContributorReferenceType $contributor
     */
    public function addToContributor(\DDEX\RIN\RIN11M\SoundRecordingContributorReferenceType $contributor)
    {
        $this->contributor[] = $contributor;
        return $this;
    }

    /**
     * isset contributor
     *
     * A Composite containing details of a Contributor to the SoundRecording.
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
     * A Composite containing details of a Contributor to the SoundRecording.
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
     * A Composite containing details of a Contributor to the SoundRecording.
     *
     * @return \DDEX\RIN\RIN11M\SoundRecordingContributorReferenceType[]
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * Sets a new contributor
     *
     * A Composite containing details of a Contributor to the SoundRecording.
     *
     * @param \DDEX\RIN\RIN11M\SoundRecordingContributorReferenceType[] $contributor
     * @return self
     */
    public function setContributor(array $contributor = null)
    {
        $this->contributor = $contributor;
        return $this;
    }

    /**
     * Adds as soundRecordingProjectReference
     *
     * A Reference for a Project (specific to the File). This is a LocalProjectAnchorReference starting with the letter J.
     *
     * @return self
     * @param string $soundRecordingProjectReference
     */
    public function addToSoundRecordingProjectReference($soundRecordingProjectReference)
    {
        $this->soundRecordingProjectReference[] = $soundRecordingProjectReference;
        return $this;
    }

    /**
     * isset soundRecordingProjectReference
     *
     * A Reference for a Project (specific to the File). This is a LocalProjectAnchorReference starting with the letter J.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSoundRecordingProjectReference($index)
    {
        return isset($this->soundRecordingProjectReference[$index]);
    }

    /**
     * unset soundRecordingProjectReference
     *
     * A Reference for a Project (specific to the File). This is a LocalProjectAnchorReference starting with the letter J.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSoundRecordingProjectReference($index)
    {
        unset($this->soundRecordingProjectReference[$index]);
    }

    /**
     * Gets as soundRecordingProjectReference
     *
     * A Reference for a Project (specific to the File). This is a LocalProjectAnchorReference starting with the letter J.
     *
     * @return string[]
     */
    public function getSoundRecordingProjectReference()
    {
        return $this->soundRecordingProjectReference;
    }

    /**
     * Sets a new soundRecordingProjectReference
     *
     * A Reference for a Project (specific to the File). This is a LocalProjectAnchorReference starting with the letter J.
     *
     * @param string $soundRecordingProjectReference
     * @return self
     */
    public function setSoundRecordingProjectReference(array $soundRecordingProjectReference = null)
    {
        $this->soundRecordingProjectReference = $soundRecordingProjectReference;
        return $this;
    }

    /**
     * Adds as soundRecordingSessionReference
     *
     * A Reference for a Session (specific to the File). This is a LocalSessionAnchorReference starting with the letter O.
     *
     * @return self
     * @param string $soundRecordingSessionReference
     */
    public function addToSoundRecordingSessionReference($soundRecordingSessionReference)
    {
        $this->soundRecordingSessionReference[] = $soundRecordingSessionReference;
        return $this;
    }

    /**
     * isset soundRecordingSessionReference
     *
     * A Reference for a Session (specific to the File). This is a LocalSessionAnchorReference starting with the letter O.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSoundRecordingSessionReference($index)
    {
        return isset($this->soundRecordingSessionReference[$index]);
    }

    /**
     * unset soundRecordingSessionReference
     *
     * A Reference for a Session (specific to the File). This is a LocalSessionAnchorReference starting with the letter O.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSoundRecordingSessionReference($index)
    {
        unset($this->soundRecordingSessionReference[$index]);
    }

    /**
     * Gets as soundRecordingSessionReference
     *
     * A Reference for a Session (specific to the File). This is a LocalSessionAnchorReference starting with the letter O.
     *
     * @return string[]
     */
    public function getSoundRecordingSessionReference()
    {
        return $this->soundRecordingSessionReference;
    }

    /**
     * Sets a new soundRecordingSessionReference
     *
     * A Reference for a Session (specific to the File). This is a LocalSessionAnchorReference starting with the letter O.
     *
     * @param string $soundRecordingSessionReference
     * @return self
     */
    public function setSoundRecordingSessionReference(array $soundRecordingSessionReference = null)
    {
        $this->soundRecordingSessionReference = $soundRecordingSessionReference;
        return $this;
    }

    /**
     * Gets as isMedley
     *
     * The Flag indicating whether the SoundRecording is a Medley (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsMedley()
    {
        return $this->isMedley;
    }

    /**
     * Sets a new isMedley
     *
     * The Flag indicating whether the SoundRecording is a Medley (=true) or not (=false).
     *
     * @param bool $isMedley
     * @return self
     */
    public function setIsMedley($isMedley)
    {
        $this->isMedley = $isMedley;
        return $this;
    }

    /**
     * Gets as audioChannelConfiguration
     *
     * A configuration of audio channels.
     *
     * @return string
     */
    public function getAudioChannelConfiguration()
    {
        return $this->audioChannelConfiguration;
    }

    /**
     * Sets a new audioChannelConfiguration
     *
     * A configuration of audio channels.
     *
     * @param string $audioChannelConfiguration
     * @return self
     */
    public function setAudioChannelConfiguration($audioChannelConfiguration)
    {
        $this->audioChannelConfiguration = $audioChannelConfiguration;
        return $this;
    }

    /**
     * Adds as firstPublicationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return self
     * @param \DDEX\RIN\RIN11M\FirstPublicationDateType $firstPublicationDate
     */
    public function addToFirstPublicationDate(\DDEX\RIN\RIN11M\FirstPublicationDateType $firstPublicationDate)
    {
        $this->firstPublicationDate[] = $firstPublicationDate;
        return $this;
    }

    /**
     * isset firstPublicationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFirstPublicationDate($index)
    {
        return isset($this->firstPublicationDate[$index]);
    }

    /**
     * unset firstPublicationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFirstPublicationDate($index)
    {
        unset($this->firstPublicationDate[$index]);
    }

    /**
     * Gets as firstPublicationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DDEX\RIN\RIN11M\FirstPublicationDateType[]
     */
    public function getFirstPublicationDate()
    {
        return $this->firstPublicationDate;
    }

    /**
     * Sets a new firstPublicationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DDEX\RIN\RIN11M\FirstPublicationDateType[] $firstPublicationDate
     * @return self
     */
    public function setFirstPublicationDate(array $firstPublicationDate = null)
    {
        $this->firstPublicationDate = $firstPublicationDate;
        return $this;
    }
}


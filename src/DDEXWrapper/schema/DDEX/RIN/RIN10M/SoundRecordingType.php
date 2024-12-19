<?php

namespace DDEX\RIN\RIN10M;

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
     * @var \DDEX\RIN\RIN10M\SoundRecordingTypeType $soundRecordingType
     */
    private $soundRecordingType = null;

    /**
     * A Reference for a main artist of the SoundRecording (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string[] $mainArtist
     */
    private $mainArtist = [
        
    ];

    /**
     * A Composite containing details of SoundRecordingIds.
     *
     * @var \DDEX\RIN\RIN10M\SoundRecordingIdType[] $soundRecordingId
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
     * @var \DDEX\RIN\RIN10M\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * The Identifier of the Version of the unique instance of the SoundRecording. Examples include different tempo, key, or take of a SoundRecording of a MusicalWork.
     *
     * @var string $soundRecordingVersion
     */
    private $soundRecordingVersion = null;

    /**
     * A Composite containing details of RightsController of Rights in the SoundRecording.
     *
     * @var \DDEX\RIN\RIN10M\TypedRightsControllerType[] $rightsController
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
     * @var \DDEX\RIN\RIN10M\PLineWithDefaultType $pLine
     */
    private $pLine = null;

    /**
     * A Composite containing details of the classification of the SoundRecording according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @var \DDEX\RIN\RIN10M\ParentalWarningTypeWithTerritoryType $parentalWarningType
     */
    private $parentalWarningType = null;

    /**
     * A Composite containing details of a Genre to which the SoundRecording belongs.
     *
     * @var \DDEX\RIN\RIN10M\GenreWithTerritoryType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * A Composite containing a human-readable Comment about the SoundRecording.
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
     * @var \DDEX\RIN\RIN10M\SoundRecordingContributorReferenceType[] $contributorReference
     */
    private $contributorReference = [
        
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
     * Gets as soundRecordingType
     *
     * A Composite containing details of the Type of the SoundRecording.
     *
     * @return \DDEX\RIN\RIN10M\SoundRecordingTypeType
     */
    public function getSoundRecordingType()
    {
        return $this->soundRecordingType;
    }

    /**
     * Sets a new soundRecordingType
     *
     * A Composite containing details of the Type of the SoundRecording.
     *
     * @param \DDEX\RIN\RIN10M\SoundRecordingTypeType $soundRecordingType
     * @return self
     */
    public function setSoundRecordingType(?\DDEX\RIN\RIN10M\SoundRecordingTypeType $soundRecordingType = null)
    {
        $this->soundRecordingType = $soundRecordingType;
        return $this;
    }

    /**
     * Adds as mainArtist
     *
     * A Reference for a main artist of the SoundRecording (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return self
     * @param string $mainArtist
     */
    public function addToMainArtist($mainArtist)
    {
        $this->mainArtist[] = $mainArtist;
        return $this;
    }

    /**
     * isset mainArtist
     *
     * A Reference for a main artist of the SoundRecording (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMainArtist($index)
    {
        return isset($this->mainArtist[$index]);
    }

    /**
     * unset mainArtist
     *
     * A Reference for a main artist of the SoundRecording (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMainArtist($index)
    {
        unset($this->mainArtist[$index]);
    }

    /**
     * Gets as mainArtist
     *
     * A Reference for a main artist of the SoundRecording (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return string[]
     */
    public function getMainArtist()
    {
        return $this->mainArtist;
    }

    /**
     * Sets a new mainArtist
     *
     * A Reference for a main artist of the SoundRecording (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param string $mainArtist
     * @return self
     */
    public function setMainArtist(array $mainArtist = null)
    {
        $this->mainArtist = $mainArtist;
        return $this;
    }

    /**
     * Adds as soundRecordingId
     *
     * A Composite containing details of SoundRecordingIds.
     *
     * @return self
     * @param \DDEX\RIN\RIN10M\SoundRecordingIdType $soundRecordingId
     */
    public function addToSoundRecordingId(\DDEX\RIN\RIN10M\SoundRecordingIdType $soundRecordingId)
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
     * @return \DDEX\RIN\RIN10M\SoundRecordingIdType[]
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
     * @param \DDEX\RIN\RIN10M\SoundRecordingIdType[] $soundRecordingId
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
     * @param \DDEX\RIN\RIN10M\TitleType $title
     */
    public function addToTitle(\DDEX\RIN\RIN10M\TitleType $title)
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
     * @return \DDEX\RIN\RIN10M\TitleType[]
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
     * @param \DDEX\RIN\RIN10M\TitleType[] $title
     * @return self
     */
    public function setTitle(array $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as soundRecordingVersion
     *
     * The Identifier of the Version of the unique instance of the SoundRecording. Examples include different tempo, key, or take of a SoundRecording of a MusicalWork.
     *
     * @return string
     */
    public function getSoundRecordingVersion()
    {
        return $this->soundRecordingVersion;
    }

    /**
     * Sets a new soundRecordingVersion
     *
     * The Identifier of the Version of the unique instance of the SoundRecording. Examples include different tempo, key, or take of a SoundRecording of a MusicalWork.
     *
     * @param string $soundRecordingVersion
     * @return self
     */
    public function setSoundRecordingVersion($soundRecordingVersion)
    {
        $this->soundRecordingVersion = $soundRecordingVersion;
        return $this;
    }

    /**
     * Adds as rightsController
     *
     * A Composite containing details of RightsController of Rights in the SoundRecording.
     *
     * @return self
     * @param \DDEX\RIN\RIN10M\TypedRightsControllerType $rightsController
     */
    public function addToRightsController(\DDEX\RIN\RIN10M\TypedRightsControllerType $rightsController)
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
     * @return \DDEX\RIN\RIN10M\TypedRightsControllerType[]
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
     * @param \DDEX\RIN\RIN10M\TypedRightsControllerType[] $rightsController
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
     * @return \DDEX\RIN\RIN10M\PLineWithDefaultType
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
     * @param \DDEX\RIN\RIN10M\PLineWithDefaultType $pLine
     * @return self
     */
    public function setPLine(?\DDEX\RIN\RIN10M\PLineWithDefaultType $pLine = null)
    {
        $this->pLine = $pLine;
        return $this;
    }

    /**
     * Gets as parentalWarningType
     *
     * A Composite containing details of the classification of the SoundRecording according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return \DDEX\RIN\RIN10M\ParentalWarningTypeWithTerritoryType
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
     * @param \DDEX\RIN\RIN10M\ParentalWarningTypeWithTerritoryType $parentalWarningType
     * @return self
     */
    public function setParentalWarningType(?\DDEX\RIN\RIN10M\ParentalWarningTypeWithTerritoryType $parentalWarningType = null)
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
     * @param \DDEX\RIN\RIN10M\GenreWithTerritoryType $genre
     */
    public function addToGenre(\DDEX\RIN\RIN10M\GenreWithTerritoryType $genre)
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
     * @return \DDEX\RIN\RIN10M\GenreWithTerritoryType[]
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
     * @param \DDEX\RIN\RIN10M\GenreWithTerritoryType[] $genre
     * @return self
     */
    public function setGenre(array $genre = null)
    {
        $this->genre = $genre;
        return $this;
    }

    /**
     * Gets as comment
     *
     * A Composite containing a human-readable Comment about the SoundRecording.
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
     * A Composite containing a human-readable Comment about the SoundRecording.
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
     * Adds as contributorReference
     *
     * A Composite containing details of a Contributor to the SoundRecording.
     *
     * @return self
     * @param \DDEX\RIN\RIN10M\SoundRecordingContributorReferenceType $contributorReference
     */
    public function addToContributorReference(\DDEX\RIN\RIN10M\SoundRecordingContributorReferenceType $contributorReference)
    {
        $this->contributorReference[] = $contributorReference;
        return $this;
    }

    /**
     * isset contributorReference
     *
     * A Composite containing details of a Contributor to the SoundRecording.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContributorReference($index)
    {
        return isset($this->contributorReference[$index]);
    }

    /**
     * unset contributorReference
     *
     * A Composite containing details of a Contributor to the SoundRecording.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContributorReference($index)
    {
        unset($this->contributorReference[$index]);
    }

    /**
     * Gets as contributorReference
     *
     * A Composite containing details of a Contributor to the SoundRecording.
     *
     * @return \DDEX\RIN\RIN10M\SoundRecordingContributorReferenceType[]
     */
    public function getContributorReference()
    {
        return $this->contributorReference;
    }

    /**
     * Sets a new contributorReference
     *
     * A Composite containing details of a Contributor to the SoundRecording.
     *
     * @param \DDEX\RIN\RIN10M\SoundRecordingContributorReferenceType[] $contributorReference
     * @return self
     */
    public function setContributorReference(array $contributorReference = null)
    {
        $this->contributorReference = $contributorReference;
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
}


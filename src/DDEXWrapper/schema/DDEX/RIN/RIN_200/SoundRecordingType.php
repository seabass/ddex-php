<?php

namespace DDEX\RIN\RIN_200;

/**
 * Class representing SoundRecordingType
 *
 * A Composite containing details of a SoundRecording.
 * XSD Type: SoundRecording
 */
class SoundRecordingType
{
    /**
     * The Language and script for the Elements of the SoundRecording as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of the Type of the SoundRecording.
     *
     * @var \DDEX\RIN\RIN_200\SoundRecordingTypeType $type
     */
    private $type = null;

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the SoundRecording to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @var \DDEX\RIN\RIN_200\DisplayArtistNameWithDefaultType[] $displayArtistName
     */
    private $displayArtistName = [
        
    ];

    /**
     * A Composite containing details of a DisplayArtist of the SoundRecording (specific to this message).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @var \DDEX\RIN\RIN_200\DisplayArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * A Reference for a SupplementalArtist of the SoundRecording (specific to this message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string[] $supplementalArtist
     */
    private $supplementalArtist = [
        
    ];

    /**
     * A Composite containing details of SoundRecordingIds.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @var \DDEX\RIN\RIN_200\SoundRecordingIdType[] $soundRecordingId
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @var \DDEX\RIN\RIN_200\TitleWithUDVType[] $title
     */
    private $title = [
        
    ];

    /**
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one SoundRecording from another with identical or similar Title metadata. VersionTypes may be used for disambiguating a SoundRecording that has been derived from another SoundRecording by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
     *
     * @var \DDEX\RIN\RIN_200\VersionTypeType[] $versionType
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
     * @var \DDEX\RIN\RIN_200\RightsControllerType[] $rightsController
     */
    private $rightsController = [
        
    ];

    /**
     * The Language of the Performance recorded in the SoundRecording (represented by an ISO 639 LanguageCode).
     *
     * @var string[] $languageOfPerformance
     */
    private $languageOfPerformance = [
        
    ];

    /**
     * The number indicating the order of the SoundRecording within a group of SoundRecordings.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * The key signature of the SoundRecording.
     *
     * @var string $keySignature
     */
    private $keySignature = null;

    /**
     * The time signature of the SoundRecording.
     *
     * @var string $timeSignature
     */
    private $timeSignature = null;

    /**
     * The Tempo in beats per minute.
     *
     * @var string $tempo
     */
    private $tempo = null;

    /**
     * The Duration of the SoundRecording (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * A Composite containing details of the PLine for the SoundRecording.
     *
     * @var \DDEX\RIN\RIN_200\PLineWithDefaultType $pLine
     */
    private $pLine = null;

    /**
     * A Composite containing details of the classification of the SoundRecording according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @var \DDEX\RIN\RIN_200\ParentalWarningTypeWithTerritoryType $parentalWarningType
     */
    private $parentalWarningType = null;

    /**
     * A Composite containing details of a Genre to which the SoundRecording belongs.
     *
     * @var \DDEX\RIN\RIN_200\GenreWithTerritoryType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * The Status of the SoundRecording.
     *
     * @var \DDEX\RIN\RIN_200\StatusType $status
     */
    private $status = null;

    /**
     * A Composite containing a human-readable Comment about the SoundRecording.
     *
     * @var \DDEX\RIN\RIN_200\CommentType $comment
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @var \DDEX\RIN\RIN_200\SoundRecordingContributorReferenceType[] $contributor
     */
    private $contributor = [
        
    ];

    /**
     * A Reference for a File (specific to this Message). This is a LocalFileAnchorReference starting with the letter F.
     *
     * @var string $soundRecordingFileReference
     */
    private $soundRecordingFileReference = null;

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
     * A Reference for a RecordingComponent (specific to the File). This is a LocalRecordingComponentAnchorReference starting with the letter K.
     *
     * @var string[] $soundRecordingRecordingComponentReference
     */
    private $soundRecordingRecordingComponentReference = [
        
    ];

    /**
     * A Composite containing details of a sampled SoundRecording.
     *
     * @var \DDEX\RIN\RIN_200\SampledSoundRecordingType[] $sampledSoundRecording
     */
    private $sampledSoundRecording = [
        
    ];

    /**
     * The Flag indicating whether the SoundRecording contains samples (=true) or not (=false).
     *
     * @var bool $containsSamples
     */
    private $containsSamples = null;

    /**
     * A Composite containing details of the Date at which the SoundRecording was created. This is a string with the syntax YYYY[-MM[-DD]].
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @var \DDEX\RIN\RIN_200\EventDateType $creationDate
     */
    private $creationDate = null;

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
     * The country in which the SoundRecording was created as a Fixation.
     *
     * @var string $territoryOfFixation
     */
    private $territoryOfFixation = null;

    /**
     * A Composite containing details of the Date and Place at which the SoundRecording was mastered. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DDEX\RIN\RIN_200\EventDateType $masteredDate
     */
    private $masteredDate = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DDEX\RIN\RIN_200\FirstPublicationDateType[] $firstPublicationDate
     */
    private $firstPublicationDate = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the SoundRecording as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the SoundRecording as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Gets as type
     *
     * A Composite containing details of the Type of the SoundRecording.
     *
     * @return \DDEX\RIN\RIN_200\SoundRecordingTypeType
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
     * @param \DDEX\RIN\RIN_200\SoundRecordingTypeType $type
     * @return self
     */
    public function setType(?\DDEX\RIN\RIN_200\SoundRecordingTypeType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the SoundRecording to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\DisplayArtistNameWithDefaultType $displayArtistName
     */
    public function addToDisplayArtistName(\DDEX\RIN\RIN_200\DisplayArtistNameWithDefaultType $displayArtistName)
    {
        $this->displayArtistName[] = $displayArtistName;
        return $this;
    }

    /**
     * isset displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the SoundRecording to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @return \DDEX\RIN\RIN_200\DisplayArtistNameWithDefaultType[]
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the SoundRecording to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @param \DDEX\RIN\RIN_200\DisplayArtistNameWithDefaultType[] $displayArtistName
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\DisplayArtistType $displayArtist
     */
    public function addToDisplayArtist(\DDEX\RIN\RIN_200\DisplayArtistType $displayArtist)
    {
        $this->displayArtist[] = $displayArtist;
        return $this;
    }

    /**
     * isset displayArtist
     *
     * A Composite containing details of a DisplayArtist of the SoundRecording (specific to this message).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @return \DDEX\RIN\RIN_200\DisplayArtistType[]
     */
    public function getDisplayArtist()
    {
        return $this->displayArtist;
    }

    /**
     * Sets a new displayArtist
     *
     * A Composite containing details of a DisplayArtist of the SoundRecording (specific to this message).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @param \DDEX\RIN\RIN_200\DisplayArtistType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist = null)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }

    /**
     * Adds as supplementalArtist
     *
     * A Reference for a SupplementalArtist of the SoundRecording (specific to this message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return self
     * @param string $supplementalArtist
     */
    public function addToSupplementalArtist($supplementalArtist)
    {
        $this->supplementalArtist[] = $supplementalArtist;
        return $this;
    }

    /**
     * isset supplementalArtist
     *
     * A Reference for a SupplementalArtist of the SoundRecording (specific to this message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupplementalArtist($index)
    {
        return isset($this->supplementalArtist[$index]);
    }

    /**
     * unset supplementalArtist
     *
     * A Reference for a SupplementalArtist of the SoundRecording (specific to this message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupplementalArtist($index)
    {
        unset($this->supplementalArtist[$index]);
    }

    /**
     * Gets as supplementalArtist
     *
     * A Reference for a SupplementalArtist of the SoundRecording (specific to this message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return string[]
     */
    public function getSupplementalArtist()
    {
        return $this->supplementalArtist;
    }

    /**
     * Sets a new supplementalArtist
     *
     * A Reference for a SupplementalArtist of the SoundRecording (specific to this message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param string $supplementalArtist
     * @return self
     */
    public function setSupplementalArtist(array $supplementalArtist = null)
    {
        $this->supplementalArtist = $supplementalArtist;
        return $this;
    }

    /**
     * Adds as soundRecordingId
     *
     * A Composite containing details of SoundRecordingIds.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\SoundRecordingIdType $soundRecordingId
     */
    public function addToSoundRecordingId(\DDEX\RIN\RIN_200\SoundRecordingIdType $soundRecordingId)
    {
        $this->soundRecordingId[] = $soundRecordingId;
        return $this;
    }

    /**
     * isset soundRecordingId
     *
     * A Composite containing details of SoundRecordingIds.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @return \DDEX\RIN\RIN_200\SoundRecordingIdType[]
     */
    public function getSoundRecordingId()
    {
        return $this->soundRecordingId;
    }

    /**
     * Sets a new soundRecordingId
     *
     * A Composite containing details of SoundRecordingIds.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @param \DDEX\RIN\RIN_200\SoundRecordingIdType[] $soundRecordingId
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
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
     * A Composite containing details of a Title of the SoundRecording.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
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
     * A Composite containing details of a Title of the SoundRecording.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
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
     * Adds as versionType
     *
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one SoundRecording from another with identical or similar Title metadata. VersionTypes may be used for disambiguating a SoundRecording that has been derived from another SoundRecording by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\VersionTypeType $versionType
     */
    public function addToVersionType(\DDEX\RIN\RIN_200\VersionTypeType $versionType)
    {
        $this->versionType[] = $versionType;
        return $this;
    }

    /**
     * isset versionType
     *
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one SoundRecording from another with identical or similar Title metadata. VersionTypes may be used for disambiguating a SoundRecording that has been derived from another SoundRecording by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
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
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one SoundRecording from another with identical or similar Title metadata. VersionTypes may be used for disambiguating a SoundRecording that has been derived from another SoundRecording by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
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
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one SoundRecording from another with identical or similar Title metadata. VersionTypes may be used for disambiguating a SoundRecording that has been derived from another SoundRecording by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
     *
     * @return \DDEX\RIN\RIN_200\VersionTypeType[]
     */
    public function getVersionType()
    {
        return $this->versionType;
    }

    /**
     * Sets a new versionType
     *
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one SoundRecording from another with identical or similar Title metadata. VersionTypes may be used for disambiguating a SoundRecording that has been derived from another SoundRecording by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
     *
     * @param \DDEX\RIN\RIN_200\VersionTypeType[] $versionType
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
     * @return \DDEX\RIN\RIN_200\RightsControllerType[]
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
     * @param \DDEX\RIN\RIN_200\RightsControllerType[] $rightsController
     * @return self
     */
    public function setRightsController(array $rightsController = null)
    {
        $this->rightsController = $rightsController;
        return $this;
    }

    /**
     * Adds as languageOfPerformance
     *
     * The Language of the Performance recorded in the SoundRecording (represented by an ISO 639 LanguageCode).
     *
     * @return self
     * @param string $languageOfPerformance
     */
    public function addToLanguageOfPerformance($languageOfPerformance)
    {
        $this->languageOfPerformance[] = $languageOfPerformance;
        return $this;
    }

    /**
     * isset languageOfPerformance
     *
     * The Language of the Performance recorded in the SoundRecording (represented by an ISO 639 LanguageCode).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguageOfPerformance($index)
    {
        return isset($this->languageOfPerformance[$index]);
    }

    /**
     * unset languageOfPerformance
     *
     * The Language of the Performance recorded in the SoundRecording (represented by an ISO 639 LanguageCode).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguageOfPerformance($index)
    {
        unset($this->languageOfPerformance[$index]);
    }

    /**
     * Gets as languageOfPerformance
     *
     * The Language of the Performance recorded in the SoundRecording (represented by an ISO 639 LanguageCode).
     *
     * @return string[]
     */
    public function getLanguageOfPerformance()
    {
        return $this->languageOfPerformance;
    }

    /**
     * Sets a new languageOfPerformance
     *
     * The Language of the Performance recorded in the SoundRecording (represented by an ISO 639 LanguageCode).
     *
     * @param string $languageOfPerformance
     * @return self
     */
    public function setLanguageOfPerformance(array $languageOfPerformance = null)
    {
        $this->languageOfPerformance = $languageOfPerformance;
        return $this;
    }

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the SoundRecording within a group of SoundRecordings.
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * The number indicating the order of the SoundRecording within a group of SoundRecordings.
     *
     * @param int $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    /**
     * Gets as keySignature
     *
     * The key signature of the SoundRecording.
     *
     * @return string
     */
    public function getKeySignature()
    {
        return $this->keySignature;
    }

    /**
     * Sets a new keySignature
     *
     * The key signature of the SoundRecording.
     *
     * @param string $keySignature
     * @return self
     */
    public function setKeySignature($keySignature)
    {
        $this->keySignature = $keySignature;
        return $this;
    }

    /**
     * Gets as timeSignature
     *
     * The time signature of the SoundRecording.
     *
     * @return string
     */
    public function getTimeSignature()
    {
        return $this->timeSignature;
    }

    /**
     * Sets a new timeSignature
     *
     * The time signature of the SoundRecording.
     *
     * @param string $timeSignature
     * @return self
     */
    public function setTimeSignature($timeSignature)
    {
        $this->timeSignature = $timeSignature;
        return $this;
    }

    /**
     * Gets as tempo
     *
     * The Tempo in beats per minute.
     *
     * @return string
     */
    public function getTempo()
    {
        return $this->tempo;
    }

    /**
     * Sets a new tempo
     *
     * The Tempo in beats per minute.
     *
     * @param string $tempo
     * @return self
     */
    public function setTempo($tempo)
    {
        $this->tempo = $tempo;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The Duration of the SoundRecording (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * The Duration of the SoundRecording (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * @return \DDEX\RIN\RIN_200\PLineWithDefaultType
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
     * A Composite containing details of the classification of the SoundRecording according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A Composite containing details of the classification of the SoundRecording according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A Composite containing details of a Genre to which the SoundRecording belongs.
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
     * @return \DDEX\RIN\RIN_200\GenreWithTerritoryType[]
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
     * The Status of the SoundRecording.
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
     * The Status of the SoundRecording.
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
     * A Composite containing a human-readable Comment about the SoundRecording.
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
     * A Composite containing a human-readable Comment about the SoundRecording.
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\SoundRecordingContributorReferenceType $contributor
     */
    public function addToContributor(\DDEX\RIN\RIN_200\SoundRecordingContributorReferenceType $contributor)
    {
        $this->contributor[] = $contributor;
        return $this;
    }

    /**
     * isset contributor
     *
     * A Composite containing details of a Contributor to the SoundRecording.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @return \DDEX\RIN\RIN_200\SoundRecordingContributorReferenceType[]
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * Sets a new contributor
     *
     * A Composite containing details of a Contributor to the SoundRecording.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @param \DDEX\RIN\RIN_200\SoundRecordingContributorReferenceType[] $contributor
     * @return self
     */
    public function setContributor(array $contributor = null)
    {
        $this->contributor = $contributor;
        return $this;
    }

    /**
     * Gets as soundRecordingFileReference
     *
     * A Reference for a File (specific to this Message). This is a LocalFileAnchorReference starting with the letter F.
     *
     * @return string
     */
    public function getSoundRecordingFileReference()
    {
        return $this->soundRecordingFileReference;
    }

    /**
     * Sets a new soundRecordingFileReference
     *
     * A Reference for a File (specific to this Message). This is a LocalFileAnchorReference starting with the letter F.
     *
     * @param string $soundRecordingFileReference
     * @return self
     */
    public function setSoundRecordingFileReference($soundRecordingFileReference)
    {
        $this->soundRecordingFileReference = $soundRecordingFileReference;
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
     * Adds as soundRecordingRecordingComponentReference
     *
     * A Reference for a RecordingComponent (specific to the File). This is a LocalRecordingComponentAnchorReference starting with the letter K.
     *
     * @return self
     * @param string $soundRecordingRecordingComponentReference
     */
    public function addToSoundRecordingRecordingComponentReference($soundRecordingRecordingComponentReference)
    {
        $this->soundRecordingRecordingComponentReference[] = $soundRecordingRecordingComponentReference;
        return $this;
    }

    /**
     * isset soundRecordingRecordingComponentReference
     *
     * A Reference for a RecordingComponent (specific to the File). This is a LocalRecordingComponentAnchorReference starting with the letter K.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSoundRecordingRecordingComponentReference($index)
    {
        return isset($this->soundRecordingRecordingComponentReference[$index]);
    }

    /**
     * unset soundRecordingRecordingComponentReference
     *
     * A Reference for a RecordingComponent (specific to the File). This is a LocalRecordingComponentAnchorReference starting with the letter K.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSoundRecordingRecordingComponentReference($index)
    {
        unset($this->soundRecordingRecordingComponentReference[$index]);
    }

    /**
     * Gets as soundRecordingRecordingComponentReference
     *
     * A Reference for a RecordingComponent (specific to the File). This is a LocalRecordingComponentAnchorReference starting with the letter K.
     *
     * @return string[]
     */
    public function getSoundRecordingRecordingComponentReference()
    {
        return $this->soundRecordingRecordingComponentReference;
    }

    /**
     * Sets a new soundRecordingRecordingComponentReference
     *
     * A Reference for a RecordingComponent (specific to the File). This is a LocalRecordingComponentAnchorReference starting with the letter K.
     *
     * @param string $soundRecordingRecordingComponentReference
     * @return self
     */
    public function setSoundRecordingRecordingComponentReference(array $soundRecordingRecordingComponentReference = null)
    {
        $this->soundRecordingRecordingComponentReference = $soundRecordingRecordingComponentReference;
        return $this;
    }

    /**
     * Adds as sampledSoundRecording
     *
     * A Composite containing details of a sampled SoundRecording.
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\SampledSoundRecordingType $sampledSoundRecording
     */
    public function addToSampledSoundRecording(\DDEX\RIN\RIN_200\SampledSoundRecordingType $sampledSoundRecording)
    {
        $this->sampledSoundRecording[] = $sampledSoundRecording;
        return $this;
    }

    /**
     * isset sampledSoundRecording
     *
     * A Composite containing details of a sampled SoundRecording.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSampledSoundRecording($index)
    {
        return isset($this->sampledSoundRecording[$index]);
    }

    /**
     * unset sampledSoundRecording
     *
     * A Composite containing details of a sampled SoundRecording.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSampledSoundRecording($index)
    {
        unset($this->sampledSoundRecording[$index]);
    }

    /**
     * Gets as sampledSoundRecording
     *
     * A Composite containing details of a sampled SoundRecording.
     *
     * @return \DDEX\RIN\RIN_200\SampledSoundRecordingType[]
     */
    public function getSampledSoundRecording()
    {
        return $this->sampledSoundRecording;
    }

    /**
     * Sets a new sampledSoundRecording
     *
     * A Composite containing details of a sampled SoundRecording.
     *
     * @param \DDEX\RIN\RIN_200\SampledSoundRecordingType[] $sampledSoundRecording
     * @return self
     */
    public function setSampledSoundRecording(array $sampledSoundRecording = null)
    {
        $this->sampledSoundRecording = $sampledSoundRecording;
        return $this;
    }

    /**
     * Gets as containsSamples
     *
     * The Flag indicating whether the SoundRecording contains samples (=true) or not (=false).
     *
     * @return bool
     */
    public function getContainsSamples()
    {
        return $this->containsSamples;
    }

    /**
     * Sets a new containsSamples
     *
     * The Flag indicating whether the SoundRecording contains samples (=true) or not (=false).
     *
     * @param bool $containsSamples
     * @return self
     */
    public function setContainsSamples($containsSamples)
    {
        $this->containsSamples = $containsSamples;
        return $this;
    }

    /**
     * Gets as creationDate
     *
     * A Composite containing details of the Date at which the SoundRecording was created. This is a string with the syntax YYYY[-MM[-DD]].
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @return \DDEX\RIN\RIN_200\EventDateType
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Sets a new creationDate
     *
     * A Composite containing details of the Date at which the SoundRecording was created. This is a string with the syntax YYYY[-MM[-DD]].
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @param \DDEX\RIN\RIN_200\EventDateType $creationDate
     * @return self
     */
    public function setCreationDate(?\DDEX\RIN\RIN_200\EventDateType $creationDate = null)
    {
        $this->creationDate = $creationDate;
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
     * Gets as territoryOfFixation
     *
     * The country in which the SoundRecording was created as a Fixation.
     *
     * @return string
     */
    public function getTerritoryOfFixation()
    {
        return $this->territoryOfFixation;
    }

    /**
     * Sets a new territoryOfFixation
     *
     * The country in which the SoundRecording was created as a Fixation.
     *
     * @param string $territoryOfFixation
     * @return self
     */
    public function setTerritoryOfFixation($territoryOfFixation)
    {
        $this->territoryOfFixation = $territoryOfFixation;
        return $this;
    }

    /**
     * Gets as masteredDate
     *
     * A Composite containing details of the Date and Place at which the SoundRecording was mastered. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DDEX\RIN\RIN_200\EventDateType
     */
    public function getMasteredDate()
    {
        return $this->masteredDate;
    }

    /**
     * Sets a new masteredDate
     *
     * A Composite containing details of the Date and Place at which the SoundRecording was mastered. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DDEX\RIN\RIN_200\EventDateType $masteredDate
     * @return self
     */
    public function setMasteredDate(?\DDEX\RIN\RIN_200\EventDateType $masteredDate = null)
    {
        $this->masteredDate = $masteredDate;
        return $this;
    }

    /**
     * Adds as firstPublicationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\FirstPublicationDateType $firstPublicationDate
     */
    public function addToFirstPublicationDate(\DDEX\RIN\RIN_200\FirstPublicationDateType $firstPublicationDate)
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
     * @return \DDEX\RIN\RIN_200\FirstPublicationDateType[]
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
     * @param \DDEX\RIN\RIN_200\FirstPublicationDateType[] $firstPublicationDate
     * @return self
     */
    public function setFirstPublicationDate(array $firstPublicationDate = null)
    {
        $this->firstPublicationDate = $firstPublicationDate;
        return $this;
    }
}


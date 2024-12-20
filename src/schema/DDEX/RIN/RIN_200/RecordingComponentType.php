<?php

namespace DDEX\RIN\RIN_200;

/**
 * Class representing RecordingComponentType
 *
 * A Composite containing details of a RecordingComponent.
 * XSD Type: RecordingComponent
 */
class RecordingComponentType
{
    /**
     * A Composite containing details of an Identifier of the RecordingComponent.
     *
     * @var \DDEX\RIN\RIN_200\ProprietaryIdType[] $recordingComponentId
     */
    private $recordingComponentId = null;

    /**
     * The Identifier (specific to the File) of the RecordingComponent. This is a LocalRecordingComponentAnchor starting with the letter K.
     *
     * @var string $recordingComponentReference
     */
    private $recordingComponentReference = null;

    /**
     * The number of the RecordingComponent.
     *
     * @var string $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * The Name of the RecordingComponent.
     *
     * @var string $title
     */
    private $title = null;

    /**
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one RecordingComponent from another with identical or similar Title metadata. VersionTypes may be used for disambiguating a RecordingComponent that has been derived from another RecordingComponent by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
     *
     * @var \DDEX\RIN\RIN_200\VersionTypeType[] $versionType
     */
    private $versionType = [
        
    ];

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the RecordingComponent to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @var \DDEX\RIN\RIN_200\DisplayArtistNameWithDefaultType[] $displayArtistName
     */
    private $displayArtistName = [
        
    ];

    /**
     * A Composite containing a human-readable Comment about the RecordingComponent.
     *
     * @var \DDEX\RIN\RIN_200\CommentType $comment
     */
    private $comment = null;

    /**
     * A Composite containing a RecordingComponentContributorReference.
     *
     * @var \DDEX\RIN\RIN_200\RecordingComponentContributorReferenceType[] $contributor
     */
    private $contributor = [
        
    ];

    /**
     * A Reference for Equipment used for the RecordingComponent (specific to this Message). This is a LocalEquipmentAnchorReference starting with the letter I.
     *
     * @var \DDEX\RIN\RIN_200\EquipmentReferenceType[] $recordingComponentEquipmentReference
     */
    private $recordingComponentEquipmentReference = [
        
    ];

    /**
     * A Reference for a File (specific to this Message). This is a LocalFileAnchorReference starting with the letter F.
     *
     * @var string $recordingComponentFileReference
     */
    private $recordingComponentFileReference = null;

    /**
     * A Composite containing details of the Date at which the RecordingComponent was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DDEX\RIN\RIN_200\EventDateType $creationDate
     */
    private $creationDate = null;

    /**
     * The Language of the Performance recorded in the RecordingComponent (represented by an ISO 639 LanguageCode).
     *
     * @var string[] $languageOfPerformance
     */
    private $languageOfPerformance = [
        
    ];

    /**
     * The Flag indicating whether the RecordingComponent is a Medley (=true) or not (=false).
     *
     * @var bool $isMedley
     */
    private $isMedley = null;

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of an Identifier of the RecordingComponent.
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\ProprietaryIdType $proprietaryId
     */
    public function addToRecordingComponentId(\DDEX\RIN\RIN_200\ProprietaryIdType $proprietaryId)
    {
        $this->recordingComponentId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset recordingComponentId
     *
     * A Composite containing details of an Identifier of the RecordingComponent.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecordingComponentId($index)
    {
        return isset($this->recordingComponentId[$index]);
    }

    /**
     * unset recordingComponentId
     *
     * A Composite containing details of an Identifier of the RecordingComponent.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecordingComponentId($index)
    {
        unset($this->recordingComponentId[$index]);
    }

    /**
     * Gets as recordingComponentId
     *
     * A Composite containing details of an Identifier of the RecordingComponent.
     *
     * @return \DDEX\RIN\RIN_200\ProprietaryIdType[]
     */
    public function getRecordingComponentId()
    {
        return $this->recordingComponentId;
    }

    /**
     * Sets a new recordingComponentId
     *
     * A Composite containing details of an Identifier of the RecordingComponent.
     *
     * @param \DDEX\RIN\RIN_200\ProprietaryIdType[] $recordingComponentId
     * @return self
     */
    public function setRecordingComponentId(array $recordingComponentId = null)
    {
        $this->recordingComponentId = $recordingComponentId;
        return $this;
    }

    /**
     * Gets as recordingComponentReference
     *
     * The Identifier (specific to the File) of the RecordingComponent. This is a LocalRecordingComponentAnchor starting with the letter K.
     *
     * @return string
     */
    public function getRecordingComponentReference()
    {
        return $this->recordingComponentReference;
    }

    /**
     * Sets a new recordingComponentReference
     *
     * The Identifier (specific to the File) of the RecordingComponent. This is a LocalRecordingComponentAnchor starting with the letter K.
     *
     * @param string $recordingComponentReference
     * @return self
     */
    public function setRecordingComponentReference($recordingComponentReference)
    {
        $this->recordingComponentReference = $recordingComponentReference;
        return $this;
    }

    /**
     * Gets as sequenceNumber
     *
     * The number of the RecordingComponent.
     *
     * @return string
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * The number of the RecordingComponent.
     *
     * @param string $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    /**
     * Gets as title
     *
     * The Name of the RecordingComponent.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * The Name of the RecordingComponent.
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Adds as versionType
     *
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one RecordingComponent from another with identical or similar Title metadata. VersionTypes may be used for disambiguating a RecordingComponent that has been derived from another RecordingComponent by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
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
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one RecordingComponent from another with identical or similar Title metadata. VersionTypes may be used for disambiguating a RecordingComponent that has been derived from another RecordingComponent by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
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
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one RecordingComponent from another with identical or similar Title metadata. VersionTypes may be used for disambiguating a RecordingComponent that has been derived from another RecordingComponent by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
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
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one RecordingComponent from another with identical or similar Title metadata. VersionTypes may be used for disambiguating a RecordingComponent that has been derived from another RecordingComponent by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
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
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one RecordingComponent from another with identical or similar Title metadata. VersionTypes may be used for disambiguating a RecordingComponent that has been derived from another RecordingComponent by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
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
     * Adds as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the RecordingComponent to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
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
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the RecordingComponent to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
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
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the RecordingComponent to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
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
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the RecordingComponent to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
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
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the RecordingComponent to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
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
     * Gets as comment
     *
     * A Composite containing a human-readable Comment about the RecordingComponent.
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
     * A Composite containing a human-readable Comment about the RecordingComponent.
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
     * Adds as contributor
     *
     * A Composite containing a RecordingComponentContributorReference.
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\RecordingComponentContributorReferenceType $contributor
     */
    public function addToContributor(\DDEX\RIN\RIN_200\RecordingComponentContributorReferenceType $contributor)
    {
        $this->contributor[] = $contributor;
        return $this;
    }

    /**
     * isset contributor
     *
     * A Composite containing a RecordingComponentContributorReference.
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
     * A Composite containing a RecordingComponentContributorReference.
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
     * A Composite containing a RecordingComponentContributorReference.
     *
     * @return \DDEX\RIN\RIN_200\RecordingComponentContributorReferenceType[]
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * Sets a new contributor
     *
     * A Composite containing a RecordingComponentContributorReference.
     *
     * @param \DDEX\RIN\RIN_200\RecordingComponentContributorReferenceType[] $contributor
     * @return self
     */
    public function setContributor(array $contributor = null)
    {
        $this->contributor = $contributor;
        return $this;
    }

    /**
     * Adds as recordingComponentEquipmentReference
     *
     * A Reference for Equipment used for the RecordingComponent (specific to this Message). This is a LocalEquipmentAnchorReference starting with the letter I.
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\EquipmentReferenceType $recordingComponentEquipmentReference
     */
    public function addToRecordingComponentEquipmentReference(\DDEX\RIN\RIN_200\EquipmentReferenceType $recordingComponentEquipmentReference)
    {
        $this->recordingComponentEquipmentReference[] = $recordingComponentEquipmentReference;
        return $this;
    }

    /**
     * isset recordingComponentEquipmentReference
     *
     * A Reference for Equipment used for the RecordingComponent (specific to this Message). This is a LocalEquipmentAnchorReference starting with the letter I.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecordingComponentEquipmentReference($index)
    {
        return isset($this->recordingComponentEquipmentReference[$index]);
    }

    /**
     * unset recordingComponentEquipmentReference
     *
     * A Reference for Equipment used for the RecordingComponent (specific to this Message). This is a LocalEquipmentAnchorReference starting with the letter I.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecordingComponentEquipmentReference($index)
    {
        unset($this->recordingComponentEquipmentReference[$index]);
    }

    /**
     * Gets as recordingComponentEquipmentReference
     *
     * A Reference for Equipment used for the RecordingComponent (specific to this Message). This is a LocalEquipmentAnchorReference starting with the letter I.
     *
     * @return \DDEX\RIN\RIN_200\EquipmentReferenceType[]
     */
    public function getRecordingComponentEquipmentReference()
    {
        return $this->recordingComponentEquipmentReference;
    }

    /**
     * Sets a new recordingComponentEquipmentReference
     *
     * A Reference for Equipment used for the RecordingComponent (specific to this Message). This is a LocalEquipmentAnchorReference starting with the letter I.
     *
     * @param \DDEX\RIN\RIN_200\EquipmentReferenceType[] $recordingComponentEquipmentReference
     * @return self
     */
    public function setRecordingComponentEquipmentReference(array $recordingComponentEquipmentReference = null)
    {
        $this->recordingComponentEquipmentReference = $recordingComponentEquipmentReference;
        return $this;
    }

    /**
     * Gets as recordingComponentFileReference
     *
     * A Reference for a File (specific to this Message). This is a LocalFileAnchorReference starting with the letter F.
     *
     * @return string
     */
    public function getRecordingComponentFileReference()
    {
        return $this->recordingComponentFileReference;
    }

    /**
     * Sets a new recordingComponentFileReference
     *
     * A Reference for a File (specific to this Message). This is a LocalFileAnchorReference starting with the letter F.
     *
     * @param string $recordingComponentFileReference
     * @return self
     */
    public function setRecordingComponentFileReference($recordingComponentFileReference)
    {
        $this->recordingComponentFileReference = $recordingComponentFileReference;
        return $this;
    }

    /**
     * Gets as creationDate
     *
     * A Composite containing details of the Date at which the RecordingComponent was created. This is a string with the syntax YYYY[-MM[-DD]].
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
     * A Composite containing details of the Date at which the RecordingComponent was created. This is a string with the syntax YYYY[-MM[-DD]].
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
     * Adds as languageOfPerformance
     *
     * The Language of the Performance recorded in the RecordingComponent (represented by an ISO 639 LanguageCode).
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
     * The Language of the Performance recorded in the RecordingComponent (represented by an ISO 639 LanguageCode).
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
     * The Language of the Performance recorded in the RecordingComponent (represented by an ISO 639 LanguageCode).
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
     * The Language of the Performance recorded in the RecordingComponent (represented by an ISO 639 LanguageCode).
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
     * The Language of the Performance recorded in the RecordingComponent (represented by an ISO 639 LanguageCode).
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
     * Gets as isMedley
     *
     * The Flag indicating whether the RecordingComponent is a Medley (=true) or not (=false).
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
     * The Flag indicating whether the RecordingComponent is a Medley (=true) or not (=false).
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


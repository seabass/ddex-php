<?php

namespace DDEX\RIN\RIN10M;

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
     * @var \DDEX\RIN\RIN10M\ProprietaryIdType[] $recordingComponentId
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
     * A Composite containing a human-readable Comment about the RecordingComponent.
     *
     * @var \DDEX\RIN\RIN10M\CommentType $comment
     */
    private $comment = null;

    /**
     * A Composite containing a RecordingComponentContributorReference.
     *
     * @var \DDEX\RIN\RIN10M\RecordingComponentContributorReferenceType[] $contributorReference
     */
    private $contributorReference = [
        
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
     * @var \DDEX\RIN\RIN10M\EventDateType $creationDate
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
     * @param \DDEX\RIN\RIN10M\ProprietaryIdType $proprietaryId
     */
    public function addToRecordingComponentId(\DDEX\RIN\RIN10M\ProprietaryIdType $proprietaryId)
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
     * @return \DDEX\RIN\RIN10M\ProprietaryIdType[]
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
     * @param \DDEX\RIN\RIN10M\ProprietaryIdType[] $recordingComponentId
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
     * Gets as comment
     *
     * A Composite containing a human-readable Comment about the RecordingComponent.
     *
     * @return \DDEX\RIN\RIN10M\CommentType
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
     * @param \DDEX\RIN\RIN10M\CommentType $comment
     * @return self
     */
    public function setComment(?\DDEX\RIN\RIN10M\CommentType $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Adds as contributorReference
     *
     * A Composite containing a RecordingComponentContributorReference.
     *
     * @return self
     * @param \DDEX\RIN\RIN10M\RecordingComponentContributorReferenceType $contributorReference
     */
    public function addToContributorReference(\DDEX\RIN\RIN10M\RecordingComponentContributorReferenceType $contributorReference)
    {
        $this->contributorReference[] = $contributorReference;
        return $this;
    }

    /**
     * isset contributorReference
     *
     * A Composite containing a RecordingComponentContributorReference.
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
     * A Composite containing a RecordingComponentContributorReference.
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
     * A Composite containing a RecordingComponentContributorReference.
     *
     * @return \DDEX\RIN\RIN10M\RecordingComponentContributorReferenceType[]
     */
    public function getContributorReference()
    {
        return $this->contributorReference;
    }

    /**
     * Sets a new contributorReference
     *
     * A Composite containing a RecordingComponentContributorReference.
     *
     * @param \DDEX\RIN\RIN10M\RecordingComponentContributorReferenceType[] $contributorReference
     * @return self
     */
    public function setContributorReference(array $contributorReference = null)
    {
        $this->contributorReference = $contributorReference;
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
     * @return \DDEX\RIN\RIN10M\EventDateType
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
     * @param \DDEX\RIN\RIN10M\EventDateType $creationDate
     * @return self
     */
    public function setCreationDate(?\DDEX\RIN\RIN10M\EventDateType $creationDate = null)
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


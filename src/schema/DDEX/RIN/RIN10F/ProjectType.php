<?php

namespace DDEX\RIN\RIN10F;

/**
 * Class representing ProjectType
 *
 * A Composite containing details of a Project.
 * XSD Type: Project
 */
class ProjectType
{
    /**
     * A Composite containing details of an Identifier of the Project. This is often referred to as a project number.
     *
     * @var \DDEX\RIN\RIN10F\ProprietaryIdType[] $projectId
     */
    private $projectId = null;

    /**
     * The Identifier (specific to the File) of the Project. This is a LocalProjectAnchor starting with the letter J.
     *
     * @var string $projectReference
     */
    private $projectReference = null;

    /**
     * The Identifier (specific to the File) of a MainArtist of the Project. This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string[] $mainArtist
     */
    private $mainArtist = [
        
    ];

    /**
     * The Name of the Project Artist. This can be different than the MainArtist.
     *
     * @var string $projectArtist
     */
    private $projectArtist = null;

    /**
     * The Name of the Project.
     *
     * @var string $title
     */
    private $title = null;

    /**
     * A Composite containing details of a typical or main Genre relating to the Project.
     *
     * @var \DDEX\RIN\RIN10F\GenreType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * The Identifier (specific to the File) of a label of the Project. This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string[] $label
     */
    private $label = [
        
    ];

    /**
     * A Composite containing details of the Date at which the Project was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DDEX\RIN\RIN10F\EventDateType $creationDate
     */
    private $creationDate = null;

    /**
     * The Status of the Project.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * A Composite containing a human-readable Comment about the Project.
     *
     * @var \DDEX\RIN\RIN10F\CommentType $comment
     */
    private $comment = null;

    /**
     * A Composite containing a ProjectContributorReference.
     *
     * @var \DDEX\RIN\RIN10F\ProjectContributorReferenceType[] $contributorReference
     */
    private $contributorReference = [
        
    ];

    /**
     * A Reference for a File (specific to this Message). This is a LocalFileAnchorReference starting with the letter F.
     *
     * @var string $projectFileReference
     */
    private $projectFileReference = null;

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of an Identifier of the Project. This is often referred to as a project number.
     *
     * @return self
     * @param \DDEX\RIN\RIN10F\ProprietaryIdType $proprietaryId
     */
    public function addToProjectId(\DDEX\RIN\RIN10F\ProprietaryIdType $proprietaryId)
    {
        $this->projectId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset projectId
     *
     * A Composite containing details of an Identifier of the Project. This is often referred to as a project number.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProjectId($index)
    {
        return isset($this->projectId[$index]);
    }

    /**
     * unset projectId
     *
     * A Composite containing details of an Identifier of the Project. This is often referred to as a project number.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProjectId($index)
    {
        unset($this->projectId[$index]);
    }

    /**
     * Gets as projectId
     *
     * A Composite containing details of an Identifier of the Project. This is often referred to as a project number.
     *
     * @return \DDEX\RIN\RIN10F\ProprietaryIdType[]
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Sets a new projectId
     *
     * A Composite containing details of an Identifier of the Project. This is often referred to as a project number.
     *
     * @param \DDEX\RIN\RIN10F\ProprietaryIdType[] $projectId
     * @return self
     */
    public function setProjectId(array $projectId = null)
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * Gets as projectReference
     *
     * The Identifier (specific to the File) of the Project. This is a LocalProjectAnchor starting with the letter J.
     *
     * @return string
     */
    public function getProjectReference()
    {
        return $this->projectReference;
    }

    /**
     * Sets a new projectReference
     *
     * The Identifier (specific to the File) of the Project. This is a LocalProjectAnchor starting with the letter J.
     *
     * @param string $projectReference
     * @return self
     */
    public function setProjectReference($projectReference)
    {
        $this->projectReference = $projectReference;
        return $this;
    }

    /**
     * Adds as mainArtist
     *
     * The Identifier (specific to the File) of a MainArtist of the Project. This is a LocalPartyAnchorReference starting with the letter P.
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
     * The Identifier (specific to the File) of a MainArtist of the Project. This is a LocalPartyAnchorReference starting with the letter P.
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
     * The Identifier (specific to the File) of a MainArtist of the Project. This is a LocalPartyAnchorReference starting with the letter P.
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
     * The Identifier (specific to the File) of a MainArtist of the Project. This is a LocalPartyAnchorReference starting with the letter P.
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
     * The Identifier (specific to the File) of a MainArtist of the Project. This is a LocalPartyAnchorReference starting with the letter P.
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
     * Gets as projectArtist
     *
     * The Name of the Project Artist. This can be different than the MainArtist.
     *
     * @return string
     */
    public function getProjectArtist()
    {
        return $this->projectArtist;
    }

    /**
     * Sets a new projectArtist
     *
     * The Name of the Project Artist. This can be different than the MainArtist.
     *
     * @param string $projectArtist
     * @return self
     */
    public function setProjectArtist($projectArtist)
    {
        $this->projectArtist = $projectArtist;
        return $this;
    }

    /**
     * Gets as title
     *
     * The Name of the Project.
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
     * The Name of the Project.
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
     * Adds as genre
     *
     * A Composite containing details of a typical or main Genre relating to the Project.
     *
     * @return self
     * @param \DDEX\RIN\RIN10F\GenreType $genre
     */
    public function addToGenre(\DDEX\RIN\RIN10F\GenreType $genre)
    {
        $this->genre[] = $genre;
        return $this;
    }

    /**
     * isset genre
     *
     * A Composite containing details of a typical or main Genre relating to the Project.
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
     * A Composite containing details of a typical or main Genre relating to the Project.
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
     * A Composite containing details of a typical or main Genre relating to the Project.
     *
     * @return \DDEX\RIN\RIN10F\GenreType[]
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Sets a new genre
     *
     * A Composite containing details of a typical or main Genre relating to the Project.
     *
     * @param \DDEX\RIN\RIN10F\GenreType[] $genre
     * @return self
     */
    public function setGenre(array $genre = null)
    {
        $this->genre = $genre;
        return $this;
    }

    /**
     * Adds as label
     *
     * The Identifier (specific to the File) of a label of the Project. This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return self
     * @param string $label
     */
    public function addToLabel($label)
    {
        $this->label[] = $label;
        return $this;
    }

    /**
     * isset label
     *
     * The Identifier (specific to the File) of a label of the Project. This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLabel($index)
    {
        return isset($this->label[$index]);
    }

    /**
     * unset label
     *
     * The Identifier (specific to the File) of a label of the Project. This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLabel($index)
    {
        unset($this->label[$index]);
    }

    /**
     * Gets as label
     *
     * The Identifier (specific to the File) of a label of the Project. This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return string[]
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * The Identifier (specific to the File) of a label of the Project. This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param string $label
     * @return self
     */
    public function setLabel(array $label = null)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * Gets as creationDate
     *
     * A Composite containing details of the Date at which the Project was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DDEX\RIN\RIN10F\EventDateType
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Sets a new creationDate
     *
     * A Composite containing details of the Date at which the Project was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DDEX\RIN\RIN10F\EventDateType $creationDate
     * @return self
     */
    public function setCreationDate(?\DDEX\RIN\RIN10F\EventDateType $creationDate = null)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * Gets as status
     *
     * The Status of the Project.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The Status of the Project.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as comment
     *
     * A Composite containing a human-readable Comment about the Project.
     *
     * @return \DDEX\RIN\RIN10F\CommentType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A Composite containing a human-readable Comment about the Project.
     *
     * @param \DDEX\RIN\RIN10F\CommentType $comment
     * @return self
     */
    public function setComment(?\DDEX\RIN\RIN10F\CommentType $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Adds as contributorReference
     *
     * A Composite containing a ProjectContributorReference.
     *
     * @return self
     * @param \DDEX\RIN\RIN10F\ProjectContributorReferenceType $contributorReference
     */
    public function addToContributorReference(\DDEX\RIN\RIN10F\ProjectContributorReferenceType $contributorReference)
    {
        $this->contributorReference[] = $contributorReference;
        return $this;
    }

    /**
     * isset contributorReference
     *
     * A Composite containing a ProjectContributorReference.
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
     * A Composite containing a ProjectContributorReference.
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
     * A Composite containing a ProjectContributorReference.
     *
     * @return \DDEX\RIN\RIN10F\ProjectContributorReferenceType[]
     */
    public function getContributorReference()
    {
        return $this->contributorReference;
    }

    /**
     * Sets a new contributorReference
     *
     * A Composite containing a ProjectContributorReference.
     *
     * @param \DDEX\RIN\RIN10F\ProjectContributorReferenceType[] $contributorReference
     * @return self
     */
    public function setContributorReference(array $contributorReference = null)
    {
        $this->contributorReference = $contributorReference;
        return $this;
    }

    /**
     * Gets as projectFileReference
     *
     * A Reference for a File (specific to this Message). This is a LocalFileAnchorReference starting with the letter F.
     *
     * @return string
     */
    public function getProjectFileReference()
    {
        return $this->projectFileReference;
    }

    /**
     * Sets a new projectFileReference
     *
     * A Reference for a File (specific to this Message). This is a LocalFileAnchorReference starting with the letter F.
     *
     * @param string $projectFileReference
     * @return self
     */
    public function setProjectFileReference($projectFileReference)
    {
        $this->projectFileReference = $projectFileReference;
        return $this;
    }
}


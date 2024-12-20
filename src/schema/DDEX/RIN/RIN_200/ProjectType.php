<?php

namespace DDEX\RIN\RIN_200;

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
     * @var \DDEX\RIN\RIN_200\ProprietaryIdType[] $projectId
     */
    private $projectId = null;

    /**
     * The Identifier (specific to the File) of the Project. This is a LocalProjectAnchor starting with the letter J.
     *
     * @var string $projectReference
     */
    private $projectReference = null;

    /**
     * A Composite containing details of a MainArtist of the Project.
     *
     * @var \DDEX\RIN\RIN_200\DisplayArtistType[] $displayArtist
     */
    private $displayArtist = [
        
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
     * @var string $projectName
     */
    private $projectName = null;

    /**
     * A Composite containing details of a typical or main Genre relating to the Project.
     *
     * @var \DDEX\RIN\RIN_200\GenreWithTerritoryType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * The Identifier (specific to the File) of a label of the Project. This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string[] $projectLabelReference
     */
    private $projectLabelReference = [
        
    ];

    /**
     * A Composite containing details of the Date at which the Project was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DDEX\RIN\RIN_200\EventDateType $creationDate
     */
    private $creationDate = null;

    /**
     * The Status of the Project.
     *
     * @var \DDEX\RIN\RIN_200\StatusType $status
     */
    private $status = null;

    /**
     * A Composite containing a human-readable Comment about the Project.
     *
     * @var \DDEX\RIN\RIN_200\CommentType $comment
     */
    private $comment = null;

    /**
     * A Composite containing a ProjectContributorReference.
     *
     * @var \DDEX\RIN\RIN_200\ProjectContributorReferenceType[] $contributor
     */
    private $contributor = [
        
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
     * @param \DDEX\RIN\RIN_200\ProprietaryIdType $proprietaryId
     */
    public function addToProjectId(\DDEX\RIN\RIN_200\ProprietaryIdType $proprietaryId)
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
     * @return \DDEX\RIN\RIN_200\ProprietaryIdType[]
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
     * @param \DDEX\RIN\RIN_200\ProprietaryIdType[] $projectId
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
     * Adds as displayArtist
     *
     * A Composite containing details of a MainArtist of the Project.
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
     * A Composite containing details of a MainArtist of the Project.
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
     * A Composite containing details of a MainArtist of the Project.
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
     * A Composite containing details of a MainArtist of the Project.
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
     * A Composite containing details of a MainArtist of the Project.
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
     * Gets as projectName
     *
     * The Name of the Project.
     *
     * @return string
     */
    public function getProjectName()
    {
        return $this->projectName;
    }

    /**
     * Sets a new projectName
     *
     * The Name of the Project.
     *
     * @param string $projectName
     * @return self
     */
    public function setProjectName($projectName)
    {
        $this->projectName = $projectName;
        return $this;
    }

    /**
     * Adds as genre
     *
     * A Composite containing details of a typical or main Genre relating to the Project.
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
     * @return \DDEX\RIN\RIN_200\GenreWithTerritoryType[]
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
     * @param \DDEX\RIN\RIN_200\GenreWithTerritoryType[] $genre
     * @return self
     */
    public function setGenre(array $genre = null)
    {
        $this->genre = $genre;
        return $this;
    }

    /**
     * Adds as projectLabelReference
     *
     * The Identifier (specific to the File) of a label of the Project. This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return self
     * @param string $projectLabelReference
     */
    public function addToProjectLabelReference($projectLabelReference)
    {
        $this->projectLabelReference[] = $projectLabelReference;
        return $this;
    }

    /**
     * isset projectLabelReference
     *
     * The Identifier (specific to the File) of a label of the Project. This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProjectLabelReference($index)
    {
        return isset($this->projectLabelReference[$index]);
    }

    /**
     * unset projectLabelReference
     *
     * The Identifier (specific to the File) of a label of the Project. This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProjectLabelReference($index)
    {
        unset($this->projectLabelReference[$index]);
    }

    /**
     * Gets as projectLabelReference
     *
     * The Identifier (specific to the File) of a label of the Project. This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return string[]
     */
    public function getProjectLabelReference()
    {
        return $this->projectLabelReference;
    }

    /**
     * Sets a new projectLabelReference
     *
     * The Identifier (specific to the File) of a label of the Project. This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param string $projectLabelReference
     * @return self
     */
    public function setProjectLabelReference(array $projectLabelReference = null)
    {
        $this->projectLabelReference = $projectLabelReference;
        return $this;
    }

    /**
     * Gets as creationDate
     *
     * A Composite containing details of the Date at which the Project was created. This is a string with the syntax YYYY[-MM[-DD]].
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
     * A Composite containing details of the Date at which the Project was created. This is a string with the syntax YYYY[-MM[-DD]].
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
     * Gets as status
     *
     * The Status of the Project.
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
     * The Status of the Project.
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
     * A Composite containing a human-readable Comment about the Project.
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
     * A Composite containing a human-readable Comment about the Project.
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
     * A Composite containing a ProjectContributorReference.
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\ProjectContributorReferenceType $contributor
     */
    public function addToContributor(\DDEX\RIN\RIN_200\ProjectContributorReferenceType $contributor)
    {
        $this->contributor[] = $contributor;
        return $this;
    }

    /**
     * isset contributor
     *
     * A Composite containing a ProjectContributorReference.
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
     * A Composite containing a ProjectContributorReference.
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
     * A Composite containing a ProjectContributorReference.
     *
     * @return \DDEX\RIN\RIN_200\ProjectContributorReferenceType[]
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * Sets a new contributor
     *
     * A Composite containing a ProjectContributorReference.
     *
     * @param \DDEX\RIN\RIN_200\ProjectContributorReferenceType[] $contributor
     * @return self
     */
    public function setContributor(array $contributor = null)
    {
        $this->contributor = $contributor;
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


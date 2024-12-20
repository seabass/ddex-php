<?php

namespace DDEX\RIN\RIN11M;

/**
 * Class representing ProjectType
 *
 * A Composite containing details of a Project.
 * XSD Type: Project
 */
class ProjectType
{
    /**
     * The Identifier (specific to the File) of the Project. This is a LocalProjectAnchor starting with the letter J.
     *
     * @var string $projectReference
     */
    private $projectReference = null;

    /**
     * A Composite containing details of a MainArtist of the Project.
     *
     * @var \DDEX\RIN\RIN11M\DisplayArtistType[] $displayArtist
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
     * The Identifier (specific to the File) of a label of the Project. This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string[] $projectLabelReference
     */
    private $projectLabelReference = [
        
    ];

    /**
     * A human-readable Comment about the Project.
     *
     * @var string $comment
     */
    private $comment = null;

    /**
     * A Composite containing a ProjectContributorReference.
     *
     * @var \DDEX\RIN\RIN11M\ProjectContributorReferenceType[] $contributor
     */
    private $contributor = [
        
    ];

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
     * @return \DDEX\RIN\RIN11M\DisplayArtistType[]
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
     * @param \DDEX\RIN\RIN11M\DisplayArtistType[] $displayArtist
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
     * Gets as comment
     *
     * A human-readable Comment about the Project.
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
     * A human-readable Comment about the Project.
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
     * Adds as contributor
     *
     * A Composite containing a ProjectContributorReference.
     *
     * @return self
     * @param \DDEX\RIN\RIN11M\ProjectContributorReferenceType $contributor
     */
    public function addToContributor(\DDEX\RIN\RIN11M\ProjectContributorReferenceType $contributor)
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
     * @return \DDEX\RIN\RIN11M\ProjectContributorReferenceType[]
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
     * @param \DDEX\RIN\RIN11M\ProjectContributorReferenceType[] $contributor
     * @return self
     */
    public function setContributor(array $contributor = null)
    {
        $this->contributor = $contributor;
        return $this;
    }
}


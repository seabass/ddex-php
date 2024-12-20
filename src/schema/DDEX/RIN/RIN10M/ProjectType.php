<?php

namespace DDEX\RIN\RIN10M;

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
     * @var string $projectName
     */
    private $projectName = null;

    /**
     * The Identifier (specific to the File) of a label of the Project. This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string[] $label
     */
    private $label = [
        
    ];

    /**
     * A Composite containing a human-readable Comment about the Project.
     *
     * @var string $comment
     */
    private $comment = null;

    /**
     * A Composite containing a ProjectContributorReference.
     *
     * @var \DDEX\RIN\RIN10M\ProjectContributorReferenceType[] $contributorReference
     */
    private $contributorReference = [
        
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
     * Gets as comment
     *
     * A Composite containing a human-readable Comment about the Project.
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
     * A Composite containing a human-readable Comment about the Project.
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
     * Adds as contributorReference
     *
     * A Composite containing a ProjectContributorReference.
     *
     * @return self
     * @param \DDEX\RIN\RIN10M\ProjectContributorReferenceType $contributorReference
     */
    public function addToContributorReference(\DDEX\RIN\RIN10M\ProjectContributorReferenceType $contributorReference)
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
     * @return \DDEX\RIN\RIN10M\ProjectContributorReferenceType[]
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
     * @param \DDEX\RIN\RIN10M\ProjectContributorReferenceType[] $contributorReference
     * @return self
     */
    public function setContributorReference(array $contributorReference = null)
    {
        $this->contributorReference = $contributorReference;
        return $this;
    }
}


<?php

namespace DDEX\MEAD\MEAD_100;

/**
 * Class representing WorkHierarchyType
 *
 * A Composite containing details of parents, children and siblings of a Work.
 * XSD Type: WorkHierarchy
 */
class WorkHierarchyType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var string[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * The Flag indicating whether this element of the hierarchy is the Work for which the hierarchy is described (=true) or not (=false).
     *
     * @var bool $isDescribedElement
     */
    private $isDescribedElement = null;

    /**
     * The Flag indicating whether the hierarchy level is complete (=true) or not (=false).
     *
     * @var bool $isComplete
     */
    private $isComplete = null;

    /**
     * The number indicating the order of the Work in a group of Works.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Composite containing details of a MusicalWorkId.
     *
     * @var \DDEX\MEAD\MEAD_100\MusicalWorkIdType $workId
     */
    private $workId = null;

    /**
     * A Composite containing details of a Title of the Work.
     *
     * @var \DDEX\MEAD\MEAD_100\WorkTitleType[] $workTitle
     */
    private $workTitle = [
        
    ];

    /**
     * A Composite containing details of parents, children and siblings of the Work.
     *
     * @var \DDEX\MEAD\MEAD_100\ChildWorkHierarchyType[] $child
     */
    private $child = [
        
    ];

    /**
     * A Composite containing details of a form of the Work (e.g. Concerto, Aria, 12 bar blues, etc.).
     *
     * @var \DDEX\MEAD\MEAD_100\FormType $form
     */
    private $form = null;

    /**
     * Adds as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return self
     * @param string $metadataSourceReference
     */
    public function addToMetadataSourceReference($metadataSourceReference)
    {
        $this->metadataSourceReference[] = $metadataSourceReference;
        return $this;
    }

    /**
     * isset metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMetadataSourceReference($index)
    {
        return isset($this->metadataSourceReference[$index]);
    }

    /**
     * unset metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMetadataSourceReference($index)
    {
        unset($this->metadataSourceReference[$index]);
    }

    /**
     * Gets as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return string[]
     */
    public function getMetadataSourceReference()
    {
        return $this->metadataSourceReference;
    }

    /**
     * Sets a new metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param string $metadataSourceReference
     * @return self
     */
    public function setMetadataSourceReference(array $metadataSourceReference = null)
    {
        $this->metadataSourceReference = $metadataSourceReference;
        return $this;
    }

    /**
     * Gets as isDescribedElement
     *
     * The Flag indicating whether this element of the hierarchy is the Work for which the hierarchy is described (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsDescribedElement()
    {
        return $this->isDescribedElement;
    }

    /**
     * Sets a new isDescribedElement
     *
     * The Flag indicating whether this element of the hierarchy is the Work for which the hierarchy is described (=true) or not (=false).
     *
     * @param bool $isDescribedElement
     * @return self
     */
    public function setIsDescribedElement($isDescribedElement)
    {
        $this->isDescribedElement = $isDescribedElement;
        return $this;
    }

    /**
     * Gets as isComplete
     *
     * The Flag indicating whether the hierarchy level is complete (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsComplete()
    {
        return $this->isComplete;
    }

    /**
     * Sets a new isComplete
     *
     * The Flag indicating whether the hierarchy level is complete (=true) or not (=false).
     *
     * @param bool $isComplete
     * @return self
     */
    public function setIsComplete($isComplete)
    {
        $this->isComplete = $isComplete;
        return $this;
    }

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the Work in a group of Works.
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
     * The number indicating the order of the Work in a group of Works.
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
     * Gets as workId
     *
     * A Composite containing details of a MusicalWorkId.
     *
     * @return \DDEX\MEAD\MEAD_100\MusicalWorkIdType
     */
    public function getWorkId()
    {
        return $this->workId;
    }

    /**
     * Sets a new workId
     *
     * A Composite containing details of a MusicalWorkId.
     *
     * @param \DDEX\MEAD\MEAD_100\MusicalWorkIdType $workId
     * @return self
     */
    public function setWorkId(\DDEX\MEAD\MEAD_100\MusicalWorkIdType $workId)
    {
        $this->workId = $workId;
        return $this;
    }

    /**
     * Adds as workTitle
     *
     * A Composite containing details of a Title of the Work.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\WorkTitleType $workTitle
     */
    public function addToWorkTitle(\DDEX\MEAD\MEAD_100\WorkTitleType $workTitle)
    {
        $this->workTitle[] = $workTitle;
        return $this;
    }

    /**
     * isset workTitle
     *
     * A Composite containing details of a Title of the Work.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWorkTitle($index)
    {
        return isset($this->workTitle[$index]);
    }

    /**
     * unset workTitle
     *
     * A Composite containing details of a Title of the Work.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWorkTitle($index)
    {
        unset($this->workTitle[$index]);
    }

    /**
     * Gets as workTitle
     *
     * A Composite containing details of a Title of the Work.
     *
     * @return \DDEX\MEAD\MEAD_100\WorkTitleType[]
     */
    public function getWorkTitle()
    {
        return $this->workTitle;
    }

    /**
     * Sets a new workTitle
     *
     * A Composite containing details of a Title of the Work.
     *
     * @param \DDEX\MEAD\MEAD_100\WorkTitleType[] $workTitle
     * @return self
     */
    public function setWorkTitle(array $workTitle = null)
    {
        $this->workTitle = $workTitle;
        return $this;
    }

    /**
     * Adds as child
     *
     * A Composite containing details of parents, children and siblings of the Work.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\ChildWorkHierarchyType $child
     */
    public function addToChild(\DDEX\MEAD\MEAD_100\ChildWorkHierarchyType $child)
    {
        $this->child[] = $child;
        return $this;
    }

    /**
     * isset child
     *
     * A Composite containing details of parents, children and siblings of the Work.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChild($index)
    {
        return isset($this->child[$index]);
    }

    /**
     * unset child
     *
     * A Composite containing details of parents, children and siblings of the Work.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChild($index)
    {
        unset($this->child[$index]);
    }

    /**
     * Gets as child
     *
     * A Composite containing details of parents, children and siblings of the Work.
     *
     * @return \DDEX\MEAD\MEAD_100\ChildWorkHierarchyType[]
     */
    public function getChild()
    {
        return $this->child;
    }

    /**
     * Sets a new child
     *
     * A Composite containing details of parents, children and siblings of the Work.
     *
     * @param \DDEX\MEAD\MEAD_100\ChildWorkHierarchyType[] $child
     * @return self
     */
    public function setChild(array $child = null)
    {
        $this->child = $child;
        return $this;
    }

    /**
     * Gets as form
     *
     * A Composite containing details of a form of the Work (e.g. Concerto, Aria, 12 bar blues, etc.).
     *
     * @return \DDEX\MEAD\MEAD_100\FormType
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Sets a new form
     *
     * A Composite containing details of a form of the Work (e.g. Concerto, Aria, 12 bar blues, etc.).
     *
     * @param \DDEX\MEAD\MEAD_100\FormType $form
     * @return self
     */
    public function setForm(?\DDEX\MEAD\MEAD_100\FormType $form = null)
    {
        $this->form = $form;
        return $this;
    }
}


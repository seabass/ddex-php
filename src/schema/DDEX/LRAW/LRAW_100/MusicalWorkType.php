<?php

namespace DDEX\LRAW\LRAW_100;

/**
 * Class representing MusicalWorkType
 *
 * A Composite containing details of a MusicalWork.
 * XSD Type: MusicalWork
 */
class MusicalWorkType
{
    /**
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
     *
     * @var \DDEX\LRAW\LRAW_100\MusicalWorkIdType[] $musicalWorkId
     */
    private $musicalWorkId = [
        
    ];

    /**
     * A Composite containing details of the Title of the MusicalWork.
     *
     * @var \DDEX\LRAW\LRAW_100\ReferenceTitleTextType[] $referenceTitleText
     */
    private $referenceTitleText = [
        
    ];

    /**
     * A Composite containing details of a structured Title of the MusicalWork.
     *
     * @var \DDEX\LRAW\LRAW_100\ReferenceTitleType[] $referenceTitle
     */
    private $referenceTitle = [
        
    ];

    /**
     * A Composite containing details of a MusicalWorkContributor to the MusicalWork.
     *
     * @var \DDEX\LRAW\LRAW_100\MusicalWorkContributorType $writer
     */
    private $writer = null;

    /**
     * Adds as musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
     *
     * @return self
     * @param \DDEX\LRAW\LRAW_100\MusicalWorkIdType $musicalWorkId
     */
    public function addToMusicalWorkId(\DDEX\LRAW\LRAW_100\MusicalWorkIdType $musicalWorkId)
    {
        $this->musicalWorkId[] = $musicalWorkId;
        return $this;
    }

    /**
     * isset musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMusicalWorkId($index)
    {
        return isset($this->musicalWorkId[$index]);
    }

    /**
     * unset musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMusicalWorkId($index)
    {
        unset($this->musicalWorkId[$index]);
    }

    /**
     * Gets as musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
     *
     * @return \DDEX\LRAW\LRAW_100\MusicalWorkIdType[]
     */
    public function getMusicalWorkId()
    {
        return $this->musicalWorkId;
    }

    /**
     * Sets a new musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
     *
     * @param \DDEX\LRAW\LRAW_100\MusicalWorkIdType[] $musicalWorkId
     * @return self
     */
    public function setMusicalWorkId(array $musicalWorkId)
    {
        $this->musicalWorkId = $musicalWorkId;
        return $this;
    }

    /**
     * Adds as referenceTitleText
     *
     * A Composite containing details of the Title of the MusicalWork.
     *
     * @return self
     * @param \DDEX\LRAW\LRAW_100\ReferenceTitleTextType $referenceTitleText
     */
    public function addToReferenceTitleText(\DDEX\LRAW\LRAW_100\ReferenceTitleTextType $referenceTitleText)
    {
        $this->referenceTitleText[] = $referenceTitleText;
        return $this;
    }

    /**
     * isset referenceTitleText
     *
     * A Composite containing details of the Title of the MusicalWork.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferenceTitleText($index)
    {
        return isset($this->referenceTitleText[$index]);
    }

    /**
     * unset referenceTitleText
     *
     * A Composite containing details of the Title of the MusicalWork.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferenceTitleText($index)
    {
        unset($this->referenceTitleText[$index]);
    }

    /**
     * Gets as referenceTitleText
     *
     * A Composite containing details of the Title of the MusicalWork.
     *
     * @return \DDEX\LRAW\LRAW_100\ReferenceTitleTextType[]
     */
    public function getReferenceTitleText()
    {
        return $this->referenceTitleText;
    }

    /**
     * Sets a new referenceTitleText
     *
     * A Composite containing details of the Title of the MusicalWork.
     *
     * @param \DDEX\LRAW\LRAW_100\ReferenceTitleTextType[] $referenceTitleText
     * @return self
     */
    public function setReferenceTitleText(array $referenceTitleText)
    {
        $this->referenceTitleText = $referenceTitleText;
        return $this;
    }

    /**
     * Adds as referenceTitle
     *
     * A Composite containing details of a structured Title of the MusicalWork.
     *
     * @return self
     * @param \DDEX\LRAW\LRAW_100\ReferenceTitleType $referenceTitle
     */
    public function addToReferenceTitle(\DDEX\LRAW\LRAW_100\ReferenceTitleType $referenceTitle)
    {
        $this->referenceTitle[] = $referenceTitle;
        return $this;
    }

    /**
     * isset referenceTitle
     *
     * A Composite containing details of a structured Title of the MusicalWork.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferenceTitle($index)
    {
        return isset($this->referenceTitle[$index]);
    }

    /**
     * unset referenceTitle
     *
     * A Composite containing details of a structured Title of the MusicalWork.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferenceTitle($index)
    {
        unset($this->referenceTitle[$index]);
    }

    /**
     * Gets as referenceTitle
     *
     * A Composite containing details of a structured Title of the MusicalWork.
     *
     * @return \DDEX\LRAW\LRAW_100\ReferenceTitleType[]
     */
    public function getReferenceTitle()
    {
        return $this->referenceTitle;
    }

    /**
     * Sets a new referenceTitle
     *
     * A Composite containing details of a structured Title of the MusicalWork.
     *
     * @param \DDEX\LRAW\LRAW_100\ReferenceTitleType[] $referenceTitle
     * @return self
     */
    public function setReferenceTitle(array $referenceTitle = null)
    {
        $this->referenceTitle = $referenceTitle;
        return $this;
    }

    /**
     * Gets as writer
     *
     * A Composite containing details of a MusicalWorkContributor to the MusicalWork.
     *
     * @return \DDEX\LRAW\LRAW_100\MusicalWorkContributorType
     */
    public function getWriter()
    {
        return $this->writer;
    }

    /**
     * Sets a new writer
     *
     * A Composite containing details of a MusicalWorkContributor to the MusicalWork.
     *
     * @param \DDEX\LRAW\LRAW_100\MusicalWorkContributorType $writer
     * @return self
     */
    public function setWriter(?\DDEX\LRAW\LRAW_100\MusicalWorkContributorType $writer = null)
    {
        $this->writer = $writer;
        return $this;
    }
}


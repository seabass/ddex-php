<?php

namespace DDEX\MWN\MWN_US_LOD_100;

/**
 * Class representing MusicalWorkForConfirmationType
 *
 * A Composite containing details of a MusicalWork.
 * Explanatory Note: This Composite is named MusicalWorkForConfirmation to disambiguate it from the basic MusicalWork Composite. The name indicates that it is specific for the LoD Confirmation Message.
 * XSD Type: MusicalWorkForConfirmation
 */
class MusicalWorkForConfirmationType
{
    /**
     * The Identifier (specific to the Message) of the MusicalWork within the Release which contains it. This is a LocalMusicalWorkAnchor starting with the letter W.
     *
     * @var string $musicalWorkReference
     */
    private $musicalWorkReference = null;

    /**
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\MusicalWorkIdType $musicalWorkId
     */
    private $musicalWorkId = null;

    /**
     * A Composite containing details of a ReferenceTitle of the MusicalWork.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ReferenceTitleType $title
     */
    private $title = null;

    /**
     * A Description that contains information for disambiguating MusicalWorks.
     *
     * @var string $disambiguationDescription
     */
    private $disambiguationDescription = null;

    /**
     * A Status of the MusicalWork.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\StatusType[] $status
     */
    private $status = [
        
    ];

    /**
     * Gets as musicalWorkReference
     *
     * The Identifier (specific to the Message) of the MusicalWork within the Release which contains it. This is a LocalMusicalWorkAnchor starting with the letter W.
     *
     * @return string
     */
    public function getMusicalWorkReference()
    {
        return $this->musicalWorkReference;
    }

    /**
     * Sets a new musicalWorkReference
     *
     * The Identifier (specific to the Message) of the MusicalWork within the Release which contains it. This is a LocalMusicalWorkAnchor starting with the letter W.
     *
     * @param string $musicalWorkReference
     * @return self
     */
    public function setMusicalWorkReference($musicalWorkReference)
    {
        $this->musicalWorkReference = $musicalWorkReference;
        return $this;
    }

    /**
     * Gets as musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\MusicalWorkIdType
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
     * @param \DDEX\MWN\MWN_US_LOD_100\MusicalWorkIdType $musicalWorkId
     * @return self
     */
    public function setMusicalWorkId(\DDEX\MWN\MWN_US_LOD_100\MusicalWorkIdType $musicalWorkId)
    {
        $this->musicalWorkId = $musicalWorkId;
        return $this;
    }

    /**
     * Gets as title
     *
     * A Composite containing details of a ReferenceTitle of the MusicalWork.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\ReferenceTitleType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a ReferenceTitle of the MusicalWork.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\ReferenceTitleType $title
     * @return self
     */
    public function setTitle(?\DDEX\MWN\MWN_US_LOD_100\ReferenceTitleType $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as disambiguationDescription
     *
     * A Description that contains information for disambiguating MusicalWorks.
     *
     * @return string
     */
    public function getDisambiguationDescription()
    {
        return $this->disambiguationDescription;
    }

    /**
     * Sets a new disambiguationDescription
     *
     * A Description that contains information for disambiguating MusicalWorks.
     *
     * @param string $disambiguationDescription
     * @return self
     */
    public function setDisambiguationDescription($disambiguationDescription)
    {
        $this->disambiguationDescription = $disambiguationDescription;
        return $this;
    }

    /**
     * Adds as status
     *
     * A Status of the MusicalWork.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\StatusType $status
     */
    public function addToStatus(\DDEX\MWN\MWN_US_LOD_100\StatusType $status)
    {
        $this->status[] = $status;
        return $this;
    }

    /**
     * isset status
     *
     * A Status of the MusicalWork.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatus($index)
    {
        return isset($this->status[$index]);
    }

    /**
     * unset status
     *
     * A Status of the MusicalWork.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatus($index)
    {
        unset($this->status[$index]);
    }

    /**
     * Gets as status
     *
     * A Status of the MusicalWork.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\StatusType[]
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * A Status of the MusicalWork.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\StatusType[] $status
     * @return self
     */
    public function setStatus(array $status = null)
    {
        $this->status = $status;
        return $this;
    }
}


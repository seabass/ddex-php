<?php

namespace DDEX\MWN\MWN_US_LOD_100;

/**
 * Class representing RetentionType
 *
 * A Composite containing details of a retention date applying to one or more MusicalWorks.
 * XSD Type: Retention
 */
class RetentionType
{
    /**
     * A RetentionDate applying to MusicalWorks.
     *
     * @var string $retentionDate
     */
    private $retentionDate = null;

    /**
     * A Composite containing details of a MusicalWorkId of a MusicalWork for which the RetentionDate is provided.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\MusicalWorkIdType[] $musicalWorkId
     */
    private $musicalWorkId = [
        
    ];

    /**
     * Gets as retentionDate
     *
     * A RetentionDate applying to MusicalWorks.
     *
     * @return string
     */
    public function getRetentionDate()
    {
        return $this->retentionDate;
    }

    /**
     * Sets a new retentionDate
     *
     * A RetentionDate applying to MusicalWorks.
     *
     * @param string $retentionDate
     * @return self
     */
    public function setRetentionDate($retentionDate)
    {
        $this->retentionDate = $retentionDate;
        return $this;
    }

    /**
     * Adds as musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId of a MusicalWork for which the RetentionDate is provided.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\MusicalWorkIdType $musicalWorkId
     */
    public function addToMusicalWorkId(\DDEX\MWN\MWN_US_LOD_100\MusicalWorkIdType $musicalWorkId)
    {
        $this->musicalWorkId[] = $musicalWorkId;
        return $this;
    }

    /**
     * isset musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId of a MusicalWork for which the RetentionDate is provided.
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
     * A Composite containing details of a MusicalWorkId of a MusicalWork for which the RetentionDate is provided.
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
     * A Composite containing details of a MusicalWorkId of a MusicalWork for which the RetentionDate is provided.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\MusicalWorkIdType[]
     */
    public function getMusicalWorkId()
    {
        return $this->musicalWorkId;
    }

    /**
     * Sets a new musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId of a MusicalWork for which the RetentionDate is provided.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\MusicalWorkIdType[] $musicalWorkId
     * @return self
     */
    public function setMusicalWorkId(array $musicalWorkId)
    {
        $this->musicalWorkId = $musicalWorkId;
        return $this;
    }
}


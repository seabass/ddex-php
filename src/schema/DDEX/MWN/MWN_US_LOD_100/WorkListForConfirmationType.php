<?php

namespace DDEX\MWN\MWN_US_LOD_100;

/**
 * Class representing WorkListForConfirmationType
 *
 * A Composite containing details of one or more Works.
 * Explanatory Note: This Composite is named WorkListForConfirmation to disambiguate it from the basic WorkList Composite. The name indicates that it is specific for the LoD Confirmation Message.
 * XSD Type: WorkListForConfirmation
 */
class WorkListForConfirmationType
{
    /**
     * A Composite containing details of a MusicalWork contained in a Resource.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\MusicalWorkForConfirmationType[] $musicalWork
     */
    private $musicalWork = [
        
    ];

    /**
     * Adds as musicalWork
     *
     * A Composite containing details of a MusicalWork contained in a Resource.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\MusicalWorkForConfirmationType $musicalWork
     */
    public function addToMusicalWork(\DDEX\MWN\MWN_US_LOD_100\MusicalWorkForConfirmationType $musicalWork)
    {
        $this->musicalWork[] = $musicalWork;
        return $this;
    }

    /**
     * isset musicalWork
     *
     * A Composite containing details of a MusicalWork contained in a Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMusicalWork($index)
    {
        return isset($this->musicalWork[$index]);
    }

    /**
     * unset musicalWork
     *
     * A Composite containing details of a MusicalWork contained in a Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMusicalWork($index)
    {
        unset($this->musicalWork[$index]);
    }

    /**
     * Gets as musicalWork
     *
     * A Composite containing details of a MusicalWork contained in a Resource.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\MusicalWorkForConfirmationType[]
     */
    public function getMusicalWork()
    {
        return $this->musicalWork;
    }

    /**
     * Sets a new musicalWork
     *
     * A Composite containing details of a MusicalWork contained in a Resource.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\MusicalWorkForConfirmationType[] $musicalWork
     * @return self
     */
    public function setMusicalWork(array $musicalWork)
    {
        $this->musicalWork = $musicalWork;
        return $this;
    }
}


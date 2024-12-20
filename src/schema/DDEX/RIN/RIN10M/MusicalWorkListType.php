<?php

namespace DDEX\RIN\RIN10M;

/**
 * Class representing MusicalWorkListType
 *
 * A Composite containing details of one or more Works.
 * XSD Type: MusicalWorkList
 */
class MusicalWorkListType
{
    /**
     * A Composite containing details of a MusicalWork.
     *
     * @var \DDEX\RIN\RIN10M\MusicalWorkType[] $musicalWork
     */
    private $musicalWork = [
        
    ];

    /**
     * Adds as musicalWork
     *
     * A Composite containing details of a MusicalWork.
     *
     * @return self
     * @param \DDEX\RIN\RIN10M\MusicalWorkType $musicalWork
     */
    public function addToMusicalWork(\DDEX\RIN\RIN10M\MusicalWorkType $musicalWork)
    {
        $this->musicalWork[] = $musicalWork;
        return $this;
    }

    /**
     * isset musicalWork
     *
     * A Composite containing details of a MusicalWork.
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
     * A Composite containing details of a MusicalWork.
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
     * A Composite containing details of a MusicalWork.
     *
     * @return \DDEX\RIN\RIN10M\MusicalWorkType[]
     */
    public function getMusicalWork()
    {
        return $this->musicalWork;
    }

    /**
     * Sets a new musicalWork
     *
     * A Composite containing details of a MusicalWork.
     *
     * @param \DDEX\RIN\RIN10M\MusicalWorkType[] $musicalWork
     * @return self
     */
    public function setMusicalWork(array $musicalWork)
    {
        $this->musicalWork = $musicalWork;
        return $this;
    }
}


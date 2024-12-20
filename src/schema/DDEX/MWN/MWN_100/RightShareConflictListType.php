<?php

namespace DDEX\MWN\MWN_100;

/**
 * Class representing RightShareConflictListType
 *
 * A Composite containing details of RightShare conflicts.
 * XSD Type: RightShareConflictList
 */
class RightShareConflictListType
{
    /**
     * A Composite containing details of a RightShare conflict.
     *
     * @var string[] $conflict
     */
    private $conflict = null;

    /**
     * Adds as conflictRightShareReference
     *
     * A Composite containing details of a RightShare conflict.
     *
     * @return self
     * @param string $conflictRightShareReference
     */
    public function addToConflict($conflictRightShareReference)
    {
        $this->conflict[] = $conflictRightShareReference;
        return $this;
    }

    /**
     * isset conflict
     *
     * A Composite containing details of a RightShare conflict.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConflict($index)
    {
        return isset($this->conflict[$index]);
    }

    /**
     * unset conflict
     *
     * A Composite containing details of a RightShare conflict.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConflict($index)
    {
        unset($this->conflict[$index]);
    }

    /**
     * Gets as conflict
     *
     * A Composite containing details of a RightShare conflict.
     *
     * @return string[]
     */
    public function getConflict()
    {
        return $this->conflict;
    }

    /**
     * Sets a new conflict
     *
     * A Composite containing details of a RightShare conflict.
     *
     * @param string $conflict
     * @return self
     */
    public function setConflict(array $conflict)
    {
        $this->conflict = $conflict;
        return $this;
    }
}


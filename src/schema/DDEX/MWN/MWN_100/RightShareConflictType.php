<?php

namespace DDEX\MWN\MWN_100;

/**
 * Class representing RightShareConflictType
 *
 * A Composite containing details of a RightShare conflict.
 * XSD Type: RightShareConflict
 */
class RightShareConflictType
{
    /**
     * A Reference for a RightShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @var string[] $conflictRightShareReference
     */
    private $conflictRightShareReference = [
        
    ];

    /**
     * Adds as conflictRightShareReference
     *
     * A Reference for a RightShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @return self
     * @param string $conflictRightShareReference
     */
    public function addToConflictRightShareReference($conflictRightShareReference)
    {
        $this->conflictRightShareReference[] = $conflictRightShareReference;
        return $this;
    }

    /**
     * isset conflictRightShareReference
     *
     * A Reference for a RightShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConflictRightShareReference($index)
    {
        return isset($this->conflictRightShareReference[$index]);
    }

    /**
     * unset conflictRightShareReference
     *
     * A Reference for a RightShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConflictRightShareReference($index)
    {
        unset($this->conflictRightShareReference[$index]);
    }

    /**
     * Gets as conflictRightShareReference
     *
     * A Reference for a RightShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @return string[]
     */
    public function getConflictRightShareReference()
    {
        return $this->conflictRightShareReference;
    }

    /**
     * Sets a new conflictRightShareReference
     *
     * A Reference for a RightShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @param string $conflictRightShareReference
     * @return self
     */
    public function setConflictRightShareReference(array $conflictRightShareReference)
    {
        $this->conflictRightShareReference = $conflictRightShareReference;
        return $this;
    }
}


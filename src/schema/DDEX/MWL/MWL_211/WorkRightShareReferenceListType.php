<?php

namespace DDEX\MWL\MWL_211;

/**
 * Class representing WorkRightShareReferenceListType
 *
 * A ddex:Composite containing a list of ddex:WorkRightShareReferences.
 * XSD Type: WorkRightShareReferenceList
 */
class WorkRightShareReferenceListType
{
    /**
     * A ddex:Reference for a ddex:RightShare (specific to this ddex:Message). This is a ddex:LocalRightShareAnchorReference starting with the letter S.
     *
     * @var string[] $workRightShareReference
     */
    private $workRightShareReference = [
        
    ];

    /**
     * Adds as workRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare (specific to this ddex:Message). This is a ddex:LocalRightShareAnchorReference starting with the letter S.
     *
     * @return self
     * @param string $workRightShareReference
     */
    public function addToWorkRightShareReference($workRightShareReference)
    {
        $this->workRightShareReference[] = $workRightShareReference;
        return $this;
    }

    /**
     * isset workRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare (specific to this ddex:Message). This is a ddex:LocalRightShareAnchorReference starting with the letter S.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWorkRightShareReference($index)
    {
        return isset($this->workRightShareReference[$index]);
    }

    /**
     * unset workRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare (specific to this ddex:Message). This is a ddex:LocalRightShareAnchorReference starting with the letter S.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWorkRightShareReference($index)
    {
        unset($this->workRightShareReference[$index]);
    }

    /**
     * Gets as workRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare (specific to this ddex:Message). This is a ddex:LocalRightShareAnchorReference starting with the letter S.
     *
     * @return string[]
     */
    public function getWorkRightShareReference()
    {
        return $this->workRightShareReference;
    }

    /**
     * Sets a new workRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare (specific to this ddex:Message). This is a ddex:LocalRightShareAnchorReference starting with the letter S.
     *
     * @param string $workRightShareReference
     * @return self
     */
    public function setWorkRightShareReference(array $workRightShareReference)
    {
        $this->workRightShareReference = $workRightShareReference;
        return $this;
    }
}


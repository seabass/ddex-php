<?php

namespace DDEX\MWN\MWN_100;

/**
 * Class representing RelatedRightShareType
 *
 * A Composite containing details of a RightShare which is related to another RightShare.
 * XSD Type: RelatedRightShare
 */
class RelatedRightShareType
{
    /**
     * A Reference for a RightShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @var string[] $rightShareRightShareReference
     */
    private $rightShareRightShareReference = [
        
    ];

    /**
     * A Type of the relationship between the two RightShares.
     *
     * @var string $rightShareRelationshipType
     */
    private $rightShareRelationshipType = null;

    /**
     * Adds as rightShareRightShareReference
     *
     * A Reference for a RightShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @return self
     * @param string $rightShareRightShareReference
     */
    public function addToRightShareRightShareReference($rightShareRightShareReference)
    {
        $this->rightShareRightShareReference[] = $rightShareRightShareReference;
        return $this;
    }

    /**
     * isset rightShareRightShareReference
     *
     * A Reference for a RightShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightShareRightShareReference($index)
    {
        return isset($this->rightShareRightShareReference[$index]);
    }

    /**
     * unset rightShareRightShareReference
     *
     * A Reference for a RightShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightShareRightShareReference($index)
    {
        unset($this->rightShareRightShareReference[$index]);
    }

    /**
     * Gets as rightShareRightShareReference
     *
     * A Reference for a RightShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @return string[]
     */
    public function getRightShareRightShareReference()
    {
        return $this->rightShareRightShareReference;
    }

    /**
     * Sets a new rightShareRightShareReference
     *
     * A Reference for a RightShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @param string $rightShareRightShareReference
     * @return self
     */
    public function setRightShareRightShareReference(array $rightShareRightShareReference)
    {
        $this->rightShareRightShareReference = $rightShareRightShareReference;
        return $this;
    }

    /**
     * Gets as rightShareRelationshipType
     *
     * A Type of the relationship between the two RightShares.
     *
     * @return string
     */
    public function getRightShareRelationshipType()
    {
        return $this->rightShareRelationshipType;
    }

    /**
     * Sets a new rightShareRelationshipType
     *
     * A Type of the relationship between the two RightShares.
     *
     * @param string $rightShareRelationshipType
     * @return self
     */
    public function setRightShareRelationshipType($rightShareRelationshipType)
    {
        $this->rightShareRelationshipType = $rightShareRelationshipType;
        return $this;
    }
}


<?php

namespace DDEX\LRAW\LRAW_100;

/**
 * Class representing LinkIdType
 *
 * A Composite containing details of Identifiers of a link.
 * XSD Type: LinkId
 */
class LinkIdType
{
    /**
     * The ISLI (International Standard Link Identifier as defined in ISO 17316) for the link.
     *
     * @var string $iSLI
     */
    private $iSLI = null;

    /**
     * A Composite containing details of a ProprietaryIdentifier of the link.
     *
     * @var \DDEX\LRAW\LRAW_100\ProprietaryIdType[] $proprietaryId
     */
    private $proprietaryId = [
        
    ];

    /**
     * Gets as iSLI
     *
     * The ISLI (International Standard Link Identifier as defined in ISO 17316) for the link.
     *
     * @return string
     */
    public function getISLI()
    {
        return $this->iSLI;
    }

    /**
     * Sets a new iSLI
     *
     * The ISLI (International Standard Link Identifier as defined in ISO 17316) for the link.
     *
     * @param string $iSLI
     * @return self
     */
    public function setISLI($iSLI)
    {
        $this->iSLI = $iSLI;
        return $this;
    }

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the link.
     *
     * @return self
     * @param \DDEX\LRAW\LRAW_100\ProprietaryIdType $proprietaryId
     */
    public function addToProprietaryId(\DDEX\LRAW\LRAW_100\ProprietaryIdType $proprietaryId)
    {
        $this->proprietaryId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the link.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProprietaryId($index)
    {
        return isset($this->proprietaryId[$index]);
    }

    /**
     * unset proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the link.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProprietaryId($index)
    {
        unset($this->proprietaryId[$index]);
    }

    /**
     * Gets as proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the link.
     *
     * @return \DDEX\LRAW\LRAW_100\ProprietaryIdType[]
     */
    public function getProprietaryId()
    {
        return $this->proprietaryId;
    }

    /**
     * Sets a new proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the link.
     *
     * @param \DDEX\LRAW\LRAW_100\ProprietaryIdType[] $proprietaryId
     * @return self
     */
    public function setProprietaryId(array $proprietaryId = null)
    {
        $this->proprietaryId = $proprietaryId;
        return $this;
    }
}


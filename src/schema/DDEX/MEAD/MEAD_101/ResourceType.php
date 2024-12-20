<?php

namespace DDEX\MEAD\MEAD_101;

/**
 * Class representing ResourceType
 *
 * A Composite containing details of a DDEX Resource.
 * XSD Type: Resource
 */
class ResourceType
{
    /**
     * The ISRC of the Resource for which information is provided.
     *
     * @var string $iSRC
     */
    private $iSRC = null;

    /**
     * The catalogue number of the Resource for which information is provided.
     *
     * @var string $catalogNumber
     */
    private $catalogNumber = null;

    /**
     * A ProprietaryIdentifier of the Resource for which information is provided.
     *
     * @var string $proprietaryResourceId
     */
    private $proprietaryResourceId = null;

    /**
     * The Title of the Resource for which information is provided.
     *
     * @var \DDEX\MEAD\MEAD_101\ResourceTitleType[] $resourceTitle
     */
    private $resourceTitle = [
        
    ];

    /**
     * A Composite containing details of a DisplayArtist of the Resource for which information is provided.
     *
     * @var \DDEX\MEAD\MEAD_101\DisplayArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * Gets as iSRC
     *
     * The ISRC of the Resource for which information is provided.
     *
     * @return string
     */
    public function getISRC()
    {
        return $this->iSRC;
    }

    /**
     * Sets a new iSRC
     *
     * The ISRC of the Resource for which information is provided.
     *
     * @param string $iSRC
     * @return self
     */
    public function setISRC($iSRC)
    {
        $this->iSRC = $iSRC;
        return $this;
    }

    /**
     * Gets as catalogNumber
     *
     * The catalogue number of the Resource for which information is provided.
     *
     * @return string
     */
    public function getCatalogNumber()
    {
        return $this->catalogNumber;
    }

    /**
     * Sets a new catalogNumber
     *
     * The catalogue number of the Resource for which information is provided.
     *
     * @param string $catalogNumber
     * @return self
     */
    public function setCatalogNumber($catalogNumber)
    {
        $this->catalogNumber = $catalogNumber;
        return $this;
    }

    /**
     * Gets as proprietaryResourceId
     *
     * A ProprietaryIdentifier of the Resource for which information is provided.
     *
     * @return string
     */
    public function getProprietaryResourceId()
    {
        return $this->proprietaryResourceId;
    }

    /**
     * Sets a new proprietaryResourceId
     *
     * A ProprietaryIdentifier of the Resource for which information is provided.
     *
     * @param string $proprietaryResourceId
     * @return self
     */
    public function setProprietaryResourceId($proprietaryResourceId)
    {
        $this->proprietaryResourceId = $proprietaryResourceId;
        return $this;
    }

    /**
     * Adds as resourceTitle
     *
     * The Title of the Resource for which information is provided.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\ResourceTitleType $resourceTitle
     */
    public function addToResourceTitle(\DDEX\MEAD\MEAD_101\ResourceTitleType $resourceTitle)
    {
        $this->resourceTitle[] = $resourceTitle;
        return $this;
    }

    /**
     * isset resourceTitle
     *
     * The Title of the Resource for which information is provided.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceTitle($index)
    {
        return isset($this->resourceTitle[$index]);
    }

    /**
     * unset resourceTitle
     *
     * The Title of the Resource for which information is provided.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceTitle($index)
    {
        unset($this->resourceTitle[$index]);
    }

    /**
     * Gets as resourceTitle
     *
     * The Title of the Resource for which information is provided.
     *
     * @return \DDEX\MEAD\MEAD_101\ResourceTitleType[]
     */
    public function getResourceTitle()
    {
        return $this->resourceTitle;
    }

    /**
     * Sets a new resourceTitle
     *
     * The Title of the Resource for which information is provided.
     *
     * @param \DDEX\MEAD\MEAD_101\ResourceTitleType[] $resourceTitle
     * @return self
     */
    public function setResourceTitle(array $resourceTitle)
    {
        $this->resourceTitle = $resourceTitle;
        return $this;
    }

    /**
     * Adds as displayArtist
     *
     * A Composite containing details of a DisplayArtist of the Resource for which information is provided.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\DisplayArtistType $displayArtist
     */
    public function addToDisplayArtist(\DDEX\MEAD\MEAD_101\DisplayArtistType $displayArtist)
    {
        $this->displayArtist[] = $displayArtist;
        return $this;
    }

    /**
     * isset displayArtist
     *
     * A Composite containing details of a DisplayArtist of the Resource for which information is provided.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayArtist($index)
    {
        return isset($this->displayArtist[$index]);
    }

    /**
     * unset displayArtist
     *
     * A Composite containing details of a DisplayArtist of the Resource for which information is provided.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayArtist($index)
    {
        unset($this->displayArtist[$index]);
    }

    /**
     * Gets as displayArtist
     *
     * A Composite containing details of a DisplayArtist of the Resource for which information is provided.
     *
     * @return \DDEX\MEAD\MEAD_101\DisplayArtistType[]
     */
    public function getDisplayArtist()
    {
        return $this->displayArtist;
    }

    /**
     * Sets a new displayArtist
     *
     * A Composite containing details of a DisplayArtist of the Resource for which information is provided.
     *
     * @param \DDEX\MEAD\MEAD_101\DisplayArtistType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist = null)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }
}


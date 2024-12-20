<?php

namespace DDEX\MEAD\MEAD_110;

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
     * @var \DDEX\MEAD\MEAD_110\ResourceTitleType[] $resourceTitle
     */
    private $resourceTitle = [
        
    ];

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     *
     * @var \DDEX\MEAD\MEAD_110\DisplayArtistNameWithPronunciationType[] $displayArtistName
     */
    private $displayArtistName = [
        
    ];

    /**
     * A Composite containing details of a DisplayArtist of the Resource for which information is provided.
     *
     * @var \DDEX\MEAD\MEAD_110\PartyDescriptorWithPronunciationType[] $displayArtist
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
     * @param \DDEX\MEAD\MEAD_110\ResourceTitleType $resourceTitle
     */
    public function addToResourceTitle(\DDEX\MEAD\MEAD_110\ResourceTitleType $resourceTitle)
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
     * @return \DDEX\MEAD\MEAD_110\ResourceTitleType[]
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
     * @param \DDEX\MEAD\MEAD_110\ResourceTitleType[] $resourceTitle
     * @return self
     */
    public function setResourceTitle(array $resourceTitle)
    {
        $this->resourceTitle = $resourceTitle;
        return $this;
    }

    /**
     * Adds as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\DisplayArtistNameWithPronunciationType $displayArtistName
     */
    public function addToDisplayArtistName(\DDEX\MEAD\MEAD_110\DisplayArtistNameWithPronunciationType $displayArtistName)
    {
        $this->displayArtistName[] = $displayArtistName;
        return $this;
    }

    /**
     * isset displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayArtistName($index)
    {
        return isset($this->displayArtistName[$index]);
    }

    /**
     * unset displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayArtistName($index)
    {
        unset($this->displayArtistName[$index]);
    }

    /**
     * Gets as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     *
     * @return \DDEX\MEAD\MEAD_110\DisplayArtistNameWithPronunciationType[]
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     *
     * @param \DDEX\MEAD\MEAD_110\DisplayArtistNameWithPronunciationType[] $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(array $displayArtistName = null)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }

    /**
     * Adds as displayArtist
     *
     * A Composite containing details of a DisplayArtist of the Resource for which information is provided.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\PartyDescriptorWithPronunciationType $displayArtist
     */
    public function addToDisplayArtist(\DDEX\MEAD\MEAD_110\PartyDescriptorWithPronunciationType $displayArtist)
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
     * @return \DDEX\MEAD\MEAD_110\PartyDescriptorWithPronunciationType[]
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
     * @param \DDEX\MEAD\MEAD_110\PartyDescriptorWithPronunciationType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist = null)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }
}


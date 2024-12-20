<?php

namespace DDEX\PIE\PIE_100;

/**
 * Class representing CreationDescriptionType
 *
 * A Composite containing details of a Description for a Creation.
 * XSD Type: CreationDescription
 */
class CreationDescriptionType
{
    /**
     * A Composite containing details of a Title.
     *
     * @var \DDEX\PIE\PIE_100\TitleWithUDVType[] $title
     */
    private $title = [
        
    ];

    /**
     * A Composite containing the Name used when presenting Artist details of the Creation to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     *
     * @var \DDEX\PIE\PIE_100\DisplayArtistNameType $displayArtistName
     */
    private $displayArtistName = null;

    /**
     * A Composite containing details of the Date and Place at which the Creation was published. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DDEX\PIE\PIE_100\EventDateType $publicationDate
     */
    private $publicationDate = null;

    /**
     * Adds as title
     *
     * A Composite containing details of a Title.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\TitleWithUDVType $title
     */
    public function addToTitle(\DDEX\PIE\PIE_100\TitleWithUDVType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A Composite containing details of a Title.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTitle($index)
    {
        return isset($this->title[$index]);
    }

    /**
     * unset title
     *
     * A Composite containing details of a Title.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTitle($index)
    {
        unset($this->title[$index]);
    }

    /**
     * Gets as title
     *
     * A Composite containing details of a Title.
     *
     * @return \DDEX\PIE\PIE_100\TitleWithUDVType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title.
     *
     * @param \DDEX\PIE\PIE_100\TitleWithUDVType[] $title
     * @return self
     */
    public function setTitle(array $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as displayArtistName
     *
     * A Composite containing the Name used when presenting Artist details of the Creation to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     *
     * @return \DDEX\PIE\PIE_100\DisplayArtistNameType
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * A Composite containing the Name used when presenting Artist details of the Creation to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     *
     * @param \DDEX\PIE\PIE_100\DisplayArtistNameType $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(?\DDEX\PIE\PIE_100\DisplayArtistNameType $displayArtistName = null)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }

    /**
     * Gets as publicationDate
     *
     * A Composite containing details of the Date and Place at which the Creation was published. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DDEX\PIE\PIE_100\EventDateType
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * Sets a new publicationDate
     *
     * A Composite containing details of the Date and Place at which the Creation was published. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DDEX\PIE\PIE_100\EventDateType $publicationDate
     * @return self
     */
    public function setPublicationDate(?\DDEX\PIE\PIE_100\EventDateType $publicationDate = null)
    {
        $this->publicationDate = $publicationDate;
        return $this;
    }
}


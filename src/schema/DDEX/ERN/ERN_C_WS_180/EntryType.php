<?php

namespace DDEX\ERN\ERN_C_WS_180;

/**
 * Class representing EntryType
 *
 * A Message in the ERN Choreography Standard for an atom entry defined by W3C/IETF. The Atom entry construct is defined in section 4.1.2 of the format spec.
 * XSD Type: Entry
 */
class EntryType
{
    /**
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $avsVersionId
     */
    private $avsVersionId = null;

    /**
     * A Composite containing details of the Name, Identifier and Role(s) of an author of a Resource.
     *
     * @var \DDEX\ERN\ERN_C_WS_180\PersonType[] $author
     */
    private $author = [
        
    ];

    /**
     * A Composite containing details of a category.
     *
     * @var \DDEX\ERN\ERN_C_WS_180\CategoryType[] $category
     */
    private $category = [
        
    ];

    /**
     * A Composite containing details of a content.
     *
     * @var \DDEX\ERN\ERN_C_WS_180\ContentType $content
     */
    private $content = null;

    /**
     * A Composite containing details of the Name, Identifier and Role(s) of a contributor to a Resource.
     *
     * @var \DDEX\ERN\ERN_C_WS_180\PersonType[] $contributor
     */
    private $contributor = [
        
    ];

    /**
     * A Composite containing details of an ID.
     *
     * @var string $id
     */
    private $id = null;

    /**
     * A Composite containing details of a link.
     *
     * @var \DDEX\ERN\ERN_C_WS_180\LinkType[] $link
     */
    private $link = [
        
    ];

    /**
     * A Composite containing details of a published.
     *
     * @var \DateTime $published
     */
    private $published = null;

    /**
     * A Composite containing details of rights.
     *
     * @var \DDEX\ERN\ERN_C_WS_180\TextType $rights
     */
    private $rights = null;

    /**
     * A Composite containing details of a source.
     *
     * @var \DDEX\ERN\ERN_C_WS_180\SourceType $source
     */
    private $source = null;

    /**
     * A Composite containing details of a summary.
     *
     * @var \DDEX\ERN\ERN_C_WS_180\TextType $summary
     */
    private $summary = null;

    /**
     * A Composite containing details of a title.
     *
     * @var \DDEX\ERN\ERN_C_WS_180\TextType $title
     */
    private $title = null;

    /**
     * A Composite containing details of an update.
     *
     * @var \DateTime $updated
     */
    private $updated = null;

    /**
     * A Type of Release according to its content, Duration and/or number of components. Note: a ReleaseType is the form in which a ReleaseCreator anticipates offering a Release to Consumers.
     *
     * @var string $releaseType
     */
    private $releaseType = null;

    /**
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @var \DDEX\ERN\ERN_C_WS_180\ReleaseIdForEntryType $releaseId
     */
    private $releaseId = null;

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @var \DDEX\ERN\ERN_C_WS_180\DisplayArtistNameWithDefaultType $displayArtistName
     */
    private $displayArtistName = null;

    /**
     * Gets as avsVersionId
     *
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getAvsVersionId()
    {
        return $this->avsVersionId;
    }

    /**
     * Sets a new avsVersionId
     *
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $avsVersionId
     * @return self
     */
    public function setAvsVersionId($avsVersionId)
    {
        $this->avsVersionId = $avsVersionId;
        return $this;
    }

    /**
     * Adds as author
     *
     * A Composite containing details of the Name, Identifier and Role(s) of an author of a Resource.
     *
     * @return self
     * @param \DDEX\ERN\ERN_C_WS_180\PersonType $author
     */
    public function addToAuthor(\DDEX\ERN\ERN_C_WS_180\PersonType $author)
    {
        $this->author[] = $author;
        return $this;
    }

    /**
     * isset author
     *
     * A Composite containing details of the Name, Identifier and Role(s) of an author of a Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAuthor($index)
    {
        return isset($this->author[$index]);
    }

    /**
     * unset author
     *
     * A Composite containing details of the Name, Identifier and Role(s) of an author of a Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAuthor($index)
    {
        unset($this->author[$index]);
    }

    /**
     * Gets as author
     *
     * A Composite containing details of the Name, Identifier and Role(s) of an author of a Resource.
     *
     * @return \DDEX\ERN\ERN_C_WS_180\PersonType[]
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets a new author
     *
     * A Composite containing details of the Name, Identifier and Role(s) of an author of a Resource.
     *
     * @param \DDEX\ERN\ERN_C_WS_180\PersonType[] $author
     * @return self
     */
    public function setAuthor(array $author = null)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Adds as category
     *
     * A Composite containing details of a category.
     *
     * @return self
     * @param \DDEX\ERN\ERN_C_WS_180\CategoryType $category
     */
    public function addToCategory(\DDEX\ERN\ERN_C_WS_180\CategoryType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * A Composite containing details of a category.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategory($index)
    {
        return isset($this->category[$index]);
    }

    /**
     * unset category
     *
     * A Composite containing details of a category.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategory($index)
    {
        unset($this->category[$index]);
    }

    /**
     * Gets as category
     *
     * A Composite containing details of a category.
     *
     * @return \DDEX\ERN\ERN_C_WS_180\CategoryType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * A Composite containing details of a category.
     *
     * @param \DDEX\ERN\ERN_C_WS_180\CategoryType[] $category
     * @return self
     */
    public function setCategory(array $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as content
     *
     * A Composite containing details of a content.
     *
     * @return \DDEX\ERN\ERN_C_WS_180\ContentType
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * A Composite containing details of a content.
     *
     * @param \DDEX\ERN\ERN_C_WS_180\ContentType $content
     * @return self
     */
    public function setContent(?\DDEX\ERN\ERN_C_WS_180\ContentType $content = null)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Adds as contributor
     *
     * A Composite containing details of the Name, Identifier and Role(s) of a contributor to a Resource.
     *
     * @return self
     * @param \DDEX\ERN\ERN_C_WS_180\PersonType $contributor
     */
    public function addToContributor(\DDEX\ERN\ERN_C_WS_180\PersonType $contributor)
    {
        $this->contributor[] = $contributor;
        return $this;
    }

    /**
     * isset contributor
     *
     * A Composite containing details of the Name, Identifier and Role(s) of a contributor to a Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContributor($index)
    {
        return isset($this->contributor[$index]);
    }

    /**
     * unset contributor
     *
     * A Composite containing details of the Name, Identifier and Role(s) of a contributor to a Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContributor($index)
    {
        unset($this->contributor[$index]);
    }

    /**
     * Gets as contributor
     *
     * A Composite containing details of the Name, Identifier and Role(s) of a contributor to a Resource.
     *
     * @return \DDEX\ERN\ERN_C_WS_180\PersonType[]
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * Sets a new contributor
     *
     * A Composite containing details of the Name, Identifier and Role(s) of a contributor to a Resource.
     *
     * @param \DDEX\ERN\ERN_C_WS_180\PersonType[] $contributor
     * @return self
     */
    public function setContributor(array $contributor = null)
    {
        $this->contributor = $contributor;
        return $this;
    }

    /**
     * Gets as id
     *
     * A Composite containing details of an ID.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * A Composite containing details of an ID.
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Adds as link
     *
     * A Composite containing details of a link.
     *
     * @return self
     * @param \DDEX\ERN\ERN_C_WS_180\LinkType $link
     */
    public function addToLink(\DDEX\ERN\ERN_C_WS_180\LinkType $link)
    {
        $this->link[] = $link;
        return $this;
    }

    /**
     * isset link
     *
     * A Composite containing details of a link.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLink($index)
    {
        return isset($this->link[$index]);
    }

    /**
     * unset link
     *
     * A Composite containing details of a link.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLink($index)
    {
        unset($this->link[$index]);
    }

    /**
     * Gets as link
     *
     * A Composite containing details of a link.
     *
     * @return \DDEX\ERN\ERN_C_WS_180\LinkType[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets a new link
     *
     * A Composite containing details of a link.
     *
     * @param \DDEX\ERN\ERN_C_WS_180\LinkType[] $link
     * @return self
     */
    public function setLink(array $link = null)
    {
        $this->link = $link;
        return $this;
    }

    /**
     * Gets as published
     *
     * A Composite containing details of a published.
     *
     * @return \DateTime
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Sets a new published
     *
     * A Composite containing details of a published.
     *
     * @param \DateTime $published
     * @return self
     */
    public function setPublished(\DateTime $published = null)
    {
        $this->published = $published;
        return $this;
    }

    /**
     * Gets as rights
     *
     * A Composite containing details of rights.
     *
     * @return \DDEX\ERN\ERN_C_WS_180\TextType
     */
    public function getRights()
    {
        return $this->rights;
    }

    /**
     * Sets a new rights
     *
     * A Composite containing details of rights.
     *
     * @param \DDEX\ERN\ERN_C_WS_180\TextType $rights
     * @return self
     */
    public function setRights(?\DDEX\ERN\ERN_C_WS_180\TextType $rights = null)
    {
        $this->rights = $rights;
        return $this;
    }

    /**
     * Gets as source
     *
     * A Composite containing details of a source.
     *
     * @return \DDEX\ERN\ERN_C_WS_180\SourceType
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * A Composite containing details of a source.
     *
     * @param \DDEX\ERN\ERN_C_WS_180\SourceType $source
     * @return self
     */
    public function setSource(?\DDEX\ERN\ERN_C_WS_180\SourceType $source = null)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as summary
     *
     * A Composite containing details of a summary.
     *
     * @return \DDEX\ERN\ERN_C_WS_180\TextType
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Sets a new summary
     *
     * A Composite containing details of a summary.
     *
     * @param \DDEX\ERN\ERN_C_WS_180\TextType $summary
     * @return self
     */
    public function setSummary(?\DDEX\ERN\ERN_C_WS_180\TextType $summary = null)
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * Gets as title
     *
     * A Composite containing details of a title.
     *
     * @return \DDEX\ERN\ERN_C_WS_180\TextType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a title.
     *
     * @param \DDEX\ERN\ERN_C_WS_180\TextType $title
     * @return self
     */
    public function setTitle(?\DDEX\ERN\ERN_C_WS_180\TextType $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as updated
     *
     * A Composite containing details of an update.
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Sets a new updated
     *
     * A Composite containing details of an update.
     *
     * @param \DateTime $updated
     * @return self
     */
    public function setUpdated(\DateTime $updated = null)
    {
        $this->updated = $updated;
        return $this;
    }

    /**
     * Gets as releaseType
     *
     * A Type of Release according to its content, Duration and/or number of components. Note: a ReleaseType is the form in which a ReleaseCreator anticipates offering a Release to Consumers.
     *
     * @return string
     */
    public function getReleaseType()
    {
        return $this->releaseType;
    }

    /**
     * Sets a new releaseType
     *
     * A Type of Release according to its content, Duration and/or number of components. Note: a ReleaseType is the form in which a ReleaseCreator anticipates offering a Release to Consumers.
     *
     * @param string $releaseType
     * @return self
     */
    public function setReleaseType($releaseType)
    {
        $this->releaseType = $releaseType;
        return $this;
    }

    /**
     * Gets as releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @return \DDEX\ERN\ERN_C_WS_180\ReleaseIdForEntryType
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @param \DDEX\ERN\ERN_C_WS_180\ReleaseIdForEntryType $releaseId
     * @return self
     */
    public function setReleaseId(?\DDEX\ERN\ERN_C_WS_180\ReleaseIdForEntryType $releaseId = null)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Gets as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @return \DDEX\ERN\ERN_C_WS_180\DisplayArtistNameWithDefaultType
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @param \DDEX\ERN\ERN_C_WS_180\DisplayArtistNameWithDefaultType $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(?\DDEX\ERN\ERN_C_WS_180\DisplayArtistNameWithDefaultType $displayArtistName = null)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }
}


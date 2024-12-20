<?php

namespace DDEX\MWN\MWN_US_LOD_100\Entry;

/**
 * Class representing EntryAnonymousPHPType
 */
class EntryAnonymousPHPType
{
    /**
     * A Composite containing details of the Name, Identifier and Role(s) of an author of a Resource.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\PersonType[] $author
     */
    private $author = [
        
    ];

    /**
     * A Composite containing details of a category.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\CategoryType[] $category
     */
    private $category = [
        
    ];

    /**
     * A Composite containing details of a content.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ContentType $content
     */
    private $content = null;

    /**
     * A Composite containing details of the Name, Identifier and Role(s) of a contributor to a Resource.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\PersonType[] $contributor
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
     * @var \DDEX\MWN\MWN_US_LOD_100\LinkType[] $link
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
     * @var \DDEX\MWN\MWN_US_LOD_100\TextType $rights
     */
    private $rights = null;

    /**
     * A Composite containing details of a source.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\SourceType $source
     */
    private $source = null;

    /**
     * A Composite containing details of a summary.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\TextType $summary
     */
    private $summary = null;

    /**
     * A Composite containing details of a ReferenceTitle of the MusicalWork.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ReferenceTitleType $title
     */
    private $title = null;

    /**
     * A Composite containing details of an update.
     *
     * @var \DateTime $updated
     */
    private $updated = null;

    /**
     * A Composite containing details of an Identifier of the Request to which the Notification is a reply.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ProprietaryIdType $requestId
     */
    private $requestId = null;

    /**
     * A Type of Message that can be downloaded from the atom feed’s link. If this element is not present, then the Message is meant to be a message as defined in mc-notif/11.
     *
     * @var string $messageType
     */
    private $messageType = null;

    /**
     * A Composite containing details of an Identifier of the Notification.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ProprietaryIdType $notificationId
     */
    private $notificationId = null;

    /**
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\MusicalWorkIdType $musicalWorkId
     */
    private $musicalWorkId = null;

    /**
     * A Composite containing details a MusicalWorkContributor to the MusicalWork.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\AtomWriterType[] $writer
     */
    private $writer = [
        
    ];

    /**
     * Adds as author
     *
     * A Composite containing details of the Name, Identifier and Role(s) of an author of a Resource.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\PersonType $author
     */
    public function addToAuthor(\DDEX\MWN\MWN_US_LOD_100\PersonType $author)
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
     * @return \DDEX\MWN\MWN_US_LOD_100\PersonType[]
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
     * @param \DDEX\MWN\MWN_US_LOD_100\PersonType[] $author
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
     * @param \DDEX\MWN\MWN_US_LOD_100\CategoryType $category
     */
    public function addToCategory(\DDEX\MWN\MWN_US_LOD_100\CategoryType $category)
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
     * @return \DDEX\MWN\MWN_US_LOD_100\CategoryType[]
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
     * @param \DDEX\MWN\MWN_US_LOD_100\CategoryType[] $category
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
     * @return \DDEX\MWN\MWN_US_LOD_100\ContentType
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
     * @param \DDEX\MWN\MWN_US_LOD_100\ContentType $content
     * @return self
     */
    public function setContent(?\DDEX\MWN\MWN_US_LOD_100\ContentType $content = null)
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
     * @param \DDEX\MWN\MWN_US_LOD_100\PersonType $contributor
     */
    public function addToContributor(\DDEX\MWN\MWN_US_LOD_100\PersonType $contributor)
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
     * @return \DDEX\MWN\MWN_US_LOD_100\PersonType[]
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
     * @param \DDEX\MWN\MWN_US_LOD_100\PersonType[] $contributor
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
     * @param \DDEX\MWN\MWN_US_LOD_100\LinkType $link
     */
    public function addToLink(\DDEX\MWN\MWN_US_LOD_100\LinkType $link)
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
     * @return \DDEX\MWN\MWN_US_LOD_100\LinkType[]
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
     * @param \DDEX\MWN\MWN_US_LOD_100\LinkType[] $link
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
     * @return \DDEX\MWN\MWN_US_LOD_100\TextType
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
     * @param \DDEX\MWN\MWN_US_LOD_100\TextType $rights
     * @return self
     */
    public function setRights(?\DDEX\MWN\MWN_US_LOD_100\TextType $rights = null)
    {
        $this->rights = $rights;
        return $this;
    }

    /**
     * Gets as source
     *
     * A Composite containing details of a source.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\SourceType
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
     * @param \DDEX\MWN\MWN_US_LOD_100\SourceType $source
     * @return self
     */
    public function setSource(?\DDEX\MWN\MWN_US_LOD_100\SourceType $source = null)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as summary
     *
     * A Composite containing details of a summary.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\TextType
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
     * @param \DDEX\MWN\MWN_US_LOD_100\TextType $summary
     * @return self
     */
    public function setSummary(?\DDEX\MWN\MWN_US_LOD_100\TextType $summary = null)
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * Gets as title
     *
     * A Composite containing details of a ReferenceTitle of the MusicalWork.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\ReferenceTitleType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a ReferenceTitle of the MusicalWork.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\ReferenceTitleType $title
     * @return self
     */
    public function setTitle(?\DDEX\MWN\MWN_US_LOD_100\ReferenceTitleType $title = null)
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
     * Gets as requestId
     *
     * A Composite containing details of an Identifier of the Request to which the Notification is a reply.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\ProprietaryIdType
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * Sets a new requestId
     *
     * A Composite containing details of an Identifier of the Request to which the Notification is a reply.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\ProprietaryIdType $requestId
     * @return self
     */
    public function setRequestId(?\DDEX\MWN\MWN_US_LOD_100\ProprietaryIdType $requestId = null)
    {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * Gets as messageType
     *
     * A Type of Message that can be downloaded from the atom feed’s link. If this element is not present, then the Message is meant to be a message as defined in mc-notif/11.
     *
     * @return string
     */
    public function getMessageType()
    {
        return $this->messageType;
    }

    /**
     * Sets a new messageType
     *
     * A Type of Message that can be downloaded from the atom feed’s link. If this element is not present, then the Message is meant to be a message as defined in mc-notif/11.
     *
     * @param string $messageType
     * @return self
     */
    public function setMessageType($messageType)
    {
        $this->messageType = $messageType;
        return $this;
    }

    /**
     * Gets as notificationId
     *
     * A Composite containing details of an Identifier of the Notification.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\ProprietaryIdType
     */
    public function getNotificationId()
    {
        return $this->notificationId;
    }

    /**
     * Sets a new notificationId
     *
     * A Composite containing details of an Identifier of the Notification.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\ProprietaryIdType $notificationId
     * @return self
     */
    public function setNotificationId(?\DDEX\MWN\MWN_US_LOD_100\ProprietaryIdType $notificationId = null)
    {
        $this->notificationId = $notificationId;
        return $this;
    }

    /**
     * Gets as musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\MusicalWorkIdType
     */
    public function getMusicalWorkId()
    {
        return $this->musicalWorkId;
    }

    /**
     * Sets a new musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\MusicalWorkIdType $musicalWorkId
     * @return self
     */
    public function setMusicalWorkId(?\DDEX\MWN\MWN_US_LOD_100\MusicalWorkIdType $musicalWorkId = null)
    {
        $this->musicalWorkId = $musicalWorkId;
        return $this;
    }

    /**
     * Adds as writer
     *
     * A Composite containing details a MusicalWorkContributor to the MusicalWork.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\AtomWriterType $writer
     */
    public function addToWriter(\DDEX\MWN\MWN_US_LOD_100\AtomWriterType $writer)
    {
        $this->writer[] = $writer;
        return $this;
    }

    /**
     * isset writer
     *
     * A Composite containing details a MusicalWorkContributor to the MusicalWork.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWriter($index)
    {
        return isset($this->writer[$index]);
    }

    /**
     * unset writer
     *
     * A Composite containing details a MusicalWorkContributor to the MusicalWork.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWriter($index)
    {
        unset($this->writer[$index]);
    }

    /**
     * Gets as writer
     *
     * A Composite containing details a MusicalWorkContributor to the MusicalWork.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\AtomWriterType[]
     */
    public function getWriter()
    {
        return $this->writer;
    }

    /**
     * Sets a new writer
     *
     * A Composite containing details a MusicalWorkContributor to the MusicalWork.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\AtomWriterType[] $writer
     * @return self
     */
    public function setWriter(array $writer = null)
    {
        $this->writer = $writer;
        return $this;
    }
}


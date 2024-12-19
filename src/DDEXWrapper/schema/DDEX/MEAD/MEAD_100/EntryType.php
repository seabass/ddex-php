<?php

namespace DDEX\MEAD\MEAD_100;

/**
 * Class representing EntryType
 *
 * A Composite containing details of an entry.
 * XSD Type: Entry
 */
class EntryType
{
    /**
     * A Composite containing details of the Name, Identifier and Role(s) of an author of a Resource.
     *
     * @var \DDEX\MEAD\MEAD_100\PersonType[] $author
     */
    private $author = [
        
    ];

    /**
     * A Composite containing details of a category.
     *
     * @var \DDEX\MEAD\MEAD_100\CategoryType[] $category
     */
    private $category = [
        
    ];

    /**
     * A Composite containing details of a content.
     *
     * @var \DDEX\MEAD\MEAD_100\ContentType $content
     */
    private $content = null;

    /**
     * A Composite containing details of the Name, Identifier and Role(s) of a contributor to a Resource.
     *
     * @var \DDEX\MEAD\MEAD_100\PersonType[] $contributor
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
     * @var \DDEX\MEAD\MEAD_100\LinkType[] $link
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
     * @var \DDEX\MEAD\MEAD_100\TextType $rights
     */
    private $rights = null;

    /**
     * A Composite containing details of a source.
     *
     * @var \DDEX\MEAD\MEAD_100\SourceType $source
     */
    private $source = null;

    /**
     * A Composite containing details of a summary.
     *
     * @var \DDEX\MEAD\MEAD_100\TextType $summary
     */
    private $summary = null;

    /**
     * A Composite containing details of a title. The title should contain three pieces of information separated by a semicolon and a space character: (1) the DPID of the message sender (without dashes); (2) the subscription ID; and (3) the Date when the entry was added to the feed queue (in the ISO format yyyy-mm-dd).
     *
     * @var \DDEX\MEAD\MEAD_100\TextType $title
     */
    private $title = null;

    /**
     * A Composite containing details of an update.
     *
     * @var \DateTime $updated
     */
    private $updated = null;

    /**
     * An Identifier of the subscription to which the Notification is a reply.
     *
     * @var string $subscriptionId
     */
    private $subscriptionId = null;

    /**
     * Adds as author
     *
     * A Composite containing details of the Name, Identifier and Role(s) of an author of a Resource.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\PersonType $author
     */
    public function addToAuthor(\DDEX\MEAD\MEAD_100\PersonType $author)
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
     * @return \DDEX\MEAD\MEAD_100\PersonType[]
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
     * @param \DDEX\MEAD\MEAD_100\PersonType[] $author
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
     * @param \DDEX\MEAD\MEAD_100\CategoryType $category
     */
    public function addToCategory(\DDEX\MEAD\MEAD_100\CategoryType $category)
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
     * @return \DDEX\MEAD\MEAD_100\CategoryType[]
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
     * @param \DDEX\MEAD\MEAD_100\CategoryType[] $category
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
     * @return \DDEX\MEAD\MEAD_100\ContentType
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
     * @param \DDEX\MEAD\MEAD_100\ContentType $content
     * @return self
     */
    public function setContent(?\DDEX\MEAD\MEAD_100\ContentType $content = null)
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
     * @param \DDEX\MEAD\MEAD_100\PersonType $contributor
     */
    public function addToContributor(\DDEX\MEAD\MEAD_100\PersonType $contributor)
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
     * @return \DDEX\MEAD\MEAD_100\PersonType[]
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
     * @param \DDEX\MEAD\MEAD_100\PersonType[] $contributor
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
     * @param \DDEX\MEAD\MEAD_100\LinkType $link
     */
    public function addToLink(\DDEX\MEAD\MEAD_100\LinkType $link)
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
     * @return \DDEX\MEAD\MEAD_100\LinkType[]
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
     * @param \DDEX\MEAD\MEAD_100\LinkType[] $link
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
     * @return \DDEX\MEAD\MEAD_100\TextType
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
     * @param \DDEX\MEAD\MEAD_100\TextType $rights
     * @return self
     */
    public function setRights(?\DDEX\MEAD\MEAD_100\TextType $rights = null)
    {
        $this->rights = $rights;
        return $this;
    }

    /**
     * Gets as source
     *
     * A Composite containing details of a source.
     *
     * @return \DDEX\MEAD\MEAD_100\SourceType
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
     * @param \DDEX\MEAD\MEAD_100\SourceType $source
     * @return self
     */
    public function setSource(?\DDEX\MEAD\MEAD_100\SourceType $source = null)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as summary
     *
     * A Composite containing details of a summary.
     *
     * @return \DDEX\MEAD\MEAD_100\TextType
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
     * @param \DDEX\MEAD\MEAD_100\TextType $summary
     * @return self
     */
    public function setSummary(?\DDEX\MEAD\MEAD_100\TextType $summary = null)
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * Gets as title
     *
     * A Composite containing details of a title. The title should contain three pieces of information separated by a semicolon and a space character: (1) the DPID of the message sender (without dashes); (2) the subscription ID; and (3) the Date when the entry was added to the feed queue (in the ISO format yyyy-mm-dd).
     *
     * @return \DDEX\MEAD\MEAD_100\TextType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a title. The title should contain three pieces of information separated by a semicolon and a space character: (1) the DPID of the message sender (without dashes); (2) the subscription ID; and (3) the Date when the entry was added to the feed queue (in the ISO format yyyy-mm-dd).
     *
     * @param \DDEX\MEAD\MEAD_100\TextType $title
     * @return self
     */
    public function setTitle(?\DDEX\MEAD\MEAD_100\TextType $title = null)
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
     * Gets as subscriptionId
     *
     * An Identifier of the subscription to which the Notification is a reply.
     *
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * Sets a new subscriptionId
     *
     * An Identifier of the subscription to which the Notification is a reply.
     *
     * @param string $subscriptionId
     * @return self
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;
        return $this;
    }
}


<?php

namespace DDEX\MWN\MWN_US_LIC_100\Feed;

/**
 * Class representing FeedAnonymousPHPType
 */
class FeedAnonymousPHPType
{
    /**
     * A Composite containing details of the Name, Identifier and Role(s) of an author of a Resource.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\PersonType[] $author
     */
    private $author = [
        
    ];

    /**
     * A Composite containing details of a category.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\CategoryType[] $category
     */
    private $category = [
        
    ];

    /**
     * A Composite containing details of the Name, Identifier and Role(s) of a contributor to a Resource.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\PersonType[] $contributor
     */
    private $contributor = [
        
    ];

    /**
     * A Composite containing details of a generator.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\GeneratorType $generator
     */
    private $generator = null;

    /**
     * A Composite containing details of an icon.
     *
     * @var string $icon
     */
    private $icon = null;

    /**
     * A Composite containing details of an ID.
     *
     * @var string $id
     */
    private $id = null;

    /**
     * A Composite containing details of a link.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\LinkType[] $link
     */
    private $link = [
        
    ];

    /**
     * A Composite containing details of a logo.
     *
     * @var string $logo
     */
    private $logo = null;

    /**
     * A Composite containing details of rights.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\TextType $rights
     */
    private $rights = null;

    /**
     * A Composite containing details of a subtitle.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\TextType $subtitle
     */
    private $subtitle = null;

    /**
     * A Composite containing details of a title.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\TextType $title
     */
    private $title = null;

    /**
     * A Composite containing details of an update.
     *
     * @var \DateTime $updated
     */
    private $updated = null;

    /**
     * A Composite containing details of an entry.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\EntryType[] $entry
     */
    private $entry = [
        
    ];

    /**
     * Adds as author
     *
     * A Composite containing details of the Name, Identifier and Role(s) of an author of a Resource.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_100\PersonType $author
     */
    public function addToAuthor(\DDEX\MWN\MWN_US_LIC_100\PersonType $author)
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
     * @return \DDEX\MWN\MWN_US_LIC_100\PersonType[]
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
     * @param \DDEX\MWN\MWN_US_LIC_100\PersonType[] $author
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
     * @param \DDEX\MWN\MWN_US_LIC_100\CategoryType $category
     */
    public function addToCategory(\DDEX\MWN\MWN_US_LIC_100\CategoryType $category)
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
     * @return \DDEX\MWN\MWN_US_LIC_100\CategoryType[]
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
     * @param \DDEX\MWN\MWN_US_LIC_100\CategoryType[] $category
     * @return self
     */
    public function setCategory(array $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Adds as contributor
     *
     * A Composite containing details of the Name, Identifier and Role(s) of a contributor to a Resource.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_100\PersonType $contributor
     */
    public function addToContributor(\DDEX\MWN\MWN_US_LIC_100\PersonType $contributor)
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
     * @return \DDEX\MWN\MWN_US_LIC_100\PersonType[]
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
     * @param \DDEX\MWN\MWN_US_LIC_100\PersonType[] $contributor
     * @return self
     */
    public function setContributor(array $contributor = null)
    {
        $this->contributor = $contributor;
        return $this;
    }

    /**
     * Gets as generator
     *
     * A Composite containing details of a generator.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\GeneratorType
     */
    public function getGenerator()
    {
        return $this->generator;
    }

    /**
     * Sets a new generator
     *
     * A Composite containing details of a generator.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\GeneratorType $generator
     * @return self
     */
    public function setGenerator(?\DDEX\MWN\MWN_US_LIC_100\GeneratorType $generator = null)
    {
        $this->generator = $generator;
        return $this;
    }

    /**
     * Gets as icon
     *
     * A Composite containing details of an icon.
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Sets a new icon
     *
     * A Composite containing details of an icon.
     *
     * @param string $icon
     * @return self
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
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
     * @param \DDEX\MWN\MWN_US_LIC_100\LinkType $link
     */
    public function addToLink(\DDEX\MWN\MWN_US_LIC_100\LinkType $link)
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
     * @return \DDEX\MWN\MWN_US_LIC_100\LinkType[]
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
     * @param \DDEX\MWN\MWN_US_LIC_100\LinkType[] $link
     * @return self
     */
    public function setLink(array $link = null)
    {
        $this->link = $link;
        return $this;
    }

    /**
     * Gets as logo
     *
     * A Composite containing details of a logo.
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Sets a new logo
     *
     * A Composite containing details of a logo.
     *
     * @param string $logo
     * @return self
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * Gets as rights
     *
     * A Composite containing details of rights.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\TextType
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
     * @param \DDEX\MWN\MWN_US_LIC_100\TextType $rights
     * @return self
     */
    public function setRights(?\DDEX\MWN\MWN_US_LIC_100\TextType $rights = null)
    {
        $this->rights = $rights;
        return $this;
    }

    /**
     * Gets as subtitle
     *
     * A Composite containing details of a subtitle.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\TextType
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Sets a new subtitle
     *
     * A Composite containing details of a subtitle.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\TextType $subtitle
     * @return self
     */
    public function setSubtitle(?\DDEX\MWN\MWN_US_LIC_100\TextType $subtitle = null)
    {
        $this->subtitle = $subtitle;
        return $this;
    }

    /**
     * Gets as title
     *
     * A Composite containing details of a title.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\TextType
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
     * @param \DDEX\MWN\MWN_US_LIC_100\TextType $title
     * @return self
     */
    public function setTitle(?\DDEX\MWN\MWN_US_LIC_100\TextType $title = null)
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
     * Adds as entry
     *
     * A Composite containing details of an entry.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_100\EntryType $entry
     */
    public function addToEntry(\DDEX\MWN\MWN_US_LIC_100\EntryType $entry)
    {
        $this->entry[] = $entry;
        return $this;
    }

    /**
     * isset entry
     *
     * A Composite containing details of an entry.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEntry($index)
    {
        return isset($this->entry[$index]);
    }

    /**
     * unset entry
     *
     * A Composite containing details of an entry.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEntry($index)
    {
        unset($this->entry[$index]);
    }

    /**
     * Gets as entry
     *
     * A Composite containing details of an entry.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\EntryType[]
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Sets a new entry
     *
     * A Composite containing details of an entry.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\EntryType[] $entry
     * @return self
     */
    public function setEntry(array $entry = null)
    {
        $this->entry = $entry;
        return $this;
    }
}


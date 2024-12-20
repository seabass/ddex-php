<?php

namespace DDEX\RIN\RIN_210;

/**
 * Class representing MusicalWorkType
 *
 * A Composite containing details of a MusicalWork.
 * XSD Type: MusicalWork
 */
class MusicalWorkType
{
    /**
     * The Flag indicating whether the MusicalWork Element was updated (=true) or not (=false). When this Boolean Flag is set to true, the MessageRecipient is expected to replace any previously provided MusicalWork data with the now provided data. This attribute is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
     *
     * @var bool $isUpdated
     */
    private $isUpdated = null;

    /**
     * The Language and script for the Elements of the MusicalWork as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
     *
     * @var \DDEX\RIN\RIN_210\MusicalWorkIdType[] $musicalWorkId
     */
    private $musicalWorkId = [
        
    ];

    /**
     * The Identifier (specific to the File) of the MusicalWork within the Release which contains it. This is a LocalMusicalWorkAnchor starting with the letter W.
     *
     * @var string $musicalWorkReference
     */
    private $musicalWorkReference = null;

    /**
     * A Composite containing details of a Title of the MusicalWork.
     *
     * @var \DDEX\RIN\RIN_210\TitleWithUDVType[] $title
     */
    private $title = [
        
    ];

    /**
     * A Composite containing details of an alternate Title of the MusicalWork.
     *
     * @var \DDEX\RIN\RIN_210\TitleWithUDVType[] $alternateTitle
     */
    private $alternateTitle = [
        
    ];

    /**
     * A Composite containing details of the Date at which the MusicalWork was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DDEX\RIN\RIN_210\EventDateType $creationDate
     */
    private $creationDate = null;

    /**
     * The Lyrics of the MusicalWork.
     *
     * @var string $lyrics
     */
    private $lyrics = null;

    /**
     * A Composite containing a human-readable Comment about the MusicalWork.
     *
     * @var \DDEX\RIN\RIN_210\CommentType $comment
     */
    private $comment = null;

    /**
     * A Composite containing details of the Type of the MusicalWork.
     *
     * @var \DDEX\RIN\RIN_210\MusicalWorkTypeType[] $musicalWorkType
     */
    private $musicalWorkType = [
        
    ];

    /**
     * A Composite containing details of a MusicalWorkContributor to the MusicalWork.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @var \DDEX\RIN\RIN_210\MusicalWorkContributorReferenceType[] $contributor
     */
    private $contributor = [
        
    ];

    /**
     * Gets as isUpdated
     *
     * The Flag indicating whether the MusicalWork Element was updated (=true) or not (=false). When this Boolean Flag is set to true, the MessageRecipient is expected to replace any previously provided MusicalWork data with the now provided data. This attribute is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
     *
     * @return bool
     */
    public function getIsUpdated()
    {
        return $this->isUpdated;
    }

    /**
     * Sets a new isUpdated
     *
     * The Flag indicating whether the MusicalWork Element was updated (=true) or not (=false). When this Boolean Flag is set to true, the MessageRecipient is expected to replace any previously provided MusicalWork data with the now provided data. This attribute is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
     *
     * @param bool $isUpdated
     * @return self
     */
    public function setIsUpdated($isUpdated)
    {
        $this->isUpdated = $isUpdated;
        return $this;
    }

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the MusicalWork as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getLanguageAndScriptCode()
    {
        return $this->languageAndScriptCode;
    }

    /**
     * Sets a new languageAndScriptCode
     *
     * The Language and script for the Elements of the MusicalWork as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $languageAndScriptCode
     * @return self
     */
    public function setLanguageAndScriptCode($languageAndScriptCode)
    {
        $this->languageAndScriptCode = $languageAndScriptCode;
        return $this;
    }

    /**
     * Adds as musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
     *
     * @return self
     * @param \DDEX\RIN\RIN_210\MusicalWorkIdType $musicalWorkId
     */
    public function addToMusicalWorkId(\DDEX\RIN\RIN_210\MusicalWorkIdType $musicalWorkId)
    {
        $this->musicalWorkId[] = $musicalWorkId;
        return $this;
    }

    /**
     * isset musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMusicalWorkId($index)
    {
        return isset($this->musicalWorkId[$index]);
    }

    /**
     * unset musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMusicalWorkId($index)
    {
        unset($this->musicalWorkId[$index]);
    }

    /**
     * Gets as musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
     *
     * @return \DDEX\RIN\RIN_210\MusicalWorkIdType[]
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
     * @param \DDEX\RIN\RIN_210\MusicalWorkIdType[] $musicalWorkId
     * @return self
     */
    public function setMusicalWorkId(array $musicalWorkId = null)
    {
        $this->musicalWorkId = $musicalWorkId;
        return $this;
    }

    /**
     * Gets as musicalWorkReference
     *
     * The Identifier (specific to the File) of the MusicalWork within the Release which contains it. This is a LocalMusicalWorkAnchor starting with the letter W.
     *
     * @return string
     */
    public function getMusicalWorkReference()
    {
        return $this->musicalWorkReference;
    }

    /**
     * Sets a new musicalWorkReference
     *
     * The Identifier (specific to the File) of the MusicalWork within the Release which contains it. This is a LocalMusicalWorkAnchor starting with the letter W.
     *
     * @param string $musicalWorkReference
     * @return self
     */
    public function setMusicalWorkReference($musicalWorkReference)
    {
        $this->musicalWorkReference = $musicalWorkReference;
        return $this;
    }

    /**
     * Adds as title
     *
     * A Composite containing details of a Title of the MusicalWork.
     *
     * @return self
     * @param \DDEX\RIN\RIN_210\TitleWithUDVType $title
     */
    public function addToTitle(\DDEX\RIN\RIN_210\TitleWithUDVType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A Composite containing details of a Title of the MusicalWork.
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
     * A Composite containing details of a Title of the MusicalWork.
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
     * A Composite containing details of a Title of the MusicalWork.
     *
     * @return \DDEX\RIN\RIN_210\TitleWithUDVType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title of the MusicalWork.
     *
     * @param \DDEX\RIN\RIN_210\TitleWithUDVType[] $title
     * @return self
     */
    public function setTitle(array $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Adds as alternateTitle
     *
     * A Composite containing details of an alternate Title of the MusicalWork.
     *
     * @return self
     * @param \DDEX\RIN\RIN_210\TitleWithUDVType $alternateTitle
     */
    public function addToAlternateTitle(\DDEX\RIN\RIN_210\TitleWithUDVType $alternateTitle)
    {
        $this->alternateTitle[] = $alternateTitle;
        return $this;
    }

    /**
     * isset alternateTitle
     *
     * A Composite containing details of an alternate Title of the MusicalWork.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAlternateTitle($index)
    {
        return isset($this->alternateTitle[$index]);
    }

    /**
     * unset alternateTitle
     *
     * A Composite containing details of an alternate Title of the MusicalWork.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAlternateTitle($index)
    {
        unset($this->alternateTitle[$index]);
    }

    /**
     * Gets as alternateTitle
     *
     * A Composite containing details of an alternate Title of the MusicalWork.
     *
     * @return \DDEX\RIN\RIN_210\TitleWithUDVType[]
     */
    public function getAlternateTitle()
    {
        return $this->alternateTitle;
    }

    /**
     * Sets a new alternateTitle
     *
     * A Composite containing details of an alternate Title of the MusicalWork.
     *
     * @param \DDEX\RIN\RIN_210\TitleWithUDVType[] $alternateTitle
     * @return self
     */
    public function setAlternateTitle(array $alternateTitle = null)
    {
        $this->alternateTitle = $alternateTitle;
        return $this;
    }

    /**
     * Gets as creationDate
     *
     * A Composite containing details of the Date at which the MusicalWork was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DDEX\RIN\RIN_210\EventDateType
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Sets a new creationDate
     *
     * A Composite containing details of the Date at which the MusicalWork was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DDEX\RIN\RIN_210\EventDateType $creationDate
     * @return self
     */
    public function setCreationDate(?\DDEX\RIN\RIN_210\EventDateType $creationDate = null)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * Gets as lyrics
     *
     * The Lyrics of the MusicalWork.
     *
     * @return string
     */
    public function getLyrics()
    {
        return $this->lyrics;
    }

    /**
     * Sets a new lyrics
     *
     * The Lyrics of the MusicalWork.
     *
     * @param string $lyrics
     * @return self
     */
    public function setLyrics($lyrics)
    {
        $this->lyrics = $lyrics;
        return $this;
    }

    /**
     * Gets as comment
     *
     * A Composite containing a human-readable Comment about the MusicalWork.
     *
     * @return \DDEX\RIN\RIN_210\CommentType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A Composite containing a human-readable Comment about the MusicalWork.
     *
     * @param \DDEX\RIN\RIN_210\CommentType $comment
     * @return self
     */
    public function setComment(?\DDEX\RIN\RIN_210\CommentType $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Adds as musicalWorkType
     *
     * A Composite containing details of the Type of the MusicalWork.
     *
     * @return self
     * @param \DDEX\RIN\RIN_210\MusicalWorkTypeType $musicalWorkType
     */
    public function addToMusicalWorkType(\DDEX\RIN\RIN_210\MusicalWorkTypeType $musicalWorkType)
    {
        $this->musicalWorkType[] = $musicalWorkType;
        return $this;
    }

    /**
     * isset musicalWorkType
     *
     * A Composite containing details of the Type of the MusicalWork.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMusicalWorkType($index)
    {
        return isset($this->musicalWorkType[$index]);
    }

    /**
     * unset musicalWorkType
     *
     * A Composite containing details of the Type of the MusicalWork.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMusicalWorkType($index)
    {
        unset($this->musicalWorkType[$index]);
    }

    /**
     * Gets as musicalWorkType
     *
     * A Composite containing details of the Type of the MusicalWork.
     *
     * @return \DDEX\RIN\RIN_210\MusicalWorkTypeType[]
     */
    public function getMusicalWorkType()
    {
        return $this->musicalWorkType;
    }

    /**
     * Sets a new musicalWorkType
     *
     * A Composite containing details of the Type of the MusicalWork.
     *
     * @param \DDEX\RIN\RIN_210\MusicalWorkTypeType[] $musicalWorkType
     * @return self
     */
    public function setMusicalWorkType(array $musicalWorkType = null)
    {
        $this->musicalWorkType = $musicalWorkType;
        return $this;
    }

    /**
     * Adds as contributor
     *
     * A Composite containing details of a MusicalWorkContributor to the MusicalWork.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @return self
     * @param \DDEX\RIN\RIN_210\MusicalWorkContributorReferenceType $contributor
     */
    public function addToContributor(\DDEX\RIN\RIN_210\MusicalWorkContributorReferenceType $contributor)
    {
        $this->contributor[] = $contributor;
        return $this;
    }

    /**
     * isset contributor
     *
     * A Composite containing details of a MusicalWorkContributor to the MusicalWork.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
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
     * A Composite containing details of a MusicalWorkContributor to the MusicalWork.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
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
     * A Composite containing details of a MusicalWorkContributor to the MusicalWork.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @return \DDEX\RIN\RIN_210\MusicalWorkContributorReferenceType[]
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * Sets a new contributor
     *
     * A Composite containing details of a MusicalWorkContributor to the MusicalWork.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @param \DDEX\RIN\RIN_210\MusicalWorkContributorReferenceType[] $contributor
     * @return self
     */
    public function setContributor(array $contributor = null)
    {
        $this->contributor = $contributor;
        return $this;
    }
}


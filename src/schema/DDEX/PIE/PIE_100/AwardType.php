<?php

namespace DDEX\PIE\PIE_100;

/**
 * Class representing AwardType
 *
 * A Composite containing details of an award.
 * XSD Type: Award
 */
class AwardType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var \DDEX\PIE\PIE_100\MetadataSourceReferenceType[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Composite containing details of the awarding body.
     *
     * @var \DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType $awardingBody
     */
    private $awardingBody = null;

    /**
     * A Composite containing details of the awarded Party.
     *
     * @var \DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType $awardedParty
     */
    private $awardedParty = null;

    /**
     * The Name or Category of the award.
     *
     * @var \DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType $awardName
     */
    private $awardName = null;

    /**
     * A Composite containing details of the Date and Place of the award (in ISO 8601 format: YYYY-MM-DD).
     *
     * @var \DDEX\PIE\PIE_100\EventDateType $date
     */
    private $date = null;

    /**
     * A Flag indicating whether the award was won (=true) or whether it was a nomination for the award (=false).
     *
     * @var bool $isWinner
     */
    private $isWinner = null;

    /**
     * A Comment on the award.
     *
     * @var \DDEX\PIE\PIE_100\TextWithFormatType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * Adds as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\MetadataSourceReferenceType $metadataSourceReference
     */
    public function addToMetadataSourceReference(\DDEX\PIE\PIE_100\MetadataSourceReferenceType $metadataSourceReference)
    {
        $this->metadataSourceReference[] = $metadataSourceReference;
        return $this;
    }

    /**
     * isset metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMetadataSourceReference($index)
    {
        return isset($this->metadataSourceReference[$index]);
    }

    /**
     * unset metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMetadataSourceReference($index)
    {
        unset($this->metadataSourceReference[$index]);
    }

    /**
     * Gets as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return \DDEX\PIE\PIE_100\MetadataSourceReferenceType[]
     */
    public function getMetadataSourceReference()
    {
        return $this->metadataSourceReference;
    }

    /**
     * Sets a new metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param \DDEX\PIE\PIE_100\MetadataSourceReferenceType[] $metadataSourceReference
     * @return self
     */
    public function setMetadataSourceReference(array $metadataSourceReference = null)
    {
        $this->metadataSourceReference = $metadataSourceReference;
        return $this;
    }

    /**
     * Gets as awardingBody
     *
     * A Composite containing details of the awarding body.
     *
     * @return \DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType
     */
    public function getAwardingBody()
    {
        return $this->awardingBody;
    }

    /**
     * Sets a new awardingBody
     *
     * A Composite containing details of the awarding body.
     *
     * @param \DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType $awardingBody
     * @return self
     */
    public function setAwardingBody(\DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType $awardingBody)
    {
        $this->awardingBody = $awardingBody;
        return $this;
    }

    /**
     * Gets as awardedParty
     *
     * A Composite containing details of the awarded Party.
     *
     * @return \DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType
     */
    public function getAwardedParty()
    {
        return $this->awardedParty;
    }

    /**
     * Sets a new awardedParty
     *
     * A Composite containing details of the awarded Party.
     *
     * @param \DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType $awardedParty
     * @return self
     */
    public function setAwardedParty(\DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType $awardedParty)
    {
        $this->awardedParty = $awardedParty;
        return $this;
    }

    /**
     * Gets as awardName
     *
     * The Name or Category of the award.
     *
     * @return \DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType
     */
    public function getAwardName()
    {
        return $this->awardName;
    }

    /**
     * Sets a new awardName
     *
     * The Name or Category of the award.
     *
     * @param \DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType $awardName
     * @return self
     */
    public function setAwardName(\DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType $awardName)
    {
        $this->awardName = $awardName;
        return $this;
    }

    /**
     * Gets as date
     *
     * A Composite containing details of the Date and Place of the award (in ISO 8601 format: YYYY-MM-DD).
     *
     * @return \DDEX\PIE\PIE_100\EventDateType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * A Composite containing details of the Date and Place of the award (in ISO 8601 format: YYYY-MM-DD).
     *
     * @param \DDEX\PIE\PIE_100\EventDateType $date
     * @return self
     */
    public function setDate(\DDEX\PIE\PIE_100\EventDateType $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as isWinner
     *
     * A Flag indicating whether the award was won (=true) or whether it was a nomination for the award (=false).
     *
     * @return bool
     */
    public function getIsWinner()
    {
        return $this->isWinner;
    }

    /**
     * Sets a new isWinner
     *
     * A Flag indicating whether the award was won (=true) or whether it was a nomination for the award (=false).
     *
     * @param bool $isWinner
     * @return self
     */
    public function setIsWinner($isWinner)
    {
        $this->isWinner = $isWinner;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A Comment on the award.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\TextWithFormatType $comment
     */
    public function addToComment(\DDEX\PIE\PIE_100\TextWithFormatType $comment)
    {
        $this->comment[] = $comment;
        return $this;
    }

    /**
     * isset comment
     *
     * A Comment on the award.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComment($index)
    {
        return isset($this->comment[$index]);
    }

    /**
     * unset comment
     *
     * A Comment on the award.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComment($index)
    {
        unset($this->comment[$index]);
    }

    /**
     * Gets as comment
     *
     * A Comment on the award.
     *
     * @return \DDEX\PIE\PIE_100\TextWithFormatType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A Comment on the award.
     *
     * @param \DDEX\PIE\PIE_100\TextWithFormatType[] $comment
     * @return self
     */
    public function setComment(array $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }
}


<?php

namespace DDEX\MEAD\MEAD_101;

/**
 * Class representing AwardForPartyType
 *
 * A Composite containing details of an award.
 * Explanatory Note: This Composite is named AwardForParty to disambiguate it from the basic Award Composite.
 * XSD Type: AwardForParty
 */
class AwardForPartyType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var string[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Composite containing details of the awarding body.
     *
     * @var \DDEX\MEAD\MEAD_101\PartyDescriptorType $awardingBody
     */
    private $awardingBody = null;

    /**
     * A Composite containing details of the awarded Party.
     *
     * @var \DDEX\MEAD\MEAD_101\PartyWithNamesType $awardedParty
     */
    private $awardedParty = null;

    /**
     * The Name or Category of the award.
     *
     * @var \DDEX\MEAD\MEAD_101\NameWithPronunciationType $awardName
     */
    private $awardName = null;

    /**
     * A Composite containing details of the Date and Place of the award (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @var \DDEX\MEAD\MEAD_101\EventDateType $date
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
     * @var \DDEX\MEAD\MEAD_101\TextWithFormatType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * A Composite containing details of an awarded Work.
     *
     * @var \DDEX\MEAD\MEAD_101\WorkType $awardedWork
     */
    private $awardedWork = null;

    /**
     * A Composite containing details of an awarded Resource.
     *
     * @var \DDEX\MEAD\MEAD_101\ResourceType $awardedResource
     */
    private $awardedResource = null;

    /**
     * A Composite containing details of an awarded Release.
     *
     * @var \DDEX\MEAD\MEAD_101\ReleaseType $awardedRelease
     */
    private $awardedRelease = null;

    /**
     * Adds as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return self
     * @param string $metadataSourceReference
     */
    public function addToMetadataSourceReference($metadataSourceReference)
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
     * @return string[]
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
     * @param string $metadataSourceReference
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
     * @return \DDEX\MEAD\MEAD_101\PartyDescriptorType
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
     * @param \DDEX\MEAD\MEAD_101\PartyDescriptorType $awardingBody
     * @return self
     */
    public function setAwardingBody(\DDEX\MEAD\MEAD_101\PartyDescriptorType $awardingBody)
    {
        $this->awardingBody = $awardingBody;
        return $this;
    }

    /**
     * Gets as awardedParty
     *
     * A Composite containing details of the awarded Party.
     *
     * @return \DDEX\MEAD\MEAD_101\PartyWithNamesType
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
     * @param \DDEX\MEAD\MEAD_101\PartyWithNamesType $awardedParty
     * @return self
     */
    public function setAwardedParty(\DDEX\MEAD\MEAD_101\PartyWithNamesType $awardedParty)
    {
        $this->awardedParty = $awardedParty;
        return $this;
    }

    /**
     * Gets as awardName
     *
     * The Name or Category of the award.
     *
     * @return \DDEX\MEAD\MEAD_101\NameWithPronunciationType
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
     * @param \DDEX\MEAD\MEAD_101\NameWithPronunciationType $awardName
     * @return self
     */
    public function setAwardName(\DDEX\MEAD\MEAD_101\NameWithPronunciationType $awardName)
    {
        $this->awardName = $awardName;
        return $this;
    }

    /**
     * Gets as date
     *
     * A Composite containing details of the Date and Place of the award (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @return \DDEX\MEAD\MEAD_101\EventDateType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * A Composite containing details of the Date and Place of the award (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param \DDEX\MEAD\MEAD_101\EventDateType $date
     * @return self
     */
    public function setDate(\DDEX\MEAD\MEAD_101\EventDateType $date)
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
     * @param \DDEX\MEAD\MEAD_101\TextWithFormatType $comment
     */
    public function addToComment(\DDEX\MEAD\MEAD_101\TextWithFormatType $comment)
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
     * @return \DDEX\MEAD\MEAD_101\TextWithFormatType[]
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
     * @param \DDEX\MEAD\MEAD_101\TextWithFormatType[] $comment
     * @return self
     */
    public function setComment(array $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Gets as awardedWork
     *
     * A Composite containing details of an awarded Work.
     *
     * @return \DDEX\MEAD\MEAD_101\WorkType
     */
    public function getAwardedWork()
    {
        return $this->awardedWork;
    }

    /**
     * Sets a new awardedWork
     *
     * A Composite containing details of an awarded Work.
     *
     * @param \DDEX\MEAD\MEAD_101\WorkType $awardedWork
     * @return self
     */
    public function setAwardedWork(?\DDEX\MEAD\MEAD_101\WorkType $awardedWork = null)
    {
        $this->awardedWork = $awardedWork;
        return $this;
    }

    /**
     * Gets as awardedResource
     *
     * A Composite containing details of an awarded Resource.
     *
     * @return \DDEX\MEAD\MEAD_101\ResourceType
     */
    public function getAwardedResource()
    {
        return $this->awardedResource;
    }

    /**
     * Sets a new awardedResource
     *
     * A Composite containing details of an awarded Resource.
     *
     * @param \DDEX\MEAD\MEAD_101\ResourceType $awardedResource
     * @return self
     */
    public function setAwardedResource(?\DDEX\MEAD\MEAD_101\ResourceType $awardedResource = null)
    {
        $this->awardedResource = $awardedResource;
        return $this;
    }

    /**
     * Gets as awardedRelease
     *
     * A Composite containing details of an awarded Release.
     *
     * @return \DDEX\MEAD\MEAD_101\ReleaseType
     */
    public function getAwardedRelease()
    {
        return $this->awardedRelease;
    }

    /**
     * Sets a new awardedRelease
     *
     * A Composite containing details of an awarded Release.
     *
     * @param \DDEX\MEAD\MEAD_101\ReleaseType $awardedRelease
     * @return self
     */
    public function setAwardedRelease(?\DDEX\MEAD\MEAD_101\ReleaseType $awardedRelease = null)
    {
        $this->awardedRelease = $awardedRelease;
        return $this;
    }
}


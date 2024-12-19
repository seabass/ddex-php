<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing LocationAndDateOfSessionType
 *
 * A Composite containing details of a Session.
 * XSD Type: LocationAndDateOfSession
 */
class LocationAndDateOfSessionType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * The Type of Session.
     *
     * @var \DDEX\MEAD\MEAD_110\SessionTypeType[] $sessionType
     */
    private $sessionType = [
        
    ];

    /**
     * A Composite containing details about a Period of the Session. Periods are typically described by at least a StartDate or EndDate.
     *
     * @var \DDEX\MEAD\MEAD_110\PeriodType $period
     */
    private $period = null;

    /**
     * A Composite containing details of the venue where the Session took place.
     *
     * @var \DDEX\MEAD\MEAD_110\VenueType[] $venue
     */
    private $venue = [
        
    ];

    /**
     * A Composite containing a human-readable Comment about the Session.
     *
     * @var \DDEX\MEAD\MEAD_110\TextWithFormatType $comment
     */
    private $comment = null;

    /**
     * A Composite containing details of a Contributor.
     *
     * @var \DDEX\MEAD\MEAD_110\ContributorType[] $contributor
     */
    private $contributor = [
        
    ];

    /**
     * Adds as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType $metadataSourceReference
     */
    public function addToMetadataSourceReference(\DDEX\MEAD\MEAD_110\MetadataSourceReferenceType $metadataSourceReference)
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
     * @return \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType[]
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
     * @param \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType[] $metadataSourceReference
     * @return self
     */
    public function setMetadataSourceReference(array $metadataSourceReference = null)
    {
        $this->metadataSourceReference = $metadataSourceReference;
        return $this;
    }

    /**
     * Adds as sessionType
     *
     * The Type of Session.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\SessionTypeType $sessionType
     */
    public function addToSessionType(\DDEX\MEAD\MEAD_110\SessionTypeType $sessionType)
    {
        $this->sessionType[] = $sessionType;
        return $this;
    }

    /**
     * isset sessionType
     *
     * The Type of Session.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSessionType($index)
    {
        return isset($this->sessionType[$index]);
    }

    /**
     * unset sessionType
     *
     * The Type of Session.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSessionType($index)
    {
        unset($this->sessionType[$index]);
    }

    /**
     * Gets as sessionType
     *
     * The Type of Session.
     *
     * @return \DDEX\MEAD\MEAD_110\SessionTypeType[]
     */
    public function getSessionType()
    {
        return $this->sessionType;
    }

    /**
     * Sets a new sessionType
     *
     * The Type of Session.
     *
     * @param \DDEX\MEAD\MEAD_110\SessionTypeType[] $sessionType
     * @return self
     */
    public function setSessionType(array $sessionType = null)
    {
        $this->sessionType = $sessionType;
        return $this;
    }

    /**
     * Gets as period
     *
     * A Composite containing details about a Period of the Session. Periods are typically described by at least a StartDate or EndDate.
     *
     * @return \DDEX\MEAD\MEAD_110\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * A Composite containing details about a Period of the Session. Periods are typically described by at least a StartDate or EndDate.
     *
     * @param \DDEX\MEAD\MEAD_110\PeriodType $period
     * @return self
     */
    public function setPeriod(?\DDEX\MEAD\MEAD_110\PeriodType $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Adds as venue
     *
     * A Composite containing details of the venue where the Session took place.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\VenueType $venue
     */
    public function addToVenue(\DDEX\MEAD\MEAD_110\VenueType $venue)
    {
        $this->venue[] = $venue;
        return $this;
    }

    /**
     * isset venue
     *
     * A Composite containing details of the venue where the Session took place.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVenue($index)
    {
        return isset($this->venue[$index]);
    }

    /**
     * unset venue
     *
     * A Composite containing details of the venue where the Session took place.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVenue($index)
    {
        unset($this->venue[$index]);
    }

    /**
     * Gets as venue
     *
     * A Composite containing details of the venue where the Session took place.
     *
     * @return \DDEX\MEAD\MEAD_110\VenueType[]
     */
    public function getVenue()
    {
        return $this->venue;
    }

    /**
     * Sets a new venue
     *
     * A Composite containing details of the venue where the Session took place.
     *
     * @param \DDEX\MEAD\MEAD_110\VenueType[] $venue
     * @return self
     */
    public function setVenue(array $venue = null)
    {
        $this->venue = $venue;
        return $this;
    }

    /**
     * Gets as comment
     *
     * A Composite containing a human-readable Comment about the Session.
     *
     * @return \DDEX\MEAD\MEAD_110\TextWithFormatType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A Composite containing a human-readable Comment about the Session.
     *
     * @param \DDEX\MEAD\MEAD_110\TextWithFormatType $comment
     * @return self
     */
    public function setComment(?\DDEX\MEAD\MEAD_110\TextWithFormatType $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Adds as contributor
     *
     * A Composite containing details of a Contributor.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\ContributorType $contributor
     */
    public function addToContributor(\DDEX\MEAD\MEAD_110\ContributorType $contributor)
    {
        $this->contributor[] = $contributor;
        return $this;
    }

    /**
     * isset contributor
     *
     * A Composite containing details of a Contributor.
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
     * A Composite containing details of a Contributor.
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
     * A Composite containing details of a Contributor.
     *
     * @return \DDEX\MEAD\MEAD_110\ContributorType[]
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * Sets a new contributor
     *
     * A Composite containing details of a Contributor.
     *
     * @param \DDEX\MEAD\MEAD_110\ContributorType[] $contributor
     * @return self
     */
    public function setContributor(array $contributor = null)
    {
        $this->contributor = $contributor;
        return $this;
    }
}


<?php

namespace DDEX\ERN\ERN_431;

/**
 * Class representing LocationAndDateOfSessionType
 *
 * A Composite containing details of a Session.
 * XSD Type: LocationAndDateOfSession
 */
class LocationAndDateOfSessionType
{
    /**
     * The Type of Session.
     *
     * @var \DDEX\ERN\ERN_431\SessionTypeType[] $sessionType
     */
    private $sessionType = [
        
    ];

    /**
     * A Composite containing details about a Period of the Session. Periods are typically described by at least a StartDate or EndDate.
     *
     * @var \DDEX\ERN\ERN_431\PeriodType $period
     */
    private $period = null;

    /**
     * A Composite containing details of the venue where the Session took place.
     *
     * @var \DDEX\ERN\ERN_431\VenueType[] $venue
     */
    private $venue = [
        
    ];

    /**
     * A Composite containing a human-readable Comment about the Session.
     *
     * @var \DDEX\ERN\ERN_431\TextWithFormatType $comment
     */
    private $comment = null;

    /**
     * A Composite containing details of a Contributor.
     *
     * @var \DDEX\ERN\ERN_431\PartyWithRoleType[] $contributor
     */
    private $contributor = [
        
    ];

    /**
     * Adds as sessionType
     *
     * The Type of Session.
     *
     * @return self
     * @param \DDEX\ERN\ERN_431\SessionTypeType $sessionType
     */
    public function addToSessionType(\DDEX\ERN\ERN_431\SessionTypeType $sessionType)
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
     * @return \DDEX\ERN\ERN_431\SessionTypeType[]
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
     * @param \DDEX\ERN\ERN_431\SessionTypeType[] $sessionType
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
     * @return \DDEX\ERN\ERN_431\PeriodType
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
     * @param \DDEX\ERN\ERN_431\PeriodType $period
     * @return self
     */
    public function setPeriod(?\DDEX\ERN\ERN_431\PeriodType $period = null)
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
     * @param \DDEX\ERN\ERN_431\VenueType $venue
     */
    public function addToVenue(\DDEX\ERN\ERN_431\VenueType $venue)
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
     * @return \DDEX\ERN\ERN_431\VenueType[]
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
     * @param \DDEX\ERN\ERN_431\VenueType[] $venue
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
     * @return \DDEX\ERN\ERN_431\TextWithFormatType
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
     * @param \DDEX\ERN\ERN_431\TextWithFormatType $comment
     * @return self
     */
    public function setComment(?\DDEX\ERN\ERN_431\TextWithFormatType $comment = null)
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
     * @param \DDEX\ERN\ERN_431\PartyWithRoleType $contributor
     */
    public function addToContributor(\DDEX\ERN\ERN_431\PartyWithRoleType $contributor)
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
     * @return \DDEX\ERN\ERN_431\PartyWithRoleType[]
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
     * @param \DDEX\ERN\ERN_431\PartyWithRoleType[] $contributor
     * @return self
     */
    public function setContributor(array $contributor = null)
    {
        $this->contributor = $contributor;
        return $this;
    }
}


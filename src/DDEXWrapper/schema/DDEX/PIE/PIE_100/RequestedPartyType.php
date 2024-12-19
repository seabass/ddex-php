<?php

namespace DDEX\PIE\PIE_100;

/**
 * Class representing RequestedPartyType
 *
 * A Composite containing details of a requested Party.
 * XSD Type: RequestedParty
 */
class RequestedPartyType
{
    /**
     * A Composite containing details of a PartyId.
     *
     * @var \DDEX\PIE\PIE_100\DetailedPartyIdType $partyId
     */
    private $partyId = null;

    /**
     * A Composite containing details of a Name of the Party.
     *
     * @var \DDEX\PIE\PIE_100\PartyNameForRequestType $partyName
     */
    private $partyName = null;

    /**
     * A Composite containing details of a Role played by the Party in relation to a Release, Resource or Work.
     *
     * @var \DDEX\PIE\PIE_100\ContributorRoleType[] $role
     */
    private $role = [
        
    ];

    /**
     * A Composite containing details of a Release to which the Party contributed.
     *
     * @var \DDEX\PIE\PIE_100\ReleaseForRequestType[] $release
     */
    private $release = [
        
    ];

    /**
     * A Composite containing details of a Resource to which the Party contributed.
     *
     * @var \DDEX\PIE\PIE_100\ResourceForRequestType[] $resource
     */
    private $resource = [
        
    ];

    /**
     * A Composite containing details of a Work to which the Party contributed.
     *
     * @var \DDEX\PIE\PIE_100\WorkForRequestType[] $work
     */
    private $work = [
        
    ];

    /**
     * Gets as partyId
     *
     * A Composite containing details of a PartyId.
     *
     * @return \DDEX\PIE\PIE_100\DetailedPartyIdType
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * A Composite containing details of a PartyId.
     *
     * @param \DDEX\PIE\PIE_100\DetailedPartyIdType $partyId
     * @return self
     */
    public function setPartyId(?\DDEX\PIE\PIE_100\DetailedPartyIdType $partyId = null)
    {
        $this->partyId = $partyId;
        return $this;
    }

    /**
     * Gets as partyName
     *
     * A Composite containing details of a Name of the Party.
     *
     * @return \DDEX\PIE\PIE_100\PartyNameForRequestType
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * A Composite containing details of a Name of the Party.
     *
     * @param \DDEX\PIE\PIE_100\PartyNameForRequestType $partyName
     * @return self
     */
    public function setPartyName(?\DDEX\PIE\PIE_100\PartyNameForRequestType $partyName = null)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Adds as role
     *
     * A Composite containing details of a Role played by the Party in relation to a Release, Resource or Work.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\ContributorRoleType $role
     */
    public function addToRole(\DDEX\PIE\PIE_100\ContributorRoleType $role)
    {
        $this->role[] = $role;
        return $this;
    }

    /**
     * isset role
     *
     * A Composite containing details of a Role played by the Party in relation to a Release, Resource or Work.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRole($index)
    {
        return isset($this->role[$index]);
    }

    /**
     * unset role
     *
     * A Composite containing details of a Role played by the Party in relation to a Release, Resource or Work.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRole($index)
    {
        unset($this->role[$index]);
    }

    /**
     * Gets as role
     *
     * A Composite containing details of a Role played by the Party in relation to a Release, Resource or Work.
     *
     * @return \DDEX\PIE\PIE_100\ContributorRoleType[]
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * A Composite containing details of a Role played by the Party in relation to a Release, Resource or Work.
     *
     * @param \DDEX\PIE\PIE_100\ContributorRoleType[] $role
     * @return self
     */
    public function setRole(array $role = null)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Adds as release
     *
     * A Composite containing details of a Release to which the Party contributed.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\ReleaseForRequestType $release
     */
    public function addToRelease(\DDEX\PIE\PIE_100\ReleaseForRequestType $release)
    {
        $this->release[] = $release;
        return $this;
    }

    /**
     * isset release
     *
     * A Composite containing details of a Release to which the Party contributed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelease($index)
    {
        return isset($this->release[$index]);
    }

    /**
     * unset release
     *
     * A Composite containing details of a Release to which the Party contributed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelease($index)
    {
        unset($this->release[$index]);
    }

    /**
     * Gets as release
     *
     * A Composite containing details of a Release to which the Party contributed.
     *
     * @return \DDEX\PIE\PIE_100\ReleaseForRequestType[]
     */
    public function getRelease()
    {
        return $this->release;
    }

    /**
     * Sets a new release
     *
     * A Composite containing details of a Release to which the Party contributed.
     *
     * @param \DDEX\PIE\PIE_100\ReleaseForRequestType[] $release
     * @return self
     */
    public function setRelease(array $release = null)
    {
        $this->release = $release;
        return $this;
    }

    /**
     * Adds as resource
     *
     * A Composite containing details of a Resource to which the Party contributed.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\ResourceForRequestType $resource
     */
    public function addToResource(\DDEX\PIE\PIE_100\ResourceForRequestType $resource)
    {
        $this->resource[] = $resource;
        return $this;
    }

    /**
     * isset resource
     *
     * A Composite containing details of a Resource to which the Party contributed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResource($index)
    {
        return isset($this->resource[$index]);
    }

    /**
     * unset resource
     *
     * A Composite containing details of a Resource to which the Party contributed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResource($index)
    {
        unset($this->resource[$index]);
    }

    /**
     * Gets as resource
     *
     * A Composite containing details of a Resource to which the Party contributed.
     *
     * @return \DDEX\PIE\PIE_100\ResourceForRequestType[]
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Sets a new resource
     *
     * A Composite containing details of a Resource to which the Party contributed.
     *
     * @param \DDEX\PIE\PIE_100\ResourceForRequestType[] $resource
     * @return self
     */
    public function setResource(array $resource = null)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * Adds as work
     *
     * A Composite containing details of a Work to which the Party contributed.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\WorkForRequestType $work
     */
    public function addToWork(\DDEX\PIE\PIE_100\WorkForRequestType $work)
    {
        $this->work[] = $work;
        return $this;
    }

    /**
     * isset work
     *
     * A Composite containing details of a Work to which the Party contributed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWork($index)
    {
        return isset($this->work[$index]);
    }

    /**
     * unset work
     *
     * A Composite containing details of a Work to which the Party contributed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWork($index)
    {
        unset($this->work[$index]);
    }

    /**
     * Gets as work
     *
     * A Composite containing details of a Work to which the Party contributed.
     *
     * @return \DDEX\PIE\PIE_100\WorkForRequestType[]
     */
    public function getWork()
    {
        return $this->work;
    }

    /**
     * Sets a new work
     *
     * A Composite containing details of a Work to which the Party contributed.
     *
     * @param \DDEX\PIE\PIE_100\WorkForRequestType[] $work
     * @return self
     */
    public function setWork(array $work = null)
    {
        $this->work = $work;
        return $this;
    }
}


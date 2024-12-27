<?php

namespace DDEX\ERN\ERN_C_WS_180;

/**
 * Class representing FormalIdentifierType
 *
 * A Composite containing details of an Identifier that is formally used.
 * XSD Type: FormalIdentifier
 */
class FormalIdentifierType
{
    /**
     * A Composite containing details of a ResourceId.
     *
     * @var \DDEX\ERN\ERN_C_WS_180\ResourceIdType $resourceId
     */
    private $resourceId = null;

    /**
     * A Composite containing details of a ReleaseId.
     *
     * @var \DDEX\ERN\ERN_C_WS_180\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * A Composite containing details of a MusicalWorkId.
     *
     * @var \DDEX\ERN\ERN_C_WS_180\MusicalWorkIdType $workId
     */
    private $workId = null;

    /**
     * A Composite containing details of a PartyId.
     *
     * @var \DDEX\ERN\ERN_C_WS_180\DetailedPartyIdType $partyId
     */
    private $partyId = null;

    /**
     * Gets as resourceId
     *
     * A Composite containing details of a ResourceId.
     *
     * @return \DDEX\ERN\ERN_C_WS_180\ResourceIdType
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * Sets a new resourceId
     *
     * A Composite containing details of a ResourceId.
     *
     * @param \DDEX\ERN\ERN_C_WS_180\ResourceIdType $resourceId
     * @return self
     */
    public function setResourceId(?\DDEX\ERN\ERN_C_WS_180\ResourceIdType $resourceId = null)
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * Gets as releaseId
     *
     * A Composite containing details of a ReleaseId.
     *
     * @return \DDEX\ERN\ERN_C_WS_180\ReleaseIdType
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of a ReleaseId.
     *
     * @param \DDEX\ERN\ERN_C_WS_180\ReleaseIdType $releaseId
     * @return self
     */
    public function setReleaseId(?\DDEX\ERN\ERN_C_WS_180\ReleaseIdType $releaseId = null)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Gets as workId
     *
     * A Composite containing details of a MusicalWorkId.
     *
     * @return \DDEX\ERN\ERN_C_WS_180\MusicalWorkIdType
     */
    public function getWorkId()
    {
        return $this->workId;
    }

    /**
     * Sets a new workId
     *
     * A Composite containing details of a MusicalWorkId.
     *
     * @param \DDEX\ERN\ERN_C_WS_180\MusicalWorkIdType $workId
     * @return self
     */
    public function setWorkId(?\DDEX\ERN\ERN_C_WS_180\MusicalWorkIdType $workId = null)
    {
        $this->workId = $workId;
        return $this;
    }

    /**
     * Gets as partyId
     *
     * A Composite containing details of a PartyId.
     *
     * @return \DDEX\ERN\ERN_C_WS_180\DetailedPartyIdType
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
     * @param \DDEX\ERN\ERN_C_WS_180\DetailedPartyIdType $partyId
     * @return self
     */
    public function setPartyId(?\DDEX\ERN\ERN_C_WS_180\DetailedPartyIdType $partyId = null)
    {
        $this->partyId = $partyId;
        return $this;
    }
}


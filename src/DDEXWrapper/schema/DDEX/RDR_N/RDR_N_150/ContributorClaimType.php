<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing ContributorClaimType
 *
 * A Composite containing details of a RightsClaim at a Contributor level.
 * XSD Type: ContributorClaim
 */
class ContributorClaimType
{
    /**
     * A Status of a RightsClaim.
     *
     * @var string $contributorClaimStatus
     */
    private $contributorClaimStatus = null;

    /**
     * A Composite containing details of the PartyId for the Contributor. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @var \DDEX\RDR_N\RDR_N_150\PartyIdType[] $partyId
     */
    private $partyId = [
        
    ];

    /**
     * A Reason for rejecting the RightsClaim.
     *
     * @var string $rejectionReason
     */
    private $rejectionReason = null;

    /**
     * Gets as contributorClaimStatus
     *
     * A Status of a RightsClaim.
     *
     * @return string
     */
    public function getContributorClaimStatus()
    {
        return $this->contributorClaimStatus;
    }

    /**
     * Sets a new contributorClaimStatus
     *
     * A Status of a RightsClaim.
     *
     * @param string $contributorClaimStatus
     * @return self
     */
    public function setContributorClaimStatus($contributorClaimStatus)
    {
        $this->contributorClaimStatus = $contributorClaimStatus;
        return $this;
    }

    /**
     * Adds as partyId
     *
     * A Composite containing details of the PartyId for the Contributor. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\PartyIdType $partyId
     */
    public function addToPartyId(\DDEX\RDR_N\RDR_N_150\PartyIdType $partyId)
    {
        $this->partyId[] = $partyId;
        return $this;
    }

    /**
     * isset partyId
     *
     * A Composite containing details of the PartyId for the Contributor. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyId($index)
    {
        return isset($this->partyId[$index]);
    }

    /**
     * unset partyId
     *
     * A Composite containing details of the PartyId for the Contributor. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyId($index)
    {
        unset($this->partyId[$index]);
    }

    /**
     * Gets as partyId
     *
     * A Composite containing details of the PartyId for the Contributor. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @return \DDEX\RDR_N\RDR_N_150\PartyIdType[]
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * A Composite containing details of the PartyId for the Contributor. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @param \DDEX\RDR_N\RDR_N_150\PartyIdType[] $partyId
     * @return self
     */
    public function setPartyId(array $partyId)
    {
        $this->partyId = $partyId;
        return $this;
    }

    /**
     * Gets as rejectionReason
     *
     * A Reason for rejecting the RightsClaim.
     *
     * @return string
     */
    public function getRejectionReason()
    {
        return $this->rejectionReason;
    }

    /**
     * Sets a new rejectionReason
     *
     * A Reason for rejecting the RightsClaim.
     *
     * @param string $rejectionReason
     * @return self
     */
    public function setRejectionReason($rejectionReason)
    {
        $this->rejectionReason = $rejectionReason;
        return $this;
    }
}


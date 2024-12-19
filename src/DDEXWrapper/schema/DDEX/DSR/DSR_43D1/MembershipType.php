<?php

namespace DDEX\DSR\DSR_43D1;

/**
 * Class representing MembershipType
 *
 * A Composite containing details of a membership in a collective rights management organization.
 * XSD Type: Membership
 */
class MembershipType
{
    /**
     * A Composite containing details of the collective rights management organization.
     *
     * @var \DDEX\DSR\DSR_43D1\PartyDescriptorType $organization
     */
    private $organization = null;

    /**
     * A Type of membership.
     *
     * @var string $membershipType
     */
    private $membershipType = null;

    /**
     * The StartDate of the membership.
     *
     * @var \DateTime $startDate
     */
    private $startDate = null;

    /**
     * The EndDate of the membership.
     *
     * @var \DateTime $endDate
     */
    private $endDate = null;

    /**
     * Gets as organization
     *
     * A Composite containing details of the collective rights management organization.
     *
     * @return \DDEX\DSR\DSR_43D1\PartyDescriptorType
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Sets a new organization
     *
     * A Composite containing details of the collective rights management organization.
     *
     * @param \DDEX\DSR\DSR_43D1\PartyDescriptorType $organization
     * @return self
     */
    public function setOrganization(\DDEX\DSR\DSR_43D1\PartyDescriptorType $organization)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * Gets as membershipType
     *
     * A Type of membership.
     *
     * @return string
     */
    public function getMembershipType()
    {
        return $this->membershipType;
    }

    /**
     * Sets a new membershipType
     *
     * A Type of membership.
     *
     * @param string $membershipType
     * @return self
     */
    public function setMembershipType($membershipType)
    {
        $this->membershipType = $membershipType;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * The StartDate of the membership.
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * The StartDate of the membership.
     *
     * @param \DateTime $startDate
     * @return self
     */
    public function setStartDate(?\DateTime $startDate = null)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * The EndDate of the membership.
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * The EndDate of the membership.
     *
     * @param \DateTime $endDate
     * @return self
     */
    public function setEndDate(?\DateTime $endDate = null)
    {
        $this->endDate = $endDate;
        return $this;
    }
}


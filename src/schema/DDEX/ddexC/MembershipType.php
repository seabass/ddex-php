<?php

namespace DDEX\ddexC;

/**
 * Class representing MembershipType
 *
 * A ddex:Composite containing details of a membership in a collective rights management organization.
 * XSD Type: Membership
 */
class MembershipType
{
    /**
     * A ddex:Composite containing details of the collective rights management organization.
     *
     * @var \DDEX\ddexC\PartyDescriptorType $organization
     */
    private $organization = null;

    /**
     * A ddex:Type of membership.
     *
     * @var string $membershipType
     */
    private $membershipType = null;

    /**
     * The ddex:StartDate of the membership.
     *
     * @var \DateTime $startDate
     */
    private $startDate = null;

    /**
     * The ddex:EndDate of the membership.
     *
     * @var \DateTime $endDate
     */
    private $endDate = null;

    /**
     * Gets as organization
     *
     * A ddex:Composite containing details of the collective rights management organization.
     *
     * @return \DDEX\ddexC\PartyDescriptorType
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Sets a new organization
     *
     * A ddex:Composite containing details of the collective rights management organization.
     *
     * @param \DDEX\ddexC\PartyDescriptorType $organization
     * @return self
     */
    public function setOrganization(\DDEX\ddexC\PartyDescriptorType $organization)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * Gets as membershipType
     *
     * A ddex:Type of membership.
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
     * A ddex:Type of membership.
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
     * The ddex:StartDate of the membership.
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
     * The ddex:StartDate of the membership.
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
     * The ddex:EndDate of the membership.
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
     * The ddex:EndDate of the membership.
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


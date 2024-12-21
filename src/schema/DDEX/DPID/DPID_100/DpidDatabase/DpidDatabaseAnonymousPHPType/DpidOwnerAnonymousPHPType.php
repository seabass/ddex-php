<?php

namespace DDEX\DPID\DPID_100\DpidDatabase\DpidDatabaseAnonymousPHPType;

/**
 * Class representing DpidOwnerAnonymousPHPType
 */
class DpidOwnerAnonymousPHPType
{
    /**
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * @var string $status
     */
    private $status = null;

    /**
     * @var string $dPID
     */
    private $dPID = null;

    /**
     * @var string $preferredDPID
     */
    private $preferredDPID = null;

    /**
     * @var string $companyName
     */
    private $companyName = null;

    /**
     * @var string $serviceName
     */
    private $serviceName = null;

    /**
     * @var \DDEX\DPID\DPID_100\ContactType $contact
     */
    private $contact = null;

    /**
     * Gets as sequenceNumber
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * @param int $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as dPID
     *
     * @return string
     */
    public function getDPID()
    {
        return $this->dPID;
    }

    /**
     * Sets a new dPID
     *
     * @param string $dPID
     * @return self
     */
    public function setDPID($dPID)
    {
        $this->dPID = $dPID;
        return $this;
    }

    /**
     * Gets as preferredDPID
     *
     * @return string
     */
    public function getPreferredDPID()
    {
        return $this->preferredDPID;
    }

    /**
     * Sets a new preferredDPID
     *
     * @param string $preferredDPID
     * @return self
     */
    public function setPreferredDPID($preferredDPID)
    {
        $this->preferredDPID = $preferredDPID;
        return $this;
    }

    /**
     * Gets as companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * @param string $companyName
     * @return self
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * Gets as serviceName
     *
     * @return string
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * Sets a new serviceName
     *
     * @param string $serviceName
     * @return self
     */
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;
        return $this;
    }

    /**
     * Gets as contact
     *
     * @return \DDEX\DPID\DPID_100\ContactType
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * @param \DDEX\DPID\DPID_100\ContactType $contact
     * @return self
     */
    public function setContact(\DDEX\DPID\DPID_100\ContactType $contact)
    {
        $this->contact = $contact;
        return $this;
    }
}


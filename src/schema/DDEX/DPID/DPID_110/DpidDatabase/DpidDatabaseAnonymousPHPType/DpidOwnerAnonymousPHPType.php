<?php

namespace DDEX\DPID\DPID_110\DpidDatabase\DpidDatabaseAnonymousPHPType;

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
     * @var string $companyName
     */
    private $companyName = null;

    /**
     * @var string $serviceName
     */
    private $serviceName = null;

    /**
     * @var string $address
     */
    private $address = null;

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
     * Gets as address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param string $address
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }
}


<?php

namespace DDEX\DPID\DPID_200;

/**
 * Class representing DpidOwnerType
 *
 * A Composite containing details of an owner of a DDEX Party ID.
 * XSD Type: DpidOwner
 */
class DpidOwnerType
{
    /**
     * The number indicating the order of the owner in a group of owners.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * The Status of the DDEX Party ID.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * The DDEX Party ID.
     *
     * @var string $dPID
     */
    private $dPID = null;

    /**
     * A DDEX Party ID that should be used instead of the current one.
     *
     * @var string $preferredDPID
     */
    private $preferredDPID = null;

    /**
     * The Name of the company owning the DDEX Party ID.
     *
     * @var string $companyName
     */
    private $companyName = null;

    /**
     * The Name of the Service associated with the DDEX Party ID.
     *
     * @var string $serviceName
     */
    private $serviceName = null;

    /**
     * The license record of the Party.
     *
     * @var string $licenseRecord
     */
    private $licenseRecord = null;

    /**
     * An Address of the Party.
     *
     * @var string $address
     */
    private $address = null;

    /**
     * A Composite containing details of a Person that can be contacted for specific purposes.
     *
     * @var \DDEX\DPID\DPID_200\ContactType[] $contact
     */
    private $contact = [
        
    ];

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the owner in a group of owners.
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
     * The number indicating the order of the owner in a group of owners.
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
     * The Status of the DDEX Party ID.
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
     * The Status of the DDEX Party ID.
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
     * The DDEX Party ID.
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
     * The DDEX Party ID.
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
     * A DDEX Party ID that should be used instead of the current one.
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
     * A DDEX Party ID that should be used instead of the current one.
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
     * The Name of the company owning the DDEX Party ID.
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
     * The Name of the company owning the DDEX Party ID.
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
     * The Name of the Service associated with the DDEX Party ID.
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
     * The Name of the Service associated with the DDEX Party ID.
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
     * Gets as licenseRecord
     *
     * The license record of the Party.
     *
     * @return string
     */
    public function getLicenseRecord()
    {
        return $this->licenseRecord;
    }

    /**
     * Sets a new licenseRecord
     *
     * The license record of the Party.
     *
     * @param string $licenseRecord
     * @return self
     */
    public function setLicenseRecord($licenseRecord)
    {
        $this->licenseRecord = $licenseRecord;
        return $this;
    }

    /**
     * Gets as address
     *
     * An Address of the Party.
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
     * An Address of the Party.
     *
     * @param string $address
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Adds as contact
     *
     * A Composite containing details of a Person that can be contacted for specific purposes.
     *
     * @return self
     * @param \DDEX\DPID\DPID_200\ContactType $contact
     */
    public function addToContact(\DDEX\DPID\DPID_200\ContactType $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * A Composite containing details of a Person that can be contacted for specific purposes.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContact($index)
    {
        return isset($this->contact[$index]);
    }

    /**
     * unset contact
     *
     * A Composite containing details of a Person that can be contacted for specific purposes.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContact($index)
    {
        unset($this->contact[$index]);
    }

    /**
     * Gets as contact
     *
     * A Composite containing details of a Person that can be contacted for specific purposes.
     *
     * @return \DDEX\DPID\DPID_200\ContactType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * A Composite containing details of a Person that can be contacted for specific purposes.
     *
     * @param \DDEX\DPID\DPID_200\ContactType[] $contact
     * @return self
     */
    public function setContact(array $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }
}


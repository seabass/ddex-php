<?php

namespace DDEX\MEAD\MEAD_101;

/**
 * Class representing PartyType
 *
 * A Composite containing details of a Party.
 * XSD Type: Party
 */
class PartyType
{
    /**
     * An International Standard Name Identifier, the ISO 27729 Standard Identifier for names, of the Party for which information is provided. DDEX will enforce the syntax [0-9]{15}[X0-9] using XML Schema in the future.
     *
     * @var string $iSNI
     */
    private $iSNI = null;

    /**
     * An Identifier of the Party for which information is provided according to the DdexPartyId standard DDEX-DPID.
     *
     * @var string $dPID
     */
    private $dPID = null;

    /**
     * An Interested Party Identifier, a CISAC standard Identifier, of the Party for which information is provided. An IpiNameNumber comprises 11 digits.
     *
     * @var string $ipiNameNumber
     */
    private $ipiNameNumber = null;

    /**
     * An International Performer Number, an IPDA Identifier, of the Party for which information is provided.
     *
     * @var string $iPN
     */
    private $iPN = null;

    /**
     * A Composite containing details of a ProprietaryIdentifier of the Party for which information is provided.
     *
     * @var \DDEX\MEAD\MEAD_101\ProprietaryIdType[] $proprietaryId
     */
    private $proprietaryId = [
        
    ];

    /**
     * The Name of the Party for which information is provided.
     *
     * @var string $partyName
     */
    private $partyName = null;

    /**
     * Gets as iSNI
     *
     * An International Standard Name Identifier, the ISO 27729 Standard Identifier for names, of the Party for which information is provided. DDEX will enforce the syntax [0-9]{15}[X0-9] using XML Schema in the future.
     *
     * @return string
     */
    public function getISNI()
    {
        return $this->iSNI;
    }

    /**
     * Sets a new iSNI
     *
     * An International Standard Name Identifier, the ISO 27729 Standard Identifier for names, of the Party for which information is provided. DDEX will enforce the syntax [0-9]{15}[X0-9] using XML Schema in the future.
     *
     * @param string $iSNI
     * @return self
     */
    public function setISNI($iSNI)
    {
        $this->iSNI = $iSNI;
        return $this;
    }

    /**
     * Gets as dPID
     *
     * An Identifier of the Party for which information is provided according to the DdexPartyId standard DDEX-DPID.
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
     * An Identifier of the Party for which information is provided according to the DdexPartyId standard DDEX-DPID.
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
     * Gets as ipiNameNumber
     *
     * An Interested Party Identifier, a CISAC standard Identifier, of the Party for which information is provided. An IpiNameNumber comprises 11 digits.
     *
     * @return string
     */
    public function getIpiNameNumber()
    {
        return $this->ipiNameNumber;
    }

    /**
     * Sets a new ipiNameNumber
     *
     * An Interested Party Identifier, a CISAC standard Identifier, of the Party for which information is provided. An IpiNameNumber comprises 11 digits.
     *
     * @param string $ipiNameNumber
     * @return self
     */
    public function setIpiNameNumber($ipiNameNumber)
    {
        $this->ipiNameNumber = $ipiNameNumber;
        return $this;
    }

    /**
     * Gets as iPN
     *
     * An International Performer Number, an IPDA Identifier, of the Party for which information is provided.
     *
     * @return string
     */
    public function getIPN()
    {
        return $this->iPN;
    }

    /**
     * Sets a new iPN
     *
     * An International Performer Number, an IPDA Identifier, of the Party for which information is provided.
     *
     * @param string $iPN
     * @return self
     */
    public function setIPN($iPN)
    {
        $this->iPN = $iPN;
        return $this;
    }

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Party for which information is provided.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\ProprietaryIdType $proprietaryId
     */
    public function addToProprietaryId(\DDEX\MEAD\MEAD_101\ProprietaryIdType $proprietaryId)
    {
        $this->proprietaryId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Party for which information is provided.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProprietaryId($index)
    {
        return isset($this->proprietaryId[$index]);
    }

    /**
     * unset proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Party for which information is provided.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProprietaryId($index)
    {
        unset($this->proprietaryId[$index]);
    }

    /**
     * Gets as proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Party for which information is provided.
     *
     * @return \DDEX\MEAD\MEAD_101\ProprietaryIdType[]
     */
    public function getProprietaryId()
    {
        return $this->proprietaryId;
    }

    /**
     * Sets a new proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Party for which information is provided.
     *
     * @param \DDEX\MEAD\MEAD_101\ProprietaryIdType[] $proprietaryId
     * @return self
     */
    public function setProprietaryId(array $proprietaryId = null)
    {
        $this->proprietaryId = $proprietaryId;
        return $this;
    }

    /**
     * Gets as partyName
     *
     * The Name of the Party for which information is provided.
     *
     * @return string
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * The Name of the Party for which information is provided.
     *
     * @param string $partyName
     * @return self
     */
    public function setPartyName($partyName)
    {
        $this->partyName = $partyName;
        return $this;
    }
}


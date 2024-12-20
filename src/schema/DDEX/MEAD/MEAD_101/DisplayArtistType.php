<?php

namespace DDEX\MEAD\MEAD_101;

/**
 * Class representing DisplayArtistType
 *
 * A Composite containing details of a DisplayArtist of a Resource or Release.
 * XSD Type: DisplayArtist
 */
class DisplayArtistType
{
    /**
     * An International Standard Name Identifier, the ISO 27729 Standard Identifier for names, of the DisplayArtist. DDEX will enforce the syntax [0-9]{15}[X0-9] using XML Schema in the future.
     *
     * @var string $iSNI
     */
    private $iSNI = null;

    /**
     * An Identifier of the DisplayArtist according to the DdexPartyId standard DDEX-DPID.
     *
     * @var string $dPID
     */
    private $dPID = null;

    /**
     * An Interested Party Identifier, a CISAC standard Identifier, of the DisplayArtist. An IpiNameNumber comprises 11 digits.
     *
     * @var string $ipiNameNumber
     */
    private $ipiNameNumber = null;

    /**
     * An International Performer Number, an IPDA Identifier, of the DisplayArtist.
     *
     * @var string $iPN
     */
    private $iPN = null;

    /**
     * A Composite containing details of a ProprietaryIdentifier of the DisplayArtist.
     *
     * @var \DDEX\MEAD\MEAD_101\ProprietaryIdType[] $proprietaryId
     */
    private $proprietaryId = [
        
    ];

    /**
     * The Name of the DisplayArtist.
     *
     * @var string $displayArtistName
     */
    private $displayArtistName = null;

    /**
     * Gets as iSNI
     *
     * An International Standard Name Identifier, the ISO 27729 Standard Identifier for names, of the DisplayArtist. DDEX will enforce the syntax [0-9]{15}[X0-9] using XML Schema in the future.
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
     * An International Standard Name Identifier, the ISO 27729 Standard Identifier for names, of the DisplayArtist. DDEX will enforce the syntax [0-9]{15}[X0-9] using XML Schema in the future.
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
     * An Identifier of the DisplayArtist according to the DdexPartyId standard DDEX-DPID.
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
     * An Identifier of the DisplayArtist according to the DdexPartyId standard DDEX-DPID.
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
     * An Interested Party Identifier, a CISAC standard Identifier, of the DisplayArtist. An IpiNameNumber comprises 11 digits.
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
     * An Interested Party Identifier, a CISAC standard Identifier, of the DisplayArtist. An IpiNameNumber comprises 11 digits.
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
     * An International Performer Number, an IPDA Identifier, of the DisplayArtist.
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
     * An International Performer Number, an IPDA Identifier, of the DisplayArtist.
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
     * A Composite containing details of a ProprietaryIdentifier of the DisplayArtist.
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
     * A Composite containing details of a ProprietaryIdentifier of the DisplayArtist.
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
     * A Composite containing details of a ProprietaryIdentifier of the DisplayArtist.
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
     * A Composite containing details of a ProprietaryIdentifier of the DisplayArtist.
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
     * A Composite containing details of a ProprietaryIdentifier of the DisplayArtist.
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
     * Gets as displayArtistName
     *
     * The Name of the DisplayArtist.
     *
     * @return string
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * The Name of the DisplayArtist.
     *
     * @param string $displayArtistName
     * @return self
     */
    public function setDisplayArtistName($displayArtistName)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }
}


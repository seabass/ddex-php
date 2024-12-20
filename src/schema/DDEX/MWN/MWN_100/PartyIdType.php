<?php

namespace DDEX\MWN\MWN_100;

/**
 * Class representing PartyIdType
 *
 * A Composite containing details of a PartyId.
 * XSD Type: PartyId
 */
class PartyIdType
{
    /**
     * An International Standard Name Identifier, the ISO 27729 Standard Identifier for names. DDEX will enforce the syntax [0-9]{15}[X0-9] using XML Schema in the future.
     *
     * @var string $iSNI
     */
    private $iSNI = null;

    /**
     * An Interested Party Identifier, a CISAC standard Identifier.
     *
     * @var string $ipiNameNumber
     */
    private $ipiNameNumber = null;

    /**
     * An International Performer Number, an IPDA Identifier (http://www2.ipddb.org/content/ipd-project).
     *
     * @var string $iPN
     */
    private $iPN = null;

    /**
     * A CISAC Society Identifier, a CISAC standard Identifier for music rights societies.
     *
     * @var string $cisacSocietyId
     */
    private $cisacSocietyId = null;

    /**
     * A Composite containing details of a ProprietaryIdentifier of the Party.
     *
     * @var \DDEX\MWN\MWN_100\ProprietaryIdType $proprietaryId
     */
    private $proprietaryId = null;

    /**
     * Gets as iSNI
     *
     * An International Standard Name Identifier, the ISO 27729 Standard Identifier for names. DDEX will enforce the syntax [0-9]{15}[X0-9] using XML Schema in the future.
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
     * An International Standard Name Identifier, the ISO 27729 Standard Identifier for names. DDEX will enforce the syntax [0-9]{15}[X0-9] using XML Schema in the future.
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
     * Gets as ipiNameNumber
     *
     * An Interested Party Identifier, a CISAC standard Identifier.
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
     * An Interested Party Identifier, a CISAC standard Identifier.
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
     * An International Performer Number, an IPDA Identifier (http://www2.ipddb.org/content/ipd-project).
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
     * An International Performer Number, an IPDA Identifier (http://www2.ipddb.org/content/ipd-project).
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
     * Gets as cisacSocietyId
     *
     * A CISAC Society Identifier, a CISAC standard Identifier for music rights societies.
     *
     * @return string
     */
    public function getCisacSocietyId()
    {
        return $this->cisacSocietyId;
    }

    /**
     * Sets a new cisacSocietyId
     *
     * A CISAC Society Identifier, a CISAC standard Identifier for music rights societies.
     *
     * @param string $cisacSocietyId
     * @return self
     */
    public function setCisacSocietyId($cisacSocietyId)
    {
        $this->cisacSocietyId = $cisacSocietyId;
        return $this;
    }

    /**
     * Gets as proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Party.
     *
     * @return \DDEX\MWN\MWN_100\ProprietaryIdType
     */
    public function getProprietaryId()
    {
        return $this->proprietaryId;
    }

    /**
     * Sets a new proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Party.
     *
     * @param \DDEX\MWN\MWN_100\ProprietaryIdType $proprietaryId
     * @return self
     */
    public function setProprietaryId(?\DDEX\MWN\MWN_100\ProprietaryIdType $proprietaryId = null)
    {
        $this->proprietaryId = $proprietaryId;
        return $this;
    }
}


<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing RightsControllerType
 *
 * A Composite containing details of a RightsController. RightsControllers are typically described by Name, Identifier and Role(s).
 * XSD Type: RightsController
 */
class RightsControllerType
{
    /**
     * The number indicating the order of the RightsController in a group of RightsControllers. This is represented in an XML schema as an XML Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ExtendedPartyIdType[] $partyId
     */
    private $partyId = [
        
    ];

    /**
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @var \DDEX\RDR_N\RDR_N_150\PartyNameType[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * A role or a type of the RightsController.
     *
     * @var string $rightsControlType
     */
    private $rightsControlType = null;

    /**
     * The Flag indicating whether the RightSharePercentage is unknown (=true) or not (=false).
     *
     * @var bool $rightShareUnknown
     */
    private $rightShareUnknown = null;

    /**
     * The share of the licensed Rights owned by the RightsController. RightShare information is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%). If no information is given, 100% is assumed.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/communication-of-percentages
     *
     * @var \DDEX\RDR_N\RDR_N_150\PercentageType $rightSharePercentage
     */
    private $rightSharePercentage = null;

    /**
     * A Composite containing details of rights controlled by the RightsController. This can either be a statement of the rights that the RightsController controls (in which case the receiving MLC is expected to use external documents such as the mandate included in the membership agreement between the RightsController and the MLC to determine which rights it is meant to represent) or an explicit mandate (in which case the receiving MLC is meant to represent all rights listed in this RightsStatement composite). The option used is described in the RightsStatementProfile attribute on the DeclarationOfSoundRecordingRightsClaimMessage.
     *
     * @var \DDEX\RDR_N\RDR_N_150\RightsStatementType[] $rightsStatement
     */
    private $rightsStatement = [
        
    ];

    /**
     * A Flag indicating whether the RightsController is paying out royalties for all other relevant RightsControllers (=true) or not (=false).
     *
     * @var bool $isPayingOutRoyalties
     */
    private $isPayingOutRoyalties = null;

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the RightsController in a group of RightsControllers. This is represented in an XML schema as an XML Attribute.
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
     * The number indicating the order of the RightsController in a group of RightsControllers. This is represented in an XML schema as an XML Attribute.
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
     * Adds as partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\ExtendedPartyIdType $partyId
     */
    public function addToPartyId(\DDEX\RDR_N\RDR_N_150\ExtendedPartyIdType $partyId)
    {
        $this->partyId[] = $partyId;
        return $this;
    }

    /**
     * isset partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
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
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
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
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @return \DDEX\RDR_N\RDR_N_150\ExtendedPartyIdType[]
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @param \DDEX\RDR_N\RDR_N_150\ExtendedPartyIdType[] $partyId
     * @return self
     */
    public function setPartyId(array $partyId = null)
    {
        $this->partyId = $partyId;
        return $this;
    }

    /**
     * Adds as partyName
     *
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\PartyNameType $partyName
     */
    public function addToPartyName(\DDEX\RDR_N\RDR_N_150\PartyNameType $partyName)
    {
        $this->partyName[] = $partyName;
        return $this;
    }

    /**
     * isset partyName
     *
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyName($index)
    {
        return isset($this->partyName[$index]);
    }

    /**
     * unset partyName
     *
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyName($index)
    {
        unset($this->partyName[$index]);
    }

    /**
     * Gets as partyName
     *
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @return \DDEX\RDR_N\RDR_N_150\PartyNameType[]
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @param \DDEX\RDR_N\RDR_N_150\PartyNameType[] $partyName
     * @return self
     */
    public function setPartyName(array $partyName = null)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Gets as rightsControlType
     *
     * A role or a type of the RightsController.
     *
     * @return string
     */
    public function getRightsControlType()
    {
        return $this->rightsControlType;
    }

    /**
     * Sets a new rightsControlType
     *
     * A role or a type of the RightsController.
     *
     * @param string $rightsControlType
     * @return self
     */
    public function setRightsControlType($rightsControlType)
    {
        $this->rightsControlType = $rightsControlType;
        return $this;
    }

    /**
     * Gets as rightShareUnknown
     *
     * The Flag indicating whether the RightSharePercentage is unknown (=true) or not (=false).
     *
     * @return bool
     */
    public function getRightShareUnknown()
    {
        return $this->rightShareUnknown;
    }

    /**
     * Sets a new rightShareUnknown
     *
     * The Flag indicating whether the RightSharePercentage is unknown (=true) or not (=false).
     *
     * @param bool $rightShareUnknown
     * @return self
     */
    public function setRightShareUnknown($rightShareUnknown)
    {
        $this->rightShareUnknown = $rightShareUnknown;
        return $this;
    }

    /**
     * Gets as rightSharePercentage
     *
     * The share of the licensed Rights owned by the RightsController. RightShare information is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%). If no information is given, 100% is assumed.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/communication-of-percentages
     *
     * @return \DDEX\RDR_N\RDR_N_150\PercentageType
     */
    public function getRightSharePercentage()
    {
        return $this->rightSharePercentage;
    }

    /**
     * Sets a new rightSharePercentage
     *
     * The share of the licensed Rights owned by the RightsController. RightShare information is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%). If no information is given, 100% is assumed.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/communication-of-percentages
     *
     * @param \DDEX\RDR_N\RDR_N_150\PercentageType $rightSharePercentage
     * @return self
     */
    public function setRightSharePercentage(?\DDEX\RDR_N\RDR_N_150\PercentageType $rightSharePercentage = null)
    {
        $this->rightSharePercentage = $rightSharePercentage;
        return $this;
    }

    /**
     * Adds as rightsStatement
     *
     * A Composite containing details of rights controlled by the RightsController. This can either be a statement of the rights that the RightsController controls (in which case the receiving MLC is expected to use external documents such as the mandate included in the membership agreement between the RightsController and the MLC to determine which rights it is meant to represent) or an explicit mandate (in which case the receiving MLC is meant to represent all rights listed in this RightsStatement composite). The option used is described in the RightsStatementProfile attribute on the DeclarationOfSoundRecordingRightsClaimMessage.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\RightsStatementType $rightsStatement
     */
    public function addToRightsStatement(\DDEX\RDR_N\RDR_N_150\RightsStatementType $rightsStatement)
    {
        $this->rightsStatement[] = $rightsStatement;
        return $this;
    }

    /**
     * isset rightsStatement
     *
     * A Composite containing details of rights controlled by the RightsController. This can either be a statement of the rights that the RightsController controls (in which case the receiving MLC is expected to use external documents such as the mandate included in the membership agreement between the RightsController and the MLC to determine which rights it is meant to represent) or an explicit mandate (in which case the receiving MLC is meant to represent all rights listed in this RightsStatement composite). The option used is described in the RightsStatementProfile attribute on the DeclarationOfSoundRecordingRightsClaimMessage.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightsStatement($index)
    {
        return isset($this->rightsStatement[$index]);
    }

    /**
     * unset rightsStatement
     *
     * A Composite containing details of rights controlled by the RightsController. This can either be a statement of the rights that the RightsController controls (in which case the receiving MLC is expected to use external documents such as the mandate included in the membership agreement between the RightsController and the MLC to determine which rights it is meant to represent) or an explicit mandate (in which case the receiving MLC is meant to represent all rights listed in this RightsStatement composite). The option used is described in the RightsStatementProfile attribute on the DeclarationOfSoundRecordingRightsClaimMessage.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightsStatement($index)
    {
        unset($this->rightsStatement[$index]);
    }

    /**
     * Gets as rightsStatement
     *
     * A Composite containing details of rights controlled by the RightsController. This can either be a statement of the rights that the RightsController controls (in which case the receiving MLC is expected to use external documents such as the mandate included in the membership agreement between the RightsController and the MLC to determine which rights it is meant to represent) or an explicit mandate (in which case the receiving MLC is meant to represent all rights listed in this RightsStatement composite). The option used is described in the RightsStatementProfile attribute on the DeclarationOfSoundRecordingRightsClaimMessage.
     *
     * @return \DDEX\RDR_N\RDR_N_150\RightsStatementType[]
     */
    public function getRightsStatement()
    {
        return $this->rightsStatement;
    }

    /**
     * Sets a new rightsStatement
     *
     * A Composite containing details of rights controlled by the RightsController. This can either be a statement of the rights that the RightsController controls (in which case the receiving MLC is expected to use external documents such as the mandate included in the membership agreement between the RightsController and the MLC to determine which rights it is meant to represent) or an explicit mandate (in which case the receiving MLC is meant to represent all rights listed in this RightsStatement composite). The option used is described in the RightsStatementProfile attribute on the DeclarationOfSoundRecordingRightsClaimMessage.
     *
     * @param \DDEX\RDR_N\RDR_N_150\RightsStatementType[] $rightsStatement
     * @return self
     */
    public function setRightsStatement(array $rightsStatement)
    {
        $this->rightsStatement = $rightsStatement;
        return $this;
    }

    /**
     * Gets as isPayingOutRoyalties
     *
     * A Flag indicating whether the RightsController is paying out royalties for all other relevant RightsControllers (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsPayingOutRoyalties()
    {
        return $this->isPayingOutRoyalties;
    }

    /**
     * Sets a new isPayingOutRoyalties
     *
     * A Flag indicating whether the RightsController is paying out royalties for all other relevant RightsControllers (=true) or not (=false).
     *
     * @param bool $isPayingOutRoyalties
     * @return self
     */
    public function setIsPayingOutRoyalties($isPayingOutRoyalties)
    {
        $this->isPayingOutRoyalties = $isPayingOutRoyalties;
        return $this;
    }
}


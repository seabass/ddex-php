<?php

namespace DDEX\RDR_N\RDR_N_150\DeclarationOfRevenueMessage;

/**
 * Class representing DeclarationOfRevenueMessageAnonymousPHPType
 */
class DeclarationOfRevenueMessageAnonymousPHPType
{
    /**
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $avsVersionId
     */
    private $avsVersionId = null;

    /**
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the DeclarationOfRevenueMessage.
     *
     * @var \DDEX\RDR_N\RDR_N_150\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of one or more Revenue declarations for a SoundRecording.
     *
     * @var \DDEX\RDR_N\RDR_N_150\RevenueDeclarationType[] $revenueDeclaration
     */
    private $revenueDeclaration = [
        
    ];

    /**
     * The check number which identifies the number of RevenueByUsage records contained in the DeclarationOfRevenueMessage.
     *
     * @var int $numberOfRevenueByUsageRecords
     */
    private $numberOfRevenueByUsageRecords = null;

    /**
     * Gets as avsVersionId
     *
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getAvsVersionId()
    {
        return $this->avsVersionId;
    }

    /**
     * Sets a new avsVersionId
     *
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $avsVersionId
     * @return self
     */
    public function setAvsVersionId($avsVersionId)
    {
        $this->avsVersionId = $avsVersionId;
        return $this;
    }

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getLanguageAndScriptCode()
    {
        return $this->languageAndScriptCode;
    }

    /**
     * Sets a new languageAndScriptCode
     *
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $languageAndScriptCode
     * @return self
     */
    public function setLanguageAndScriptCode($languageAndScriptCode)
    {
        $this->languageAndScriptCode = $languageAndScriptCode;
        return $this;
    }

    /**
     * Gets as messageHeader
     *
     * The MessageHeader for the DeclarationOfRevenueMessage.
     *
     * @return \DDEX\RDR_N\RDR_N_150\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the DeclarationOfRevenueMessage.
     *
     * @param \DDEX\RDR_N\RDR_N_150\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\RDR_N\RDR_N_150\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Adds as revenueDeclaration
     *
     * A Composite containing details of one or more Revenue declarations for a SoundRecording.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\RevenueDeclarationType $revenueDeclaration
     */
    public function addToRevenueDeclaration(\DDEX\RDR_N\RDR_N_150\RevenueDeclarationType $revenueDeclaration)
    {
        $this->revenueDeclaration[] = $revenueDeclaration;
        return $this;
    }

    /**
     * isset revenueDeclaration
     *
     * A Composite containing details of one or more Revenue declarations for a SoundRecording.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRevenueDeclaration($index)
    {
        return isset($this->revenueDeclaration[$index]);
    }

    /**
     * unset revenueDeclaration
     *
     * A Composite containing details of one or more Revenue declarations for a SoundRecording.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRevenueDeclaration($index)
    {
        unset($this->revenueDeclaration[$index]);
    }

    /**
     * Gets as revenueDeclaration
     *
     * A Composite containing details of one or more Revenue declarations for a SoundRecording.
     *
     * @return \DDEX\RDR_N\RDR_N_150\RevenueDeclarationType[]
     */
    public function getRevenueDeclaration()
    {
        return $this->revenueDeclaration;
    }

    /**
     * Sets a new revenueDeclaration
     *
     * A Composite containing details of one or more Revenue declarations for a SoundRecording.
     *
     * @param \DDEX\RDR_N\RDR_N_150\RevenueDeclarationType[] $revenueDeclaration
     * @return self
     */
    public function setRevenueDeclaration(array $revenueDeclaration)
    {
        $this->revenueDeclaration = $revenueDeclaration;
        return $this;
    }

    /**
     * Gets as numberOfRevenueByUsageRecords
     *
     * The check number which identifies the number of RevenueByUsage records contained in the DeclarationOfRevenueMessage.
     *
     * @return int
     */
    public function getNumberOfRevenueByUsageRecords()
    {
        return $this->numberOfRevenueByUsageRecords;
    }

    /**
     * Sets a new numberOfRevenueByUsageRecords
     *
     * The check number which identifies the number of RevenueByUsage records contained in the DeclarationOfRevenueMessage.
     *
     * @param int $numberOfRevenueByUsageRecords
     * @return self
     */
    public function setNumberOfRevenueByUsageRecords($numberOfRevenueByUsageRecords)
    {
        $this->numberOfRevenueByUsageRecords = $numberOfRevenueByUsageRecords;
        return $this;
    }
}


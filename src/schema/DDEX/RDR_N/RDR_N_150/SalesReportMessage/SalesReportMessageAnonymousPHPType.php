<?php

namespace DDEX\RDR_N\RDR_N_150\SalesReportMessage;

/**
 * Class representing SalesReportMessageAnonymousPHPType
 */
class SalesReportMessageAnonymousPHPType
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
     * The MessageHeader for the SalesReportMessage.
     *
     * @var \DDEX\RDR_N\RDR_N_150\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of SalesTransactions by a distribution partner reported to a record company.
     *
     * @var \DDEX\RDR_N\RDR_N_150\SalesReportType[] $salesReport
     */
    private $salesReport = [
        
    ];

    /**
     * The check number which identifies the number of SalesTransaction records contained in the SalesReportMessage.
     *
     * @var int $numberOfSalesTransactionRecords
     */
    private $numberOfSalesTransactionRecords = null;

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
     * The MessageHeader for the SalesReportMessage.
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
     * The MessageHeader for the SalesReportMessage.
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
     * Adds as salesReport
     *
     * A Composite containing details of SalesTransactions by a distribution partner reported to a record company.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\SalesReportType $salesReport
     */
    public function addToSalesReport(\DDEX\RDR_N\RDR_N_150\SalesReportType $salesReport)
    {
        $this->salesReport[] = $salesReport;
        return $this;
    }

    /**
     * isset salesReport
     *
     * A Composite containing details of SalesTransactions by a distribution partner reported to a record company.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSalesReport($index)
    {
        return isset($this->salesReport[$index]);
    }

    /**
     * unset salesReport
     *
     * A Composite containing details of SalesTransactions by a distribution partner reported to a record company.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSalesReport($index)
    {
        unset($this->salesReport[$index]);
    }

    /**
     * Gets as salesReport
     *
     * A Composite containing details of SalesTransactions by a distribution partner reported to a record company.
     *
     * @return \DDEX\RDR_N\RDR_N_150\SalesReportType[]
     */
    public function getSalesReport()
    {
        return $this->salesReport;
    }

    /**
     * Sets a new salesReport
     *
     * A Composite containing details of SalesTransactions by a distribution partner reported to a record company.
     *
     * @param \DDEX\RDR_N\RDR_N_150\SalesReportType[] $salesReport
     * @return self
     */
    public function setSalesReport(array $salesReport)
    {
        $this->salesReport = $salesReport;
        return $this;
    }

    /**
     * Gets as numberOfSalesTransactionRecords
     *
     * The check number which identifies the number of SalesTransaction records contained in the SalesReportMessage.
     *
     * @return int
     */
    public function getNumberOfSalesTransactionRecords()
    {
        return $this->numberOfSalesTransactionRecords;
    }

    /**
     * Sets a new numberOfSalesTransactionRecords
     *
     * The check number which identifies the number of SalesTransaction records contained in the SalesReportMessage.
     *
     * @param int $numberOfSalesTransactionRecords
     * @return self
     */
    public function setNumberOfSalesTransactionRecords($numberOfSalesTransactionRecords)
    {
        $this->numberOfSalesTransactionRecords = $numberOfSalesTransactionRecords;
        return $this;
    }
}


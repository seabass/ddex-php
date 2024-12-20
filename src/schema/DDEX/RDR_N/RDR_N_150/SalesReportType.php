<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing SalesReportType
 *
 * A Composite containing details of SalesTransactions.
 * XSD Type: SalesReport
 */
class SalesReportType
{
    /**
     * A Territory for which SalesTransactions are reported. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DDEX\RDR_N\RDR_N_150\CurrentTerritoryCodeType[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Composite containing details of the reporting Period covered by the SalesReportMessage.
     *
     * @var \DDEX\RDR_N\RDR_N_150\MessageNotificationPeriodType $messageNotificationPeriod
     */
    private $messageNotificationPeriod = null;

    /**
     * A Composite containing details of a SalesTransaction for specified Usages of the Release or Resource.
     *
     * @var \DDEX\RDR_N\RDR_N_150\SalesTransactionType[] $salesTransaction
     */
    private $salesTransaction = [
        
    ];

    /**
     * Adds as territoryCode
     *
     * A Territory for which SalesTransactions are reported. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\CurrentTerritoryCodeType $territoryCode
     */
    public function addToTerritoryCode(\DDEX\RDR_N\RDR_N_150\CurrentTerritoryCodeType $territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A Territory for which SalesTransactions are reported. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryCode($index)
    {
        return isset($this->territoryCode[$index]);
    }

    /**
     * unset territoryCode
     *
     * A Territory for which SalesTransactions are reported. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryCode($index)
    {
        unset($this->territoryCode[$index]);
    }

    /**
     * Gets as territoryCode
     *
     * A Territory for which SalesTransactions are reported. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DDEX\RDR_N\RDR_N_150\CurrentTerritoryCodeType[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory for which SalesTransactions are reported. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DDEX\RDR_N\RDR_N_150\CurrentTerritoryCodeType[] $territoryCode
     * @return self
     */
    public function setTerritoryCode(array $territoryCode)
    {
        $this->territoryCode = $territoryCode;
        return $this;
    }

    /**
     * Gets as messageNotificationPeriod
     *
     * A Composite containing details of the reporting Period covered by the SalesReportMessage.
     *
     * @return \DDEX\RDR_N\RDR_N_150\MessageNotificationPeriodType
     */
    public function getMessageNotificationPeriod()
    {
        return $this->messageNotificationPeriod;
    }

    /**
     * Sets a new messageNotificationPeriod
     *
     * A Composite containing details of the reporting Period covered by the SalesReportMessage.
     *
     * @param \DDEX\RDR_N\RDR_N_150\MessageNotificationPeriodType $messageNotificationPeriod
     * @return self
     */
    public function setMessageNotificationPeriod(\DDEX\RDR_N\RDR_N_150\MessageNotificationPeriodType $messageNotificationPeriod)
    {
        $this->messageNotificationPeriod = $messageNotificationPeriod;
        return $this;
    }

    /**
     * Adds as salesTransaction
     *
     * A Composite containing details of a SalesTransaction for specified Usages of the Release or Resource.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\SalesTransactionType $salesTransaction
     */
    public function addToSalesTransaction(\DDEX\RDR_N\RDR_N_150\SalesTransactionType $salesTransaction)
    {
        $this->salesTransaction[] = $salesTransaction;
        return $this;
    }

    /**
     * isset salesTransaction
     *
     * A Composite containing details of a SalesTransaction for specified Usages of the Release or Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSalesTransaction($index)
    {
        return isset($this->salesTransaction[$index]);
    }

    /**
     * unset salesTransaction
     *
     * A Composite containing details of a SalesTransaction for specified Usages of the Release or Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSalesTransaction($index)
    {
        unset($this->salesTransaction[$index]);
    }

    /**
     * Gets as salesTransaction
     *
     * A Composite containing details of a SalesTransaction for specified Usages of the Release or Resource.
     *
     * @return \DDEX\RDR_N\RDR_N_150\SalesTransactionType[]
     */
    public function getSalesTransaction()
    {
        return $this->salesTransaction;
    }

    /**
     * Sets a new salesTransaction
     *
     * A Composite containing details of a SalesTransaction for specified Usages of the Release or Resource.
     *
     * @param \DDEX\RDR_N\RDR_N_150\SalesTransactionType[] $salesTransaction
     * @return self
     */
    public function setSalesTransaction(array $salesTransaction)
    {
        $this->salesTransaction = $salesTransaction;
        return $this;
    }
}


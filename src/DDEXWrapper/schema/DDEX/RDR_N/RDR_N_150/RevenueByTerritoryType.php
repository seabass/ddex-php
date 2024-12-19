<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing RevenueByTerritoryType
 *
 * A Composite containing details of a Revenue specified for a Territory.
 * XSD Type: RevenueByTerritory
 */
class RevenueByTerritoryType
{
    /**
     * A Territory for which Revenue is reported. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DDEX\RDR_N\RDR_N_150\AllTerritoryCodeType $territoryCode
     */
    private $territoryCode = null;

    /**
     * An Identifier of a user.
     *
     * @var string $userName
     */
    private $userName = null;

    /**
     * A Description providing information about the role the user of the SoundRecording. This Comment is used to further detail the UserName.
     *
     * @var string $userRole
     */
    private $userRole = null;

    /**
     * A Duration of the SoundRecording that has been used in a specified context (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval[] $durationUsed
     */
    private $durationUsed = [
        
    ];

    /**
     * A number of times a SoundRecording has been used.
     *
     * @var int[] $numberOfUsages
     */
    private $numberOfUsages = [
        
    ];

    /**
     * The Flag indicating whether the Revenue is a credit (=true) or a debit (=false).
     *
     * @var bool $isCredit
     */
    private $isCredit = null;

    /**
     * A Composite containing details of a Revenue.
     *
     * @var \DDEX\RDR_N\RDR_N_150\RevenueType $revenue
     */
    private $revenue = null;

    /**
     * Gets as territoryCode
     *
     * A Territory for which Revenue is reported. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DDEX\RDR_N\RDR_N_150\AllTerritoryCodeType
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory for which Revenue is reported. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DDEX\RDR_N\RDR_N_150\AllTerritoryCodeType $territoryCode
     * @return self
     */
    public function setTerritoryCode(\DDEX\RDR_N\RDR_N_150\AllTerritoryCodeType $territoryCode)
    {
        $this->territoryCode = $territoryCode;
        return $this;
    }

    /**
     * Gets as userName
     *
     * An Identifier of a user.
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Sets a new userName
     *
     * An Identifier of a user.
     *
     * @param string $userName
     * @return self
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * Gets as userRole
     *
     * A Description providing information about the role the user of the SoundRecording. This Comment is used to further detail the UserName.
     *
     * @return string
     */
    public function getUserRole()
    {
        return $this->userRole;
    }

    /**
     * Sets a new userRole
     *
     * A Description providing information about the role the user of the SoundRecording. This Comment is used to further detail the UserName.
     *
     * @param string $userRole
     * @return self
     */
    public function setUserRole($userRole)
    {
        $this->userRole = $userRole;
        return $this;
    }

    /**
     * Adds as durationUsed
     *
     * A Duration of the SoundRecording that has been used in a specified context (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @return self
     * @param \DateInterval $durationUsed
     */
    public function addToDurationUsed(\DateInterval $durationUsed)
    {
        $this->durationUsed[] = $durationUsed;
        return $this;
    }

    /**
     * isset durationUsed
     *
     * A Duration of the SoundRecording that has been used in a specified context (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDurationUsed($index)
    {
        return isset($this->durationUsed[$index]);
    }

    /**
     * unset durationUsed
     *
     * A Duration of the SoundRecording that has been used in a specified context (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDurationUsed($index)
    {
        unset($this->durationUsed[$index]);
    }

    /**
     * Gets as durationUsed
     *
     * A Duration of the SoundRecording that has been used in a specified context (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @return \DateInterval[]
     */
    public function getDurationUsed()
    {
        return $this->durationUsed;
    }

    /**
     * Sets a new durationUsed
     *
     * A Duration of the SoundRecording that has been used in a specified context (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @param \DateInterval[] $durationUsed
     * @return self
     */
    public function setDurationUsed(array $durationUsed = null)
    {
        $this->durationUsed = $durationUsed;
        return $this;
    }

    /**
     * Adds as numberOfUsages
     *
     * A number of times a SoundRecording has been used.
     *
     * @return self
     * @param int $numberOfUsages
     */
    public function addToNumberOfUsages($numberOfUsages)
    {
        $this->numberOfUsages[] = $numberOfUsages;
        return $this;
    }

    /**
     * isset numberOfUsages
     *
     * A number of times a SoundRecording has been used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNumberOfUsages($index)
    {
        return isset($this->numberOfUsages[$index]);
    }

    /**
     * unset numberOfUsages
     *
     * A number of times a SoundRecording has been used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNumberOfUsages($index)
    {
        unset($this->numberOfUsages[$index]);
    }

    /**
     * Gets as numberOfUsages
     *
     * A number of times a SoundRecording has been used.
     *
     * @return int[]
     */
    public function getNumberOfUsages()
    {
        return $this->numberOfUsages;
    }

    /**
     * Sets a new numberOfUsages
     *
     * A number of times a SoundRecording has been used.
     *
     * @param int[] $numberOfUsages
     * @return self
     */
    public function setNumberOfUsages(array $numberOfUsages = null)
    {
        $this->numberOfUsages = $numberOfUsages;
        return $this;
    }

    /**
     * Gets as isCredit
     *
     * The Flag indicating whether the Revenue is a credit (=true) or a debit (=false).
     *
     * @return bool
     */
    public function getIsCredit()
    {
        return $this->isCredit;
    }

    /**
     * Sets a new isCredit
     *
     * The Flag indicating whether the Revenue is a credit (=true) or a debit (=false).
     *
     * @param bool $isCredit
     * @return self
     */
    public function setIsCredit($isCredit)
    {
        $this->isCredit = $isCredit;
        return $this;
    }

    /**
     * Gets as revenue
     *
     * A Composite containing details of a Revenue.
     *
     * @return \DDEX\RDR_N\RDR_N_150\RevenueType
     */
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * Sets a new revenue
     *
     * A Composite containing details of a Revenue.
     *
     * @param \DDEX\RDR_N\RDR_N_150\RevenueType $revenue
     * @return self
     */
    public function setRevenue(\DDEX\RDR_N\RDR_N_150\RevenueType $revenue)
    {
        $this->revenue = $revenue;
        return $this;
    }
}


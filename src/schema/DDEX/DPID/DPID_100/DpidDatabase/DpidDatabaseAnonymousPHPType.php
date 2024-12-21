<?php

namespace DDEX\DPID\DPID_100\DpidDatabase;

/**
 * Class representing DpidDatabaseAnonymousPHPType
 */
class DpidDatabaseAnonymousPHPType
{
    /**
     * @var \DDEX\DPID\DPID_100\DpidDatabase\DpidDatabaseAnonymousPHPType\DpidOwnerAnonymousPHPType[] $dpidOwner
     */
    private $dpidOwner = [
        
    ];

    /**
     * Adds as dpidOwner
     *
     * @return self
     * @param \DDEX\DPID\DPID_100\DpidDatabase\DpidDatabaseAnonymousPHPType\DpidOwnerAnonymousPHPType $dpidOwner
     */
    public function addToDpidOwner(\DDEX\DPID\DPID_100\DpidDatabase\DpidDatabaseAnonymousPHPType\DpidOwnerAnonymousPHPType $dpidOwner)
    {
        $this->dpidOwner[] = $dpidOwner;
        return $this;
    }

    /**
     * isset dpidOwner
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDpidOwner($index)
    {
        return isset($this->dpidOwner[$index]);
    }

    /**
     * unset dpidOwner
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDpidOwner($index)
    {
        unset($this->dpidOwner[$index]);
    }

    /**
     * Gets as dpidOwner
     *
     * @return \DDEX\DPID\DPID_100\DpidDatabase\DpidDatabaseAnonymousPHPType\DpidOwnerAnonymousPHPType[]
     */
    public function getDpidOwner()
    {
        return $this->dpidOwner;
    }

    /**
     * Sets a new dpidOwner
     *
     * @param \DDEX\DPID\DPID_100\DpidDatabase\DpidDatabaseAnonymousPHPType\DpidOwnerAnonymousPHPType[] $dpidOwner
     * @return self
     */
    public function setDpidOwner(array $dpidOwner)
    {
        $this->dpidOwner = $dpidOwner;
        return $this;
    }
}


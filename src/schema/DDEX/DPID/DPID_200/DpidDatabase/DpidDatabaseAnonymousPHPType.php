<?php

namespace DDEX\DPID\DPID_200\DpidDatabase;

/**
 * Class representing DpidDatabaseAnonymousPHPType
 */
class DpidDatabaseAnonymousPHPType
{
    /**
     * A Composite containing details of an owner of a DDEX Party ID.
     *
     * @var \DDEX\DPID\DPID_200\DpidOwnerType[] $dpidOwner
     */
    private $dpidOwner = [
        
    ];

    /**
     * Adds as dpidOwner
     *
     * A Composite containing details of an owner of a DDEX Party ID.
     *
     * @return self
     * @param \DDEX\DPID\DPID_200\DpidOwnerType $dpidOwner
     */
    public function addToDpidOwner(\DDEX\DPID\DPID_200\DpidOwnerType $dpidOwner)
    {
        $this->dpidOwner[] = $dpidOwner;
        return $this;
    }

    /**
     * isset dpidOwner
     *
     * A Composite containing details of an owner of a DDEX Party ID.
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
     * A Composite containing details of an owner of a DDEX Party ID.
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
     * A Composite containing details of an owner of a DDEX Party ID.
     *
     * @return \DDEX\DPID\DPID_200\DpidOwnerType[]
     */
    public function getDpidOwner()
    {
        return $this->dpidOwner;
    }

    /**
     * Sets a new dpidOwner
     *
     * A Composite containing details of an owner of a DDEX Party ID.
     *
     * @param \DDEX\DPID\DPID_200\DpidOwnerType[] $dpidOwner
     * @return self
     */
    public function setDpidOwner(array $dpidOwner)
    {
        $this->dpidOwner = $dpidOwner;
        return $this;
    }
}


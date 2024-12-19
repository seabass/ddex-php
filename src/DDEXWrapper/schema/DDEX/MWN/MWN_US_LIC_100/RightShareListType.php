<?php

namespace DDEX\MWN\MWN_US_LIC_100;

/**
 * Class representing RightShareListType
 *
 * A Composite containing details of one or more RightShares.
 * XSD Type: RightShareList
 */
class RightShareListType
{
    /**
     * A Composite containing details of a RightShare.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\RightShareType[] $rightShare
     */
    private $rightShare = [
        
    ];

    /**
     * Adds as rightShare
     *
     * A Composite containing details of a RightShare.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_100\RightShareType $rightShare
     */
    public function addToRightShare(\DDEX\MWN\MWN_US_LIC_100\RightShareType $rightShare)
    {
        $this->rightShare[] = $rightShare;
        return $this;
    }

    /**
     * isset rightShare
     *
     * A Composite containing details of a RightShare.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightShare($index)
    {
        return isset($this->rightShare[$index]);
    }

    /**
     * unset rightShare
     *
     * A Composite containing details of a RightShare.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightShare($index)
    {
        unset($this->rightShare[$index]);
    }

    /**
     * Gets as rightShare
     *
     * A Composite containing details of a RightShare.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\RightShareType[]
     */
    public function getRightShare()
    {
        return $this->rightShare;
    }

    /**
     * Sets a new rightShare
     *
     * A Composite containing details of a RightShare.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\RightShareType[] $rightShare
     * @return self
     */
    public function setRightShare(array $rightShare)
    {
        $this->rightShare = $rightShare;
        return $this;
    }
}


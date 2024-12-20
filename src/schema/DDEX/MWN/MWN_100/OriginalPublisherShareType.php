<?php

namespace DDEX\MWN\MWN_100;

/**
 * Class representing OriginalPublisherShareType
 *
 * A Composite containing details of an OriginalPublisherShare which is related to another RightShare.
 * XSD Type: OriginalPublisherShare
 */
class OriginalPublisherShareType
{
    /**
     * A Reference for an OriginalPublisherShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @var string $originalPublisherShare
     */
    private $originalPublisherShare = null;

    /**
     * Gets as originalPublisherShare
     *
     * A Reference for an OriginalPublisherShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @return string
     */
    public function getOriginalPublisherShare()
    {
        return $this->originalPublisherShare;
    }

    /**
     * Sets a new originalPublisherShare
     *
     * A Reference for an OriginalPublisherShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @param string $originalPublisherShare
     * @return self
     */
    public function setOriginalPublisherShare($originalPublisherShare)
    {
        $this->originalPublisherShare = $originalPublisherShare;
        return $this;
    }
}


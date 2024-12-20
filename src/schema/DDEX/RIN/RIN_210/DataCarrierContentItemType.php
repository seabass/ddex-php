<?php

namespace DDEX\RIN\RIN_210;

/**
 * Class representing DataCarrierContentItemType
 *
 * A Composite containing details of an item located on a DataCarrier.
 * XSD Type: DataCarrierContentItem
 */
class DataCarrierContentItemType
{
    /**
     * The number indicating the order of the ContentItem in a group of ContentItems within a DataCarrier.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A textual Description of the ContentItem.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * An additional Comment about the ContentItem.
     *
     * @var string $comment
     */
    private $comment = null;

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the ContentItem in a group of ContentItems within a DataCarrier.
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
     * The number indicating the order of the ContentItem in a group of ContentItems within a DataCarrier.
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
     * Gets as description
     *
     * A textual Description of the ContentItem.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A textual Description of the ContentItem.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as comment
     *
     * An additional Comment about the ContentItem.
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * An additional Comment about the ContentItem.
     *
     * @param string $comment
     * @return self
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }
}


<?php

namespace DDEX\RIN\RIN11F;

/**
 * Class representing DetailsType
 *
 * A Composite containing further details of a Transfer.
 * XSD Type: Details
 */
class DetailsType
{
    /**
     * The number indicating the order of this Details composite in a group of composites.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * The category pertaining to the details of the Transfer.
     *
     * @var string $transferCategory
     */
    private $transferCategory = null;

    /**
     * A Description of the details for the TransferCategory.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * A Composite containing a further details of the Description.
     *
     * @var \DDEX\RIN\RIN11F\CommentType $comment
     */
    private $comment = null;

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of this Details composite in a group of composites.
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
     * The number indicating the order of this Details composite in a group of composites.
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
     * Gets as transferCategory
     *
     * The category pertaining to the details of the Transfer.
     *
     * @return string
     */
    public function getTransferCategory()
    {
        return $this->transferCategory;
    }

    /**
     * Sets a new transferCategory
     *
     * The category pertaining to the details of the Transfer.
     *
     * @param string $transferCategory
     * @return self
     */
    public function setTransferCategory($transferCategory)
    {
        $this->transferCategory = $transferCategory;
        return $this;
    }

    /**
     * Gets as description
     *
     * A Description of the details for the TransferCategory.
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
     * A Description of the details for the TransferCategory.
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
     * A Composite containing a further details of the Description.
     *
     * @return \DDEX\RIN\RIN11F\CommentType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A Composite containing a further details of the Description.
     *
     * @param \DDEX\RIN\RIN11F\CommentType $comment
     * @return self
     */
    public function setComment(?\DDEX\RIN\RIN11F\CommentType $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }
}


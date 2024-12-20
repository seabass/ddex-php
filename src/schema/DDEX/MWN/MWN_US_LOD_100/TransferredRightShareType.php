<?php

namespace DDEX\MWN\MWN_US_LOD_100;

/**
 * Class representing TransferredRightShareType
 *
 * A Composite containing details of RightShares before and after a transfer of rights.
 * XSD Type: TransferredRightShare
 */
class TransferredRightShareType
{
    /**
     * A Flag indicating whether the RightShare has been relinquished (=true) or not (=false). This element is complementary information that is added when a LoDMessage is forwarded.
     *
     * @var bool $hasRelinquishment
     */
    private $hasRelinquishment = null;

    /**
     * A Reference for a RightShare (specific to this Message) that is subject to the CatalogTransfer (so this refers to an existing RightShare before the transfer). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @var string[] $preTransfer
     */
    private $preTransfer = [
        
    ];

    /**
     * A Reference for a RightShare (specific to this Message) that results from the CatalogTransfer (so this refers to a RightShare after the transfer). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @var string[] $postTransfer
     */
    private $postTransfer = [
        
    ];

    /**
     * Gets as hasRelinquishment
     *
     * A Flag indicating whether the RightShare has been relinquished (=true) or not (=false). This element is complementary information that is added when a LoDMessage is forwarded.
     *
     * @return bool
     */
    public function getHasRelinquishment()
    {
        return $this->hasRelinquishment;
    }

    /**
     * Sets a new hasRelinquishment
     *
     * A Flag indicating whether the RightShare has been relinquished (=true) or not (=false). This element is complementary information that is added when a LoDMessage is forwarded.
     *
     * @param bool $hasRelinquishment
     * @return self
     */
    public function setHasRelinquishment($hasRelinquishment)
    {
        $this->hasRelinquishment = $hasRelinquishment;
        return $this;
    }

    /**
     * Adds as preTransfer
     *
     * A Reference for a RightShare (specific to this Message) that is subject to the CatalogTransfer (so this refers to an existing RightShare before the transfer). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @return self
     * @param string $preTransfer
     */
    public function addToPreTransfer($preTransfer)
    {
        $this->preTransfer[] = $preTransfer;
        return $this;
    }

    /**
     * isset preTransfer
     *
     * A Reference for a RightShare (specific to this Message) that is subject to the CatalogTransfer (so this refers to an existing RightShare before the transfer). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPreTransfer($index)
    {
        return isset($this->preTransfer[$index]);
    }

    /**
     * unset preTransfer
     *
     * A Reference for a RightShare (specific to this Message) that is subject to the CatalogTransfer (so this refers to an existing RightShare before the transfer). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPreTransfer($index)
    {
        unset($this->preTransfer[$index]);
    }

    /**
     * Gets as preTransfer
     *
     * A Reference for a RightShare (specific to this Message) that is subject to the CatalogTransfer (so this refers to an existing RightShare before the transfer). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @return string[]
     */
    public function getPreTransfer()
    {
        return $this->preTransfer;
    }

    /**
     * Sets a new preTransfer
     *
     * A Reference for a RightShare (specific to this Message) that is subject to the CatalogTransfer (so this refers to an existing RightShare before the transfer). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @param string $preTransfer
     * @return self
     */
    public function setPreTransfer(array $preTransfer = null)
    {
        $this->preTransfer = $preTransfer;
        return $this;
    }

    /**
     * Adds as postTransfer
     *
     * A Reference for a RightShare (specific to this Message) that results from the CatalogTransfer (so this refers to a RightShare after the transfer). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @return self
     * @param string $postTransfer
     */
    public function addToPostTransfer($postTransfer)
    {
        $this->postTransfer[] = $postTransfer;
        return $this;
    }

    /**
     * isset postTransfer
     *
     * A Reference for a RightShare (specific to this Message) that results from the CatalogTransfer (so this refers to a RightShare after the transfer). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPostTransfer($index)
    {
        return isset($this->postTransfer[$index]);
    }

    /**
     * unset postTransfer
     *
     * A Reference for a RightShare (specific to this Message) that results from the CatalogTransfer (so this refers to a RightShare after the transfer). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPostTransfer($index)
    {
        unset($this->postTransfer[$index]);
    }

    /**
     * Gets as postTransfer
     *
     * A Reference for a RightShare (specific to this Message) that results from the CatalogTransfer (so this refers to a RightShare after the transfer). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @return string[]
     */
    public function getPostTransfer()
    {
        return $this->postTransfer;
    }

    /**
     * Sets a new postTransfer
     *
     * A Reference for a RightShare (specific to this Message) that results from the CatalogTransfer (so this refers to a RightShare after the transfer). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @param string $postTransfer
     * @return self
     */
    public function setPostTransfer(array $postTransfer)
    {
        $this->postTransfer = $postTransfer;
        return $this;
    }
}


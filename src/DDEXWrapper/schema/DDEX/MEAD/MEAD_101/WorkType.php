<?php

namespace DDEX\MEAD\MEAD_101;

/**
 * Class representing WorkType
 *
 * A Composite containing details of a Work.
 * XSD Type: Work
 */
class WorkType
{
    /**
     * The ISWC of the Work for which information is provided.
     *
     * @var string $iSWC
     */
    private $iSWC = null;

    /**
     * A ProprietaryIdentifier of the Work for which information is provided.
     *
     * @var string $proprietaryWorkId
     */
    private $proprietaryWorkId = null;

    /**
     * The Title of the Work for which information is provided.
     *
     * @var \DDEX\MEAD\MEAD_101\WorkTitleType[] $workTitle
     */
    private $workTitle = [
        
    ];

    /**
     * A Composite containing details of a writer of the Work for which information is provided.
     *
     * @var \DDEX\MEAD\MEAD_101\PartyWithNamesType[] $writer
     */
    private $writer = [
        
    ];

    /**
     * Gets as iSWC
     *
     * The ISWC of the Work for which information is provided.
     *
     * @return string
     */
    public function getISWC()
    {
        return $this->iSWC;
    }

    /**
     * Sets a new iSWC
     *
     * The ISWC of the Work for which information is provided.
     *
     * @param string $iSWC
     * @return self
     */
    public function setISWC($iSWC)
    {
        $this->iSWC = $iSWC;
        return $this;
    }

    /**
     * Gets as proprietaryWorkId
     *
     * A ProprietaryIdentifier of the Work for which information is provided.
     *
     * @return string
     */
    public function getProprietaryWorkId()
    {
        return $this->proprietaryWorkId;
    }

    /**
     * Sets a new proprietaryWorkId
     *
     * A ProprietaryIdentifier of the Work for which information is provided.
     *
     * @param string $proprietaryWorkId
     * @return self
     */
    public function setProprietaryWorkId($proprietaryWorkId)
    {
        $this->proprietaryWorkId = $proprietaryWorkId;
        return $this;
    }

    /**
     * Adds as workTitle
     *
     * The Title of the Work for which information is provided.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\WorkTitleType $workTitle
     */
    public function addToWorkTitle(\DDEX\MEAD\MEAD_101\WorkTitleType $workTitle)
    {
        $this->workTitle[] = $workTitle;
        return $this;
    }

    /**
     * isset workTitle
     *
     * The Title of the Work for which information is provided.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWorkTitle($index)
    {
        return isset($this->workTitle[$index]);
    }

    /**
     * unset workTitle
     *
     * The Title of the Work for which information is provided.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWorkTitle($index)
    {
        unset($this->workTitle[$index]);
    }

    /**
     * Gets as workTitle
     *
     * The Title of the Work for which information is provided.
     *
     * @return \DDEX\MEAD\MEAD_101\WorkTitleType[]
     */
    public function getWorkTitle()
    {
        return $this->workTitle;
    }

    /**
     * Sets a new workTitle
     *
     * The Title of the Work for which information is provided.
     *
     * @param \DDEX\MEAD\MEAD_101\WorkTitleType[] $workTitle
     * @return self
     */
    public function setWorkTitle(array $workTitle)
    {
        $this->workTitle = $workTitle;
        return $this;
    }

    /**
     * Adds as writer
     *
     * A Composite containing details of a writer of the Work for which information is provided.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\PartyWithNamesType $writer
     */
    public function addToWriter(\DDEX\MEAD\MEAD_101\PartyWithNamesType $writer)
    {
        $this->writer[] = $writer;
        return $this;
    }

    /**
     * isset writer
     *
     * A Composite containing details of a writer of the Work for which information is provided.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWriter($index)
    {
        return isset($this->writer[$index]);
    }

    /**
     * unset writer
     *
     * A Composite containing details of a writer of the Work for which information is provided.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWriter($index)
    {
        unset($this->writer[$index]);
    }

    /**
     * Gets as writer
     *
     * A Composite containing details of a writer of the Work for which information is provided.
     *
     * @return \DDEX\MEAD\MEAD_101\PartyWithNamesType[]
     */
    public function getWriter()
    {
        return $this->writer;
    }

    /**
     * Sets a new writer
     *
     * A Composite containing details of a writer of the Work for which information is provided.
     *
     * @param \DDEX\MEAD\MEAD_101\PartyWithNamesType[] $writer
     * @return self
     */
    public function setWriter(array $writer = null)
    {
        $this->writer = $writer;
        return $this;
    }
}


<?php

namespace DDEX\MEAD\MEAD_101;

/**
 * Class representing WorkSummaryType
 *
 * A Composite containing summary details of a Work.
 * XSD Type: WorkSummary
 */
class WorkSummaryType
{
    /**
     * A Composite containing details of a MusicalWorkId.
     *
     * @var \DDEX\MEAD\MEAD_101\MusicalWorkIdType $musicalWorkId
     */
    private $musicalWorkId = null;

    /**
     * A Composite containing details of a Title of the Work as the MessageSender suggests it should be shown to the Consumer.
     *
     * @var \DDEX\MEAD\MEAD_101\TitleWithPronunciationType[] $workTitle
     */
    private $workTitle = [
        
    ];

    /**
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @var \DDEX\MEAD\MEAD_101\PartyNameWithTerritoryType[] $writer
     */
    private $writer = [
        
    ];

    /**
     * Gets as musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId.
     *
     * @return \DDEX\MEAD\MEAD_101\MusicalWorkIdType
     */
    public function getMusicalWorkId()
    {
        return $this->musicalWorkId;
    }

    /**
     * Sets a new musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId.
     *
     * @param \DDEX\MEAD\MEAD_101\MusicalWorkIdType $musicalWorkId
     * @return self
     */
    public function setMusicalWorkId(\DDEX\MEAD\MEAD_101\MusicalWorkIdType $musicalWorkId)
    {
        $this->musicalWorkId = $musicalWorkId;
        return $this;
    }

    /**
     * Adds as workTitle
     *
     * A Composite containing details of a Title of the Work as the MessageSender suggests it should be shown to the Consumer.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\TitleWithPronunciationType $workTitle
     */
    public function addToWorkTitle(\DDEX\MEAD\MEAD_101\TitleWithPronunciationType $workTitle)
    {
        $this->workTitle[] = $workTitle;
        return $this;
    }

    /**
     * isset workTitle
     *
     * A Composite containing details of a Title of the Work as the MessageSender suggests it should be shown to the Consumer.
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
     * A Composite containing details of a Title of the Work as the MessageSender suggests it should be shown to the Consumer.
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
     * A Composite containing details of a Title of the Work as the MessageSender suggests it should be shown to the Consumer.
     *
     * @return \DDEX\MEAD\MEAD_101\TitleWithPronunciationType[]
     */
    public function getWorkTitle()
    {
        return $this->workTitle;
    }

    /**
     * Sets a new workTitle
     *
     * A Composite containing details of a Title of the Work as the MessageSender suggests it should be shown to the Consumer.
     *
     * @param \DDEX\MEAD\MEAD_101\TitleWithPronunciationType[] $workTitle
     * @return self
     */
    public function setWorkTitle(array $workTitle = null)
    {
        $this->workTitle = $workTitle;
        return $this;
    }

    /**
     * Adds as writer
     *
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\PartyNameWithTerritoryType $writer
     */
    public function addToWriter(\DDEX\MEAD\MEAD_101\PartyNameWithTerritoryType $writer)
    {
        $this->writer[] = $writer;
        return $this;
    }

    /**
     * isset writer
     *
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
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
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
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
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @return \DDEX\MEAD\MEAD_101\PartyNameWithTerritoryType[]
     */
    public function getWriter()
    {
        return $this->writer;
    }

    /**
     * Sets a new writer
     *
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @param \DDEX\MEAD\MEAD_101\PartyNameWithTerritoryType[] $writer
     * @return self
     */
    public function setWriter(array $writer)
    {
        $this->writer = $writer;
        return $this;
    }
}


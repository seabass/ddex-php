<?php

namespace DDEX\ERN\ERN_C_SFTP_160;

/**
 * Class representing AcknowledgedFileType
 *
 * A Composite containing details of a File received by FTP.
 * XSD Type: AcknowledgedFile
 */
class AcknowledgedFileType
{
    /**
     * The Identifier of the main Release of the XML file containing the acknowledged NewReleaseMessage. This is the same string that is part of the path for the NewReleaseMessage's XML file.
     *
     * @var string $releaseId
     */
    private $releaseId = null;

    /**
     * The Date on which the batch or XML file containing the acknowledged NewReleaseMessage was set up. This is the same string that is part of the path for the NewReleaseMessage's XML file. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var string $date
     */
    private $date = null;

    /**
     * Gets as releaseId
     *
     * The Identifier of the main Release of the XML file containing the acknowledged NewReleaseMessage. This is the same string that is part of the path for the NewReleaseMessage's XML file.
     *
     * @return string
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * The Identifier of the main Release of the XML file containing the acknowledged NewReleaseMessage. This is the same string that is part of the path for the NewReleaseMessage's XML file.
     *
     * @param string $releaseId
     * @return self
     */
    public function setReleaseId($releaseId)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Gets as date
     *
     * The Date on which the batch or XML file containing the acknowledged NewReleaseMessage was set up. This is the same string that is part of the path for the NewReleaseMessage's XML file. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The Date on which the batch or XML file containing the acknowledged NewReleaseMessage was set up. This is the same string that is part of the path for the NewReleaseMessage's XML file. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param string $date
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }
}


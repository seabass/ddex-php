<?php

namespace DDEX\RIN\RIN_200;

/**
 * Class representing ImportedRinFilesType
 *
 * A Composite containing details of one or more Files incorporated into the RecordingInformationNotification.
 * XSD Type: ImportedRinFiles
 */
class ImportedRinFilesType
{
    /**
     * A File in the DDEX Recording Information Notification Standard, containing an asset declarartion.
     *
     * @var \DDEX\RIN\RIN_200\RecordingInformationNotificationType[] $incorporatedRecordingInformationNotificationFile
     */
    private $incorporatedRecordingInformationNotificationFile = [
        
    ];

    /**
     * Adds as incorporatedRecordingInformationNotificationFile
     *
     * A File in the DDEX Recording Information Notification Standard, containing an asset declarartion.
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\RecordingInformationNotificationType $incorporatedRecordingInformationNotificationFile
     */
    public function addToIncorporatedRecordingInformationNotificationFile(\DDEX\RIN\RIN_200\RecordingInformationNotificationType $incorporatedRecordingInformationNotificationFile)
    {
        $this->incorporatedRecordingInformationNotificationFile[] = $incorporatedRecordingInformationNotificationFile;
        return $this;
    }

    /**
     * isset incorporatedRecordingInformationNotificationFile
     *
     * A File in the DDEX Recording Information Notification Standard, containing an asset declarartion.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIncorporatedRecordingInformationNotificationFile($index)
    {
        return isset($this->incorporatedRecordingInformationNotificationFile[$index]);
    }

    /**
     * unset incorporatedRecordingInformationNotificationFile
     *
     * A File in the DDEX Recording Information Notification Standard, containing an asset declarartion.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIncorporatedRecordingInformationNotificationFile($index)
    {
        unset($this->incorporatedRecordingInformationNotificationFile[$index]);
    }

    /**
     * Gets as incorporatedRecordingInformationNotificationFile
     *
     * A File in the DDEX Recording Information Notification Standard, containing an asset declarartion.
     *
     * @return \DDEX\RIN\RIN_200\RecordingInformationNotificationType[]
     */
    public function getIncorporatedRecordingInformationNotificationFile()
    {
        return $this->incorporatedRecordingInformationNotificationFile;
    }

    /**
     * Sets a new incorporatedRecordingInformationNotificationFile
     *
     * A File in the DDEX Recording Information Notification Standard, containing an asset declarartion.
     *
     * @param \DDEX\RIN\RIN_200\RecordingInformationNotificationType[] $incorporatedRecordingInformationNotificationFile
     * @return self
     */
    public function setIncorporatedRecordingInformationNotificationFile(array $incorporatedRecordingInformationNotificationFile)
    {
        $this->incorporatedRecordingInformationNotificationFile = $incorporatedRecordingInformationNotificationFile;
        return $this;
    }
}


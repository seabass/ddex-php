<?php

namespace DDEX\PIE\PIE_100;

/**
 * Class representing WorkForRequestType
 *
 * A Composite containing details of a related Work.
 * Explanatory Note: This Composite is named WorkForRequest to disambiguate it from the basic Work Composite.
 * XSD Type: WorkForRequest
 */
class WorkForRequestType
{
    /**
     * A Composite containing details of a MusicalWorkId.
     *
     * @var \DDEX\PIE\PIE_100\MusicalWorkIdWithoutFlagType $workId
     */
    private $workId = null;

    /**
     * A Composite containing details of a Title of the Work.
     *
     * @var \DDEX\PIE\PIE_100\WorkTitleType $workTitle
     */
    private $workTitle = null;

    /**
     * Gets as workId
     *
     * A Composite containing details of a MusicalWorkId.
     *
     * @return \DDEX\PIE\PIE_100\MusicalWorkIdWithoutFlagType
     */
    public function getWorkId()
    {
        return $this->workId;
    }

    /**
     * Sets a new workId
     *
     * A Composite containing details of a MusicalWorkId.
     *
     * @param \DDEX\PIE\PIE_100\MusicalWorkIdWithoutFlagType $workId
     * @return self
     */
    public function setWorkId(?\DDEX\PIE\PIE_100\MusicalWorkIdWithoutFlagType $workId = null)
    {
        $this->workId = $workId;
        return $this;
    }

    /**
     * Gets as workTitle
     *
     * A Composite containing details of a Title of the Work.
     *
     * @return \DDEX\PIE\PIE_100\WorkTitleType
     */
    public function getWorkTitle()
    {
        return $this->workTitle;
    }

    /**
     * Sets a new workTitle
     *
     * A Composite containing details of a Title of the Work.
     *
     * @param \DDEX\PIE\PIE_100\WorkTitleType $workTitle
     * @return self
     */
    public function setWorkTitle(?\DDEX\PIE\PIE_100\WorkTitleType $workTitle = null)
    {
        $this->workTitle = $workTitle;
        return $this;
    }
}


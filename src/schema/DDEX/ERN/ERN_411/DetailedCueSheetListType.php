<?php

namespace DDEX\ERN\ERN_411;

/**
 * Class representing DetailedCueSheetListType
 *
 * A Composite containing details of one or more CueSheets.
 * XSD Type: DetailedCueSheetList
 */
class DetailedCueSheetListType
{
    /**
     * A Composite containing details of a CueSheet contained in a Resource.
     *
     * @var \DDEX\ERN\ERN_411\DetailedCueSheetType[] $cueSheet
     */
    private $cueSheet = [
        
    ];

    /**
     * Adds as cueSheet
     *
     * A Composite containing details of a CueSheet contained in a Resource.
     *
     * @return self
     * @param \DDEX\ERN\ERN_411\DetailedCueSheetType $cueSheet
     */
    public function addToCueSheet(\DDEX\ERN\ERN_411\DetailedCueSheetType $cueSheet)
    {
        $this->cueSheet[] = $cueSheet;
        return $this;
    }

    /**
     * isset cueSheet
     *
     * A Composite containing details of a CueSheet contained in a Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCueSheet($index)
    {
        return isset($this->cueSheet[$index]);
    }

    /**
     * unset cueSheet
     *
     * A Composite containing details of a CueSheet contained in a Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCueSheet($index)
    {
        unset($this->cueSheet[$index]);
    }

    /**
     * Gets as cueSheet
     *
     * A Composite containing details of a CueSheet contained in a Resource.
     *
     * @return \DDEX\ERN\ERN_411\DetailedCueSheetType[]
     */
    public function getCueSheet()
    {
        return $this->cueSheet;
    }

    /**
     * Sets a new cueSheet
     *
     * A Composite containing details of a CueSheet contained in a Resource.
     *
     * @param \DDEX\ERN\ERN_411\DetailedCueSheetType[] $cueSheet
     * @return self
     */
    public function setCueSheet(array $cueSheet)
    {
        $this->cueSheet = $cueSheet;
        return $this;
    }
}


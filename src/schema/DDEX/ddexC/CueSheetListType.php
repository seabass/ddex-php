<?php

namespace DDEX\ddexC;

/**
 * Class representing CueSheetListType
 *
 * A ddex:Composite containing details of one or more ddex:CueSheets.
 * XSD Type: CueSheetList
 */
class CueSheetListType
{
    /**
     * A ddex:Composite containing details of a ddex:CueSheet contained in a ddex:Resource.
     *
     * @var \DDEX\ddexC\CueSheetType[] $cueSheet
     */
    private $cueSheet = [
        
    ];

    /**
     * Adds as cueSheet
     *
     * A ddex:Composite containing details of a ddex:CueSheet contained in a ddex:Resource.
     *
     * @return self
     * @param \DDEX\ddexC\CueSheetType $cueSheet
     */
    public function addToCueSheet(\DDEX\ddexC\CueSheetType $cueSheet)
    {
        $this->cueSheet[] = $cueSheet;
        return $this;
    }

    /**
     * isset cueSheet
     *
     * A ddex:Composite containing details of a ddex:CueSheet contained in a ddex:Resource.
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
     * A ddex:Composite containing details of a ddex:CueSheet contained in a ddex:Resource.
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
     * A ddex:Composite containing details of a ddex:CueSheet contained in a ddex:Resource.
     *
     * @return \DDEX\ddexC\CueSheetType[]
     */
    public function getCueSheet()
    {
        return $this->cueSheet;
    }

    /**
     * Sets a new cueSheet
     *
     * A ddex:Composite containing details of a ddex:CueSheet contained in a ddex:Resource.
     *
     * @param \DDEX\ddexC\CueSheetType[] $cueSheet
     * @return self
     */
    public function setCueSheet(array $cueSheet)
    {
        $this->cueSheet = $cueSheet;
        return $this;
    }
}


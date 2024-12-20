<?php

namespace DDEX\ddexC;

/**
 * Class representing VideoCueSheetReferenceListType
 *
 * A ddex:Composite containing a list of ddex:VideoCueSheetReferences.
 * XSD Type: VideoCueSheetReferenceList
 */
class VideoCueSheetReferenceListType
{
    /**
     * A ddex:Reference for a ddex:CueSheet (specific to this ddex:Message). This is a ddex:LocalCueSheetAnchorReference starting with the letter Q.
     *
     * @var string[] $videoCueSheetReference
     */
    private $videoCueSheetReference = [
        
    ];

    /**
     * Adds as videoCueSheetReference
     *
     * A ddex:Reference for a ddex:CueSheet (specific to this ddex:Message). This is a ddex:LocalCueSheetAnchorReference starting with the letter Q.
     *
     * @return self
     * @param string $videoCueSheetReference
     */
    public function addToVideoCueSheetReference($videoCueSheetReference)
    {
        $this->videoCueSheetReference[] = $videoCueSheetReference;
        return $this;
    }

    /**
     * isset videoCueSheetReference
     *
     * A ddex:Reference for a ddex:CueSheet (specific to this ddex:Message). This is a ddex:LocalCueSheetAnchorReference starting with the letter Q.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVideoCueSheetReference($index)
    {
        return isset($this->videoCueSheetReference[$index]);
    }

    /**
     * unset videoCueSheetReference
     *
     * A ddex:Reference for a ddex:CueSheet (specific to this ddex:Message). This is a ddex:LocalCueSheetAnchorReference starting with the letter Q.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVideoCueSheetReference($index)
    {
        unset($this->videoCueSheetReference[$index]);
    }

    /**
     * Gets as videoCueSheetReference
     *
     * A ddex:Reference for a ddex:CueSheet (specific to this ddex:Message). This is a ddex:LocalCueSheetAnchorReference starting with the letter Q.
     *
     * @return string[]
     */
    public function getVideoCueSheetReference()
    {
        return $this->videoCueSheetReference;
    }

    /**
     * Sets a new videoCueSheetReference
     *
     * A ddex:Reference for a ddex:CueSheet (specific to this ddex:Message). This is a ddex:LocalCueSheetAnchorReference starting with the letter Q.
     *
     * @param string $videoCueSheetReference
     * @return self
     */
    public function setVideoCueSheetReference(array $videoCueSheetReference)
    {
        $this->videoCueSheetReference = $videoCueSheetReference;
        return $this;
    }
}


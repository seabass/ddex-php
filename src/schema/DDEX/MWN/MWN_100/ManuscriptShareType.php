<?php

namespace DDEX\MWN\MWN_100;

/**
 * Class representing ManuscriptShareType
 *
 * A Composite containing details of a MusicalWorkManuscriptShare which is related to another RightShare.
 * XSD Type: ManuscriptShare
 */
class ManuscriptShareType
{
    /**
     * A Reference for the base RightShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @var string $baseRightShare
     */
    private $baseRightShare = null;

    /**
     * The Flag indicating whether the RightSharePercentage is unknown (=True) or not (=False).
     *
     * @var bool $rightShareUnknown
     */
    private $rightShareUnknown = null;

    /**
     * The absolute percentage of rights in the Work that are delegated. This information is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%).
     *
     * @var float $rightSharePercentage
     */
    private $rightSharePercentage = null;

    /**
     * Gets as baseRightShare
     *
     * A Reference for the base RightShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @return string
     */
    public function getBaseRightShare()
    {
        return $this->baseRightShare;
    }

    /**
     * Sets a new baseRightShare
     *
     * A Reference for the base RightShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @param string $baseRightShare
     * @return self
     */
    public function setBaseRightShare($baseRightShare)
    {
        $this->baseRightShare = $baseRightShare;
        return $this;
    }

    /**
     * Gets as rightShareUnknown
     *
     * The Flag indicating whether the RightSharePercentage is unknown (=True) or not (=False).
     *
     * @return bool
     */
    public function getRightShareUnknown()
    {
        return $this->rightShareUnknown;
    }

    /**
     * Sets a new rightShareUnknown
     *
     * The Flag indicating whether the RightSharePercentage is unknown (=True) or not (=False).
     *
     * @param bool $rightShareUnknown
     * @return self
     */
    public function setRightShareUnknown($rightShareUnknown)
    {
        $this->rightShareUnknown = $rightShareUnknown;
        return $this;
    }

    /**
     * Gets as rightSharePercentage
     *
     * The absolute percentage of rights in the Work that are delegated. This information is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%).
     *
     * @return float
     */
    public function getRightSharePercentage()
    {
        return $this->rightSharePercentage;
    }

    /**
     * Sets a new rightSharePercentage
     *
     * The absolute percentage of rights in the Work that are delegated. This information is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%).
     *
     * @param float $rightSharePercentage
     * @return self
     */
    public function setRightSharePercentage($rightSharePercentage)
    {
        $this->rightSharePercentage = $rightSharePercentage;
        return $this;
    }
}


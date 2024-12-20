<?php

namespace DDEX\MWN\MWN_100;

/**
 * Class representing IsFollowerInTitleOfType
 *
 * A Composite containing details of a RightShare, of which is another RightShare is the follower in title.
 * XSD Type: IsFollowerInTitleOf
 */
class IsFollowerInTitleOfType
{
    /**
     * A Reference for the base RightShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @var string $baseRightShare
     */
    private $baseRightShare = null;

    /**
     * The Flag indicating whether the cumulated RightSharePercentage is unknown (=True) or not (=False).
     *
     * @var bool $rightShareUnknown
     */
    private $rightShareUnknown = null;

    /**
     * The cumulated percentage of rights in the Work that are delegated. This information is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%).
     *
     * @var float $rightSharePercentage
     */
    private $rightSharePercentage = null;

    /**
     * A Composite containing details of a MusicalWorkManuscriptShare that is affected by the rights delegation.
     *
     * @var \DDEX\MWN\MWN_100\ManuscriptShareType[] $manuscriptShare
     */
    private $manuscriptShare = [
        
    ];

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
     * The Flag indicating whether the cumulated RightSharePercentage is unknown (=True) or not (=False).
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
     * The Flag indicating whether the cumulated RightSharePercentage is unknown (=True) or not (=False).
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
     * The cumulated percentage of rights in the Work that are delegated. This information is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%).
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
     * The cumulated percentage of rights in the Work that are delegated. This information is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%).
     *
     * @param float $rightSharePercentage
     * @return self
     */
    public function setRightSharePercentage($rightSharePercentage)
    {
        $this->rightSharePercentage = $rightSharePercentage;
        return $this;
    }

    /**
     * Adds as manuscriptShare
     *
     * A Composite containing details of a MusicalWorkManuscriptShare that is affected by the rights delegation.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\ManuscriptShareType $manuscriptShare
     */
    public function addToManuscriptShare(\DDEX\MWN\MWN_100\ManuscriptShareType $manuscriptShare)
    {
        $this->manuscriptShare[] = $manuscriptShare;
        return $this;
    }

    /**
     * isset manuscriptShare
     *
     * A Composite containing details of a MusicalWorkManuscriptShare that is affected by the rights delegation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetManuscriptShare($index)
    {
        return isset($this->manuscriptShare[$index]);
    }

    /**
     * unset manuscriptShare
     *
     * A Composite containing details of a MusicalWorkManuscriptShare that is affected by the rights delegation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetManuscriptShare($index)
    {
        unset($this->manuscriptShare[$index]);
    }

    /**
     * Gets as manuscriptShare
     *
     * A Composite containing details of a MusicalWorkManuscriptShare that is affected by the rights delegation.
     *
     * @return \DDEX\MWN\MWN_100\ManuscriptShareType[]
     */
    public function getManuscriptShare()
    {
        return $this->manuscriptShare;
    }

    /**
     * Sets a new manuscriptShare
     *
     * A Composite containing details of a MusicalWorkManuscriptShare that is affected by the rights delegation.
     *
     * @param \DDEX\MWN\MWN_100\ManuscriptShareType[] $manuscriptShare
     * @return self
     */
    public function setManuscriptShare(array $manuscriptShare)
    {
        $this->manuscriptShare = $manuscriptShare;
        return $this;
    }
}


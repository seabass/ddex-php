<?php

namespace DDEX\MWN\MWN_US_LIC_101;

/**
 * Class representing IsFollowerInTitleOfType
 *
 * A Composite containing details of a RightShare, of which is another RightShare is the follower in title.
 * XSD Type: IsFollowerInTitleOf
 */
class IsFollowerInTitleOfType
{
    /**
     * A Reference for the BaseRightShare (specific to this message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @var string $baseRightShare
     */
    private $baseRightShare = null;

    /**
     * The Flag indicating whether the cumulated RightSharePercentage is unknown (=true) or not (=false).
     *
     * @var bool $rightShareUnknown
     */
    private $rightShareUnknown = null;

    /**
     * The cumulated percentage of rights in the Work that are delegated. This information is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/communication-of-percentages
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\PercentageType $rightSharePercentage
     */
    private $rightSharePercentage = null;

    /**
     * A Composite containing details of a MusicalWorkManuscriptShare that is affected by the rights delegation.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\ManuscriptShareType $manuscriptShare
     */
    private $manuscriptShare = null;

    /**
     * Gets as baseRightShare
     *
     * A Reference for the BaseRightShare (specific to this message). This is a LocalRightShareAnchorReference starting with the letter S.
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
     * A Reference for the BaseRightShare (specific to this message). This is a LocalRightShareAnchorReference starting with the letter S.
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
     * The Flag indicating whether the cumulated RightSharePercentage is unknown (=true) or not (=false).
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
     * The Flag indicating whether the cumulated RightSharePercentage is unknown (=true) or not (=false).
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/communication-of-percentages
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\PercentageType
     */
    public function getRightSharePercentage()
    {
        return $this->rightSharePercentage;
    }

    /**
     * Sets a new rightSharePercentage
     *
     * The cumulated percentage of rights in the Work that are delegated. This information is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/communication-of-percentages
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\PercentageType $rightSharePercentage
     * @return self
     */
    public function setRightSharePercentage(?\DDEX\MWN\MWN_US_LIC_101\PercentageType $rightSharePercentage = null)
    {
        $this->rightSharePercentage = $rightSharePercentage;
        return $this;
    }

    /**
     * Gets as manuscriptShare
     *
     * A Composite containing details of a MusicalWorkManuscriptShare that is affected by the rights delegation.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\ManuscriptShareType
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
     * @param \DDEX\MWN\MWN_US_LIC_101\ManuscriptShareType $manuscriptShare
     * @return self
     */
    public function setManuscriptShare(\DDEX\MWN\MWN_US_LIC_101\ManuscriptShareType $manuscriptShare)
    {
        $this->manuscriptShare = $manuscriptShare;
        return $this;
    }
}


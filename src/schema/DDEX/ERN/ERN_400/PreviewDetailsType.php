<?php

namespace DDEX\ERN\ERN_400;

/**
 * Class representing PreviewDetailsType
 *
 * A Composite containing details of a preview.
 * XSD Type: PreviewDetails
 */
class PreviewDetailsType
{
    /**
     * The position of the preview measured in Pixels or millimetres from the top left corner of the Resource.
     *
     * @var float $topLeftCorner
     */
    private $topLeftCorner = null;

    /**
     * The position of the preview measured in Pixels or millimetres from the bottom right corner of the Resource.
     *
     * @var float $bottomRightCorner
     */
    private $bottomRightCorner = null;

    /**
     * A Type of expression indicating how this should be perceived, e.g. as instruction (meaning that this has to be done to create the preview) or as information (meaning that this has been done to craete the preview).
     *
     * @var string $expressionType
     */
    private $expressionType = null;

    /**
     * Gets as topLeftCorner
     *
     * The position of the preview measured in Pixels or millimetres from the top left corner of the Resource.
     *
     * @return float
     */
    public function getTopLeftCorner()
    {
        return $this->topLeftCorner;
    }

    /**
     * Sets a new topLeftCorner
     *
     * The position of the preview measured in Pixels or millimetres from the top left corner of the Resource.
     *
     * @param float $topLeftCorner
     * @return self
     */
    public function setTopLeftCorner($topLeftCorner)
    {
        $this->topLeftCorner = $topLeftCorner;
        return $this;
    }

    /**
     * Gets as bottomRightCorner
     *
     * The position of the preview measured in Pixels or millimetres from the bottom right corner of the Resource.
     *
     * @return float
     */
    public function getBottomRightCorner()
    {
        return $this->bottomRightCorner;
    }

    /**
     * Sets a new bottomRightCorner
     *
     * The position of the preview measured in Pixels or millimetres from the bottom right corner of the Resource.
     *
     * @param float $bottomRightCorner
     * @return self
     */
    public function setBottomRightCorner($bottomRightCorner)
    {
        $this->bottomRightCorner = $bottomRightCorner;
        return $this;
    }

    /**
     * Gets as expressionType
     *
     * A Type of expression indicating how this should be perceived, e.g. as instruction (meaning that this has to be done to create the preview) or as information (meaning that this has been done to craete the preview).
     *
     * @return string
     */
    public function getExpressionType()
    {
        return $this->expressionType;
    }

    /**
     * Sets a new expressionType
     *
     * A Type of expression indicating how this should be perceived, e.g. as instruction (meaning that this has to be done to create the preview) or as information (meaning that this has been done to craete the preview).
     *
     * @param string $expressionType
     * @return self
     */
    public function setExpressionType($expressionType)
    {
        $this->expressionType = $expressionType;
        return $this;
    }
}


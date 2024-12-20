<?php

namespace DDEX\MWL\MWL_200;

/**
 * Class representing ControlledCompositionClauseType
 *
 * A ddex:Composite containing details of a controlled composition clause.
 * XSD Type: ControlledCompositionClause
 */
class ControlledCompositionClauseType
{
    /**
     * The system Identifier of the mwl:ControlledCompositionClause.
     *
     * @var string $eventId
     */
    private $eventId = null;

    /**
     * The type of the rate modification.
     *
     * @var string[] $rateModificationType
     */
    private $rateModificationType = [
        
    ];

    /**
     * Gets as eventId
     *
     * The system Identifier of the mwl:ControlledCompositionClause.
     *
     * @return string
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * Sets a new eventId
     *
     * The system Identifier of the mwl:ControlledCompositionClause.
     *
     * @param string $eventId
     * @return self
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
        return $this;
    }

    /**
     * Adds as rateModificationType
     *
     * The type of the rate modification.
     *
     * @return self
     * @param string $rateModificationType
     */
    public function addToRateModificationType($rateModificationType)
    {
        $this->rateModificationType[] = $rateModificationType;
        return $this;
    }

    /**
     * isset rateModificationType
     *
     * The type of the rate modification.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRateModificationType($index)
    {
        return isset($this->rateModificationType[$index]);
    }

    /**
     * unset rateModificationType
     *
     * The type of the rate modification.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRateModificationType($index)
    {
        unset($this->rateModificationType[$index]);
    }

    /**
     * Gets as rateModificationType
     *
     * The type of the rate modification.
     *
     * @return string[]
     */
    public function getRateModificationType()
    {
        return $this->rateModificationType;
    }

    /**
     * Sets a new rateModificationType
     *
     * The type of the rate modification.
     *
     * @param string $rateModificationType
     * @return self
     */
    public function setRateModificationType(array $rateModificationType = null)
    {
        $this->rateModificationType = $rateModificationType;
        return $this;
    }
}


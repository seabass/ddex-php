<?php

namespace DDEX\DSR\DSR_430;

/**
 * Class representing DealForSocietiesType
 *
 * A Composite containing details (in full or in summary) of a Deal made between a DSP (as Licensee) and a Licensor of Works or Releases.
 * XSD Type: DealForSocieties
 */
class DealForSocietiesType
{
    /**
     * A Composite containing details of the terms and conditions of the Deal. Either this Element or the SummaryDeal are required, but not both.
     *
     * @var \DDEX\DSR\DSR_430\DetailedDealType $detailedDeal
     */
    private $detailedDeal = null;

    /**
     * A Composite containing a summary of the terms and conditions of the Deal. Either this Element or the DetailedDeal are required, but not both.
     *
     * @var \DDEX\DSR\DSR_430\SummaryDealType $summaryDeal
     */
    private $summaryDeal = null;

    /**
     * Gets as detailedDeal
     *
     * A Composite containing details of the terms and conditions of the Deal. Either this Element or the SummaryDeal are required, but not both.
     *
     * @return \DDEX\DSR\DSR_430\DetailedDealType
     */
    public function getDetailedDeal()
    {
        return $this->detailedDeal;
    }

    /**
     * Sets a new detailedDeal
     *
     * A Composite containing details of the terms and conditions of the Deal. Either this Element or the SummaryDeal are required, but not both.
     *
     * @param \DDEX\DSR\DSR_430\DetailedDealType $detailedDeal
     * @return self
     */
    public function setDetailedDeal(?\DDEX\DSR\DSR_430\DetailedDealType $detailedDeal = null)
    {
        $this->detailedDeal = $detailedDeal;
        return $this;
    }

    /**
     * Gets as summaryDeal
     *
     * A Composite containing a summary of the terms and conditions of the Deal. Either this Element or the DetailedDeal are required, but not both.
     *
     * @return \DDEX\DSR\DSR_430\SummaryDealType
     */
    public function getSummaryDeal()
    {
        return $this->summaryDeal;
    }

    /**
     * Sets a new summaryDeal
     *
     * A Composite containing a summary of the terms and conditions of the Deal. Either this Element or the DetailedDeal are required, but not both.
     *
     * @param \DDEX\DSR\DSR_430\SummaryDealType $summaryDeal
     * @return self
     */
    public function setSummaryDeal(?\DDEX\DSR\DSR_430\SummaryDealType $summaryDeal = null)
    {
        $this->summaryDeal = $summaryDeal;
        return $this;
    }
}


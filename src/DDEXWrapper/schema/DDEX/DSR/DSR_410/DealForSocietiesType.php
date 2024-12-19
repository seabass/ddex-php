<?php

namespace DDEX\DSR\DSR_410;

/**
 * Class representing DealForSocietiesType
 *
 * A ddex:Composite containing details (in full or in summary) of a ddex:Deal made between a ddex:DSP (as ddex:Licensee) and a ddex:Licensor of ddex:Works or ddex:Releases.
 * XSD Type: DealForSocieties
 */
class DealForSocietiesType
{
    /**
     * A ddex:Composite containing details of the terms and conditions of the ddex:Deal. Either this ddex:Element or the SummaryDeal are required, but not both.
     *
     * @var \DDEX\DSR\DSR_410\DetailedDealType $detailedDeal
     */
    private $detailedDeal = null;

    /**
     * A ddex:Composite containing a summary of the terms and conditions of the ddex:Deal. Either this ddex:Element or the DetailedDeal are required, but not both.
     *
     * @var \DDEX\DSR\DSR_410\SummaryDealType $summaryDeal
     */
    private $summaryDeal = null;

    /**
     * Gets as detailedDeal
     *
     * A ddex:Composite containing details of the terms and conditions of the ddex:Deal. Either this ddex:Element or the SummaryDeal are required, but not both.
     *
     * @return \DDEX\DSR\DSR_410\DetailedDealType
     */
    public function getDetailedDeal()
    {
        return $this->detailedDeal;
    }

    /**
     * Sets a new detailedDeal
     *
     * A ddex:Composite containing details of the terms and conditions of the ddex:Deal. Either this ddex:Element or the SummaryDeal are required, but not both.
     *
     * @param \DDEX\DSR\DSR_410\DetailedDealType $detailedDeal
     * @return self
     */
    public function setDetailedDeal(?\DDEX\DSR\DSR_410\DetailedDealType $detailedDeal = null)
    {
        $this->detailedDeal = $detailedDeal;
        return $this;
    }

    /**
     * Gets as summaryDeal
     *
     * A ddex:Composite containing a summary of the terms and conditions of the ddex:Deal. Either this ddex:Element or the DetailedDeal are required, but not both.
     *
     * @return \DDEX\DSR\DSR_410\SummaryDealType
     */
    public function getSummaryDeal()
    {
        return $this->summaryDeal;
    }

    /**
     * Sets a new summaryDeal
     *
     * A ddex:Composite containing a summary of the terms and conditions of the ddex:Deal. Either this ddex:Element or the DetailedDeal are required, but not both.
     *
     * @param \DDEX\DSR\DSR_410\SummaryDealType $summaryDeal
     * @return self
     */
    public function setSummaryDeal(?\DDEX\DSR\DSR_410\SummaryDealType $summaryDeal = null)
    {
        $this->summaryDeal = $summaryDeal;
        return $this;
    }
}


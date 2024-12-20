<?php

namespace DDEX\DSR\DSR_43D1;

/**
 * Class representing DealForRecordCompaniesType
 *
 * A Composite containing details of the terms and conditions of a Deal made between a DSP (as Licensee) and a Licensor of Works or Releases.
 * XSD Type: DealForRecordCompanies
 */
class DealForRecordCompaniesType
{
    /**
     * A Composite containing details of the terms and conditions of the Deal.
     *
     * @var \DDEX\DSR\DSR_43D1\DetailedDealType $detailedDeal
     */
    private $detailedDeal = null;

    /**
     * Gets as detailedDeal
     *
     * A Composite containing details of the terms and conditions of the Deal.
     *
     * @return \DDEX\DSR\DSR_43D1\DetailedDealType
     */
    public function getDetailedDeal()
    {
        return $this->detailedDeal;
    }

    /**
     * Sets a new detailedDeal
     *
     * A Composite containing details of the terms and conditions of the Deal.
     *
     * @param \DDEX\DSR\DSR_43D1\DetailedDealType $detailedDeal
     * @return self
     */
    public function setDetailedDeal(\DDEX\DSR\DSR_43D1\DetailedDealType $detailedDeal)
    {
        $this->detailedDeal = $detailedDeal;
        return $this;
    }
}


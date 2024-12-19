<?php

namespace DDEX\MWN\MWN_US_LOD_100;

/**
 * Class representing ConfirmedCatalogTransferType
 *
 * A Composite containing details of a confirmed CatalogTransfer.
 * XSD Type: ConfirmedCatalogTransfer
 */
class ConfirmedCatalogTransferType
{
    /**
     * A Composite containing details of an Identifier of the CatalogTransfer.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ProprietaryIdType $catalogTransferId
     */
    private $catalogTransferId = null;

    /**
     * An Identifier of a Licensee that has confirmed the implementation of the CatalogTransfer. This is to be used by a hub sending an LoDConfirmationMessage to an AcquiringPublisher. This is an Identifier according to the DdexPartyId standard DDEX-DPID.
     *
     * @var string[] $confirmingLicensee
     */
    private $confirmingLicensee = [
        
    ];

    /**
     * A Composite containing details of all Resources that have been found to match the CatalogTransfer data.
     *
     * @var string[] $resourceList
     */
    private $resourceList = null;

    /**
     * A Composite containing details of all Releases that have been found to match the CatalogTransfer data.
     *
     * @var string[] $releaseList
     */
    private $releaseList = null;

    /**
     * An Identifier of a MusicalWorkClaimRequestMessage in which additional MusicalWorks are reported.
     *
     * @var string $musicalWorkClaimRequestMessageId
     */
    private $musicalWorkClaimRequestMessageId = null;

    /**
     * A Composite containing details about a retention date applying to MusicalWorks in the CatalogTransfer. This information should be provided if the RelinquishingPublisher retains rights for certain MusicalWorks in the Catalog.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\RetentionType[] $retention
     */
    private $retention = [
        
    ];

    /**
     * A Composite containing details about the CollectionPeriod applying to the CatalogTransfer. This information should be provided by the RelinquishingPublisher if it is collecting royalties for a period after the EffectiveTransferDate.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates,-end-dates,-start-datetimes-and-end-datetimes/
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ValidityPeriodType $collectionPeriod
     */
    private $collectionPeriod = null;

    /**
     * A Composite containing details of one or more RightShares that are excluded from the confirmed CatalogTransfer.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ExceptionFromConfirmationType[] $exception
     */
    private $exception = [
        
    ];

    /**
     * Gets as catalogTransferId
     *
     * A Composite containing details of an Identifier of the CatalogTransfer.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\ProprietaryIdType
     */
    public function getCatalogTransferId()
    {
        return $this->catalogTransferId;
    }

    /**
     * Sets a new catalogTransferId
     *
     * A Composite containing details of an Identifier of the CatalogTransfer.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\ProprietaryIdType $catalogTransferId
     * @return self
     */
    public function setCatalogTransferId(\DDEX\MWN\MWN_US_LOD_100\ProprietaryIdType $catalogTransferId)
    {
        $this->catalogTransferId = $catalogTransferId;
        return $this;
    }

    /**
     * Adds as confirmingLicensee
     *
     * An Identifier of a Licensee that has confirmed the implementation of the CatalogTransfer. This is to be used by a hub sending an LoDConfirmationMessage to an AcquiringPublisher. This is an Identifier according to the DdexPartyId standard DDEX-DPID.
     *
     * @return self
     * @param string $confirmingLicensee
     */
    public function addToConfirmingLicensee($confirmingLicensee)
    {
        $this->confirmingLicensee[] = $confirmingLicensee;
        return $this;
    }

    /**
     * isset confirmingLicensee
     *
     * An Identifier of a Licensee that has confirmed the implementation of the CatalogTransfer. This is to be used by a hub sending an LoDConfirmationMessage to an AcquiringPublisher. This is an Identifier according to the DdexPartyId standard DDEX-DPID.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConfirmingLicensee($index)
    {
        return isset($this->confirmingLicensee[$index]);
    }

    /**
     * unset confirmingLicensee
     *
     * An Identifier of a Licensee that has confirmed the implementation of the CatalogTransfer. This is to be used by a hub sending an LoDConfirmationMessage to an AcquiringPublisher. This is an Identifier according to the DdexPartyId standard DDEX-DPID.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConfirmingLicensee($index)
    {
        unset($this->confirmingLicensee[$index]);
    }

    /**
     * Gets as confirmingLicensee
     *
     * An Identifier of a Licensee that has confirmed the implementation of the CatalogTransfer. This is to be used by a hub sending an LoDConfirmationMessage to an AcquiringPublisher. This is an Identifier according to the DdexPartyId standard DDEX-DPID.
     *
     * @return string[]
     */
    public function getConfirmingLicensee()
    {
        return $this->confirmingLicensee;
    }

    /**
     * Sets a new confirmingLicensee
     *
     * An Identifier of a Licensee that has confirmed the implementation of the CatalogTransfer. This is to be used by a hub sending an LoDConfirmationMessage to an AcquiringPublisher. This is an Identifier according to the DdexPartyId standard DDEX-DPID.
     *
     * @param string $confirmingLicensee
     * @return self
     */
    public function setConfirmingLicensee(array $confirmingLicensee = null)
    {
        $this->confirmingLicensee = $confirmingLicensee;
        return $this;
    }

    /**
     * Adds as catalogResourceReference
     *
     * A Composite containing details of all Resources that have been found to match the CatalogTransfer data.
     *
     * @return self
     * @param string $catalogResourceReference
     */
    public function addToResourceList($catalogResourceReference)
    {
        $this->resourceList[] = $catalogResourceReference;
        return $this;
    }

    /**
     * isset resourceList
     *
     * A Composite containing details of all Resources that have been found to match the CatalogTransfer data.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceList($index)
    {
        return isset($this->resourceList[$index]);
    }

    /**
     * unset resourceList
     *
     * A Composite containing details of all Resources that have been found to match the CatalogTransfer data.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceList($index)
    {
        unset($this->resourceList[$index]);
    }

    /**
     * Gets as resourceList
     *
     * A Composite containing details of all Resources that have been found to match the CatalogTransfer data.
     *
     * @return string[]
     */
    public function getResourceList()
    {
        return $this->resourceList;
    }

    /**
     * Sets a new resourceList
     *
     * A Composite containing details of all Resources that have been found to match the CatalogTransfer data.
     *
     * @param string $resourceList
     * @return self
     */
    public function setResourceList(array $resourceList)
    {
        $this->resourceList = $resourceList;
        return $this;
    }

    /**
     * Adds as catalogReleaseReference
     *
     * A Composite containing details of all Releases that have been found to match the CatalogTransfer data.
     *
     * @return self
     * @param string $catalogReleaseReference
     */
    public function addToReleaseList($catalogReleaseReference)
    {
        $this->releaseList[] = $catalogReleaseReference;
        return $this;
    }

    /**
     * isset releaseList
     *
     * A Composite containing details of all Releases that have been found to match the CatalogTransfer data.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseList($index)
    {
        return isset($this->releaseList[$index]);
    }

    /**
     * unset releaseList
     *
     * A Composite containing details of all Releases that have been found to match the CatalogTransfer data.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseList($index)
    {
        unset($this->releaseList[$index]);
    }

    /**
     * Gets as releaseList
     *
     * A Composite containing details of all Releases that have been found to match the CatalogTransfer data.
     *
     * @return string[]
     */
    public function getReleaseList()
    {
        return $this->releaseList;
    }

    /**
     * Sets a new releaseList
     *
     * A Composite containing details of all Releases that have been found to match the CatalogTransfer data.
     *
     * @param string $releaseList
     * @return self
     */
    public function setReleaseList(array $releaseList)
    {
        $this->releaseList = $releaseList;
        return $this;
    }

    /**
     * Gets as musicalWorkClaimRequestMessageId
     *
     * An Identifier of a MusicalWorkClaimRequestMessage in which additional MusicalWorks are reported.
     *
     * @return string
     */
    public function getMusicalWorkClaimRequestMessageId()
    {
        return $this->musicalWorkClaimRequestMessageId;
    }

    /**
     * Sets a new musicalWorkClaimRequestMessageId
     *
     * An Identifier of a MusicalWorkClaimRequestMessage in which additional MusicalWorks are reported.
     *
     * @param string $musicalWorkClaimRequestMessageId
     * @return self
     */
    public function setMusicalWorkClaimRequestMessageId($musicalWorkClaimRequestMessageId)
    {
        $this->musicalWorkClaimRequestMessageId = $musicalWorkClaimRequestMessageId;
        return $this;
    }

    /**
     * Adds as retention
     *
     * A Composite containing details about a retention date applying to MusicalWorks in the CatalogTransfer. This information should be provided if the RelinquishingPublisher retains rights for certain MusicalWorks in the Catalog.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\RetentionType $retention
     */
    public function addToRetention(\DDEX\MWN\MWN_US_LOD_100\RetentionType $retention)
    {
        $this->retention[] = $retention;
        return $this;
    }

    /**
     * isset retention
     *
     * A Composite containing details about a retention date applying to MusicalWorks in the CatalogTransfer. This information should be provided if the RelinquishingPublisher retains rights for certain MusicalWorks in the Catalog.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRetention($index)
    {
        return isset($this->retention[$index]);
    }

    /**
     * unset retention
     *
     * A Composite containing details about a retention date applying to MusicalWorks in the CatalogTransfer. This information should be provided if the RelinquishingPublisher retains rights for certain MusicalWorks in the Catalog.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRetention($index)
    {
        unset($this->retention[$index]);
    }

    /**
     * Gets as retention
     *
     * A Composite containing details about a retention date applying to MusicalWorks in the CatalogTransfer. This information should be provided if the RelinquishingPublisher retains rights for certain MusicalWorks in the Catalog.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\RetentionType[]
     */
    public function getRetention()
    {
        return $this->retention;
    }

    /**
     * Sets a new retention
     *
     * A Composite containing details about a retention date applying to MusicalWorks in the CatalogTransfer. This information should be provided if the RelinquishingPublisher retains rights for certain MusicalWorks in the Catalog.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\RetentionType[] $retention
     * @return self
     */
    public function setRetention(array $retention = null)
    {
        $this->retention = $retention;
        return $this;
    }

    /**
     * Gets as collectionPeriod
     *
     * A Composite containing details about the CollectionPeriod applying to the CatalogTransfer. This information should be provided by the RelinquishingPublisher if it is collecting royalties for a period after the EffectiveTransferDate.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates,-end-dates,-start-datetimes-and-end-datetimes/
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\ValidityPeriodType
     */
    public function getCollectionPeriod()
    {
        return $this->collectionPeriod;
    }

    /**
     * Sets a new collectionPeriod
     *
     * A Composite containing details about the CollectionPeriod applying to the CatalogTransfer. This information should be provided by the RelinquishingPublisher if it is collecting royalties for a period after the EffectiveTransferDate.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates,-end-dates,-start-datetimes-and-end-datetimes/
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\ValidityPeriodType $collectionPeriod
     * @return self
     */
    public function setCollectionPeriod(?\DDEX\MWN\MWN_US_LOD_100\ValidityPeriodType $collectionPeriod = null)
    {
        $this->collectionPeriod = $collectionPeriod;
        return $this;
    }

    /**
     * Adds as exception
     *
     * A Composite containing details of one or more RightShares that are excluded from the confirmed CatalogTransfer.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\ExceptionFromConfirmationType $exception
     */
    public function addToException(\DDEX\MWN\MWN_US_LOD_100\ExceptionFromConfirmationType $exception)
    {
        $this->exception[] = $exception;
        return $this;
    }

    /**
     * isset exception
     *
     * A Composite containing details of one or more RightShares that are excluded from the confirmed CatalogTransfer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetException($index)
    {
        return isset($this->exception[$index]);
    }

    /**
     * unset exception
     *
     * A Composite containing details of one or more RightShares that are excluded from the confirmed CatalogTransfer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetException($index)
    {
        unset($this->exception[$index]);
    }

    /**
     * Gets as exception
     *
     * A Composite containing details of one or more RightShares that are excluded from the confirmed CatalogTransfer.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\ExceptionFromConfirmationType[]
     */
    public function getException()
    {
        return $this->exception;
    }

    /**
     * Sets a new exception
     *
     * A Composite containing details of one or more RightShares that are excluded from the confirmed CatalogTransfer.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\ExceptionFromConfirmationType[] $exception
     * @return self
     */
    public function setException(array $exception = null)
    {
        $this->exception = $exception;
        return $this;
    }
}


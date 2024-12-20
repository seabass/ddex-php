<?php

namespace DDEX\ERN\ERN_351;

/**
 * Class representing SheetMusicType
 *
 * A ddex:Composite containing details of a ddex:SheetMusic.
 * XSD Type: SheetMusic
 */
class SheetMusicType
{
    /**
     * The ddex:Flag indicating whether the ern:SheetMusic ddex:Element was updated (=True) or not (=False). The ddex:Flag may only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to replace any previously provided ern:SheetMusic data with the now provided data.
     *
     * @var bool $isUpdated
     */
    private $isUpdated = null;

    /**
     * The ddex:Language and script for the ddex:Elements of the ern:SheetMusic as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of the ddex:Type of the ern:SheetMusic.
     *
     * @var \DDEX\ddexC\SheetMusicTypeType $sheetMusicType
     */
    private $sheetMusicType = null;

    /**
     * The ddex:Flag indicating whether the ern:SheetMusic is related to an ddex:Artist (=True) or not (=False).
     *
     * @var bool $isArtistRelated
     */
    private $isArtistRelated = null;

    /**
     * A ddex:Composite containing details of ddex:Identifiers of the ern:SheetMusic.
     *
     * @var \DDEX\ddexC\SheetMusicIdType[] $sheetMusicId
     */
    private $sheetMusicId = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:SheetMusic.
     *
     * @var \DDEX\ddexC\MusicalWorkIdType[] $indirectSheetMusicId
     */
    private $indirectSheetMusicId = [
        
    ];

    /**
     * The ddex:Identifier (specific to the ddex:Message) of the ddexC:SheetMusic within the ddex:Release which contains it. This is a ddex:LocalResourceAnchor starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * The ddex:Language of the lyrics of the ern:SheetMusic (represented by an ISO 639-2 iso639a2:LanguageCode).
     *
     * @var string $languageOfLyrics
     */
    private $languageOfLyrics = null;

    /**
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) related to the ern:SheetMusic.
     *
     * @var \DDEX\ddexC\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:SheetMusic.
     *
     * @var \DDEX\ddexC\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     */
    private $resourceMusicalWorkReferenceList = null;

    /**
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:SheetMusic.
     *
     * @var \DDEX\ddexC\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
     */
    private $resourceContainedResourceReferenceList = null;

    /**
     * A ddex:Composite containing details of the ddex:ReferenceTitle of the ern:SheetMusic.
     *
     * @var \DDEX\ddexC\ReferenceTitleType $referenceTitle
     */
    private $referenceTitle = null;

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ern:SheetMusic was created.
     *
     * @var \DDEX\ddexC\EventDateType $creationDate
     */
    private $creationDate = null;

    /**
     * A ddex:Composite containing details of the ern:SheetMusic which may vary according to ddex:Territory of release.
     *
     * @var \DDEX\ERN\ERN_351\SheetMusicDetailsByTerritoryType[] $sheetMusicDetailsByTerritory
     */
    private $sheetMusicDetailsByTerritory = [
        
    ];

    /**
     * Gets as isUpdated
     *
     * The ddex:Flag indicating whether the ern:SheetMusic ddex:Element was updated (=True) or not (=False). The ddex:Flag may only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to replace any previously provided ern:SheetMusic data with the now provided data.
     *
     * @return bool
     */
    public function getIsUpdated()
    {
        return $this->isUpdated;
    }

    /**
     * Sets a new isUpdated
     *
     * The ddex:Flag indicating whether the ern:SheetMusic ddex:Element was updated (=True) or not (=False). The ddex:Flag may only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to replace any previously provided ern:SheetMusic data with the now provided data.
     *
     * @param bool $isUpdated
     * @return self
     */
    public function setIsUpdated($isUpdated)
    {
        $this->isUpdated = $isUpdated;
        return $this;
    }

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ern:SheetMusic as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return string
     */
    public function getLanguageAndScriptCode()
    {
        return $this->languageAndScriptCode;
    }

    /**
     * Sets a new languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ern:SheetMusic as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param string $languageAndScriptCode
     * @return self
     */
    public function setLanguageAndScriptCode($languageAndScriptCode)
    {
        $this->languageAndScriptCode = $languageAndScriptCode;
        return $this;
    }

    /**
     * Gets as sheetMusicType
     *
     * A ddex:Composite containing details of the ddex:Type of the ern:SheetMusic.
     *
     * @return \DDEX\ddexC\SheetMusicTypeType
     */
    public function getSheetMusicType()
    {
        return $this->sheetMusicType;
    }

    /**
     * Sets a new sheetMusicType
     *
     * A ddex:Composite containing details of the ddex:Type of the ern:SheetMusic.
     *
     * @param \DDEX\ddexC\SheetMusicTypeType $sheetMusicType
     * @return self
     */
    public function setSheetMusicType(?\DDEX\ddexC\SheetMusicTypeType $sheetMusicType = null)
    {
        $this->sheetMusicType = $sheetMusicType;
        return $this;
    }

    /**
     * Gets as isArtistRelated
     *
     * The ddex:Flag indicating whether the ern:SheetMusic is related to an ddex:Artist (=True) or not (=False).
     *
     * @return bool
     */
    public function getIsArtistRelated()
    {
        return $this->isArtistRelated;
    }

    /**
     * Sets a new isArtistRelated
     *
     * The ddex:Flag indicating whether the ern:SheetMusic is related to an ddex:Artist (=True) or not (=False).
     *
     * @param bool $isArtistRelated
     * @return self
     */
    public function setIsArtistRelated($isArtistRelated)
    {
        $this->isArtistRelated = $isArtistRelated;
        return $this;
    }

    /**
     * Adds as sheetMusicId
     *
     * A ddex:Composite containing details of ddex:Identifiers of the ern:SheetMusic.
     *
     * @return self
     * @param \DDEX\ddexC\SheetMusicIdType $sheetMusicId
     */
    public function addToSheetMusicId(\DDEX\ddexC\SheetMusicIdType $sheetMusicId)
    {
        $this->sheetMusicId[] = $sheetMusicId;
        return $this;
    }

    /**
     * isset sheetMusicId
     *
     * A ddex:Composite containing details of ddex:Identifiers of the ern:SheetMusic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSheetMusicId($index)
    {
        return isset($this->sheetMusicId[$index]);
    }

    /**
     * unset sheetMusicId
     *
     * A ddex:Composite containing details of ddex:Identifiers of the ern:SheetMusic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSheetMusicId($index)
    {
        unset($this->sheetMusicId[$index]);
    }

    /**
     * Gets as sheetMusicId
     *
     * A ddex:Composite containing details of ddex:Identifiers of the ern:SheetMusic.
     *
     * @return \DDEX\ddexC\SheetMusicIdType[]
     */
    public function getSheetMusicId()
    {
        return $this->sheetMusicId;
    }

    /**
     * Sets a new sheetMusicId
     *
     * A ddex:Composite containing details of ddex:Identifiers of the ern:SheetMusic.
     *
     * @param \DDEX\ddexC\SheetMusicIdType[] $sheetMusicId
     * @return self
     */
    public function setSheetMusicId(array $sheetMusicId)
    {
        $this->sheetMusicId = $sheetMusicId;
        return $this;
    }

    /**
     * Adds as indirectSheetMusicId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:SheetMusic.
     *
     * @return self
     * @param \DDEX\ddexC\MusicalWorkIdType $indirectSheetMusicId
     */
    public function addToIndirectSheetMusicId(\DDEX\ddexC\MusicalWorkIdType $indirectSheetMusicId)
    {
        $this->indirectSheetMusicId[] = $indirectSheetMusicId;
        return $this;
    }

    /**
     * isset indirectSheetMusicId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:SheetMusic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIndirectSheetMusicId($index)
    {
        return isset($this->indirectSheetMusicId[$index]);
    }

    /**
     * unset indirectSheetMusicId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:SheetMusic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIndirectSheetMusicId($index)
    {
        unset($this->indirectSheetMusicId[$index]);
    }

    /**
     * Gets as indirectSheetMusicId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:SheetMusic.
     *
     * @return \DDEX\ddexC\MusicalWorkIdType[]
     */
    public function getIndirectSheetMusicId()
    {
        return $this->indirectSheetMusicId;
    }

    /**
     * Sets a new indirectSheetMusicId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:SheetMusic.
     *
     * @param \DDEX\ddexC\MusicalWorkIdType[] $indirectSheetMusicId
     * @return self
     */
    public function setIndirectSheetMusicId(array $indirectSheetMusicId = null)
    {
        $this->indirectSheetMusicId = $indirectSheetMusicId;
        return $this;
    }

    /**
     * Gets as resourceReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of the ddexC:SheetMusic within the ddex:Release which contains it. This is a ddex:LocalResourceAnchor starting with the letter A.
     *
     * @return string
     */
    public function getResourceReference()
    {
        return $this->resourceReference;
    }

    /**
     * Sets a new resourceReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of the ddexC:SheetMusic within the ddex:Release which contains it. This is a ddex:LocalResourceAnchor starting with the letter A.
     *
     * @param string $resourceReference
     * @return self
     */
    public function setResourceReference($resourceReference)
    {
        $this->resourceReference = $resourceReference;
        return $this;
    }

    /**
     * Gets as languageOfLyrics
     *
     * The ddex:Language of the lyrics of the ern:SheetMusic (represented by an ISO 639-2 iso639a2:LanguageCode).
     *
     * @return string
     */
    public function getLanguageOfLyrics()
    {
        return $this->languageOfLyrics;
    }

    /**
     * Sets a new languageOfLyrics
     *
     * The ddex:Language of the lyrics of the ern:SheetMusic (represented by an ISO 639-2 iso639a2:LanguageCode).
     *
     * @param string $languageOfLyrics
     * @return self
     */
    public function setLanguageOfLyrics($languageOfLyrics)
    {
        $this->languageOfLyrics = $languageOfLyrics;
        return $this;
    }

    /**
     * Gets as rightsAgreementId
     *
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) related to the ern:SheetMusic.
     *
     * @return \DDEX\ddexC\RightsAgreementIdType
     */
    public function getRightsAgreementId()
    {
        return $this->rightsAgreementId;
    }

    /**
     * Sets a new rightsAgreementId
     *
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) related to the ern:SheetMusic.
     *
     * @param \DDEX\ddexC\RightsAgreementIdType $rightsAgreementId
     * @return self
     */
    public function setRightsAgreementId(?\DDEX\ddexC\RightsAgreementIdType $rightsAgreementId = null)
    {
        $this->rightsAgreementId = $rightsAgreementId;
        return $this;
    }

    /**
     * Adds as resourceMusicalWorkReference
     *
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:SheetMusic.
     *
     * @return self
     * @param \DDEX\ddexC\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference
     */
    public function addToResourceMusicalWorkReferenceList(\DDEX\ddexC\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference)
    {
        $this->resourceMusicalWorkReferenceList[] = $resourceMusicalWorkReference;
        return $this;
    }

    /**
     * isset resourceMusicalWorkReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:SheetMusic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceMusicalWorkReferenceList($index)
    {
        return isset($this->resourceMusicalWorkReferenceList[$index]);
    }

    /**
     * unset resourceMusicalWorkReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:SheetMusic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceMusicalWorkReferenceList($index)
    {
        unset($this->resourceMusicalWorkReferenceList[$index]);
    }

    /**
     * Gets as resourceMusicalWorkReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:SheetMusic.
     *
     * @return \DDEX\ddexC\ResourceMusicalWorkReferenceType[]
     */
    public function getResourceMusicalWorkReferenceList()
    {
        return $this->resourceMusicalWorkReferenceList;
    }

    /**
     * Sets a new resourceMusicalWorkReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:SheetMusic.
     *
     * @param \DDEX\ddexC\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     * @return self
     */
    public function setResourceMusicalWorkReferenceList(array $resourceMusicalWorkReferenceList = null)
    {
        $this->resourceMusicalWorkReferenceList = $resourceMusicalWorkReferenceList;
        return $this;
    }

    /**
     * Adds as resourceContainedResourceReference
     *
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:SheetMusic.
     *
     * @return self
     * @param \DDEX\ddexC\ResourceContainedResourceReferenceType $resourceContainedResourceReference
     */
    public function addToResourceContainedResourceReferenceList(\DDEX\ddexC\ResourceContainedResourceReferenceType $resourceContainedResourceReference)
    {
        $this->resourceContainedResourceReferenceList[] = $resourceContainedResourceReference;
        return $this;
    }

    /**
     * isset resourceContainedResourceReferenceList
     *
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:SheetMusic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceContainedResourceReferenceList($index)
    {
        return isset($this->resourceContainedResourceReferenceList[$index]);
    }

    /**
     * unset resourceContainedResourceReferenceList
     *
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:SheetMusic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceContainedResourceReferenceList($index)
    {
        unset($this->resourceContainedResourceReferenceList[$index]);
    }

    /**
     * Gets as resourceContainedResourceReferenceList
     *
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:SheetMusic.
     *
     * @return \DDEX\ddexC\ResourceContainedResourceReferenceType[]
     */
    public function getResourceContainedResourceReferenceList()
    {
        return $this->resourceContainedResourceReferenceList;
    }

    /**
     * Sets a new resourceContainedResourceReferenceList
     *
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:SheetMusic.
     *
     * @param \DDEX\ddexC\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
     * @return self
     */
    public function setResourceContainedResourceReferenceList(array $resourceContainedResourceReferenceList = null)
    {
        $this->resourceContainedResourceReferenceList = $resourceContainedResourceReferenceList;
        return $this;
    }

    /**
     * Gets as referenceTitle
     *
     * A ddex:Composite containing details of the ddex:ReferenceTitle of the ern:SheetMusic.
     *
     * @return \DDEX\ddexC\ReferenceTitleType
     */
    public function getReferenceTitle()
    {
        return $this->referenceTitle;
    }

    /**
     * Sets a new referenceTitle
     *
     * A ddex:Composite containing details of the ddex:ReferenceTitle of the ern:SheetMusic.
     *
     * @param \DDEX\ddexC\ReferenceTitleType $referenceTitle
     * @return self
     */
    public function setReferenceTitle(\DDEX\ddexC\ReferenceTitleType $referenceTitle)
    {
        $this->referenceTitle = $referenceTitle;
        return $this;
    }

    /**
     * Gets as creationDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ern:SheetMusic was created.
     *
     * @return \DDEX\ddexC\EventDateType
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Sets a new creationDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ern:SheetMusic was created.
     *
     * @param \DDEX\ddexC\EventDateType $creationDate
     * @return self
     */
    public function setCreationDate(?\DDEX\ddexC\EventDateType $creationDate = null)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * Adds as sheetMusicDetailsByTerritory
     *
     * A ddex:Composite containing details of the ern:SheetMusic which may vary according to ddex:Territory of release.
     *
     * @return self
     * @param \DDEX\ERN\ERN_351\SheetMusicDetailsByTerritoryType $sheetMusicDetailsByTerritory
     */
    public function addToSheetMusicDetailsByTerritory(\DDEX\ERN\ERN_351\SheetMusicDetailsByTerritoryType $sheetMusicDetailsByTerritory)
    {
        $this->sheetMusicDetailsByTerritory[] = $sheetMusicDetailsByTerritory;
        return $this;
    }

    /**
     * isset sheetMusicDetailsByTerritory
     *
     * A ddex:Composite containing details of the ern:SheetMusic which may vary according to ddex:Territory of release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSheetMusicDetailsByTerritory($index)
    {
        return isset($this->sheetMusicDetailsByTerritory[$index]);
    }

    /**
     * unset sheetMusicDetailsByTerritory
     *
     * A ddex:Composite containing details of the ern:SheetMusic which may vary according to ddex:Territory of release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSheetMusicDetailsByTerritory($index)
    {
        unset($this->sheetMusicDetailsByTerritory[$index]);
    }

    /**
     * Gets as sheetMusicDetailsByTerritory
     *
     * A ddex:Composite containing details of the ern:SheetMusic which may vary according to ddex:Territory of release.
     *
     * @return \DDEX\ERN\ERN_351\SheetMusicDetailsByTerritoryType[]
     */
    public function getSheetMusicDetailsByTerritory()
    {
        return $this->sheetMusicDetailsByTerritory;
    }

    /**
     * Sets a new sheetMusicDetailsByTerritory
     *
     * A ddex:Composite containing details of the ern:SheetMusic which may vary according to ddex:Territory of release.
     *
     * @param \DDEX\ERN\ERN_351\SheetMusicDetailsByTerritoryType[] $sheetMusicDetailsByTerritory
     * @return self
     */
    public function setSheetMusicDetailsByTerritory(array $sheetMusicDetailsByTerritory)
    {
        $this->sheetMusicDetailsByTerritory = $sheetMusicDetailsByTerritory;
        return $this;
    }
}


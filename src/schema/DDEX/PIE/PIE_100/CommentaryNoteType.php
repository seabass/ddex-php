<?php

namespace DDEX\PIE\PIE_100;

/**
 * Class representing CommentaryNoteType
 *
 * A Composite containing details of a commentary note.
 * XSD Type: CommentaryNote
 */
class CommentaryNoteType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var \DDEX\PIE\PIE_100\MetadataSourceReferenceType[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Composite containing the text of the commentary note.
     *
     * @var \DDEX\PIE\PIE_100\TextWithoutTerritoryType[] $text
     */
    private $text = [
        
    ];

    /**
     * A type of the commentary note.
     *
     * @var \DDEX\PIE\PIE_100\CommentaryNoteTypeType[] $commentaryNoteType
     */
    private $commentaryNoteType = [
        
    ];

    /**
     * A Language and script of the commentary note as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @var string[] $languageAndScriptOfCommentaryNote
     */
    private $languageAndScriptOfCommentaryNote = [
        
    ];

    /**
     * A Territory to which the commentary note applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string[] $territoryOfCommentaryNoteDescription
     */
    private $territoryOfCommentaryNoteDescription = [
        
    ];

    /**
     * An author of the commentary note.
     *
     * @var \DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType[] $author
     */
    private $author = [
        
    ];

    /**
     * Adds as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\MetadataSourceReferenceType $metadataSourceReference
     */
    public function addToMetadataSourceReference(\DDEX\PIE\PIE_100\MetadataSourceReferenceType $metadataSourceReference)
    {
        $this->metadataSourceReference[] = $metadataSourceReference;
        return $this;
    }

    /**
     * isset metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMetadataSourceReference($index)
    {
        return isset($this->metadataSourceReference[$index]);
    }

    /**
     * unset metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMetadataSourceReference($index)
    {
        unset($this->metadataSourceReference[$index]);
    }

    /**
     * Gets as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return \DDEX\PIE\PIE_100\MetadataSourceReferenceType[]
     */
    public function getMetadataSourceReference()
    {
        return $this->metadataSourceReference;
    }

    /**
     * Sets a new metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param \DDEX\PIE\PIE_100\MetadataSourceReferenceType[] $metadataSourceReference
     * @return self
     */
    public function setMetadataSourceReference(array $metadataSourceReference = null)
    {
        $this->metadataSourceReference = $metadataSourceReference;
        return $this;
    }

    /**
     * Adds as text
     *
     * A Composite containing the text of the commentary note.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\TextWithoutTerritoryType $text
     */
    public function addToText(\DDEX\PIE\PIE_100\TextWithoutTerritoryType $text)
    {
        $this->text[] = $text;
        return $this;
    }

    /**
     * isset text
     *
     * A Composite containing the text of the commentary note.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetText($index)
    {
        return isset($this->text[$index]);
    }

    /**
     * unset text
     *
     * A Composite containing the text of the commentary note.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetText($index)
    {
        unset($this->text[$index]);
    }

    /**
     * Gets as text
     *
     * A Composite containing the text of the commentary note.
     *
     * @return \DDEX\PIE\PIE_100\TextWithoutTerritoryType[]
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * A Composite containing the text of the commentary note.
     *
     * @param \DDEX\PIE\PIE_100\TextWithoutTerritoryType[] $text
     * @return self
     */
    public function setText(array $text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Adds as commentaryNoteType
     *
     * A type of the commentary note.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\CommentaryNoteTypeType $commentaryNoteType
     */
    public function addToCommentaryNoteType(\DDEX\PIE\PIE_100\CommentaryNoteTypeType $commentaryNoteType)
    {
        $this->commentaryNoteType[] = $commentaryNoteType;
        return $this;
    }

    /**
     * isset commentaryNoteType
     *
     * A type of the commentary note.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommentaryNoteType($index)
    {
        return isset($this->commentaryNoteType[$index]);
    }

    /**
     * unset commentaryNoteType
     *
     * A type of the commentary note.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommentaryNoteType($index)
    {
        unset($this->commentaryNoteType[$index]);
    }

    /**
     * Gets as commentaryNoteType
     *
     * A type of the commentary note.
     *
     * @return \DDEX\PIE\PIE_100\CommentaryNoteTypeType[]
     */
    public function getCommentaryNoteType()
    {
        return $this->commentaryNoteType;
    }

    /**
     * Sets a new commentaryNoteType
     *
     * A type of the commentary note.
     *
     * @param \DDEX\PIE\PIE_100\CommentaryNoteTypeType[] $commentaryNoteType
     * @return self
     */
    public function setCommentaryNoteType(array $commentaryNoteType)
    {
        $this->commentaryNoteType = $commentaryNoteType;
        return $this;
    }

    /**
     * Adds as languageAndScriptOfCommentaryNote
     *
     * A Language and script of the commentary note as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @return self
     * @param string $languageAndScriptOfCommentaryNote
     */
    public function addToLanguageAndScriptOfCommentaryNote($languageAndScriptOfCommentaryNote)
    {
        $this->languageAndScriptOfCommentaryNote[] = $languageAndScriptOfCommentaryNote;
        return $this;
    }

    /**
     * isset languageAndScriptOfCommentaryNote
     *
     * A Language and script of the commentary note as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguageAndScriptOfCommentaryNote($index)
    {
        return isset($this->languageAndScriptOfCommentaryNote[$index]);
    }

    /**
     * unset languageAndScriptOfCommentaryNote
     *
     * A Language and script of the commentary note as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguageAndScriptOfCommentaryNote($index)
    {
        unset($this->languageAndScriptOfCommentaryNote[$index]);
    }

    /**
     * Gets as languageAndScriptOfCommentaryNote
     *
     * A Language and script of the commentary note as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @return string[]
     */
    public function getLanguageAndScriptOfCommentaryNote()
    {
        return $this->languageAndScriptOfCommentaryNote;
    }

    /**
     * Sets a new languageAndScriptOfCommentaryNote
     *
     * A Language and script of the commentary note as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @param string[] $languageAndScriptOfCommentaryNote
     * @return self
     */
    public function setLanguageAndScriptOfCommentaryNote(array $languageAndScriptOfCommentaryNote = null)
    {
        $this->languageAndScriptOfCommentaryNote = $languageAndScriptOfCommentaryNote;
        return $this;
    }

    /**
     * Adds as territoryOfCommentaryNoteDescription
     *
     * A Territory to which the commentary note applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param string $territoryOfCommentaryNoteDescription
     */
    public function addToTerritoryOfCommentaryNoteDescription($territoryOfCommentaryNoteDescription)
    {
        $this->territoryOfCommentaryNoteDescription[] = $territoryOfCommentaryNoteDescription;
        return $this;
    }

    /**
     * isset territoryOfCommentaryNoteDescription
     *
     * A Territory to which the commentary note applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryOfCommentaryNoteDescription($index)
    {
        return isset($this->territoryOfCommentaryNoteDescription[$index]);
    }

    /**
     * unset territoryOfCommentaryNoteDescription
     *
     * A Territory to which the commentary note applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryOfCommentaryNoteDescription($index)
    {
        unset($this->territoryOfCommentaryNoteDescription[$index]);
    }

    /**
     * Gets as territoryOfCommentaryNoteDescription
     *
     * A Territory to which the commentary note applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return string[]
     */
    public function getTerritoryOfCommentaryNoteDescription()
    {
        return $this->territoryOfCommentaryNoteDescription;
    }

    /**
     * Sets a new territoryOfCommentaryNoteDescription
     *
     * A Territory to which the commentary note applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param string $territoryOfCommentaryNoteDescription
     * @return self
     */
    public function setTerritoryOfCommentaryNoteDescription(array $territoryOfCommentaryNoteDescription = null)
    {
        $this->territoryOfCommentaryNoteDescription = $territoryOfCommentaryNoteDescription;
        return $this;
    }

    /**
     * Adds as author
     *
     * An author of the commentary note.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType $author
     */
    public function addToAuthor(\DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType $author)
    {
        $this->author[] = $author;
        return $this;
    }

    /**
     * isset author
     *
     * An author of the commentary note.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAuthor($index)
    {
        return isset($this->author[$index]);
    }

    /**
     * unset author
     *
     * An author of the commentary note.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAuthor($index)
    {
        unset($this->author[$index]);
    }

    /**
     * Gets as author
     *
     * An author of the commentary note.
     *
     * @return \DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType[]
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets a new author
     *
     * An author of the commentary note.
     *
     * @param \DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType[] $author
     * @return self
     */
    public function setAuthor(array $author = null)
    {
        $this->author = $author;
        return $this;
    }
}


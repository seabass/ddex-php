<?php

namespace DDEX\MEAD\MEAD_101;

/**
 * Class representing CommentaryNoteType
 *
 * A Composite containing details of a commentary note.
 * XSD Type: CommentaryNote
 */
class CommentaryNoteType
{
    /**
     * A Territory to which the commentary note applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string $applicableTerritoryCode
     */
    private $applicableTerritoryCode = null;

    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var string[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Composite containing the text of the commentary note.
     *
     * @var \DDEX\MEAD\MEAD_101\TextWithoutTerritoryType[] $text
     */
    private $text = [
        
    ];

    /**
     * A type of the commentary note.
     *
     * @var \DDEX\MEAD\MEAD_101\CommentaryNoteTypeType[] $commentaryNoteType
     */
    private $commentaryNoteType = [
        
    ];

    /**
     * An author of the commentary note.
     *
     * @var \DDEX\MEAD\MEAD_101\PartyWithNamesType[] $author
     */
    private $author = [
        
    ];

    /**
     * Gets as applicableTerritoryCode
     *
     * A Territory to which the commentary note applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return string
     */
    public function getApplicableTerritoryCode()
    {
        return $this->applicableTerritoryCode;
    }

    /**
     * Sets a new applicableTerritoryCode
     *
     * A Territory to which the commentary note applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param string $applicableTerritoryCode
     * @return self
     */
    public function setApplicableTerritoryCode($applicableTerritoryCode)
    {
        $this->applicableTerritoryCode = $applicableTerritoryCode;
        return $this;
    }

    /**
     * Adds as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return self
     * @param string $metadataSourceReference
     */
    public function addToMetadataSourceReference($metadataSourceReference)
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
     * @return string[]
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
     * @param string $metadataSourceReference
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
     * @param \DDEX\MEAD\MEAD_101\TextWithoutTerritoryType $text
     */
    public function addToText(\DDEX\MEAD\MEAD_101\TextWithoutTerritoryType $text)
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
     * @return \DDEX\MEAD\MEAD_101\TextWithoutTerritoryType[]
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
     * @param \DDEX\MEAD\MEAD_101\TextWithoutTerritoryType[] $text
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
     * @param \DDEX\MEAD\MEAD_101\CommentaryNoteTypeType $commentaryNoteType
     */
    public function addToCommentaryNoteType(\DDEX\MEAD\MEAD_101\CommentaryNoteTypeType $commentaryNoteType)
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
     * @return \DDEX\MEAD\MEAD_101\CommentaryNoteTypeType[]
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
     * @param \DDEX\MEAD\MEAD_101\CommentaryNoteTypeType[] $commentaryNoteType
     * @return self
     */
    public function setCommentaryNoteType(array $commentaryNoteType)
    {
        $this->commentaryNoteType = $commentaryNoteType;
        return $this;
    }

    /**
     * Adds as author
     *
     * An author of the commentary note.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\PartyWithNamesType $author
     */
    public function addToAuthor(\DDEX\MEAD\MEAD_101\PartyWithNamesType $author)
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
     * @return \DDEX\MEAD\MEAD_101\PartyWithNamesType[]
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
     * @param \DDEX\MEAD\MEAD_101\PartyWithNamesType[] $author
     * @return self
     */
    public function setAuthor(array $author = null)
    {
        $this->author = $author;
        return $this;
    }
}


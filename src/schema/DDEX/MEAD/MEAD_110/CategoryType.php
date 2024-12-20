<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing CategoryType
 *
 * A Composite containing details of a category. The Atom cagegory construct is defined in section 4.2.2 of the format spec.
 * XSD Type: Category
 */
class CategoryType
{
    /**
     * The term. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $term
     */
    private $term = null;

    /**
     * The scheme. This is represented in an XML schema as an XML Attribute of type AnyURI.
     *
     * @var string $scheme
     */
    private $scheme = null;

    /**
     * The label. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $label
     */
    private $label = null;

    /**
     * Gets as term
     *
     * The term. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Sets a new term
     *
     * The term. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $term
     * @return self
     */
    public function setTerm($term)
    {
        $this->term = $term;
        return $this;
    }

    /**
     * Gets as scheme
     *
     * The scheme. This is represented in an XML schema as an XML Attribute of type AnyURI.
     *
     * @return string
     */
    public function getScheme()
    {
        return $this->scheme;
    }

    /**
     * Sets a new scheme
     *
     * The scheme. This is represented in an XML schema as an XML Attribute of type AnyURI.
     *
     * @param string $scheme
     * @return self
     */
    public function setScheme($scheme)
    {
        $this->scheme = $scheme;
        return $this;
    }

    /**
     * Gets as label
     *
     * The label. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * The label. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $label
     * @return self
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }
}


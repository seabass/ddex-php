<?php

namespace DDEX\MEAD\MEAD_101;

/**
 * Class representing PersonType
 *
 * A Composite containing details of the Name, Identifier and Role(s) of a Party related to a Resource. The Atom person construct is defined in section 3.2 of the format spec.
 * XSD Type: Person
 */
class PersonType
{
    /**
     * A Name of the person.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * A Composite containing details of a URI.
     *
     * @var string $uri
     */
    private $uri = null;

    /**
     * A Composite containing details of an Email address. This is a NormalizedString.
     *
     * @var string $email
     */
    private $email = null;

    /**
     * Gets as name
     *
     * A Name of the person.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A Name of the person.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as uri
     *
     * A Composite containing details of a URI.
     *
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Sets a new uri
     *
     * A Composite containing details of a URI.
     *
     * @param string $uri
     * @return self
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
        return $this;
    }

    /**
     * Gets as email
     *
     * A Composite containing details of an Email address. This is a NormalizedString.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * A Composite containing details of an Email address. This is a NormalizedString.
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
}


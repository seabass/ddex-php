<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing ErrorType
 *
 * A Composite containing details of an Error.
 * XSD Type: Error
 */
class ErrorType
{
    /**
     * A Type of Error.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ErrorTypeType $errorType
     */
    private $errorType = null;

    /**
     * A severity of the Error.
     *
     * @var string $errorSeverity
     */
    private $errorSeverity = null;

    /**
     * An action that is recommended to be taken.
     *
     * @var string $recommendedAction
     */
    private $recommendedAction = null;

    /**
     * An XML Path Language (XPath) 3.0 of the erroneous data element.
     *
     * @var string $erroneousElement
     */
    private $erroneousElement = null;

    /**
     * A Description of an Error that was found.
     *
     * @var string $errorDescription
     */
    private $errorDescription = null;

    /**
     * A Description of the data that was found to cause the conflict.
     *
     * @var string $dataFound
     */
    private $dataFound = null;

    /**
     * A Description of the data that is expected to solve the conflict.
     *
     * @var string $dataExpected
     */
    private $dataExpected = null;

    /**
     * Gets as errorType
     *
     * A Type of Error.
     *
     * @return \DDEX\RDR_N\RDR_N_150\ErrorTypeType
     */
    public function getErrorType()
    {
        return $this->errorType;
    }

    /**
     * Sets a new errorType
     *
     * A Type of Error.
     *
     * @param \DDEX\RDR_N\RDR_N_150\ErrorTypeType $errorType
     * @return self
     */
    public function setErrorType(?\DDEX\RDR_N\RDR_N_150\ErrorTypeType $errorType = null)
    {
        $this->errorType = $errorType;
        return $this;
    }

    /**
     * Gets as errorSeverity
     *
     * A severity of the Error.
     *
     * @return string
     */
    public function getErrorSeverity()
    {
        return $this->errorSeverity;
    }

    /**
     * Sets a new errorSeverity
     *
     * A severity of the Error.
     *
     * @param string $errorSeverity
     * @return self
     */
    public function setErrorSeverity($errorSeverity)
    {
        $this->errorSeverity = $errorSeverity;
        return $this;
    }

    /**
     * Gets as recommendedAction
     *
     * An action that is recommended to be taken.
     *
     * @return string
     */
    public function getRecommendedAction()
    {
        return $this->recommendedAction;
    }

    /**
     * Sets a new recommendedAction
     *
     * An action that is recommended to be taken.
     *
     * @param string $recommendedAction
     * @return self
     */
    public function setRecommendedAction($recommendedAction)
    {
        $this->recommendedAction = $recommendedAction;
        return $this;
    }

    /**
     * Gets as erroneousElement
     *
     * An XML Path Language (XPath) 3.0 of the erroneous data element.
     *
     * @return string
     */
    public function getErroneousElement()
    {
        return $this->erroneousElement;
    }

    /**
     * Sets a new erroneousElement
     *
     * An XML Path Language (XPath) 3.0 of the erroneous data element.
     *
     * @param string $erroneousElement
     * @return self
     */
    public function setErroneousElement($erroneousElement)
    {
        $this->erroneousElement = $erroneousElement;
        return $this;
    }

    /**
     * Gets as errorDescription
     *
     * A Description of an Error that was found.
     *
     * @return string
     */
    public function getErrorDescription()
    {
        return $this->errorDescription;
    }

    /**
     * Sets a new errorDescription
     *
     * A Description of an Error that was found.
     *
     * @param string $errorDescription
     * @return self
     */
    public function setErrorDescription($errorDescription)
    {
        $this->errorDescription = $errorDescription;
        return $this;
    }

    /**
     * Gets as dataFound
     *
     * A Description of the data that was found to cause the conflict.
     *
     * @return string
     */
    public function getDataFound()
    {
        return $this->dataFound;
    }

    /**
     * Sets a new dataFound
     *
     * A Description of the data that was found to cause the conflict.
     *
     * @param string $dataFound
     * @return self
     */
    public function setDataFound($dataFound)
    {
        $this->dataFound = $dataFound;
        return $this;
    }

    /**
     * Gets as dataExpected
     *
     * A Description of the data that is expected to solve the conflict.
     *
     * @return string
     */
    public function getDataExpected()
    {
        return $this->dataExpected;
    }

    /**
     * Sets a new dataExpected
     *
     * A Description of the data that is expected to solve the conflict.
     *
     * @param string $dataExpected
     * @return self
     */
    public function setDataExpected($dataExpected)
    {
        $this->dataExpected = $dataExpected;
        return $this;
    }
}


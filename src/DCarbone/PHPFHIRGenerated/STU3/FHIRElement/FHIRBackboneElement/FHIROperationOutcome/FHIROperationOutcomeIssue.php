<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationOutcome;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:04+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIssueSeverity;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIssueType;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A collection of error, warning or information messages that result from a system
 * action.
 *
 * Class FHIROperationOutcomeIssue
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationOutcome
 */
class FHIROperationOutcomeIssue extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_OPERATION_OUTCOME_DOT_ISSUE;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_CODE = 'code';
    const FIELD_CODE_EXT = '_code';
    const FIELD_DETAILS = 'details';
    const FIELD_DIAGNOSTICS = 'diagnostics';
    const FIELD_DIAGNOSTICS_EXT = '_diagnostics';
    const FIELD_EXPRESSION = 'expression';
    const FIELD_EXPRESSION_EXT = '_expression';
    const FIELD_LOCATION = 'location';
    const FIELD_LOCATION_EXT = '_location';
    const FIELD_SEVERITY = 'severity';
    const FIELD_SEVERITY_EXT = '_severity';

    /**
     * A code that describes the type of issue.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the type of the issue. The system that creates an OperationOutcome
     * SHALL choose the most applicable code from the IssueType value set, and may
     * additional provide its own code for the error in the details element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIssueType
     */
    private $code = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Additional details about the error. This may be a text description of the error,
     * or a system code that identifies the error.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    private $details = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Additional diagnostic information about the issue. Typically, this may be a
     * description of how a value is erroneous, or a stack dump to help trace the
     * issue.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $diagnostics = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A simple FHIRPath limited to element names, repetition indicators and the
     * default child access that identifies one of the elements in the resource that
     * caused this issue to be raised.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[]
     */
    private $expression = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * For resource issues, this will be a simple XPath limited to element names,
     * repetition indicators and the default child access that identifies one of the
     * elements in the resource that caused this issue to be raised. For HTTP errors,
     * will be "http." + the parameter name.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[]
     */
    private $location = [];
    /**
     * How the issue affects the success of the action.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates whether the issue indicates a variation from successful processing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIssueSeverity
     */
    private $severity = null;

    /**
     * FHIROperationOutcomeIssue Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationOutcomeIssue::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CODE])) {
            $ext = (isset($data[self::FIELD_CODE_EXT]) && is_array($data[self::FIELD_CODE_EXT]))
                ? $data[self::FIELD_CODE_EXT]
                : null;
            if ($data[self::FIELD_CODE] instanceof FHIRIssueType) {
                $this->setCode($data[self::FIELD_CODE]);
            } elseif ($ext && is_scalar($data[self::FIELD_CODE])) {
                $this->setCode(new FHIRIssueType([FHIRIssueType::FIELD_VALUE => $data[self::FIELD_CODE]] + $ext));
            } else {
                $this->setCode(new FHIRIssueType($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_DETAILS])) {
            if ($data[self::FIELD_DETAILS] instanceof FHIRCodeableConcept) {
                $this->setDetails($data[self::FIELD_DETAILS]);
            } else {
                $this->setDetails(new FHIRCodeableConcept($data[self::FIELD_DETAILS]));
            }
        }
        if (isset($data[self::FIELD_DIAGNOSTICS])) {
            $ext = (isset($data[self::FIELD_DIAGNOSTICS_EXT]) && is_array($data[self::FIELD_DIAGNOSTICS_EXT]))
                ? $data[self::FIELD_DIAGNOSTICS_EXT]
                : null;
            if ($data[self::FIELD_DIAGNOSTICS] instanceof FHIRString) {
                $this->setDiagnostics($data[self::FIELD_DIAGNOSTICS]);
            } elseif ($ext && is_scalar($data[self::FIELD_DIAGNOSTICS])) {
                $this->setDiagnostics(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DIAGNOSTICS]] + $ext));
            } else {
                $this->setDiagnostics(new FHIRString($data[self::FIELD_DIAGNOSTICS]));
            }
        }
        if (isset($data[self::FIELD_EXPRESSION])) {
            $ext = (isset($data[self::FIELD_EXPRESSION_EXT]) && is_array($data[self::FIELD_EXPRESSION_EXT]))
                ? $data[self::FIELD_EXPRESSION_EXT]
                : null;
            if (is_array($data[self::FIELD_EXPRESSION])) {
                foreach($data[self::FIELD_EXPRESSION] as $i => $v) {
                    if ($v instanceof FHIRString) {
                        $this->addExpression($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addExpression(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addExpression(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_EXPRESSION] instanceof FHIRString) {
                $this->addExpression($data[self::FIELD_EXPRESSION]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXPRESSION])) {
                $this->addExpression(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_EXPRESSION]] + $ext));
            } else {
                $this->addExpression(new FHIRString($data[self::FIELD_EXPRESSION]));
            }
        }
        if (isset($data[self::FIELD_LOCATION])) {
            $ext = (isset($data[self::FIELD_LOCATION_EXT]) && is_array($data[self::FIELD_LOCATION_EXT]))
                ? $data[self::FIELD_LOCATION_EXT]
                : null;
            if (is_array($data[self::FIELD_LOCATION])) {
                foreach($data[self::FIELD_LOCATION] as $i => $v) {
                    if ($v instanceof FHIRString) {
                        $this->addLocation($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addLocation(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addLocation(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_LOCATION] instanceof FHIRString) {
                $this->addLocation($data[self::FIELD_LOCATION]);
            } elseif ($ext && is_scalar($data[self::FIELD_LOCATION])) {
                $this->addLocation(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_LOCATION]] + $ext));
            } else {
                $this->addLocation(new FHIRString($data[self::FIELD_LOCATION]));
            }
        }
        if (isset($data[self::FIELD_SEVERITY])) {
            $ext = (isset($data[self::FIELD_SEVERITY_EXT]) && is_array($data[self::FIELD_SEVERITY_EXT]))
                ? $data[self::FIELD_SEVERITY_EXT]
                : null;
            if ($data[self::FIELD_SEVERITY] instanceof FHIRIssueSeverity) {
                $this->setSeverity($data[self::FIELD_SEVERITY]);
            } elseif ($ext && is_scalar($data[self::FIELD_SEVERITY])) {
                $this->setSeverity(new FHIRIssueSeverity([FHIRIssueSeverity::FIELD_VALUE => $data[self::FIELD_SEVERITY]] + $ext));
            } else {
                $this->setSeverity(new FHIRIssueSeverity($data[self::FIELD_SEVERITY]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<OperationOutcomeIssue{$xmlns}></OperationOutcomeIssue>";
    }


    /**
     * A code that describes the type of issue.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the type of the issue. The system that creates an OperationOutcome
     * SHALL choose the most applicable code from the IssueType value set, and may
     * additional provide its own code for the error in the details element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIssueType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A code that describes the type of issue.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the type of the issue. The system that creates an OperationOutcome
     * SHALL choose the most applicable code from the IssueType value set, and may
     * additional provide its own code for the error in the details element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIssueType $code
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue
     */
    public function setCode(FHIRIssueType $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Additional details about the error. This may be a text description of the error,
     * or a system code that identifies the error.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Additional details about the error. This may be a text description of the error,
     * or a system code that identifies the error.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $details
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue
     */
    public function setDetails(FHIRCodeableConcept $details = null)
    {
        $this->details = $details;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Additional diagnostic information about the issue. Typically, this may be a
     * description of how a value is erroneous, or a stack dump to help trace the
     * issue.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getDiagnostics()
    {
        return $this->diagnostics;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Additional diagnostic information about the issue. Typically, this may be a
     * description of how a value is erroneous, or a stack dump to help trace the
     * issue.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $diagnostics
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue
     */
    public function setDiagnostics($diagnostics = null)
    {
        if (null === $diagnostics) {
            $this->diagnostics = null;
            return $this;
        }
        if ($diagnostics instanceof FHIRString) {
            $this->diagnostics = $diagnostics;
            return $this;
        }
        $this->diagnostics = new FHIRString($diagnostics);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A simple FHIRPath limited to element names, repetition indicators and the
     * default child access that identifies one of the elements in the resource that
     * caused this issue to be raised.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[]
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A simple FHIRPath limited to element names, repetition indicators and the
     * default child access that identifies one of the elements in the resource that
     * caused this issue to be raised.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $expression
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue
     */
    public function addExpression($expression = null)
    {
        if (null === $expression) {
            $this->expression = [];
            return $this;
        }
        if ($expression instanceof FHIRString) {
            $this->expression[] = $expression;
            return $this;
        }
        $this->expression[] = new FHIRString($expression);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A simple FHIRPath limited to element names, repetition indicators and the
     * default child access that identifies one of the elements in the resource that
     * caused this issue to be raised.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[] $expression
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue
     */
    public function setExpression(array $expression = [])
    {
        $this->expression = [];
        if ([] === $expression) {
            return $this;
        }
        foreach($expression as $v) {
            if ($v instanceof FHIRString) {
                $this->addExpression($v);
            } else {
                $this->addExpression(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * For resource issues, this will be a simple XPath limited to element names,
     * repetition indicators and the default child access that identifies one of the
     * elements in the resource that caused this issue to be raised. For HTTP errors,
     * will be "http." + the parameter name.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * For resource issues, this will be a simple XPath limited to element names,
     * repetition indicators and the default child access that identifies one of the
     * elements in the resource that caused this issue to be raised. For HTTP errors,
     * will be "http." + the parameter name.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $location
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue
     */
    public function addLocation($location = null)
    {
        if (null === $location) {
            $this->location = [];
            return $this;
        }
        if ($location instanceof FHIRString) {
            $this->location[] = $location;
            return $this;
        }
        $this->location[] = new FHIRString($location);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * For resource issues, this will be a simple XPath limited to element names,
     * repetition indicators and the default child access that identifies one of the
     * elements in the resource that caused this issue to be raised. For HTTP errors,
     * will be "http." + the parameter name.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[] $location
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue
     */
    public function setLocation(array $location = [])
    {
        $this->location = [];
        if ([] === $location) {
            return $this;
        }
        foreach($location as $v) {
            if ($v instanceof FHIRString) {
                $this->addLocation($v);
            } else {
                $this->addLocation(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * How the issue affects the success of the action.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates whether the issue indicates a variation from successful processing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIssueSeverity
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * How the issue affects the success of the action.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates whether the issue indicates a variation from successful processing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIssueSeverity $severity
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue
     */
    public function setSeverity(FHIRIssueSeverity $severity = null)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIROperationOutcomeIssue::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIROperationOutcomeIssue::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIROperationOutcomeIssue;
        } elseif (!is_object($type) || !($type instanceof FHIROperationOutcomeIssue)) {
            throw new \RuntimeException(sprintf(
                'FHIROperationOutcomeIssue::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->code)) {
            $type->setCode(FHIRIssueType::xmlUnserialize($children->code));
        }
        if (isset($children->details)) {
            $type->setDetails(FHIRCodeableConcept::xmlUnserialize($children->details));
        }
        if (isset($attributes->diagnostics)) {
            $type->setDiagnostics((string)$attributes->diagnostics);
        }
        if (isset($children->diagnostics)) {
            $type->setDiagnostics(FHIRString::xmlUnserialize($children->diagnostics));
        }
        if (isset($attributes->expression)) {
            $type->addExpression((string)$attributes->expression);
        }
        if (isset($children->expression)) {
            foreach($children->expression as $child) {
                $type->addExpression(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($attributes->location)) {
            $type->addLocation((string)$attributes->location);
        }
        if (isset($children->location)) {
            foreach($children->location as $child) {
                $type->addLocation(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->severity)) {
            $type->setSeverity(FHIRIssueSeverity::xmlUnserialize($children->severity));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDetails())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DETAILS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDiagnostics())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DIAGNOSTICS, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getExpression())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXPRESSION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getLocation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LOCATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getSeverity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SEVERITY, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_CODE_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getDetails())) {
            $a[self::FIELD_DETAILS] = $v;
        }
        if (null !== ($v = $this->getDiagnostics())) {
            $a[self::FIELD_DIAGNOSTICS] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_DIAGNOSTICS_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getExpression())) {
            $a[self::FIELD_EXPRESSION] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_EXPRESSION][] = $v->getValue();
                if ($v->_hasNonValueFieldsDefined()) {
                    if (!isset($a[self::FIELD_EXPRESSION_EXT])) {
                        $a[self::FIELD_EXPRESSION_EXT] = [];
                    }
                    $a[self::FIELD_EXPRESSION_EXT][] = $v;
                }
            }
        }
        if ([] !== ($vs = $this->getLocation())) {
            $a[self::FIELD_LOCATION] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_LOCATION][] = $v->getValue();
                if ($v->_hasNonValueFieldsDefined()) {
                    if (!isset($a[self::FIELD_LOCATION_EXT])) {
                        $a[self::FIELD_LOCATION_EXT] = [];
                    }
                    $a[self::FIELD_LOCATION_EXT][] = $v;
                }
            }
        }
        if (null !== ($v = $this->getSeverity())) {
            $a[self::FIELD_SEVERITY] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_SEVERITY_EXT] = $v;
            }
        }
        return $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}
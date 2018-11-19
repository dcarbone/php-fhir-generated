<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationOutcome;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRIssueSeverity;
use PHPFHIRGenerated\FHIRElement\FHIRIssueType;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * A collection of error, warning or information messages that result from a system action.
 *
 * Class FHIROperationOutcomeIssue
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationOutcome
 */
class FHIROperationOutcomeIssue extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'OperationOutcome.Issue';

    /**
     * Describes the type of the issue. The system that creates an OperationOutcome SHALL choose the most applicable code from the IssueType value set, and may additional provide its own code for the error in the details element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIssueType
     */
    private $code = null;

    /**
     * Additional details about the error. This may be a text description of the error, or a system code that identifies the error.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $details = null;

    /**
     * Additional diagnostic information about the issue.  Typically, this may be a description of how a value is erroneous, or a stack dump to help trace the issue.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $diagnostics = null;

    /**
     * A simple FHIRPath limited to element names, repetition indicators and the default child access that identifies one of the elements in the resource that caused this issue to be raised.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    private $expression = [];

    /**
     * For resource issues, this will be a simple XPath limited to element names, repetition indicators and the default child access that identifies one of the elements in the resource that caused this issue to be raised.  For HTTP errors, will be "http." + the parameter name.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    private $location = [];

    /**
     * Indicates whether the issue indicates a variation from successful processing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIssueSeverity
     */
    private $severity = null;

    /**
     * FHIROperationOutcomeIssue Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['code'])) {
                $value = $data['code'];
                if (is_array($value)) {
                    $value = new FHIRIssueType($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRIssueType($value);
                }
                if (!($value instanceof FHIRIssueType)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue::__construct - Property \"code\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRIssueType or data to construct type, saw ".gettype($value));
                }
                $this->setCode($value);
            }
            if (isset($data['details'])) {
                $value = $data['details'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue::__construct - Property \"details\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setDetails($value);
            }
            if (isset($data['diagnostics'])) {
                $value = $data['diagnostics'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue::__construct - Property \"diagnostics\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setDiagnostics($value);
            }
            if (isset($data['expression'])) {
                $value = $data['expression'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRString($v);
                        }  elseif (is_scalar($v)) {
                            $v = new FHIRString($v);
                        }
                        if (!($v instanceof FHIRString)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue::__construct - Collection field \"expression\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($v));
                        }
                        $this->addExpression($v);
                    }
                }
            }
            if (isset($data['location'])) {
                $value = $data['location'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRString($v);
                        }  elseif (is_scalar($v)) {
                            $v = new FHIRString($v);
                        }
                        if (!($v instanceof FHIRString)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue::__construct - Collection field \"location\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($v));
                        }
                        $this->addLocation($v);
                    }
                }
            }
            if (isset($data['severity'])) {
                $value = $data['severity'];
                if (is_array($value)) {
                    $value = new FHIRIssueSeverity($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRIssueSeverity($value);
                }
                if (!($value instanceof FHIRIssueSeverity)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue::__construct - Property \"severity\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRIssueSeverity or data to construct type, saw ".gettype($value));
                }
                $this->setSeverity($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Describes the type of the issue. The system that creates an OperationOutcome SHALL choose the most applicable code from the IssueType value set, and may additional provide its own code for the error in the details element.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIssueType
     * @return $this
     */
    public function setCode($code)
    {
        if (null === $code) {
            return $this; 
        }
        if (is_scalar($code)) {
            $code = new FHIRIssueType($code);
        }
        if (!($code instanceof FHIRIssueType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationOutcomeIssue::setCode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRIssueType or appropriate scalar value, %s seen.',
                gettype($code)
            ));
        }
        $this->code = $code;
        return $this;
    }

    /**
     * Describes the type of the issue. The system that creates an OperationOutcome SHALL choose the most applicable code from the IssueType value set, and may additional provide its own code for the error in the details element.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIssueType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Additional details about the error. This may be a text description of the error, or a system code that identifies the error.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setDetails(FHIRCodeableConcept $details = null)
    {
        if (null === $details) {
            return $this; 
        }
        $this->details = $details;
        return $this;
    }

    /**
     * Additional details about the error. This may be a text description of the error, or a system code that identifies the error.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Additional diagnostic information about the issue.  Typically, this may be a description of how a value is erroneous, or a stack dump to help trace the issue.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDiagnostics($diagnostics)
    {
        if (null === $diagnostics) {
            return $this; 
        }
        if (is_scalar($diagnostics)) {
            $diagnostics = new FHIRString($diagnostics);
        }
        if (!($diagnostics instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationOutcomeIssue::setDiagnostics - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($diagnostics)
            ));
        }
        $this->diagnostics = $diagnostics;
        return $this;
    }

    /**
     * Additional diagnostic information about the issue.  Typically, this may be a description of how a value is erroneous, or a stack dump to help trace the issue.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDiagnostics()
    {
        return $this->diagnostics;
    }

    /**
     * A simple FHIRPath limited to element names, repetition indicators and the default child access that identifies one of the elements in the resource that caused this issue to be raised.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function addExpression($expression)
    {
        if (null === $expression) {
            return $this; 
        }
        if (is_scalar($expression)) {
            $expression = new FHIRString($expression);
        }
        if (!($expression instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationOutcomeIssue::addExpression - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($expression)
            ));
        }
        $this->expression[] = $expression;
        return $this;
    }

    /**
     * A simple FHIRPath limited to element names, repetition indicators and the default child access that identifies one of the elements in the resource that caused this issue to be raised.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * For resource issues, this will be a simple XPath limited to element names, repetition indicators and the default child access that identifies one of the elements in the resource that caused this issue to be raised.  For HTTP errors, will be "http." + the parameter name.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function addLocation($location)
    {
        if (null === $location) {
            return $this; 
        }
        if (is_scalar($location)) {
            $location = new FHIRString($location);
        }
        if (!($location instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationOutcomeIssue::addLocation - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($location)
            ));
        }
        $this->location[] = $location;
        return $this;
    }

    /**
     * For resource issues, this will be a simple XPath limited to element names, repetition indicators and the default child access that identifies one of the elements in the resource that caused this issue to be raised.  For HTTP errors, will be "http." + the parameter name.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Indicates whether the issue indicates a variation from successful processing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIssueSeverity
     * @return $this
     */
    public function setSeverity($severity)
    {
        if (null === $severity) {
            return $this; 
        }
        if (is_scalar($severity)) {
            $severity = new FHIRIssueSeverity($severity);
        }
        if (!($severity instanceof FHIRIssueSeverity)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationOutcomeIssue::setSeverity - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRIssueSeverity or appropriate scalar value, %s seen.',
                gettype($severity)
            ));
        }
        $this->severity = $severity;
        return $this;
    }

    /**
     * Indicates whether the issue indicates a variation from successful processing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIssueSeverity
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getDetails())) {
            $a['details'] = $v;
        }
        if (null !== ($v = $this->getDiagnostics())) {
            $a['diagnostics'] = $v;
        }
        if (0 < count($values = $this->getExpression())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['expression'] = $vs;
            }
        }
        if (0 < count($values = $this->getLocation())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['location'] = $vs;
            }
        }
        if (null !== ($v = $this->getSeverity())) {
            $a['severity'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<OperationOutcomeIssue xmlns="http://hl7.org/fhir"></OperationOutcomeIssue>');
        }
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize(true, $sxe->addChild('code'));
        }
        if (null !== ($v = $this->getDetails())) {
            $v->xmlSerialize(true, $sxe->addChild('details'));
        }
        if (null !== ($v = $this->getDiagnostics())) {
            $v->xmlSerialize(true, $sxe->addChild('diagnostics'));
        }
        if (0 < count($values = $this->getExpression())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('expression'));
                }
            }
        }
        if (0 < count($values = $this->getLocation())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('location'));
                }
            }
        }
        if (null !== ($v = $this->getSeverity())) {
            $v->xmlSerialize(true, $sxe->addChild('severity'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}
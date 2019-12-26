<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIROperationOutcome;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIssueSeverity;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * A collection of error, warning or information messages that result from a system
 * action.
 *
 * Class FHIROperationOutcomeIssue
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIROperationOutcome
 */
class FHIROperationOutcomeIssue extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_OPERATION_OUTCOME_DOT_ISSUE;
    const FIELD_DETAILS = 'details';
    const FIELD_DETAILS_EXT = '_details';
    const FIELD_LOCATION = 'location';
    const FIELD_LOCATION_EXT = '_location';
    const FIELD_SEVERITY = 'severity';
    const FIELD_SEVERITY_EXT = '_severity';
    const FIELD_TYPE = 'type';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional description of the issue.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $details = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A simple XPath limited to element names, repetition indicators and the default
     * child access that identifies one of the elements in the resource that caused
     * this issue to be raised.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString[]
     */
    protected $location = [];

    /**
     * How the issue affects the success of the action
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the issue indicates a variation from successful processing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIssueSeverity
     */
    protected $severity = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating the type of error, warning or information message.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding
     */
    protected $type = null;

    /**
     * Validation map for fields in type OperationOutcome.Issue
     * @var array
     */
    private static $_validationRules = [    ];

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
        if (isset($data[self::FIELD_DETAILS]) || isset($data[self::FIELD_DETAILS_EXT])) {
            if (isset($data[self::FIELD_DETAILS])) {
                $value = $data[self::FIELD_DETAILS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DETAILS_EXT]) && is_array($data[self::FIELD_DETAILS_EXT])) {
                $ext = $data[self::FIELD_DETAILS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDetails($value);
                } else if (is_array($value)) {
                    $this->setDetails(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDetails(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDetails(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_LOCATION]) || isset($data[self::FIELD_LOCATION_EXT])) {
            if (isset($data[self::FIELD_LOCATION])) {
                $value = $data[self::FIELD_LOCATION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LOCATION_EXT]) && is_array($data[self::FIELD_LOCATION_EXT])) {
                $ext = $data[self::FIELD_LOCATION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addLocation($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addLocation($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addLocation(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addLocation(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addLocation(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addLocation(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addLocation(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_SEVERITY]) || isset($data[self::FIELD_SEVERITY_EXT])) {
            if (isset($data[self::FIELD_SEVERITY])) {
                $value = $data[self::FIELD_SEVERITY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SEVERITY_EXT]) && is_array($data[self::FIELD_SEVERITY_EXT])) {
                $ext = $data[self::FIELD_SEVERITY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRIssueSeverity) {
                    $this->setSeverity($value);
                } else if (is_array($value)) {
                    $this->setSeverity(new FHIRIssueSeverity(array_merge($ext, $value)));
                } else {
                    $this->setSeverity(new FHIRIssueSeverity([FHIRIssueSeverity::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSeverity(new FHIRIssueSeverity($ext));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCoding) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCoding($data[self::FIELD_TYPE]));
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
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional description of the issue.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional description of the issue.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $details
     * @return static
     */
    public function setDetails($details = null)
    {
        if (null === $details) {
            $this->details = null;
            return $this;
        }
        if ($details instanceof FHIRString) {
            $this->details = $details;
            return $this;
        }
        $this->details = new FHIRString($details);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A simple XPath limited to element names, repetition indicators and the default
     * child access that identifies one of the elements in the resource that caused
     * this issue to be raised.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A simple XPath limited to element names, repetition indicators and the default
     * child access that identifies one of the elements in the resource that caused
     * this issue to be raised.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $location
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A simple XPath limited to element names, repetition indicators and the default
     * child access that identifies one of the elements in the resource that caused
     * this issue to be raised.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString[] $location
     * @return static
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
     * How the issue affects the success of the action
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the issue indicates a variation from successful processing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIssueSeverity
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * How the issue affects the success of the action
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the issue indicates a variation from successful processing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIssueSeverity $severity
     * @return static
     */
    public function setSeverity(FHIRIssueSeverity $severity = null)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating the type of error, warning or information message.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating the type of error, warning or information message.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding $type
     * @return static
     */
    public function setType(FHIRCoding $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getDetails())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DETAILS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getLocation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LOCATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSeverity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEVERITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DETAILS])) {
            $v = $this->getDetails();
            foreach($validationRules[self::FIELD_DETAILS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_OUTCOME_DOT_ISSUE, self::FIELD_DETAILS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAILS])) {
                        $errs[self::FIELD_DETAILS] = [];
                    }
                    $errs[self::FIELD_DETAILS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCATION])) {
            $v = $this->getLocation();
            foreach($validationRules[self::FIELD_LOCATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_OUTCOME_DOT_ISSUE, self::FIELD_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION])) {
                        $errs[self::FIELD_LOCATION] = [];
                    }
                    $errs[self::FIELD_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEVERITY])) {
            $v = $this->getSeverity();
            foreach($validationRules[self::FIELD_SEVERITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_OUTCOME_DOT_ISSUE, self::FIELD_SEVERITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEVERITY])) {
                        $errs[self::FIELD_SEVERITY] = [];
                    }
                    $errs[self::FIELD_SEVERITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_OUTCOME_DOT_ISSUE, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue
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
                'FHIROperationOutcomeIssue::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue or null, %s seen.',
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
        if (isset($children->details)) {
            $type->setDetails(FHIRString::xmlUnserialize($children->details));
        }
        if (isset($attributes->details)) {
            $pt = $type->getDetails();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->details);
            } else {
                $type->setDetails((string)$attributes->details);
            }
        }
        if (isset($children->location)) {
            foreach($children->location as $child) {
                $type->addLocation(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->severity)) {
            $type->setSeverity(FHIRIssueSeverity::xmlUnserialize($children->severity));
        }
        if (isset($children->type)) {
            $type->setType(FHIRCoding::xmlUnserialize($children->type));
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
        if (null !== ($v = $this->getDetails())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DETAILS, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDetails())) {
            $a[self::FIELD_DETAILS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_DETAILS_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getLocation())) {
            $a[self::FIELD_LOCATION] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_LOCATION][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRString::FIELD_VALUE]) || array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRString::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_LOCATION_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getSeverity())) {
            $a[self::FIELD_SEVERITY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRIssueSeverity::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRIssueSeverity::FIELD_VALUE]);
                $a[self::FIELD_SEVERITY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
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
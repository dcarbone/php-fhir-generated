<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile;

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
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRConstraintSeverity;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * A Resource Profile - a statement of use of one or more FHIR Resources. It may
 * include constraints on Resources and Data Types, Terminology Binding Statements
 * and Extension Definitions.
 *
 * Class FHIRProfileConstraint
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile
 */
class FHIRProfileConstraint extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_CONSTRAINT;
    const FIELD_HUMAN = 'human';
    const FIELD_HUMAN_EXT = '_human';
    const FIELD_KEY = 'key';
    const FIELD_KEY_EXT = '_key';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_SEVERITY = 'severity';
    const FIELD_SEVERITY_EXT = '_severity';
    const FIELD_XPATH = 'xpath';
    const FIELD_XPATH_EXT = '_xpath';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text that can be used to describe the constraint in messages identifying that
     * the constraint has been violated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $human = null;

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Allows identification of which elements have their cardinalities impacted by the
     * constraint. Will not be referenced for constraints that do not affect
     * cardinality.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId
     */
    protected $key = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used to label the constraint in OCL or in short displays incapable of displaying
     * the full human description.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $name = null;

    /**
     * SHALL applications comply with this constraint?
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the impact constraint violation has on the conformance of the
     * instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRConstraintSeverity
     */
    protected $severity = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * XPath expression of constraint.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $xpath = null;

    /**
     * Validation map for fields in type Profile.Constraint
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRProfileConstraint Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProfileConstraint::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_HUMAN]) || isset($data[self::FIELD_HUMAN_EXT])) {
            if (isset($data[self::FIELD_HUMAN])) {
                $value = $data[self::FIELD_HUMAN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_HUMAN_EXT]) && is_array($data[self::FIELD_HUMAN_EXT])) {
                $ext = $data[self::FIELD_HUMAN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setHuman($value);
                } else if (is_array($value)) {
                    $this->setHuman(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setHuman(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setHuman(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_KEY]) || isset($data[self::FIELD_KEY_EXT])) {
            if (isset($data[self::FIELD_KEY])) {
                $value = $data[self::FIELD_KEY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_KEY_EXT]) && is_array($data[self::FIELD_KEY_EXT])) {
                $ext = $data[self::FIELD_KEY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setKey($value);
                } else if (is_array($value)) {
                    $this->setKey(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setKey(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setKey(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_NAME]) || isset($data[self::FIELD_NAME_EXT])) {
            if (isset($data[self::FIELD_NAME])) {
                $value = $data[self::FIELD_NAME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT])) {
                $ext = $data[self::FIELD_NAME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setName($value);
                } else if (is_array($value)) {
                    $this->setName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setName(new FHIRString($ext));
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
                if ($value instanceof FHIRConstraintSeverity) {
                    $this->setSeverity($value);
                } else if (is_array($value)) {
                    $this->setSeverity(new FHIRConstraintSeverity(array_merge($ext, $value)));
                } else {
                    $this->setSeverity(new FHIRConstraintSeverity([FHIRConstraintSeverity::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSeverity(new FHIRConstraintSeverity($ext));
            }
        }
        if (isset($data[self::FIELD_XPATH]) || isset($data[self::FIELD_XPATH_EXT])) {
            if (isset($data[self::FIELD_XPATH])) {
                $value = $data[self::FIELD_XPATH];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_XPATH_EXT]) && is_array($data[self::FIELD_XPATH_EXT])) {
                $ext = $data[self::FIELD_XPATH_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setXpath($value);
                } else if (is_array($value)) {
                    $this->setXpath(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setXpath(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setXpath(new FHIRString($ext));
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
        return "<ProfileConstraint{$xmlns}></ProfileConstraint>";
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text that can be used to describe the constraint in messages identifying that
     * the constraint has been violated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getHuman()
    {
        return $this->human;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text that can be used to describe the constraint in messages identifying that
     * the constraint has been violated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $human
     * @return static
     */
    public function setHuman($human = null)
    {
        if (null === $human) {
            $this->human = null;
            return $this;
        }
        if ($human instanceof FHIRString) {
            $this->human = $human;
            return $this;
        }
        $this->human = new FHIRString($human);
        return $this;
    }

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Allows identification of which elements have their cardinalities impacted by the
     * constraint. Will not be referenced for constraints that do not affect
     * cardinality.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Allows identification of which elements have their cardinalities impacted by the
     * constraint. Will not be referenced for constraints that do not affect
     * cardinality.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId $key
     * @return static
     */
    public function setKey($key = null)
    {
        if (null === $key) {
            $this->key = null;
            return $this;
        }
        if ($key instanceof FHIRId) {
            $this->key = $key;
            return $this;
        }
        $this->key = new FHIRId($key);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used to label the constraint in OCL or in short displays incapable of displaying
     * the full human description.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used to label the constraint in OCL or in short displays incapable of displaying
     * the full human description.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $name
     * @return static
     */
    public function setName($name = null)
    {
        if (null === $name) {
            $this->name = null;
            return $this;
        }
        if ($name instanceof FHIRString) {
            $this->name = $name;
            return $this;
        }
        $this->name = new FHIRString($name);
        return $this;
    }

    /**
     * SHALL applications comply with this constraint?
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the impact constraint violation has on the conformance of the
     * instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRConstraintSeverity
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * SHALL applications comply with this constraint?
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the impact constraint violation has on the conformance of the
     * instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRConstraintSeverity $severity
     * @return static
     */
    public function setSeverity(FHIRConstraintSeverity $severity = null)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * XPath expression of constraint.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getXpath()
    {
        return $this->xpath;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * XPath expression of constraint.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $xpath
     * @return static
     */
    public function setXpath($xpath = null)
    {
        if (null === $xpath) {
            $this->xpath = null;
            return $this;
        }
        if ($xpath instanceof FHIRString) {
            $this->xpath = $xpath;
            return $this;
        }
        $this->xpath = new FHIRString($xpath);
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
        if (null !== ($v = $this->getHuman())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_HUMAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getKey())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_KEY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSeverity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEVERITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getXpath())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_XPATH] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_HUMAN])) {
            $v = $this->getHuman();
            foreach($validationRules[self::FIELD_HUMAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_CONSTRAINT, self::FIELD_HUMAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HUMAN])) {
                        $errs[self::FIELD_HUMAN] = [];
                    }
                    $errs[self::FIELD_HUMAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_KEY])) {
            $v = $this->getKey();
            foreach($validationRules[self::FIELD_KEY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_CONSTRAINT, self::FIELD_KEY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_KEY])) {
                        $errs[self::FIELD_KEY] = [];
                    }
                    $errs[self::FIELD_KEY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_CONSTRAINT, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEVERITY])) {
            $v = $this->getSeverity();
            foreach($validationRules[self::FIELD_SEVERITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_CONSTRAINT, self::FIELD_SEVERITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEVERITY])) {
                        $errs[self::FIELD_SEVERITY] = [];
                    }
                    $errs[self::FIELD_SEVERITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_XPATH])) {
            $v = $this->getXpath();
            foreach($validationRules[self::FIELD_XPATH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_CONSTRAINT, self::FIELD_XPATH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_XPATH])) {
                        $errs[self::FIELD_XPATH] = [];
                    }
                    $errs[self::FIELD_XPATH][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileConstraint $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileConstraint
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
                throw new \DomainException(sprintf('FHIRProfileConstraint::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRProfileConstraint::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRProfileConstraint;
        } elseif (!is_object($type) || !($type instanceof FHIRProfileConstraint)) {
            throw new \RuntimeException(sprintf(
                'FHIRProfileConstraint::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileConstraint or null, %s seen.',
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
        if (isset($children->human)) {
            $type->setHuman(FHIRString::xmlUnserialize($children->human));
        }
        if (isset($attributes->human)) {
            $pt = $type->getHuman();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->human);
            } else {
                $type->setHuman((string)$attributes->human);
            }
        }
        if (isset($children->key)) {
            $type->setKey(FHIRId::xmlUnserialize($children->key));
        }
        if (isset($attributes->key)) {
            $pt = $type->getKey();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->key);
            } else {
                $type->setKey((string)$attributes->key);
            }
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($attributes->name)) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->name);
            } else {
                $type->setName((string)$attributes->name);
            }
        }
        if (isset($children->severity)) {
            $type->setSeverity(FHIRConstraintSeverity::xmlUnserialize($children->severity));
        }
        if (isset($children->xpath)) {
            $type->setXpath(FHIRString::xmlUnserialize($children->xpath));
        }
        if (isset($attributes->xpath)) {
            $pt = $type->getXpath();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->xpath);
            } else {
                $type->setXpath((string)$attributes->xpath);
            }
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
        if (null !== ($v = $this->getHuman())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_HUMAN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getKey())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_KEY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSeverity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SEVERITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getXpath())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_XPATH, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getHuman())) {
            $a[self::FIELD_HUMAN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_HUMAN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getKey())) {
            $a[self::FIELD_KEY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRId::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRId::FIELD_VALUE]);
                $a[self::FIELD_KEY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_NAME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSeverity())) {
            $a[self::FIELD_SEVERITY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRConstraintSeverity::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRConstraintSeverity::FIELD_VALUE]);
                $a[self::FIELD_SEVERITY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getXpath())) {
            $a[self::FIELD_XPATH] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_XPATH_EXT] = $enc;
            }
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
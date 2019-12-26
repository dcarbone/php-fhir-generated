<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRiskEvidenceSynthesis;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * The RiskEvidenceSynthesis resource describes the likelihood of an outcome in a
 * population plus exposure state where the risk estimate is derived from a
 * combination of research studies.
 *
 * Class FHIRRiskEvidenceSynthesisPrecisionEstimate
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRiskEvidenceSynthesis
 */
class FHIRRiskEvidenceSynthesisPrecisionEstimate extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_RISK_EVIDENCE_SYNTHESIS_DOT_PRECISION_ESTIMATE;
    const FIELD_FROM = 'from';
    const FIELD_FROM_EXT = '_from';
    const FIELD_LEVEL = 'level';
    const FIELD_LEVEL_EXT = '_level';
    const FIELD_TO = 'to';
    const FIELD_TO_EXT = '_to';
    const FIELD_TYPE = 'type';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lower bound of confidence interval.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    protected $from = null;

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Use 95 for a 95% confidence interval.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    protected $level = null;

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Upper bound of confidence interval.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    protected $to = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Examples include confidence interval and interquartile range.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $type = null;

    /**
     * Validation map for fields in type RiskEvidenceSynthesis.PrecisionEstimate
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRRiskEvidenceSynthesisPrecisionEstimate Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRRiskEvidenceSynthesisPrecisionEstimate::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_FROM]) || isset($data[self::FIELD_FROM_EXT])) {
            if (isset($data[self::FIELD_FROM])) {
                $value = $data[self::FIELD_FROM];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FROM_EXT]) && is_array($data[self::FIELD_FROM_EXT])) {
                $ext = $data[self::FIELD_FROM_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setFrom($value);
                } else if (is_array($value)) {
                    $this->setFrom(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setFrom(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFrom(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_LEVEL]) || isset($data[self::FIELD_LEVEL_EXT])) {
            if (isset($data[self::FIELD_LEVEL])) {
                $value = $data[self::FIELD_LEVEL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LEVEL_EXT]) && is_array($data[self::FIELD_LEVEL_EXT])) {
                $ext = $data[self::FIELD_LEVEL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setLevel($value);
                } else if (is_array($value)) {
                    $this->setLevel(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setLevel(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setLevel(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_TO]) || isset($data[self::FIELD_TO_EXT])) {
            if (isset($data[self::FIELD_TO])) {
                $value = $data[self::FIELD_TO];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TO_EXT]) && is_array($data[self::FIELD_TO_EXT])) {
                $ext = $data[self::FIELD_TO_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setTo($value);
                } else if (is_array($value)) {
                    $this->setTo(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setTo(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setTo(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
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
        return "<RiskEvidenceSynthesisPrecisionEstimate{$xmlns}></RiskEvidenceSynthesisPrecisionEstimate>";
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lower bound of confidence interval.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lower bound of confidence interval.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $from
     * @return static
     */
    public function setFrom($from = null)
    {
        if (null === $from) {
            $this->from = null;
            return $this;
        }
        if ($from instanceof FHIRDecimal) {
            $this->from = $from;
            return $this;
        }
        $this->from = new FHIRDecimal($from);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Use 95 for a 95% confidence interval.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Use 95 for a 95% confidence interval.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $level
     * @return static
     */
    public function setLevel($level = null)
    {
        if (null === $level) {
            $this->level = null;
            return $this;
        }
        if ($level instanceof FHIRDecimal) {
            $this->level = $level;
            return $this;
        }
        $this->level = new FHIRDecimal($level);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Upper bound of confidence interval.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Upper bound of confidence interval.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $to
     * @return static
     */
    public function setTo($to = null)
    {
        if (null === $to) {
            $this->to = null;
            return $this;
        }
        if ($to instanceof FHIRDecimal) {
            $this->to = $to;
            return $this;
        }
        $this->to = new FHIRDecimal($to);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Examples include confidence interval and interquartile range.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Examples include confidence interval and interquartile range.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(FHIRCodeableConcept $type = null)
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
        if (null !== ($v = $this->getFrom())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FROM] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLevel())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LEVEL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTo())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_FROM])) {
            $v = $this->getFrom();
            foreach($validationRules[self::FIELD_FROM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_EVIDENCE_SYNTHESIS_DOT_PRECISION_ESTIMATE, self::FIELD_FROM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FROM])) {
                        $errs[self::FIELD_FROM] = [];
                    }
                    $errs[self::FIELD_FROM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LEVEL])) {
            $v = $this->getLevel();
            foreach($validationRules[self::FIELD_LEVEL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_EVIDENCE_SYNTHESIS_DOT_PRECISION_ESTIMATE, self::FIELD_LEVEL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LEVEL])) {
                        $errs[self::FIELD_LEVEL] = [];
                    }
                    $errs[self::FIELD_LEVEL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TO])) {
            $v = $this->getTo();
            foreach($validationRules[self::FIELD_TO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_EVIDENCE_SYNTHESIS_DOT_PRECISION_ESTIMATE, self::FIELD_TO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TO])) {
                        $errs[self::FIELD_TO] = [];
                    }
                    $errs[self::FIELD_TO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_EVIDENCE_SYNTHESIS_DOT_PRECISION_ESTIMATE, self::FIELD_TYPE, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRiskEvidenceSynthesis\FHIRRiskEvidenceSynthesisPrecisionEstimate $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRiskEvidenceSynthesis\FHIRRiskEvidenceSynthesisPrecisionEstimate
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
                throw new \DomainException(sprintf('FHIRRiskEvidenceSynthesisPrecisionEstimate::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRRiskEvidenceSynthesisPrecisionEstimate::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRRiskEvidenceSynthesisPrecisionEstimate;
        } elseif (!is_object($type) || !($type instanceof FHIRRiskEvidenceSynthesisPrecisionEstimate)) {
            throw new \RuntimeException(sprintf(
                'FHIRRiskEvidenceSynthesisPrecisionEstimate::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRRiskEvidenceSynthesis\FHIRRiskEvidenceSynthesisPrecisionEstimate or null, %s seen.',
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
        if (isset($children->from)) {
            $type->setFrom(FHIRDecimal::xmlUnserialize($children->from));
        }
        if (isset($attributes->from)) {
            $pt = $type->getFrom();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->from);
            } else {
                $type->setFrom((string)$attributes->from);
            }
        }
        if (isset($children->level)) {
            $type->setLevel(FHIRDecimal::xmlUnserialize($children->level));
        }
        if (isset($attributes->level)) {
            $pt = $type->getLevel();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->level);
            } else {
                $type->setLevel((string)$attributes->level);
            }
        }
        if (isset($children->to)) {
            $type->setTo(FHIRDecimal::xmlUnserialize($children->to));
        }
        if (isset($attributes->to)) {
            $pt = $type->getTo();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->to);
            } else {
                $type->setTo((string)$attributes->to);
            }
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
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
        if (null !== ($v = $this->getFrom())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FROM, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLevel())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LEVEL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTo())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TO, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getFrom())) {
            $a[self::FIELD_FROM] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_FROM_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getLevel())) {
            $a[self::FIELD_LEVEL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_LEVEL_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getTo())) {
            $a[self::FIELD_TO] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_TO_EXT] = $enc;
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
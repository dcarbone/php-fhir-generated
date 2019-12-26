<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREffectEvidenceSynthesis;

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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * The EffectEvidenceSynthesis resource describes the difference in an outcome
 * between exposures states in a population where the effect estimate is derived
 * from a combination of research studies.
 *
 * Class FHIREffectEvidenceSynthesisSampleSize
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREffectEvidenceSynthesis
 */
class FHIREffectEvidenceSynthesisSampleSize extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_EFFECT_EVIDENCE_SYNTHESIS_DOT_SAMPLE_SIZE;
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_NUMBER_OF_PARTICIPANTS = 'numberOfParticipants';
    const FIELD_NUMBER_OF_PARTICIPANTS_EXT = '_numberOfParticipants';
    const FIELD_NUMBER_OF_STUDIES = 'numberOfStudies';
    const FIELD_NUMBER_OF_STUDIES_EXT = '_numberOfStudies';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human-readable summary of sample size.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $description = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of participants included in this evidence synthesis.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    protected $numberOfParticipants = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of studies included in this evidence synthesis.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    protected $numberOfStudies = null;

    /**
     * Validation map for fields in type EffectEvidenceSynthesis.SampleSize
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIREffectEvidenceSynthesisSampleSize Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIREffectEvidenceSynthesisSampleSize::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DESCRIPTION]) || isset($data[self::FIELD_DESCRIPTION_EXT])) {
            if (isset($data[self::FIELD_DESCRIPTION])) {
                $value = $data[self::FIELD_DESCRIPTION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) {
                $ext = $data[self::FIELD_DESCRIPTION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDescription(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_NUMBER_OF_PARTICIPANTS]) || isset($data[self::FIELD_NUMBER_OF_PARTICIPANTS_EXT])) {
            if (isset($data[self::FIELD_NUMBER_OF_PARTICIPANTS])) {
                $value = $data[self::FIELD_NUMBER_OF_PARTICIPANTS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NUMBER_OF_PARTICIPANTS_EXT]) && is_array($data[self::FIELD_NUMBER_OF_PARTICIPANTS_EXT])) {
                $ext = $data[self::FIELD_NUMBER_OF_PARTICIPANTS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setNumberOfParticipants($value);
                } else if (is_array($value)) {
                    $this->setNumberOfParticipants(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setNumberOfParticipants(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setNumberOfParticipants(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_NUMBER_OF_STUDIES]) || isset($data[self::FIELD_NUMBER_OF_STUDIES_EXT])) {
            if (isset($data[self::FIELD_NUMBER_OF_STUDIES])) {
                $value = $data[self::FIELD_NUMBER_OF_STUDIES];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NUMBER_OF_STUDIES_EXT]) && is_array($data[self::FIELD_NUMBER_OF_STUDIES_EXT])) {
                $ext = $data[self::FIELD_NUMBER_OF_STUDIES_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setNumberOfStudies($value);
                } else if (is_array($value)) {
                    $this->setNumberOfStudies(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setNumberOfStudies(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setNumberOfStudies(new FHIRInteger($ext));
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
        return "<EffectEvidenceSynthesisSampleSize{$xmlns}></EffectEvidenceSynthesisSampleSize>";
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human-readable summary of sample size.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human-readable summary of sample size.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRString) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRString($description);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of participants included in this evidence synthesis.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getNumberOfParticipants()
    {
        return $this->numberOfParticipants;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of participants included in this evidence synthesis.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $numberOfParticipants
     * @return static
     */
    public function setNumberOfParticipants($numberOfParticipants = null)
    {
        if (null === $numberOfParticipants) {
            $this->numberOfParticipants = null;
            return $this;
        }
        if ($numberOfParticipants instanceof FHIRInteger) {
            $this->numberOfParticipants = $numberOfParticipants;
            return $this;
        }
        $this->numberOfParticipants = new FHIRInteger($numberOfParticipants);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of studies included in this evidence synthesis.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getNumberOfStudies()
    {
        return $this->numberOfStudies;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of studies included in this evidence synthesis.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $numberOfStudies
     * @return static
     */
    public function setNumberOfStudies($numberOfStudies = null)
    {
        if (null === $numberOfStudies) {
            $this->numberOfStudies = null;
            return $this;
        }
        if ($numberOfStudies instanceof FHIRInteger) {
            $this->numberOfStudies = $numberOfStudies;
            return $this;
        }
        $this->numberOfStudies = new FHIRInteger($numberOfStudies);
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
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNumberOfParticipants())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NUMBER_OF_PARTICIPANTS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNumberOfStudies())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NUMBER_OF_STUDIES] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EFFECT_EVIDENCE_SYNTHESIS_DOT_SAMPLE_SIZE, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUMBER_OF_PARTICIPANTS])) {
            $v = $this->getNumberOfParticipants();
            foreach($validationRules[self::FIELD_NUMBER_OF_PARTICIPANTS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EFFECT_EVIDENCE_SYNTHESIS_DOT_SAMPLE_SIZE, self::FIELD_NUMBER_OF_PARTICIPANTS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUMBER_OF_PARTICIPANTS])) {
                        $errs[self::FIELD_NUMBER_OF_PARTICIPANTS] = [];
                    }
                    $errs[self::FIELD_NUMBER_OF_PARTICIPANTS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUMBER_OF_STUDIES])) {
            $v = $this->getNumberOfStudies();
            foreach($validationRules[self::FIELD_NUMBER_OF_STUDIES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EFFECT_EVIDENCE_SYNTHESIS_DOT_SAMPLE_SIZE, self::FIELD_NUMBER_OF_STUDIES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUMBER_OF_STUDIES])) {
                        $errs[self::FIELD_NUMBER_OF_STUDIES] = [];
                    }
                    $errs[self::FIELD_NUMBER_OF_STUDIES][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREffectEvidenceSynthesis\FHIREffectEvidenceSynthesisSampleSize $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREffectEvidenceSynthesis\FHIREffectEvidenceSynthesisSampleSize
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
                throw new \DomainException(sprintf('FHIREffectEvidenceSynthesisSampleSize::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIREffectEvidenceSynthesisSampleSize::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIREffectEvidenceSynthesisSampleSize;
        } elseif (!is_object($type) || !($type instanceof FHIREffectEvidenceSynthesisSampleSize)) {
            throw new \RuntimeException(sprintf(
                'FHIREffectEvidenceSynthesisSampleSize::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREffectEvidenceSynthesis\FHIREffectEvidenceSynthesisSampleSize or null, %s seen.',
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
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($attributes->description)) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->description);
            } else {
                $type->setDescription((string)$attributes->description);
            }
        }
        if (isset($children->numberOfParticipants)) {
            $type->setNumberOfParticipants(FHIRInteger::xmlUnserialize($children->numberOfParticipants));
        }
        if (isset($attributes->numberOfParticipants)) {
            $pt = $type->getNumberOfParticipants();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->numberOfParticipants);
            } else {
                $type->setNumberOfParticipants((string)$attributes->numberOfParticipants);
            }
        }
        if (isset($children->numberOfStudies)) {
            $type->setNumberOfStudies(FHIRInteger::xmlUnserialize($children->numberOfStudies));
        }
        if (isset($attributes->numberOfStudies)) {
            $pt = $type->getNumberOfStudies();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->numberOfStudies);
            } else {
                $type->setNumberOfStudies((string)$attributes->numberOfStudies);
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
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getNumberOfParticipants())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NUMBER_OF_PARTICIPANTS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getNumberOfStudies())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NUMBER_OF_STUDIES, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_DESCRIPTION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getNumberOfParticipants())) {
            $a[self::FIELD_NUMBER_OF_PARTICIPANTS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_NUMBER_OF_PARTICIPANTS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getNumberOfStudies())) {
            $a[self::FIELD_NUMBER_OF_STUDIES] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_NUMBER_OF_STUDIES_EXT] = $enc;
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
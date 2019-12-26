<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;

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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A populatioof people with some set of grouping criteria.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRPopulation
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement
 */
class FHIRPopulation extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_POPULATION;
    const FIELD_AGE_CODEABLE_CONCEPT = 'ageCodeableConcept';
    const FIELD_AGE_RANGE = 'ageRange';
    const FIELD_GENDER = 'gender';
    const FIELD_PHYSIOLOGICAL_CONDITION = 'physiologicalCondition';
    const FIELD_RACE = 'race';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age of the specific population. (choose any one of age*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $ageCodeableConcept = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age of the specific population. (choose any one of age*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    protected $ageRange = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The gender of the specific population.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $gender = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The existing physiological conditions of the specific population to which this
     * applies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $physiologicalCondition = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Race of the specific population.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $race = null;

    /**
     * Validation map for fields in type Population
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRPopulation Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPopulation::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AGE_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_AGE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setAgeCodeableConcept($data[self::FIELD_AGE_CODEABLE_CONCEPT]);
            } else {
                $this->setAgeCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_AGE_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_AGE_RANGE])) {
            if ($data[self::FIELD_AGE_RANGE] instanceof FHIRRange) {
                $this->setAgeRange($data[self::FIELD_AGE_RANGE]);
            } else {
                $this->setAgeRange(new FHIRRange($data[self::FIELD_AGE_RANGE]));
            }
        }
        if (isset($data[self::FIELD_GENDER])) {
            if ($data[self::FIELD_GENDER] instanceof FHIRCodeableConcept) {
                $this->setGender($data[self::FIELD_GENDER]);
            } else {
                $this->setGender(new FHIRCodeableConcept($data[self::FIELD_GENDER]));
            }
        }
        if (isset($data[self::FIELD_PHYSIOLOGICAL_CONDITION])) {
            if ($data[self::FIELD_PHYSIOLOGICAL_CONDITION] instanceof FHIRCodeableConcept) {
                $this->setPhysiologicalCondition($data[self::FIELD_PHYSIOLOGICAL_CONDITION]);
            } else {
                $this->setPhysiologicalCondition(new FHIRCodeableConcept($data[self::FIELD_PHYSIOLOGICAL_CONDITION]));
            }
        }
        if (isset($data[self::FIELD_RACE])) {
            if ($data[self::FIELD_RACE] instanceof FHIRCodeableConcept) {
                $this->setRace($data[self::FIELD_RACE]);
            } else {
                $this->setRace(new FHIRCodeableConcept($data[self::FIELD_RACE]));
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
        return "<Population{$xmlns}></Population>";
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age of the specific population. (choose any one of age*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getAgeCodeableConcept()
    {
        return $this->ageCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age of the specific population. (choose any one of age*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $ageCodeableConcept
     * @return static
     */
    public function setAgeCodeableConcept(FHIRCodeableConcept $ageCodeableConcept = null)
    {
        $this->ageCodeableConcept = $ageCodeableConcept;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age of the specific population. (choose any one of age*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    public function getAgeRange()
    {
        return $this->ageRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age of the specific population. (choose any one of age*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange $ageRange
     * @return static
     */
    public function setAgeRange(FHIRRange $ageRange = null)
    {
        $this->ageRange = $ageRange;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The gender of the specific population.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The gender of the specific population.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $gender
     * @return static
     */
    public function setGender(FHIRCodeableConcept $gender = null)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The existing physiological conditions of the specific population to which this
     * applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getPhysiologicalCondition()
    {
        return $this->physiologicalCondition;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The existing physiological conditions of the specific population to which this
     * applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $physiologicalCondition
     * @return static
     */
    public function setPhysiologicalCondition(FHIRCodeableConcept $physiologicalCondition = null)
    {
        $this->physiologicalCondition = $physiologicalCondition;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Race of the specific population.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Race of the specific population.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $race
     * @return static
     */
    public function setRace(FHIRCodeableConcept $race = null)
    {
        $this->race = $race;
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
        if (null !== ($v = $this->getAgeCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AGE_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAgeRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AGE_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGender())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GENDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPhysiologicalCondition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PHYSIOLOGICAL_CONDITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRace())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RACE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_AGE_CODEABLE_CONCEPT])) {
            $v = $this->getAgeCodeableConcept();
            foreach($validationRules[self::FIELD_AGE_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_POPULATION, self::FIELD_AGE_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AGE_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_AGE_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_AGE_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AGE_RANGE])) {
            $v = $this->getAgeRange();
            foreach($validationRules[self::FIELD_AGE_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_POPULATION, self::FIELD_AGE_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AGE_RANGE])) {
                        $errs[self::FIELD_AGE_RANGE] = [];
                    }
                    $errs[self::FIELD_AGE_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GENDER])) {
            $v = $this->getGender();
            foreach($validationRules[self::FIELD_GENDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_POPULATION, self::FIELD_GENDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GENDER])) {
                        $errs[self::FIELD_GENDER] = [];
                    }
                    $errs[self::FIELD_GENDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PHYSIOLOGICAL_CONDITION])) {
            $v = $this->getPhysiologicalCondition();
            foreach($validationRules[self::FIELD_PHYSIOLOGICAL_CONDITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_POPULATION, self::FIELD_PHYSIOLOGICAL_CONDITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PHYSIOLOGICAL_CONDITION])) {
                        $errs[self::FIELD_PHYSIOLOGICAL_CONDITION] = [];
                    }
                    $errs[self::FIELD_PHYSIOLOGICAL_CONDITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RACE])) {
            $v = $this->getRace();
            foreach($validationRules[self::FIELD_RACE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_POPULATION, self::FIELD_RACE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RACE])) {
                        $errs[self::FIELD_RACE] = [];
                    }
                    $errs[self::FIELD_RACE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPopulation $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPopulation
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
                throw new \DomainException(sprintf('FHIRPopulation::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRPopulation::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRPopulation;
        } elseif (!is_object($type) || !($type instanceof FHIRPopulation)) {
            throw new \RuntimeException(sprintf(
                'FHIRPopulation::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPopulation or null, %s seen.',
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
        if (isset($children->ageCodeableConcept)) {
            $type->setAgeCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->ageCodeableConcept));
        }
        if (isset($children->ageRange)) {
            $type->setAgeRange(FHIRRange::xmlUnserialize($children->ageRange));
        }
        if (isset($children->gender)) {
            $type->setGender(FHIRCodeableConcept::xmlUnserialize($children->gender));
        }
        if (isset($children->physiologicalCondition)) {
            $type->setPhysiologicalCondition(FHIRCodeableConcept::xmlUnserialize($children->physiologicalCondition));
        }
        if (isset($children->race)) {
            $type->setRace(FHIRCodeableConcept::xmlUnserialize($children->race));
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
        if (null !== ($v = $this->getAgeCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AGE_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAgeRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AGE_RANGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getGender())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_GENDER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPhysiologicalCondition())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PHYSIOLOGICAL_CONDITION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRace())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RACE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAgeCodeableConcept())) {
            $a[self::FIELD_AGE_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getAgeRange())) {
            $a[self::FIELD_AGE_RANGE] = $v;
        }
        if (null !== ($v = $this->getGender())) {
            $a[self::FIELD_GENDER] = $v;
        }
        if (null !== ($v = $this->getPhysiologicalCondition())) {
            $a[self::FIELD_PHYSIOLOGICAL_CONDITION] = $v;
        }
        if (null !== ($v = $this->getRace())) {
            $a[self::FIELD_RACE] = $v;
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
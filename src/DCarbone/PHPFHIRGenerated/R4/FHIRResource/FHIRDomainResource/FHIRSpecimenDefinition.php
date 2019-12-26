<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A kind of specimen with associated set of requirements.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRSpecimenDefinition
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRSpecimenDefinition extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION;
    const FIELD_COLLECTION = 'collection';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_PATIENT_PREPARATION = 'patientPreparation';
    const FIELD_TIME_ASPECT = 'timeAspect';
    const FIELD_TIME_ASPECT_EXT = '_timeAspect';
    const FIELD_TYPE_COLLECTED = 'typeCollected';
    const FIELD_TYPE_TESTED = 'typeTested';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The action to be performed for collecting the specimen.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $collection = [];

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A business identifier associated with the kind of specimen.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    protected $identifier = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Preparation of the patient for specimen collection.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $patientPreparation = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Time aspect of specimen collection (duration or offset).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $timeAspect = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of material to be collected.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $typeCollected = null;

    /**
     * A kind of specimen with associated set of requirements.
     *
     * Specimen conditioned in a container as expected by the testing laboratory.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested[]
     */
    protected $typeTested = [];

    /**
     * Validation map for fields in type SpecimenDefinition
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRSpecimenDefinition Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSpecimenDefinition::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_COLLECTION])) {
            if (is_array($data[self::FIELD_COLLECTION])) {
                foreach($data[self::FIELD_COLLECTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCollection($v);
                    } else {
                        $this->addCollection(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_COLLECTION] instanceof FHIRCodeableConcept) {
                $this->addCollection($data[self::FIELD_COLLECTION]);
            } else {
                $this->addCollection(new FHIRCodeableConcept($data[self::FIELD_COLLECTION]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_PATIENT_PREPARATION])) {
            if (is_array($data[self::FIELD_PATIENT_PREPARATION])) {
                foreach($data[self::FIELD_PATIENT_PREPARATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addPatientPreparation($v);
                    } else {
                        $this->addPatientPreparation(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_PATIENT_PREPARATION] instanceof FHIRCodeableConcept) {
                $this->addPatientPreparation($data[self::FIELD_PATIENT_PREPARATION]);
            } else {
                $this->addPatientPreparation(new FHIRCodeableConcept($data[self::FIELD_PATIENT_PREPARATION]));
            }
        }
        if (isset($data[self::FIELD_TIME_ASPECT]) || isset($data[self::FIELD_TIME_ASPECT_EXT])) {
            if (isset($data[self::FIELD_TIME_ASPECT])) {
                $value = $data[self::FIELD_TIME_ASPECT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TIME_ASPECT_EXT]) && is_array($data[self::FIELD_TIME_ASPECT_EXT])) {
                $ext = $data[self::FIELD_TIME_ASPECT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setTimeAspect($value);
                } else if (is_array($value)) {
                    $this->setTimeAspect(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setTimeAspect(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setTimeAspect(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_TYPE_COLLECTED])) {
            if ($data[self::FIELD_TYPE_COLLECTED] instanceof FHIRCodeableConcept) {
                $this->setTypeCollected($data[self::FIELD_TYPE_COLLECTED]);
            } else {
                $this->setTypeCollected(new FHIRCodeableConcept($data[self::FIELD_TYPE_COLLECTED]));
            }
        }
        if (isset($data[self::FIELD_TYPE_TESTED])) {
            if (is_array($data[self::FIELD_TYPE_TESTED])) {
                foreach($data[self::FIELD_TYPE_TESTED] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSpecimenDefinitionTypeTested) {
                        $this->addTypeTested($v);
                    } else {
                        $this->addTypeTested(new FHIRSpecimenDefinitionTypeTested($v));
                    }
                }
            } else if ($data[self::FIELD_TYPE_TESTED] instanceof FHIRSpecimenDefinitionTypeTested) {
                $this->addTypeTested($data[self::FIELD_TYPE_TESTED]);
            } else {
                $this->addTypeTested(new FHIRSpecimenDefinitionTypeTested($data[self::FIELD_TYPE_TESTED]));
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
        return "<SpecimenDefinition{$xmlns}></SpecimenDefinition>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The action to be performed for collecting the specimen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The action to be performed for collecting the specimen.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $collection
     * @return static
     */
    public function addCollection(FHIRCodeableConcept $collection = null)
    {
        $this->collection[] = $collection;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The action to be performed for collecting the specimen.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $collection
     * @return static
     */
    public function setCollection(array $collection = [])
    {
        $this->collection = [];
        if ([] === $collection) {
            return $this;
        }
        foreach($collection as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCollection($v);
            } else {
                $this->addCollection(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A business identifier associated with the kind of specimen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A business identifier associated with the kind of specimen.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Preparation of the patient for specimen collection.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getPatientPreparation()
    {
        return $this->patientPreparation;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Preparation of the patient for specimen collection.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $patientPreparation
     * @return static
     */
    public function addPatientPreparation(FHIRCodeableConcept $patientPreparation = null)
    {
        $this->patientPreparation[] = $patientPreparation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Preparation of the patient for specimen collection.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $patientPreparation
     * @return static
     */
    public function setPatientPreparation(array $patientPreparation = [])
    {
        $this->patientPreparation = [];
        if ([] === $patientPreparation) {
            return $this;
        }
        foreach($patientPreparation as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addPatientPreparation($v);
            } else {
                $this->addPatientPreparation(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Time aspect of specimen collection (duration or offset).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getTimeAspect()
    {
        return $this->timeAspect;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Time aspect of specimen collection (duration or offset).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $timeAspect
     * @return static
     */
    public function setTimeAspect($timeAspect = null)
    {
        if (null === $timeAspect) {
            $this->timeAspect = null;
            return $this;
        }
        if ($timeAspect instanceof FHIRString) {
            $this->timeAspect = $timeAspect;
            return $this;
        }
        $this->timeAspect = new FHIRString($timeAspect);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of material to be collected.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getTypeCollected()
    {
        return $this->typeCollected;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of material to be collected.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $typeCollected
     * @return static
     */
    public function setTypeCollected(FHIRCodeableConcept $typeCollected = null)
    {
        $this->typeCollected = $typeCollected;
        return $this;
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * Specimen conditioned in a container as expected by the testing laboratory.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested[]
     */
    public function getTypeTested()
    {
        return $this->typeTested;
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * Specimen conditioned in a container as expected by the testing laboratory.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested $typeTested
     * @return static
     */
    public function addTypeTested(FHIRSpecimenDefinitionTypeTested $typeTested = null)
    {
        $this->typeTested[] = $typeTested;
        return $this;
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * Specimen conditioned in a container as expected by the testing laboratory.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested[] $typeTested
     * @return static
     */
    public function setTypeTested(array $typeTested = [])
    {
        $this->typeTested = [];
        if ([] === $typeTested) {
            return $this;
        }
        foreach($typeTested as $v) {
            if ($v instanceof FHIRSpecimenDefinitionTypeTested) {
                $this->addTypeTested($v);
            } else {
                $this->addTypeTested(new FHIRSpecimenDefinitionTypeTested($v));
            }
        }
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
        if ([] !== ($vs = $this->getCollection())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COLLECTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPatientPreparation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PATIENT_PREPARATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getTimeAspect())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIME_ASPECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTypeCollected())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE_COLLECTED] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getTypeTested())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TYPE_TESTED, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COLLECTION])) {
            $v = $this->getCollection();
            foreach($validationRules[self::FIELD_COLLECTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION, self::FIELD_COLLECTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COLLECTION])) {
                        $errs[self::FIELD_COLLECTION] = [];
                    }
                    $errs[self::FIELD_COLLECTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT_PREPARATION])) {
            $v = $this->getPatientPreparation();
            foreach($validationRules[self::FIELD_PATIENT_PREPARATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION, self::FIELD_PATIENT_PREPARATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT_PREPARATION])) {
                        $errs[self::FIELD_PATIENT_PREPARATION] = [];
                    }
                    $errs[self::FIELD_PATIENT_PREPARATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIME_ASPECT])) {
            $v = $this->getTimeAspect();
            foreach($validationRules[self::FIELD_TIME_ASPECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION, self::FIELD_TIME_ASPECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIME_ASPECT])) {
                        $errs[self::FIELD_TIME_ASPECT] = [];
                    }
                    $errs[self::FIELD_TIME_ASPECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE_COLLECTED])) {
            $v = $this->getTypeCollected();
            foreach($validationRules[self::FIELD_TYPE_COLLECTED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION, self::FIELD_TYPE_COLLECTED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE_COLLECTED])) {
                        $errs[self::FIELD_TYPE_COLLECTED] = [];
                    }
                    $errs[self::FIELD_TYPE_COLLECTED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE_TESTED])) {
            $v = $this->getTypeTested();
            foreach($validationRules[self::FIELD_TYPE_TESTED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION, self::FIELD_TYPE_TESTED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE_TESTED])) {
                        $errs[self::FIELD_TYPE_TESTED] = [];
                    }
                    $errs[self::FIELD_TYPE_TESTED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimenDefinition $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimenDefinition
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
                throw new \DomainException(sprintf('FHIRSpecimenDefinition::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSpecimenDefinition::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSpecimenDefinition;
        } elseif (!is_object($type) || !($type instanceof FHIRSpecimenDefinition)) {
            throw new \RuntimeException(sprintf(
                'FHIRSpecimenDefinition::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimenDefinition or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->collection)) {
            foreach($children->collection as $child) {
                $type->addCollection(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRIdentifier::xmlUnserialize($children->identifier));
        }
        if (isset($children->patientPreparation)) {
            foreach($children->patientPreparation as $child) {
                $type->addPatientPreparation(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->timeAspect)) {
            $type->setTimeAspect(FHIRString::xmlUnserialize($children->timeAspect));
        }
        if (isset($attributes->timeAspect)) {
            $pt = $type->getTimeAspect();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->timeAspect);
            } else {
                $type->setTimeAspect((string)$attributes->timeAspect);
            }
        }
        if (isset($children->typeCollected)) {
            $type->setTypeCollected(FHIRCodeableConcept::xmlUnserialize($children->typeCollected));
        }
        if (isset($children->typeTested)) {
            foreach($children->typeTested as $child) {
                $type->addTypeTested(FHIRSpecimenDefinitionTypeTested::xmlUnserialize($child));
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
        if ([] !== ($vs = $this->getCollection())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COLLECTION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getPatientPreparation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT_PREPARATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getTimeAspect())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIME_ASPECT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTypeCollected())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE_COLLECTED, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getTypeTested())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE_TESTED, null, $v->_getFHIRXMLNamespace()));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getCollection())) {
            $a[self::FIELD_COLLECTION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_COLLECTION][] = $v;
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v;
        }
        if ([] !== ($vs = $this->getPatientPreparation())) {
            $a[self::FIELD_PATIENT_PREPARATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PATIENT_PREPARATION][] = $v;
            }
        }
        if (null !== ($v = $this->getTimeAspect())) {
            $a[self::FIELD_TIME_ASPECT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_TIME_ASPECT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getTypeCollected())) {
            $a[self::FIELD_TYPE_COLLECTED] = $v;
        }
        if ([] !== ($vs = $this->getTypeTested())) {
            $a[self::FIELD_TYPE_TESTED] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TYPE_TESTED][] = $v;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}
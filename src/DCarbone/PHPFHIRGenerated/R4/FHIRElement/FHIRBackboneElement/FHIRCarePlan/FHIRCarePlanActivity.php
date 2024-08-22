<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCarePlan;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 22nd, 2024 02:47+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter;

/**
 * Describes the intention of how one or more practitioners intend to deliver care
 * for a particular patient, group or community for a period of time, possibly
 * limited to care for a specific condition or set of conditions.
 *
 * Class FHIRCarePlanActivity
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCarePlan
 */
class FHIRCarePlanActivity extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_ACTIVITY;

    const FIELD_OUTCOME_CODEABLE_CONCEPT = 'outcomeCodeableConcept';
    const FIELD_OUTCOME_REFERENCE = 'outcomeReference';
    const FIELD_PROGRESS = 'progress';
    const FIELD_REFERENCE = 'reference';
    const FIELD_DETAIL = 'detail';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the outcome at the point when the status of the activity is assessed.
     * For example, the outcome of an education activity could be patient understands
     * (or not).
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $outcomeCodeableConcept = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details of the outcome or action resulting from the activity. The reference to
     * an "event" resource, such as Procedure or Encounter or Observation, is the
     * result/outcome of the activity itself. The activity can be conveyed using
     * CarePlan.activity.detail OR using the CarePlan.activity.reference (a reference
     * to a “request” resource).
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected null|array $outcomeReference = [];
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Notes about the adherence/status/progress of the activity.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    protected null|array $progress = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The details of the proposed activity represented in a specific resource.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $reference = null;
    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient, group or community for a period of time, possibly
     * limited to care for a specific condition or set of conditions.
     *
     * A simple summary of a planned activity suitable for a general care plan system
     * (e.g. form driven) that doesn't know about specific resources such as procedure
     * etc.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    protected null|FHIRCarePlanDetail $detail = null;

    /**
     * Validation map for fields in type CarePlan.Activity
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRCarePlanActivity Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_OUTCOME_CODEABLE_CONCEPT, $data)) {
            if (is_array($data[self::FIELD_OUTCOME_CODEABLE_CONCEPT])) {
                foreach($data[self::FIELD_OUTCOME_CODEABLE_CONCEPT] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addOutcomeCodeableConcept($v);
                    } else {
                        $this->addOutcomeCodeableConcept(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_OUTCOME_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->addOutcomeCodeableConcept($data[self::FIELD_OUTCOME_CODEABLE_CONCEPT]);
            } else {
                $this->addOutcomeCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_OUTCOME_CODEABLE_CONCEPT]));
            }
        }
        if (array_key_exists(self::FIELD_OUTCOME_REFERENCE, $data)) {
            if (is_array($data[self::FIELD_OUTCOME_REFERENCE])) {
                foreach($data[self::FIELD_OUTCOME_REFERENCE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addOutcomeReference($v);
                    } else {
                        $this->addOutcomeReference(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_OUTCOME_REFERENCE] instanceof FHIRReference) {
                $this->addOutcomeReference($data[self::FIELD_OUTCOME_REFERENCE]);
            } else {
                $this->addOutcomeReference(new FHIRReference($data[self::FIELD_OUTCOME_REFERENCE]));
            }
        }
        if (array_key_exists(self::FIELD_PROGRESS, $data)) {
            if (is_array($data[self::FIELD_PROGRESS])) {
                foreach($data[self::FIELD_PROGRESS] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $this->addProgress($v);
                    } else {
                        $this->addProgress(new FHIRAnnotation($v));
                    }
                }
            } elseif ($data[self::FIELD_PROGRESS] instanceof FHIRAnnotation) {
                $this->addProgress($data[self::FIELD_PROGRESS]);
            } else {
                $this->addProgress(new FHIRAnnotation($data[self::FIELD_PROGRESS]));
            }
        }
        if (array_key_exists(self::FIELD_REFERENCE, $data)) {
            if ($data[self::FIELD_REFERENCE] instanceof FHIRReference) {
                $this->setReference($data[self::FIELD_REFERENCE]);
            } else {
                $this->setReference(new FHIRReference($data[self::FIELD_REFERENCE]));
            }
        }
        if (array_key_exists(self::FIELD_DETAIL, $data)) {
            if ($data[self::FIELD_DETAIL] instanceof FHIRCarePlanDetail) {
                $this->setDetail($data[self::FIELD_DETAIL]);
            } else {
                $this->setDetail(new FHIRCarePlanDetail($data[self::FIELD_DETAIL]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the outcome at the point when the status of the activity is assessed.
     * For example, the outcome of an education activity could be patient understands
     * (or not).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getOutcomeCodeableConcept(): null|array
    {
        return $this->outcomeCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the outcome at the point when the status of the activity is assessed.
     * For example, the outcome of an education activity could be patient understands
     * (or not).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $outcomeCodeableConcept
     * @return static
     */
    public function addOutcomeCodeableConcept(null|FHIRCodeableConcept $outcomeCodeableConcept = null): self
    {
        if (null === $outcomeCodeableConcept) {
            $outcomeCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->outcomeCodeableConcept[] = $outcomeCodeableConcept;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the outcome at the point when the status of the activity is assessed.
     * For example, the outcome of an education activity could be patient understands
     * (or not).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept ...$outcomeCodeableConcept
     * @return static
     */
    public function setOutcomeCodeableConcept(FHIRCodeableConcept ...$outcomeCodeableConcept): self
    {
        if ([] !== $this->outcomeCodeableConcept) {
            $this->_trackValuesRemoved(count($this->outcomeCodeableConcept));
            $this->outcomeCodeableConcept = [];
        }
        if ([] === $outcomeCodeableConcept) {
            return $this;
        }
        foreach($outcomeCodeableConcept as $v) {
            $this->addOutcomeCodeableConcept($v);
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details of the outcome or action resulting from the activity. The reference to
     * an "event" resource, such as Procedure or Encounter or Observation, is the
     * result/outcome of the activity itself. The activity can be conveyed using
     * CarePlan.activity.detail OR using the CarePlan.activity.reference (a reference
     * to a “request” resource).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getOutcomeReference(): null|array
    {
        return $this->outcomeReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details of the outcome or action resulting from the activity. The reference to
     * an "event" resource, such as Procedure or Encounter or Observation, is the
     * result/outcome of the activity itself. The activity can be conveyed using
     * CarePlan.activity.detail OR using the CarePlan.activity.reference (a reference
     * to a “request” resource).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $outcomeReference
     * @return static
     */
    public function addOutcomeReference(null|FHIRReference $outcomeReference = null): self
    {
        if (null === $outcomeReference) {
            $outcomeReference = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->outcomeReference[] = $outcomeReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details of the outcome or action resulting from the activity. The reference to
     * an "event" resource, such as Procedure or Encounter or Observation, is the
     * result/outcome of the activity itself. The activity can be conveyed using
     * CarePlan.activity.detail OR using the CarePlan.activity.reference (a reference
     * to a “request” resource).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference ...$outcomeReference
     * @return static
     */
    public function setOutcomeReference(FHIRReference ...$outcomeReference): self
    {
        if ([] !== $this->outcomeReference) {
            $this->_trackValuesRemoved(count($this->outcomeReference));
            $this->outcomeReference = [];
        }
        if ([] === $outcomeReference) {
            return $this;
        }
        foreach($outcomeReference as $v) {
            $this->addOutcomeReference($v);
        }
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Notes about the adherence/status/progress of the activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    public function getProgress(): null|array
    {
        return $this->progress;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Notes about the adherence/status/progress of the activity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation $progress
     * @return static
     */
    public function addProgress(null|FHIRAnnotation $progress = null): self
    {
        if (null === $progress) {
            $progress = new FHIRAnnotation();
        }
        $this->_trackValueAdded();
        $this->progress[] = $progress;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Notes about the adherence/status/progress of the activity.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation ...$progress
     * @return static
     */
    public function setProgress(FHIRAnnotation ...$progress): self
    {
        if ([] !== $this->progress) {
            $this->_trackValuesRemoved(count($this->progress));
            $this->progress = [];
        }
        if ([] === $progress) {
            return $this;
        }
        foreach($progress as $v) {
            $this->addProgress($v);
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The details of the proposed activity represented in a specific resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getReference(): null|FHIRReference
    {
        return $this->reference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The details of the proposed activity represented in a specific resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $reference
     * @return static
     */
    public function setReference(null|FHIRReference $reference = null): self
    {
        if (null === $reference) {
            $reference = new FHIRReference();
        }
        $this->_trackValueSet($this->reference, $reference);
        $this->reference = $reference;
        return $this;
    }

    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient, group or community for a period of time, possibly
     * limited to care for a specific condition or set of conditions.
     *
     * A simple summary of a planned activity suitable for a general care plan system
     * (e.g. form driven) that doesn't know about specific resources such as procedure
     * etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function getDetail(): null|FHIRCarePlanDetail
    {
        return $this->detail;
    }

    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient, group or community for a period of time, possibly
     * limited to care for a specific condition or set of conditions.
     *
     * A simple summary of a planned activity suitable for a general care plan system
     * (e.g. form driven) that doesn't know about specific resources such as procedure
     * etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail $detail
     * @return static
     */
    public function setDetail(null|FHIRCarePlanDetail $detail = null): self
    {
        if (null === $detail) {
            $detail = new FHIRCarePlanDetail();
        }
        $this->_trackValueSet($this->detail, $detail);
        $this->detail = $detail;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if ([] !== ($vs = $this->getOutcomeCodeableConcept())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_OUTCOME_CODEABLE_CONCEPT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getOutcomeReference())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_OUTCOME_REFERENCE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getProgress())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROGRESS, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDetail())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DETAIL] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_OUTCOME_CODEABLE_CONCEPT])) {
            $v = $this->getOutcomeCodeableConcept();
            foreach($validationRules[self::FIELD_OUTCOME_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_ACTIVITY, self::FIELD_OUTCOME_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OUTCOME_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_OUTCOME_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_OUTCOME_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OUTCOME_REFERENCE])) {
            $v = $this->getOutcomeReference();
            foreach($validationRules[self::FIELD_OUTCOME_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_ACTIVITY, self::FIELD_OUTCOME_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OUTCOME_REFERENCE])) {
                        $errs[self::FIELD_OUTCOME_REFERENCE] = [];
                    }
                    $errs[self::FIELD_OUTCOME_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROGRESS])) {
            $v = $this->getProgress();
            foreach($validationRules[self::FIELD_PROGRESS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_ACTIVITY, self::FIELD_PROGRESS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROGRESS])) {
                        $errs[self::FIELD_PROGRESS] = [];
                    }
                    $errs[self::FIELD_PROGRESS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE])) {
            $v = $this->getReference();
            foreach($validationRules[self::FIELD_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_ACTIVITY, self::FIELD_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE])) {
                        $errs[self::FIELD_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL])) {
            $v = $this->getDetail();
            foreach($validationRules[self::FIELD_DETAIL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_ACTIVITY, self::FIELD_DETAIL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL])) {
                        $errs[self::FIELD_DETAIL] = [];
                    }
                    $errs[self::FIELD_DETAIL][$rule] = $err;
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRCarePlanActivity)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_OUTCOME_CODEABLE_CONCEPT === $childName) {
                $type->addOutcomeCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OUTCOME_REFERENCE === $childName) {
                $type->addOutcomeReference(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PROGRESS === $childName) {
                $type->addProgress(FHIRAnnotation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REFERENCE === $childName) {
                $type->setReference(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DETAIL === $childName) {
                $type->setDetail(FHIRCarePlanDetail::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'CarePlanActivity', $this->_getSourceXmlns());
        }
        parent::xmlSerialize($xw, $config);
        foreach ($this->getOutcomeCodeableConcept() as $v) {
            $xw->startElement(self::FIELD_OUTCOME_CODEABLE_CONCEPT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getOutcomeReference() as $v) {
            $xw->startElement(self::FIELD_OUTCOME_REFERENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getProgress() as $v) {
            $xw->startElement(self::FIELD_PROGRESS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getReference())) {
            $xw->startElement(self::FIELD_REFERENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDetail())) {
            $xw->startElement(self::FIELD_DETAIL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if ([] !== ($vs = $this->getOutcomeCodeableConcept())) {
            $out->{self::FIELD_OUTCOME_CODEABLE_CONCEPT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_OUTCOME_CODEABLE_CONCEPT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getOutcomeReference())) {
            $out->{self::FIELD_OUTCOME_REFERENCE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_OUTCOME_REFERENCE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getProgress())) {
            $out->{self::FIELD_PROGRESS} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PROGRESS}[] = $v;
            }
        }
        if (null !== ($v = $this->getReference())) {
            $out->{self::FIELD_REFERENCE} = $v;
        }
        if (null !== ($v = $this->getDetail())) {
            $out->{self::FIELD_DETAIL} = $v;
        }

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}
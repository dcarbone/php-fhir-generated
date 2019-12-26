<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;

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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionLocation;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionRelatedItem;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRConditionStatus;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * Use to record detailed information about conditions, problems or diagnoses
 * recognized by a clinician. There are many uses including: recording a Diagnosis
 * during an Encounter; populating a problem List or a Summary Statement, such as a
 * Discharge Summary.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRCondition
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource
 */
class FHIRCondition extends FHIRResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONDITION;
    const FIELD_ABATEMENT_AGE = 'abatementAge';
    const FIELD_ABATEMENT_BOOLEAN = 'abatementBoolean';
    const FIELD_ABATEMENT_BOOLEAN_EXT = '_abatementBoolean';
    const FIELD_ABATEMENT_DATE = 'abatementDate';
    const FIELD_ABATEMENT_DATE_EXT = '_abatementDate';
    const FIELD_ASSERTER = 'asserter';
    const FIELD_CATEGORY = 'category';
    const FIELD_CERTAINTY = 'certainty';
    const FIELD_CODE = 'code';
    const FIELD_DATE_ASSERTED = 'dateAsserted';
    const FIELD_DATE_ASSERTED_EXT = '_dateAsserted';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_EVIDENCE = 'evidence';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_LOCATION = 'location';
    const FIELD_NOTES = 'notes';
    const FIELD_NOTES_EXT = '_notes';
    const FIELD_ONSET_AGE = 'onsetAge';
    const FIELD_ONSET_DATE = 'onsetDate';
    const FIELD_ONSET_DATE_EXT = '_onsetDate';
    const FIELD_RELATED_ITEM = 'relatedItem';
    const FIELD_SEVERITY = 'severity';
    const FIELD_STAGE = 'stage';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_SUBJECT = 'subject';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity\FHIRAge
     */
    protected $abatementAge = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    protected $abatementBoolean = null;

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate
     */
    protected $abatementDate = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Person who takes responsibility for asserting the existence of the condition as
     * part of the electronic record.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $asserter = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A category assigned to the condition. E.g. complaint | symptom | finding |
     * diagnosis.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected $category = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The degree of confidence that this condition is correct.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected $certainty = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identification of the condition, problem or diagnosis.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected $code = null;

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date the condition/problem/diagnosis was first
     * detected/suspected.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate
     */
    protected $dateAsserted = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Encounter during which the condition was first asserted.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $encounter = null;

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * Supporting Evidence / manifestations that are the basis on which this condition
     * is suspected or confirmed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence[]
     */
    protected $evidence = [];

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this condition that are defined by
     * business processed and/ or used to refer to it when a direct URL reference to
     * the resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * The anatomical location where this condition manifests itself.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionLocation[]
     */
    protected $location = [];

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information about the Condition. This is a general notes/comments
     * entry for description of the Condition, its diagnosis and prognosis.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $notes = null;

    /**
     * Estimated or actual date the condition began, in the opinion of the clinician.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity\FHIRAge
     */
    protected $onsetAge = null;

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date the condition began, in the opinion of the clinician.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate
     */
    protected $onsetDate = null;

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * Further conditions, problems, diagnoses, procedures or events that are related
     * in some way to this condition, or the substance that caused/triggered this
     * Condition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionRelatedItem[]
     */
    protected $relatedItem = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A subjective assessment of the severity of the condition as evaluated by the
     * clinician.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected $severity = null;

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * Clinical stage or grade of a condition. May include formal severity assessments.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage
     */
    protected $stage = null;

    /**
     * The clinical status of the Condition or diagnosis
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The clinical status of the condition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRConditionStatus
     */
    protected $status = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the patient who the condition record is associated with.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $subject = null;

    /**
     * Validation map for fields in type Condition
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRCondition Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCondition::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ABATEMENT_AGE])) {
            if ($data[self::FIELD_ABATEMENT_AGE] instanceof FHIRAge) {
                $this->setAbatementAge($data[self::FIELD_ABATEMENT_AGE]);
            } else {
                $this->setAbatementAge(new FHIRAge($data[self::FIELD_ABATEMENT_AGE]));
            }
        }
        if (isset($data[self::FIELD_ABATEMENT_BOOLEAN]) || isset($data[self::FIELD_ABATEMENT_BOOLEAN_EXT])) {
            if (isset($data[self::FIELD_ABATEMENT_BOOLEAN])) {
                $value = $data[self::FIELD_ABATEMENT_BOOLEAN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ABATEMENT_BOOLEAN_EXT]) && is_array($data[self::FIELD_ABATEMENT_BOOLEAN_EXT])) {
                $ext = $data[self::FIELD_ABATEMENT_BOOLEAN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setAbatementBoolean($value);
                } else if (is_array($value)) {
                    $this->setAbatementBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setAbatementBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAbatementBoolean(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_ABATEMENT_DATE]) || isset($data[self::FIELD_ABATEMENT_DATE_EXT])) {
            if (isset($data[self::FIELD_ABATEMENT_DATE])) {
                $value = $data[self::FIELD_ABATEMENT_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ABATEMENT_DATE_EXT]) && is_array($data[self::FIELD_ABATEMENT_DATE_EXT])) {
                $ext = $data[self::FIELD_ABATEMENT_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setAbatementDate($value);
                } else if (is_array($value)) {
                    $this->setAbatementDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setAbatementDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAbatementDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_ASSERTER])) {
            if ($data[self::FIELD_ASSERTER] instanceof FHIRResourceReference) {
                $this->setAsserter($data[self::FIELD_ASSERTER]);
            } else {
                $this->setAsserter(new FHIRResourceReference($data[self::FIELD_ASSERTER]));
            }
        }
        if (isset($data[self::FIELD_CATEGORY])) {
            if ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->setCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->setCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_CERTAINTY])) {
            if ($data[self::FIELD_CERTAINTY] instanceof FHIRCodeableConcept) {
                $this->setCertainty($data[self::FIELD_CERTAINTY]);
            } else {
                $this->setCertainty(new FHIRCodeableConcept($data[self::FIELD_CERTAINTY]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_DATE_ASSERTED]) || isset($data[self::FIELD_DATE_ASSERTED_EXT])) {
            if (isset($data[self::FIELD_DATE_ASSERTED])) {
                $value = $data[self::FIELD_DATE_ASSERTED];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATE_ASSERTED_EXT]) && is_array($data[self::FIELD_DATE_ASSERTED_EXT])) {
                $ext = $data[self::FIELD_DATE_ASSERTED_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setDateAsserted($value);
                } else if (is_array($value)) {
                    $this->setDateAsserted(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setDateAsserted(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDateAsserted(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_ENCOUNTER])) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIRResourceReference) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIRResourceReference($data[self::FIELD_ENCOUNTER]));
            }
        }
        if (isset($data[self::FIELD_EVIDENCE])) {
            if (is_array($data[self::FIELD_EVIDENCE])) {
                foreach($data[self::FIELD_EVIDENCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConditionEvidence) {
                        $this->addEvidence($v);
                    } else {
                        $this->addEvidence(new FHIRConditionEvidence($v));
                    }
                }
            } else if ($data[self::FIELD_EVIDENCE] instanceof FHIRConditionEvidence) {
                $this->addEvidence($data[self::FIELD_EVIDENCE]);
            } else {
                $this->addEvidence(new FHIRConditionEvidence($data[self::FIELD_EVIDENCE]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } else if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_LOCATION])) {
            if (is_array($data[self::FIELD_LOCATION])) {
                foreach($data[self::FIELD_LOCATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConditionLocation) {
                        $this->addLocation($v);
                    } else {
                        $this->addLocation(new FHIRConditionLocation($v));
                    }
                }
            } else if ($data[self::FIELD_LOCATION] instanceof FHIRConditionLocation) {
                $this->addLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->addLocation(new FHIRConditionLocation($data[self::FIELD_LOCATION]));
            }
        }
        if (isset($data[self::FIELD_NOTES]) || isset($data[self::FIELD_NOTES_EXT])) {
            if (isset($data[self::FIELD_NOTES])) {
                $value = $data[self::FIELD_NOTES];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NOTES_EXT]) && is_array($data[self::FIELD_NOTES_EXT])) {
                $ext = $data[self::FIELD_NOTES_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setNotes($value);
                } else if (is_array($value)) {
                    $this->setNotes(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setNotes(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setNotes(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_ONSET_AGE])) {
            if ($data[self::FIELD_ONSET_AGE] instanceof FHIRAge) {
                $this->setOnsetAge($data[self::FIELD_ONSET_AGE]);
            } else {
                $this->setOnsetAge(new FHIRAge($data[self::FIELD_ONSET_AGE]));
            }
        }
        if (isset($data[self::FIELD_ONSET_DATE]) || isset($data[self::FIELD_ONSET_DATE_EXT])) {
            if (isset($data[self::FIELD_ONSET_DATE])) {
                $value = $data[self::FIELD_ONSET_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ONSET_DATE_EXT]) && is_array($data[self::FIELD_ONSET_DATE_EXT])) {
                $ext = $data[self::FIELD_ONSET_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setOnsetDate($value);
                } else if (is_array($value)) {
                    $this->setOnsetDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setOnsetDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setOnsetDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_RELATED_ITEM])) {
            if (is_array($data[self::FIELD_RELATED_ITEM])) {
                foreach($data[self::FIELD_RELATED_ITEM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConditionRelatedItem) {
                        $this->addRelatedItem($v);
                    } else {
                        $this->addRelatedItem(new FHIRConditionRelatedItem($v));
                    }
                }
            } else if ($data[self::FIELD_RELATED_ITEM] instanceof FHIRConditionRelatedItem) {
                $this->addRelatedItem($data[self::FIELD_RELATED_ITEM]);
            } else {
                $this->addRelatedItem(new FHIRConditionRelatedItem($data[self::FIELD_RELATED_ITEM]));
            }
        }
        if (isset($data[self::FIELD_SEVERITY])) {
            if ($data[self::FIELD_SEVERITY] instanceof FHIRCodeableConcept) {
                $this->setSeverity($data[self::FIELD_SEVERITY]);
            } else {
                $this->setSeverity(new FHIRCodeableConcept($data[self::FIELD_SEVERITY]));
            }
        }
        if (isset($data[self::FIELD_STAGE])) {
            if ($data[self::FIELD_STAGE] instanceof FHIRConditionStage) {
                $this->setStage($data[self::FIELD_STAGE]);
            } else {
                $this->setStage(new FHIRConditionStage($data[self::FIELD_STAGE]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            if (isset($data[self::FIELD_STATUS])) {
                $value = $data[self::FIELD_STATUS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) {
                $ext = $data[self::FIELD_STATUS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRConditionStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRConditionStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRConditionStatus([FHIRConditionStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRConditionStatus($ext));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRResourceReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRResourceReference($data[self::FIELD_SUBJECT]));
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
        return "<Condition{$xmlns}></Condition>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getAbatementAge()
    {
        return $this->abatementAge;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity\FHIRAge $abatementAge
     * @return static
     */
    public function setAbatementAge(FHIRAge $abatementAge = null)
    {
        $this->abatementAge = $abatementAge;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    public function getAbatementBoolean()
    {
        return $this->abatementBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean $abatementBoolean
     * @return static
     */
    public function setAbatementBoolean($abatementBoolean = null)
    {
        if (null === $abatementBoolean) {
            $this->abatementBoolean = null;
            return $this;
        }
        if ($abatementBoolean instanceof FHIRBoolean) {
            $this->abatementBoolean = $abatementBoolean;
            return $this;
        }
        $this->abatementBoolean = new FHIRBoolean($abatementBoolean);
        return $this;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate
     */
    public function getAbatementDate()
    {
        return $this->abatementDate;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate $abatementDate
     * @return static
     */
    public function setAbatementDate($abatementDate = null)
    {
        if (null === $abatementDate) {
            $this->abatementDate = null;
            return $this;
        }
        if ($abatementDate instanceof FHIRDate) {
            $this->abatementDate = $abatementDate;
            return $this;
        }
        $this->abatementDate = new FHIRDate($abatementDate);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Person who takes responsibility for asserting the existence of the condition as
     * part of the electronic record.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getAsserter()
    {
        return $this->asserter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Person who takes responsibility for asserting the existence of the condition as
     * part of the electronic record.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $asserter
     * @return static
     */
    public function setAsserter(FHIRResourceReference $asserter = null)
    {
        $this->asserter = $asserter;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A category assigned to the condition. E.g. complaint | symptom | finding |
     * diagnosis.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A category assigned to the condition. E.g. complaint | symptom | finding |
     * diagnosis.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $category
     * @return static
     */
    public function setCategory(FHIRCodeableConcept $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The degree of confidence that this condition is correct.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getCertainty()
    {
        return $this->certainty;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The degree of confidence that this condition is correct.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $certainty
     * @return static
     */
    public function setCertainty(FHIRCodeableConcept $certainty = null)
    {
        $this->certainty = $certainty;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identification of the condition, problem or diagnosis.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identification of the condition, problem or diagnosis.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date the condition/problem/diagnosis was first
     * detected/suspected.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate
     */
    public function getDateAsserted()
    {
        return $this->dateAsserted;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date the condition/problem/diagnosis was first
     * detected/suspected.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate $dateAsserted
     * @return static
     */
    public function setDateAsserted($dateAsserted = null)
    {
        if (null === $dateAsserted) {
            $this->dateAsserted = null;
            return $this;
        }
        if ($dateAsserted instanceof FHIRDate) {
            $this->dateAsserted = $dateAsserted;
            return $this;
        }
        $this->dateAsserted = new FHIRDate($dateAsserted);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Encounter during which the condition was first asserted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Encounter during which the condition was first asserted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $encounter
     * @return static
     */
    public function setEncounter(FHIRResourceReference $encounter = null)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * Supporting Evidence / manifestations that are the basis on which this condition
     * is suspected or confirmed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence[]
     */
    public function getEvidence()
    {
        return $this->evidence;
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * Supporting Evidence / manifestations that are the basis on which this condition
     * is suspected or confirmed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence $evidence
     * @return static
     */
    public function addEvidence(FHIRConditionEvidence $evidence = null)
    {
        $this->evidence[] = $evidence;
        return $this;
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * Supporting Evidence / manifestations that are the basis on which this condition
     * is suspected or confirmed.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence[] $evidence
     * @return static
     */
    public function setEvidence(array $evidence = [])
    {
        $this->evidence = [];
        if ([] === $evidence) {
            return $this;
        }
        foreach($evidence as $v) {
            if ($v instanceof FHIRConditionEvidence) {
                $this->addEvidence($v);
            } else {
                $this->addEvidence(new FHIRConditionEvidence($v));
            }
        }
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this condition that are defined by
     * business processed and/ or used to refer to it when a direct URL reference to
     * the resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this condition that are defined by
     * business processed and/ or used to refer to it when a direct URL reference to
     * the resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this condition that are defined by
     * business processed and/ or used to refer to it when a direct URL reference to
     * the resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
     */
    public function setIdentifier(array $identifier = [])
    {
        $this->identifier = [];
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * The anatomical location where this condition manifests itself.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionLocation[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * The anatomical location where this condition manifests itself.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionLocation $location
     * @return static
     */
    public function addLocation(FHIRConditionLocation $location = null)
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * The anatomical location where this condition manifests itself.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionLocation[] $location
     * @return static
     */
    public function setLocation(array $location = [])
    {
        $this->location = [];
        if ([] === $location) {
            return $this;
        }
        foreach($location as $v) {
            if ($v instanceof FHIRConditionLocation) {
                $this->addLocation($v);
            } else {
                $this->addLocation(new FHIRConditionLocation($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information about the Condition. This is a general notes/comments
     * entry for description of the Condition, its diagnosis and prognosis.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information about the Condition. This is a general notes/comments
     * entry for description of the Condition, its diagnosis and prognosis.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $notes
     * @return static
     */
    public function setNotes($notes = null)
    {
        if (null === $notes) {
            $this->notes = null;
            return $this;
        }
        if ($notes instanceof FHIRString) {
            $this->notes = $notes;
            return $this;
        }
        $this->notes = new FHIRString($notes);
        return $this;
    }

    /**
     * Estimated or actual date the condition began, in the opinion of the clinician.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getOnsetAge()
    {
        return $this->onsetAge;
    }

    /**
     * Estimated or actual date the condition began, in the opinion of the clinician.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity\FHIRAge $onsetAge
     * @return static
     */
    public function setOnsetAge(FHIRAge $onsetAge = null)
    {
        $this->onsetAge = $onsetAge;
        return $this;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date the condition began, in the opinion of the clinician.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate
     */
    public function getOnsetDate()
    {
        return $this->onsetDate;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date the condition began, in the opinion of the clinician.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate $onsetDate
     * @return static
     */
    public function setOnsetDate($onsetDate = null)
    {
        if (null === $onsetDate) {
            $this->onsetDate = null;
            return $this;
        }
        if ($onsetDate instanceof FHIRDate) {
            $this->onsetDate = $onsetDate;
            return $this;
        }
        $this->onsetDate = new FHIRDate($onsetDate);
        return $this;
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * Further conditions, problems, diagnoses, procedures or events that are related
     * in some way to this condition, or the substance that caused/triggered this
     * Condition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionRelatedItem[]
     */
    public function getRelatedItem()
    {
        return $this->relatedItem;
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * Further conditions, problems, diagnoses, procedures or events that are related
     * in some way to this condition, or the substance that caused/triggered this
     * Condition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionRelatedItem $relatedItem
     * @return static
     */
    public function addRelatedItem(FHIRConditionRelatedItem $relatedItem = null)
    {
        $this->relatedItem[] = $relatedItem;
        return $this;
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * Further conditions, problems, diagnoses, procedures or events that are related
     * in some way to this condition, or the substance that caused/triggered this
     * Condition.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionRelatedItem[] $relatedItem
     * @return static
     */
    public function setRelatedItem(array $relatedItem = [])
    {
        $this->relatedItem = [];
        if ([] === $relatedItem) {
            return $this;
        }
        foreach($relatedItem as $v) {
            if ($v instanceof FHIRConditionRelatedItem) {
                $this->addRelatedItem($v);
            } else {
                $this->addRelatedItem(new FHIRConditionRelatedItem($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A subjective assessment of the severity of the condition as evaluated by the
     * clinician.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A subjective assessment of the severity of the condition as evaluated by the
     * clinician.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $severity
     * @return static
     */
    public function setSeverity(FHIRCodeableConcept $severity = null)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * Clinical stage or grade of a condition. May include formal severity assessments.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * Clinical stage or grade of a condition. May include formal severity assessments.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage $stage
     * @return static
     */
    public function setStage(FHIRConditionStage $stage = null)
    {
        $this->stage = $stage;
        return $this;
    }

    /**
     * The clinical status of the Condition or diagnosis
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The clinical status of the condition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRConditionStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The clinical status of the Condition or diagnosis
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The clinical status of the condition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRConditionStatus $status
     * @return static
     */
    public function setStatus(FHIRConditionStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the patient who the condition record is associated with.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the patient who the condition record is associated with.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $subject
     * @return static
     */
    public function setSubject(FHIRResourceReference $subject = null)
    {
        $this->subject = $subject;
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
        if (null !== ($v = $this->getAbatementAge())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ABATEMENT_AGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAbatementBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ABATEMENT_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAbatementDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ABATEMENT_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAsserter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ASSERTER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCategory())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CATEGORY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCertainty())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CERTAINTY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDateAsserted())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE_ASSERTED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENCOUNTER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getEvidence())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_EVIDENCE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getLocation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LOCATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getNotes())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NOTES] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOnsetAge())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ONSET_AGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOnsetDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ONSET_DATE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRelatedItem())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RELATED_ITEM, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSeverity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEVERITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STAGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ABATEMENT_AGE])) {
            $v = $this->getAbatementAge();
            foreach($validationRules[self::FIELD_ABATEMENT_AGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ABATEMENT_AGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ABATEMENT_AGE])) {
                        $errs[self::FIELD_ABATEMENT_AGE] = [];
                    }
                    $errs[self::FIELD_ABATEMENT_AGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ABATEMENT_BOOLEAN])) {
            $v = $this->getAbatementBoolean();
            foreach($validationRules[self::FIELD_ABATEMENT_BOOLEAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ABATEMENT_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ABATEMENT_BOOLEAN])) {
                        $errs[self::FIELD_ABATEMENT_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_ABATEMENT_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ABATEMENT_DATE])) {
            $v = $this->getAbatementDate();
            foreach($validationRules[self::FIELD_ABATEMENT_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ABATEMENT_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ABATEMENT_DATE])) {
                        $errs[self::FIELD_ABATEMENT_DATE] = [];
                    }
                    $errs[self::FIELD_ABATEMENT_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ASSERTER])) {
            $v = $this->getAsserter();
            foreach($validationRules[self::FIELD_ASSERTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ASSERTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ASSERTER])) {
                        $errs[self::FIELD_ASSERTER] = [];
                    }
                    $errs[self::FIELD_ASSERTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CERTAINTY])) {
            $v = $this->getCertainty();
            foreach($validationRules[self::FIELD_CERTAINTY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_CERTAINTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CERTAINTY])) {
                        $errs[self::FIELD_CERTAINTY] = [];
                    }
                    $errs[self::FIELD_CERTAINTY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE_ASSERTED])) {
            $v = $this->getDateAsserted();
            foreach($validationRules[self::FIELD_DATE_ASSERTED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_DATE_ASSERTED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE_ASSERTED])) {
                        $errs[self::FIELD_DATE_ASSERTED] = [];
                    }
                    $errs[self::FIELD_DATE_ASSERTED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENCOUNTER])) {
            $v = $this->getEncounter();
            foreach($validationRules[self::FIELD_ENCOUNTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCOUNTER])) {
                        $errs[self::FIELD_ENCOUNTER] = [];
                    }
                    $errs[self::FIELD_ENCOUNTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EVIDENCE])) {
            $v = $this->getEvidence();
            foreach($validationRules[self::FIELD_EVIDENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_EVIDENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EVIDENCE])) {
                        $errs[self::FIELD_EVIDENCE] = [];
                    }
                    $errs[self::FIELD_EVIDENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCATION])) {
            $v = $this->getLocation();
            foreach($validationRules[self::FIELD_LOCATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION])) {
                        $errs[self::FIELD_LOCATION] = [];
                    }
                    $errs[self::FIELD_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTES])) {
            $v = $this->getNotes();
            foreach($validationRules[self::FIELD_NOTES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_NOTES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTES])) {
                        $errs[self::FIELD_NOTES] = [];
                    }
                    $errs[self::FIELD_NOTES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ONSET_AGE])) {
            $v = $this->getOnsetAge();
            foreach($validationRules[self::FIELD_ONSET_AGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ONSET_AGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ONSET_AGE])) {
                        $errs[self::FIELD_ONSET_AGE] = [];
                    }
                    $errs[self::FIELD_ONSET_AGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ONSET_DATE])) {
            $v = $this->getOnsetDate();
            foreach($validationRules[self::FIELD_ONSET_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ONSET_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ONSET_DATE])) {
                        $errs[self::FIELD_ONSET_DATE] = [];
                    }
                    $errs[self::FIELD_ONSET_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATED_ITEM])) {
            $v = $this->getRelatedItem();
            foreach($validationRules[self::FIELD_RELATED_ITEM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_RELATED_ITEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATED_ITEM])) {
                        $errs[self::FIELD_RELATED_ITEM] = [];
                    }
                    $errs[self::FIELD_RELATED_ITEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEVERITY])) {
            $v = $this->getSeverity();
            foreach($validationRules[self::FIELD_SEVERITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_SEVERITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEVERITY])) {
                        $errs[self::FIELD_SEVERITY] = [];
                    }
                    $errs[self::FIELD_SEVERITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STAGE])) {
            $v = $this->getStage();
            foreach($validationRules[self::FIELD_STAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_STAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STAGE])) {
                        $errs[self::FIELD_STAGE] = [];
                    }
                    $errs[self::FIELD_STAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCondition $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCondition
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
                throw new \DomainException(sprintf('FHIRCondition::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCondition::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRCondition;
        } elseif (!is_object($type) || !($type instanceof FHIRCondition)) {
            throw new \RuntimeException(sprintf(
                'FHIRCondition::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCondition or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->abatementAge)) {
            $type->setAbatementAge(FHIRAge::xmlUnserialize($children->abatementAge));
        }
        if (isset($children->abatementBoolean)) {
            $type->setAbatementBoolean(FHIRBoolean::xmlUnserialize($children->abatementBoolean));
        }
        if (isset($attributes->abatementBoolean)) {
            $pt = $type->getAbatementBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->abatementBoolean);
            } else {
                $type->setAbatementBoolean((string)$attributes->abatementBoolean);
            }
        }
        if (isset($children->abatementDate)) {
            $type->setAbatementDate(FHIRDate::xmlUnserialize($children->abatementDate));
        }
        if (isset($attributes->abatementDate)) {
            $pt = $type->getAbatementDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->abatementDate);
            } else {
                $type->setAbatementDate((string)$attributes->abatementDate);
            }
        }
        if (isset($children->asserter)) {
            $type->setAsserter(FHIRResourceReference::xmlUnserialize($children->asserter));
        }
        if (isset($children->category)) {
            $type->setCategory(FHIRCodeableConcept::xmlUnserialize($children->category));
        }
        if (isset($children->certainty)) {
            $type->setCertainty(FHIRCodeableConcept::xmlUnserialize($children->certainty));
        }
        if (isset($children->code)) {
            $type->setCode(FHIRCodeableConcept::xmlUnserialize($children->code));
        }
        if (isset($children->dateAsserted)) {
            $type->setDateAsserted(FHIRDate::xmlUnserialize($children->dateAsserted));
        }
        if (isset($attributes->dateAsserted)) {
            $pt = $type->getDateAsserted();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->dateAsserted);
            } else {
                $type->setDateAsserted((string)$attributes->dateAsserted);
            }
        }
        if (isset($children->encounter)) {
            $type->setEncounter(FHIRResourceReference::xmlUnserialize($children->encounter));
        }
        if (isset($children->evidence)) {
            foreach($children->evidence as $child) {
                $type->addEvidence(FHIRConditionEvidence::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->location)) {
            foreach($children->location as $child) {
                $type->addLocation(FHIRConditionLocation::xmlUnserialize($child));
            }
        }
        if (isset($children->notes)) {
            $type->setNotes(FHIRString::xmlUnserialize($children->notes));
        }
        if (isset($attributes->notes)) {
            $pt = $type->getNotes();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->notes);
            } else {
                $type->setNotes((string)$attributes->notes);
            }
        }
        if (isset($children->onsetAge)) {
            $type->setOnsetAge(FHIRAge::xmlUnserialize($children->onsetAge));
        }
        if (isset($children->onsetDate)) {
            $type->setOnsetDate(FHIRDate::xmlUnserialize($children->onsetDate));
        }
        if (isset($attributes->onsetDate)) {
            $pt = $type->getOnsetDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->onsetDate);
            } else {
                $type->setOnsetDate((string)$attributes->onsetDate);
            }
        }
        if (isset($children->relatedItem)) {
            foreach($children->relatedItem as $child) {
                $type->addRelatedItem(FHIRConditionRelatedItem::xmlUnserialize($child));
            }
        }
        if (isset($children->severity)) {
            $type->setSeverity(FHIRCodeableConcept::xmlUnserialize($children->severity));
        }
        if (isset($children->stage)) {
            $type->setStage(FHIRConditionStage::xmlUnserialize($children->stage));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRConditionStatus::xmlUnserialize($children->status));
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRResourceReference::xmlUnserialize($children->subject));
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
        if (null !== ($v = $this->getAbatementAge())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ABATEMENT_AGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAbatementBoolean())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ABATEMENT_BOOLEAN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAbatementDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ABATEMENT_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAsserter())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ASSERTER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCategory())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCertainty())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CERTAINTY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDateAsserted())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE_ASSERTED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getEncounter())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENCOUNTER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getEvidence())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_EVIDENCE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getNotes())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NOTES, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOnsetAge())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ONSET_AGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOnsetDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ONSET_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getRelatedItem())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RELATED_ITEM, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getSeverity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SEVERITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStage())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STAGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAbatementAge())) {
            $a[self::FIELD_ABATEMENT_AGE] = $v;
        }
        if (null !== ($v = $this->getAbatementBoolean())) {
            $a[self::FIELD_ABATEMENT_BOOLEAN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_ABATEMENT_BOOLEAN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getAbatementDate())) {
            $a[self::FIELD_ABATEMENT_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDate::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDate::FIELD_VALUE]);
                $a[self::FIELD_ABATEMENT_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getAsserter())) {
            $a[self::FIELD_ASSERTER] = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $a[self::FIELD_CATEGORY] = $v;
        }
        if (null !== ($v = $this->getCertainty())) {
            $a[self::FIELD_CERTAINTY] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
        }
        if (null !== ($v = $this->getDateAsserted())) {
            $a[self::FIELD_DATE_ASSERTED] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDate::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDate::FIELD_VALUE]);
                $a[self::FIELD_DATE_ASSERTED_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            $a[self::FIELD_ENCOUNTER] = $v;
        }
        if ([] !== ($vs = $this->getEvidence())) {
            $a[self::FIELD_EVIDENCE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_EVIDENCE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v;
            }
        }
        if ([] !== ($vs = $this->getLocation())) {
            $a[self::FIELD_LOCATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_LOCATION][] = $v;
            }
        }
        if (null !== ($v = $this->getNotes())) {
            $a[self::FIELD_NOTES] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_NOTES_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getOnsetAge())) {
            $a[self::FIELD_ONSET_AGE] = $v;
        }
        if (null !== ($v = $this->getOnsetDate())) {
            $a[self::FIELD_ONSET_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDate::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDate::FIELD_VALUE]);
                $a[self::FIELD_ONSET_DATE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getRelatedItem())) {
            $a[self::FIELD_RELATED_ITEM] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_RELATED_ITEM][] = $v;
            }
        }
        if (null !== ($v = $this->getSeverity())) {
            $a[self::FIELD_SEVERITY] = $v;
        }
        if (null !== ($v = $this->getStage())) {
            $a[self::FIELD_STAGE] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRConditionStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRConditionStatus::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
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
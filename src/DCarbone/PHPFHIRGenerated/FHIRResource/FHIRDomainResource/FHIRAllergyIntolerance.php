<?php

namespace DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 8th, 2019 00:59+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCategory;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCriticality;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceType;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * Risk of harmful or undesirable, physiological response which is unique to an
 * individual and associated with exposure to a substance.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRAllergyIntolerance
 * @package \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRAllergyIntolerance extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE;

    const FIELD_ASSERTER = 'asserter';
    const FIELD_CATEGORY = 'category';
    const FIELD_CLINICAL_STATUS = 'clinicalStatus';
    const FIELD_CODE = 'code';
    const FIELD_CRITICALITY = 'criticality';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_LAST_OCCURRENCE = 'lastOccurrence';
    const FIELD_LAST_OCCURRENCE_EXT = '_lastOccurrence';
    const FIELD_NOTE = 'note';
    const FIELD_ONSET_AGE = 'onsetAge';
    const FIELD_ONSET_DATE_TIME = 'onsetDateTime';
    const FIELD_ONSET_DATE_TIME_EXT = '_onsetDateTime';
    const FIELD_ONSET_PERIOD = 'onsetPeriod';
    const FIELD_ONSET_RANGE = 'onsetRange';
    const FIELD_ONSET_STRING = 'onsetString';
    const FIELD_ONSET_STRING_EXT = '_onsetString';
    const FIELD_PATIENT = 'patient';
    const FIELD_REACTION = 'reaction';
    const FIELD_RECORDED_DATE = 'recordedDate';
    const FIELD_RECORDED_DATE_EXT = '_recordedDate';
    const FIELD_RECORDER = 'recorder';
    const FIELD_TYPE = 'type';
    const FIELD_VERIFICATION_STATUS = 'verificationStatus';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The source of the information about the allergy that is recorded.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $asserter = null;

    /**
     * Category of an identified substance associated with allergies or intolerances.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Category of the identified substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCategory[]
     */
    private $category = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The clinical status of the allergy or intolerance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $clinicalStatus = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Code for an allergy or intolerance statement (either a positive or a
     * negated/excluded statement). This may be a code for a substance or
     * pharmaceutical product that is considered to be responsible for the adverse
     * reaction risk (e.g., "Latex"), an allergy or intolerance condition (e.g., "Latex
     * allergy"), or a negated/excluded code for a specific substance or class (e.g.,
     * "No latex allergy") or a general or categorical negated statement (e.g., "No
     * known allergy", "No known drug allergies"). Note: the substance for a specific
     * reaction may be different from the substance identified as the cause of the
     * risk, but it must be consistent with it. For instance, it may be a more specific
     * substance (e.g. a brand medication) or a composite product that includes the
     * identified substance. It must be clinically safe to only process the 'code' and
     * ignore the 'reaction.substance'. If a receiving system is unable to confirm that
     * AllergyIntolerance.reaction.substance falls within the semantic scope of
     * AllergyIntolerance.code, then the receiving system should ignore
     * AllergyIntolerance.reaction.substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $code = null;

    /**
     * Estimate of the potential clinical harm, or seriousness, of a reaction to an
     * identified substance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the
     * identified substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCriticality
     */
    private $criticality = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The encounter when the allergy or intolerance was asserted.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $encounter = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this AllergyIntolerance by the performer or
     * other systems which remain constant as the resource is updated and propagates
     * from server to server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Represents the date and/or time of the last known occurrence of a reaction
     * event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $lastOccurrence = null;

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Additional narrative about the propensity for the Adverse Reaction, not captured
     * in other fields.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    private $note = [];

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified. (choose any one of onset*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    private $onsetAge = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified. (choose any one of onset*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $onsetDateTime = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified. (choose any one of onset*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $onsetPeriod = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified. (choose any one of onset*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    private $onsetRange = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified. (choose any one of onset*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $onsetString = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The patient who has the allergy or intolerance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $patient = null;

    /**
     * Risk of harmful or undesirable, physiological response which is unique to an
     * individual and associated with exposure to a substance.
     *
     * Details about each adverse reaction event linked to exposure to the identified
     * substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction[]
     */
    private $reaction = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The recordedDate represents when this particular AllergyIntolerance record was
     * created in the system, which is often a system-generated date.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $recordedDate = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Individual who recorded the record and takes responsibility for its content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $recorder = null;

    /**
     * Identification of the underlying physiological mechanism for a Reaction Risk.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identification of the underlying physiological mechanism for the reaction risk.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceType
     */
    private $type = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Assertion about certainty associated with the propensity, or potential risk, of
     * a reaction to the identified substance (including pharmaceutical product).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $verificationStatus = null;

    /**
     * FHIRAllergyIntolerance Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAllergyIntolerance::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ASSERTER])) {
            if ($data[self::FIELD_ASSERTER] instanceof FHIRReference) {
                $this->setAsserter($data[self::FIELD_ASSERTER]);
            } else {
                $this->setAsserter(new FHIRReference($data[self::FIELD_ASSERTER]));
            }
        }
        if (isset($data[self::FIELD_CATEGORY])) {
            if (is_array($data[self::FIELD_CATEGORY])) {
                foreach($data[self::FIELD_CATEGORY] as $v) {
                    if ($v instanceof FHIRAllergyIntoleranceCategory) {
                        $this->addCategory($v);
                    } else {
                        $this->addCategory(new FHIRAllergyIntoleranceCategory($v));
                    }
                }
            } else if ($data[self::FIELD_CATEGORY] instanceof FHIRAllergyIntoleranceCategory) {
                $this->addCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->addCategory(new FHIRAllergyIntoleranceCategory($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_CLINICAL_STATUS])) {
            if ($data[self::FIELD_CLINICAL_STATUS] instanceof FHIRCodeableConcept) {
                $this->setClinicalStatus($data[self::FIELD_CLINICAL_STATUS]);
            } else {
                $this->setClinicalStatus(new FHIRCodeableConcept($data[self::FIELD_CLINICAL_STATUS]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_CRITICALITY])) {
            if ($data[self::FIELD_CRITICALITY] instanceof FHIRAllergyIntoleranceCriticality) {
                $this->setCriticality($data[self::FIELD_CRITICALITY]);
            } else {
                $this->setCriticality(new FHIRAllergyIntoleranceCriticality($data[self::FIELD_CRITICALITY]));
            }
        }
        if (isset($data[self::FIELD_ENCOUNTER])) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIRReference($data[self::FIELD_ENCOUNTER]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
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
        if (isset($data[self::FIELD_LAST_OCCURRENCE])) {
            $ext = (isset($data[self::FIELD_LAST_OCCURRENCE_EXT]) && is_array($data[self::FIELD_LAST_OCCURRENCE_EXT]))
                ? $data[self::FIELD_LAST_OCCURRENCE_EXT]
                : null;
            if ($data[self::FIELD_LAST_OCCURRENCE] instanceof FHIRDateTime) {
                $this->setLastOccurrence($data[self::FIELD_LAST_OCCURRENCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_LAST_OCCURRENCE])) {
                $this->setLastOccurrence(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_LAST_OCCURRENCE]] + $ext));
            } else {
                $this->setLastOccurrence(new FHIRDateTime($data[self::FIELD_LAST_OCCURRENCE]));
            }
        }
        if (isset($data[self::FIELD_NOTE])) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } else if ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
            }
        }
        if (isset($data[self::FIELD_ONSET_AGE])) {
            if ($data[self::FIELD_ONSET_AGE] instanceof FHIRAge) {
                $this->setOnsetAge($data[self::FIELD_ONSET_AGE]);
            } else {
                $this->setOnsetAge(new FHIRAge($data[self::FIELD_ONSET_AGE]));
            }
        }
        if (isset($data[self::FIELD_ONSET_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_ONSET_DATE_TIME_EXT]) && is_array($data[self::FIELD_ONSET_DATE_TIME_EXT]))
                ? $data[self::FIELD_ONSET_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_ONSET_DATE_TIME] instanceof FHIRDateTime) {
                $this->setOnsetDateTime($data[self::FIELD_ONSET_DATE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_ONSET_DATE_TIME])) {
                $this->setOnsetDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_ONSET_DATE_TIME]] + $ext));
            } else {
                $this->setOnsetDateTime(new FHIRDateTime($data[self::FIELD_ONSET_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_ONSET_PERIOD])) {
            if ($data[self::FIELD_ONSET_PERIOD] instanceof FHIRPeriod) {
                $this->setOnsetPeriod($data[self::FIELD_ONSET_PERIOD]);
            } else {
                $this->setOnsetPeriod(new FHIRPeriod($data[self::FIELD_ONSET_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_ONSET_RANGE])) {
            if ($data[self::FIELD_ONSET_RANGE] instanceof FHIRRange) {
                $this->setOnsetRange($data[self::FIELD_ONSET_RANGE]);
            } else {
                $this->setOnsetRange(new FHIRRange($data[self::FIELD_ONSET_RANGE]));
            }
        }
        if (isset($data[self::FIELD_ONSET_STRING])) {
            $ext = (isset($data[self::FIELD_ONSET_STRING_EXT]) && is_array($data[self::FIELD_ONSET_STRING_EXT]))
                ? $data[self::FIELD_ONSET_STRING_EXT]
                : null;
            if ($data[self::FIELD_ONSET_STRING] instanceof FHIRString) {
                $this->setOnsetString($data[self::FIELD_ONSET_STRING]);
            } elseif ($ext && is_scalar($data[self::FIELD_ONSET_STRING])) {
                $this->setOnsetString(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_ONSET_STRING]] + $ext));
            } else {
                $this->setOnsetString(new FHIRString($data[self::FIELD_ONSET_STRING]));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_REACTION])) {
            if (is_array($data[self::FIELD_REACTION])) {
                foreach($data[self::FIELD_REACTION] as $v) {
                    if ($v instanceof FHIRAllergyIntoleranceReaction) {
                        $this->addReaction($v);
                    } else {
                        $this->addReaction(new FHIRAllergyIntoleranceReaction($v));
                    }
                }
            } else if ($data[self::FIELD_REACTION] instanceof FHIRAllergyIntoleranceReaction) {
                $this->addReaction($data[self::FIELD_REACTION]);
            } else {
                $this->addReaction(new FHIRAllergyIntoleranceReaction($data[self::FIELD_REACTION]));
            }
        }
        if (isset($data[self::FIELD_RECORDED_DATE])) {
            $ext = (isset($data[self::FIELD_RECORDED_DATE_EXT]) && is_array($data[self::FIELD_RECORDED_DATE_EXT]))
                ? $data[self::FIELD_RECORDED_DATE_EXT]
                : null;
            if ($data[self::FIELD_RECORDED_DATE] instanceof FHIRDateTime) {
                $this->setRecordedDate($data[self::FIELD_RECORDED_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_RECORDED_DATE])) {
                $this->setRecordedDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_RECORDED_DATE]] + $ext));
            } else {
                $this->setRecordedDate(new FHIRDateTime($data[self::FIELD_RECORDED_DATE]));
            }
        }
        if (isset($data[self::FIELD_RECORDER])) {
            if ($data[self::FIELD_RECORDER] instanceof FHIRReference) {
                $this->setRecorder($data[self::FIELD_RECORDER]);
            } else {
                $this->setRecorder(new FHIRReference($data[self::FIELD_RECORDER]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRAllergyIntoleranceType) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRAllergyIntoleranceType($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_VERIFICATION_STATUS])) {
            if ($data[self::FIELD_VERIFICATION_STATUS] instanceof FHIRCodeableConcept) {
                $this->setVerificationStatus($data[self::FIELD_VERIFICATION_STATUS]);
            } else {
                $this->setVerificationStatus(new FHIRCodeableConcept($data[self::FIELD_VERIFICATION_STATUS]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The source of the information about the allergy that is recorded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAsserter()
    {
        return $this->asserter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The source of the information about the allergy that is recorded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $asserter
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setAsserter(FHIRReference $asserter = null)
    {
        $this->asserter = $asserter;
        return $this;
    }

    /**
     * Category of an identified substance associated with allergies or intolerances.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Category of the identified substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCategory[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Category of an identified substance associated with allergies or intolerances.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Category of the identified substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCategory $category
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function addCategory(FHIRAllergyIntoleranceCategory $category = null)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * Category of an identified substance associated with allergies or intolerances.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Category of the identified substance.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCategory[] $category
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setCategory(array $category = [])
    {
        $this->category = [];
        if ([] === $category) {
            return $this;
        }
        foreach($category as $v) {
            if ($v instanceof FHIRAllergyIntoleranceCategory) {
                $this->addCategory($v);
            } else {
                $this->addCategory(new FHIRAllergyIntoleranceCategory($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The clinical status of the allergy or intolerance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getClinicalStatus()
    {
        return $this->clinicalStatus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The clinical status of the allergy or intolerance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $clinicalStatus
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setClinicalStatus(FHIRCodeableConcept $clinicalStatus = null)
    {
        $this->clinicalStatus = $clinicalStatus;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Code for an allergy or intolerance statement (either a positive or a
     * negated/excluded statement). This may be a code for a substance or
     * pharmaceutical product that is considered to be responsible for the adverse
     * reaction risk (e.g., "Latex"), an allergy or intolerance condition (e.g., "Latex
     * allergy"), or a negated/excluded code for a specific substance or class (e.g.,
     * "No latex allergy") or a general or categorical negated statement (e.g., "No
     * known allergy", "No known drug allergies"). Note: the substance for a specific
     * reaction may be different from the substance identified as the cause of the
     * risk, but it must be consistent with it. For instance, it may be a more specific
     * substance (e.g. a brand medication) or a composite product that includes the
     * identified substance. It must be clinically safe to only process the 'code' and
     * ignore the 'reaction.substance'. If a receiving system is unable to confirm that
     * AllergyIntolerance.reaction.substance falls within the semantic scope of
     * AllergyIntolerance.code, then the receiving system should ignore
     * AllergyIntolerance.reaction.substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Code for an allergy or intolerance statement (either a positive or a
     * negated/excluded statement). This may be a code for a substance or
     * pharmaceutical product that is considered to be responsible for the adverse
     * reaction risk (e.g., "Latex"), an allergy or intolerance condition (e.g., "Latex
     * allergy"), or a negated/excluded code for a specific substance or class (e.g.,
     * "No latex allergy") or a general or categorical negated statement (e.g., "No
     * known allergy", "No known drug allergies"). Note: the substance for a specific
     * reaction may be different from the substance identified as the cause of the
     * risk, but it must be consistent with it. For instance, it may be a more specific
     * substance (e.g. a brand medication) or a composite product that includes the
     * identified substance. It must be clinically safe to only process the 'code' and
     * ignore the 'reaction.substance'. If a receiving system is unable to confirm that
     * AllergyIntolerance.reaction.substance falls within the semantic scope of
     * AllergyIntolerance.code, then the receiving system should ignore
     * AllergyIntolerance.reaction.substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Estimate of the potential clinical harm, or seriousness, of a reaction to an
     * identified substance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the
     * identified substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCriticality
     */
    public function getCriticality()
    {
        return $this->criticality;
    }

    /**
     * Estimate of the potential clinical harm, or seriousness, of a reaction to an
     * identified substance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the
     * identified substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCriticality $criticality
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setCriticality(FHIRAllergyIntoleranceCriticality $criticality = null)
    {
        $this->criticality = $criticality;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The encounter when the allergy or intolerance was asserted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The encounter when the allergy or intolerance was asserted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $encounter
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setEncounter(FHIRReference $encounter = null)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this AllergyIntolerance by the performer or
     * other systems which remain constant as the resource is updated and propagates
     * from server to server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this AllergyIntolerance by the performer or
     * other systems which remain constant as the resource is updated and propagates
     * from server to server.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this AllergyIntolerance by the performer or
     * other systems which remain constant as the resource is updated and propagates
     * from server to server.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Represents the date and/or time of the last known occurrence of a reaction
     * event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getLastOccurrence()
    {
        return $this->lastOccurrence;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Represents the date and/or time of the last known occurrence of a reaction
     * event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $lastOccurrence
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setLastOccurrence($lastOccurrence = null)
    {
        if (null === $lastOccurrence) {
            $this->lastOccurrence = null;
            return $this;
        }
        if ($lastOccurrence instanceof FHIRDateTime) {
            $this->lastOccurrence = $lastOccurrence;
            return $this;
        }
        $this->lastOccurrence = new FHIRDateTime($lastOccurrence);
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Additional narrative about the propensity for the Adverse Reaction, not captured
     * in other fields.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Additional narrative about the propensity for the Adverse Reaction, not captured
     * in other fields.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function addNote(FHIRAnnotation $note = null)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Additional narrative about the propensity for the Adverse Reaction, not captured
     * in other fields.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAnnotation[] $note
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setNote(array $note = [])
    {
        $this->note = [];
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            if ($v instanceof FHIRAnnotation) {
                $this->addNote($v);
            } else {
                $this->addNote(new FHIRAnnotation($v));
            }
        }
        return $this;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified. (choose any one of onset*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getOnsetAge()
    {
        return $this->onsetAge;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified. (choose any one of onset*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge $onsetAge
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setOnsetAge(FHIRAge $onsetAge = null)
    {
        $this->onsetAge = $onsetAge;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified. (choose any one of onset*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getOnsetDateTime()
    {
        return $this->onsetDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified. (choose any one of onset*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $onsetDateTime
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setOnsetDateTime($onsetDateTime = null)
    {
        if (null === $onsetDateTime) {
            $this->onsetDateTime = null;
            return $this;
        }
        if ($onsetDateTime instanceof FHIRDateTime) {
            $this->onsetDateTime = $onsetDateTime;
            return $this;
        }
        $this->onsetDateTime = new FHIRDateTime($onsetDateTime);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified. (choose any one of onset*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getOnsetPeriod()
    {
        return $this->onsetPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified. (choose any one of onset*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod $onsetPeriod
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setOnsetPeriod(FHIRPeriod $onsetPeriod = null)
    {
        $this->onsetPeriod = $onsetPeriod;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified. (choose any one of onset*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getOnsetRange()
    {
        return $this->onsetRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified. (choose any one of onset*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRange $onsetRange
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setOnsetRange(FHIRRange $onsetRange = null)
    {
        $this->onsetRange = $onsetRange;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified. (choose any one of onset*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getOnsetString()
    {
        return $this->onsetString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified. (choose any one of onset*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $onsetString
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setOnsetString($onsetString = null)
    {
        if (null === $onsetString) {
            $this->onsetString = null;
            return $this;
        }
        if ($onsetString instanceof FHIRString) {
            $this->onsetString = $onsetString;
            return $this;
        }
        $this->onsetString = new FHIRString($onsetString);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The patient who has the allergy or intolerance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The patient who has the allergy or intolerance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setPatient(FHIRReference $patient = null)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Risk of harmful or undesirable, physiological response which is unique to an
     * individual and associated with exposure to a substance.
     *
     * Details about each adverse reaction event linked to exposure to the identified
     * substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction[]
     */
    public function getReaction()
    {
        return $this->reaction;
    }

    /**
     * Risk of harmful or undesirable, physiological response which is unique to an
     * individual and associated with exposure to a substance.
     *
     * Details about each adverse reaction event linked to exposure to the identified
     * substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction $reaction
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function addReaction(FHIRAllergyIntoleranceReaction $reaction = null)
    {
        $this->reaction[] = $reaction;
        return $this;
    }

    /**
     * Risk of harmful or undesirable, physiological response which is unique to an
     * individual and associated with exposure to a substance.
     *
     * Details about each adverse reaction event linked to exposure to the identified
     * substance.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction[] $reaction
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setReaction(array $reaction = [])
    {
        $this->reaction = [];
        if ([] === $reaction) {
            return $this;
        }
        foreach($reaction as $v) {
            if ($v instanceof FHIRAllergyIntoleranceReaction) {
                $this->addReaction($v);
            } else {
                $this->addReaction(new FHIRAllergyIntoleranceReaction($v));
            }
        }
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The recordedDate represents when this particular AllergyIntolerance record was
     * created in the system, which is often a system-generated date.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getRecordedDate()
    {
        return $this->recordedDate;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The recordedDate represents when this particular AllergyIntolerance record was
     * created in the system, which is often a system-generated date.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $recordedDate
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setRecordedDate($recordedDate = null)
    {
        if (null === $recordedDate) {
            $this->recordedDate = null;
            return $this;
        }
        if ($recordedDate instanceof FHIRDateTime) {
            $this->recordedDate = $recordedDate;
            return $this;
        }
        $this->recordedDate = new FHIRDateTime($recordedDate);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Individual who recorded the record and takes responsibility for its content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRecorder()
    {
        return $this->recorder;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Individual who recorded the record and takes responsibility for its content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $recorder
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setRecorder(FHIRReference $recorder = null)
    {
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * Identification of the underlying physiological mechanism for a Reaction Risk.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identification of the underlying physiological mechanism for the reaction risk.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Identification of the underlying physiological mechanism for a Reaction Risk.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identification of the underlying physiological mechanism for the reaction risk.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceType $type
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setType(FHIRAllergyIntoleranceType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Assertion about certainty associated with the propensity, or potential risk, of
     * a reaction to the identified substance (including pharmaceutical product).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getVerificationStatus()
    {
        return $this->verificationStatus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Assertion about certainty associated with the propensity, or potential risk, of
     * a reaction to the identified substance (including pharmaceutical product).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $verificationStatus
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public function setVerificationStatus(FHIRCodeableConcept $verificationStatus = null)
    {
        $this->verificationStatus = $verificationStatus;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRAllergyIntolerance::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRAllergyIntolerance::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize($sxe, new FHIRAllergyIntolerance);
        } elseif (!is_object($type) || !($type instanceof FHIRAllergyIntolerance)) {
            throw new \RuntimeException(sprintf(
                'FHIRAllergyIntolerance::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->asserter)) {
            $type->setAsserter(FHIRReference::xmlUnserialize($children->asserter));
        }
        if (isset($children->category)) {
            foreach($children->category as $child) {
                $type->addCategory(FHIRAllergyIntoleranceCategory::xmlUnserialize($child));
            }
        }
        if (isset($children->clinicalStatus)) {
            $type->setClinicalStatus(FHIRCodeableConcept::xmlUnserialize($children->clinicalStatus));
        }
        if (isset($children->code)) {
            $type->setCode(FHIRCodeableConcept::xmlUnserialize($children->code));
        }
        if (isset($children->criticality)) {
            $type->setCriticality(FHIRAllergyIntoleranceCriticality::xmlUnserialize($children->criticality));
        }
        if (isset($children->encounter)) {
            $type->setEncounter(FHIRReference::xmlUnserialize($children->encounter));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($attributes->lastOccurrence)) {
            $type->setLastOccurrence((string)$attributes->lastOccurrence);
        }
        if (isset($children->lastOccurrence)) {
            $type->setLastOccurrence(FHIRDateTime::xmlUnserialize($children->lastOccurrence));
        }
        if (isset($children->note)) {
            foreach($children->note as $child) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($child));
            }
        }
        if (isset($children->onsetAge)) {
            $type->setOnsetAge(FHIRAge::xmlUnserialize($children->onsetAge));
        }
        if (isset($attributes->onsetDateTime)) {
            $type->setOnsetDateTime((string)$attributes->onsetDateTime);
        }
        if (isset($children->onsetDateTime)) {
            $type->setOnsetDateTime(FHIRDateTime::xmlUnserialize($children->onsetDateTime));
        }
        if (isset($children->onsetPeriod)) {
            $type->setOnsetPeriod(FHIRPeriod::xmlUnserialize($children->onsetPeriod));
        }
        if (isset($children->onsetRange)) {
            $type->setOnsetRange(FHIRRange::xmlUnserialize($children->onsetRange));
        }
        if (isset($attributes->onsetString)) {
            $type->setOnsetString((string)$attributes->onsetString);
        }
        if (isset($children->onsetString)) {
            $type->setOnsetString(FHIRString::xmlUnserialize($children->onsetString));
        }
        if (isset($children->patient)) {
            $type->setPatient(FHIRReference::xmlUnserialize($children->patient));
        }
        if (isset($children->reaction)) {
            foreach($children->reaction as $child) {
                $type->addReaction(FHIRAllergyIntoleranceReaction::xmlUnserialize($child));
            }
        }
        if (isset($attributes->recordedDate)) {
            $type->setRecordedDate((string)$attributes->recordedDate);
        }
        if (isset($children->recordedDate)) {
            $type->setRecordedDate(FHIRDateTime::xmlUnserialize($children->recordedDate));
        }
        if (isset($children->recorder)) {
            $type->setRecorder(FHIRReference::xmlUnserialize($children->recorder));
        }
        if (isset($children->type)) {
            $type->setType(FHIRAllergyIntoleranceType::xmlUnserialize($children->type));
        }
        if (isset($children->verificationStatus)) {
            $type->setVerificationStatus(FHIRCodeableConcept::xmlUnserialize($children->verificationStatus));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<AllergyIntolerance xmlns="http://hl7.org/fhir"></AllergyIntolerance>');
        }
        if (null !== ($v = $this->getAsserter())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ASSERTER));
        }
        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY));
            }
        }
        if (null !== ($v = $this->getClinicalStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CLINICAL_STATUS));
        }
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE));
        }
        if (null !== ($v = $this->getCriticality())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CRITICALITY));
        }
        if (null !== ($v = $this->getEncounter())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENCOUNTER));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
            }
        }
        if (null !== ($v = $this->getLastOccurrence())) {
            $sxe->addAttribute(self::FIELD_LAST_OCCURRENCE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_LAST_OCCURRENCE));
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOTE));
            }
        }
        if (null !== ($v = $this->getOnsetAge())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ONSET_AGE));
        }
        if (null !== ($v = $this->getOnsetDateTime())) {
            $sxe->addAttribute(self::FIELD_ONSET_DATE_TIME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_ONSET_DATE_TIME));
            }
        }
        if (null !== ($v = $this->getOnsetPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ONSET_PERIOD));
        }
        if (null !== ($v = $this->getOnsetRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ONSET_RANGE));
        }
        if (null !== ($v = $this->getOnsetString())) {
            $sxe->addAttribute(self::FIELD_ONSET_STRING, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_ONSET_STRING));
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT));
        }
        if ([] !== ($vs = $this->getReaction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REACTION));
            }
        }
        if (null !== ($v = $this->getRecordedDate())) {
            $sxe->addAttribute(self::FIELD_RECORDED_DATE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_RECORDED_DATE));
            }
        }
        if (null !== ($v = $this->getRecorder())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RECORDER));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE));
        }
        if (null !== ($v = $this->getVerificationStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VERIFICATION_STATUS));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAsserter())) {
            $a[self::FIELD_ASSERTER] = $v;
        }
        if ([] !== ($vs = $this->getCategory())) {
            $a[self::FIELD_CATEGORY] = $vs;
        }
        if (null !== ($v = $this->getClinicalStatus())) {
            $a[self::FIELD_CLINICAL_STATUS] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
        }
        if (null !== ($v = $this->getCriticality())) {
            $a[self::FIELD_CRITICALITY] = $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            $a[self::FIELD_ENCOUNTER] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if (null !== ($v = $this->getLastOccurrence())) {
            $a[self::FIELD_LAST_OCCURRENCE] = (string)$v;
            $a[self::FIELD_LAST_OCCURRENCE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getNote())) {
            $a[self::FIELD_NOTE] = $vs;
        }
        if (null !== ($v = $this->getOnsetAge())) {
            $a[self::FIELD_ONSET_AGE] = $v;
        }
        if (null !== ($v = $this->getOnsetDateTime())) {
            $a[self::FIELD_ONSET_DATE_TIME] = (string)$v;
            $a[self::FIELD_ONSET_DATE_TIME_EXT] = $v;
        }
        if (null !== ($v = $this->getOnsetPeriod())) {
            $a[self::FIELD_ONSET_PERIOD] = $v;
        }
        if (null !== ($v = $this->getOnsetRange())) {
            $a[self::FIELD_ONSET_RANGE] = $v;
        }
        if (null !== ($v = $this->getOnsetString())) {
            $a[self::FIELD_ONSET_STRING] = (string)$v;
            $a[self::FIELD_ONSET_STRING_EXT] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if ([] !== ($vs = $this->getReaction())) {
            $a[self::FIELD_REACTION] = $vs;
        }
        if (null !== ($v = $this->getRecordedDate())) {
            $a[self::FIELD_RECORDED_DATE] = (string)$v;
            $a[self::FIELD_RECORDED_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getRecorder())) {
            $a[self::FIELD_RECORDER] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if (null !== ($v = $this->getVerificationStatus())) {
            $a[self::FIELD_VERIFICATION_STATUS] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}
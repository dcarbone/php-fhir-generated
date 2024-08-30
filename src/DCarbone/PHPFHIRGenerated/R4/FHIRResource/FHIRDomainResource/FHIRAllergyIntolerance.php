<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 30th, 2024 22:23+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAllergyIntoleranceCategory;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAllergyIntoleranceCriticality;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAllergyIntoleranceType;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeMap;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter;

/**
 * Risk of harmful or undesirable, physiological response which is unique to an
 * individual and associated with exposure to a substance.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRAllergyIntolerance
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRAllergyIntolerance extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_CLINICAL_STATUS = 'clinicalStatus';
    const FIELD_VERIFICATION_STATUS = 'verificationStatus';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_CATEGORY = 'category';
    const FIELD_CATEGORY_EXT = '_category';
    const FIELD_CRITICALITY = 'criticality';
    const FIELD_CRITICALITY_EXT = '_criticality';
    const FIELD_CODE = 'code';
    const FIELD_PATIENT = 'patient';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_ONSET_DATE_TIME = 'onsetDateTime';
    const FIELD_ONSET_DATE_TIME_EXT = '_onsetDateTime';
    const FIELD_ONSET_AGE = 'onsetAge';
    const FIELD_ONSET_PERIOD = 'onsetPeriod';
    const FIELD_ONSET_RANGE = 'onsetRange';
    const FIELD_ONSET_STRING = 'onsetString';
    const FIELD_ONSET_STRING_EXT = '_onsetString';
    const FIELD_RECORDED_DATE = 'recordedDate';
    const FIELD_RECORDED_DATE_EXT = '_recordedDate';
    const FIELD_RECORDER = 'recorder';
    const FIELD_ASSERTER = 'asserter';
    const FIELD_LAST_OCCURRENCE = 'lastOccurrence';
    const FIELD_LAST_OCCURRENCE_EXT = '_lastOccurrence';
    const FIELD_NOTE = 'note';
    const FIELD_REACTION = 'reaction';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this AllergyIntolerance by the performer or
     * other systems which remain constant as the resource is updated and propagates
     * from server to server.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clinical status of the allergy or intolerance.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $clinicalStatus = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Assertion about certainty associated with the propensity, or potential risk, of
     * a reaction to the identified substance (including pharmaceutical product).
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $verificationStatus = null;
    /**
     * Identification of the underlying physiological mechanism for a Reaction Risk.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identification of the underlying physiological mechanism for the reaction risk.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAllergyIntoleranceType
     */
    protected null|FHIRAllergyIntoleranceType $type = null;
    /**
     * Category of an identified substance associated with allergies or intolerances.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Category of the identified substance.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAllergyIntoleranceCategory[]
     */
    protected null|array $category = [];
    /**
     * Estimate of the potential clinical harm, or seriousness, of a reaction to an
     * identified substance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the
     * identified substance.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAllergyIntoleranceCriticality
     */
    protected null|FHIRAllergyIntoleranceCriticality $criticality = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $code = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient who has the allergy or intolerance.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $patient = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter when the allergy or intolerance was asserted.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $encounter = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $onsetDateTime = null;
    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge
     */
    protected null|FHIRAge $onsetAge = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $onsetPeriod = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    protected null|FHIRRange $onsetRange = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $onsetString = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The recordedDate represents when this particular AllergyIntolerance record was
     * created in the system, which is often a system-generated date.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $recordedDate = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual who recorded the record and takes responsibility for its content.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $recorder = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source of the information about the allergy that is recorded.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $asserter = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Represents the date and/or time of the last known occurrence of a reaction
     * event.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $lastOccurrence = null;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional narrative about the propensity for the Adverse Reaction, not captured
     * in other fields.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    protected null|array $note = [];
    /**
     * Risk of harmful or undesirable, physiological response which is unique to an
     * individual and associated with exposure to a substance.
     *
     * Details about each adverse reaction event linked to exposure to the identified
     * substance.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction[]
     */
    protected null|array $reaction = [];

    /**
     * Validation map for fields in type AllergyIntolerance
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_PATIENT => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRAllergyIntolerance Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_IDENTIFIER, $data)) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_CLINICAL_STATUS, $data)) {
            if ($data[self::FIELD_CLINICAL_STATUS] instanceof FHIRCodeableConcept) {
                $this->setClinicalStatus($data[self::FIELD_CLINICAL_STATUS]);
            } else {
                $this->setClinicalStatus(new FHIRCodeableConcept($data[self::FIELD_CLINICAL_STATUS]));
            }
        }
        if (array_key_exists(self::FIELD_VERIFICATION_STATUS, $data)) {
            if ($data[self::FIELD_VERIFICATION_STATUS] instanceof FHIRCodeableConcept) {
                $this->setVerificationStatus($data[self::FIELD_VERIFICATION_STATUS]);
            } else {
                $this->setVerificationStatus(new FHIRCodeableConcept($data[self::FIELD_VERIFICATION_STATUS]));
            }
        }
        if (array_key_exists(self::FIELD_TYPE, $data) || array_key_exists(self::FIELD_TYPE_EXT, $data)) {
            $value = $data[self::FIELD_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) ? $data[self::FIELD_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAllergyIntoleranceType) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRAllergyIntoleranceType(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRAllergyIntoleranceType([FHIRAllergyIntoleranceType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setType(new FHIRAllergyIntoleranceType($ext));
            } else {
                $this->setType(new FHIRAllergyIntoleranceType(null));
            }
        }
        if (array_key_exists(self::FIELD_CATEGORY, $data) || array_key_exists(self::FIELD_CATEGORY_EXT, $data)) {
            $value = $data[self::FIELD_CATEGORY] ?? null;
            $ext = (isset($data[self::FIELD_CATEGORY_EXT]) && is_array($data[self::FIELD_CATEGORY_EXT])) ? $data[self::FIELD_CATEGORY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAllergyIntoleranceCategory) {
                    $this->addCategory($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRAllergyIntoleranceCategory) {
                            $this->addCategory($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addCategory(new FHIRAllergyIntoleranceCategory(array_merge($v, $iext)));
                            } else {
                                $this->addCategory(new FHIRAllergyIntoleranceCategory([FHIRAllergyIntoleranceCategory::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addCategory(new FHIRAllergyIntoleranceCategory(array_merge($ext, $value)));
                } else {
                    $this->addCategory(new FHIRAllergyIntoleranceCategory([FHIRAllergyIntoleranceCategory::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addCategory(new FHIRAllergyIntoleranceCategory($iext));
                }
            } else {
                $this->addCategory(new FHIRAllergyIntoleranceCategory(null));
            }
        }
        if (array_key_exists(self::FIELD_CRITICALITY, $data) || array_key_exists(self::FIELD_CRITICALITY_EXT, $data)) {
            $value = $data[self::FIELD_CRITICALITY] ?? null;
            $ext = (isset($data[self::FIELD_CRITICALITY_EXT]) && is_array($data[self::FIELD_CRITICALITY_EXT])) ? $data[self::FIELD_CRITICALITY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAllergyIntoleranceCriticality) {
                    $this->setCriticality($value);
                } else if (is_array($value)) {
                    $this->setCriticality(new FHIRAllergyIntoleranceCriticality(array_merge($ext, $value)));
                } else {
                    $this->setCriticality(new FHIRAllergyIntoleranceCriticality([FHIRAllergyIntoleranceCriticality::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCriticality(new FHIRAllergyIntoleranceCriticality($ext));
            } else {
                $this->setCriticality(new FHIRAllergyIntoleranceCriticality(null));
            }
        }
        if (array_key_exists(self::FIELD_CODE, $data)) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (array_key_exists(self::FIELD_PATIENT, $data)) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (array_key_exists(self::FIELD_ENCOUNTER, $data)) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIRReference($data[self::FIELD_ENCOUNTER]));
            }
        }
        if (array_key_exists(self::FIELD_ONSET_DATE_TIME, $data) || array_key_exists(self::FIELD_ONSET_DATE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_ONSET_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_ONSET_DATE_TIME_EXT]) && is_array($data[self::FIELD_ONSET_DATE_TIME_EXT])) ? $data[self::FIELD_ONSET_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setOnsetDateTime($value);
                } else if (is_array($value)) {
                    $this->setOnsetDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setOnsetDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOnsetDateTime(new FHIRDateTime($ext));
            } else {
                $this->setOnsetDateTime(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_ONSET_AGE, $data)) {
            if ($data[self::FIELD_ONSET_AGE] instanceof FHIRAge) {
                $this->setOnsetAge($data[self::FIELD_ONSET_AGE]);
            } else {
                $this->setOnsetAge(new FHIRAge($data[self::FIELD_ONSET_AGE]));
            }
        }
        if (array_key_exists(self::FIELD_ONSET_PERIOD, $data)) {
            if ($data[self::FIELD_ONSET_PERIOD] instanceof FHIRPeriod) {
                $this->setOnsetPeriod($data[self::FIELD_ONSET_PERIOD]);
            } else {
                $this->setOnsetPeriod(new FHIRPeriod($data[self::FIELD_ONSET_PERIOD]));
            }
        }
        if (array_key_exists(self::FIELD_ONSET_RANGE, $data)) {
            if ($data[self::FIELD_ONSET_RANGE] instanceof FHIRRange) {
                $this->setOnsetRange($data[self::FIELD_ONSET_RANGE]);
            } else {
                $this->setOnsetRange(new FHIRRange($data[self::FIELD_ONSET_RANGE]));
            }
        }
        if (array_key_exists(self::FIELD_ONSET_STRING, $data) || array_key_exists(self::FIELD_ONSET_STRING_EXT, $data)) {
            $value = $data[self::FIELD_ONSET_STRING] ?? null;
            $ext = (isset($data[self::FIELD_ONSET_STRING_EXT]) && is_array($data[self::FIELD_ONSET_STRING_EXT])) ? $data[self::FIELD_ONSET_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setOnsetString($value);
                } else if (is_array($value)) {
                    $this->setOnsetString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setOnsetString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOnsetString(new FHIRString($ext));
            } else {
                $this->setOnsetString(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_RECORDED_DATE, $data) || array_key_exists(self::FIELD_RECORDED_DATE_EXT, $data)) {
            $value = $data[self::FIELD_RECORDED_DATE] ?? null;
            $ext = (isset($data[self::FIELD_RECORDED_DATE_EXT]) && is_array($data[self::FIELD_RECORDED_DATE_EXT])) ? $data[self::FIELD_RECORDED_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setRecordedDate($value);
                } else if (is_array($value)) {
                    $this->setRecordedDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setRecordedDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRecordedDate(new FHIRDateTime($ext));
            } else {
                $this->setRecordedDate(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_RECORDER, $data)) {
            if ($data[self::FIELD_RECORDER] instanceof FHIRReference) {
                $this->setRecorder($data[self::FIELD_RECORDER]);
            } else {
                $this->setRecorder(new FHIRReference($data[self::FIELD_RECORDER]));
            }
        }
        if (array_key_exists(self::FIELD_ASSERTER, $data)) {
            if ($data[self::FIELD_ASSERTER] instanceof FHIRReference) {
                $this->setAsserter($data[self::FIELD_ASSERTER]);
            } else {
                $this->setAsserter(new FHIRReference($data[self::FIELD_ASSERTER]));
            }
        }
        if (array_key_exists(self::FIELD_LAST_OCCURRENCE, $data) || array_key_exists(self::FIELD_LAST_OCCURRENCE_EXT, $data)) {
            $value = $data[self::FIELD_LAST_OCCURRENCE] ?? null;
            $ext = (isset($data[self::FIELD_LAST_OCCURRENCE_EXT]) && is_array($data[self::FIELD_LAST_OCCURRENCE_EXT])) ? $data[self::FIELD_LAST_OCCURRENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setLastOccurrence($value);
                } else if (is_array($value)) {
                    $this->setLastOccurrence(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setLastOccurrence(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLastOccurrence(new FHIRDateTime($ext));
            } else {
                $this->setLastOccurrence(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_NOTE, $data)) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } elseif ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
            }
        }
        if (array_key_exists(self::FIELD_REACTION, $data)) {
            if (is_array($data[self::FIELD_REACTION])) {
                foreach($data[self::FIELD_REACTION] as $v) {
                    if ($v instanceof FHIRAllergyIntoleranceReaction) {
                        $this->addReaction($v);
                    } else {
                        $this->addReaction(new FHIRAllergyIntoleranceReaction($v));
                    }
                }
            } elseif ($data[self::FIELD_REACTION] instanceof FHIRAllergyIntoleranceReaction) {
                $this->addReaction($data[self::FIELD_REACTION]);
            } else {
                $this->addReaction(new FHIRAllergyIntoleranceReaction($data[self::FIELD_REACTION]));
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
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this AllergyIntolerance by the performer or
     * other systems which remain constant as the resource is updated and propagates
     * from server to server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): null|array
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this AllergyIntolerance by the performer or
     * other systems which remain constant as the resource is updated and propagates
     * from server to server.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueAdded();
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this AllergyIntolerance by the performer or
     * other systems which remain constant as the resource is updated and propagates
     * from server to server.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        if ([] !== $this->identifier) {
            $this->_trackValuesRemoved(count($this->identifier));
            $this->identifier = [];
        }
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            $this->addIdentifier($v);
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clinical status of the allergy or intolerance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getClinicalStatus(): null|FHIRCodeableConcept
    {
        return $this->clinicalStatus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clinical status of the allergy or intolerance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $clinicalStatus
     * @return static
     */
    public function setClinicalStatus(null|FHIRCodeableConcept $clinicalStatus = null): self
    {
        if (null === $clinicalStatus) {
            $clinicalStatus = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->clinicalStatus, $clinicalStatus);
        $this->clinicalStatus = $clinicalStatus;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Assertion about certainty associated with the propensity, or potential risk, of
     * a reaction to the identified substance (including pharmaceutical product).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getVerificationStatus(): null|FHIRCodeableConcept
    {
        return $this->verificationStatus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Assertion about certainty associated with the propensity, or potential risk, of
     * a reaction to the identified substance (including pharmaceutical product).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $verificationStatus
     * @return static
     */
    public function setVerificationStatus(null|FHIRCodeableConcept $verificationStatus = null): self
    {
        if (null === $verificationStatus) {
            $verificationStatus = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->verificationStatus, $verificationStatus);
        $this->verificationStatus = $verificationStatus;
        return $this;
    }

    /**
     * Identification of the underlying physiological mechanism for a Reaction Risk.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identification of the underlying physiological mechanism for the reaction risk.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAllergyIntoleranceType
     */
    public function getType(): null|FHIRAllergyIntoleranceType
    {
        return $this->type;
    }

    /**
     * Identification of the underlying physiological mechanism for a Reaction Risk.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identification of the underlying physiological mechanism for the reaction risk.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAllergyIntoleranceType $type
     * @return static
     */
    public function setType(null|FHIRAllergyIntoleranceType $type = null): self
    {
        if (null === $type) {
            $type = new FHIRAllergyIntoleranceType();
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * Category of an identified substance associated with allergies or intolerances.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Category of the identified substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAllergyIntoleranceCategory[]
     */
    public function getCategory(): null|array
    {
        return $this->category;
    }

    /**
     * Category of an identified substance associated with allergies or intolerances.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Category of the identified substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAllergyIntoleranceCategory $category
     * @return static
     */
    public function addCategory(null|FHIRAllergyIntoleranceCategory $category = null): self
    {
        if (null === $category) {
            $category = new FHIRAllergyIntoleranceCategory();
        }
        $this->_trackValueAdded();
        $this->category[] = $category;
        return $this;
    }

    /**
     * Category of an identified substance associated with allergies or intolerances.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Category of the identified substance.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAllergyIntoleranceCategory ...$category
     * @return static
     */
    public function setCategory(FHIRAllergyIntoleranceCategory ...$category): self
    {
        if ([] !== $this->category) {
            $this->_trackValuesRemoved(count($this->category));
            $this->category = [];
        }
        if ([] === $category) {
            return $this;
        }
        foreach($category as $v) {
            $this->addCategory($v);
        }
        return $this;
    }

    /**
     * Estimate of the potential clinical harm, or seriousness, of a reaction to an
     * identified substance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the
     * identified substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAllergyIntoleranceCriticality
     */
    public function getCriticality(): null|FHIRAllergyIntoleranceCriticality
    {
        return $this->criticality;
    }

    /**
     * Estimate of the potential clinical harm, or seriousness, of a reaction to an
     * identified substance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the
     * identified substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAllergyIntoleranceCriticality $criticality
     * @return static
     */
    public function setCriticality(null|FHIRAllergyIntoleranceCriticality $criticality = null): self
    {
        if (null === $criticality) {
            $criticality = new FHIRAllergyIntoleranceCriticality();
        }
        $this->_trackValueSet($this->criticality, $criticality);
        $this->criticality = $criticality;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getCode(): null|FHIRCodeableConcept
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(null|FHIRCodeableConcept $code = null): self
    {
        if (null === $code) {
            $code = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->code, $code);
        $this->code = $code;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient who has the allergy or intolerance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getPatient(): null|FHIRReference
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient who has the allergy or intolerance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(null|FHIRReference $patient = null): self
    {
        if (null === $patient) {
            $patient = new FHIRReference();
        }
        $this->_trackValueSet($this->patient, $patient);
        $this->patient = $patient;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter when the allergy or intolerance was asserted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getEncounter(): null|FHIRReference
    {
        return $this->encounter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter when the allergy or intolerance was asserted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $encounter
     * @return static
     */
    public function setEncounter(null|FHIRReference $encounter = null): self
    {
        if (null === $encounter) {
            $encounter = new FHIRReference();
        }
        $this->_trackValueSet($this->encounter, $encounter);
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getOnsetDateTime(): null|FHIRDateTime
    {
        return $this->onsetDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R4\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $onsetDateTime
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setOnsetDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $onsetDateTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $onsetDateTime && !($onsetDateTime instanceof FHIRDateTime)) {
            $onsetDateTime = new FHIRDateTime($onsetDateTime);
        }
        $this->_trackValueSet($this->onsetDateTime, $onsetDateTime);
        if (!isset($this->_xmlLocations[self::FIELD_ONSET_DATE_TIME])) {
            $this->_xmlLocations[self::FIELD_ONSET_DATE_TIME] = [];
        }
        $this->_xmlLocations[self::FIELD_ONSET_DATE_TIME][0] = $xmlLocation;
        $this->onsetDateTime = $onsetDateTime;
        return $this;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getOnsetAge(): null|FHIRAge
    {
        return $this->onsetAge;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge $onsetAge
     * @return static
     */
    public function setOnsetAge(null|FHIRAge $onsetAge = null): self
    {
        if (null === $onsetAge) {
            $onsetAge = new FHIRAge();
        }
        $this->_trackValueSet($this->onsetAge, $onsetAge);
        $this->onsetAge = $onsetAge;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getOnsetPeriod(): null|FHIRPeriod
    {
        return $this->onsetPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $onsetPeriod
     * @return static
     */
    public function setOnsetPeriod(null|FHIRPeriod $onsetPeriod = null): self
    {
        if (null === $onsetPeriod) {
            $onsetPeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->onsetPeriod, $onsetPeriod);
        $this->onsetPeriod = $onsetPeriod;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    public function getOnsetRange(): null|FHIRRange
    {
        return $this->onsetRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange $onsetRange
     * @return static
     */
    public function setOnsetRange(null|FHIRRange $onsetRange = null): self
    {
        if (null === $onsetRange) {
            $onsetRange = new FHIRRange();
        }
        $this->_trackValueSet($this->onsetRange, $onsetRange);
        $this->onsetRange = $onsetRange;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getOnsetString(): null|FHIRString
    {
        return $this->onsetString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $onsetString
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setOnsetString(null|string|FHIRStringPrimitive|FHIRString $onsetString = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $onsetString && !($onsetString instanceof FHIRString)) {
            $onsetString = new FHIRString($onsetString);
        }
        $this->_trackValueSet($this->onsetString, $onsetString);
        if (!isset($this->_xmlLocations[self::FIELD_ONSET_STRING])) {
            $this->_xmlLocations[self::FIELD_ONSET_STRING] = [];
        }
        $this->_xmlLocations[self::FIELD_ONSET_STRING][0] = $xmlLocation;
        $this->onsetString = $onsetString;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The recordedDate represents when this particular AllergyIntolerance record was
     * created in the system, which is often a system-generated date.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getRecordedDate(): null|FHIRDateTime
    {
        return $this->recordedDate;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The recordedDate represents when this particular AllergyIntolerance record was
     * created in the system, which is often a system-generated date.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R4\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $recordedDate
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setRecordedDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $recordedDate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $recordedDate && !($recordedDate instanceof FHIRDateTime)) {
            $recordedDate = new FHIRDateTime($recordedDate);
        }
        $this->_trackValueSet($this->recordedDate, $recordedDate);
        if (!isset($this->_xmlLocations[self::FIELD_RECORDED_DATE])) {
            $this->_xmlLocations[self::FIELD_RECORDED_DATE] = [];
        }
        $this->_xmlLocations[self::FIELD_RECORDED_DATE][0] = $xmlLocation;
        $this->recordedDate = $recordedDate;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual who recorded the record and takes responsibility for its content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getRecorder(): null|FHIRReference
    {
        return $this->recorder;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual who recorded the record and takes responsibility for its content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $recorder
     * @return static
     */
    public function setRecorder(null|FHIRReference $recorder = null): self
    {
        if (null === $recorder) {
            $recorder = new FHIRReference();
        }
        $this->_trackValueSet($this->recorder, $recorder);
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source of the information about the allergy that is recorded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getAsserter(): null|FHIRReference
    {
        return $this->asserter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source of the information about the allergy that is recorded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $asserter
     * @return static
     */
    public function setAsserter(null|FHIRReference $asserter = null): self
    {
        if (null === $asserter) {
            $asserter = new FHIRReference();
        }
        $this->_trackValueSet($this->asserter, $asserter);
        $this->asserter = $asserter;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Represents the date and/or time of the last known occurrence of a reaction
     * event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getLastOccurrence(): null|FHIRDateTime
    {
        return $this->lastOccurrence;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Represents the date and/or time of the last known occurrence of a reaction
     * event.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R4\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $lastOccurrence
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setLastOccurrence(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $lastOccurrence = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $lastOccurrence && !($lastOccurrence instanceof FHIRDateTime)) {
            $lastOccurrence = new FHIRDateTime($lastOccurrence);
        }
        $this->_trackValueSet($this->lastOccurrence, $lastOccurrence);
        if (!isset($this->_xmlLocations[self::FIELD_LAST_OCCURRENCE])) {
            $this->_xmlLocations[self::FIELD_LAST_OCCURRENCE] = [];
        }
        $this->_xmlLocations[self::FIELD_LAST_OCCURRENCE][0] = $xmlLocation;
        $this->lastOccurrence = $lastOccurrence;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional narrative about the propensity for the Adverse Reaction, not captured
     * in other fields.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    public function getNote(): null|array
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional narrative about the propensity for the Adverse Reaction, not captured
     * in other fields.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation $note
     * @return static
     */
    public function addNote(null|FHIRAnnotation $note = null): self
    {
        if (null === $note) {
            $note = new FHIRAnnotation();
        }
        $this->_trackValueAdded();
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional narrative about the propensity for the Adverse Reaction, not captured
     * in other fields.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation ...$note
     * @return static
     */
    public function setNote(FHIRAnnotation ...$note): self
    {
        if ([] !== $this->note) {
            $this->_trackValuesRemoved(count($this->note));
            $this->note = [];
        }
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            $this->addNote($v);
        }
        return $this;
    }

    /**
     * Risk of harmful or undesirable, physiological response which is unique to an
     * individual and associated with exposure to a substance.
     *
     * Details about each adverse reaction event linked to exposure to the identified
     * substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction[]
     */
    public function getReaction(): null|array
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction $reaction
     * @return static
     */
    public function addReaction(null|FHIRAllergyIntoleranceReaction $reaction = null): self
    {
        if (null === $reaction) {
            $reaction = new FHIRAllergyIntoleranceReaction();
        }
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction ...$reaction
     * @return static
     */
    public function setReaction(FHIRAllergyIntoleranceReaction ...$reaction): self
    {
        if ([] !== $this->reaction) {
            $this->_trackValuesRemoved(count($this->reaction));
            $this->reaction = [];
        }
        if ([] === $reaction) {
            return $this;
        }
        foreach($reaction as $v) {
            $this->addReaction($v);
        }
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
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getClinicalStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CLINICAL_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVerificationStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERIFICATION_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CATEGORY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getCriticality())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CRITICALITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENCOUNTER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOnsetDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ONSET_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOnsetAge())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ONSET_AGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOnsetPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ONSET_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOnsetRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ONSET_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOnsetString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ONSET_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRecordedDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RECORDED_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRecorder())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RECORDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAsserter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ASSERTER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLastOccurrence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LAST_OCCURRENCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReaction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REACTION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLINICAL_STATUS])) {
            $v = $this->getClinicalStatus();
            foreach($validationRules[self::FIELD_CLINICAL_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_CLINICAL_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLINICAL_STATUS])) {
                        $errs[self::FIELD_CLINICAL_STATUS] = [];
                    }
                    $errs[self::FIELD_CLINICAL_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERIFICATION_STATUS])) {
            $v = $this->getVerificationStatus();
            foreach($validationRules[self::FIELD_VERIFICATION_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_VERIFICATION_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERIFICATION_STATUS])) {
                        $errs[self::FIELD_VERIFICATION_STATUS] = [];
                    }
                    $errs[self::FIELD_VERIFICATION_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CRITICALITY])) {
            $v = $this->getCriticality();
            foreach($validationRules[self::FIELD_CRITICALITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_CRITICALITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CRITICALITY])) {
                        $errs[self::FIELD_CRITICALITY] = [];
                    }
                    $errs[self::FIELD_CRITICALITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT])) {
            $v = $this->getPatient();
            foreach($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_PATIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT])) {
                        $errs[self::FIELD_PATIENT] = [];
                    }
                    $errs[self::FIELD_PATIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENCOUNTER])) {
            $v = $this->getEncounter();
            foreach($validationRules[self::FIELD_ENCOUNTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCOUNTER])) {
                        $errs[self::FIELD_ENCOUNTER] = [];
                    }
                    $errs[self::FIELD_ENCOUNTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ONSET_DATE_TIME])) {
            $v = $this->getOnsetDateTime();
            foreach($validationRules[self::FIELD_ONSET_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_ONSET_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ONSET_DATE_TIME])) {
                        $errs[self::FIELD_ONSET_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_ONSET_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ONSET_AGE])) {
            $v = $this->getOnsetAge();
            foreach($validationRules[self::FIELD_ONSET_AGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_ONSET_AGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ONSET_AGE])) {
                        $errs[self::FIELD_ONSET_AGE] = [];
                    }
                    $errs[self::FIELD_ONSET_AGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ONSET_PERIOD])) {
            $v = $this->getOnsetPeriod();
            foreach($validationRules[self::FIELD_ONSET_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_ONSET_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ONSET_PERIOD])) {
                        $errs[self::FIELD_ONSET_PERIOD] = [];
                    }
                    $errs[self::FIELD_ONSET_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ONSET_RANGE])) {
            $v = $this->getOnsetRange();
            foreach($validationRules[self::FIELD_ONSET_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_ONSET_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ONSET_RANGE])) {
                        $errs[self::FIELD_ONSET_RANGE] = [];
                    }
                    $errs[self::FIELD_ONSET_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ONSET_STRING])) {
            $v = $this->getOnsetString();
            foreach($validationRules[self::FIELD_ONSET_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_ONSET_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ONSET_STRING])) {
                        $errs[self::FIELD_ONSET_STRING] = [];
                    }
                    $errs[self::FIELD_ONSET_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RECORDED_DATE])) {
            $v = $this->getRecordedDate();
            foreach($validationRules[self::FIELD_RECORDED_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_RECORDED_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECORDED_DATE])) {
                        $errs[self::FIELD_RECORDED_DATE] = [];
                    }
                    $errs[self::FIELD_RECORDED_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RECORDER])) {
            $v = $this->getRecorder();
            foreach($validationRules[self::FIELD_RECORDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_RECORDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECORDER])) {
                        $errs[self::FIELD_RECORDER] = [];
                    }
                    $errs[self::FIELD_RECORDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ASSERTER])) {
            $v = $this->getAsserter();
            foreach($validationRules[self::FIELD_ASSERTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_ASSERTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ASSERTER])) {
                        $errs[self::FIELD_ASSERTER] = [];
                    }
                    $errs[self::FIELD_ASSERTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LAST_OCCURRENCE])) {
            $v = $this->getLastOccurrence();
            foreach($validationRules[self::FIELD_LAST_OCCURRENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_LAST_OCCURRENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LAST_OCCURRENCE])) {
                        $errs[self::FIELD_LAST_OCCURRENCE] = [];
                    }
                    $errs[self::FIELD_LAST_OCCURRENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REACTION])) {
            $v = $this->getReaction();
            foreach($validationRules[self::FIELD_REACTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_REACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REACTION])) {
                        $errs[self::FIELD_REACTION] = [];
                    }
                    $errs[self::FIELD_REACTION][$rule] = $err;
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
        return $errs;
    }

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
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
        } else if (!($type instanceof FHIRAllergyIntolerance)) {
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
            if (self::FIELD_IDENTIFIER === $childName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CLINICAL_STATUS === $childName) {
                $type->setClinicalStatus(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VERIFICATION_STATUS === $childName) {
                $type->setVerificationStatus(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRAllergyIntoleranceType::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CATEGORY === $childName) {
                $type->addCategory(FHIRAllergyIntoleranceCategory::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CRITICALITY === $childName) {
                $type->setCriticality(FHIRAllergyIntoleranceCriticality::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CODE === $childName) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATIENT === $childName) {
                $type->setPatient(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ENCOUNTER === $childName) {
                $type->setEncounter(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ONSET_DATE_TIME === $childName) {
                $type->setOnsetDateTime(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ONSET_AGE === $childName) {
                $type->setOnsetAge(FHIRAge::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ONSET_PERIOD === $childName) {
                $type->setOnsetPeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ONSET_RANGE === $childName) {
                $type->setOnsetRange(FHIRRange::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ONSET_STRING === $childName) {
                $type->setOnsetString(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_RECORDED_DATE === $childName) {
                $type->setRecordedDate(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_RECORDER === $childName) {
                $type->setRecorder(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ASSERTER === $childName) {
                $type->setAsserter(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_LAST_OCCURRENCE === $childName) {
                $type->setLastOccurrence(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_NOTE === $childName) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REACTION === $childName) {
                $type->addReaction(FHIRAllergyIntoleranceReaction::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TEXT === $childName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn, $config));
                }
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_META === $childName) {
                $type->setMeta(FHIRMeta::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMPLICIT_RULES === $childName) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LANGUAGE === $childName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ONSET_DATE_TIME])) {
            $pt = $type->getOnsetDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ONSET_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setOnsetDateTime((string)$attributes[self::FIELD_ONSET_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ONSET_STRING])) {
            $pt = $type->getOnsetString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ONSET_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setOnsetString((string)$attributes[self::FIELD_ONSET_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_RECORDED_DATE])) {
            $pt = $type->getRecordedDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_RECORDED_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setRecordedDate((string)$attributes[self::FIELD_RECORDED_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LAST_OCCURRENCE])) {
            $pt = $type->getLastOccurrence();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LAST_OCCURRENCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLastOccurrence((string)$attributes[self::FIELD_LAST_OCCURRENCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'AllergyIntolerance', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_ONSET_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getOnsetDateTime())) {
            $xw->writeAttribute(self::FIELD_ONSET_DATE_TIME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_ONSET_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getOnsetString())) {
            $xw->writeAttribute(self::FIELD_ONSET_STRING, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_RECORDED_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getRecordedDate())) {
            $xw->writeAttribute(self::FIELD_RECORDED_DATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_LAST_OCCURRENCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getLastOccurrence())) {
            $xw->writeAttribute(self::FIELD_LAST_OCCURRENCE, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        foreach ($this->getIdentifier() as $v) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getClinicalStatus())) {
            $xw->startElement(self::FIELD_CLINICAL_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getVerificationStatus())) {
            $xw->startElement(self::FIELD_VERIFICATION_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getCategory() as $v) {
            $xw->startElement(self::FIELD_CATEGORY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getCriticality())) {
            $xw->startElement(self::FIELD_CRITICALITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getCode())) {
            $xw->startElement(self::FIELD_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPatient())) {
            $xw->startElement(self::FIELD_PATIENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getEncounter())) {
            $xw->startElement(self::FIELD_ENCOUNTER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_ONSET_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getOnsetDateTime())) {
            $xw->startElement(self::FIELD_ONSET_DATE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getOnsetAge())) {
            $xw->startElement(self::FIELD_ONSET_AGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getOnsetPeriod())) {
            $xw->startElement(self::FIELD_ONSET_PERIOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getOnsetRange())) {
            $xw->startElement(self::FIELD_ONSET_RANGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_ONSET_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getOnsetString())) {
            $xw->startElement(self::FIELD_ONSET_STRING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_RECORDED_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getRecordedDate())) {
            $xw->startElement(self::FIELD_RECORDED_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRecorder())) {
            $xw->startElement(self::FIELD_RECORDER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getAsserter())) {
            $xw->startElement(self::FIELD_ASSERTER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_LAST_OCCURRENCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getLastOccurrence())) {
            $xw->startElement(self::FIELD_LAST_OCCURRENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getNote() as $v) {
            $xw->startElement(self::FIELD_NOTE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getReaction() as $v) {
            $xw->startElement(self::FIELD_REACTION);
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
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getClinicalStatus())) {
            $out->{self::FIELD_CLINICAL_STATUS} = $v;
        }
        if (null !== ($v = $this->getVerificationStatus())) {
            $out->{self::FIELD_VERIFICATION_STATUS} = $v;
        }
        if (null !== ($v = $this->getType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRAllergyIntoleranceType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TYPE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getCategory())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRAllergyIntoleranceCategory::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_CATEGORY} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CATEGORY_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getCriticality())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CRITICALITY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRAllergyIntoleranceCriticality::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CRITICALITY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCode())) {
            $out->{self::FIELD_CODE} = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $out->{self::FIELD_PATIENT} = $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            $out->{self::FIELD_ENCOUNTER} = $v;
        }
        if (null !== ($v = $this->getOnsetDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ONSET_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ONSET_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOnsetAge())) {
            $out->{self::FIELD_ONSET_AGE} = $v;
        }
        if (null !== ($v = $this->getOnsetPeriod())) {
            $out->{self::FIELD_ONSET_PERIOD} = $v;
        }
        if (null !== ($v = $this->getOnsetRange())) {
            $out->{self::FIELD_ONSET_RANGE} = $v;
        }
        if (null !== ($v = $this->getOnsetString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ONSET_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ONSET_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRecordedDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RECORDED_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RECORDED_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRecorder())) {
            $out->{self::FIELD_RECORDER} = $v;
        }
        if (null !== ($v = $this->getAsserter())) {
            $out->{self::FIELD_ASSERTER} = $v;
        }
        if (null !== ($v = $this->getLastOccurrence())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LAST_OCCURRENCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LAST_OCCURRENCE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            $out->{self::FIELD_NOTE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_NOTE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getReaction())) {
            $out->{self::FIELD_REACTION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_REACTION}[] = $v;
            }
        }

        $out->{PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE} = $this->_getResourceType();

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
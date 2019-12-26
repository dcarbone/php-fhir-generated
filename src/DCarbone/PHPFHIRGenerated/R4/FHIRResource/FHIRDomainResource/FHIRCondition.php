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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A clinical condition, problem, diagnosis, or other event, situation, issue, or
 * clinical concept that has risen to a level of concern.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRCondition
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRCondition extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONDITION;
    const FIELD_ABATEMENT_AGE = 'abatementAge';
    const FIELD_ABATEMENT_DATE_TIME = 'abatementDateTime';
    const FIELD_ABATEMENT_DATE_TIME_EXT = '_abatementDateTime';
    const FIELD_ABATEMENT_PERIOD = 'abatementPeriod';
    const FIELD_ABATEMENT_RANGE = 'abatementRange';
    const FIELD_ABATEMENT_STRING = 'abatementString';
    const FIELD_ABATEMENT_STRING_EXT = '_abatementString';
    const FIELD_ASSERTER = 'asserter';
    const FIELD_BODY_SITE = 'bodySite';
    const FIELD_CATEGORY = 'category';
    const FIELD_CLINICAL_STATUS = 'clinicalStatus';
    const FIELD_CODE = 'code';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_EVIDENCE = 'evidence';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_NOTE = 'note';
    const FIELD_ONSET_AGE = 'onsetAge';
    const FIELD_ONSET_DATE_TIME = 'onsetDateTime';
    const FIELD_ONSET_DATE_TIME_EXT = '_onsetDateTime';
    const FIELD_ONSET_PERIOD = 'onsetPeriod';
    const FIELD_ONSET_RANGE = 'onsetRange';
    const FIELD_ONSET_STRING = 'onsetString';
    const FIELD_ONSET_STRING_EXT = '_onsetString';
    const FIELD_RECORDED_DATE = 'recordedDate';
    const FIELD_RECORDED_DATE_EXT = '_recordedDate';
    const FIELD_RECORDER = 'recorder';
    const FIELD_SEVERITY = 'severity';
    const FIELD_STAGE = 'stage';
    const FIELD_SUBJECT = 'subject';
    const FIELD_VERIFICATION_STATUS = 'verificationStatus';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge
     */
    protected $abatementAge = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $abatementDateTime = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    protected $abatementPeriod = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    protected $abatementRange = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $abatementString = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual who is making the condition statement.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $asserter = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The anatomical location where this condition manifests itself.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $bodySite = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A category assigned to the condition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $category = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clinical status of the condition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $clinicalStatus = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identification of the condition, problem or diagnosis.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $code = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Encounter during which this Condition was created or to which the creation
     * of this record is tightly associated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $encounter = null;

    /**
     * A clinical condition, problem, diagnosis, or other event, situation, issue, or
     * clinical concept that has risen to a level of concern.
     *
     * Supporting evidence / manifestations that are the basis of the Condition's
     * verification status, such as evidence that confirmed or refuted the condition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence[]
     */
    protected $evidence = [];

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this condition by the performer or other
     * systems which remain constant as the resource is updated and propagates from
     * server to server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information about the Condition. This is a general notes/comments
     * entry for description of the Condition, its diagnosis and prognosis.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    protected $note = [];

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician. (choose any one of onset*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge
     */
    protected $onsetAge = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician. (choose any one of onset*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $onsetDateTime = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician. (choose any one of onset*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    protected $onsetPeriod = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician. (choose any one of onset*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    protected $onsetRange = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician. (choose any one of onset*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $onsetString = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The recordedDate represents when this particular Condition record was created in
     * the system, which is often a system-generated date.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $recordedDate = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual who recorded the record and takes responsibility for its content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $recorder = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A subjective assessment of the severity of the condition as evaluated by the
     * clinician.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $severity = null;

    /**
     * A clinical condition, problem, diagnosis, or other event, situation, issue, or
     * clinical concept that has risen to a level of concern.
     *
     * Clinical stage or grade of a condition. May include formal severity assessments.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage[]
     */
    protected $stage = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the patient or group who the condition record is associated with.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $subject = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The verification status to support the clinical status of the condition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $verificationStatus = null;

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
        if (isset($data[self::FIELD_ABATEMENT_DATE_TIME]) || isset($data[self::FIELD_ABATEMENT_DATE_TIME_EXT])) {
            if (isset($data[self::FIELD_ABATEMENT_DATE_TIME])) {
                $value = $data[self::FIELD_ABATEMENT_DATE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ABATEMENT_DATE_TIME_EXT]) && is_array($data[self::FIELD_ABATEMENT_DATE_TIME_EXT])) {
                $ext = $data[self::FIELD_ABATEMENT_DATE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setAbatementDateTime($value);
                } else if (is_array($value)) {
                    $this->setAbatementDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setAbatementDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAbatementDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_ABATEMENT_PERIOD])) {
            if ($data[self::FIELD_ABATEMENT_PERIOD] instanceof FHIRPeriod) {
                $this->setAbatementPeriod($data[self::FIELD_ABATEMENT_PERIOD]);
            } else {
                $this->setAbatementPeriod(new FHIRPeriod($data[self::FIELD_ABATEMENT_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_ABATEMENT_RANGE])) {
            if ($data[self::FIELD_ABATEMENT_RANGE] instanceof FHIRRange) {
                $this->setAbatementRange($data[self::FIELD_ABATEMENT_RANGE]);
            } else {
                $this->setAbatementRange(new FHIRRange($data[self::FIELD_ABATEMENT_RANGE]));
            }
        }
        if (isset($data[self::FIELD_ABATEMENT_STRING]) || isset($data[self::FIELD_ABATEMENT_STRING_EXT])) {
            if (isset($data[self::FIELD_ABATEMENT_STRING])) {
                $value = $data[self::FIELD_ABATEMENT_STRING];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ABATEMENT_STRING_EXT]) && is_array($data[self::FIELD_ABATEMENT_STRING_EXT])) {
                $ext = $data[self::FIELD_ABATEMENT_STRING_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setAbatementString($value);
                } else if (is_array($value)) {
                    $this->setAbatementString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setAbatementString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAbatementString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_ASSERTER])) {
            if ($data[self::FIELD_ASSERTER] instanceof FHIRReference) {
                $this->setAsserter($data[self::FIELD_ASSERTER]);
            } else {
                $this->setAsserter(new FHIRReference($data[self::FIELD_ASSERTER]));
            }
        }
        if (isset($data[self::FIELD_BODY_SITE])) {
            if (is_array($data[self::FIELD_BODY_SITE])) {
                foreach($data[self::FIELD_BODY_SITE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addBodySite($v);
                    } else {
                        $this->addBodySite(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_BODY_SITE] instanceof FHIRCodeableConcept) {
                $this->addBodySite($data[self::FIELD_BODY_SITE]);
            } else {
                $this->addBodySite(new FHIRCodeableConcept($data[self::FIELD_BODY_SITE]));
            }
        }
        if (isset($data[self::FIELD_CATEGORY])) {
            if (is_array($data[self::FIELD_CATEGORY])) {
                foreach($data[self::FIELD_CATEGORY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCategory($v);
                    } else {
                        $this->addCategory(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->addCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->addCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
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
        if (isset($data[self::FIELD_ENCOUNTER])) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIRReference($data[self::FIELD_ENCOUNTER]));
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
        if (isset($data[self::FIELD_NOTE])) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_ONSET_DATE_TIME]) || isset($data[self::FIELD_ONSET_DATE_TIME_EXT])) {
            if (isset($data[self::FIELD_ONSET_DATE_TIME])) {
                $value = $data[self::FIELD_ONSET_DATE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ONSET_DATE_TIME_EXT]) && is_array($data[self::FIELD_ONSET_DATE_TIME_EXT])) {
                $ext = $data[self::FIELD_ONSET_DATE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setOnsetDateTime($value);
                } else if (is_array($value)) {
                    $this->setOnsetDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setOnsetDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setOnsetDateTime(new FHIRDateTime($ext));
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
        if (isset($data[self::FIELD_ONSET_STRING]) || isset($data[self::FIELD_ONSET_STRING_EXT])) {
            if (isset($data[self::FIELD_ONSET_STRING])) {
                $value = $data[self::FIELD_ONSET_STRING];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ONSET_STRING_EXT]) && is_array($data[self::FIELD_ONSET_STRING_EXT])) {
                $ext = $data[self::FIELD_ONSET_STRING_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setOnsetString($value);
                } else if (is_array($value)) {
                    $this->setOnsetString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setOnsetString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setOnsetString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_RECORDED_DATE]) || isset($data[self::FIELD_RECORDED_DATE_EXT])) {
            if (isset($data[self::FIELD_RECORDED_DATE])) {
                $value = $data[self::FIELD_RECORDED_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_RECORDED_DATE_EXT]) && is_array($data[self::FIELD_RECORDED_DATE_EXT])) {
                $ext = $data[self::FIELD_RECORDED_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setRecordedDate($value);
                } else if (is_array($value)) {
                    $this->setRecordedDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setRecordedDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setRecordedDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_RECORDER])) {
            if ($data[self::FIELD_RECORDER] instanceof FHIRReference) {
                $this->setRecorder($data[self::FIELD_RECORDER]);
            } else {
                $this->setRecorder(new FHIRReference($data[self::FIELD_RECORDER]));
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
            if (is_array($data[self::FIELD_STAGE])) {
                foreach($data[self::FIELD_STAGE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConditionStage) {
                        $this->addStage($v);
                    } else {
                        $this->addStage(new FHIRConditionStage($v));
                    }
                }
            } else if ($data[self::FIELD_STAGE] instanceof FHIRConditionStage) {
                $this->addStage($data[self::FIELD_STAGE]);
            } else {
                $this->addStage(new FHIRConditionStage($data[self::FIELD_STAGE]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
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
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getAbatementAge()
    {
        return $this->abatementAge;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge $abatementAge
     * @return static
     */
    public function setAbatementAge(FHIRAge $abatementAge = null)
    {
        $this->abatementAge = $abatementAge;
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
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getAbatementDateTime()
    {
        return $this->abatementDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $abatementDateTime
     * @return static
     */
    public function setAbatementDateTime($abatementDateTime = null)
    {
        if (null === $abatementDateTime) {
            $this->abatementDateTime = null;
            return $this;
        }
        if ($abatementDateTime instanceof FHIRDateTime) {
            $this->abatementDateTime = $abatementDateTime;
            return $this;
        }
        $this->abatementDateTime = new FHIRDateTime($abatementDateTime);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getAbatementPeriod()
    {
        return $this->abatementPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $abatementPeriod
     * @return static
     */
    public function setAbatementPeriod(FHIRPeriod $abatementPeriod = null)
    {
        $this->abatementPeriod = $abatementPeriod;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    public function getAbatementRange()
    {
        return $this->abatementRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange $abatementRange
     * @return static
     */
    public function setAbatementRange(FHIRRange $abatementRange = null)
    {
        $this->abatementRange = $abatementRange;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getAbatementString()
    {
        return $this->abatementString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $abatementString
     * @return static
     */
    public function setAbatementString($abatementString = null)
    {
        if (null === $abatementString) {
            $this->abatementString = null;
            return $this;
        }
        if ($abatementString instanceof FHIRString) {
            $this->abatementString = $abatementString;
            return $this;
        }
        $this->abatementString = new FHIRString($abatementString);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual who is making the condition statement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
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
     * Individual who is making the condition statement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $asserter
     * @return static
     */
    public function setAsserter(FHIRReference $asserter = null)
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
     * The anatomical location where this condition manifests itself.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The anatomical location where this condition manifests itself.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $bodySite
     * @return static
     */
    public function addBodySite(FHIRCodeableConcept $bodySite = null)
    {
        $this->bodySite[] = $bodySite;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The anatomical location where this condition manifests itself.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $bodySite
     * @return static
     */
    public function setBodySite(array $bodySite = [])
    {
        $this->bodySite = [];
        if ([] === $bodySite) {
            return $this;
        }
        foreach($bodySite as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addBodySite($v);
            } else {
                $this->addBodySite(new FHIRCodeableConcept($v));
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
     * A category assigned to the condition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
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
     * A category assigned to the condition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $category
     * @return static
     */
    public function addCategory(FHIRCodeableConcept $category = null)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A category assigned to the condition.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $category
     * @return static
     */
    public function setCategory(array $category = [])
    {
        $this->category = [];
        if ([] === $category) {
            return $this;
        }
        foreach($category as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCategory($v);
            } else {
                $this->addCategory(new FHIRCodeableConcept($v));
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
     * The clinical status of the condition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getClinicalStatus()
    {
        return $this->clinicalStatus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clinical status of the condition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $clinicalStatus
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identification of the condition, problem or diagnosis.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Encounter during which this Condition was created or to which the creation
     * of this record is tightly associated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
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
     * The Encounter during which this Condition was created or to which the creation
     * of this record is tightly associated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $encounter
     * @return static
     */
    public function setEncounter(FHIRReference $encounter = null)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * A clinical condition, problem, diagnosis, or other event, situation, issue, or
     * clinical concept that has risen to a level of concern.
     *
     * Supporting evidence / manifestations that are the basis of the Condition's
     * verification status, such as evidence that confirmed or refuted the condition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence[]
     */
    public function getEvidence()
    {
        return $this->evidence;
    }

    /**
     * A clinical condition, problem, diagnosis, or other event, situation, issue, or
     * clinical concept that has risen to a level of concern.
     *
     * Supporting evidence / manifestations that are the basis of the Condition's
     * verification status, such as evidence that confirmed or refuted the condition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence $evidence
     * @return static
     */
    public function addEvidence(FHIRConditionEvidence $evidence = null)
    {
        $this->evidence[] = $evidence;
        return $this;
    }

    /**
     * A clinical condition, problem, diagnosis, or other event, situation, issue, or
     * clinical concept that has risen to a level of concern.
     *
     * Supporting evidence / manifestations that are the basis of the Condition's
     * verification status, such as evidence that confirmed or refuted the condition.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence[] $evidence
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this condition by the performer or other
     * systems which remain constant as the resource is updated and propagates from
     * server to server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
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
     * Business identifiers assigned to this condition by the performer or other
     * systems which remain constant as the resource is updated and propagates from
     * server to server.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this condition by the performer or other
     * systems which remain constant as the resource is updated and propagates from
     * server to server.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
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
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information about the Condition. This is a general notes/comments
     * entry for description of the Condition, its diagnosis and prognosis.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information about the Condition. This is a general notes/comments
     * entry for description of the Condition, its diagnosis and prognosis.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation $note
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information about the Condition. This is a general notes/comments
     * entry for description of the Condition, its diagnosis and prognosis.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[] $note
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician. (choose any one of onset*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getOnsetAge()
    {
        return $this->onsetAge;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician. (choose any one of onset*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRAge $onsetAge
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician. (choose any one of onset*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician. (choose any one of onset*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $onsetDateTime
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician. (choose any one of onset*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getOnsetPeriod()
    {
        return $this->onsetPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician. (choose any one of onset*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $onsetPeriod
     * @return static
     */
    public function setOnsetPeriod(FHIRPeriod $onsetPeriod = null)
    {
        $this->onsetPeriod = $onsetPeriod;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician. (choose any one of onset*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    public function getOnsetRange()
    {
        return $this->onsetRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician. (choose any one of onset*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange $onsetRange
     * @return static
     */
    public function setOnsetRange(FHIRRange $onsetRange = null)
    {
        $this->onsetRange = $onsetRange;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician. (choose any one of onset*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getOnsetString()
    {
        return $this->onsetString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician. (choose any one of onset*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $onsetString
     * @return static
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The recordedDate represents when this particular Condition record was created in
     * the system, which is often a system-generated date.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The recordedDate represents when this particular Condition record was created in
     * the system, which is often a system-generated date.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $recordedDate
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual who recorded the record and takes responsibility for its content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getRecorder()
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
    public function setRecorder(FHIRReference $recorder = null)
    {
        $this->recorder = $recorder;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $severity
     * @return static
     */
    public function setSeverity(FHIRCodeableConcept $severity = null)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * A clinical condition, problem, diagnosis, or other event, situation, issue, or
     * clinical concept that has risen to a level of concern.
     *
     * Clinical stage or grade of a condition. May include formal severity assessments.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage[]
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * A clinical condition, problem, diagnosis, or other event, situation, issue, or
     * clinical concept that has risen to a level of concern.
     *
     * Clinical stage or grade of a condition. May include formal severity assessments.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage $stage
     * @return static
     */
    public function addStage(FHIRConditionStage $stage = null)
    {
        $this->stage[] = $stage;
        return $this;
    }

    /**
     * A clinical condition, problem, diagnosis, or other event, situation, issue, or
     * clinical concept that has risen to a level of concern.
     *
     * Clinical stage or grade of a condition. May include formal severity assessments.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage[] $stage
     * @return static
     */
    public function setStage(array $stage = [])
    {
        $this->stage = [];
        if ([] === $stage) {
            return $this;
        }
        foreach($stage as $v) {
            if ($v instanceof FHIRConditionStage) {
                $this->addStage($v);
            } else {
                $this->addStage(new FHIRConditionStage($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the patient or group who the condition record is associated with.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
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
     * Indicates the patient or group who the condition record is associated with.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function setSubject(FHIRReference $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The verification status to support the clinical status of the condition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getVerificationStatus()
    {
        return $this->verificationStatus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The verification status to support the clinical status of the condition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $verificationStatus
     * @return static
     */
    public function setVerificationStatus(FHIRCodeableConcept $verificationStatus = null)
    {
        $this->verificationStatus = $verificationStatus;
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
        if (null !== ($v = $this->getAbatementDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ABATEMENT_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAbatementPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ABATEMENT_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAbatementRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ABATEMENT_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAbatementString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ABATEMENT_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAsserter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ASSERTER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getBodySite())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_BODY_SITE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CATEGORY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getClinicalStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CLINICAL_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
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
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getOnsetAge())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ONSET_AGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOnsetDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ONSET_DATE_TIME] = $fieldErrs;
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
        if (null !== ($v = $this->getSeverity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEVERITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getStage())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_STAGE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVerificationStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERIFICATION_STATUS] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_ABATEMENT_DATE_TIME])) {
            $v = $this->getAbatementDateTime();
            foreach($validationRules[self::FIELD_ABATEMENT_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ABATEMENT_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ABATEMENT_DATE_TIME])) {
                        $errs[self::FIELD_ABATEMENT_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_ABATEMENT_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ABATEMENT_PERIOD])) {
            $v = $this->getAbatementPeriod();
            foreach($validationRules[self::FIELD_ABATEMENT_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ABATEMENT_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ABATEMENT_PERIOD])) {
                        $errs[self::FIELD_ABATEMENT_PERIOD] = [];
                    }
                    $errs[self::FIELD_ABATEMENT_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ABATEMENT_RANGE])) {
            $v = $this->getAbatementRange();
            foreach($validationRules[self::FIELD_ABATEMENT_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ABATEMENT_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ABATEMENT_RANGE])) {
                        $errs[self::FIELD_ABATEMENT_RANGE] = [];
                    }
                    $errs[self::FIELD_ABATEMENT_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ABATEMENT_STRING])) {
            $v = $this->getAbatementString();
            foreach($validationRules[self::FIELD_ABATEMENT_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ABATEMENT_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ABATEMENT_STRING])) {
                        $errs[self::FIELD_ABATEMENT_STRING] = [];
                    }
                    $errs[self::FIELD_ABATEMENT_STRING][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_BODY_SITE])) {
            $v = $this->getBodySite();
            foreach($validationRules[self::FIELD_BODY_SITE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_BODY_SITE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BODY_SITE])) {
                        $errs[self::FIELD_BODY_SITE] = [];
                    }
                    $errs[self::FIELD_BODY_SITE][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_CLINICAL_STATUS])) {
            $v = $this->getClinicalStatus();
            foreach($validationRules[self::FIELD_CLINICAL_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_CLINICAL_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLINICAL_STATUS])) {
                        $errs[self::FIELD_CLINICAL_STATUS] = [];
                    }
                    $errs[self::FIELD_CLINICAL_STATUS][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_ONSET_DATE_TIME])) {
            $v = $this->getOnsetDateTime();
            foreach($validationRules[self::FIELD_ONSET_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ONSET_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ONSET_DATE_TIME])) {
                        $errs[self::FIELD_ONSET_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_ONSET_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ONSET_PERIOD])) {
            $v = $this->getOnsetPeriod();
            foreach($validationRules[self::FIELD_ONSET_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ONSET_PERIOD, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ONSET_RANGE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_ONSET_STRING, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_RECORDED_DATE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_RECORDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECORDER])) {
                        $errs[self::FIELD_RECORDER] = [];
                    }
                    $errs[self::FIELD_RECORDER][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_VERIFICATION_STATUS])) {
            $v = $this->getVerificationStatus();
            foreach($validationRules[self::FIELD_VERIFICATION_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONDITION, self::FIELD_VERIFICATION_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERIFICATION_STATUS])) {
                        $errs[self::FIELD_VERIFICATION_STATUS] = [];
                    }
                    $errs[self::FIELD_VERIFICATION_STATUS][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCondition $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCondition
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
                'FHIRCondition::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCondition or null, %s seen.',
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
        if (isset($children->abatementAge)) {
            $type->setAbatementAge(FHIRAge::xmlUnserialize($children->abatementAge));
        }
        if (isset($children->abatementDateTime)) {
            $type->setAbatementDateTime(FHIRDateTime::xmlUnserialize($children->abatementDateTime));
        }
        if (isset($attributes->abatementDateTime)) {
            $pt = $type->getAbatementDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->abatementDateTime);
            } else {
                $type->setAbatementDateTime((string)$attributes->abatementDateTime);
            }
        }
        if (isset($children->abatementPeriod)) {
            $type->setAbatementPeriod(FHIRPeriod::xmlUnserialize($children->abatementPeriod));
        }
        if (isset($children->abatementRange)) {
            $type->setAbatementRange(FHIRRange::xmlUnserialize($children->abatementRange));
        }
        if (isset($children->abatementString)) {
            $type->setAbatementString(FHIRString::xmlUnserialize($children->abatementString));
        }
        if (isset($attributes->abatementString)) {
            $pt = $type->getAbatementString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->abatementString);
            } else {
                $type->setAbatementString((string)$attributes->abatementString);
            }
        }
        if (isset($children->asserter)) {
            $type->setAsserter(FHIRReference::xmlUnserialize($children->asserter));
        }
        if (isset($children->bodySite)) {
            foreach($children->bodySite as $child) {
                $type->addBodySite(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->category)) {
            foreach($children->category as $child) {
                $type->addCategory(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->clinicalStatus)) {
            $type->setClinicalStatus(FHIRCodeableConcept::xmlUnserialize($children->clinicalStatus));
        }
        if (isset($children->code)) {
            $type->setCode(FHIRCodeableConcept::xmlUnserialize($children->code));
        }
        if (isset($children->encounter)) {
            $type->setEncounter(FHIRReference::xmlUnserialize($children->encounter));
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
        if (isset($children->note)) {
            foreach($children->note as $child) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($child));
            }
        }
        if (isset($children->onsetAge)) {
            $type->setOnsetAge(FHIRAge::xmlUnserialize($children->onsetAge));
        }
        if (isset($children->onsetDateTime)) {
            $type->setOnsetDateTime(FHIRDateTime::xmlUnserialize($children->onsetDateTime));
        }
        if (isset($attributes->onsetDateTime)) {
            $pt = $type->getOnsetDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->onsetDateTime);
            } else {
                $type->setOnsetDateTime((string)$attributes->onsetDateTime);
            }
        }
        if (isset($children->onsetPeriod)) {
            $type->setOnsetPeriod(FHIRPeriod::xmlUnserialize($children->onsetPeriod));
        }
        if (isset($children->onsetRange)) {
            $type->setOnsetRange(FHIRRange::xmlUnserialize($children->onsetRange));
        }
        if (isset($children->onsetString)) {
            $type->setOnsetString(FHIRString::xmlUnserialize($children->onsetString));
        }
        if (isset($attributes->onsetString)) {
            $pt = $type->getOnsetString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->onsetString);
            } else {
                $type->setOnsetString((string)$attributes->onsetString);
            }
        }
        if (isset($children->recordedDate)) {
            $type->setRecordedDate(FHIRDateTime::xmlUnserialize($children->recordedDate));
        }
        if (isset($attributes->recordedDate)) {
            $pt = $type->getRecordedDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->recordedDate);
            } else {
                $type->setRecordedDate((string)$attributes->recordedDate);
            }
        }
        if (isset($children->recorder)) {
            $type->setRecorder(FHIRReference::xmlUnserialize($children->recorder));
        }
        if (isset($children->severity)) {
            $type->setSeverity(FHIRCodeableConcept::xmlUnserialize($children->severity));
        }
        if (isset($children->stage)) {
            foreach($children->stage as $child) {
                $type->addStage(FHIRConditionStage::xmlUnserialize($child));
            }
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRReference::xmlUnserialize($children->subject));
        }
        if (isset($children->verificationStatus)) {
            $type->setVerificationStatus(FHIRCodeableConcept::xmlUnserialize($children->verificationStatus));
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
        if (null !== ($v = $this->getAbatementDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ABATEMENT_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAbatementPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ABATEMENT_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAbatementRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ABATEMENT_RANGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAbatementString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ABATEMENT_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAsserter())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ASSERTER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getBodySite())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_BODY_SITE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getClinicalStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CLINICAL_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOTE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getOnsetAge())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ONSET_AGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOnsetDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ONSET_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOnsetPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ONSET_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOnsetRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ONSET_RANGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOnsetString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ONSET_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRecordedDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RECORDED_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRecorder())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RECORDER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSeverity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SEVERITY, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getStage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_STAGE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getVerificationStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VERIFICATION_STATUS, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getAbatementDateTime())) {
            $a[self::FIELD_ABATEMENT_DATE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_ABATEMENT_DATE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getAbatementPeriod())) {
            $a[self::FIELD_ABATEMENT_PERIOD] = $v;
        }
        if (null !== ($v = $this->getAbatementRange())) {
            $a[self::FIELD_ABATEMENT_RANGE] = $v;
        }
        if (null !== ($v = $this->getAbatementString())) {
            $a[self::FIELD_ABATEMENT_STRING] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_ABATEMENT_STRING_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getAsserter())) {
            $a[self::FIELD_ASSERTER] = $v;
        }
        if ([] !== ($vs = $this->getBodySite())) {
            $a[self::FIELD_BODY_SITE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_BODY_SITE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getCategory())) {
            $a[self::FIELD_CATEGORY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CATEGORY][] = $v;
            }
        }
        if (null !== ($v = $this->getClinicalStatus())) {
            $a[self::FIELD_CLINICAL_STATUS] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
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
        if ([] !== ($vs = $this->getNote())) {
            $a[self::FIELD_NOTE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_NOTE][] = $v;
            }
        }
        if (null !== ($v = $this->getOnsetAge())) {
            $a[self::FIELD_ONSET_AGE] = $v;
        }
        if (null !== ($v = $this->getOnsetDateTime())) {
            $a[self::FIELD_ONSET_DATE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_ONSET_DATE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getOnsetPeriod())) {
            $a[self::FIELD_ONSET_PERIOD] = $v;
        }
        if (null !== ($v = $this->getOnsetRange())) {
            $a[self::FIELD_ONSET_RANGE] = $v;
        }
        if (null !== ($v = $this->getOnsetString())) {
            $a[self::FIELD_ONSET_STRING] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_ONSET_STRING_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getRecordedDate())) {
            $a[self::FIELD_RECORDED_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_RECORDED_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getRecorder())) {
            $a[self::FIELD_RECORDER] = $v;
        }
        if (null !== ($v = $this->getSeverity())) {
            $a[self::FIELD_SEVERITY] = $v;
        }
        if ([] !== ($vs = $this->getStage())) {
            $a[self::FIELD_STAGE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_STAGE][] = $v;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if (null !== ($v = $this->getVerificationStatus())) {
            $a[self::FIELD_VERIFICATION_STATUS] = $v;
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
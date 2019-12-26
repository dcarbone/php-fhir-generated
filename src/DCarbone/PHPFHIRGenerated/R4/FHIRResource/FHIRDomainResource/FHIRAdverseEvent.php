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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAdverseEventActuality;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Actual or potential/avoided event causing unintended physical injury resulting
 * from or contributed to by medical care, a research study or other healthcare
 * setting factors that requires additional monitoring, treatment, or
 * hospitalization, or that results in death.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRAdverseEvent
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRAdverseEvent extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT;
    const FIELD_ACTUALITY = 'actuality';
    const FIELD_ACTUALITY_EXT = '_actuality';
    const FIELD_CATEGORY = 'category';
    const FIELD_CONTRIBUTOR = 'contributor';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_DETECTED = 'detected';
    const FIELD_DETECTED_EXT = '_detected';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_EVENT = 'event';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_LOCATION = 'location';
    const FIELD_OUTCOME = 'outcome';
    const FIELD_RECORDED_DATE = 'recordedDate';
    const FIELD_RECORDED_DATE_EXT = '_recordedDate';
    const FIELD_RECORDER = 'recorder';
    const FIELD_REFERENCE_DOCUMENT = 'referenceDocument';
    const FIELD_RESULTING_CONDITION = 'resultingCondition';
    const FIELD_SERIOUSNESS = 'seriousness';
    const FIELD_SEVERITY = 'severity';
    const FIELD_STUDY = 'study';
    const FIELD_SUBJECT = 'subject';
    const FIELD_SUBJECT_MEDICAL_HISTORY = 'subjectMedicalHistory';
    const FIELD_SUSPECT_ENTITY = 'suspectEntity';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * Overall nature of the adverse event, e.g. real or potential.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the event actually happened, or just had the potential to. Note that
     * this is independent of whether anyone was affected or harmed or how severely.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAdverseEventActuality
     */
    protected $actuality = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The overall type of event, intended for search and filtering purposes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $category = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Parties that may or should contribute or have contributed information to the
     * adverse event, which can consist of one or more activities. Such information
     * includes information leading to the decision to perform the activity and how to
     * perform the activity (e.g. consultant), information that the activity itself
     * seeks to reveal (e.g. informant of clinical history), or information about what
     * activity was performed (e.g. informant witness).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $contributor = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and perhaps time) when the adverse event occurred.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $date = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date the AdverseEvent began, in the opinion of the reporter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $detected = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Encounter during which AdverseEvent was created or to which the creation of
     * this record is tightly associated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $encounter = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This element defines the specific type of event that occurred or that was
     * prevented from occurring.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $event = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this adverse event by the performer or other
     * systems which remain constant as the resource is updated and propagates from
     * server to server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    protected $identifier = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information about where the adverse event occurred.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $location = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the type of outcome from the adverse event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $outcome = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the existence of the AdverseEvent was first recorded.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $recordedDate = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information on who recorded the adverse event. May be the patient or a
     * practitioner.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $recorder = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * AdverseEvent.referenceDocument.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $referenceDocument = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Includes information about the reaction that occurred as a result of exposure to
     * a substance (for example, a drug or a chemical).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $resultingCondition = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Assessment whether this event was of real importance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $seriousness = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the severity of the adverse event, in relation to the subject.
     * Contrast to AdverseEvent.seriousness - a severe rash might not be serious, but a
     * mild heart problem is.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $severity = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * AdverseEvent.study.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $study = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This subject or group impacted by the event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $subject = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * AdverseEvent.subjectMedicalHistory.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $subjectMedicalHistory = [];

    /**
     * Actual or potential/avoided event causing unintended physical injury resulting
     * from or contributed to by medical care, a research study or other healthcare
     * setting factors that requires additional monitoring, treatment, or
     * hospitalization, or that results in death.
     *
     * Describes the entity that is suspected to have caused the adverse event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity[]
     */
    protected $suspectEntity = [];

    /**
     * Validation map for fields in type AdverseEvent
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRAdverseEvent Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAdverseEvent::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACTUALITY]) || isset($data[self::FIELD_ACTUALITY_EXT])) {
            if (isset($data[self::FIELD_ACTUALITY])) {
                $value = $data[self::FIELD_ACTUALITY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ACTUALITY_EXT]) && is_array($data[self::FIELD_ACTUALITY_EXT])) {
                $ext = $data[self::FIELD_ACTUALITY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRAdverseEventActuality) {
                    $this->setActuality($value);
                } else if (is_array($value)) {
                    $this->setActuality(new FHIRAdverseEventActuality(array_merge($ext, $value)));
                } else {
                    $this->setActuality(new FHIRAdverseEventActuality([FHIRAdverseEventActuality::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setActuality(new FHIRAdverseEventActuality($ext));
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
        if (isset($data[self::FIELD_CONTRIBUTOR])) {
            if (is_array($data[self::FIELD_CONTRIBUTOR])) {
                foreach($data[self::FIELD_CONTRIBUTOR] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addContributor($v);
                    } else {
                        $this->addContributor(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_CONTRIBUTOR] instanceof FHIRReference) {
                $this->addContributor($data[self::FIELD_CONTRIBUTOR]);
            } else {
                $this->addContributor(new FHIRReference($data[self::FIELD_CONTRIBUTOR]));
            }
        }
        if (isset($data[self::FIELD_DATE]) || isset($data[self::FIELD_DATE_EXT])) {
            if (isset($data[self::FIELD_DATE])) {
                $value = $data[self::FIELD_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT])) {
                $ext = $data[self::FIELD_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDate($value);
                } else if (is_array($value)) {
                    $this->setDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_DETECTED]) || isset($data[self::FIELD_DETECTED_EXT])) {
            if (isset($data[self::FIELD_DETECTED])) {
                $value = $data[self::FIELD_DETECTED];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DETECTED_EXT]) && is_array($data[self::FIELD_DETECTED_EXT])) {
                $ext = $data[self::FIELD_DETECTED_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDetected($value);
                } else if (is_array($value)) {
                    $this->setDetected(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDetected(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDetected(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_ENCOUNTER])) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIRReference($data[self::FIELD_ENCOUNTER]));
            }
        }
        if (isset($data[self::FIELD_EVENT])) {
            if ($data[self::FIELD_EVENT] instanceof FHIRCodeableConcept) {
                $this->setEvent($data[self::FIELD_EVENT]);
            } else {
                $this->setEvent(new FHIRCodeableConcept($data[self::FIELD_EVENT]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_LOCATION])) {
            if ($data[self::FIELD_LOCATION] instanceof FHIRReference) {
                $this->setLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->setLocation(new FHIRReference($data[self::FIELD_LOCATION]));
            }
        }
        if (isset($data[self::FIELD_OUTCOME])) {
            if ($data[self::FIELD_OUTCOME] instanceof FHIRCodeableConcept) {
                $this->setOutcome($data[self::FIELD_OUTCOME]);
            } else {
                $this->setOutcome(new FHIRCodeableConcept($data[self::FIELD_OUTCOME]));
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
        if (isset($data[self::FIELD_REFERENCE_DOCUMENT])) {
            if (is_array($data[self::FIELD_REFERENCE_DOCUMENT])) {
                foreach($data[self::FIELD_REFERENCE_DOCUMENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addReferenceDocument($v);
                    } else {
                        $this->addReferenceDocument(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_REFERENCE_DOCUMENT] instanceof FHIRReference) {
                $this->addReferenceDocument($data[self::FIELD_REFERENCE_DOCUMENT]);
            } else {
                $this->addReferenceDocument(new FHIRReference($data[self::FIELD_REFERENCE_DOCUMENT]));
            }
        }
        if (isset($data[self::FIELD_RESULTING_CONDITION])) {
            if (is_array($data[self::FIELD_RESULTING_CONDITION])) {
                foreach($data[self::FIELD_RESULTING_CONDITION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addResultingCondition($v);
                    } else {
                        $this->addResultingCondition(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_RESULTING_CONDITION] instanceof FHIRReference) {
                $this->addResultingCondition($data[self::FIELD_RESULTING_CONDITION]);
            } else {
                $this->addResultingCondition(new FHIRReference($data[self::FIELD_RESULTING_CONDITION]));
            }
        }
        if (isset($data[self::FIELD_SERIOUSNESS])) {
            if ($data[self::FIELD_SERIOUSNESS] instanceof FHIRCodeableConcept) {
                $this->setSeriousness($data[self::FIELD_SERIOUSNESS]);
            } else {
                $this->setSeriousness(new FHIRCodeableConcept($data[self::FIELD_SERIOUSNESS]));
            }
        }
        if (isset($data[self::FIELD_SEVERITY])) {
            if ($data[self::FIELD_SEVERITY] instanceof FHIRCodeableConcept) {
                $this->setSeverity($data[self::FIELD_SEVERITY]);
            } else {
                $this->setSeverity(new FHIRCodeableConcept($data[self::FIELD_SEVERITY]));
            }
        }
        if (isset($data[self::FIELD_STUDY])) {
            if (is_array($data[self::FIELD_STUDY])) {
                foreach($data[self::FIELD_STUDY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addStudy($v);
                    } else {
                        $this->addStudy(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_STUDY] instanceof FHIRReference) {
                $this->addStudy($data[self::FIELD_STUDY]);
            } else {
                $this->addStudy(new FHIRReference($data[self::FIELD_STUDY]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT_MEDICAL_HISTORY])) {
            if (is_array($data[self::FIELD_SUBJECT_MEDICAL_HISTORY])) {
                foreach($data[self::FIELD_SUBJECT_MEDICAL_HISTORY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addSubjectMedicalHistory($v);
                    } else {
                        $this->addSubjectMedicalHistory(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_SUBJECT_MEDICAL_HISTORY] instanceof FHIRReference) {
                $this->addSubjectMedicalHistory($data[self::FIELD_SUBJECT_MEDICAL_HISTORY]);
            } else {
                $this->addSubjectMedicalHistory(new FHIRReference($data[self::FIELD_SUBJECT_MEDICAL_HISTORY]));
            }
        }
        if (isset($data[self::FIELD_SUSPECT_ENTITY])) {
            if (is_array($data[self::FIELD_SUSPECT_ENTITY])) {
                foreach($data[self::FIELD_SUSPECT_ENTITY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRAdverseEventSuspectEntity) {
                        $this->addSuspectEntity($v);
                    } else {
                        $this->addSuspectEntity(new FHIRAdverseEventSuspectEntity($v));
                    }
                }
            } else if ($data[self::FIELD_SUSPECT_ENTITY] instanceof FHIRAdverseEventSuspectEntity) {
                $this->addSuspectEntity($data[self::FIELD_SUSPECT_ENTITY]);
            } else {
                $this->addSuspectEntity(new FHIRAdverseEventSuspectEntity($data[self::FIELD_SUSPECT_ENTITY]));
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
        return "<AdverseEvent{$xmlns}></AdverseEvent>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * Overall nature of the adverse event, e.g. real or potential.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the event actually happened, or just had the potential to. Note that
     * this is independent of whether anyone was affected or harmed or how severely.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAdverseEventActuality
     */
    public function getActuality()
    {
        return $this->actuality;
    }

    /**
     * Overall nature of the adverse event, e.g. real or potential.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the event actually happened, or just had the potential to. Note that
     * this is independent of whether anyone was affected or harmed or how severely.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAdverseEventActuality $actuality
     * @return static
     */
    public function setActuality(FHIRAdverseEventActuality $actuality = null)
    {
        $this->actuality = $actuality;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The overall type of event, intended for search and filtering purposes.
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
     * The overall type of event, intended for search and filtering purposes.
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
     * The overall type of event, intended for search and filtering purposes.
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Parties that may or should contribute or have contributed information to the
     * adverse event, which can consist of one or more activities. Such information
     * includes information leading to the decision to perform the activity and how to
     * perform the activity (e.g. consultant), information that the activity itself
     * seeks to reveal (e.g. informant of clinical history), or information about what
     * activity was performed (e.g. informant witness).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Parties that may or should contribute or have contributed information to the
     * adverse event, which can consist of one or more activities. Such information
     * includes information leading to the decision to perform the activity and how to
     * perform the activity (e.g. consultant), information that the activity itself
     * seeks to reveal (e.g. informant of clinical history), or information about what
     * activity was performed (e.g. informant witness).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $contributor
     * @return static
     */
    public function addContributor(FHIRReference $contributor = null)
    {
        $this->contributor[] = $contributor;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Parties that may or should contribute or have contributed information to the
     * adverse event, which can consist of one or more activities. Such information
     * includes information leading to the decision to perform the activity and how to
     * perform the activity (e.g. consultant), information that the activity itself
     * seeks to reveal (e.g. informant of clinical history), or information about what
     * activity was performed (e.g. informant witness).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $contributor
     * @return static
     */
    public function setContributor(array $contributor = [])
    {
        $this->contributor = [];
        if ([] === $contributor) {
            return $this;
        }
        foreach($contributor as $v) {
            if ($v instanceof FHIRReference) {
                $this->addContributor($v);
            } else {
                $this->addContributor(new FHIRReference($v));
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and perhaps time) when the adverse event occurred.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and perhaps time) when the adverse event occurred.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $date
     * @return static
     */
    public function setDate($date = null)
    {
        if (null === $date) {
            $this->date = null;
            return $this;
        }
        if ($date instanceof FHIRDateTime) {
            $this->date = $date;
            return $this;
        }
        $this->date = new FHIRDateTime($date);
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
     * Estimated or actual date the AdverseEvent began, in the opinion of the reporter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getDetected()
    {
        return $this->detected;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date the AdverseEvent began, in the opinion of the reporter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $detected
     * @return static
     */
    public function setDetected($detected = null)
    {
        if (null === $detected) {
            $this->detected = null;
            return $this;
        }
        if ($detected instanceof FHIRDateTime) {
            $this->detected = $detected;
            return $this;
        }
        $this->detected = new FHIRDateTime($detected);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Encounter during which AdverseEvent was created or to which the creation of
     * this record is tightly associated.
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
     * The Encounter during which AdverseEvent was created or to which the creation of
     * this record is tightly associated.
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This element defines the specific type of event that occurred or that was
     * prevented from occurring.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This element defines the specific type of event that occurred or that was
     * prevented from occurring.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $event
     * @return static
     */
    public function setEvent(FHIRCodeableConcept $event = null)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this adverse event by the performer or other
     * systems which remain constant as the resource is updated and propagates from
     * server to server.
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
     * Business identifiers assigned to this adverse event by the performer or other
     * systems which remain constant as the resource is updated and propagates from
     * server to server.
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information about where the adverse event occurred.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information about where the adverse event occurred.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $location
     * @return static
     */
    public function setLocation(FHIRReference $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the type of outcome from the adverse event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the type of outcome from the adverse event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $outcome
     * @return static
     */
    public function setOutcome(FHIRCodeableConcept $outcome = null)
    {
        $this->outcome = $outcome;
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
     * The date on which the existence of the AdverseEvent was first recorded.
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
     * The date on which the existence of the AdverseEvent was first recorded.
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
     * Information on who recorded the adverse event. May be the patient or a
     * practitioner.
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
     * Information on who recorded the adverse event. May be the patient or a
     * practitioner.
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * AdverseEvent.referenceDocument.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getReferenceDocument()
    {
        return $this->referenceDocument;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * AdverseEvent.referenceDocument.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $referenceDocument
     * @return static
     */
    public function addReferenceDocument(FHIRReference $referenceDocument = null)
    {
        $this->referenceDocument[] = $referenceDocument;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * AdverseEvent.referenceDocument.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $referenceDocument
     * @return static
     */
    public function setReferenceDocument(array $referenceDocument = [])
    {
        $this->referenceDocument = [];
        if ([] === $referenceDocument) {
            return $this;
        }
        foreach($referenceDocument as $v) {
            if ($v instanceof FHIRReference) {
                $this->addReferenceDocument($v);
            } else {
                $this->addReferenceDocument(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Includes information about the reaction that occurred as a result of exposure to
     * a substance (for example, a drug or a chemical).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getResultingCondition()
    {
        return $this->resultingCondition;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Includes information about the reaction that occurred as a result of exposure to
     * a substance (for example, a drug or a chemical).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $resultingCondition
     * @return static
     */
    public function addResultingCondition(FHIRReference $resultingCondition = null)
    {
        $this->resultingCondition[] = $resultingCondition;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Includes information about the reaction that occurred as a result of exposure to
     * a substance (for example, a drug or a chemical).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $resultingCondition
     * @return static
     */
    public function setResultingCondition(array $resultingCondition = [])
    {
        $this->resultingCondition = [];
        if ([] === $resultingCondition) {
            return $this;
        }
        foreach($resultingCondition as $v) {
            if ($v instanceof FHIRReference) {
                $this->addResultingCondition($v);
            } else {
                $this->addResultingCondition(new FHIRReference($v));
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
     * Assessment whether this event was of real importance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getSeriousness()
    {
        return $this->seriousness;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Assessment whether this event was of real importance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $seriousness
     * @return static
     */
    public function setSeriousness(FHIRCodeableConcept $seriousness = null)
    {
        $this->seriousness = $seriousness;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the severity of the adverse event, in relation to the subject.
     * Contrast to AdverseEvent.seriousness - a severe rash might not be serious, but a
     * mild heart problem is.
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
     * Describes the severity of the adverse event, in relation to the subject.
     * Contrast to AdverseEvent.seriousness - a severe rash might not be serious, but a
     * mild heart problem is.
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * AdverseEvent.study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getStudy()
    {
        return $this->study;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * AdverseEvent.study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $study
     * @return static
     */
    public function addStudy(FHIRReference $study = null)
    {
        $this->study[] = $study;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * AdverseEvent.study.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $study
     * @return static
     */
    public function setStudy(array $study = [])
    {
        $this->study = [];
        if ([] === $study) {
            return $this;
        }
        foreach($study as $v) {
            if ($v instanceof FHIRReference) {
                $this->addStudy($v);
            } else {
                $this->addStudy(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This subject or group impacted by the event.
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
     * This subject or group impacted by the event.
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * AdverseEvent.subjectMedicalHistory.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getSubjectMedicalHistory()
    {
        return $this->subjectMedicalHistory;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * AdverseEvent.subjectMedicalHistory.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $subjectMedicalHistory
     * @return static
     */
    public function addSubjectMedicalHistory(FHIRReference $subjectMedicalHistory = null)
    {
        $this->subjectMedicalHistory[] = $subjectMedicalHistory;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * AdverseEvent.subjectMedicalHistory.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $subjectMedicalHistory
     * @return static
     */
    public function setSubjectMedicalHistory(array $subjectMedicalHistory = [])
    {
        $this->subjectMedicalHistory = [];
        if ([] === $subjectMedicalHistory) {
            return $this;
        }
        foreach($subjectMedicalHistory as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSubjectMedicalHistory($v);
            } else {
                $this->addSubjectMedicalHistory(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * Actual or potential/avoided event causing unintended physical injury resulting
     * from or contributed to by medical care, a research study or other healthcare
     * setting factors that requires additional monitoring, treatment, or
     * hospitalization, or that results in death.
     *
     * Describes the entity that is suspected to have caused the adverse event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity[]
     */
    public function getSuspectEntity()
    {
        return $this->suspectEntity;
    }

    /**
     * Actual or potential/avoided event causing unintended physical injury resulting
     * from or contributed to by medical care, a research study or other healthcare
     * setting factors that requires additional monitoring, treatment, or
     * hospitalization, or that results in death.
     *
     * Describes the entity that is suspected to have caused the adverse event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity $suspectEntity
     * @return static
     */
    public function addSuspectEntity(FHIRAdverseEventSuspectEntity $suspectEntity = null)
    {
        $this->suspectEntity[] = $suspectEntity;
        return $this;
    }

    /**
     * Actual or potential/avoided event causing unintended physical injury resulting
     * from or contributed to by medical care, a research study or other healthcare
     * setting factors that requires additional monitoring, treatment, or
     * hospitalization, or that results in death.
     *
     * Describes the entity that is suspected to have caused the adverse event.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity[] $suspectEntity
     * @return static
     */
    public function setSuspectEntity(array $suspectEntity = [])
    {
        $this->suspectEntity = [];
        if ([] === $suspectEntity) {
            return $this;
        }
        foreach($suspectEntity as $v) {
            if ($v instanceof FHIRAdverseEventSuspectEntity) {
                $this->addSuspectEntity($v);
            } else {
                $this->addSuspectEntity(new FHIRAdverseEventSuspectEntity($v));
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
        if (null !== ($v = $this->getActuality())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACTUALITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CATEGORY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getContributor())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTRIBUTOR, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDetected())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DETECTED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENCOUNTER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEvent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EVENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLocation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOCATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOutcome())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OUTCOME] = $fieldErrs;
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
        if ([] !== ($vs = $this->getReferenceDocument())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REFERENCE_DOCUMENT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getResultingCondition())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RESULTING_CONDITION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSeriousness())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERIOUSNESS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSeverity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEVERITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getStudy())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_STUDY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSubjectMedicalHistory())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUBJECT_MEDICAL_HISTORY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSuspectEntity())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUSPECT_ENTITY, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACTUALITY])) {
            $v = $this->getActuality();
            foreach($validationRules[self::FIELD_ACTUALITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_ACTUALITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTUALITY])) {
                        $errs[self::FIELD_ACTUALITY] = [];
                    }
                    $errs[self::FIELD_ACTUALITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTRIBUTOR])) {
            $v = $this->getContributor();
            foreach($validationRules[self::FIELD_CONTRIBUTOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_CONTRIBUTOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTRIBUTOR])) {
                        $errs[self::FIELD_CONTRIBUTOR] = [];
                    }
                    $errs[self::FIELD_CONTRIBUTOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE])) {
            $v = $this->getDate();
            foreach($validationRules[self::FIELD_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE])) {
                        $errs[self::FIELD_DATE] = [];
                    }
                    $errs[self::FIELD_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETECTED])) {
            $v = $this->getDetected();
            foreach($validationRules[self::FIELD_DETECTED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_DETECTED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETECTED])) {
                        $errs[self::FIELD_DETECTED] = [];
                    }
                    $errs[self::FIELD_DETECTED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENCOUNTER])) {
            $v = $this->getEncounter();
            foreach($validationRules[self::FIELD_ENCOUNTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCOUNTER])) {
                        $errs[self::FIELD_ENCOUNTER] = [];
                    }
                    $errs[self::FIELD_ENCOUNTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EVENT])) {
            $v = $this->getEvent();
            foreach($validationRules[self::FIELD_EVENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_EVENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EVENT])) {
                        $errs[self::FIELD_EVENT] = [];
                    }
                    $errs[self::FIELD_EVENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION])) {
                        $errs[self::FIELD_LOCATION] = [];
                    }
                    $errs[self::FIELD_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OUTCOME])) {
            $v = $this->getOutcome();
            foreach($validationRules[self::FIELD_OUTCOME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_OUTCOME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OUTCOME])) {
                        $errs[self::FIELD_OUTCOME] = [];
                    }
                    $errs[self::FIELD_OUTCOME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RECORDED_DATE])) {
            $v = $this->getRecordedDate();
            foreach($validationRules[self::FIELD_RECORDED_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_RECORDED_DATE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_RECORDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECORDER])) {
                        $errs[self::FIELD_RECORDER] = [];
                    }
                    $errs[self::FIELD_RECORDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE_DOCUMENT])) {
            $v = $this->getReferenceDocument();
            foreach($validationRules[self::FIELD_REFERENCE_DOCUMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_REFERENCE_DOCUMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE_DOCUMENT])) {
                        $errs[self::FIELD_REFERENCE_DOCUMENT] = [];
                    }
                    $errs[self::FIELD_REFERENCE_DOCUMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESULTING_CONDITION])) {
            $v = $this->getResultingCondition();
            foreach($validationRules[self::FIELD_RESULTING_CONDITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_RESULTING_CONDITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESULTING_CONDITION])) {
                        $errs[self::FIELD_RESULTING_CONDITION] = [];
                    }
                    $errs[self::FIELD_RESULTING_CONDITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERIOUSNESS])) {
            $v = $this->getSeriousness();
            foreach($validationRules[self::FIELD_SERIOUSNESS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_SERIOUSNESS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERIOUSNESS])) {
                        $errs[self::FIELD_SERIOUSNESS] = [];
                    }
                    $errs[self::FIELD_SERIOUSNESS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEVERITY])) {
            $v = $this->getSeverity();
            foreach($validationRules[self::FIELD_SEVERITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_SEVERITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEVERITY])) {
                        $errs[self::FIELD_SEVERITY] = [];
                    }
                    $errs[self::FIELD_SEVERITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STUDY])) {
            $v = $this->getStudy();
            foreach($validationRules[self::FIELD_STUDY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_STUDY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STUDY])) {
                        $errs[self::FIELD_STUDY] = [];
                    }
                    $errs[self::FIELD_STUDY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT_MEDICAL_HISTORY])) {
            $v = $this->getSubjectMedicalHistory();
            foreach($validationRules[self::FIELD_SUBJECT_MEDICAL_HISTORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_SUBJECT_MEDICAL_HISTORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT_MEDICAL_HISTORY])) {
                        $errs[self::FIELD_SUBJECT_MEDICAL_HISTORY] = [];
                    }
                    $errs[self::FIELD_SUBJECT_MEDICAL_HISTORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUSPECT_ENTITY])) {
            $v = $this->getSuspectEntity();
            foreach($validationRules[self::FIELD_SUSPECT_ENTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_SUSPECT_ENTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUSPECT_ENTITY])) {
                        $errs[self::FIELD_SUSPECT_ENTITY] = [];
                    }
                    $errs[self::FIELD_SUSPECT_ENTITY][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAdverseEvent $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
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
                throw new \DomainException(sprintf('FHIRAdverseEvent::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRAdverseEvent::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRAdverseEvent;
        } elseif (!is_object($type) || !($type instanceof FHIRAdverseEvent)) {
            throw new \RuntimeException(sprintf(
                'FHIRAdverseEvent::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRAdverseEvent or null, %s seen.',
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
        if (isset($children->actuality)) {
            $type->setActuality(FHIRAdverseEventActuality::xmlUnserialize($children->actuality));
        }
        if (isset($children->category)) {
            foreach($children->category as $child) {
                $type->addCategory(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->contributor)) {
            foreach($children->contributor as $child) {
                $type->addContributor(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->date)) {
            $type->setDate(FHIRDateTime::xmlUnserialize($children->date));
        }
        if (isset($attributes->date)) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->date);
            } else {
                $type->setDate((string)$attributes->date);
            }
        }
        if (isset($children->detected)) {
            $type->setDetected(FHIRDateTime::xmlUnserialize($children->detected));
        }
        if (isset($attributes->detected)) {
            $pt = $type->getDetected();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->detected);
            } else {
                $type->setDetected((string)$attributes->detected);
            }
        }
        if (isset($children->encounter)) {
            $type->setEncounter(FHIRReference::xmlUnserialize($children->encounter));
        }
        if (isset($children->event)) {
            $type->setEvent(FHIRCodeableConcept::xmlUnserialize($children->event));
        }
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRIdentifier::xmlUnserialize($children->identifier));
        }
        if (isset($children->location)) {
            $type->setLocation(FHIRReference::xmlUnserialize($children->location));
        }
        if (isset($children->outcome)) {
            $type->setOutcome(FHIRCodeableConcept::xmlUnserialize($children->outcome));
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
        if (isset($children->referenceDocument)) {
            foreach($children->referenceDocument as $child) {
                $type->addReferenceDocument(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->resultingCondition)) {
            foreach($children->resultingCondition as $child) {
                $type->addResultingCondition(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->seriousness)) {
            $type->setSeriousness(FHIRCodeableConcept::xmlUnserialize($children->seriousness));
        }
        if (isset($children->severity)) {
            $type->setSeverity(FHIRCodeableConcept::xmlUnserialize($children->severity));
        }
        if (isset($children->study)) {
            foreach($children->study as $child) {
                $type->addStudy(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRReference::xmlUnserialize($children->subject));
        }
        if (isset($children->subjectMedicalHistory)) {
            foreach($children->subjectMedicalHistory as $child) {
                $type->addSubjectMedicalHistory(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->suspectEntity)) {
            foreach($children->suspectEntity as $child) {
                $type->addSuspectEntity(FHIRAdverseEventSuspectEntity::xmlUnserialize($child));
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
        if (null !== ($v = $this->getActuality())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ACTUALITY, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getContributor())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTRIBUTOR, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDetected())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DETECTED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getEncounter())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENCOUNTER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getEvent())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EVENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLocation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LOCATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOutcome())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OUTCOME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRecordedDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RECORDED_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRecorder())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RECORDER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getReferenceDocument())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE_DOCUMENT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getResultingCondition())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RESULTING_CONDITION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getSeriousness())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SERIOUSNESS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSeverity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SEVERITY, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getStudy())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_STUDY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getSubjectMedicalHistory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT_MEDICAL_HISTORY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getSuspectEntity())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUSPECT_ENTITY, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getActuality())) {
            $a[self::FIELD_ACTUALITY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRAdverseEventActuality::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRAdverseEventActuality::FIELD_VALUE]);
                $a[self::FIELD_ACTUALITY_EXT] = $enc;
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
        if ([] !== ($vs = $this->getContributor())) {
            $a[self::FIELD_CONTRIBUTOR] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CONTRIBUTOR][] = $v;
            }
        }
        if (null !== ($v = $this->getDate())) {
            $a[self::FIELD_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDetected())) {
            $a[self::FIELD_DETECTED] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_DETECTED_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            $a[self::FIELD_ENCOUNTER] = $v;
        }
        if (null !== ($v = $this->getEvent())) {
            $a[self::FIELD_EVENT] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getLocation())) {
            $a[self::FIELD_LOCATION] = $v;
        }
        if (null !== ($v = $this->getOutcome())) {
            $a[self::FIELD_OUTCOME] = $v;
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
        if ([] !== ($vs = $this->getReferenceDocument())) {
            $a[self::FIELD_REFERENCE_DOCUMENT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REFERENCE_DOCUMENT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getResultingCondition())) {
            $a[self::FIELD_RESULTING_CONDITION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_RESULTING_CONDITION][] = $v;
            }
        }
        if (null !== ($v = $this->getSeriousness())) {
            $a[self::FIELD_SERIOUSNESS] = $v;
        }
        if (null !== ($v = $this->getSeverity())) {
            $a[self::FIELD_SEVERITY] = $v;
        }
        if ([] !== ($vs = $this->getStudy())) {
            $a[self::FIELD_STUDY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_STUDY][] = $v;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if ([] !== ($vs = $this->getSubjectMedicalHistory())) {
            $a[self::FIELD_SUBJECT_MEDICAL_HISTORY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SUBJECT_MEDICAL_HISTORY][] = $v;
            }
        }
        if ([] !== ($vs = $this->getSuspectEntity())) {
            $a[self::FIELD_SUSPECT_ENTITY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SUSPECT_ENTITY][] = $v;
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
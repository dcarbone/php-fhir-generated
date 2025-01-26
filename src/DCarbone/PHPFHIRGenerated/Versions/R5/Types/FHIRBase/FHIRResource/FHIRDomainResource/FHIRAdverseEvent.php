<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 26th, 2025 01:06+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAdverseEventActuality;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAdverseEventStatus;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventContributingFactor;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventMitigatingAction;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventParticipant;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventPreventiveAction;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSupportingInfo;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionTypeMap;

/**
 * An event (i.e. any change to current patient status) that may be related to
 * unintended effects on a patient or research participant. The unintended effects
 * may require additional monitoring, treatment, hospitalization, or may result in
 * death. The AdverseEvent resource also extends to potential or avoided events
 * that could have had such effects. There are two major domains where the
 * AdverseEvent resource is expected to be used. One is in clinical care reported
 * adverse events and the other is in reporting adverse events in clinical research
 * trial management. Adverse events can be reported by healthcare providers,
 * patients, caregivers or by medical products manufacturers. Given the differences
 * between these two concepts, we recommend consulting the domain specific
 * implementation guides when implementing the AdverseEvent Resource. The
 * implementation guides include specific extensions, value sets and constraints.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRAdverseEvent extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_ADVERSE_EVENT;


    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_ACTUALITY = 'actuality';
    public const FIELD_ACTUALITY_EXT = '_actuality';
    public const FIELD_CATEGORY = 'category';
    public const FIELD_CODE = 'code';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_ENCOUNTER = 'encounter';
    public const FIELD_OCCURRENCE_DATE_TIME = 'occurrenceDateTime';
    public const FIELD_OCCURRENCE_DATE_TIME_EXT = '_occurrenceDateTime';
    public const FIELD_OCCURRENCE_PERIOD = 'occurrencePeriod';
    public const FIELD_OCCURRENCE_TIMING = 'occurrenceTiming';
    public const FIELD_DETECTED = 'detected';
    public const FIELD_DETECTED_EXT = '_detected';
    public const FIELD_RECORDED_DATE = 'recordedDate';
    public const FIELD_RECORDED_DATE_EXT = '_recordedDate';
    public const FIELD_RESULTING_EFFECT = 'resultingEffect';
    public const FIELD_LOCATION = 'location';
    public const FIELD_SERIOUSNESS = 'seriousness';
    public const FIELD_OUTCOME = 'outcome';
    public const FIELD_RECORDER = 'recorder';
    public const FIELD_PARTICIPANT = 'participant';
    public const FIELD_STUDY = 'study';
    public const FIELD_EXPECTED_IN_RESEARCH_STUDY = 'expectedInResearchStudy';
    public const FIELD_EXPECTED_IN_RESEARCH_STUDY_EXT = '_expectedInResearchStudy';
    public const FIELD_SUSPECT_ENTITY = 'suspectEntity';
    public const FIELD_CONTRIBUTING_FACTOR = 'contributingFactor';
    public const FIELD_PREVENTIVE_ACTION = 'preventiveAction';
    public const FIELD_MITIGATING_ACTION = 'mitigatingAction';
    public const FIELD_SUPPORTING_INFO = 'supportingInfo';
    public const FIELD_NOTE = 'note';

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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of the adverse event or potential adverse event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAdverseEventStatus 
     */
    protected FHIRAdverseEventStatus $status;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the event actually happened or was a near miss. Note that this is
     * independent of whether anyone was affected or harmed or how severely.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAdverseEventActuality 
     */
    protected FHIRAdverseEventActuality $actuality;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The overall type of event, intended for search and filtering purposes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $category;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific event that occurred or that was averted, such as patient fall, wrong
     * organ removed, or wrong blood transfused.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $code;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This subject or group impacted by the event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $subject;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Encounter associated with the start of the AdverseEvent.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $encounter;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and perhaps time) when the adverse event occurred.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $occurrenceDateTime;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date (and perhaps time) when the adverse event occurred.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod 
     */
    protected FHIRPeriod $occurrencePeriod;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date (and perhaps time) when the adverse event occurred.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming 
     */
    protected FHIRTiming $occurrenceTiming;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date the AdverseEvent began, in the opinion of the reporter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $detected;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the existence of the AdverseEvent was first recorded.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $recordedDate;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information about the condition that occurred as a result of the adverse event,
     * such as hives due to the exposure to a substance (for example, a drug or a
     * chemical) or a broken leg as a result of the fall.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $resultingEffect;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information about where the adverse event occurred.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $location;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Assessment whether this event, or averted event, was of clinical importance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $seriousness;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the type of outcome from the adverse event, such as resolved,
     * recovering, ongoing, resolved-with-sequelae, or fatal.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $outcome;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information on who recorded the adverse event. May be the patient or a
     * practitioner.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $recorder;
    /**
     * An event (i.e. any change to current patient status) that may be related to
     * unintended effects on a patient or research participant. The unintended effects
     * may require additional monitoring, treatment, hospitalization, or may result in
     * death. The AdverseEvent resource also extends to potential or avoided events
     * that could have had such effects. There are two major domains where the
     * AdverseEvent resource is expected to be used. One is in clinical care reported
     * adverse events and the other is in reporting adverse events in clinical research
     * trial management. Adverse events can be reported by healthcare providers,
     * patients, caregivers or by medical products manufacturers. Given the differences
     * between these two concepts, we recommend consulting the domain specific
     * implementation guides when implementing the AdverseEvent Resource. The
     * implementation guides include specific extensions, value sets and constraints.
     *
     * Indicates who or what participated in the adverse event and how they were
     * involved.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventParticipant[] 
     */
    protected array $participant;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The research study that the subject is enrolled in.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $study;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Considered likely or probable or anticipated in the research study. Whether the
     * reported event matches any of the outcomes for the patient that are considered
     * by the study as known or likely.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $expectedInResearchStudy;
    /**
     * An event (i.e. any change to current patient status) that may be related to
     * unintended effects on a patient or research participant. The unintended effects
     * may require additional monitoring, treatment, hospitalization, or may result in
     * death. The AdverseEvent resource also extends to potential or avoided events
     * that could have had such effects. There are two major domains where the
     * AdverseEvent resource is expected to be used. One is in clinical care reported
     * adverse events and the other is in reporting adverse events in clinical research
     * trial management. Adverse events can be reported by healthcare providers,
     * patients, caregivers or by medical products manufacturers. Given the differences
     * between these two concepts, we recommend consulting the domain specific
     * implementation guides when implementing the AdverseEvent Resource. The
     * implementation guides include specific extensions, value sets and constraints.
     *
     * Describes the entity that is suspected to have caused the adverse event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity[] 
     */
    protected array $suspectEntity;
    /**
     * An event (i.e. any change to current patient status) that may be related to
     * unintended effects on a patient or research participant. The unintended effects
     * may require additional monitoring, treatment, hospitalization, or may result in
     * death. The AdverseEvent resource also extends to potential or avoided events
     * that could have had such effects. There are two major domains where the
     * AdverseEvent resource is expected to be used. One is in clinical care reported
     * adverse events and the other is in reporting adverse events in clinical research
     * trial management. Adverse events can be reported by healthcare providers,
     * patients, caregivers or by medical products manufacturers. Given the differences
     * between these two concepts, we recommend consulting the domain specific
     * implementation guides when implementing the AdverseEvent Resource. The
     * implementation guides include specific extensions, value sets and constraints.
     *
     * The contributing factors suspected to have increased the probability or severity
     * of the adverse event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventContributingFactor[] 
     */
    protected array $contributingFactor;
    /**
     * An event (i.e. any change to current patient status) that may be related to
     * unintended effects on a patient or research participant. The unintended effects
     * may require additional monitoring, treatment, hospitalization, or may result in
     * death. The AdverseEvent resource also extends to potential or avoided events
     * that could have had such effects. There are two major domains where the
     * AdverseEvent resource is expected to be used. One is in clinical care reported
     * adverse events and the other is in reporting adverse events in clinical research
     * trial management. Adverse events can be reported by healthcare providers,
     * patients, caregivers or by medical products manufacturers. Given the differences
     * between these two concepts, we recommend consulting the domain specific
     * implementation guides when implementing the AdverseEvent Resource. The
     * implementation guides include specific extensions, value sets and constraints.
     *
     * Preventive actions that contributed to avoiding the adverse event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventPreventiveAction[] 
     */
    protected array $preventiveAction;
    /**
     * An event (i.e. any change to current patient status) that may be related to
     * unintended effects on a patient or research participant. The unintended effects
     * may require additional monitoring, treatment, hospitalization, or may result in
     * death. The AdverseEvent resource also extends to potential or avoided events
     * that could have had such effects. There are two major domains where the
     * AdverseEvent resource is expected to be used. One is in clinical care reported
     * adverse events and the other is in reporting adverse events in clinical research
     * trial management. Adverse events can be reported by healthcare providers,
     * patients, caregivers or by medical products manufacturers. Given the differences
     * between these two concepts, we recommend consulting the domain specific
     * implementation guides when implementing the AdverseEvent Resource. The
     * implementation guides include specific extensions, value sets and constraints.
     *
     * The ameliorating action taken after the adverse event occured in order to reduce
     * the extent of harm.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventMitigatingAction[] 
     */
    protected array $mitigatingAction;
    /**
     * An event (i.e. any change to current patient status) that may be related to
     * unintended effects on a patient or research participant. The unintended effects
     * may require additional monitoring, treatment, hospitalization, or may result in
     * death. The AdverseEvent resource also extends to potential or avoided events
     * that could have had such effects. There are two major domains where the
     * AdverseEvent resource is expected to be used. One is in clinical care reported
     * adverse events and the other is in reporting adverse events in clinical research
     * trial management. Adverse events can be reported by healthcare providers,
     * patients, caregivers or by medical products manufacturers. Given the differences
     * between these two concepts, we recommend consulting the domain specific
     * implementation guides when implementing the AdverseEvent Resource. The
     * implementation guides include specific extensions, value sets and constraints.
     *
     * Supporting information relevant to the event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSupportingInfo[] 
     */
    protected array $supportingInfo;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the adverse event by the performer, subject or other
     * participants.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[] 
     */
    protected array $note;

    /** Default validation map for fields in type AdverseEvent */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_ACTUALITY => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_SUBJECT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* constructor.php:66 */
    /**
     * FHIRAdverseEvent Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAdverseEventStatus $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAdverseEventActuality $actuality
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $category
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $code
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subject
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $encounter
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $occurrenceDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $occurrencePeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming $occurrenceTiming
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $detected
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $recordedDate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $resultingEffect
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $location
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $seriousness
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $outcome
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $recorder
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventParticipant[] $participant
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $study
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $expectedInResearchStudy
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity[] $suspectEntity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventContributingFactor[] $contributingFactor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventPreventiveAction[] $preventiveAction
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventMitigatingAction[] $mitigatingAction
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSupportingInfo[] $supportingInfo
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[] $note
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRIdPrimitive|FHIRId $id = null,
                                null|FHIRMeta $meta = null,
                                null|string|FHIRUriPrimitive|FHIRUri $implicitRules = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $identifier = null,
                                null|FHIRAdverseEventStatus $status = null,
                                null|FHIRAdverseEventActuality $actuality = null,
                                null|iterable $category = null,
                                null|FHIRCodeableConcept $code = null,
                                null|FHIRReference $subject = null,
                                null|FHIRReference $encounter = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $occurrenceDateTime = null,
                                null|FHIRPeriod $occurrencePeriod = null,
                                null|FHIRTiming $occurrenceTiming = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $detected = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $recordedDate = null,
                                null|iterable $resultingEffect = null,
                                null|FHIRReference $location = null,
                                null|FHIRCodeableConcept $seriousness = null,
                                null|iterable $outcome = null,
                                null|FHIRReference $recorder = null,
                                null|iterable $participant = null,
                                null|iterable $study = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $expectedInResearchStudy = null,
                                null|iterable $suspectEntity = null,
                                null|iterable $contributingFactor = null,
                                null|iterable $preventiveAction = null,
                                null|iterable $mitigatingAction = null,
                                null|iterable $supportingInfo = null,
                                null|iterable $note = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(id: $id,
                            meta: $meta,
                            implicitRules: $implicitRules,
                            language: $language,
                            text: $text,
                            contained: $contained,
                            extension: $extension,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $actuality) {
            $this->setActuality($actuality);
        }
        if (null !== $category) {
            $this->setCategory(...$category);
        }
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $subject) {
            $this->setSubject($subject);
        }
        if (null !== $encounter) {
            $this->setEncounter($encounter);
        }
        if (null !== $occurrenceDateTime) {
            $this->setOccurrenceDateTime($occurrenceDateTime);
        }
        if (null !== $occurrencePeriod) {
            $this->setOccurrencePeriod($occurrencePeriod);
        }
        if (null !== $occurrenceTiming) {
            $this->setOccurrenceTiming($occurrenceTiming);
        }
        if (null !== $detected) {
            $this->setDetected($detected);
        }
        if (null !== $recordedDate) {
            $this->setRecordedDate($recordedDate);
        }
        if (null !== $resultingEffect) {
            $this->setResultingEffect(...$resultingEffect);
        }
        if (null !== $location) {
            $this->setLocation($location);
        }
        if (null !== $seriousness) {
            $this->setSeriousness($seriousness);
        }
        if (null !== $outcome) {
            $this->setOutcome(...$outcome);
        }
        if (null !== $recorder) {
            $this->setRecorder($recorder);
        }
        if (null !== $participant) {
            $this->setParticipant(...$participant);
        }
        if (null !== $study) {
            $this->setStudy(...$study);
        }
        if (null !== $expectedInResearchStudy) {
            $this->setExpectedInResearchStudy($expectedInResearchStudy);
        }
        if (null !== $suspectEntity) {
            $this->setSuspectEntity(...$suspectEntity);
        }
        if (null !== $contributingFactor) {
            $this->setContributingFactor(...$contributingFactor);
        }
        if (null !== $preventiveAction) {
            $this->setPreventiveAction(...$preventiveAction);
        }
        if (null !== $mitigatingAction) {
            $this->setMitigatingAction(...$mitigatingAction);
        }
        if (null !== $supportingInfo) {
            $this->setSupportingInfo(...$supportingInfo);
        }
        if (null !== $note) {
            $this->setNote(...$note);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
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
     * Business identifiers assigned to this adverse event by the performer or other
     * systems which remain constant as the resource is updated and propagates from
     * server to server.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier>
     */
    public function getIdentifierIterator(): iterable
    {
        if (!isset($this->identifier) || [] === $this->identifier) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier): self
    {
        if (!isset($this->identifier)) {
            $this->identifier = [];
        }
        $this->identifier[] = $identifier;
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of the adverse event or potential adverse event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAdverseEventStatus
     */
    public function getStatus(): null|FHIRAdverseEventStatus
    {
        return $this->status ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of the adverse event or potential adverse event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAdverseEventStatus $status
     * @return static
     */
    public function setStatus(null|FHIRAdverseEventStatus $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        $this->status = $status;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the event actually happened or was a near miss. Note that this is
     * independent of whether anyone was affected or harmed or how severely.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAdverseEventActuality
     */
    public function getActuality(): null|FHIRAdverseEventActuality
    {
        return $this->actuality ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the event actually happened or was a near miss. Note that this is
     * independent of whether anyone was affected or harmed or how severely.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAdverseEventActuality $actuality
     * @return static
     */
    public function setActuality(null|FHIRAdverseEventActuality $actuality): self
    {
        if (null === $actuality) {
            unset($this->actuality);
            return $this;
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getCategory(): array
    {
        return $this->category ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getCategoryIterator(): iterable
    {
        if (!isset($this->category) || [] === $this->category) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->category);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The overall type of event, intended for search and filtering purposes.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $category
     * @return static
     */
    public function addCategory(FHIRCodeableConcept $category): self
    {
        if (!isset($this->category)) {
            $this->category = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$category
     * @return static
     */
    public function setCategory(FHIRCodeableConcept ...$category): self
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
     * Specific event that occurred or that was averted, such as patient fall, wrong
     * organ removed, or wrong blood transfused.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getCode(): null|FHIRCodeableConcept
    {
        return $this->code ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific event that occurred or that was averted, such as patient fall, wrong
     * organ removed, or wrong blood transfused.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(null|FHIRCodeableConcept $code): self
    {
        if (null === $code) {
            unset($this->code);
            return $this;
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This subject or group impacted by the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getSubject(): null|FHIRReference
    {
        return $this->subject ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This subject or group impacted by the event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subject
     * @return static
     */
    public function setSubject(null|FHIRReference $subject): self
    {
        if (null === $subject) {
            unset($this->subject);
            return $this;
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Encounter associated with the start of the AdverseEvent.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getEncounter(): null|FHIRReference
    {
        return $this->encounter ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Encounter associated with the start of the AdverseEvent.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $encounter
     * @return static
     */
    public function setEncounter(null|FHIRReference $encounter): self
    {
        if (null === $encounter) {
            unset($this->encounter);
            return $this;
        }
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and perhaps time) when the adverse event occurred.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime(): null|FHIRDateTime
    {
        return $this->occurrenceDateTime ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and perhaps time) when the adverse event occurred.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $occurrenceDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setOccurrenceDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $occurrenceDateTime,
                                          null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $occurrenceDateTime) {
            unset($this->occurrenceDateTime);
            return $this;
        }
        if (!($occurrenceDateTime instanceof FHIRDateTime)) {
            $occurrenceDateTime = new FHIRDateTime(value: $occurrenceDateTime);
        }
        if (null !== $valueXMLLocation) {
            $occurrenceDateTime->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $occurrenceDateTime->_getValueXMLLocation()) {
            $occurrenceDateTime->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date (and perhaps time) when the adverse event occurred.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    public function getOccurrencePeriod(): null|FHIRPeriod
    {
        return $this->occurrencePeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date (and perhaps time) when the adverse event occurred.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $occurrencePeriod
     * @return static
     */
    public function setOccurrencePeriod(null|FHIRPeriod $occurrencePeriod): self
    {
        if (null === $occurrencePeriod) {
            unset($this->occurrencePeriod);
            return $this;
        }
        $this->occurrencePeriod = $occurrencePeriod;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date (and perhaps time) when the adverse event occurred.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming
     */
    public function getOccurrenceTiming(): null|FHIRTiming
    {
        return $this->occurrenceTiming ?? null;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date (and perhaps time) when the adverse event occurred.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming $occurrenceTiming
     * @return static
     */
    public function setOccurrenceTiming(null|FHIRTiming $occurrenceTiming): self
    {
        if (null === $occurrenceTiming) {
            unset($this->occurrenceTiming);
            return $this;
        }
        $this->occurrenceTiming = $occurrenceTiming;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date the AdverseEvent began, in the opinion of the reporter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getDetected(): null|FHIRDateTime
    {
        return $this->detected ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date the AdverseEvent began, in the opinion of the reporter.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $detected
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDetected(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $detected,
                                null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $detected) {
            unset($this->detected);
            return $this;
        }
        if (!($detected instanceof FHIRDateTime)) {
            $detected = new FHIRDateTime(value: $detected);
        }
        if (null !== $valueXMLLocation) {
            $detected->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $detected->_getValueXMLLocation()) {
            $detected->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->detected = $detected;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the existence of the AdverseEvent was first recorded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getRecordedDate(): null|FHIRDateTime
    {
        return $this->recordedDate ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the existence of the AdverseEvent was first recorded.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $recordedDate
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setRecordedDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $recordedDate,
                                    null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $recordedDate) {
            unset($this->recordedDate);
            return $this;
        }
        if (!($recordedDate instanceof FHIRDateTime)) {
            $recordedDate = new FHIRDateTime(value: $recordedDate);
        }
        if (null !== $valueXMLLocation) {
            $recordedDate->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $recordedDate->_getValueXMLLocation()) {
            $recordedDate->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->recordedDate = $recordedDate;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information about the condition that occurred as a result of the adverse event,
     * such as hives due to the exposure to a substance (for example, a drug or a
     * chemical) or a broken leg as a result of the fall.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getResultingEffect(): array
    {
        return $this->resultingEffect ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getResultingEffectIterator(): iterable
    {
        if (!isset($this->resultingEffect) || [] === $this->resultingEffect) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->resultingEffect);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information about the condition that occurred as a result of the adverse event,
     * such as hives due to the exposure to a substance (for example, a drug or a
     * chemical) or a broken leg as a result of the fall.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $resultingEffect
     * @return static
     */
    public function addResultingEffect(FHIRReference $resultingEffect): self
    {
        if (!isset($this->resultingEffect)) {
            $this->resultingEffect = [];
        }
        $this->resultingEffect[] = $resultingEffect;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information about the condition that occurred as a result of the adverse event,
     * such as hives due to the exposure to a substance (for example, a drug or a
     * chemical) or a broken leg as a result of the fall.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$resultingEffect
     * @return static
     */
    public function setResultingEffect(FHIRReference ...$resultingEffect): self
    {
        $this->resultingEffect = $resultingEffect;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information about where the adverse event occurred.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getLocation(): null|FHIRReference
    {
        return $this->location ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information about where the adverse event occurred.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $location
     * @return static
     */
    public function setLocation(null|FHIRReference $location): self
    {
        if (null === $location) {
            unset($this->location);
            return $this;
        }
        $this->location = $location;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Assessment whether this event, or averted event, was of clinical importance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getSeriousness(): null|FHIRCodeableConcept
    {
        return $this->seriousness ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Assessment whether this event, or averted event, was of clinical importance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $seriousness
     * @return static
     */
    public function setSeriousness(null|FHIRCodeableConcept $seriousness): self
    {
        if (null === $seriousness) {
            unset($this->seriousness);
            return $this;
        }
        $this->seriousness = $seriousness;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the type of outcome from the adverse event, such as resolved,
     * recovering, ongoing, resolved-with-sequelae, or fatal.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getOutcome(): array
    {
        return $this->outcome ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getOutcomeIterator(): iterable
    {
        if (!isset($this->outcome) || [] === $this->outcome) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->outcome);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the type of outcome from the adverse event, such as resolved,
     * recovering, ongoing, resolved-with-sequelae, or fatal.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $outcome
     * @return static
     */
    public function addOutcome(FHIRCodeableConcept $outcome): self
    {
        if (!isset($this->outcome)) {
            $this->outcome = [];
        }
        $this->outcome[] = $outcome;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the type of outcome from the adverse event, such as resolved,
     * recovering, ongoing, resolved-with-sequelae, or fatal.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$outcome
     * @return static
     */
    public function setOutcome(FHIRCodeableConcept ...$outcome): self
    {
        $this->outcome = $outcome;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getRecorder(): null|FHIRReference
    {
        return $this->recorder ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information on who recorded the adverse event. May be the patient or a
     * practitioner.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $recorder
     * @return static
     */
    public function setRecorder(null|FHIRReference $recorder): self
    {
        if (null === $recorder) {
            unset($this->recorder);
            return $this;
        }
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * An event (i.e. any change to current patient status) that may be related to
     * unintended effects on a patient or research participant. The unintended effects
     * may require additional monitoring, treatment, hospitalization, or may result in
     * death. The AdverseEvent resource also extends to potential or avoided events
     * that could have had such effects. There are two major domains where the
     * AdverseEvent resource is expected to be used. One is in clinical care reported
     * adverse events and the other is in reporting adverse events in clinical research
     * trial management. Adverse events can be reported by healthcare providers,
     * patients, caregivers or by medical products manufacturers. Given the differences
     * between these two concepts, we recommend consulting the domain specific
     * implementation guides when implementing the AdverseEvent Resource. The
     * implementation guides include specific extensions, value sets and constraints.
     *
     * Indicates who or what participated in the adverse event and how they were
     * involved.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventParticipant[]
     */
    public function getParticipant(): array
    {
        return $this->participant ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventParticipant>
     */
    public function getParticipantIterator(): iterable
    {
        if (!isset($this->participant) || [] === $this->participant) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->participant);
    }

    /**
     * An event (i.e. any change to current patient status) that may be related to
     * unintended effects on a patient or research participant. The unintended effects
     * may require additional monitoring, treatment, hospitalization, or may result in
     * death. The AdverseEvent resource also extends to potential or avoided events
     * that could have had such effects. There are two major domains where the
     * AdverseEvent resource is expected to be used. One is in clinical care reported
     * adverse events and the other is in reporting adverse events in clinical research
     * trial management. Adverse events can be reported by healthcare providers,
     * patients, caregivers or by medical products manufacturers. Given the differences
     * between these two concepts, we recommend consulting the domain specific
     * implementation guides when implementing the AdverseEvent Resource. The
     * implementation guides include specific extensions, value sets and constraints.
     *
     * Indicates who or what participated in the adverse event and how they were
     * involved.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventParticipant $participant
     * @return static
     */
    public function addParticipant(FHIRAdverseEventParticipant $participant): self
    {
        if (!isset($this->participant)) {
            $this->participant = [];
        }
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * An event (i.e. any change to current patient status) that may be related to
     * unintended effects on a patient or research participant. The unintended effects
     * may require additional monitoring, treatment, hospitalization, or may result in
     * death. The AdverseEvent resource also extends to potential or avoided events
     * that could have had such effects. There are two major domains where the
     * AdverseEvent resource is expected to be used. One is in clinical care reported
     * adverse events and the other is in reporting adverse events in clinical research
     * trial management. Adverse events can be reported by healthcare providers,
     * patients, caregivers or by medical products manufacturers. Given the differences
     * between these two concepts, we recommend consulting the domain specific
     * implementation guides when implementing the AdverseEvent Resource. The
     * implementation guides include specific extensions, value sets and constraints.
     *
     * Indicates who or what participated in the adverse event and how they were
     * involved.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventParticipant ...$participant
     * @return static
     */
    public function setParticipant(FHIRAdverseEventParticipant ...$participant): self
    {
        $this->participant = $participant;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The research study that the subject is enrolled in.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getStudy(): array
    {
        return $this->study ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getStudyIterator(): iterable
    {
        if (!isset($this->study) || [] === $this->study) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->study);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The research study that the subject is enrolled in.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $study
     * @return static
     */
    public function addStudy(FHIRReference $study): self
    {
        if (!isset($this->study)) {
            $this->study = [];
        }
        $this->study[] = $study;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The research study that the subject is enrolled in.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$study
     * @return static
     */
    public function setStudy(FHIRReference ...$study): self
    {
        $this->study = $study;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Considered likely or probable or anticipated in the research study. Whether the
     * reported event matches any of the outcomes for the patient that are considered
     * by the study as known or likely.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getExpectedInResearchStudy(): null|FHIRBoolean
    {
        return $this->expectedInResearchStudy ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Considered likely or probable or anticipated in the research study. Whether the
     * reported event matches any of the outcomes for the patient that are considered
     * by the study as known or likely.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $expectedInResearchStudy
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExpectedInResearchStudy(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $expectedInResearchStudy,
                                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $expectedInResearchStudy) {
            unset($this->expectedInResearchStudy);
            return $this;
        }
        if (!($expectedInResearchStudy instanceof FHIRBoolean)) {
            $expectedInResearchStudy = new FHIRBoolean(value: $expectedInResearchStudy);
        }
        if (null !== $valueXMLLocation) {
            $expectedInResearchStudy->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $expectedInResearchStudy->_getValueXMLLocation()) {
            $expectedInResearchStudy->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->expectedInResearchStudy = $expectedInResearchStudy;
        return $this;
    }

    /**
     * An event (i.e. any change to current patient status) that may be related to
     * unintended effects on a patient or research participant. The unintended effects
     * may require additional monitoring, treatment, hospitalization, or may result in
     * death. The AdverseEvent resource also extends to potential or avoided events
     * that could have had such effects. There are two major domains where the
     * AdverseEvent resource is expected to be used. One is in clinical care reported
     * adverse events and the other is in reporting adverse events in clinical research
     * trial management. Adverse events can be reported by healthcare providers,
     * patients, caregivers or by medical products manufacturers. Given the differences
     * between these two concepts, we recommend consulting the domain specific
     * implementation guides when implementing the AdverseEvent Resource. The
     * implementation guides include specific extensions, value sets and constraints.
     *
     * Describes the entity that is suspected to have caused the adverse event.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity[]
     */
    public function getSuspectEntity(): array
    {
        return $this->suspectEntity ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity>
     */
    public function getSuspectEntityIterator(): iterable
    {
        if (!isset($this->suspectEntity) || [] === $this->suspectEntity) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->suspectEntity);
    }

    /**
     * An event (i.e. any change to current patient status) that may be related to
     * unintended effects on a patient or research participant. The unintended effects
     * may require additional monitoring, treatment, hospitalization, or may result in
     * death. The AdverseEvent resource also extends to potential or avoided events
     * that could have had such effects. There are two major domains where the
     * AdverseEvent resource is expected to be used. One is in clinical care reported
     * adverse events and the other is in reporting adverse events in clinical research
     * trial management. Adverse events can be reported by healthcare providers,
     * patients, caregivers or by medical products manufacturers. Given the differences
     * between these two concepts, we recommend consulting the domain specific
     * implementation guides when implementing the AdverseEvent Resource. The
     * implementation guides include specific extensions, value sets and constraints.
     *
     * Describes the entity that is suspected to have caused the adverse event.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity $suspectEntity
     * @return static
     */
    public function addSuspectEntity(FHIRAdverseEventSuspectEntity $suspectEntity): self
    {
        if (!isset($this->suspectEntity)) {
            $this->suspectEntity = [];
        }
        $this->suspectEntity[] = $suspectEntity;
        return $this;
    }

    /**
     * An event (i.e. any change to current patient status) that may be related to
     * unintended effects on a patient or research participant. The unintended effects
     * may require additional monitoring, treatment, hospitalization, or may result in
     * death. The AdverseEvent resource also extends to potential or avoided events
     * that could have had such effects. There are two major domains where the
     * AdverseEvent resource is expected to be used. One is in clinical care reported
     * adverse events and the other is in reporting adverse events in clinical research
     * trial management. Adverse events can be reported by healthcare providers,
     * patients, caregivers or by medical products manufacturers. Given the differences
     * between these two concepts, we recommend consulting the domain specific
     * implementation guides when implementing the AdverseEvent Resource. The
     * implementation guides include specific extensions, value sets and constraints.
     *
     * Describes the entity that is suspected to have caused the adverse event.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity ...$suspectEntity
     * @return static
     */
    public function setSuspectEntity(FHIRAdverseEventSuspectEntity ...$suspectEntity): self
    {
        $this->suspectEntity = $suspectEntity;
        return $this;
    }

    /**
     * An event (i.e. any change to current patient status) that may be related to
     * unintended effects on a patient or research participant. The unintended effects
     * may require additional monitoring, treatment, hospitalization, or may result in
     * death. The AdverseEvent resource also extends to potential or avoided events
     * that could have had such effects. There are two major domains where the
     * AdverseEvent resource is expected to be used. One is in clinical care reported
     * adverse events and the other is in reporting adverse events in clinical research
     * trial management. Adverse events can be reported by healthcare providers,
     * patients, caregivers or by medical products manufacturers. Given the differences
     * between these two concepts, we recommend consulting the domain specific
     * implementation guides when implementing the AdverseEvent Resource. The
     * implementation guides include specific extensions, value sets and constraints.
     *
     * The contributing factors suspected to have increased the probability or severity
     * of the adverse event.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventContributingFactor[]
     */
    public function getContributingFactor(): array
    {
        return $this->contributingFactor ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventContributingFactor>
     */
    public function getContributingFactorIterator(): iterable
    {
        if (!isset($this->contributingFactor) || [] === $this->contributingFactor) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->contributingFactor);
    }

    /**
     * An event (i.e. any change to current patient status) that may be related to
     * unintended effects on a patient or research participant. The unintended effects
     * may require additional monitoring, treatment, hospitalization, or may result in
     * death. The AdverseEvent resource also extends to potential or avoided events
     * that could have had such effects. There are two major domains where the
     * AdverseEvent resource is expected to be used. One is in clinical care reported
     * adverse events and the other is in reporting adverse events in clinical research
     * trial management. Adverse events can be reported by healthcare providers,
     * patients, caregivers or by medical products manufacturers. Given the differences
     * between these two concepts, we recommend consulting the domain specific
     * implementation guides when implementing the AdverseEvent Resource. The
     * implementation guides include specific extensions, value sets and constraints.
     *
     * The contributing factors suspected to have increased the probability or severity
     * of the adverse event.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventContributingFactor $contributingFactor
     * @return static
     */
    public function addContributingFactor(FHIRAdverseEventContributingFactor $contributingFactor): self
    {
        if (!isset($this->contributingFactor)) {
            $this->contributingFactor = [];
        }
        $this->contributingFactor[] = $contributingFactor;
        return $this;
    }

    /**
     * An event (i.e. any change to current patient status) that may be related to
     * unintended effects on a patient or research participant. The unintended effects
     * may require additional monitoring, treatment, hospitalization, or may result in
     * death. The AdverseEvent resource also extends to potential or avoided events
     * that could have had such effects. There are two major domains where the
     * AdverseEvent resource is expected to be used. One is in clinical care reported
     * adverse events and the other is in reporting adverse events in clinical research
     * trial management. Adverse events can be reported by healthcare providers,
     * patients, caregivers or by medical products manufacturers. Given the differences
     * between these two concepts, we recommend consulting the domain specific
     * implementation guides when implementing the AdverseEvent Resource. The
     * implementation guides include specific extensions, value sets and constraints.
     *
     * The contributing factors suspected to have increased the probability or severity
     * of the adverse event.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventContributingFactor ...$contributingFactor
     * @return static
     */
    public function setContributingFactor(FHIRAdverseEventContributingFactor ...$contributingFactor): self
    {
        $this->contributingFactor = $contributingFactor;
        return $this;
    }

    /**
     * An event (i.e. any change to current patient status) that may be related to
     * unintended effects on a patient or research participant. The unintended effects
     * may require additional monitoring, treatment, hospitalization, or may result in
     * death. The AdverseEvent resource also extends to potential or avoided events
     * that could have had such effects. There are two major domains where the
     * AdverseEvent resource is expected to be used. One is in clinical care reported
     * adverse events and the other is in reporting adverse events in clinical research
     * trial management. Adverse events can be reported by healthcare providers,
     * patients, caregivers or by medical products manufacturers. Given the differences
     * between these two concepts, we recommend consulting the domain specific
     * implementation guides when implementing the AdverseEvent Resource. The
     * implementation guides include specific extensions, value sets and constraints.
     *
     * Preventive actions that contributed to avoiding the adverse event.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventPreventiveAction[]
     */
    public function getPreventiveAction(): array
    {
        return $this->preventiveAction ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventPreventiveAction>
     */
    public function getPreventiveActionIterator(): iterable
    {
        if (!isset($this->preventiveAction) || [] === $this->preventiveAction) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->preventiveAction);
    }

    /**
     * An event (i.e. any change to current patient status) that may be related to
     * unintended effects on a patient or research participant. The unintended effects
     * may require additional monitoring, treatment, hospitalization, or may result in
     * death. The AdverseEvent resource also extends to potential or avoided events
     * that could have had such effects. There are two major domains where the
     * AdverseEvent resource is expected to be used. One is in clinical care reported
     * adverse events and the other is in reporting adverse events in clinical research
     * trial management. Adverse events can be reported by healthcare providers,
     * patients, caregivers or by medical products manufacturers. Given the differences
     * between these two concepts, we recommend consulting the domain specific
     * implementation guides when implementing the AdverseEvent Resource. The
     * implementation guides include specific extensions, value sets and constraints.
     *
     * Preventive actions that contributed to avoiding the adverse event.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventPreventiveAction $preventiveAction
     * @return static
     */
    public function addPreventiveAction(FHIRAdverseEventPreventiveAction $preventiveAction): self
    {
        if (!isset($this->preventiveAction)) {
            $this->preventiveAction = [];
        }
        $this->preventiveAction[] = $preventiveAction;
        return $this;
    }

    /**
     * An event (i.e. any change to current patient status) that may be related to
     * unintended effects on a patient or research participant. The unintended effects
     * may require additional monitoring, treatment, hospitalization, or may result in
     * death. The AdverseEvent resource also extends to potential or avoided events
     * that could have had such effects. There are two major domains where the
     * AdverseEvent resource is expected to be used. One is in clinical care reported
     * adverse events and the other is in reporting adverse events in clinical research
     * trial management. Adverse events can be reported by healthcare providers,
     * patients, caregivers or by medical products manufacturers. Given the differences
     * between these two concepts, we recommend consulting the domain specific
     * implementation guides when implementing the AdverseEvent Resource. The
     * implementation guides include specific extensions, value sets and constraints.
     *
     * Preventive actions that contributed to avoiding the adverse event.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventPreventiveAction ...$preventiveAction
     * @return static
     */
    public function setPreventiveAction(FHIRAdverseEventPreventiveAction ...$preventiveAction): self
    {
        $this->preventiveAction = $preventiveAction;
        return $this;
    }

    /**
     * An event (i.e. any change to current patient status) that may be related to
     * unintended effects on a patient or research participant. The unintended effects
     * may require additional monitoring, treatment, hospitalization, or may result in
     * death. The AdverseEvent resource also extends to potential or avoided events
     * that could have had such effects. There are two major domains where the
     * AdverseEvent resource is expected to be used. One is in clinical care reported
     * adverse events and the other is in reporting adverse events in clinical research
     * trial management. Adverse events can be reported by healthcare providers,
     * patients, caregivers or by medical products manufacturers. Given the differences
     * between these two concepts, we recommend consulting the domain specific
     * implementation guides when implementing the AdverseEvent Resource. The
     * implementation guides include specific extensions, value sets and constraints.
     *
     * The ameliorating action taken after the adverse event occured in order to reduce
     * the extent of harm.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventMitigatingAction[]
     */
    public function getMitigatingAction(): array
    {
        return $this->mitigatingAction ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventMitigatingAction>
     */
    public function getMitigatingActionIterator(): iterable
    {
        if (!isset($this->mitigatingAction) || [] === $this->mitigatingAction) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->mitigatingAction);
    }

    /**
     * An event (i.e. any change to current patient status) that may be related to
     * unintended effects on a patient or research participant. The unintended effects
     * may require additional monitoring, treatment, hospitalization, or may result in
     * death. The AdverseEvent resource also extends to potential or avoided events
     * that could have had such effects. There are two major domains where the
     * AdverseEvent resource is expected to be used. One is in clinical care reported
     * adverse events and the other is in reporting adverse events in clinical research
     * trial management. Adverse events can be reported by healthcare providers,
     * patients, caregivers or by medical products manufacturers. Given the differences
     * between these two concepts, we recommend consulting the domain specific
     * implementation guides when implementing the AdverseEvent Resource. The
     * implementation guides include specific extensions, value sets and constraints.
     *
     * The ameliorating action taken after the adverse event occured in order to reduce
     * the extent of harm.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventMitigatingAction $mitigatingAction
     * @return static
     */
    public function addMitigatingAction(FHIRAdverseEventMitigatingAction $mitigatingAction): self
    {
        if (!isset($this->mitigatingAction)) {
            $this->mitigatingAction = [];
        }
        $this->mitigatingAction[] = $mitigatingAction;
        return $this;
    }

    /**
     * An event (i.e. any change to current patient status) that may be related to
     * unintended effects on a patient or research participant. The unintended effects
     * may require additional monitoring, treatment, hospitalization, or may result in
     * death. The AdverseEvent resource also extends to potential or avoided events
     * that could have had such effects. There are two major domains where the
     * AdverseEvent resource is expected to be used. One is in clinical care reported
     * adverse events and the other is in reporting adverse events in clinical research
     * trial management. Adverse events can be reported by healthcare providers,
     * patients, caregivers or by medical products manufacturers. Given the differences
     * between these two concepts, we recommend consulting the domain specific
     * implementation guides when implementing the AdverseEvent Resource. The
     * implementation guides include specific extensions, value sets and constraints.
     *
     * The ameliorating action taken after the adverse event occured in order to reduce
     * the extent of harm.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventMitigatingAction ...$mitigatingAction
     * @return static
     */
    public function setMitigatingAction(FHIRAdverseEventMitigatingAction ...$mitigatingAction): self
    {
        $this->mitigatingAction = $mitigatingAction;
        return $this;
    }

    /**
     * An event (i.e. any change to current patient status) that may be related to
     * unintended effects on a patient or research participant. The unintended effects
     * may require additional monitoring, treatment, hospitalization, or may result in
     * death. The AdverseEvent resource also extends to potential or avoided events
     * that could have had such effects. There are two major domains where the
     * AdverseEvent resource is expected to be used. One is in clinical care reported
     * adverse events and the other is in reporting adverse events in clinical research
     * trial management. Adverse events can be reported by healthcare providers,
     * patients, caregivers or by medical products manufacturers. Given the differences
     * between these two concepts, we recommend consulting the domain specific
     * implementation guides when implementing the AdverseEvent Resource. The
     * implementation guides include specific extensions, value sets and constraints.
     *
     * Supporting information relevant to the event.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSupportingInfo[]
     */
    public function getSupportingInfo(): array
    {
        return $this->supportingInfo ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSupportingInfo>
     */
    public function getSupportingInfoIterator(): iterable
    {
        if (!isset($this->supportingInfo) || [] === $this->supportingInfo) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->supportingInfo);
    }

    /**
     * An event (i.e. any change to current patient status) that may be related to
     * unintended effects on a patient or research participant. The unintended effects
     * may require additional monitoring, treatment, hospitalization, or may result in
     * death. The AdverseEvent resource also extends to potential or avoided events
     * that could have had such effects. There are two major domains where the
     * AdverseEvent resource is expected to be used. One is in clinical care reported
     * adverse events and the other is in reporting adverse events in clinical research
     * trial management. Adverse events can be reported by healthcare providers,
     * patients, caregivers or by medical products manufacturers. Given the differences
     * between these two concepts, we recommend consulting the domain specific
     * implementation guides when implementing the AdverseEvent Resource. The
     * implementation guides include specific extensions, value sets and constraints.
     *
     * Supporting information relevant to the event.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSupportingInfo $supportingInfo
     * @return static
     */
    public function addSupportingInfo(FHIRAdverseEventSupportingInfo $supportingInfo): self
    {
        if (!isset($this->supportingInfo)) {
            $this->supportingInfo = [];
        }
        $this->supportingInfo[] = $supportingInfo;
        return $this;
    }

    /**
     * An event (i.e. any change to current patient status) that may be related to
     * unintended effects on a patient or research participant. The unintended effects
     * may require additional monitoring, treatment, hospitalization, or may result in
     * death. The AdverseEvent resource also extends to potential or avoided events
     * that could have had such effects. There are two major domains where the
     * AdverseEvent resource is expected to be used. One is in clinical care reported
     * adverse events and the other is in reporting adverse events in clinical research
     * trial management. Adverse events can be reported by healthcare providers,
     * patients, caregivers or by medical products manufacturers. Given the differences
     * between these two concepts, we recommend consulting the domain specific
     * implementation guides when implementing the AdverseEvent Resource. The
     * implementation guides include specific extensions, value sets and constraints.
     *
     * Supporting information relevant to the event.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSupportingInfo ...$supportingInfo
     * @return static
     */
    public function setSupportingInfo(FHIRAdverseEventSupportingInfo ...$supportingInfo): self
    {
        $this->supportingInfo = $supportingInfo;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the adverse event by the performer, subject or other
     * participants.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    public function getNote(): array
    {
        return $this->note ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation>
     */
    public function getNoteIterator(): iterable
    {
        if (!isset($this->note) || [] === $this->note) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->note);
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the adverse event by the performer, subject or other
     * participants.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation $note
     * @return static
     */
    public function addNote(FHIRAnnotation $note): self
    {
        if (!isset($this->note)) {
            $this->note = [];
        }
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the adverse event by the performer, subject or other
     * participants.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation ...$note
     * @return static
     */
    public function setNote(FHIRAnnotation ...$note): self
    {
        $this->note = $note;
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
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getActuality())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACTUALITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACTUALITY])) {
            $v = $this->getActuality();
            foreach($validationRules[self::FIELD_ACTUALITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ACTUALITY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENCOUNTER])) {
            $v = $this->getEncounter();
            foreach($validationRules[self::FIELD_ENCOUNTER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCOUNTER])) {
                        $errs[self::FIELD_ENCOUNTER] = [];
                    }
                    $errs[self::FIELD_ENCOUNTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_DATE_TIME])) {
            $v = $this->getOccurrenceDateTime();
            foreach($validationRules[self::FIELD_OCCURRENCE_DATE_TIME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OCCURRENCE_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_DATE_TIME])) {
                        $errs[self::FIELD_OCCURRENCE_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_PERIOD])) {
            $v = $this->getOccurrencePeriod();
            foreach($validationRules[self::FIELD_OCCURRENCE_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OCCURRENCE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_PERIOD])) {
                        $errs[self::FIELD_OCCURRENCE_PERIOD] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_TIMING])) {
            $v = $this->getOccurrenceTiming();
            foreach($validationRules[self::FIELD_OCCURRENCE_TIMING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OCCURRENCE_TIMING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_TIMING])) {
                        $errs[self::FIELD_OCCURRENCE_TIMING] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_TIMING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETECTED])) {
            $v = $this->getDetected();
            foreach($validationRules[self::FIELD_DETECTED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DETECTED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETECTED])) {
                        $errs[self::FIELD_DETECTED] = [];
                    }
                    $errs[self::FIELD_DETECTED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RECORDED_DATE])) {
            $v = $this->getRecordedDate();
            foreach($validationRules[self::FIELD_RECORDED_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RECORDED_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECORDED_DATE])) {
                        $errs[self::FIELD_RECORDED_DATE] = [];
                    }
                    $errs[self::FIELD_RECORDED_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESULTING_EFFECT])) {
            $v = $this->getResultingEffect();
            foreach($validationRules[self::FIELD_RESULTING_EFFECT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RESULTING_EFFECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESULTING_EFFECT])) {
                        $errs[self::FIELD_RESULTING_EFFECT] = [];
                    }
                    $errs[self::FIELD_RESULTING_EFFECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCATION])) {
            $v = $this->getLocation();
            foreach($validationRules[self::FIELD_LOCATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION])) {
                        $errs[self::FIELD_LOCATION] = [];
                    }
                    $errs[self::FIELD_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERIOUSNESS])) {
            $v = $this->getSeriousness();
            foreach($validationRules[self::FIELD_SERIOUSNESS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SERIOUSNESS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERIOUSNESS])) {
                        $errs[self::FIELD_SERIOUSNESS] = [];
                    }
                    $errs[self::FIELD_SERIOUSNESS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OUTCOME])) {
            $v = $this->getOutcome();
            foreach($validationRules[self::FIELD_OUTCOME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OUTCOME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OUTCOME])) {
                        $errs[self::FIELD_OUTCOME] = [];
                    }
                    $errs[self::FIELD_OUTCOME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RECORDER])) {
            $v = $this->getRecorder();
            foreach($validationRules[self::FIELD_RECORDER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RECORDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECORDER])) {
                        $errs[self::FIELD_RECORDER] = [];
                    }
                    $errs[self::FIELD_RECORDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARTICIPANT])) {
            $v = $this->getParticipant();
            foreach($validationRules[self::FIELD_PARTICIPANT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PARTICIPANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARTICIPANT])) {
                        $errs[self::FIELD_PARTICIPANT] = [];
                    }
                    $errs[self::FIELD_PARTICIPANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STUDY])) {
            $v = $this->getStudy();
            foreach($validationRules[self::FIELD_STUDY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STUDY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STUDY])) {
                        $errs[self::FIELD_STUDY] = [];
                    }
                    $errs[self::FIELD_STUDY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXPECTED_IN_RESEARCH_STUDY])) {
            $v = $this->getExpectedInResearchStudy();
            foreach($validationRules[self::FIELD_EXPECTED_IN_RESEARCH_STUDY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXPECTED_IN_RESEARCH_STUDY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPECTED_IN_RESEARCH_STUDY])) {
                        $errs[self::FIELD_EXPECTED_IN_RESEARCH_STUDY] = [];
                    }
                    $errs[self::FIELD_EXPECTED_IN_RESEARCH_STUDY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUSPECT_ENTITY])) {
            $v = $this->getSuspectEntity();
            foreach($validationRules[self::FIELD_SUSPECT_ENTITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUSPECT_ENTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUSPECT_ENTITY])) {
                        $errs[self::FIELD_SUSPECT_ENTITY] = [];
                    }
                    $errs[self::FIELD_SUSPECT_ENTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTRIBUTING_FACTOR])) {
            $v = $this->getContributingFactor();
            foreach($validationRules[self::FIELD_CONTRIBUTING_FACTOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTRIBUTING_FACTOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTRIBUTING_FACTOR])) {
                        $errs[self::FIELD_CONTRIBUTING_FACTOR] = [];
                    }
                    $errs[self::FIELD_CONTRIBUTING_FACTOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PREVENTIVE_ACTION])) {
            $v = $this->getPreventiveAction();
            foreach($validationRules[self::FIELD_PREVENTIVE_ACTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PREVENTIVE_ACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PREVENTIVE_ACTION])) {
                        $errs[self::FIELD_PREVENTIVE_ACTION] = [];
                    }
                    $errs[self::FIELD_PREVENTIVE_ACTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MITIGATING_ACTION])) {
            $v = $this->getMitigatingAction();
            foreach($validationRules[self::FIELD_MITIGATING_ACTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MITIGATING_ACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MITIGATING_ACTION])) {
                        $errs[self::FIELD_MITIGATING_ACTION] = [];
                    }
                    $errs[self::FIELD_MITIGATING_ACTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUPPORTING_INFO])) {
            $v = $this->getSupportingInfo();
            foreach($validationRules[self::FIELD_SUPPORTING_INFO] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUPPORTING_INFO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUPPORTING_INFO])) {
                        $errs[self::FIELD_SUPPORTING_INFO] = [];
                    }
                    $errs[self::FIELD_SUPPORTING_INFO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEXT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTAINED, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_META, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LANGUAGE, $rule, $constraint, $v);
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
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAdverseEvent $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAdverseEvent)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_ID === $childName) {
                $v = new FHIRId(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setId(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_META === $childName) {
                $v = new FHIRMeta();
                $type->setMeta(FHIRMeta::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $childName) {
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LANGUAGE === $childName) {
                $v = new FHIRCode(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setLanguage(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TEXT === $childName) {
                $v = new FHIRNarrative();
                $type->setText(FHIRNarrative::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($nn);
                    $type->addContained($cn::xmlUnserialize($nn, null, $config));
                }
            } else if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STATUS === $childName) {
                $v = new FHIRAdverseEventStatus(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setStatus(FHIRAdverseEventStatus::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ACTUALITY === $childName) {
                $v = new FHIRAdverseEventActuality(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setActuality(FHIRAdverseEventActuality::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CATEGORY === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addCategory(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CODE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUBJECT === $childName) {
                $v = new FHIRReference();
                $type->setSubject(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ENCOUNTER === $childName) {
                $v = new FHIRReference();
                $type->setEncounter(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_OCCURRENCE_DATE_TIME === $childName) {
                $v = new FHIRDateTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setOccurrenceDateTime(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_OCCURRENCE_PERIOD === $childName) {
                $v = new FHIRPeriod();
                $type->setOccurrencePeriod(FHIRPeriod::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_OCCURRENCE_TIMING === $childName) {
                $v = new FHIRTiming();
                $type->setOccurrenceTiming(FHIRTiming::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DETECTED === $childName) {
                $v = new FHIRDateTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDetected(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RECORDED_DATE === $childName) {
                $v = new FHIRDateTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setRecordedDate(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RESULTING_EFFECT === $childName) {
                $v = new FHIRReference();
                $type->addResultingEffect(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LOCATION === $childName) {
                $v = new FHIRReference();
                $type->setLocation(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SERIOUSNESS === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setSeriousness(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_OUTCOME === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addOutcome(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RECORDER === $childName) {
                $v = new FHIRReference();
                $type->setRecorder(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PARTICIPANT === $childName) {
                $v = new FHIRAdverseEventParticipant();
                $type->addParticipant(FHIRAdverseEventParticipant::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STUDY === $childName) {
                $v = new FHIRReference();
                $type->addStudy(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXPECTED_IN_RESEARCH_STUDY === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setExpectedInResearchStudy(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUSPECT_ENTITY === $childName) {
                $v = new FHIRAdverseEventSuspectEntity();
                $type->addSuspectEntity(FHIRAdverseEventSuspectEntity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTRIBUTING_FACTOR === $childName) {
                $v = new FHIRAdverseEventContributingFactor();
                $type->addContributingFactor(FHIRAdverseEventContributingFactor::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PREVENTIVE_ACTION === $childName) {
                $v = new FHIRAdverseEventPreventiveAction();
                $type->addPreventiveAction(FHIRAdverseEventPreventiveAction::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MITIGATING_ACTION === $childName) {
                $v = new FHIRAdverseEventMitigatingAction();
                $type->addMitigatingAction(FHIRAdverseEventMitigatingAction::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUPPORTING_INFO === $childName) {
                $v = new FHIRAdverseEventSupportingInfo();
                $type->addSupportingInfo(FHIRAdverseEventSupportingInfo::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NOTE === $childName) {
                $v = new FHIRAnnotation();
                $type->addNote(FHIRAnnotation::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRId(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules(new FHIRUri(
                    value: (string)$attributes[self::FIELD_IMPLICIT_RULES],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_LANGUAGE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage(new FHIRCode(
                    value: (string)$attributes[self::FIELD_LANGUAGE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_OCCURRENCE_DATE_TIME])) {
            $pt = $type->getOccurrenceDateTime();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_OCCURRENCE_DATE_TIME]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setOccurrenceDateTime(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_OCCURRENCE_DATE_TIME],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DETECTED])) {
            $pt = $type->getDetected();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DETECTED]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDetected(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_DETECTED],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_RECORDED_DATE])) {
            $pt = $type->getRecordedDate();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_RECORDED_DATE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setRecordedDate(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_RECORDED_DATE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_EXPECTED_IN_RESEARCH_STUDY])) {
            $pt = $type->getExpectedInResearchStudy();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_EXPECTED_IN_RESEARCH_STUDY]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setExpectedInResearchStudy(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_EXPECTED_IN_RESEARCH_STUDY],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('AdverseEvent', $this->_getSourceXMLNS());
        }
        if (isset($this->occurrenceDateTime) && $this->occurrenceDateTime->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_OCCURRENCE_DATE_TIME, $this->occurrenceDateTime->getValue()?->_getFormattedValue());
        }
        if (isset($this->detected) && $this->detected->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DETECTED, $this->detected->getValue()?->_getFormattedValue());
        }
        if (isset($this->recordedDate) && $this->recordedDate->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_RECORDED_DATE, $this->recordedDate->getValue()?->_getFormattedValue());
        }
        if (isset($this->expectedInResearchStudy) && $this->expectedInResearchStudy->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_EXPECTED_IN_RESEARCH_STUDY, $this->expectedInResearchStudy->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->status)) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->actuality)) {
            $xw->startElement(self::FIELD_ACTUALITY);
            $this->actuality->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->category)) {
            foreach ($this->category as $v) {
                $xw->startElement(self::FIELD_CATEGORY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->code)) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->subject)) {
            $xw->startElement(self::FIELD_SUBJECT);
            $this->subject->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->encounter)) {
            $xw->startElement(self::FIELD_ENCOUNTER);
            $this->encounter->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->occurrenceDateTime) && $this->occurrenceDateTime->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_OCCURRENCE_DATE_TIME);
            $this->occurrenceDateTime->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->occurrencePeriod)) {
            $xw->startElement(self::FIELD_OCCURRENCE_PERIOD);
            $this->occurrencePeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->occurrenceTiming)) {
            $xw->startElement(self::FIELD_OCCURRENCE_TIMING);
            $this->occurrenceTiming->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->detected) && $this->detected->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DETECTED);
            $this->detected->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->recordedDate) && $this->recordedDate->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_RECORDED_DATE);
            $this->recordedDate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->resultingEffect)) {
            foreach ($this->resultingEffect as $v) {
                $xw->startElement(self::FIELD_RESULTING_EFFECT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->location)) {
            $xw->startElement(self::FIELD_LOCATION);
            $this->location->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->seriousness)) {
            $xw->startElement(self::FIELD_SERIOUSNESS);
            $this->seriousness->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->outcome)) {
            foreach ($this->outcome as $v) {
                $xw->startElement(self::FIELD_OUTCOME);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->recorder)) {
            $xw->startElement(self::FIELD_RECORDER);
            $this->recorder->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->participant)) {
            foreach ($this->participant as $v) {
                $xw->startElement(self::FIELD_PARTICIPANT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->study)) {
            foreach ($this->study as $v) {
                $xw->startElement(self::FIELD_STUDY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->expectedInResearchStudy) && $this->expectedInResearchStudy->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_EXPECTED_IN_RESEARCH_STUDY);
            $this->expectedInResearchStudy->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->suspectEntity)) {
            foreach ($this->suspectEntity as $v) {
                $xw->startElement(self::FIELD_SUSPECT_ENTITY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->contributingFactor)) {
            foreach ($this->contributingFactor as $v) {
                $xw->startElement(self::FIELD_CONTRIBUTING_FACTOR);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->preventiveAction)) {
            foreach ($this->preventiveAction as $v) {
                $xw->startElement(self::FIELD_PREVENTIVE_ACTION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->mitigatingAction)) {
            foreach ($this->mitigatingAction as $v) {
                $xw->startElement(self::FIELD_MITIGATING_ACTION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->supportingInfo)) {
            foreach ($this->supportingInfo as $v) {
                $xw->startElement(self::FIELD_SUPPORTING_INFO);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->note)) {
            foreach ($this->note as $v) {
                $xw->startElement(self::FIELD_NOTE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAdverseEvent $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAdverseEvent)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_IDENTIFIER]) || array_key_exists(self::FIELD_IDENTIFIER, $json)) {
            $vs = $json[self::FIELD_IDENTIFIER];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_STATUS]) || isset($json[self::FIELD_STATUS_EXT]) || array_key_exists(self::FIELD_STATUS, $json) || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $ext = (array)($json[self::FIELD_STATUS_EXT] ?? []);
            $type->setStatus(FHIRAdverseEventStatus::jsonUnserialize(
                json: [FHIRAdverseEventStatus::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ACTUALITY]) || isset($json[self::FIELD_ACTUALITY_EXT]) || array_key_exists(self::FIELD_ACTUALITY, $json) || array_key_exists(self::FIELD_ACTUALITY_EXT, $json)) {
            $value = $json[self::FIELD_ACTUALITY] ?? null;
            $ext = (array)($json[self::FIELD_ACTUALITY_EXT] ?? []);
            $type->setActuality(FHIRAdverseEventActuality::jsonUnserialize(
                json: [FHIRAdverseEventActuality::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_CATEGORY]) || array_key_exists(self::FIELD_CATEGORY, $json)) {
            $vs = $json[self::FIELD_CATEGORY];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addCategory(FHIRCodeableConcept::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_CODE]) || array_key_exists(self::FIELD_CODE, $json)) {
            $type->setCode(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_CODE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_SUBJECT]) || array_key_exists(self::FIELD_SUBJECT, $json)) {
            $type->setSubject(FHIRReference::jsonUnserialize(
                json: $json[self::FIELD_SUBJECT],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ENCOUNTER]) || array_key_exists(self::FIELD_ENCOUNTER, $json)) {
            $type->setEncounter(FHIRReference::jsonUnserialize(
                json: $json[self::FIELD_ENCOUNTER],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_OCCURRENCE_DATE_TIME]) || isset($json[self::FIELD_OCCURRENCE_DATE_TIME_EXT]) || array_key_exists(self::FIELD_OCCURRENCE_DATE_TIME, $json) || array_key_exists(self::FIELD_OCCURRENCE_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_OCCURRENCE_DATE_TIME] ?? null;
            $ext = (array)($json[self::FIELD_OCCURRENCE_DATE_TIME_EXT] ?? []);
            $type->setOccurrenceDateTime(FHIRDateTime::jsonUnserialize(
                json: [FHIRDateTime::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_OCCURRENCE_PERIOD]) || array_key_exists(self::FIELD_OCCURRENCE_PERIOD, $json)) {
            $type->setOccurrencePeriod(FHIRPeriod::jsonUnserialize(
                json: $json[self::FIELD_OCCURRENCE_PERIOD],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_OCCURRENCE_TIMING]) || array_key_exists(self::FIELD_OCCURRENCE_TIMING, $json)) {
            $type->setOccurrenceTiming(FHIRTiming::jsonUnserialize(
                json: $json[self::FIELD_OCCURRENCE_TIMING],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DETECTED]) || isset($json[self::FIELD_DETECTED_EXT]) || array_key_exists(self::FIELD_DETECTED, $json) || array_key_exists(self::FIELD_DETECTED_EXT, $json)) {
            $value = $json[self::FIELD_DETECTED] ?? null;
            $ext = (array)($json[self::FIELD_DETECTED_EXT] ?? []);
            $type->setDetected(FHIRDateTime::jsonUnserialize(
                json: [FHIRDateTime::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_RECORDED_DATE]) || isset($json[self::FIELD_RECORDED_DATE_EXT]) || array_key_exists(self::FIELD_RECORDED_DATE, $json) || array_key_exists(self::FIELD_RECORDED_DATE_EXT, $json)) {
            $value = $json[self::FIELD_RECORDED_DATE] ?? null;
            $ext = (array)($json[self::FIELD_RECORDED_DATE_EXT] ?? []);
            $type->setRecordedDate(FHIRDateTime::jsonUnserialize(
                json: [FHIRDateTime::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_RESULTING_EFFECT]) || array_key_exists(self::FIELD_RESULTING_EFFECT, $json)) {
            $vs = $json[self::FIELD_RESULTING_EFFECT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addResultingEffect(FHIRReference::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_LOCATION]) || array_key_exists(self::FIELD_LOCATION, $json)) {
            $type->setLocation(FHIRReference::jsonUnserialize(
                json: $json[self::FIELD_LOCATION],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_SERIOUSNESS]) || array_key_exists(self::FIELD_SERIOUSNESS, $json)) {
            $type->setSeriousness(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_SERIOUSNESS],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_OUTCOME]) || array_key_exists(self::FIELD_OUTCOME, $json)) {
            $vs = $json[self::FIELD_OUTCOME];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addOutcome(FHIRCodeableConcept::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_RECORDER]) || array_key_exists(self::FIELD_RECORDER, $json)) {
            $type->setRecorder(FHIRReference::jsonUnserialize(
                json: $json[self::FIELD_RECORDER],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PARTICIPANT]) || array_key_exists(self::FIELD_PARTICIPANT, $json)) {
            $vs = $json[self::FIELD_PARTICIPANT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addParticipant(FHIRAdverseEventParticipant::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_STUDY]) || array_key_exists(self::FIELD_STUDY, $json)) {
            $vs = $json[self::FIELD_STUDY];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addStudy(FHIRReference::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_EXPECTED_IN_RESEARCH_STUDY]) || isset($json[self::FIELD_EXPECTED_IN_RESEARCH_STUDY_EXT]) || array_key_exists(self::FIELD_EXPECTED_IN_RESEARCH_STUDY, $json) || array_key_exists(self::FIELD_EXPECTED_IN_RESEARCH_STUDY_EXT, $json)) {
            $value = $json[self::FIELD_EXPECTED_IN_RESEARCH_STUDY] ?? null;
            $ext = (array)($json[self::FIELD_EXPECTED_IN_RESEARCH_STUDY_EXT] ?? []);
            $type->setExpectedInResearchStudy(FHIRBoolean::jsonUnserialize(
                json: [FHIRBoolean::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_SUSPECT_ENTITY]) || array_key_exists(self::FIELD_SUSPECT_ENTITY, $json)) {
            $vs = $json[self::FIELD_SUSPECT_ENTITY];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addSuspectEntity(FHIRAdverseEventSuspectEntity::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_CONTRIBUTING_FACTOR]) || array_key_exists(self::FIELD_CONTRIBUTING_FACTOR, $json)) {
            $vs = $json[self::FIELD_CONTRIBUTING_FACTOR];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addContributingFactor(FHIRAdverseEventContributingFactor::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_PREVENTIVE_ACTION]) || array_key_exists(self::FIELD_PREVENTIVE_ACTION, $json)) {
            $vs = $json[self::FIELD_PREVENTIVE_ACTION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addPreventiveAction(FHIRAdverseEventPreventiveAction::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_MITIGATING_ACTION]) || array_key_exists(self::FIELD_MITIGATING_ACTION, $json)) {
            $vs = $json[self::FIELD_MITIGATING_ACTION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addMitigatingAction(FHIRAdverseEventMitigatingAction::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_SUPPORTING_INFO]) || array_key_exists(self::FIELD_SUPPORTING_INFO, $json)) {
            $vs = $json[self::FIELD_SUPPORTING_INFO];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addSupportingInfo(FHIRAdverseEventSupportingInfo::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_NOTE]) || array_key_exists(self::FIELD_NOTE, $json)) {
            $vs = $json[self::FIELD_NOTE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addNote(FHIRAnnotation::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->identifier) && [] !== $this->identifier) {
            $out->identifier = $this->identifier;
        }
        if (isset($this->status)) {
            if (null !== ($val = $this->status->getValue())) {
                $out->status = $val;
            }
            $ext = $this->status->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_status = $ext;
            }
        }
        if (isset($this->actuality)) {
            if (null !== ($val = $this->actuality->getValue())) {
                $out->actuality = $val;
            }
            $ext = $this->actuality->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_actuality = $ext;
            }
        }
        if (isset($this->category) && [] !== $this->category) {
            $out->category = $this->category;
        }
        if (isset($this->code)) {
            $out->code = $this->code;
        }
        if (isset($this->subject)) {
            $out->subject = $this->subject;
        }
        if (isset($this->encounter)) {
            $out->encounter = $this->encounter;
        }
        if (isset($this->occurrenceDateTime)) {
            if (null !== ($val = $this->occurrenceDateTime->getValue())) {
                $out->occurrenceDateTime = $val;
            }
            $ext = $this->occurrenceDateTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_occurrenceDateTime = $ext;
            }
        }
        if (isset($this->occurrencePeriod)) {
            $out->occurrencePeriod = $this->occurrencePeriod;
        }
        if (isset($this->occurrenceTiming)) {
            $out->occurrenceTiming = $this->occurrenceTiming;
        }
        if (isset($this->detected)) {
            if (null !== ($val = $this->detected->getValue())) {
                $out->detected = $val;
            }
            $ext = $this->detected->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_detected = $ext;
            }
        }
        if (isset($this->recordedDate)) {
            if (null !== ($val = $this->recordedDate->getValue())) {
                $out->recordedDate = $val;
            }
            $ext = $this->recordedDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_recordedDate = $ext;
            }
        }
        if (isset($this->resultingEffect) && [] !== $this->resultingEffect) {
            $out->resultingEffect = $this->resultingEffect;
        }
        if (isset($this->location)) {
            $out->location = $this->location;
        }
        if (isset($this->seriousness)) {
            $out->seriousness = $this->seriousness;
        }
        if (isset($this->outcome) && [] !== $this->outcome) {
            $out->outcome = $this->outcome;
        }
        if (isset($this->recorder)) {
            $out->recorder = $this->recorder;
        }
        if (isset($this->participant) && [] !== $this->participant) {
            $out->participant = $this->participant;
        }
        if (isset($this->study) && [] !== $this->study) {
            $out->study = $this->study;
        }
        if (isset($this->expectedInResearchStudy)) {
            if (null !== ($val = $this->expectedInResearchStudy->getValue())) {
                $out->expectedInResearchStudy = $val;
            }
            $ext = $this->expectedInResearchStudy->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_expectedInResearchStudy = $ext;
            }
        }
        if (isset($this->suspectEntity) && [] !== $this->suspectEntity) {
            $out->suspectEntity = $this->suspectEntity;
        }
        if (isset($this->contributingFactor) && [] !== $this->contributingFactor) {
            $out->contributingFactor = $this->contributingFactor;
        }
        if (isset($this->preventiveAction) && [] !== $this->preventiveAction) {
            $out->preventiveAction = $this->preventiveAction;
        }
        if (isset($this->mitigatingAction) && [] !== $this->mitigatingAction) {
            $out->mitigatingAction = $this->mitigatingAction;
        }
        if (isset($this->supportingInfo) && [] !== $this->supportingInfo) {
            $out->supportingInfo = $this->supportingInfo;
        }
        if (isset($this->note) && [] !== $this->note) {
            $out->note = $this->note;
        }
        $out->resourceType = $this->_getResourceType();
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
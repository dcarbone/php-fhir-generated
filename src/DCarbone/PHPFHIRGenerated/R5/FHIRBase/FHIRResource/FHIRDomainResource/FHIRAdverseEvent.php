<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 10th, 2024 03:24+0000
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

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRAdverseEventActuality;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRAdverseEventStatus;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventContributingFactor;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventMitigatingAction;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventParticipant;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventPreventiveAction;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSupportingInfo;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeMap;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

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
 *
 * Class FHIRAdverseEvent
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource
 */
class FHIRAdverseEvent extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_ACTUALITY = 'actuality';
    const FIELD_ACTUALITY_EXT = '_actuality';
    const FIELD_CATEGORY = 'category';
    const FIELD_CODE = 'code';
    const FIELD_SUBJECT = 'subject';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_OCCURRENCE_DATE_TIME = 'occurrenceDateTime';
    const FIELD_OCCURRENCE_DATE_TIME_EXT = '_occurrenceDateTime';
    const FIELD_OCCURRENCE_PERIOD = 'occurrencePeriod';
    const FIELD_OCCURRENCE_TIMING = 'occurrenceTiming';
    const FIELD_DETECTED = 'detected';
    const FIELD_DETECTED_EXT = '_detected';
    const FIELD_RECORDED_DATE = 'recordedDate';
    const FIELD_RECORDED_DATE_EXT = '_recordedDate';
    const FIELD_RESULTING_EFFECT = 'resultingEffect';
    const FIELD_LOCATION = 'location';
    const FIELD_SERIOUSNESS = 'seriousness';
    const FIELD_OUTCOME = 'outcome';
    const FIELD_RECORDER = 'recorder';
    const FIELD_PARTICIPANT = 'participant';
    const FIELD_STUDY = 'study';
    const FIELD_EXPECTED_IN_RESEARCH_STUDY = 'expectedInResearchStudy';
    const FIELD_EXPECTED_IN_RESEARCH_STUDY_EXT = '_expectedInResearchStudy';
    const FIELD_SUSPECT_ENTITY = 'suspectEntity';
    const FIELD_CONTRIBUTING_FACTOR = 'contributingFactor';
    const FIELD_PREVENTIVE_ACTION = 'preventiveAction';
    const FIELD_MITIGATING_ACTION = 'mitigatingAction';
    const FIELD_SUPPORTING_INFO = 'supportingInfo';
    const FIELD_NOTE = 'note';

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
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of the adverse event or potential adverse event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRAdverseEventStatus
     */
    protected null|FHIRAdverseEventStatus $status = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the event actually happened or was a near miss. Note that this is
     * independent of whether anyone was affected or harmed or how severely.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRAdverseEventActuality
     */
    protected null|FHIRAdverseEventActuality $actuality = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The overall type of event, intended for search and filtering purposes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $category = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific event that occurred or that was averted, such as patient fall, wrong
     * organ removed, or wrong blood transfused.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $code = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This subject or group impacted by the event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $subject = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Encounter associated with the start of the AdverseEvent.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $encounter = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $occurrenceDateTime = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date (and perhaps time) when the adverse event occurred.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    protected null|FHIRPeriod $occurrencePeriod = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming
     */
    protected null|FHIRTiming $occurrenceTiming = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $detected = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $recordedDate = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information about the condition that occurred as a result of the adverse event,
     * such as hives due to the exposure to a substance (for example, a drug or a
     * chemical) or a broken leg as a result of the fall.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $resultingEffect = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information about where the adverse event occurred.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $location = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Assessment whether this event, or averted event, was of clinical importance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $seriousness = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the type of outcome from the adverse event, such as resolved,
     * recovering, ongoing, resolved-with-sequelae, or fatal.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $outcome = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information on who recorded the adverse event. May be the patient or a
     * practitioner.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $recorder = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventParticipant[]
     */
    protected null|array $participant = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The research study that the subject is enrolled in.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $study = [];
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Considered likely or probable or anticipated in the research study. Whether the
     * reported event matches any of the outcomes for the patient that are considered
     * by the study as known or likely.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $expectedInResearchStudy = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity[]
     */
    protected null|array $suspectEntity = [];
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
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventContributingFactor[]
     */
    protected null|array $contributingFactor = [];
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
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventPreventiveAction[]
     */
    protected null|array $preventiveAction = [];
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
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventMitigatingAction[]
     */
    protected null|array $mitigatingAction = [];
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
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSupportingInfo[]
     */
    protected null|array $supportingInfo = [];
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the adverse event by the performer, subject or other
     * participants.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    protected null|array $note = [];

    /**
     * Validation map for fields in type AdverseEvent
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRAdverseEvent Constructor
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
        if (array_key_exists(self::FIELD_STATUS, $data) || array_key_exists(self::FIELD_STATUS_EXT, $data)) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAdverseEventStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRAdverseEventStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRAdverseEventStatus([FHIRAdverseEventStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRAdverseEventStatus($ext));
            } else {
                $this->setStatus(new FHIRAdverseEventStatus(null));
            }
        }
        if (array_key_exists(self::FIELD_ACTUALITY, $data) || array_key_exists(self::FIELD_ACTUALITY_EXT, $data)) {
            $value = $data[self::FIELD_ACTUALITY] ?? null;
            $ext = (isset($data[self::FIELD_ACTUALITY_EXT]) && is_array($data[self::FIELD_ACTUALITY_EXT])) ? $data[self::FIELD_ACTUALITY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAdverseEventActuality) {
                    $this->setActuality($value);
                } else if (is_array($value)) {
                    $this->setActuality(new FHIRAdverseEventActuality(array_merge($ext, $value)));
                } else {
                    $this->setActuality(new FHIRAdverseEventActuality([FHIRAdverseEventActuality::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setActuality(new FHIRAdverseEventActuality($ext));
            } else {
                $this->setActuality(new FHIRAdverseEventActuality(null));
            }
        }
        if (array_key_exists(self::FIELD_CATEGORY, $data)) {
            if (is_array($data[self::FIELD_CATEGORY])) {
                foreach($data[self::FIELD_CATEGORY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCategory($v);
                    } else {
                        $this->addCategory(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->addCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->addCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
            }
        }
        if (array_key_exists(self::FIELD_CODE, $data)) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (array_key_exists(self::FIELD_SUBJECT, $data)) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (array_key_exists(self::FIELD_ENCOUNTER, $data)) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIRReference($data[self::FIELD_ENCOUNTER]));
            }
        }
        if (array_key_exists(self::FIELD_OCCURRENCE_DATE_TIME, $data) || array_key_exists(self::FIELD_OCCURRENCE_DATE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_OCCURRENCE_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_OCCURRENCE_DATE_TIME_EXT]) && is_array($data[self::FIELD_OCCURRENCE_DATE_TIME_EXT])) ? $data[self::FIELD_OCCURRENCE_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setOccurrenceDateTime($value);
                } else if (is_array($value)) {
                    $this->setOccurrenceDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setOccurrenceDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOccurrenceDateTime(new FHIRDateTime($ext));
            } else {
                $this->setOccurrenceDateTime(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_OCCURRENCE_PERIOD, $data)) {
            if ($data[self::FIELD_OCCURRENCE_PERIOD] instanceof FHIRPeriod) {
                $this->setOccurrencePeriod($data[self::FIELD_OCCURRENCE_PERIOD]);
            } else {
                $this->setOccurrencePeriod(new FHIRPeriod($data[self::FIELD_OCCURRENCE_PERIOD]));
            }
        }
        if (array_key_exists(self::FIELD_OCCURRENCE_TIMING, $data)) {
            if ($data[self::FIELD_OCCURRENCE_TIMING] instanceof FHIRTiming) {
                $this->setOccurrenceTiming($data[self::FIELD_OCCURRENCE_TIMING]);
            } else {
                $this->setOccurrenceTiming(new FHIRTiming($data[self::FIELD_OCCURRENCE_TIMING]));
            }
        }
        if (array_key_exists(self::FIELD_DETECTED, $data) || array_key_exists(self::FIELD_DETECTED_EXT, $data)) {
            $value = $data[self::FIELD_DETECTED] ?? null;
            $ext = (isset($data[self::FIELD_DETECTED_EXT]) && is_array($data[self::FIELD_DETECTED_EXT])) ? $data[self::FIELD_DETECTED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDetected($value);
                } else if (is_array($value)) {
                    $this->setDetected(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDetected(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDetected(new FHIRDateTime($ext));
            } else {
                $this->setDetected(new FHIRDateTime(null));
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
        if (array_key_exists(self::FIELD_RESULTING_EFFECT, $data)) {
            if (is_array($data[self::FIELD_RESULTING_EFFECT])) {
                foreach($data[self::FIELD_RESULTING_EFFECT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addResultingEffect($v);
                    } else {
                        $this->addResultingEffect(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_RESULTING_EFFECT] instanceof FHIRReference) {
                $this->addResultingEffect($data[self::FIELD_RESULTING_EFFECT]);
            } else {
                $this->addResultingEffect(new FHIRReference($data[self::FIELD_RESULTING_EFFECT]));
            }
        }
        if (array_key_exists(self::FIELD_LOCATION, $data)) {
            if ($data[self::FIELD_LOCATION] instanceof FHIRReference) {
                $this->setLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->setLocation(new FHIRReference($data[self::FIELD_LOCATION]));
            }
        }
        if (array_key_exists(self::FIELD_SERIOUSNESS, $data)) {
            if ($data[self::FIELD_SERIOUSNESS] instanceof FHIRCodeableConcept) {
                $this->setSeriousness($data[self::FIELD_SERIOUSNESS]);
            } else {
                $this->setSeriousness(new FHIRCodeableConcept($data[self::FIELD_SERIOUSNESS]));
            }
        }
        if (array_key_exists(self::FIELD_OUTCOME, $data)) {
            if (is_array($data[self::FIELD_OUTCOME])) {
                foreach($data[self::FIELD_OUTCOME] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addOutcome($v);
                    } else {
                        $this->addOutcome(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_OUTCOME] instanceof FHIRCodeableConcept) {
                $this->addOutcome($data[self::FIELD_OUTCOME]);
            } else {
                $this->addOutcome(new FHIRCodeableConcept($data[self::FIELD_OUTCOME]));
            }
        }
        if (array_key_exists(self::FIELD_RECORDER, $data)) {
            if ($data[self::FIELD_RECORDER] instanceof FHIRReference) {
                $this->setRecorder($data[self::FIELD_RECORDER]);
            } else {
                $this->setRecorder(new FHIRReference($data[self::FIELD_RECORDER]));
            }
        }
        if (array_key_exists(self::FIELD_PARTICIPANT, $data)) {
            if (is_array($data[self::FIELD_PARTICIPANT])) {
                foreach($data[self::FIELD_PARTICIPANT] as $v) {
                    if ($v instanceof FHIRAdverseEventParticipant) {
                        $this->addParticipant($v);
                    } else {
                        $this->addParticipant(new FHIRAdverseEventParticipant($v));
                    }
                }
            } elseif ($data[self::FIELD_PARTICIPANT] instanceof FHIRAdverseEventParticipant) {
                $this->addParticipant($data[self::FIELD_PARTICIPANT]);
            } else {
                $this->addParticipant(new FHIRAdverseEventParticipant($data[self::FIELD_PARTICIPANT]));
            }
        }
        if (array_key_exists(self::FIELD_STUDY, $data)) {
            if (is_array($data[self::FIELD_STUDY])) {
                foreach($data[self::FIELD_STUDY] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addStudy($v);
                    } else {
                        $this->addStudy(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_STUDY] instanceof FHIRReference) {
                $this->addStudy($data[self::FIELD_STUDY]);
            } else {
                $this->addStudy(new FHIRReference($data[self::FIELD_STUDY]));
            }
        }
        if (array_key_exists(self::FIELD_EXPECTED_IN_RESEARCH_STUDY, $data) || array_key_exists(self::FIELD_EXPECTED_IN_RESEARCH_STUDY_EXT, $data)) {
            $value = $data[self::FIELD_EXPECTED_IN_RESEARCH_STUDY] ?? null;
            $ext = (isset($data[self::FIELD_EXPECTED_IN_RESEARCH_STUDY_EXT]) && is_array($data[self::FIELD_EXPECTED_IN_RESEARCH_STUDY_EXT])) ? $data[self::FIELD_EXPECTED_IN_RESEARCH_STUDY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setExpectedInResearchStudy($value);
                } else if (is_array($value)) {
                    $this->setExpectedInResearchStudy(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setExpectedInResearchStudy(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExpectedInResearchStudy(new FHIRBoolean($ext));
            } else {
                $this->setExpectedInResearchStudy(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_SUSPECT_ENTITY, $data)) {
            if (is_array($data[self::FIELD_SUSPECT_ENTITY])) {
                foreach($data[self::FIELD_SUSPECT_ENTITY] as $v) {
                    if ($v instanceof FHIRAdverseEventSuspectEntity) {
                        $this->addSuspectEntity($v);
                    } else {
                        $this->addSuspectEntity(new FHIRAdverseEventSuspectEntity($v));
                    }
                }
            } elseif ($data[self::FIELD_SUSPECT_ENTITY] instanceof FHIRAdverseEventSuspectEntity) {
                $this->addSuspectEntity($data[self::FIELD_SUSPECT_ENTITY]);
            } else {
                $this->addSuspectEntity(new FHIRAdverseEventSuspectEntity($data[self::FIELD_SUSPECT_ENTITY]));
            }
        }
        if (array_key_exists(self::FIELD_CONTRIBUTING_FACTOR, $data)) {
            if (is_array($data[self::FIELD_CONTRIBUTING_FACTOR])) {
                foreach($data[self::FIELD_CONTRIBUTING_FACTOR] as $v) {
                    if ($v instanceof FHIRAdverseEventContributingFactor) {
                        $this->addContributingFactor($v);
                    } else {
                        $this->addContributingFactor(new FHIRAdverseEventContributingFactor($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTRIBUTING_FACTOR] instanceof FHIRAdverseEventContributingFactor) {
                $this->addContributingFactor($data[self::FIELD_CONTRIBUTING_FACTOR]);
            } else {
                $this->addContributingFactor(new FHIRAdverseEventContributingFactor($data[self::FIELD_CONTRIBUTING_FACTOR]));
            }
        }
        if (array_key_exists(self::FIELD_PREVENTIVE_ACTION, $data)) {
            if (is_array($data[self::FIELD_PREVENTIVE_ACTION])) {
                foreach($data[self::FIELD_PREVENTIVE_ACTION] as $v) {
                    if ($v instanceof FHIRAdverseEventPreventiveAction) {
                        $this->addPreventiveAction($v);
                    } else {
                        $this->addPreventiveAction(new FHIRAdverseEventPreventiveAction($v));
                    }
                }
            } elseif ($data[self::FIELD_PREVENTIVE_ACTION] instanceof FHIRAdverseEventPreventiveAction) {
                $this->addPreventiveAction($data[self::FIELD_PREVENTIVE_ACTION]);
            } else {
                $this->addPreventiveAction(new FHIRAdverseEventPreventiveAction($data[self::FIELD_PREVENTIVE_ACTION]));
            }
        }
        if (array_key_exists(self::FIELD_MITIGATING_ACTION, $data)) {
            if (is_array($data[self::FIELD_MITIGATING_ACTION])) {
                foreach($data[self::FIELD_MITIGATING_ACTION] as $v) {
                    if ($v instanceof FHIRAdverseEventMitigatingAction) {
                        $this->addMitigatingAction($v);
                    } else {
                        $this->addMitigatingAction(new FHIRAdverseEventMitigatingAction($v));
                    }
                }
            } elseif ($data[self::FIELD_MITIGATING_ACTION] instanceof FHIRAdverseEventMitigatingAction) {
                $this->addMitigatingAction($data[self::FIELD_MITIGATING_ACTION]);
            } else {
                $this->addMitigatingAction(new FHIRAdverseEventMitigatingAction($data[self::FIELD_MITIGATING_ACTION]));
            }
        }
        if (array_key_exists(self::FIELD_SUPPORTING_INFO, $data)) {
            if (is_array($data[self::FIELD_SUPPORTING_INFO])) {
                foreach($data[self::FIELD_SUPPORTING_INFO] as $v) {
                    if ($v instanceof FHIRAdverseEventSupportingInfo) {
                        $this->addSupportingInfo($v);
                    } else {
                        $this->addSupportingInfo(new FHIRAdverseEventSupportingInfo($v));
                    }
                }
            } elseif ($data[self::FIELD_SUPPORTING_INFO] instanceof FHIRAdverseEventSupportingInfo) {
                $this->addSupportingInfo($data[self::FIELD_SUPPORTING_INFO]);
            } else {
                $this->addSupportingInfo(new FHIRAdverseEventSupportingInfo($data[self::FIELD_SUPPORTING_INFO]));
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
     * Business identifiers assigned to this adverse event by the performer or other
     * systems which remain constant as the resource is updated and propagates from
     * server to server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
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
     * Business identifiers assigned to this adverse event by the performer or other
     * systems which remain constant as the resource is updated and propagates from
     * server to server.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $identifier
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of the adverse event or potential adverse event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRAdverseEventStatus
     */
    public function getStatus(): null|FHIRAdverseEventStatus
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of the adverse event or potential adverse event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRAdverseEventStatus $status
     * @return static
     */
    public function setStatus(null|FHIRAdverseEventStatus $status = null): self
    {
        if (null === $status) {
            $status = new FHIRAdverseEventStatus();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the event actually happened or was a near miss. Note that this is
     * independent of whether anyone was affected or harmed or how severely.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRAdverseEventActuality
     */
    public function getActuality(): null|FHIRAdverseEventActuality
    {
        return $this->actuality;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the event actually happened or was a near miss. Note that this is
     * independent of whether anyone was affected or harmed or how severely.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRAdverseEventActuality $actuality
     * @return static
     */
    public function setActuality(null|FHIRAdverseEventActuality $actuality = null): self
    {
        if (null === $actuality) {
            $actuality = new FHIRAdverseEventActuality();
        }
        $this->_trackValueSet($this->actuality, $actuality);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getCategory(): null|array
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $category
     * @return static
     */
    public function addCategory(null|FHIRCodeableConcept $category = null): self
    {
        if (null === $category) {
            $category = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->category[] = $category;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * Specific event that occurred or that was averted, such as patient fall, wrong
     * organ removed, or wrong blood transfused.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $code
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
     * This subject or group impacted by the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getSubject(): null|FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subject
     * @return static
     */
    public function setSubject(null|FHIRReference $subject = null): self
    {
        if (null === $subject) {
            $subject = new FHIRReference();
        }
        $this->_trackValueSet($this->subject, $subject);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
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
     * The Encounter associated with the start of the AdverseEvent.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $encounter
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
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and perhaps time) when the adverse event occurred.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime(): null|FHIRDateTime
    {
        return $this->occurrenceDateTime;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R5\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime $occurrenceDateTime
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setOccurrenceDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $occurrenceDateTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $occurrenceDateTime && !($occurrenceDateTime instanceof FHIRDateTime)) {
            $occurrenceDateTime = new FHIRDateTime($occurrenceDateTime);
        }
        $this->_trackValueSet($this->occurrenceDateTime, $occurrenceDateTime);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_OCCURRENCE_DATE_TIME])) {
            $this->_primitiveXmlLocations[self::FIELD_OCCURRENCE_DATE_TIME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_OCCURRENCE_DATE_TIME][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    public function getOccurrencePeriod(): null|FHIRPeriod
    {
        return $this->occurrencePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date (and perhaps time) when the adverse event occurred.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $occurrencePeriod
     * @return static
     */
    public function setOccurrencePeriod(null|FHIRPeriod $occurrencePeriod = null): self
    {
        if (null === $occurrencePeriod) {
            $occurrencePeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->occurrencePeriod, $occurrencePeriod);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming
     */
    public function getOccurrenceTiming(): null|FHIRTiming
    {
        return $this->occurrenceTiming;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming $occurrenceTiming
     * @return static
     */
    public function setOccurrenceTiming(null|FHIRTiming $occurrenceTiming = null): self
    {
        if (null === $occurrenceTiming) {
            $occurrenceTiming = new FHIRTiming();
        }
        $this->_trackValueSet($this->occurrenceTiming, $occurrenceTiming);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getDetected(): null|FHIRDateTime
    {
        return $this->detected;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R5\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime $detected
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDetected(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $detected = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $detected && !($detected instanceof FHIRDateTime)) {
            $detected = new FHIRDateTime($detected);
        }
        $this->_trackValueSet($this->detected, $detected);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DETECTED])) {
            $this->_primitiveXmlLocations[self::FIELD_DETECTED] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DETECTED][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getRecordedDate(): null|FHIRDateTime
    {
        return $this->recordedDate;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R5\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime $recordedDate
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setRecordedDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $recordedDate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $recordedDate && !($recordedDate instanceof FHIRDateTime)) {
            $recordedDate = new FHIRDateTime($recordedDate);
        }
        $this->_trackValueSet($this->recordedDate, $recordedDate);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_RECORDED_DATE])) {
            $this->_primitiveXmlLocations[self::FIELD_RECORDED_DATE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_RECORDED_DATE][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getResultingEffect(): null|array
    {
        return $this->resultingEffect;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $resultingEffect
     * @return static
     */
    public function addResultingEffect(null|FHIRReference $resultingEffect = null): self
    {
        if (null === $resultingEffect) {
            $resultingEffect = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->resultingEffect[] = $resultingEffect;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The information about where the adverse event occurred.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getLocation(): null|FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $location
     * @return static
     */
    public function setLocation(null|FHIRReference $location = null): self
    {
        if (null === $location) {
            $location = new FHIRReference();
        }
        $this->_trackValueSet($this->location, $location);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getSeriousness(): null|FHIRCodeableConcept
    {
        return $this->seriousness;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Assessment whether this event, or averted event, was of clinical importance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $seriousness
     * @return static
     */
    public function setSeriousness(null|FHIRCodeableConcept $seriousness = null): self
    {
        if (null === $seriousness) {
            $seriousness = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->seriousness, $seriousness);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getOutcome(): null|array
    {
        return $this->outcome;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $outcome
     * @return static
     */
    public function addOutcome(null|FHIRCodeableConcept $outcome = null): self
    {
        if (null === $outcome) {
            $outcome = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->outcome[] = $outcome;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
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
     * Information on who recorded the adverse event. May be the patient or a
     * practitioner.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $recorder
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventParticipant[]
     */
    public function getParticipant(): null|array
    {
        return $this->participant;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventParticipant $participant
     * @return static
     */
    public function addParticipant(null|FHIRAdverseEventParticipant $participant = null): self
    {
        if (null === $participant) {
            $participant = new FHIRAdverseEventParticipant();
        }
        $this->_trackValueAdded();
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The research study that the subject is enrolled in.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getStudy(): null|array
    {
        return $this->study;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The research study that the subject is enrolled in.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $study
     * @return static
     */
    public function addStudy(null|FHIRReference $study = null): self
    {
        if (null === $study) {
            $study = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->study[] = $study;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getExpectedInResearchStudy(): null|FHIRBoolean
    {
        return $this->expectedInResearchStudy;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Considered likely or probable or anticipated in the research study. Whether the
     * reported event matches any of the outcomes for the patient that are considered
     * by the study as known or likely.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean $expectedInResearchStudy
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setExpectedInResearchStudy(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $expectedInResearchStudy = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $expectedInResearchStudy && !($expectedInResearchStudy instanceof FHIRBoolean)) {
            $expectedInResearchStudy = new FHIRBoolean($expectedInResearchStudy);
        }
        $this->_trackValueSet($this->expectedInResearchStudy, $expectedInResearchStudy);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_EXPECTED_IN_RESEARCH_STUDY])) {
            $this->_primitiveXmlLocations[self::FIELD_EXPECTED_IN_RESEARCH_STUDY] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_EXPECTED_IN_RESEARCH_STUDY][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity[]
     */
    public function getSuspectEntity(): null|array
    {
        return $this->suspectEntity;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity $suspectEntity
     * @return static
     */
    public function addSuspectEntity(null|FHIRAdverseEventSuspectEntity $suspectEntity = null): self
    {
        if (null === $suspectEntity) {
            $suspectEntity = new FHIRAdverseEventSuspectEntity();
        }
        $this->_trackValueAdded();
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
     * The contributing factors suspected to have increased the probability or severity
     * of the adverse event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventContributingFactor[]
     */
    public function getContributingFactor(): null|array
    {
        return $this->contributingFactor;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventContributingFactor $contributingFactor
     * @return static
     */
    public function addContributingFactor(null|FHIRAdverseEventContributingFactor $contributingFactor = null): self
    {
        if (null === $contributingFactor) {
            $contributingFactor = new FHIRAdverseEventContributingFactor();
        }
        $this->_trackValueAdded();
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
     * Preventive actions that contributed to avoiding the adverse event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventPreventiveAction[]
     */
    public function getPreventiveAction(): null|array
    {
        return $this->preventiveAction;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventPreventiveAction $preventiveAction
     * @return static
     */
    public function addPreventiveAction(null|FHIRAdverseEventPreventiveAction $preventiveAction = null): self
    {
        if (null === $preventiveAction) {
            $preventiveAction = new FHIRAdverseEventPreventiveAction();
        }
        $this->_trackValueAdded();
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
     * The ameliorating action taken after the adverse event occured in order to reduce
     * the extent of harm.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventMitigatingAction[]
     */
    public function getMitigatingAction(): null|array
    {
        return $this->mitigatingAction;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventMitigatingAction $mitigatingAction
     * @return static
     */
    public function addMitigatingAction(null|FHIRAdverseEventMitigatingAction $mitigatingAction = null): self
    {
        if (null === $mitigatingAction) {
            $mitigatingAction = new FHIRAdverseEventMitigatingAction();
        }
        $this->_trackValueAdded();
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
     * Supporting information relevant to the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSupportingInfo[]
     */
    public function getSupportingInfo(): null|array
    {
        return $this->supportingInfo;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSupportingInfo $supportingInfo
     * @return static
     */
    public function addSupportingInfo(null|FHIRAdverseEventSupportingInfo $supportingInfo = null): self
    {
        if (null === $supportingInfo) {
            $supportingInfo = new FHIRAdverseEventSupportingInfo();
        }
        $this->_trackValueAdded();
        $this->supportingInfo[] = $supportingInfo;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
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
     * Comments made about the adverse event by the performer, subject or other
     * participants.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation $note
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
        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CATEGORY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENCOUNTER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRENCE_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOccurrencePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRENCE_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOccurrenceTiming())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRENCE_TIMING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDetected())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DETECTED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRecordedDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RECORDED_DATE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getResultingEffect())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RESULTING_EFFECT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getLocation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOCATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSeriousness())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERIOUSNESS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getOutcome())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_OUTCOME, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getRecorder())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RECORDER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getParticipant())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PARTICIPANT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getStudy())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_STUDY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getExpectedInResearchStudy())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXPECTED_IN_RESEARCH_STUDY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSuspectEntity())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUSPECT_ENTITY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getContributingFactor())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTRIBUTING_FACTOR, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPreventiveAction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PREVENTIVE_ACTION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getMitigatingAction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MITIGATING_ACTION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSupportingInfo())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUPPORTING_INFO, $i)] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_STATUS, $rule, $constraint, $v);
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
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_CODE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_SUBJECT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_OCCURRENCE_DATE_TIME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_OCCURRENCE_PERIOD, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_OCCURRENCE_TIMING, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_DETECTED, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_RECORDED_DATE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_RESULTING_EFFECT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_LOCATION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_SERIOUSNESS, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_OUTCOME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_RECORDER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_PARTICIPANT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_STUDY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_EXPECTED_IN_RESEARCH_STUDY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_SUSPECT_ENTITY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_CONTRIBUTING_FACTOR, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_PREVENTIVE_ACTION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_MITIGATING_ACTION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_SUPPORTING_INFO, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT, self::FIELD_NOTE, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAdverseEvent $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAdverseEvent
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
        } else if (!($type instanceof FHIRAdverseEvent)) {
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
            } elseif (self::FIELD_STATUS === $childName) {
                $type->setStatus(FHIRAdverseEventStatus::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ACTUALITY === $childName) {
                $type->setActuality(FHIRAdverseEventActuality::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CATEGORY === $childName) {
                $type->addCategory(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CODE === $childName) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUBJECT === $childName) {
                $type->setSubject(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ENCOUNTER === $childName) {
                $type->setEncounter(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OCCURRENCE_DATE_TIME === $childName) {
                $type->setOccurrenceDateTime(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_OCCURRENCE_PERIOD === $childName) {
                $type->setOccurrencePeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OCCURRENCE_TIMING === $childName) {
                $type->setOccurrenceTiming(FHIRTiming::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DETECTED === $childName) {
                $type->setDetected(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_RECORDED_DATE === $childName) {
                $type->setRecordedDate(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_RESULTING_EFFECT === $childName) {
                $type->addResultingEffect(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_LOCATION === $childName) {
                $type->setLocation(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SERIOUSNESS === $childName) {
                $type->setSeriousness(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OUTCOME === $childName) {
                $type->addOutcome(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RECORDER === $childName) {
                $type->setRecorder(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PARTICIPANT === $childName) {
                $type->addParticipant(FHIRAdverseEventParticipant::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STUDY === $childName) {
                $type->addStudy(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXPECTED_IN_RESEARCH_STUDY === $childName) {
                $type->setExpectedInResearchStudy(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SUSPECT_ENTITY === $childName) {
                $type->addSuspectEntity(FHIRAdverseEventSuspectEntity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTRIBUTING_FACTOR === $childName) {
                $type->addContributingFactor(FHIRAdverseEventContributingFactor::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PREVENTIVE_ACTION === $childName) {
                $type->addPreventiveAction(FHIRAdverseEventPreventiveAction::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MITIGATING_ACTION === $childName) {
                $type->addMitigatingAction(FHIRAdverseEventMitigatingAction::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUPPORTING_INFO === $childName) {
                $type->addSupportingInfo(FHIRAdverseEventSupportingInfo::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_NOTE === $childName) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($n, null, $config));
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
        if (isset($attributes[self::FIELD_OCCURRENCE_DATE_TIME])) {
            $pt = $type->getOccurrenceDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_OCCURRENCE_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setOccurrenceDateTime((string)$attributes[self::FIELD_OCCURRENCE_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DETECTED])) {
            $pt = $type->getDetected();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DETECTED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDetected((string)$attributes[self::FIELD_DETECTED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_EXPECTED_IN_RESEARCH_STUDY])) {
            $pt = $type->getExpectedInResearchStudy();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_EXPECTED_IN_RESEARCH_STUDY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setExpectedInResearchStudy((string)$attributes[self::FIELD_EXPECTED_IN_RESEARCH_STUDY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'AdverseEvent', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_OCCURRENCE_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getOccurrenceDateTime())) {
            $xw->writeAttribute(self::FIELD_OCCURRENCE_DATE_TIME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DETECTED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDetected())) {
            $xw->writeAttribute(self::FIELD_DETECTED, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_RECORDED_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getRecordedDate())) {
            $xw->writeAttribute(self::FIELD_RECORDED_DATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_EXPECTED_IN_RESEARCH_STUDY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getExpectedInResearchStudy())) {
            $xw->writeAttribute(self::FIELD_EXPECTED_IN_RESEARCH_STUDY, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        foreach ($this->getIdentifier() as $v) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStatus())) {
            $xw->startElement(self::FIELD_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getActuality())) {
            $xw->startElement(self::FIELD_ACTUALITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getCategory() as $v) {
            $xw->startElement(self::FIELD_CATEGORY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getCode())) {
            $xw->startElement(self::FIELD_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSubject())) {
            $xw->startElement(self::FIELD_SUBJECT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getEncounter())) {
            $xw->startElement(self::FIELD_ENCOUNTER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_OCCURRENCE_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getOccurrenceDateTime())) {
            $xw->startElement(self::FIELD_OCCURRENCE_DATE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getOccurrencePeriod())) {
            $xw->startElement(self::FIELD_OCCURRENCE_PERIOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getOccurrenceTiming())) {
            $xw->startElement(self::FIELD_OCCURRENCE_TIMING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DETECTED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDetected())) {
            $xw->startElement(self::FIELD_DETECTED);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_RECORDED_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getRecordedDate())) {
            $xw->startElement(self::FIELD_RECORDED_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getResultingEffect() as $v) {
            $xw->startElement(self::FIELD_RESULTING_EFFECT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getLocation())) {
            $xw->startElement(self::FIELD_LOCATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSeriousness())) {
            $xw->startElement(self::FIELD_SERIOUSNESS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getOutcome() as $v) {
            $xw->startElement(self::FIELD_OUTCOME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRecorder())) {
            $xw->startElement(self::FIELD_RECORDER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getParticipant() as $v) {
            $xw->startElement(self::FIELD_PARTICIPANT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getStudy() as $v) {
            $xw->startElement(self::FIELD_STUDY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_EXPECTED_IN_RESEARCH_STUDY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getExpectedInResearchStudy())) {
            $xw->startElement(self::FIELD_EXPECTED_IN_RESEARCH_STUDY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getSuspectEntity() as $v) {
            $xw->startElement(self::FIELD_SUSPECT_ENTITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getContributingFactor() as $v) {
            $xw->startElement(self::FIELD_CONTRIBUTING_FACTOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getPreventiveAction() as $v) {
            $xw->startElement(self::FIELD_PREVENTIVE_ACTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getMitigatingAction() as $v) {
            $xw->startElement(self::FIELD_MITIGATING_ACTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getSupportingInfo() as $v) {
            $xw->startElement(self::FIELD_SUPPORTING_INFO);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getNote() as $v) {
            $xw->startElement(self::FIELD_NOTE);
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
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRAdverseEventStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getActuality())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ACTUALITY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRAdverseEventActuality::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ACTUALITY_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getCategory())) {
            $out->{self::FIELD_CATEGORY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CATEGORY}[] = $v;
            }
        }
        if (null !== ($v = $this->getCode())) {
            $out->{self::FIELD_CODE} = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $out->{self::FIELD_SUBJECT} = $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            $out->{self::FIELD_ENCOUNTER} = $v;
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_OCCURRENCE_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_OCCURRENCE_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOccurrencePeriod())) {
            $out->{self::FIELD_OCCURRENCE_PERIOD} = $v;
        }
        if (null !== ($v = $this->getOccurrenceTiming())) {
            $out->{self::FIELD_OCCURRENCE_TIMING} = $v;
        }
        if (null !== ($v = $this->getDetected())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DETECTED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DETECTED_EXT} = $ext;
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
        if ([] !== ($vs = $this->getResultingEffect())) {
            $out->{self::FIELD_RESULTING_EFFECT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_RESULTING_EFFECT}[] = $v;
            }
        }
        if (null !== ($v = $this->getLocation())) {
            $out->{self::FIELD_LOCATION} = $v;
        }
        if (null !== ($v = $this->getSeriousness())) {
            $out->{self::FIELD_SERIOUSNESS} = $v;
        }
        if ([] !== ($vs = $this->getOutcome())) {
            $out->{self::FIELD_OUTCOME} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_OUTCOME}[] = $v;
            }
        }
        if (null !== ($v = $this->getRecorder())) {
            $out->{self::FIELD_RECORDER} = $v;
        }
        if ([] !== ($vs = $this->getParticipant())) {
            $out->{self::FIELD_PARTICIPANT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PARTICIPANT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getStudy())) {
            $out->{self::FIELD_STUDY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_STUDY}[] = $v;
            }
        }
        if (null !== ($v = $this->getExpectedInResearchStudy())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_EXPECTED_IN_RESEARCH_STUDY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EXPECTED_IN_RESEARCH_STUDY_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getSuspectEntity())) {
            $out->{self::FIELD_SUSPECT_ENTITY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SUSPECT_ENTITY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getContributingFactor())) {
            $out->{self::FIELD_CONTRIBUTING_FACTOR} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CONTRIBUTING_FACTOR}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getPreventiveAction())) {
            $out->{self::FIELD_PREVENTIVE_ACTION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PREVENTIVE_ACTION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getMitigatingAction())) {
            $out->{self::FIELD_MITIGATING_ACTION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_MITIGATING_ACTION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getSupportingInfo())) {
            $out->{self::FIELD_SUPPORTING_INFO} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SUPPORTING_INFO}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            $out->{self::FIELD_NOTE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_NOTE}[] = $v;
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
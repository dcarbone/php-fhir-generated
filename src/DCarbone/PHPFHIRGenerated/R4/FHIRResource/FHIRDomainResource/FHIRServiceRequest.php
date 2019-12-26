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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestIntent;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestPriority;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A record of a request for service such as diagnostic investigations, treatments,
 * or operations to be performed.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRServiceRequest
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRServiceRequest extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST;
    const FIELD_AS_NEEDED_BOOLEAN = 'asNeededBoolean';
    const FIELD_AS_NEEDED_BOOLEAN_EXT = '_asNeededBoolean';
    const FIELD_AS_NEEDED_CODEABLE_CONCEPT = 'asNeededCodeableConcept';
    const FIELD_AUTHORED_ON = 'authoredOn';
    const FIELD_AUTHORED_ON_EXT = '_authoredOn';
    const FIELD_BASED_ON = 'basedOn';
    const FIELD_BODY_SITE = 'bodySite';
    const FIELD_CATEGORY = 'category';
    const FIELD_CODE = 'code';
    const FIELD_DO_NOT_PERFORM = 'doNotPerform';
    const FIELD_DO_NOT_PERFORM_EXT = '_doNotPerform';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_INSTANTIATES_CANONICAL = 'instantiatesCanonical';
    const FIELD_INSTANTIATES_CANONICAL_EXT = '_instantiatesCanonical';
    const FIELD_INSTANTIATES_URI = 'instantiatesUri';
    const FIELD_INSTANTIATES_URI_EXT = '_instantiatesUri';
    const FIELD_INSURANCE = 'insurance';
    const FIELD_INTENT = 'intent';
    const FIELD_INTENT_EXT = '_intent';
    const FIELD_LOCATION_CODE = 'locationCode';
    const FIELD_LOCATION_REFERENCE = 'locationReference';
    const FIELD_NOTE = 'note';
    const FIELD_OCCURRENCE_DATE_TIME = 'occurrenceDateTime';
    const FIELD_OCCURRENCE_DATE_TIME_EXT = '_occurrenceDateTime';
    const FIELD_OCCURRENCE_PERIOD = 'occurrencePeriod';
    const FIELD_OCCURRENCE_TIMING = 'occurrenceTiming';
    const FIELD_ORDER_DETAIL = 'orderDetail';
    const FIELD_PATIENT_INSTRUCTION = 'patientInstruction';
    const FIELD_PATIENT_INSTRUCTION_EXT = '_patientInstruction';
    const FIELD_PERFORMER = 'performer';
    const FIELD_PERFORMER_TYPE = 'performerType';
    const FIELD_PRIORITY = 'priority';
    const FIELD_PRIORITY_EXT = '_priority';
    const FIELD_QUANTITY_QUANTITY = 'quantityQuantity';
    const FIELD_QUANTITY_RANGE = 'quantityRange';
    const FIELD_QUANTITY_RATIO = 'quantityRatio';
    const FIELD_REASON_CODE = 'reasonCode';
    const FIELD_REASON_REFERENCE = 'reasonReference';
    const FIELD_RELEVANT_HISTORY = 'relevantHistory';
    const FIELD_REPLACES = 'replaces';
    const FIELD_REQUESTER = 'requester';
    const FIELD_REQUISITION = 'requisition';
    const FIELD_SPECIMEN = 'specimen';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_SUBJECT = 'subject';
    const FIELD_SUPPORTING_INFO = 'supportingInfo';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If a CodeableConcept is present, it indicates the pre-condition for performing
     * the service. For example "pain", "on flare-up", etc. (choose any one of
     * asNeeded*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $asNeededBoolean = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If a CodeableConcept is present, it indicates the pre-condition for performing
     * the service. For example "pain", "on flare-up", etc. (choose any one of
     * asNeeded*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $asNeededCodeableConcept = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the request transitioned to being actionable.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $authoredOn = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Plan/proposal/order fulfilled by this request.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $basedOn = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Anatomic location where the procedure should be performed. This is the target
     * site.
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
     * A code that classifies the service for searching, sorting and display purposes
     * (e.g. "Surgical Procedure").
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
     * A code that identifies a particular service (i.e., procedure, diagnostic
     * investigation, or panel of investigations) that have been requested.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $code = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Set this to true if the record is saying that the service/procedure should NOT
     * be performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $doNotPerform = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An encounter that provides additional information about the healthcare context
     * in which this request is made.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $encounter = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order instance by the orderer and/or the receiver
     * and/or order fulfiller.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other
     * definition that is adhered to in whole or in part by this ServiceRequest.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    protected $instantiatesCanonical = [];

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or
     * other definition that is adhered to in whole or in part by this ServiceRequest.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri[]
     */
    protected $instantiatesUri = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or
     * pre-determinations that may be needed for delivering the requested service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $insurance = [];

    /**
     * Codes indicating the degree of authority/intentionality associated with a
     * request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the request is a proposal, plan, an original order or a reflex order.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestIntent
     */
    protected $intent = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The preferred location(s) where the procedure should actually happen in coded or
     * free text form. E.g. at home or nursing day care center.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $locationCode = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the the preferred location(s) where the procedure should actually
     * happen. E.g. at home or nursing day care center.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $locationReference = [];

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any other notes and comments made about the service request. For example,
     * internal billing notes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    protected $note = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date/time at which the requested service should occur. (choose any one of
     * occurrence*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $occurrenceDateTime = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date/time at which the requested service should occur. (choose any one of
     * occurrence*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    protected $occurrencePeriod = null;

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date/time at which the requested service should occur. (choose any one of
     * occurrence*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    protected $occurrenceTiming = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional details and instructions about the how the services are to be
     * delivered. For example, and order for a urinary catheter may have an order
     * detail for an external or indwelling catheter, or an order for a bandage may
     * require additional instructions specifying how the bandage should be applied.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $orderDetail = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Instructions in terms that are understood by the patient or consumer.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $patientInstruction = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The desired performer for doing the requested service. For example, the surgeon,
     * dermatopathologist, endoscopist, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $performer = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Desired type of performer for doing the requested service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $performerType = null;

    /**
     * Identifies the level of importance to be assigned to actioning the request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the ServiceRequest should be addressed with respect to
     * other requests.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestPriority
     */
    protected $priority = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An amount of service being requested which can be a quantity ( for example
     * $1,500 home modification), a ratio ( for example, 20 half day visits per month),
     * or a range (2.0 to 1.8 Gy per fraction). (choose any one of quantity*, but only
     * one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected $quantityQuantity = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An amount of service being requested which can be a quantity ( for example
     * $1,500 home modification), a ratio ( for example, 20 half day visits per month),
     * or a range (2.0 to 1.8 Gy per fraction). (choose any one of quantity*, but only
     * one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    protected $quantityRange = null;

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An amount of service being requested which can be a quantity ( for example
     * $1,500 home modification), a ratio ( for example, 20 half day visits per month),
     * or a range (2.0 to 1.8 Gy per fraction). (choose any one of quantity*, but only
     * one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio
     */
    protected $quantityRatio = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An explanation or justification for why this service is being requested in coded
     * or textual form. This is often for billing purposes. May relate to the resources
     * referred to in `supportingInfo`.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $reasonCode = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates another resource that provides a justification for why this service is
     * being requested. May relate to the resources referred to in `supportingInfo`.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $reasonReference = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Key events in the history of the request.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $relevantHistory = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request takes the place of the referenced completed or terminated
     * request(s).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $replaces = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual who initiated the request and has responsibility for its
     * activation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $requester = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A shared identifier common to all service requests that were authorized more or
     * less simultaneously by a single author, representing the composite or group
     * identifier.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    protected $requisition = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One or more specimens that the laboratory procedure will use.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $specimen = [];

    /**
     * Indicates whether the plan is currently being acted upon, represents future
     * intentions or is now a historical record.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the order.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestStatus
     */
    protected $status = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * On whom or what the service is to be performed. This is usually a human patient,
     * but can also be requested on animals, groups of humans or animals, devices such
     * as dialysis machines, or even locations (typically for environmental scans).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $subject = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional clinical information about the patient or specimen that may influence
     * the services or their interpretations. This information includes diagnosis,
     * clinical findings and other observations. In laboratory ordering these are
     * typically referred to as "ask at order entry questions (AOEs)". This includes
     * observations explicitly requested by the producer (filler) to provide context or
     * supporting information needed to complete the order. For example, reporting the
     * amount of inspired oxygen for blood gas measurements.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $supportingInfo = [];

    /**
     * Validation map for fields in type ServiceRequest
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRServiceRequest Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRServiceRequest::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AS_NEEDED_BOOLEAN]) || isset($data[self::FIELD_AS_NEEDED_BOOLEAN_EXT])) {
            if (isset($data[self::FIELD_AS_NEEDED_BOOLEAN])) {
                $value = $data[self::FIELD_AS_NEEDED_BOOLEAN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_AS_NEEDED_BOOLEAN_EXT]) && is_array($data[self::FIELD_AS_NEEDED_BOOLEAN_EXT])) {
                $ext = $data[self::FIELD_AS_NEEDED_BOOLEAN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setAsNeededBoolean($value);
                } else if (is_array($value)) {
                    $this->setAsNeededBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setAsNeededBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAsNeededBoolean(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setAsNeededCodeableConcept($data[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT]);
            } else {
                $this->setAsNeededCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_AUTHORED_ON]) || isset($data[self::FIELD_AUTHORED_ON_EXT])) {
            if (isset($data[self::FIELD_AUTHORED_ON])) {
                $value = $data[self::FIELD_AUTHORED_ON];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_AUTHORED_ON_EXT]) && is_array($data[self::FIELD_AUTHORED_ON_EXT])) {
                $ext = $data[self::FIELD_AUTHORED_ON_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setAuthoredOn($value);
                } else if (is_array($value)) {
                    $this->setAuthoredOn(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setAuthoredOn(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAuthoredOn(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_BASED_ON])) {
            if (is_array($data[self::FIELD_BASED_ON])) {
                foreach($data[self::FIELD_BASED_ON] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addBasedOn($v);
                    } else {
                        $this->addBasedOn(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_BASED_ON] instanceof FHIRReference) {
                $this->addBasedOn($data[self::FIELD_BASED_ON]);
            } else {
                $this->addBasedOn(new FHIRReference($data[self::FIELD_BASED_ON]));
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
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_DO_NOT_PERFORM]) || isset($data[self::FIELD_DO_NOT_PERFORM_EXT])) {
            if (isset($data[self::FIELD_DO_NOT_PERFORM])) {
                $value = $data[self::FIELD_DO_NOT_PERFORM];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DO_NOT_PERFORM_EXT]) && is_array($data[self::FIELD_DO_NOT_PERFORM_EXT])) {
                $ext = $data[self::FIELD_DO_NOT_PERFORM_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setDoNotPerform($value);
                } else if (is_array($value)) {
                    $this->setDoNotPerform(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setDoNotPerform(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDoNotPerform(new FHIRBoolean($ext));
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
        if (isset($data[self::FIELD_INSTANTIATES_CANONICAL]) || isset($data[self::FIELD_INSTANTIATES_CANONICAL_EXT])) {
            if (isset($data[self::FIELD_INSTANTIATES_CANONICAL])) {
                $value = $data[self::FIELD_INSTANTIATES_CANONICAL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_INSTANTIATES_CANONICAL_EXT]) && is_array($data[self::FIELD_INSTANTIATES_CANONICAL_EXT])) {
                $ext = $data[self::FIELD_INSTANTIATES_CANONICAL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->addInstantiatesCanonical($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRCanonical) {
                            $this->addInstantiatesCanonical($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addInstantiatesCanonical(new FHIRCanonical(array_merge($v, $iext)));
                            } else {
                                $this->addInstantiatesCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addInstantiatesCanonical(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->addInstantiatesCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addInstantiatesCanonical(new FHIRCanonical($iext));
                }
            }
        }
        if (isset($data[self::FIELD_INSTANTIATES_URI]) || isset($data[self::FIELD_INSTANTIATES_URI_EXT])) {
            if (isset($data[self::FIELD_INSTANTIATES_URI])) {
                $value = $data[self::FIELD_INSTANTIATES_URI];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_INSTANTIATES_URI_EXT]) && is_array($data[self::FIELD_INSTANTIATES_URI_EXT])) {
                $ext = $data[self::FIELD_INSTANTIATES_URI_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->addInstantiatesUri($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRUri) {
                            $this->addInstantiatesUri($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addInstantiatesUri(new FHIRUri(array_merge($v, $iext)));
                            } else {
                                $this->addInstantiatesUri(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addInstantiatesUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->addInstantiatesUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addInstantiatesUri(new FHIRUri($iext));
                }
            }
        }
        if (isset($data[self::FIELD_INSURANCE])) {
            if (is_array($data[self::FIELD_INSURANCE])) {
                foreach($data[self::FIELD_INSURANCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addInsurance($v);
                    } else {
                        $this->addInsurance(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_INSURANCE] instanceof FHIRReference) {
                $this->addInsurance($data[self::FIELD_INSURANCE]);
            } else {
                $this->addInsurance(new FHIRReference($data[self::FIELD_INSURANCE]));
            }
        }
        if (isset($data[self::FIELD_INTENT]) || isset($data[self::FIELD_INTENT_EXT])) {
            if (isset($data[self::FIELD_INTENT])) {
                $value = $data[self::FIELD_INTENT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_INTENT_EXT]) && is_array($data[self::FIELD_INTENT_EXT])) {
                $ext = $data[self::FIELD_INTENT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRRequestIntent) {
                    $this->setIntent($value);
                } else if (is_array($value)) {
                    $this->setIntent(new FHIRRequestIntent(array_merge($ext, $value)));
                } else {
                    $this->setIntent(new FHIRRequestIntent([FHIRRequestIntent::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setIntent(new FHIRRequestIntent($ext));
            }
        }
        if (isset($data[self::FIELD_LOCATION_CODE])) {
            if (is_array($data[self::FIELD_LOCATION_CODE])) {
                foreach($data[self::FIELD_LOCATION_CODE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addLocationCode($v);
                    } else {
                        $this->addLocationCode(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_LOCATION_CODE] instanceof FHIRCodeableConcept) {
                $this->addLocationCode($data[self::FIELD_LOCATION_CODE]);
            } else {
                $this->addLocationCode(new FHIRCodeableConcept($data[self::FIELD_LOCATION_CODE]));
            }
        }
        if (isset($data[self::FIELD_LOCATION_REFERENCE])) {
            if (is_array($data[self::FIELD_LOCATION_REFERENCE])) {
                foreach($data[self::FIELD_LOCATION_REFERENCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addLocationReference($v);
                    } else {
                        $this->addLocationReference(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_LOCATION_REFERENCE] instanceof FHIRReference) {
                $this->addLocationReference($data[self::FIELD_LOCATION_REFERENCE]);
            } else {
                $this->addLocationReference(new FHIRReference($data[self::FIELD_LOCATION_REFERENCE]));
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
        if (isset($data[self::FIELD_OCCURRENCE_DATE_TIME]) || isset($data[self::FIELD_OCCURRENCE_DATE_TIME_EXT])) {
            if (isset($data[self::FIELD_OCCURRENCE_DATE_TIME])) {
                $value = $data[self::FIELD_OCCURRENCE_DATE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_OCCURRENCE_DATE_TIME_EXT]) && is_array($data[self::FIELD_OCCURRENCE_DATE_TIME_EXT])) {
                $ext = $data[self::FIELD_OCCURRENCE_DATE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setOccurrenceDateTime($value);
                } else if (is_array($value)) {
                    $this->setOccurrenceDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setOccurrenceDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setOccurrenceDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_OCCURRENCE_PERIOD])) {
            if ($data[self::FIELD_OCCURRENCE_PERIOD] instanceof FHIRPeriod) {
                $this->setOccurrencePeriod($data[self::FIELD_OCCURRENCE_PERIOD]);
            } else {
                $this->setOccurrencePeriod(new FHIRPeriod($data[self::FIELD_OCCURRENCE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_OCCURRENCE_TIMING])) {
            if ($data[self::FIELD_OCCURRENCE_TIMING] instanceof FHIRTiming) {
                $this->setOccurrenceTiming($data[self::FIELD_OCCURRENCE_TIMING]);
            } else {
                $this->setOccurrenceTiming(new FHIRTiming($data[self::FIELD_OCCURRENCE_TIMING]));
            }
        }
        if (isset($data[self::FIELD_ORDER_DETAIL])) {
            if (is_array($data[self::FIELD_ORDER_DETAIL])) {
                foreach($data[self::FIELD_ORDER_DETAIL] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addOrderDetail($v);
                    } else {
                        $this->addOrderDetail(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_ORDER_DETAIL] instanceof FHIRCodeableConcept) {
                $this->addOrderDetail($data[self::FIELD_ORDER_DETAIL]);
            } else {
                $this->addOrderDetail(new FHIRCodeableConcept($data[self::FIELD_ORDER_DETAIL]));
            }
        }
        if (isset($data[self::FIELD_PATIENT_INSTRUCTION]) || isset($data[self::FIELD_PATIENT_INSTRUCTION_EXT])) {
            if (isset($data[self::FIELD_PATIENT_INSTRUCTION])) {
                $value = $data[self::FIELD_PATIENT_INSTRUCTION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PATIENT_INSTRUCTION_EXT]) && is_array($data[self::FIELD_PATIENT_INSTRUCTION_EXT])) {
                $ext = $data[self::FIELD_PATIENT_INSTRUCTION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPatientInstruction($value);
                } else if (is_array($value)) {
                    $this->setPatientInstruction(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPatientInstruction(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPatientInstruction(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PERFORMER])) {
            if (is_array($data[self::FIELD_PERFORMER])) {
                foreach($data[self::FIELD_PERFORMER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addPerformer($v);
                    } else {
                        $this->addPerformer(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_PERFORMER] instanceof FHIRReference) {
                $this->addPerformer($data[self::FIELD_PERFORMER]);
            } else {
                $this->addPerformer(new FHIRReference($data[self::FIELD_PERFORMER]));
            }
        }
        if (isset($data[self::FIELD_PERFORMER_TYPE])) {
            if ($data[self::FIELD_PERFORMER_TYPE] instanceof FHIRCodeableConcept) {
                $this->setPerformerType($data[self::FIELD_PERFORMER_TYPE]);
            } else {
                $this->setPerformerType(new FHIRCodeableConcept($data[self::FIELD_PERFORMER_TYPE]));
            }
        }
        if (isset($data[self::FIELD_PRIORITY]) || isset($data[self::FIELD_PRIORITY_EXT])) {
            if (isset($data[self::FIELD_PRIORITY])) {
                $value = $data[self::FIELD_PRIORITY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PRIORITY_EXT]) && is_array($data[self::FIELD_PRIORITY_EXT])) {
                $ext = $data[self::FIELD_PRIORITY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRRequestPriority) {
                    $this->setPriority($value);
                } else if (is_array($value)) {
                    $this->setPriority(new FHIRRequestPriority(array_merge($ext, $value)));
                } else {
                    $this->setPriority(new FHIRRequestPriority([FHIRRequestPriority::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPriority(new FHIRRequestPriority($ext));
            }
        }
        if (isset($data[self::FIELD_QUANTITY_QUANTITY])) {
            if ($data[self::FIELD_QUANTITY_QUANTITY] instanceof FHIRQuantity) {
                $this->setQuantityQuantity($data[self::FIELD_QUANTITY_QUANTITY]);
            } else {
                $this->setQuantityQuantity(new FHIRQuantity($data[self::FIELD_QUANTITY_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_QUANTITY_RANGE])) {
            if ($data[self::FIELD_QUANTITY_RANGE] instanceof FHIRRange) {
                $this->setQuantityRange($data[self::FIELD_QUANTITY_RANGE]);
            } else {
                $this->setQuantityRange(new FHIRRange($data[self::FIELD_QUANTITY_RANGE]));
            }
        }
        if (isset($data[self::FIELD_QUANTITY_RATIO])) {
            if ($data[self::FIELD_QUANTITY_RATIO] instanceof FHIRRatio) {
                $this->setQuantityRatio($data[self::FIELD_QUANTITY_RATIO]);
            } else {
                $this->setQuantityRatio(new FHIRRatio($data[self::FIELD_QUANTITY_RATIO]));
            }
        }
        if (isset($data[self::FIELD_REASON_CODE])) {
            if (is_array($data[self::FIELD_REASON_CODE])) {
                foreach($data[self::FIELD_REASON_CODE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReasonCode($v);
                    } else {
                        $this->addReasonCode(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_REASON_CODE] instanceof FHIRCodeableConcept) {
                $this->addReasonCode($data[self::FIELD_REASON_CODE]);
            } else {
                $this->addReasonCode(new FHIRCodeableConcept($data[self::FIELD_REASON_CODE]));
            }
        }
        if (isset($data[self::FIELD_REASON_REFERENCE])) {
            if (is_array($data[self::FIELD_REASON_REFERENCE])) {
                foreach($data[self::FIELD_REASON_REFERENCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addReasonReference($v);
                    } else {
                        $this->addReasonReference(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_REASON_REFERENCE] instanceof FHIRReference) {
                $this->addReasonReference($data[self::FIELD_REASON_REFERENCE]);
            } else {
                $this->addReasonReference(new FHIRReference($data[self::FIELD_REASON_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_RELEVANT_HISTORY])) {
            if (is_array($data[self::FIELD_RELEVANT_HISTORY])) {
                foreach($data[self::FIELD_RELEVANT_HISTORY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addRelevantHistory($v);
                    } else {
                        $this->addRelevantHistory(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_RELEVANT_HISTORY] instanceof FHIRReference) {
                $this->addRelevantHistory($data[self::FIELD_RELEVANT_HISTORY]);
            } else {
                $this->addRelevantHistory(new FHIRReference($data[self::FIELD_RELEVANT_HISTORY]));
            }
        }
        if (isset($data[self::FIELD_REPLACES])) {
            if (is_array($data[self::FIELD_REPLACES])) {
                foreach($data[self::FIELD_REPLACES] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addReplaces($v);
                    } else {
                        $this->addReplaces(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_REPLACES] instanceof FHIRReference) {
                $this->addReplaces($data[self::FIELD_REPLACES]);
            } else {
                $this->addReplaces(new FHIRReference($data[self::FIELD_REPLACES]));
            }
        }
        if (isset($data[self::FIELD_REQUESTER])) {
            if ($data[self::FIELD_REQUESTER] instanceof FHIRReference) {
                $this->setRequester($data[self::FIELD_REQUESTER]);
            } else {
                $this->setRequester(new FHIRReference($data[self::FIELD_REQUESTER]));
            }
        }
        if (isset($data[self::FIELD_REQUISITION])) {
            if ($data[self::FIELD_REQUISITION] instanceof FHIRIdentifier) {
                $this->setRequisition($data[self::FIELD_REQUISITION]);
            } else {
                $this->setRequisition(new FHIRIdentifier($data[self::FIELD_REQUISITION]));
            }
        }
        if (isset($data[self::FIELD_SPECIMEN])) {
            if (is_array($data[self::FIELD_SPECIMEN])) {
                foreach($data[self::FIELD_SPECIMEN] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addSpecimen($v);
                    } else {
                        $this->addSpecimen(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_SPECIMEN] instanceof FHIRReference) {
                $this->addSpecimen($data[self::FIELD_SPECIMEN]);
            } else {
                $this->addSpecimen(new FHIRReference($data[self::FIELD_SPECIMEN]));
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
                if ($value instanceof FHIRRequestStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRRequestStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRRequestStatus([FHIRRequestStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRRequestStatus($ext));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_SUPPORTING_INFO])) {
            if (is_array($data[self::FIELD_SUPPORTING_INFO])) {
                foreach($data[self::FIELD_SUPPORTING_INFO] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addSupportingInfo($v);
                    } else {
                        $this->addSupportingInfo(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_SUPPORTING_INFO] instanceof FHIRReference) {
                $this->addSupportingInfo($data[self::FIELD_SUPPORTING_INFO]);
            } else {
                $this->addSupportingInfo(new FHIRReference($data[self::FIELD_SUPPORTING_INFO]));
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
        return "<ServiceRequest{$xmlns}></ServiceRequest>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If a CodeableConcept is present, it indicates the pre-condition for performing
     * the service. For example "pain", "on flare-up", etc. (choose any one of
     * asNeeded*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getAsNeededBoolean()
    {
        return $this->asNeededBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If a CodeableConcept is present, it indicates the pre-condition for performing
     * the service. For example "pain", "on flare-up", etc. (choose any one of
     * asNeeded*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $asNeededBoolean
     * @return static
     */
    public function setAsNeededBoolean($asNeededBoolean = null)
    {
        if (null === $asNeededBoolean) {
            $this->asNeededBoolean = null;
            return $this;
        }
        if ($asNeededBoolean instanceof FHIRBoolean) {
            $this->asNeededBoolean = $asNeededBoolean;
            return $this;
        }
        $this->asNeededBoolean = new FHIRBoolean($asNeededBoolean);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If a CodeableConcept is present, it indicates the pre-condition for performing
     * the service. For example "pain", "on flare-up", etc. (choose any one of
     * asNeeded*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getAsNeededCodeableConcept()
    {
        return $this->asNeededCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If a CodeableConcept is present, it indicates the pre-condition for performing
     * the service. For example "pain", "on flare-up", etc. (choose any one of
     * asNeeded*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $asNeededCodeableConcept
     * @return static
     */
    public function setAsNeededCodeableConcept(FHIRCodeableConcept $asNeededCodeableConcept = null)
    {
        $this->asNeededCodeableConcept = $asNeededCodeableConcept;
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
     * When the request transitioned to being actionable.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getAuthoredOn()
    {
        return $this->authoredOn;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the request transitioned to being actionable.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $authoredOn
     * @return static
     */
    public function setAuthoredOn($authoredOn = null)
    {
        if (null === $authoredOn) {
            $this->authoredOn = null;
            return $this;
        }
        if ($authoredOn instanceof FHIRDateTime) {
            $this->authoredOn = $authoredOn;
            return $this;
        }
        $this->authoredOn = new FHIRDateTime($authoredOn);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Plan/proposal/order fulfilled by this request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Plan/proposal/order fulfilled by this request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $basedOn
     * @return static
     */
    public function addBasedOn(FHIRReference $basedOn = null)
    {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Plan/proposal/order fulfilled by this request.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $basedOn
     * @return static
     */
    public function setBasedOn(array $basedOn = [])
    {
        $this->basedOn = [];
        if ([] === $basedOn) {
            return $this;
        }
        foreach($basedOn as $v) {
            if ($v instanceof FHIRReference) {
                $this->addBasedOn($v);
            } else {
                $this->addBasedOn(new FHIRReference($v));
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
     * Anatomic location where the procedure should be performed. This is the target
     * site.
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
     * Anatomic location where the procedure should be performed. This is the target
     * site.
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
     * Anatomic location where the procedure should be performed. This is the target
     * site.
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
     * A code that classifies the service for searching, sorting and display purposes
     * (e.g. "Surgical Procedure").
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
     * A code that classifies the service for searching, sorting and display purposes
     * (e.g. "Surgical Procedure").
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
     * A code that classifies the service for searching, sorting and display purposes
     * (e.g. "Surgical Procedure").
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
     * A code that identifies a particular service (i.e., procedure, diagnostic
     * investigation, or panel of investigations) that have been requested.
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
     * A code that identifies a particular service (i.e., procedure, diagnostic
     * investigation, or panel of investigations) that have been requested.
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Set this to true if the record is saying that the service/procedure should NOT
     * be performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getDoNotPerform()
    {
        return $this->doNotPerform;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Set this to true if the record is saying that the service/procedure should NOT
     * be performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $doNotPerform
     * @return static
     */
    public function setDoNotPerform($doNotPerform = null)
    {
        if (null === $doNotPerform) {
            $this->doNotPerform = null;
            return $this;
        }
        if ($doNotPerform instanceof FHIRBoolean) {
            $this->doNotPerform = $doNotPerform;
            return $this;
        }
        $this->doNotPerform = new FHIRBoolean($doNotPerform);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An encounter that provides additional information about the healthcare context
     * in which this request is made.
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
     * An encounter that provides additional information about the healthcare context
     * in which this request is made.
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order instance by the orderer and/or the receiver
     * and/or order fulfiller.
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
     * Identifiers assigned to this order instance by the orderer and/or the receiver
     * and/or order fulfiller.
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
     * Identifiers assigned to this order instance by the orderer and/or the receiver
     * and/or order fulfiller.
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
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other
     * definition that is adhered to in whole or in part by this ServiceRequest.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other
     * definition that is adhered to in whole or in part by this ServiceRequest.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $instantiatesCanonical
     * @return static
     */
    public function addInstantiatesCanonical($instantiatesCanonical = null)
    {
        if (null === $instantiatesCanonical) {
            $this->instantiatesCanonical = [];
            return $this;
        }
        if ($instantiatesCanonical instanceof FHIRCanonical) {
            $this->instantiatesCanonical[] = $instantiatesCanonical;
            return $this;
        }
        $this->instantiatesCanonical[] = new FHIRCanonical($instantiatesCanonical);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other
     * definition that is adhered to in whole or in part by this ServiceRequest.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[] $instantiatesCanonical
     * @return static
     */
    public function setInstantiatesCanonical(array $instantiatesCanonical = [])
    {
        $this->instantiatesCanonical = [];
        if ([] === $instantiatesCanonical) {
            return $this;
        }
        foreach($instantiatesCanonical as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->addInstantiatesCanonical($v);
            } else {
                $this->addInstantiatesCanonical(new FHIRCanonical($v));
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or
     * other definition that is adhered to in whole or in part by this ServiceRequest.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri[]
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or
     * other definition that is adhered to in whole or in part by this ServiceRequest.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $instantiatesUri
     * @return static
     */
    public function addInstantiatesUri($instantiatesUri = null)
    {
        if (null === $instantiatesUri) {
            $this->instantiatesUri = [];
            return $this;
        }
        if ($instantiatesUri instanceof FHIRUri) {
            $this->instantiatesUri[] = $instantiatesUri;
            return $this;
        }
        $this->instantiatesUri[] = new FHIRUri($instantiatesUri);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or
     * other definition that is adhered to in whole or in part by this ServiceRequest.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri[] $instantiatesUri
     * @return static
     */
    public function setInstantiatesUri(array $instantiatesUri = [])
    {
        $this->instantiatesUri = [];
        if ([] === $instantiatesUri) {
            return $this;
        }
        foreach($instantiatesUri as $v) {
            if ($v instanceof FHIRUri) {
                $this->addInstantiatesUri($v);
            } else {
                $this->addInstantiatesUri(new FHIRUri($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or
     * pre-determinations that may be needed for delivering the requested service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or
     * pre-determinations that may be needed for delivering the requested service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $insurance
     * @return static
     */
    public function addInsurance(FHIRReference $insurance = null)
    {
        $this->insurance[] = $insurance;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or
     * pre-determinations that may be needed for delivering the requested service.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $insurance
     * @return static
     */
    public function setInsurance(array $insurance = [])
    {
        $this->insurance = [];
        if ([] === $insurance) {
            return $this;
        }
        foreach($insurance as $v) {
            if ($v instanceof FHIRReference) {
                $this->addInsurance($v);
            } else {
                $this->addInsurance(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * Codes indicating the degree of authority/intentionality associated with a
     * request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the request is a proposal, plan, an original order or a reflex order.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestIntent
     */
    public function getIntent()
    {
        return $this->intent;
    }

    /**
     * Codes indicating the degree of authority/intentionality associated with a
     * request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the request is a proposal, plan, an original order or a reflex order.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestIntent $intent
     * @return static
     */
    public function setIntent(FHIRRequestIntent $intent = null)
    {
        $this->intent = $intent;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The preferred location(s) where the procedure should actually happen in coded or
     * free text form. E.g. at home or nursing day care center.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getLocationCode()
    {
        return $this->locationCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The preferred location(s) where the procedure should actually happen in coded or
     * free text form. E.g. at home or nursing day care center.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $locationCode
     * @return static
     */
    public function addLocationCode(FHIRCodeableConcept $locationCode = null)
    {
        $this->locationCode[] = $locationCode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The preferred location(s) where the procedure should actually happen in coded or
     * free text form. E.g. at home or nursing day care center.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $locationCode
     * @return static
     */
    public function setLocationCode(array $locationCode = [])
    {
        $this->locationCode = [];
        if ([] === $locationCode) {
            return $this;
        }
        foreach($locationCode as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addLocationCode($v);
            } else {
                $this->addLocationCode(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the the preferred location(s) where the procedure should actually
     * happen. E.g. at home or nursing day care center.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getLocationReference()
    {
        return $this->locationReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the the preferred location(s) where the procedure should actually
     * happen. E.g. at home or nursing day care center.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $locationReference
     * @return static
     */
    public function addLocationReference(FHIRReference $locationReference = null)
    {
        $this->locationReference[] = $locationReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the the preferred location(s) where the procedure should actually
     * happen. E.g. at home or nursing day care center.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $locationReference
     * @return static
     */
    public function setLocationReference(array $locationReference = [])
    {
        $this->locationReference = [];
        if ([] === $locationReference) {
            return $this;
        }
        foreach($locationReference as $v) {
            if ($v instanceof FHIRReference) {
                $this->addLocationReference($v);
            } else {
                $this->addLocationReference(new FHIRReference($v));
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
     * Any other notes and comments made about the service request. For example,
     * internal billing notes.
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
     * Any other notes and comments made about the service request. For example,
     * internal billing notes.
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
     * Any other notes and comments made about the service request. For example,
     * internal billing notes.
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date/time at which the requested service should occur. (choose any one of
     * occurrence*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime()
    {
        return $this->occurrenceDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date/time at which the requested service should occur. (choose any one of
     * occurrence*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $occurrenceDateTime
     * @return static
     */
    public function setOccurrenceDateTime($occurrenceDateTime = null)
    {
        if (null === $occurrenceDateTime) {
            $this->occurrenceDateTime = null;
            return $this;
        }
        if ($occurrenceDateTime instanceof FHIRDateTime) {
            $this->occurrenceDateTime = $occurrenceDateTime;
            return $this;
        }
        $this->occurrenceDateTime = new FHIRDateTime($occurrenceDateTime);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date/time at which the requested service should occur. (choose any one of
     * occurrence*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getOccurrencePeriod()
    {
        return $this->occurrencePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date/time at which the requested service should occur. (choose any one of
     * occurrence*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $occurrencePeriod
     * @return static
     */
    public function setOccurrencePeriod(FHIRPeriod $occurrencePeriod = null)
    {
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
     * The date/time at which the requested service should occur. (choose any one of
     * occurrence*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getOccurrenceTiming()
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
     * The date/time at which the requested service should occur. (choose any one of
     * occurrence*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming $occurrenceTiming
     * @return static
     */
    public function setOccurrenceTiming(FHIRTiming $occurrenceTiming = null)
    {
        $this->occurrenceTiming = $occurrenceTiming;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional details and instructions about the how the services are to be
     * delivered. For example, and order for a urinary catheter may have an order
     * detail for an external or indwelling catheter, or an order for a bandage may
     * require additional instructions specifying how the bandage should be applied.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getOrderDetail()
    {
        return $this->orderDetail;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional details and instructions about the how the services are to be
     * delivered. For example, and order for a urinary catheter may have an order
     * detail for an external or indwelling catheter, or an order for a bandage may
     * require additional instructions specifying how the bandage should be applied.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $orderDetail
     * @return static
     */
    public function addOrderDetail(FHIRCodeableConcept $orderDetail = null)
    {
        $this->orderDetail[] = $orderDetail;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional details and instructions about the how the services are to be
     * delivered. For example, and order for a urinary catheter may have an order
     * detail for an external or indwelling catheter, or an order for a bandage may
     * require additional instructions specifying how the bandage should be applied.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $orderDetail
     * @return static
     */
    public function setOrderDetail(array $orderDetail = [])
    {
        $this->orderDetail = [];
        if ([] === $orderDetail) {
            return $this;
        }
        foreach($orderDetail as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addOrderDetail($v);
            } else {
                $this->addOrderDetail(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Instructions in terms that are understood by the patient or consumer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getPatientInstruction()
    {
        return $this->patientInstruction;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Instructions in terms that are understood by the patient or consumer.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $patientInstruction
     * @return static
     */
    public function setPatientInstruction($patientInstruction = null)
    {
        if (null === $patientInstruction) {
            $this->patientInstruction = null;
            return $this;
        }
        if ($patientInstruction instanceof FHIRString) {
            $this->patientInstruction = $patientInstruction;
            return $this;
        }
        $this->patientInstruction = new FHIRString($patientInstruction);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The desired performer for doing the requested service. For example, the surgeon,
     * dermatopathologist, endoscopist, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The desired performer for doing the requested service. For example, the surgeon,
     * dermatopathologist, endoscopist, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $performer
     * @return static
     */
    public function addPerformer(FHIRReference $performer = null)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The desired performer for doing the requested service. For example, the surgeon,
     * dermatopathologist, endoscopist, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $performer
     * @return static
     */
    public function setPerformer(array $performer = [])
    {
        $this->performer = [];
        if ([] === $performer) {
            return $this;
        }
        foreach($performer as $v) {
            if ($v instanceof FHIRReference) {
                $this->addPerformer($v);
            } else {
                $this->addPerformer(new FHIRReference($v));
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
     * Desired type of performer for doing the requested service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getPerformerType()
    {
        return $this->performerType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Desired type of performer for doing the requested service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $performerType
     * @return static
     */
    public function setPerformerType(FHIRCodeableConcept $performerType = null)
    {
        $this->performerType = $performerType;
        return $this;
    }

    /**
     * Identifies the level of importance to be assigned to actioning the request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the ServiceRequest should be addressed with respect to
     * other requests.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestPriority
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Identifies the level of importance to be assigned to actioning the request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the ServiceRequest should be addressed with respect to
     * other requests.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestPriority $priority
     * @return static
     */
    public function setPriority(FHIRRequestPriority $priority = null)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An amount of service being requested which can be a quantity ( for example
     * $1,500 home modification), a ratio ( for example, 20 half day visits per month),
     * or a range (2.0 to 1.8 Gy per fraction). (choose any one of quantity*, but only
     * one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getQuantityQuantity()
    {
        return $this->quantityQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An amount of service being requested which can be a quantity ( for example
     * $1,500 home modification), a ratio ( for example, 20 half day visits per month),
     * or a range (2.0 to 1.8 Gy per fraction). (choose any one of quantity*, but only
     * one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $quantityQuantity
     * @return static
     */
    public function setQuantityQuantity(FHIRQuantity $quantityQuantity = null)
    {
        $this->quantityQuantity = $quantityQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An amount of service being requested which can be a quantity ( for example
     * $1,500 home modification), a ratio ( for example, 20 half day visits per month),
     * or a range (2.0 to 1.8 Gy per fraction). (choose any one of quantity*, but only
     * one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    public function getQuantityRange()
    {
        return $this->quantityRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An amount of service being requested which can be a quantity ( for example
     * $1,500 home modification), a ratio ( for example, 20 half day visits per month),
     * or a range (2.0 to 1.8 Gy per fraction). (choose any one of quantity*, but only
     * one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange $quantityRange
     * @return static
     */
    public function setQuantityRange(FHIRRange $quantityRange = null)
    {
        $this->quantityRange = $quantityRange;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An amount of service being requested which can be a quantity ( for example
     * $1,500 home modification), a ratio ( for example, 20 half day visits per month),
     * or a range (2.0 to 1.8 Gy per fraction). (choose any one of quantity*, but only
     * one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio
     */
    public function getQuantityRatio()
    {
        return $this->quantityRatio;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An amount of service being requested which can be a quantity ( for example
     * $1,500 home modification), a ratio ( for example, 20 half day visits per month),
     * or a range (2.0 to 1.8 Gy per fraction). (choose any one of quantity*, but only
     * one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio $quantityRatio
     * @return static
     */
    public function setQuantityRatio(FHIRRatio $quantityRatio = null)
    {
        $this->quantityRatio = $quantityRatio;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An explanation or justification for why this service is being requested in coded
     * or textual form. This is often for billing purposes. May relate to the resources
     * referred to in `supportingInfo`.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An explanation or justification for why this service is being requested in coded
     * or textual form. This is often for billing purposes. May relate to the resources
     * referred to in `supportingInfo`.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return static
     */
    public function addReasonCode(FHIRCodeableConcept $reasonCode = null)
    {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An explanation or justification for why this service is being requested in coded
     * or textual form. This is often for billing purposes. May relate to the resources
     * referred to in `supportingInfo`.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $reasonCode
     * @return static
     */
    public function setReasonCode(array $reasonCode = [])
    {
        $this->reasonCode = [];
        if ([] === $reasonCode) {
            return $this;
        }
        foreach($reasonCode as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addReasonCode($v);
            } else {
                $this->addReasonCode(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates another resource that provides a justification for why this service is
     * being requested. May relate to the resources referred to in `supportingInfo`.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates another resource that provides a justification for why this service is
     * being requested. May relate to the resources referred to in `supportingInfo`.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $reasonReference
     * @return static
     */
    public function addReasonReference(FHIRReference $reasonReference = null)
    {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates another resource that provides a justification for why this service is
     * being requested. May relate to the resources referred to in `supportingInfo`.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $reasonReference
     * @return static
     */
    public function setReasonReference(array $reasonReference = [])
    {
        $this->reasonReference = [];
        if ([] === $reasonReference) {
            return $this;
        }
        foreach($reasonReference as $v) {
            if ($v instanceof FHIRReference) {
                $this->addReasonReference($v);
            } else {
                $this->addReasonReference(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Key events in the history of the request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getRelevantHistory()
    {
        return $this->relevantHistory;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Key events in the history of the request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $relevantHistory
     * @return static
     */
    public function addRelevantHistory(FHIRReference $relevantHistory = null)
    {
        $this->relevantHistory[] = $relevantHistory;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Key events in the history of the request.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $relevantHistory
     * @return static
     */
    public function setRelevantHistory(array $relevantHistory = [])
    {
        $this->relevantHistory = [];
        if ([] === $relevantHistory) {
            return $this;
        }
        foreach($relevantHistory as $v) {
            if ($v instanceof FHIRReference) {
                $this->addRelevantHistory($v);
            } else {
                $this->addRelevantHistory(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request takes the place of the referenced completed or terminated
     * request(s).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getReplaces()
    {
        return $this->replaces;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request takes the place of the referenced completed or terminated
     * request(s).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $replaces
     * @return static
     */
    public function addReplaces(FHIRReference $replaces = null)
    {
        $this->replaces[] = $replaces;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request takes the place of the referenced completed or terminated
     * request(s).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $replaces
     * @return static
     */
    public function setReplaces(array $replaces = [])
    {
        $this->replaces = [];
        if ([] === $replaces) {
            return $this;
        }
        foreach($replaces as $v) {
            if ($v instanceof FHIRReference) {
                $this->addReplaces($v);
            } else {
                $this->addReplaces(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual who initiated the request and has responsibility for its
     * activation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getRequester()
    {
        return $this->requester;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual who initiated the request and has responsibility for its
     * activation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $requester
     * @return static
     */
    public function setRequester(FHIRReference $requester = null)
    {
        $this->requester = $requester;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A shared identifier common to all service requests that were authorized more or
     * less simultaneously by a single author, representing the composite or group
     * identifier.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    public function getRequisition()
    {
        return $this->requisition;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A shared identifier common to all service requests that were authorized more or
     * less simultaneously by a single author, representing the composite or group
     * identifier.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $requisition
     * @return static
     */
    public function setRequisition(FHIRIdentifier $requisition = null)
    {
        $this->requisition = $requisition;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One or more specimens that the laboratory procedure will use.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One or more specimens that the laboratory procedure will use.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $specimen
     * @return static
     */
    public function addSpecimen(FHIRReference $specimen = null)
    {
        $this->specimen[] = $specimen;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One or more specimens that the laboratory procedure will use.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $specimen
     * @return static
     */
    public function setSpecimen(array $specimen = [])
    {
        $this->specimen = [];
        if ([] === $specimen) {
            return $this;
        }
        foreach($specimen as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSpecimen($v);
            } else {
                $this->addSpecimen(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * Indicates whether the plan is currently being acted upon, represents future
     * intentions or is now a historical record.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the order.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Indicates whether the plan is currently being acted upon, represents future
     * intentions or is now a historical record.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the order.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestStatus $status
     * @return static
     */
    public function setStatus(FHIRRequestStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * On whom or what the service is to be performed. This is usually a human patient,
     * but can also be requested on animals, groups of humans or animals, devices such
     * as dialysis machines, or even locations (typically for environmental scans).
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
     * On whom or what the service is to be performed. This is usually a human patient,
     * but can also be requested on animals, groups of humans or animals, devices such
     * as dialysis machines, or even locations (typically for environmental scans).
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
     * Additional clinical information about the patient or specimen that may influence
     * the services or their interpretations. This information includes diagnosis,
     * clinical findings and other observations. In laboratory ordering these are
     * typically referred to as "ask at order entry questions (AOEs)". This includes
     * observations explicitly requested by the producer (filler) to provide context or
     * supporting information needed to complete the order. For example, reporting the
     * amount of inspired oxygen for blood gas measurements.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getSupportingInfo()
    {
        return $this->supportingInfo;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional clinical information about the patient or specimen that may influence
     * the services or their interpretations. This information includes diagnosis,
     * clinical findings and other observations. In laboratory ordering these are
     * typically referred to as "ask at order entry questions (AOEs)". This includes
     * observations explicitly requested by the producer (filler) to provide context or
     * supporting information needed to complete the order. For example, reporting the
     * amount of inspired oxygen for blood gas measurements.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $supportingInfo
     * @return static
     */
    public function addSupportingInfo(FHIRReference $supportingInfo = null)
    {
        $this->supportingInfo[] = $supportingInfo;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional clinical information about the patient or specimen that may influence
     * the services or their interpretations. This information includes diagnosis,
     * clinical findings and other observations. In laboratory ordering these are
     * typically referred to as "ask at order entry questions (AOEs)". This includes
     * observations explicitly requested by the producer (filler) to provide context or
     * supporting information needed to complete the order. For example, reporting the
     * amount of inspired oxygen for blood gas measurements.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $supportingInfo
     * @return static
     */
    public function setSupportingInfo(array $supportingInfo = [])
    {
        $this->supportingInfo = [];
        if ([] === $supportingInfo) {
            return $this;
        }
        foreach($supportingInfo as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSupportingInfo($v);
            } else {
                $this->addSupportingInfo(new FHIRReference($v));
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
        if (null !== ($v = $this->getAsNeededBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AS_NEEDED_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAsNeededCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAuthoredOn())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AUTHORED_ON] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getBasedOn())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_BASED_ON, $i)] = $fieldErrs;
                }
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
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDoNotPerform())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DO_NOT_PERFORM] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENCOUNTER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getInstantiatesCanonical())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INSTANTIATES_CANONICAL, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getInstantiatesUri())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INSTANTIATES_URI, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getInsurance())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INSURANCE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getIntent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INTENT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getLocationCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LOCATION_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getLocationReference())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LOCATION_REFERENCE, $i)] = $fieldErrs;
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
        if ([] !== ($vs = $this->getOrderDetail())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ORDER_DETAIL, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPatientInstruction())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT_INSTRUCTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPerformer())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PERFORMER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPerformerType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERFORMER_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPriority())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRIORITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getQuantityQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUANTITY_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getQuantityRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUANTITY_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getQuantityRatio())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUANTITY_RATIO] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON_REFERENCE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRelevantHistory())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RELEVANT_HISTORY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReplaces())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REPLACES, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getRequester())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUESTER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequisition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUISITION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSpecimen())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SPECIMEN, $i)] = $fieldErrs;
                }
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
        if ([] !== ($vs = $this->getSupportingInfo())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUPPORTING_INFO, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AS_NEEDED_BOOLEAN])) {
            $v = $this->getAsNeededBoolean();
            foreach($validationRules[self::FIELD_AS_NEEDED_BOOLEAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_AS_NEEDED_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AS_NEEDED_BOOLEAN])) {
                        $errs[self::FIELD_AS_NEEDED_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_AS_NEEDED_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT])) {
            $v = $this->getAsNeededCodeableConcept();
            foreach($validationRules[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_AS_NEEDED_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTHORED_ON])) {
            $v = $this->getAuthoredOn();
            foreach($validationRules[self::FIELD_AUTHORED_ON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_AUTHORED_ON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHORED_ON])) {
                        $errs[self::FIELD_AUTHORED_ON] = [];
                    }
                    $errs[self::FIELD_AUTHORED_ON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BASED_ON])) {
            $v = $this->getBasedOn();
            foreach($validationRules[self::FIELD_BASED_ON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_BASED_ON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASED_ON])) {
                        $errs[self::FIELD_BASED_ON] = [];
                    }
                    $errs[self::FIELD_BASED_ON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BODY_SITE])) {
            $v = $this->getBodySite();
            foreach($validationRules[self::FIELD_BODY_SITE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_BODY_SITE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_CATEGORY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DO_NOT_PERFORM])) {
            $v = $this->getDoNotPerform();
            foreach($validationRules[self::FIELD_DO_NOT_PERFORM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_DO_NOT_PERFORM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DO_NOT_PERFORM])) {
                        $errs[self::FIELD_DO_NOT_PERFORM] = [];
                    }
                    $errs[self::FIELD_DO_NOT_PERFORM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENCOUNTER])) {
            $v = $this->getEncounter();
            foreach($validationRules[self::FIELD_ENCOUNTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCOUNTER])) {
                        $errs[self::FIELD_ENCOUNTER] = [];
                    }
                    $errs[self::FIELD_ENCOUNTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSTANTIATES_CANONICAL])) {
            $v = $this->getInstantiatesCanonical();
            foreach($validationRules[self::FIELD_INSTANTIATES_CANONICAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_INSTANTIATES_CANONICAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSTANTIATES_CANONICAL])) {
                        $errs[self::FIELD_INSTANTIATES_CANONICAL] = [];
                    }
                    $errs[self::FIELD_INSTANTIATES_CANONICAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSTANTIATES_URI])) {
            $v = $this->getInstantiatesUri();
            foreach($validationRules[self::FIELD_INSTANTIATES_URI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_INSTANTIATES_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSTANTIATES_URI])) {
                        $errs[self::FIELD_INSTANTIATES_URI] = [];
                    }
                    $errs[self::FIELD_INSTANTIATES_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSURANCE])) {
            $v = $this->getInsurance();
            foreach($validationRules[self::FIELD_INSURANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_INSURANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSURANCE])) {
                        $errs[self::FIELD_INSURANCE] = [];
                    }
                    $errs[self::FIELD_INSURANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTENT])) {
            $v = $this->getIntent();
            foreach($validationRules[self::FIELD_INTENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_INTENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTENT])) {
                        $errs[self::FIELD_INTENT] = [];
                    }
                    $errs[self::FIELD_INTENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCATION_CODE])) {
            $v = $this->getLocationCode();
            foreach($validationRules[self::FIELD_LOCATION_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_LOCATION_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION_CODE])) {
                        $errs[self::FIELD_LOCATION_CODE] = [];
                    }
                    $errs[self::FIELD_LOCATION_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCATION_REFERENCE])) {
            $v = $this->getLocationReference();
            foreach($validationRules[self::FIELD_LOCATION_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_LOCATION_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION_REFERENCE])) {
                        $errs[self::FIELD_LOCATION_REFERENCE] = [];
                    }
                    $errs[self::FIELD_LOCATION_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_DATE_TIME])) {
            $v = $this->getOccurrenceDateTime();
            foreach($validationRules[self::FIELD_OCCURRENCE_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_OCCURRENCE_DATE_TIME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_OCCURRENCE_PERIOD, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_OCCURRENCE_TIMING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_TIMING])) {
                        $errs[self::FIELD_OCCURRENCE_TIMING] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_TIMING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORDER_DETAIL])) {
            $v = $this->getOrderDetail();
            foreach($validationRules[self::FIELD_ORDER_DETAIL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_ORDER_DETAIL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORDER_DETAIL])) {
                        $errs[self::FIELD_ORDER_DETAIL] = [];
                    }
                    $errs[self::FIELD_ORDER_DETAIL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT_INSTRUCTION])) {
            $v = $this->getPatientInstruction();
            foreach($validationRules[self::FIELD_PATIENT_INSTRUCTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_PATIENT_INSTRUCTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT_INSTRUCTION])) {
                        $errs[self::FIELD_PATIENT_INSTRUCTION] = [];
                    }
                    $errs[self::FIELD_PATIENT_INSTRUCTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMER])) {
            $v = $this->getPerformer();
            foreach($validationRules[self::FIELD_PERFORMER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_PERFORMER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER])) {
                        $errs[self::FIELD_PERFORMER] = [];
                    }
                    $errs[self::FIELD_PERFORMER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMER_TYPE])) {
            $v = $this->getPerformerType();
            foreach($validationRules[self::FIELD_PERFORMER_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_PERFORMER_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER_TYPE])) {
                        $errs[self::FIELD_PERFORMER_TYPE] = [];
                    }
                    $errs[self::FIELD_PERFORMER_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIORITY])) {
            $v = $this->getPriority();
            foreach($validationRules[self::FIELD_PRIORITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_PRIORITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRIORITY])) {
                        $errs[self::FIELD_PRIORITY] = [];
                    }
                    $errs[self::FIELD_PRIORITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUANTITY_QUANTITY])) {
            $v = $this->getQuantityQuantity();
            foreach($validationRules[self::FIELD_QUANTITY_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_QUANTITY_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUANTITY_QUANTITY])) {
                        $errs[self::FIELD_QUANTITY_QUANTITY] = [];
                    }
                    $errs[self::FIELD_QUANTITY_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUANTITY_RANGE])) {
            $v = $this->getQuantityRange();
            foreach($validationRules[self::FIELD_QUANTITY_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_QUANTITY_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUANTITY_RANGE])) {
                        $errs[self::FIELD_QUANTITY_RANGE] = [];
                    }
                    $errs[self::FIELD_QUANTITY_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUANTITY_RATIO])) {
            $v = $this->getQuantityRatio();
            foreach($validationRules[self::FIELD_QUANTITY_RATIO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_QUANTITY_RATIO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUANTITY_RATIO])) {
                        $errs[self::FIELD_QUANTITY_RATIO] = [];
                    }
                    $errs[self::FIELD_QUANTITY_RATIO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_CODE])) {
            $v = $this->getReasonCode();
            foreach($validationRules[self::FIELD_REASON_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_REASON_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_CODE])) {
                        $errs[self::FIELD_REASON_CODE] = [];
                    }
                    $errs[self::FIELD_REASON_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_REFERENCE])) {
            $v = $this->getReasonReference();
            foreach($validationRules[self::FIELD_REASON_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_REASON_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_REFERENCE])) {
                        $errs[self::FIELD_REASON_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REASON_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELEVANT_HISTORY])) {
            $v = $this->getRelevantHistory();
            foreach($validationRules[self::FIELD_RELEVANT_HISTORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_RELEVANT_HISTORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELEVANT_HISTORY])) {
                        $errs[self::FIELD_RELEVANT_HISTORY] = [];
                    }
                    $errs[self::FIELD_RELEVANT_HISTORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPLACES])) {
            $v = $this->getReplaces();
            foreach($validationRules[self::FIELD_REPLACES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_REPLACES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPLACES])) {
                        $errs[self::FIELD_REPLACES] = [];
                    }
                    $errs[self::FIELD_REPLACES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUESTER])) {
            $v = $this->getRequester();
            foreach($validationRules[self::FIELD_REQUESTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_REQUESTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUESTER])) {
                        $errs[self::FIELD_REQUESTER] = [];
                    }
                    $errs[self::FIELD_REQUESTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUISITION])) {
            $v = $this->getRequisition();
            foreach($validationRules[self::FIELD_REQUISITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_REQUISITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUISITION])) {
                        $errs[self::FIELD_REQUISITION] = [];
                    }
                    $errs[self::FIELD_REQUISITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPECIMEN])) {
            $v = $this->getSpecimen();
            foreach($validationRules[self::FIELD_SPECIMEN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_SPECIMEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPECIMEN])) {
                        $errs[self::FIELD_SPECIMEN] = [];
                    }
                    $errs[self::FIELD_SPECIMEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_STATUS, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUPPORTING_INFO])) {
            $v = $this->getSupportingInfo();
            foreach($validationRules[self::FIELD_SUPPORTING_INFO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SERVICE_REQUEST, self::FIELD_SUPPORTING_INFO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUPPORTING_INFO])) {
                        $errs[self::FIELD_SUPPORTING_INFO] = [];
                    }
                    $errs[self::FIELD_SUPPORTING_INFO][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRServiceRequest $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRServiceRequest
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
                throw new \DomainException(sprintf('FHIRServiceRequest::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRServiceRequest::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRServiceRequest;
        } elseif (!is_object($type) || !($type instanceof FHIRServiceRequest)) {
            throw new \RuntimeException(sprintf(
                'FHIRServiceRequest::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRServiceRequest or null, %s seen.',
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
        if (isset($children->asNeededBoolean)) {
            $type->setAsNeededBoolean(FHIRBoolean::xmlUnserialize($children->asNeededBoolean));
        }
        if (isset($attributes->asNeededBoolean)) {
            $pt = $type->getAsNeededBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->asNeededBoolean);
            } else {
                $type->setAsNeededBoolean((string)$attributes->asNeededBoolean);
            }
        }
        if (isset($children->asNeededCodeableConcept)) {
            $type->setAsNeededCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->asNeededCodeableConcept));
        }
        if (isset($children->authoredOn)) {
            $type->setAuthoredOn(FHIRDateTime::xmlUnserialize($children->authoredOn));
        }
        if (isset($attributes->authoredOn)) {
            $pt = $type->getAuthoredOn();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->authoredOn);
            } else {
                $type->setAuthoredOn((string)$attributes->authoredOn);
            }
        }
        if (isset($children->basedOn)) {
            foreach($children->basedOn as $child) {
                $type->addBasedOn(FHIRReference::xmlUnserialize($child));
            }
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
        if (isset($children->code)) {
            $type->setCode(FHIRCodeableConcept::xmlUnserialize($children->code));
        }
        if (isset($children->doNotPerform)) {
            $type->setDoNotPerform(FHIRBoolean::xmlUnserialize($children->doNotPerform));
        }
        if (isset($attributes->doNotPerform)) {
            $pt = $type->getDoNotPerform();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->doNotPerform);
            } else {
                $type->setDoNotPerform((string)$attributes->doNotPerform);
            }
        }
        if (isset($children->encounter)) {
            $type->setEncounter(FHIRReference::xmlUnserialize($children->encounter));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->instantiatesCanonical)) {
            foreach($children->instantiatesCanonical as $child) {
                $type->addInstantiatesCanonical(FHIRCanonical::xmlUnserialize($child));
            }
        }
        if (isset($children->instantiatesUri)) {
            foreach($children->instantiatesUri as $child) {
                $type->addInstantiatesUri(FHIRUri::xmlUnserialize($child));
            }
        }
        if (isset($children->insurance)) {
            foreach($children->insurance as $child) {
                $type->addInsurance(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->intent)) {
            $type->setIntent(FHIRRequestIntent::xmlUnserialize($children->intent));
        }
        if (isset($children->locationCode)) {
            foreach($children->locationCode as $child) {
                $type->addLocationCode(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->locationReference)) {
            foreach($children->locationReference as $child) {
                $type->addLocationReference(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->note)) {
            foreach($children->note as $child) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($child));
            }
        }
        if (isset($children->occurrenceDateTime)) {
            $type->setOccurrenceDateTime(FHIRDateTime::xmlUnserialize($children->occurrenceDateTime));
        }
        if (isset($attributes->occurrenceDateTime)) {
            $pt = $type->getOccurrenceDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->occurrenceDateTime);
            } else {
                $type->setOccurrenceDateTime((string)$attributes->occurrenceDateTime);
            }
        }
        if (isset($children->occurrencePeriod)) {
            $type->setOccurrencePeriod(FHIRPeriod::xmlUnserialize($children->occurrencePeriod));
        }
        if (isset($children->occurrenceTiming)) {
            $type->setOccurrenceTiming(FHIRTiming::xmlUnserialize($children->occurrenceTiming));
        }
        if (isset($children->orderDetail)) {
            foreach($children->orderDetail as $child) {
                $type->addOrderDetail(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->patientInstruction)) {
            $type->setPatientInstruction(FHIRString::xmlUnserialize($children->patientInstruction));
        }
        if (isset($attributes->patientInstruction)) {
            $pt = $type->getPatientInstruction();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->patientInstruction);
            } else {
                $type->setPatientInstruction((string)$attributes->patientInstruction);
            }
        }
        if (isset($children->performer)) {
            foreach($children->performer as $child) {
                $type->addPerformer(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->performerType)) {
            $type->setPerformerType(FHIRCodeableConcept::xmlUnserialize($children->performerType));
        }
        if (isset($children->priority)) {
            $type->setPriority(FHIRRequestPriority::xmlUnserialize($children->priority));
        }
        if (isset($children->quantityQuantity)) {
            $type->setQuantityQuantity(FHIRQuantity::xmlUnserialize($children->quantityQuantity));
        }
        if (isset($children->quantityRange)) {
            $type->setQuantityRange(FHIRRange::xmlUnserialize($children->quantityRange));
        }
        if (isset($children->quantityRatio)) {
            $type->setQuantityRatio(FHIRRatio::xmlUnserialize($children->quantityRatio));
        }
        if (isset($children->reasonCode)) {
            foreach($children->reasonCode as $child) {
                $type->addReasonCode(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->reasonReference)) {
            foreach($children->reasonReference as $child) {
                $type->addReasonReference(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->relevantHistory)) {
            foreach($children->relevantHistory as $child) {
                $type->addRelevantHistory(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->replaces)) {
            foreach($children->replaces as $child) {
                $type->addReplaces(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->requester)) {
            $type->setRequester(FHIRReference::xmlUnserialize($children->requester));
        }
        if (isset($children->requisition)) {
            $type->setRequisition(FHIRIdentifier::xmlUnserialize($children->requisition));
        }
        if (isset($children->specimen)) {
            foreach($children->specimen as $child) {
                $type->addSpecimen(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRRequestStatus::xmlUnserialize($children->status));
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRReference::xmlUnserialize($children->subject));
        }
        if (isset($children->supportingInfo)) {
            foreach($children->supportingInfo as $child) {
                $type->addSupportingInfo(FHIRReference::xmlUnserialize($child));
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
        if (null !== ($v = $this->getAsNeededBoolean())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AS_NEEDED_BOOLEAN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAsNeededCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AS_NEEDED_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAuthoredOn())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHORED_ON, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getBasedOn())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_BASED_ON, null, $v->_getFHIRXMLNamespace()));
            }
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
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDoNotPerform())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DO_NOT_PERFORM, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getEncounter())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENCOUNTER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getInstantiatesCanonical())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INSTANTIATES_CANONICAL, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getInstantiatesUri())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INSTANTIATES_URI, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getInsurance())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INSURANCE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getIntent())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INTENT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getLocationCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LOCATION_CODE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getLocationReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LOCATION_REFERENCE, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OCCURRENCE_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOccurrencePeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OCCURRENCE_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOccurrenceTiming())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OCCURRENCE_TIMING, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getOrderDetail())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ORDER_DETAIL, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPatientInstruction())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT_INSTRUCTION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getPerformer())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PERFORMER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPerformerType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERFORMER_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPriority())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRIORITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getQuantityQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_QUANTITY_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getQuantityRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_QUANTITY_RANGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getQuantityRatio())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_QUANTITY_RATIO, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_CODE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_REFERENCE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getRelevantHistory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RELEVANT_HISTORY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getReplaces())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REPLACES, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getRequester())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUESTER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRequisition())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUISITION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getSpecimen())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SPECIMEN, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getSupportingInfo())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUPPORTING_INFO, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getAsNeededBoolean())) {
            $a[self::FIELD_AS_NEEDED_BOOLEAN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_AS_NEEDED_BOOLEAN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getAsNeededCodeableConcept())) {
            $a[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getAuthoredOn())) {
            $a[self::FIELD_AUTHORED_ON] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_AUTHORED_ON_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getBasedOn())) {
            $a[self::FIELD_BASED_ON] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_BASED_ON][] = $v;
            }
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
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
        }
        if (null !== ($v = $this->getDoNotPerform())) {
            $a[self::FIELD_DO_NOT_PERFORM] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_DO_NOT_PERFORM_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            $a[self::FIELD_ENCOUNTER] = $v;
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
        if ([] !== ($vs = $this->getInstantiatesCanonical())) {
            $a[self::FIELD_INSTANTIATES_CANONICAL] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_INSTANTIATES_CANONICAL][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRCanonical::FIELD_VALUE]) || array_key_exists(FHIRCanonical::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRCanonical::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_INSTANTIATES_CANONICAL_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getInstantiatesUri())) {
            $a[self::FIELD_INSTANTIATES_URI] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_INSTANTIATES_URI][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRUri::FIELD_VALUE]) || array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRUri::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_INSTANTIATES_URI_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getInsurance())) {
            $a[self::FIELD_INSURANCE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_INSURANCE][] = $v;
            }
        }
        if (null !== ($v = $this->getIntent())) {
            $a[self::FIELD_INTENT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRRequestIntent::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRRequestIntent::FIELD_VALUE]);
                $a[self::FIELD_INTENT_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getLocationCode())) {
            $a[self::FIELD_LOCATION_CODE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_LOCATION_CODE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getLocationReference())) {
            $a[self::FIELD_LOCATION_REFERENCE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_LOCATION_REFERENCE][] = $v;
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
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            $a[self::FIELD_OCCURRENCE_DATE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_OCCURRENCE_DATE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getOccurrencePeriod())) {
            $a[self::FIELD_OCCURRENCE_PERIOD] = $v;
        }
        if (null !== ($v = $this->getOccurrenceTiming())) {
            $a[self::FIELD_OCCURRENCE_TIMING] = $v;
        }
        if ([] !== ($vs = $this->getOrderDetail())) {
            $a[self::FIELD_ORDER_DETAIL] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ORDER_DETAIL][] = $v;
            }
        }
        if (null !== ($v = $this->getPatientInstruction())) {
            $a[self::FIELD_PATIENT_INSTRUCTION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_PATIENT_INSTRUCTION_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getPerformer())) {
            $a[self::FIELD_PERFORMER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PERFORMER][] = $v;
            }
        }
        if (null !== ($v = $this->getPerformerType())) {
            $a[self::FIELD_PERFORMER_TYPE] = $v;
        }
        if (null !== ($v = $this->getPriority())) {
            $a[self::FIELD_PRIORITY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRRequestPriority::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRRequestPriority::FIELD_VALUE]);
                $a[self::FIELD_PRIORITY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getQuantityQuantity())) {
            $a[self::FIELD_QUANTITY_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getQuantityRange())) {
            $a[self::FIELD_QUANTITY_RANGE] = $v;
        }
        if (null !== ($v = $this->getQuantityRatio())) {
            $a[self::FIELD_QUANTITY_RATIO] = $v;
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            $a[self::FIELD_REASON_CODE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REASON_CODE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            $a[self::FIELD_REASON_REFERENCE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REASON_REFERENCE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getRelevantHistory())) {
            $a[self::FIELD_RELEVANT_HISTORY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_RELEVANT_HISTORY][] = $v;
            }
        }
        if ([] !== ($vs = $this->getReplaces())) {
            $a[self::FIELD_REPLACES] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REPLACES][] = $v;
            }
        }
        if (null !== ($v = $this->getRequester())) {
            $a[self::FIELD_REQUESTER] = $v;
        }
        if (null !== ($v = $this->getRequisition())) {
            $a[self::FIELD_REQUISITION] = $v;
        }
        if ([] !== ($vs = $this->getSpecimen())) {
            $a[self::FIELD_SPECIMEN] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SPECIMEN][] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRRequestStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRRequestStatus::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if ([] !== ($vs = $this->getSupportingInfo())) {
            $a[self::FIELD_SUPPORTING_INFO] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SUPPORTING_INFO][] = $v;
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
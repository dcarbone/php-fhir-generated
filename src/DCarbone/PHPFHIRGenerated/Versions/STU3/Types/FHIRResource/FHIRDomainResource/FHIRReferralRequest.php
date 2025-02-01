<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 16:35+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
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
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRRequestIntentList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRRequestPriorityList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRRequestStatusList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRReferralRequest\FHIRReferralRequestRequester;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRequestIntent;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRequestPriority;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRequestStatus;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionTypeMap;

/**
 * Used to record and send details about a request for referral service or transfer
 * of a patient to the care of another provider or provider organization.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRReferralRequest extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_REFERRAL_REQUEST;

    /* class_default.php:47 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_DEFINITION = 'definition';
    public const FIELD_BASED_ON = 'basedOn';
    public const FIELD_REPLACES = 'replaces';
    public const FIELD_GROUP_IDENTIFIER = 'groupIdentifier';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_INTENT = 'intent';
    public const FIELD_INTENT_EXT = '_intent';
    public const FIELD_TYPE = 'type';
    public const FIELD_PRIORITY = 'priority';
    public const FIELD_PRIORITY_EXT = '_priority';
    public const FIELD_SERVICE_REQUESTED = 'serviceRequested';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_CONTEXT = 'context';
    public const FIELD_OCCURRENCE_DATE_TIME = 'occurrenceDateTime';
    public const FIELD_OCCURRENCE_DATE_TIME_EXT = '_occurrenceDateTime';
    public const FIELD_OCCURRENCE_PERIOD = 'occurrencePeriod';
    public const FIELD_AUTHORED_ON = 'authoredOn';
    public const FIELD_AUTHORED_ON_EXT = '_authoredOn';
    public const FIELD_REQUESTER = 'requester';
    public const FIELD_SPECIALTY = 'specialty';
    public const FIELD_RECIPIENT = 'recipient';
    public const FIELD_REASON_CODE = 'reasonCode';
    public const FIELD_REASON_REFERENCE = 'reasonReference';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_SUPPORTING_INFO = 'supportingInfo';
    public const FIELD_NOTE = 'note';
    public const FIELD_RELEVANT_HISTORY = 'relevantHistory';

    /* class_default.php:66 */
    private static array $_validationRules = [
        self::FIELD_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_INTENT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_SUBJECT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_INTENT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PRIORITY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_OCCURRENCE_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_AUTHORED_ON => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier that uniquely identifies the referral/care transfer request
     * instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A protocol, guideline, orderset or other definition that is adhered to in whole
     * or in part by this request.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] 
     */
    protected array $definition;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates any plans, proposals or orders that this request is intended to
     * satisfy - in whole or in part.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] 
     */
    protected array $basedOn;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Completed or terminated request(s) whose function is taken by this new request.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] 
     */
    protected array $replaces;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier of the logical "grouping" request/order that this
     * referral is a part of.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier 
     */
    protected FHIRIdentifier $groupIdentifier;
    /**
     * The status of the communication request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the authorization/intention reflected by the referral request
     * record.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRequestStatus 
     */
    protected FHIRRequestStatus $status;
    /**
     * The kind of procedure or diagnostic request
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Distinguishes the "level" of authorization/demand implicit in this request.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRequestIntent 
     */
    protected FHIRRequestIntent $intent;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An indication of the type of referral (or where applicable the type of transfer
     * of care) request.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $type;
    /**
     * Codes indicating the relative importance of a communication request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication of the urgency of referral (or where applicable the type of
     * transfer of care) request.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRequestPriority 
     */
    protected FHIRRequestPriority $priority;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The service(s) that is/are requested to be provided to the patient. For example:
     * cardiac pacemaker insertion.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $serviceRequested;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient who is the subject of a referral or transfer of care request.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $subject;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter at which the request for referral or transfer of care is
     * initiated.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $context;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The period of time within which the services identified in the referral/transfer
     * of care is specified or required to occur.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $occurrenceDateTime;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period of time within which the services identified in the referral/transfer
     * of care is specified or required to occur.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $occurrencePeriod;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date/DateTime of creation for draft requests and date of activation for active
     * requests.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $authoredOn;
    /**
     * Used to record and send details about a request for referral service or transfer
     * of a patient to the care of another provider or provider organization.
     *
     * The individual who initiated the request and has responsibility for its
     * activation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRReferralRequest\FHIRReferralRequestRequester 
     */
    protected FHIRReferralRequestRequester $requester;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indication of the clinical domain or discipline to which the referral or
     * transfer of care request is sent. For example: Cardiology Gastroenterology
     * Diabetology.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $specialty;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The healthcare provider(s) or provider organization(s) who/which is to receive
     * the referral/transfer of care request.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] 
     */
    protected array $recipient;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description of clinical condition indicating why referral/transfer of care is
     * requested. For example: Pathological Anomalies, Disabled (physical or mental),
     * Behavioral Management.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $reasonCode;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates another resource whose existence justifies this request.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] 
     */
    protected array $reasonReference;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The reason element gives a short description of why the referral is being made,
     * the description expands on this to support a more complete clinical summary.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $description;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any additional (administrative, financial or clinical) information required to
     * support request for referral or transfer of care. For example: Presenting
     * problems/chief complaints Medical History Family History Alerts
     * Allergy/Intolerance and Adverse Reactions Medications Observations/Assessments
     * (may include cognitive and fundtional assessments) Diagnostic Reports Care Plan.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] 
     */
    protected array $supportingInfo;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the referral request by any of the participants.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation[] 
     */
    protected array $note;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Links to Provenance records for past versions of this resource or fulfilling
     * request or event resources that identify key state transitions or updates that
     * are likely to be relevant to a user looking at the current version of the
     * resource.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] 
     */
    protected array $relevantHistory;

    /* constructor.php:63 */
    /**
     * FHIRReferralRequest Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] $definition
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] $basedOn
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] $replaces
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier $groupIdentifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRRequestStatusList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRequestStatus $status
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRRequestIntentList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRequestIntent $intent
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $type
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRRequestPriorityList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRequestPriority $priority
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] $serviceRequested
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $subject
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $context
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $occurrenceDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $occurrencePeriod
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $authoredOn
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRReferralRequest\FHIRReferralRequestRequester $requester
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $specialty
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] $recipient
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] $reasonCode
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] $reasonReference
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $description
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] $supportingInfo
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation[] $note
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] $relevantHistory
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
                                null|iterable $definition = null,
                                null|iterable $basedOn = null,
                                null|iterable $replaces = null,
                                null|FHIRIdentifier $groupIdentifier = null,
                                null|string|FHIRRequestStatusList|FHIRRequestStatus $status = null,
                                null|string|FHIRRequestIntentList|FHIRRequestIntent $intent = null,
                                null|FHIRCodeableConcept $type = null,
                                null|string|FHIRRequestPriorityList|FHIRRequestPriority $priority = null,
                                null|iterable $serviceRequested = null,
                                null|FHIRReference $subject = null,
                                null|FHIRReference $context = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $occurrenceDateTime = null,
                                null|FHIRPeriod $occurrencePeriod = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $authoredOn = null,
                                null|FHIRReferralRequestRequester $requester = null,
                                null|FHIRCodeableConcept $specialty = null,
                                null|iterable $recipient = null,
                                null|iterable $reasonCode = null,
                                null|iterable $reasonReference = null,
                                null|string|FHIRStringPrimitive|FHIRString $description = null,
                                null|iterable $supportingInfo = null,
                                null|iterable $note = null,
                                null|iterable $relevantHistory = null,
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
        if (null !== $definition) {
            $this->setDefinition(...$definition);
        }
        if (null !== $basedOn) {
            $this->setBasedOn(...$basedOn);
        }
        if (null !== $replaces) {
            $this->setReplaces(...$replaces);
        }
        if (null !== $groupIdentifier) {
            $this->setGroupIdentifier($groupIdentifier);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $intent) {
            $this->setIntent($intent);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $priority) {
            $this->setPriority($priority);
        }
        if (null !== $serviceRequested) {
            $this->setServiceRequested(...$serviceRequested);
        }
        if (null !== $subject) {
            $this->setSubject($subject);
        }
        if (null !== $context) {
            $this->setContext($context);
        }
        if (null !== $occurrenceDateTime) {
            $this->setOccurrenceDateTime($occurrenceDateTime);
        }
        if (null !== $occurrencePeriod) {
            $this->setOccurrencePeriod($occurrencePeriod);
        }
        if (null !== $authoredOn) {
            $this->setAuthoredOn($authoredOn);
        }
        if (null !== $requester) {
            $this->setRequester($requester);
        }
        if (null !== $specialty) {
            $this->setSpecialty($specialty);
        }
        if (null !== $recipient) {
            $this->setRecipient(...$recipient);
        }
        if (null !== $reasonCode) {
            $this->setReasonCode(...$reasonCode);
        }
        if (null !== $reasonReference) {
            $this->setReasonReference(...$reasonReference);
        }
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $supportingInfo) {
            $this->setSupportingInfo(...$supportingInfo);
        }
        if (null !== $note) {
            $this->setNote(...$note);
        }
        if (null !== $relevantHistory) {
            $this->setRelevantHistory(...$relevantHistory);
        }
    }

    /* class_default.php:136 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:148 */
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:162 */
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier that uniquely identifies the referral/care transfer request
     * instance.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier>
     */
    public function getIdentifierIterator(): iterable
    {
        if (!isset($this->identifier)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier that uniquely identifies the referral/care transfer request
     * instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier $identifier
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
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier that uniquely identifies the referral/care transfer request
     * instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        if ([] === $identifier) {
            unset($this->identifier);
            return $this;
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A protocol, guideline, orderset or other definition that is adhered to in whole
     * or in part by this request.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[]
     */
    public function getDefinition(): array
    {
        return $this->definition ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference>
     */
    public function getDefinitionIterator(): iterable
    {
        if (!isset($this->definition)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->definition);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A protocol, guideline, orderset or other definition that is adhered to in whole
     * or in part by this request.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $definition
     * @return static
     */
    public function addDefinition(FHIRReference $definition): self
    {
        if (!isset($this->definition)) {
            $this->definition = [];
        }
        $this->definition[] = $definition;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A protocol, guideline, orderset or other definition that is adhered to in whole
     * or in part by this request.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference ...$definition
     * @return static
     */
    public function setDefinition(FHIRReference ...$definition): self
    {
        if ([] === $definition) {
            unset($this->definition);
            return $this;
        }
        $this->definition = $definition;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates any plans, proposals or orders that this request is intended to
     * satisfy - in whole or in part.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[]
     */
    public function getBasedOn(): array
    {
        return $this->basedOn ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference>
     */
    public function getBasedOnIterator(): iterable
    {
        if (!isset($this->basedOn)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->basedOn);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates any plans, proposals or orders that this request is intended to
     * satisfy - in whole or in part.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $basedOn
     * @return static
     */
    public function addBasedOn(FHIRReference $basedOn): self
    {
        if (!isset($this->basedOn)) {
            $this->basedOn = [];
        }
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates any plans, proposals or orders that this request is intended to
     * satisfy - in whole or in part.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference ...$basedOn
     * @return static
     */
    public function setBasedOn(FHIRReference ...$basedOn): self
    {
        if ([] === $basedOn) {
            unset($this->basedOn);
            return $this;
        }
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Completed or terminated request(s) whose function is taken by this new request.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[]
     */
    public function getReplaces(): array
    {
        return $this->replaces ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference>
     */
    public function getReplacesIterator(): iterable
    {
        if (!isset($this->replaces)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->replaces);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Completed or terminated request(s) whose function is taken by this new request.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $replaces
     * @return static
     */
    public function addReplaces(FHIRReference $replaces): self
    {
        if (!isset($this->replaces)) {
            $this->replaces = [];
        }
        $this->replaces[] = $replaces;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Completed or terminated request(s) whose function is taken by this new request.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference ...$replaces
     * @return static
     */
    public function setReplaces(FHIRReference ...$replaces): self
    {
        if ([] === $replaces) {
            unset($this->replaces);
            return $this;
        }
        $this->replaces = $replaces;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier of the logical "grouping" request/order that this
     * referral is a part of.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier
     */
    public function getGroupIdentifier(): null|FHIRIdentifier
    {
        return $this->groupIdentifier ?? null;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier of the logical "grouping" request/order that this
     * referral is a part of.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier $groupIdentifier
     * @return static
     */
    public function setGroupIdentifier(null|FHIRIdentifier $groupIdentifier): self
    {
        if (null === $groupIdentifier) {
            unset($this->groupIdentifier);
            return $this;
        }
        $this->groupIdentifier = $groupIdentifier;
        return $this;
    }

    /**
     * The status of the communication request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the authorization/intention reflected by the referral request
     * record.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRequestStatus
     */
    public function getStatus(): null|FHIRRequestStatus
    {
        return $this->status ?? null;
    }

    /**
     * The status of the communication request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the authorization/intention reflected by the referral request
     * record.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRRequestStatusList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRequestStatus $status
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStatus(null|string|FHIRRequestStatusList|FHIRRequestStatus $status,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIRRequestStatus)) {
            $status = new FHIRRequestStatus(value: $status);
        }
        $this->status = $status;
        if ($this->_valueXMLLocations[self::FIELD_STATUS] !== $valueXMLLocation) {
            $this->_setStatusValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the status element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getStatusValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_STATUS];
    }

    /**
     * Set the location the "value" field of the status element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setStatusValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_STATUS] = $valueXMLLocation;
        return $this;
    }

    /**
     * The kind of procedure or diagnostic request
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Distinguishes the "level" of authorization/demand implicit in this request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRequestIntent
     */
    public function getIntent(): null|FHIRRequestIntent
    {
        return $this->intent ?? null;
    }

    /**
     * The kind of procedure or diagnostic request
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Distinguishes the "level" of authorization/demand implicit in this request.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRRequestIntentList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRequestIntent $intent
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setIntent(null|string|FHIRRequestIntentList|FHIRRequestIntent $intent,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $intent) {
            unset($this->intent);
            return $this;
        }
        if (!($intent instanceof FHIRRequestIntent)) {
            $intent = new FHIRRequestIntent(value: $intent);
        }
        $this->intent = $intent;
        if ($this->_valueXMLLocations[self::FIELD_INTENT] !== $valueXMLLocation) {
            $this->_setIntentValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the intent element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getIntentValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_INTENT];
    }

    /**
     * Set the location the "value" field of the intent element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setIntentValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_INTENT] = $valueXMLLocation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An indication of the type of referral (or where applicable the type of transfer
     * of care) request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getType(): null|FHIRCodeableConcept
    {
        return $this->type ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An indication of the type of referral (or where applicable the type of transfer
     * of care) request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(null|FHIRCodeableConcept $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Codes indicating the relative importance of a communication request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication of the urgency of referral (or where applicable the type of
     * transfer of care) request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRequestPriority
     */
    public function getPriority(): null|FHIRRequestPriority
    {
        return $this->priority ?? null;
    }

    /**
     * Codes indicating the relative importance of a communication request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication of the urgency of referral (or where applicable the type of
     * transfer of care) request.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRRequestPriorityList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRequestPriority $priority
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPriority(null|string|FHIRRequestPriorityList|FHIRRequestPriority $priority,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $priority) {
            unset($this->priority);
            return $this;
        }
        if (!($priority instanceof FHIRRequestPriority)) {
            $priority = new FHIRRequestPriority(value: $priority);
        }
        $this->priority = $priority;
        if ($this->_valueXMLLocations[self::FIELD_PRIORITY] !== $valueXMLLocation) {
            $this->_setPriorityValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the priority element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getPriorityValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PRIORITY];
    }

    /**
     * Set the location the "value" field of the priority element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setPriorityValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PRIORITY] = $valueXMLLocation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The service(s) that is/are requested to be provided to the patient. For example:
     * cardiac pacemaker insertion.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getServiceRequested(): array
    {
        return $this->serviceRequested ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getServiceRequestedIterator(): iterable
    {
        if (!isset($this->serviceRequested)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->serviceRequested);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The service(s) that is/are requested to be provided to the patient. For example:
     * cardiac pacemaker insertion.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $serviceRequested
     * @return static
     */
    public function addServiceRequested(FHIRCodeableConcept $serviceRequested): self
    {
        if (!isset($this->serviceRequested)) {
            $this->serviceRequested = [];
        }
        $this->serviceRequested[] = $serviceRequested;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The service(s) that is/are requested to be provided to the patient. For example:
     * cardiac pacemaker insertion.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept ...$serviceRequested
     * @return static
     */
    public function setServiceRequested(FHIRCodeableConcept ...$serviceRequested): self
    {
        if ([] === $serviceRequested) {
            unset($this->serviceRequested);
            return $this;
        }
        $this->serviceRequested = $serviceRequested;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient who is the subject of a referral or transfer of care request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
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
     * The patient who is the subject of a referral or transfer of care request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $subject
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
     * The encounter at which the request for referral or transfer of care is
     * initiated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getContext(): null|FHIRReference
    {
        return $this->context ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter at which the request for referral or transfer of care is
     * initiated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $context
     * @return static
     */
    public function setContext(null|FHIRReference $context): self
    {
        if (null === $context) {
            unset($this->context);
            return $this;
        }
        $this->context = $context;
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
     * The period of time within which the services identified in the referral/transfer
     * of care is specified or required to occur.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime(): null|FHIRDateTime
    {
        return $this->occurrenceDateTime ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The period of time within which the services identified in the referral/transfer
     * of care is specified or required to occur.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $occurrenceDateTime
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setOccurrenceDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $occurrenceDateTime,
                                          ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $occurrenceDateTime) {
            unset($this->occurrenceDateTime);
            return $this;
        }
        if (!($occurrenceDateTime instanceof FHIRDateTime)) {
            $occurrenceDateTime = new FHIRDateTime(value: $occurrenceDateTime);
        }
        $this->occurrenceDateTime = $occurrenceDateTime;
        if ($this->_valueXMLLocations[self::FIELD_OCCURRENCE_DATE_TIME] !== $valueXMLLocation) {
            $this->_setOccurrenceDateTimeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the occurrenceDateTime element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getOccurrenceDateTimeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_OCCURRENCE_DATE_TIME];
    }

    /**
     * Set the location the "value" field of the occurrenceDateTime element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setOccurrenceDateTimeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_OCCURRENCE_DATE_TIME] = $valueXMLLocation;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period of time within which the services identified in the referral/transfer
     * of care is specified or required to occur.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod
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
     * The period of time within which the services identified in the referral/transfer
     * of care is specified or required to occur.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $occurrencePeriod
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date/DateTime of creation for draft requests and date of activation for active
     * requests.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime
     */
    public function getAuthoredOn(): null|FHIRDateTime
    {
        return $this->authoredOn ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date/DateTime of creation for draft requests and date of activation for active
     * requests.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $authoredOn
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAuthoredOn(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $authoredOn,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $authoredOn) {
            unset($this->authoredOn);
            return $this;
        }
        if (!($authoredOn instanceof FHIRDateTime)) {
            $authoredOn = new FHIRDateTime(value: $authoredOn);
        }
        $this->authoredOn = $authoredOn;
        if ($this->_valueXMLLocations[self::FIELD_AUTHORED_ON] !== $valueXMLLocation) {
            $this->_setAuthoredOnValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the authoredOn element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAuthoredOnValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_AUTHORED_ON];
    }

    /**
     * Set the location the "value" field of the authoredOn element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAuthoredOnValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_AUTHORED_ON] = $valueXMLLocation;
        return $this;
    }

    /**
     * Used to record and send details about a request for referral service or transfer
     * of a patient to the care of another provider or provider organization.
     *
     * The individual who initiated the request and has responsibility for its
     * activation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRReferralRequest\FHIRReferralRequestRequester
     */
    public function getRequester(): null|FHIRReferralRequestRequester
    {
        return $this->requester ?? null;
    }

    /**
     * Used to record and send details about a request for referral service or transfer
     * of a patient to the care of another provider or provider organization.
     *
     * The individual who initiated the request and has responsibility for its
     * activation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRReferralRequest\FHIRReferralRequestRequester $requester
     * @return static
     */
    public function setRequester(null|FHIRReferralRequestRequester $requester): self
    {
        if (null === $requester) {
            unset($this->requester);
            return $this;
        }
        $this->requester = $requester;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indication of the clinical domain or discipline to which the referral or
     * transfer of care request is sent. For example: Cardiology Gastroenterology
     * Diabetology.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getSpecialty(): null|FHIRCodeableConcept
    {
        return $this->specialty ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indication of the clinical domain or discipline to which the referral or
     * transfer of care request is sent. For example: Cardiology Gastroenterology
     * Diabetology.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $specialty
     * @return static
     */
    public function setSpecialty(null|FHIRCodeableConcept $specialty): self
    {
        if (null === $specialty) {
            unset($this->specialty);
            return $this;
        }
        $this->specialty = $specialty;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The healthcare provider(s) or provider organization(s) who/which is to receive
     * the referral/transfer of care request.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[]
     */
    public function getRecipient(): array
    {
        return $this->recipient ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference>
     */
    public function getRecipientIterator(): iterable
    {
        if (!isset($this->recipient)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->recipient);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The healthcare provider(s) or provider organization(s) who/which is to receive
     * the referral/transfer of care request.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $recipient
     * @return static
     */
    public function addRecipient(FHIRReference $recipient): self
    {
        if (!isset($this->recipient)) {
            $this->recipient = [];
        }
        $this->recipient[] = $recipient;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The healthcare provider(s) or provider organization(s) who/which is to receive
     * the referral/transfer of care request.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference ...$recipient
     * @return static
     */
    public function setRecipient(FHIRReference ...$recipient): self
    {
        if ([] === $recipient) {
            unset($this->recipient);
            return $this;
        }
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description of clinical condition indicating why referral/transfer of care is
     * requested. For example: Pathological Anomalies, Disabled (physical or mental),
     * Behavioral Management.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode(): array
    {
        return $this->reasonCode ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getReasonCodeIterator(): iterable
    {
        if (!isset($this->reasonCode)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->reasonCode);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description of clinical condition indicating why referral/transfer of care is
     * requested. For example: Pathological Anomalies, Disabled (physical or mental),
     * Behavioral Management.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return static
     */
    public function addReasonCode(FHIRCodeableConcept $reasonCode): self
    {
        if (!isset($this->reasonCode)) {
            $this->reasonCode = [];
        }
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description of clinical condition indicating why referral/transfer of care is
     * requested. For example: Pathological Anomalies, Disabled (physical or mental),
     * Behavioral Management.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept ...$reasonCode
     * @return static
     */
    public function setReasonCode(FHIRCodeableConcept ...$reasonCode): self
    {
        if ([] === $reasonCode) {
            unset($this->reasonCode);
            return $this;
        }
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates another resource whose existence justifies this request.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[]
     */
    public function getReasonReference(): array
    {
        return $this->reasonReference ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference>
     */
    public function getReasonReferenceIterator(): iterable
    {
        if (!isset($this->reasonReference)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->reasonReference);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates another resource whose existence justifies this request.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $reasonReference
     * @return static
     */
    public function addReasonReference(FHIRReference $reasonReference): self
    {
        if (!isset($this->reasonReference)) {
            $this->reasonReference = [];
        }
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates another resource whose existence justifies this request.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference ...$reasonReference
     * @return static
     */
    public function setReasonReference(FHIRReference ...$reasonReference): self
    {
        if ([] === $reasonReference) {
            unset($this->reasonReference);
            return $this;
        }
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The reason element gives a short description of why the referral is being made,
     * the description expands on this to support a more complete clinical summary.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The reason element gives a short description of why the referral is being made,
     * the description expands on this to support a more complete clinical summary.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $description
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRString)) {
            $description = new FHIRString(value: $description);
        }
        $this->description = $description;
        if ($this->_valueXMLLocations[self::FIELD_DESCRIPTION] !== $valueXMLLocation) {
            $this->_setDescriptionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the description element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDescriptionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DESCRIPTION];
    }

    /**
     * Set the location the "value" field of the description element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDescriptionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DESCRIPTION] = $valueXMLLocation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any additional (administrative, financial or clinical) information required to
     * support request for referral or transfer of care. For example: Presenting
     * problems/chief complaints Medical History Family History Alerts
     * Allergy/Intolerance and Adverse Reactions Medications Observations/Assessments
     * (may include cognitive and fundtional assessments) Diagnostic Reports Care Plan.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[]
     */
    public function getSupportingInfo(): array
    {
        return $this->supportingInfo ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference>
     */
    public function getSupportingInfoIterator(): iterable
    {
        if (!isset($this->supportingInfo)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->supportingInfo);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any additional (administrative, financial or clinical) information required to
     * support request for referral or transfer of care. For example: Presenting
     * problems/chief complaints Medical History Family History Alerts
     * Allergy/Intolerance and Adverse Reactions Medications Observations/Assessments
     * (may include cognitive and fundtional assessments) Diagnostic Reports Care Plan.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $supportingInfo
     * @return static
     */
    public function addSupportingInfo(FHIRReference $supportingInfo): self
    {
        if (!isset($this->supportingInfo)) {
            $this->supportingInfo = [];
        }
        $this->supportingInfo[] = $supportingInfo;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any additional (administrative, financial or clinical) information required to
     * support request for referral or transfer of care. For example: Presenting
     * problems/chief complaints Medical History Family History Alerts
     * Allergy/Intolerance and Adverse Reactions Medications Observations/Assessments
     * (may include cognitive and fundtional assessments) Diagnostic Reports Care Plan.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference ...$supportingInfo
     * @return static
     */
    public function setSupportingInfo(FHIRReference ...$supportingInfo): self
    {
        if ([] === $supportingInfo) {
            unset($this->supportingInfo);
            return $this;
        }
        $this->supportingInfo = $supportingInfo;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the referral request by any of the participants.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation[]
     */
    public function getNote(): array
    {
        return $this->note ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation>
     */
    public function getNoteIterator(): iterable
    {
        if (!isset($this->note)) {
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
     * Comments made about the referral request by any of the participants.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation $note
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
     * Comments made about the referral request by any of the participants.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation ...$note
     * @return static
     */
    public function setNote(FHIRAnnotation ...$note): self
    {
        if ([] === $note) {
            unset($this->note);
            return $this;
        }
        $this->note = $note;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Links to Provenance records for past versions of this resource or fulfilling
     * request or event resources that identify key state transitions or updates that
     * are likely to be relevant to a user looking at the current version of the
     * resource.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[]
     */
    public function getRelevantHistory(): array
    {
        return $this->relevantHistory ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference>
     */
    public function getRelevantHistoryIterator(): iterable
    {
        if (!isset($this->relevantHistory)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->relevantHistory);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Links to Provenance records for past versions of this resource or fulfilling
     * request or event resources that identify key state transitions or updates that
     * are likely to be relevant to a user looking at the current version of the
     * resource.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $relevantHistory
     * @return static
     */
    public function addRelevantHistory(FHIRReference $relevantHistory): self
    {
        if (!isset($this->relevantHistory)) {
            $this->relevantHistory = [];
        }
        $this->relevantHistory[] = $relevantHistory;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Links to Provenance records for past versions of this resource or fulfilling
     * request or event resources that identify key state transitions or updates that
     * are likely to be relevant to a user looking at the current version of the
     * resource.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference ...$relevantHistory
     * @return static
     */
    public function setRelevantHistory(FHIRReference ...$relevantHistory): self
    {
        if ([] === $relevantHistory) {
            unset($this->relevantHistory);
            return $this;
        }
        $this->relevantHistory = $relevantHistory;
        return $this;
    }

    /* class_default.php:188 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
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
        if (null !== ($v = $this->getIntent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INTENT] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_DEFINITION])) {
            $v = $this->getDefinition();
            foreach($validationRules[self::FIELD_DEFINITION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION])) {
                        $errs[self::FIELD_DEFINITION] = [];
                    }
                    $errs[self::FIELD_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BASED_ON])) {
            $v = $this->getBasedOn();
            foreach($validationRules[self::FIELD_BASED_ON] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BASED_ON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASED_ON])) {
                        $errs[self::FIELD_BASED_ON] = [];
                    }
                    $errs[self::FIELD_BASED_ON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPLACES])) {
            $v = $this->getReplaces();
            foreach($validationRules[self::FIELD_REPLACES] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REPLACES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPLACES])) {
                        $errs[self::FIELD_REPLACES] = [];
                    }
                    $errs[self::FIELD_REPLACES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GROUP_IDENTIFIER])) {
            $v = $this->getGroupIdentifier();
            foreach($validationRules[self::FIELD_GROUP_IDENTIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_GROUP_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GROUP_IDENTIFIER])) {
                        $errs[self::FIELD_GROUP_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_GROUP_IDENTIFIER][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_INTENT])) {
            $v = $this->getIntent();
            foreach($validationRules[self::FIELD_INTENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INTENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTENT])) {
                        $errs[self::FIELD_INTENT] = [];
                    }
                    $errs[self::FIELD_INTENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIORITY])) {
            $v = $this->getPriority();
            foreach($validationRules[self::FIELD_PRIORITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRIORITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRIORITY])) {
                        $errs[self::FIELD_PRIORITY] = [];
                    }
                    $errs[self::FIELD_PRIORITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERVICE_REQUESTED])) {
            $v = $this->getServiceRequested();
            foreach($validationRules[self::FIELD_SERVICE_REQUESTED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SERVICE_REQUESTED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERVICE_REQUESTED])) {
                        $errs[self::FIELD_SERVICE_REQUESTED] = [];
                    }
                    $errs[self::FIELD_SERVICE_REQUESTED][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_CONTEXT])) {
            $v = $this->getContext();
            foreach($validationRules[self::FIELD_CONTEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTEXT])) {
                        $errs[self::FIELD_CONTEXT] = [];
                    }
                    $errs[self::FIELD_CONTEXT][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_AUTHORED_ON])) {
            $v = $this->getAuthoredOn();
            foreach($validationRules[self::FIELD_AUTHORED_ON] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AUTHORED_ON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHORED_ON])) {
                        $errs[self::FIELD_AUTHORED_ON] = [];
                    }
                    $errs[self::FIELD_AUTHORED_ON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUESTER])) {
            $v = $this->getRequester();
            foreach($validationRules[self::FIELD_REQUESTER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REQUESTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUESTER])) {
                        $errs[self::FIELD_REQUESTER] = [];
                    }
                    $errs[self::FIELD_REQUESTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPECIALTY])) {
            $v = $this->getSpecialty();
            foreach($validationRules[self::FIELD_SPECIALTY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SPECIALTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPECIALTY])) {
                        $errs[self::FIELD_SPECIALTY] = [];
                    }
                    $errs[self::FIELD_SPECIALTY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RECIPIENT])) {
            $v = $this->getRecipient();
            foreach($validationRules[self::FIELD_RECIPIENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RECIPIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECIPIENT])) {
                        $errs[self::FIELD_RECIPIENT] = [];
                    }
                    $errs[self::FIELD_RECIPIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_CODE])) {
            $v = $this->getReasonCode();
            foreach($validationRules[self::FIELD_REASON_CODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REASON_CODE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REASON_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_REFERENCE])) {
                        $errs[self::FIELD_REASON_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REASON_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_RELEVANT_HISTORY])) {
            $v = $this->getRelevantHistory();
            foreach($validationRules[self::FIELD_RELEVANT_HISTORY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RELEVANT_HISTORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELEVANT_HISTORY])) {
                        $errs[self::FIELD_RELEVANT_HISTORY] = [];
                    }
                    $errs[self::FIELD_RELEVANT_HISTORY][$rule] = $err;
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

    /* class_default.php:212 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRReferralRequest $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRReferralRequest
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRReferralRequest)) {
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_ID === $cen) {
                $type->setId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_META === $cen) {
                $type->setMeta(FHIRMeta::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $cen) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LANGUAGE === $cen) {
                $type->setLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRNarrative::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED === $cen) {
                foreach ($ce->children() as $cen) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFINITION === $cen) {
                $type->addDefinition(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BASED_ON === $cen) {
                $type->addBasedOn(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REPLACES === $cen) {
                $type->addReplaces(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_GROUP_IDENTIFIER === $cen) {
                $type->setGroupIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRRequestStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INTENT === $cen) {
                $type->setIntent(FHIRRequestIntent::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRIORITY === $cen) {
                $type->setPriority(FHIRRequestPriority::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SERVICE_REQUESTED === $cen) {
                $type->addServiceRequested(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBJECT === $cen) {
                $type->setSubject(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTEXT === $cen) {
                $type->setContext(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OCCURRENCE_DATE_TIME === $cen) {
                $type->setOccurrenceDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OCCURRENCE_PERIOD === $cen) {
                $type->setOccurrencePeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AUTHORED_ON === $cen) {
                $type->setAuthoredOn(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REQUESTER === $cen) {
                $type->setRequester(FHIRReferralRequestRequester::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SPECIALTY === $cen) {
                $type->setSpecialty(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RECIPIENT === $cen) {
                $type->addRecipient(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REASON_CODE === $cen) {
                $type->addReasonCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REASON_REFERENCE === $cen) {
                $type->addReasonReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DESCRIPTION === $cen) {
                $type->setDescription(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUPPORTING_INFO === $cen) {
                $type->addSupportingInfo(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NOTE === $cen) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RELEVANT_HISTORY === $cen) {
                $type->addRelevantHistory(FHIRReference::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
                $type->_setIdValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            if (isset($type->implicitRules)) {
                $type->implicitRules->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $type->_setImplicitRulesValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
                $type->_setLanguageValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_STATUS])) {
            if (isset($type->status)) {
                $type->status->setValue((string)$attributes[self::FIELD_STATUS]);
                $type->_setStatusValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setStatus((string)$attributes[self::FIELD_STATUS], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_INTENT])) {
            if (isset($type->intent)) {
                $type->intent->setValue((string)$attributes[self::FIELD_INTENT]);
                $type->_setIntentValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setIntent((string)$attributes[self::FIELD_INTENT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PRIORITY])) {
            if (isset($type->priority)) {
                $type->priority->setValue((string)$attributes[self::FIELD_PRIORITY]);
                $type->_setPriorityValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setPriority((string)$attributes[self::FIELD_PRIORITY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_OCCURRENCE_DATE_TIME])) {
            if (isset($type->occurrenceDateTime)) {
                $type->occurrenceDateTime->setValue((string)$attributes[self::FIELD_OCCURRENCE_DATE_TIME]);
                $type->_setOccurrenceDateTimeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setOccurrenceDateTime((string)$attributes[self::FIELD_OCCURRENCE_DATE_TIME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_AUTHORED_ON])) {
            if (isset($type->authoredOn)) {
                $type->authoredOn->setValue((string)$attributes[self::FIELD_AUTHORED_ON]);
                $type->_setAuthoredOnValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAuthoredOn((string)$attributes[self::FIELD_AUTHORED_ON], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            if (isset($type->description)) {
                $type->description->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
                $type->_setDescriptionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null,
                                 null|SerializeConfig $config = null): XMLWriter
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
            $xw->openRootNode('ReferralRequest', $this->_getSourceXMLNS());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getFormattedValue());
        }
        if (isset($this->intent) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_INTENT]) {
            $xw->writeAttribute(self::FIELD_INTENT, $this->intent->_getFormattedValue());
        }
        if (isset($this->priority) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PRIORITY]) {
            $xw->writeAttribute(self::FIELD_PRIORITY, $this->priority->_getFormattedValue());
        }
        if (isset($this->occurrenceDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_OCCURRENCE_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_OCCURRENCE_DATE_TIME, $this->occurrenceDateTime->_getFormattedValue());
        }
        if (isset($this->authoredOn) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_AUTHORED_ON]) {
            $xw->writeAttribute(self::FIELD_AUTHORED_ON, $this->authoredOn->_getFormattedValue());
        }
        if (isset($this->description) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->definition)) {
            foreach ($this->definition as $v) {
                $xw->startElement(self::FIELD_DEFINITION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->basedOn)) {
            foreach ($this->basedOn as $v) {
                $xw->startElement(self::FIELD_BASED_ON);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->replaces)) {
            foreach ($this->replaces as $v) {
                $xw->startElement(self::FIELD_REPLACES);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->groupIdentifier)) {
            $xw->startElement(self::FIELD_GROUP_IDENTIFIER);
            $this->groupIdentifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->status)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATUS]
                || $this->status->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATUS]);
            $xw->endElement();
        }
        if (isset($this->intent)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_INTENT]
                || $this->intent->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_INTENT);
            $this->intent->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_INTENT]);
            $xw->endElement();
        }
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->priority)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PRIORITY]
                || $this->priority->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PRIORITY);
            $this->priority->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PRIORITY]);
            $xw->endElement();
        }
        if (isset($this->serviceRequested)) {
            foreach ($this->serviceRequested as $v) {
                $xw->startElement(self::FIELD_SERVICE_REQUESTED);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->subject)) {
            $xw->startElement(self::FIELD_SUBJECT);
            $this->subject->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->context)) {
            $xw->startElement(self::FIELD_CONTEXT);
            $this->context->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->occurrenceDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_OCCURRENCE_DATE_TIME]
                || $this->occurrenceDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_OCCURRENCE_DATE_TIME);
            $this->occurrenceDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_OCCURRENCE_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->occurrencePeriod)) {
            $xw->startElement(self::FIELD_OCCURRENCE_PERIOD);
            $this->occurrencePeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->authoredOn)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_AUTHORED_ON]
                || $this->authoredOn->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_AUTHORED_ON);
            $this->authoredOn->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_AUTHORED_ON]);
            $xw->endElement();
        }
        if (isset($this->requester)) {
            $xw->startElement(self::FIELD_REQUESTER);
            $this->requester->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->specialty)) {
            $xw->startElement(self::FIELD_SPECIALTY);
            $this->specialty->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->recipient)) {
            foreach ($this->recipient as $v) {
                $xw->startElement(self::FIELD_RECIPIENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->reasonCode)) {
            foreach ($this->reasonCode as $v) {
                $xw->startElement(self::FIELD_REASON_CODE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->reasonReference)) {
            foreach ($this->reasonReference as $v) {
                $xw->startElement(self::FIELD_REASON_REFERENCE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->description)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DESCRIPTION]
                || $this->description->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DESCRIPTION]);
            $xw->endElement();
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
        if (isset($this->relevantHistory)) {
            foreach ($this->relevantHistory as $v) {
                $xw->startElement(self::FIELD_RELEVANT_HISTORY);
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
     * @param string|\stdClass|array $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRReferralRequest $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRReferralRequest
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRReferralRequest)) {
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_IDENTIFIER]) || array_key_exists(self::FIELD_IDENTIFIER, $json)) {
            $vs = $json[self::FIELD_IDENTIFIER];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_DEFINITION]) || array_key_exists(self::FIELD_DEFINITION, $json)) {
            $vs = $json[self::FIELD_DEFINITION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addDefinition(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_BASED_ON]) || array_key_exists(self::FIELD_BASED_ON, $json)) {
            $vs = $json[self::FIELD_BASED_ON];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addBasedOn(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_REPLACES]) || array_key_exists(self::FIELD_REPLACES, $json)) {
            $vs = $json[self::FIELD_REPLACES];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addReplaces(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_GROUP_IDENTIFIER]) || array_key_exists(self::FIELD_GROUP_IDENTIFIER, $json)) {
            $type->setGroupIdentifier(FHIRIdentifier::jsonUnserialize($json[self::FIELD_GROUP_IDENTIFIER], $config));
        }
        if (isset($json[self::FIELD_STATUS])
            || isset($json[self::FIELD_STATUS_EXT])
            || array_key_exists(self::FIELD_STATUS, $json)
            || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $type->setStatus(FHIRRequestStatus::jsonUnserialize(
                (is_array($value) ? $value : [FHIRRequestStatus::FIELD_VALUE => $value]) + ($json[self::FIELD_STATUS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_INTENT])
            || isset($json[self::FIELD_INTENT_EXT])
            || array_key_exists(self::FIELD_INTENT, $json)
            || array_key_exists(self::FIELD_INTENT_EXT, $json)) {
            $value = $json[self::FIELD_INTENT] ?? null;
            $type->setIntent(FHIRRequestIntent::jsonUnserialize(
                (is_array($value) ? $value : [FHIRRequestIntent::FIELD_VALUE => $value]) + ($json[self::FIELD_INTENT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_TYPE]) || array_key_exists(self::FIELD_TYPE, $json)) {
            $type->setType(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_TYPE], $config));
        }
        if (isset($json[self::FIELD_PRIORITY])
            || isset($json[self::FIELD_PRIORITY_EXT])
            || array_key_exists(self::FIELD_PRIORITY, $json)
            || array_key_exists(self::FIELD_PRIORITY_EXT, $json)) {
            $value = $json[self::FIELD_PRIORITY] ?? null;
            $type->setPriority(FHIRRequestPriority::jsonUnserialize(
                (is_array($value) ? $value : [FHIRRequestPriority::FIELD_VALUE => $value]) + ($json[self::FIELD_PRIORITY_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_SERVICE_REQUESTED]) || array_key_exists(self::FIELD_SERVICE_REQUESTED, $json)) {
            $vs = $json[self::FIELD_SERVICE_REQUESTED];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addServiceRequested(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_SUBJECT]) || array_key_exists(self::FIELD_SUBJECT, $json)) {
            $type->setSubject(FHIRReference::jsonUnserialize($json[self::FIELD_SUBJECT], $config));
        }
        if (isset($json[self::FIELD_CONTEXT]) || array_key_exists(self::FIELD_CONTEXT, $json)) {
            $type->setContext(FHIRReference::jsonUnserialize($json[self::FIELD_CONTEXT], $config));
        }
        if (isset($json[self::FIELD_OCCURRENCE_DATE_TIME])
            || isset($json[self::FIELD_OCCURRENCE_DATE_TIME_EXT])
            || array_key_exists(self::FIELD_OCCURRENCE_DATE_TIME, $json)
            || array_key_exists(self::FIELD_OCCURRENCE_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_OCCURRENCE_DATE_TIME] ?? null;
            $type->setOccurrenceDateTime(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_OCCURRENCE_DATE_TIME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_OCCURRENCE_PERIOD]) || array_key_exists(self::FIELD_OCCURRENCE_PERIOD, $json)) {
            $type->setOccurrencePeriod(FHIRPeriod::jsonUnserialize($json[self::FIELD_OCCURRENCE_PERIOD], $config));
        }
        if (isset($json[self::FIELD_AUTHORED_ON])
            || isset($json[self::FIELD_AUTHORED_ON_EXT])
            || array_key_exists(self::FIELD_AUTHORED_ON, $json)
            || array_key_exists(self::FIELD_AUTHORED_ON_EXT, $json)) {
            $value = $json[self::FIELD_AUTHORED_ON] ?? null;
            $type->setAuthoredOn(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_AUTHORED_ON_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_REQUESTER]) || array_key_exists(self::FIELD_REQUESTER, $json)) {
            $type->setRequester(FHIRReferralRequestRequester::jsonUnserialize($json[self::FIELD_REQUESTER], $config));
        }
        if (isset($json[self::FIELD_SPECIALTY]) || array_key_exists(self::FIELD_SPECIALTY, $json)) {
            $type->setSpecialty(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_SPECIALTY], $config));
        }
        if (isset($json[self::FIELD_RECIPIENT]) || array_key_exists(self::FIELD_RECIPIENT, $json)) {
            $vs = $json[self::FIELD_RECIPIENT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addRecipient(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_REASON_CODE]) || array_key_exists(self::FIELD_REASON_CODE, $json)) {
            $vs = $json[self::FIELD_REASON_CODE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addReasonCode(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_REASON_REFERENCE]) || array_key_exists(self::FIELD_REASON_REFERENCE, $json)) {
            $vs = $json[self::FIELD_REASON_REFERENCE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addReasonReference(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_DESCRIPTION])
            || isset($json[self::FIELD_DESCRIPTION_EXT])
            || array_key_exists(self::FIELD_DESCRIPTION, $json)
            || array_key_exists(self::FIELD_DESCRIPTION_EXT, $json)) {
            $value = $json[self::FIELD_DESCRIPTION] ?? null;
            $type->setDescription(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_DESCRIPTION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_SUPPORTING_INFO]) || array_key_exists(self::FIELD_SUPPORTING_INFO, $json)) {
            $vs = $json[self::FIELD_SUPPORTING_INFO];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addSupportingInfo(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_NOTE]) || array_key_exists(self::FIELD_NOTE, $json)) {
            $vs = $json[self::FIELD_NOTE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addNote(FHIRAnnotation::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_RELEVANT_HISTORY]) || array_key_exists(self::FIELD_RELEVANT_HISTORY, $json)) {
            $vs = $json[self::FIELD_RELEVANT_HISTORY];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addRelevantHistory(FHIRReference::jsonUnserialize($v, $config));
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
        if (isset($this->definition) && [] !== $this->definition) {
            $out->definition = $this->definition;
        }
        if (isset($this->basedOn) && [] !== $this->basedOn) {
            $out->basedOn = $this->basedOn;
        }
        if (isset($this->replaces) && [] !== $this->replaces) {
            $out->replaces = $this->replaces;
        }
        if (isset($this->groupIdentifier)) {
            $out->groupIdentifier = $this->groupIdentifier;
        }
        if (isset($this->status)) {
            if (null !== ($val = $this->status->getValue())) {
                $out->status = $val;
            }
            if ($this->status->_nonValueFieldDefined()) {
                $ext = $this->status->jsonSerialize();
                unset($ext->value);
                $out->_status = $ext;
            }
        }
        if (isset($this->intent)) {
            if (null !== ($val = $this->intent->getValue())) {
                $out->intent = $val;
            }
            if ($this->intent->_nonValueFieldDefined()) {
                $ext = $this->intent->jsonSerialize();
                unset($ext->value);
                $out->_intent = $ext;
            }
        }
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->priority)) {
            if (null !== ($val = $this->priority->getValue())) {
                $out->priority = $val;
            }
            if ($this->priority->_nonValueFieldDefined()) {
                $ext = $this->priority->jsonSerialize();
                unset($ext->value);
                $out->_priority = $ext;
            }
        }
        if (isset($this->serviceRequested) && [] !== $this->serviceRequested) {
            $out->serviceRequested = $this->serviceRequested;
        }
        if (isset($this->subject)) {
            $out->subject = $this->subject;
        }
        if (isset($this->context)) {
            $out->context = $this->context;
        }
        if (isset($this->occurrenceDateTime)) {
            if (null !== ($val = $this->occurrenceDateTime->getValue())) {
                $out->occurrenceDateTime = $val;
            }
            if ($this->occurrenceDateTime->_nonValueFieldDefined()) {
                $ext = $this->occurrenceDateTime->jsonSerialize();
                unset($ext->value);
                $out->_occurrenceDateTime = $ext;
            }
        }
        if (isset($this->occurrencePeriod)) {
            $out->occurrencePeriod = $this->occurrencePeriod;
        }
        if (isset($this->authoredOn)) {
            if (null !== ($val = $this->authoredOn->getValue())) {
                $out->authoredOn = $val;
            }
            if ($this->authoredOn->_nonValueFieldDefined()) {
                $ext = $this->authoredOn->jsonSerialize();
                unset($ext->value);
                $out->_authoredOn = $ext;
            }
        }
        if (isset($this->requester)) {
            $out->requester = $this->requester;
        }
        if (isset($this->specialty)) {
            $out->specialty = $this->specialty;
        }
        if (isset($this->recipient) && [] !== $this->recipient) {
            $out->recipient = $this->recipient;
        }
        if (isset($this->reasonCode) && [] !== $this->reasonCode) {
            $out->reasonCode = $this->reasonCode;
        }
        if (isset($this->reasonReference) && [] !== $this->reasonReference) {
            $out->reasonReference = $this->reasonReference;
        }
        if (isset($this->description)) {
            if (null !== ($val = $this->description->getValue())) {
                $out->description = $val;
            }
            if ($this->description->_nonValueFieldDefined()) {
                $ext = $this->description->jsonSerialize();
                unset($ext->value);
                $out->_description = $ext;
            }
        }
        if (isset($this->supportingInfo) && [] !== $this->supportingInfo) {
            $out->supportingInfo = $this->supportingInfo;
        }
        if (isset($this->note) && [] !== $this->note) {
            $out->note = $this->note;
        }
        if (isset($this->relevantHistory) && [] !== $this->relevantHistory) {
            $out->relevantHistory = $this->relevantHistory;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}
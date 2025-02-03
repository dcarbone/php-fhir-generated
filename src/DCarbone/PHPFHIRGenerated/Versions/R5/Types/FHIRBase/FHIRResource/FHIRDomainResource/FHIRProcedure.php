<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 3rd, 2025 17:37+0000
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
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIREventStatus;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIREventStatusEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionTypeMap;

/**
 * An action that is or was performed on or for a patient, practitioner, device,
 * organization, or location. For example, this can be a physical intervention on a
 * patient like an operation, or less invasive like long term services, counseling,
 * or hypnotherapy. This can be a quality or safety inspection for a location,
 * organization, or device. This can be an accreditation procedure on a
 * practitioner for licensing.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRProcedure extends FHIRDomainResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_PROCEDURE;

    /* class_default.php:47 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_INSTANTIATES_CANONICAL = 'instantiatesCanonical';
    public const FIELD_INSTANTIATES_CANONICAL_EXT = '_instantiatesCanonical';
    public const FIELD_INSTANTIATES_URI = 'instantiatesUri';
    public const FIELD_INSTANTIATES_URI_EXT = '_instantiatesUri';
    public const FIELD_BASED_ON = 'basedOn';
    public const FIELD_PART_OF = 'partOf';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_STATUS_REASON = 'statusReason';
    public const FIELD_CATEGORY = 'category';
    public const FIELD_CODE = 'code';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_FOCUS = 'focus';
    public const FIELD_ENCOUNTER = 'encounter';
    public const FIELD_OCCURRENCE_DATE_TIME = 'occurrenceDateTime';
    public const FIELD_OCCURRENCE_DATE_TIME_EXT = '_occurrenceDateTime';
    public const FIELD_OCCURRENCE_PERIOD = 'occurrencePeriod';
    public const FIELD_OCCURRENCE_STRING = 'occurrenceString';
    public const FIELD_OCCURRENCE_STRING_EXT = '_occurrenceString';
    public const FIELD_OCCURRENCE_AGE = 'occurrenceAge';
    public const FIELD_OCCURRENCE_RANGE = 'occurrenceRange';
    public const FIELD_OCCURRENCE_TIMING = 'occurrenceTiming';
    public const FIELD_RECORDED = 'recorded';
    public const FIELD_RECORDED_EXT = '_recorded';
    public const FIELD_RECORDER = 'recorder';
    public const FIELD_REPORTED_BOOLEAN = 'reportedBoolean';
    public const FIELD_REPORTED_BOOLEAN_EXT = '_reportedBoolean';
    public const FIELD_REPORTED_REFERENCE = 'reportedReference';
    public const FIELD_PERFORMER = 'performer';
    public const FIELD_LOCATION = 'location';
    public const FIELD_REASON = 'reason';
    public const FIELD_BODY_SITE = 'bodySite';
    public const FIELD_OUTCOME = 'outcome';
    public const FIELD_REPORT = 'report';
    public const FIELD_COMPLICATION = 'complication';
    public const FIELD_FOLLOW_UP = 'followUp';
    public const FIELD_NOTE = 'note';
    public const FIELD_FOCAL_DEVICE = 'focalDevice';
    public const FIELD_USED = 'used';
    public const FIELD_SUPPORTING_INFO = 'supportingInfo';

    /* class_default.php:66 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_SUBJECT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:95 */
    private array $_valueXMLLocations = [
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_OCCURRENCE_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_OCCURRENCE_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_RECORDED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_REPORTED_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:111 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this procedure by the performer or other
     * systems which remain constant as the resource is updated and is propagated from
     * server to server.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a FHIR-defined protocol, guideline, order set or other
     * definition that is adhered to in whole or in part by this Procedure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical[] 
     */
    protected array $instantiatesCanonical;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally maintained protocol, guideline, order set or
     * other definition that is adhered to in whole or in part by this Procedure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri[] 
     */
    protected array $instantiatesUri;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a resource that contains details of the request for this
     * procedure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $basedOn;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger event of which this particular procedure is a component or step.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $partOf;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the state of the procedure. Generally, this will be the
     * in-progress or completed state.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIREventStatus 
     */
    protected FHIREventStatus $status;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Captures the reason for the current state of the procedure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $statusReason;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies the procedure for searching, sorting and display purposes
     * (e.g. "Surgical Procedure").
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
     * The specific procedure that is performed. Use text if the exact nature of the
     * procedure cannot be coded (e.g. "Laparoscopic Appendectomy").
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $code;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * On whom or on what the procedure was performed. This is usually an individual
     * human, but can also be performed on animals, groups of humans or animals,
     * organizations or practitioners (for licensing), locations or devices (for safety
     * inspections or regulatory authorizations). If the actual focus of the procedure
     * is different from the subject, the focus element specifies the actual focus of
     * the procedure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $subject;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who is the target of the procedure when it is not the subject of record only. If
     * focus is not present, then subject is the focus. If focus is present and the
     * subject is one of the targets of the procedure, include subject as a focus as
     * well. If focus is present and the subject is not included in focus, it implies
     * that the procedure was only targeted on the focus. For example, when a caregiver
     * is given education for a patient, the caregiver would be the focus and the
     * procedure record is associated with the subject (e.g. patient). For example, use
     * focus when recording the target of the education, training, or counseling is the
     * parent or relative of a patient.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $focus;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Encounter during which this Procedure was created or performed or to which
     * the creation of this record is tightly associated.
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
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $occurrenceDateTime;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod 
     */
    protected FHIRPeriod $occurrencePeriod;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $occurrenceString;
    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge 
     */
    protected FHIRAge $occurrenceAge;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange 
     */
    protected FHIRRange $occurrenceRange;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
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
     * The date the occurrence of the procedure was first captured in the record
     * regardless of Procedure.status (potentially after the occurrence of the event).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $recorded;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual who recorded the record and takes responsibility for its content.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $recorder;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if this record was captured as a secondary 'reported' record rather
     * than as an original primary source-of-truth record. It may also indicate the
     * source of the report.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $reportedBoolean;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates if this record was captured as a secondary 'reported' record rather
     * than as an original primary source-of-truth record. It may also indicate the
     * source of the report.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $reportedReference;
    /**
     * An action that is or was performed on or for a patient, practitioner, device,
     * organization, or location. For example, this can be a physical intervention on a
     * patient like an operation, or less invasive like long term services, counseling,
     * or hypnotherapy. This can be a quality or safety inspection for a location,
     * organization, or device. This can be an accreditation procedure on a
     * practitioner for licensing.
     *
     * Indicates who or what performed the procedure and how they were involved.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer[] 
     */
    protected array $performer;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location where the procedure actually happened. E.g. a newborn at home, a
     * tracheostomy at a restaurant.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $location;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The coded reason or reference why the procedure was performed. This may be a
     * coded entity of some type, be present as text, or be a reference to one of
     * several resources that justify the procedure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[] 
     */
    protected array $reason;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Detailed and structured anatomical location information. Multiple locations are
     * allowed - e.g. multiple punch biopsies of a lesion.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $bodySite;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The outcome of the procedure - did it resolve the reasons for the procedure
     * being performed?
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $outcome;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This could be a histology result, pathology report, surgical report, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $report;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any complications that occurred during the procedure, or in the immediate
     * post-performance period. These are generally tracked separately from the notes,
     * which will typically describe the procedure itself rather than any 'post
     * procedure' issues.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[] 
     */
    protected array $complication;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the procedure required specific follow up - e.g. removal of sutures. The
     * follow up may be represented as a simple note or could potentially be more
     * complex, in which case the CarePlan resource can be used.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $followUp;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any other notes and comments about the procedure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[] 
     */
    protected array $note;
    /**
     * An action that is or was performed on or for a patient, practitioner, device,
     * organization, or location. For example, this can be a physical intervention on a
     * patient like an operation, or less invasive like long term services, counseling,
     * or hypnotherapy. This can be a quality or safety inspection for a location,
     * organization, or device. This can be an accreditation procedure on a
     * practitioner for licensing.
     *
     * A device that is implanted, removed or otherwise manipulated (calibration,
     * battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a
     * focal portion of the Procedure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice[] 
     */
    protected array $focalDevice;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies medications, devices and any other substance used as part of the
     * procedure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[] 
     */
    protected array $used;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Other resources from the patient record that may be relevant to the procedure.
     * The information from these resources was either used to create the instance or
     * is provided to help with its interpretation. This extension should not be used
     * if more specific inline elements or extensions are available.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $supportingInfo;

    /* constructor.php:62 */
    /**
     * FHIRProcedure Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] $identifier
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical[] $instantiatesCanonical
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri[] $instantiatesUri
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $basedOn
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $partOf
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIREventStatusEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIREventStatus $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $statusReason
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $category
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $code
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subject
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $focus
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $encounter
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $occurrenceDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $occurrencePeriod
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $occurrenceString
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge $occurrenceAge
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $occurrenceRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming $occurrenceTiming
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $recorded
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $recorder
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $reportedBoolean
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $reportedReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer[] $performer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $location
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[] $reason
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $bodySite
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $outcome
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $report
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[] $complication
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $followUp
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[] $note
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice[] $focalDevice
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[] $used
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $supportingInfo
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
                                null|iterable $instantiatesCanonical = null,
                                null|iterable $instantiatesUri = null,
                                null|iterable $basedOn = null,
                                null|iterable $partOf = null,
                                null|string|FHIREventStatusEnum|FHIREventStatus $status = null,
                                null|FHIRCodeableConcept $statusReason = null,
                                null|iterable $category = null,
                                null|FHIRCodeableConcept $code = null,
                                null|FHIRReference $subject = null,
                                null|FHIRReference $focus = null,
                                null|FHIRReference $encounter = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $occurrenceDateTime = null,
                                null|FHIRPeriod $occurrencePeriod = null,
                                null|string|FHIRStringPrimitive|FHIRString $occurrenceString = null,
                                null|FHIRAge $occurrenceAge = null,
                                null|FHIRRange $occurrenceRange = null,
                                null|FHIRTiming $occurrenceTiming = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $recorded = null,
                                null|FHIRReference $recorder = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $reportedBoolean = null,
                                null|FHIRReference $reportedReference = null,
                                null|iterable $performer = null,
                                null|FHIRReference $location = null,
                                null|iterable $reason = null,
                                null|iterable $bodySite = null,
                                null|FHIRCodeableConcept $outcome = null,
                                null|iterable $report = null,
                                null|iterable $complication = null,
                                null|iterable $followUp = null,
                                null|iterable $note = null,
                                null|iterable $focalDevice = null,
                                null|iterable $used = null,
                                null|iterable $supportingInfo = null,
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
        if (null !== $instantiatesCanonical) {
            $this->setInstantiatesCanonical(...$instantiatesCanonical);
        }
        if (null !== $instantiatesUri) {
            $this->setInstantiatesUri(...$instantiatesUri);
        }
        if (null !== $basedOn) {
            $this->setBasedOn(...$basedOn);
        }
        if (null !== $partOf) {
            $this->setPartOf(...$partOf);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $statusReason) {
            $this->setStatusReason($statusReason);
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
        if (null !== $focus) {
            $this->setFocus($focus);
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
        if (null !== $occurrenceString) {
            $this->setOccurrenceString($occurrenceString);
        }
        if (null !== $occurrenceAge) {
            $this->setOccurrenceAge($occurrenceAge);
        }
        if (null !== $occurrenceRange) {
            $this->setOccurrenceRange($occurrenceRange);
        }
        if (null !== $occurrenceTiming) {
            $this->setOccurrenceTiming($occurrenceTiming);
        }
        if (null !== $recorded) {
            $this->setRecorded($recorded);
        }
        if (null !== $recorder) {
            $this->setRecorder($recorder);
        }
        if (null !== $reportedBoolean) {
            $this->setReportedBoolean($reportedBoolean);
        }
        if (null !== $reportedReference) {
            $this->setReportedReference($reportedReference);
        }
        if (null !== $performer) {
            $this->setPerformer(...$performer);
        }
        if (null !== $location) {
            $this->setLocation($location);
        }
        if (null !== $reason) {
            $this->setReason(...$reason);
        }
        if (null !== $bodySite) {
            $this->setBodySite(...$bodySite);
        }
        if (null !== $outcome) {
            $this->setOutcome($outcome);
        }
        if (null !== $report) {
            $this->setReport(...$report);
        }
        if (null !== $complication) {
            $this->setComplication(...$complication);
        }
        if (null !== $followUp) {
            $this->setFollowUp(...$followUp);
        }
        if (null !== $note) {
            $this->setNote(...$note);
        }
        if (null !== $focalDevice) {
            $this->setFocalDevice(...$focalDevice);
        }
        if (null !== $used) {
            $this->setUsed(...$used);
        }
        if (null !== $supportingInfo) {
            $this->setSupportingInfo(...$supportingInfo);
        }
    }

    /* class_default.php:143 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:155 */
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:169 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this procedure by the performer or other
     * systems which remain constant as the resource is updated and is propagated from
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
        if (!isset($this->identifier)) {
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
     * Business identifiers assigned to this procedure by the performer or other
     * systems which remain constant as the resource is updated and is propagated from
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
     * Business identifiers assigned to this procedure by the performer or other
     * systems which remain constant as the resource is updated and is propagated from
     * server to server.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier ...$identifier
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
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a FHIR-defined protocol, guideline, order set or other
     * definition that is adhered to in whole or in part by this Procedure.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical[]
     */
    public function getInstantiatesCanonical(): array
    {
        return $this->instantiatesCanonical ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical>
     */
    public function getInstantiatesCanonicalIterator(): iterable
    {
        if (!isset($this->instantiatesCanonical)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->instantiatesCanonical);
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a FHIR-defined protocol, guideline, order set or other
     * definition that is adhered to in whole or in part by this Procedure.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $instantiatesCanonical
     * @return static
     */
    public function addInstantiatesCanonical(string|FHIRCanonicalPrimitive|FHIRCanonical $instantiatesCanonical): self
    {
        if (!($instantiatesCanonical instanceof FHIRCanonical)) {
            $instantiatesCanonical = new FHIRCanonical(value: $instantiatesCanonical);
        }
        if (!isset($this->instantiatesCanonical)) {
            $this->instantiatesCanonical = [];
        }
        $this->instantiatesCanonical[] = $instantiatesCanonical;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a FHIR-defined protocol, guideline, order set or other
     * definition that is adhered to in whole or in part by this Procedure.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical ...$instantiatesCanonical
     * @return static
     */
    public function setInstantiatesCanonical(string|FHIRCanonicalPrimitive|FHIRCanonical ...$instantiatesCanonical): self
    {
        if ([] === $instantiatesCanonical) {
            unset($this->instantiatesCanonical);
            return $this;
        }
        $this->instantiatesCanonical = [];
        foreach($instantiatesCanonical as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->instantiatesCanonical[] = $v;
            } else {
                $this->instantiatesCanonical[] = new FHIRCanonical(value: $v);
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally maintained protocol, guideline, order set or
     * other definition that is adhered to in whole or in part by this Procedure.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri[]
     */
    public function getInstantiatesUri(): array
    {
        return $this->instantiatesUri ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri>
     */
    public function getInstantiatesUriIterator(): iterable
    {
        if (!isset($this->instantiatesUri)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->instantiatesUri);
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally maintained protocol, guideline, order set or
     * other definition that is adhered to in whole or in part by this Procedure.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $instantiatesUri
     * @return static
     */
    public function addInstantiatesUri(string|FHIRUriPrimitive|FHIRUri $instantiatesUri): self
    {
        if (!($instantiatesUri instanceof FHIRUri)) {
            $instantiatesUri = new FHIRUri(value: $instantiatesUri);
        }
        if (!isset($this->instantiatesUri)) {
            $this->instantiatesUri = [];
        }
        $this->instantiatesUri[] = $instantiatesUri;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally maintained protocol, guideline, order set or
     * other definition that is adhered to in whole or in part by this Procedure.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri ...$instantiatesUri
     * @return static
     */
    public function setInstantiatesUri(string|FHIRUriPrimitive|FHIRUri ...$instantiatesUri): self
    {
        if ([] === $instantiatesUri) {
            unset($this->instantiatesUri);
            return $this;
        }
        $this->instantiatesUri = [];
        foreach($instantiatesUri as $v) {
            if ($v instanceof FHIRUri) {
                $this->instantiatesUri[] = $v;
            } else {
                $this->instantiatesUri[] = new FHIRUri(value: $v);
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a resource that contains details of the request for this
     * procedure.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getBasedOn(): array
    {
        return $this->basedOn ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
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
     * A reference to a resource that contains details of the request for this
     * procedure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $basedOn
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
     * A reference to a resource that contains details of the request for this
     * procedure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$basedOn
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
     * A larger event of which this particular procedure is a component or step.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getPartOf(): array
    {
        return $this->partOf ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getPartOfIterator(): iterable
    {
        if (!isset($this->partOf)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->partOf);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger event of which this particular procedure is a component or step.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $partOf
     * @return static
     */
    public function addPartOf(FHIRReference $partOf): self
    {
        if (!isset($this->partOf)) {
            $this->partOf = [];
        }
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A larger event of which this particular procedure is a component or step.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$partOf
     * @return static
     */
    public function setPartOf(FHIRReference ...$partOf): self
    {
        if ([] === $partOf) {
            unset($this->partOf);
            return $this;
        }
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the state of the procedure. Generally, this will be the
     * in-progress or completed state.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIREventStatus
     */
    public function getStatus(): null|FHIREventStatus
    {
        return $this->status ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the state of the procedure. Generally, this will be the
     * in-progress or completed state.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIREventStatusEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIREventStatus $status
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStatus(null|string|FHIREventStatusEnum|FHIREventStatus $status,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIREventStatus)) {
            $status = new FHIREventStatus(value: $status);
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Captures the reason for the current state of the procedure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getStatusReason(): null|FHIRCodeableConcept
    {
        return $this->statusReason ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Captures the reason for the current state of the procedure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $statusReason
     * @return static
     */
    public function setStatusReason(null|FHIRCodeableConcept $statusReason): self
    {
        if (null === $statusReason) {
            unset($this->statusReason);
            return $this;
        }
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies the procedure for searching, sorting and display purposes
     * (e.g. "Surgical Procedure").
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
        if (!isset($this->category)) {
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
     * A code that classifies the procedure for searching, sorting and display purposes
     * (e.g. "Surgical Procedure").
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
     * A code that classifies the procedure for searching, sorting and display purposes
     * (e.g. "Surgical Procedure").
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$category
     * @return static
     */
    public function setCategory(FHIRCodeableConcept ...$category): self
    {
        if ([] === $category) {
            unset($this->category);
            return $this;
        }
        $this->category = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specific procedure that is performed. Use text if the exact nature of the
     * procedure cannot be coded (e.g. "Laparoscopic Appendectomy").
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
     * The specific procedure that is performed. Use text if the exact nature of the
     * procedure cannot be coded (e.g. "Laparoscopic Appendectomy").
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
     * On whom or on what the procedure was performed. This is usually an individual
     * human, but can also be performed on animals, groups of humans or animals,
     * organizations or practitioners (for licensing), locations or devices (for safety
     * inspections or regulatory authorizations). If the actual focus of the procedure
     * is different from the subject, the focus element specifies the actual focus of
     * the procedure.
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
     * On whom or on what the procedure was performed. This is usually an individual
     * human, but can also be performed on animals, groups of humans or animals,
     * organizations or practitioners (for licensing), locations or devices (for safety
     * inspections or regulatory authorizations). If the actual focus of the procedure
     * is different from the subject, the focus element specifies the actual focus of
     * the procedure.
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
     * Who is the target of the procedure when it is not the subject of record only. If
     * focus is not present, then subject is the focus. If focus is present and the
     * subject is one of the targets of the procedure, include subject as a focus as
     * well. If focus is present and the subject is not included in focus, it implies
     * that the procedure was only targeted on the focus. For example, when a caregiver
     * is given education for a patient, the caregiver would be the focus and the
     * procedure record is associated with the subject (e.g. patient). For example, use
     * focus when recording the target of the education, training, or counseling is the
     * parent or relative of a patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getFocus(): null|FHIRReference
    {
        return $this->focus ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who is the target of the procedure when it is not the subject of record only. If
     * focus is not present, then subject is the focus. If focus is present and the
     * subject is one of the targets of the procedure, include subject as a focus as
     * well. If focus is present and the subject is not included in focus, it implies
     * that the procedure was only targeted on the focus. For example, when a caregiver
     * is given education for a patient, the caregiver would be the focus and the
     * procedure record is associated with the subject (e.g. patient). For example, use
     * focus when recording the target of the education, training, or counseling is the
     * parent or relative of a patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $focus
     * @return static
     */
    public function setFocus(null|FHIRReference $focus): self
    {
        if (null === $focus) {
            unset($this->focus);
            return $this;
        }
        $this->focus = $focus;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Encounter during which this Procedure was created or performed or to which
     * the creation of this record is tightly associated.
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
     * The Encounter during which this Procedure was created or performed or to which
     * the creation of this record is tightly associated.
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
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
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
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $occurrenceDateTime
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
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
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
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getOccurrenceString(): null|FHIRString
    {
        return $this->occurrenceString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $occurrenceString
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setOccurrenceString(null|string|FHIRStringPrimitive|FHIRString $occurrenceString,
                                        ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $occurrenceString) {
            unset($this->occurrenceString);
            return $this;
        }
        if (!($occurrenceString instanceof FHIRString)) {
            $occurrenceString = new FHIRString(value: $occurrenceString);
        }
        $this->occurrenceString = $occurrenceString;
        if ($this->_valueXMLLocations[self::FIELD_OCCURRENCE_STRING] !== $valueXMLLocation) {
            $this->_setOccurrenceStringValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the occurrenceString element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getOccurrenceStringValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_OCCURRENCE_STRING];
    }

    /**
     * Set the location the "value" field of the occurrenceString element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setOccurrenceStringValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_OCCURRENCE_STRING] = $valueXMLLocation;
        return $this;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge
     */
    public function getOccurrenceAge(): null|FHIRAge
    {
        return $this->occurrenceAge ?? null;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRAge $occurrenceAge
     * @return static
     */
    public function setOccurrenceAge(null|FHIRAge $occurrenceAge): self
    {
        if (null === $occurrenceAge) {
            unset($this->occurrenceAge);
            return $this;
        }
        $this->occurrenceAge = $occurrenceAge;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getOccurrenceRange(): null|FHIRRange
    {
        return $this->occurrenceRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $occurrenceRange
     * @return static
     */
    public function setOccurrenceRange(null|FHIRRange $occurrenceRange): self
    {
        if (null === $occurrenceRange) {
            unset($this->occurrenceRange);
            return $this;
        }
        $this->occurrenceRange = $occurrenceRange;
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
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
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
     * Estimated or actual date, date-time, period, or age when the procedure did occur
     * or is occurring. Allows a period to support complex procedures that span more
     * than one date, and also allows for the length of the procedure to be captured.
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
     * The date the occurrence of the procedure was first captured in the record
     * regardless of Procedure.status (potentially after the occurrence of the event).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getRecorded(): null|FHIRDateTime
    {
        return $this->recorded ?? null;
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
     * The date the occurrence of the procedure was first captured in the record
     * regardless of Procedure.status (potentially after the occurrence of the event).
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $recorded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setRecorded(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $recorded,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $recorded) {
            unset($this->recorded);
            return $this;
        }
        if (!($recorded instanceof FHIRDateTime)) {
            $recorded = new FHIRDateTime(value: $recorded);
        }
        $this->recorded = $recorded;
        if ($this->_valueXMLLocations[self::FIELD_RECORDED] !== $valueXMLLocation) {
            $this->_setRecordedValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the recorded element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getRecordedValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_RECORDED];
    }

    /**
     * Set the location the "value" field of the recorded element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setRecordedValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_RECORDED] = $valueXMLLocation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual who recorded the record and takes responsibility for its content.
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
     * Individual who recorded the record and takes responsibility for its content.
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if this record was captured as a secondary 'reported' record rather
     * than as an original primary source-of-truth record. It may also indicate the
     * source of the report.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getReportedBoolean(): null|FHIRBoolean
    {
        return $this->reportedBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if this record was captured as a secondary 'reported' record rather
     * than as an original primary source-of-truth record. It may also indicate the
     * source of the report.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $reportedBoolean
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setReportedBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $reportedBoolean,
                                       ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $reportedBoolean) {
            unset($this->reportedBoolean);
            return $this;
        }
        if (!($reportedBoolean instanceof FHIRBoolean)) {
            $reportedBoolean = new FHIRBoolean(value: $reportedBoolean);
        }
        $this->reportedBoolean = $reportedBoolean;
        if ($this->_valueXMLLocations[self::FIELD_REPORTED_BOOLEAN] !== $valueXMLLocation) {
            $this->_setReportedBooleanValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the reportedBoolean element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getReportedBooleanValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_REPORTED_BOOLEAN];
    }

    /**
     * Set the location the "value" field of the reportedBoolean element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setReportedBooleanValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_REPORTED_BOOLEAN] = $valueXMLLocation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates if this record was captured as a secondary 'reported' record rather
     * than as an original primary source-of-truth record. It may also indicate the
     * source of the report.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getReportedReference(): null|FHIRReference
    {
        return $this->reportedReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates if this record was captured as a secondary 'reported' record rather
     * than as an original primary source-of-truth record. It may also indicate the
     * source of the report.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $reportedReference
     * @return static
     */
    public function setReportedReference(null|FHIRReference $reportedReference): self
    {
        if (null === $reportedReference) {
            unset($this->reportedReference);
            return $this;
        }
        $this->reportedReference = $reportedReference;
        return $this;
    }

    /**
     * An action that is or was performed on or for a patient, practitioner, device,
     * organization, or location. For example, this can be a physical intervention on a
     * patient like an operation, or less invasive like long term services, counseling,
     * or hypnotherapy. This can be a quality or safety inspection for a location,
     * organization, or device. This can be an accreditation procedure on a
     * practitioner for licensing.
     *
     * Indicates who or what performed the procedure and how they were involved.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer[]
     */
    public function getPerformer(): array
    {
        return $this->performer ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer>
     */
    public function getPerformerIterator(): iterable
    {
        if (!isset($this->performer)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->performer);
    }

    /**
     * An action that is or was performed on or for a patient, practitioner, device,
     * organization, or location. For example, this can be a physical intervention on a
     * patient like an operation, or less invasive like long term services, counseling,
     * or hypnotherapy. This can be a quality or safety inspection for a location,
     * organization, or device. This can be an accreditation procedure on a
     * practitioner for licensing.
     *
     * Indicates who or what performed the procedure and how they were involved.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer $performer
     * @return static
     */
    public function addPerformer(FHIRProcedurePerformer $performer): self
    {
        if (!isset($this->performer)) {
            $this->performer = [];
        }
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * An action that is or was performed on or for a patient, practitioner, device,
     * organization, or location. For example, this can be a physical intervention on a
     * patient like an operation, or less invasive like long term services, counseling,
     * or hypnotherapy. This can be a quality or safety inspection for a location,
     * organization, or device. This can be an accreditation procedure on a
     * practitioner for licensing.
     *
     * Indicates who or what performed the procedure and how they were involved.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer ...$performer
     * @return static
     */
    public function setPerformer(FHIRProcedurePerformer ...$performer): self
    {
        if ([] === $performer) {
            unset($this->performer);
            return $this;
        }
        $this->performer = $performer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location where the procedure actually happened. E.g. a newborn at home, a
     * tracheostomy at a restaurant.
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
     * The location where the procedure actually happened. E.g. a newborn at home, a
     * tracheostomy at a restaurant.
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
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The coded reason or reference why the procedure was performed. This may be a
     * coded entity of some type, be present as text, or be a reference to one of
     * several resources that justify the procedure.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[]
     */
    public function getReason(): array
    {
        return $this->reason ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference>
     */
    public function getReasonIterator(): iterable
    {
        if (!isset($this->reason)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->reason);
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The coded reason or reference why the procedure was performed. This may be a
     * coded entity of some type, be present as text, or be a reference to one of
     * several resources that justify the procedure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $reason
     * @return static
     */
    public function addReason(FHIRCodeableReference $reason): self
    {
        if (!isset($this->reason)) {
            $this->reason = [];
        }
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The coded reason or reference why the procedure was performed. This may be a
     * coded entity of some type, be present as text, or be a reference to one of
     * several resources that justify the procedure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference ...$reason
     * @return static
     */
    public function setReason(FHIRCodeableReference ...$reason): self
    {
        if ([] === $reason) {
            unset($this->reason);
            return $this;
        }
        $this->reason = $reason;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Detailed and structured anatomical location information. Multiple locations are
     * allowed - e.g. multiple punch biopsies of a lesion.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getBodySite(): array
    {
        return $this->bodySite ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getBodySiteIterator(): iterable
    {
        if (!isset($this->bodySite)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->bodySite);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Detailed and structured anatomical location information. Multiple locations are
     * allowed - e.g. multiple punch biopsies of a lesion.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $bodySite
     * @return static
     */
    public function addBodySite(FHIRCodeableConcept $bodySite): self
    {
        if (!isset($this->bodySite)) {
            $this->bodySite = [];
        }
        $this->bodySite[] = $bodySite;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Detailed and structured anatomical location information. Multiple locations are
     * allowed - e.g. multiple punch biopsies of a lesion.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$bodySite
     * @return static
     */
    public function setBodySite(FHIRCodeableConcept ...$bodySite): self
    {
        if ([] === $bodySite) {
            unset($this->bodySite);
            return $this;
        }
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The outcome of the procedure - did it resolve the reasons for the procedure
     * being performed?
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getOutcome(): null|FHIRCodeableConcept
    {
        return $this->outcome ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The outcome of the procedure - did it resolve the reasons for the procedure
     * being performed?
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $outcome
     * @return static
     */
    public function setOutcome(null|FHIRCodeableConcept $outcome): self
    {
        if (null === $outcome) {
            unset($this->outcome);
            return $this;
        }
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This could be a histology result, pathology report, surgical report, etc.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getReport(): array
    {
        return $this->report ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getReportIterator(): iterable
    {
        if (!isset($this->report)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->report);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This could be a histology result, pathology report, surgical report, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $report
     * @return static
     */
    public function addReport(FHIRReference $report): self
    {
        if (!isset($this->report)) {
            $this->report = [];
        }
        $this->report[] = $report;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This could be a histology result, pathology report, surgical report, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$report
     * @return static
     */
    public function setReport(FHIRReference ...$report): self
    {
        if ([] === $report) {
            unset($this->report);
            return $this;
        }
        $this->report = $report;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any complications that occurred during the procedure, or in the immediate
     * post-performance period. These are generally tracked separately from the notes,
     * which will typically describe the procedure itself rather than any 'post
     * procedure' issues.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[]
     */
    public function getComplication(): array
    {
        return $this->complication ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference>
     */
    public function getComplicationIterator(): iterable
    {
        if (!isset($this->complication)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->complication);
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any complications that occurred during the procedure, or in the immediate
     * post-performance period. These are generally tracked separately from the notes,
     * which will typically describe the procedure itself rather than any 'post
     * procedure' issues.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $complication
     * @return static
     */
    public function addComplication(FHIRCodeableReference $complication): self
    {
        if (!isset($this->complication)) {
            $this->complication = [];
        }
        $this->complication[] = $complication;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any complications that occurred during the procedure, or in the immediate
     * post-performance period. These are generally tracked separately from the notes,
     * which will typically describe the procedure itself rather than any 'post
     * procedure' issues.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference ...$complication
     * @return static
     */
    public function setComplication(FHIRCodeableReference ...$complication): self
    {
        if ([] === $complication) {
            unset($this->complication);
            return $this;
        }
        $this->complication = $complication;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the procedure required specific follow up - e.g. removal of sutures. The
     * follow up may be represented as a simple note or could potentially be more
     * complex, in which case the CarePlan resource can be used.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getFollowUp(): array
    {
        return $this->followUp ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getFollowUpIterator(): iterable
    {
        if (!isset($this->followUp)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->followUp);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the procedure required specific follow up - e.g. removal of sutures. The
     * follow up may be represented as a simple note or could potentially be more
     * complex, in which case the CarePlan resource can be used.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $followUp
     * @return static
     */
    public function addFollowUp(FHIRCodeableConcept $followUp): self
    {
        if (!isset($this->followUp)) {
            $this->followUp = [];
        }
        $this->followUp[] = $followUp;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If the procedure required specific follow up - e.g. removal of sutures. The
     * follow up may be represented as a simple note or could potentially be more
     * complex, in which case the CarePlan resource can be used.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$followUp
     * @return static
     */
    public function setFollowUp(FHIRCodeableConcept ...$followUp): self
    {
        if ([] === $followUp) {
            unset($this->followUp);
            return $this;
        }
        $this->followUp = $followUp;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any other notes and comments about the procedure.
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
     * Any other notes and comments about the procedure.
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
     * Any other notes and comments about the procedure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation ...$note
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
     * An action that is or was performed on or for a patient, practitioner, device,
     * organization, or location. For example, this can be a physical intervention on a
     * patient like an operation, or less invasive like long term services, counseling,
     * or hypnotherapy. This can be a quality or safety inspection for a location,
     * organization, or device. This can be an accreditation procedure on a
     * practitioner for licensing.
     *
     * A device that is implanted, removed or otherwise manipulated (calibration,
     * battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a
     * focal portion of the Procedure.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice[]
     */
    public function getFocalDevice(): array
    {
        return $this->focalDevice ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice>
     */
    public function getFocalDeviceIterator(): iterable
    {
        if (!isset($this->focalDevice)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->focalDevice);
    }

    /**
     * An action that is or was performed on or for a patient, practitioner, device,
     * organization, or location. For example, this can be a physical intervention on a
     * patient like an operation, or less invasive like long term services, counseling,
     * or hypnotherapy. This can be a quality or safety inspection for a location,
     * organization, or device. This can be an accreditation procedure on a
     * practitioner for licensing.
     *
     * A device that is implanted, removed or otherwise manipulated (calibration,
     * battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a
     * focal portion of the Procedure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice $focalDevice
     * @return static
     */
    public function addFocalDevice(FHIRProcedureFocalDevice $focalDevice): self
    {
        if (!isset($this->focalDevice)) {
            $this->focalDevice = [];
        }
        $this->focalDevice[] = $focalDevice;
        return $this;
    }

    /**
     * An action that is or was performed on or for a patient, practitioner, device,
     * organization, or location. For example, this can be a physical intervention on a
     * patient like an operation, or less invasive like long term services, counseling,
     * or hypnotherapy. This can be a quality or safety inspection for a location,
     * organization, or device. This can be an accreditation procedure on a
     * practitioner for licensing.
     *
     * A device that is implanted, removed or otherwise manipulated (calibration,
     * battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a
     * focal portion of the Procedure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice ...$focalDevice
     * @return static
     */
    public function setFocalDevice(FHIRProcedureFocalDevice ...$focalDevice): self
    {
        if ([] === $focalDevice) {
            unset($this->focalDevice);
            return $this;
        }
        $this->focalDevice = $focalDevice;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies medications, devices and any other substance used as part of the
     * procedure.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[]
     */
    public function getUsed(): array
    {
        return $this->used ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference>
     */
    public function getUsedIterator(): iterable
    {
        if (!isset($this->used)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->used);
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies medications, devices and any other substance used as part of the
     * procedure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $used
     * @return static
     */
    public function addUsed(FHIRCodeableReference $used): self
    {
        if (!isset($this->used)) {
            $this->used = [];
        }
        $this->used[] = $used;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies medications, devices and any other substance used as part of the
     * procedure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference ...$used
     * @return static
     */
    public function setUsed(FHIRCodeableReference ...$used): self
    {
        if ([] === $used) {
            unset($this->used);
            return $this;
        }
        $this->used = $used;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Other resources from the patient record that may be relevant to the procedure.
     * The information from these resources was either used to create the instance or
     * is provided to help with its interpretation. This extension should not be used
     * if more specific inline elements or extensions are available.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getSupportingInfo(): array
    {
        return $this->supportingInfo ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
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
     * Other resources from the patient record that may be relevant to the procedure.
     * The information from these resources was either used to create the instance or
     * is provided to help with its interpretation. This extension should not be used
     * if more specific inline elements or extensions are available.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $supportingInfo
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
     * Other resources from the patient record that may be relevant to the procedure.
     * The information from these resources was either used to create the instance or
     * is provided to help with its interpretation. This extension should not be used
     * if more specific inline elements or extensions are available.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$supportingInfo
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

    /* class_default.php:208 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRProcedure $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRProcedure
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRProcedure)) {
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
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INSTANTIATES_CANONICAL === $cen) {
                $type->addInstantiatesCanonical(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INSTANTIATES_URI === $cen) {
                $type->addInstantiatesUri(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BASED_ON === $cen) {
                $type->addBasedOn(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PART_OF === $cen) {
                $type->addPartOf(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIREventStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS_REASON === $cen) {
                $type->setStatusReason(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CATEGORY === $cen) {
                $type->addCategory(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE === $cen) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBJECT === $cen) {
                $type->setSubject(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FOCUS === $cen) {
                $type->setFocus(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENCOUNTER === $cen) {
                $type->setEncounter(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OCCURRENCE_DATE_TIME === $cen) {
                $type->setOccurrenceDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OCCURRENCE_PERIOD === $cen) {
                $type->setOccurrencePeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OCCURRENCE_STRING === $cen) {
                $type->setOccurrenceString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OCCURRENCE_AGE === $cen) {
                $type->setOccurrenceAge(FHIRAge::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OCCURRENCE_RANGE === $cen) {
                $type->setOccurrenceRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OCCURRENCE_TIMING === $cen) {
                $type->setOccurrenceTiming(FHIRTiming::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RECORDED === $cen) {
                $type->setRecorded(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RECORDER === $cen) {
                $type->setRecorder(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REPORTED_BOOLEAN === $cen) {
                $type->setReportedBoolean(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REPORTED_REFERENCE === $cen) {
                $type->setReportedReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERFORMER === $cen) {
                $type->addPerformer(FHIRProcedurePerformer::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LOCATION === $cen) {
                $type->setLocation(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REASON === $cen) {
                $type->addReason(FHIRCodeableReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BODY_SITE === $cen) {
                $type->addBodySite(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OUTCOME === $cen) {
                $type->setOutcome(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REPORT === $cen) {
                $type->addReport(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COMPLICATION === $cen) {
                $type->addComplication(FHIRCodeableReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FOLLOW_UP === $cen) {
                $type->addFollowUp(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NOTE === $cen) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FOCAL_DEVICE === $cen) {
                $type->addFocalDevice(FHIRProcedureFocalDevice::xmlUnserialize($ce, $config));
            } else if (self::FIELD_USED === $cen) {
                $type->addUsed(FHIRCodeableReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUPPORTING_INFO === $cen) {
                $type->addSupportingInfo(FHIRReference::xmlUnserialize($ce, $config));
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
        if (isset($attributes[self::FIELD_OCCURRENCE_DATE_TIME])) {
            if (isset($type->occurrenceDateTime)) {
                $type->occurrenceDateTime->setValue((string)$attributes[self::FIELD_OCCURRENCE_DATE_TIME]);
                $type->_setOccurrenceDateTimeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setOccurrenceDateTime((string)$attributes[self::FIELD_OCCURRENCE_DATE_TIME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_OCCURRENCE_STRING])) {
            if (isset($type->occurrenceString)) {
                $type->occurrenceString->setValue((string)$attributes[self::FIELD_OCCURRENCE_STRING]);
                $type->_setOccurrenceStringValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setOccurrenceString((string)$attributes[self::FIELD_OCCURRENCE_STRING], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_RECORDED])) {
            if (isset($type->recorded)) {
                $type->recorded->setValue((string)$attributes[self::FIELD_RECORDED]);
                $type->_setRecordedValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setRecorded((string)$attributes[self::FIELD_RECORDED], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_REPORTED_BOOLEAN])) {
            if (isset($type->reportedBoolean)) {
                $type->reportedBoolean->setValue((string)$attributes[self::FIELD_REPORTED_BOOLEAN]);
                $type->_setReportedBooleanValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setReportedBoolean((string)$attributes[self::FIELD_REPORTED_BOOLEAN], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('Procedure', $this->_getSourceXMLNS());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getFormattedValue());
        }
        if (isset($this->occurrenceDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_OCCURRENCE_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_OCCURRENCE_DATE_TIME, $this->occurrenceDateTime->_getFormattedValue());
        }
        if (isset($this->occurrenceString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_OCCURRENCE_STRING]) {
            $xw->writeAttribute(self::FIELD_OCCURRENCE_STRING, $this->occurrenceString->_getFormattedValue());
        }
        if (isset($this->recorded) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_RECORDED]) {
            $xw->writeAttribute(self::FIELD_RECORDED, $this->recorded->_getFormattedValue());
        }
        if (isset($this->reportedBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_REPORTED_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_REPORTED_BOOLEAN, $this->reportedBoolean->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->instantiatesCanonical) && [] !== $this->instantiatesCanonical) {
            foreach($this->instantiatesCanonical as $v) {
                $xw->startElement(self::FIELD_INSTANTIATES_CANONICAL);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->instantiatesUri) && [] !== $this->instantiatesUri) {
            foreach($this->instantiatesUri as $v) {
                $xw->startElement(self::FIELD_INSTANTIATES_URI);
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
        if (isset($this->partOf)) {
            foreach ($this->partOf as $v) {
                $xw->startElement(self::FIELD_PART_OF);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->status)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATUS]
                || $this->status->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATUS]);
            $xw->endElement();
        }
        if (isset($this->statusReason)) {
            $xw->startElement(self::FIELD_STATUS_REASON);
            $this->statusReason->xmlSerialize($xw, $config);
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
        if (isset($this->focus)) {
            $xw->startElement(self::FIELD_FOCUS);
            $this->focus->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->encounter)) {
            $xw->startElement(self::FIELD_ENCOUNTER);
            $this->encounter->xmlSerialize($xw, $config);
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
        if (isset($this->occurrenceString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_OCCURRENCE_STRING]
                || $this->occurrenceString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_OCCURRENCE_STRING);
            $this->occurrenceString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_OCCURRENCE_STRING]);
            $xw->endElement();
        }
        if (isset($this->occurrenceAge)) {
            $xw->startElement(self::FIELD_OCCURRENCE_AGE);
            $this->occurrenceAge->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->occurrenceRange)) {
            $xw->startElement(self::FIELD_OCCURRENCE_RANGE);
            $this->occurrenceRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->occurrenceTiming)) {
            $xw->startElement(self::FIELD_OCCURRENCE_TIMING);
            $this->occurrenceTiming->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->recorded)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_RECORDED]
                || $this->recorded->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_RECORDED);
            $this->recorded->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_RECORDED]);
            $xw->endElement();
        }
        if (isset($this->recorder)) {
            $xw->startElement(self::FIELD_RECORDER);
            $this->recorder->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->reportedBoolean)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_REPORTED_BOOLEAN]
                || $this->reportedBoolean->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_REPORTED_BOOLEAN);
            $this->reportedBoolean->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_REPORTED_BOOLEAN]);
            $xw->endElement();
        }
        if (isset($this->reportedReference)) {
            $xw->startElement(self::FIELD_REPORTED_REFERENCE);
            $this->reportedReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->performer)) {
            foreach ($this->performer as $v) {
                $xw->startElement(self::FIELD_PERFORMER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->location)) {
            $xw->startElement(self::FIELD_LOCATION);
            $this->location->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->reason)) {
            foreach ($this->reason as $v) {
                $xw->startElement(self::FIELD_REASON);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->bodySite)) {
            foreach ($this->bodySite as $v) {
                $xw->startElement(self::FIELD_BODY_SITE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->outcome)) {
            $xw->startElement(self::FIELD_OUTCOME);
            $this->outcome->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->report)) {
            foreach ($this->report as $v) {
                $xw->startElement(self::FIELD_REPORT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->complication)) {
            foreach ($this->complication as $v) {
                $xw->startElement(self::FIELD_COMPLICATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->followUp)) {
            foreach ($this->followUp as $v) {
                $xw->startElement(self::FIELD_FOLLOW_UP);
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
        if (isset($this->focalDevice)) {
            foreach ($this->focalDevice as $v) {
                $xw->startElement(self::FIELD_FOCAL_DEVICE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->used)) {
            foreach ($this->used as $v) {
                $xw->startElement(self::FIELD_USED);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRProcedure $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRProcedure
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRProcedure)) {
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
        if (isset($json[self::FIELD_INSTANTIATES_CANONICAL])
            || isset($json[self::FIELD_INSTANTIATES_CANONICAL_EXT])
            || array_key_exists(self::FIELD_INSTANTIATES_CANONICAL, $json)
            || array_key_exists(self::FIELD_INSTANTIATES_CANONICAL_EXT, $json)) {
            $value = (array)($json[self::FIELD_INSTANTIATES_CANONICAL] ?? []);
            $ext = (array)($json[self::FIELD_INSTANTIATES_CANONICAL_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addInstantiatesCanonical(FHIRCanonical::jsonUnserialize(
                    [FHIRCanonical::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_INSTANTIATES_URI])
            || isset($json[self::FIELD_INSTANTIATES_URI_EXT])
            || array_key_exists(self::FIELD_INSTANTIATES_URI, $json)
            || array_key_exists(self::FIELD_INSTANTIATES_URI_EXT, $json)) {
            $value = (array)($json[self::FIELD_INSTANTIATES_URI] ?? []);
            $ext = (array)($json[self::FIELD_INSTANTIATES_URI_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addInstantiatesUri(FHIRUri::jsonUnserialize(
                    [FHIRUri::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
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
        if (isset($json[self::FIELD_PART_OF]) || array_key_exists(self::FIELD_PART_OF, $json)) {
            $vs = $json[self::FIELD_PART_OF];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addPartOf(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_STATUS])
            || isset($json[self::FIELD_STATUS_EXT])
            || array_key_exists(self::FIELD_STATUS, $json)
            || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $type->setStatus(FHIREventStatus::jsonUnserialize(
                (is_array($value) ? $value : [FHIREventStatus::FIELD_VALUE => $value]) + ($json[self::FIELD_STATUS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_STATUS_REASON]) || array_key_exists(self::FIELD_STATUS_REASON, $json)) {
            $type->setStatusReason(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_STATUS_REASON], $config));
        }
        if (isset($json[self::FIELD_CATEGORY]) || array_key_exists(self::FIELD_CATEGORY, $json)) {
            $vs = $json[self::FIELD_CATEGORY];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addCategory(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_CODE]) || array_key_exists(self::FIELD_CODE, $json)) {
            $type->setCode(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_CODE], $config));
        }
        if (isset($json[self::FIELD_SUBJECT]) || array_key_exists(self::FIELD_SUBJECT, $json)) {
            $type->setSubject(FHIRReference::jsonUnserialize($json[self::FIELD_SUBJECT], $config));
        }
        if (isset($json[self::FIELD_FOCUS]) || array_key_exists(self::FIELD_FOCUS, $json)) {
            $type->setFocus(FHIRReference::jsonUnserialize($json[self::FIELD_FOCUS], $config));
        }
        if (isset($json[self::FIELD_ENCOUNTER]) || array_key_exists(self::FIELD_ENCOUNTER, $json)) {
            $type->setEncounter(FHIRReference::jsonUnserialize($json[self::FIELD_ENCOUNTER], $config));
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
        if (isset($json[self::FIELD_OCCURRENCE_STRING])
            || isset($json[self::FIELD_OCCURRENCE_STRING_EXT])
            || array_key_exists(self::FIELD_OCCURRENCE_STRING, $json)
            || array_key_exists(self::FIELD_OCCURRENCE_STRING_EXT, $json)) {
            $value = $json[self::FIELD_OCCURRENCE_STRING] ?? null;
            $type->setOccurrenceString(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_OCCURRENCE_STRING_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_OCCURRENCE_AGE]) || array_key_exists(self::FIELD_OCCURRENCE_AGE, $json)) {
            $type->setOccurrenceAge(FHIRAge::jsonUnserialize($json[self::FIELD_OCCURRENCE_AGE], $config));
        }
        if (isset($json[self::FIELD_OCCURRENCE_RANGE]) || array_key_exists(self::FIELD_OCCURRENCE_RANGE, $json)) {
            $type->setOccurrenceRange(FHIRRange::jsonUnserialize($json[self::FIELD_OCCURRENCE_RANGE], $config));
        }
        if (isset($json[self::FIELD_OCCURRENCE_TIMING]) || array_key_exists(self::FIELD_OCCURRENCE_TIMING, $json)) {
            $type->setOccurrenceTiming(FHIRTiming::jsonUnserialize($json[self::FIELD_OCCURRENCE_TIMING], $config));
        }
        if (isset($json[self::FIELD_RECORDED])
            || isset($json[self::FIELD_RECORDED_EXT])
            || array_key_exists(self::FIELD_RECORDED, $json)
            || array_key_exists(self::FIELD_RECORDED_EXT, $json)) {
            $value = $json[self::FIELD_RECORDED] ?? null;
            $type->setRecorded(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_RECORDED_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_RECORDER]) || array_key_exists(self::FIELD_RECORDER, $json)) {
            $type->setRecorder(FHIRReference::jsonUnserialize($json[self::FIELD_RECORDER], $config));
        }
        if (isset($json[self::FIELD_REPORTED_BOOLEAN])
            || isset($json[self::FIELD_REPORTED_BOOLEAN_EXT])
            || array_key_exists(self::FIELD_REPORTED_BOOLEAN, $json)
            || array_key_exists(self::FIELD_REPORTED_BOOLEAN_EXT, $json)) {
            $value = $json[self::FIELD_REPORTED_BOOLEAN] ?? null;
            $type->setReportedBoolean(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_REPORTED_BOOLEAN_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_REPORTED_REFERENCE]) || array_key_exists(self::FIELD_REPORTED_REFERENCE, $json)) {
            $type->setReportedReference(FHIRReference::jsonUnserialize($json[self::FIELD_REPORTED_REFERENCE], $config));
        }
        if (isset($json[self::FIELD_PERFORMER]) || array_key_exists(self::FIELD_PERFORMER, $json)) {
            $vs = $json[self::FIELD_PERFORMER];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addPerformer(FHIRProcedurePerformer::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_LOCATION]) || array_key_exists(self::FIELD_LOCATION, $json)) {
            $type->setLocation(FHIRReference::jsonUnserialize($json[self::FIELD_LOCATION], $config));
        }
        if (isset($json[self::FIELD_REASON]) || array_key_exists(self::FIELD_REASON, $json)) {
            $vs = $json[self::FIELD_REASON];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addReason(FHIRCodeableReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_BODY_SITE]) || array_key_exists(self::FIELD_BODY_SITE, $json)) {
            $vs = $json[self::FIELD_BODY_SITE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addBodySite(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_OUTCOME]) || array_key_exists(self::FIELD_OUTCOME, $json)) {
            $type->setOutcome(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_OUTCOME], $config));
        }
        if (isset($json[self::FIELD_REPORT]) || array_key_exists(self::FIELD_REPORT, $json)) {
            $vs = $json[self::FIELD_REPORT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addReport(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_COMPLICATION]) || array_key_exists(self::FIELD_COMPLICATION, $json)) {
            $vs = $json[self::FIELD_COMPLICATION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addComplication(FHIRCodeableReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_FOLLOW_UP]) || array_key_exists(self::FIELD_FOLLOW_UP, $json)) {
            $vs = $json[self::FIELD_FOLLOW_UP];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addFollowUp(FHIRCodeableConcept::jsonUnserialize($v, $config));
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
        if (isset($json[self::FIELD_FOCAL_DEVICE]) || array_key_exists(self::FIELD_FOCAL_DEVICE, $json)) {
            $vs = $json[self::FIELD_FOCAL_DEVICE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addFocalDevice(FHIRProcedureFocalDevice::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_USED]) || array_key_exists(self::FIELD_USED, $json)) {
            $vs = $json[self::FIELD_USED];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addUsed(FHIRCodeableReference::jsonUnserialize($v, $config));
            }
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
        if (isset($this->instantiatesCanonical) && [] !== $this->instantiatesCanonical) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->instantiatesCanonical as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->instantiatesCanonical = $vals;
            }
            if ($hasExts) {
                $out->_instantiatesCanonical = $exts;
            }
        }
        if (isset($this->instantiatesUri) && [] !== $this->instantiatesUri) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->instantiatesUri as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->instantiatesUri = $vals;
            }
            if ($hasExts) {
                $out->_instantiatesUri = $exts;
            }
        }
        if (isset($this->basedOn) && [] !== $this->basedOn) {
            $out->basedOn = $this->basedOn;
        }
        if (isset($this->partOf) && [] !== $this->partOf) {
            $out->partOf = $this->partOf;
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
        if (isset($this->statusReason)) {
            $out->statusReason = $this->statusReason;
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
        if (isset($this->focus)) {
            $out->focus = $this->focus;
        }
        if (isset($this->encounter)) {
            $out->encounter = $this->encounter;
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
        if (isset($this->occurrenceString)) {
            if (null !== ($val = $this->occurrenceString->getValue())) {
                $out->occurrenceString = $val;
            }
            if ($this->occurrenceString->_nonValueFieldDefined()) {
                $ext = $this->occurrenceString->jsonSerialize();
                unset($ext->value);
                $out->_occurrenceString = $ext;
            }
        }
        if (isset($this->occurrenceAge)) {
            $out->occurrenceAge = $this->occurrenceAge;
        }
        if (isset($this->occurrenceRange)) {
            $out->occurrenceRange = $this->occurrenceRange;
        }
        if (isset($this->occurrenceTiming)) {
            $out->occurrenceTiming = $this->occurrenceTiming;
        }
        if (isset($this->recorded)) {
            if (null !== ($val = $this->recorded->getValue())) {
                $out->recorded = $val;
            }
            if ($this->recorded->_nonValueFieldDefined()) {
                $ext = $this->recorded->jsonSerialize();
                unset($ext->value);
                $out->_recorded = $ext;
            }
        }
        if (isset($this->recorder)) {
            $out->recorder = $this->recorder;
        }
        if (isset($this->reportedBoolean)) {
            if (null !== ($val = $this->reportedBoolean->getValue())) {
                $out->reportedBoolean = $val;
            }
            if ($this->reportedBoolean->_nonValueFieldDefined()) {
                $ext = $this->reportedBoolean->jsonSerialize();
                unset($ext->value);
                $out->_reportedBoolean = $ext;
            }
        }
        if (isset($this->reportedReference)) {
            $out->reportedReference = $this->reportedReference;
        }
        if (isset($this->performer) && [] !== $this->performer) {
            $out->performer = $this->performer;
        }
        if (isset($this->location)) {
            $out->location = $this->location;
        }
        if (isset($this->reason) && [] !== $this->reason) {
            $out->reason = $this->reason;
        }
        if (isset($this->bodySite) && [] !== $this->bodySite) {
            $out->bodySite = $this->bodySite;
        }
        if (isset($this->outcome)) {
            $out->outcome = $this->outcome;
        }
        if (isset($this->report) && [] !== $this->report) {
            $out->report = $this->report;
        }
        if (isset($this->complication) && [] !== $this->complication) {
            $out->complication = $this->complication;
        }
        if (isset($this->followUp) && [] !== $this->followUp) {
            $out->followUp = $this->followUp;
        }
        if (isset($this->note) && [] !== $this->note) {
            $out->note = $this->note;
        }
        if (isset($this->focalDevice) && [] !== $this->focalDevice) {
            $out->focalDevice = $this->focalDevice;
        }
        if (isset($this->used) && [] !== $this->used) {
            $out->used = $this->used;
        }
        if (isset($this->supportingInfo) && [] !== $this->supportingInfo) {
            $out->supportingInfo = $this->supportingInfo;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}
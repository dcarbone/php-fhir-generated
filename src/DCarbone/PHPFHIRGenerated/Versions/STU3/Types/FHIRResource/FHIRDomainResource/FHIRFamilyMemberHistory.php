<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
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
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAdministrativeGender;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRFamilyHistoryStatus;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference;
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
 * Significant health events and conditions for a person related to the patient
 * relevant in the context of care for the patient.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRFamilyMemberHistory extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY;


    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_DEFINITION = 'definition';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_NOT_DONE = 'notDone';
    public const FIELD_NOT_DONE_EXT = '_notDone';
    public const FIELD_NOT_DONE_REASON = 'notDoneReason';
    public const FIELD_PATIENT = 'patient';
    public const FIELD_DATE = 'date';
    public const FIELD_DATE_EXT = '_date';
    public const FIELD_NAME = 'name';
    public const FIELD_NAME_EXT = '_name';
    public const FIELD_RELATIONSHIP = 'relationship';
    public const FIELD_GENDER = 'gender';
    public const FIELD_GENDER_EXT = '_gender';
    public const FIELD_BORN_PERIOD = 'bornPeriod';
    public const FIELD_BORN_DATE = 'bornDate';
    public const FIELD_BORN_DATE_EXT = '_bornDate';
    public const FIELD_BORN_STRING = 'bornString';
    public const FIELD_BORN_STRING_EXT = '_bornString';
    public const FIELD_AGE_AGE = 'ageAge';
    public const FIELD_AGE_RANGE = 'ageRange';
    public const FIELD_AGE_STRING = 'ageString';
    public const FIELD_AGE_STRING_EXT = '_ageString';
    public const FIELD_ESTIMATED_AGE = 'estimatedAge';
    public const FIELD_ESTIMATED_AGE_EXT = '_estimatedAge';
    public const FIELD_DECEASED_BOOLEAN = 'deceasedBoolean';
    public const FIELD_DECEASED_BOOLEAN_EXT = '_deceasedBoolean';
    public const FIELD_DECEASED_AGE = 'deceasedAge';
    public const FIELD_DECEASED_RANGE = 'deceasedRange';
    public const FIELD_DECEASED_DATE = 'deceasedDate';
    public const FIELD_DECEASED_DATE_EXT = '_deceasedDate';
    public const FIELD_DECEASED_STRING = 'deceasedString';
    public const FIELD_DECEASED_STRING_EXT = '_deceasedString';
    public const FIELD_REASON_CODE = 'reasonCode';
    public const FIELD_REASON_REFERENCE = 'reasonReference';
    public const FIELD_NOTE = 'note';
    public const FIELD_CONDITION = 'condition';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this family member history record that
     * are defined by business processes and/ or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A protocol or questionnaire that was adhered to in whole or in part by this
     * event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] 
     */
    protected array $definition;
    /**
     * A code that identifies the status of the family history record.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the status of the record of the family history of a specific
     * family member.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRFamilyHistoryStatus 
     */
    protected FHIRFamilyHistoryStatus $status;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates the taking of an individual family member's history did not
     * occur. The notDone element should not be used to document negated conditions,
     * such as a family member that did not have a condition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $notDone;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the family member's history is absent.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $notDoneReason;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who this history concerns.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $patient;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and possibly time) when the family member history was taken.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $date;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with
     * the red hair".
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $name;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of relationship this person has to the patient (father, mother, brother
     * etc.).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $relationship;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Administrative Gender - the gender that the relative is considered to have for
     * administration and record keeping purposes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAdministrativeGender 
     */
    protected FHIRAdministrativeGender $gender;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $bornPeriod;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $bornDate;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $bornString;
    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age of the relative at the time the family member history is recorded.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRAge 
     */
    protected FHIRAge $ageAge;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age of the relative at the time the family member history is recorded.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $ageRange;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The age of the relative at the time the family member history is recorded.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $ageString;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates that the age value specified is an estimated value.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $estimatedAge;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $deceasedBoolean;
    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRAge 
     */
    protected FHIRAge $deceasedAge;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $deceasedRange;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $deceasedDate;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $deceasedString;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the family member history occurred in coded or textual form.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $reasonCode;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse
     * that justifies this family member history event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] 
     */
    protected array $reasonReference;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This property allows a non condition-specific note to the made about the related
     * person. Ideally, the note would be in the condition property, but this is not
     * always possible.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation[] 
     */
    protected array $note;
    /**
     * Significant health events and conditions for a person related to the patient
     * relevant in the context of care for the patient.
     *
     * The significant Conditions (or condition) that the family member had. This is a
     * repeating section to allow a system to represent more than one condition per
     * resource, though there is nothing stopping multiple resources - one per
     * condition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition[] 
     */
    protected array $condition;

    /** Default validation map for fields in type FamilyMemberHistory */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_PATIENT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_RELATIONSHIP => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRFamilyMemberHistory Constructor
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRFamilyHistoryStatus $status
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $notDone
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $notDoneReason
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $patient
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $date
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $name
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $relationship
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAdministrativeGender $gender
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $bornPeriod
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $bornDate
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $bornString
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRAge $ageAge
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange $ageRange
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $ageString
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $estimatedAge
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $deceasedBoolean
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRAge $deceasedAge
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange $deceasedRange
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $deceasedDate
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $deceasedString
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] $reasonCode
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] $reasonReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation[] $note
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition[] $condition
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
                                null|FHIRFamilyHistoryStatus $status = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $notDone = null,
                                null|FHIRCodeableConcept $notDoneReason = null,
                                null|FHIRReference $patient = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date = null,
                                null|string|FHIRStringPrimitive|FHIRString $name = null,
                                null|FHIRCodeableConcept $relationship = null,
                                null|FHIRAdministrativeGender $gender = null,
                                null|FHIRPeriod $bornPeriod = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $bornDate = null,
                                null|string|FHIRStringPrimitive|FHIRString $bornString = null,
                                null|FHIRAge $ageAge = null,
                                null|FHIRRange $ageRange = null,
                                null|string|FHIRStringPrimitive|FHIRString $ageString = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $estimatedAge = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $deceasedBoolean = null,
                                null|FHIRAge $deceasedAge = null,
                                null|FHIRRange $deceasedRange = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $deceasedDate = null,
                                null|string|FHIRStringPrimitive|FHIRString $deceasedString = null,
                                null|iterable $reasonCode = null,
                                null|iterable $reasonReference = null,
                                null|iterable $note = null,
                                null|iterable $condition = null,
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
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $notDone) {
            $this->setNotDone($notDone);
        }
        if (null !== $notDoneReason) {
            $this->setNotDoneReason($notDoneReason);
        }
        if (null !== $patient) {
            $this->setPatient($patient);
        }
        if (null !== $date) {
            $this->setDate($date);
        }
        if (null !== $name) {
            $this->setName($name);
        }
        if (null !== $relationship) {
            $this->setRelationship($relationship);
        }
        if (null !== $gender) {
            $this->setGender($gender);
        }
        if (null !== $bornPeriod) {
            $this->setBornPeriod($bornPeriod);
        }
        if (null !== $bornDate) {
            $this->setBornDate($bornDate);
        }
        if (null !== $bornString) {
            $this->setBornString($bornString);
        }
        if (null !== $ageAge) {
            $this->setAgeAge($ageAge);
        }
        if (null !== $ageRange) {
            $this->setAgeRange($ageRange);
        }
        if (null !== $ageString) {
            $this->setAgeString($ageString);
        }
        if (null !== $estimatedAge) {
            $this->setEstimatedAge($estimatedAge);
        }
        if (null !== $deceasedBoolean) {
            $this->setDeceasedBoolean($deceasedBoolean);
        }
        if (null !== $deceasedAge) {
            $this->setDeceasedAge($deceasedAge);
        }
        if (null !== $deceasedRange) {
            $this->setDeceasedRange($deceasedRange);
        }
        if (null !== $deceasedDate) {
            $this->setDeceasedDate($deceasedDate);
        }
        if (null !== $deceasedString) {
            $this->setDeceasedString($deceasedString);
        }
        if (null !== $reasonCode) {
            $this->setReasonCode(...$reasonCode);
        }
        if (null !== $reasonReference) {
            $this->setReasonReference(...$reasonReference);
        }
        if (null !== $note) {
            $this->setNote(...$note);
        }
        if (null !== $condition) {
            $this->setCondition(...$condition);
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
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this family member history record that
     * are defined by business processes and/ or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
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
        if (!isset($this->identifier) || [] === $this->identifier) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this family member history record that
     * are defined by business processes and/ or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
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
     * This records identifiers associated with this family member history record that
     * are defined by business processes and/ or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A protocol or questionnaire that was adhered to in whole or in part by this
     * event.
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
        if (!isset($this->definition) || [] === $this->definition) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->definition);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A protocol or questionnaire that was adhered to in whole or in part by this
     * event.
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
     * A protocol or questionnaire that was adhered to in whole or in part by this
     * event.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference ...$definition
     * @return static
     */
    public function setDefinition(FHIRReference ...$definition): self
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * A code that identifies the status of the family history record.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the status of the record of the family history of a specific
     * family member.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRFamilyHistoryStatus
     */
    public function getStatus(): null|FHIRFamilyHistoryStatus
    {
        return $this->status ?? null;
    }

    /**
     * A code that identifies the status of the family history record.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the status of the record of the family history of a specific
     * family member.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRFamilyHistoryStatus $status
     * @return static
     */
    public function setStatus(null|FHIRFamilyHistoryStatus $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        $this->status = $status;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates the taking of an individual family member's history did not
     * occur. The notDone element should not be used to document negated conditions,
     * such as a family member that did not have a condition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getNotDone(): null|FHIRBoolean
    {
        return $this->notDone ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates the taking of an individual family member's history did not
     * occur. The notDone element should not be used to document negated conditions,
     * such as a family member that did not have a condition.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $notDone
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setNotDone(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $notDone,
                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $notDone) {
            unset($this->notDone);
            return $this;
        }
        if (!($notDone instanceof FHIRBoolean)) {
            $notDone = new FHIRBoolean(value: $notDone);
        }
        if (null !== $valueXMLLocation) {
            $notDone->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $notDone->_getValueXMLLocation()) {
            $notDone->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->notDone = $notDone;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the family member's history is absent.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getNotDoneReason(): null|FHIRCodeableConcept
    {
        return $this->notDoneReason ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the family member's history is absent.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $notDoneReason
     * @return static
     */
    public function setNotDoneReason(null|FHIRCodeableConcept $notDoneReason): self
    {
        if (null === $notDoneReason) {
            unset($this->notDoneReason);
            return $this;
        }
        $this->notDoneReason = $notDoneReason;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who this history concerns.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getPatient(): null|FHIRReference
    {
        return $this->patient ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who this history concerns.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(null|FHIRReference $patient): self
    {
        if (null === $patient) {
            unset($this->patient);
            return $this;
        }
        $this->patient = $patient;
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
     * The date (and possibly time) when the family member history was taken.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime
     */
    public function getDate(): null|FHIRDateTime
    {
        return $this->date ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and possibly time) when the family member history was taken.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $date
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date,
                            null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $date) {
            unset($this->date);
            return $this;
        }
        if (!($date instanceof FHIRDateTime)) {
            $date = new FHIRDateTime(value: $date);
        }
        if (null !== $valueXMLLocation) {
            $date->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $date->_getValueXMLLocation()) {
            $date->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->date = $date;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with
     * the red hair".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getName(): null|FHIRString
    {
        return $this->name ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with
     * the red hair".
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $name
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setName(null|string|FHIRStringPrimitive|FHIRString $name,
                            null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $name) {
            unset($this->name);
            return $this;
        }
        if (!($name instanceof FHIRString)) {
            $name = new FHIRString(value: $name);
        }
        if (null !== $valueXMLLocation) {
            $name->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $name->_getValueXMLLocation()) {
            $name->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of relationship this person has to the patient (father, mother, brother
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getRelationship(): null|FHIRCodeableConcept
    {
        return $this->relationship ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of relationship this person has to the patient (father, mother, brother
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $relationship
     * @return static
     */
    public function setRelationship(null|FHIRCodeableConcept $relationship): self
    {
        if (null === $relationship) {
            unset($this->relationship);
            return $this;
        }
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Administrative Gender - the gender that the relative is considered to have for
     * administration and record keeping purposes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAdministrativeGender
     */
    public function getGender(): null|FHIRAdministrativeGender
    {
        return $this->gender ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Administrative Gender - the gender that the relative is considered to have for
     * administration and record keeping purposes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAdministrativeGender $gender
     * @return static
     */
    public function setGender(null|FHIRAdministrativeGender $gender): self
    {
        if (null === $gender) {
            unset($this->gender);
            return $this;
        }
        $this->gender = $gender;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod
     */
    public function getBornPeriod(): null|FHIRPeriod
    {
        return $this->bornPeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $bornPeriod
     * @return static
     */
    public function setBornPeriod(null|FHIRPeriod $bornPeriod): self
    {
        if (null === $bornPeriod) {
            unset($this->bornPeriod);
            return $this;
        }
        $this->bornPeriod = $bornPeriod;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate
     */
    public function getBornDate(): null|FHIRDate
    {
        return $this->bornDate ?? null;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $bornDate
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setBornDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $bornDate,
                                null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $bornDate) {
            unset($this->bornDate);
            return $this;
        }
        if (!($bornDate instanceof FHIRDate)) {
            $bornDate = new FHIRDate(value: $bornDate);
        }
        if (null !== $valueXMLLocation) {
            $bornDate->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $bornDate->_getValueXMLLocation()) {
            $bornDate->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->bornDate = $bornDate;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getBornString(): null|FHIRString
    {
        return $this->bornString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $bornString
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setBornString(null|string|FHIRStringPrimitive|FHIRString $bornString,
                                  null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $bornString) {
            unset($this->bornString);
            return $this;
        }
        if (!($bornString instanceof FHIRString)) {
            $bornString = new FHIRString(value: $bornString);
        }
        if (null !== $valueXMLLocation) {
            $bornString->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $bornString->_getValueXMLLocation()) {
            $bornString->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->bornString = $bornString;
        return $this;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age of the relative at the time the family member history is recorded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getAgeAge(): null|FHIRAge
    {
        return $this->ageAge ?? null;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age of the relative at the time the family member history is recorded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRAge $ageAge
     * @return static
     */
    public function setAgeAge(null|FHIRAge $ageAge): self
    {
        if (null === $ageAge) {
            unset($this->ageAge);
            return $this;
        }
        $this->ageAge = $ageAge;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age of the relative at the time the family member history is recorded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange
     */
    public function getAgeRange(): null|FHIRRange
    {
        return $this->ageRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age of the relative at the time the family member history is recorded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange $ageRange
     * @return static
     */
    public function setAgeRange(null|FHIRRange $ageRange): self
    {
        if (null === $ageRange) {
            unset($this->ageRange);
            return $this;
        }
        $this->ageRange = $ageRange;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The age of the relative at the time the family member history is recorded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getAgeString(): null|FHIRString
    {
        return $this->ageString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The age of the relative at the time the family member history is recorded.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $ageString
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAgeString(null|string|FHIRStringPrimitive|FHIRString $ageString,
                                 null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $ageString) {
            unset($this->ageString);
            return $this;
        }
        if (!($ageString instanceof FHIRString)) {
            $ageString = new FHIRString(value: $ageString);
        }
        if (null !== $valueXMLLocation) {
            $ageString->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $ageString->_getValueXMLLocation()) {
            $ageString->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->ageString = $ageString;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates that the age value specified is an estimated value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getEstimatedAge(): null|FHIRBoolean
    {
        return $this->estimatedAge ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates that the age value specified is an estimated value.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $estimatedAge
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setEstimatedAge(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $estimatedAge,
                                    null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $estimatedAge) {
            unset($this->estimatedAge);
            return $this;
        }
        if (!($estimatedAge instanceof FHIRBoolean)) {
            $estimatedAge = new FHIRBoolean(value: $estimatedAge);
        }
        if (null !== $valueXMLLocation) {
            $estimatedAge->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $estimatedAge->_getValueXMLLocation()) {
            $estimatedAge->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->estimatedAge = $estimatedAge;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getDeceasedBoolean(): null|FHIRBoolean
    {
        return $this->deceasedBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $deceasedBoolean
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDeceasedBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $deceasedBoolean,
                                       null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $deceasedBoolean) {
            unset($this->deceasedBoolean);
            return $this;
        }
        if (!($deceasedBoolean instanceof FHIRBoolean)) {
            $deceasedBoolean = new FHIRBoolean(value: $deceasedBoolean);
        }
        if (null !== $valueXMLLocation) {
            $deceasedBoolean->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $deceasedBoolean->_getValueXMLLocation()) {
            $deceasedBoolean->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->deceasedBoolean = $deceasedBoolean;
        return $this;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getDeceasedAge(): null|FHIRAge
    {
        return $this->deceasedAge ?? null;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRAge $deceasedAge
     * @return static
     */
    public function setDeceasedAge(null|FHIRAge $deceasedAge): self
    {
        if (null === $deceasedAge) {
            unset($this->deceasedAge);
            return $this;
        }
        $this->deceasedAge = $deceasedAge;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange
     */
    public function getDeceasedRange(): null|FHIRRange
    {
        return $this->deceasedRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange $deceasedRange
     * @return static
     */
    public function setDeceasedRange(null|FHIRRange $deceasedRange): self
    {
        if (null === $deceasedRange) {
            unset($this->deceasedRange);
            return $this;
        }
        $this->deceasedRange = $deceasedRange;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate
     */
    public function getDeceasedDate(): null|FHIRDate
    {
        return $this->deceasedDate ?? null;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $deceasedDate
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDeceasedDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $deceasedDate,
                                    null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $deceasedDate) {
            unset($this->deceasedDate);
            return $this;
        }
        if (!($deceasedDate instanceof FHIRDate)) {
            $deceasedDate = new FHIRDate(value: $deceasedDate);
        }
        if (null !== $valueXMLLocation) {
            $deceasedDate->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $deceasedDate->_getValueXMLLocation()) {
            $deceasedDate->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->deceasedDate = $deceasedDate;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getDeceasedString(): null|FHIRString
    {
        return $this->deceasedString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $deceasedString
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDeceasedString(null|string|FHIRStringPrimitive|FHIRString $deceasedString,
                                      null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $deceasedString) {
            unset($this->deceasedString);
            return $this;
        }
        if (!($deceasedString instanceof FHIRString)) {
            $deceasedString = new FHIRString(value: $deceasedString);
        }
        if (null !== $valueXMLLocation) {
            $deceasedString->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $deceasedString->_getValueXMLLocation()) {
            $deceasedString->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->deceasedString = $deceasedString;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the family member history occurred in coded or textual form.
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
        if (!isset($this->reasonCode) || [] === $this->reasonCode) {
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
     * Describes why the family member history occurred in coded or textual form.
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
     * Describes why the family member history occurred in coded or textual form.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept ...$reasonCode
     * @return static
     */
    public function setReasonCode(FHIRCodeableConcept ...$reasonCode): self
    {
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse
     * that justifies this family member history event.
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
        if (!isset($this->reasonReference) || [] === $this->reasonReference) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->reasonReference);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse
     * that justifies this family member history event.
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
     * Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse
     * that justifies this family member history event.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference ...$reasonReference
     * @return static
     */
    public function setReasonReference(FHIRReference ...$reasonReference): self
    {
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This property allows a non condition-specific note to the made about the related
     * person. Ideally, the note would be in the condition property, but this is not
     * always possible.
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
     * This property allows a non condition-specific note to the made about the related
     * person. Ideally, the note would be in the condition property, but this is not
     * always possible.
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
     * This property allows a non condition-specific note to the made about the related
     * person. Ideally, the note would be in the condition property, but this is not
     * always possible.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation ...$note
     * @return static
     */
    public function setNote(FHIRAnnotation ...$note): self
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Significant health events and conditions for a person related to the patient
     * relevant in the context of care for the patient.
     *
     * The significant Conditions (or condition) that the family member had. This is a
     * repeating section to allow a system to represent more than one condition per
     * resource, though there is nothing stopping multiple resources - one per
     * condition.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition[]
     */
    public function getCondition(): array
    {
        return $this->condition ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition>
     */
    public function getConditionIterator(): iterable
    {
        if (!isset($this->condition) || [] === $this->condition) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->condition);
    }

    /**
     * Significant health events and conditions for a person related to the patient
     * relevant in the context of care for the patient.
     *
     * The significant Conditions (or condition) that the family member had. This is a
     * repeating section to allow a system to represent more than one condition per
     * resource, though there is nothing stopping multiple resources - one per
     * condition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition $condition
     * @return static
     */
    public function addCondition(FHIRFamilyMemberHistoryCondition $condition): self
    {
        if (!isset($this->condition)) {
            $this->condition = [];
        }
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * Significant health events and conditions for a person related to the patient
     * relevant in the context of care for the patient.
     *
     * The significant Conditions (or condition) that the family member had. This is a
     * repeating section to allow a system to represent more than one condition per
     * resource, though there is nothing stopping multiple resources - one per
     * condition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition ...$condition
     * @return static
     */
    public function setCondition(FHIRFamilyMemberHistoryCondition ...$condition): self
    {
        $this->condition = $condition;
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
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRelationship())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RELATIONSHIP] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_NOT_DONE])) {
            $v = $this->getNotDone();
            foreach($validationRules[self::FIELD_NOT_DONE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NOT_DONE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOT_DONE])) {
                        $errs[self::FIELD_NOT_DONE] = [];
                    }
                    $errs[self::FIELD_NOT_DONE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOT_DONE_REASON])) {
            $v = $this->getNotDoneReason();
            foreach($validationRules[self::FIELD_NOT_DONE_REASON] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NOT_DONE_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOT_DONE_REASON])) {
                        $errs[self::FIELD_NOT_DONE_REASON] = [];
                    }
                    $errs[self::FIELD_NOT_DONE_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT])) {
            $v = $this->getPatient();
            foreach($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT])) {
                        $errs[self::FIELD_PATIENT] = [];
                    }
                    $errs[self::FIELD_PATIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE])) {
            $v = $this->getDate();
            foreach($validationRules[self::FIELD_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE])) {
                        $errs[self::FIELD_DATE] = [];
                    }
                    $errs[self::FIELD_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATIONSHIP])) {
            $v = $this->getRelationship();
            foreach($validationRules[self::FIELD_RELATIONSHIP] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RELATIONSHIP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATIONSHIP])) {
                        $errs[self::FIELD_RELATIONSHIP] = [];
                    }
                    $errs[self::FIELD_RELATIONSHIP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GENDER])) {
            $v = $this->getGender();
            foreach($validationRules[self::FIELD_GENDER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_GENDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GENDER])) {
                        $errs[self::FIELD_GENDER] = [];
                    }
                    $errs[self::FIELD_GENDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BORN_PERIOD])) {
            $v = $this->getBornPeriod();
            foreach($validationRules[self::FIELD_BORN_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BORN_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BORN_PERIOD])) {
                        $errs[self::FIELD_BORN_PERIOD] = [];
                    }
                    $errs[self::FIELD_BORN_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BORN_DATE])) {
            $v = $this->getBornDate();
            foreach($validationRules[self::FIELD_BORN_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BORN_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BORN_DATE])) {
                        $errs[self::FIELD_BORN_DATE] = [];
                    }
                    $errs[self::FIELD_BORN_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BORN_STRING])) {
            $v = $this->getBornString();
            foreach($validationRules[self::FIELD_BORN_STRING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BORN_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BORN_STRING])) {
                        $errs[self::FIELD_BORN_STRING] = [];
                    }
                    $errs[self::FIELD_BORN_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AGE_AGE])) {
            $v = $this->getAgeAge();
            foreach($validationRules[self::FIELD_AGE_AGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AGE_AGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AGE_AGE])) {
                        $errs[self::FIELD_AGE_AGE] = [];
                    }
                    $errs[self::FIELD_AGE_AGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AGE_RANGE])) {
            $v = $this->getAgeRange();
            foreach($validationRules[self::FIELD_AGE_RANGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AGE_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AGE_RANGE])) {
                        $errs[self::FIELD_AGE_RANGE] = [];
                    }
                    $errs[self::FIELD_AGE_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AGE_STRING])) {
            $v = $this->getAgeString();
            foreach($validationRules[self::FIELD_AGE_STRING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AGE_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AGE_STRING])) {
                        $errs[self::FIELD_AGE_STRING] = [];
                    }
                    $errs[self::FIELD_AGE_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ESTIMATED_AGE])) {
            $v = $this->getEstimatedAge();
            foreach($validationRules[self::FIELD_ESTIMATED_AGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ESTIMATED_AGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ESTIMATED_AGE])) {
                        $errs[self::FIELD_ESTIMATED_AGE] = [];
                    }
                    $errs[self::FIELD_ESTIMATED_AGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DECEASED_BOOLEAN])) {
            $v = $this->getDeceasedBoolean();
            foreach($validationRules[self::FIELD_DECEASED_BOOLEAN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DECEASED_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DECEASED_BOOLEAN])) {
                        $errs[self::FIELD_DECEASED_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_DECEASED_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DECEASED_AGE])) {
            $v = $this->getDeceasedAge();
            foreach($validationRules[self::FIELD_DECEASED_AGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DECEASED_AGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DECEASED_AGE])) {
                        $errs[self::FIELD_DECEASED_AGE] = [];
                    }
                    $errs[self::FIELD_DECEASED_AGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DECEASED_RANGE])) {
            $v = $this->getDeceasedRange();
            foreach($validationRules[self::FIELD_DECEASED_RANGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DECEASED_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DECEASED_RANGE])) {
                        $errs[self::FIELD_DECEASED_RANGE] = [];
                    }
                    $errs[self::FIELD_DECEASED_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DECEASED_DATE])) {
            $v = $this->getDeceasedDate();
            foreach($validationRules[self::FIELD_DECEASED_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DECEASED_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DECEASED_DATE])) {
                        $errs[self::FIELD_DECEASED_DATE] = [];
                    }
                    $errs[self::FIELD_DECEASED_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DECEASED_STRING])) {
            $v = $this->getDeceasedString();
            foreach($validationRules[self::FIELD_DECEASED_STRING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DECEASED_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DECEASED_STRING])) {
                        $errs[self::FIELD_DECEASED_STRING] = [];
                    }
                    $errs[self::FIELD_DECEASED_STRING][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_CONDITION])) {
            $v = $this->getCondition();
            foreach($validationRules[self::FIELD_CONDITION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONDITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONDITION])) {
                        $errs[self::FIELD_CONDITION] = [];
                    }
                    $errs[self::FIELD_CONDITION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRFamilyMemberHistory)) {
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
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface $cn */
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
            } else if (self::FIELD_DEFINITION === $childName) {
                $v = new FHIRReference();
                $type->addDefinition(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STATUS === $childName) {
                $v = new FHIRFamilyHistoryStatus(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setStatus(FHIRFamilyHistoryStatus::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NOT_DONE === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setNotDone(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NOT_DONE_REASON === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setNotDoneReason(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATIENT === $childName) {
                $v = new FHIRReference();
                $type->setPatient(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATE === $childName) {
                $v = new FHIRDateTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDate(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NAME === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setName(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RELATIONSHIP === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setRelationship(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_GENDER === $childName) {
                $v = new FHIRAdministrativeGender(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setGender(FHIRAdministrativeGender::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_BORN_PERIOD === $childName) {
                $v = new FHIRPeriod();
                $type->setBornPeriod(FHIRPeriod::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_BORN_DATE === $childName) {
                $v = new FHIRDate(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setBornDate(FHIRDate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_BORN_STRING === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setBornString(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_AGE_AGE === $childName) {
                $v = new FHIRAge();
                $type->setAgeAge(FHIRAge::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_AGE_RANGE === $childName) {
                $v = new FHIRRange();
                $type->setAgeRange(FHIRRange::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_AGE_STRING === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setAgeString(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ESTIMATED_AGE === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setEstimatedAge(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DECEASED_BOOLEAN === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDeceasedBoolean(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DECEASED_AGE === $childName) {
                $v = new FHIRAge();
                $type->setDeceasedAge(FHIRAge::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DECEASED_RANGE === $childName) {
                $v = new FHIRRange();
                $type->setDeceasedRange(FHIRRange::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DECEASED_DATE === $childName) {
                $v = new FHIRDate(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDeceasedDate(FHIRDate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DECEASED_STRING === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDeceasedString(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REASON_CODE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addReasonCode(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REASON_REFERENCE === $childName) {
                $v = new FHIRReference();
                $type->addReasonReference(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NOTE === $childName) {
                $v = new FHIRAnnotation();
                $type->addNote(FHIRAnnotation::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONDITION === $childName) {
                $v = new FHIRFamilyMemberHistoryCondition();
                $type->addCondition(FHIRFamilyMemberHistoryCondition::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_NOT_DONE])) {
            $pt = $type->getNotDone();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_NOT_DONE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setNotDone(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_NOT_DONE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DATE])) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DATE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDate(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_DATE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_NAME])) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_NAME]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setName(new FHIRString(
                    value: (string)$attributes[self::FIELD_NAME],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_BORN_DATE])) {
            $pt = $type->getBornDate();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_BORN_DATE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setBornDate(new FHIRDate(
                    value: (string)$attributes[self::FIELD_BORN_DATE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_BORN_STRING])) {
            $pt = $type->getBornString();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_BORN_STRING]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setBornString(new FHIRString(
                    value: (string)$attributes[self::FIELD_BORN_STRING],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_AGE_STRING])) {
            $pt = $type->getAgeString();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_AGE_STRING]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAgeString(new FHIRString(
                    value: (string)$attributes[self::FIELD_AGE_STRING],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ESTIMATED_AGE])) {
            $pt = $type->getEstimatedAge();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ESTIMATED_AGE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setEstimatedAge(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_ESTIMATED_AGE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DECEASED_BOOLEAN])) {
            $pt = $type->getDeceasedBoolean();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DECEASED_BOOLEAN]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDeceasedBoolean(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_DECEASED_BOOLEAN],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DECEASED_DATE])) {
            $pt = $type->getDeceasedDate();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DECEASED_DATE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDeceasedDate(new FHIRDate(
                    value: (string)$attributes[self::FIELD_DECEASED_DATE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DECEASED_STRING])) {
            $pt = $type->getDeceasedString();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DECEASED_STRING]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDeceasedString(new FHIRString(
                    value: (string)$attributes[self::FIELD_DECEASED_STRING],
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
            $xw->openRootNode('FamilyMemberHistory', $this->_getSourceXMLNS());
        }
        if (isset($this->notDone) && $this->notDone->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_NOT_DONE, $this->notDone->getValue()?->_getFormattedValue());
        }
        if (isset($this->date) && $this->date->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATE, $this->date->getValue()?->_getFormattedValue());
        }
        if (isset($this->name) && $this->name->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_NAME, $this->name->getValue()?->_getFormattedValue());
        }
        if (isset($this->bornDate) && $this->bornDate->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_BORN_DATE, $this->bornDate->getValue()?->_getFormattedValue());
        }
        if (isset($this->bornString) && $this->bornString->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_BORN_STRING, $this->bornString->getValue()?->_getFormattedValue());
        }
        if (isset($this->ageString) && $this->ageString->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_AGE_STRING, $this->ageString->getValue()?->_getFormattedValue());
        }
        if (isset($this->estimatedAge) && $this->estimatedAge->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ESTIMATED_AGE, $this->estimatedAge->getValue()?->_getFormattedValue());
        }
        if (isset($this->deceasedBoolean) && $this->deceasedBoolean->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DECEASED_BOOLEAN, $this->deceasedBoolean->getValue()?->_getFormattedValue());
        }
        if (isset($this->deceasedDate) && $this->deceasedDate->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DECEASED_DATE, $this->deceasedDate->getValue()?->_getFormattedValue());
        }
        if (isset($this->deceasedString) && $this->deceasedString->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DECEASED_STRING, $this->deceasedString->getValue()?->_getFormattedValue());
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
        if (isset($this->status)) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->notDone) && $this->notDone->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_NOT_DONE);
            $this->notDone->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->notDoneReason)) {
            $xw->startElement(self::FIELD_NOT_DONE_REASON);
            $this->notDoneReason->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patient)) {
            $xw->startElement(self::FIELD_PATIENT);
            $this->patient->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->date) && $this->date->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATE);
            $this->date->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->name) && $this->name->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_NAME);
            $this->name->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->relationship)) {
            $xw->startElement(self::FIELD_RELATIONSHIP);
            $this->relationship->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->gender)) {
            $xw->startElement(self::FIELD_GENDER);
            $this->gender->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->bornPeriod)) {
            $xw->startElement(self::FIELD_BORN_PERIOD);
            $this->bornPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->bornDate) && $this->bornDate->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_BORN_DATE);
            $this->bornDate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->bornString) && $this->bornString->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_BORN_STRING);
            $this->bornString->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->ageAge)) {
            $xw->startElement(self::FIELD_AGE_AGE);
            $this->ageAge->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->ageRange)) {
            $xw->startElement(self::FIELD_AGE_RANGE);
            $this->ageRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->ageString) && $this->ageString->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_AGE_STRING);
            $this->ageString->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->estimatedAge) && $this->estimatedAge->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ESTIMATED_AGE);
            $this->estimatedAge->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->deceasedBoolean) && $this->deceasedBoolean->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DECEASED_BOOLEAN);
            $this->deceasedBoolean->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->deceasedAge)) {
            $xw->startElement(self::FIELD_DECEASED_AGE);
            $this->deceasedAge->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->deceasedRange)) {
            $xw->startElement(self::FIELD_DECEASED_RANGE);
            $this->deceasedRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->deceasedDate) && $this->deceasedDate->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DECEASED_DATE);
            $this->deceasedDate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->deceasedString) && $this->deceasedString->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DECEASED_STRING);
            $this->deceasedString->xmlSerialize($xw, $config);
            $xw->endElement();
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
        if (isset($this->note)) {
            foreach ($this->note as $v) {
                $xw->startElement(self::FIELD_NOTE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->condition)) {
            foreach ($this->condition as $v) {
                $xw->startElement(self::FIELD_CONDITION);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRFamilyMemberHistory)) {
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
            if (is_array($json[self::FIELD_IDENTIFIER])) {
                foreach($json[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $type->addIdentifier($v);
                    } else {
                        $type->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($json[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $type->addIdentifier($json[self::FIELD_IDENTIFIER]);
            } else {
                $type->addIdentifier(new FHIRIdentifier($json[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($json[self::FIELD_DEFINITION]) || array_key_exists(self::FIELD_DEFINITION, $json)) {
            if (is_array($json[self::FIELD_DEFINITION])) {
                foreach($json[self::FIELD_DEFINITION] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addDefinition($v);
                    } else {
                        $type->addDefinition(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_DEFINITION] instanceof FHIRReference) {
                $type->addDefinition($json[self::FIELD_DEFINITION]);
            } else {
                $type->addDefinition(new FHIRReference($json[self::FIELD_DEFINITION]));
            }
        }
        if (isset($json[self::FIELD_STATUS]) || isset($json[self::FIELD_STATUS_EXT]) || array_key_exists(self::FIELD_STATUS, $json) || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $ext = (isset($json[self::FIELD_STATUS_EXT]) && is_array($json[self::FIELD_STATUS_EXT])) ? $json[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRFamilyHistoryStatus) {
                    $type->setStatus($value);
                } else if (is_array($value)) {
                    $type->setStatus(new FHIRFamilyHistoryStatus(array_merge($ext, $value)));
                } else {
                    $type->setStatus(new FHIRFamilyHistoryStatus([FHIRFamilyHistoryStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setStatus(new FHIRFamilyHistoryStatus($ext));
            } else {
                $type->setStatus(new FHIRFamilyHistoryStatus(null));
            }
        }
        if (isset($json[self::FIELD_NOT_DONE]) || isset($json[self::FIELD_NOT_DONE_EXT]) || array_key_exists(self::FIELD_NOT_DONE, $json) || array_key_exists(self::FIELD_NOT_DONE_EXT, $json)) {
            $value = $json[self::FIELD_NOT_DONE] ?? null;
            $ext = (isset($json[self::FIELD_NOT_DONE_EXT]) && is_array($json[self::FIELD_NOT_DONE_EXT])) ? $json[self::FIELD_NOT_DONE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setNotDone($value);
                } else if (is_array($value)) {
                    $type->setNotDone(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setNotDone(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setNotDone(new FHIRBoolean($ext));
            } else {
                $type->setNotDone(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_NOT_DONE_REASON]) || array_key_exists(self::FIELD_NOT_DONE_REASON, $json)) {
            if ($json[self::FIELD_NOT_DONE_REASON] instanceof FHIRCodeableConcept) {
                $type->setNotDoneReason($json[self::FIELD_NOT_DONE_REASON]);
            } else {
                $type->setNotDoneReason(new FHIRCodeableConcept($json[self::FIELD_NOT_DONE_REASON]));
            }
        }
        if (isset($json[self::FIELD_PATIENT]) || array_key_exists(self::FIELD_PATIENT, $json)) {
            if ($json[self::FIELD_PATIENT] instanceof FHIRReference) {
                $type->setPatient($json[self::FIELD_PATIENT]);
            } else {
                $type->setPatient(new FHIRReference($json[self::FIELD_PATIENT]));
            }
        }
        if (isset($json[self::FIELD_DATE]) || isset($json[self::FIELD_DATE_EXT]) || array_key_exists(self::FIELD_DATE, $json) || array_key_exists(self::FIELD_DATE_EXT, $json)) {
            $value = $json[self::FIELD_DATE] ?? null;
            $ext = (isset($json[self::FIELD_DATE_EXT]) && is_array($json[self::FIELD_DATE_EXT])) ? $json[self::FIELD_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $type->setDate($value);
                } else if (is_array($value)) {
                    $type->setDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $type->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDate(new FHIRDateTime($ext));
            } else {
                $type->setDate(new FHIRDateTime(null));
            }
        }
        if (isset($json[self::FIELD_NAME]) || isset($json[self::FIELD_NAME_EXT]) || array_key_exists(self::FIELD_NAME, $json) || array_key_exists(self::FIELD_NAME_EXT, $json)) {
            $value = $json[self::FIELD_NAME] ?? null;
            $ext = (isset($json[self::FIELD_NAME_EXT]) && is_array($json[self::FIELD_NAME_EXT])) ? $json[self::FIELD_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setName($value);
                } else if (is_array($value)) {
                    $type->setName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setName(new FHIRString($ext));
            } else {
                $type->setName(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_RELATIONSHIP]) || array_key_exists(self::FIELD_RELATIONSHIP, $json)) {
            if ($json[self::FIELD_RELATIONSHIP] instanceof FHIRCodeableConcept) {
                $type->setRelationship($json[self::FIELD_RELATIONSHIP]);
            } else {
                $type->setRelationship(new FHIRCodeableConcept($json[self::FIELD_RELATIONSHIP]));
            }
        }
        if (isset($json[self::FIELD_GENDER]) || isset($json[self::FIELD_GENDER_EXT]) || array_key_exists(self::FIELD_GENDER, $json) || array_key_exists(self::FIELD_GENDER_EXT, $json)) {
            $value = $json[self::FIELD_GENDER] ?? null;
            $ext = (isset($json[self::FIELD_GENDER_EXT]) && is_array($json[self::FIELD_GENDER_EXT])) ? $json[self::FIELD_GENDER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAdministrativeGender) {
                    $type->setGender($value);
                } else if (is_array($value)) {
                    $type->setGender(new FHIRAdministrativeGender(array_merge($ext, $value)));
                } else {
                    $type->setGender(new FHIRAdministrativeGender([FHIRAdministrativeGender::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setGender(new FHIRAdministrativeGender($ext));
            } else {
                $type->setGender(new FHIRAdministrativeGender(null));
            }
        }
        if (isset($json[self::FIELD_BORN_PERIOD]) || array_key_exists(self::FIELD_BORN_PERIOD, $json)) {
            if ($json[self::FIELD_BORN_PERIOD] instanceof FHIRPeriod) {
                $type->setBornPeriod($json[self::FIELD_BORN_PERIOD]);
            } else {
                $type->setBornPeriod(new FHIRPeriod($json[self::FIELD_BORN_PERIOD]));
            }
        }
        if (isset($json[self::FIELD_BORN_DATE]) || isset($json[self::FIELD_BORN_DATE_EXT]) || array_key_exists(self::FIELD_BORN_DATE, $json) || array_key_exists(self::FIELD_BORN_DATE_EXT, $json)) {
            $value = $json[self::FIELD_BORN_DATE] ?? null;
            $ext = (isset($json[self::FIELD_BORN_DATE_EXT]) && is_array($json[self::FIELD_BORN_DATE_EXT])) ? $json[self::FIELD_BORN_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $type->setBornDate($value);
                } else if (is_array($value)) {
                    $type->setBornDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $type->setBornDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setBornDate(new FHIRDate($ext));
            } else {
                $type->setBornDate(new FHIRDate(null));
            }
        }
        if (isset($json[self::FIELD_BORN_STRING]) || isset($json[self::FIELD_BORN_STRING_EXT]) || array_key_exists(self::FIELD_BORN_STRING, $json) || array_key_exists(self::FIELD_BORN_STRING_EXT, $json)) {
            $value = $json[self::FIELD_BORN_STRING] ?? null;
            $ext = (isset($json[self::FIELD_BORN_STRING_EXT]) && is_array($json[self::FIELD_BORN_STRING_EXT])) ? $json[self::FIELD_BORN_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setBornString($value);
                } else if (is_array($value)) {
                    $type->setBornString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setBornString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setBornString(new FHIRString($ext));
            } else {
                $type->setBornString(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_AGE_AGE]) || array_key_exists(self::FIELD_AGE_AGE, $json)) {
            if ($json[self::FIELD_AGE_AGE] instanceof FHIRAge) {
                $type->setAgeAge($json[self::FIELD_AGE_AGE]);
            } else {
                $type->setAgeAge(new FHIRAge($json[self::FIELD_AGE_AGE]));
            }
        }
        if (isset($json[self::FIELD_AGE_RANGE]) || array_key_exists(self::FIELD_AGE_RANGE, $json)) {
            if ($json[self::FIELD_AGE_RANGE] instanceof FHIRRange) {
                $type->setAgeRange($json[self::FIELD_AGE_RANGE]);
            } else {
                $type->setAgeRange(new FHIRRange($json[self::FIELD_AGE_RANGE]));
            }
        }
        if (isset($json[self::FIELD_AGE_STRING]) || isset($json[self::FIELD_AGE_STRING_EXT]) || array_key_exists(self::FIELD_AGE_STRING, $json) || array_key_exists(self::FIELD_AGE_STRING_EXT, $json)) {
            $value = $json[self::FIELD_AGE_STRING] ?? null;
            $ext = (isset($json[self::FIELD_AGE_STRING_EXT]) && is_array($json[self::FIELD_AGE_STRING_EXT])) ? $json[self::FIELD_AGE_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setAgeString($value);
                } else if (is_array($value)) {
                    $type->setAgeString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setAgeString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setAgeString(new FHIRString($ext));
            } else {
                $type->setAgeString(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_ESTIMATED_AGE]) || isset($json[self::FIELD_ESTIMATED_AGE_EXT]) || array_key_exists(self::FIELD_ESTIMATED_AGE, $json) || array_key_exists(self::FIELD_ESTIMATED_AGE_EXT, $json)) {
            $value = $json[self::FIELD_ESTIMATED_AGE] ?? null;
            $ext = (isset($json[self::FIELD_ESTIMATED_AGE_EXT]) && is_array($json[self::FIELD_ESTIMATED_AGE_EXT])) ? $json[self::FIELD_ESTIMATED_AGE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setEstimatedAge($value);
                } else if (is_array($value)) {
                    $type->setEstimatedAge(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setEstimatedAge(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setEstimatedAge(new FHIRBoolean($ext));
            } else {
                $type->setEstimatedAge(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_DECEASED_BOOLEAN]) || isset($json[self::FIELD_DECEASED_BOOLEAN_EXT]) || array_key_exists(self::FIELD_DECEASED_BOOLEAN, $json) || array_key_exists(self::FIELD_DECEASED_BOOLEAN_EXT, $json)) {
            $value = $json[self::FIELD_DECEASED_BOOLEAN] ?? null;
            $ext = (isset($json[self::FIELD_DECEASED_BOOLEAN_EXT]) && is_array($json[self::FIELD_DECEASED_BOOLEAN_EXT])) ? $json[self::FIELD_DECEASED_BOOLEAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setDeceasedBoolean($value);
                } else if (is_array($value)) {
                    $type->setDeceasedBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setDeceasedBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDeceasedBoolean(new FHIRBoolean($ext));
            } else {
                $type->setDeceasedBoolean(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_DECEASED_AGE]) || array_key_exists(self::FIELD_DECEASED_AGE, $json)) {
            if ($json[self::FIELD_DECEASED_AGE] instanceof FHIRAge) {
                $type->setDeceasedAge($json[self::FIELD_DECEASED_AGE]);
            } else {
                $type->setDeceasedAge(new FHIRAge($json[self::FIELD_DECEASED_AGE]));
            }
        }
        if (isset($json[self::FIELD_DECEASED_RANGE]) || array_key_exists(self::FIELD_DECEASED_RANGE, $json)) {
            if ($json[self::FIELD_DECEASED_RANGE] instanceof FHIRRange) {
                $type->setDeceasedRange($json[self::FIELD_DECEASED_RANGE]);
            } else {
                $type->setDeceasedRange(new FHIRRange($json[self::FIELD_DECEASED_RANGE]));
            }
        }
        if (isset($json[self::FIELD_DECEASED_DATE]) || isset($json[self::FIELD_DECEASED_DATE_EXT]) || array_key_exists(self::FIELD_DECEASED_DATE, $json) || array_key_exists(self::FIELD_DECEASED_DATE_EXT, $json)) {
            $value = $json[self::FIELD_DECEASED_DATE] ?? null;
            $ext = (isset($json[self::FIELD_DECEASED_DATE_EXT]) && is_array($json[self::FIELD_DECEASED_DATE_EXT])) ? $json[self::FIELD_DECEASED_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $type->setDeceasedDate($value);
                } else if (is_array($value)) {
                    $type->setDeceasedDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $type->setDeceasedDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDeceasedDate(new FHIRDate($ext));
            } else {
                $type->setDeceasedDate(new FHIRDate(null));
            }
        }
        if (isset($json[self::FIELD_DECEASED_STRING]) || isset($json[self::FIELD_DECEASED_STRING_EXT]) || array_key_exists(self::FIELD_DECEASED_STRING, $json) || array_key_exists(self::FIELD_DECEASED_STRING_EXT, $json)) {
            $value = $json[self::FIELD_DECEASED_STRING] ?? null;
            $ext = (isset($json[self::FIELD_DECEASED_STRING_EXT]) && is_array($json[self::FIELD_DECEASED_STRING_EXT])) ? $json[self::FIELD_DECEASED_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setDeceasedString($value);
                } else if (is_array($value)) {
                    $type->setDeceasedString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setDeceasedString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDeceasedString(new FHIRString($ext));
            } else {
                $type->setDeceasedString(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_REASON_CODE]) || array_key_exists(self::FIELD_REASON_CODE, $json)) {
            if (is_array($json[self::FIELD_REASON_CODE])) {
                foreach($json[self::FIELD_REASON_CODE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addReasonCode($v);
                    } else {
                        $type->addReasonCode(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_REASON_CODE] instanceof FHIRCodeableConcept) {
                $type->addReasonCode($json[self::FIELD_REASON_CODE]);
            } else {
                $type->addReasonCode(new FHIRCodeableConcept($json[self::FIELD_REASON_CODE]));
            }
        }
        if (isset($json[self::FIELD_REASON_REFERENCE]) || array_key_exists(self::FIELD_REASON_REFERENCE, $json)) {
            if (is_array($json[self::FIELD_REASON_REFERENCE])) {
                foreach($json[self::FIELD_REASON_REFERENCE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addReasonReference($v);
                    } else {
                        $type->addReasonReference(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_REASON_REFERENCE] instanceof FHIRReference) {
                $type->addReasonReference($json[self::FIELD_REASON_REFERENCE]);
            } else {
                $type->addReasonReference(new FHIRReference($json[self::FIELD_REASON_REFERENCE]));
            }
        }
        if (isset($json[self::FIELD_NOTE]) || array_key_exists(self::FIELD_NOTE, $json)) {
            if (is_array($json[self::FIELD_NOTE])) {
                foreach($json[self::FIELD_NOTE] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $type->addNote($v);
                    } else {
                        $type->addNote(new FHIRAnnotation($v));
                    }
                }
            } elseif ($json[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $type->addNote($json[self::FIELD_NOTE]);
            } else {
                $type->addNote(new FHIRAnnotation($json[self::FIELD_NOTE]));
            }
        }
        if (isset($json[self::FIELD_CONDITION]) || array_key_exists(self::FIELD_CONDITION, $json)) {
            if (is_array($json[self::FIELD_CONDITION])) {
                foreach($json[self::FIELD_CONDITION] as $v) {
                    if ($v instanceof FHIRFamilyMemberHistoryCondition) {
                        $type->addCondition($v);
                    } else {
                        $type->addCondition(new FHIRFamilyMemberHistoryCondition($v));
                    }
                }
            } elseif ($json[self::FIELD_CONDITION] instanceof FHIRFamilyMemberHistoryCondition) {
                $type->addCondition($json[self::FIELD_CONDITION]);
            } else {
                $type->addCondition(new FHIRFamilyMemberHistoryCondition($json[self::FIELD_CONDITION]));
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
        if (isset($this->notDone)) {
            if (null !== ($val = $this->notDone->getValue())) {
                $out->notDone = $val;
            }
            $ext = $this->notDone->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_notDone = $ext;
            }
        }
        if (isset($this->notDoneReason)) {
            $out->notDoneReason = $this->notDoneReason;
        }
        if (isset($this->patient)) {
            $out->patient = $this->patient;
        }
        if (isset($this->date)) {
            if (null !== ($val = $this->date->getValue())) {
                $out->date = $val;
            }
            $ext = $this->date->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_date = $ext;
            }
        }
        if (isset($this->name)) {
            if (null !== ($val = $this->name->getValue())) {
                $out->name = $val;
            }
            $ext = $this->name->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_name = $ext;
            }
        }
        if (isset($this->relationship)) {
            $out->relationship = $this->relationship;
        }
        if (isset($this->gender)) {
            if (null !== ($val = $this->gender->getValue())) {
                $out->gender = $val;
            }
            $ext = $this->gender->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_gender = $ext;
            }
        }
        if (isset($this->bornPeriod)) {
            $out->bornPeriod = $this->bornPeriod;
        }
        if (isset($this->bornDate)) {
            if (null !== ($val = $this->bornDate->getValue())) {
                $out->bornDate = $val;
            }
            $ext = $this->bornDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_bornDate = $ext;
            }
        }
        if (isset($this->bornString)) {
            if (null !== ($val = $this->bornString->getValue())) {
                $out->bornString = $val;
            }
            $ext = $this->bornString->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_bornString = $ext;
            }
        }
        if (isset($this->ageAge)) {
            $out->ageAge = $this->ageAge;
        }
        if (isset($this->ageRange)) {
            $out->ageRange = $this->ageRange;
        }
        if (isset($this->ageString)) {
            if (null !== ($val = $this->ageString->getValue())) {
                $out->ageString = $val;
            }
            $ext = $this->ageString->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_ageString = $ext;
            }
        }
        if (isset($this->estimatedAge)) {
            if (null !== ($val = $this->estimatedAge->getValue())) {
                $out->estimatedAge = $val;
            }
            $ext = $this->estimatedAge->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_estimatedAge = $ext;
            }
        }
        if (isset($this->deceasedBoolean)) {
            if (null !== ($val = $this->deceasedBoolean->getValue())) {
                $out->deceasedBoolean = $val;
            }
            $ext = $this->deceasedBoolean->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_deceasedBoolean = $ext;
            }
        }
        if (isset($this->deceasedAge)) {
            $out->deceasedAge = $this->deceasedAge;
        }
        if (isset($this->deceasedRange)) {
            $out->deceasedRange = $this->deceasedRange;
        }
        if (isset($this->deceasedDate)) {
            if (null !== ($val = $this->deceasedDate->getValue())) {
                $out->deceasedDate = $val;
            }
            $ext = $this->deceasedDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_deceasedDate = $ext;
            }
        }
        if (isset($this->deceasedString)) {
            if (null !== ($val = $this->deceasedString->getValue())) {
                $out->deceasedString = $val;
            }
            $ext = $this->deceasedString->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_deceasedString = $ext;
            }
        }
        if (isset($this->reasonCode) && [] !== $this->reasonCode) {
            $out->reasonCode = $this->reasonCode;
        }
        if (isset($this->reasonReference) && [] !== $this->reasonReference) {
            $out->reasonReference = $this->reasonReference;
        }
        if (isset($this->note) && [] !== $this->note) {
            $out->note = $this->note;
        }
        if (isset($this->condition) && [] !== $this->condition) {
            $out->condition = $this->condition;
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
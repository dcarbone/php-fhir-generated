<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 00:19+0000
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
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
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRFamilyHistoryStatus;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionTypeMap;

/**
 * Significant health conditions for a person related to the patient relevant in
 * the context of care for the patient.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRFamilyMemberHistory extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY;

    /* class_default.php:48 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_IDENTIFIER_EXT = '_identifier';
    public const FIELD_INSTANTIATES_CANONICAL = 'instantiatesCanonical';
    public const FIELD_INSTANTIATES_CANONICAL_EXT = '_instantiatesCanonical';
    public const FIELD_INSTANTIATES_URI = 'instantiatesUri';
    public const FIELD_INSTANTIATES_URI_EXT = '_instantiatesUri';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_DATA_ABSENT_REASON = 'dataAbsentReason';
    public const FIELD_PATIENT = 'patient';
    public const FIELD_DATE = 'date';
    public const FIELD_DATE_EXT = '_date';
    public const FIELD_NAME = 'name';
    public const FIELD_NAME_EXT = '_name';
    public const FIELD_RELATIONSHIP = 'relationship';
    public const FIELD_SEX = 'sex';
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

    /* class_default.php:67 */
    private static array $_validationRules = [
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

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_NAME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_BORN_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_BORN_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_AGE_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ESTIMATED_AGE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DECEASED_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DECEASED_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DECEASED_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this family member history by the performer or
     * other systems which remain constant as the resource is updated and propagates
     * from server to server.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other
     * definition that is adhered to in whole or in part by this FamilyMemberHistory.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical[] 
     */
    protected array $instantiatesCanonical;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or
     * other definition that is adhered to in whole or in part by this
     * FamilyMemberHistory.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri[] 
     */
    protected array $instantiatesUri;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the status of the record of the family history of a specific
     * family member.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRFamilyHistoryStatus 
     */
    protected FHIRFamilyHistoryStatus $status;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the family member's history is not available.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $dataAbsentReason;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who this history concerns.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference 
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
     * The date (and possibly time) when the family member history was recorded or last
     * updated.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $date;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with
     * the red hair".
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $relationship;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The birth sex of the family member.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $sex;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $bornDate;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $bornString;
    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age of the relative at the time the family member history is recorded.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRAge 
     */
    protected FHIRAge $ageAge;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age of the relative at the time the family member history is recorded.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $ageRange;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The age of the relative at the time the family member history is recorded.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $ageString;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates that the age value specified is an estimated value.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $estimatedAge;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRAge 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $deceasedDate;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAnnotation[] 
     */
    protected array $note;
    /**
     * Significant health conditions for a person related to the patient relevant in
     * the context of care for the patient.
     *
     * The significant Conditions (or condition) that the family member had. This is a
     * repeating section to allow a system to represent more than one condition per
     * resource, though there is nothing stopping multiple resources - one per
     * condition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition[] 
     */
    protected array $condition;

    /* constructor.php:63 */
    /**
     * FHIRFamilyMemberHistory Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCanonicalPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical[] $instantiatesCanonical
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri[] $instantiatesUri
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRFamilyHistoryStatus $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $dataAbsentReason
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $patient
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $date
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $name
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $relationship
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $sex
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod $bornPeriod
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate $bornDate
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $bornString
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRAge $ageAge
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange $ageRange
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $ageString
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean $estimatedAge
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean $deceasedBoolean
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRAge $deceasedAge
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange $deceasedRange
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate $deceasedDate
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $deceasedString
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] $reasonCode
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] $reasonReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAnnotation[] $note
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition[] $condition
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRStringPrimitive|FHIRString $id = null,
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
                                null|FHIRFamilyHistoryStatus $status = null,
                                null|FHIRCodeableConcept $dataAbsentReason = null,
                                null|FHIRReference $patient = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date = null,
                                null|string|FHIRStringPrimitive|FHIRString $name = null,
                                null|FHIRCodeableConcept $relationship = null,
                                null|FHIRCodeableConcept $sex = null,
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
        if (null !== $instantiatesCanonical) {
            $this->setInstantiatesCanonical(...$instantiatesCanonical);
        }
        if (null !== $instantiatesUri) {
            $this->setInstantiatesUri(...$instantiatesUri);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $dataAbsentReason) {
            $this->setDataAbsentReason($dataAbsentReason);
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
        if (null !== $sex) {
            $this->setSex($sex);
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

    /* class_default.php:137 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:149 */
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this family member history by the performer or
     * other systems which remain constant as the resource is updated and propagates
     * from server to server.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier>
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
     * Business identifiers assigned to this family member history by the performer or
     * other systems which remain constant as the resource is updated and propagates
     * from server to server.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier $identifier
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
     * Business identifiers assigned to this family member history by the performer or
     * other systems which remain constant as the resource is updated and propagates
     * from server to server.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        if ([] === $identifier) {
            unset($this->identifier);
            return $this;
        }
        $this->identifier = [];
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->identifier[] = $v;
            } else {
                $this->identifier[] = new FHIRIdentifier(value: $v);
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
     * definition that is adhered to in whole or in part by this FamilyMemberHistory.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical[]
     */
    public function getInstantiatesCanonical(): array
    {
        return $this->instantiatesCanonical ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical>
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
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other
     * definition that is adhered to in whole or in part by this FamilyMemberHistory.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical $instantiatesCanonical
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
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other
     * definition that is adhered to in whole or in part by this FamilyMemberHistory.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical ...$instantiatesCanonical
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
     * The URL pointing to an externally maintained protocol, guideline, orderset or
     * other definition that is adhered to in whole or in part by this
     * FamilyMemberHistory.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri[]
     */
    public function getInstantiatesUri(): array
    {
        return $this->instantiatesUri ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri>
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
     * The URL pointing to an externally maintained protocol, guideline, orderset or
     * other definition that is adhered to in whole or in part by this
     * FamilyMemberHistory.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri $instantiatesUri
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
     * The URL pointing to an externally maintained protocol, guideline, orderset or
     * other definition that is adhered to in whole or in part by this
     * FamilyMemberHistory.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri ...$instantiatesUri
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the status of the record of the family history of a specific
     * family member.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRFamilyHistoryStatus
     */
    public function getStatus(): null|FHIRFamilyHistoryStatus
    {
        return $this->status ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the status of the record of the family history of a specific
     * family member.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRFamilyHistoryStatus $status
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStatus(null|FHIRFamilyHistoryStatus $status,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
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
     * Describes why the family member's history is not available.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getDataAbsentReason(): null|FHIRCodeableConcept
    {
        return $this->dataAbsentReason ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the family member's history is not available.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $dataAbsentReason
     * @return static
     */
    public function setDataAbsentReason(null|FHIRCodeableConcept $dataAbsentReason): self
    {
        if (null === $dataAbsentReason) {
            unset($this->dataAbsentReason);
            return $this;
        }
        $this->dataAbsentReason = $dataAbsentReason;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who this history concerns.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $patient
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
     * The date (and possibly time) when the family member history was recorded or last
     * updated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime
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
     * The date (and possibly time) when the family member history was recorded or last
     * updated.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $date
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $date) {
            unset($this->date);
            return $this;
        }
        if (!($date instanceof FHIRDateTime)) {
            $date = new FHIRDateTime(value: $date);
        }
        $this->date = $date;
        if ($this->_valueXMLLocations[self::FIELD_DATE] !== $valueXMLLocation) {
            $this->_setDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the date element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DATE];
    }

    /**
     * Set the location the "value" field of the date element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DATE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with
     * the red hair".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getName(): null|FHIRString
    {
        return $this->name ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with
     * the red hair".
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $name
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setName(null|string|FHIRStringPrimitive|FHIRString $name,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $name) {
            unset($this->name);
            return $this;
        }
        if (!($name instanceof FHIRString)) {
            $name = new FHIRString(value: $name);
        }
        $this->name = $name;
        if ($this->_valueXMLLocations[self::FIELD_NAME] !== $valueXMLLocation) {
            $this->_setNameValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the name element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getNameValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_NAME];
    }

    /**
     * Set the location the "value" field of the name element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setNameValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_NAME] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $relationship
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The birth sex of the family member.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getSex(): null|FHIRCodeableConcept
    {
        return $this->sex ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The birth sex of the family member.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $sex
     * @return static
     */
    public function setSex(null|FHIRCodeableConcept $sex): self
    {
        if (null === $sex) {
            unset($this->sex);
            return $this;
        }
        $this->sex = $sex;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod $bornPeriod
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate $bornDate
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setBornDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $bornDate,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $bornDate) {
            unset($this->bornDate);
            return $this;
        }
        if (!($bornDate instanceof FHIRDate)) {
            $bornDate = new FHIRDate(value: $bornDate);
        }
        $this->bornDate = $bornDate;
        if ($this->_valueXMLLocations[self::FIELD_BORN_DATE] !== $valueXMLLocation) {
            $this->_setBornDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the bornDate element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getBornDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_BORN_DATE];
    }

    /**
     * Set the location the "value" field of the bornDate element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setBornDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_BORN_DATE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getBornString(): null|FHIRString
    {
        return $this->bornString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $bornString
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setBornString(null|string|FHIRStringPrimitive|FHIRString $bornString,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $bornString) {
            unset($this->bornString);
            return $this;
        }
        if (!($bornString instanceof FHIRString)) {
            $bornString = new FHIRString(value: $bornString);
        }
        $this->bornString = $bornString;
        if ($this->_valueXMLLocations[self::FIELD_BORN_STRING] !== $valueXMLLocation) {
            $this->_setBornStringValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the bornString element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getBornStringValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_BORN_STRING];
    }

    /**
     * Set the location the "value" field of the bornString element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setBornStringValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_BORN_STRING] = $valueXMLLocation;
        return $this;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age of the relative at the time the family member history is recorded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRAge
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRAge $ageAge
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange $ageRange
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
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The age of the relative at the time the family member history is recorded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getAgeString(): null|FHIRString
    {
        return $this->ageString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The age of the relative at the time the family member history is recorded.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $ageString
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAgeString(null|string|FHIRStringPrimitive|FHIRString $ageString,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $ageString) {
            unset($this->ageString);
            return $this;
        }
        if (!($ageString instanceof FHIRString)) {
            $ageString = new FHIRString(value: $ageString);
        }
        $this->ageString = $ageString;
        if ($this->_valueXMLLocations[self::FIELD_AGE_STRING] !== $valueXMLLocation) {
            $this->_setAgeStringValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the ageString element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAgeStringValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_AGE_STRING];
    }

    /**
     * Set the location the "value" field of the ageString element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAgeStringValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_AGE_STRING] = $valueXMLLocation;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates that the age value specified is an estimated value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean
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
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean $estimatedAge
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setEstimatedAge(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $estimatedAge,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $estimatedAge) {
            unset($this->estimatedAge);
            return $this;
        }
        if (!($estimatedAge instanceof FHIRBoolean)) {
            $estimatedAge = new FHIRBoolean(value: $estimatedAge);
        }
        $this->estimatedAge = $estimatedAge;
        if ($this->_valueXMLLocations[self::FIELD_ESTIMATED_AGE] !== $valueXMLLocation) {
            $this->_setEstimatedAgeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the estimatedAge element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getEstimatedAgeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ESTIMATED_AGE];
    }

    /**
     * Set the location the "value" field of the estimatedAge element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setEstimatedAgeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ESTIMATED_AGE] = $valueXMLLocation;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean
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
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean $deceasedBoolean
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDeceasedBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $deceasedBoolean,
                                       ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $deceasedBoolean) {
            unset($this->deceasedBoolean);
            return $this;
        }
        if (!($deceasedBoolean instanceof FHIRBoolean)) {
            $deceasedBoolean = new FHIRBoolean(value: $deceasedBoolean);
        }
        $this->deceasedBoolean = $deceasedBoolean;
        if ($this->_valueXMLLocations[self::FIELD_DECEASED_BOOLEAN] !== $valueXMLLocation) {
            $this->_setDeceasedBooleanValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the deceasedBoolean element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDeceasedBooleanValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DECEASED_BOOLEAN];
    }

    /**
     * Set the location the "value" field of the deceasedBoolean element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDeceasedBooleanValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DECEASED_BOOLEAN] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRAge
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRAge $deceasedAge
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange $deceasedRange
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate $deceasedDate
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDeceasedDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $deceasedDate,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $deceasedDate) {
            unset($this->deceasedDate);
            return $this;
        }
        if (!($deceasedDate instanceof FHIRDate)) {
            $deceasedDate = new FHIRDate(value: $deceasedDate);
        }
        $this->deceasedDate = $deceasedDate;
        if ($this->_valueXMLLocations[self::FIELD_DECEASED_DATE] !== $valueXMLLocation) {
            $this->_setDeceasedDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the deceasedDate element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDeceasedDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DECEASED_DATE];
    }

    /**
     * Set the location the "value" field of the deceasedDate element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDeceasedDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DECEASED_DATE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getDeceasedString(): null|FHIRString
    {
        return $this->deceasedString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $deceasedString
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDeceasedString(null|string|FHIRStringPrimitive|FHIRString $deceasedString,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $deceasedString) {
            unset($this->deceasedString);
            return $this;
        }
        if (!($deceasedString instanceof FHIRString)) {
            $deceasedString = new FHIRString(value: $deceasedString);
        }
        $this->deceasedString = $deceasedString;
        if ($this->_valueXMLLocations[self::FIELD_DECEASED_STRING] !== $valueXMLLocation) {
            $this->_setDeceasedStringValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the deceasedString element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDeceasedStringValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DECEASED_STRING];
    }

    /**
     * Set the location the "value" field of the deceasedString element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDeceasedStringValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DECEASED_STRING] = $valueXMLLocation;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode(): array
    {
        return $this->reasonCode ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
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
     * Describes why the family member history occurred in coded or textual form.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $reasonCode
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$reasonCode
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
     * Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse
     * that justifies this family member history event.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[]
     */
    public function getReasonReference(): array
    {
        return $this->reasonReference ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference>
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
     * Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse
     * that justifies this family member history event.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $reasonReference
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference ...$reasonReference
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
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This property allows a non condition-specific note to the made about the related
     * person. Ideally, the note would be in the condition property, but this is not
     * always possible.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAnnotation[]
     */
    public function getNote(): array
    {
        return $this->note ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAnnotation>
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
     * This property allows a non condition-specific note to the made about the related
     * person. Ideally, the note would be in the condition property, but this is not
     * always possible.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAnnotation $note
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAnnotation ...$note
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
     * Significant health conditions for a person related to the patient relevant in
     * the context of care for the patient.
     *
     * The significant Conditions (or condition) that the family member had. This is a
     * repeating section to allow a system to represent more than one condition per
     * resource, though there is nothing stopping multiple resources - one per
     * condition.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition[]
     */
    public function getCondition(): array
    {
        return $this->condition ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition>
     */
    public function getConditionIterator(): iterable
    {
        if (!isset($this->condition)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->condition);
    }

    /**
     * Significant health conditions for a person related to the patient relevant in
     * the context of care for the patient.
     *
     * The significant Conditions (or condition) that the family member had. This is a
     * repeating section to allow a system to represent more than one condition per
     * resource, though there is nothing stopping multiple resources - one per
     * condition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition $condition
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
     * Significant health conditions for a person related to the patient relevant in
     * the context of care for the patient.
     *
     * The significant Conditions (or condition) that the family member had. This is a
     * repeating section to allow a system to represent more than one condition per
     * resource, though there is nothing stopping multiple resources - one per
     * condition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition ...$condition
     * @return static
     */
    public function setCondition(FHIRFamilyMemberHistoryCondition ...$condition): self
    {
        if ([] === $condition) {
            unset($this->condition);
            return $this;
        }
        $this->condition = $condition;
        return $this;
    }

    /* class_default.php:189 */
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
        if (isset($validationRules[self::FIELD_INSTANTIATES_CANONICAL])) {
            $v = $this->getInstantiatesCanonical();
            foreach($validationRules[self::FIELD_INSTANTIATES_CANONICAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INSTANTIATES_CANONICAL, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INSTANTIATES_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSTANTIATES_URI])) {
                        $errs[self::FIELD_INSTANTIATES_URI] = [];
                    }
                    $errs[self::FIELD_INSTANTIATES_URI][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_DATA_ABSENT_REASON])) {
            $v = $this->getDataAbsentReason();
            foreach($validationRules[self::FIELD_DATA_ABSENT_REASON] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA_ABSENT_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA_ABSENT_REASON])) {
                        $errs[self::FIELD_DATA_ABSENT_REASON] = [];
                    }
                    $errs[self::FIELD_DATA_ABSENT_REASON][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_SEX])) {
            $v = $this->getSex();
            foreach($validationRules[self::FIELD_SEX] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SEX, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEX])) {
                        $errs[self::FIELD_SEX] = [];
                    }
                    $errs[self::FIELD_SEX][$rule] = $err;
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

    /* class_default.php:213 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_ID === $cen) {
                $type->setId(FHIRString::xmlUnserialize($ce, $config));
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
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R4B\VersionContainedTypeInterface $cn */
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
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRFamilyHistoryStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_ABSENT_REASON === $cen) {
                $type->setDataAbsentReason(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATIENT === $cen) {
                $type->setPatient(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATE === $cen) {
                $type->setDate(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NAME === $cen) {
                $type->setName(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RELATIONSHIP === $cen) {
                $type->setRelationship(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SEX === $cen) {
                $type->setSex(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BORN_PERIOD === $cen) {
                $type->setBornPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BORN_DATE === $cen) {
                $type->setBornDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BORN_STRING === $cen) {
                $type->setBornString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AGE_AGE === $cen) {
                $type->setAgeAge(FHIRAge::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AGE_RANGE === $cen) {
                $type->setAgeRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AGE_STRING === $cen) {
                $type->setAgeString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ESTIMATED_AGE === $cen) {
                $type->setEstimatedAge(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DECEASED_BOOLEAN === $cen) {
                $type->setDeceasedBoolean(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DECEASED_AGE === $cen) {
                $type->setDeceasedAge(FHIRAge::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DECEASED_RANGE === $cen) {
                $type->setDeceasedRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DECEASED_DATE === $cen) {
                $type->setDeceasedDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DECEASED_STRING === $cen) {
                $type->setDeceasedString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REASON_CODE === $cen) {
                $type->addReasonCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REASON_REFERENCE === $cen) {
                $type->addReasonReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NOTE === $cen) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONDITION === $cen) {
                $type->addCondition(FHIRFamilyMemberHistoryCondition::xmlUnserialize($ce, $config));
            }        }
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
        if (isset($attributes[self::FIELD_DATE])) {
            if (isset($type->date)) {
                $type->date->setValue((string)$attributes[self::FIELD_DATE]);
                $type->_setDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDate((string)$attributes[self::FIELD_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_NAME])) {
            if (isset($type->name)) {
                $type->name->setValue((string)$attributes[self::FIELD_NAME]);
                $type->_setNameValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setName((string)$attributes[self::FIELD_NAME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_BORN_DATE])) {
            if (isset($type->bornDate)) {
                $type->bornDate->setValue((string)$attributes[self::FIELD_BORN_DATE]);
                $type->_setBornDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setBornDate((string)$attributes[self::FIELD_BORN_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_BORN_STRING])) {
            if (isset($type->bornString)) {
                $type->bornString->setValue((string)$attributes[self::FIELD_BORN_STRING]);
                $type->_setBornStringValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setBornString((string)$attributes[self::FIELD_BORN_STRING], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_AGE_STRING])) {
            if (isset($type->ageString)) {
                $type->ageString->setValue((string)$attributes[self::FIELD_AGE_STRING]);
                $type->_setAgeStringValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAgeString((string)$attributes[self::FIELD_AGE_STRING], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ESTIMATED_AGE])) {
            if (isset($type->estimatedAge)) {
                $type->estimatedAge->setValue((string)$attributes[self::FIELD_ESTIMATED_AGE]);
                $type->_setEstimatedAgeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setEstimatedAge((string)$attributes[self::FIELD_ESTIMATED_AGE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DECEASED_BOOLEAN])) {
            if (isset($type->deceasedBoolean)) {
                $type->deceasedBoolean->setValue((string)$attributes[self::FIELD_DECEASED_BOOLEAN]);
                $type->_setDeceasedBooleanValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDeceasedBoolean((string)$attributes[self::FIELD_DECEASED_BOOLEAN], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DECEASED_DATE])) {
            if (isset($type->deceasedDate)) {
                $type->deceasedDate->setValue((string)$attributes[self::FIELD_DECEASED_DATE]);
                $type->_setDeceasedDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDeceasedDate((string)$attributes[self::FIELD_DECEASED_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DECEASED_STRING])) {
            if (isset($type->deceasedString)) {
                $type->deceasedString->setValue((string)$attributes[self::FIELD_DECEASED_STRING]);
                $type->_setDeceasedStringValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDeceasedString((string)$attributes[self::FIELD_DECEASED_STRING], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('FamilyMemberHistory', $this->_getSourceXMLNS());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getFormattedValue());
        }
        if (isset($this->date) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATE]) {
            $xw->writeAttribute(self::FIELD_DATE, $this->date->_getFormattedValue());
        }
        if (isset($this->name) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NAME]) {
            $xw->writeAttribute(self::FIELD_NAME, $this->name->_getFormattedValue());
        }
        if (isset($this->bornDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_BORN_DATE]) {
            $xw->writeAttribute(self::FIELD_BORN_DATE, $this->bornDate->_getFormattedValue());
        }
        if (isset($this->bornString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_BORN_STRING]) {
            $xw->writeAttribute(self::FIELD_BORN_STRING, $this->bornString->_getFormattedValue());
        }
        if (isset($this->ageString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_AGE_STRING]) {
            $xw->writeAttribute(self::FIELD_AGE_STRING, $this->ageString->_getFormattedValue());
        }
        if (isset($this->estimatedAge) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ESTIMATED_AGE]) {
            $xw->writeAttribute(self::FIELD_ESTIMATED_AGE, $this->estimatedAge->_getFormattedValue());
        }
        if (isset($this->deceasedBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DECEASED_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_DECEASED_BOOLEAN, $this->deceasedBoolean->_getFormattedValue());
        }
        if (isset($this->deceasedDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DECEASED_DATE]) {
            $xw->writeAttribute(self::FIELD_DECEASED_DATE, $this->deceasedDate->_getFormattedValue());
        }
        if (isset($this->deceasedString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DECEASED_STRING]) {
            $xw->writeAttribute(self::FIELD_DECEASED_STRING, $this->deceasedString->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier) && [] !== $this->identifier) {
            foreach($this->identifier as $v) {
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
        if (isset($this->status)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATUS]
                || $this->status->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATUS]);
            $xw->endElement();
        }
        if (isset($this->dataAbsentReason)) {
            $xw->startElement(self::FIELD_DATA_ABSENT_REASON);
            $this->dataAbsentReason->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patient)) {
            $xw->startElement(self::FIELD_PATIENT);
            $this->patient->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->date)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATE]
                || $this->date->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATE);
            $this->date->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATE]);
            $xw->endElement();
        }
        if (isset($this->name)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NAME]
                || $this->name->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NAME);
            $this->name->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NAME]);
            $xw->endElement();
        }
        if (isset($this->relationship)) {
            $xw->startElement(self::FIELD_RELATIONSHIP);
            $this->relationship->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->sex)) {
            $xw->startElement(self::FIELD_SEX);
            $this->sex->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->bornPeriod)) {
            $xw->startElement(self::FIELD_BORN_PERIOD);
            $this->bornPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->bornDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_BORN_DATE]
                || $this->bornDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_BORN_DATE);
            $this->bornDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_BORN_DATE]);
            $xw->endElement();
        }
        if (isset($this->bornString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_BORN_STRING]
                || $this->bornString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_BORN_STRING);
            $this->bornString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_BORN_STRING]);
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
        if (isset($this->ageString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_AGE_STRING]
                || $this->ageString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_AGE_STRING);
            $this->ageString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_AGE_STRING]);
            $xw->endElement();
        }
        if (isset($this->estimatedAge)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ESTIMATED_AGE]
                || $this->estimatedAge->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ESTIMATED_AGE);
            $this->estimatedAge->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ESTIMATED_AGE]);
            $xw->endElement();
        }
        if (isset($this->deceasedBoolean)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DECEASED_BOOLEAN]
                || $this->deceasedBoolean->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DECEASED_BOOLEAN);
            $this->deceasedBoolean->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DECEASED_BOOLEAN]);
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
        if (isset($this->deceasedDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DECEASED_DATE]
                || $this->deceasedDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DECEASED_DATE);
            $this->deceasedDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DECEASED_DATE]);
            $xw->endElement();
        }
        if (isset($this->deceasedString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DECEASED_STRING]
                || $this->deceasedString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DECEASED_STRING);
            $this->deceasedString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DECEASED_STRING]);
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
     * @param string|\stdClass|array $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
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
        parent::jsonUnserialize($json, $config, $type);
        if (isset($json[self::FIELD_IDENTIFIER]) || isset($json[self::FIELD_IDENTIFIER_EXT]) || array_key_exists(self::FIELD_IDENTIFIER, $json) || array_key_exists(self::FIELD_IDENTIFIER_EXT, $json)) {
            $value = $json[self::FIELD_IDENTIFIER] ?? null;
            $ext = (array)($json[self::FIELD_IDENTIFIER_EXT] ?? []);
            if (!is_array($value)) {
                $value = [$value];
            }
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize(
                    json: [FHIRIdentifier::FIELD_VALUE => $value[$i] ?? null] + (array)($ext[$i] ?? []),
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_INSTANTIATES_CANONICAL]) || isset($json[self::FIELD_INSTANTIATES_CANONICAL_EXT]) || array_key_exists(self::FIELD_INSTANTIATES_CANONICAL, $json) || array_key_exists(self::FIELD_INSTANTIATES_CANONICAL_EXT, $json)) {
            $value = $json[self::FIELD_INSTANTIATES_CANONICAL] ?? null;
            $ext = (array)($json[self::FIELD_INSTANTIATES_CANONICAL_EXT] ?? []);
            if (!is_array($value)) {
                $value = [$value];
            }
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addInstantiatesCanonical(FHIRCanonical::jsonUnserialize(
                    json: [FHIRCanonical::FIELD_VALUE => $value[$i] ?? null] + (array)($ext[$i] ?? []),
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_INSTANTIATES_URI]) || isset($json[self::FIELD_INSTANTIATES_URI_EXT]) || array_key_exists(self::FIELD_INSTANTIATES_URI, $json) || array_key_exists(self::FIELD_INSTANTIATES_URI_EXT, $json)) {
            $value = $json[self::FIELD_INSTANTIATES_URI] ?? null;
            $ext = (array)($json[self::FIELD_INSTANTIATES_URI_EXT] ?? []);
            if (!is_array($value)) {
                $value = [$value];
            }
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addInstantiatesUri(FHIRUri::jsonUnserialize(
                    json: [FHIRUri::FIELD_VALUE => $value[$i] ?? null] + (array)($ext[$i] ?? []),
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_STATUS]) || isset($json[self::FIELD_STATUS_EXT]) || array_key_exists(self::FIELD_STATUS, $json) || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $ext = (array)($json[self::FIELD_STATUS_EXT] ?? []);
            $type->setStatus(FHIRFamilyHistoryStatus::jsonUnserialize(
                json: [FHIRFamilyHistoryStatus::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DATA_ABSENT_REASON]) || array_key_exists(self::FIELD_DATA_ABSENT_REASON, $json)) {
            $type->setDataAbsentReason(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_DATA_ABSENT_REASON],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PATIENT]) || array_key_exists(self::FIELD_PATIENT, $json)) {
            $type->setPatient(FHIRReference::jsonUnserialize(
                json: $json[self::FIELD_PATIENT],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DATE]) || isset($json[self::FIELD_DATE_EXT]) || array_key_exists(self::FIELD_DATE, $json) || array_key_exists(self::FIELD_DATE_EXT, $json)) {
            $value = $json[self::FIELD_DATE] ?? null;
            $ext = (array)($json[self::FIELD_DATE_EXT] ?? []);
            $type->setDate(FHIRDateTime::jsonUnserialize(
                json: [FHIRDateTime::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_NAME]) || isset($json[self::FIELD_NAME_EXT]) || array_key_exists(self::FIELD_NAME, $json) || array_key_exists(self::FIELD_NAME_EXT, $json)) {
            $value = $json[self::FIELD_NAME] ?? null;
            $ext = (array)($json[self::FIELD_NAME_EXT] ?? []);
            $type->setName(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_RELATIONSHIP]) || array_key_exists(self::FIELD_RELATIONSHIP, $json)) {
            $type->setRelationship(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_RELATIONSHIP],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_SEX]) || array_key_exists(self::FIELD_SEX, $json)) {
            $type->setSex(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_SEX],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_BORN_PERIOD]) || array_key_exists(self::FIELD_BORN_PERIOD, $json)) {
            $type->setBornPeriod(FHIRPeriod::jsonUnserialize(
                json: $json[self::FIELD_BORN_PERIOD],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_BORN_DATE]) || isset($json[self::FIELD_BORN_DATE_EXT]) || array_key_exists(self::FIELD_BORN_DATE, $json) || array_key_exists(self::FIELD_BORN_DATE_EXT, $json)) {
            $value = $json[self::FIELD_BORN_DATE] ?? null;
            $ext = (array)($json[self::FIELD_BORN_DATE_EXT] ?? []);
            $type->setBornDate(FHIRDate::jsonUnserialize(
                json: [FHIRDate::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_BORN_STRING]) || isset($json[self::FIELD_BORN_STRING_EXT]) || array_key_exists(self::FIELD_BORN_STRING, $json) || array_key_exists(self::FIELD_BORN_STRING_EXT, $json)) {
            $value = $json[self::FIELD_BORN_STRING] ?? null;
            $ext = (array)($json[self::FIELD_BORN_STRING_EXT] ?? []);
            $type->setBornString(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_AGE_AGE]) || array_key_exists(self::FIELD_AGE_AGE, $json)) {
            $type->setAgeAge(FHIRAge::jsonUnserialize(
                json: $json[self::FIELD_AGE_AGE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_AGE_RANGE]) || array_key_exists(self::FIELD_AGE_RANGE, $json)) {
            $type->setAgeRange(FHIRRange::jsonUnserialize(
                json: $json[self::FIELD_AGE_RANGE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_AGE_STRING]) || isset($json[self::FIELD_AGE_STRING_EXT]) || array_key_exists(self::FIELD_AGE_STRING, $json) || array_key_exists(self::FIELD_AGE_STRING_EXT, $json)) {
            $value = $json[self::FIELD_AGE_STRING] ?? null;
            $ext = (array)($json[self::FIELD_AGE_STRING_EXT] ?? []);
            $type->setAgeString(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ESTIMATED_AGE]) || isset($json[self::FIELD_ESTIMATED_AGE_EXT]) || array_key_exists(self::FIELD_ESTIMATED_AGE, $json) || array_key_exists(self::FIELD_ESTIMATED_AGE_EXT, $json)) {
            $value = $json[self::FIELD_ESTIMATED_AGE] ?? null;
            $ext = (array)($json[self::FIELD_ESTIMATED_AGE_EXT] ?? []);
            $type->setEstimatedAge(FHIRBoolean::jsonUnserialize(
                json: [FHIRBoolean::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DECEASED_BOOLEAN]) || isset($json[self::FIELD_DECEASED_BOOLEAN_EXT]) || array_key_exists(self::FIELD_DECEASED_BOOLEAN, $json) || array_key_exists(self::FIELD_DECEASED_BOOLEAN_EXT, $json)) {
            $value = $json[self::FIELD_DECEASED_BOOLEAN] ?? null;
            $ext = (array)($json[self::FIELD_DECEASED_BOOLEAN_EXT] ?? []);
            $type->setDeceasedBoolean(FHIRBoolean::jsonUnserialize(
                json: [FHIRBoolean::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DECEASED_AGE]) || array_key_exists(self::FIELD_DECEASED_AGE, $json)) {
            $type->setDeceasedAge(FHIRAge::jsonUnserialize(
                json: $json[self::FIELD_DECEASED_AGE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DECEASED_RANGE]) || array_key_exists(self::FIELD_DECEASED_RANGE, $json)) {
            $type->setDeceasedRange(FHIRRange::jsonUnserialize(
                json: $json[self::FIELD_DECEASED_RANGE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DECEASED_DATE]) || isset($json[self::FIELD_DECEASED_DATE_EXT]) || array_key_exists(self::FIELD_DECEASED_DATE, $json) || array_key_exists(self::FIELD_DECEASED_DATE_EXT, $json)) {
            $value = $json[self::FIELD_DECEASED_DATE] ?? null;
            $ext = (array)($json[self::FIELD_DECEASED_DATE_EXT] ?? []);
            $type->setDeceasedDate(FHIRDate::jsonUnserialize(
                json: [FHIRDate::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DECEASED_STRING]) || isset($json[self::FIELD_DECEASED_STRING_EXT]) || array_key_exists(self::FIELD_DECEASED_STRING, $json) || array_key_exists(self::FIELD_DECEASED_STRING_EXT, $json)) {
            $value = $json[self::FIELD_DECEASED_STRING] ?? null;
            $ext = (array)($json[self::FIELD_DECEASED_STRING_EXT] ?? []);
            $type->setDeceasedString(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_REASON_CODE]) || array_key_exists(self::FIELD_REASON_CODE, $json)) {
            $vs = $json[self::FIELD_REASON_CODE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addReasonCode(FHIRCodeableConcept::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_REASON_REFERENCE]) || array_key_exists(self::FIELD_REASON_REFERENCE, $json)) {
            $vs = $json[self::FIELD_REASON_REFERENCE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addReasonReference(FHIRReference::jsonUnserialize(
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
        if (isset($json[self::FIELD_CONDITION]) || array_key_exists(self::FIELD_CONDITION, $json)) {
            $vs = $json[self::FIELD_CONDITION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addCondition(FHIRFamilyMemberHistoryCondition::jsonUnserialize(
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
            $vals = [];
            $exts = [];
            foreach ($this->identifier as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->identifier = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_identifier = $exts;
            }
        }
        if (isset($this->instantiatesCanonical) && [] !== $this->instantiatesCanonical) {
            $vals = [];
            $exts = [];
            foreach ($this->instantiatesCanonical as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->instantiatesCanonical = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_instantiatesCanonical = $exts;
            }
        }
        if (isset($this->instantiatesUri) && [] !== $this->instantiatesUri) {
            $vals = [];
            $exts = [];
            foreach ($this->instantiatesUri as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->instantiatesUri = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_instantiatesUri = $exts;
            }
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
        if (isset($this->dataAbsentReason)) {
            $out->dataAbsentReason = $this->dataAbsentReason;
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
        if (isset($this->sex)) {
            $out->sex = $this->sex;
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
    /* class_default.php:238 */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}
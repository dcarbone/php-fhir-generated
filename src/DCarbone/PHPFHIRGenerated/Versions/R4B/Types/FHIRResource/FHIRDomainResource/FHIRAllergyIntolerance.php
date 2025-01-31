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
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAllergyIntoleranceCategory;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAllergyIntoleranceCriticality;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAllergyIntoleranceType;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
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
 * Risk of harmful or undesirable, physiological response which is unique to an
 * individual and associated with exposure to a substance.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRAllergyIntolerance extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE;

    /* class_default.php:48 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_IDENTIFIER_EXT = '_identifier';
    public const FIELD_CLINICAL_STATUS = 'clinicalStatus';
    public const FIELD_VERIFICATION_STATUS = 'verificationStatus';
    public const FIELD_TYPE = 'type';
    public const FIELD_TYPE_EXT = '_type';
    public const FIELD_CATEGORY = 'category';
    public const FIELD_CATEGORY_EXT = '_category';
    public const FIELD_CRITICALITY = 'criticality';
    public const FIELD_CRITICALITY_EXT = '_criticality';
    public const FIELD_CODE = 'code';
    public const FIELD_PATIENT = 'patient';
    public const FIELD_ENCOUNTER = 'encounter';
    public const FIELD_ONSET_DATE_TIME = 'onsetDateTime';
    public const FIELD_ONSET_DATE_TIME_EXT = '_onsetDateTime';
    public const FIELD_ONSET_AGE = 'onsetAge';
    public const FIELD_ONSET_PERIOD = 'onsetPeriod';
    public const FIELD_ONSET_RANGE = 'onsetRange';
    public const FIELD_ONSET_STRING = 'onsetString';
    public const FIELD_ONSET_STRING_EXT = '_onsetString';
    public const FIELD_RECORDED_DATE = 'recordedDate';
    public const FIELD_RECORDED_DATE_EXT = '_recordedDate';
    public const FIELD_RECORDER = 'recorder';
    public const FIELD_ASSERTER = 'asserter';
    public const FIELD_LAST_OCCURRENCE = 'lastOccurrence';
    public const FIELD_LAST_OCCURRENCE_EXT = '_lastOccurrence';
    public const FIELD_NOTE = 'note';
    public const FIELD_REACTION = 'reaction';

    /* class_default.php:67 */
    private static array $_validationRules = [
        self::FIELD_PATIENT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_TYPE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CRITICALITY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ONSET_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ONSET_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_RECORDED_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_LAST_OCCURRENCE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clinical status of the allergy or intolerance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $clinicalStatus;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Assertion about certainty associated with the propensity, or potential risk, of
     * a reaction to the identified substance (including pharmaceutical product).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $verificationStatus;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identification of the underlying physiological mechanism for the reaction risk.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAllergyIntoleranceType 
     */
    protected FHIRAllergyIntoleranceType $type;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Category of the identified substance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAllergyIntoleranceCategory[] 
     */
    protected array $category;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the
     * identified substance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAllergyIntoleranceCriticality 
     */
    protected FHIRAllergyIntoleranceCriticality $criticality;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $code;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient who has the allergy or intolerance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $patient;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter when the allergy or intolerance was asserted.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $encounter;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $onsetDateTime;
    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRAge 
     */
    protected FHIRAge $onsetAge;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $onsetPeriod;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $onsetRange;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $onsetString;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $recordedDate;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual who recorded the record and takes responsibility for its content.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $recorder;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source of the information about the allergy that is recorded.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $asserter;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $lastOccurrence;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional narrative about the propensity for the Adverse Reaction, not captured
     * in other fields.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAnnotation[] 
     */
    protected array $note;
    /**
     * Risk of harmful or undesirable, physiological response which is unique to an
     * individual and associated with exposure to a substance.
     *
     * Details about each adverse reaction event linked to exposure to the identified
     * substance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction[] 
     */
    protected array $reaction;

    /* constructor.php:63 */
    /**
     * FHIRAllergyIntolerance Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $clinicalStatus
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $verificationStatus
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAllergyIntoleranceType $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAllergyIntoleranceCategory[] $category
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAllergyIntoleranceCriticality $criticality
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $code
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $patient
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $encounter
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $onsetDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRAge $onsetAge
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod $onsetPeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange $onsetRange
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $onsetString
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $recordedDate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $recorder
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $asserter
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $lastOccurrence
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAnnotation[] $note
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction[] $reaction
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
                                null|FHIRCodeableConcept $clinicalStatus = null,
                                null|FHIRCodeableConcept $verificationStatus = null,
                                null|FHIRAllergyIntoleranceType $type = null,
                                null|iterable $category = null,
                                null|FHIRAllergyIntoleranceCriticality $criticality = null,
                                null|FHIRCodeableConcept $code = null,
                                null|FHIRReference $patient = null,
                                null|FHIRReference $encounter = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $onsetDateTime = null,
                                null|FHIRAge $onsetAge = null,
                                null|FHIRPeriod $onsetPeriod = null,
                                null|FHIRRange $onsetRange = null,
                                null|string|FHIRStringPrimitive|FHIRString $onsetString = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $recordedDate = null,
                                null|FHIRReference $recorder = null,
                                null|FHIRReference $asserter = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $lastOccurrence = null,
                                null|iterable $note = null,
                                null|iterable $reaction = null,
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
        if (null !== $clinicalStatus) {
            $this->setClinicalStatus($clinicalStatus);
        }
        if (null !== $verificationStatus) {
            $this->setVerificationStatus($verificationStatus);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $category) {
            $this->setCategory(...$category);
        }
        if (null !== $criticality) {
            $this->setCriticality($criticality);
        }
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $patient) {
            $this->setPatient($patient);
        }
        if (null !== $encounter) {
            $this->setEncounter($encounter);
        }
        if (null !== $onsetDateTime) {
            $this->setOnsetDateTime($onsetDateTime);
        }
        if (null !== $onsetAge) {
            $this->setOnsetAge($onsetAge);
        }
        if (null !== $onsetPeriod) {
            $this->setOnsetPeriod($onsetPeriod);
        }
        if (null !== $onsetRange) {
            $this->setOnsetRange($onsetRange);
        }
        if (null !== $onsetString) {
            $this->setOnsetString($onsetString);
        }
        if (null !== $recordedDate) {
            $this->setRecordedDate($recordedDate);
        }
        if (null !== $recorder) {
            $this->setRecorder($recorder);
        }
        if (null !== $asserter) {
            $this->setAsserter($asserter);
        }
        if (null !== $lastOccurrence) {
            $this->setLastOccurrence($lastOccurrence);
        }
        if (null !== $note) {
            $this->setNote(...$note);
        }
        if (null !== $reaction) {
            $this->setReaction(...$reaction);
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
     * Business identifiers assigned to this AllergyIntolerance by the performer or
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
     * Business identifiers assigned to this AllergyIntolerance by the performer or
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
     * Business identifiers assigned to this AllergyIntolerance by the performer or
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clinical status of the allergy or intolerance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getClinicalStatus(): null|FHIRCodeableConcept
    {
        return $this->clinicalStatus ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clinical status of the allergy or intolerance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $clinicalStatus
     * @return static
     */
    public function setClinicalStatus(null|FHIRCodeableConcept $clinicalStatus): self
    {
        if (null === $clinicalStatus) {
            unset($this->clinicalStatus);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getVerificationStatus(): null|FHIRCodeableConcept
    {
        return $this->verificationStatus ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $verificationStatus
     * @return static
     */
    public function setVerificationStatus(null|FHIRCodeableConcept $verificationStatus): self
    {
        if (null === $verificationStatus) {
            unset($this->verificationStatus);
            return $this;
        }
        $this->verificationStatus = $verificationStatus;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identification of the underlying physiological mechanism for the reaction risk.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAllergyIntoleranceType
     */
    public function getType(): null|FHIRAllergyIntoleranceType
    {
        return $this->type ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identification of the underlying physiological mechanism for the reaction risk.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAllergyIntoleranceType $type
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setType(null|FHIRAllergyIntoleranceType $type,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        $this->type = $type;
        if ($this->_valueXMLLocations[self::FIELD_TYPE] !== $valueXMLLocation) {
            $this->_setTypeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the type element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getTypeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_TYPE];
    }

    /**
     * Set the location the "value" field of the type element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setTypeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_TYPE] = $valueXMLLocation;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Category of the identified substance.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAllergyIntoleranceCategory[]
     */
    public function getCategory(): array
    {
        return $this->category ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAllergyIntoleranceCategory>
     */
    public function getCategoryIterator(): iterable
    {
        if (!isset($this->category)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->category);
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Category of the identified substance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAllergyIntoleranceCategory $category
     * @return static
     */
    public function addCategory(FHIRAllergyIntoleranceCategory $category): self
    {
        if (!isset($this->category)) {
            $this->category = [];
        }
        $this->category[] = $category;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Category of the identified substance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAllergyIntoleranceCategory ...$category
     * @return static
     */
    public function setCategory(FHIRAllergyIntoleranceCategory ...$category): self
    {
        if ([] === $category) {
            unset($this->category);
            return $this;
        }
        $this->category = [];
        foreach($category as $v) {
            if ($v instanceof FHIRAllergyIntoleranceCategory) {
                $this->category[] = $v;
            } else {
                $this->category[] = new FHIRAllergyIntoleranceCategory(value: $v);
            }
        }
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the
     * identified substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAllergyIntoleranceCriticality
     */
    public function getCriticality(): null|FHIRAllergyIntoleranceCriticality
    {
        return $this->criticality ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the
     * identified substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAllergyIntoleranceCriticality $criticality
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCriticality(null|FHIRAllergyIntoleranceCriticality $criticality,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $criticality) {
            unset($this->criticality);
            return $this;
        }
        $this->criticality = $criticality;
        if ($this->_valueXMLLocations[self::FIELD_CRITICALITY] !== $valueXMLLocation) {
            $this->_setCriticalityValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the criticality element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getCriticalityValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CRITICALITY];
    }

    /**
     * Set the location the "value" field of the criticality element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setCriticalityValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CRITICALITY] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $code
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
     * The patient who has the allergy or intolerance.
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
     * The patient who has the allergy or intolerance.
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter when the allergy or intolerance was asserted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference
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
     * The encounter when the allergy or intolerance was asserted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $encounter
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
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime
     */
    public function getOnsetDateTime(): null|FHIRDateTime
    {
        return $this->onsetDateTime ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $onsetDateTime
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setOnsetDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $onsetDateTime,
                                     ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $onsetDateTime) {
            unset($this->onsetDateTime);
            return $this;
        }
        if (!($onsetDateTime instanceof FHIRDateTime)) {
            $onsetDateTime = new FHIRDateTime(value: $onsetDateTime);
        }
        $this->onsetDateTime = $onsetDateTime;
        if ($this->_valueXMLLocations[self::FIELD_ONSET_DATE_TIME] !== $valueXMLLocation) {
            $this->_setOnsetDateTimeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the onsetDateTime element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getOnsetDateTimeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ONSET_DATE_TIME];
    }

    /**
     * Set the location the "value" field of the onsetDateTime element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setOnsetDateTimeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ONSET_DATE_TIME] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getOnsetAge(): null|FHIRAge
    {
        return $this->onsetAge ?? null;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRAge $onsetAge
     * @return static
     */
    public function setOnsetAge(null|FHIRAge $onsetAge): self
    {
        if (null === $onsetAge) {
            unset($this->onsetAge);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod
     */
    public function getOnsetPeriod(): null|FHIRPeriod
    {
        return $this->onsetPeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod $onsetPeriod
     * @return static
     */
    public function setOnsetPeriod(null|FHIRPeriod $onsetPeriod): self
    {
        if (null === $onsetPeriod) {
            unset($this->onsetPeriod);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange
     */
    public function getOnsetRange(): null|FHIRRange
    {
        return $this->onsetRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange $onsetRange
     * @return static
     */
    public function setOnsetRange(null|FHIRRange $onsetRange): self
    {
        if (null === $onsetRange) {
            unset($this->onsetRange);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getOnsetString(): null|FHIRString
    {
        return $this->onsetString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date, date-time, or age when allergy or intolerance was
     * identified.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $onsetString
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setOnsetString(null|string|FHIRStringPrimitive|FHIRString $onsetString,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $onsetString) {
            unset($this->onsetString);
            return $this;
        }
        if (!($onsetString instanceof FHIRString)) {
            $onsetString = new FHIRString(value: $onsetString);
        }
        $this->onsetString = $onsetString;
        if ($this->_valueXMLLocations[self::FIELD_ONSET_STRING] !== $valueXMLLocation) {
            $this->_setOnsetStringValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the onsetString element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getOnsetStringValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ONSET_STRING];
    }

    /**
     * Set the location the "value" field of the onsetString element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setOnsetStringValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ONSET_STRING] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime
     */
    public function getRecordedDate(): null|FHIRDateTime
    {
        return $this->recordedDate ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $recordedDate
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setRecordedDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $recordedDate,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $recordedDate) {
            unset($this->recordedDate);
            return $this;
        }
        if (!($recordedDate instanceof FHIRDateTime)) {
            $recordedDate = new FHIRDateTime(value: $recordedDate);
        }
        $this->recordedDate = $recordedDate;
        if ($this->_valueXMLLocations[self::FIELD_RECORDED_DATE] !== $valueXMLLocation) {
            $this->_setRecordedDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the recordedDate element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getRecordedDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_RECORDED_DATE];
    }

    /**
     * Set the location the "value" field of the recordedDate element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setRecordedDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_RECORDED_DATE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual who recorded the record and takes responsibility for its content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $recorder
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source of the information about the allergy that is recorded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference
     */
    public function getAsserter(): null|FHIRReference
    {
        return $this->asserter ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source of the information about the allergy that is recorded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $asserter
     * @return static
     */
    public function setAsserter(null|FHIRReference $asserter): self
    {
        if (null === $asserter) {
            unset($this->asserter);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime
     */
    public function getLastOccurrence(): null|FHIRDateTime
    {
        return $this->lastOccurrence ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $lastOccurrence
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setLastOccurrence(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $lastOccurrence,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $lastOccurrence) {
            unset($this->lastOccurrence);
            return $this;
        }
        if (!($lastOccurrence instanceof FHIRDateTime)) {
            $lastOccurrence = new FHIRDateTime(value: $lastOccurrence);
        }
        $this->lastOccurrence = $lastOccurrence;
        if ($this->_valueXMLLocations[self::FIELD_LAST_OCCURRENCE] !== $valueXMLLocation) {
            $this->_setLastOccurrenceValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the lastOccurrence element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getLastOccurrenceValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_LAST_OCCURRENCE];
    }

    /**
     * Set the location the "value" field of the lastOccurrence element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setLastOccurrenceValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_LAST_OCCURRENCE] = $valueXMLLocation;
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
     * Additional narrative about the propensity for the Adverse Reaction, not captured
     * in other fields.
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
     * Additional narrative about the propensity for the Adverse Reaction, not captured
     * in other fields.
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
     * Risk of harmful or undesirable, physiological response which is unique to an
     * individual and associated with exposure to a substance.
     *
     * Details about each adverse reaction event linked to exposure to the identified
     * substance.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction[]
     */
    public function getReaction(): array
    {
        return $this->reaction ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction>
     */
    public function getReactionIterator(): iterable
    {
        if (!isset($this->reaction)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->reaction);
    }

    /**
     * Risk of harmful or undesirable, physiological response which is unique to an
     * individual and associated with exposure to a substance.
     *
     * Details about each adverse reaction event linked to exposure to the identified
     * substance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction $reaction
     * @return static
     */
    public function addReaction(FHIRAllergyIntoleranceReaction $reaction): self
    {
        if (!isset($this->reaction)) {
            $this->reaction = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction ...$reaction
     * @return static
     */
    public function setReaction(FHIRAllergyIntoleranceReaction ...$reaction): self
    {
        if ([] === $reaction) {
            unset($this->reaction);
            return $this;
        }
        $this->reaction = $reaction;
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
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_CLINICAL_STATUS])) {
            $v = $this->getClinicalStatus();
            foreach($validationRules[self::FIELD_CLINICAL_STATUS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CLINICAL_STATUS, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VERIFICATION_STATUS, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TYPE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CATEGORY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CRITICALITY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CODE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATIENT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ONSET_DATE_TIME, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ONSET_AGE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ONSET_PERIOD, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ONSET_RANGE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ONSET_STRING, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RECORDED_DATE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RECORDER, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ASSERTER, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LAST_OCCURRENCE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NOTE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REACTION, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAllergyIntolerance)) {
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
            } else if (self::FIELD_CLINICAL_STATUS === $cen) {
                $type->setClinicalStatus(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VERIFICATION_STATUS === $cen) {
                $type->setVerificationStatus(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRAllergyIntoleranceType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CATEGORY === $cen) {
                $type->addCategory(FHIRAllergyIntoleranceCategory::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CRITICALITY === $cen) {
                $type->setCriticality(FHIRAllergyIntoleranceCriticality::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE === $cen) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATIENT === $cen) {
                $type->setPatient(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENCOUNTER === $cen) {
                $type->setEncounter(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ONSET_DATE_TIME === $cen) {
                $type->setOnsetDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ONSET_AGE === $cen) {
                $type->setOnsetAge(FHIRAge::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ONSET_PERIOD === $cen) {
                $type->setOnsetPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ONSET_RANGE === $cen) {
                $type->setOnsetRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ONSET_STRING === $cen) {
                $type->setOnsetString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RECORDED_DATE === $cen) {
                $type->setRecordedDate(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RECORDER === $cen) {
                $type->setRecorder(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ASSERTER === $cen) {
                $type->setAsserter(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LAST_OCCURRENCE === $cen) {
                $type->setLastOccurrence(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NOTE === $cen) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REACTION === $cen) {
                $type->addReaction(FHIRAllergyIntoleranceReaction::xmlUnserialize($ce, $config));
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
        if (isset($attributes[self::FIELD_TYPE])) {
            if (isset($type->type)) {
                $type->type->setValue((string)$attributes[self::FIELD_TYPE]);
                $type->_setTypeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setType((string)$attributes[self::FIELD_TYPE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CRITICALITY])) {
            if (isset($type->criticality)) {
                $type->criticality->setValue((string)$attributes[self::FIELD_CRITICALITY]);
                $type->_setCriticalityValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setCriticality((string)$attributes[self::FIELD_CRITICALITY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ONSET_DATE_TIME])) {
            if (isset($type->onsetDateTime)) {
                $type->onsetDateTime->setValue((string)$attributes[self::FIELD_ONSET_DATE_TIME]);
                $type->_setOnsetDateTimeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setOnsetDateTime((string)$attributes[self::FIELD_ONSET_DATE_TIME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ONSET_STRING])) {
            if (isset($type->onsetString)) {
                $type->onsetString->setValue((string)$attributes[self::FIELD_ONSET_STRING]);
                $type->_setOnsetStringValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setOnsetString((string)$attributes[self::FIELD_ONSET_STRING], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_RECORDED_DATE])) {
            if (isset($type->recordedDate)) {
                $type->recordedDate->setValue((string)$attributes[self::FIELD_RECORDED_DATE]);
                $type->_setRecordedDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setRecordedDate((string)$attributes[self::FIELD_RECORDED_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LAST_OCCURRENCE])) {
            if (isset($type->lastOccurrence)) {
                $type->lastOccurrence->setValue((string)$attributes[self::FIELD_LAST_OCCURRENCE]);
                $type->_setLastOccurrenceValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLastOccurrence((string)$attributes[self::FIELD_LAST_OCCURRENCE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('AllergyIntolerance', $this->_getSourceXMLNS());
        }
        if (isset($this->type) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TYPE]) {
            $xw->writeAttribute(self::FIELD_TYPE, $this->type->_getFormattedValue());
        }
        if (isset($this->criticality) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CRITICALITY]) {
            $xw->writeAttribute(self::FIELD_CRITICALITY, $this->criticality->_getFormattedValue());
        }
        if (isset($this->onsetDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ONSET_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_ONSET_DATE_TIME, $this->onsetDateTime->_getFormattedValue());
        }
        if (isset($this->onsetString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ONSET_STRING]) {
            $xw->writeAttribute(self::FIELD_ONSET_STRING, $this->onsetString->_getFormattedValue());
        }
        if (isset($this->recordedDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_RECORDED_DATE]) {
            $xw->writeAttribute(self::FIELD_RECORDED_DATE, $this->recordedDate->_getFormattedValue());
        }
        if (isset($this->lastOccurrence) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LAST_OCCURRENCE]) {
            $xw->writeAttribute(self::FIELD_LAST_OCCURRENCE, $this->lastOccurrence->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier) && [] !== $this->identifier) {
            foreach($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->clinicalStatus)) {
            $xw->startElement(self::FIELD_CLINICAL_STATUS);
            $this->clinicalStatus->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->verificationStatus)) {
            $xw->startElement(self::FIELD_VERIFICATION_STATUS);
            $this->verificationStatus->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->type)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TYPE]
                || $this->type->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TYPE]);
            $xw->endElement();
        }
        if (isset($this->category) && [] !== $this->category) {
            foreach($this->category as $v) {
                $xw->startElement(self::FIELD_CATEGORY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->criticality)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CRITICALITY]
                || $this->criticality->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CRITICALITY);
            $this->criticality->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CRITICALITY]);
            $xw->endElement();
        }
        if (isset($this->code)) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patient)) {
            $xw->startElement(self::FIELD_PATIENT);
            $this->patient->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->encounter)) {
            $xw->startElement(self::FIELD_ENCOUNTER);
            $this->encounter->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->onsetDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ONSET_DATE_TIME]
                || $this->onsetDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ONSET_DATE_TIME);
            $this->onsetDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ONSET_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->onsetAge)) {
            $xw->startElement(self::FIELD_ONSET_AGE);
            $this->onsetAge->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->onsetPeriod)) {
            $xw->startElement(self::FIELD_ONSET_PERIOD);
            $this->onsetPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->onsetRange)) {
            $xw->startElement(self::FIELD_ONSET_RANGE);
            $this->onsetRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->onsetString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ONSET_STRING]
                || $this->onsetString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ONSET_STRING);
            $this->onsetString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ONSET_STRING]);
            $xw->endElement();
        }
        if (isset($this->recordedDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_RECORDED_DATE]
                || $this->recordedDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_RECORDED_DATE);
            $this->recordedDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_RECORDED_DATE]);
            $xw->endElement();
        }
        if (isset($this->recorder)) {
            $xw->startElement(self::FIELD_RECORDER);
            $this->recorder->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->asserter)) {
            $xw->startElement(self::FIELD_ASSERTER);
            $this->asserter->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->lastOccurrence)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LAST_OCCURRENCE]
                || $this->lastOccurrence->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LAST_OCCURRENCE);
            $this->lastOccurrence->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LAST_OCCURRENCE]);
            $xw->endElement();
        }
        if (isset($this->note)) {
            foreach ($this->note as $v) {
                $xw->startElement(self::FIELD_NOTE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->reaction)) {
            foreach ($this->reaction as $v) {
                $xw->startElement(self::FIELD_REACTION);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAllergyIntolerance)) {
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
        if (isset($json[self::FIELD_CLINICAL_STATUS]) || array_key_exists(self::FIELD_CLINICAL_STATUS, $json)) {
            $type->setClinicalStatus(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_CLINICAL_STATUS],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VERIFICATION_STATUS]) || array_key_exists(self::FIELD_VERIFICATION_STATUS, $json)) {
            $type->setVerificationStatus(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_VERIFICATION_STATUS],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_TYPE]) || isset($json[self::FIELD_TYPE_EXT]) || array_key_exists(self::FIELD_TYPE, $json) || array_key_exists(self::FIELD_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_TYPE] ?? null;
            $ext = (array)($json[self::FIELD_TYPE_EXT] ?? []);
            $type->setType(FHIRAllergyIntoleranceType::jsonUnserialize(
                json: [FHIRAllergyIntoleranceType::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_CATEGORY]) || isset($json[self::FIELD_CATEGORY_EXT]) || array_key_exists(self::FIELD_CATEGORY, $json) || array_key_exists(self::FIELD_CATEGORY_EXT, $json)) {
            $value = $json[self::FIELD_CATEGORY] ?? null;
            $ext = (array)($json[self::FIELD_CATEGORY_EXT] ?? []);
            if (!is_array($value)) {
                $value = [$value];
            }
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addCategory(FHIRAllergyIntoleranceCategory::jsonUnserialize(
                    json: [FHIRAllergyIntoleranceCategory::FIELD_VALUE => $value[$i] ?? null] + (array)($ext[$i] ?? []),
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_CRITICALITY]) || isset($json[self::FIELD_CRITICALITY_EXT]) || array_key_exists(self::FIELD_CRITICALITY, $json) || array_key_exists(self::FIELD_CRITICALITY_EXT, $json)) {
            $value = $json[self::FIELD_CRITICALITY] ?? null;
            $ext = (array)($json[self::FIELD_CRITICALITY_EXT] ?? []);
            $type->setCriticality(FHIRAllergyIntoleranceCriticality::jsonUnserialize(
                json: [FHIRAllergyIntoleranceCriticality::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_CODE]) || array_key_exists(self::FIELD_CODE, $json)) {
            $type->setCode(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_CODE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PATIENT]) || array_key_exists(self::FIELD_PATIENT, $json)) {
            $type->setPatient(FHIRReference::jsonUnserialize(
                json: $json[self::FIELD_PATIENT],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ENCOUNTER]) || array_key_exists(self::FIELD_ENCOUNTER, $json)) {
            $type->setEncounter(FHIRReference::jsonUnserialize(
                json: $json[self::FIELD_ENCOUNTER],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ONSET_DATE_TIME]) || isset($json[self::FIELD_ONSET_DATE_TIME_EXT]) || array_key_exists(self::FIELD_ONSET_DATE_TIME, $json) || array_key_exists(self::FIELD_ONSET_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_ONSET_DATE_TIME] ?? null;
            $ext = (array)($json[self::FIELD_ONSET_DATE_TIME_EXT] ?? []);
            $type->setOnsetDateTime(FHIRDateTime::jsonUnserialize(
                json: [FHIRDateTime::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ONSET_AGE]) || array_key_exists(self::FIELD_ONSET_AGE, $json)) {
            $type->setOnsetAge(FHIRAge::jsonUnserialize(
                json: $json[self::FIELD_ONSET_AGE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ONSET_PERIOD]) || array_key_exists(self::FIELD_ONSET_PERIOD, $json)) {
            $type->setOnsetPeriod(FHIRPeriod::jsonUnserialize(
                json: $json[self::FIELD_ONSET_PERIOD],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ONSET_RANGE]) || array_key_exists(self::FIELD_ONSET_RANGE, $json)) {
            $type->setOnsetRange(FHIRRange::jsonUnserialize(
                json: $json[self::FIELD_ONSET_RANGE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ONSET_STRING]) || isset($json[self::FIELD_ONSET_STRING_EXT]) || array_key_exists(self::FIELD_ONSET_STRING, $json) || array_key_exists(self::FIELD_ONSET_STRING_EXT, $json)) {
            $value = $json[self::FIELD_ONSET_STRING] ?? null;
            $ext = (array)($json[self::FIELD_ONSET_STRING_EXT] ?? []);
            $type->setOnsetString(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
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
        if (isset($json[self::FIELD_RECORDER]) || array_key_exists(self::FIELD_RECORDER, $json)) {
            $type->setRecorder(FHIRReference::jsonUnserialize(
                json: $json[self::FIELD_RECORDER],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ASSERTER]) || array_key_exists(self::FIELD_ASSERTER, $json)) {
            $type->setAsserter(FHIRReference::jsonUnserialize(
                json: $json[self::FIELD_ASSERTER],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_LAST_OCCURRENCE]) || isset($json[self::FIELD_LAST_OCCURRENCE_EXT]) || array_key_exists(self::FIELD_LAST_OCCURRENCE, $json) || array_key_exists(self::FIELD_LAST_OCCURRENCE_EXT, $json)) {
            $value = $json[self::FIELD_LAST_OCCURRENCE] ?? null;
            $ext = (array)($json[self::FIELD_LAST_OCCURRENCE_EXT] ?? []);
            $type->setLastOccurrence(FHIRDateTime::jsonUnserialize(
                json: [FHIRDateTime::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
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
        if (isset($json[self::FIELD_REACTION]) || array_key_exists(self::FIELD_REACTION, $json)) {
            $vs = $json[self::FIELD_REACTION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addReaction(FHIRAllergyIntoleranceReaction::jsonUnserialize(
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
        if (isset($this->clinicalStatus)) {
            $out->clinicalStatus = $this->clinicalStatus;
        }
        if (isset($this->verificationStatus)) {
            $out->verificationStatus = $this->verificationStatus;
        }
        if (isset($this->type)) {
            if (null !== ($val = $this->type->getValue())) {
                $out->type = $val;
            }
            $ext = $this->type->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_type = $ext;
            }
        }
        if (isset($this->category) && [] !== $this->category) {
            $vals = [];
            $exts = [];
            foreach ($this->category as $v) {
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
                $out->category = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_category = $exts;
            }
        }
        if (isset($this->criticality)) {
            if (null !== ($val = $this->criticality->getValue())) {
                $out->criticality = $val;
            }
            $ext = $this->criticality->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_criticality = $ext;
            }
        }
        if (isset($this->code)) {
            $out->code = $this->code;
        }
        if (isset($this->patient)) {
            $out->patient = $this->patient;
        }
        if (isset($this->encounter)) {
            $out->encounter = $this->encounter;
        }
        if (isset($this->onsetDateTime)) {
            if (null !== ($val = $this->onsetDateTime->getValue())) {
                $out->onsetDateTime = $val;
            }
            $ext = $this->onsetDateTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_onsetDateTime = $ext;
            }
        }
        if (isset($this->onsetAge)) {
            $out->onsetAge = $this->onsetAge;
        }
        if (isset($this->onsetPeriod)) {
            $out->onsetPeriod = $this->onsetPeriod;
        }
        if (isset($this->onsetRange)) {
            $out->onsetRange = $this->onsetRange;
        }
        if (isset($this->onsetString)) {
            if (null !== ($val = $this->onsetString->getValue())) {
                $out->onsetString = $val;
            }
            $ext = $this->onsetString->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_onsetString = $ext;
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
        if (isset($this->recorder)) {
            $out->recorder = $this->recorder;
        }
        if (isset($this->asserter)) {
            $out->asserter = $this->asserter;
        }
        if (isset($this->lastOccurrence)) {
            if (null !== ($val = $this->lastOccurrence->getValue())) {
                $out->lastOccurrence = $val;
            }
            $ext = $this->lastOccurrence->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_lastOccurrence = $ext;
            }
        }
        if (isset($this->note) && [] !== $this->note) {
            $out->note = $this->note;
        }
        if (isset($this->reaction) && [] !== $this->reaction) {
            $out->reaction = $this->reaction;
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
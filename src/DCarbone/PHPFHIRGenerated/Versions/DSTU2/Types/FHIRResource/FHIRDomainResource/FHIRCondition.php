<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 02:55+0000
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
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
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRConditionVerificationStatus;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRConditionVerificationStatusList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionTypeMap;

/**
 * Use to record detailed information about conditions, problems or diagnoses
 * recognized by a clinician. There are many uses including: recording a diagnosis
 * during an encounter; populating a problem list or a summary statement, such as a
 * discharge summary.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRCondition extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CONDITION;

    /* class_default.php:48 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_IDENTIFIER_EXT = '_identifier';
    public const FIELD_PATIENT = 'patient';
    public const FIELD_ENCOUNTER = 'encounter';
    public const FIELD_ASSERTER = 'asserter';
    public const FIELD_DATE_RECORDED = 'dateRecorded';
    public const FIELD_DATE_RECORDED_EXT = '_dateRecorded';
    public const FIELD_CODE = 'code';
    public const FIELD_CATEGORY = 'category';
    public const FIELD_CLINICAL_STATUS = 'clinicalStatus';
    public const FIELD_CLINICAL_STATUS_EXT = '_clinicalStatus';
    public const FIELD_VERIFICATION_STATUS = 'verificationStatus';
    public const FIELD_VERIFICATION_STATUS_EXT = '_verificationStatus';
    public const FIELD_SEVERITY = 'severity';
    public const FIELD_ONSET_DATE_TIME = 'onsetDateTime';
    public const FIELD_ONSET_DATE_TIME_EXT = '_onsetDateTime';
    public const FIELD_ONSET_QUANTITY = 'onsetQuantity';
    public const FIELD_ONSET_QUANTITY_EXT = '_onsetQuantity';
    public const FIELD_ONSET_PERIOD = 'onsetPeriod';
    public const FIELD_ONSET_RANGE = 'onsetRange';
    public const FIELD_ONSET_STRING = 'onsetString';
    public const FIELD_ONSET_STRING_EXT = '_onsetString';
    public const FIELD_ABATEMENT_DATE_TIME = 'abatementDateTime';
    public const FIELD_ABATEMENT_DATE_TIME_EXT = '_abatementDateTime';
    public const FIELD_ABATEMENT_QUANTITY = 'abatementQuantity';
    public const FIELD_ABATEMENT_QUANTITY_EXT = '_abatementQuantity';
    public const FIELD_ABATEMENT_BOOLEAN = 'abatementBoolean';
    public const FIELD_ABATEMENT_BOOLEAN_EXT = '_abatementBoolean';
    public const FIELD_ABATEMENT_PERIOD = 'abatementPeriod';
    public const FIELD_ABATEMENT_RANGE = 'abatementRange';
    public const FIELD_ABATEMENT_STRING = 'abatementString';
    public const FIELD_ABATEMENT_STRING_EXT = '_abatementString';
    public const FIELD_STAGE = 'stage';
    public const FIELD_EVIDENCE = 'evidence';
    public const FIELD_BODY_SITE = 'bodySite';
    public const FIELD_NOTES = 'notes';
    public const FIELD_NOTES_EXT = '_notes';

    /* class_default.php:67 */
    private static array $_validationRules = [
        self::FIELD_PATIENT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_CODE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_VERIFICATION_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_DATE_RECORDED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CLINICAL_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VERIFICATION_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ONSET_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ONSET_QUANTITY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ONSET_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ABATEMENT_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ABATEMENT_QUANTITY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ABATEMENT_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ABATEMENT_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_NOTES => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this condition that are defined by
     * business processes and/or used to refer to it when a direct URL reference to the
     * resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the patient who the condition record is associated with.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $patient;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Encounter during which the condition was first asserted.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $encounter;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual who is making the condition statement.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $asserter;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A date, when the Condition statement was documented.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $dateRecorded;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identification of the condition, problem or diagnosis.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $code;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A category assigned to the condition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $category;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The clinical status of the condition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode 
     */
    protected FHIRCode $clinicalStatus;
    /**
     * The verification status to support or decline the clinical status of the
     * condition or diagnosis.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The verification status to support the clinical status of the condition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRConditionVerificationStatus 
     */
    protected FHIRConditionVerificationStatus $verificationStatus;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A subjective assessment of the severity of the condition as evaluated by the
     * clinician.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $severity;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $onsetDateTime;
    /**
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRAge 
     */
    protected FHIRAge $onsetQuantity;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $onsetPeriod;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $onsetRange;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
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
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $abatementDateTime;
    /**
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRAge 
     */
    protected FHIRAge $abatementQuantity;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $abatementBoolean;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $abatementPeriod;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $abatementRange;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $abatementString;
    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a diagnosis
     * during an encounter; populating a problem list or a summary statement, such as a
     * discharge summary.
     *
     * Clinical stage or grade of a condition. May include formal severity assessments.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage 
     */
    protected FHIRConditionStage $stage;
    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a diagnosis
     * during an encounter; populating a problem list or a summary statement, such as a
     * discharge summary.
     *
     * Supporting Evidence / manifestations that are the basis on which this condition
     * is suspected or confirmed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence[] 
     */
    protected array $evidence;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The anatomical location where this condition manifests itself.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $bodySite;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information about the Condition. This is a general notes/comments
     * entry for description of the Condition, its diagnosis and prognosis.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $notes;

    /* constructor.php:63 */
    /**
     * FHIRCondition Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $patient
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $encounter
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $asserter
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDate $dateRecorded
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $code
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $category
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode $clinicalStatus
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRConditionVerificationStatusList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRConditionVerificationStatus $verificationStatus
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $severity
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime $onsetDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRAge $onsetQuantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod $onsetPeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange $onsetRange
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $onsetString
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime $abatementDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRAge $abatementQuantity
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBoolean $abatementBoolean
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod $abatementPeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange $abatementRange
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $abatementString
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage $stage
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence[] $evidence
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[] $bodySite
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $notes
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
                                null|FHIRReference $patient = null,
                                null|FHIRReference $encounter = null,
                                null|FHIRReference $asserter = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $dateRecorded = null,
                                null|FHIRCodeableConcept $code = null,
                                null|FHIRCodeableConcept $category = null,
                                null|string|FHIRCodePrimitive|FHIRCode $clinicalStatus = null,
                                null|string|FHIRConditionVerificationStatusList|FHIRConditionVerificationStatus $verificationStatus = null,
                                null|FHIRCodeableConcept $severity = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $onsetDateTime = null,
                                null|FHIRDecimal|FHIRAge $onsetQuantity = null,
                                null|FHIRPeriod $onsetPeriod = null,
                                null|FHIRRange $onsetRange = null,
                                null|string|FHIRStringPrimitive|FHIRString $onsetString = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $abatementDateTime = null,
                                null|FHIRDecimal|FHIRAge $abatementQuantity = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $abatementBoolean = null,
                                null|FHIRPeriod $abatementPeriod = null,
                                null|FHIRRange $abatementRange = null,
                                null|string|FHIRStringPrimitive|FHIRString $abatementString = null,
                                null|FHIRConditionStage $stage = null,
                                null|iterable $evidence = null,
                                null|iterable $bodySite = null,
                                null|string|FHIRStringPrimitive|FHIRString $notes = null,
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
        if (null !== $patient) {
            $this->setPatient($patient);
        }
        if (null !== $encounter) {
            $this->setEncounter($encounter);
        }
        if (null !== $asserter) {
            $this->setAsserter($asserter);
        }
        if (null !== $dateRecorded) {
            $this->setDateRecorded($dateRecorded);
        }
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $category) {
            $this->setCategory($category);
        }
        if (null !== $clinicalStatus) {
            $this->setClinicalStatus($clinicalStatus);
        }
        if (null !== $verificationStatus) {
            $this->setVerificationStatus($verificationStatus);
        }
        if (null !== $severity) {
            $this->setSeverity($severity);
        }
        if (null !== $onsetDateTime) {
            $this->setOnsetDateTime($onsetDateTime);
        }
        if (null !== $onsetQuantity) {
            $this->setOnsetQuantity($onsetQuantity);
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
        if (null !== $abatementDateTime) {
            $this->setAbatementDateTime($abatementDateTime);
        }
        if (null !== $abatementQuantity) {
            $this->setAbatementQuantity($abatementQuantity);
        }
        if (null !== $abatementBoolean) {
            $this->setAbatementBoolean($abatementBoolean);
        }
        if (null !== $abatementPeriod) {
            $this->setAbatementPeriod($abatementPeriod);
        }
        if (null !== $abatementRange) {
            $this->setAbatementRange($abatementRange);
        }
        if (null !== $abatementString) {
            $this->setAbatementString($abatementString);
        }
        if (null !== $stage) {
            $this->setStage($stage);
        }
        if (null !== $evidence) {
            $this->setEvidence(...$evidence);
        }
        if (null !== $bodySite) {
            $this->setBodySite(...$bodySite);
        }
        if (null !== $notes) {
            $this->setNotes($notes);
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
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this condition that are defined by
     * business processes and/or used to refer to it when a direct URL reference to the
     * resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier>
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
     * This records identifiers associated with this condition that are defined by
     * business processes and/or used to refer to it when a direct URL reference to the
     * resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRString|FHIRIdentifier $identifier): self
    {
        if (!($identifier instanceof FHIRIdentifier)) {
            $identifier = new FHIRIdentifier(value: $identifier);
        }
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
     * This records identifiers associated with this condition that are defined by
     * business processes and/or used to refer to it when a direct URL reference to the
     * resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRString|FHIRIdentifier ...$identifier): self
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the patient who the condition record is associated with.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
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
     * Indicates the patient who the condition record is associated with.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $patient
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
     * Encounter during which the condition was first asserted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
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
     * Encounter during which the condition was first asserted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $encounter
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual who is making the condition statement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
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
     * Individual who is making the condition statement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $asserter
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
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A date, when the Condition statement was documented.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDate
     */
    public function getDateRecorded(): null|FHIRDate
    {
        return $this->dateRecorded ?? null;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A date, when the Condition statement was documented.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDate $dateRecorded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDateRecorded(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $dateRecorded,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $dateRecorded) {
            unset($this->dateRecorded);
            return $this;
        }
        if (!($dateRecorded instanceof FHIRDate)) {
            $dateRecorded = new FHIRDate(value: $dateRecorded);
        }
        $this->dateRecorded = $dateRecorded;
        if ($this->_valueXMLLocations[self::FIELD_DATE_RECORDED] !== $valueXMLLocation) {
            $this->_setDateRecordedValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the dateRecorded element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDateRecordedValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DATE_RECORDED];
    }

    /**
     * Set the location the "value" field of the dateRecorded element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDateRecordedValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DATE_RECORDED] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept
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
     * Identification of the condition, problem or diagnosis.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $code
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A category assigned to the condition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory(): null|FHIRCodeableConcept
    {
        return $this->category ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A category assigned to the condition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $category
     * @return static
     */
    public function setCategory(null|FHIRCodeableConcept $category): self
    {
        if (null === $category) {
            unset($this->category);
            return $this;
        }
        $this->category = $category;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The clinical status of the condition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode
     */
    public function getClinicalStatus(): null|FHIRCode
    {
        return $this->clinicalStatus ?? null;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The clinical status of the condition.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode $clinicalStatus
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setClinicalStatus(null|string|FHIRCodePrimitive|FHIRCode $clinicalStatus,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $clinicalStatus) {
            unset($this->clinicalStatus);
            return $this;
        }
        if (!($clinicalStatus instanceof FHIRCode)) {
            $clinicalStatus = new FHIRCode(value: $clinicalStatus);
        }
        $this->clinicalStatus = $clinicalStatus;
        if ($this->_valueXMLLocations[self::FIELD_CLINICAL_STATUS] !== $valueXMLLocation) {
            $this->_setClinicalStatusValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the clinicalStatus element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getClinicalStatusValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CLINICAL_STATUS];
    }

    /**
     * Set the location the "value" field of the clinicalStatus element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setClinicalStatusValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CLINICAL_STATUS] = $valueXMLLocation;
        return $this;
    }

    /**
     * The verification status to support or decline the clinical status of the
     * condition or diagnosis.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The verification status to support the clinical status of the condition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRConditionVerificationStatus
     */
    public function getVerificationStatus(): null|FHIRConditionVerificationStatus
    {
        return $this->verificationStatus ?? null;
    }

    /**
     * The verification status to support or decline the clinical status of the
     * condition or diagnosis.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The verification status to support the clinical status of the condition.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRConditionVerificationStatusList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRConditionVerificationStatus $verificationStatus
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setVerificationStatus(null|string|FHIRConditionVerificationStatusList|FHIRConditionVerificationStatus $verificationStatus,
                                          ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $verificationStatus) {
            unset($this->verificationStatus);
            return $this;
        }
        if (!($verificationStatus instanceof FHIRConditionVerificationStatus)) {
            $verificationStatus = new FHIRConditionVerificationStatus(value: $verificationStatus);
        }
        $this->verificationStatus = $verificationStatus;
        if ($this->_valueXMLLocations[self::FIELD_VERIFICATION_STATUS] !== $valueXMLLocation) {
            $this->_setVerificationStatusValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the verificationStatus element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getVerificationStatusValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VERIFICATION_STATUS];
    }

    /**
     * Set the location the "value" field of the verificationStatus element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setVerificationStatusValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VERIFICATION_STATUS] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getSeverity(): null|FHIRCodeableConcept
    {
        return $this->severity ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $severity
     * @return static
     */
    public function setSeverity(null|FHIRCodeableConcept $severity): self
    {
        if (null === $severity) {
            unset($this->severity);
            return $this;
        }
        $this->severity = $severity;
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
     * clinician.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime
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
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime $onsetDateTime
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
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getOnsetQuantity(): null|FHIRAge
    {
        return $this->onsetQuantity ?? null;
    }

    /**
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRAge $onsetQuantity
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setOnsetQuantity(null|FHIRDecimal|FHIRAge $onsetQuantity,
                                     ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $onsetQuantity) {
            unset($this->onsetQuantity);
            return $this;
        }
        if (!($onsetQuantity instanceof FHIRAge)) {
            $onsetQuantity = new FHIRAge(value: $onsetQuantity);
        }
        $this->onsetQuantity = $onsetQuantity;
        if ($this->_valueXMLLocations[self::FIELD_ONSET_QUANTITY] !== $valueXMLLocation) {
            $this->_setOnsetQuantityValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the onsetQuantity element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getOnsetQuantityValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ONSET_QUANTITY];
    }

    /**
     * Set the location the "value" field of the onsetQuantity element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setOnsetQuantityValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ONSET_QUANTITY] = $valueXMLLocation;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod
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
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod $onsetPeriod
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
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange
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
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange $onsetRange
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
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getOnsetString(): null|FHIRString
    {
        return $this->onsetString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the
     * clinician.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $onsetString
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
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime
     */
    public function getAbatementDateTime(): null|FHIRDateTime
    {
        return $this->abatementDateTime ?? null;
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
     * resolved, but they can abate.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime $abatementDateTime
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAbatementDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $abatementDateTime,
                                         ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $abatementDateTime) {
            unset($this->abatementDateTime);
            return $this;
        }
        if (!($abatementDateTime instanceof FHIRDateTime)) {
            $abatementDateTime = new FHIRDateTime(value: $abatementDateTime);
        }
        $this->abatementDateTime = $abatementDateTime;
        if ($this->_valueXMLLocations[self::FIELD_ABATEMENT_DATE_TIME] !== $valueXMLLocation) {
            $this->_setAbatementDateTimeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the abatementDateTime element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAbatementDateTimeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ABATEMENT_DATE_TIME];
    }

    /**
     * Set the location the "value" field of the abatementDateTime element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAbatementDateTimeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ABATEMENT_DATE_TIME] = $valueXMLLocation;
        return $this;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getAbatementQuantity(): null|FHIRAge
    {
        return $this->abatementQuantity ?? null;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRAge $abatementQuantity
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAbatementQuantity(null|FHIRDecimal|FHIRAge $abatementQuantity,
                                         ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $abatementQuantity) {
            unset($this->abatementQuantity);
            return $this;
        }
        if (!($abatementQuantity instanceof FHIRAge)) {
            $abatementQuantity = new FHIRAge(value: $abatementQuantity);
        }
        $this->abatementQuantity = $abatementQuantity;
        if ($this->_valueXMLLocations[self::FIELD_ABATEMENT_QUANTITY] !== $valueXMLLocation) {
            $this->_setAbatementQuantityValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the abatementQuantity element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAbatementQuantityValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ABATEMENT_QUANTITY];
    }

    /**
     * Set the location the "value" field of the abatementQuantity element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAbatementQuantityValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ABATEMENT_QUANTITY] = $valueXMLLocation;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBoolean
     */
    public function getAbatementBoolean(): null|FHIRBoolean
    {
        return $this->abatementBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBoolean $abatementBoolean
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAbatementBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $abatementBoolean,
                                        ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $abatementBoolean) {
            unset($this->abatementBoolean);
            return $this;
        }
        if (!($abatementBoolean instanceof FHIRBoolean)) {
            $abatementBoolean = new FHIRBoolean(value: $abatementBoolean);
        }
        $this->abatementBoolean = $abatementBoolean;
        if ($this->_valueXMLLocations[self::FIELD_ABATEMENT_BOOLEAN] !== $valueXMLLocation) {
            $this->_setAbatementBooleanValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the abatementBoolean element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAbatementBooleanValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ABATEMENT_BOOLEAN];
    }

    /**
     * Set the location the "value" field of the abatementBoolean element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAbatementBooleanValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ABATEMENT_BOOLEAN] = $valueXMLLocation;
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
     * resolved, but they can abate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod
     */
    public function getAbatementPeriod(): null|FHIRPeriod
    {
        return $this->abatementPeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod $abatementPeriod
     * @return static
     */
    public function setAbatementPeriod(null|FHIRPeriod $abatementPeriod): self
    {
        if (null === $abatementPeriod) {
            unset($this->abatementPeriod);
            return $this;
        }
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
     * resolved, but they can abate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange
     */
    public function getAbatementRange(): null|FHIRRange
    {
        return $this->abatementRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange $abatementRange
     * @return static
     */
    public function setAbatementRange(null|FHIRRange $abatementRange): self
    {
        if (null === $abatementRange) {
            unset($this->abatementRange);
            return $this;
        }
        $this->abatementRange = $abatementRange;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getAbatementString(): null|FHIRString
    {
        return $this->abatementString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $abatementString
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAbatementString(null|string|FHIRStringPrimitive|FHIRString $abatementString,
                                       ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $abatementString) {
            unset($this->abatementString);
            return $this;
        }
        if (!($abatementString instanceof FHIRString)) {
            $abatementString = new FHIRString(value: $abatementString);
        }
        $this->abatementString = $abatementString;
        if ($this->_valueXMLLocations[self::FIELD_ABATEMENT_STRING] !== $valueXMLLocation) {
            $this->_setAbatementStringValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the abatementString element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAbatementStringValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ABATEMENT_STRING];
    }

    /**
     * Set the location the "value" field of the abatementString element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAbatementStringValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ABATEMENT_STRING] = $valueXMLLocation;
        return $this;
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a diagnosis
     * during an encounter; populating a problem list or a summary statement, such as a
     * discharge summary.
     *
     * Clinical stage or grade of a condition. May include formal severity assessments.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage
     */
    public function getStage(): null|FHIRConditionStage
    {
        return $this->stage ?? null;
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a diagnosis
     * during an encounter; populating a problem list or a summary statement, such as a
     * discharge summary.
     *
     * Clinical stage or grade of a condition. May include formal severity assessments.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage $stage
     * @return static
     */
    public function setStage(null|FHIRConditionStage $stage): self
    {
        if (null === $stage) {
            unset($this->stage);
            return $this;
        }
        $this->stage = $stage;
        return $this;
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a diagnosis
     * during an encounter; populating a problem list or a summary statement, such as a
     * discharge summary.
     *
     * Supporting Evidence / manifestations that are the basis on which this condition
     * is suspected or confirmed.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence[]
     */
    public function getEvidence(): array
    {
        return $this->evidence ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence>
     */
    public function getEvidenceIterator(): iterable
    {
        if (!isset($this->evidence)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->evidence);
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a diagnosis
     * during an encounter; populating a problem list or a summary statement, such as a
     * discharge summary.
     *
     * Supporting Evidence / manifestations that are the basis on which this condition
     * is suspected or confirmed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence $evidence
     * @return static
     */
    public function addEvidence(FHIRConditionEvidence $evidence): self
    {
        if (!isset($this->evidence)) {
            $this->evidence = [];
        }
        $this->evidence[] = $evidence;
        return $this;
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a diagnosis
     * during an encounter; populating a problem list or a summary statement, such as a
     * discharge summary.
     *
     * Supporting Evidence / manifestations that are the basis on which this condition
     * is suspected or confirmed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence ...$evidence
     * @return static
     */
    public function setEvidence(FHIRConditionEvidence ...$evidence): self
    {
        if ([] === $evidence) {
            unset($this->evidence);
            return $this;
        }
        $this->evidence = $evidence;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getBodySite(): array
    {
        return $this->bodySite ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept>
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
     * The anatomical location where this condition manifests itself.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $bodySite
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
     * The anatomical location where this condition manifests itself.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept ...$bodySite
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information about the Condition. This is a general notes/comments
     * entry for description of the Condition, its diagnosis and prognosis.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getNotes(): null|FHIRString
    {
        return $this->notes ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information about the Condition. This is a general notes/comments
     * entry for description of the Condition, its diagnosis and prognosis.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $notes
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setNotes(null|string|FHIRStringPrimitive|FHIRString $notes,
                             ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $notes) {
            unset($this->notes);
            return $this;
        }
        if (!($notes instanceof FHIRString)) {
            $notes = new FHIRString(value: $notes);
        }
        $this->notes = $notes;
        if ($this->_valueXMLLocations[self::FIELD_NOTES] !== $valueXMLLocation) {
            $this->_setNotesValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the notes element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getNotesValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_NOTES];
    }

    /**
     * Set the location the "value" field of the notes element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setNotesValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_NOTES] = $valueXMLLocation;
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
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVerificationStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERIFICATION_STATUS] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_DATE_RECORDED])) {
            $v = $this->getDateRecorded();
            foreach($validationRules[self::FIELD_DATE_RECORDED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATE_RECORDED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE_RECORDED])) {
                        $errs[self::FIELD_DATE_RECORDED] = [];
                    }
                    $errs[self::FIELD_DATE_RECORDED][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_SEVERITY])) {
            $v = $this->getSeverity();
            foreach($validationRules[self::FIELD_SEVERITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SEVERITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEVERITY])) {
                        $errs[self::FIELD_SEVERITY] = [];
                    }
                    $errs[self::FIELD_SEVERITY][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_ONSET_QUANTITY])) {
            $v = $this->getOnsetQuantity();
            foreach($validationRules[self::FIELD_ONSET_QUANTITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ONSET_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ONSET_QUANTITY])) {
                        $errs[self::FIELD_ONSET_QUANTITY] = [];
                    }
                    $errs[self::FIELD_ONSET_QUANTITY][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_ABATEMENT_DATE_TIME])) {
            $v = $this->getAbatementDateTime();
            foreach($validationRules[self::FIELD_ABATEMENT_DATE_TIME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ABATEMENT_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ABATEMENT_DATE_TIME])) {
                        $errs[self::FIELD_ABATEMENT_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_ABATEMENT_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ABATEMENT_QUANTITY])) {
            $v = $this->getAbatementQuantity();
            foreach($validationRules[self::FIELD_ABATEMENT_QUANTITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ABATEMENT_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ABATEMENT_QUANTITY])) {
                        $errs[self::FIELD_ABATEMENT_QUANTITY] = [];
                    }
                    $errs[self::FIELD_ABATEMENT_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ABATEMENT_BOOLEAN])) {
            $v = $this->getAbatementBoolean();
            foreach($validationRules[self::FIELD_ABATEMENT_BOOLEAN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ABATEMENT_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ABATEMENT_BOOLEAN])) {
                        $errs[self::FIELD_ABATEMENT_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_ABATEMENT_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ABATEMENT_PERIOD])) {
            $v = $this->getAbatementPeriod();
            foreach($validationRules[self::FIELD_ABATEMENT_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ABATEMENT_PERIOD, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ABATEMENT_RANGE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ABATEMENT_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ABATEMENT_STRING])) {
                        $errs[self::FIELD_ABATEMENT_STRING] = [];
                    }
                    $errs[self::FIELD_ABATEMENT_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STAGE])) {
            $v = $this->getStage();
            foreach($validationRules[self::FIELD_STAGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STAGE])) {
                        $errs[self::FIELD_STAGE] = [];
                    }
                    $errs[self::FIELD_STAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EVIDENCE])) {
            $v = $this->getEvidence();
            foreach($validationRules[self::FIELD_EVIDENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EVIDENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EVIDENCE])) {
                        $errs[self::FIELD_EVIDENCE] = [];
                    }
                    $errs[self::FIELD_EVIDENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BODY_SITE])) {
            $v = $this->getBodySite();
            foreach($validationRules[self::FIELD_BODY_SITE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BODY_SITE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BODY_SITE])) {
                        $errs[self::FIELD_BODY_SITE] = [];
                    }
                    $errs[self::FIELD_BODY_SITE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTES])) {
            $v = $this->getNotes();
            foreach($validationRules[self::FIELD_NOTES] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NOTES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTES])) {
                        $errs[self::FIELD_NOTES] = [];
                    }
                    $errs[self::FIELD_NOTES][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRCondition $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRCondition
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCondition)) {
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
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATIENT === $cen) {
                $type->setPatient(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENCOUNTER === $cen) {
                $type->setEncounter(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ASSERTER === $cen) {
                $type->setAsserter(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATE_RECORDED === $cen) {
                $type->setDateRecorded(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE === $cen) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CATEGORY === $cen) {
                $type->setCategory(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CLINICAL_STATUS === $cen) {
                $type->setClinicalStatus(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VERIFICATION_STATUS === $cen) {
                $type->setVerificationStatus(FHIRConditionVerificationStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SEVERITY === $cen) {
                $type->setSeverity(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ONSET_DATE_TIME === $cen) {
                $type->setOnsetDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ONSET_QUANTITY === $cen) {
                $type->setOnsetQuantity(FHIRAge::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ONSET_PERIOD === $cen) {
                $type->setOnsetPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ONSET_RANGE === $cen) {
                $type->setOnsetRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ONSET_STRING === $cen) {
                $type->setOnsetString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ABATEMENT_DATE_TIME === $cen) {
                $type->setAbatementDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ABATEMENT_QUANTITY === $cen) {
                $type->setAbatementQuantity(FHIRAge::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ABATEMENT_BOOLEAN === $cen) {
                $type->setAbatementBoolean(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ABATEMENT_PERIOD === $cen) {
                $type->setAbatementPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ABATEMENT_RANGE === $cen) {
                $type->setAbatementRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ABATEMENT_STRING === $cen) {
                $type->setAbatementString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STAGE === $cen) {
                $type->setStage(FHIRConditionStage::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EVIDENCE === $cen) {
                $type->addEvidence(FHIRConditionEvidence::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BODY_SITE === $cen) {
                $type->addBodySite(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NOTES === $cen) {
                $type->setNotes(FHIRString::xmlUnserialize($ce, $config));
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
        if (isset($attributes[self::FIELD_DATE_RECORDED])) {
            if (isset($type->dateRecorded)) {
                $type->dateRecorded->setValue((string)$attributes[self::FIELD_DATE_RECORDED]);
                $type->_setDateRecordedValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDateRecorded((string)$attributes[self::FIELD_DATE_RECORDED], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CLINICAL_STATUS])) {
            if (isset($type->clinicalStatus)) {
                $type->clinicalStatus->setValue((string)$attributes[self::FIELD_CLINICAL_STATUS]);
                $type->_setClinicalStatusValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setClinicalStatus((string)$attributes[self::FIELD_CLINICAL_STATUS], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VERIFICATION_STATUS])) {
            if (isset($type->verificationStatus)) {
                $type->verificationStatus->setValue((string)$attributes[self::FIELD_VERIFICATION_STATUS]);
                $type->_setVerificationStatusValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setVerificationStatus((string)$attributes[self::FIELD_VERIFICATION_STATUS], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_ONSET_QUANTITY])) {
            if (isset($type->onsetQuantity)) {
                $type->onsetQuantity->setValue((string)$attributes[self::FIELD_ONSET_QUANTITY]);
                $type->_setOnsetQuantityValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setOnsetQuantity((string)$attributes[self::FIELD_ONSET_QUANTITY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_ABATEMENT_DATE_TIME])) {
            if (isset($type->abatementDateTime)) {
                $type->abatementDateTime->setValue((string)$attributes[self::FIELD_ABATEMENT_DATE_TIME]);
                $type->_setAbatementDateTimeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAbatementDateTime((string)$attributes[self::FIELD_ABATEMENT_DATE_TIME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ABATEMENT_QUANTITY])) {
            if (isset($type->abatementQuantity)) {
                $type->abatementQuantity->setValue((string)$attributes[self::FIELD_ABATEMENT_QUANTITY]);
                $type->_setAbatementQuantityValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAbatementQuantity((string)$attributes[self::FIELD_ABATEMENT_QUANTITY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ABATEMENT_BOOLEAN])) {
            if (isset($type->abatementBoolean)) {
                $type->abatementBoolean->setValue((string)$attributes[self::FIELD_ABATEMENT_BOOLEAN]);
                $type->_setAbatementBooleanValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAbatementBoolean((string)$attributes[self::FIELD_ABATEMENT_BOOLEAN], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ABATEMENT_STRING])) {
            if (isset($type->abatementString)) {
                $type->abatementString->setValue((string)$attributes[self::FIELD_ABATEMENT_STRING]);
                $type->_setAbatementStringValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAbatementString((string)$attributes[self::FIELD_ABATEMENT_STRING], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_NOTES])) {
            if (isset($type->notes)) {
                $type->notes->setValue((string)$attributes[self::FIELD_NOTES]);
                $type->_setNotesValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setNotes((string)$attributes[self::FIELD_NOTES], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('Condition', $this->_getSourceXMLNS());
        }
        if (isset($this->dateRecorded) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATE_RECORDED]) {
            $xw->writeAttribute(self::FIELD_DATE_RECORDED, $this->dateRecorded->_getFormattedValue());
        }
        if (isset($this->clinicalStatus) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CLINICAL_STATUS]) {
            $xw->writeAttribute(self::FIELD_CLINICAL_STATUS, $this->clinicalStatus->_getFormattedValue());
        }
        if (isset($this->verificationStatus) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VERIFICATION_STATUS]) {
            $xw->writeAttribute(self::FIELD_VERIFICATION_STATUS, $this->verificationStatus->_getFormattedValue());
        }
        if (isset($this->onsetDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ONSET_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_ONSET_DATE_TIME, $this->onsetDateTime->_getFormattedValue());
        }
        if (isset($this->onsetQuantity) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ONSET_QUANTITY]) {
            $xw->writeAttribute(self::FIELD_ONSET_QUANTITY, $this->onsetQuantity->_getFormattedValue());
        }
        if (isset($this->onsetString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ONSET_STRING]) {
            $xw->writeAttribute(self::FIELD_ONSET_STRING, $this->onsetString->_getFormattedValue());
        }
        if (isset($this->abatementDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ABATEMENT_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_ABATEMENT_DATE_TIME, $this->abatementDateTime->_getFormattedValue());
        }
        if (isset($this->abatementQuantity) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ABATEMENT_QUANTITY]) {
            $xw->writeAttribute(self::FIELD_ABATEMENT_QUANTITY, $this->abatementQuantity->_getFormattedValue());
        }
        if (isset($this->abatementBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ABATEMENT_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_ABATEMENT_BOOLEAN, $this->abatementBoolean->_getFormattedValue());
        }
        if (isset($this->abatementString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ABATEMENT_STRING]) {
            $xw->writeAttribute(self::FIELD_ABATEMENT_STRING, $this->abatementString->_getFormattedValue());
        }
        if (isset($this->notes) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NOTES]) {
            $xw->writeAttribute(self::FIELD_NOTES, $this->notes->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier) && [] !== $this->identifier) {
            foreach($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
        if (isset($this->asserter)) {
            $xw->startElement(self::FIELD_ASSERTER);
            $this->asserter->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dateRecorded)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATE_RECORDED]
                || $this->dateRecorded->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATE_RECORDED);
            $this->dateRecorded->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATE_RECORDED]);
            $xw->endElement();
        }
        if (isset($this->code)) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->category)) {
            $xw->startElement(self::FIELD_CATEGORY);
            $this->category->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->clinicalStatus)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CLINICAL_STATUS]
                || $this->clinicalStatus->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CLINICAL_STATUS);
            $this->clinicalStatus->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CLINICAL_STATUS]);
            $xw->endElement();
        }
        if (isset($this->verificationStatus)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VERIFICATION_STATUS]
                || $this->verificationStatus->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VERIFICATION_STATUS);
            $this->verificationStatus->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VERIFICATION_STATUS]);
            $xw->endElement();
        }
        if (isset($this->severity)) {
            $xw->startElement(self::FIELD_SEVERITY);
            $this->severity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->onsetDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ONSET_DATE_TIME]
                || $this->onsetDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ONSET_DATE_TIME);
            $this->onsetDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ONSET_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->onsetQuantity)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ONSET_QUANTITY]
                || $this->onsetQuantity->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ONSET_QUANTITY);
            $this->onsetQuantity->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ONSET_QUANTITY]);
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
        if (isset($this->abatementDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ABATEMENT_DATE_TIME]
                || $this->abatementDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ABATEMENT_DATE_TIME);
            $this->abatementDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ABATEMENT_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->abatementQuantity)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ABATEMENT_QUANTITY]
                || $this->abatementQuantity->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ABATEMENT_QUANTITY);
            $this->abatementQuantity->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ABATEMENT_QUANTITY]);
            $xw->endElement();
        }
        if (isset($this->abatementBoolean)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ABATEMENT_BOOLEAN]
                || $this->abatementBoolean->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ABATEMENT_BOOLEAN);
            $this->abatementBoolean->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ABATEMENT_BOOLEAN]);
            $xw->endElement();
        }
        if (isset($this->abatementPeriod)) {
            $xw->startElement(self::FIELD_ABATEMENT_PERIOD);
            $this->abatementPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->abatementRange)) {
            $xw->startElement(self::FIELD_ABATEMENT_RANGE);
            $this->abatementRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->abatementString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ABATEMENT_STRING]
                || $this->abatementString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ABATEMENT_STRING);
            $this->abatementString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ABATEMENT_STRING]);
            $xw->endElement();
        }
        if (isset($this->stage)) {
            $xw->startElement(self::FIELD_STAGE);
            $this->stage->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->evidence)) {
            foreach ($this->evidence as $v) {
                $xw->startElement(self::FIELD_EVIDENCE);
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
        if (isset($this->notes)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NOTES]
                || $this->notes->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NOTES);
            $this->notes->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NOTES]);
            $xw->endElement();
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRCondition $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRCondition
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCondition)) {
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
        if (isset($json[self::FIELD_IDENTIFIER])
            || isset($json[self::FIELD_IDENTIFIER_EXT])
            || array_key_exists(self::FIELD_IDENTIFIER, $json)
            || array_key_exists(self::FIELD_IDENTIFIER_EXT, $json)) {
            $value = (array)($json[self::FIELD_IDENTIFIER] ?? []);
            $ext = (array)($json[self::FIELD_IDENTIFIER_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize(
                    [FHIRIdentifier::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_PATIENT]) || array_key_exists(self::FIELD_PATIENT, $json)) {
            $type->setPatient(FHIRReference::jsonUnserialize($json[self::FIELD_PATIENT], $config));
        }
        if (isset($json[self::FIELD_ENCOUNTER]) || array_key_exists(self::FIELD_ENCOUNTER, $json)) {
            $type->setEncounter(FHIRReference::jsonUnserialize($json[self::FIELD_ENCOUNTER], $config));
        }
        if (isset($json[self::FIELD_ASSERTER]) || array_key_exists(self::FIELD_ASSERTER, $json)) {
            $type->setAsserter(FHIRReference::jsonUnserialize($json[self::FIELD_ASSERTER], $config));
        }
        if (isset($json[self::FIELD_DATE_RECORDED])
            || isset($json[self::FIELD_DATE_RECORDED_EXT])
            || array_key_exists(self::FIELD_DATE_RECORDED, $json)
            || array_key_exists(self::FIELD_DATE_RECORDED_EXT, $json)) {
            $value = $json[self::FIELD_DATE_RECORDED] ?? null;
            $type->setDateRecorded(FHIRDate::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDate::FIELD_VALUE => $value]) + ($json[self::FIELD_DATE_RECORDED_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CODE]) || array_key_exists(self::FIELD_CODE, $json)) {
            $type->setCode(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_CODE], $config));
        }
        if (isset($json[self::FIELD_CATEGORY]) || array_key_exists(self::FIELD_CATEGORY, $json)) {
            $type->setCategory(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_CATEGORY], $config));
        }
        if (isset($json[self::FIELD_CLINICAL_STATUS])
            || isset($json[self::FIELD_CLINICAL_STATUS_EXT])
            || array_key_exists(self::FIELD_CLINICAL_STATUS, $json)
            || array_key_exists(self::FIELD_CLINICAL_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_CLINICAL_STATUS] ?? null;
            $type->setClinicalStatus(FHIRCode::jsonUnserialize(
                (is_array($value) ? $value : [FHIRCode::FIELD_VALUE => $value]) + ($json[self::FIELD_CLINICAL_STATUS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VERIFICATION_STATUS])
            || isset($json[self::FIELD_VERIFICATION_STATUS_EXT])
            || array_key_exists(self::FIELD_VERIFICATION_STATUS, $json)
            || array_key_exists(self::FIELD_VERIFICATION_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_VERIFICATION_STATUS] ?? null;
            $type->setVerificationStatus(FHIRConditionVerificationStatus::jsonUnserialize(
                (is_array($value) ? $value : [FHIRConditionVerificationStatus::FIELD_VALUE => $value]) + ($json[self::FIELD_VERIFICATION_STATUS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_SEVERITY]) || array_key_exists(self::FIELD_SEVERITY, $json)) {
            $type->setSeverity(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_SEVERITY], $config));
        }
        if (isset($json[self::FIELD_ONSET_DATE_TIME])
            || isset($json[self::FIELD_ONSET_DATE_TIME_EXT])
            || array_key_exists(self::FIELD_ONSET_DATE_TIME, $json)
            || array_key_exists(self::FIELD_ONSET_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_ONSET_DATE_TIME] ?? null;
            $type->setOnsetDateTime(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_ONSET_DATE_TIME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ONSET_QUANTITY])
            || isset($json[self::FIELD_ONSET_QUANTITY_EXT])
            || array_key_exists(self::FIELD_ONSET_QUANTITY, $json)
            || array_key_exists(self::FIELD_ONSET_QUANTITY_EXT, $json)) {
            $value = $json[self::FIELD_ONSET_QUANTITY] ?? null;
            $type->setOnsetQuantity(FHIRAge::jsonUnserialize(
                (is_array($value) ? $value : [FHIRAge::FIELD_VALUE => $value]) + ($json[self::FIELD_ONSET_QUANTITY_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ONSET_PERIOD]) || array_key_exists(self::FIELD_ONSET_PERIOD, $json)) {
            $type->setOnsetPeriod(FHIRPeriod::jsonUnserialize($json[self::FIELD_ONSET_PERIOD], $config));
        }
        if (isset($json[self::FIELD_ONSET_RANGE]) || array_key_exists(self::FIELD_ONSET_RANGE, $json)) {
            $type->setOnsetRange(FHIRRange::jsonUnserialize($json[self::FIELD_ONSET_RANGE], $config));
        }
        if (isset($json[self::FIELD_ONSET_STRING])
            || isset($json[self::FIELD_ONSET_STRING_EXT])
            || array_key_exists(self::FIELD_ONSET_STRING, $json)
            || array_key_exists(self::FIELD_ONSET_STRING_EXT, $json)) {
            $value = $json[self::FIELD_ONSET_STRING] ?? null;
            $type->setOnsetString(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_ONSET_STRING_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ABATEMENT_DATE_TIME])
            || isset($json[self::FIELD_ABATEMENT_DATE_TIME_EXT])
            || array_key_exists(self::FIELD_ABATEMENT_DATE_TIME, $json)
            || array_key_exists(self::FIELD_ABATEMENT_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_ABATEMENT_DATE_TIME] ?? null;
            $type->setAbatementDateTime(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_ABATEMENT_DATE_TIME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ABATEMENT_QUANTITY])
            || isset($json[self::FIELD_ABATEMENT_QUANTITY_EXT])
            || array_key_exists(self::FIELD_ABATEMENT_QUANTITY, $json)
            || array_key_exists(self::FIELD_ABATEMENT_QUANTITY_EXT, $json)) {
            $value = $json[self::FIELD_ABATEMENT_QUANTITY] ?? null;
            $type->setAbatementQuantity(FHIRAge::jsonUnserialize(
                (is_array($value) ? $value : [FHIRAge::FIELD_VALUE => $value]) + ($json[self::FIELD_ABATEMENT_QUANTITY_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ABATEMENT_BOOLEAN])
            || isset($json[self::FIELD_ABATEMENT_BOOLEAN_EXT])
            || array_key_exists(self::FIELD_ABATEMENT_BOOLEAN, $json)
            || array_key_exists(self::FIELD_ABATEMENT_BOOLEAN_EXT, $json)) {
            $value = $json[self::FIELD_ABATEMENT_BOOLEAN] ?? null;
            $type->setAbatementBoolean(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_ABATEMENT_BOOLEAN_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ABATEMENT_PERIOD]) || array_key_exists(self::FIELD_ABATEMENT_PERIOD, $json)) {
            $type->setAbatementPeriod(FHIRPeriod::jsonUnserialize($json[self::FIELD_ABATEMENT_PERIOD], $config));
        }
        if (isset($json[self::FIELD_ABATEMENT_RANGE]) || array_key_exists(self::FIELD_ABATEMENT_RANGE, $json)) {
            $type->setAbatementRange(FHIRRange::jsonUnserialize($json[self::FIELD_ABATEMENT_RANGE], $config));
        }
        if (isset($json[self::FIELD_ABATEMENT_STRING])
            || isset($json[self::FIELD_ABATEMENT_STRING_EXT])
            || array_key_exists(self::FIELD_ABATEMENT_STRING, $json)
            || array_key_exists(self::FIELD_ABATEMENT_STRING_EXT, $json)) {
            $value = $json[self::FIELD_ABATEMENT_STRING] ?? null;
            $type->setAbatementString(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_ABATEMENT_STRING_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_STAGE]) || array_key_exists(self::FIELD_STAGE, $json)) {
            $type->setStage(FHIRConditionStage::jsonUnserialize($json[self::FIELD_STAGE], $config));
        }
        if (isset($json[self::FIELD_EVIDENCE]) || array_key_exists(self::FIELD_EVIDENCE, $json)) {
            $vs = $json[self::FIELD_EVIDENCE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addEvidence(FHIRConditionEvidence::jsonUnserialize($v, $config));
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
        if (isset($json[self::FIELD_NOTES])
            || isset($json[self::FIELD_NOTES_EXT])
            || array_key_exists(self::FIELD_NOTES, $json)
            || array_key_exists(self::FIELD_NOTES_EXT, $json)) {
            $value = $json[self::FIELD_NOTES] ?? null;
            $type->setNotes(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_NOTES_EXT] ?? []),
                $config,
            ));
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
        if (isset($this->patient)) {
            $out->patient = $this->patient;
        }
        if (isset($this->encounter)) {
            $out->encounter = $this->encounter;
        }
        if (isset($this->asserter)) {
            $out->asserter = $this->asserter;
        }
        if (isset($this->dateRecorded)) {
            if (null !== ($val = $this->dateRecorded->getValue())) {
                $out->dateRecorded = $val;
            }
            $ext = $this->dateRecorded->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_dateRecorded = $ext;
            }
        }
        if (isset($this->code)) {
            $out->code = $this->code;
        }
        if (isset($this->category)) {
            $out->category = $this->category;
        }
        if (isset($this->clinicalStatus)) {
            if (null !== ($val = $this->clinicalStatus->getValue())) {
                $out->clinicalStatus = $val;
            }
            $ext = $this->clinicalStatus->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_clinicalStatus = $ext;
            }
        }
        if (isset($this->verificationStatus)) {
            if (null !== ($val = $this->verificationStatus->getValue())) {
                $out->verificationStatus = $val;
            }
            $ext = $this->verificationStatus->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_verificationStatus = $ext;
            }
        }
        if (isset($this->severity)) {
            $out->severity = $this->severity;
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
        if (isset($this->onsetQuantity)) {
            if (null !== ($val = $this->onsetQuantity->getValue())) {
                $out->onsetQuantity = $val;
            }
            $ext = $this->onsetQuantity->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_onsetQuantity = $ext;
            }
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
        if (isset($this->abatementDateTime)) {
            if (null !== ($val = $this->abatementDateTime->getValue())) {
                $out->abatementDateTime = $val;
            }
            $ext = $this->abatementDateTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_abatementDateTime = $ext;
            }
        }
        if (isset($this->abatementQuantity)) {
            if (null !== ($val = $this->abatementQuantity->getValue())) {
                $out->abatementQuantity = $val;
            }
            $ext = $this->abatementQuantity->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_abatementQuantity = $ext;
            }
        }
        if (isset($this->abatementBoolean)) {
            if (null !== ($val = $this->abatementBoolean->getValue())) {
                $out->abatementBoolean = $val;
            }
            $ext = $this->abatementBoolean->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_abatementBoolean = $ext;
            }
        }
        if (isset($this->abatementPeriod)) {
            $out->abatementPeriod = $this->abatementPeriod;
        }
        if (isset($this->abatementRange)) {
            $out->abatementRange = $this->abatementRange;
        }
        if (isset($this->abatementString)) {
            if (null !== ($val = $this->abatementString->getValue())) {
                $out->abatementString = $val;
            }
            $ext = $this->abatementString->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_abatementString = $ext;
            }
        }
        if (isset($this->stage)) {
            $out->stage = $this->stage;
        }
        if (isset($this->evidence) && [] !== $this->evidence) {
            $out->evidence = $this->evidence;
        }
        if (isset($this->bodySite) && [] !== $this->bodySite) {
            $out->bodySite = $this->bodySite;
        }
        if (isset($this->notes)) {
            if (null !== ($val = $this->notes->getValue())) {
                $out->notes = $val;
            }
            $ext = $this->notes->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_notes = $ext;
            }
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
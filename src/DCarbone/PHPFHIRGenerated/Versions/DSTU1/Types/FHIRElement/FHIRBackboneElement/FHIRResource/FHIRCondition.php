<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource;

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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionLocation;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionRelatedItem;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConditionStatus;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRResourceInline;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionTypeMap;

/**
 * Use to record detailed information about conditions, problems or diagnoses
 * recognized by a clinician. There are many uses including: recording a Diagnosis
 * during an Encounter; populating a problem List or a Summary Statement, such as a
 * Discharge Summary.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRCondition extends FHIRResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CONDITION;

    /* class_default.php:48 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_IDENTIFIER_EXT = '_identifier';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_ENCOUNTER = 'encounter';
    public const FIELD_ASSERTER = 'asserter';
    public const FIELD_DATE_ASSERTED = 'dateAsserted';
    public const FIELD_DATE_ASSERTED_EXT = '_dateAsserted';
    public const FIELD_CODE = 'code';
    public const FIELD_CATEGORY = 'category';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_CERTAINTY = 'certainty';
    public const FIELD_SEVERITY = 'severity';
    public const FIELD_ONSET_DATE = 'onsetDate';
    public const FIELD_ONSET_DATE_EXT = '_onsetDate';
    public const FIELD_ONSET_AGE = 'onsetAge';
    public const FIELD_ONSET_AGE_EXT = '_onsetAge';
    public const FIELD_ABATEMENT_DATE = 'abatementDate';
    public const FIELD_ABATEMENT_DATE_EXT = '_abatementDate';
    public const FIELD_ABATEMENT_AGE = 'abatementAge';
    public const FIELD_ABATEMENT_AGE_EXT = '_abatementAge';
    public const FIELD_ABATEMENT_BOOLEAN = 'abatementBoolean';
    public const FIELD_ABATEMENT_BOOLEAN_EXT = '_abatementBoolean';
    public const FIELD_STAGE = 'stage';
    public const FIELD_EVIDENCE = 'evidence';
    public const FIELD_LOCATION = 'location';
    public const FIELD_RELATED_ITEM = 'relatedItem';
    public const FIELD_NOTES = 'notes';
    public const FIELD_NOTES_EXT = '_notes';

    /* class_default.php:67 */
    private static array $_validationRules = [
        self::FIELD_ID => [
            Constants::VALIDATE_PATTERN => '/^[a-z0-9\\-\\.]{1,36}$/',
        ],
        self::FIELD_SUBJECT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_CODE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_DATE_ASSERTED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ONSET_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ONSET_AGE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ABATEMENT_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ABATEMENT_AGE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ABATEMENT_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_NOTES => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this condition that are defined by
     * business processed and/ or used to refer to it when a direct URL reference to
     * the resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the patient who the condition record is associated with.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $subject;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Encounter during which the condition was first asserted.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $encounter;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Person who takes responsibility for asserting the existence of the condition as
     * part of the electronic record.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $asserter;
    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date the condition/problem/diagnosis was first
     * detected/suspected.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $dateAsserted;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identification of the condition, problem or diagnosis.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $code;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A category assigned to the condition. E.g. complaint | symptom | finding |
     * diagnosis.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $category;
    /**
     * The clinical status of the Condition or diagnosis
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The clinical status of the condition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConditionStatus 
     */
    protected FHIRConditionStatus $status;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The degree of confidence that this condition is correct.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $certainty;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A subjective assessment of the severity of the condition as evaluated by the
     * clinician.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $severity;
    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date the condition began, in the opinion of the clinician.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $onsetDate;
    /**
     * Estimated or actual date the condition began, in the opinion of the clinician.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRAge 
     */
    protected FHIRAge $onsetAge;
    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $abatementDate;
    /**
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRAge 
     */
    protected FHIRAge $abatementAge;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $abatementBoolean;
    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * Clinical stage or grade of a condition. May include formal severity assessments.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage 
     */
    protected FHIRConditionStage $stage;
    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * Supporting Evidence / manifestations that are the basis on which this condition
     * is suspected or confirmed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence[] 
     */
    protected array $evidence;
    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * The anatomical location where this condition manifests itself.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionLocation[] 
     */
    protected array $location;
    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * Further conditions, problems, diagnoses, procedures or events that are related
     * in some way to this condition, or the substance that caused/triggered this
     * Condition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionRelatedItem[] 
     */
    protected array $relatedItem;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information about the Condition. This is a general notes/comments
     * entry for description of the Condition, its diagnosis and prognosis.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $notes;

    /* constructor.php:63 */
    /**
     * FHIRCondition Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRResourceInline[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $subject
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $encounter
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $asserter
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate $dateAsserted
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $code
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $category
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConditionStatus $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $certainty
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $severity
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate $onsetDate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRAge $onsetAge
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate $abatementDate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRAge $abatementAge
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $abatementBoolean
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage $stage
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence[] $evidence
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionLocation[] $location
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionRelatedItem[] $relatedItem
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $notes
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $identifier = null,
                                null|FHIRResourceReference $subject = null,
                                null|FHIRResourceReference $encounter = null,
                                null|FHIRResourceReference $asserter = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $dateAsserted = null,
                                null|FHIRCodeableConcept $code = null,
                                null|FHIRCodeableConcept $category = null,
                                null|FHIRConditionStatus $status = null,
                                null|FHIRCodeableConcept $certainty = null,
                                null|FHIRCodeableConcept $severity = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $onsetDate = null,
                                null|FHIRAge $onsetAge = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $abatementDate = null,
                                null|FHIRAge $abatementAge = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $abatementBoolean = null,
                                null|FHIRConditionStage $stage = null,
                                null|iterable $evidence = null,
                                null|iterable $location = null,
                                null|iterable $relatedItem = null,
                                null|string|FHIRStringPrimitive|FHIRString $notes = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            language: $language,
                            text: $text,
                            contained: $contained,
                            fhirComments: $fhirComments);
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $subject) {
            $this->setSubject($subject);
        }
        if (null !== $encounter) {
            $this->setEncounter($encounter);
        }
        if (null !== $asserter) {
            $this->setAsserter($asserter);
        }
        if (null !== $dateAsserted) {
            $this->setDateAsserted($dateAsserted);
        }
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $category) {
            $this->setCategory($category);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $certainty) {
            $this->setCertainty($certainty);
        }
        if (null !== $severity) {
            $this->setSeverity($severity);
        }
        if (null !== $onsetDate) {
            $this->setOnsetDate($onsetDate);
        }
        if (null !== $onsetAge) {
            $this->setOnsetAge($onsetAge);
        }
        if (null !== $abatementDate) {
            $this->setAbatementDate($abatementDate);
        }
        if (null !== $abatementAge) {
            $this->setAbatementAge($abatementAge);
        }
        if (null !== $abatementBoolean) {
            $this->setAbatementBoolean($abatementBoolean);
        }
        if (null !== $stage) {
            $this->setStage($stage);
        }
        if (null !== $evidence) {
            $this->setEvidence(...$evidence);
        }
        if (null !== $location) {
            $this->setLocation(...$location);
        }
        if (null !== $relatedItem) {
            $this->setRelatedItem(...$relatedItem);
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
     * business processed and/ or used to refer to it when a direct URL reference to
     * the resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier>
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
     * business processed and/ or used to refer to it when a direct URL reference to
     * the resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier $identifier
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
     * This records identifiers associated with this condition that are defined by
     * business processed and/ or used to refer to it when a direct URL reference to
     * the resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier ...$identifier
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the patient who the condition record is associated with.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getSubject(): null|FHIRResourceReference
    {
        return $this->subject ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the patient who the condition record is associated with.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $subject
     * @return static
     */
    public function setSubject(null|FHIRResourceReference $subject): self
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
     * Encounter during which the condition was first asserted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getEncounter(): null|FHIRResourceReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $encounter
     * @return static
     */
    public function setEncounter(null|FHIRResourceReference $encounter): self
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
     * Person who takes responsibility for asserting the existence of the condition as
     * part of the electronic record.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getAsserter(): null|FHIRResourceReference
    {
        return $this->asserter ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Person who takes responsibility for asserting the existence of the condition as
     * part of the electronic record.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $asserter
     * @return static
     */
    public function setAsserter(null|FHIRResourceReference $asserter): self
    {
        if (null === $asserter) {
            unset($this->asserter);
            return $this;
        }
        $this->asserter = $asserter;
        return $this;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date the condition/problem/diagnosis was first
     * detected/suspected.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate
     */
    public function getDateAsserted(): null|FHIRDate
    {
        return $this->dateAsserted ?? null;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date the condition/problem/diagnosis was first
     * detected/suspected.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate $dateAsserted
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDateAsserted(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $dateAsserted,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $dateAsserted) {
            unset($this->dateAsserted);
            return $this;
        }
        if (!($dateAsserted instanceof FHIRDate)) {
            $dateAsserted = new FHIRDate(value: $dateAsserted);
        }
        $this->dateAsserted = $dateAsserted;
        if ($this->_valueXMLLocations[self::FIELD_DATE_ASSERTED] !== $valueXMLLocation) {
            $this->_setDateAssertedValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the dateAsserted element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDateAssertedValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DATE_ASSERTED];
    }

    /**
     * Set the location the "value" field of the dateAsserted element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDateAssertedValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DATE_ASSERTED] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $code
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
     * A category assigned to the condition. E.g. complaint | symptom | finding |
     * diagnosis.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
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
     * A category assigned to the condition. E.g. complaint | symptom | finding |
     * diagnosis.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $category
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
     * The clinical status of the Condition or diagnosis
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The clinical status of the condition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConditionStatus
     */
    public function getStatus(): null|FHIRConditionStatus
    {
        return $this->status ?? null;
    }

    /**
     * The clinical status of the Condition or diagnosis
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The clinical status of the condition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConditionStatus $status
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStatus(null|FHIRConditionStatus $status,
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
     * The degree of confidence that this condition is correct.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getCertainty(): null|FHIRCodeableConcept
    {
        return $this->certainty ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The degree of confidence that this condition is correct.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $certainty
     * @return static
     */
    public function setCertainty(null|FHIRCodeableConcept $certainty): self
    {
        if (null === $certainty) {
            unset($this->certainty);
            return $this;
        }
        $this->certainty = $certainty;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $severity
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
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date the condition began, in the opinion of the clinician.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate
     */
    public function getOnsetDate(): null|FHIRDate
    {
        return $this->onsetDate ?? null;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated or actual date the condition began, in the opinion of the clinician.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate $onsetDate
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setOnsetDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $onsetDate,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $onsetDate) {
            unset($this->onsetDate);
            return $this;
        }
        if (!($onsetDate instanceof FHIRDate)) {
            $onsetDate = new FHIRDate(value: $onsetDate);
        }
        $this->onsetDate = $onsetDate;
        if ($this->_valueXMLLocations[self::FIELD_ONSET_DATE] !== $valueXMLLocation) {
            $this->_setOnsetDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the onsetDate element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getOnsetDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ONSET_DATE];
    }

    /**
     * Set the location the "value" field of the onsetDate element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setOnsetDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ONSET_DATE] = $valueXMLLocation;
        return $this;
    }

    /**
     * Estimated or actual date the condition began, in the opinion of the clinician.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getOnsetAge(): null|FHIRAge
    {
        return $this->onsetAge ?? null;
    }

    /**
     * Estimated or actual date the condition began, in the opinion of the clinician.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRAge $onsetAge
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setOnsetAge(null|FHIRAge $onsetAge,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $onsetAge) {
            unset($this->onsetAge);
            return $this;
        }
        $this->onsetAge = $onsetAge;
        if ($this->_valueXMLLocations[self::FIELD_ONSET_AGE] !== $valueXMLLocation) {
            $this->_setOnsetAgeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the onsetAge element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getOnsetAgeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ONSET_AGE];
    }

    /**
     * Set the location the "value" field of the onsetAge element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setOnsetAgeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ONSET_AGE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate
     */
    public function getAbatementDate(): null|FHIRDate
    {
        return $this->abatementDate ?? null;
    }

    /**
     * A date, or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate $abatementDate
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAbatementDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $abatementDate,
                                     ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $abatementDate) {
            unset($this->abatementDate);
            return $this;
        }
        if (!($abatementDate instanceof FHIRDate)) {
            $abatementDate = new FHIRDate(value: $abatementDate);
        }
        $this->abatementDate = $abatementDate;
        if ($this->_valueXMLLocations[self::FIELD_ABATEMENT_DATE] !== $valueXMLLocation) {
            $this->_setAbatementDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the abatementDate element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAbatementDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ABATEMENT_DATE];
    }

    /**
     * Set the location the "value" field of the abatementDate element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAbatementDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ABATEMENT_DATE] = $valueXMLLocation;
        return $this;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getAbatementAge(): null|FHIRAge
    {
        return $this->abatementAge ?? null;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission.
     * This is called "abatement" because of the many overloaded connotations
     * associated with "remission" or "resolution" - Conditions are never really
     * resolved, but they can abate.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRAge $abatementAge
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAbatementAge(null|FHIRAge $abatementAge,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $abatementAge) {
            unset($this->abatementAge);
            return $this;
        }
        $this->abatementAge = $abatementAge;
        if ($this->_valueXMLLocations[self::FIELD_ABATEMENT_AGE] !== $valueXMLLocation) {
            $this->_setAbatementAgeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the abatementAge element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAbatementAgeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ABATEMENT_AGE];
    }

    /**
     * Set the location the "value" field of the abatementAge element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAbatementAgeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ABATEMENT_AGE] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean
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
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $abatementBoolean
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
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * Clinical stage or grade of a condition. May include formal severity assessments.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage
     */
    public function getStage(): null|FHIRConditionStage
    {
        return $this->stage ?? null;
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * Clinical stage or grade of a condition. May include formal severity assessments.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage $stage
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
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * Supporting Evidence / manifestations that are the basis on which this condition
     * is suspected or confirmed.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence[]
     */
    public function getEvidence(): array
    {
        return $this->evidence ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence>
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
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * Supporting Evidence / manifestations that are the basis on which this condition
     * is suspected or confirmed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence $evidence
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
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * Supporting Evidence / manifestations that are the basis on which this condition
     * is suspected or confirmed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence ...$evidence
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
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * The anatomical location where this condition manifests itself.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionLocation[]
     */
    public function getLocation(): array
    {
        return $this->location ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionLocation>
     */
    public function getLocationIterator(): iterable
    {
        if (!isset($this->location)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->location);
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * The anatomical location where this condition manifests itself.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionLocation $location
     * @return static
     */
    public function addLocation(FHIRConditionLocation $location): self
    {
        if (!isset($this->location)) {
            $this->location = [];
        }
        $this->location[] = $location;
        return $this;
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * The anatomical location where this condition manifests itself.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionLocation ...$location
     * @return static
     */
    public function setLocation(FHIRConditionLocation ...$location): self
    {
        if ([] === $location) {
            unset($this->location);
            return $this;
        }
        $this->location = $location;
        return $this;
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * Further conditions, problems, diagnoses, procedures or events that are related
     * in some way to this condition, or the substance that caused/triggered this
     * Condition.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionRelatedItem[]
     */
    public function getRelatedItem(): array
    {
        return $this->relatedItem ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionRelatedItem>
     */
    public function getRelatedItemIterator(): iterable
    {
        if (!isset($this->relatedItem)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->relatedItem);
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * Further conditions, problems, diagnoses, procedures or events that are related
     * in some way to this condition, or the substance that caused/triggered this
     * Condition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionRelatedItem $relatedItem
     * @return static
     */
    public function addRelatedItem(FHIRConditionRelatedItem $relatedItem): self
    {
        if (!isset($this->relatedItem)) {
            $this->relatedItem = [];
        }
        $this->relatedItem[] = $relatedItem;
        return $this;
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     *
     * Further conditions, problems, diagnoses, procedures or events that are related
     * in some way to this condition, or the substance that caused/triggered this
     * Condition.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionRelatedItem ...$relatedItem
     * @return static
     */
    public function setRelatedItem(FHIRConditionRelatedItem ...$relatedItem): self
    {
        if ([] === $relatedItem) {
            unset($this->relatedItem);
            return $this;
        }
        $this->relatedItem = $relatedItem;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information about the Condition. This is a general notes/comments
     * entry for description of the Condition, its diagnosis and prognosis.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getNotes(): null|FHIRString
    {
        return $this->notes ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information about the Condition. This is a general notes/comments
     * entry for description of the Condition, its diagnosis and prognosis.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $notes
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
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_DATE_ASSERTED])) {
            $v = $this->getDateAsserted();
            foreach($validationRules[self::FIELD_DATE_ASSERTED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATE_ASSERTED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE_ASSERTED])) {
                        $errs[self::FIELD_DATE_ASSERTED] = [];
                    }
                    $errs[self::FIELD_DATE_ASSERTED][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_CERTAINTY])) {
            $v = $this->getCertainty();
            foreach($validationRules[self::FIELD_CERTAINTY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CERTAINTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CERTAINTY])) {
                        $errs[self::FIELD_CERTAINTY] = [];
                    }
                    $errs[self::FIELD_CERTAINTY][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_ONSET_DATE])) {
            $v = $this->getOnsetDate();
            foreach($validationRules[self::FIELD_ONSET_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ONSET_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ONSET_DATE])) {
                        $errs[self::FIELD_ONSET_DATE] = [];
                    }
                    $errs[self::FIELD_ONSET_DATE][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_ABATEMENT_DATE])) {
            $v = $this->getAbatementDate();
            foreach($validationRules[self::FIELD_ABATEMENT_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ABATEMENT_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ABATEMENT_DATE])) {
                        $errs[self::FIELD_ABATEMENT_DATE] = [];
                    }
                    $errs[self::FIELD_ABATEMENT_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ABATEMENT_AGE])) {
            $v = $this->getAbatementAge();
            foreach($validationRules[self::FIELD_ABATEMENT_AGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ABATEMENT_AGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ABATEMENT_AGE])) {
                        $errs[self::FIELD_ABATEMENT_AGE] = [];
                    }
                    $errs[self::FIELD_ABATEMENT_AGE][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_RELATED_ITEM])) {
            $v = $this->getRelatedItem();
            foreach($validationRules[self::FIELD_RELATED_ITEM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RELATED_ITEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATED_ITEM])) {
                        $errs[self::FIELD_RELATED_ITEM] = [];
                    }
                    $errs[self::FIELD_RELATED_ITEM][$rule] = $err;
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
        return $errs;
    }

    /* class_default.php:213 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCondition $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCondition
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
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LANGUAGE === $cen) {
                $type->setLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRNarrative::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED === $cen) {
                foreach ($ce->children() as $cen) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBJECT === $cen) {
                $type->setSubject(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENCOUNTER === $cen) {
                $type->setEncounter(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ASSERTER === $cen) {
                $type->setAsserter(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATE_ASSERTED === $cen) {
                $type->setDateAsserted(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE === $cen) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CATEGORY === $cen) {
                $type->setCategory(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRConditionStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CERTAINTY === $cen) {
                $type->setCertainty(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SEVERITY === $cen) {
                $type->setSeverity(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ONSET_DATE === $cen) {
                $type->setOnsetDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ONSET_AGE === $cen) {
                $type->setOnsetAge(FHIRAge::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ABATEMENT_DATE === $cen) {
                $type->setAbatementDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ABATEMENT_AGE === $cen) {
                $type->setAbatementAge(FHIRAge::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ABATEMENT_BOOLEAN === $cen) {
                $type->setAbatementBoolean(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STAGE === $cen) {
                $type->setStage(FHIRConditionStage::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EVIDENCE === $cen) {
                $type->addEvidence(FHIRConditionEvidence::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LOCATION === $cen) {
                $type->addLocation(FHIRConditionLocation::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RELATED_ITEM === $cen) {
                $type->addRelatedItem(FHIRConditionRelatedItem::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NOTES === $cen) {
                $type->setNotes(FHIRString::xmlUnserialize($ce, $config));
            }        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
                $type->_setLanguageValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DATE_ASSERTED])) {
            if (isset($type->dateAsserted)) {
                $type->dateAsserted->setValue((string)$attributes[self::FIELD_DATE_ASSERTED]);
                $type->_setDateAssertedValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDateAsserted((string)$attributes[self::FIELD_DATE_ASSERTED], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_ONSET_DATE])) {
            if (isset($type->onsetDate)) {
                $type->onsetDate->setValue((string)$attributes[self::FIELD_ONSET_DATE]);
                $type->_setOnsetDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setOnsetDate((string)$attributes[self::FIELD_ONSET_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ONSET_AGE])) {
            if (isset($type->onsetAge)) {
                $type->onsetAge->setValue((string)$attributes[self::FIELD_ONSET_AGE]);
                $type->_setOnsetAgeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setOnsetAge((string)$attributes[self::FIELD_ONSET_AGE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ABATEMENT_DATE])) {
            if (isset($type->abatementDate)) {
                $type->abatementDate->setValue((string)$attributes[self::FIELD_ABATEMENT_DATE]);
                $type->_setAbatementDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAbatementDate((string)$attributes[self::FIELD_ABATEMENT_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ABATEMENT_AGE])) {
            if (isset($type->abatementAge)) {
                $type->abatementAge->setValue((string)$attributes[self::FIELD_ABATEMENT_AGE]);
                $type->_setAbatementAgeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAbatementAge((string)$attributes[self::FIELD_ABATEMENT_AGE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->dateAsserted) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATE_ASSERTED]) {
            $xw->writeAttribute(self::FIELD_DATE_ASSERTED, $this->dateAsserted->_getFormattedValue());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getFormattedValue());
        }
        if (isset($this->onsetDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ONSET_DATE]) {
            $xw->writeAttribute(self::FIELD_ONSET_DATE, $this->onsetDate->_getFormattedValue());
        }
        if (isset($this->onsetAge) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ONSET_AGE]) {
            $xw->writeAttribute(self::FIELD_ONSET_AGE, $this->onsetAge->_getFormattedValue());
        }
        if (isset($this->abatementDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ABATEMENT_DATE]) {
            $xw->writeAttribute(self::FIELD_ABATEMENT_DATE, $this->abatementDate->_getFormattedValue());
        }
        if (isset($this->abatementAge) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ABATEMENT_AGE]) {
            $xw->writeAttribute(self::FIELD_ABATEMENT_AGE, $this->abatementAge->_getFormattedValue());
        }
        if (isset($this->abatementBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ABATEMENT_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_ABATEMENT_BOOLEAN, $this->abatementBoolean->_getFormattedValue());
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
        if (isset($this->asserter)) {
            $xw->startElement(self::FIELD_ASSERTER);
            $this->asserter->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dateAsserted)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATE_ASSERTED]
                || $this->dateAsserted->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATE_ASSERTED);
            $this->dateAsserted->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATE_ASSERTED]);
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
        if (isset($this->status)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATUS]
                || $this->status->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATUS]);
            $xw->endElement();
        }
        if (isset($this->certainty)) {
            $xw->startElement(self::FIELD_CERTAINTY);
            $this->certainty->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->severity)) {
            $xw->startElement(self::FIELD_SEVERITY);
            $this->severity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->onsetDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ONSET_DATE]
                || $this->onsetDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ONSET_DATE);
            $this->onsetDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ONSET_DATE]);
            $xw->endElement();
        }
        if (isset($this->onsetAge)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ONSET_AGE]
                || $this->onsetAge->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ONSET_AGE);
            $this->onsetAge->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ONSET_AGE]);
            $xw->endElement();
        }
        if (isset($this->abatementDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ABATEMENT_DATE]
                || $this->abatementDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ABATEMENT_DATE);
            $this->abatementDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ABATEMENT_DATE]);
            $xw->endElement();
        }
        if (isset($this->abatementAge)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ABATEMENT_AGE]
                || $this->abatementAge->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ABATEMENT_AGE);
            $this->abatementAge->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ABATEMENT_AGE]);
            $xw->endElement();
        }
        if (isset($this->abatementBoolean)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ABATEMENT_BOOLEAN]
                || $this->abatementBoolean->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ABATEMENT_BOOLEAN);
            $this->abatementBoolean->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ABATEMENT_BOOLEAN]);
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
        if (isset($this->location)) {
            foreach ($this->location as $v) {
                $xw->startElement(self::FIELD_LOCATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->relatedItem)) {
            foreach ($this->relatedItem as $v) {
                $xw->startElement(self::FIELD_RELATED_ITEM);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCondition $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCondition
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
        if (isset($json[self::FIELD_SUBJECT]) || array_key_exists(self::FIELD_SUBJECT, $json)) {
            $type->setSubject(FHIRResourceReference::jsonUnserialize(
                json: $json[self::FIELD_SUBJECT],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ENCOUNTER]) || array_key_exists(self::FIELD_ENCOUNTER, $json)) {
            $type->setEncounter(FHIRResourceReference::jsonUnserialize(
                json: $json[self::FIELD_ENCOUNTER],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ASSERTER]) || array_key_exists(self::FIELD_ASSERTER, $json)) {
            $type->setAsserter(FHIRResourceReference::jsonUnserialize(
                json: $json[self::FIELD_ASSERTER],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DATE_ASSERTED]) || isset($json[self::FIELD_DATE_ASSERTED_EXT]) || array_key_exists(self::FIELD_DATE_ASSERTED, $json) || array_key_exists(self::FIELD_DATE_ASSERTED_EXT, $json)) {
            $value = $json[self::FIELD_DATE_ASSERTED] ?? null;
            $ext = (array)($json[self::FIELD_DATE_ASSERTED_EXT] ?? []);
            $type->setDateAsserted(FHIRDate::jsonUnserialize(
                json: [FHIRDate::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_CODE]) || array_key_exists(self::FIELD_CODE, $json)) {
            $type->setCode(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_CODE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_CATEGORY]) || array_key_exists(self::FIELD_CATEGORY, $json)) {
            $type->setCategory(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_CATEGORY],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_STATUS]) || isset($json[self::FIELD_STATUS_EXT]) || array_key_exists(self::FIELD_STATUS, $json) || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $ext = (array)($json[self::FIELD_STATUS_EXT] ?? []);
            $type->setStatus(FHIRConditionStatus::jsonUnserialize(
                json: [FHIRConditionStatus::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_CERTAINTY]) || array_key_exists(self::FIELD_CERTAINTY, $json)) {
            $type->setCertainty(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_CERTAINTY],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_SEVERITY]) || array_key_exists(self::FIELD_SEVERITY, $json)) {
            $type->setSeverity(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_SEVERITY],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ONSET_DATE]) || isset($json[self::FIELD_ONSET_DATE_EXT]) || array_key_exists(self::FIELD_ONSET_DATE, $json) || array_key_exists(self::FIELD_ONSET_DATE_EXT, $json)) {
            $value = $json[self::FIELD_ONSET_DATE] ?? null;
            $ext = (array)($json[self::FIELD_ONSET_DATE_EXT] ?? []);
            $type->setOnsetDate(FHIRDate::jsonUnserialize(
                json: [FHIRDate::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ONSET_AGE]) || isset($json[self::FIELD_ONSET_AGE_EXT]) || array_key_exists(self::FIELD_ONSET_AGE, $json) || array_key_exists(self::FIELD_ONSET_AGE_EXT, $json)) {
            $value = $json[self::FIELD_ONSET_AGE] ?? null;
            $ext = (array)($json[self::FIELD_ONSET_AGE_EXT] ?? []);
            $type->setOnsetAge(FHIRAge::jsonUnserialize(
                json: [FHIRAge::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ABATEMENT_DATE]) || isset($json[self::FIELD_ABATEMENT_DATE_EXT]) || array_key_exists(self::FIELD_ABATEMENT_DATE, $json) || array_key_exists(self::FIELD_ABATEMENT_DATE_EXT, $json)) {
            $value = $json[self::FIELD_ABATEMENT_DATE] ?? null;
            $ext = (array)($json[self::FIELD_ABATEMENT_DATE_EXT] ?? []);
            $type->setAbatementDate(FHIRDate::jsonUnserialize(
                json: [FHIRDate::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ABATEMENT_AGE]) || isset($json[self::FIELD_ABATEMENT_AGE_EXT]) || array_key_exists(self::FIELD_ABATEMENT_AGE, $json) || array_key_exists(self::FIELD_ABATEMENT_AGE_EXT, $json)) {
            $value = $json[self::FIELD_ABATEMENT_AGE] ?? null;
            $ext = (array)($json[self::FIELD_ABATEMENT_AGE_EXT] ?? []);
            $type->setAbatementAge(FHIRAge::jsonUnserialize(
                json: [FHIRAge::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ABATEMENT_BOOLEAN]) || isset($json[self::FIELD_ABATEMENT_BOOLEAN_EXT]) || array_key_exists(self::FIELD_ABATEMENT_BOOLEAN, $json) || array_key_exists(self::FIELD_ABATEMENT_BOOLEAN_EXT, $json)) {
            $value = $json[self::FIELD_ABATEMENT_BOOLEAN] ?? null;
            $ext = (array)($json[self::FIELD_ABATEMENT_BOOLEAN_EXT] ?? []);
            $type->setAbatementBoolean(FHIRBoolean::jsonUnserialize(
                json: [FHIRBoolean::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_STAGE]) || array_key_exists(self::FIELD_STAGE, $json)) {
            $type->setStage(FHIRConditionStage::jsonUnserialize(
                json: $json[self::FIELD_STAGE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EVIDENCE]) || array_key_exists(self::FIELD_EVIDENCE, $json)) {
            $vs = $json[self::FIELD_EVIDENCE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addEvidence(FHIRConditionEvidence::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_LOCATION]) || array_key_exists(self::FIELD_LOCATION, $json)) {
            $vs = $json[self::FIELD_LOCATION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addLocation(FHIRConditionLocation::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_RELATED_ITEM]) || array_key_exists(self::FIELD_RELATED_ITEM, $json)) {
            $vs = $json[self::FIELD_RELATED_ITEM];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addRelatedItem(FHIRConditionRelatedItem::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_NOTES]) || isset($json[self::FIELD_NOTES_EXT]) || array_key_exists(self::FIELD_NOTES, $json) || array_key_exists(self::FIELD_NOTES_EXT, $json)) {
            $value = $json[self::FIELD_NOTES] ?? null;
            $ext = (array)($json[self::FIELD_NOTES_EXT] ?? []);
            $type->setNotes(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
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
        if (isset($this->subject)) {
            $out->subject = $this->subject;
        }
        if (isset($this->encounter)) {
            $out->encounter = $this->encounter;
        }
        if (isset($this->asserter)) {
            $out->asserter = $this->asserter;
        }
        if (isset($this->dateAsserted)) {
            if (null !== ($val = $this->dateAsserted->getValue())) {
                $out->dateAsserted = $val;
            }
            $ext = $this->dateAsserted->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_dateAsserted = $ext;
            }
        }
        if (isset($this->code)) {
            $out->code = $this->code;
        }
        if (isset($this->category)) {
            $out->category = $this->category;
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
        if (isset($this->certainty)) {
            $out->certainty = $this->certainty;
        }
        if (isset($this->severity)) {
            $out->severity = $this->severity;
        }
        if (isset($this->onsetDate)) {
            if (null !== ($val = $this->onsetDate->getValue())) {
                $out->onsetDate = $val;
            }
            $ext = $this->onsetDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_onsetDate = $ext;
            }
        }
        if (isset($this->onsetAge)) {
            if (null !== ($val = $this->onsetAge->getValue())) {
                $out->onsetAge = $val;
            }
            $ext = $this->onsetAge->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_onsetAge = $ext;
            }
        }
        if (isset($this->abatementDate)) {
            if (null !== ($val = $this->abatementDate->getValue())) {
                $out->abatementDate = $val;
            }
            $ext = $this->abatementDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_abatementDate = $ext;
            }
        }
        if (isset($this->abatementAge)) {
            if (null !== ($val = $this->abatementAge->getValue())) {
                $out->abatementAge = $val;
            }
            $ext = $this->abatementAge->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_abatementAge = $ext;
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
        if (isset($this->stage)) {
            $out->stage = $this->stage;
        }
        if (isset($this->evidence) && [] !== $this->evidence) {
            $out->evidence = $this->evidence;
        }
        if (isset($this->location) && [] !== $this->location) {
            $out->location = $this->location;
        }
        if (isset($this->relatedItem) && [] !== $this->relatedItem) {
            $out->relatedItem = $this->relatedItem;
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
<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource;

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
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigations;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionRuledOut;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRClinicalImpressionStatus;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRClinicalImpressionStatusList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionTypeMap;

/**
 * A record of a clinical assessment performed to determine what problem(s) may
 * affect the patient and before planning the treatments or management strategies
 * that are best to manage a patient's condition. Assessments are often 1:1 with a
 * clinical consultation / encounter, but this varies greatly depending on the
 * clinical workflow. This resource is called "ClinicalImpression" rather than
 * "ClinicalAssessment" to avoid confusion with the recording of assessment tools
 * such as Apgar score.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRClinicalImpression extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CLINICAL_IMPRESSION;

    /* class_default.php:47 */
    public const FIELD_PATIENT = 'patient';
    public const FIELD_ASSESSOR = 'assessor';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_DATE = 'date';
    public const FIELD_DATE_EXT = '_date';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_PREVIOUS = 'previous';
    public const FIELD_PROBLEM = 'problem';
    public const FIELD_TRIGGER_CODEABLE_CONCEPT = 'triggerCodeableConcept';
    public const FIELD_TRIGGER_REFERENCE = 'triggerReference';
    public const FIELD_INVESTIGATIONS = 'investigations';
    public const FIELD_PROTOCOL = 'protocol';
    public const FIELD_PROTOCOL_EXT = '_protocol';
    public const FIELD_SUMMARY = 'summary';
    public const FIELD_SUMMARY_EXT = '_summary';
    public const FIELD_FINDING = 'finding';
    public const FIELD_RESOLVED = 'resolved';
    public const FIELD_RULED_OUT = 'ruledOut';
    public const FIELD_PROGNOSIS = 'prognosis';
    public const FIELD_PROGNOSIS_EXT = '_prognosis';
    public const FIELD_PLAN = 'plan';
    public const FIELD_ACTION = 'action';

    /* class_default.php:66 */
    private static array $_validationRules = [
        self::FIELD_PATIENT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PROTOCOL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SUMMARY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PROGNOSIS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient being assessed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $patient;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clinician performing the assessment.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $assessor;
    /**
     * The workflow state of a clinical impression.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the workflow status of the assessment.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRClinicalImpressionStatus 
     */
    protected FHIRClinicalImpressionStatus $status;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The point in time at which the assessment was concluded (not when it was
     * recorded).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $date;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A summary of the context and/or cause of the assessment - why / where was it
     * peformed, and what patient events/sstatus prompted it.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $description;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the last assesment that was conducted bon this patient.
     * Assessments are often/usually ongoing in nature; a care provider (practitioner
     * or team) will make new assessments on an ongoing basis as new data arises or the
     * patient's conditions changes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $previous;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This a list of the general problems/conditions for a patient.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference[] 
     */
    protected array $problem;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request or event that necessitated this assessment. This may be a diagnosis,
     * a Care Plan, a Request Referral, or some other resource.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $triggerCodeableConcept;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request or event that necessitated this assessment. This may be a diagnosis,
     * a Care Plan, a Request Referral, or some other resource.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $triggerReference;
    /**
     * A record of a clinical assessment performed to determine what problem(s) may
     * affect the patient and before planning the treatments or management strategies
     * that are best to manage a patient's condition. Assessments are often 1:1 with a
     * clinical consultation / encounter, but this varies greatly depending on the
     * clinical workflow. This resource is called "ClinicalImpression" rather than
     * "ClinicalAssessment" to avoid confusion with the recording of assessment tools
     * such as Apgar score.
     *
     * One or more sets of investigations (signs, symptions, etc.). The actual grouping
     * of investigations vary greatly depending on the type and context of the
     * assessment. These investigations may include data generated during the
     * assessment process, or data previously generated and recorded that is pertinent
     * to the outcomes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigations[] 
     */
    protected array $investigations;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Reference to a specific published clinical protocol that was followed during
     * this assessment, and/or that provides evidence in support of the diagnosis.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $protocol;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A text summary of the investigations and the diagnosis.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $summary;
    /**
     * A record of a clinical assessment performed to determine what problem(s) may
     * affect the patient and before planning the treatments or management strategies
     * that are best to manage a patient's condition. Assessments are often 1:1 with a
     * clinical consultation / encounter, but this varies greatly depending on the
     * clinical workflow. This resource is called "ClinicalImpression" rather than
     * "ClinicalAssessment" to avoid confusion with the recording of assessment tools
     * such as Apgar score.
     *
     * Specific findings or diagnoses that was considered likely or relevant to ongoing
     * treatment.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding[] 
     */
    protected array $finding;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Diagnoses/conditions resolved since the last assessment.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $resolved;
    /**
     * A record of a clinical assessment performed to determine what problem(s) may
     * affect the patient and before planning the treatments or management strategies
     * that are best to manage a patient's condition. Assessments are often 1:1 with a
     * clinical consultation / encounter, but this varies greatly depending on the
     * clinical workflow. This resource is called "ClinicalImpression" rather than
     * "ClinicalAssessment" to avoid confusion with the recording of assessment tools
     * such as Apgar score.
     *
     * Diagnosis considered not possible.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionRuledOut[] 
     */
    protected array $ruledOut;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimate of likely outcome.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $prognosis;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Plan of action after assessment.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference[] 
     */
    protected array $plan;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Actions taken during assessment.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference[] 
     */
    protected array $action;

    /* constructor.php:63 */
    /**
     * FHIRClinicalImpression Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $patient
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $assessor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRClinicalImpressionStatusList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRClinicalImpressionStatus $status
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime $date
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $description
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $previous
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference[] $problem
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $triggerCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $triggerReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigations[] $investigations
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri $protocol
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $summary
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding[] $finding
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[] $resolved
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionRuledOut[] $ruledOut
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $prognosis
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference[] $plan
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference[] $action
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
                                null|FHIRReference $patient = null,
                                null|FHIRReference $assessor = null,
                                null|string|FHIRClinicalImpressionStatusList|FHIRClinicalImpressionStatus $status = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date = null,
                                null|string|FHIRStringPrimitive|FHIRString $description = null,
                                null|FHIRReference $previous = null,
                                null|iterable $problem = null,
                                null|FHIRCodeableConcept $triggerCodeableConcept = null,
                                null|FHIRReference $triggerReference = null,
                                null|iterable $investigations = null,
                                null|string|FHIRUriPrimitive|FHIRUri $protocol = null,
                                null|string|FHIRStringPrimitive|FHIRString $summary = null,
                                null|iterable $finding = null,
                                null|iterable $resolved = null,
                                null|iterable $ruledOut = null,
                                null|string|FHIRStringPrimitive|FHIRString $prognosis = null,
                                null|iterable $plan = null,
                                null|iterable $action = null,
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
        if (null !== $patient) {
            $this->setPatient($patient);
        }
        if (null !== $assessor) {
            $this->setAssessor($assessor);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $date) {
            $this->setDate($date);
        }
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $previous) {
            $this->setPrevious($previous);
        }
        if (null !== $problem) {
            $this->setProblem(...$problem);
        }
        if (null !== $triggerCodeableConcept) {
            $this->setTriggerCodeableConcept($triggerCodeableConcept);
        }
        if (null !== $triggerReference) {
            $this->setTriggerReference($triggerReference);
        }
        if (null !== $investigations) {
            $this->setInvestigations(...$investigations);
        }
        if (null !== $protocol) {
            $this->setProtocol($protocol);
        }
        if (null !== $summary) {
            $this->setSummary($summary);
        }
        if (null !== $finding) {
            $this->setFinding(...$finding);
        }
        if (null !== $resolved) {
            $this->setResolved(...$resolved);
        }
        if (null !== $ruledOut) {
            $this->setRuledOut(...$ruledOut);
        }
        if (null !== $prognosis) {
            $this->setPrognosis($prognosis);
        }
        if (null !== $plan) {
            $this->setPlan(...$plan);
        }
        if (null !== $action) {
            $this->setAction(...$action);
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient being assessed.
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
     * The patient being assessed.
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
     * The clinician performing the assessment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getAssessor(): null|FHIRReference
    {
        return $this->assessor ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clinician performing the assessment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $assessor
     * @return static
     */
    public function setAssessor(null|FHIRReference $assessor): self
    {
        if (null === $assessor) {
            unset($this->assessor);
            return $this;
        }
        $this->assessor = $assessor;
        return $this;
    }

    /**
     * The workflow state of a clinical impression.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the workflow status of the assessment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRClinicalImpressionStatus
     */
    public function getStatus(): null|FHIRClinicalImpressionStatus
    {
        return $this->status ?? null;
    }

    /**
     * The workflow state of a clinical impression.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the workflow status of the assessment.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRClinicalImpressionStatusList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRClinicalImpressionStatus $status
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStatus(null|string|FHIRClinicalImpressionStatusList|FHIRClinicalImpressionStatus $status,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIRClinicalImpressionStatus)) {
            $status = new FHIRClinicalImpressionStatus(value: $status);
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The point in time at which the assessment was concluded (not when it was
     * recorded).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime
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
     * The point in time at which the assessment was concluded (not when it was
     * recorded).
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime $date
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
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A summary of the context and/or cause of the assessment - why / where was it
     * peformed, and what patient events/sstatus prompted it.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
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
     * A summary of the context and/or cause of the assessment - why / where was it
     * peformed, and what patient events/sstatus prompted it.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $description
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
     * A reference to the last assesment that was conducted bon this patient.
     * Assessments are often/usually ongoing in nature; a care provider (practitioner
     * or team) will make new assessments on an ongoing basis as new data arises or the
     * patient's conditions changes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getPrevious(): null|FHIRReference
    {
        return $this->previous ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the last assesment that was conducted bon this patient.
     * Assessments are often/usually ongoing in nature; a care provider (practitioner
     * or team) will make new assessments on an ongoing basis as new data arises or the
     * patient's conditions changes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $previous
     * @return static
     */
    public function setPrevious(null|FHIRReference $previous): self
    {
        if (null === $previous) {
            unset($this->previous);
            return $this;
        }
        $this->previous = $previous;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This a list of the general problems/conditions for a patient.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference[]
     */
    public function getProblem(): array
    {
        return $this->problem ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference>
     */
    public function getProblemIterator(): iterable
    {
        if (!isset($this->problem)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->problem);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This a list of the general problems/conditions for a patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $problem
     * @return static
     */
    public function addProblem(FHIRReference $problem): self
    {
        if (!isset($this->problem)) {
            $this->problem = [];
        }
        $this->problem[] = $problem;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This a list of the general problems/conditions for a patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference ...$problem
     * @return static
     */
    public function setProblem(FHIRReference ...$problem): self
    {
        if ([] === $problem) {
            unset($this->problem);
            return $this;
        }
        $this->problem = $problem;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request or event that necessitated this assessment. This may be a diagnosis,
     * a Care Plan, a Request Referral, or some other resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getTriggerCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->triggerCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request or event that necessitated this assessment. This may be a diagnosis,
     * a Care Plan, a Request Referral, or some other resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $triggerCodeableConcept
     * @return static
     */
    public function setTriggerCodeableConcept(null|FHIRCodeableConcept $triggerCodeableConcept): self
    {
        if (null === $triggerCodeableConcept) {
            unset($this->triggerCodeableConcept);
            return $this;
        }
        $this->triggerCodeableConcept = $triggerCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request or event that necessitated this assessment. This may be a diagnosis,
     * a Care Plan, a Request Referral, or some other resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getTriggerReference(): null|FHIRReference
    {
        return $this->triggerReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request or event that necessitated this assessment. This may be a diagnosis,
     * a Care Plan, a Request Referral, or some other resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $triggerReference
     * @return static
     */
    public function setTriggerReference(null|FHIRReference $triggerReference): self
    {
        if (null === $triggerReference) {
            unset($this->triggerReference);
            return $this;
        }
        $this->triggerReference = $triggerReference;
        return $this;
    }

    /**
     * A record of a clinical assessment performed to determine what problem(s) may
     * affect the patient and before planning the treatments or management strategies
     * that are best to manage a patient's condition. Assessments are often 1:1 with a
     * clinical consultation / encounter, but this varies greatly depending on the
     * clinical workflow. This resource is called "ClinicalImpression" rather than
     * "ClinicalAssessment" to avoid confusion with the recording of assessment tools
     * such as Apgar score.
     *
     * One or more sets of investigations (signs, symptions, etc.). The actual grouping
     * of investigations vary greatly depending on the type and context of the
     * assessment. These investigations may include data generated during the
     * assessment process, or data previously generated and recorded that is pertinent
     * to the outcomes.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigations[]
     */
    public function getInvestigations(): array
    {
        return $this->investigations ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigations>
     */
    public function getInvestigationsIterator(): iterable
    {
        if (!isset($this->investigations)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->investigations);
    }

    /**
     * A record of a clinical assessment performed to determine what problem(s) may
     * affect the patient and before planning the treatments or management strategies
     * that are best to manage a patient's condition. Assessments are often 1:1 with a
     * clinical consultation / encounter, but this varies greatly depending on the
     * clinical workflow. This resource is called "ClinicalImpression" rather than
     * "ClinicalAssessment" to avoid confusion with the recording of assessment tools
     * such as Apgar score.
     *
     * One or more sets of investigations (signs, symptions, etc.). The actual grouping
     * of investigations vary greatly depending on the type and context of the
     * assessment. These investigations may include data generated during the
     * assessment process, or data previously generated and recorded that is pertinent
     * to the outcomes.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigations $investigations
     * @return static
     */
    public function addInvestigations(FHIRClinicalImpressionInvestigations $investigations): self
    {
        if (!isset($this->investigations)) {
            $this->investigations = [];
        }
        $this->investigations[] = $investigations;
        return $this;
    }

    /**
     * A record of a clinical assessment performed to determine what problem(s) may
     * affect the patient and before planning the treatments or management strategies
     * that are best to manage a patient's condition. Assessments are often 1:1 with a
     * clinical consultation / encounter, but this varies greatly depending on the
     * clinical workflow. This resource is called "ClinicalImpression" rather than
     * "ClinicalAssessment" to avoid confusion with the recording of assessment tools
     * such as Apgar score.
     *
     * One or more sets of investigations (signs, symptions, etc.). The actual grouping
     * of investigations vary greatly depending on the type and context of the
     * assessment. These investigations may include data generated during the
     * assessment process, or data previously generated and recorded that is pertinent
     * to the outcomes.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigations ...$investigations
     * @return static
     */
    public function setInvestigations(FHIRClinicalImpressionInvestigations ...$investigations): self
    {
        if ([] === $investigations) {
            unset($this->investigations);
            return $this;
        }
        $this->investigations = $investigations;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Reference to a specific published clinical protocol that was followed during
     * this assessment, and/or that provides evidence in support of the diagnosis.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri
     */
    public function getProtocol(): null|FHIRUri
    {
        return $this->protocol ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Reference to a specific published clinical protocol that was followed during
     * this assessment, and/or that provides evidence in support of the diagnosis.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri $protocol
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setProtocol(null|string|FHIRUriPrimitive|FHIRUri $protocol,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $protocol) {
            unset($this->protocol);
            return $this;
        }
        if (!($protocol instanceof FHIRUri)) {
            $protocol = new FHIRUri(value: $protocol);
        }
        $this->protocol = $protocol;
        if ($this->_valueXMLLocations[self::FIELD_PROTOCOL] !== $valueXMLLocation) {
            $this->_setProtocolValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the protocol element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getProtocolValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PROTOCOL];
    }

    /**
     * Set the location the "value" field of the protocol element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setProtocolValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PROTOCOL] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A text summary of the investigations and the diagnosis.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getSummary(): null|FHIRString
    {
        return $this->summary ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A text summary of the investigations and the diagnosis.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $summary
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSummary(null|string|FHIRStringPrimitive|FHIRString $summary,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $summary) {
            unset($this->summary);
            return $this;
        }
        if (!($summary instanceof FHIRString)) {
            $summary = new FHIRString(value: $summary);
        }
        $this->summary = $summary;
        if ($this->_valueXMLLocations[self::FIELD_SUMMARY] !== $valueXMLLocation) {
            $this->_setSummaryValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the summary element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getSummaryValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_SUMMARY];
    }

    /**
     * Set the location the "value" field of the summary element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setSummaryValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_SUMMARY] = $valueXMLLocation;
        return $this;
    }

    /**
     * A record of a clinical assessment performed to determine what problem(s) may
     * affect the patient and before planning the treatments or management strategies
     * that are best to manage a patient's condition. Assessments are often 1:1 with a
     * clinical consultation / encounter, but this varies greatly depending on the
     * clinical workflow. This resource is called "ClinicalImpression" rather than
     * "ClinicalAssessment" to avoid confusion with the recording of assessment tools
     * such as Apgar score.
     *
     * Specific findings or diagnoses that was considered likely or relevant to ongoing
     * treatment.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding[]
     */
    public function getFinding(): array
    {
        return $this->finding ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding>
     */
    public function getFindingIterator(): iterable
    {
        if (!isset($this->finding)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->finding);
    }

    /**
     * A record of a clinical assessment performed to determine what problem(s) may
     * affect the patient and before planning the treatments or management strategies
     * that are best to manage a patient's condition. Assessments are often 1:1 with a
     * clinical consultation / encounter, but this varies greatly depending on the
     * clinical workflow. This resource is called "ClinicalImpression" rather than
     * "ClinicalAssessment" to avoid confusion with the recording of assessment tools
     * such as Apgar score.
     *
     * Specific findings or diagnoses that was considered likely or relevant to ongoing
     * treatment.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding $finding
     * @return static
     */
    public function addFinding(FHIRClinicalImpressionFinding $finding): self
    {
        if (!isset($this->finding)) {
            $this->finding = [];
        }
        $this->finding[] = $finding;
        return $this;
    }

    /**
     * A record of a clinical assessment performed to determine what problem(s) may
     * affect the patient and before planning the treatments or management strategies
     * that are best to manage a patient's condition. Assessments are often 1:1 with a
     * clinical consultation / encounter, but this varies greatly depending on the
     * clinical workflow. This resource is called "ClinicalImpression" rather than
     * "ClinicalAssessment" to avoid confusion with the recording of assessment tools
     * such as Apgar score.
     *
     * Specific findings or diagnoses that was considered likely or relevant to ongoing
     * treatment.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding ...$finding
     * @return static
     */
    public function setFinding(FHIRClinicalImpressionFinding ...$finding): self
    {
        if ([] === $finding) {
            unset($this->finding);
            return $this;
        }
        $this->finding = $finding;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Diagnoses/conditions resolved since the last assessment.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getResolved(): array
    {
        return $this->resolved ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getResolvedIterator(): iterable
    {
        if (!isset($this->resolved)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->resolved);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Diagnoses/conditions resolved since the last assessment.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $resolved
     * @return static
     */
    public function addResolved(FHIRCodeableConcept $resolved): self
    {
        if (!isset($this->resolved)) {
            $this->resolved = [];
        }
        $this->resolved[] = $resolved;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Diagnoses/conditions resolved since the last assessment.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept ...$resolved
     * @return static
     */
    public function setResolved(FHIRCodeableConcept ...$resolved): self
    {
        if ([] === $resolved) {
            unset($this->resolved);
            return $this;
        }
        $this->resolved = $resolved;
        return $this;
    }

    /**
     * A record of a clinical assessment performed to determine what problem(s) may
     * affect the patient and before planning the treatments or management strategies
     * that are best to manage a patient's condition. Assessments are often 1:1 with a
     * clinical consultation / encounter, but this varies greatly depending on the
     * clinical workflow. This resource is called "ClinicalImpression" rather than
     * "ClinicalAssessment" to avoid confusion with the recording of assessment tools
     * such as Apgar score.
     *
     * Diagnosis considered not possible.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionRuledOut[]
     */
    public function getRuledOut(): array
    {
        return $this->ruledOut ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionRuledOut>
     */
    public function getRuledOutIterator(): iterable
    {
        if (!isset($this->ruledOut)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->ruledOut);
    }

    /**
     * A record of a clinical assessment performed to determine what problem(s) may
     * affect the patient and before planning the treatments or management strategies
     * that are best to manage a patient's condition. Assessments are often 1:1 with a
     * clinical consultation / encounter, but this varies greatly depending on the
     * clinical workflow. This resource is called "ClinicalImpression" rather than
     * "ClinicalAssessment" to avoid confusion with the recording of assessment tools
     * such as Apgar score.
     *
     * Diagnosis considered not possible.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionRuledOut $ruledOut
     * @return static
     */
    public function addRuledOut(FHIRClinicalImpressionRuledOut $ruledOut): self
    {
        if (!isset($this->ruledOut)) {
            $this->ruledOut = [];
        }
        $this->ruledOut[] = $ruledOut;
        return $this;
    }

    /**
     * A record of a clinical assessment performed to determine what problem(s) may
     * affect the patient and before planning the treatments or management strategies
     * that are best to manage a patient's condition. Assessments are often 1:1 with a
     * clinical consultation / encounter, but this varies greatly depending on the
     * clinical workflow. This resource is called "ClinicalImpression" rather than
     * "ClinicalAssessment" to avoid confusion with the recording of assessment tools
     * such as Apgar score.
     *
     * Diagnosis considered not possible.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionRuledOut ...$ruledOut
     * @return static
     */
    public function setRuledOut(FHIRClinicalImpressionRuledOut ...$ruledOut): self
    {
        if ([] === $ruledOut) {
            unset($this->ruledOut);
            return $this;
        }
        $this->ruledOut = $ruledOut;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimate of likely outcome.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getPrognosis(): null|FHIRString
    {
        return $this->prognosis ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimate of likely outcome.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $prognosis
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPrognosis(null|string|FHIRStringPrimitive|FHIRString $prognosis,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $prognosis) {
            unset($this->prognosis);
            return $this;
        }
        if (!($prognosis instanceof FHIRString)) {
            $prognosis = new FHIRString(value: $prognosis);
        }
        $this->prognosis = $prognosis;
        if ($this->_valueXMLLocations[self::FIELD_PROGNOSIS] !== $valueXMLLocation) {
            $this->_setPrognosisValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the prognosis element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getPrognosisValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PROGNOSIS];
    }

    /**
     * Set the location the "value" field of the prognosis element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setPrognosisValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PROGNOSIS] = $valueXMLLocation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Plan of action after assessment.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference[]
     */
    public function getPlan(): array
    {
        return $this->plan ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference>
     */
    public function getPlanIterator(): iterable
    {
        if (!isset($this->plan)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->plan);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Plan of action after assessment.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $plan
     * @return static
     */
    public function addPlan(FHIRReference $plan): self
    {
        if (!isset($this->plan)) {
            $this->plan = [];
        }
        $this->plan[] = $plan;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Plan of action after assessment.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference ...$plan
     * @return static
     */
    public function setPlan(FHIRReference ...$plan): self
    {
        if ([] === $plan) {
            unset($this->plan);
            return $this;
        }
        $this->plan = $plan;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Actions taken during assessment.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference[]
     */
    public function getAction(): array
    {
        return $this->action ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference>
     */
    public function getActionIterator(): iterable
    {
        if (!isset($this->action)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->action);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Actions taken during assessment.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $action
     * @return static
     */
    public function addAction(FHIRReference $action): self
    {
        if (!isset($this->action)) {
            $this->action = [];
        }
        $this->action[] = $action;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Actions taken during assessment.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference ...$action
     * @return static
     */
    public function setAction(FHIRReference ...$action): self
    {
        if ([] === $action) {
            unset($this->action);
            return $this;
        }
        $this->action = $action;
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
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_ASSESSOR])) {
            $v = $this->getAssessor();
            foreach($validationRules[self::FIELD_ASSESSOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ASSESSOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ASSESSOR])) {
                        $errs[self::FIELD_ASSESSOR] = [];
                    }
                    $errs[self::FIELD_ASSESSOR][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_PREVIOUS])) {
            $v = $this->getPrevious();
            foreach($validationRules[self::FIELD_PREVIOUS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PREVIOUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PREVIOUS])) {
                        $errs[self::FIELD_PREVIOUS] = [];
                    }
                    $errs[self::FIELD_PREVIOUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROBLEM])) {
            $v = $this->getProblem();
            foreach($validationRules[self::FIELD_PROBLEM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PROBLEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROBLEM])) {
                        $errs[self::FIELD_PROBLEM] = [];
                    }
                    $errs[self::FIELD_PROBLEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TRIGGER_CODEABLE_CONCEPT])) {
            $v = $this->getTriggerCodeableConcept();
            foreach($validationRules[self::FIELD_TRIGGER_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TRIGGER_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TRIGGER_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_TRIGGER_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_TRIGGER_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TRIGGER_REFERENCE])) {
            $v = $this->getTriggerReference();
            foreach($validationRules[self::FIELD_TRIGGER_REFERENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TRIGGER_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TRIGGER_REFERENCE])) {
                        $errs[self::FIELD_TRIGGER_REFERENCE] = [];
                    }
                    $errs[self::FIELD_TRIGGER_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INVESTIGATIONS])) {
            $v = $this->getInvestigations();
            foreach($validationRules[self::FIELD_INVESTIGATIONS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INVESTIGATIONS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INVESTIGATIONS])) {
                        $errs[self::FIELD_INVESTIGATIONS] = [];
                    }
                    $errs[self::FIELD_INVESTIGATIONS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROTOCOL])) {
            $v = $this->getProtocol();
            foreach($validationRules[self::FIELD_PROTOCOL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PROTOCOL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROTOCOL])) {
                        $errs[self::FIELD_PROTOCOL] = [];
                    }
                    $errs[self::FIELD_PROTOCOL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUMMARY])) {
            $v = $this->getSummary();
            foreach($validationRules[self::FIELD_SUMMARY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUMMARY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUMMARY])) {
                        $errs[self::FIELD_SUMMARY] = [];
                    }
                    $errs[self::FIELD_SUMMARY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FINDING])) {
            $v = $this->getFinding();
            foreach($validationRules[self::FIELD_FINDING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FINDING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FINDING])) {
                        $errs[self::FIELD_FINDING] = [];
                    }
                    $errs[self::FIELD_FINDING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESOLVED])) {
            $v = $this->getResolved();
            foreach($validationRules[self::FIELD_RESOLVED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RESOLVED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESOLVED])) {
                        $errs[self::FIELD_RESOLVED] = [];
                    }
                    $errs[self::FIELD_RESOLVED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RULED_OUT])) {
            $v = $this->getRuledOut();
            foreach($validationRules[self::FIELD_RULED_OUT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RULED_OUT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RULED_OUT])) {
                        $errs[self::FIELD_RULED_OUT] = [];
                    }
                    $errs[self::FIELD_RULED_OUT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROGNOSIS])) {
            $v = $this->getPrognosis();
            foreach($validationRules[self::FIELD_PROGNOSIS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PROGNOSIS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROGNOSIS])) {
                        $errs[self::FIELD_PROGNOSIS] = [];
                    }
                    $errs[self::FIELD_PROGNOSIS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PLAN])) {
            $v = $this->getPlan();
            foreach($validationRules[self::FIELD_PLAN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PLAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PLAN])) {
                        $errs[self::FIELD_PLAN] = [];
                    }
                    $errs[self::FIELD_PLAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACTION])) {
            $v = $this->getAction();
            foreach($validationRules[self::FIELD_ACTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTION])) {
                        $errs[self::FIELD_ACTION] = [];
                    }
                    $errs[self::FIELD_ACTION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRClinicalImpression $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRClinicalImpression
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRClinicalImpression)) {
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
            } else if (self::FIELD_PATIENT === $cen) {
                $type->setPatient(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ASSESSOR === $cen) {
                $type->setAssessor(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRClinicalImpressionStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATE === $cen) {
                $type->setDate(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DESCRIPTION === $cen) {
                $type->setDescription(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PREVIOUS === $cen) {
                $type->setPrevious(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROBLEM === $cen) {
                $type->addProblem(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TRIGGER_CODEABLE_CONCEPT === $cen) {
                $type->setTriggerCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TRIGGER_REFERENCE === $cen) {
                $type->setTriggerReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INVESTIGATIONS === $cen) {
                $type->addInvestigations(FHIRClinicalImpressionInvestigations::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROTOCOL === $cen) {
                $type->setProtocol(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUMMARY === $cen) {
                $type->setSummary(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FINDING === $cen) {
                $type->addFinding(FHIRClinicalImpressionFinding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RESOLVED === $cen) {
                $type->addResolved(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RULED_OUT === $cen) {
                $type->addRuledOut(FHIRClinicalImpressionRuledOut::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROGNOSIS === $cen) {
                $type->setPrognosis(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PLAN === $cen) {
                $type->addPlan(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ACTION === $cen) {
                $type->addAction(FHIRReference::xmlUnserialize($ce, $config));
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
        if (isset($attributes[self::FIELD_DATE])) {
            if (isset($type->date)) {
                $type->date->setValue((string)$attributes[self::FIELD_DATE]);
                $type->_setDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDate((string)$attributes[self::FIELD_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_PROTOCOL])) {
            if (isset($type->protocol)) {
                $type->protocol->setValue((string)$attributes[self::FIELD_PROTOCOL]);
                $type->_setProtocolValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setProtocol((string)$attributes[self::FIELD_PROTOCOL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SUMMARY])) {
            if (isset($type->summary)) {
                $type->summary->setValue((string)$attributes[self::FIELD_SUMMARY]);
                $type->_setSummaryValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setSummary((string)$attributes[self::FIELD_SUMMARY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PROGNOSIS])) {
            if (isset($type->prognosis)) {
                $type->prognosis->setValue((string)$attributes[self::FIELD_PROGNOSIS]);
                $type->_setPrognosisValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setPrognosis((string)$attributes[self::FIELD_PROGNOSIS], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('ClinicalImpression', $this->_getSourceXMLNS());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getFormattedValue());
        }
        if (isset($this->date) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATE]) {
            $xw->writeAttribute(self::FIELD_DATE, $this->date->_getFormattedValue());
        }
        if (isset($this->description) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->_getFormattedValue());
        }
        if (isset($this->protocol) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PROTOCOL]) {
            $xw->writeAttribute(self::FIELD_PROTOCOL, $this->protocol->_getFormattedValue());
        }
        if (isset($this->summary) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SUMMARY]) {
            $xw->writeAttribute(self::FIELD_SUMMARY, $this->summary->_getFormattedValue());
        }
        if (isset($this->prognosis) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PROGNOSIS]) {
            $xw->writeAttribute(self::FIELD_PROGNOSIS, $this->prognosis->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->patient)) {
            $xw->startElement(self::FIELD_PATIENT);
            $this->patient->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->assessor)) {
            $xw->startElement(self::FIELD_ASSESSOR);
            $this->assessor->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->status)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATUS]
                || $this->status->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATUS]);
            $xw->endElement();
        }
        if (isset($this->date)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATE]
                || $this->date->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATE);
            $this->date->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATE]);
            $xw->endElement();
        }
        if (isset($this->description)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DESCRIPTION]
                || $this->description->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DESCRIPTION]);
            $xw->endElement();
        }
        if (isset($this->previous)) {
            $xw->startElement(self::FIELD_PREVIOUS);
            $this->previous->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->problem)) {
            foreach ($this->problem as $v) {
                $xw->startElement(self::FIELD_PROBLEM);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->triggerCodeableConcept)) {
            $xw->startElement(self::FIELD_TRIGGER_CODEABLE_CONCEPT);
            $this->triggerCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->triggerReference)) {
            $xw->startElement(self::FIELD_TRIGGER_REFERENCE);
            $this->triggerReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->investigations)) {
            foreach ($this->investigations as $v) {
                $xw->startElement(self::FIELD_INVESTIGATIONS);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->protocol)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PROTOCOL]
                || $this->protocol->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PROTOCOL);
            $this->protocol->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PROTOCOL]);
            $xw->endElement();
        }
        if (isset($this->summary)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SUMMARY]
                || $this->summary->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SUMMARY);
            $this->summary->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SUMMARY]);
            $xw->endElement();
        }
        if (isset($this->finding)) {
            foreach ($this->finding as $v) {
                $xw->startElement(self::FIELD_FINDING);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->resolved)) {
            foreach ($this->resolved as $v) {
                $xw->startElement(self::FIELD_RESOLVED);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->ruledOut)) {
            foreach ($this->ruledOut as $v) {
                $xw->startElement(self::FIELD_RULED_OUT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->prognosis)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PROGNOSIS]
                || $this->prognosis->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PROGNOSIS);
            $this->prognosis->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PROGNOSIS]);
            $xw->endElement();
        }
        if (isset($this->plan)) {
            foreach ($this->plan as $v) {
                $xw->startElement(self::FIELD_PLAN);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->action)) {
            foreach ($this->action as $v) {
                $xw->startElement(self::FIELD_ACTION);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRClinicalImpression $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRClinicalImpression
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRClinicalImpression)) {
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
        if (isset($json[self::FIELD_PATIENT]) || array_key_exists(self::FIELD_PATIENT, $json)) {
            $type->setPatient(FHIRReference::jsonUnserialize($json[self::FIELD_PATIENT], $config));
        }
        if (isset($json[self::FIELD_ASSESSOR]) || array_key_exists(self::FIELD_ASSESSOR, $json)) {
            $type->setAssessor(FHIRReference::jsonUnserialize($json[self::FIELD_ASSESSOR], $config));
        }
        if (isset($json[self::FIELD_STATUS])
            || isset($json[self::FIELD_STATUS_EXT])
            || array_key_exists(self::FIELD_STATUS, $json)
            || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $type->setStatus(FHIRClinicalImpressionStatus::jsonUnserialize(
                (is_array($value) ? $value : [FHIRClinicalImpressionStatus::FIELD_VALUE => $value]) + ($json[self::FIELD_STATUS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DATE])
            || isset($json[self::FIELD_DATE_EXT])
            || array_key_exists(self::FIELD_DATE, $json)
            || array_key_exists(self::FIELD_DATE_EXT, $json)) {
            $value = $json[self::FIELD_DATE] ?? null;
            $type->setDate(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_DATE_EXT] ?? []),
                $config,
            ));
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
        if (isset($json[self::FIELD_PREVIOUS]) || array_key_exists(self::FIELD_PREVIOUS, $json)) {
            $type->setPrevious(FHIRReference::jsonUnserialize($json[self::FIELD_PREVIOUS], $config));
        }
        if (isset($json[self::FIELD_PROBLEM]) || array_key_exists(self::FIELD_PROBLEM, $json)) {
            $vs = $json[self::FIELD_PROBLEM];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addProblem(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_TRIGGER_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_TRIGGER_CODEABLE_CONCEPT, $json)) {
            $type->setTriggerCodeableConcept(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_TRIGGER_CODEABLE_CONCEPT], $config));
        }
        if (isset($json[self::FIELD_TRIGGER_REFERENCE]) || array_key_exists(self::FIELD_TRIGGER_REFERENCE, $json)) {
            $type->setTriggerReference(FHIRReference::jsonUnserialize($json[self::FIELD_TRIGGER_REFERENCE], $config));
        }
        if (isset($json[self::FIELD_INVESTIGATIONS]) || array_key_exists(self::FIELD_INVESTIGATIONS, $json)) {
            $vs = $json[self::FIELD_INVESTIGATIONS];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addInvestigations(FHIRClinicalImpressionInvestigations::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_PROTOCOL])
            || isset($json[self::FIELD_PROTOCOL_EXT])
            || array_key_exists(self::FIELD_PROTOCOL, $json)
            || array_key_exists(self::FIELD_PROTOCOL_EXT, $json)) {
            $value = $json[self::FIELD_PROTOCOL] ?? null;
            $type->setProtocol(FHIRUri::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUri::FIELD_VALUE => $value]) + ($json[self::FIELD_PROTOCOL_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_SUMMARY])
            || isset($json[self::FIELD_SUMMARY_EXT])
            || array_key_exists(self::FIELD_SUMMARY, $json)
            || array_key_exists(self::FIELD_SUMMARY_EXT, $json)) {
            $value = $json[self::FIELD_SUMMARY] ?? null;
            $type->setSummary(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_SUMMARY_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_FINDING]) || array_key_exists(self::FIELD_FINDING, $json)) {
            $vs = $json[self::FIELD_FINDING];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addFinding(FHIRClinicalImpressionFinding::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_RESOLVED]) || array_key_exists(self::FIELD_RESOLVED, $json)) {
            $vs = $json[self::FIELD_RESOLVED];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addResolved(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_RULED_OUT]) || array_key_exists(self::FIELD_RULED_OUT, $json)) {
            $vs = $json[self::FIELD_RULED_OUT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addRuledOut(FHIRClinicalImpressionRuledOut::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_PROGNOSIS])
            || isset($json[self::FIELD_PROGNOSIS_EXT])
            || array_key_exists(self::FIELD_PROGNOSIS, $json)
            || array_key_exists(self::FIELD_PROGNOSIS_EXT, $json)) {
            $value = $json[self::FIELD_PROGNOSIS] ?? null;
            $type->setPrognosis(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_PROGNOSIS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PLAN]) || array_key_exists(self::FIELD_PLAN, $json)) {
            $vs = $json[self::FIELD_PLAN];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addPlan(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_ACTION]) || array_key_exists(self::FIELD_ACTION, $json)) {
            $vs = $json[self::FIELD_ACTION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addAction(FHIRReference::jsonUnserialize($v, $config));
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
        if (isset($this->patient)) {
            $out->patient = $this->patient;
        }
        if (isset($this->assessor)) {
            $out->assessor = $this->assessor;
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
        if (isset($this->date)) {
            if (null !== ($val = $this->date->getValue())) {
                $out->date = $val;
            }
            if ($this->date->_nonValueFieldDefined()) {
                $ext = $this->date->jsonSerialize();
                unset($ext->value);
                $out->_date = $ext;
            }
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
        if (isset($this->previous)) {
            $out->previous = $this->previous;
        }
        if (isset($this->problem) && [] !== $this->problem) {
            $out->problem = $this->problem;
        }
        if (isset($this->triggerCodeableConcept)) {
            $out->triggerCodeableConcept = $this->triggerCodeableConcept;
        }
        if (isset($this->triggerReference)) {
            $out->triggerReference = $this->triggerReference;
        }
        if (isset($this->investigations) && [] !== $this->investigations) {
            $out->investigations = $this->investigations;
        }
        if (isset($this->protocol)) {
            if (null !== ($val = $this->protocol->getValue())) {
                $out->protocol = $val;
            }
            if ($this->protocol->_nonValueFieldDefined()) {
                $ext = $this->protocol->jsonSerialize();
                unset($ext->value);
                $out->_protocol = $ext;
            }
        }
        if (isset($this->summary)) {
            if (null !== ($val = $this->summary->getValue())) {
                $out->summary = $val;
            }
            if ($this->summary->_nonValueFieldDefined()) {
                $ext = $this->summary->jsonSerialize();
                unset($ext->value);
                $out->_summary = $ext;
            }
        }
        if (isset($this->finding) && [] !== $this->finding) {
            $out->finding = $this->finding;
        }
        if (isset($this->resolved) && [] !== $this->resolved) {
            $out->resolved = $this->resolved;
        }
        if (isset($this->ruledOut) && [] !== $this->ruledOut) {
            $out->ruledOut = $this->ruledOut;
        }
        if (isset($this->prognosis)) {
            if (null !== ($val = $this->prognosis->getValue())) {
                $out->prognosis = $val;
            }
            if ($this->prognosis->_nonValueFieldDefined()) {
                $ext = $this->prognosis->jsonSerialize();
                unset($ext->value);
                $out->_prognosis = $ext;
            }
        }
        if (isset($this->plan) && [] !== $this->plan) {
            $out->plan = $this->plan;
        }
        if (isset($this->action) && [] !== $this->action) {
            $out->action = $this->action;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}
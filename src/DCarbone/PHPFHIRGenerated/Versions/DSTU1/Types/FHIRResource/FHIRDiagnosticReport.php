<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\FHIRVersion;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDiagnosticReportStatus;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRDiagnosticReportStatusList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionTypeMap;

/**
 * The findings and interpretation of diagnostic tests performed on patients,
 * groups of patients, devices, and locations, and/or specimens derived from these.
 * The report includes clinical context such as requesting and provider
 * information, and some mix of atomic results, images, textual and coded
 * interpretation, and formatted representation of diagnostic reports.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRDiagnosticReport extends FHIRResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_DIAGNOSTIC_REPORT;

    /* class_default.php:56 */
    public const FIELD_NAME = 'name';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_ISSUED = 'issued';
    public const FIELD_ISSUED_EXT = '_issued';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_PERFORMER = 'performer';
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_REQUEST_DETAIL = 'requestDetail';
    public const FIELD_SERVICE_CATEGORY = 'serviceCategory';
    public const FIELD_DIAGNOSTIC_DATE_TIME = 'diagnosticDateTime';
    public const FIELD_DIAGNOSTIC_DATE_TIME_EXT = '_diagnosticDateTime';
    public const FIELD_DIAGNOSTIC_PERIOD = 'diagnosticPeriod';
    public const FIELD_SPECIMEN = 'specimen';
    public const FIELD_RESULT = 'result';
    public const FIELD_IMAGING_STUDY = 'imagingStudy';
    public const FIELD_IMAGE = 'image';
    public const FIELD_CONCLUSION = 'conclusion';
    public const FIELD_CONCLUSION_EXT = '_conclusion';
    public const FIELD_CODED_DIAGNOSIS = 'codedDiagnosis';
    public const FIELD_PRESENTED_FORM = 'presentedForm';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_NAME => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_STATUS => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_ISSUED => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_SUBJECT => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_PERFORMER => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_DIAGNOSTIC_DATE_TIME => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_DIAGNOSTIC_PERIOD => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ISSUED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DIAGNOSTIC_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CONCLUSION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code or name that describes this diagnostic report.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $name;
    /**
     * The status of the diagnostic report as a whole
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the diagnostic report as a whole.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDiagnosticReportStatus 
     */
    #[FHIRDiagnosticReportStatus]
    protected FHIRDiagnosticReportStatus $status;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and/or time that this version of the report was released from the
     * source diagnostic service.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime 
     */
    #[FHIRDateTime]
    protected FHIRDateTime $issued;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The subject of the report. Usually, but not always, this is a patient. However
     * diagnostic services also perform analyses on specimens collected from a variety
     * of other sources.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    #[FHIRResourceReference]
    protected FHIRResourceReference $subject;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The diagnostic service that is responsible for issuing the report.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    #[FHIRResourceReference]
    protected FHIRResourceReference $performer;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The local ID assigned to the report by the order filler, usually by the
     * Information System of the diagnostic service provider.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier 
     */
    #[FHIRIdentifier]
    protected FHIRIdentifier $identifier;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details concerning a test requested.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference> 
     */
    #[FHIRResourceReference]
    protected array $requestDetail;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The section of the diagnostic service that performs the examination e.g.
     * biochemistry, hematology, MRI.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $serviceCategory;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time or time-period the observed values are related to. This is usually
     * either the time of the procedure or of specimen collection(s), but very often
     * the source of the date/time is not known, only the date/time itself.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime 
     */
    #[FHIRDateTime]
    protected FHIRDateTime $diagnosticDateTime;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time or time-period the observed values are related to. This is usually
     * either the time of the procedure or of specimen collection(s), but very often
     * the source of the date/time is not known, only the date/time itself.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod 
     */
    #[FHIRPeriod]
    protected FHIRPeriod $diagnosticPeriod;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details about the specimens on which this Disagnostic report is based.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference> 
     */
    #[FHIRResourceReference]
    protected array $specimen;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Observations that are part of this diagnostic report. Observations can be simple
     * name/value pairs (e.g. "atomic" results), or they can be grouping observations
     * that include references to other members of the group (e.g. "panels").
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference> 
     */
    #[FHIRResourceReference]
    protected array $result;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One or more links to full details of any imaging performed during the diagnostic
     * investigation. Typically, this is imaging performed by DICOM enabled modalities,
     * but this is not required. A fully enabled PACS viewer can use this information
     * to provide views of the source images.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference> 
     */
    #[FHIRResourceReference]
    protected array $imagingStudy;
    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, devices, and locations, and/or specimens derived from these.
     * The report includes clinical context such as requesting and provider
     * information, and some mix of atomic results, images, textual and coded
     * interpretation, and formatted representation of diagnostic reports.
     *
     * A list of key images associated with this report. The images are generally
     * created during the diagnostic process, and may be directly of the patient, or of
     * treated specimens (i.e. slides of interest).
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage> 
     */
    #[FHIRDiagnosticReportImage]
    protected array $image;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Concise and clinically contextualized narrative interpretation of the diagnostic
     * report.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $conclusion;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes for the conclusion.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $codedDiagnosis;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Rich text representation of the entire result as issued by the diagnostic
     * service. Multiple formats are allowed but they SHALL be semantically equivalent.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment> 
     */
    #[FHIRAttachment]
    protected array $presentedForm;

    /* constructor.php:61 */
    /**
     * FHIRDiagnosticReport Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative $text
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRResourceInline>|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface> $contained
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $name
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRDiagnosticReportStatusList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDiagnosticReportStatus $status
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $issued
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $subject
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $performer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier $identifier
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference> $requestDetail
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $serviceCategory
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $diagnosticDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod $diagnosticPeriod
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference> $specimen
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference> $result
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference> $imagingStudy
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage> $image
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $conclusion
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept> $codedDiagnosis
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment> $presentedForm
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|string|FHIRIdPrimitive|FHIRId $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $name = null,
                                null|string|FHIRDiagnosticReportStatusList|FHIRDiagnosticReportStatus $status = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $issued = null,
                                null|FHIRResourceReference $subject = null,
                                null|FHIRResourceReference $performer = null,
                                null|FHIRIdentifier $identifier = null,
                                null|iterable $requestDetail = null,
                                null|FHIRCodeableConcept $serviceCategory = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $diagnosticDateTime = null,
                                null|FHIRPeriod $diagnosticPeriod = null,
                                null|iterable $specimen = null,
                                null|iterable $result = null,
                                null|iterable $imagingStudy = null,
                                null|iterable $image = null,
                                null|string|FHIRStringPrimitive|FHIRString $conclusion = null,
                                null|iterable $codedDiagnosis = null,
                                null|iterable $presentedForm = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(language: $language,
                            text: $text,
                            contained: $contained,
                            extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $name) {
            $this->setName($name);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $issued) {
            $this->setIssued($issued);
        }
        if (null !== $subject) {
            $this->setSubject($subject);
        }
        if (null !== $performer) {
            $this->setPerformer($performer);
        }
        if (null !== $identifier) {
            $this->setIdentifier($identifier);
        }
        if (null !== $requestDetail) {
            $this->setRequestDetail(...$requestDetail);
        }
        if (null !== $serviceCategory) {
            $this->setServiceCategory($serviceCategory);
        }
        if (null !== $diagnosticDateTime) {
            $this->setDiagnosticDateTime($diagnosticDateTime);
        }
        if (null !== $diagnosticPeriod) {
            $this->setDiagnosticPeriod($diagnosticPeriod);
        }
        if (null !== $specimen) {
            $this->setSpecimen(...$specimen);
        }
        if (null !== $result) {
            $this->setResult(...$result);
        }
        if (null !== $imagingStudy) {
            $this->setImagingStudy(...$imagingStudy);
        }
        if (null !== $image) {
            $this->setImage(...$image);
        }
        if (null !== $conclusion) {
            $this->setConclusion($conclusion);
        }
        if (null !== $codedDiagnosis) {
            $this->setCodedDiagnosis(...$codedDiagnosis);
        }
        if (null !== $presentedForm) {
            $this->setPresentedForm(...$presentedForm);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code or name that describes this diagnostic report.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getName(): null|FHIRCodeableConcept
    {
        return $this->name ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code or name that describes this diagnostic report.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $name
     * @return static
     */
    public function setName(null|FHIRCodeableConcept $name): self
    {
        if (null === $name) {
            unset($this->name);
            return $this;
        }
        $this->name = $name;
        return $this;
    }

    /**
     * The status of the diagnostic report as a whole
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the diagnostic report as a whole.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDiagnosticReportStatus
     */
    public function getStatus(): null|FHIRDiagnosticReportStatus
    {
        return $this->status ?? null;
    }

    /**
     * The status of the diagnostic report as a whole
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the diagnostic report as a whole.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRDiagnosticReportStatusList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDiagnosticReportStatus $status
     * @return static
     */
    public function setStatus(null|string|FHIRDiagnosticReportStatusList|FHIRDiagnosticReportStatus $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIRDiagnosticReportStatus)) {
            $status = new FHIRDiagnosticReportStatus(value: $status);
        }
        $this->status = $status;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and/or time that this version of the report was released from the
     * source diagnostic service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime
     */
    public function getIssued(): null|FHIRDateTime
    {
        return $this->issued ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and/or time that this version of the report was released from the
     * source diagnostic service.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $issued
     * @return static
     */
    public function setIssued(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $issued): self
    {
        if (null === $issued) {
            unset($this->issued);
            return $this;
        }
        if (!($issued instanceof FHIRDateTime)) {
            $issued = new FHIRDateTime(value: $issued);
        }
        $this->issued = $issued;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The subject of the report. Usually, but not always, this is a patient. However
     * diagnostic services also perform analyses on specimens collected from a variety
     * of other sources.
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
     * The subject of the report. Usually, but not always, this is a patient. However
     * diagnostic services also perform analyses on specimens collected from a variety
     * of other sources.
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
     * The diagnostic service that is responsible for issuing the report.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getPerformer(): null|FHIRResourceReference
    {
        return $this->performer ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The diagnostic service that is responsible for issuing the report.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $performer
     * @return static
     */
    public function setPerformer(null|FHIRResourceReference $performer): self
    {
        if (null === $performer) {
            unset($this->performer);
            return $this;
        }
        $this->performer = $performer;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The local ID assigned to the report by the order filler, usually by the
     * Information System of the diagnostic service provider.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier(): null|FHIRIdentifier
    {
        return $this->identifier ?? null;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The local ID assigned to the report by the order filler, usually by the
     * Information System of the diagnostic service provider.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(null|FHIRIdentifier $identifier): self
    {
        if (null === $identifier) {
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
     * Details concerning a test requested.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference>
     */
    public function getRequestDetail(): array
    {
        return $this->requestDetail ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference>
     */
    public function getRequestDetailIterator(): iterable
    {
        if (!isset($this->requestDetail)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->requestDetail);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details concerning a test requested.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $requestDetail
     * @return static
     */
    public function addRequestDetail(FHIRResourceReference $requestDetail): self
    {
        if (!isset($this->requestDetail)) {
            $this->requestDetail = [];
        }
        $this->requestDetail[] = $requestDetail;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details concerning a test requested.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference ...$requestDetail
     * @return static
     */
    public function setRequestDetail(FHIRResourceReference ...$requestDetail): self
    {
        if ([] === $requestDetail) {
            unset($this->requestDetail);
            return $this;
        }
        $this->requestDetail = $requestDetail;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The section of the diagnostic service that performs the examination e.g.
     * biochemistry, hematology, MRI.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getServiceCategory(): null|FHIRCodeableConcept
    {
        return $this->serviceCategory ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The section of the diagnostic service that performs the examination e.g.
     * biochemistry, hematology, MRI.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $serviceCategory
     * @return static
     */
    public function setServiceCategory(null|FHIRCodeableConcept $serviceCategory): self
    {
        if (null === $serviceCategory) {
            unset($this->serviceCategory);
            return $this;
        }
        $this->serviceCategory = $serviceCategory;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time or time-period the observed values are related to. This is usually
     * either the time of the procedure or of specimen collection(s), but very often
     * the source of the date/time is not known, only the date/time itself.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime
     */
    public function getDiagnosticDateTime(): null|FHIRDateTime
    {
        return $this->diagnosticDateTime ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time or time-period the observed values are related to. This is usually
     * either the time of the procedure or of specimen collection(s), but very often
     * the source of the date/time is not known, only the date/time itself.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $diagnosticDateTime
     * @return static
     */
    public function setDiagnosticDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $diagnosticDateTime): self
    {
        if (null === $diagnosticDateTime) {
            unset($this->diagnosticDateTime);
            return $this;
        }
        if (!($diagnosticDateTime instanceof FHIRDateTime)) {
            $diagnosticDateTime = new FHIRDateTime(value: $diagnosticDateTime);
        }
        $this->diagnosticDateTime = $diagnosticDateTime;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time or time-period the observed values are related to. This is usually
     * either the time of the procedure or of specimen collection(s), but very often
     * the source of the date/time is not known, only the date/time itself.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod
     */
    public function getDiagnosticPeriod(): null|FHIRPeriod
    {
        return $this->diagnosticPeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time or time-period the observed values are related to. This is usually
     * either the time of the procedure or of specimen collection(s), but very often
     * the source of the date/time is not known, only the date/time itself.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod $diagnosticPeriod
     * @return static
     */
    public function setDiagnosticPeriod(null|FHIRPeriod $diagnosticPeriod): self
    {
        if (null === $diagnosticPeriod) {
            unset($this->diagnosticPeriod);
            return $this;
        }
        $this->diagnosticPeriod = $diagnosticPeriod;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details about the specimens on which this Disagnostic report is based.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference>
     */
    public function getSpecimen(): array
    {
        return $this->specimen ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference>
     */
    public function getSpecimenIterator(): iterable
    {
        if (!isset($this->specimen)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->specimen);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details about the specimens on which this Disagnostic report is based.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $specimen
     * @return static
     */
    public function addSpecimen(FHIRResourceReference $specimen): self
    {
        if (!isset($this->specimen)) {
            $this->specimen = [];
        }
        $this->specimen[] = $specimen;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details about the specimens on which this Disagnostic report is based.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference ...$specimen
     * @return static
     */
    public function setSpecimen(FHIRResourceReference ...$specimen): self
    {
        if ([] === $specimen) {
            unset($this->specimen);
            return $this;
        }
        $this->specimen = $specimen;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Observations that are part of this diagnostic report. Observations can be simple
     * name/value pairs (e.g. "atomic" results), or they can be grouping observations
     * that include references to other members of the group (e.g. "panels").
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference>
     */
    public function getResult(): array
    {
        return $this->result ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference>
     */
    public function getResultIterator(): iterable
    {
        if (!isset($this->result)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->result);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Observations that are part of this diagnostic report. Observations can be simple
     * name/value pairs (e.g. "atomic" results), or they can be grouping observations
     * that include references to other members of the group (e.g. "panels").
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $result
     * @return static
     */
    public function addResult(FHIRResourceReference $result): self
    {
        if (!isset($this->result)) {
            $this->result = [];
        }
        $this->result[] = $result;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Observations that are part of this diagnostic report. Observations can be simple
     * name/value pairs (e.g. "atomic" results), or they can be grouping observations
     * that include references to other members of the group (e.g. "panels").
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference ...$result
     * @return static
     */
    public function setResult(FHIRResourceReference ...$result): self
    {
        if ([] === $result) {
            unset($this->result);
            return $this;
        }
        $this->result = $result;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One or more links to full details of any imaging performed during the diagnostic
     * investigation. Typically, this is imaging performed by DICOM enabled modalities,
     * but this is not required. A fully enabled PACS viewer can use this information
     * to provide views of the source images.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference>
     */
    public function getImagingStudy(): array
    {
        return $this->imagingStudy ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference>
     */
    public function getImagingStudyIterator(): iterable
    {
        if (!isset($this->imagingStudy)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->imagingStudy);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One or more links to full details of any imaging performed during the diagnostic
     * investigation. Typically, this is imaging performed by DICOM enabled modalities,
     * but this is not required. A fully enabled PACS viewer can use this information
     * to provide views of the source images.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $imagingStudy
     * @return static
     */
    public function addImagingStudy(FHIRResourceReference $imagingStudy): self
    {
        if (!isset($this->imagingStudy)) {
            $this->imagingStudy = [];
        }
        $this->imagingStudy[] = $imagingStudy;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One or more links to full details of any imaging performed during the diagnostic
     * investigation. Typically, this is imaging performed by DICOM enabled modalities,
     * but this is not required. A fully enabled PACS viewer can use this information
     * to provide views of the source images.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference ...$imagingStudy
     * @return static
     */
    public function setImagingStudy(FHIRResourceReference ...$imagingStudy): self
    {
        if ([] === $imagingStudy) {
            unset($this->imagingStudy);
            return $this;
        }
        $this->imagingStudy = $imagingStudy;
        return $this;
    }

    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, devices, and locations, and/or specimens derived from these.
     * The report includes clinical context such as requesting and provider
     * information, and some mix of atomic results, images, textual and coded
     * interpretation, and formatted representation of diagnostic reports.
     *
     * A list of key images associated with this report. The images are generally
     * created during the diagnostic process, and may be directly of the patient, or of
     * treated specimens (i.e. slides of interest).
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage>
     */
    public function getImage(): array
    {
        return $this->image ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage>
     */
    public function getImageIterator(): iterable
    {
        if (!isset($this->image)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->image);
    }

    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, devices, and locations, and/or specimens derived from these.
     * The report includes clinical context such as requesting and provider
     * information, and some mix of atomic results, images, textual and coded
     * interpretation, and formatted representation of diagnostic reports.
     *
     * A list of key images associated with this report. The images are generally
     * created during the diagnostic process, and may be directly of the patient, or of
     * treated specimens (i.e. slides of interest).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage $image
     * @return static
     */
    public function addImage(FHIRDiagnosticReportImage $image): self
    {
        if (!isset($this->image)) {
            $this->image = [];
        }
        $this->image[] = $image;
        return $this;
    }

    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, devices, and locations, and/or specimens derived from these.
     * The report includes clinical context such as requesting and provider
     * information, and some mix of atomic results, images, textual and coded
     * interpretation, and formatted representation of diagnostic reports.
     *
     * A list of key images associated with this report. The images are generally
     * created during the diagnostic process, and may be directly of the patient, or of
     * treated specimens (i.e. slides of interest).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage ...$image
     * @return static
     */
    public function setImage(FHIRDiagnosticReportImage ...$image): self
    {
        if ([] === $image) {
            unset($this->image);
            return $this;
        }
        $this->image = $image;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Concise and clinically contextualized narrative interpretation of the diagnostic
     * report.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getConclusion(): null|FHIRString
    {
        return $this->conclusion ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Concise and clinically contextualized narrative interpretation of the diagnostic
     * report.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $conclusion
     * @return static
     */
    public function setConclusion(null|string|FHIRStringPrimitive|FHIRString $conclusion): self
    {
        if (null === $conclusion) {
            unset($this->conclusion);
            return $this;
        }
        if (!($conclusion instanceof FHIRString)) {
            $conclusion = new FHIRString(value: $conclusion);
        }
        $this->conclusion = $conclusion;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes for the conclusion.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getCodedDiagnosis(): array
    {
        return $this->codedDiagnosis ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getCodedDiagnosisIterator(): iterable
    {
        if (!isset($this->codedDiagnosis)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->codedDiagnosis);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes for the conclusion.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $codedDiagnosis
     * @return static
     */
    public function addCodedDiagnosis(FHIRCodeableConcept $codedDiagnosis): self
    {
        if (!isset($this->codedDiagnosis)) {
            $this->codedDiagnosis = [];
        }
        $this->codedDiagnosis[] = $codedDiagnosis;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes for the conclusion.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept ...$codedDiagnosis
     * @return static
     */
    public function setCodedDiagnosis(FHIRCodeableConcept ...$codedDiagnosis): self
    {
        if ([] === $codedDiagnosis) {
            unset($this->codedDiagnosis);
            return $this;
        }
        $this->codedDiagnosis = $codedDiagnosis;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Rich text representation of the entire result as issued by the diagnostic
     * service. Multiple formats are allowed but they SHALL be semantically equivalent.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment>
     */
    public function getPresentedForm(): array
    {
        return $this->presentedForm ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment>
     */
    public function getPresentedFormIterator(): iterable
    {
        if (!isset($this->presentedForm)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->presentedForm);
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Rich text representation of the entire result as issued by the diagnostic
     * service. Multiple formats are allowed but they SHALL be semantically equivalent.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment $presentedForm
     * @return static
     */
    public function addPresentedForm(FHIRAttachment $presentedForm): self
    {
        if (!isset($this->presentedForm)) {
            $this->presentedForm = [];
        }
        $this->presentedForm[] = $presentedForm;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Rich text representation of the entire result as issued by the diagnostic
     * service. Multiple formats are allowed but they SHALL be semantically equivalent.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment ...$presentedForm
     * @return static
     */
    public function setPresentedForm(FHIRAttachment ...$presentedForm): self
    {
        if ([] === $presentedForm) {
            unset($this->presentedForm);
            return $this;
        }
        $this->presentedForm = $presentedForm;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRDiagnosticReport $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRDiagnosticReport
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDiagnosticReport)) {
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
            if (self::FIELD_LANGUAGE === $cen) {
                $type->setLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRNarrative::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED === $cen) {
                foreach ($ce->children() as $cen) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::mustGetContainedTypeClassnameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $type->setId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NAME === $cen) {
                $type->setName(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRDiagnosticReportStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ISSUED === $cen) {
                $type->setIssued(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBJECT === $cen) {
                $type->setSubject(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERFORMER === $cen) {
                $type->setPerformer(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->setIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REQUEST_DETAIL === $cen) {
                $type->addRequestDetail(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SERVICE_CATEGORY === $cen) {
                $type->setServiceCategory(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DIAGNOSTIC_DATE_TIME === $cen) {
                $type->setDiagnosticDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DIAGNOSTIC_PERIOD === $cen) {
                $type->setDiagnosticPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SPECIMEN === $cen) {
                $type->addSpecimen(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RESULT === $cen) {
                $type->addResult(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IMAGING_STUDY === $cen) {
                $type->addImagingStudy(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IMAGE === $cen) {
                $type->addImage(FHIRDiagnosticReportImage::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONCLUSION === $cen) {
                $type->setConclusion(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODED_DIAGNOSIS === $cen) {
                $type->addCodedDiagnosis(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRESENTED_FORM === $cen) {
                $type->addPresentedForm(FHIRAttachment::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LANGUAGE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_STATUS])) {
            if (isset($type->status)) {
                $type->status->setValue((string)$attributes[self::FIELD_STATUS]);
            } else {
                $type->setStatus((string)$attributes[self::FIELD_STATUS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_STATUS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ISSUED])) {
            if (isset($type->issued)) {
                $type->issued->setValue((string)$attributes[self::FIELD_ISSUED]);
            } else {
                $type->setIssued((string)$attributes[self::FIELD_ISSUED]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ISSUED, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DIAGNOSTIC_DATE_TIME])) {
            if (isset($type->diagnosticDateTime)) {
                $type->diagnosticDateTime->setValue((string)$attributes[self::FIELD_DIAGNOSTIC_DATE_TIME]);
            } else {
                $type->setDiagnosticDateTime((string)$attributes[self::FIELD_DIAGNOSTIC_DATE_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DIAGNOSTIC_DATE_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CONCLUSION])) {
            if (isset($type->conclusion)) {
                $type->conclusion->setValue((string)$attributes[self::FIELD_CONCLUSION]);
            } else {
                $type->setConclusion((string)$attributes[self::FIELD_CONCLUSION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CONCLUSION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('DiagnosticReport', $this->_getSourceXMLNS());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getValueAsString());
        }
        if (isset($this->issued) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ISSUED]) {
            $xw->writeAttribute(self::FIELD_ISSUED, $this->issued->_getValueAsString());
        }
        if (isset($this->diagnosticDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DIAGNOSTIC_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_DIAGNOSTIC_DATE_TIME, $this->diagnosticDateTime->_getValueAsString());
        }
        if (isset($this->conclusion) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CONCLUSION]) {
            $xw->writeAttribute(self::FIELD_CONCLUSION, $this->conclusion->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->name)) {
            $xw->startElement(self::FIELD_NAME);
            $this->name->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->status)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATUS]
                || $this->status->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATUS]);
            $xw->endElement();
        }
        if (isset($this->issued)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ISSUED]
                || $this->issued->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ISSUED);
            $this->issued->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ISSUED]);
            $xw->endElement();
        }
        if (isset($this->subject)) {
            $xw->startElement(self::FIELD_SUBJECT);
            $this->subject->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->performer)) {
            $xw->startElement(self::FIELD_PERFORMER);
            $this->performer->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->identifier)) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $this->identifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->requestDetail)) {
            foreach ($this->requestDetail as $v) {
                $xw->startElement(self::FIELD_REQUEST_DETAIL);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->serviceCategory)) {
            $xw->startElement(self::FIELD_SERVICE_CATEGORY);
            $this->serviceCategory->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->diagnosticDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DIAGNOSTIC_DATE_TIME]
                || $this->diagnosticDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DIAGNOSTIC_DATE_TIME);
            $this->diagnosticDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DIAGNOSTIC_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->diagnosticPeriod)) {
            $xw->startElement(self::FIELD_DIAGNOSTIC_PERIOD);
            $this->diagnosticPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->specimen)) {
            foreach ($this->specimen as $v) {
                $xw->startElement(self::FIELD_SPECIMEN);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->result)) {
            foreach ($this->result as $v) {
                $xw->startElement(self::FIELD_RESULT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->imagingStudy)) {
            foreach ($this->imagingStudy as $v) {
                $xw->startElement(self::FIELD_IMAGING_STUDY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->image)) {
            foreach ($this->image as $v) {
                $xw->startElement(self::FIELD_IMAGE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->conclusion)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CONCLUSION]
                || $this->conclusion->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CONCLUSION);
            $this->conclusion->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CONCLUSION]);
            $xw->endElement();
        }
        if (isset($this->codedDiagnosis)) {
            foreach ($this->codedDiagnosis as $v) {
                $xw->startElement(self::FIELD_CODED_DIAGNOSIS);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->presentedForm)) {
            foreach ($this->presentedForm as $v) {
                $xw->startElement(self::FIELD_PRESENTED_FORM);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if ($rootOpened ?? false) {
            $xw->endElement();
        }
        if ($docStarted ?? false) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|\stdClass $decoded
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRDiagnosticReport $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRDiagnosticReport
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $decoded,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDiagnosticReport)) {
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
        if (is_string($decoded)) {
            $decoded = json_decode(json: $decoded,
                                associative: false,
                                depth: $config->getJSONDecodeMaxDepth(),
                                flags: $config->getJSONDecodeOpts());
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->name) || property_exists($decoded, self::FIELD_NAME)) {
            if (is_array($decoded->name)) {
                $type->setName(FHIRCodeableConcept::jsonUnserialize(reset($decoded->name), $config));
            } else {
                $type->setName(FHIRCodeableConcept::jsonUnserialize($decoded->name, $config));
            }
        }
        if (isset($decoded->status)
            || isset($decoded->_status)
            || property_exists($decoded, self::FIELD_STATUS)
            || property_exists($decoded, self::FIELD_STATUS_EXT)) {
            $v = $decoded->_status ?? new \stdClass();
            $v->value = $decoded->status ?? null;
            $type->setStatus(FHIRDiagnosticReportStatus::jsonUnserialize($v, $config));
        }
        if (isset($decoded->issued)
            || isset($decoded->_issued)
            || property_exists($decoded, self::FIELD_ISSUED)
            || property_exists($decoded, self::FIELD_ISSUED_EXT)) {
            $v = $decoded->_issued ?? new \stdClass();
            $v->value = $decoded->issued ?? null;
            $type->setIssued(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->subject) || property_exists($decoded, self::FIELD_SUBJECT)) {
            if (is_array($decoded->subject)) {
                $type->setSubject(FHIRResourceReference::jsonUnserialize(reset($decoded->subject), $config));
            } else {
                $type->setSubject(FHIRResourceReference::jsonUnserialize($decoded->subject, $config));
            }
        }
        if (isset($decoded->performer) || property_exists($decoded, self::FIELD_PERFORMER)) {
            if (is_array($decoded->performer)) {
                $type->setPerformer(FHIRResourceReference::jsonUnserialize(reset($decoded->performer), $config));
            } else {
                $type->setPerformer(FHIRResourceReference::jsonUnserialize($decoded->performer, $config));
            }
        }
        if (isset($decoded->identifier) || property_exists($decoded, self::FIELD_IDENTIFIER)) {
            if (is_array($decoded->identifier)) {
                $type->setIdentifier(FHIRIdentifier::jsonUnserialize(reset($decoded->identifier), $config));
            } else {
                $type->setIdentifier(FHIRIdentifier::jsonUnserialize($decoded->identifier, $config));
            }
        }
        if (isset($decoded->requestDetail) || property_exists($decoded, self::FIELD_REQUEST_DETAIL)) {
            if (is_object($decoded->requestDetail)) {
                $vals = [$decoded->requestDetail];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_REQUEST_DETAIL, true);
            } else {
                $vals = $decoded->requestDetail;
            }
            foreach($vals as $v) {
                $type->addRequestDetail(FHIRResourceReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->serviceCategory) || property_exists($decoded, self::FIELD_SERVICE_CATEGORY)) {
            if (is_array($decoded->serviceCategory)) {
                $type->setServiceCategory(FHIRCodeableConcept::jsonUnserialize(reset($decoded->serviceCategory), $config));
            } else {
                $type->setServiceCategory(FHIRCodeableConcept::jsonUnserialize($decoded->serviceCategory, $config));
            }
        }
        if (isset($decoded->diagnosticDateTime)
            || isset($decoded->_diagnosticDateTime)
            || property_exists($decoded, self::FIELD_DIAGNOSTIC_DATE_TIME)
            || property_exists($decoded, self::FIELD_DIAGNOSTIC_DATE_TIME_EXT)) {
            $v = $decoded->_diagnosticDateTime ?? new \stdClass();
            $v->value = $decoded->diagnosticDateTime ?? null;
            $type->setDiagnosticDateTime(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->diagnosticPeriod) || property_exists($decoded, self::FIELD_DIAGNOSTIC_PERIOD)) {
            if (is_array($decoded->diagnosticPeriod)) {
                $type->setDiagnosticPeriod(FHIRPeriod::jsonUnserialize(reset($decoded->diagnosticPeriod), $config));
            } else {
                $type->setDiagnosticPeriod(FHIRPeriod::jsonUnserialize($decoded->diagnosticPeriod, $config));
            }
        }
        if (isset($decoded->specimen) || property_exists($decoded, self::FIELD_SPECIMEN)) {
            if (is_object($decoded->specimen)) {
                $vals = [$decoded->specimen];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_SPECIMEN, true);
            } else {
                $vals = $decoded->specimen;
            }
            foreach($vals as $v) {
                $type->addSpecimen(FHIRResourceReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->result) || property_exists($decoded, self::FIELD_RESULT)) {
            if (is_object($decoded->result)) {
                $vals = [$decoded->result];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_RESULT, true);
            } else {
                $vals = $decoded->result;
            }
            foreach($vals as $v) {
                $type->addResult(FHIRResourceReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->imagingStudy) || property_exists($decoded, self::FIELD_IMAGING_STUDY)) {
            if (is_object($decoded->imagingStudy)) {
                $vals = [$decoded->imagingStudy];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_IMAGING_STUDY, true);
            } else {
                $vals = $decoded->imagingStudy;
            }
            foreach($vals as $v) {
                $type->addImagingStudy(FHIRResourceReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->image) || property_exists($decoded, self::FIELD_IMAGE)) {
            if (is_object($decoded->image)) {
                $vals = [$decoded->image];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_IMAGE, true);
            } else {
                $vals = $decoded->image;
            }
            foreach($vals as $v) {
                $type->addImage(FHIRDiagnosticReportImage::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->conclusion)
            || isset($decoded->_conclusion)
            || property_exists($decoded, self::FIELD_CONCLUSION)
            || property_exists($decoded, self::FIELD_CONCLUSION_EXT)) {
            $v = $decoded->_conclusion ?? new \stdClass();
            $v->value = $decoded->conclusion ?? null;
            $type->setConclusion(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->codedDiagnosis) || property_exists($decoded, self::FIELD_CODED_DIAGNOSIS)) {
            if (is_object($decoded->codedDiagnosis)) {
                $vals = [$decoded->codedDiagnosis];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CODED_DIAGNOSIS, true);
            } else {
                $vals = $decoded->codedDiagnosis;
            }
            foreach($vals as $v) {
                $type->addCodedDiagnosis(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->presentedForm) || property_exists($decoded, self::FIELD_PRESENTED_FORM)) {
            if (is_object($decoded->presentedForm)) {
                $vals = [$decoded->presentedForm];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PRESENTED_FORM, true);
            } else {
                $vals = $decoded->presentedForm;
            }
            foreach($vals as $v) {
                $type->addPresentedForm(FHIRAttachment::jsonUnserialize($v, $config));
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
        if (isset($this->name)) {
            $out->name = $this->name;
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
        if (isset($this->issued)) {
            if (null !== ($val = $this->issued->getValue())) {
                $out->issued = $val;
            }
            if ($this->issued->_nonValueFieldDefined()) {
                $ext = $this->issued->jsonSerialize();
                unset($ext->value);
                $out->_issued = $ext;
            }
        }
        if (isset($this->subject)) {
            $out->subject = $this->subject;
        }
        if (isset($this->performer)) {
            $out->performer = $this->performer;
        }
        if (isset($this->identifier)) {
            $out->identifier = $this->identifier;
        }
        if (isset($this->requestDetail) && [] !== $this->requestDetail) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_REQUEST_DETAIL) && 1 === count($this->requestDetail)) {
                $out->requestDetail = $this->requestDetail[0];
            } else {
                $out->requestDetail = $this->requestDetail;
            }
        }
        if (isset($this->serviceCategory)) {
            $out->serviceCategory = $this->serviceCategory;
        }
        if (isset($this->diagnosticDateTime)) {
            if (null !== ($val = $this->diagnosticDateTime->getValue())) {
                $out->diagnosticDateTime = $val;
            }
            if ($this->diagnosticDateTime->_nonValueFieldDefined()) {
                $ext = $this->diagnosticDateTime->jsonSerialize();
                unset($ext->value);
                $out->_diagnosticDateTime = $ext;
            }
        }
        if (isset($this->diagnosticPeriod)) {
            $out->diagnosticPeriod = $this->diagnosticPeriod;
        }
        if (isset($this->specimen) && [] !== $this->specimen) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_SPECIMEN) && 1 === count($this->specimen)) {
                $out->specimen = $this->specimen[0];
            } else {
                $out->specimen = $this->specimen;
            }
        }
        if (isset($this->result) && [] !== $this->result) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_RESULT) && 1 === count($this->result)) {
                $out->result = $this->result[0];
            } else {
                $out->result = $this->result;
            }
        }
        if (isset($this->imagingStudy) && [] !== $this->imagingStudy) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_IMAGING_STUDY) && 1 === count($this->imagingStudy)) {
                $out->imagingStudy = $this->imagingStudy[0];
            } else {
                $out->imagingStudy = $this->imagingStudy;
            }
        }
        if (isset($this->image) && [] !== $this->image) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_IMAGE) && 1 === count($this->image)) {
                $out->image = $this->image[0];
            } else {
                $out->image = $this->image;
            }
        }
        if (isset($this->conclusion)) {
            if (null !== ($val = $this->conclusion->getValue())) {
                $out->conclusion = $val;
            }
            if ($this->conclusion->_nonValueFieldDefined()) {
                $ext = $this->conclusion->jsonSerialize();
                unset($ext->value);
                $out->_conclusion = $ext;
            }
        }
        if (isset($this->codedDiagnosis) && [] !== $this->codedDiagnosis) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CODED_DIAGNOSIS) && 1 === count($this->codedDiagnosis)) {
                $out->codedDiagnosis = $this->codedDiagnosis[0];
            } else {
                $out->codedDiagnosis = $this->codedDiagnosis;
            }
        }
        if (isset($this->presentedForm) && [] !== $this->presentedForm) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PRESENTED_FORM) && 1 === count($this->presentedForm)) {
                $out->presentedForm = $this->presentedForm[0];
            } else {
                $out->presentedForm = $this->presentedForm;
            }
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}
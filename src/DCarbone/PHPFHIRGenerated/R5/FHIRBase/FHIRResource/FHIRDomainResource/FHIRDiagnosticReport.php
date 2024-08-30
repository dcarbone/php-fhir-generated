<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 30th, 2024 22:24+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportMedia;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportSupportingInfo;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDiagnosticReportStatus;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R5\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeMap;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * The findings and interpretation of diagnostic tests performed on patients,
 * groups of patients, products, substances, devices, and locations, and/or
 * specimens derived from these. The report includes clinical context such as
 * requesting provider information, and some mix of atomic results, images, textual
 * and coded interpretations, and formatted representation of diagnostic reports.
 * The report also includes non-clinical context such as batch analysis and
 * stability reporting of products and substances.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRDiagnosticReport
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource
 */
class FHIRDiagnosticReport extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_BASED_ON = 'basedOn';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_CATEGORY = 'category';
    const FIELD_CODE = 'code';
    const FIELD_SUBJECT = 'subject';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_EFFECTIVE_DATE_TIME = 'effectiveDateTime';
    const FIELD_EFFECTIVE_DATE_TIME_EXT = '_effectiveDateTime';
    const FIELD_EFFECTIVE_PERIOD = 'effectivePeriod';
    const FIELD_ISSUED = 'issued';
    const FIELD_ISSUED_EXT = '_issued';
    const FIELD_PERFORMER = 'performer';
    const FIELD_RESULTS_INTERPRETER = 'resultsInterpreter';
    const FIELD_SPECIMEN = 'specimen';
    const FIELD_RESULT = 'result';
    const FIELD_NOTE = 'note';
    const FIELD_STUDY = 'study';
    const FIELD_SUPPORTING_INFO = 'supportingInfo';
    const FIELD_MEDIA = 'media';
    const FIELD_COMPOSITION = 'composition';
    const FIELD_CONCLUSION = 'conclusion';
    const FIELD_CONCLUSION_EXT = '_conclusion';
    const FIELD_CONCLUSION_CODE = 'conclusionCode';
    const FIELD_PRESENTED_FORM = 'presentedForm';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this report by the performer or other systems.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details concerning a service requested.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $basedOn = [];
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the diagnostic report.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDiagnosticReportStatus
     */
    protected null|FHIRDiagnosticReportStatus $status = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies the clinical discipline, department or diagnostic service
     * that created the report (e.g. cardiology, biochemistry, hematology, MRI). This
     * is used for searching, sorting and display purposes.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $category = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code or name that describes this diagnostic report.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $code = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The subject of the report. Usually, but not always, this is a patient. However,
     * diagnostic services also perform analyses on specimens collected from a variety
     * of other sources.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $subject = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The healthcare event (e.g. a patient and healthcare provider interaction) which
     * this DiagnosticReport is about.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $encounter = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time or time-period the observed values are related to. When the subject of
     * the report is a patient, this is usually either the time of the procedure or of
     * specimen collection(s), but very often the source of the date/time is not known,
     * only the date/time itself.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $effectiveDateTime = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time or time-period the observed values are related to. When the subject of
     * the report is a patient, this is usually either the time of the procedure or of
     * specimen collection(s), but very often the source of the date/time is not known,
     * only the date/time itself.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    protected null|FHIRPeriod $effectivePeriod = null;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time that this version of the report was made available to
     * providers, typically after the report was reviewed and verified.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $issued = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The diagnostic service that is responsible for issuing the report.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $performer = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner or organization that is responsible for the report's
     * conclusions and interpretations.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $resultsInterpreter = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details about the specimens on which this diagnostic report is based.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $specimen = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * [Observations](observation.html) that are part of this diagnostic report.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $result = [];
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments about the diagnostic report.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    protected null|array $note = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One or more links to full details of any study performed during the diagnostic
     * investigation. An ImagingStudy might comprise a set of radiologic images
     * obtained via a procedure that are analyzed as a group. Typically, this is
     * imaging performed by DICOM enabled modalities, but this is not required. A fully
     * enabled PACS viewer can use this information to provide views of the source
     * images. A GenomicStudy might comprise one or more analyses, each serving a
     * specific purpose. These analyses may vary in method (e.g., karyotyping, CNV, or
     * SNV detection), performer, software, devices used, or regions targeted.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $study = [];
    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, products, substances, devices, and locations, and/or
     * specimens derived from these. The report includes clinical context such as
     * requesting provider information, and some mix of atomic results, images, textual
     * and coded interpretations, and formatted representation of diagnostic reports.
     * The report also includes non-clinical context such as batch analysis and
     * stability reporting of products and substances.
     *
     * This backbone element contains supporting information that was used in the
     * creation of the report not included in the results already included in the
     * report.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportSupportingInfo[]
     */
    protected null|array $supportingInfo = [];
    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, products, substances, devices, and locations, and/or
     * specimens derived from these. The report includes clinical context such as
     * requesting provider information, and some mix of atomic results, images, textual
     * and coded interpretations, and formatted representation of diagnostic reports.
     * The report also includes non-clinical context such as batch analysis and
     * stability reporting of products and substances.
     *
     * A list of key images or data associated with this report. The images or data are
     * generally created during the diagnostic process, and may be directly of the
     * patient, or of treated specimens (i.e. slides of interest).
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportMedia[]
     */
    protected null|array $media = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to a Composition resource instance that provides structure for
     * organizing the contents of the DiagnosticReport.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $composition = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Concise and clinically contextualized summary conclusion
     * (interpretation/impression) of the diagnostic report.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $conclusion = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One or more codes that represent the summary conclusion
     * (interpretation/impression) of the diagnostic report.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $conclusionCode = [];
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Rich text representation of the entire result as issued by the diagnostic
     * service. Multiple formats are allowed but they SHALL be semantically equivalent.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment[]
     */
    protected null|array $presentedForm = [];

    /**
     * Validation map for fields in type DiagnosticReport
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_CODE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_STATUS => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRDiagnosticReport Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_IDENTIFIER, $data)) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_BASED_ON, $data)) {
            if (is_array($data[self::FIELD_BASED_ON])) {
                foreach($data[self::FIELD_BASED_ON] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addBasedOn($v);
                    } else {
                        $this->addBasedOn(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_BASED_ON] instanceof FHIRReference) {
                $this->addBasedOn($data[self::FIELD_BASED_ON]);
            } else {
                $this->addBasedOn(new FHIRReference($data[self::FIELD_BASED_ON]));
            }
        }
        if (array_key_exists(self::FIELD_STATUS, $data) || array_key_exists(self::FIELD_STATUS_EXT, $data)) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDiagnosticReportStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRDiagnosticReportStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRDiagnosticReportStatus([FHIRDiagnosticReportStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRDiagnosticReportStatus($ext));
            } else {
                $this->setStatus(new FHIRDiagnosticReportStatus(null));
            }
        }
        if (array_key_exists(self::FIELD_CATEGORY, $data)) {
            if (is_array($data[self::FIELD_CATEGORY])) {
                foreach($data[self::FIELD_CATEGORY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCategory($v);
                    } else {
                        $this->addCategory(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->addCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->addCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
            }
        }
        if (array_key_exists(self::FIELD_CODE, $data)) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (array_key_exists(self::FIELD_SUBJECT, $data)) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (array_key_exists(self::FIELD_ENCOUNTER, $data)) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIRReference($data[self::FIELD_ENCOUNTER]));
            }
        }
        if (array_key_exists(self::FIELD_EFFECTIVE_DATE_TIME, $data) || array_key_exists(self::FIELD_EFFECTIVE_DATE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_EFFECTIVE_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_EFFECTIVE_DATE_TIME_EXT]) && is_array($data[self::FIELD_EFFECTIVE_DATE_TIME_EXT])) ? $data[self::FIELD_EFFECTIVE_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setEffectiveDateTime($value);
                } else if (is_array($value)) {
                    $this->setEffectiveDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setEffectiveDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setEffectiveDateTime(new FHIRDateTime($ext));
            } else {
                $this->setEffectiveDateTime(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_EFFECTIVE_PERIOD, $data)) {
            if ($data[self::FIELD_EFFECTIVE_PERIOD] instanceof FHIRPeriod) {
                $this->setEffectivePeriod($data[self::FIELD_EFFECTIVE_PERIOD]);
            } else {
                $this->setEffectivePeriod(new FHIRPeriod($data[self::FIELD_EFFECTIVE_PERIOD]));
            }
        }
        if (array_key_exists(self::FIELD_ISSUED, $data) || array_key_exists(self::FIELD_ISSUED_EXT, $data)) {
            $value = $data[self::FIELD_ISSUED] ?? null;
            $ext = (isset($data[self::FIELD_ISSUED_EXT]) && is_array($data[self::FIELD_ISSUED_EXT])) ? $data[self::FIELD_ISSUED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setIssued($value);
                } else if (is_array($value)) {
                    $this->setIssued(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setIssued(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIssued(new FHIRInstant($ext));
            } else {
                $this->setIssued(new FHIRInstant(null));
            }
        }
        if (array_key_exists(self::FIELD_PERFORMER, $data)) {
            if (is_array($data[self::FIELD_PERFORMER])) {
                foreach($data[self::FIELD_PERFORMER] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addPerformer($v);
                    } else {
                        $this->addPerformer(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_PERFORMER] instanceof FHIRReference) {
                $this->addPerformer($data[self::FIELD_PERFORMER]);
            } else {
                $this->addPerformer(new FHIRReference($data[self::FIELD_PERFORMER]));
            }
        }
        if (array_key_exists(self::FIELD_RESULTS_INTERPRETER, $data)) {
            if (is_array($data[self::FIELD_RESULTS_INTERPRETER])) {
                foreach($data[self::FIELD_RESULTS_INTERPRETER] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addResultsInterpreter($v);
                    } else {
                        $this->addResultsInterpreter(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_RESULTS_INTERPRETER] instanceof FHIRReference) {
                $this->addResultsInterpreter($data[self::FIELD_RESULTS_INTERPRETER]);
            } else {
                $this->addResultsInterpreter(new FHIRReference($data[self::FIELD_RESULTS_INTERPRETER]));
            }
        }
        if (array_key_exists(self::FIELD_SPECIMEN, $data)) {
            if (is_array($data[self::FIELD_SPECIMEN])) {
                foreach($data[self::FIELD_SPECIMEN] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addSpecimen($v);
                    } else {
                        $this->addSpecimen(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_SPECIMEN] instanceof FHIRReference) {
                $this->addSpecimen($data[self::FIELD_SPECIMEN]);
            } else {
                $this->addSpecimen(new FHIRReference($data[self::FIELD_SPECIMEN]));
            }
        }
        if (array_key_exists(self::FIELD_RESULT, $data)) {
            if (is_array($data[self::FIELD_RESULT])) {
                foreach($data[self::FIELD_RESULT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addResult($v);
                    } else {
                        $this->addResult(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_RESULT] instanceof FHIRReference) {
                $this->addResult($data[self::FIELD_RESULT]);
            } else {
                $this->addResult(new FHIRReference($data[self::FIELD_RESULT]));
            }
        }
        if (array_key_exists(self::FIELD_NOTE, $data)) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } elseif ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
            }
        }
        if (array_key_exists(self::FIELD_STUDY, $data)) {
            if (is_array($data[self::FIELD_STUDY])) {
                foreach($data[self::FIELD_STUDY] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addStudy($v);
                    } else {
                        $this->addStudy(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_STUDY] instanceof FHIRReference) {
                $this->addStudy($data[self::FIELD_STUDY]);
            } else {
                $this->addStudy(new FHIRReference($data[self::FIELD_STUDY]));
            }
        }
        if (array_key_exists(self::FIELD_SUPPORTING_INFO, $data)) {
            if (is_array($data[self::FIELD_SUPPORTING_INFO])) {
                foreach($data[self::FIELD_SUPPORTING_INFO] as $v) {
                    if ($v instanceof FHIRDiagnosticReportSupportingInfo) {
                        $this->addSupportingInfo($v);
                    } else {
                        $this->addSupportingInfo(new FHIRDiagnosticReportSupportingInfo($v));
                    }
                }
            } elseif ($data[self::FIELD_SUPPORTING_INFO] instanceof FHIRDiagnosticReportSupportingInfo) {
                $this->addSupportingInfo($data[self::FIELD_SUPPORTING_INFO]);
            } else {
                $this->addSupportingInfo(new FHIRDiagnosticReportSupportingInfo($data[self::FIELD_SUPPORTING_INFO]));
            }
        }
        if (array_key_exists(self::FIELD_MEDIA, $data)) {
            if (is_array($data[self::FIELD_MEDIA])) {
                foreach($data[self::FIELD_MEDIA] as $v) {
                    if ($v instanceof FHIRDiagnosticReportMedia) {
                        $this->addMedia($v);
                    } else {
                        $this->addMedia(new FHIRDiagnosticReportMedia($v));
                    }
                }
            } elseif ($data[self::FIELD_MEDIA] instanceof FHIRDiagnosticReportMedia) {
                $this->addMedia($data[self::FIELD_MEDIA]);
            } else {
                $this->addMedia(new FHIRDiagnosticReportMedia($data[self::FIELD_MEDIA]));
            }
        }
        if (array_key_exists(self::FIELD_COMPOSITION, $data)) {
            if ($data[self::FIELD_COMPOSITION] instanceof FHIRReference) {
                $this->setComposition($data[self::FIELD_COMPOSITION]);
            } else {
                $this->setComposition(new FHIRReference($data[self::FIELD_COMPOSITION]));
            }
        }
        if (array_key_exists(self::FIELD_CONCLUSION, $data) || array_key_exists(self::FIELD_CONCLUSION_EXT, $data)) {
            $value = $data[self::FIELD_CONCLUSION] ?? null;
            $ext = (isset($data[self::FIELD_CONCLUSION_EXT]) && is_array($data[self::FIELD_CONCLUSION_EXT])) ? $data[self::FIELD_CONCLUSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setConclusion($value);
                } else if (is_array($value)) {
                    $this->setConclusion(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setConclusion(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setConclusion(new FHIRMarkdown($ext));
            } else {
                $this->setConclusion(new FHIRMarkdown(null));
            }
        }
        if (array_key_exists(self::FIELD_CONCLUSION_CODE, $data)) {
            if (is_array($data[self::FIELD_CONCLUSION_CODE])) {
                foreach($data[self::FIELD_CONCLUSION_CODE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addConclusionCode($v);
                    } else {
                        $this->addConclusionCode(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CONCLUSION_CODE] instanceof FHIRCodeableConcept) {
                $this->addConclusionCode($data[self::FIELD_CONCLUSION_CODE]);
            } else {
                $this->addConclusionCode(new FHIRCodeableConcept($data[self::FIELD_CONCLUSION_CODE]));
            }
        }
        if (array_key_exists(self::FIELD_PRESENTED_FORM, $data)) {
            if (is_array($data[self::FIELD_PRESENTED_FORM])) {
                foreach($data[self::FIELD_PRESENTED_FORM] as $v) {
                    if ($v instanceof FHIRAttachment) {
                        $this->addPresentedForm($v);
                    } else {
                        $this->addPresentedForm(new FHIRAttachment($v));
                    }
                }
            } elseif ($data[self::FIELD_PRESENTED_FORM] instanceof FHIRAttachment) {
                $this->addPresentedForm($data[self::FIELD_PRESENTED_FORM]);
            } else {
                $this->addPresentedForm(new FHIRAttachment($data[self::FIELD_PRESENTED_FORM]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this report by the performer or other systems.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    public function getIdentifier(): null|array
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this report by the performer or other systems.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueAdded();
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this report by the performer or other systems.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        if ([] !== $this->identifier) {
            $this->_trackValuesRemoved(count($this->identifier));
            $this->identifier = [];
        }
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            $this->addIdentifier($v);
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details concerning a service requested.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getBasedOn(): null|array
    {
        return $this->basedOn;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details concerning a service requested.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $basedOn
     * @return static
     */
    public function addBasedOn(null|FHIRReference $basedOn = null): self
    {
        if (null === $basedOn) {
            $basedOn = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details concerning a service requested.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$basedOn
     * @return static
     */
    public function setBasedOn(FHIRReference ...$basedOn): self
    {
        if ([] !== $this->basedOn) {
            $this->_trackValuesRemoved(count($this->basedOn));
            $this->basedOn = [];
        }
        if ([] === $basedOn) {
            return $this;
        }
        foreach($basedOn as $v) {
            $this->addBasedOn($v);
        }
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the diagnostic report.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDiagnosticReportStatus
     */
    public function getStatus(): null|FHIRDiagnosticReportStatus
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the diagnostic report.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDiagnosticReportStatus $status
     * @return static
     */
    public function setStatus(null|FHIRDiagnosticReportStatus $status = null): self
    {
        if (null === $status) {
            $status = new FHIRDiagnosticReportStatus();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies the clinical discipline, department or diagnostic service
     * that created the report (e.g. cardiology, biochemistry, hematology, MRI). This
     * is used for searching, sorting and display purposes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getCategory(): null|array
    {
        return $this->category;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies the clinical discipline, department or diagnostic service
     * that created the report (e.g. cardiology, biochemistry, hematology, MRI). This
     * is used for searching, sorting and display purposes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $category
     * @return static
     */
    public function addCategory(null|FHIRCodeableConcept $category = null): self
    {
        if (null === $category) {
            $category = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->category[] = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies the clinical discipline, department or diagnostic service
     * that created the report (e.g. cardiology, biochemistry, hematology, MRI). This
     * is used for searching, sorting and display purposes.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$category
     * @return static
     */
    public function setCategory(FHIRCodeableConcept ...$category): self
    {
        if ([] !== $this->category) {
            $this->_trackValuesRemoved(count($this->category));
            $this->category = [];
        }
        if ([] === $category) {
            return $this;
        }
        foreach($category as $v) {
            $this->addCategory($v);
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code or name that describes this diagnostic report.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getCode(): null|FHIRCodeableConcept
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code or name that describes this diagnostic report.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(null|FHIRCodeableConcept $code = null): self
    {
        if (null === $code) {
            $code = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->code, $code);
        $this->code = $code;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The subject of the report. Usually, but not always, this is a patient. However,
     * diagnostic services also perform analyses on specimens collected from a variety
     * of other sources.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getSubject(): null|FHIRReference
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The subject of the report. Usually, but not always, this is a patient. However,
     * diagnostic services also perform analyses on specimens collected from a variety
     * of other sources.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subject
     * @return static
     */
    public function setSubject(null|FHIRReference $subject = null): self
    {
        if (null === $subject) {
            $subject = new FHIRReference();
        }
        $this->_trackValueSet($this->subject, $subject);
        $this->subject = $subject;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The healthcare event (e.g. a patient and healthcare provider interaction) which
     * this DiagnosticReport is about.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getEncounter(): null|FHIRReference
    {
        return $this->encounter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The healthcare event (e.g. a patient and healthcare provider interaction) which
     * this DiagnosticReport is about.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $encounter
     * @return static
     */
    public function setEncounter(null|FHIRReference $encounter = null): self
    {
        if (null === $encounter) {
            $encounter = new FHIRReference();
        }
        $this->_trackValueSet($this->encounter, $encounter);
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
     * The time or time-period the observed values are related to. When the subject of
     * the report is a patient, this is usually either the time of the procedure or of
     * specimen collection(s), but very often the source of the date/time is not known,
     * only the date/time itself.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getEffectiveDateTime(): null|FHIRDateTime
    {
        return $this->effectiveDateTime;
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
     * The time or time-period the observed values are related to. When the subject of
     * the report is a patient, this is usually either the time of the procedure or of
     * specimen collection(s), but very often the source of the date/time is not known,
     * only the date/time itself.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R5\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime $effectiveDateTime
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setEffectiveDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $effectiveDateTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $effectiveDateTime && !($effectiveDateTime instanceof FHIRDateTime)) {
            $effectiveDateTime = new FHIRDateTime($effectiveDateTime);
        }
        $this->_trackValueSet($this->effectiveDateTime, $effectiveDateTime);
        if (!isset($this->_xmlLocations[self::FIELD_EFFECTIVE_DATE_TIME])) {
            $this->_xmlLocations[self::FIELD_EFFECTIVE_DATE_TIME] = [];
        }
        $this->_xmlLocations[self::FIELD_EFFECTIVE_DATE_TIME][0] = $xmlLocation;
        $this->effectiveDateTime = $effectiveDateTime;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time or time-period the observed values are related to. When the subject of
     * the report is a patient, this is usually either the time of the procedure or of
     * specimen collection(s), but very often the source of the date/time is not known,
     * only the date/time itself.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    public function getEffectivePeriod(): null|FHIRPeriod
    {
        return $this->effectivePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time or time-period the observed values are related to. When the subject of
     * the report is a patient, this is usually either the time of the procedure or of
     * specimen collection(s), but very often the source of the date/time is not known,
     * only the date/time itself.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $effectivePeriod
     * @return static
     */
    public function setEffectivePeriod(null|FHIRPeriod $effectivePeriod = null): self
    {
        if (null === $effectivePeriod) {
            $effectivePeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->effectivePeriod, $effectivePeriod);
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time that this version of the report was made available to
     * providers, typically after the report was reviewed and verified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInstant
     */
    public function getIssued(): null|FHIRInstant
    {
        return $this->issued;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time that this version of the report was made available to
     * providers, typically after the report was reviewed and verified.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R5\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInstant $issued
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setIssued(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $issued = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $issued && !($issued instanceof FHIRInstant)) {
            $issued = new FHIRInstant($issued);
        }
        $this->_trackValueSet($this->issued, $issued);
        if (!isset($this->_xmlLocations[self::FIELD_ISSUED])) {
            $this->_xmlLocations[self::FIELD_ISSUED] = [];
        }
        $this->_xmlLocations[self::FIELD_ISSUED][0] = $xmlLocation;
        $this->issued = $issued;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The diagnostic service that is responsible for issuing the report.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getPerformer(): null|array
    {
        return $this->performer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The diagnostic service that is responsible for issuing the report.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $performer
     * @return static
     */
    public function addPerformer(null|FHIRReference $performer = null): self
    {
        if (null === $performer) {
            $performer = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The diagnostic service that is responsible for issuing the report.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$performer
     * @return static
     */
    public function setPerformer(FHIRReference ...$performer): self
    {
        if ([] !== $this->performer) {
            $this->_trackValuesRemoved(count($this->performer));
            $this->performer = [];
        }
        if ([] === $performer) {
            return $this;
        }
        foreach($performer as $v) {
            $this->addPerformer($v);
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner or organization that is responsible for the report's
     * conclusions and interpretations.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getResultsInterpreter(): null|array
    {
        return $this->resultsInterpreter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner or organization that is responsible for the report's
     * conclusions and interpretations.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $resultsInterpreter
     * @return static
     */
    public function addResultsInterpreter(null|FHIRReference $resultsInterpreter = null): self
    {
        if (null === $resultsInterpreter) {
            $resultsInterpreter = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->resultsInterpreter[] = $resultsInterpreter;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner or organization that is responsible for the report's
     * conclusions and interpretations.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$resultsInterpreter
     * @return static
     */
    public function setResultsInterpreter(FHIRReference ...$resultsInterpreter): self
    {
        if ([] !== $this->resultsInterpreter) {
            $this->_trackValuesRemoved(count($this->resultsInterpreter));
            $this->resultsInterpreter = [];
        }
        if ([] === $resultsInterpreter) {
            return $this;
        }
        foreach($resultsInterpreter as $v) {
            $this->addResultsInterpreter($v);
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details about the specimens on which this diagnostic report is based.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getSpecimen(): null|array
    {
        return $this->specimen;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details about the specimens on which this diagnostic report is based.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $specimen
     * @return static
     */
    public function addSpecimen(null|FHIRReference $specimen = null): self
    {
        if (null === $specimen) {
            $specimen = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->specimen[] = $specimen;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details about the specimens on which this diagnostic report is based.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$specimen
     * @return static
     */
    public function setSpecimen(FHIRReference ...$specimen): self
    {
        if ([] !== $this->specimen) {
            $this->_trackValuesRemoved(count($this->specimen));
            $this->specimen = [];
        }
        if ([] === $specimen) {
            return $this;
        }
        foreach($specimen as $v) {
            $this->addSpecimen($v);
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * [Observations](observation.html) that are part of this diagnostic report.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getResult(): null|array
    {
        return $this->result;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * [Observations](observation.html) that are part of this diagnostic report.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $result
     * @return static
     */
    public function addResult(null|FHIRReference $result = null): self
    {
        if (null === $result) {
            $result = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->result[] = $result;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * [Observations](observation.html) that are part of this diagnostic report.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$result
     * @return static
     */
    public function setResult(FHIRReference ...$result): self
    {
        if ([] !== $this->result) {
            $this->_trackValuesRemoved(count($this->result));
            $this->result = [];
        }
        if ([] === $result) {
            return $this;
        }
        foreach($result as $v) {
            $this->addResult($v);
        }
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments about the diagnostic report.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    public function getNote(): null|array
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments about the diagnostic report.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation $note
     * @return static
     */
    public function addNote(null|FHIRAnnotation $note = null): self
    {
        if (null === $note) {
            $note = new FHIRAnnotation();
        }
        $this->_trackValueAdded();
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments about the diagnostic report.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation ...$note
     * @return static
     */
    public function setNote(FHIRAnnotation ...$note): self
    {
        if ([] !== $this->note) {
            $this->_trackValuesRemoved(count($this->note));
            $this->note = [];
        }
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            $this->addNote($v);
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One or more links to full details of any study performed during the diagnostic
     * investigation. An ImagingStudy might comprise a set of radiologic images
     * obtained via a procedure that are analyzed as a group. Typically, this is
     * imaging performed by DICOM enabled modalities, but this is not required. A fully
     * enabled PACS viewer can use this information to provide views of the source
     * images. A GenomicStudy might comprise one or more analyses, each serving a
     * specific purpose. These analyses may vary in method (e.g., karyotyping, CNV, or
     * SNV detection), performer, software, devices used, or regions targeted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getStudy(): null|array
    {
        return $this->study;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One or more links to full details of any study performed during the diagnostic
     * investigation. An ImagingStudy might comprise a set of radiologic images
     * obtained via a procedure that are analyzed as a group. Typically, this is
     * imaging performed by DICOM enabled modalities, but this is not required. A fully
     * enabled PACS viewer can use this information to provide views of the source
     * images. A GenomicStudy might comprise one or more analyses, each serving a
     * specific purpose. These analyses may vary in method (e.g., karyotyping, CNV, or
     * SNV detection), performer, software, devices used, or regions targeted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $study
     * @return static
     */
    public function addStudy(null|FHIRReference $study = null): self
    {
        if (null === $study) {
            $study = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->study[] = $study;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One or more links to full details of any study performed during the diagnostic
     * investigation. An ImagingStudy might comprise a set of radiologic images
     * obtained via a procedure that are analyzed as a group. Typically, this is
     * imaging performed by DICOM enabled modalities, but this is not required. A fully
     * enabled PACS viewer can use this information to provide views of the source
     * images. A GenomicStudy might comprise one or more analyses, each serving a
     * specific purpose. These analyses may vary in method (e.g., karyotyping, CNV, or
     * SNV detection), performer, software, devices used, or regions targeted.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$study
     * @return static
     */
    public function setStudy(FHIRReference ...$study): self
    {
        if ([] !== $this->study) {
            $this->_trackValuesRemoved(count($this->study));
            $this->study = [];
        }
        if ([] === $study) {
            return $this;
        }
        foreach($study as $v) {
            $this->addStudy($v);
        }
        return $this;
    }

    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, products, substances, devices, and locations, and/or
     * specimens derived from these. The report includes clinical context such as
     * requesting provider information, and some mix of atomic results, images, textual
     * and coded interpretations, and formatted representation of diagnostic reports.
     * The report also includes non-clinical context such as batch analysis and
     * stability reporting of products and substances.
     *
     * This backbone element contains supporting information that was used in the
     * creation of the report not included in the results already included in the
     * report.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportSupportingInfo[]
     */
    public function getSupportingInfo(): null|array
    {
        return $this->supportingInfo;
    }

    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, products, substances, devices, and locations, and/or
     * specimens derived from these. The report includes clinical context such as
     * requesting provider information, and some mix of atomic results, images, textual
     * and coded interpretations, and formatted representation of diagnostic reports.
     * The report also includes non-clinical context such as batch analysis and
     * stability reporting of products and substances.
     *
     * This backbone element contains supporting information that was used in the
     * creation of the report not included in the results already included in the
     * report.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportSupportingInfo $supportingInfo
     * @return static
     */
    public function addSupportingInfo(null|FHIRDiagnosticReportSupportingInfo $supportingInfo = null): self
    {
        if (null === $supportingInfo) {
            $supportingInfo = new FHIRDiagnosticReportSupportingInfo();
        }
        $this->_trackValueAdded();
        $this->supportingInfo[] = $supportingInfo;
        return $this;
    }

    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, products, substances, devices, and locations, and/or
     * specimens derived from these. The report includes clinical context such as
     * requesting provider information, and some mix of atomic results, images, textual
     * and coded interpretations, and formatted representation of diagnostic reports.
     * The report also includes non-clinical context such as batch analysis and
     * stability reporting of products and substances.
     *
     * This backbone element contains supporting information that was used in the
     * creation of the report not included in the results already included in the
     * report.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportSupportingInfo ...$supportingInfo
     * @return static
     */
    public function setSupportingInfo(FHIRDiagnosticReportSupportingInfo ...$supportingInfo): self
    {
        if ([] !== $this->supportingInfo) {
            $this->_trackValuesRemoved(count($this->supportingInfo));
            $this->supportingInfo = [];
        }
        if ([] === $supportingInfo) {
            return $this;
        }
        foreach($supportingInfo as $v) {
            $this->addSupportingInfo($v);
        }
        return $this;
    }

    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, products, substances, devices, and locations, and/or
     * specimens derived from these. The report includes clinical context such as
     * requesting provider information, and some mix of atomic results, images, textual
     * and coded interpretations, and formatted representation of diagnostic reports.
     * The report also includes non-clinical context such as batch analysis and
     * stability reporting of products and substances.
     *
     * A list of key images or data associated with this report. The images or data are
     * generally created during the diagnostic process, and may be directly of the
     * patient, or of treated specimens (i.e. slides of interest).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportMedia[]
     */
    public function getMedia(): null|array
    {
        return $this->media;
    }

    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, products, substances, devices, and locations, and/or
     * specimens derived from these. The report includes clinical context such as
     * requesting provider information, and some mix of atomic results, images, textual
     * and coded interpretations, and formatted representation of diagnostic reports.
     * The report also includes non-clinical context such as batch analysis and
     * stability reporting of products and substances.
     *
     * A list of key images or data associated with this report. The images or data are
     * generally created during the diagnostic process, and may be directly of the
     * patient, or of treated specimens (i.e. slides of interest).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportMedia $media
     * @return static
     */
    public function addMedia(null|FHIRDiagnosticReportMedia $media = null): self
    {
        if (null === $media) {
            $media = new FHIRDiagnosticReportMedia();
        }
        $this->_trackValueAdded();
        $this->media[] = $media;
        return $this;
    }

    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, products, substances, devices, and locations, and/or
     * specimens derived from these. The report includes clinical context such as
     * requesting provider information, and some mix of atomic results, images, textual
     * and coded interpretations, and formatted representation of diagnostic reports.
     * The report also includes non-clinical context such as batch analysis and
     * stability reporting of products and substances.
     *
     * A list of key images or data associated with this report. The images or data are
     * generally created during the diagnostic process, and may be directly of the
     * patient, or of treated specimens (i.e. slides of interest).
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportMedia ...$media
     * @return static
     */
    public function setMedia(FHIRDiagnosticReportMedia ...$media): self
    {
        if ([] !== $this->media) {
            $this->_trackValuesRemoved(count($this->media));
            $this->media = [];
        }
        if ([] === $media) {
            return $this;
        }
        foreach($media as $v) {
            $this->addMedia($v);
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to a Composition resource instance that provides structure for
     * organizing the contents of the DiagnosticReport.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getComposition(): null|FHIRReference
    {
        return $this->composition;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to a Composition resource instance that provides structure for
     * organizing the contents of the DiagnosticReport.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $composition
     * @return static
     */
    public function setComposition(null|FHIRReference $composition = null): self
    {
        if (null === $composition) {
            $composition = new FHIRReference();
        }
        $this->_trackValueSet($this->composition, $composition);
        $this->composition = $composition;
        return $this;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Concise and clinically contextualized summary conclusion
     * (interpretation/impression) of the diagnostic report.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getConclusion(): null|FHIRMarkdown
    {
        return $this->conclusion;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Concise and clinically contextualized summary conclusion
     * (interpretation/impression) of the diagnostic report.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown $conclusion
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setConclusion(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $conclusion = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $conclusion && !($conclusion instanceof FHIRMarkdown)) {
            $conclusion = new FHIRMarkdown($conclusion);
        }
        $this->_trackValueSet($this->conclusion, $conclusion);
        if (!isset($this->_xmlLocations[self::FIELD_CONCLUSION])) {
            $this->_xmlLocations[self::FIELD_CONCLUSION] = [];
        }
        $this->_xmlLocations[self::FIELD_CONCLUSION][0] = $xmlLocation;
        $this->conclusion = $conclusion;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One or more codes that represent the summary conclusion
     * (interpretation/impression) of the diagnostic report.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getConclusionCode(): null|array
    {
        return $this->conclusionCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One or more codes that represent the summary conclusion
     * (interpretation/impression) of the diagnostic report.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $conclusionCode
     * @return static
     */
    public function addConclusionCode(null|FHIRCodeableConcept $conclusionCode = null): self
    {
        if (null === $conclusionCode) {
            $conclusionCode = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->conclusionCode[] = $conclusionCode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One or more codes that represent the summary conclusion
     * (interpretation/impression) of the diagnostic report.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$conclusionCode
     * @return static
     */
    public function setConclusionCode(FHIRCodeableConcept ...$conclusionCode): self
    {
        if ([] !== $this->conclusionCode) {
            $this->_trackValuesRemoved(count($this->conclusionCode));
            $this->conclusionCode = [];
        }
        if ([] === $conclusionCode) {
            return $this;
        }
        foreach($conclusionCode as $v) {
            $this->addConclusionCode($v);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment[]
     */
    public function getPresentedForm(): null|array
    {
        return $this->presentedForm;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Rich text representation of the entire result as issued by the diagnostic
     * service. Multiple formats are allowed but they SHALL be semantically equivalent.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment $presentedForm
     * @return static
     */
    public function addPresentedForm(null|FHIRAttachment $presentedForm = null): self
    {
        if (null === $presentedForm) {
            $presentedForm = new FHIRAttachment();
        }
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment ...$presentedForm
     * @return static
     */
    public function setPresentedForm(FHIRAttachment ...$presentedForm): self
    {
        if ([] !== $this->presentedForm) {
            $this->_trackValuesRemoved(count($this->presentedForm));
            $this->presentedForm = [];
        }
        if ([] === $presentedForm) {
            return $this;
        }
        foreach($presentedForm as $v) {
            $this->addPresentedForm($v);
        }
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
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getBasedOn())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_BASED_ON, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
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
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENCOUNTER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEffectiveDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EFFECTIVE_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EFFECTIVE_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIssued())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ISSUED] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPerformer())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PERFORMER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getResultsInterpreter())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RESULTS_INTERPRETER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSpecimen())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SPECIMEN, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getResult())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RESULT, $i)] = $fieldErrs;
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
        if ([] !== ($vs = $this->getStudy())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_STUDY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSupportingInfo())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUPPORTING_INFO, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getMedia())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MEDIA, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getComposition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMPOSITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getConclusion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONCLUSION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getConclusionCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONCLUSION_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPresentedForm())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PRESENTED_FORM, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BASED_ON])) {
            $v = $this->getBasedOn();
            foreach($validationRules[self::FIELD_BASED_ON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_BASED_ON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASED_ON])) {
                        $errs[self::FIELD_BASED_ON] = [];
                    }
                    $errs[self::FIELD_BASED_ON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_CATEGORY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_SUBJECT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCOUNTER])) {
                        $errs[self::FIELD_ENCOUNTER] = [];
                    }
                    $errs[self::FIELD_ENCOUNTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EFFECTIVE_DATE_TIME])) {
            $v = $this->getEffectiveDateTime();
            foreach($validationRules[self::FIELD_EFFECTIVE_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_EFFECTIVE_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EFFECTIVE_DATE_TIME])) {
                        $errs[self::FIELD_EFFECTIVE_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_EFFECTIVE_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EFFECTIVE_PERIOD])) {
            $v = $this->getEffectivePeriod();
            foreach($validationRules[self::FIELD_EFFECTIVE_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_EFFECTIVE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EFFECTIVE_PERIOD])) {
                        $errs[self::FIELD_EFFECTIVE_PERIOD] = [];
                    }
                    $errs[self::FIELD_EFFECTIVE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ISSUED])) {
            $v = $this->getIssued();
            foreach($validationRules[self::FIELD_ISSUED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_ISSUED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ISSUED])) {
                        $errs[self::FIELD_ISSUED] = [];
                    }
                    $errs[self::FIELD_ISSUED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMER])) {
            $v = $this->getPerformer();
            foreach($validationRules[self::FIELD_PERFORMER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_PERFORMER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER])) {
                        $errs[self::FIELD_PERFORMER] = [];
                    }
                    $errs[self::FIELD_PERFORMER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESULTS_INTERPRETER])) {
            $v = $this->getResultsInterpreter();
            foreach($validationRules[self::FIELD_RESULTS_INTERPRETER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_RESULTS_INTERPRETER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESULTS_INTERPRETER])) {
                        $errs[self::FIELD_RESULTS_INTERPRETER] = [];
                    }
                    $errs[self::FIELD_RESULTS_INTERPRETER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPECIMEN])) {
            $v = $this->getSpecimen();
            foreach($validationRules[self::FIELD_SPECIMEN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_SPECIMEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPECIMEN])) {
                        $errs[self::FIELD_SPECIMEN] = [];
                    }
                    $errs[self::FIELD_SPECIMEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESULT])) {
            $v = $this->getResult();
            foreach($validationRules[self::FIELD_RESULT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_RESULT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESULT])) {
                        $errs[self::FIELD_RESULT] = [];
                    }
                    $errs[self::FIELD_RESULT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STUDY])) {
            $v = $this->getStudy();
            foreach($validationRules[self::FIELD_STUDY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_STUDY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STUDY])) {
                        $errs[self::FIELD_STUDY] = [];
                    }
                    $errs[self::FIELD_STUDY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUPPORTING_INFO])) {
            $v = $this->getSupportingInfo();
            foreach($validationRules[self::FIELD_SUPPORTING_INFO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_SUPPORTING_INFO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUPPORTING_INFO])) {
                        $errs[self::FIELD_SUPPORTING_INFO] = [];
                    }
                    $errs[self::FIELD_SUPPORTING_INFO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEDIA])) {
            $v = $this->getMedia();
            foreach($validationRules[self::FIELD_MEDIA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_MEDIA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEDIA])) {
                        $errs[self::FIELD_MEDIA] = [];
                    }
                    $errs[self::FIELD_MEDIA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMPOSITION])) {
            $v = $this->getComposition();
            foreach($validationRules[self::FIELD_COMPOSITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_COMPOSITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMPOSITION])) {
                        $errs[self::FIELD_COMPOSITION] = [];
                    }
                    $errs[self::FIELD_COMPOSITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONCLUSION])) {
            $v = $this->getConclusion();
            foreach($validationRules[self::FIELD_CONCLUSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_CONCLUSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONCLUSION])) {
                        $errs[self::FIELD_CONCLUSION] = [];
                    }
                    $errs[self::FIELD_CONCLUSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONCLUSION_CODE])) {
            $v = $this->getConclusionCode();
            foreach($validationRules[self::FIELD_CONCLUSION_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_CONCLUSION_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONCLUSION_CODE])) {
                        $errs[self::FIELD_CONCLUSION_CODE] = [];
                    }
                    $errs[self::FIELD_CONCLUSION_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRESENTED_FORM])) {
            $v = $this->getPresentedForm();
            foreach($validationRules[self::FIELD_PRESENTED_FORM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_PRESENTED_FORM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRESENTED_FORM])) {
                        $errs[self::FIELD_PRESENTED_FORM] = [];
                    }
                    $errs[self::FIELD_PRESENTED_FORM][$rule] = $err;
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
        return $errs;
    }

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRDiagnosticReport)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_IDENTIFIER === $childName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_BASED_ON === $childName) {
                $type->addBasedOn(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STATUS === $childName) {
                $type->setStatus(FHIRDiagnosticReportStatus::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CATEGORY === $childName) {
                $type->addCategory(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CODE === $childName) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUBJECT === $childName) {
                $type->setSubject(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ENCOUNTER === $childName) {
                $type->setEncounter(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EFFECTIVE_DATE_TIME === $childName) {
                $type->setEffectiveDateTime(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_EFFECTIVE_PERIOD === $childName) {
                $type->setEffectivePeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ISSUED === $childName) {
                $type->setIssued(FHIRInstant::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PERFORMER === $childName) {
                $type->addPerformer(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RESULTS_INTERPRETER === $childName) {
                $type->addResultsInterpreter(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SPECIMEN === $childName) {
                $type->addSpecimen(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RESULT === $childName) {
                $type->addResult(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_NOTE === $childName) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STUDY === $childName) {
                $type->addStudy(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUPPORTING_INFO === $childName) {
                $type->addSupportingInfo(FHIRDiagnosticReportSupportingInfo::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEDIA === $childName) {
                $type->addMedia(FHIRDiagnosticReportMedia::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_COMPOSITION === $childName) {
                $type->setComposition(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONCLUSION === $childName) {
                $type->setConclusion(FHIRMarkdown::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CONCLUSION_CODE === $childName) {
                $type->addConclusionCode(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PRESENTED_FORM === $childName) {
                $type->addPresentedForm(FHIRAttachment::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TEXT === $childName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn, $config));
                }
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_META === $childName) {
                $type->setMeta(FHIRMeta::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMPLICIT_RULES === $childName) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LANGUAGE === $childName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_EFFECTIVE_DATE_TIME])) {
            $pt = $type->getEffectiveDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_EFFECTIVE_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setEffectiveDateTime((string)$attributes[self::FIELD_EFFECTIVE_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ISSUED])) {
            $pt = $type->getIssued();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ISSUED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setIssued((string)$attributes[self::FIELD_ISSUED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CONCLUSION])) {
            $pt = $type->getConclusion();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CONCLUSION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setConclusion((string)$attributes[self::FIELD_CONCLUSION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'DiagnosticReport', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_EFFECTIVE_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getEffectiveDateTime())) {
            $xw->writeAttribute(self::FIELD_EFFECTIVE_DATE_TIME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_ISSUED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getIssued())) {
            $xw->writeAttribute(self::FIELD_ISSUED, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_CONCLUSION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getConclusion())) {
            $xw->writeAttribute(self::FIELD_CONCLUSION, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        foreach ($this->getIdentifier() as $v) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getBasedOn() as $v) {
            $xw->startElement(self::FIELD_BASED_ON);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStatus())) {
            $xw->startElement(self::FIELD_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getCategory() as $v) {
            $xw->startElement(self::FIELD_CATEGORY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getCode())) {
            $xw->startElement(self::FIELD_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSubject())) {
            $xw->startElement(self::FIELD_SUBJECT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getEncounter())) {
            $xw->startElement(self::FIELD_ENCOUNTER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_EFFECTIVE_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getEffectiveDateTime())) {
            $xw->startElement(self::FIELD_EFFECTIVE_DATE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            $xw->startElement(self::FIELD_EFFECTIVE_PERIOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_ISSUED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getIssued())) {
            $xw->startElement(self::FIELD_ISSUED);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getPerformer() as $v) {
            $xw->startElement(self::FIELD_PERFORMER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getResultsInterpreter() as $v) {
            $xw->startElement(self::FIELD_RESULTS_INTERPRETER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getSpecimen() as $v) {
            $xw->startElement(self::FIELD_SPECIMEN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getResult() as $v) {
            $xw->startElement(self::FIELD_RESULT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getNote() as $v) {
            $xw->startElement(self::FIELD_NOTE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getStudy() as $v) {
            $xw->startElement(self::FIELD_STUDY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getSupportingInfo() as $v) {
            $xw->startElement(self::FIELD_SUPPORTING_INFO);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getMedia() as $v) {
            $xw->startElement(self::FIELD_MEDIA);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getComposition())) {
            $xw->startElement(self::FIELD_COMPOSITION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_CONCLUSION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getConclusion())) {
            $xw->startElement(self::FIELD_CONCLUSION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getConclusionCode() as $v) {
            $xw->startElement(self::FIELD_CONCLUSION_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getPresentedForm() as $v) {
            $xw->startElement(self::FIELD_PRESENTED_FORM);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getBasedOn())) {
            $out->{self::FIELD_BASED_ON} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_BASED_ON}[] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDiagnosticReportStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getCategory())) {
            $out->{self::FIELD_CATEGORY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CATEGORY}[] = $v;
            }
        }
        if (null !== ($v = $this->getCode())) {
            $out->{self::FIELD_CODE} = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $out->{self::FIELD_SUBJECT} = $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            $out->{self::FIELD_ENCOUNTER} = $v;
        }
        if (null !== ($v = $this->getEffectiveDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_EFFECTIVE_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EFFECTIVE_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            $out->{self::FIELD_EFFECTIVE_PERIOD} = $v;
        }
        if (null !== ($v = $this->getIssued())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ISSUED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInstant::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ISSUED_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getPerformer())) {
            $out->{self::FIELD_PERFORMER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PERFORMER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getResultsInterpreter())) {
            $out->{self::FIELD_RESULTS_INTERPRETER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_RESULTS_INTERPRETER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getSpecimen())) {
            $out->{self::FIELD_SPECIMEN} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SPECIMEN}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getResult())) {
            $out->{self::FIELD_RESULT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_RESULT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            $out->{self::FIELD_NOTE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_NOTE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getStudy())) {
            $out->{self::FIELD_STUDY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_STUDY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getSupportingInfo())) {
            $out->{self::FIELD_SUPPORTING_INFO} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SUPPORTING_INFO}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getMedia())) {
            $out->{self::FIELD_MEDIA} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_MEDIA}[] = $v;
            }
        }
        if (null !== ($v = $this->getComposition())) {
            $out->{self::FIELD_COMPOSITION} = $v;
        }
        if (null !== ($v = $this->getConclusion())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CONCLUSION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONCLUSION_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getConclusionCode())) {
            $out->{self::FIELD_CONCLUSION_CODE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CONCLUSION_CODE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getPresentedForm())) {
            $out->{self::FIELD_PRESENTED_FORM} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PRESENTED_FORM}[] = $v;
            }
        }

        $out->{PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE} = $this->_getResourceType();

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
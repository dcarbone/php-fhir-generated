<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDiagnosticReportStatus;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * The findings and interpretation of diagnostic tests performed on patients,
 * groups of patients, devices, and locations, and/or specimens derived from these.
 * The report includes clinical context such as requesting and provider
 * information, and some mix of atomic results, images, textual and coded
 * interpretations, and formatted representation of diagnostic reports.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRDiagnosticReport
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRDiagnosticReport extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT;
    const FIELD_CATEGORY = 'category';
    const FIELD_CODE = 'code';
    const FIELD_CODED_DIAGNOSIS = 'codedDiagnosis';
    const FIELD_CONCLUSION = 'conclusion';
    const FIELD_CONCLUSION_EXT = '_conclusion';
    const FIELD_EFFECTIVE_DATE_TIME = 'effectiveDateTime';
    const FIELD_EFFECTIVE_DATE_TIME_EXT = '_effectiveDateTime';
    const FIELD_EFFECTIVE_PERIOD = 'effectivePeriod';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IMAGE = 'image';
    const FIELD_IMAGING_STUDY = 'imagingStudy';
    const FIELD_ISSUED = 'issued';
    const FIELD_ISSUED_EXT = '_issued';
    const FIELD_PERFORMER = 'performer';
    const FIELD_PRESENTED_FORM = 'presentedForm';
    const FIELD_REQUEST = 'request';
    const FIELD_RESULT = 'result';
    const FIELD_SPECIMEN = 'specimen';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_SUBJECT = 'subject';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $category = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code or name that describes this diagnostic report.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $code = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes for the conclusion.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected $codedDiagnosis = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Concise and clinically contextualized narrative interpretation of the diagnostic
     * report.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $conclusion = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time or time-period the observed values are related to. When the subject of
     * the report is a patient, this is usually either the time of the procedure or of
     * specimen collection(s), but very often the source of the date/time is not known,
     * only the date/time itself.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    protected $effectiveDateTime = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    protected $effectivePeriod = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The link to the health care event (encounter) when the order was made.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $encounter = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The local ID assigned to the report by the order filler, usually by the
     * Information System of the diagnostic service provider.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, devices, and locations, and/or specimens derived from these.
     * The report includes clinical context such as requesting and provider
     * information, and some mix of atomic results, images, textual and coded
     * interpretations, and formatted representation of diagnostic reports.
     *
     * A list of key images associated with this report. The images are generally
     * created during the diagnostic process, and may be directly of the patient, or of
     * treated specimens (i.e. slides of interest).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage[]
     */
    protected $image = [];

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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    protected $imagingStudy = [];

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time that this version of the report was released from the source
     * diagnostic service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant
     */
    protected $issued = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The diagnostic service that is responsible for issuing the report.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $performer = null;

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Rich text representation of the entire result as issued by the diagnostic
     * service. Multiple formats are allowed but they SHALL be semantically equivalent.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAttachment[]
     */
    protected $presentedForm = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details concerning a test or procedure requested.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    protected $request = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Observations that are part of this diagnostic report. Observations can be simple
     * name/value pairs (e.g. "atomic" results), or they can be grouping observations
     * that include references to other members of the group (e.g. "panels").
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    protected $result = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details about the specimens on which this diagnostic report is based.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    protected $specimen = [];

    /**
     * The status of the diagnostic report as a whole.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the diagnostic report as a whole.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDiagnosticReportStatus
     */
    protected $status = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The subject of the report. Usually, but not always, this is a patient. However
     * diagnostic services also perform analyses on specimens collected from a variety
     * of other sources.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $subject = null;

    /**
     * Validation map for fields in type DiagnosticReport
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRDiagnosticReport Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDiagnosticReport::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CATEGORY])) {
            if ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->setCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->setCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_CODED_DIAGNOSIS])) {
            if (is_array($data[self::FIELD_CODED_DIAGNOSIS])) {
                foreach($data[self::FIELD_CODED_DIAGNOSIS] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCodedDiagnosis($v);
                    } else {
                        $this->addCodedDiagnosis(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_CODED_DIAGNOSIS] instanceof FHIRCodeableConcept) {
                $this->addCodedDiagnosis($data[self::FIELD_CODED_DIAGNOSIS]);
            } else {
                $this->addCodedDiagnosis(new FHIRCodeableConcept($data[self::FIELD_CODED_DIAGNOSIS]));
            }
        }
        if (isset($data[self::FIELD_CONCLUSION]) || isset($data[self::FIELD_CONCLUSION_EXT])) {
            if (isset($data[self::FIELD_CONCLUSION])) {
                $value = $data[self::FIELD_CONCLUSION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CONCLUSION_EXT]) && is_array($data[self::FIELD_CONCLUSION_EXT])) {
                $ext = $data[self::FIELD_CONCLUSION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setConclusion($value);
                } else if (is_array($value)) {
                    $this->setConclusion(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setConclusion(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setConclusion(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_EFFECTIVE_DATE_TIME]) || isset($data[self::FIELD_EFFECTIVE_DATE_TIME_EXT])) {
            if (isset($data[self::FIELD_EFFECTIVE_DATE_TIME])) {
                $value = $data[self::FIELD_EFFECTIVE_DATE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_EFFECTIVE_DATE_TIME_EXT]) && is_array($data[self::FIELD_EFFECTIVE_DATE_TIME_EXT])) {
                $ext = $data[self::FIELD_EFFECTIVE_DATE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setEffectiveDateTime($value);
                } else if (is_array($value)) {
                    $this->setEffectiveDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setEffectiveDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setEffectiveDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_EFFECTIVE_PERIOD])) {
            if ($data[self::FIELD_EFFECTIVE_PERIOD] instanceof FHIRPeriod) {
                $this->setEffectivePeriod($data[self::FIELD_EFFECTIVE_PERIOD]);
            } else {
                $this->setEffectivePeriod(new FHIRPeriod($data[self::FIELD_EFFECTIVE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_ENCOUNTER])) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIRReference($data[self::FIELD_ENCOUNTER]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } else if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_IMAGE])) {
            if (is_array($data[self::FIELD_IMAGE])) {
                foreach($data[self::FIELD_IMAGE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRDiagnosticReportImage) {
                        $this->addImage($v);
                    } else {
                        $this->addImage(new FHIRDiagnosticReportImage($v));
                    }
                }
            } else if ($data[self::FIELD_IMAGE] instanceof FHIRDiagnosticReportImage) {
                $this->addImage($data[self::FIELD_IMAGE]);
            } else {
                $this->addImage(new FHIRDiagnosticReportImage($data[self::FIELD_IMAGE]));
            }
        }
        if (isset($data[self::FIELD_IMAGING_STUDY])) {
            if (is_array($data[self::FIELD_IMAGING_STUDY])) {
                foreach($data[self::FIELD_IMAGING_STUDY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addImagingStudy($v);
                    } else {
                        $this->addImagingStudy(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_IMAGING_STUDY] instanceof FHIRReference) {
                $this->addImagingStudy($data[self::FIELD_IMAGING_STUDY]);
            } else {
                $this->addImagingStudy(new FHIRReference($data[self::FIELD_IMAGING_STUDY]));
            }
        }
        if (isset($data[self::FIELD_ISSUED]) || isset($data[self::FIELD_ISSUED_EXT])) {
            if (isset($data[self::FIELD_ISSUED])) {
                $value = $data[self::FIELD_ISSUED];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ISSUED_EXT]) && is_array($data[self::FIELD_ISSUED_EXT])) {
                $ext = $data[self::FIELD_ISSUED_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setIssued($value);
                } else if (is_array($value)) {
                    $this->setIssued(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setIssued(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setIssued(new FHIRInstant($ext));
            }
        }
        if (isset($data[self::FIELD_PERFORMER])) {
            if ($data[self::FIELD_PERFORMER] instanceof FHIRReference) {
                $this->setPerformer($data[self::FIELD_PERFORMER]);
            } else {
                $this->setPerformer(new FHIRReference($data[self::FIELD_PERFORMER]));
            }
        }
        if (isset($data[self::FIELD_PRESENTED_FORM])) {
            if (is_array($data[self::FIELD_PRESENTED_FORM])) {
                foreach($data[self::FIELD_PRESENTED_FORM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRAttachment) {
                        $this->addPresentedForm($v);
                    } else {
                        $this->addPresentedForm(new FHIRAttachment($v));
                    }
                }
            } else if ($data[self::FIELD_PRESENTED_FORM] instanceof FHIRAttachment) {
                $this->addPresentedForm($data[self::FIELD_PRESENTED_FORM]);
            } else {
                $this->addPresentedForm(new FHIRAttachment($data[self::FIELD_PRESENTED_FORM]));
            }
        }
        if (isset($data[self::FIELD_REQUEST])) {
            if (is_array($data[self::FIELD_REQUEST])) {
                foreach($data[self::FIELD_REQUEST] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addRequest($v);
                    } else {
                        $this->addRequest(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_REQUEST] instanceof FHIRReference) {
                $this->addRequest($data[self::FIELD_REQUEST]);
            } else {
                $this->addRequest(new FHIRReference($data[self::FIELD_REQUEST]));
            }
        }
        if (isset($data[self::FIELD_RESULT])) {
            if (is_array($data[self::FIELD_RESULT])) {
                foreach($data[self::FIELD_RESULT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addResult($v);
                    } else {
                        $this->addResult(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_RESULT] instanceof FHIRReference) {
                $this->addResult($data[self::FIELD_RESULT]);
            } else {
                $this->addResult(new FHIRReference($data[self::FIELD_RESULT]));
            }
        }
        if (isset($data[self::FIELD_SPECIMEN])) {
            if (is_array($data[self::FIELD_SPECIMEN])) {
                foreach($data[self::FIELD_SPECIMEN] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addSpecimen($v);
                    } else {
                        $this->addSpecimen(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_SPECIMEN] instanceof FHIRReference) {
                $this->addSpecimen($data[self::FIELD_SPECIMEN]);
            } else {
                $this->addSpecimen(new FHIRReference($data[self::FIELD_SPECIMEN]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            if (isset($data[self::FIELD_STATUS])) {
                $value = $data[self::FIELD_STATUS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) {
                $ext = $data[self::FIELD_STATUS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDiagnosticReportStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRDiagnosticReportStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRDiagnosticReportStatus([FHIRDiagnosticReportStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRDiagnosticReportStatus($ext));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<DiagnosticReport{$xmlns}></DiagnosticReport>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $category
     * @return static
     */
    public function setCategory(FHIRCodeableConcept $category = null)
    {
        $this->category = $category;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        $this->code = $code;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCodedDiagnosis()
    {
        return $this->codedDiagnosis;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes for the conclusion.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $codedDiagnosis
     * @return static
     */
    public function addCodedDiagnosis(FHIRCodeableConcept $codedDiagnosis = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[] $codedDiagnosis
     * @return static
     */
    public function setCodedDiagnosis(array $codedDiagnosis = [])
    {
        $this->codedDiagnosis = [];
        if ([] === $codedDiagnosis) {
            return $this;
        }
        foreach($codedDiagnosis as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCodedDiagnosis($v);
            } else {
                $this->addCodedDiagnosis(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Concise and clinically contextualized narrative interpretation of the diagnostic
     * report.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getConclusion()
    {
        return $this->conclusion;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Concise and clinically contextualized narrative interpretation of the diagnostic
     * report.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $conclusion
     * @return static
     */
    public function setConclusion($conclusion = null)
    {
        if (null === $conclusion) {
            $this->conclusion = null;
            return $this;
        }
        if ($conclusion instanceof FHIRString) {
            $this->conclusion = $conclusion;
            return $this;
        }
        $this->conclusion = new FHIRString($conclusion);
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
     * The time or time-period the observed values are related to. When the subject of
     * the report is a patient, this is usually either the time of the procedure or of
     * specimen collection(s), but very often the source of the date/time is not known,
     * only the date/time itself.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getEffectiveDateTime()
    {
        return $this->effectiveDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time or time-period the observed values are related to. When the subject of
     * the report is a patient, this is usually either the time of the procedure or of
     * specimen collection(s), but very often the source of the date/time is not known,
     * only the date/time itself.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $effectiveDateTime
     * @return static
     */
    public function setEffectiveDateTime($effectiveDateTime = null)
    {
        if (null === $effectiveDateTime) {
            $this->effectiveDateTime = null;
            return $this;
        }
        if ($effectiveDateTime instanceof FHIRDateTime) {
            $this->effectiveDateTime = $effectiveDateTime;
            return $this;
        }
        $this->effectiveDateTime = new FHIRDateTime($effectiveDateTime);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getEffectivePeriod()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod $effectivePeriod
     * @return static
     */
    public function setEffectivePeriod(FHIRPeriod $effectivePeriod = null)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The link to the health care event (encounter) when the order was made.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The link to the health care event (encounter) when the order was made.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $encounter
     * @return static
     */
    public function setEncounter(FHIRReference $encounter = null)
    {
        $this->encounter = $encounter;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The local ID assigned to the report by the order filler, usually by the
     * Information System of the diagnostic service provider.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
     */
    public function setIdentifier(array $identifier = [])
    {
        $this->identifier = [];
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, devices, and locations, and/or specimens derived from these.
     * The report includes clinical context such as requesting and provider
     * information, and some mix of atomic results, images, textual and coded
     * interpretations, and formatted representation of diagnostic reports.
     *
     * A list of key images associated with this report. The images are generally
     * created during the diagnostic process, and may be directly of the patient, or of
     * treated specimens (i.e. slides of interest).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, devices, and locations, and/or specimens derived from these.
     * The report includes clinical context such as requesting and provider
     * information, and some mix of atomic results, images, textual and coded
     * interpretations, and formatted representation of diagnostic reports.
     *
     * A list of key images associated with this report. The images are generally
     * created during the diagnostic process, and may be directly of the patient, or of
     * treated specimens (i.e. slides of interest).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage $image
     * @return static
     */
    public function addImage(FHIRDiagnosticReportImage $image = null)
    {
        $this->image[] = $image;
        return $this;
    }

    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, devices, and locations, and/or specimens derived from these.
     * The report includes clinical context such as requesting and provider
     * information, and some mix of atomic results, images, textual and coded
     * interpretations, and formatted representation of diagnostic reports.
     *
     * A list of key images associated with this report. The images are generally
     * created during the diagnostic process, and may be directly of the patient, or of
     * treated specimens (i.e. slides of interest).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage[] $image
     * @return static
     */
    public function setImage(array $image = [])
    {
        $this->image = [];
        if ([] === $image) {
            return $this;
        }
        foreach($image as $v) {
            if ($v instanceof FHIRDiagnosticReportImage) {
                $this->addImage($v);
            } else {
                $this->addImage(new FHIRDiagnosticReportImage($v));
            }
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getImagingStudy()
    {
        return $this->imagingStudy;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $imagingStudy
     * @return static
     */
    public function addImagingStudy(FHIRReference $imagingStudy = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[] $imagingStudy
     * @return static
     */
    public function setImagingStudy(array $imagingStudy = [])
    {
        $this->imagingStudy = [];
        if ([] === $imagingStudy) {
            return $this;
        }
        foreach($imagingStudy as $v) {
            if ($v instanceof FHIRReference) {
                $this->addImagingStudy($v);
            } else {
                $this->addImagingStudy(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time that this version of the report was released from the source
     * diagnostic service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time that this version of the report was released from the source
     * diagnostic service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant $issued
     * @return static
     */
    public function setIssued($issued = null)
    {
        if (null === $issued) {
            $this->issued = null;
            return $this;
        }
        if ($issued instanceof FHIRInstant) {
            $this->issued = $issued;
            return $this;
        }
        $this->issued = new FHIRInstant($issued);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The diagnostic service that is responsible for issuing the report.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getPerformer()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $performer
     * @return static
     */
    public function setPerformer(FHIRReference $performer = null)
    {
        $this->performer = $performer;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAttachment[]
     */
    public function getPresentedForm()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAttachment $presentedForm
     * @return static
     */
    public function addPresentedForm(FHIRAttachment $presentedForm = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAttachment[] $presentedForm
     * @return static
     */
    public function setPresentedForm(array $presentedForm = [])
    {
        $this->presentedForm = [];
        if ([] === $presentedForm) {
            return $this;
        }
        foreach($presentedForm as $v) {
            if ($v instanceof FHIRAttachment) {
                $this->addPresentedForm($v);
            } else {
                $this->addPresentedForm(new FHIRAttachment($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details concerning a test or procedure requested.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details concerning a test or procedure requested.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $request
     * @return static
     */
    public function addRequest(FHIRReference $request = null)
    {
        $this->request[] = $request;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details concerning a test or procedure requested.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[] $request
     * @return static
     */
    public function setRequest(array $request = [])
    {
        $this->request = [];
        if ([] === $request) {
            return $this;
        }
        foreach($request as $v) {
            if ($v instanceof FHIRReference) {
                $this->addRequest($v);
            } else {
                $this->addRequest(new FHIRReference($v));
            }
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getResult()
    {
        return $this->result;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $result
     * @return static
     */
    public function addResult(FHIRReference $result = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[] $result
     * @return static
     */
    public function setResult(array $result = [])
    {
        $this->result = [];
        if ([] === $result) {
            return $this;
        }
        foreach($result as $v) {
            if ($v instanceof FHIRReference) {
                $this->addResult($v);
            } else {
                $this->addResult(new FHIRReference($v));
            }
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getSpecimen()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $specimen
     * @return static
     */
    public function addSpecimen(FHIRReference $specimen = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[] $specimen
     * @return static
     */
    public function setSpecimen(array $specimen = [])
    {
        $this->specimen = [];
        if ([] === $specimen) {
            return $this;
        }
        foreach($specimen as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSpecimen($v);
            } else {
                $this->addSpecimen(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * The status of the diagnostic report as a whole.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the diagnostic report as a whole.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDiagnosticReportStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the diagnostic report as a whole.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the diagnostic report as a whole.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDiagnosticReportStatus $status
     * @return static
     */
    public function setStatus(FHIRDiagnosticReportStatus $status = null)
    {
        $this->status = $status;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function setSubject(FHIRReference $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getCategory())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CATEGORY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCodedDiagnosis())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CODED_DIAGNOSIS, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getConclusion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONCLUSION] = $fieldErrs;
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
        if (null !== ($v = $this->getEncounter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENCOUNTER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getImage())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IMAGE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getImagingStudy())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IMAGING_STUDY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getIssued())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ISSUED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPerformer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERFORMER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPresentedForm())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PRESENTED_FORM, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRequest())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REQUEST, $i)] = $fieldErrs;
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
        if ([] !== ($vs = $this->getSpecimen())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SPECIMEN, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_CODED_DIAGNOSIS])) {
            $v = $this->getCodedDiagnosis();
            foreach($validationRules[self::FIELD_CODED_DIAGNOSIS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_CODED_DIAGNOSIS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODED_DIAGNOSIS])) {
                        $errs[self::FIELD_CODED_DIAGNOSIS] = [];
                    }
                    $errs[self::FIELD_CODED_DIAGNOSIS][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_IMAGE])) {
            $v = $this->getImage();
            foreach($validationRules[self::FIELD_IMAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_IMAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMAGE])) {
                        $errs[self::FIELD_IMAGE] = [];
                    }
                    $errs[self::FIELD_IMAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMAGING_STUDY])) {
            $v = $this->getImagingStudy();
            foreach($validationRules[self::FIELD_IMAGING_STUDY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_IMAGING_STUDY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMAGING_STUDY])) {
                        $errs[self::FIELD_IMAGING_STUDY] = [];
                    }
                    $errs[self::FIELD_IMAGING_STUDY][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_REQUEST])) {
            $v = $this->getRequest();
            foreach($validationRules[self::FIELD_REQUEST] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT, self::FIELD_REQUEST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUEST])) {
                        $errs[self::FIELD_REQUEST] = [];
                    }
                    $errs[self::FIELD_REQUEST][$rule] = $err;
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
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRDiagnosticReport::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDiagnosticReport::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRDiagnosticReport;
        } elseif (!is_object($type) || !($type instanceof FHIRDiagnosticReport)) {
            throw new \RuntimeException(sprintf(
                'FHIRDiagnosticReport::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->category)) {
            $type->setCategory(FHIRCodeableConcept::xmlUnserialize($children->category));
        }
        if (isset($children->code)) {
            $type->setCode(FHIRCodeableConcept::xmlUnserialize($children->code));
        }
        if (isset($children->codedDiagnosis)) {
            foreach($children->codedDiagnosis as $child) {
                $type->addCodedDiagnosis(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->conclusion)) {
            $type->setConclusion(FHIRString::xmlUnserialize($children->conclusion));
        }
        if (isset($attributes->conclusion)) {
            $pt = $type->getConclusion();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->conclusion);
            } else {
                $type->setConclusion((string)$attributes->conclusion);
            }
        }
        if (isset($children->effectiveDateTime)) {
            $type->setEffectiveDateTime(FHIRDateTime::xmlUnserialize($children->effectiveDateTime));
        }
        if (isset($attributes->effectiveDateTime)) {
            $pt = $type->getEffectiveDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->effectiveDateTime);
            } else {
                $type->setEffectiveDateTime((string)$attributes->effectiveDateTime);
            }
        }
        if (isset($children->effectivePeriod)) {
            $type->setEffectivePeriod(FHIRPeriod::xmlUnserialize($children->effectivePeriod));
        }
        if (isset($children->encounter)) {
            $type->setEncounter(FHIRReference::xmlUnserialize($children->encounter));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->image)) {
            foreach($children->image as $child) {
                $type->addImage(FHIRDiagnosticReportImage::xmlUnserialize($child));
            }
        }
        if (isset($children->imagingStudy)) {
            foreach($children->imagingStudy as $child) {
                $type->addImagingStudy(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->issued)) {
            $type->setIssued(FHIRInstant::xmlUnserialize($children->issued));
        }
        if (isset($attributes->issued)) {
            $pt = $type->getIssued();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->issued);
            } else {
                $type->setIssued((string)$attributes->issued);
            }
        }
        if (isset($children->performer)) {
            $type->setPerformer(FHIRReference::xmlUnserialize($children->performer));
        }
        if (isset($children->presentedForm)) {
            foreach($children->presentedForm as $child) {
                $type->addPresentedForm(FHIRAttachment::xmlUnserialize($child));
            }
        }
        if (isset($children->request)) {
            foreach($children->request as $child) {
                $type->addRequest(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->result)) {
            foreach($children->result as $child) {
                $type->addResult(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->specimen)) {
            foreach($children->specimen as $child) {
                $type->addSpecimen(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRDiagnosticReportStatus::xmlUnserialize($children->status));
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRReference::xmlUnserialize($children->subject));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getCategory())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getCodedDiagnosis())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CODED_DIAGNOSIS, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getConclusion())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONCLUSION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getEffectiveDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EFFECTIVE_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EFFECTIVE_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getEncounter())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENCOUNTER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getImage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IMAGE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getImagingStudy())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IMAGING_STUDY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getIssued())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ISSUED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPerformer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERFORMER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getPresentedForm())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PRESENTED_FORM, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getRequest())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REQUEST, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getResult())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RESULT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getSpecimen())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SPECIMEN, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCategory())) {
            $a[self::FIELD_CATEGORY] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
        }
        if ([] !== ($vs = $this->getCodedDiagnosis())) {
            $a[self::FIELD_CODED_DIAGNOSIS] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CODED_DIAGNOSIS][] = $v;
            }
        }
        if (null !== ($v = $this->getConclusion())) {
            $a[self::FIELD_CONCLUSION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_CONCLUSION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getEffectiveDateTime())) {
            $a[self::FIELD_EFFECTIVE_DATE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_EFFECTIVE_DATE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            $a[self::FIELD_EFFECTIVE_PERIOD] = $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            $a[self::FIELD_ENCOUNTER] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v;
            }
        }
        if ([] !== ($vs = $this->getImage())) {
            $a[self::FIELD_IMAGE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IMAGE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getImagingStudy())) {
            $a[self::FIELD_IMAGING_STUDY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IMAGING_STUDY][] = $v;
            }
        }
        if (null !== ($v = $this->getIssued())) {
            $a[self::FIELD_ISSUED] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInstant::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInstant::FIELD_VALUE]);
                $a[self::FIELD_ISSUED_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPerformer())) {
            $a[self::FIELD_PERFORMER] = $v;
        }
        if ([] !== ($vs = $this->getPresentedForm())) {
            $a[self::FIELD_PRESENTED_FORM] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PRESENTED_FORM][] = $v;
            }
        }
        if ([] !== ($vs = $this->getRequest())) {
            $a[self::FIELD_REQUEST] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REQUEST][] = $v;
            }
        }
        if ([] !== ($vs = $this->getResult())) {
            $a[self::FIELD_RESULT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_RESULT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getSpecimen())) {
            $a[self::FIELD_SPECIMEN] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SPECIMEN][] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDiagnosticReportStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDiagnosticReportStatus::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}
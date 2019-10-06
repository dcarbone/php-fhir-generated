<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:03+0000
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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDiagnosticReportStatus;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * The findings and interpretation of diagnostic tests performed on patients,
 * groups of patients, devices, and locations, and/or specimens derived from these.
 * The report includes clinical context such as requesting and provider
 * information, and some mix of atomic results, images, textual and coded
 * interpretation, and formatted representation of diagnostic reports.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRDiagnosticReport
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource
 */
class FHIRDiagnosticReport extends FHIRResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT;

    const FIELD_CODED_DIAGNOSIS = 'codedDiagnosis';
    const FIELD_CONCLUSION = 'conclusion';
    const FIELD_CONCLUSION_EXT = '_conclusion';
    const FIELD_DIAGNOSTIC_DATE_TIME = 'diagnosticDateTime';
    const FIELD_DIAGNOSTIC_DATE_TIME_EXT = '_diagnosticDateTime';
    const FIELD_DIAGNOSTIC_PERIOD = 'diagnosticPeriod';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IMAGE = 'image';
    const FIELD_IMAGING_STUDY = 'imagingStudy';
    const FIELD_ISSUED = 'issued';
    const FIELD_ISSUED_EXT = '_issued';
    const FIELD_NAME = 'name';
    const FIELD_PERFORMER = 'performer';
    const FIELD_PRESENTED_FORM = 'presentedForm';
    const FIELD_REQUEST_DETAIL = 'requestDetail';
    const FIELD_RESULT = 'result';
    const FIELD_SERVICE_CATEGORY = 'serviceCategory';
    const FIELD_SPECIMEN = 'specimen';
    const FIELD_STATUS = 'status';
    const FIELD_SUBJECT = 'subject';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Codes for the conclusion.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    private $codedDiagnosis = [];
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Concise and clinically contextualized narrative interpretation of the diagnostic
     * report.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $conclusion = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The time or time-period the observed values are related to. This is usually
     * either the time of the procedure or of specimen collection(s), but very often
     * the source of the date/time is not known, only the date/time itself.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    private $diagnosticDateTime = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The time or time-period the observed values are related to. This is usually
     * either the time of the procedure or of specimen collection(s), but very often
     * the source of the date/time is not known, only the date/time itself.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    private $diagnosticPeriod = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The local ID assigned to the report by the order filler, usually by the
     * Information System of the diagnostic service provider.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier
     */
    private $identifier = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage[]
     */
    private $image = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * One or more links to full details of any imaging performed during the diagnostic
     * investigation. Typically, this is imaging performed by DICOM enabled modalities,
     * but this is not required. A fully enabled PACS viewer can use this information
     * to provide views of the source images.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    private $imagingStudy = [];
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date and/or time that this version of the report was released from the
     * source diagnostic service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    private $issued = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code or name that describes this diagnostic report.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    private $name = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The diagnostic service that is responsible for issuing the report.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    private $performer = null;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Rich text representation of the entire result as issued by the diagnostic
     * service. Multiple formats are allowed but they SHALL be semantically equivalent.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment[]
     */
    private $presentedForm = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Details concerning a test requested.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    private $requestDetail = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Observations that are part of this diagnostic report. Observations can be simple
     * name/value pairs (e.g. "atomic" results), or they can be grouping observations
     * that include references to other members of the group (e.g. "panels").
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    private $result = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The section of the diagnostic service that performs the examination e.g.
     * biochemistry, hematology, MRI.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    private $serviceCategory = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Details about the specimens on which this Disagnostic report is based.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    private $specimen = [];
    /**
     * The status of the diagnostic report as a whole
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of the diagnostic report as a whole.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDiagnosticReportStatus
     */
    private $status = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The subject of the report. Usually, but not always, this is a patient. However
     * diagnostic services also perform analyses on specimens collected from a variety
     * of other sources.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    private $subject = null;

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
        if (isset($data[self::FIELD_CODED_DIAGNOSIS])) {
            if (is_array($data[self::FIELD_CODED_DIAGNOSIS])) {
                foreach($data[self::FIELD_CODED_DIAGNOSIS] as $v) {
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
        if (isset($data[self::FIELD_CONCLUSION])) {
            $ext = (isset($data[self::FIELD_CONCLUSION_EXT]) && is_array($data[self::FIELD_CONCLUSION_EXT]))
                ? $data[self::FIELD_CONCLUSION_EXT]
                : null;
            if ($data[self::FIELD_CONCLUSION] instanceof FHIRString) {
                $this->setConclusion($data[self::FIELD_CONCLUSION]);
            } elseif ($ext && is_scalar($data[self::FIELD_CONCLUSION])) {
                $this->setConclusion(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_CONCLUSION]] + $ext));
            } else {
                $this->setConclusion(new FHIRString($data[self::FIELD_CONCLUSION]));
            }
        }
        if (isset($data[self::FIELD_DIAGNOSTIC_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_DIAGNOSTIC_DATE_TIME_EXT]) && is_array($data[self::FIELD_DIAGNOSTIC_DATE_TIME_EXT]))
                ? $data[self::FIELD_DIAGNOSTIC_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_DIAGNOSTIC_DATE_TIME] instanceof FHIRDateTime) {
                $this->setDiagnosticDateTime($data[self::FIELD_DIAGNOSTIC_DATE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_DIAGNOSTIC_DATE_TIME])) {
                $this->setDiagnosticDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_DIAGNOSTIC_DATE_TIME]] + $ext));
            } else {
                $this->setDiagnosticDateTime(new FHIRDateTime($data[self::FIELD_DIAGNOSTIC_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_DIAGNOSTIC_PERIOD])) {
            if ($data[self::FIELD_DIAGNOSTIC_PERIOD] instanceof FHIRPeriod) {
                $this->setDiagnosticPeriod($data[self::FIELD_DIAGNOSTIC_PERIOD]);
            } else {
                $this->setDiagnosticPeriod(new FHIRPeriod($data[self::FIELD_DIAGNOSTIC_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_IMAGE])) {
            if (is_array($data[self::FIELD_IMAGE])) {
                foreach($data[self::FIELD_IMAGE] as $v) {
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
                    if ($v instanceof FHIRResourceReference) {
                        $this->addImagingStudy($v);
                    } else {
                        $this->addImagingStudy(new FHIRResourceReference($v));
                    }
                }
            } else if ($data[self::FIELD_IMAGING_STUDY] instanceof FHIRResourceReference) {
                $this->addImagingStudy($data[self::FIELD_IMAGING_STUDY]);
            } else {
                $this->addImagingStudy(new FHIRResourceReference($data[self::FIELD_IMAGING_STUDY]));
            }
        }
        if (isset($data[self::FIELD_ISSUED])) {
            $ext = (isset($data[self::FIELD_ISSUED_EXT]) && is_array($data[self::FIELD_ISSUED_EXT]))
                ? $data[self::FIELD_ISSUED_EXT]
                : null;
            if ($data[self::FIELD_ISSUED] instanceof FHIRDateTime) {
                $this->setIssued($data[self::FIELD_ISSUED]);
            } elseif ($ext && is_scalar($data[self::FIELD_ISSUED])) {
                $this->setIssued(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_ISSUED]] + $ext));
            } else {
                $this->setIssued(new FHIRDateTime($data[self::FIELD_ISSUED]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            if ($data[self::FIELD_NAME] instanceof FHIRCodeableConcept) {
                $this->setName($data[self::FIELD_NAME]);
            } else {
                $this->setName(new FHIRCodeableConcept($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_PERFORMER])) {
            if ($data[self::FIELD_PERFORMER] instanceof FHIRResourceReference) {
                $this->setPerformer($data[self::FIELD_PERFORMER]);
            } else {
                $this->setPerformer(new FHIRResourceReference($data[self::FIELD_PERFORMER]));
            }
        }
        if (isset($data[self::FIELD_PRESENTED_FORM])) {
            if (is_array($data[self::FIELD_PRESENTED_FORM])) {
                foreach($data[self::FIELD_PRESENTED_FORM] as $v) {
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
        if (isset($data[self::FIELD_REQUEST_DETAIL])) {
            if (is_array($data[self::FIELD_REQUEST_DETAIL])) {
                foreach($data[self::FIELD_REQUEST_DETAIL] as $v) {
                    if ($v instanceof FHIRResourceReference) {
                        $this->addRequestDetail($v);
                    } else {
                        $this->addRequestDetail(new FHIRResourceReference($v));
                    }
                }
            } else if ($data[self::FIELD_REQUEST_DETAIL] instanceof FHIRResourceReference) {
                $this->addRequestDetail($data[self::FIELD_REQUEST_DETAIL]);
            } else {
                $this->addRequestDetail(new FHIRResourceReference($data[self::FIELD_REQUEST_DETAIL]));
            }
        }
        if (isset($data[self::FIELD_RESULT])) {
            if (is_array($data[self::FIELD_RESULT])) {
                foreach($data[self::FIELD_RESULT] as $v) {
                    if ($v instanceof FHIRResourceReference) {
                        $this->addResult($v);
                    } else {
                        $this->addResult(new FHIRResourceReference($v));
                    }
                }
            } else if ($data[self::FIELD_RESULT] instanceof FHIRResourceReference) {
                $this->addResult($data[self::FIELD_RESULT]);
            } else {
                $this->addResult(new FHIRResourceReference($data[self::FIELD_RESULT]));
            }
        }
        if (isset($data[self::FIELD_SERVICE_CATEGORY])) {
            if ($data[self::FIELD_SERVICE_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->setServiceCategory($data[self::FIELD_SERVICE_CATEGORY]);
            } else {
                $this->setServiceCategory(new FHIRCodeableConcept($data[self::FIELD_SERVICE_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_SPECIMEN])) {
            if (is_array($data[self::FIELD_SPECIMEN])) {
                foreach($data[self::FIELD_SPECIMEN] as $v) {
                    if ($v instanceof FHIRResourceReference) {
                        $this->addSpecimen($v);
                    } else {
                        $this->addSpecimen(new FHIRResourceReference($v));
                    }
                }
            } else if ($data[self::FIELD_SPECIMEN] instanceof FHIRResourceReference) {
                $this->addSpecimen($data[self::FIELD_SPECIMEN]);
            } else {
                $this->addSpecimen(new FHIRResourceReference($data[self::FIELD_SPECIMEN]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRDiagnosticReportStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRDiagnosticReportStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRResourceReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRResourceReference($data[self::FIELD_SUBJECT]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Codes for the conclusion.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCodedDiagnosis()
    {
        return $this->codedDiagnosis;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Codes for the conclusion.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $codedDiagnosis
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Codes for the conclusion.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[] $codedDiagnosis
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Concise and clinically contextualized narrative interpretation of the diagnostic
     * report.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getConclusion()
    {
        return $this->conclusion;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Concise and clinically contextualized narrative interpretation of the diagnostic
     * report.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $conclusion
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
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
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The time or time-period the observed values are related to. This is usually
     * either the time of the procedure or of specimen collection(s), but very often
     * the source of the date/time is not known, only the date/time itself.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    public function getDiagnosticDateTime()
    {
        return $this->diagnosticDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The time or time-period the observed values are related to. This is usually
     * either the time of the procedure or of specimen collection(s), but very often
     * the source of the date/time is not known, only the date/time itself.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $diagnosticDateTime
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
     */
    public function setDiagnosticDateTime($diagnosticDateTime = null)
    {
        if (null === $diagnosticDateTime) {
            $this->diagnosticDateTime = null;
            return $this;
        }
        if ($diagnosticDateTime instanceof FHIRDateTime) {
            $this->diagnosticDateTime = $diagnosticDateTime;
            return $this;
        }
        $this->diagnosticDateTime = new FHIRDateTime($diagnosticDateTime);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The time or time-period the observed values are related to. This is usually
     * either the time of the procedure or of specimen collection(s), but very often
     * the source of the date/time is not known, only the date/time itself.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    public function getDiagnosticPeriod()
    {
        return $this->diagnosticPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The time or time-period the observed values are related to. This is usually
     * either the time of the procedure or of specimen collection(s), but very often
     * the source of the date/time is not known, only the date/time itself.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod $diagnosticPeriod
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
     */
    public function setDiagnosticPeriod(FHIRPeriod $diagnosticPeriod = null)
    {
        $this->diagnosticPeriod = $diagnosticPeriod;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The local ID assigned to the report by the order filler, usually by the
     * Information System of the diagnostic service provider.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The local ID assigned to the report by the order filler, usually by the
     * Information System of the diagnostic service provider.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier = $identifier;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage[]
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
     * interpretation, and formatted representation of diagnostic reports.
     *
     * A list of key images associated with this report. The images are generally
     * created during the diagnostic process, and may be directly of the patient, or of
     * treated specimens (i.e. slides of interest).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage $image
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
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
     * interpretation, and formatted representation of diagnostic reports.
     *
     * A list of key images associated with this report. The images are generally
     * created during the diagnostic process, and may be directly of the patient, or of
     * treated specimens (i.e. slides of interest).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage[] $image
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * One or more links to full details of any imaging performed during the diagnostic
     * investigation. Typically, this is imaging performed by DICOM enabled modalities,
     * but this is not required. A fully enabled PACS viewer can use this information
     * to provide views of the source images.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    public function getImagingStudy()
    {
        return $this->imagingStudy;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * One or more links to full details of any imaging performed during the diagnostic
     * investigation. Typically, this is imaging performed by DICOM enabled modalities,
     * but this is not required. A fully enabled PACS viewer can use this information
     * to provide views of the source images.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $imagingStudy
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
     */
    public function addImagingStudy(FHIRResourceReference $imagingStudy = null)
    {
        $this->imagingStudy[] = $imagingStudy;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * One or more links to full details of any imaging performed during the diagnostic
     * investigation. Typically, this is imaging performed by DICOM enabled modalities,
     * but this is not required. A fully enabled PACS viewer can use this information
     * to provide views of the source images.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[] $imagingStudy
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
     */
    public function setImagingStudy(array $imagingStudy = [])
    {
        $this->imagingStudy = [];
        if ([] === $imagingStudy) {
            return $this;
        }
        foreach($imagingStudy as $v) {
            if ($v instanceof FHIRResourceReference) {
                $this->addImagingStudy($v);
            } else {
                $this->addImagingStudy(new FHIRResourceReference($v));
            }
        }
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date and/or time that this version of the report was released from the
     * source diagnostic service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date and/or time that this version of the report was released from the
     * source diagnostic service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $issued
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
     */
    public function setIssued($issued = null)
    {
        if (null === $issued) {
            $this->issued = null;
            return $this;
        }
        if ($issued instanceof FHIRDateTime) {
            $this->issued = $issued;
            return $this;
        }
        $this->issued = new FHIRDateTime($issued);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code or name that describes this diagnostic report.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code or name that describes this diagnostic report.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $name
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
     */
    public function setName(FHIRCodeableConcept $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The diagnostic service that is responsible for issuing the report.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The diagnostic service that is responsible for issuing the report.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $performer
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
     */
    public function setPerformer(FHIRResourceReference $performer = null)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Rich text representation of the entire result as issued by the diagnostic
     * service. Multiple formats are allowed but they SHALL be semantically equivalent.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment[]
     */
    public function getPresentedForm()
    {
        return $this->presentedForm;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Rich text representation of the entire result as issued by the diagnostic
     * service. Multiple formats are allowed but they SHALL be semantically equivalent.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment $presentedForm
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
     */
    public function addPresentedForm(FHIRAttachment $presentedForm = null)
    {
        $this->presentedForm[] = $presentedForm;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Rich text representation of the entire result as issued by the diagnostic
     * service. Multiple formats are allowed but they SHALL be semantically equivalent.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment[] $presentedForm
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Details concerning a test requested.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    public function getRequestDetail()
    {
        return $this->requestDetail;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Details concerning a test requested.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $requestDetail
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
     */
    public function addRequestDetail(FHIRResourceReference $requestDetail = null)
    {
        $this->requestDetail[] = $requestDetail;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Details concerning a test requested.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[] $requestDetail
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
     */
    public function setRequestDetail(array $requestDetail = [])
    {
        $this->requestDetail = [];
        if ([] === $requestDetail) {
            return $this;
        }
        foreach($requestDetail as $v) {
            if ($v instanceof FHIRResourceReference) {
                $this->addRequestDetail($v);
            } else {
                $this->addRequestDetail(new FHIRResourceReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Observations that are part of this diagnostic report. Observations can be simple
     * name/value pairs (e.g. "atomic" results), or they can be grouping observations
     * that include references to other members of the group (e.g. "panels").
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Observations that are part of this diagnostic report. Observations can be simple
     * name/value pairs (e.g. "atomic" results), or they can be grouping observations
     * that include references to other members of the group (e.g. "panels").
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $result
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
     */
    public function addResult(FHIRResourceReference $result = null)
    {
        $this->result[] = $result;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Observations that are part of this diagnostic report. Observations can be simple
     * name/value pairs (e.g. "atomic" results), or they can be grouping observations
     * that include references to other members of the group (e.g. "panels").
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[] $result
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
     */
    public function setResult(array $result = [])
    {
        $this->result = [];
        if ([] === $result) {
            return $this;
        }
        foreach($result as $v) {
            if ($v instanceof FHIRResourceReference) {
                $this->addResult($v);
            } else {
                $this->addResult(new FHIRResourceReference($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The section of the diagnostic service that performs the examination e.g.
     * biochemistry, hematology, MRI.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getServiceCategory()
    {
        return $this->serviceCategory;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The section of the diagnostic service that performs the examination e.g.
     * biochemistry, hematology, MRI.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $serviceCategory
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
     */
    public function setServiceCategory(FHIRCodeableConcept $serviceCategory = null)
    {
        $this->serviceCategory = $serviceCategory;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Details about the specimens on which this Disagnostic report is based.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Details about the specimens on which this Disagnostic report is based.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $specimen
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
     */
    public function addSpecimen(FHIRResourceReference $specimen = null)
    {
        $this->specimen[] = $specimen;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Details about the specimens on which this Disagnostic report is based.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[] $specimen
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
     */
    public function setSpecimen(array $specimen = [])
    {
        $this->specimen = [];
        if ([] === $specimen) {
            return $this;
        }
        foreach($specimen as $v) {
            if ($v instanceof FHIRResourceReference) {
                $this->addSpecimen($v);
            } else {
                $this->addSpecimen(new FHIRResourceReference($v));
            }
        }
        return $this;
    }

    /**
     * The status of the diagnostic report as a whole
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of the diagnostic report as a whole.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDiagnosticReportStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the diagnostic report as a whole
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of the diagnostic report as a whole.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDiagnosticReportStatus $status
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
     */
    public function setStatus(FHIRDiagnosticReportStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The subject of the report. Usually, but not always, this is a patient. However
     * diagnostic services also perform analyses on specimens collected from a variety
     * of other sources.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The subject of the report. Usually, but not always, this is a patient. However
     * diagnostic services also perform analyses on specimens collected from a variety
     * of other sources.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $subject
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
     */
    public function setSubject(FHIRResourceReference $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport $type
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRDiagnosticReport::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDiagnosticReport::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRResource::xmlUnserialize($sxe, new FHIRDiagnosticReport);
        } elseif (!is_object($type) || !($type instanceof FHIRDiagnosticReport)) {
            throw new \RuntimeException(sprintf(
                'FHIRDiagnosticReport::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->codedDiagnosis)) {
            foreach($children->codedDiagnosis as $child) {
                $type->addCodedDiagnosis(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($attributes->conclusion)) {
            $type->setConclusion((string)$attributes->conclusion);
        }
        if (isset($children->conclusion)) {
            $type->setConclusion(FHIRString::xmlUnserialize($children->conclusion));
        }
        if (isset($attributes->diagnosticDateTime)) {
            $type->setDiagnosticDateTime((string)$attributes->diagnosticDateTime);
        }
        if (isset($children->diagnosticDateTime)) {
            $type->setDiagnosticDateTime(FHIRDateTime::xmlUnserialize($children->diagnosticDateTime));
        }
        if (isset($children->diagnosticPeriod)) {
            $type->setDiagnosticPeriod(FHIRPeriod::xmlUnserialize($children->diagnosticPeriod));
        }
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRIdentifier::xmlUnserialize($children->identifier));
        }
        if (isset($children->image)) {
            foreach($children->image as $child) {
                $type->addImage(FHIRDiagnosticReportImage::xmlUnserialize($child));
            }
        }
        if (isset($children->imagingStudy)) {
            foreach($children->imagingStudy as $child) {
                $type->addImagingStudy(FHIRResourceReference::xmlUnserialize($child));
            }
        }
        if (isset($attributes->issued)) {
            $type->setIssued((string)$attributes->issued);
        }
        if (isset($children->issued)) {
            $type->setIssued(FHIRDateTime::xmlUnserialize($children->issued));
        }
        if (isset($children->name)) {
            $type->setName(FHIRCodeableConcept::xmlUnserialize($children->name));
        }
        if (isset($children->performer)) {
            $type->setPerformer(FHIRResourceReference::xmlUnserialize($children->performer));
        }
        if (isset($children->presentedForm)) {
            foreach($children->presentedForm as $child) {
                $type->addPresentedForm(FHIRAttachment::xmlUnserialize($child));
            }
        }
        if (isset($children->requestDetail)) {
            foreach($children->requestDetail as $child) {
                $type->addRequestDetail(FHIRResourceReference::xmlUnserialize($child));
            }
        }
        if (isset($children->result)) {
            foreach($children->result as $child) {
                $type->addResult(FHIRResourceReference::xmlUnserialize($child));
            }
        }
        if (isset($children->serviceCategory)) {
            $type->setServiceCategory(FHIRCodeableConcept::xmlUnserialize($children->serviceCategory));
        }
        if (isset($children->specimen)) {
            foreach($children->specimen as $child) {
                $type->addSpecimen(FHIRResourceReference::xmlUnserialize($child));
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRDiagnosticReportStatus::xmlUnserialize($children->status));
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRResourceReference::xmlUnserialize($children->subject));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<DiagnosticReport xmlns="http://hl7.org/fhir"></DiagnosticReport>');
        }
        parent::xmlSerialize($sxe);

        if ([] !== ($vs = $this->getCodedDiagnosis())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CODED_DIAGNOSIS));
            }
        }
        if (null !== ($v = $this->getConclusion())) {
            $sxe->addAttribute(self::FIELD_CONCLUSION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONCLUSION));
            }
        }
        if (null !== ($v = $this->getDiagnosticDateTime())) {
            $sxe->addAttribute(self::FIELD_DIAGNOSTIC_DATE_TIME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DIAGNOSTIC_DATE_TIME));
            }
        }

        if (null !== ($v = $this->getDiagnosticPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DIAGNOSTIC_PERIOD));
        }

        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
        }

        if ([] !== ($vs = $this->getImage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IMAGE));
            }
        }

        if ([] !== ($vs = $this->getImagingStudy())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IMAGING_STUDY));
            }
        }
        if (null !== ($v = $this->getIssued())) {
            $sxe->addAttribute(self::FIELD_ISSUED, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_ISSUED));
            }
        }

        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME));
        }

        if (null !== ($v = $this->getPerformer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERFORMER));
        }

        if ([] !== ($vs = $this->getPresentedForm())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PRESENTED_FORM));
            }
        }

        if ([] !== ($vs = $this->getRequestDetail())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REQUEST_DETAIL));
            }
        }

        if ([] !== ($vs = $this->getResult())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RESULT));
            }
        }

        if (null !== ($v = $this->getServiceCategory())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SERVICE_CATEGORY));
        }

        if ([] !== ($vs = $this->getSpecimen())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SPECIMEN));
            }
        }

        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS));
        }

        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getCodedDiagnosis())) {
            $a[self::FIELD_CODED_DIAGNOSIS] = $vs;
        }
        if (null !== ($v = $this->getConclusion())) {
            $a[self::FIELD_CONCLUSION] = (string)$v;
            $a[self::FIELD_CONCLUSION_EXT] = $v;
        }
        if (null !== ($v = $this->getDiagnosticDateTime())) {
            $a[self::FIELD_DIAGNOSTIC_DATE_TIME] = (string)$v;
            $a[self::FIELD_DIAGNOSTIC_DATE_TIME_EXT] = $v;
        }
        if (null !== ($v = $this->getDiagnosticPeriod())) {
            $a[self::FIELD_DIAGNOSTIC_PERIOD] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v;
        }
        if ([] !== ($vs = $this->getImage())) {
            $a[self::FIELD_IMAGE] = $vs;
        }
        if ([] !== ($vs = $this->getImagingStudy())) {
            $a[self::FIELD_IMAGING_STUDY] = $vs;
        }
        if (null !== ($v = $this->getIssued())) {
            $a[self::FIELD_ISSUED] = (string)$v;
            $a[self::FIELD_ISSUED_EXT] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v;
        }
        if (null !== ($v = $this->getPerformer())) {
            $a[self::FIELD_PERFORMER] = $v;
        }
        if ([] !== ($vs = $this->getPresentedForm())) {
            $a[self::FIELD_PRESENTED_FORM] = $vs;
        }
        if ([] !== ($vs = $this->getRequestDetail())) {
            $a[self::FIELD_REQUEST_DETAIL] = $vs;
        }
        if ([] !== ($vs = $this->getResult())) {
            $a[self::FIELD_RESULT] = $vs;
        }
        if (null !== ($v = $this->getServiceCategory())) {
            $a[self::FIELD_SERVICE_CATEGORY] = $v;
        }
        if ([] !== ($vs = $this->getSpecimen())) {
            $a[self::FIELD_SPECIMEN] = $vs;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}
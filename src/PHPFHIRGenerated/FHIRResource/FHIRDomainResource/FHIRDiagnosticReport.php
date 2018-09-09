<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRAttachment;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportMedia;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRDiagnosticReportStatus;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRInstant;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * The findings and interpretation of diagnostic  tests performed on patients, groups of patients, devices, and locations, and/or specimens derived from these. The report includes clinical context such as requesting and provider information, and some mix of atomic results, images, textual and coded interpretations, and formatted representation of diagnostic reports.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRDiagnosticReport
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRDiagnosticReport extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'DiagnosticReport';

    /**
     * Details concerning a service requested.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $basedOn = null;

    /**
     * A code that classifies the clinical discipline, department or diagnostic service that created the report (e.g. cardiology, biochemistry, hematology, MRI). This is used for searching, sorting and display purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * A code or name that describes this diagnostic report.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * Concise and clinically contextualized summary conclusion (interpretation/impression) of the diagnostic report.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $conclusion = null;

    /**
     * One or more codes that represent the summary conclusion (interpretation/impression) of the diagnostic report.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $conclusionCode = null;

    /**
     * The healthcare event  (e.g. a patient and healthcare provider interaction) which this DiagnosticReport per is about.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * The time or time-period the observed values are related to. When the subject of the report is a patient, this is usually either the time of the procedure or of specimen collection(s), but very often the source of the date/time is not known, only the date/time itself.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $effectiveDateTime = null;

    /**
     * The time or time-period the observed values are related to. When the subject of the report is a patient, this is usually either the time of the procedure or of specimen collection(s), but very often the source of the date/time is not known, only the date/time itself.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $effectivePeriod = null;

    /**
     * Identifiers assigned to this report by the performer or other systems.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * One or more links to full details of any imaging performed during the diagnostic investigation. Typically, this is imaging performed by DICOM enabled modalities, but this is not required. A fully enabled PACS viewer can use this information to provide views of the source images.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $imagingStudy = null;

    /**
     * The date and time that this version of the report was made available to providers, typically after the report was reviewed and verified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $issued = null;

    /**
     * A list of key images associated with this report. The images are generally created during the diagnostic process, and may be directly of the patient, or of treated specimens (i.e. slides of interest).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportMedia
     */
    public $media = null;

    /**
     * The diagnostic service that is responsible for issuing the report.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $performer = null;

    /**
     * Rich text representation of the entire result as issued by the diagnostic service. Multiple formats are allowed but they SHALL be semantically equivalent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $presentedForm = null;

    /**
     * [Observations](observation.html)  that are part of this diagnostic report.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $result = null;

    /**
     * The practitioner or organization that is responsible for the report's conclusions and interpretations.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $resultsInterpreter = null;

    /**
     * Details about the specimens on which this diagnostic report is based.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $specimen = null;

    /**
     * The status of the diagnostic report.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDiagnosticReportStatus
     */
    public $status = null;

    /**
     * The subject of the report. Usually, but not always, this is a patient. However diagnostic services also perform analyses on specimens collected from a variety of other sources.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * FHIRDiagnosticReport Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['basedOn'])) {
                $this->setBasedOn($data['basedOn']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['conclusion'])) {
                $this->setConclusion($data['conclusion']);
            }
            if (isset($data['conclusionCode'])) {
                $this->setConclusionCode($data['conclusionCode']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['effectiveDateTime'])) {
                $this->setEffectiveDateTime($data['effectiveDateTime']);
            }
            if (isset($data['effectivePeriod'])) {
                $this->setEffectivePeriod($data['effectivePeriod']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['imagingStudy'])) {
                $this->setImagingStudy($data['imagingStudy']);
            }
            if (isset($data['issued'])) {
                $this->setIssued($data['issued']);
            }
            if (isset($data['media'])) {
                $this->setMedia($data['media']);
            }
            if (isset($data['performer'])) {
                $this->setPerformer($data['performer']);
            }
            if (isset($data['presentedForm'])) {
                $this->setPresentedForm($data['presentedForm']);
            }
            if (isset($data['result'])) {
                $this->setResult($data['result']);
            }
            if (isset($data['resultsInterpreter'])) {
                $this->setResultsInterpreter($data['resultsInterpreter']);
            }
            if (isset($data['specimen'])) {
                $this->setSpecimen($data['specimen']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Details concerning a service requested.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setBasedOn(FHIRReference $basedOn = null)
    {
        if (null === $basedOn) {
            return $this; 
        }
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * Details concerning a service requested.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }


    /**
     * A code that classifies the clinical discipline, department or diagnostic service that created the report (e.g. cardiology, biochemistry, hematology, MRI). This is used for searching, sorting and display purposes.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCategory(FHIRCodeableConcept $category = null)
    {
        if (null === $category) {
            return $this; 
        }
        $this->category = $category;
        return $this;
    }

    /**
     * A code that classifies the clinical discipline, department or diagnostic service that created the report (e.g. cardiology, biochemistry, hematology, MRI). This is used for searching, sorting and display purposes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * A code or name that describes this diagnostic report.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        if (null === $code) {
            return $this; 
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A code or name that describes this diagnostic report.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * Concise and clinically contextualized summary conclusion (interpretation/impression) of the diagnostic report.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setConclusion($conclusion)
    {
        if (null === $conclusion) {
            return $this; 
        }
        if (is_scalar($conclusion)) {
            $conclusion = new FHIRString($conclusion);
        }
        if (!($conclusion instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDiagnosticReport::setConclusion - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($conclusion)
            ));
        }
        $this->conclusion = $conclusion;
        return $this;
    }

    /**
     * Concise and clinically contextualized summary conclusion (interpretation/impression) of the diagnostic report.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getConclusion()
    {
        return $this->conclusion;
    }


    /**
     * One or more codes that represent the summary conclusion (interpretation/impression) of the diagnostic report.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setConclusionCode(FHIRCodeableConcept $conclusionCode = null)
    {
        if (null === $conclusionCode) {
            return $this; 
        }
        $this->conclusionCode = $conclusionCode;
        return $this;
    }

    /**
     * One or more codes that represent the summary conclusion (interpretation/impression) of the diagnostic report.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getConclusionCode()
    {
        return $this->conclusionCode;
    }


    /**
     * The healthcare event  (e.g. a patient and healthcare provider interaction) which this DiagnosticReport per is about.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setContext(FHIRReference $context = null)
    {
        if (null === $context) {
            return $this; 
        }
        $this->context = $context;
        return $this;
    }

    /**
     * The healthcare event  (e.g. a patient and healthcare provider interaction) which this DiagnosticReport per is about.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }


    /**
     * The time or time-period the observed values are related to. When the subject of the report is a patient, this is usually either the time of the procedure or of specimen collection(s), but very often the source of the date/time is not known, only the date/time itself.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setEffectiveDateTime($effectiveDateTime)
    {
        if (null === $effectiveDateTime) {
            return $this; 
        }
        if (is_scalar($effectiveDateTime)) {
            $effectiveDateTime = new FHIRDateTime($effectiveDateTime);
        }
        if (!($effectiveDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDiagnosticReport::setEffectiveDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($effectiveDateTime)
            ));
        }
        $this->effectiveDateTime = $effectiveDateTime;
        return $this;
    }

    /**
     * The time or time-period the observed values are related to. When the subject of the report is a patient, this is usually either the time of the procedure or of specimen collection(s), but very often the source of the date/time is not known, only the date/time itself.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getEffectiveDateTime()
    {
        return $this->effectiveDateTime;
    }


    /**
     * The time or time-period the observed values are related to. When the subject of the report is a patient, this is usually either the time of the procedure or of specimen collection(s), but very often the source of the date/time is not known, only the date/time itself.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setEffectivePeriod(FHIRPeriod $effectivePeriod = null)
    {
        if (null === $effectivePeriod) {
            return $this; 
        }
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * The time or time-period the observed values are related to. When the subject of the report is a patient, this is usually either the time of the procedure or of specimen collection(s), but very often the source of the date/time is not known, only the date/time itself.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }


    /**
     * Identifiers assigned to this report by the performer or other systems.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Identifiers assigned to this report by the performer or other systems.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * One or more links to full details of any imaging performed during the diagnostic investigation. Typically, this is imaging performed by DICOM enabled modalities, but this is not required. A fully enabled PACS viewer can use this information to provide views of the source images.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setImagingStudy(FHIRReference $imagingStudy = null)
    {
        if (null === $imagingStudy) {
            return $this; 
        }
        $this->imagingStudy = $imagingStudy;
        return $this;
    }

    /**
     * One or more links to full details of any imaging performed during the diagnostic investigation. Typically, this is imaging performed by DICOM enabled modalities, but this is not required. A fully enabled PACS viewer can use this information to provide views of the source images.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getImagingStudy()
    {
        return $this->imagingStudy;
    }


    /**
     * The date and time that this version of the report was made available to providers, typically after the report was reviewed and verified.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     * @return $this
     */
    public function setIssued($issued)
    {
        if (null === $issued) {
            return $this; 
        }
        if (is_scalar($issued)) {
            $issued = new FHIRInstant($issued);
        }
        if (!($issued instanceof FHIRInstant)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDiagnosticReport::setIssued - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($issued)
            ));
        }
        $this->issued = $issued;
        return $this;
    }

    /**
     * The date and time that this version of the report was made available to providers, typically after the report was reviewed and verified.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getIssued()
    {
        return $this->issued;
    }


    /**
     * A list of key images associated with this report. The images are generally created during the diagnostic process, and may be directly of the patient, or of treated specimens (i.e. slides of interest).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportMedia
     * @return $this
     */
    public function setMedia(FHIRDiagnosticReportMedia $media = null)
    {
        if (null === $media) {
            return $this; 
        }
        $this->media = $media;
        return $this;
    }

    /**
     * A list of key images associated with this report. The images are generally created during the diagnostic process, and may be directly of the patient, or of treated specimens (i.e. slides of interest).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportMedia
     */
    public function getMedia()
    {
        return $this->media;
    }


    /**
     * The diagnostic service that is responsible for issuing the report.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPerformer(FHIRReference $performer = null)
    {
        if (null === $performer) {
            return $this; 
        }
        $this->performer = $performer;
        return $this;
    }

    /**
     * The diagnostic service that is responsible for issuing the report.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPerformer()
    {
        return $this->performer;
    }


    /**
     * Rich text representation of the entire result as issued by the diagnostic service. Multiple formats are allowed but they SHALL be semantically equivalent.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     * @return $this
     */
    public function setPresentedForm(FHIRAttachment $presentedForm = null)
    {
        if (null === $presentedForm) {
            return $this; 
        }
        $this->presentedForm = $presentedForm;
        return $this;
    }

    /**
     * Rich text representation of the entire result as issued by the diagnostic service. Multiple formats are allowed but they SHALL be semantically equivalent.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getPresentedForm()
    {
        return $this->presentedForm;
    }


    /**
     * [Observations](observation.html)  that are part of this diagnostic report.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setResult(FHIRReference $result = null)
    {
        if (null === $result) {
            return $this; 
        }
        $this->result = $result;
        return $this;
    }

    /**
     * [Observations](observation.html)  that are part of this diagnostic report.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getResult()
    {
        return $this->result;
    }


    /**
     * The practitioner or organization that is responsible for the report's conclusions and interpretations.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setResultsInterpreter(FHIRReference $resultsInterpreter = null)
    {
        if (null === $resultsInterpreter) {
            return $this; 
        }
        $this->resultsInterpreter = $resultsInterpreter;
        return $this;
    }

    /**
     * The practitioner or organization that is responsible for the report's conclusions and interpretations.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getResultsInterpreter()
    {
        return $this->resultsInterpreter;
    }


    /**
     * Details about the specimens on which this diagnostic report is based.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSpecimen(FHIRReference $specimen = null)
    {
        if (null === $specimen) {
            return $this; 
        }
        $this->specimen = $specimen;
        return $this;
    }

    /**
     * Details about the specimens on which this diagnostic report is based.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }


    /**
     * The status of the diagnostic report.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDiagnosticReportStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRDiagnosticReportStatus($status);
        }
        if (!($status instanceof FHIRDiagnosticReportStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDiagnosticReport::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDiagnosticReportStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The status of the diagnostic report.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDiagnosticReportStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * The subject of the report. Usually, but not always, this is a patient. However diagnostic services also perform analyses on specimens collected from a variety of other sources.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSubject(FHIRReference $subject = null)
    {
        if (null === $subject) {
            return $this; 
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * The subject of the report. Usually, but not always, this is a patient. However diagnostic services also perform analyses on specimens collected from a variety of other sources.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getBasedOn())) {
            $a['basedOn'] = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $a['category'] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getConclusion())) {
            $a['conclusion'] = $v;
        }
        if (null !== ($v = $this->getConclusionCode())) {
            $a['conclusionCode'] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (null !== ($v = $this->getEffectiveDateTime())) {
            $a['effectiveDateTime'] = $v;
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            $a['effectivePeriod'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getImagingStudy())) {
            $a['imagingStudy'] = $v;
        }
        if (null !== ($v = $this->getIssued())) {
            $a['issued'] = $v;
        }
        if (null !== ($v = $this->getMedia())) {
            $a['media'] = $v;
        }
        if (null !== ($v = $this->getPerformer())) {
            $a['performer'] = $v;
        }
        if (null !== ($v = $this->getPresentedForm())) {
            $a['presentedForm'] = $v;
        }
        if (null !== ($v = $this->getResult())) {
            $a['result'] = $v;
        }
        if (null !== ($v = $this->getResultsInterpreter())) {
            $a['resultsInterpreter'] = $v;
        }
        if (null !== ($v = $this->getSpecimen())) {
            $a['specimen'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<DiagnosticReport xmlns="http://hl7.org/fhir"></DiagnosticReport>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}
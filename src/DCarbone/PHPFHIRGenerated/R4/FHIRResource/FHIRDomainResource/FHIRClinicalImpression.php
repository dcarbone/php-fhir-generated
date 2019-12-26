<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRClinicalImpressionStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A record of a clinical assessment performed to determine what problem(s) may
 * affect the patient and before planning the treatments or management strategies
 * that are best to manage a patient's condition. Assessments are often 1:1 with a
 * clinical consultation / encounter, but this varies greatly depending on the
 * clinical workflow. This resource is called "ClinicalImpression" rather than
 * "ClinicalAssessment" to avoid confusion with the recording of assessment tools
 * such as Apgar score.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRClinicalImpression
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRClinicalImpression extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION;
    const FIELD_ASSESSOR = 'assessor';
    const FIELD_CODE = 'code';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_EFFECTIVE_DATE_TIME = 'effectiveDateTime';
    const FIELD_EFFECTIVE_DATE_TIME_EXT = '_effectiveDateTime';
    const FIELD_EFFECTIVE_PERIOD = 'effectivePeriod';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_FINDING = 'finding';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_INVESTIGATION = 'investigation';
    const FIELD_NOTE = 'note';
    const FIELD_PREVIOUS = 'previous';
    const FIELD_PROBLEM = 'problem';
    const FIELD_PROGNOSIS_CODEABLE_CONCEPT = 'prognosisCodeableConcept';
    const FIELD_PROGNOSIS_REFERENCE = 'prognosisReference';
    const FIELD_PROTOCOL = 'protocol';
    const FIELD_PROTOCOL_EXT = '_protocol';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_STATUS_REASON = 'statusReason';
    const FIELD_SUBJECT = 'subject';
    const FIELD_SUMMARY = 'summary';
    const FIELD_SUMMARY_EXT = '_summary';
    const FIELD_SUPPORTING_INFO = 'supportingInfo';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clinician performing the assessment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $assessor = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Categorizes the type of clinical assessment performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $code = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates when the documentation of the assessment was complete.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $date = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A summary of the context and/or cause of the assessment - why / where it was
     * performed, and what patient events/status prompted it.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $description = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The point in time or period over which the subject was assessed. (choose any one
     * of effective*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $effectiveDateTime = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The point in time or period over which the subject was assessed. (choose any one
     * of effective*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    protected $effectivePeriod = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Encounter during which this ClinicalImpression was created or to which the
     * creation of this record is tightly associated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $encounter = null;

    /**
     * A record of a clinical assessment performed to determine what problem(s) may
     * affect the patient and before planning the treatments or management strategies
     * that are best to manage a patient's condition. Assessments are often 1:1 with a
     * clinical consultation / encounter, but this varies greatly depending on the
     * clinical workflow. This resource is called "ClinicalImpression" rather than
     * "ClinicalAssessment" to avoid confusion with the recording of assessment tools
     * such as Apgar score.
     *
     * Specific findings or diagnoses that were considered likely or relevant to
     * ongoing treatment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding[]
     */
    protected $finding = [];

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this clinical impression by the performer or
     * other systems which remain constant as the resource is updated and propagates
     * from server to server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A record of a clinical assessment performed to determine what problem(s) may
     * affect the patient and before planning the treatments or management strategies
     * that are best to manage a patient's condition. Assessments are often 1:1 with a
     * clinical consultation / encounter, but this varies greatly depending on the
     * clinical workflow. This resource is called "ClinicalImpression" rather than
     * "ClinicalAssessment" to avoid confusion with the recording of assessment tools
     * such as Apgar score.
     *
     * One or more sets of investigations (signs, symptoms, etc.). The actual grouping
     * of investigations varies greatly depending on the type and context of the
     * assessment. These investigations may include data generated during the
     * assessment process, or data previously generated and recorded that is pertinent
     * to the outcomes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigation[]
     */
    protected $investigation = [];

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Commentary about the impression, typically recorded after the impression itself
     * was made, though supplemental notes by the original author could also appear.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    protected $note = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the last assessment that was conducted on this patient.
     * Assessments are often/usually ongoing in nature; a care provider (practitioner
     * or team) will make new assessments on an ongoing basis as new data arises or the
     * patient's conditions changes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $previous = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of the relevant problems/conditions for a patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $problem = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimate of likely outcome.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $prognosisCodeableConcept = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * RiskAssessment expressing likely outcome.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $prognosisReference = [];

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Reference to a specific published clinical protocol that was followed during
     * this assessment, and/or that provides evidence in support of the diagnosis.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri[]
     */
    protected $protocol = [];

    /**
     * The workflow state of a clinical impression.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the workflow status of the assessment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRClinicalImpressionStatus
     */
    protected $status = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Captures the reason for the current state of the ClinicalImpression.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $statusReason = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient or group of individuals assessed as part of this record.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $subject = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A text summary of the investigations and the diagnosis.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $summary = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information supporting the clinical impression.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $supportingInfo = [];

    /**
     * Validation map for fields in type ClinicalImpression
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRClinicalImpression Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClinicalImpression::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ASSESSOR])) {
            if ($data[self::FIELD_ASSESSOR] instanceof FHIRReference) {
                $this->setAssessor($data[self::FIELD_ASSESSOR]);
            } else {
                $this->setAssessor(new FHIRReference($data[self::FIELD_ASSESSOR]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_DATE]) || isset($data[self::FIELD_DATE_EXT])) {
            if (isset($data[self::FIELD_DATE])) {
                $value = $data[self::FIELD_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT])) {
                $ext = $data[self::FIELD_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDate($value);
                } else if (is_array($value)) {
                    $this->setDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION]) || isset($data[self::FIELD_DESCRIPTION_EXT])) {
            if (isset($data[self::FIELD_DESCRIPTION])) {
                $value = $data[self::FIELD_DESCRIPTION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) {
                $ext = $data[self::FIELD_DESCRIPTION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDescription(new FHIRString($ext));
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
        if (isset($data[self::FIELD_FINDING])) {
            if (is_array($data[self::FIELD_FINDING])) {
                foreach($data[self::FIELD_FINDING] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRClinicalImpressionFinding) {
                        $this->addFinding($v);
                    } else {
                        $this->addFinding(new FHIRClinicalImpressionFinding($v));
                    }
                }
            } else if ($data[self::FIELD_FINDING] instanceof FHIRClinicalImpressionFinding) {
                $this->addFinding($data[self::FIELD_FINDING]);
            } else {
                $this->addFinding(new FHIRClinicalImpressionFinding($data[self::FIELD_FINDING]));
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
        if (isset($data[self::FIELD_INVESTIGATION])) {
            if (is_array($data[self::FIELD_INVESTIGATION])) {
                foreach($data[self::FIELD_INVESTIGATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRClinicalImpressionInvestigation) {
                        $this->addInvestigation($v);
                    } else {
                        $this->addInvestigation(new FHIRClinicalImpressionInvestigation($v));
                    }
                }
            } else if ($data[self::FIELD_INVESTIGATION] instanceof FHIRClinicalImpressionInvestigation) {
                $this->addInvestigation($data[self::FIELD_INVESTIGATION]);
            } else {
                $this->addInvestigation(new FHIRClinicalImpressionInvestigation($data[self::FIELD_INVESTIGATION]));
            }
        }
        if (isset($data[self::FIELD_NOTE])) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } else if ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
            }
        }
        if (isset($data[self::FIELD_PREVIOUS])) {
            if ($data[self::FIELD_PREVIOUS] instanceof FHIRReference) {
                $this->setPrevious($data[self::FIELD_PREVIOUS]);
            } else {
                $this->setPrevious(new FHIRReference($data[self::FIELD_PREVIOUS]));
            }
        }
        if (isset($data[self::FIELD_PROBLEM])) {
            if (is_array($data[self::FIELD_PROBLEM])) {
                foreach($data[self::FIELD_PROBLEM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addProblem($v);
                    } else {
                        $this->addProblem(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_PROBLEM] instanceof FHIRReference) {
                $this->addProblem($data[self::FIELD_PROBLEM]);
            } else {
                $this->addProblem(new FHIRReference($data[self::FIELD_PROBLEM]));
            }
        }
        if (isset($data[self::FIELD_PROGNOSIS_CODEABLE_CONCEPT])) {
            if (is_array($data[self::FIELD_PROGNOSIS_CODEABLE_CONCEPT])) {
                foreach($data[self::FIELD_PROGNOSIS_CODEABLE_CONCEPT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addPrognosisCodeableConcept($v);
                    } else {
                        $this->addPrognosisCodeableConcept(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_PROGNOSIS_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->addPrognosisCodeableConcept($data[self::FIELD_PROGNOSIS_CODEABLE_CONCEPT]);
            } else {
                $this->addPrognosisCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_PROGNOSIS_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_PROGNOSIS_REFERENCE])) {
            if (is_array($data[self::FIELD_PROGNOSIS_REFERENCE])) {
                foreach($data[self::FIELD_PROGNOSIS_REFERENCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addPrognosisReference($v);
                    } else {
                        $this->addPrognosisReference(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_PROGNOSIS_REFERENCE] instanceof FHIRReference) {
                $this->addPrognosisReference($data[self::FIELD_PROGNOSIS_REFERENCE]);
            } else {
                $this->addPrognosisReference(new FHIRReference($data[self::FIELD_PROGNOSIS_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_PROTOCOL]) || isset($data[self::FIELD_PROTOCOL_EXT])) {
            if (isset($data[self::FIELD_PROTOCOL])) {
                $value = $data[self::FIELD_PROTOCOL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PROTOCOL_EXT]) && is_array($data[self::FIELD_PROTOCOL_EXT])) {
                $ext = $data[self::FIELD_PROTOCOL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->addProtocol($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRUri) {
                            $this->addProtocol($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addProtocol(new FHIRUri(array_merge($v, $iext)));
                            } else {
                                $this->addProtocol(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addProtocol(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->addProtocol(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addProtocol(new FHIRUri($iext));
                }
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
                if ($value instanceof FHIRClinicalImpressionStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRClinicalImpressionStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRClinicalImpressionStatus([FHIRClinicalImpressionStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRClinicalImpressionStatus($ext));
            }
        }
        if (isset($data[self::FIELD_STATUS_REASON])) {
            if ($data[self::FIELD_STATUS_REASON] instanceof FHIRCodeableConcept) {
                $this->setStatusReason($data[self::FIELD_STATUS_REASON]);
            } else {
                $this->setStatusReason(new FHIRCodeableConcept($data[self::FIELD_STATUS_REASON]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_SUMMARY]) || isset($data[self::FIELD_SUMMARY_EXT])) {
            if (isset($data[self::FIELD_SUMMARY])) {
                $value = $data[self::FIELD_SUMMARY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SUMMARY_EXT]) && is_array($data[self::FIELD_SUMMARY_EXT])) {
                $ext = $data[self::FIELD_SUMMARY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSummary($value);
                } else if (is_array($value)) {
                    $this->setSummary(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSummary(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSummary(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SUPPORTING_INFO])) {
            if (is_array($data[self::FIELD_SUPPORTING_INFO])) {
                foreach($data[self::FIELD_SUPPORTING_INFO] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addSupportingInfo($v);
                    } else {
                        $this->addSupportingInfo(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_SUPPORTING_INFO] instanceof FHIRReference) {
                $this->addSupportingInfo($data[self::FIELD_SUPPORTING_INFO]);
            } else {
                $this->addSupportingInfo(new FHIRReference($data[self::FIELD_SUPPORTING_INFO]));
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
        return "<ClinicalImpression{$xmlns}></ClinicalImpression>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clinician performing the assessment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getAssessor()
    {
        return $this->assessor;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clinician performing the assessment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $assessor
     * @return static
     */
    public function setAssessor(FHIRReference $assessor = null)
    {
        $this->assessor = $assessor;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Categorizes the type of clinical assessment performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
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
     * Categorizes the type of clinical assessment performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        $this->code = $code;
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
     * Indicates when the documentation of the assessment was complete.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates when the documentation of the assessment was complete.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $date
     * @return static
     */
    public function setDate($date = null)
    {
        if (null === $date) {
            $this->date = null;
            return $this;
        }
        if ($date instanceof FHIRDateTime) {
            $this->date = $date;
            return $this;
        }
        $this->date = new FHIRDateTime($date);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A summary of the context and/or cause of the assessment - why / where it was
     * performed, and what patient events/status prompted it.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A summary of the context and/or cause of the assessment - why / where it was
     * performed, and what patient events/status prompted it.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRString) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRString($description);
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
     * The point in time or period over which the subject was assessed. (choose any one
     * of effective*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
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
     * The point in time or period over which the subject was assessed. (choose any one
     * of effective*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $effectiveDateTime
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
     * The point in time or period over which the subject was assessed. (choose any one
     * of effective*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
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
     * The point in time or period over which the subject was assessed. (choose any one
     * of effective*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $effectivePeriod
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
     * The Encounter during which this ClinicalImpression was created or to which the
     * creation of this record is tightly associated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
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
     * The Encounter during which this ClinicalImpression was created or to which the
     * creation of this record is tightly associated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $encounter
     * @return static
     */
    public function setEncounter(FHIRReference $encounter = null)
    {
        $this->encounter = $encounter;
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
     * Specific findings or diagnoses that were considered likely or relevant to
     * ongoing treatment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding[]
     */
    public function getFinding()
    {
        return $this->finding;
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
     * Specific findings or diagnoses that were considered likely or relevant to
     * ongoing treatment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding $finding
     * @return static
     */
    public function addFinding(FHIRClinicalImpressionFinding $finding = null)
    {
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
     * Specific findings or diagnoses that were considered likely or relevant to
     * ongoing treatment.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding[] $finding
     * @return static
     */
    public function setFinding(array $finding = [])
    {
        $this->finding = [];
        if ([] === $finding) {
            return $this;
        }
        foreach($finding as $v) {
            if ($v instanceof FHIRClinicalImpressionFinding) {
                $this->addFinding($v);
            } else {
                $this->addFinding(new FHIRClinicalImpressionFinding($v));
            }
        }
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this clinical impression by the performer or
     * other systems which remain constant as the resource is updated and propagates
     * from server to server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this clinical impression by the performer or
     * other systems which remain constant as the resource is updated and propagates
     * from server to server.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this clinical impression by the performer or
     * other systems which remain constant as the resource is updated and propagates
     * from server to server.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
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
     * A record of a clinical assessment performed to determine what problem(s) may
     * affect the patient and before planning the treatments or management strategies
     * that are best to manage a patient's condition. Assessments are often 1:1 with a
     * clinical consultation / encounter, but this varies greatly depending on the
     * clinical workflow. This resource is called "ClinicalImpression" rather than
     * "ClinicalAssessment" to avoid confusion with the recording of assessment tools
     * such as Apgar score.
     *
     * One or more sets of investigations (signs, symptoms, etc.). The actual grouping
     * of investigations varies greatly depending on the type and context of the
     * assessment. These investigations may include data generated during the
     * assessment process, or data previously generated and recorded that is pertinent
     * to the outcomes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigation[]
     */
    public function getInvestigation()
    {
        return $this->investigation;
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
     * One or more sets of investigations (signs, symptoms, etc.). The actual grouping
     * of investigations varies greatly depending on the type and context of the
     * assessment. These investigations may include data generated during the
     * assessment process, or data previously generated and recorded that is pertinent
     * to the outcomes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigation $investigation
     * @return static
     */
    public function addInvestigation(FHIRClinicalImpressionInvestigation $investigation = null)
    {
        $this->investigation[] = $investigation;
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
     * One or more sets of investigations (signs, symptoms, etc.). The actual grouping
     * of investigations varies greatly depending on the type and context of the
     * assessment. These investigations may include data generated during the
     * assessment process, or data previously generated and recorded that is pertinent
     * to the outcomes.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigation[] $investigation
     * @return static
     */
    public function setInvestigation(array $investigation = [])
    {
        $this->investigation = [];
        if ([] === $investigation) {
            return $this;
        }
        foreach($investigation as $v) {
            if ($v instanceof FHIRClinicalImpressionInvestigation) {
                $this->addInvestigation($v);
            } else {
                $this->addInvestigation(new FHIRClinicalImpressionInvestigation($v));
            }
        }
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Commentary about the impression, typically recorded after the impression itself
     * was made, though supplemental notes by the original author could also appear.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Commentary about the impression, typically recorded after the impression itself
     * was made, though supplemental notes by the original author could also appear.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation $note
     * @return static
     */
    public function addNote(FHIRAnnotation $note = null)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Commentary about the impression, typically recorded after the impression itself
     * was made, though supplemental notes by the original author could also appear.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[] $note
     * @return static
     */
    public function setNote(array $note = [])
    {
        $this->note = [];
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            if ($v instanceof FHIRAnnotation) {
                $this->addNote($v);
            } else {
                $this->addNote(new FHIRAnnotation($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the last assessment that was conducted on this patient.
     * Assessments are often/usually ongoing in nature; a care provider (practitioner
     * or team) will make new assessments on an ongoing basis as new data arises or the
     * patient's conditions changes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getPrevious()
    {
        return $this->previous;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the last assessment that was conducted on this patient.
     * Assessments are often/usually ongoing in nature; a care provider (practitioner
     * or team) will make new assessments on an ongoing basis as new data arises or the
     * patient's conditions changes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $previous
     * @return static
     */
    public function setPrevious(FHIRReference $previous = null)
    {
        $this->previous = $previous;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of the relevant problems/conditions for a patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getProblem()
    {
        return $this->problem;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of the relevant problems/conditions for a patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $problem
     * @return static
     */
    public function addProblem(FHIRReference $problem = null)
    {
        $this->problem[] = $problem;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of the relevant problems/conditions for a patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $problem
     * @return static
     */
    public function setProblem(array $problem = [])
    {
        $this->problem = [];
        if ([] === $problem) {
            return $this;
        }
        foreach($problem as $v) {
            if ($v instanceof FHIRReference) {
                $this->addProblem($v);
            } else {
                $this->addProblem(new FHIRReference($v));
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
     * Estimate of likely outcome.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getPrognosisCodeableConcept()
    {
        return $this->prognosisCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimate of likely outcome.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $prognosisCodeableConcept
     * @return static
     */
    public function addPrognosisCodeableConcept(FHIRCodeableConcept $prognosisCodeableConcept = null)
    {
        $this->prognosisCodeableConcept[] = $prognosisCodeableConcept;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Estimate of likely outcome.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $prognosisCodeableConcept
     * @return static
     */
    public function setPrognosisCodeableConcept(array $prognosisCodeableConcept = [])
    {
        $this->prognosisCodeableConcept = [];
        if ([] === $prognosisCodeableConcept) {
            return $this;
        }
        foreach($prognosisCodeableConcept as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addPrognosisCodeableConcept($v);
            } else {
                $this->addPrognosisCodeableConcept(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * RiskAssessment expressing likely outcome.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getPrognosisReference()
    {
        return $this->prognosisReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * RiskAssessment expressing likely outcome.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $prognosisReference
     * @return static
     */
    public function addPrognosisReference(FHIRReference $prognosisReference = null)
    {
        $this->prognosisReference[] = $prognosisReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * RiskAssessment expressing likely outcome.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $prognosisReference
     * @return static
     */
    public function setPrognosisReference(array $prognosisReference = [])
    {
        $this->prognosisReference = [];
        if ([] === $prognosisReference) {
            return $this;
        }
        foreach($prognosisReference as $v) {
            if ($v instanceof FHIRReference) {
                $this->addPrognosisReference($v);
            } else {
                $this->addPrognosisReference(new FHIRReference($v));
            }
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri[]
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Reference to a specific published clinical protocol that was followed during
     * this assessment, and/or that provides evidence in support of the diagnosis.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $protocol
     * @return static
     */
    public function addProtocol($protocol = null)
    {
        if (null === $protocol) {
            $this->protocol = [];
            return $this;
        }
        if ($protocol instanceof FHIRUri) {
            $this->protocol[] = $protocol;
            return $this;
        }
        $this->protocol[] = new FHIRUri($protocol);
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri[] $protocol
     * @return static
     */
    public function setProtocol(array $protocol = [])
    {
        $this->protocol = [];
        if ([] === $protocol) {
            return $this;
        }
        foreach($protocol as $v) {
            if ($v instanceof FHIRUri) {
                $this->addProtocol($v);
            } else {
                $this->addProtocol(new FHIRUri($v));
            }
        }
        return $this;
    }

    /**
     * The workflow state of a clinical impression.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the workflow status of the assessment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRClinicalImpressionStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The workflow state of a clinical impression.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the workflow status of the assessment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRClinicalImpressionStatus $status
     * @return static
     */
    public function setStatus(FHIRClinicalImpressionStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Captures the reason for the current state of the ClinicalImpression.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Captures the reason for the current state of the ClinicalImpression.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $statusReason
     * @return static
     */
    public function setStatusReason(FHIRCodeableConcept $statusReason = null)
    {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient or group of individuals assessed as part of this record.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
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
     * The patient or group of individuals assessed as part of this record.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function setSubject(FHIRReference $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A text summary of the investigations and the diagnosis.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A text summary of the investigations and the diagnosis.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $summary
     * @return static
     */
    public function setSummary($summary = null)
    {
        if (null === $summary) {
            $this->summary = null;
            return $this;
        }
        if ($summary instanceof FHIRString) {
            $this->summary = $summary;
            return $this;
        }
        $this->summary = new FHIRString($summary);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information supporting the clinical impression.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getSupportingInfo()
    {
        return $this->supportingInfo;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information supporting the clinical impression.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $supportingInfo
     * @return static
     */
    public function addSupportingInfo(FHIRReference $supportingInfo = null)
    {
        $this->supportingInfo[] = $supportingInfo;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information supporting the clinical impression.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $supportingInfo
     * @return static
     */
    public function setSupportingInfo(array $supportingInfo = [])
    {
        $this->supportingInfo = [];
        if ([] === $supportingInfo) {
            return $this;
        }
        foreach($supportingInfo as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSupportingInfo($v);
            } else {
                $this->addSupportingInfo(new FHIRReference($v));
            }
        }
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
        if (null !== ($v = $this->getAssessor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ASSESSOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
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
        if ([] !== ($vs = $this->getFinding())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_FINDING, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getInvestigation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INVESTIGATION, $i)] = $fieldErrs;
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
        if (null !== ($v = $this->getPrevious())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PREVIOUS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getProblem())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROBLEM, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPrognosisCodeableConcept())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROGNOSIS_CODEABLE_CONCEPT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPrognosisReference())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROGNOSIS_REFERENCE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getProtocol())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROTOCOL, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatusReason())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS_REASON] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSummary())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUMMARY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSupportingInfo())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUPPORTING_INFO, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ASSESSOR])) {
            $v = $this->getAssessor();
            foreach($validationRules[self::FIELD_ASSESSOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_ASSESSOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ASSESSOR])) {
                        $errs[self::FIELD_ASSESSOR] = [];
                    }
                    $errs[self::FIELD_ASSESSOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE])) {
            $v = $this->getDate();
            foreach($validationRules[self::FIELD_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_DATE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EFFECTIVE_DATE_TIME])) {
            $v = $this->getEffectiveDateTime();
            foreach($validationRules[self::FIELD_EFFECTIVE_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_EFFECTIVE_DATE_TIME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_EFFECTIVE_PERIOD, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCOUNTER])) {
                        $errs[self::FIELD_ENCOUNTER] = [];
                    }
                    $errs[self::FIELD_ENCOUNTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FINDING])) {
            $v = $this->getFinding();
            foreach($validationRules[self::FIELD_FINDING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_FINDING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FINDING])) {
                        $errs[self::FIELD_FINDING] = [];
                    }
                    $errs[self::FIELD_FINDING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INVESTIGATION])) {
            $v = $this->getInvestigation();
            foreach($validationRules[self::FIELD_INVESTIGATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_INVESTIGATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INVESTIGATION])) {
                        $errs[self::FIELD_INVESTIGATION] = [];
                    }
                    $errs[self::FIELD_INVESTIGATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PREVIOUS])) {
            $v = $this->getPrevious();
            foreach($validationRules[self::FIELD_PREVIOUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_PREVIOUS, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_PROBLEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROBLEM])) {
                        $errs[self::FIELD_PROBLEM] = [];
                    }
                    $errs[self::FIELD_PROBLEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROGNOSIS_CODEABLE_CONCEPT])) {
            $v = $this->getPrognosisCodeableConcept();
            foreach($validationRules[self::FIELD_PROGNOSIS_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_PROGNOSIS_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROGNOSIS_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_PROGNOSIS_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_PROGNOSIS_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROGNOSIS_REFERENCE])) {
            $v = $this->getPrognosisReference();
            foreach($validationRules[self::FIELD_PROGNOSIS_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_PROGNOSIS_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROGNOSIS_REFERENCE])) {
                        $errs[self::FIELD_PROGNOSIS_REFERENCE] = [];
                    }
                    $errs[self::FIELD_PROGNOSIS_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROTOCOL])) {
            $v = $this->getProtocol();
            foreach($validationRules[self::FIELD_PROTOCOL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_PROTOCOL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROTOCOL])) {
                        $errs[self::FIELD_PROTOCOL] = [];
                    }
                    $errs[self::FIELD_PROTOCOL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS_REASON])) {
            $v = $this->getStatusReason();
            foreach($validationRules[self::FIELD_STATUS_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_STATUS_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS_REASON])) {
                        $errs[self::FIELD_STATUS_REASON] = [];
                    }
                    $errs[self::FIELD_STATUS_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUMMARY])) {
            $v = $this->getSummary();
            foreach($validationRules[self::FIELD_SUMMARY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_SUMMARY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUMMARY])) {
                        $errs[self::FIELD_SUMMARY] = [];
                    }
                    $errs[self::FIELD_SUMMARY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUPPORTING_INFO])) {
            $v = $this->getSupportingInfo();
            foreach($validationRules[self::FIELD_SUPPORTING_INFO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_SUPPORTING_INFO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUPPORTING_INFO])) {
                        $errs[self::FIELD_SUPPORTING_INFO] = [];
                    }
                    $errs[self::FIELD_SUPPORTING_INFO][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRClinicalImpression $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRClinicalImpression
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
                throw new \DomainException(sprintf('FHIRClinicalImpression::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRClinicalImpression::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRClinicalImpression;
        } elseif (!is_object($type) || !($type instanceof FHIRClinicalImpression)) {
            throw new \RuntimeException(sprintf(
                'FHIRClinicalImpression::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRClinicalImpression or null, %s seen.',
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
        if (isset($children->assessor)) {
            $type->setAssessor(FHIRReference::xmlUnserialize($children->assessor));
        }
        if (isset($children->code)) {
            $type->setCode(FHIRCodeableConcept::xmlUnserialize($children->code));
        }
        if (isset($children->date)) {
            $type->setDate(FHIRDateTime::xmlUnserialize($children->date));
        }
        if (isset($attributes->date)) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->date);
            } else {
                $type->setDate((string)$attributes->date);
            }
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($attributes->description)) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->description);
            } else {
                $type->setDescription((string)$attributes->description);
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
        if (isset($children->finding)) {
            foreach($children->finding as $child) {
                $type->addFinding(FHIRClinicalImpressionFinding::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->investigation)) {
            foreach($children->investigation as $child) {
                $type->addInvestigation(FHIRClinicalImpressionInvestigation::xmlUnserialize($child));
            }
        }
        if (isset($children->note)) {
            foreach($children->note as $child) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($child));
            }
        }
        if (isset($children->previous)) {
            $type->setPrevious(FHIRReference::xmlUnserialize($children->previous));
        }
        if (isset($children->problem)) {
            foreach($children->problem as $child) {
                $type->addProblem(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->prognosisCodeableConcept)) {
            foreach($children->prognosisCodeableConcept as $child) {
                $type->addPrognosisCodeableConcept(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->prognosisReference)) {
            foreach($children->prognosisReference as $child) {
                $type->addPrognosisReference(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->protocol)) {
            foreach($children->protocol as $child) {
                $type->addProtocol(FHIRUri::xmlUnserialize($child));
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRClinicalImpressionStatus::xmlUnserialize($children->status));
        }
        if (isset($children->statusReason)) {
            $type->setStatusReason(FHIRCodeableConcept::xmlUnserialize($children->statusReason));
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRReference::xmlUnserialize($children->subject));
        }
        if (isset($children->summary)) {
            $type->setSummary(FHIRString::xmlUnserialize($children->summary));
        }
        if (isset($attributes->summary)) {
            $pt = $type->getSummary();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->summary);
            } else {
                $type->setSummary((string)$attributes->summary);
            }
        }
        if (isset($children->supportingInfo)) {
            foreach($children->supportingInfo as $child) {
                $type->addSupportingInfo(FHIRReference::xmlUnserialize($child));
            }
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
        if (null !== ($v = $this->getAssessor())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ASSESSOR, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getFinding())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_FINDING, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getInvestigation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INVESTIGATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOTE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPrevious())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PREVIOUS, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getProblem())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROBLEM, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getPrognosisCodeableConcept())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROGNOSIS_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getPrognosisReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROGNOSIS_REFERENCE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getProtocol())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROTOCOL, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatusReason())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS_REASON, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSummary())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUMMARY, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getSupportingInfo())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUPPORTING_INFO, null, $v->_getFHIRXMLNamespace()));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAssessor())) {
            $a[self::FIELD_ASSESSOR] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
        }
        if (null !== ($v = $this->getDate())) {
            $a[self::FIELD_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_DESCRIPTION_EXT] = $enc;
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
        if ([] !== ($vs = $this->getFinding())) {
            $a[self::FIELD_FINDING] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_FINDING][] = $v;
            }
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
        if ([] !== ($vs = $this->getInvestigation())) {
            $a[self::FIELD_INVESTIGATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_INVESTIGATION][] = $v;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            $a[self::FIELD_NOTE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_NOTE][] = $v;
            }
        }
        if (null !== ($v = $this->getPrevious())) {
            $a[self::FIELD_PREVIOUS] = $v;
        }
        if ([] !== ($vs = $this->getProblem())) {
            $a[self::FIELD_PROBLEM] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PROBLEM][] = $v;
            }
        }
        if ([] !== ($vs = $this->getPrognosisCodeableConcept())) {
            $a[self::FIELD_PROGNOSIS_CODEABLE_CONCEPT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PROGNOSIS_CODEABLE_CONCEPT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getPrognosisReference())) {
            $a[self::FIELD_PROGNOSIS_REFERENCE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PROGNOSIS_REFERENCE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getProtocol())) {
            $a[self::FIELD_PROTOCOL] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PROTOCOL][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRUri::FIELD_VALUE]) || array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRUri::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_PROTOCOL_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRClinicalImpressionStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRClinicalImpressionStatus::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getStatusReason())) {
            $a[self::FIELD_STATUS_REASON] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if (null !== ($v = $this->getSummary())) {
            $a[self::FIELD_SUMMARY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_SUMMARY_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getSupportingInfo())) {
            $a[self::FIELD_SUPPORTING_INFO] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SUPPORTING_INFO][] = $v;
            }
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
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

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigations;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionRuledOut;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRClinicalImpressionStatus;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

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
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRClinicalImpression extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION;
    const FIELD_ACTION = 'action';
    const FIELD_ASSESSOR = 'assessor';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_FINDING = 'finding';
    const FIELD_INVESTIGATIONS = 'investigations';
    const FIELD_PATIENT = 'patient';
    const FIELD_PLAN = 'plan';
    const FIELD_PREVIOUS = 'previous';
    const FIELD_PROBLEM = 'problem';
    const FIELD_PROGNOSIS = 'prognosis';
    const FIELD_PROGNOSIS_EXT = '_prognosis';
    const FIELD_PROTOCOL = 'protocol';
    const FIELD_PROTOCOL_EXT = '_protocol';
    const FIELD_RESOLVED = 'resolved';
    const FIELD_RULED_OUT = 'ruledOut';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_SUMMARY = 'summary';
    const FIELD_SUMMARY_EXT = '_summary';
    const FIELD_TRIGGER_CODEABLE_CONCEPT = 'triggerCodeableConcept';
    const FIELD_TRIGGER_REFERENCE = 'triggerReference';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Actions taken during assessment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    protected $action = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clinician performing the assessment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $assessor = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    protected $date = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A summary of the context and/or cause of the assessment - why / where was it
     * peformed, and what patient events/sstatus prompted it.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $description = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding[]
     */
    protected $finding = [];

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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigations[]
     */
    protected $investigations = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient being assessed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $patient = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Plan of action after assessment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    protected $plan = [];

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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $previous = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This a list of the general problems/conditions for a patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    protected $problem = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimate of likely outcome.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $prognosis = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Reference to a specific published clinical protocol that was followed during
     * this assessment, and/or that provides evidence in support of the diagnosis.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri
     */
    protected $protocol = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Diagnoses/conditions resolved since the last assessment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected $resolved = [];

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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionRuledOut[]
     */
    protected $ruledOut = [];

    /**
     * The workflow state of a clinical impression.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the workflow status of the assessment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRClinicalImpressionStatus
     */
    protected $status = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A text summary of the investigations and the diagnosis.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $summary = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request or event that necessitated this assessment. This may be a diagnosis,
     * a Care Plan, a Request Referral, or some other resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $triggerCodeableConcept = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request or event that necessitated this assessment. This may be a diagnosis,
     * a Care Plan, a Request Referral, or some other resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $triggerReference = null;

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
        if (isset($data[self::FIELD_ACTION])) {
            if (is_array($data[self::FIELD_ACTION])) {
                foreach($data[self::FIELD_ACTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addAction($v);
                    } else {
                        $this->addAction(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_ACTION] instanceof FHIRReference) {
                $this->addAction($data[self::FIELD_ACTION]);
            } else {
                $this->addAction(new FHIRReference($data[self::FIELD_ACTION]));
            }
        }
        if (isset($data[self::FIELD_ASSESSOR])) {
            if ($data[self::FIELD_ASSESSOR] instanceof FHIRReference) {
                $this->setAssessor($data[self::FIELD_ASSESSOR]);
            } else {
                $this->setAssessor(new FHIRReference($data[self::FIELD_ASSESSOR]));
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
        if (isset($data[self::FIELD_INVESTIGATIONS])) {
            if (is_array($data[self::FIELD_INVESTIGATIONS])) {
                foreach($data[self::FIELD_INVESTIGATIONS] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRClinicalImpressionInvestigations) {
                        $this->addInvestigations($v);
                    } else {
                        $this->addInvestigations(new FHIRClinicalImpressionInvestigations($v));
                    }
                }
            } else if ($data[self::FIELD_INVESTIGATIONS] instanceof FHIRClinicalImpressionInvestigations) {
                $this->addInvestigations($data[self::FIELD_INVESTIGATIONS]);
            } else {
                $this->addInvestigations(new FHIRClinicalImpressionInvestigations($data[self::FIELD_INVESTIGATIONS]));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_PLAN])) {
            if (is_array($data[self::FIELD_PLAN])) {
                foreach($data[self::FIELD_PLAN] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addPlan($v);
                    } else {
                        $this->addPlan(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_PLAN] instanceof FHIRReference) {
                $this->addPlan($data[self::FIELD_PLAN]);
            } else {
                $this->addPlan(new FHIRReference($data[self::FIELD_PLAN]));
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
        if (isset($data[self::FIELD_PROGNOSIS]) || isset($data[self::FIELD_PROGNOSIS_EXT])) {
            if (isset($data[self::FIELD_PROGNOSIS])) {
                $value = $data[self::FIELD_PROGNOSIS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PROGNOSIS_EXT]) && is_array($data[self::FIELD_PROGNOSIS_EXT])) {
                $ext = $data[self::FIELD_PROGNOSIS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPrognosis($value);
                } else if (is_array($value)) {
                    $this->setPrognosis(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPrognosis(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPrognosis(new FHIRString($ext));
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
                    $this->setProtocol($value);
                } else if (is_array($value)) {
                    $this->setProtocol(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setProtocol(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setProtocol(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_RESOLVED])) {
            if (is_array($data[self::FIELD_RESOLVED])) {
                foreach($data[self::FIELD_RESOLVED] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addResolved($v);
                    } else {
                        $this->addResolved(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_RESOLVED] instanceof FHIRCodeableConcept) {
                $this->addResolved($data[self::FIELD_RESOLVED]);
            } else {
                $this->addResolved(new FHIRCodeableConcept($data[self::FIELD_RESOLVED]));
            }
        }
        if (isset($data[self::FIELD_RULED_OUT])) {
            if (is_array($data[self::FIELD_RULED_OUT])) {
                foreach($data[self::FIELD_RULED_OUT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRClinicalImpressionRuledOut) {
                        $this->addRuledOut($v);
                    } else {
                        $this->addRuledOut(new FHIRClinicalImpressionRuledOut($v));
                    }
                }
            } else if ($data[self::FIELD_RULED_OUT] instanceof FHIRClinicalImpressionRuledOut) {
                $this->addRuledOut($data[self::FIELD_RULED_OUT]);
            } else {
                $this->addRuledOut(new FHIRClinicalImpressionRuledOut($data[self::FIELD_RULED_OUT]));
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
        if (isset($data[self::FIELD_TRIGGER_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_TRIGGER_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setTriggerCodeableConcept($data[self::FIELD_TRIGGER_CODEABLE_CONCEPT]);
            } else {
                $this->setTriggerCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_TRIGGER_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_TRIGGER_REFERENCE])) {
            if ($data[self::FIELD_TRIGGER_REFERENCE] instanceof FHIRReference) {
                $this->setTriggerReference($data[self::FIELD_TRIGGER_REFERENCE]);
            } else {
                $this->setTriggerReference(new FHIRReference($data[self::FIELD_TRIGGER_REFERENCE]));
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
     * Actions taken during assessment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Actions taken during assessment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $action
     * @return static
     */
    public function addAction(FHIRReference $action = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[] $action
     * @return static
     */
    public function setAction(array $action = [])
    {
        $this->action = [];
        if ([] === $action) {
            return $this;
        }
        foreach($action as $v) {
            if ($v instanceof FHIRReference) {
                $this->addAction($v);
            } else {
                $this->addAction(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clinician performing the assessment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $assessor
     * @return static
     */
    public function setAssessor(FHIRReference $assessor = null)
    {
        $this->assessor = $assessor;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
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
     * The point in time at which the assessment was concluded (not when it was
     * recorded).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $date
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
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A summary of the context and/or cause of the assessment - why / where was it
     * peformed, and what patient events/sstatus prompted it.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A summary of the context and/or cause of the assessment - why / where was it
     * peformed, and what patient events/sstatus prompted it.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $description
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding[]
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
     * Specific findings or diagnoses that was considered likely or relevant to ongoing
     * treatment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding $finding
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
     * Specific findings or diagnoses that was considered likely or relevant to ongoing
     * treatment.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding[] $finding
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigations[]
     */
    public function getInvestigations()
    {
        return $this->investigations;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigations $investigations
     * @return static
     */
    public function addInvestigations(FHIRClinicalImpressionInvestigations $investigations = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigations[] $investigations
     * @return static
     */
    public function setInvestigations(array $investigations = [])
    {
        $this->investigations = [];
        if ([] === $investigations) {
            return $this;
        }
        foreach($investigations as $v) {
            if ($v instanceof FHIRClinicalImpressionInvestigations) {
                $this->addInvestigations($v);
            } else {
                $this->addInvestigations(new FHIRClinicalImpressionInvestigations($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient being assessed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient being assessed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(FHIRReference $patient = null)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Plan of action after assessment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Plan of action after assessment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $plan
     * @return static
     */
    public function addPlan(FHIRReference $plan = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[] $plan
     * @return static
     */
    public function setPlan(array $plan = [])
    {
        $this->plan = [];
        if ([] === $plan) {
            return $this;
        }
        foreach($plan as $v) {
            if ($v instanceof FHIRReference) {
                $this->addPlan($v);
            } else {
                $this->addPlan(new FHIRReference($v));
            }
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
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
     * A reference to the last assesment that was conducted bon this patient.
     * Assessments are often/usually ongoing in nature; a care provider (practitioner
     * or team) will make new assessments on an ongoing basis as new data arises or the
     * patient's conditions changes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $previous
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
     * This a list of the general problems/conditions for a patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
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
     * This a list of the general problems/conditions for a patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $problem
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
     * This a list of the general problems/conditions for a patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[] $problem
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimate of likely outcome.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getPrognosis()
    {
        return $this->prognosis;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimate of likely outcome.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $prognosis
     * @return static
     */
    public function setPrognosis($prognosis = null)
    {
        if (null === $prognosis) {
            $this->prognosis = null;
            return $this;
        }
        if ($prognosis instanceof FHIRString) {
            $this->prognosis = $prognosis;
            return $this;
        }
        $this->prognosis = new FHIRString($prognosis);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri $protocol
     * @return static
     */
    public function setProtocol($protocol = null)
    {
        if (null === $protocol) {
            $this->protocol = null;
            return $this;
        }
        if ($protocol instanceof FHIRUri) {
            $this->protocol = $protocol;
            return $this;
        }
        $this->protocol = new FHIRUri($protocol);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getResolved()
    {
        return $this->resolved;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Diagnoses/conditions resolved since the last assessment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $resolved
     * @return static
     */
    public function addResolved(FHIRCodeableConcept $resolved = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[] $resolved
     * @return static
     */
    public function setResolved(array $resolved = [])
    {
        $this->resolved = [];
        if ([] === $resolved) {
            return $this;
        }
        foreach($resolved as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addResolved($v);
            } else {
                $this->addResolved(new FHIRCodeableConcept($v));
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
     * Diagnosis considered not possible.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionRuledOut[]
     */
    public function getRuledOut()
    {
        return $this->ruledOut;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionRuledOut $ruledOut
     * @return static
     */
    public function addRuledOut(FHIRClinicalImpressionRuledOut $ruledOut = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionRuledOut[] $ruledOut
     * @return static
     */
    public function setRuledOut(array $ruledOut = [])
    {
        $this->ruledOut = [];
        if ([] === $ruledOut) {
            return $this;
        }
        foreach($ruledOut as $v) {
            if ($v instanceof FHIRClinicalImpressionRuledOut) {
                $this->addRuledOut($v);
            } else {
                $this->addRuledOut(new FHIRClinicalImpressionRuledOut($v));
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRClinicalImpressionStatus
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRClinicalImpressionStatus $status
     * @return static
     */
    public function setStatus(FHIRClinicalImpressionStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A text summary of the investigations and the diagnosis.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A text summary of the investigations and the diagnosis.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $summary
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request or event that necessitated this assessment. This may be a diagnosis,
     * a Care Plan, a Request Referral, or some other resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getTriggerCodeableConcept()
    {
        return $this->triggerCodeableConcept;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $triggerCodeableConcept
     * @return static
     */
    public function setTriggerCodeableConcept(FHIRCodeableConcept $triggerCodeableConcept = null)
    {
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getTriggerReference()
    {
        return $this->triggerReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request or event that necessitated this assessment. This may be a diagnosis,
     * a Care Plan, a Request Referral, or some other resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $triggerReference
     * @return static
     */
    public function setTriggerReference(FHIRReference $triggerReference = null)
    {
        $this->triggerReference = $triggerReference;
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
        if ([] !== ($vs = $this->getAction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ACTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getAssessor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ASSESSOR] = $fieldErrs;
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
        if ([] !== ($vs = $this->getFinding())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_FINDING, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getInvestigations())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INVESTIGATIONS, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPlan())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PLAN, $i)] = $fieldErrs;
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
        if (null !== ($v = $this->getPrognosis())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROGNOSIS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProtocol())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROTOCOL] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getResolved())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RESOLVED, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRuledOut())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RULED_OUT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSummary())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUMMARY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTriggerCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TRIGGER_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTriggerReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TRIGGER_REFERENCE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ACTION])) {
            $v = $this->getAction();
            foreach($validationRules[self::FIELD_ACTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_ACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTION])) {
                        $errs[self::FIELD_ACTION] = [];
                    }
                    $errs[self::FIELD_ACTION][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_INVESTIGATIONS])) {
            $v = $this->getInvestigations();
            foreach($validationRules[self::FIELD_INVESTIGATIONS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_INVESTIGATIONS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INVESTIGATIONS])) {
                        $errs[self::FIELD_INVESTIGATIONS] = [];
                    }
                    $errs[self::FIELD_INVESTIGATIONS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT])) {
            $v = $this->getPatient();
            foreach($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_PATIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT])) {
                        $errs[self::FIELD_PATIENT] = [];
                    }
                    $errs[self::FIELD_PATIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PLAN])) {
            $v = $this->getPlan();
            foreach($validationRules[self::FIELD_PLAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_PLAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PLAN])) {
                        $errs[self::FIELD_PLAN] = [];
                    }
                    $errs[self::FIELD_PLAN][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_PROGNOSIS])) {
            $v = $this->getPrognosis();
            foreach($validationRules[self::FIELD_PROGNOSIS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_PROGNOSIS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROGNOSIS])) {
                        $errs[self::FIELD_PROGNOSIS] = [];
                    }
                    $errs[self::FIELD_PROGNOSIS][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_RESOLVED])) {
            $v = $this->getResolved();
            foreach($validationRules[self::FIELD_RESOLVED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_RESOLVED, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_RULED_OUT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RULED_OUT])) {
                        $errs[self::FIELD_RULED_OUT] = [];
                    }
                    $errs[self::FIELD_RULED_OUT][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_TRIGGER_CODEABLE_CONCEPT])) {
            $v = $this->getTriggerCodeableConcept();
            foreach($validationRules[self::FIELD_TRIGGER_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_TRIGGER_CODEABLE_CONCEPT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION, self::FIELD_TRIGGER_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TRIGGER_REFERENCE])) {
                        $errs[self::FIELD_TRIGGER_REFERENCE] = [];
                    }
                    $errs[self::FIELD_TRIGGER_REFERENCE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClinicalImpression $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClinicalImpression
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
                'FHIRClinicalImpression::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClinicalImpression or null, %s seen.',
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
        if (isset($children->action)) {
            foreach($children->action as $child) {
                $type->addAction(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->assessor)) {
            $type->setAssessor(FHIRReference::xmlUnserialize($children->assessor));
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
        if (isset($children->finding)) {
            foreach($children->finding as $child) {
                $type->addFinding(FHIRClinicalImpressionFinding::xmlUnserialize($child));
            }
        }
        if (isset($children->investigations)) {
            foreach($children->investigations as $child) {
                $type->addInvestigations(FHIRClinicalImpressionInvestigations::xmlUnserialize($child));
            }
        }
        if (isset($children->patient)) {
            $type->setPatient(FHIRReference::xmlUnserialize($children->patient));
        }
        if (isset($children->plan)) {
            foreach($children->plan as $child) {
                $type->addPlan(FHIRReference::xmlUnserialize($child));
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
        if (isset($children->prognosis)) {
            $type->setPrognosis(FHIRString::xmlUnserialize($children->prognosis));
        }
        if (isset($attributes->prognosis)) {
            $pt = $type->getPrognosis();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->prognosis);
            } else {
                $type->setPrognosis((string)$attributes->prognosis);
            }
        }
        if (isset($children->protocol)) {
            $type->setProtocol(FHIRUri::xmlUnserialize($children->protocol));
        }
        if (isset($attributes->protocol)) {
            $pt = $type->getProtocol();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->protocol);
            } else {
                $type->setProtocol((string)$attributes->protocol);
            }
        }
        if (isset($children->resolved)) {
            foreach($children->resolved as $child) {
                $type->addResolved(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->ruledOut)) {
            foreach($children->ruledOut as $child) {
                $type->addRuledOut(FHIRClinicalImpressionRuledOut::xmlUnserialize($child));
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRClinicalImpressionStatus::xmlUnserialize($children->status));
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
        if (isset($children->triggerCodeableConcept)) {
            $type->setTriggerCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->triggerCodeableConcept));
        }
        if (isset($children->triggerReference)) {
            $type->setTriggerReference(FHIRReference::xmlUnserialize($children->triggerReference));
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
        if ([] !== ($vs = $this->getAction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ACTION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getAssessor())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ASSESSOR, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getFinding())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_FINDING, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getInvestigations())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INVESTIGATIONS, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getPlan())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PLAN, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getPrognosis())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROGNOSIS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getProtocol())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROTOCOL, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getResolved())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RESOLVED, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getRuledOut())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RULED_OUT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSummary())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUMMARY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTriggerCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TRIGGER_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTriggerReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TRIGGER_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getAction())) {
            $a[self::FIELD_ACTION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ACTION][] = $v;
            }
        }
        if (null !== ($v = $this->getAssessor())) {
            $a[self::FIELD_ASSESSOR] = $v;
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
        if ([] !== ($vs = $this->getFinding())) {
            $a[self::FIELD_FINDING] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_FINDING][] = $v;
            }
        }
        if ([] !== ($vs = $this->getInvestigations())) {
            $a[self::FIELD_INVESTIGATIONS] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_INVESTIGATIONS][] = $v;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if ([] !== ($vs = $this->getPlan())) {
            $a[self::FIELD_PLAN] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PLAN][] = $v;
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
        if (null !== ($v = $this->getPrognosis())) {
            $a[self::FIELD_PROGNOSIS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_PROGNOSIS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getProtocol())) {
            $a[self::FIELD_PROTOCOL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_PROTOCOL_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getResolved())) {
            $a[self::FIELD_RESOLVED] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_RESOLVED][] = $v;
            }
        }
        if ([] !== ($vs = $this->getRuledOut())) {
            $a[self::FIELD_RULED_OUT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_RULED_OUT][] = $v;
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
        if (null !== ($v = $this->getSummary())) {
            $a[self::FIELD_SUMMARY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_SUMMARY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getTriggerCodeableConcept())) {
            $a[self::FIELD_TRIGGER_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getTriggerReference())) {
            $a[self::FIELD_TRIGGER_REFERENCE] = $v;
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
<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:13+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRObservationStatus;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeMap;

/**
 * An assessment of the likely outcome(s) for a patient or other subject as well as
 * the likelihood of each outcome.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRRiskAssessment
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRRiskAssessment extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT;
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_BASED_ON = 'basedOn';
    const FIELD_PARENT = 'parent';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_METHOD = 'method';
    const FIELD_CODE = 'code';
    const FIELD_SUBJECT = 'subject';
    const FIELD_CONTEXT = 'context';
    const FIELD_OCCURRENCE_DATE_TIME = 'occurrenceDateTime';
    const FIELD_OCCURRENCE_DATE_TIME_EXT = '_occurrenceDateTime';
    const FIELD_OCCURRENCE_PERIOD = 'occurrencePeriod';
    const FIELD_CONDITION = 'condition';
    const FIELD_PERFORMER = 'performer';
    const FIELD_REASON_CODEABLE_CONCEPT = 'reasonCodeableConcept';
    const FIELD_REASON_REFERENCE = 'reasonReference';
    const FIELD_BASIS = 'basis';
    const FIELD_PREDICTION = 'prediction';
    const FIELD_MITIGATION = 'mitigation';
    const FIELD_MITIGATION_EXT = '_mitigation';
    const FIELD_COMMENT = 'comment';
    const FIELD_COMMENT_EXT = '_comment';

    /** @var string */
    private $_xmlns = '';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier assigned to the risk assessment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    protected $identifier = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the request that is fulfilled by this risk assessment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $basedOn = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a resource that this risk assessment is part of, such as a
     * Procedure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $parent = null;

    /**
     * Indicates the status of the identified issue
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the RiskAssessment, using the same statuses as an Observation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRObservationStatus
     */
    protected $status = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The algorithm, process or mechanism used to evaluate the risk.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $method = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of the risk assessment performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $code = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient or group the risk assessment applies to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $subject = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter where the assessment was performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $context = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and possibly time) the risk assessment was performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected $occurrenceDateTime = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date (and possibly time) the risk assessment was performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    protected $occurrencePeriod = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For assessments or prognosis specific to a particular condition, indicates the
     * condition being assessed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $condition = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The provider or software application that performed the assessment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $performer = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason the risk assessment was performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $reasonCodeableConcept = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason the risk assessment was performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $reasonReference = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the source data considered as part of the assessment (FamilyHistory,
     * Observations, Procedures, Conditions, etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $basis = [];

    /**
     * An assessment of the likely outcome(s) for a patient or other subject as well as
     * the likelihood of each outcome.
     *
     * Describes the expected outcome for the subject.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction[]
     */
    protected $prediction = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the steps that might be taken to reduce the identified risk(s).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $mitigation = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional comments about the risk assessment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $comment = null;

    /**
     * Validation map for fields in type RiskAssessment
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRRiskAssessment Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRRiskAssessment::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_BASED_ON])) {
            if ($data[self::FIELD_BASED_ON] instanceof FHIRReference) {
                $this->setBasedOn($data[self::FIELD_BASED_ON]);
            } else {
                $this->setBasedOn(new FHIRReference($data[self::FIELD_BASED_ON]));
            }
        }
        if (isset($data[self::FIELD_PARENT])) {
            if ($data[self::FIELD_PARENT] instanceof FHIRReference) {
                $this->setParent($data[self::FIELD_PARENT]);
            } else {
                $this->setParent(new FHIRReference($data[self::FIELD_PARENT]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            $value = isset($data[self::FIELD_STATUS]) ? $data[self::FIELD_STATUS] : null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $ext = $data[self::FIELD_STATUS_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRObservationStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRObservationStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRObservationStatus([FHIRObservationStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRObservationStatus($ext));
            }
        }
        if (isset($data[self::FIELD_METHOD])) {
            if ($data[self::FIELD_METHOD] instanceof FHIRCodeableConcept) {
                $this->setMethod($data[self::FIELD_METHOD]);
            } else {
                $this->setMethod(new FHIRCodeableConcept($data[self::FIELD_METHOD]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_CONTEXT])) {
            if ($data[self::FIELD_CONTEXT] instanceof FHIRReference) {
                $this->setContext($data[self::FIELD_CONTEXT]);
            } else {
                $this->setContext(new FHIRReference($data[self::FIELD_CONTEXT]));
            }
        }
        if (isset($data[self::FIELD_OCCURRENCE_DATE_TIME]) || isset($data[self::FIELD_OCCURRENCE_DATE_TIME_EXT])) {
            $value = isset($data[self::FIELD_OCCURRENCE_DATE_TIME]) ? $data[self::FIELD_OCCURRENCE_DATE_TIME] : null;
            $ext = (isset($data[self::FIELD_OCCURRENCE_DATE_TIME_EXT]) && is_array($data[self::FIELD_OCCURRENCE_DATE_TIME_EXT])) ? $ext = $data[self::FIELD_OCCURRENCE_DATE_TIME_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setOccurrenceDateTime($value);
                } else if (is_array($value)) {
                    $this->setOccurrenceDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setOccurrenceDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOccurrenceDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_OCCURRENCE_PERIOD])) {
            if ($data[self::FIELD_OCCURRENCE_PERIOD] instanceof FHIRPeriod) {
                $this->setOccurrencePeriod($data[self::FIELD_OCCURRENCE_PERIOD]);
            } else {
                $this->setOccurrencePeriod(new FHIRPeriod($data[self::FIELD_OCCURRENCE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_CONDITION])) {
            if ($data[self::FIELD_CONDITION] instanceof FHIRReference) {
                $this->setCondition($data[self::FIELD_CONDITION]);
            } else {
                $this->setCondition(new FHIRReference($data[self::FIELD_CONDITION]));
            }
        }
        if (isset($data[self::FIELD_PERFORMER])) {
            if ($data[self::FIELD_PERFORMER] instanceof FHIRReference) {
                $this->setPerformer($data[self::FIELD_PERFORMER]);
            } else {
                $this->setPerformer(new FHIRReference($data[self::FIELD_PERFORMER]));
            }
        }
        if (isset($data[self::FIELD_REASON_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_REASON_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setReasonCodeableConcept($data[self::FIELD_REASON_CODEABLE_CONCEPT]);
            } else {
                $this->setReasonCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_REASON_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_REASON_REFERENCE])) {
            if ($data[self::FIELD_REASON_REFERENCE] instanceof FHIRReference) {
                $this->setReasonReference($data[self::FIELD_REASON_REFERENCE]);
            } else {
                $this->setReasonReference(new FHIRReference($data[self::FIELD_REASON_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_BASIS])) {
            if (is_array($data[self::FIELD_BASIS])) {
                foreach($data[self::FIELD_BASIS] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addBasis($v);
                    } else {
                        $this->addBasis(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_BASIS] instanceof FHIRReference) {
                $this->addBasis($data[self::FIELD_BASIS]);
            } else {
                $this->addBasis(new FHIRReference($data[self::FIELD_BASIS]));
            }
        }
        if (isset($data[self::FIELD_PREDICTION])) {
            if (is_array($data[self::FIELD_PREDICTION])) {
                foreach($data[self::FIELD_PREDICTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRRiskAssessmentPrediction) {
                        $this->addPrediction($v);
                    } else {
                        $this->addPrediction(new FHIRRiskAssessmentPrediction($v));
                    }
                }
            } elseif ($data[self::FIELD_PREDICTION] instanceof FHIRRiskAssessmentPrediction) {
                $this->addPrediction($data[self::FIELD_PREDICTION]);
            } else {
                $this->addPrediction(new FHIRRiskAssessmentPrediction($data[self::FIELD_PREDICTION]));
            }
        }
        if (isset($data[self::FIELD_MITIGATION]) || isset($data[self::FIELD_MITIGATION_EXT])) {
            $value = isset($data[self::FIELD_MITIGATION]) ? $data[self::FIELD_MITIGATION] : null;
            $ext = (isset($data[self::FIELD_MITIGATION_EXT]) && is_array($data[self::FIELD_MITIGATION_EXT])) ? $ext = $data[self::FIELD_MITIGATION_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setMitigation($value);
                } else if (is_array($value)) {
                    $this->setMitigation(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setMitigation(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMitigation(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_COMMENT]) || isset($data[self::FIELD_COMMENT_EXT])) {
            $value = isset($data[self::FIELD_COMMENT]) ? $data[self::FIELD_COMMENT] : null;
            $ext = (isset($data[self::FIELD_COMMENT_EXT]) && is_array($data[self::FIELD_COMMENT_EXT])) ? $ext = $data[self::FIELD_COMMENT_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setComment($value);
                } else if (is_array($value)) {
                    $this->setComment(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setComment(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setComment(new FHIRString($ext));
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
        if ('' !==  $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<RiskAssessment{$xmlns}></RiskAssessment>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier assigned to the risk assessment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
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
     * Business identifier assigned to the risk assessment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->_trackValueSet($this->identifier, $identifier);
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the request that is fulfilled by this risk assessment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the request that is fulfilled by this risk assessment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $basedOn
     * @return static
     */
    public function setBasedOn(FHIRReference $basedOn = null)
    {
        $this->_trackValueSet($this->basedOn, $basedOn);
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a resource that this risk assessment is part of, such as a
     * Procedure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a resource that this risk assessment is part of, such as a
     * Procedure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $parent
     * @return static
     */
    public function setParent(FHIRReference $parent = null)
    {
        $this->_trackValueSet($this->parent, $parent);
        $this->parent = $parent;
        return $this;
    }

    /**
     * Indicates the status of the identified issue
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the RiskAssessment, using the same statuses as an Observation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRObservationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Indicates the status of the identified issue
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the RiskAssessment, using the same statuses as an Observation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRObservationStatus $status
     * @return static
     */
    public function setStatus(FHIRObservationStatus $status = null)
    {
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
     * The algorithm, process or mechanism used to evaluate the risk.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The algorithm, process or mechanism used to evaluate the risk.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $method
     * @return static
     */
    public function setMethod(FHIRCodeableConcept $method = null)
    {
        $this->_trackValueSet($this->method, $method);
        $this->method = $method;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of the risk assessment performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
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
     * The type of the risk assessment performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        $this->_trackValueSet($this->code, $code);
        $this->code = $code;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient or group the risk assessment applies to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
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
     * The patient or group the risk assessment applies to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function setSubject(FHIRReference $subject = null)
    {
        $this->_trackValueSet($this->subject, $subject);
        $this->subject = $subject;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter where the assessment was performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter where the assessment was performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $context
     * @return static
     */
    public function setContext(FHIRReference $context = null)
    {
        $this->_trackValueSet($this->context, $context);
        $this->context = $context;
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
     * The date (and possibly time) the risk assessment was performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime()
    {
        return $this->occurrenceDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and possibly time) the risk assessment was performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $occurrenceDateTime
     * @return static
     */
    public function setOccurrenceDateTime($occurrenceDateTime = null)
    {
        if (null !== $occurrenceDateTime && !($occurrenceDateTime instanceof FHIRDateTime)) {
            $occurrenceDateTime = new FHIRDateTime($occurrenceDateTime);
        }
        $this->_trackValueSet($this->occurrenceDateTime, $occurrenceDateTime);
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date (and possibly time) the risk assessment was performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    public function getOccurrencePeriod()
    {
        return $this->occurrencePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date (and possibly time) the risk assessment was performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $occurrencePeriod
     * @return static
     */
    public function setOccurrencePeriod(FHIRPeriod $occurrencePeriod = null)
    {
        $this->_trackValueSet($this->occurrencePeriod, $occurrencePeriod);
        $this->occurrencePeriod = $occurrencePeriod;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For assessments or prognosis specific to a particular condition, indicates the
     * condition being assessed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For assessments or prognosis specific to a particular condition, indicates the
     * condition being assessed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $condition
     * @return static
     */
    public function setCondition(FHIRReference $condition = null)
    {
        $this->_trackValueSet($this->condition, $condition);
        $this->condition = $condition;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The provider or software application that performed the assessment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
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
     * The provider or software application that performed the assessment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $performer
     * @return static
     */
    public function setPerformer(FHIRReference $performer = null)
    {
        $this->_trackValueSet($this->performer, $performer);
        $this->performer = $performer;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason the risk assessment was performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCodeableConcept()
    {
        return $this->reasonCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason the risk assessment was performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $reasonCodeableConcept
     * @return static
     */
    public function setReasonCodeableConcept(FHIRCodeableConcept $reasonCodeableConcept = null)
    {
        $this->_trackValueSet($this->reasonCodeableConcept, $reasonCodeableConcept);
        $this->reasonCodeableConcept = $reasonCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason the risk assessment was performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason the risk assessment was performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $reasonReference
     * @return static
     */
    public function setReasonReference(FHIRReference $reasonReference = null)
    {
        $this->_trackValueSet($this->reasonReference, $reasonReference);
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the source data considered as part of the assessment (FamilyHistory,
     * Observations, Procedures, Conditions, etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getBasis()
    {
        return $this->basis;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the source data considered as part of the assessment (FamilyHistory,
     * Observations, Procedures, Conditions, etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $basis
     * @return static
     */
    public function addBasis(FHIRReference $basis = null)
    {
        $this->_trackValueAdded();
        $this->basis[] = $basis;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the source data considered as part of the assessment (FamilyHistory,
     * Observations, Procedures, Conditions, etc.).
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $basis
     * @return static
     */
    public function setBasis(array $basis = [])
    {
        if ([] !== $this->basis) {
            $this->_trackValuesRemoved(count($this->basis));
            $this->basis = [];
        }
        if ([] === $basis) {
            return $this;
        }
        foreach($basis as $v) {
            if ($v instanceof FHIRReference) {
                $this->addBasis($v);
            } else {
                $this->addBasis(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * An assessment of the likely outcome(s) for a patient or other subject as well as
     * the likelihood of each outcome.
     *
     * Describes the expected outcome for the subject.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction[]
     */
    public function getPrediction()
    {
        return $this->prediction;
    }

    /**
     * An assessment of the likely outcome(s) for a patient or other subject as well as
     * the likelihood of each outcome.
     *
     * Describes the expected outcome for the subject.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction $prediction
     * @return static
     */
    public function addPrediction(FHIRRiskAssessmentPrediction $prediction = null)
    {
        $this->_trackValueAdded();
        $this->prediction[] = $prediction;
        return $this;
    }

    /**
     * An assessment of the likely outcome(s) for a patient or other subject as well as
     * the likelihood of each outcome.
     *
     * Describes the expected outcome for the subject.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction[] $prediction
     * @return static
     */
    public function setPrediction(array $prediction = [])
    {
        if ([] !== $this->prediction) {
            $this->_trackValuesRemoved(count($this->prediction));
            $this->prediction = [];
        }
        if ([] === $prediction) {
            return $this;
        }
        foreach($prediction as $v) {
            if ($v instanceof FHIRRiskAssessmentPrediction) {
                $this->addPrediction($v);
            } else {
                $this->addPrediction(new FHIRRiskAssessmentPrediction($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the steps that might be taken to reduce the identified risk(s).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getMitigation()
    {
        return $this->mitigation;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the steps that might be taken to reduce the identified risk(s).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $mitigation
     * @return static
     */
    public function setMitigation($mitigation = null)
    {
        if (null !== $mitigation && !($mitigation instanceof FHIRString)) {
            $mitigation = new FHIRString($mitigation);
        }
        $this->_trackValueSet($this->mitigation, $mitigation);
        $this->mitigation = $mitigation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional comments about the risk assessment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional comments about the risk assessment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $comment
     * @return static
     */
    public function setComment($comment = null)
    {
        if (null !== $comment && !($comment instanceof FHIRString)) {
            $comment = new FHIRString($comment);
        }
        $this->_trackValueSet($this->comment, $comment);
        $this->comment = $comment;
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
        if (null !== ($v = $this->getIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBasedOn())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BASED_ON] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getParent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMethod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_METHOD] = $fieldErrs;
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
        if (null !== ($v = $this->getContext())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTEXT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRENCE_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOccurrencePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRENCE_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCondition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONDITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPerformer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERFORMER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReasonCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REASON_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReasonReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REASON_REFERENCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getBasis())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_BASIS, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPrediction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PREDICTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getMitigation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MITIGATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getComment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMMENT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT, self::FIELD_BASED_ON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASED_ON])) {
                        $errs[self::FIELD_BASED_ON] = [];
                    }
                    $errs[self::FIELD_BASED_ON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARENT])) {
            $v = $this->getParent();
            foreach($validationRules[self::FIELD_PARENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT, self::FIELD_PARENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARENT])) {
                        $errs[self::FIELD_PARENT] = [];
                    }
                    $errs[self::FIELD_PARENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_METHOD])) {
            $v = $this->getMethod();
            foreach($validationRules[self::FIELD_METHOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT, self::FIELD_METHOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_METHOD])) {
                        $errs[self::FIELD_METHOD] = [];
                    }
                    $errs[self::FIELD_METHOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT, self::FIELD_CODE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTEXT])) {
            $v = $this->getContext();
            foreach($validationRules[self::FIELD_CONTEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT, self::FIELD_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTEXT])) {
                        $errs[self::FIELD_CONTEXT] = [];
                    }
                    $errs[self::FIELD_CONTEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_DATE_TIME])) {
            $v = $this->getOccurrenceDateTime();
            foreach($validationRules[self::FIELD_OCCURRENCE_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT, self::FIELD_OCCURRENCE_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_DATE_TIME])) {
                        $errs[self::FIELD_OCCURRENCE_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_PERIOD])) {
            $v = $this->getOccurrencePeriod();
            foreach($validationRules[self::FIELD_OCCURRENCE_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT, self::FIELD_OCCURRENCE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_PERIOD])) {
                        $errs[self::FIELD_OCCURRENCE_PERIOD] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONDITION])) {
            $v = $this->getCondition();
            foreach($validationRules[self::FIELD_CONDITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT, self::FIELD_CONDITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONDITION])) {
                        $errs[self::FIELD_CONDITION] = [];
                    }
                    $errs[self::FIELD_CONDITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMER])) {
            $v = $this->getPerformer();
            foreach($validationRules[self::FIELD_PERFORMER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT, self::FIELD_PERFORMER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER])) {
                        $errs[self::FIELD_PERFORMER] = [];
                    }
                    $errs[self::FIELD_PERFORMER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_CODEABLE_CONCEPT])) {
            $v = $this->getReasonCodeableConcept();
            foreach($validationRules[self::FIELD_REASON_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT, self::FIELD_REASON_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_REASON_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_REASON_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_REFERENCE])) {
            $v = $this->getReasonReference();
            foreach($validationRules[self::FIELD_REASON_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT, self::FIELD_REASON_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_REFERENCE])) {
                        $errs[self::FIELD_REASON_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REASON_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BASIS])) {
            $v = $this->getBasis();
            foreach($validationRules[self::FIELD_BASIS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT, self::FIELD_BASIS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASIS])) {
                        $errs[self::FIELD_BASIS] = [];
                    }
                    $errs[self::FIELD_BASIS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PREDICTION])) {
            $v = $this->getPrediction();
            foreach($validationRules[self::FIELD_PREDICTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT, self::FIELD_PREDICTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PREDICTION])) {
                        $errs[self::FIELD_PREDICTION] = [];
                    }
                    $errs[self::FIELD_PREDICTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MITIGATION])) {
            $v = $this->getMitigation();
            foreach($validationRules[self::FIELD_MITIGATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT, self::FIELD_MITIGATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MITIGATION])) {
                        $errs[self::FIELD_MITIGATION] = [];
                    }
                    $errs[self::FIELD_MITIGATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMMENT])) {
            $v = $this->getComment();
            foreach($validationRules[self::FIELD_COMMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT, self::FIELD_COMMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMMENT])) {
                        $errs[self::FIELD_COMMENT] = [];
                    }
                    $errs[self::FIELD_COMMENT][$rule] = $err;
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
     * @param null|string|\DOMElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRRiskAssessment $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRRiskAssessment
     */
    public static function xmlUnserialize($element = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            return null;
        }
        if (is_string($element)) {
            libxml_use_internal_errors(true);
            $dom = new \DOMDocument();
            $dom->loadXML($element, $libxmlOpts);
            if (false === $dom) {
                throw new \DomainException(sprintf('FHIRRiskAssessment::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRRiskAssessment::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRRiskAssessment(null);
        } elseif (!is_object($type) || !($type instanceof FHIRRiskAssessment)) {
            throw new \RuntimeException(sprintf(
                'FHIRRiskAssessment::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRRiskAssessment or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        if ('' === $type->_getFHIRXMLNamespace() && (null === $element->parentNode || $element->namespaceURI !== $element->parentNode->namespaceURI)) {
            $type->_setFHIRXMLNamespace($element->namespaceURI);
        }
        for($i = 0; $i < $element->childNodes->length; $i++) {
            $n = $element->childNodes->item($i);
            if (!($n instanceof \DOMElement)) {
                continue;
            }
            if (self::FIELD_IDENTIFIER === $n->nodeName) {
                $type->setIdentifier(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_BASED_ON === $n->nodeName) {
                $type->setBasedOn(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_PARENT === $n->nodeName) {
                $type->setParent(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIRObservationStatus::xmlUnserialize($n));
            } elseif (self::FIELD_METHOD === $n->nodeName) {
                $type->setMethod(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_CODE === $n->nodeName) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SUBJECT === $n->nodeName) {
                $type->setSubject(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_CONTEXT === $n->nodeName) {
                $type->setContext(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_OCCURRENCE_DATE_TIME === $n->nodeName) {
                $type->setOccurrenceDateTime(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_OCCURRENCE_PERIOD === $n->nodeName) {
                $type->setOccurrencePeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_CONDITION === $n->nodeName) {
                $type->setCondition(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_PERFORMER === $n->nodeName) {
                $type->setPerformer(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_REASON_CODEABLE_CONCEPT === $n->nodeName) {
                $type->setReasonCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_REASON_REFERENCE === $n->nodeName) {
                $type->setReasonReference(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_BASIS === $n->nodeName) {
                $type->addBasis(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_PREDICTION === $n->nodeName) {
                $type->addPrediction(FHIRRiskAssessmentPrediction::xmlUnserialize($n));
            } elseif (self::FIELD_MITIGATION === $n->nodeName) {
                $type->setMitigation(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_COMMENT === $n->nodeName) {
                $type->setComment(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_TEXT === $n->nodeName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n));
            } elseif (self::FIELD_CONTAINED === $n->nodeName) {
                for ($ni = 0; $ni < $n->childNodes->length; $ni++) {
                    $nn = $n->childNodes->item($ni);
                    if ($nn instanceof \DOMElement) {
                        $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn));
                    }
                }
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRId::xmlUnserialize($n));
            } elseif (self::FIELD_META === $n->nodeName) {
                $type->setMeta(FHIRMeta::xmlUnserialize($n));
            } elseif (self::FIELD_IMPLICIT_RULES === $n->nodeName) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_LANGUAGE === $n->nodeName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_OCCURRENCE_DATE_TIME);
        if (null !== $n) {
            $pt = $type->getOccurrenceDateTime();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setOccurrenceDateTime($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_MITIGATION);
        if (null !== $n) {
            $pt = $type->getMitigation();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setMitigation($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_COMMENT);
        if (null !== $n) {
            $pt = $type->getComment();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setComment($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ID);
        if (null !== $n) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setId($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_IMPLICIT_RULES);
        if (null !== $n) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setImplicitRules($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LANGUAGE);
        if (null !== $n) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLanguage($n->nodeValue);
            }
        }
        return $type;
    }

    /**
     * @param null|\DOMElement $element
     * @param null|int $libxmlOpts
     * @return \DOMElement
     */
    public function xmlSerialize(\DOMElement $element = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            $dom = new \DOMDocument();
            $dom->loadXML($this->_getFHIRXMLElementDefinition(), $libxmlOpts);
            $element = $dom->documentElement;
        } elseif (null === $element->namespaceURI && '' !== ($xmlns = $this->_getFHIRXMLNamespace())) {
            $element->setAttribute('xmlns', $xmlns);
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getIdentifier())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_IDENTIFIER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getBasedOn())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_BASED_ON);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getParent())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PARENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getMethod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_METHOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCode())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CODE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSubject())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SUBJECT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getContext())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CONTEXT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OCCURRENCE_DATE_TIME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOccurrencePeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OCCURRENCE_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCondition())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CONDITION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPerformer())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PERFORMER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getReasonCodeableConcept())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REASON_CODEABLE_CONCEPT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getReasonReference())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REASON_REFERENCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getBasis())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_BASIS);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getPrediction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PREDICTION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getMitigation())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MITIGATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getComment())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_COMMENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        return $element;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getBasedOn())) {
            $a[self::FIELD_BASED_ON] = $v;
        }
        if (null !== ($v = $this->getParent())) {
            $a[self::FIELD_PARENT] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_STATUS] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRObservationStatus::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_STATUS_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getMethod())) {
            $a[self::FIELD_METHOD] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a[self::FIELD_CONTEXT] = $v;
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_OCCURRENCE_DATE_TIME] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDateTime::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_OCCURRENCE_DATE_TIME_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getOccurrencePeriod())) {
            $a[self::FIELD_OCCURRENCE_PERIOD] = $v;
        }
        if (null !== ($v = $this->getCondition())) {
            $a[self::FIELD_CONDITION] = $v;
        }
        if (null !== ($v = $this->getPerformer())) {
            $a[self::FIELD_PERFORMER] = $v;
        }
        if (null !== ($v = $this->getReasonCodeableConcept())) {
            $a[self::FIELD_REASON_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getReasonReference())) {
            $a[self::FIELD_REASON_REFERENCE] = $v;
        }
        if ([] !== ($vs = $this->getBasis())) {
            $a[self::FIELD_BASIS] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_BASIS][] = $v;
            }
        }
        if ([] !== ($vs = $this->getPrediction())) {
            $a[self::FIELD_PREDICTION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PREDICTION][] = $v;
            }
        }
        if (null !== ($v = $this->getMitigation())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MITIGATION] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_MITIGATION_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getComment())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_COMMENT] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_COMMENT_EXT] = $ext;
            }
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
<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRConditionClinicalStatusCodes;
use PHPFHIRGenerated\FHIRElement\FHIRConditionVerificationStatus;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge;
use PHPFHIRGenerated\FHIRElement\FHIRRange;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A clinical condition, problem, diagnosis, or other event, situation, issue, or clinical concept that has risen to a level of concern.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRCondition
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRCondition extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Condition';

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    private $abatementAge = null;

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $abatementBoolean = null;

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $abatementDateTime = null;

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $abatementPeriod = null;

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    private $abatementRange = null;

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $abatementString = null;

    /**
     * The date on which the existance of the Condition was first asserted or acknowledged.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $assertedDate = null;

    /**
     * Individual who is making the condition statement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $asserter = null;

    /**
     * The anatomical location where this condition manifests itself.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $bodySite = [];

    /**
     * A category assigned to the condition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $category = [];

    /**
     * The clinical status of the condition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRConditionClinicalStatusCodes
     */
    private $clinicalStatus = null;

    /**
     * Identification of the condition, problem or diagnosis.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $code = null;

    /**
     * Encounter during which the condition was first asserted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $context = null;

    /**
     * Supporting Evidence / manifestations that are the basis on which this condition is suspected or confirmed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence[]
     */
    private $evidence = [];

    /**
     * This records identifiers associated with this condition that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * Additional information about the Condition. This is a general notes/comments entry  for description of the Condition, its diagnosis and prognosis.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    private $note = [];

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    private $onsetAge = null;

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $onsetDateTime = null;

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $onsetPeriod = null;

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    private $onsetRange = null;

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $onsetString = null;

    /**
     * A subjective assessment of the severity of the condition as evaluated by the clinician.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $severity = null;

    /**
     * Clinical stage or grade of a condition. May include formal severity assessments.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage
     */
    private $stage = null;

    /**
     * Indicates the patient or group who the condition record is associated with.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $subject = null;

    /**
     * The verification status to support the clinical status of the condition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRConditionVerificationStatus
     */
    private $verificationStatus = null;

    /**
     * FHIRCondition Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['abatementAge'])) {
                $value = $data['abatementAge'];
                if (is_array($value)) {
                    $value = new FHIRAge($value);
                } 
                if (!($value instanceof FHIRAge)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition::__construct - Property \"abatementAge\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge or data to construct type, saw ".gettype($value));
                }
                $this->setAbatementAge($value);
            }
            if (isset($data['abatementBoolean'])) {
                $value = $data['abatementBoolean'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition::__construct - Property \"abatementBoolean\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value));
                }
                $this->setAbatementBoolean($value);
            }
            if (isset($data['abatementDateTime'])) {
                $value = $data['abatementDateTime'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition::__construct - Property \"abatementDateTime\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value));
                }
                $this->setAbatementDateTime($value);
            }
            if (isset($data['abatementPeriod'])) {
                $value = $data['abatementPeriod'];
                if (is_array($value)) {
                    $value = new FHIRPeriod($value);
                } 
                if (!($value instanceof FHIRPeriod)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition::__construct - Property \"abatementPeriod\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPeriod or data to construct type, saw ".gettype($value));
                }
                $this->setAbatementPeriod($value);
            }
            if (isset($data['abatementRange'])) {
                $value = $data['abatementRange'];
                if (is_array($value)) {
                    $value = new FHIRRange($value);
                } 
                if (!($value instanceof FHIRRange)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition::__construct - Property \"abatementRange\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRRange or data to construct type, saw ".gettype($value));
                }
                $this->setAbatementRange($value);
            }
            if (isset($data['abatementString'])) {
                $value = $data['abatementString'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition::__construct - Property \"abatementString\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setAbatementString($value);
            }
            if (isset($data['assertedDate'])) {
                $value = $data['assertedDate'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition::__construct - Property \"assertedDate\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value));
                }
                $this->setAssertedDate($value);
            }
            if (isset($data['asserter'])) {
                $value = $data['asserter'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition::__construct - Property \"asserter\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setAsserter($value);
            }
            if (isset($data['bodySite'])) {
                $value = $data['bodySite'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCodeableConcept($v);
                        } 
                        if (!($v instanceof FHIRCodeableConcept)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition::__construct - Collection field \"bodySite\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($v));
                        }
                        $this->addBodySite($v);
                    }
                }
            }
            if (isset($data['category'])) {
                $value = $data['category'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCodeableConcept($v);
                        } 
                        if (!($v instanceof FHIRCodeableConcept)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition::__construct - Collection field \"category\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($v));
                        }
                        $this->addCategory($v);
                    }
                }
            }
            if (isset($data['clinicalStatus'])) {
                $value = $data['clinicalStatus'];
                if (is_array($value)) {
                    $value = new FHIRConditionClinicalStatusCodes($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRConditionClinicalStatusCodes($value);
                }
                if (!($value instanceof FHIRConditionClinicalStatusCodes)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition::__construct - Property \"clinicalStatus\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRConditionClinicalStatusCodes or data to construct type, saw ".gettype($value));
                }
                $this->setClinicalStatus($value);
            }
            if (isset($data['code'])) {
                $value = $data['code'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition::__construct - Property \"code\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setCode($value);
            }
            if (isset($data['context'])) {
                $value = $data['context'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition::__construct - Property \"context\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setContext($value);
            }
            if (isset($data['evidence'])) {
                $value = $data['evidence'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRConditionEvidence($v);
                        } 
                        if (!($v instanceof FHIRConditionEvidence)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition::__construct - Collection field \"evidence\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence or data to construct type, saw ".gettype($v));
                        }
                        $this->addEvidence($v);
                    }
                }
            }
            if (isset($data['identifier'])) {
                $value = $data['identifier'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRIdentifier($v);
                        } 
                        if (!($v instanceof FHIRIdentifier)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition::__construct - Collection field \"identifier\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRIdentifier or data to construct type, saw ".gettype($v));
                        }
                        $this->addIdentifier($v);
                    }
                }
            }
            if (isset($data['note'])) {
                $value = $data['note'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRAnnotation($v);
                        } 
                        if (!($v instanceof FHIRAnnotation)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition::__construct - Collection field \"note\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAnnotation or data to construct type, saw ".gettype($v));
                        }
                        $this->addNote($v);
                    }
                }
            }
            if (isset($data['onsetAge'])) {
                $value = $data['onsetAge'];
                if (is_array($value)) {
                    $value = new FHIRAge($value);
                } 
                if (!($value instanceof FHIRAge)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition::__construct - Property \"onsetAge\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge or data to construct type, saw ".gettype($value));
                }
                $this->setOnsetAge($value);
            }
            if (isset($data['onsetDateTime'])) {
                $value = $data['onsetDateTime'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition::__construct - Property \"onsetDateTime\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value));
                }
                $this->setOnsetDateTime($value);
            }
            if (isset($data['onsetPeriod'])) {
                $value = $data['onsetPeriod'];
                if (is_array($value)) {
                    $value = new FHIRPeriod($value);
                } 
                if (!($value instanceof FHIRPeriod)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition::__construct - Property \"onsetPeriod\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPeriod or data to construct type, saw ".gettype($value));
                }
                $this->setOnsetPeriod($value);
            }
            if (isset($data['onsetRange'])) {
                $value = $data['onsetRange'];
                if (is_array($value)) {
                    $value = new FHIRRange($value);
                } 
                if (!($value instanceof FHIRRange)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition::__construct - Property \"onsetRange\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRRange or data to construct type, saw ".gettype($value));
                }
                $this->setOnsetRange($value);
            }
            if (isset($data['onsetString'])) {
                $value = $data['onsetString'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition::__construct - Property \"onsetString\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setOnsetString($value);
            }
            if (isset($data['severity'])) {
                $value = $data['severity'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition::__construct - Property \"severity\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setSeverity($value);
            }
            if (isset($data['stage'])) {
                $value = $data['stage'];
                if (is_array($value)) {
                    $value = new FHIRConditionStage($value);
                } 
                if (!($value instanceof FHIRConditionStage)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition::__construct - Property \"stage\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage or data to construct type, saw ".gettype($value));
                }
                $this->setStage($value);
            }
            if (isset($data['subject'])) {
                $value = $data['subject'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition::__construct - Property \"subject\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setSubject($value);
            }
            if (isset($data['verificationStatus'])) {
                $value = $data['verificationStatus'];
                if (is_array($value)) {
                    $value = new FHIRConditionVerificationStatus($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRConditionVerificationStatus($value);
                }
                if (!($value instanceof FHIRConditionVerificationStatus)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition::__construct - Property \"verificationStatus\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRConditionVerificationStatus or data to construct type, saw ".gettype($value));
                }
                $this->setVerificationStatus($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     * @return $this
     */
    public function setAbatementAge(FHIRAge $abatementAge = null)
    {
        if (null === $abatementAge) {
            return $this; 
        }
        $this->abatementAge = $abatementAge;
        return $this;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getAbatementAge()
    {
        return $this->abatementAge;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setAbatementBoolean($abatementBoolean)
    {
        if (null === $abatementBoolean) {
            return $this; 
        }
        if (is_scalar($abatementBoolean)) {
            $abatementBoolean = new FHIRBoolean($abatementBoolean);
        }
        if (!($abatementBoolean instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCondition::setAbatementBoolean - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($abatementBoolean)
            ));
        }
        $this->abatementBoolean = $abatementBoolean;
        return $this;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAbatementBoolean()
    {
        return $this->abatementBoolean;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setAbatementDateTime($abatementDateTime)
    {
        if (null === $abatementDateTime) {
            return $this; 
        }
        if (is_scalar($abatementDateTime)) {
            $abatementDateTime = new FHIRDateTime($abatementDateTime);
        }
        if (!($abatementDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCondition::setAbatementDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($abatementDateTime)
            ));
        }
        $this->abatementDateTime = $abatementDateTime;
        return $this;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getAbatementDateTime()
    {
        return $this->abatementDateTime;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setAbatementPeriod(FHIRPeriod $abatementPeriod = null)
    {
        if (null === $abatementPeriod) {
            return $this; 
        }
        $this->abatementPeriod = $abatementPeriod;
        return $this;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getAbatementPeriod()
    {
        return $this->abatementPeriod;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setAbatementRange(FHIRRange $abatementRange = null)
    {
        if (null === $abatementRange) {
            return $this; 
        }
        $this->abatementRange = $abatementRange;
        return $this;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getAbatementRange()
    {
        return $this->abatementRange;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setAbatementString($abatementString)
    {
        if (null === $abatementString) {
            return $this; 
        }
        if (is_scalar($abatementString)) {
            $abatementString = new FHIRString($abatementString);
        }
        if (!($abatementString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCondition::setAbatementString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($abatementString)
            ));
        }
        $this->abatementString = $abatementString;
        return $this;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAbatementString()
    {
        return $this->abatementString;
    }

    /**
     * The date on which the existance of the Condition was first asserted or acknowledged.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setAssertedDate($assertedDate)
    {
        if (null === $assertedDate) {
            return $this; 
        }
        if (is_scalar($assertedDate)) {
            $assertedDate = new FHIRDateTime($assertedDate);
        }
        if (!($assertedDate instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCondition::setAssertedDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($assertedDate)
            ));
        }
        $this->assertedDate = $assertedDate;
        return $this;
    }

    /**
     * The date on which the existance of the Condition was first asserted or acknowledged.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getAssertedDate()
    {
        return $this->assertedDate;
    }

    /**
     * Individual who is making the condition statement.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setAsserter(FHIRReference $asserter = null)
    {
        if (null === $asserter) {
            return $this; 
        }
        $this->asserter = $asserter;
        return $this;
    }

    /**
     * Individual who is making the condition statement.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAsserter()
    {
        return $this->asserter;
    }

    /**
     * The anatomical location where this condition manifests itself.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function addBodySite(FHIRCodeableConcept $bodySite = null)
    {
        if (null === $bodySite) {
            return $this; 
        }
        $this->bodySite[] = $bodySite;
        return $this;
    }

    /**
     * The anatomical location where this condition manifests itself.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * A category assigned to the condition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function addCategory(FHIRCodeableConcept $category = null)
    {
        if (null === $category) {
            return $this; 
        }
        $this->category[] = $category;
        return $this;
    }

    /**
     * A category assigned to the condition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * The clinical status of the condition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRConditionClinicalStatusCodes
     * @return $this
     */
    public function setClinicalStatus($clinicalStatus)
    {
        if (null === $clinicalStatus) {
            return $this; 
        }
        if (is_scalar($clinicalStatus)) {
            $clinicalStatus = new FHIRConditionClinicalStatusCodes($clinicalStatus);
        }
        if (!($clinicalStatus instanceof FHIRConditionClinicalStatusCodes)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCondition::setClinicalStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRConditionClinicalStatusCodes or appropriate scalar value, %s seen.',
                gettype($clinicalStatus)
            ));
        }
        $this->clinicalStatus = $clinicalStatus;
        return $this;
    }

    /**
     * The clinical status of the condition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRConditionClinicalStatusCodes
     */
    public function getClinicalStatus()
    {
        return $this->clinicalStatus;
    }

    /**
     * Identification of the condition, problem or diagnosis.
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
     * Identification of the condition, problem or diagnosis.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Encounter during which the condition was first asserted.
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
     * Encounter during which the condition was first asserted.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Supporting Evidence / manifestations that are the basis on which this condition is suspected or confirmed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence
     * @return $this
     */
    public function addEvidence(FHIRConditionEvidence $evidence = null)
    {
        if (null === $evidence) {
            return $this; 
        }
        $this->evidence[] = $evidence;
        return $this;
    }

    /**
     * Supporting Evidence / manifestations that are the basis on which this condition is suspected or confirmed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence[]
     */
    public function getEvidence()
    {
        return $this->evidence;
    }

    /**
     * This records identifiers associated with this condition that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * This records identifiers associated with this condition that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Additional information about the Condition. This is a general notes/comments entry  for description of the Condition, its diagnosis and prognosis.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function addNote(FHIRAnnotation $note = null)
    {
        if (null === $note) {
            return $this; 
        }
        $this->note[] = $note;
        return $this;
    }

    /**
     * Additional information about the Condition. This is a general notes/comments entry  for description of the Condition, its diagnosis and prognosis.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     * @return $this
     */
    public function setOnsetAge(FHIRAge $onsetAge = null)
    {
        if (null === $onsetAge) {
            return $this; 
        }
        $this->onsetAge = $onsetAge;
        return $this;
    }

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getOnsetAge()
    {
        return $this->onsetAge;
    }

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setOnsetDateTime($onsetDateTime)
    {
        if (null === $onsetDateTime) {
            return $this; 
        }
        if (is_scalar($onsetDateTime)) {
            $onsetDateTime = new FHIRDateTime($onsetDateTime);
        }
        if (!($onsetDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCondition::setOnsetDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($onsetDateTime)
            ));
        }
        $this->onsetDateTime = $onsetDateTime;
        return $this;
    }

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getOnsetDateTime()
    {
        return $this->onsetDateTime;
    }

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setOnsetPeriod(FHIRPeriod $onsetPeriod = null)
    {
        if (null === $onsetPeriod) {
            return $this; 
        }
        $this->onsetPeriod = $onsetPeriod;
        return $this;
    }

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getOnsetPeriod()
    {
        return $this->onsetPeriod;
    }

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setOnsetRange(FHIRRange $onsetRange = null)
    {
        if (null === $onsetRange) {
            return $this; 
        }
        $this->onsetRange = $onsetRange;
        return $this;
    }

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getOnsetRange()
    {
        return $this->onsetRange;
    }

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setOnsetString($onsetString)
    {
        if (null === $onsetString) {
            return $this; 
        }
        if (is_scalar($onsetString)) {
            $onsetString = new FHIRString($onsetString);
        }
        if (!($onsetString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCondition::setOnsetString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($onsetString)
            ));
        }
        $this->onsetString = $onsetString;
        return $this;
    }

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getOnsetString()
    {
        return $this->onsetString;
    }

    /**
     * A subjective assessment of the severity of the condition as evaluated by the clinician.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSeverity(FHIRCodeableConcept $severity = null)
    {
        if (null === $severity) {
            return $this; 
        }
        $this->severity = $severity;
        return $this;
    }

    /**
     * A subjective assessment of the severity of the condition as evaluated by the clinician.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Clinical stage or grade of a condition. May include formal severity assessments.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage
     * @return $this
     */
    public function setStage(FHIRConditionStage $stage = null)
    {
        if (null === $stage) {
            return $this; 
        }
        $this->stage = $stage;
        return $this;
    }

    /**
     * Clinical stage or grade of a condition. May include formal severity assessments.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * Indicates the patient or group who the condition record is associated with.
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
     * Indicates the patient or group who the condition record is associated with.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The verification status to support the clinical status of the condition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRConditionVerificationStatus
     * @return $this
     */
    public function setVerificationStatus($verificationStatus)
    {
        if (null === $verificationStatus) {
            return $this; 
        }
        if (is_scalar($verificationStatus)) {
            $verificationStatus = new FHIRConditionVerificationStatus($verificationStatus);
        }
        if (!($verificationStatus instanceof FHIRConditionVerificationStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCondition::setVerificationStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRConditionVerificationStatus or appropriate scalar value, %s seen.',
                gettype($verificationStatus)
            ));
        }
        $this->verificationStatus = $verificationStatus;
        return $this;
    }

    /**
     * The verification status to support the clinical status of the condition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRConditionVerificationStatus
     */
    public function getVerificationStatus()
    {
        return $this->verificationStatus;
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
        if (null !== ($v = $this->getAbatementAge())) {
            $a['abatementAge'] = $v;
        }
        if (null !== ($v = $this->getAbatementBoolean())) {
            $a['abatementBoolean'] = $v;
        }
        if (null !== ($v = $this->getAbatementDateTime())) {
            $a['abatementDateTime'] = $v;
        }
        if (null !== ($v = $this->getAbatementPeriod())) {
            $a['abatementPeriod'] = $v;
        }
        if (null !== ($v = $this->getAbatementRange())) {
            $a['abatementRange'] = $v;
        }
        if (null !== ($v = $this->getAbatementString())) {
            $a['abatementString'] = $v;
        }
        if (null !== ($v = $this->getAssertedDate())) {
            $a['assertedDate'] = $v;
        }
        if (null !== ($v = $this->getAsserter())) {
            $a['asserter'] = $v;
        }
        if (0 < count($values = $this->getBodySite())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['bodySite'] = $vs;
            }
        }
        if (0 < count($values = $this->getCategory())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['category'] = $vs;
            }
        }
        if (null !== ($v = $this->getClinicalStatus())) {
            $a['clinicalStatus'] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (0 < count($values = $this->getEvidence())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['evidence'] = $vs;
            }
        }
        if (0 < count($values = $this->getIdentifier())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['identifier'] = $vs;
            }
        }
        if (0 < count($values = $this->getNote())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['note'] = $vs;
            }
        }
        if (null !== ($v = $this->getOnsetAge())) {
            $a['onsetAge'] = $v;
        }
        if (null !== ($v = $this->getOnsetDateTime())) {
            $a['onsetDateTime'] = $v;
        }
        if (null !== ($v = $this->getOnsetPeriod())) {
            $a['onsetPeriod'] = $v;
        }
        if (null !== ($v = $this->getOnsetRange())) {
            $a['onsetRange'] = $v;
        }
        if (null !== ($v = $this->getOnsetString())) {
            $a['onsetString'] = $v;
        }
        if (null !== ($v = $this->getSeverity())) {
            $a['severity'] = $v;
        }
        if (null !== ($v = $this->getStage())) {
            $a['stage'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
        }
        if (null !== ($v = $this->getVerificationStatus())) {
            $a['verificationStatus'] = $v;
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
            $sxe = new \SimpleXMLElement('<Condition xmlns="http://hl7.org/fhir"></Condition>');
        }
        if (null !== ($v = $this->getAbatementAge())) {
            $v->xmlSerialize(true, $sxe->addChild('abatementAge'));
        }
        if (null !== ($v = $this->getAbatementBoolean())) {
            $v->xmlSerialize(true, $sxe->addChild('abatementBoolean'));
        }
        if (null !== ($v = $this->getAbatementDateTime())) {
            $v->xmlSerialize(true, $sxe->addChild('abatementDateTime'));
        }
        if (null !== ($v = $this->getAbatementPeriod())) {
            $v->xmlSerialize(true, $sxe->addChild('abatementPeriod'));
        }
        if (null !== ($v = $this->getAbatementRange())) {
            $v->xmlSerialize(true, $sxe->addChild('abatementRange'));
        }
        if (null !== ($v = $this->getAbatementString())) {
            $v->xmlSerialize(true, $sxe->addChild('abatementString'));
        }
        if (null !== ($v = $this->getAssertedDate())) {
            $v->xmlSerialize(true, $sxe->addChild('assertedDate'));
        }
        if (null !== ($v = $this->getAsserter())) {
            $v->xmlSerialize(true, $sxe->addChild('asserter'));
        }
        if (0 < count($values = $this->getBodySite())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('bodySite'));
                }
            }
        }
        if (0 < count($values = $this->getCategory())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('category'));
                }
            }
        }
        if (null !== ($v = $this->getClinicalStatus())) {
            $v->xmlSerialize(true, $sxe->addChild('clinicalStatus'));
        }
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize(true, $sxe->addChild('code'));
        }
        if (null !== ($v = $this->getContext())) {
            $v->xmlSerialize(true, $sxe->addChild('context'));
        }
        if (0 < count($values = $this->getEvidence())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('evidence'));
                }
            }
        }
        if (0 < count($values = $this->getIdentifier())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('identifier'));
                }
            }
        }
        if (0 < count($values = $this->getNote())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('note'));
                }
            }
        }
        if (null !== ($v = $this->getOnsetAge())) {
            $v->xmlSerialize(true, $sxe->addChild('onsetAge'));
        }
        if (null !== ($v = $this->getOnsetDateTime())) {
            $v->xmlSerialize(true, $sxe->addChild('onsetDateTime'));
        }
        if (null !== ($v = $this->getOnsetPeriod())) {
            $v->xmlSerialize(true, $sxe->addChild('onsetPeriod'));
        }
        if (null !== ($v = $this->getOnsetRange())) {
            $v->xmlSerialize(true, $sxe->addChild('onsetRange'));
        }
        if (null !== ($v = $this->getOnsetString())) {
            $v->xmlSerialize(true, $sxe->addChild('onsetString'));
        }
        if (null !== ($v = $this->getSeverity())) {
            $v->xmlSerialize(true, $sxe->addChild('severity'));
        }
        if (null !== ($v = $this->getStage())) {
            $v->xmlSerialize(true, $sxe->addChild('stage'));
        }
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize(true, $sxe->addChild('subject'));
        }
        if (null !== ($v = $this->getVerificationStatus())) {
            $v->xmlSerialize(true, $sxe->addChild('verificationStatus'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}
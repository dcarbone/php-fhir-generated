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

use PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender;
use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDate;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRFamilyHistoryStatus;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge;
use PHPFHIRGenerated\FHIRElement\FHIRRange;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Significant health events and conditions for a person related to the patient relevant in the context of care for the patient.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRFamilyMemberHistory
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRFamilyMemberHistory extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'FamilyMemberHistory';

    /**
     * The age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    private $ageAge = null;

    /**
     * The age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    private $ageRange = null;

    /**
     * The age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $ageString = null;

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    private $bornDate = null;

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $bornPeriod = null;

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $bornString = null;

    /**
     * The significant Conditions (or condition) that the family member had. This is a repeating section to allow a system to represent more than one condition per resource, though there is nothing stopping multiple resources - one per condition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition[]
     */
    private $condition = [];

    /**
     * The date (and possibly time) when the family member history was taken.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $date = null;

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    private $deceasedAge = null;

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $deceasedBoolean = null;

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    private $deceasedDate = null;

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    private $deceasedRange = null;

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $deceasedString = null;

    /**
     * A protocol or questionnaire that was adhered to in whole or in part by this event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $definition = [];

    /**
     * If true, indicates that the age value specified is an estimated value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $estimatedAge = null;

    /**
     * Administrative Gender - the gender that the relative is considered to have for administration and record keeping purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender
     */
    private $gender = null;

    /**
     * This records identifiers associated with this family member history record that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with the red hair".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $name = null;

    /**
     * If true, indicates the taking of an individual family member's history did not occur. The notDone element should not be used to document negated conditions, such as a family member that did not have a condition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $notDone = null;

    /**
     * Describes why the family member's history is absent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $notDoneReason = null;

    /**
     * This property allows a non condition-specific note to the made about the related person. Ideally, the note would be in the condition property, but this is not always possible.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    private $note = [];

    /**
     * The person who this history concerns.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $patient = null;

    /**
     * Describes why the family member history occurred in coded or textual form.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $reasonCode = [];

    /**
     * Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse that justifies this family member history event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $reasonReference = [];

    /**
     * The type of relationship this person has to the patient (father, mother, brother etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $relationship = null;

    /**
     * A code specifying the status of the record of the family history of a specific family member.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRFamilyHistoryStatus
     */
    private $status = null;

    /**
     * FHIRFamilyMemberHistory Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['ageAge'])) {
                $value = $data['ageAge'];
                if (is_array($value)) {
                    $value = new FHIRAge($value);
                } 
                if (!($value instanceof FHIRAge)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Property \"ageAge\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge or data to construct type, saw ".gettype($value)); 
                }
                $this->setAgeAge($value);
            }
            if (isset($data['ageRange'])) {
                $value = $data['ageRange'];
                if (is_array($value)) {
                    $value = new FHIRRange($value);
                } 
                if (!($value instanceof FHIRRange)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Property \"ageRange\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRRange or data to construct type, saw ".gettype($value)); 
                }
                $this->setAgeRange($value);
            }
            if (isset($data['ageString'])) {
                $value = $data['ageString'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Property \"ageString\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setAgeString($value);
            }
            if (isset($data['bornDate'])) {
                $value = $data['bornDate'];
                if (is_array($value)) {
                    $value = new FHIRDate($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDate($value);
                }
                if (!($value instanceof FHIRDate)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Property \"bornDate\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or data to construct type, saw ".gettype($value)); 
                }
                $this->setBornDate($value);
            }
            if (isset($data['bornPeriod'])) {
                $value = $data['bornPeriod'];
                if (is_array($value)) {
                    $value = new FHIRPeriod($value);
                } 
                if (!($value instanceof FHIRPeriod)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Property \"bornPeriod\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPeriod or data to construct type, saw ".gettype($value)); 
                }
                $this->setBornPeriod($value);
            }
            if (isset($data['bornString'])) {
                $value = $data['bornString'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Property \"bornString\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setBornString($value);
            }
            if (isset($data['condition'])) {
                $value = $data['condition'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRFamilyMemberHistoryCondition($v);
                        } 
                        if (!($v instanceof FHIRFamilyMemberHistoryCondition)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Collection field \"condition\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addCondition($v);
                    }
                }
            }
            if (isset($data['date'])) {
                $value = $data['date'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Property \"date\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value)); 
                }
                $this->setDate($value);
            }
            if (isset($data['deceasedAge'])) {
                $value = $data['deceasedAge'];
                if (is_array($value)) {
                    $value = new FHIRAge($value);
                } 
                if (!($value instanceof FHIRAge)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Property \"deceasedAge\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge or data to construct type, saw ".gettype($value)); 
                }
                $this->setDeceasedAge($value);
            }
            if (isset($data['deceasedBoolean'])) {
                $value = $data['deceasedBoolean'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Property \"deceasedBoolean\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value)); 
                }
                $this->setDeceasedBoolean($value);
            }
            if (isset($data['deceasedDate'])) {
                $value = $data['deceasedDate'];
                if (is_array($value)) {
                    $value = new FHIRDate($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDate($value);
                }
                if (!($value instanceof FHIRDate)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Property \"deceasedDate\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or data to construct type, saw ".gettype($value)); 
                }
                $this->setDeceasedDate($value);
            }
            if (isset($data['deceasedRange'])) {
                $value = $data['deceasedRange'];
                if (is_array($value)) {
                    $value = new FHIRRange($value);
                } 
                if (!($value instanceof FHIRRange)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Property \"deceasedRange\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRRange or data to construct type, saw ".gettype($value)); 
                }
                $this->setDeceasedRange($value);
            }
            if (isset($data['deceasedString'])) {
                $value = $data['deceasedString'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Property \"deceasedString\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setDeceasedString($value);
            }
            if (isset($data['definition'])) {
                $value = $data['definition'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRReference($v);
                        } 
                        if (!($v instanceof FHIRReference)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Collection field \"definition\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addDefinition($v);
                    }
                }
            }
            if (isset($data['estimatedAge'])) {
                $value = $data['estimatedAge'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Property \"estimatedAge\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value)); 
                }
                $this->setEstimatedAge($value);
            }
            if (isset($data['gender'])) {
                $value = $data['gender'];
                if (is_array($value)) {
                    $value = new FHIRAdministrativeGender($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRAdministrativeGender($value);
                }
                if (!($value instanceof FHIRAdministrativeGender)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Property \"gender\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender or data to construct type, saw ".gettype($value)); 
                }
                $this->setGender($value);
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
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Collection field \"identifier\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRIdentifier or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addIdentifier($v);
                    }
                }
            }
            if (isset($data['name'])) {
                $value = $data['name'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Property \"name\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setName($value);
            }
            if (isset($data['notDone'])) {
                $value = $data['notDone'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Property \"notDone\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value)); 
                }
                $this->setNotDone($value);
            }
            if (isset($data['notDoneReason'])) {
                $value = $data['notDoneReason'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Property \"notDoneReason\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value)); 
                }
                $this->setNotDoneReason($value);
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
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Collection field \"note\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAnnotation or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addNote($v);
                    }
                }
            }
            if (isset($data['patient'])) {
                $value = $data['patient'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Property \"patient\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setPatient($value);
            }
            if (isset($data['reasonCode'])) {
                $value = $data['reasonCode'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCodeableConcept($v);
                        } 
                        if (!($v instanceof FHIRCodeableConcept)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Collection field \"reasonCode\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addReasonCode($v);
                    }
                }
            }
            if (isset($data['reasonReference'])) {
                $value = $data['reasonReference'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRReference($v);
                        } 
                        if (!($v instanceof FHIRReference)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Collection field \"reasonReference\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addReasonReference($v);
                    }
                }
            }
            if (isset($data['relationship'])) {
                $value = $data['relationship'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Property \"relationship\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value)); 
                }
                $this->setRelationship($value);
            }
            if (isset($data['status'])) {
                $value = $data['status'];
                if (is_array($value)) {
                    $value = new FHIRFamilyHistoryStatus($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRFamilyHistoryStatus($value);
                }
                if (!($value instanceof FHIRFamilyHistoryStatus)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Property \"status\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRFamilyHistoryStatus or data to construct type, saw ".gettype($value)); 
                }
                $this->setStatus($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * The age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     * @return $this
     */
    public function setAgeAge(FHIRAge $ageAge = null)
    {
        if (null === $ageAge) {
            return $this; 
        }
        $this->ageAge = $ageAge;
        return $this;
    }

    /**
     * The age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getAgeAge()
    {
        return $this->ageAge;
    }

    /**
     * The age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setAgeRange(FHIRRange $ageRange = null)
    {
        if (null === $ageRange) {
            return $this; 
        }
        $this->ageRange = $ageRange;
        return $this;
    }

    /**
     * The age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getAgeRange()
    {
        return $this->ageRange;
    }

    /**
     * The age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setAgeString($ageString)
    {
        if (null === $ageString) {
            return $this; 
        }
        if (is_scalar($ageString)) {
            $ageString = new FHIRString($ageString);
        }
        if (!($ageString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRFamilyMemberHistory::setAgeString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($ageString)
            ));
        }
        $this->ageString = $ageString;
        return $this;
    }

    /**
     * The age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAgeString()
    {
        return $this->ageString;
    }

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setBornDate($bornDate)
    {
        if (null === $bornDate) {
            return $this; 
        }
        if (is_scalar($bornDate)) {
            $bornDate = new FHIRDate($bornDate);
        }
        if (!($bornDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRFamilyMemberHistory::setBornDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($bornDate)
            ));
        }
        $this->bornDate = $bornDate;
        return $this;
    }

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getBornDate()
    {
        return $this->bornDate;
    }

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setBornPeriod(FHIRPeriod $bornPeriod = null)
    {
        if (null === $bornPeriod) {
            return $this; 
        }
        $this->bornPeriod = $bornPeriod;
        return $this;
    }

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getBornPeriod()
    {
        return $this->bornPeriod;
    }

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setBornString($bornString)
    {
        if (null === $bornString) {
            return $this; 
        }
        if (is_scalar($bornString)) {
            $bornString = new FHIRString($bornString);
        }
        if (!($bornString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRFamilyMemberHistory::setBornString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($bornString)
            ));
        }
        $this->bornString = $bornString;
        return $this;
    }

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getBornString()
    {
        return $this->bornString;
    }

    /**
     * The significant Conditions (or condition) that the family member had. This is a repeating section to allow a system to represent more than one condition per resource, though there is nothing stopping multiple resources - one per condition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition
     * @return $this
     */
    public function addCondition(FHIRFamilyMemberHistoryCondition $condition = null)
    {
        if (null === $condition) {
            return $this; 
        }
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * The significant Conditions (or condition) that the family member had. This is a repeating section to allow a system to represent more than one condition per resource, though there is nothing stopping multiple resources - one per condition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * The date (and possibly time) when the family member history was taken.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setDate($date)
    {
        if (null === $date) {
            return $this; 
        }
        if (is_scalar($date)) {
            $date = new FHIRDateTime($date);
        }
        if (!($date instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRFamilyMemberHistory::setDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($date)
            ));
        }
        $this->date = $date;
        return $this;
    }

    /**
     * The date (and possibly time) when the family member history was taken.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     * @return $this
     */
    public function setDeceasedAge(FHIRAge $deceasedAge = null)
    {
        if (null === $deceasedAge) {
            return $this; 
        }
        $this->deceasedAge = $deceasedAge;
        return $this;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getDeceasedAge()
    {
        return $this->deceasedAge;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setDeceasedBoolean($deceasedBoolean)
    {
        if (null === $deceasedBoolean) {
            return $this; 
        }
        if (is_scalar($deceasedBoolean)) {
            $deceasedBoolean = new FHIRBoolean($deceasedBoolean);
        }
        if (!($deceasedBoolean instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRFamilyMemberHistory::setDeceasedBoolean - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($deceasedBoolean)
            ));
        }
        $this->deceasedBoolean = $deceasedBoolean;
        return $this;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getDeceasedBoolean()
    {
        return $this->deceasedBoolean;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setDeceasedDate($deceasedDate)
    {
        if (null === $deceasedDate) {
            return $this; 
        }
        if (is_scalar($deceasedDate)) {
            $deceasedDate = new FHIRDate($deceasedDate);
        }
        if (!($deceasedDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRFamilyMemberHistory::setDeceasedDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($deceasedDate)
            ));
        }
        $this->deceasedDate = $deceasedDate;
        return $this;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getDeceasedDate()
    {
        return $this->deceasedDate;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setDeceasedRange(FHIRRange $deceasedRange = null)
    {
        if (null === $deceasedRange) {
            return $this; 
        }
        $this->deceasedRange = $deceasedRange;
        return $this;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getDeceasedRange()
    {
        return $this->deceasedRange;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDeceasedString($deceasedString)
    {
        if (null === $deceasedString) {
            return $this; 
        }
        if (is_scalar($deceasedString)) {
            $deceasedString = new FHIRString($deceasedString);
        }
        if (!($deceasedString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRFamilyMemberHistory::setDeceasedString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($deceasedString)
            ));
        }
        $this->deceasedString = $deceasedString;
        return $this;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDeceasedString()
    {
        return $this->deceasedString;
    }

    /**
     * A protocol or questionnaire that was adhered to in whole or in part by this event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function addDefinition(FHIRReference $definition = null)
    {
        if (null === $definition) {
            return $this; 
        }
        $this->definition[] = $definition;
        return $this;
    }

    /**
     * A protocol or questionnaire that was adhered to in whole or in part by this event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * If true, indicates that the age value specified is an estimated value.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setEstimatedAge($estimatedAge)
    {
        if (null === $estimatedAge) {
            return $this; 
        }
        if (is_scalar($estimatedAge)) {
            $estimatedAge = new FHIRBoolean($estimatedAge);
        }
        if (!($estimatedAge instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRFamilyMemberHistory::setEstimatedAge - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($estimatedAge)
            ));
        }
        $this->estimatedAge = $estimatedAge;
        return $this;
    }

    /**
     * If true, indicates that the age value specified is an estimated value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getEstimatedAge()
    {
        return $this->estimatedAge;
    }

    /**
     * Administrative Gender - the gender that the relative is considered to have for administration and record keeping purposes.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender
     * @return $this
     */
    public function setGender($gender)
    {
        if (null === $gender) {
            return $this; 
        }
        if (is_scalar($gender)) {
            $gender = new FHIRAdministrativeGender($gender);
        }
        if (!($gender instanceof FHIRAdministrativeGender)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRFamilyMemberHistory::setGender - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender or appropriate scalar value, %s seen.',
                gettype($gender)
            ));
        }
        $this->gender = $gender;
        return $this;
    }

    /**
     * Administrative Gender - the gender that the relative is considered to have for administration and record keeping purposes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * This records identifiers associated with this family member history record that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
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
     * This records identifiers associated with this family member history record that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with the red hair".
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setName($name)
    {
        if (null === $name) {
            return $this; 
        }
        if (is_scalar($name)) {
            $name = new FHIRString($name);
        }
        if (!($name instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRFamilyMemberHistory::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with the red hair".
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * If true, indicates the taking of an individual family member's history did not occur. The notDone element should not be used to document negated conditions, such as a family member that did not have a condition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setNotDone($notDone)
    {
        if (null === $notDone) {
            return $this; 
        }
        if (is_scalar($notDone)) {
            $notDone = new FHIRBoolean($notDone);
        }
        if (!($notDone instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRFamilyMemberHistory::setNotDone - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($notDone)
            ));
        }
        $this->notDone = $notDone;
        return $this;
    }

    /**
     * If true, indicates the taking of an individual family member's history did not occur. The notDone element should not be used to document negated conditions, such as a family member that did not have a condition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getNotDone()
    {
        return $this->notDone;
    }

    /**
     * Describes why the family member's history is absent.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setNotDoneReason(FHIRCodeableConcept $notDoneReason = null)
    {
        if (null === $notDoneReason) {
            return $this; 
        }
        $this->notDoneReason = $notDoneReason;
        return $this;
    }

    /**
     * Describes why the family member's history is absent.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getNotDoneReason()
    {
        return $this->notDoneReason;
    }

    /**
     * This property allows a non condition-specific note to the made about the related person. Ideally, the note would be in the condition property, but this is not always possible.
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
     * This property allows a non condition-specific note to the made about the related person. Ideally, the note would be in the condition property, but this is not always possible.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * The person who this history concerns.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPatient(FHIRReference $patient = null)
    {
        if (null === $patient) {
            return $this; 
        }
        $this->patient = $patient;
        return $this;
    }

    /**
     * The person who this history concerns.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Describes why the family member history occurred in coded or textual form.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function addReasonCode(FHIRCodeableConcept $reasonCode = null)
    {
        if (null === $reasonCode) {
            return $this; 
        }
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * Describes why the family member history occurred in coded or textual form.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse that justifies this family member history event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function addReasonReference(FHIRReference $reasonReference = null)
    {
        if (null === $reasonReference) {
            return $this; 
        }
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse that justifies this family member history event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * The type of relationship this person has to the patient (father, mother, brother etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setRelationship(FHIRCodeableConcept $relationship = null)
    {
        if (null === $relationship) {
            return $this; 
        }
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * The type of relationship this person has to the patient (father, mother, brother etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * A code specifying the status of the record of the family history of a specific family member.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRFamilyHistoryStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRFamilyHistoryStatus($status);
        }
        if (!($status instanceof FHIRFamilyHistoryStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRFamilyMemberHistory::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRFamilyHistoryStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * A code specifying the status of the record of the family history of a specific family member.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRFamilyHistoryStatus
     */
    public function getStatus()
    {
        return $this->status;
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
        if (null !== ($v = $this->getAgeAge())) {
            $a['ageAge'] = $v;
        }
        if (null !== ($v = $this->getAgeRange())) {
            $a['ageRange'] = $v;
        }
        if (null !== ($v = $this->getAgeString())) {
            $a['ageString'] = $v;
        }
        if (null !== ($v = $this->getBornDate())) {
            $a['bornDate'] = $v;
        }
        if (null !== ($v = $this->getBornPeriod())) {
            $a['bornPeriod'] = $v;
        }
        if (null !== ($v = $this->getBornString())) {
            $a['bornString'] = $v;
        }
        if (0 < count($values = $this->getCondition())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['condition'] = $vs;
            }
        }
        if (null !== ($v = $this->getDate())) {
            $a['date'] = $v;
        }
        if (null !== ($v = $this->getDeceasedAge())) {
            $a['deceasedAge'] = $v;
        }
        if (null !== ($v = $this->getDeceasedBoolean())) {
            $a['deceasedBoolean'] = $v;
        }
        if (null !== ($v = $this->getDeceasedDate())) {
            $a['deceasedDate'] = $v;
        }
        if (null !== ($v = $this->getDeceasedRange())) {
            $a['deceasedRange'] = $v;
        }
        if (null !== ($v = $this->getDeceasedString())) {
            $a['deceasedString'] = $v;
        }
        if (0 < count($values = $this->getDefinition())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['definition'] = $vs;
            }
        }
        if (null !== ($v = $this->getEstimatedAge())) {
            $a['estimatedAge'] = $v;
        }
        if (null !== ($v = $this->getGender())) {
            $a['gender'] = $v;
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
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getNotDone())) {
            $a['notDone'] = $v;
        }
        if (null !== ($v = $this->getNotDoneReason())) {
            $a['notDoneReason'] = $v;
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
        if (null !== ($v = $this->getPatient())) {
            $a['patient'] = $v;
        }
        if (0 < count($values = $this->getReasonCode())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['reasonCode'] = $vs;
            }
        }
        if (0 < count($values = $this->getReasonReference())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['reasonReference'] = $vs;
            }
        }
        if (null !== ($v = $this->getRelationship())) {
            $a['relationship'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
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
            $sxe = new \SimpleXMLElement('<FamilyMemberHistory xmlns="http://hl7.org/fhir"></FamilyMemberHistory>');
        }
        if (null !== ($v = $this->getAgeAge())) {
            $v->xmlSerialize(true, $sxe->addChild('ageAge'));
        }
        if (null !== ($v = $this->getAgeRange())) {
            $v->xmlSerialize(true, $sxe->addChild('ageRange'));
        }
        if (null !== ($v = $this->getAgeString())) {
            $v->xmlSerialize(true, $sxe->addChild('ageString'));
        }
        if (null !== ($v = $this->getBornDate())) {
            $v->xmlSerialize(true, $sxe->addChild('bornDate'));
        }
        if (null !== ($v = $this->getBornPeriod())) {
            $v->xmlSerialize(true, $sxe->addChild('bornPeriod'));
        }
        if (null !== ($v = $this->getBornString())) {
            $v->xmlSerialize(true, $sxe->addChild('bornString'));
        }
        if (0 < count($values = $this->getCondition())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('condition'));
                }
            }
        }
        if (null !== ($v = $this->getDate())) {
            $v->xmlSerialize(true, $sxe->addChild('date'));
        }
        if (null !== ($v = $this->getDeceasedAge())) {
            $v->xmlSerialize(true, $sxe->addChild('deceasedAge'));
        }
        if (null !== ($v = $this->getDeceasedBoolean())) {
            $v->xmlSerialize(true, $sxe->addChild('deceasedBoolean'));
        }
        if (null !== ($v = $this->getDeceasedDate())) {
            $v->xmlSerialize(true, $sxe->addChild('deceasedDate'));
        }
        if (null !== ($v = $this->getDeceasedRange())) {
            $v->xmlSerialize(true, $sxe->addChild('deceasedRange'));
        }
        if (null !== ($v = $this->getDeceasedString())) {
            $v->xmlSerialize(true, $sxe->addChild('deceasedString'));
        }
        if (0 < count($values = $this->getDefinition())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('definition'));
                }
            }
        }
        if (null !== ($v = $this->getEstimatedAge())) {
            $v->xmlSerialize(true, $sxe->addChild('estimatedAge'));
        }
        if (null !== ($v = $this->getGender())) {
            $v->xmlSerialize(true, $sxe->addChild('gender'));
        }
        if (0 < count($values = $this->getIdentifier())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('identifier'));
                }
            }
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize(true, $sxe->addChild('name'));
        }
        if (null !== ($v = $this->getNotDone())) {
            $v->xmlSerialize(true, $sxe->addChild('notDone'));
        }
        if (null !== ($v = $this->getNotDoneReason())) {
            $v->xmlSerialize(true, $sxe->addChild('notDoneReason'));
        }
        if (0 < count($values = $this->getNote())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('note'));
                }
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize(true, $sxe->addChild('patient'));
        }
        if (0 < count($values = $this->getReasonCode())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('reasonCode'));
                }
            }
        }
        if (0 < count($values = $this->getReasonReference())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('reasonReference'));
                }
            }
        }
        if (null !== ($v = $this->getRelationship())) {
            $v->xmlSerialize(true, $sxe->addChild('relationship'));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize(true, $sxe->addChild('status'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}
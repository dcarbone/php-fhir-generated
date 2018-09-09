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

use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
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
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Significant health conditions for a person related to the patient relevant in the context of care for the patient.
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
     * The age of the relative at the time the family member history is recorded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $ageAge = null;

    /**
     * The age of the relative at the time the family member history is recorded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $ageRange = null;

    /**
     * The age of the relative at the time the family member history is recorded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $ageString = null;

    /**
     * The actual or approximate date of birth of the relative.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $bornDate = null;

    /**
     * The actual or approximate date of birth of the relative.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $bornPeriod = null;

    /**
     * The actual or approximate date of birth of the relative.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $bornString = null;

    /**
     * The significant Conditions (or condition) that the family member had. This is a repeating section to allow a system to represent more than one condition per resource, though there is nothing stopping multiple resources - one per condition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition
     */
    public $condition = null;

    /**
     * Describes why the family member's history is not available.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $dataAbsentReason = null;

    /**
     * The date (and possibly time) when the family member history was recorded or last updated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $deceasedAge = null;

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $deceasedBoolean = null;

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $deceasedDate = null;

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $deceasedRange = null;

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $deceasedString = null;

    /**
     * If true, indicates that the age value specified is an estimated value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $estimatedAge = null;

    /**
     * The birth sex of the family member.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $gender = null;

    /**
     * Business identifiers assigned to this family member history by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this FamilyMemberHistory.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $instantiatesCanonical = null;

    /**
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this FamilyMemberHistory.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $instantiatesUri = null;

    /**
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with the red hair".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * This property allows a non condition-specific note to the made about the related person. Ideally, the note would be in the condition property, but this is not always possible.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * The person who this history concerns.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * Describes why the family member history occurred in coded or textual form.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCode = null;

    /**
     * Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse that justifies this family member history event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reasonReference = null;

    /**
     * The type of relationship this person has to the patient (father, mother, brother etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $relationship = null;

    /**
     * A code specifying the status of the record of the family history of a specific family member.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRFamilyHistoryStatus
     */
    public $status = null;

    /**
     * FHIRFamilyMemberHistory Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['ageAge'])) {
                $this->setAgeAge($data['ageAge']);
            }
            if (isset($data['ageRange'])) {
                $this->setAgeRange($data['ageRange']);
            }
            if (isset($data['ageString'])) {
                $this->setAgeString($data['ageString']);
            }
            if (isset($data['bornDate'])) {
                $this->setBornDate($data['bornDate']);
            }
            if (isset($data['bornPeriod'])) {
                $this->setBornPeriod($data['bornPeriod']);
            }
            if (isset($data['bornString'])) {
                $this->setBornString($data['bornString']);
            }
            if (isset($data['condition'])) {
                $this->setCondition($data['condition']);
            }
            if (isset($data['dataAbsentReason'])) {
                $this->setDataAbsentReason($data['dataAbsentReason']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['deceasedAge'])) {
                $this->setDeceasedAge($data['deceasedAge']);
            }
            if (isset($data['deceasedBoolean'])) {
                $this->setDeceasedBoolean($data['deceasedBoolean']);
            }
            if (isset($data['deceasedDate'])) {
                $this->setDeceasedDate($data['deceasedDate']);
            }
            if (isset($data['deceasedRange'])) {
                $this->setDeceasedRange($data['deceasedRange']);
            }
            if (isset($data['deceasedString'])) {
                $this->setDeceasedString($data['deceasedString']);
            }
            if (isset($data['estimatedAge'])) {
                $this->setEstimatedAge($data['estimatedAge']);
            }
            if (isset($data['gender'])) {
                $this->setGender($data['gender']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['instantiatesCanonical'])) {
                $this->setInstantiatesCanonical($data['instantiatesCanonical']);
            }
            if (isset($data['instantiatesUri'])) {
                $this->setInstantiatesUri($data['instantiatesUri']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
            }
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['reasonCode'])) {
                $this->setReasonCode($data['reasonCode']);
            }
            if (isset($data['reasonReference'])) {
                $this->setReasonReference($data['reasonReference']);
            }
            if (isset($data['relationship'])) {
                $this->setRelationship($data['relationship']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The age of the relative at the time the family member history is recorded.
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
     * The age of the relative at the time the family member history is recorded.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getAgeAge()
    {
        return $this->ageAge;
    }


    /**
     * The age of the relative at the time the family member history is recorded.
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
     * The age of the relative at the time the family member history is recorded.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getAgeRange()
    {
        return $this->ageRange;
    }


    /**
     * The age of the relative at the time the family member history is recorded.
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
     * The age of the relative at the time the family member history is recorded.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAgeString()
    {
        return $this->ageString;
    }


    /**
     * The actual or approximate date of birth of the relative.
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
     * The actual or approximate date of birth of the relative.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getBornDate()
    {
        return $this->bornDate;
    }


    /**
     * The actual or approximate date of birth of the relative.
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
     * The actual or approximate date of birth of the relative.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getBornPeriod()
    {
        return $this->bornPeriod;
    }


    /**
     * The actual or approximate date of birth of the relative.
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
     * The actual or approximate date of birth of the relative.
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
    public function setCondition(FHIRFamilyMemberHistoryCondition $condition = null)
    {
        if (null === $condition) {
            return $this; 
        }
        $this->condition = $condition;
        return $this;
    }

    /**
     * The significant Conditions (or condition) that the family member had. This is a repeating section to allow a system to represent more than one condition per resource, though there is nothing stopping multiple resources - one per condition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition
     */
    public function getCondition()
    {
        return $this->condition;
    }


    /**
     * Describes why the family member's history is not available.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setDataAbsentReason(FHIRCodeableConcept $dataAbsentReason = null)
    {
        if (null === $dataAbsentReason) {
            return $this; 
        }
        $this->dataAbsentReason = $dataAbsentReason;
        return $this;
    }

    /**
     * Describes why the family member's history is not available.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDataAbsentReason()
    {
        return $this->dataAbsentReason;
    }


    /**
     * The date (and possibly time) when the family member history was recorded or last updated.
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
     * The date (and possibly time) when the family member history was recorded or last updated.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record.
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
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getDeceasedAge()
    {
        return $this->deceasedAge;
    }


    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record.
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
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getDeceasedBoolean()
    {
        return $this->deceasedBoolean;
    }


    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record.
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
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getDeceasedDate()
    {
        return $this->deceasedDate;
    }


    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record.
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
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getDeceasedRange()
    {
        return $this->deceasedRange;
    }


    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record.
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
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDeceasedString()
    {
        return $this->deceasedString;
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
     * The birth sex of the family member.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setGender(FHIRCodeableConcept $gender = null)
    {
        if (null === $gender) {
            return $this; 
        }
        $this->gender = $gender;
        return $this;
    }

    /**
     * The birth sex of the family member.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getGender()
    {
        return $this->gender;
    }


    /**
     * Business identifiers assigned to this family member history by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this family member history by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this FamilyMemberHistory.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setInstantiatesCanonical($instantiatesCanonical)
    {
        if (null === $instantiatesCanonical) {
            return $this; 
        }
        if (is_scalar($instantiatesCanonical)) {
            $instantiatesCanonical = new FHIRCanonical($instantiatesCanonical);
        }
        if (!($instantiatesCanonical instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRFamilyMemberHistory::setInstantiatesCanonical - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($instantiatesCanonical)
            ));
        }
        $this->instantiatesCanonical = $instantiatesCanonical;
        return $this;
    }

    /**
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this FamilyMemberHistory.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }


    /**
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this FamilyMemberHistory.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setInstantiatesUri($instantiatesUri)
    {
        if (null === $instantiatesUri) {
            return $this; 
        }
        if (is_scalar($instantiatesUri)) {
            $instantiatesUri = new FHIRUri($instantiatesUri);
        }
        if (!($instantiatesUri instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRFamilyMemberHistory::setInstantiatesUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($instantiatesUri)
            ));
        }
        $this->instantiatesUri = $instantiatesUri;
        return $this;
    }

    /**
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this FamilyMemberHistory.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
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
     * This property allows a non condition-specific note to the made about the related person. Ideally, the note would be in the condition property, but this is not always possible.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function setNote(FHIRAnnotation $note = null)
    {
        if (null === $note) {
            return $this; 
        }
        $this->note = $note;
        return $this;
    }

    /**
     * This property allows a non condition-specific note to the made about the related person. Ideally, the note would be in the condition property, but this is not always possible.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
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
    public function setReasonCode(FHIRCodeableConcept $reasonCode = null)
    {
        if (null === $reasonCode) {
            return $this; 
        }
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * Describes why the family member history occurred in coded or textual form.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
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
    public function setReasonReference(FHIRReference $reasonReference = null)
    {
        if (null === $reasonReference) {
            return $this; 
        }
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse that justifies this family member history event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
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
        if (null !== ($v = $this->getCondition())) {
            $a['condition'] = $v;
        }
        if (null !== ($v = $this->getDataAbsentReason())) {
            $a['dataAbsentReason'] = $v;
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
        if (null !== ($v = $this->getEstimatedAge())) {
            $a['estimatedAge'] = $v;
        }
        if (null !== ($v = $this->getGender())) {
            $a['gender'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getInstantiatesCanonical())) {
            $a['instantiatesCanonical'] = $v;
        }
        if (null !== ($v = $this->getInstantiatesUri())) {
            $a['instantiatesUri'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a['note'] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a['patient'] = $v;
        }
        if (null !== ($v = $this->getReasonCode())) {
            $a['reasonCode'] = $v;
        }
        if (null !== ($v = $this->getReasonReference())) {
            $a['reasonReference'] = $v;
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
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}
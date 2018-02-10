<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Significant health conditions for a person related to the patient relevant in the context of care for the patient.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRFamilyMemberHistory extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * This records identifiers associated with this family member history record that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * A protocol or questionnaire that was adhered to in whole or in part by this event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public $instantiates = [];

    /**
     * A code specifying the status of the record of the family history of a specific family member.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRFamilyHistoryStatus
     */
    public $status = null;

    /**
     * Describes why the family member's history is not available.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $dataAbsentReason = null;

    /**
     * The person who this history concerns.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The date (and possibly time) when the family member history was taken.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with the red hair".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The type of relationship this person has to the patient (father, mother, brother etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $relationship = null;

    /**
     * Administrative Gender - the gender that the relative is considered to have for administration and record keeping purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender
     */
    public $gender = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $bornPeriod = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $bornDate = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $bornString = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $ageAge = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $ageRange = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $ageString = null;

    /**
     * If true, indicates that the age value specified is an estimated value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $estimatedAge = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $deceasedBoolean = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $deceasedAge = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $deceasedRange = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $deceasedDate = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $deceasedString = null;

    /**
     * Describes why the family member history occurred in coded or textual form.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $reasonCode = [];

    /**
     * Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse that justifies this family member history event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $reasonReference = [];

    /**
     * This property allows a non condition-specific note to the made about the related person. Ideally, the note would be in the condition property, but this is not always possible.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public $note = [];

    /**
     * The significant Conditions (or condition) that the family member had. This is a repeating section to allow a system to represent more than one condition per resource, though there is nothing stopping multiple resources - one per condition.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition[]
     */
    public $condition = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'FamilyMemberHistory';

    /**
     * This records identifiers associated with this family member history record that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * This records identifiers associated with this family member history record that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A protocol or questionnaire that was adhered to in whole or in part by this event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public function getInstantiates() {
        return $this->instantiates;
    }

    /**
     * A protocol or questionnaire that was adhered to in whole or in part by this event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $instantiates
     * @return $this
     */
    public function addInstantiates($instantiates) {
        $this->instantiates[] = $instantiates;
        return $this;
    }

    /**
     * A code specifying the status of the record of the family history of a specific family member.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRFamilyHistoryStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * A code specifying the status of the record of the family history of a specific family member.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRFamilyHistoryStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Describes why the family member's history is not available.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDataAbsentReason() {
        return $this->dataAbsentReason;
    }

    /**
     * Describes why the family member's history is not available.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $dataAbsentReason
     * @return $this
     */
    public function setDataAbsentReason($dataAbsentReason) {
        $this->dataAbsentReason = $dataAbsentReason;
        return $this;
    }

    /**
     * The person who this history concerns.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient() {
        return $this->patient;
    }

    /**
     * The person who this history concerns.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient) {
        $this->patient = $patient;
        return $this;
    }

    /**
     * The date (and possibly time) when the family member history was taken.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * The date (and possibly time) when the family member history was taken.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date) {
        $this->date = $date;
        return $this;
    }

    /**
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with the red hair".
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName() {
        return $this->name;
    }

    /**
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with the red hair".
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * The type of relationship this person has to the patient (father, mother, brother etc.).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRelationship() {
        return $this->relationship;
    }

    /**
     * The type of relationship this person has to the patient (father, mother, brother etc.).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $relationship
     * @return $this
     */
    public function setRelationship($relationship) {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * Administrative Gender - the gender that the relative is considered to have for administration and record keeping purposes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender
     */
    public function getGender() {
        return $this->gender;
    }

    /**
     * Administrative Gender - the gender that the relative is considered to have for administration and record keeping purposes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender $gender
     * @return $this
     */
    public function setGender($gender) {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getBornPeriod() {
        return $this->bornPeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $bornPeriod
     * @return $this
     */
    public function setBornPeriod($bornPeriod) {
        $this->bornPeriod = $bornPeriod;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getBornDate() {
        return $this->bornDate;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $bornDate
     * @return $this
     */
    public function setBornDate($bornDate) {
        $this->bornDate = $bornDate;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getBornString() {
        return $this->bornString;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $bornString
     * @return $this
     */
    public function setBornString($bornString) {
        $this->bornString = $bornString;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getAgeAge() {
        return $this->ageAge;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge $ageAge
     * @return $this
     */
    public function setAgeAge($ageAge) {
        $this->ageAge = $ageAge;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getAgeRange() {
        return $this->ageRange;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $ageRange
     * @return $this
     */
    public function setAgeRange($ageRange) {
        $this->ageRange = $ageRange;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAgeString() {
        return $this->ageString;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $ageString
     * @return $this
     */
    public function setAgeString($ageString) {
        $this->ageString = $ageString;
        return $this;
    }

    /**
     * If true, indicates that the age value specified is an estimated value.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getEstimatedAge() {
        return $this->estimatedAge;
    }

    /**
     * If true, indicates that the age value specified is an estimated value.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $estimatedAge
     * @return $this
     */
    public function setEstimatedAge($estimatedAge) {
        $this->estimatedAge = $estimatedAge;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getDeceasedBoolean() {
        return $this->deceasedBoolean;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $deceasedBoolean
     * @return $this
     */
    public function setDeceasedBoolean($deceasedBoolean) {
        $this->deceasedBoolean = $deceasedBoolean;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getDeceasedAge() {
        return $this->deceasedAge;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge $deceasedAge
     * @return $this
     */
    public function setDeceasedAge($deceasedAge) {
        $this->deceasedAge = $deceasedAge;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getDeceasedRange() {
        return $this->deceasedRange;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $deceasedRange
     * @return $this
     */
    public function setDeceasedRange($deceasedRange) {
        $this->deceasedRange = $deceasedRange;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getDeceasedDate() {
        return $this->deceasedDate;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $deceasedDate
     * @return $this
     */
    public function setDeceasedDate($deceasedDate) {
        $this->deceasedDate = $deceasedDate;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDeceasedString() {
        return $this->deceasedString;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $deceasedString
     * @return $this
     */
    public function setDeceasedString($deceasedString) {
        $this->deceasedString = $deceasedString;
        return $this;
    }

    /**
     * Describes why the family member history occurred in coded or textual form.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode() {
        return $this->reasonCode;
    }

    /**
     * Describes why the family member history occurred in coded or textual form.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return $this
     */
    public function addReasonCode($reasonCode) {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse that justifies this family member history event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getReasonReference() {
        return $this->reasonReference;
    }

    /**
     * Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse that justifies this family member history event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $reasonReference
     * @return $this
     */
    public function addReasonReference($reasonReference) {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * This property allows a non condition-specific note to the made about the related person. Ideally, the note would be in the condition property, but this is not always possible.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * This property allows a non condition-specific note to the made about the related person. Ideally, the note would be in the condition property, but this is not always possible.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note) {
        $this->note[] = $note;
        return $this;
    }

    /**
     * The significant Conditions (or condition) that the family member had. This is a repeating section to allow a system to represent more than one condition per resource, though there is nothing stopping multiple resources - one per condition.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition[]
     */
    public function getCondition() {
        return $this->condition;
    }

    /**
     * The significant Conditions (or condition) that the family member had. This is a repeating section to allow a system to represent more than one condition per resource, though there is nothing stopping multiple resources - one per condition.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition $condition
     * @return $this
     */
    public function addCondition($condition) {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['identifier'])) {
                if (is_array($data['identifier'])) {
                    foreach($data['identifier'] as $d) {
                        $this->addIdentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"identifier" must be array of objects or null, '.gettype($data['identifier']).' seen.');
                }
            }
            if (isset($data['instantiates'])) {
                if (is_array($data['instantiates'])) {
                    foreach($data['instantiates'] as $d) {
                        $this->addInstantiates($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"instantiates" must be array of objects or null, '.gettype($data['instantiates']).' seen.');
                }
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['dataAbsentReason'])) {
                $this->setDataAbsentReason($data['dataAbsentReason']);
            }
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['relationship'])) {
                $this->setRelationship($data['relationship']);
            }
            if (isset($data['gender'])) {
                $this->setGender($data['gender']);
            }
            if (isset($data['bornPeriod'])) {
                $this->setBornPeriod($data['bornPeriod']);
            }
            if (isset($data['bornDate'])) {
                $this->setBornDate($data['bornDate']);
            }
            if (isset($data['bornString'])) {
                $this->setBornString($data['bornString']);
            }
            if (isset($data['ageAge'])) {
                $this->setAgeAge($data['ageAge']);
            }
            if (isset($data['ageRange'])) {
                $this->setAgeRange($data['ageRange']);
            }
            if (isset($data['ageString'])) {
                $this->setAgeString($data['ageString']);
            }
            if (isset($data['estimatedAge'])) {
                $this->setEstimatedAge($data['estimatedAge']);
            }
            if (isset($data['deceasedBoolean'])) {
                $this->setDeceasedBoolean($data['deceasedBoolean']);
            }
            if (isset($data['deceasedAge'])) {
                $this->setDeceasedAge($data['deceasedAge']);
            }
            if (isset($data['deceasedRange'])) {
                $this->setDeceasedRange($data['deceasedRange']);
            }
            if (isset($data['deceasedDate'])) {
                $this->setDeceasedDate($data['deceasedDate']);
            }
            if (isset($data['deceasedString'])) {
                $this->setDeceasedString($data['deceasedString']);
            }
            if (isset($data['reasonCode'])) {
                if (is_array($data['reasonCode'])) {
                    foreach($data['reasonCode'] as $d) {
                        $this->addReasonCode($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"reasonCode" must be array of objects or null, '.gettype($data['reasonCode']).' seen.');
                }
            }
            if (isset($data['reasonReference'])) {
                if (is_array($data['reasonReference'])) {
                    foreach($data['reasonReference'] as $d) {
                        $this->addReasonReference($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"reasonReference" must be array of objects or null, '.gettype($data['reasonReference']).' seen.');
                }
            }
            if (isset($data['note'])) {
                if (is_array($data['note'])) {
                    foreach($data['note'] as $d) {
                        $this->addNote($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"note" must be array of objects or null, '.gettype($data['note']).' seen.');
                }
            }
            if (isset($data['condition'])) {
                if (is_array($data['condition'])) {
                    foreach($data['condition'] as $d) {
                        $this->addCondition($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"condition" must be array of objects or null, '.gettype($data['condition']).' seen.');
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                if (null !== $identifier) $json['identifier'][] = $identifier;
            }
        }
        if (0 < count($this->instantiates)) {
            $json['instantiates'] = [];
            foreach($this->instantiates as $instantiates) {
                if (null !== $instantiates) $json['instantiates'][] = $instantiates;
            }
        }
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->dataAbsentReason)) $json['dataAbsentReason'] = $this->dataAbsentReason;
        if (isset($this->patient)) $json['patient'] = $this->patient;
        if (isset($this->date)) $json['date'] = $this->date;
        if (isset($this->name)) $json['name'] = $this->name;
        if (isset($this->relationship)) $json['relationship'] = $this->relationship;
        if (isset($this->gender)) $json['gender'] = $this->gender;
        if (isset($this->bornPeriod)) $json['bornPeriod'] = $this->bornPeriod;
        if (isset($this->bornDate)) $json['bornDate'] = $this->bornDate;
        if (isset($this->bornString)) $json['bornString'] = $this->bornString;
        if (isset($this->ageAge)) $json['ageAge'] = $this->ageAge;
        if (isset($this->ageRange)) $json['ageRange'] = $this->ageRange;
        if (isset($this->ageString)) $json['ageString'] = $this->ageString;
        if (isset($this->estimatedAge)) $json['estimatedAge'] = $this->estimatedAge;
        if (isset($this->deceasedBoolean)) $json['deceasedBoolean'] = $this->deceasedBoolean;
        if (isset($this->deceasedAge)) $json['deceasedAge'] = $this->deceasedAge;
        if (isset($this->deceasedRange)) $json['deceasedRange'] = $this->deceasedRange;
        if (isset($this->deceasedDate)) $json['deceasedDate'] = $this->deceasedDate;
        if (isset($this->deceasedString)) $json['deceasedString'] = $this->deceasedString;
        if (0 < count($this->reasonCode)) {
            $json['reasonCode'] = [];
            foreach($this->reasonCode as $reasonCode) {
                if (null !== $reasonCode) $json['reasonCode'][] = $reasonCode;
            }
        }
        if (0 < count($this->reasonReference)) {
            $json['reasonReference'] = [];
            foreach($this->reasonReference as $reasonReference) {
                if (null !== $reasonReference) $json['reasonReference'][] = $reasonReference;
            }
        }
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                if (null !== $note) $json['note'][] = $note;
            }
        }
        if (0 < count($this->condition)) {
            $json['condition'] = [];
            foreach($this->condition as $condition) {
                if (null !== $condition) $json['condition'][] = $condition;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<FamilyMemberHistory xmlns="http://hl7.org/fhir"></FamilyMemberHistory>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (0 < count($this->instantiates)) {
            foreach($this->instantiates as $instantiates) {
                $instantiates->xmlSerialize(true, $sxe->addChild('instantiates'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->dataAbsentReason)) $this->dataAbsentReason->xmlSerialize(true, $sxe->addChild('dataAbsentReason'));
        if (isset($this->patient)) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (isset($this->date)) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (isset($this->name)) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (isset($this->relationship)) $this->relationship->xmlSerialize(true, $sxe->addChild('relationship'));
        if (isset($this->gender)) $this->gender->xmlSerialize(true, $sxe->addChild('gender'));
        if (isset($this->bornPeriod)) $this->bornPeriod->xmlSerialize(true, $sxe->addChild('bornPeriod'));
        if (isset($this->bornDate)) $this->bornDate->xmlSerialize(true, $sxe->addChild('bornDate'));
        if (isset($this->bornString)) $this->bornString->xmlSerialize(true, $sxe->addChild('bornString'));
        if (isset($this->ageAge)) $this->ageAge->xmlSerialize(true, $sxe->addChild('ageAge'));
        if (isset($this->ageRange)) $this->ageRange->xmlSerialize(true, $sxe->addChild('ageRange'));
        if (isset($this->ageString)) $this->ageString->xmlSerialize(true, $sxe->addChild('ageString'));
        if (isset($this->estimatedAge)) $this->estimatedAge->xmlSerialize(true, $sxe->addChild('estimatedAge'));
        if (isset($this->deceasedBoolean)) $this->deceasedBoolean->xmlSerialize(true, $sxe->addChild('deceasedBoolean'));
        if (isset($this->deceasedAge)) $this->deceasedAge->xmlSerialize(true, $sxe->addChild('deceasedAge'));
        if (isset($this->deceasedRange)) $this->deceasedRange->xmlSerialize(true, $sxe->addChild('deceasedRange'));
        if (isset($this->deceasedDate)) $this->deceasedDate->xmlSerialize(true, $sxe->addChild('deceasedDate'));
        if (isset($this->deceasedString)) $this->deceasedString->xmlSerialize(true, $sxe->addChild('deceasedString'));
        if (0 < count($this->reasonCode)) {
            foreach($this->reasonCode as $reasonCode) {
                $reasonCode->xmlSerialize(true, $sxe->addChild('reasonCode'));
            }
        }
        if (0 < count($this->reasonReference)) {
            foreach($this->reasonReference as $reasonReference) {
                $reasonReference->xmlSerialize(true, $sxe->addChild('reasonReference'));
            }
        }
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if (0 < count($this->condition)) {
            foreach($this->condition as $condition) {
                $condition->xmlSerialize(true, $sxe->addChild('condition'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}
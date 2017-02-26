<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 26th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Significant health events and conditions for a person related to the patient relevant in the context of care for the patient.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRFamilyMemberHistory extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * This records identifiers associated with this family member history record that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

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
     * A code specifying a state of a Family Member History record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRFamilyHistoryStatus
     */
    public $status = null;

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
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $gender = null;

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $bornPeriod = null;

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $bornDate = null;

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $bornString = null;

    /**
     * The actual or approximate age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $ageQuantity = null;

    /**
     * The actual or approximate age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $ageRange = null;

    /**
     * The actual or approximate age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $ageString = null;

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $deceasedBoolean = null;

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $deceasedQuantity = null;

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $deceasedRange = null;

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $deceasedDate = null;

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $deceasedString = null;

    /**
     * This property allows a non condition-specific note to the made about the related person. Ideally, the note would be in the condition property, but this is not always possible.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * The significant Conditions (or condition) that the family member had. This is a repeating section to allow a system to represent more than one condition per resource, though there is nothing stopping multiple resources - one per condition.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition[]
     */
    public $condition = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'FamilyMemberHistory';

    /**
     * This records identifiers associated with this family member history record that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * This records identifiers associated with this family member history record that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The person who this history concerns.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * The person who this history concerns.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * The date (and possibly time) when the family member history was taken.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date (and possibly time) when the family member history was taken.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * A code specifying a state of a Family Member History record.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRFamilyHistoryStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A code specifying a state of a Family Member History record.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRFamilyHistoryStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with the red hair".
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with the red hair".
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * The type of relationship this person has to the patient (father, mother, brother etc.).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * The type of relationship this person has to the patient (father, mother, brother etc.).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $relationship
     * @return $this
     */
    public function setRelationship($relationship)
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * Administrative Gender - the gender that the relative is considered to have for administration and record keeping purposes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Administrative Gender - the gender that the relative is considered to have for administration and record keeping purposes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $gender
     * @return $this
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getBornPeriod()
    {
        return $this->bornPeriod;
    }

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $bornPeriod
     * @return $this
     */
    public function setBornPeriod($bornPeriod)
    {
        $this->bornPeriod = $bornPeriod;
        return $this;
    }

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getBornDate()
    {
        return $this->bornDate;
    }

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $bornDate
     * @return $this
     */
    public function setBornDate($bornDate)
    {
        $this->bornDate = $bornDate;
        return $this;
    }

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getBornString()
    {
        return $this->bornString;
    }

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $bornString
     * @return $this
     */
    public function setBornString($bornString)
    {
        $this->bornString = $bornString;
        return $this;
    }

    /**
     * The actual or approximate age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getAgeQuantity()
    {
        return $this->ageQuantity;
    }

    /**
     * The actual or approximate age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge $ageQuantity
     * @return $this
     */
    public function setAgeQuantity($ageQuantity)
    {
        $this->ageQuantity = $ageQuantity;
        return $this;
    }

    /**
     * The actual or approximate age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getAgeRange()
    {
        return $this->ageRange;
    }

    /**
     * The actual or approximate age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $ageRange
     * @return $this
     */
    public function setAgeRange($ageRange)
    {
        $this->ageRange = $ageRange;
        return $this;
    }

    /**
     * The actual or approximate age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAgeString()
    {
        return $this->ageString;
    }

    /**
     * The actual or approximate age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $ageString
     * @return $this
     */
    public function setAgeString($ageString)
    {
        $this->ageString = $ageString;
        return $this;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getDeceasedBoolean()
    {
        return $this->deceasedBoolean;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $deceasedBoolean
     * @return $this
     */
    public function setDeceasedBoolean($deceasedBoolean)
    {
        $this->deceasedBoolean = $deceasedBoolean;
        return $this;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getDeceasedQuantity()
    {
        return $this->deceasedQuantity;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge $deceasedQuantity
     * @return $this
     */
    public function setDeceasedQuantity($deceasedQuantity)
    {
        $this->deceasedQuantity = $deceasedQuantity;
        return $this;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getDeceasedRange()
    {
        return $this->deceasedRange;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $deceasedRange
     * @return $this
     */
    public function setDeceasedRange($deceasedRange)
    {
        $this->deceasedRange = $deceasedRange;
        return $this;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getDeceasedDate()
    {
        return $this->deceasedDate;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $deceasedDate
     * @return $this
     */
    public function setDeceasedDate($deceasedDate)
    {
        $this->deceasedDate = $deceasedDate;
        return $this;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDeceasedString()
    {
        return $this->deceasedString;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $deceasedString
     * @return $this
     */
    public function setDeceasedString($deceasedString)
    {
        $this->deceasedString = $deceasedString;
        return $this;
    }

    /**
     * This property allows a non condition-specific note to the made about the related person. Ideally, the note would be in the condition property, but this is not always possible.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * This property allows a non condition-specific note to the made about the related person. Ideally, the note would be in the condition property, but this is not always possible.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * The significant Conditions (or condition) that the family member had. This is a repeating section to allow a system to represent more than one condition per resource, though there is nothing stopping multiple resources - one per condition.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * The significant Conditions (or condition) that the family member had. This is a repeating section to allow a system to represent more than one condition per resource, though there is nothing stopping multiple resources - one per condition.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition $condition
     * @return $this
     */
    public function addCondition($condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = json_encode($identifier);
            }
        }
        if (null !== $this->patient) $json['patient'] = json_encode($this->patient);
        if (null !== $this->date) $json['date'] = json_encode($this->date);
        if (null !== $this->status) $json['status'] = json_encode($this->status);
        if (null !== $this->name) $json['name'] = json_encode($this->name);
        if (null !== $this->relationship) $json['relationship'] = json_encode($this->relationship);
        if (null !== $this->gender) $json['gender'] = json_encode($this->gender);
        if (null !== $this->bornPeriod) $json['bornPeriod'] = json_encode($this->bornPeriod);
        if (null !== $this->bornDate) $json['bornDate'] = json_encode($this->bornDate);
        if (null !== $this->bornString) $json['bornString'] = json_encode($this->bornString);
        if (null !== $this->ageQuantity) $json['ageQuantity'] = json_encode($this->ageQuantity);
        if (null !== $this->ageRange) $json['ageRange'] = json_encode($this->ageRange);
        if (null !== $this->ageString) $json['ageString'] = json_encode($this->ageString);
        if (null !== $this->deceasedBoolean) $json['deceasedBoolean'] = json_encode($this->deceasedBoolean);
        if (null !== $this->deceasedQuantity) $json['deceasedQuantity'] = json_encode($this->deceasedQuantity);
        if (null !== $this->deceasedRange) $json['deceasedRange'] = json_encode($this->deceasedRange);
        if (null !== $this->deceasedDate) $json['deceasedDate'] = json_encode($this->deceasedDate);
        if (null !== $this->deceasedString) $json['deceasedString'] = json_encode($this->deceasedString);
        if (null !== $this->note) $json['note'] = json_encode($this->note);
        if (0 < count($this->condition)) {
            $json['condition'] = [];
            foreach($this->condition as $condition) {
                $json['condition'][] = json_encode($condition);
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<FamilyMemberHistory xmlns="http://hl7.org/fhir"></FamilyMemberHistory>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->patient) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->relationship) $this->relationship->xmlSerialize(true, $sxe->addChild('relationship'));
        if (null !== $this->gender) $this->gender->xmlSerialize(true, $sxe->addChild('gender'));
        if (null !== $this->bornPeriod) $this->bornPeriod->xmlSerialize(true, $sxe->addChild('bornPeriod'));
        if (null !== $this->bornDate) $this->bornDate->xmlSerialize(true, $sxe->addChild('bornDate'));
        if (null !== $this->bornString) $this->bornString->xmlSerialize(true, $sxe->addChild('bornString'));
        if (null !== $this->ageQuantity) $this->ageQuantity->xmlSerialize(true, $sxe->addChild('ageQuantity'));
        if (null !== $this->ageRange) $this->ageRange->xmlSerialize(true, $sxe->addChild('ageRange'));
        if (null !== $this->ageString) $this->ageString->xmlSerialize(true, $sxe->addChild('ageString'));
        if (null !== $this->deceasedBoolean) $this->deceasedBoolean->xmlSerialize(true, $sxe->addChild('deceasedBoolean'));
        if (null !== $this->deceasedQuantity) $this->deceasedQuantity->xmlSerialize(true, $sxe->addChild('deceasedQuantity'));
        if (null !== $this->deceasedRange) $this->deceasedRange->xmlSerialize(true, $sxe->addChild('deceasedRange'));
        if (null !== $this->deceasedDate) $this->deceasedDate->xmlSerialize(true, $sxe->addChild('deceasedDate'));
        if (null !== $this->deceasedString) $this->deceasedString->xmlSerialize(true, $sxe->addChild('deceasedString'));
        if (null !== $this->note) $this->note->xmlSerialize(true, $sxe->addChild('note'));
        if (0 < count($this->condition)) {
            foreach($this->condition as $condition) {
                $condition->xmlSerialize(true, $sxe->addChild('condition'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}
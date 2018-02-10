<?php namespace PHPFHIRGenerated\FHIRResource\FHIRFamilyHistory;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * Significant health events and conditions for people related to the subject relevant in the context of care for the subject.
 */
class FHIRFamilyHistoryRelation extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * This will either be a name or a description.  E.g. "Aunt Susan", "my cousin with the red hair".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The type of relationship this person has to the patient (father, mother, brother etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $relationship = null;

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
     * This property allows a non condition-specific note to the made about the related person. Ideally, the note would be in the condition property, but this is not always possible.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $note = null;

    /**
     * The significant Conditions (or condition) that the family member had. This is a repeating section to allow a system to represent more than one condition per resource, though there is nothing stopping multiple resources - one per condition.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRFamilyHistory\FHIRFamilyHistoryCondition[]
     */
    public $condition = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'FamilyHistory.Relation';

    /**
     * This will either be a name or a description.  E.g. "Aunt Susan", "my cousin with the red hair".
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * This will either be a name or a description.  E.g. "Aunt Susan", "my cousin with the red hair".
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
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getBornPeriod()
    {
        return $this->bornPeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $bornPeriod
     * @return $this
     */
    public function setBornPeriod($bornPeriod)
    {
        $this->bornPeriod = $bornPeriod;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getBornDate()
    {
        return $this->bornDate;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $bornDate
     * @return $this
     */
    public function setBornDate($bornDate)
    {
        $this->bornDate = $bornDate;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getBornString()
    {
        return $this->bornString;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $bornString
     * @return $this
     */
    public function setBornString($bornString)
    {
        $this->bornString = $bornString;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getDeceasedBoolean()
    {
        return $this->deceasedBoolean;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $deceasedBoolean
     * @return $this
     */
    public function setDeceasedBoolean($deceasedBoolean)
    {
        $this->deceasedBoolean = $deceasedBoolean;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getDeceasedAge()
    {
        return $this->deceasedAge;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge $deceasedAge
     * @return $this
     */
    public function setDeceasedAge($deceasedAge)
    {
        $this->deceasedAge = $deceasedAge;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getDeceasedRange()
    {
        return $this->deceasedRange;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $deceasedRange
     * @return $this
     */
    public function setDeceasedRange($deceasedRange)
    {
        $this->deceasedRange = $deceasedRange;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getDeceasedDate()
    {
        return $this->deceasedDate;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $deceasedDate
     * @return $this
     */
    public function setDeceasedDate($deceasedDate)
    {
        $this->deceasedDate = $deceasedDate;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDeceasedString()
    {
        return $this->deceasedString;
    }

    /**
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
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * This property allows a non condition-specific note to the made about the related person. Ideally, the note would be in the condition property, but this is not always possible.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $note
     * @return $this
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * The significant Conditions (or condition) that the family member had. This is a repeating section to allow a system to represent more than one condition per resource, though there is nothing stopping multiple resources - one per condition.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRFamilyHistory\FHIRFamilyHistoryCondition[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * The significant Conditions (or condition) that the family member had. This is a repeating section to allow a system to represent more than one condition per resource, though there is nothing stopping multiple resources - one per condition.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRFamilyHistory\FHIRFamilyHistoryCondition $condition
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
        if (null !== $this->name) $json['name'] = $this->name;
        if (null !== $this->relationship) $json['relationship'] = $this->relationship;
        if (null !== $this->bornPeriod) $json['bornPeriod'] = $this->bornPeriod;
        if (null !== $this->bornDate) $json['bornDate'] = $this->bornDate;
        if (null !== $this->bornString) $json['bornString'] = $this->bornString;
        if (null !== $this->deceasedBoolean) $json['deceasedBoolean'] = $this->deceasedBoolean;
        if (null !== $this->deceasedAge) $json['deceasedAge'] = $this->deceasedAge;
        if (null !== $this->deceasedRange) $json['deceasedRange'] = $this->deceasedRange;
        if (null !== $this->deceasedDate) $json['deceasedDate'] = $this->deceasedDate;
        if (null !== $this->deceasedString) $json['deceasedString'] = $this->deceasedString;
        if (null !== $this->note) $json['note'] = $this->note;
        if (0 < count($this->condition)) {
            $json['condition'] = [];
            foreach($this->condition as $condition) {
                $json['condition'][] = $condition;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<FamilyHistoryRelation xmlns="http://hl7.org/fhir"></FamilyHistoryRelation>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->relationship) $this->relationship->xmlSerialize(true, $sxe->addChild('relationship'));
        if (null !== $this->bornPeriod) $this->bornPeriod->xmlSerialize(true, $sxe->addChild('bornPeriod'));
        if (null !== $this->bornDate) $this->bornDate->xmlSerialize(true, $sxe->addChild('bornDate'));
        if (null !== $this->bornString) $this->bornString->xmlSerialize(true, $sxe->addChild('bornString'));
        if (null !== $this->deceasedBoolean) $this->deceasedBoolean->xmlSerialize(true, $sxe->addChild('deceasedBoolean'));
        if (null !== $this->deceasedAge) $this->deceasedAge->xmlSerialize(true, $sxe->addChild('deceasedAge'));
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
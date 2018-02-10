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
 * A request to supply a diet, formula feeding (enteral) or oral nutritional supplement to a patient/resident.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRNutritionOrder extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Identifiers assigned to this order by the order sender or by the order receiver.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * The workflow status of the nutrition order/request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRequestStatus
     */
    public $status = null;

    /**
     * Indicates the level of authority/intentionality associated with the {{title}} and where the request fits into the workflow chain.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRequestIntent
     */
    public $intent = null;

    /**
     * The person (patient) who needs the nutrition order for an oral diet, nutritional supplement and/or enteral or formula feeding.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * An encounter that provides additional information about the healthcare context in which this request is made.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * The date and time that this nutrition order was requested.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $dateTime = null;

    /**
     * The practitioner that holds legal responsibility for ordering the diet, nutritional supplement, or formula feedings.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $orderer = null;

    /**
     * A link to a record of allergies or intolerances  which should be included in the nutrition order.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $allergyIntolerance = [];

    /**
     * This modifier is used to convey order-specific modifiers about the type of food that should be given. These can be derived from patient allergies, intolerances, or preferences such as Halal, Vegan or Kosher. This modifier applies to the entire nutrition order inclusive of the oral diet, nutritional supplements and enteral formula feedings.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $foodPreferenceModifier = [];

    /**
     * This modifier is used to convey Order-specific modifier about the type of oral food or oral fluids that should not be given. These can be derived from patient allergies, intolerances, or preferences such as No Red Meat, No Soy or No Wheat or  Gluten-Free.  While it should not be necessary to repeat allergy or intolerance information captured in the referenced AllergyIntolerance resource in the excludeFoodModifier, this element may be used to convey additional specificity related to foods that should be eliminated from the patient’s diet for any reason.  This modifier applies to the entire nutrition order inclusive of the oral diet, nutritional supplements and enteral formula feedings.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $excludeFoodModifier = [];

    /**
     * Diet given orally in contrast to enteral (tube) feeding.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRNutritionOrder\FHIRNutritionOrderOralDiet
     */
    public $oralDiet = null;

    /**
     * Oral nutritional products given in order to add further nutritional value to the patient's diet.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRNutritionOrder\FHIRNutritionOrderSupplement[]
     */
    public $supplement = [];

    /**
     * Feeding provided through the gastrointestinal tract via a tube, catheter, or stoma that delivers nutrition distal to the oral cavity.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula
     */
    public $enteralFormula = null;

    /**
     * Comments made about the {{title}} by the requester, performer, subject or other participants.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public $note = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'NutritionOrder';

    /**
     * Identifiers assigned to this order by the order sender or by the order receiver.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Identifiers assigned to this order by the order sender or by the order receiver.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The workflow status of the nutrition order/request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRequestStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * The workflow status of the nutrition order/request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRequestStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Indicates the level of authority/intentionality associated with the {{title}} and where the request fits into the workflow chain.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRequestIntent
     */
    public function getIntent() {
        return $this->intent;
    }

    /**
     * Indicates the level of authority/intentionality associated with the {{title}} and where the request fits into the workflow chain.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRequestIntent $intent
     * @return $this
     */
    public function setIntent($intent) {
        $this->intent = $intent;
        return $this;
    }

    /**
     * The person (patient) who needs the nutrition order for an oral diet, nutritional supplement and/or enteral or formula feeding.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient() {
        return $this->patient;
    }

    /**
     * The person (patient) who needs the nutrition order for an oral diet, nutritional supplement and/or enteral or formula feeding.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient) {
        $this->patient = $patient;
        return $this;
    }

    /**
     * An encounter that provides additional information about the healthcare context in which this request is made.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter() {
        return $this->encounter;
    }

    /**
     * An encounter that provides additional information about the healthcare context in which this request is made.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $encounter
     * @return $this
     */
    public function setEncounter($encounter) {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * The date and time that this nutrition order was requested.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDateTime() {
        return $this->dateTime;
    }

    /**
     * The date and time that this nutrition order was requested.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $dateTime
     * @return $this
     */
    public function setDateTime($dateTime) {
        $this->dateTime = $dateTime;
        return $this;
    }

    /**
     * The practitioner that holds legal responsibility for ordering the diet, nutritional supplement, or formula feedings.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrderer() {
        return $this->orderer;
    }

    /**
     * The practitioner that holds legal responsibility for ordering the diet, nutritional supplement, or formula feedings.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $orderer
     * @return $this
     */
    public function setOrderer($orderer) {
        $this->orderer = $orderer;
        return $this;
    }

    /**
     * A link to a record of allergies or intolerances  which should be included in the nutrition order.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAllergyIntolerance() {
        return $this->allergyIntolerance;
    }

    /**
     * A link to a record of allergies or intolerances  which should be included in the nutrition order.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $allergyIntolerance
     * @return $this
     */
    public function addAllergyIntolerance($allergyIntolerance) {
        $this->allergyIntolerance[] = $allergyIntolerance;
        return $this;
    }

    /**
     * This modifier is used to convey order-specific modifiers about the type of food that should be given. These can be derived from patient allergies, intolerances, or preferences such as Halal, Vegan or Kosher. This modifier applies to the entire nutrition order inclusive of the oral diet, nutritional supplements and enteral formula feedings.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getFoodPreferenceModifier() {
        return $this->foodPreferenceModifier;
    }

    /**
     * This modifier is used to convey order-specific modifiers about the type of food that should be given. These can be derived from patient allergies, intolerances, or preferences such as Halal, Vegan or Kosher. This modifier applies to the entire nutrition order inclusive of the oral diet, nutritional supplements and enteral formula feedings.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $foodPreferenceModifier
     * @return $this
     */
    public function addFoodPreferenceModifier($foodPreferenceModifier) {
        $this->foodPreferenceModifier[] = $foodPreferenceModifier;
        return $this;
    }

    /**
     * This modifier is used to convey Order-specific modifier about the type of oral food or oral fluids that should not be given. These can be derived from patient allergies, intolerances, or preferences such as No Red Meat, No Soy or No Wheat or  Gluten-Free.  While it should not be necessary to repeat allergy or intolerance information captured in the referenced AllergyIntolerance resource in the excludeFoodModifier, this element may be used to convey additional specificity related to foods that should be eliminated from the patient’s diet for any reason.  This modifier applies to the entire nutrition order inclusive of the oral diet, nutritional supplements and enteral formula feedings.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getExcludeFoodModifier() {
        return $this->excludeFoodModifier;
    }

    /**
     * This modifier is used to convey Order-specific modifier about the type of oral food or oral fluids that should not be given. These can be derived from patient allergies, intolerances, or preferences such as No Red Meat, No Soy or No Wheat or  Gluten-Free.  While it should not be necessary to repeat allergy or intolerance information captured in the referenced AllergyIntolerance resource in the excludeFoodModifier, this element may be used to convey additional specificity related to foods that should be eliminated from the patient’s diet for any reason.  This modifier applies to the entire nutrition order inclusive of the oral diet, nutritional supplements and enteral formula feedings.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $excludeFoodModifier
     * @return $this
     */
    public function addExcludeFoodModifier($excludeFoodModifier) {
        $this->excludeFoodModifier[] = $excludeFoodModifier;
        return $this;
    }

    /**
     * Diet given orally in contrast to enteral (tube) feeding.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRNutritionOrder\FHIRNutritionOrderOralDiet
     */
    public function getOralDiet() {
        return $this->oralDiet;
    }

    /**
     * Diet given orally in contrast to enteral (tube) feeding.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRNutritionOrder\FHIRNutritionOrderOralDiet $oralDiet
     * @return $this
     */
    public function setOralDiet($oralDiet) {
        $this->oralDiet = $oralDiet;
        return $this;
    }

    /**
     * Oral nutritional products given in order to add further nutritional value to the patient's diet.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRNutritionOrder\FHIRNutritionOrderSupplement[]
     */
    public function getSupplement() {
        return $this->supplement;
    }

    /**
     * Oral nutritional products given in order to add further nutritional value to the patient's diet.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRNutritionOrder\FHIRNutritionOrderSupplement $supplement
     * @return $this
     */
    public function addSupplement($supplement) {
        $this->supplement[] = $supplement;
        return $this;
    }

    /**
     * Feeding provided through the gastrointestinal tract via a tube, catheter, or stoma that delivers nutrition distal to the oral cavity.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula
     */
    public function getEnteralFormula() {
        return $this->enteralFormula;
    }

    /**
     * Feeding provided through the gastrointestinal tract via a tube, catheter, or stoma that delivers nutrition distal to the oral cavity.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula $enteralFormula
     * @return $this
     */
    public function setEnteralFormula($enteralFormula) {
        $this->enteralFormula = $enteralFormula;
        return $this;
    }

    /**
     * Comments made about the {{title}} by the requester, performer, subject or other participants.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * Comments made about the {{title}} by the requester, performer, subject or other participants.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note) {
        $this->note[] = $note;
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
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['intent'])) {
                $this->setIntent($data['intent']);
            }
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['encounter'])) {
                $this->setEncounter($data['encounter']);
            }
            if (isset($data['dateTime'])) {
                $this->setDateTime($data['dateTime']);
            }
            if (isset($data['orderer'])) {
                $this->setOrderer($data['orderer']);
            }
            if (isset($data['allergyIntolerance'])) {
                if (is_array($data['allergyIntolerance'])) {
                    foreach($data['allergyIntolerance'] as $d) {
                        $this->addAllergyIntolerance($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"allergyIntolerance" must be array of objects or null, '.gettype($data['allergyIntolerance']).' seen.');
                }
            }
            if (isset($data['foodPreferenceModifier'])) {
                if (is_array($data['foodPreferenceModifier'])) {
                    foreach($data['foodPreferenceModifier'] as $d) {
                        $this->addFoodPreferenceModifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"foodPreferenceModifier" must be array of objects or null, '.gettype($data['foodPreferenceModifier']).' seen.');
                }
            }
            if (isset($data['excludeFoodModifier'])) {
                if (is_array($data['excludeFoodModifier'])) {
                    foreach($data['excludeFoodModifier'] as $d) {
                        $this->addExcludeFoodModifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"excludeFoodModifier" must be array of objects or null, '.gettype($data['excludeFoodModifier']).' seen.');
                }
            }
            if (isset($data['oralDiet'])) {
                $this->setOralDiet($data['oralDiet']);
            }
            if (isset($data['supplement'])) {
                if (is_array($data['supplement'])) {
                    foreach($data['supplement'] as $d) {
                        $this->addSupplement($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"supplement" must be array of objects or null, '.gettype($data['supplement']).' seen.');
                }
            }
            if (isset($data['enteralFormula'])) {
                $this->setEnteralFormula($data['enteralFormula']);
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
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->intent)) $json['intent'] = $this->intent;
        if (isset($this->patient)) $json['patient'] = $this->patient;
        if (isset($this->encounter)) $json['encounter'] = $this->encounter;
        if (isset($this->dateTime)) $json['dateTime'] = $this->dateTime;
        if (isset($this->orderer)) $json['orderer'] = $this->orderer;
        if (0 < count($this->allergyIntolerance)) {
            $json['allergyIntolerance'] = [];
            foreach($this->allergyIntolerance as $allergyIntolerance) {
                if (null !== $allergyIntolerance) $json['allergyIntolerance'][] = $allergyIntolerance;
            }
        }
        if (0 < count($this->foodPreferenceModifier)) {
            $json['foodPreferenceModifier'] = [];
            foreach($this->foodPreferenceModifier as $foodPreferenceModifier) {
                if (null !== $foodPreferenceModifier) $json['foodPreferenceModifier'][] = $foodPreferenceModifier;
            }
        }
        if (0 < count($this->excludeFoodModifier)) {
            $json['excludeFoodModifier'] = [];
            foreach($this->excludeFoodModifier as $excludeFoodModifier) {
                if (null !== $excludeFoodModifier) $json['excludeFoodModifier'][] = $excludeFoodModifier;
            }
        }
        if (isset($this->oralDiet)) $json['oralDiet'] = $this->oralDiet;
        if (0 < count($this->supplement)) {
            $json['supplement'] = [];
            foreach($this->supplement as $supplement) {
                if (null !== $supplement) $json['supplement'][] = $supplement;
            }
        }
        if (isset($this->enteralFormula)) $json['enteralFormula'] = $this->enteralFormula;
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                if (null !== $note) $json['note'][] = $note;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<NutritionOrder xmlns="http://hl7.org/fhir"></NutritionOrder>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->intent)) $this->intent->xmlSerialize(true, $sxe->addChild('intent'));
        if (isset($this->patient)) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (isset($this->encounter)) $this->encounter->xmlSerialize(true, $sxe->addChild('encounter'));
        if (isset($this->dateTime)) $this->dateTime->xmlSerialize(true, $sxe->addChild('dateTime'));
        if (isset($this->orderer)) $this->orderer->xmlSerialize(true, $sxe->addChild('orderer'));
        if (0 < count($this->allergyIntolerance)) {
            foreach($this->allergyIntolerance as $allergyIntolerance) {
                $allergyIntolerance->xmlSerialize(true, $sxe->addChild('allergyIntolerance'));
            }
        }
        if (0 < count($this->foodPreferenceModifier)) {
            foreach($this->foodPreferenceModifier as $foodPreferenceModifier) {
                $foodPreferenceModifier->xmlSerialize(true, $sxe->addChild('foodPreferenceModifier'));
            }
        }
        if (0 < count($this->excludeFoodModifier)) {
            foreach($this->excludeFoodModifier as $excludeFoodModifier) {
                $excludeFoodModifier->xmlSerialize(true, $sxe->addChild('excludeFoodModifier'));
            }
        }
        if (isset($this->oralDiet)) $this->oralDiet->xmlSerialize(true, $sxe->addChild('oralDiet'));
        if (0 < count($this->supplement)) {
            foreach($this->supplement as $supplement) {
                $supplement->xmlSerialize(true, $sxe->addChild('supplement'));
            }
        }
        if (isset($this->enteralFormula)) $this->enteralFormula->xmlSerialize(true, $sxe->addChild('enteralFormula'));
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}
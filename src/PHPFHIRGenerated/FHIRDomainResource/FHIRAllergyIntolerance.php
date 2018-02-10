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
 * Risk of harmful or undesirable, physiological response which is unique to an individual and associated with exposure to a substance.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRAllergyIntolerance extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * This records identifiers associated with this allergy/intolerance concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * The clinical status of the allergy or intolerance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceClinicalStatus
     */
    public $clinicalStatus = null;

    /**
     * Assertion about certainty associated with the propensity, or potential risk, of a reaction to the identified substance (including pharmaceutical product).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceVerificationStatus
     */
    public $verificationStatus = null;

    /**
     * Identification of the underlying physiological mechanism for the reaction risk.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceType
     */
    public $type = null;

    /**
     * Category of the identified substance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCategory[]
     */
    public $category = [];

    /**
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the identified substance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCriticality
     */
    public $criticality = null;

    /**
     * Code for an allergy or intolerance statement (either a positive or a negated/excluded statement).  This may be a code for a substance or pharmaceutical product that is considered to be responsible for the adverse reaction risk (e.g., "Latex"), an allergy or intolerance condition (e.g., "Latex allergy"), or a negated/excluded code for a specific substance or class (e.g., "No latex allergy") or a general or categorical negated statement (e.g.,  "No known allergy", "No known drug allergies").  Note: the substance for a specific reaction may be different from the substance identified as the cause of the risk, but it must be consistent with it. For instance, it may be a more specific substance (e.g. a brand medication) or a composite product that includes the identified substance. It must be clinically safe to only process the 'code' and ignore the 'reaction.substance'.  If a receiving system is unable to confirm that AllergyIntolerance.reaction.substance falls within the semantic scope of AllergyIntolerance.code, then the receiving system should ignore AllergyIntolerance.reaction.substance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * The patient who has the allergy or intolerance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The encounter when the allergy or intolerance was asserted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $onsetDateTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $onsetAge = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $onsetPeriod = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $onsetRange = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $onsetString = null;

    /**
     * The date on which the existance of the AllergyIntolerance was first asserted or acknowledged.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $assertedDate = null;

    /**
     * Individual who recorded the record and takes responsibility for its content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $recorder = null;

    /**
     * The source of the information about the allergy that is recorded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $asserter = null;

    /**
     * Represents the date and/or time of the last known occurrence of a reaction event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $lastOccurrence = null;

    /**
     * Additional narrative about the propensity for the Adverse Reaction, not captured in other fields.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public $note = [];

    /**
     * Details about each adverse reaction event linked to exposure to the identified substance.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction[]
     */
    public $reaction = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'AllergyIntolerance';

    /**
     * This records identifiers associated with this allergy/intolerance concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * This records identifiers associated with this allergy/intolerance concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The clinical status of the allergy or intolerance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceClinicalStatus
     */
    public function getClinicalStatus() {
        return $this->clinicalStatus;
    }

    /**
     * The clinical status of the allergy or intolerance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceClinicalStatus $clinicalStatus
     * @return $this
     */
    public function setClinicalStatus($clinicalStatus) {
        $this->clinicalStatus = $clinicalStatus;
        return $this;
    }

    /**
     * Assertion about certainty associated with the propensity, or potential risk, of a reaction to the identified substance (including pharmaceutical product).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceVerificationStatus
     */
    public function getVerificationStatus() {
        return $this->verificationStatus;
    }

    /**
     * Assertion about certainty associated with the propensity, or potential risk, of a reaction to the identified substance (including pharmaceutical product).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceVerificationStatus $verificationStatus
     * @return $this
     */
    public function setVerificationStatus($verificationStatus) {
        $this->verificationStatus = $verificationStatus;
        return $this;
    }

    /**
     * Identification of the underlying physiological mechanism for the reaction risk.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceType
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Identification of the underlying physiological mechanism for the reaction risk.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceType $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Category of the identified substance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCategory[]
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * Category of the identified substance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCategory $category
     * @return $this
     */
    public function addCategory($category) {
        $this->category[] = $category;
        return $this;
    }

    /**
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the identified substance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCriticality
     */
    public function getCriticality() {
        return $this->criticality;
    }

    /**
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the identified substance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCriticality $criticality
     * @return $this
     */
    public function setCriticality($criticality) {
        $this->criticality = $criticality;
        return $this;
    }

    /**
     * Code for an allergy or intolerance statement (either a positive or a negated/excluded statement).  This may be a code for a substance or pharmaceutical product that is considered to be responsible for the adverse reaction risk (e.g., "Latex"), an allergy or intolerance condition (e.g., "Latex allergy"), or a negated/excluded code for a specific substance or class (e.g., "No latex allergy") or a general or categorical negated statement (e.g.,  "No known allergy", "No known drug allergies").  Note: the substance for a specific reaction may be different from the substance identified as the cause of the risk, but it must be consistent with it. For instance, it may be a more specific substance (e.g. a brand medication) or a composite product that includes the identified substance. It must be clinically safe to only process the 'code' and ignore the 'reaction.substance'.  If a receiving system is unable to confirm that AllergyIntolerance.reaction.substance falls within the semantic scope of AllergyIntolerance.code, then the receiving system should ignore AllergyIntolerance.reaction.substance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Code for an allergy or intolerance statement (either a positive or a negated/excluded statement).  This may be a code for a substance or pharmaceutical product that is considered to be responsible for the adverse reaction risk (e.g., "Latex"), an allergy or intolerance condition (e.g., "Latex allergy"), or a negated/excluded code for a specific substance or class (e.g., "No latex allergy") or a general or categorical negated statement (e.g.,  "No known allergy", "No known drug allergies").  Note: the substance for a specific reaction may be different from the substance identified as the cause of the risk, but it must be consistent with it. For instance, it may be a more specific substance (e.g. a brand medication) or a composite product that includes the identified substance. It must be clinically safe to only process the 'code' and ignore the 'reaction.substance'.  If a receiving system is unable to confirm that AllergyIntolerance.reaction.substance falls within the semantic scope of AllergyIntolerance.code, then the receiving system should ignore AllergyIntolerance.reaction.substance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * The patient who has the allergy or intolerance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient() {
        return $this->patient;
    }

    /**
     * The patient who has the allergy or intolerance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient) {
        $this->patient = $patient;
        return $this;
    }

    /**
     * The encounter when the allergy or intolerance was asserted.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter() {
        return $this->encounter;
    }

    /**
     * The encounter when the allergy or intolerance was asserted.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $encounter
     * @return $this
     */
    public function setEncounter($encounter) {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getOnsetDateTime() {
        return $this->onsetDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $onsetDateTime
     * @return $this
     */
    public function setOnsetDateTime($onsetDateTime) {
        $this->onsetDateTime = $onsetDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getOnsetAge() {
        return $this->onsetAge;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge $onsetAge
     * @return $this
     */
    public function setOnsetAge($onsetAge) {
        $this->onsetAge = $onsetAge;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getOnsetPeriod() {
        return $this->onsetPeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $onsetPeriod
     * @return $this
     */
    public function setOnsetPeriod($onsetPeriod) {
        $this->onsetPeriod = $onsetPeriod;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getOnsetRange() {
        return $this->onsetRange;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $onsetRange
     * @return $this
     */
    public function setOnsetRange($onsetRange) {
        $this->onsetRange = $onsetRange;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getOnsetString() {
        return $this->onsetString;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $onsetString
     * @return $this
     */
    public function setOnsetString($onsetString) {
        $this->onsetString = $onsetString;
        return $this;
    }

    /**
     * The date on which the existance of the AllergyIntolerance was first asserted or acknowledged.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getAssertedDate() {
        return $this->assertedDate;
    }

    /**
     * The date on which the existance of the AllergyIntolerance was first asserted or acknowledged.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $assertedDate
     * @return $this
     */
    public function setAssertedDate($assertedDate) {
        $this->assertedDate = $assertedDate;
        return $this;
    }

    /**
     * Individual who recorded the record and takes responsibility for its content.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRecorder() {
        return $this->recorder;
    }

    /**
     * Individual who recorded the record and takes responsibility for its content.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $recorder
     * @return $this
     */
    public function setRecorder($recorder) {
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * The source of the information about the allergy that is recorded.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAsserter() {
        return $this->asserter;
    }

    /**
     * The source of the information about the allergy that is recorded.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $asserter
     * @return $this
     */
    public function setAsserter($asserter) {
        $this->asserter = $asserter;
        return $this;
    }

    /**
     * Represents the date and/or time of the last known occurrence of a reaction event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getLastOccurrence() {
        return $this->lastOccurrence;
    }

    /**
     * Represents the date and/or time of the last known occurrence of a reaction event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $lastOccurrence
     * @return $this
     */
    public function setLastOccurrence($lastOccurrence) {
        $this->lastOccurrence = $lastOccurrence;
        return $this;
    }

    /**
     * Additional narrative about the propensity for the Adverse Reaction, not captured in other fields.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * Additional narrative about the propensity for the Adverse Reaction, not captured in other fields.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note) {
        $this->note[] = $note;
        return $this;
    }

    /**
     * Details about each adverse reaction event linked to exposure to the identified substance.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction[]
     */
    public function getReaction() {
        return $this->reaction;
    }

    /**
     * Details about each adverse reaction event linked to exposure to the identified substance.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction $reaction
     * @return $this
     */
    public function addReaction($reaction) {
        $this->reaction[] = $reaction;
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
            if (isset($data['clinicalStatus'])) {
                $this->setClinicalStatus($data['clinicalStatus']);
            }
            if (isset($data['verificationStatus'])) {
                $this->setVerificationStatus($data['verificationStatus']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['category'])) {
                if (is_array($data['category'])) {
                    foreach($data['category'] as $d) {
                        $this->addCategory($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"category" must be array of objects or null, '.gettype($data['category']).' seen.');
                }
            }
            if (isset($data['criticality'])) {
                $this->setCriticality($data['criticality']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['encounter'])) {
                $this->setEncounter($data['encounter']);
            }
            if (isset($data['onsetDateTime'])) {
                $this->setOnsetDateTime($data['onsetDateTime']);
            }
            if (isset($data['onsetAge'])) {
                $this->setOnsetAge($data['onsetAge']);
            }
            if (isset($data['onsetPeriod'])) {
                $this->setOnsetPeriod($data['onsetPeriod']);
            }
            if (isset($data['onsetRange'])) {
                $this->setOnsetRange($data['onsetRange']);
            }
            if (isset($data['onsetString'])) {
                $this->setOnsetString($data['onsetString']);
            }
            if (isset($data['assertedDate'])) {
                $this->setAssertedDate($data['assertedDate']);
            }
            if (isset($data['recorder'])) {
                $this->setRecorder($data['recorder']);
            }
            if (isset($data['asserter'])) {
                $this->setAsserter($data['asserter']);
            }
            if (isset($data['lastOccurrence'])) {
                $this->setLastOccurrence($data['lastOccurrence']);
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
            if (isset($data['reaction'])) {
                if (is_array($data['reaction'])) {
                    foreach($data['reaction'] as $d) {
                        $this->addReaction($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"reaction" must be array of objects or null, '.gettype($data['reaction']).' seen.');
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
        if (isset($this->clinicalStatus)) $json['clinicalStatus'] = $this->clinicalStatus;
        if (isset($this->verificationStatus)) $json['verificationStatus'] = $this->verificationStatus;
        if (isset($this->type)) $json['type'] = $this->type;
        if (0 < count($this->category)) {
            $json['category'] = [];
            foreach($this->category as $category) {
                if (null !== $category) $json['category'][] = $category;
            }
        }
        if (isset($this->criticality)) $json['criticality'] = $this->criticality;
        if (isset($this->code)) $json['code'] = $this->code;
        if (isset($this->patient)) $json['patient'] = $this->patient;
        if (isset($this->encounter)) $json['encounter'] = $this->encounter;
        if (isset($this->onsetDateTime)) $json['onsetDateTime'] = $this->onsetDateTime;
        if (isset($this->onsetAge)) $json['onsetAge'] = $this->onsetAge;
        if (isset($this->onsetPeriod)) $json['onsetPeriod'] = $this->onsetPeriod;
        if (isset($this->onsetRange)) $json['onsetRange'] = $this->onsetRange;
        if (isset($this->onsetString)) $json['onsetString'] = $this->onsetString;
        if (isset($this->assertedDate)) $json['assertedDate'] = $this->assertedDate;
        if (isset($this->recorder)) $json['recorder'] = $this->recorder;
        if (isset($this->asserter)) $json['asserter'] = $this->asserter;
        if (isset($this->lastOccurrence)) $json['lastOccurrence'] = $this->lastOccurrence;
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                if (null !== $note) $json['note'][] = $note;
            }
        }
        if (0 < count($this->reaction)) {
            $json['reaction'] = [];
            foreach($this->reaction as $reaction) {
                if (null !== $reaction) $json['reaction'][] = $reaction;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<AllergyIntolerance xmlns="http://hl7.org/fhir"></AllergyIntolerance>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->clinicalStatus)) $this->clinicalStatus->xmlSerialize(true, $sxe->addChild('clinicalStatus'));
        if (isset($this->verificationStatus)) $this->verificationStatus->xmlSerialize(true, $sxe->addChild('verificationStatus'));
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (0 < count($this->category)) {
            foreach($this->category as $category) {
                $category->xmlSerialize(true, $sxe->addChild('category'));
            }
        }
        if (isset($this->criticality)) $this->criticality->xmlSerialize(true, $sxe->addChild('criticality'));
        if (isset($this->code)) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (isset($this->patient)) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (isset($this->encounter)) $this->encounter->xmlSerialize(true, $sxe->addChild('encounter'));
        if (isset($this->onsetDateTime)) $this->onsetDateTime->xmlSerialize(true, $sxe->addChild('onsetDateTime'));
        if (isset($this->onsetAge)) $this->onsetAge->xmlSerialize(true, $sxe->addChild('onsetAge'));
        if (isset($this->onsetPeriod)) $this->onsetPeriod->xmlSerialize(true, $sxe->addChild('onsetPeriod'));
        if (isset($this->onsetRange)) $this->onsetRange->xmlSerialize(true, $sxe->addChild('onsetRange'));
        if (isset($this->onsetString)) $this->onsetString->xmlSerialize(true, $sxe->addChild('onsetString'));
        if (isset($this->assertedDate)) $this->assertedDate->xmlSerialize(true, $sxe->addChild('assertedDate'));
        if (isset($this->recorder)) $this->recorder->xmlSerialize(true, $sxe->addChild('recorder'));
        if (isset($this->asserter)) $this->asserter->xmlSerialize(true, $sxe->addChild('asserter'));
        if (isset($this->lastOccurrence)) $this->lastOccurrence->xmlSerialize(true, $sxe->addChild('lastOccurrence'));
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if (0 < count($this->reaction)) {
            foreach($this->reaction as $reaction) {
                $reaction->xmlSerialize(true, $sxe->addChild('reaction'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}
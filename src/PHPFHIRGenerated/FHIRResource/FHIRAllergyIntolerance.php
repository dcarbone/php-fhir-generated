<?php namespace PHPFHIRGenerated\FHIRResource;

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

use PHPFHIRGenerated\FHIRResource\FHIRResource;

/**
 * Indicates the patient has a susceptibility to an adverse reaction upon exposure to a specified substance.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRAllergyIntolerance extends FHIRResource implements \JsonSerializable
{
    /**
     * This records identifiers associated with this allergy/intolerance concern that are defined by business processed and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Criticality of the sensitivity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCriticality
     */
    public $criticality = null;

    /**
     * Type of the sensitivity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSensitivityType
     */
    public $sensitivityType = null;

    /**
     * Date when the sensitivity was recorded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $recordedDate = null;

    /**
     * Status of the sensitivity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSensitivityStatus
     */
    public $status = null;

    /**
     * The patient who has the allergy or intolerance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $subject = null;

    /**
     * Indicates who has responsibility for the record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $recorder = null;

    /**
     * The substance that causes the sensitivity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $substance = null;

    /**
     * Reactions associated with the sensitivity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public $reaction = array();

    /**
     * Observations that confirm or refute the sensitivity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public $sensitivityTest = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'AllergyIntolerance';

    /**
     * This records identifiers associated with this allergy/intolerance concern that are defined by business processed and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * This records identifiers associated with this allergy/intolerance concern that are defined by business processed and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Criticality of the sensitivity.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCriticality
     */
    public function getCriticality()
    {
        return $this->criticality;
    }

    /**
     * Criticality of the sensitivity.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCriticality $criticality
     * @return $this
     */
    public function setCriticality($criticality)
    {
        $this->criticality = $criticality;
        return $this;
    }

    /**
     * Type of the sensitivity.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSensitivityType
     */
    public function getSensitivityType()
    {
        return $this->sensitivityType;
    }

    /**
     * Type of the sensitivity.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSensitivityType $sensitivityType
     * @return $this
     */
    public function setSensitivityType($sensitivityType)
    {
        $this->sensitivityType = $sensitivityType;
        return $this;
    }

    /**
     * Date when the sensitivity was recorded.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getRecordedDate()
    {
        return $this->recordedDate;
    }

    /**
     * Date when the sensitivity was recorded.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $recordedDate
     * @return $this
     */
    public function setRecordedDate($recordedDate)
    {
        $this->recordedDate = $recordedDate;
        return $this;
    }

    /**
     * Status of the sensitivity.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSensitivityStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status of the sensitivity.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSensitivityStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The patient who has the allergy or intolerance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The patient who has the allergy or intolerance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Indicates who has responsibility for the record.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getRecorder()
    {
        return $this->recorder;
    }

    /**
     * Indicates who has responsibility for the record.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $recorder
     * @return $this
     */
    public function setRecorder($recorder)
    {
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * The substance that causes the sensitivity.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getSubstance()
    {
        return $this->substance;
    }

    /**
     * The substance that causes the sensitivity.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $substance
     * @return $this
     */
    public function setSubstance($substance)
    {
        $this->substance = $substance;
        return $this;
    }

    /**
     * Reactions associated with the sensitivity.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public function getReaction()
    {
        return $this->reaction;
    }

    /**
     * Reactions associated with the sensitivity.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $reaction
     * @return $this
     */
    public function addReaction($reaction)
    {
        $this->reaction[] = $reaction;
        return $this;
    }

    /**
     * Observations that confirm or refute the sensitivity.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public function getSensitivityTest()
    {
        return $this->sensitivityTest;
    }

    /**
     * Observations that confirm or refute the sensitivity.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $sensitivityTest
     * @return $this
     */
    public function addSensitivityTest($sensitivityTest)
    {
        $this->sensitivityTest[] = $sensitivityTest;
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
                $json['identifier'][] = $identifier;
            }
        }
        if (null !== $this->criticality) $json['criticality'] = $this->criticality;
        if (null !== $this->sensitivityType) $json['sensitivityType'] = $this->sensitivityType;
        if (null !== $this->recordedDate) $json['recordedDate'] = $this->recordedDate;
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->subject) $json['subject'] = $this->subject;
        if (null !== $this->recorder) $json['recorder'] = $this->recorder;
        if (null !== $this->substance) $json['substance'] = $this->substance;
        if (0 < count($this->reaction)) {
            $json['reaction'] = [];
            foreach($this->reaction as $reaction) {
                $json['reaction'][] = $reaction;
            }
        }
        if (0 < count($this->sensitivityTest)) {
            $json['sensitivityTest'] = [];
            foreach($this->sensitivityTest as $sensitivityTest) {
                $json['sensitivityTest'][] = $sensitivityTest;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<AllergyIntolerance xmlns="http://hl7.org/fhir"></AllergyIntolerance>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->criticality) $this->criticality->xmlSerialize(true, $sxe->addChild('criticality'));
        if (null !== $this->sensitivityType) $this->sensitivityType->xmlSerialize(true, $sxe->addChild('sensitivityType'));
        if (null !== $this->recordedDate) $this->recordedDate->xmlSerialize(true, $sxe->addChild('recordedDate'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->recorder) $this->recorder->xmlSerialize(true, $sxe->addChild('recorder'));
        if (null !== $this->substance) $this->substance->xmlSerialize(true, $sxe->addChild('substance'));
        if (0 < count($this->reaction)) {
            foreach($this->reaction as $reaction) {
                $reaction->xmlSerialize(true, $sxe->addChild('reaction'));
            }
        }
        if (0 < count($this->sensitivityTest)) {
            foreach($this->sensitivityTest as $sensitivityTest) {
                $sensitivityTest->xmlSerialize(true, $sxe->addChild('sensitivityTest'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}
<?php namespace PHPFHIRGenerated\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 28th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
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
use PHPFHIRGenerated\JsonSerializable;

/**
 * Records an unexpected reaction suspected to be related to the exposure of the reaction subject to a substance.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRAdverseReaction extends FHIRResource implements JsonSerializable
{
    /**
     * This records identifiers associated with this reaction that are defined by business processed and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The date (and possibly time) when the reaction began.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * The subject of the adverse reaction.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $subject = null;

    /**
     * If true, indicates that no reaction occurred.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $didNotOccurFlag = null;

    /**
     * Identifies the individual responsible for the information in the reaction record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $recorder = null;

    /**
     * The signs and symptoms that were observed as part of the reaction.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRAdverseReaction\FHIRAdverseReactionSymptom[]
     */
    public $symptom = array();

    /**
     * An exposure to a substance that preceded a reaction occurrence.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRAdverseReaction\FHIRAdverseReactionExposure[]
     */
    public $exposure = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'AdverseReaction';

    /**
     * This records identifiers associated with this reaction that are defined by business processed and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * This records identifiers associated with this reaction that are defined by business processed and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The date (and possibly time) when the reaction began.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date (and possibly time) when the reaction began.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * The subject of the adverse reaction.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The subject of the adverse reaction.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * If true, indicates that no reaction occurred.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getDidNotOccurFlag()
    {
        return $this->didNotOccurFlag;
    }

    /**
     * If true, indicates that no reaction occurred.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $didNotOccurFlag
     * @return $this
     */
    public function setDidNotOccurFlag($didNotOccurFlag)
    {
        $this->didNotOccurFlag = $didNotOccurFlag;
        return $this;
    }

    /**
     * Identifies the individual responsible for the information in the reaction record.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getRecorder()
    {
        return $this->recorder;
    }

    /**
     * Identifies the individual responsible for the information in the reaction record.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $recorder
     * @return $this
     */
    public function setRecorder($recorder)
    {
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * The signs and symptoms that were observed as part of the reaction.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRAdverseReaction\FHIRAdverseReactionSymptom[]
     */
    public function getSymptom()
    {
        return $this->symptom;
    }

    /**
     * The signs and symptoms that were observed as part of the reaction.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRAdverseReaction\FHIRAdverseReactionSymptom[] $symptom
     * @return $this
     */
    public function addSymptom($symptom)
    {
        $this->symptom[] = $symptom;
        return $this;
    }

    /**
     * An exposure to a substance that preceded a reaction occurrence.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRAdverseReaction\FHIRAdverseReactionExposure[]
     */
    public function getExposure()
    {
        return $this->exposure;
    }

    /**
     * An exposure to a substance that preceded a reaction occurrence.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRAdverseReaction\FHIRAdverseReactionExposure[] $exposure
     * @return $this
     */
    public function addExposure($exposure)
    {
        $this->exposure[] = $exposure;
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
            $json['identifier'] = array();
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier->jsonSerialize();
            }
        }
        if (null !== $this->date) $json['date'] = $this->date->jsonSerialize();
        if (null !== $this->subject) $json['subject'] = $this->subject->jsonSerialize();
        if (null !== $this->didNotOccurFlag) $json['didNotOccurFlag'] = $this->didNotOccurFlag->jsonSerialize();
        if (null !== $this->recorder) $json['recorder'] = $this->recorder->jsonSerialize();
        if (0 < count($this->symptom)) {
            $json['symptom'] = array();
            foreach($this->symptom as $symptom) {
                $json['symptom'][] = $symptom->jsonSerialize();
            }
        }
        if (0 < count($this->exposure)) {
            $json['exposure'] = array();
            foreach($this->exposure as $exposure) {
                $json['exposure'][] = $exposure->jsonSerialize();
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<AdverseReaction xmlns="http://hl7.org/fhir"></AdverseReaction>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->didNotOccurFlag) $this->didNotOccurFlag->xmlSerialize(true, $sxe->addChild('didNotOccurFlag'));
        if (null !== $this->recorder) $this->recorder->xmlSerialize(true, $sxe->addChild('recorder'));
        if (0 < count($this->symptom)) {
            foreach($this->symptom as $symptom) {
                $symptom->xmlSerialize(true, $sxe->addChild('symptom'));
            }
        }
        if (0 < count($this->exposure)) {
            foreach($this->exposure as $exposure) {
                $exposure->xmlSerialize(true, $sxe->addChild('exposure'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}
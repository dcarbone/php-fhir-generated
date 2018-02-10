<?php namespace PHPFHIRGenerated\FHIRResource\FHIRAdverseEvent;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * Actual or  potential/avoided event causing unintended physical injury resulting from or contributed to by medical care, a research study or other healthcare setting factors that requires additional monitoring, treatment, or hospitalization, or that results in death.
 */
class FHIRAdverseEventCausality extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Assessment of if the entity caused the event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $assessment = null;

    /**
     * AdverseEvent.suspectEntity.causalityProductRelatedness.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $productRelatedness = null;

    /**
     * AdverseEvent.suspectEntity.causalityAuthor.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $author = null;

    /**
     * ProbabilityScale | Bayesian | Checklist.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $method = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'AdverseEvent.Causality';

    /**
     * Assessment of if the entity caused the event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAssessment() {
        return $this->assessment;
    }

    /**
     * Assessment of if the entity caused the event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $assessment
     * @return $this
     */
    public function setAssessment($assessment) {
        $this->assessment = $assessment;
        return $this;
    }

    /**
     * AdverseEvent.suspectEntity.causalityProductRelatedness.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getProductRelatedness() {
        return $this->productRelatedness;
    }

    /**
     * AdverseEvent.suspectEntity.causalityProductRelatedness.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $productRelatedness
     * @return $this
     */
    public function setProductRelatedness($productRelatedness) {
        $this->productRelatedness = $productRelatedness;
        return $this;
    }

    /**
     * AdverseEvent.suspectEntity.causalityAuthor.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAuthor() {
        return $this->author;
    }

    /**
     * AdverseEvent.suspectEntity.causalityAuthor.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $author
     * @return $this
     */
    public function setAuthor($author) {
        $this->author = $author;
        return $this;
    }

    /**
     * ProbabilityScale | Bayesian | Checklist.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod() {
        return $this->method;
    }

    /**
     * ProbabilityScale | Bayesian | Checklist.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $method
     * @return $this
     */
    public function setMethod($method) {
        $this->method = $method;
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
            if (isset($data['assessment'])) {
                $this->setAssessment($data['assessment']);
            }
            if (isset($data['productRelatedness'])) {
                $this->setProductRelatedness($data['productRelatedness']);
            }
            if (isset($data['author'])) {
                $this->setAuthor($data['author']);
            }
            if (isset($data['method'])) {
                $this->setMethod($data['method']);
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
        if (isset($this->assessment)) $json['assessment'] = $this->assessment;
        if (isset($this->productRelatedness)) $json['productRelatedness'] = $this->productRelatedness;
        if (isset($this->author)) $json['author'] = $this->author;
        if (isset($this->method)) $json['method'] = $this->method;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<AdverseEventCausality xmlns="http://hl7.org/fhir"></AdverseEventCausality>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->assessment)) $this->assessment->xmlSerialize(true, $sxe->addChild('assessment'));
        if (isset($this->productRelatedness)) $this->productRelatedness->xmlSerialize(true, $sxe->addChild('productRelatedness'));
        if (isset($this->author)) $this->author->xmlSerialize(true, $sxe->addChild('author'));
        if (isset($this->method)) $this->method->xmlSerialize(true, $sxe->addChild('method'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}
<?php namespace PHPFHIRGenerated\FHIRResource\FHIRAdverseEvent;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 20th, 2017
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
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
class FHIRAdverseEventSuspectEntity extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Identifies the actual instance of what caused the adverse event.  May be a substance, medication, medication administration, medication statement or a device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $instance = null;

    /**
     * causality1 | causality2.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAdverseEventCausality
     */
    public $causality = null;

    /**
     * assess1 | assess2.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $causalityAssessment = null;

    /**
     * AdverseEvent.suspectEntity.causalityProductRelatedness.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $causalityProductRelatedness = null;

    /**
     * method1 | method2.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $causalityMethod = null;

    /**
     * AdverseEvent.suspectEntity.causalityAuthor.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $causalityAuthor = null;

    /**
     * result1 | result2.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $causalityResult = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'AdverseEvent.SuspectEntity';

    /**
     * Identifies the actual instance of what caused the adverse event.  May be a substance, medication, medication administration, medication statement or a device.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Identifies the actual instance of what caused the adverse event.  May be a substance, medication, medication administration, medication statement or a device.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $instance
     * @return $this
     */
    public function setInstance($instance)
    {
        $this->instance = $instance;
        return $this;
    }

    /**
     * causality1 | causality2.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAdverseEventCausality
     */
    public function getCausality()
    {
        return $this->causality;
    }

    /**
     * causality1 | causality2.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAdverseEventCausality $causality
     * @return $this
     */
    public function setCausality($causality)
    {
        $this->causality = $causality;
        return $this;
    }

    /**
     * assess1 | assess2.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCausalityAssessment()
    {
        return $this->causalityAssessment;
    }

    /**
     * assess1 | assess2.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $causalityAssessment
     * @return $this
     */
    public function setCausalityAssessment($causalityAssessment)
    {
        $this->causalityAssessment = $causalityAssessment;
        return $this;
    }

    /**
     * AdverseEvent.suspectEntity.causalityProductRelatedness.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCausalityProductRelatedness()
    {
        return $this->causalityProductRelatedness;
    }

    /**
     * AdverseEvent.suspectEntity.causalityProductRelatedness.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $causalityProductRelatedness
     * @return $this
     */
    public function setCausalityProductRelatedness($causalityProductRelatedness)
    {
        $this->causalityProductRelatedness = $causalityProductRelatedness;
        return $this;
    }

    /**
     * method1 | method2.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCausalityMethod()
    {
        return $this->causalityMethod;
    }

    /**
     * method1 | method2.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $causalityMethod
     * @return $this
     */
    public function setCausalityMethod($causalityMethod)
    {
        $this->causalityMethod = $causalityMethod;
        return $this;
    }

    /**
     * AdverseEvent.suspectEntity.causalityAuthor.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCausalityAuthor()
    {
        return $this->causalityAuthor;
    }

    /**
     * AdverseEvent.suspectEntity.causalityAuthor.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $causalityAuthor
     * @return $this
     */
    public function setCausalityAuthor($causalityAuthor)
    {
        $this->causalityAuthor = $causalityAuthor;
        return $this;
    }

    /**
     * result1 | result2.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCausalityResult()
    {
        return $this->causalityResult;
    }

    /**
     * result1 | result2.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $causalityResult
     * @return $this
     */
    public function setCausalityResult($causalityResult)
    {
        $this->causalityResult = $causalityResult;
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
        if (null !== $this->instance) $json['instance'] = json_encode($this->instance);
        if (null !== $this->causality) $json['causality'] = json_encode($this->causality);
        if (null !== $this->causalityAssessment) $json['causalityAssessment'] = json_encode($this->causalityAssessment);
        if (null !== $this->causalityProductRelatedness) $json['causalityProductRelatedness'] = json_encode($this->causalityProductRelatedness);
        if (null !== $this->causalityMethod) $json['causalityMethod'] = json_encode($this->causalityMethod);
        if (null !== $this->causalityAuthor) $json['causalityAuthor'] = json_encode($this->causalityAuthor);
        if (null !== $this->causalityResult) $json['causalityResult'] = json_encode($this->causalityResult);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<AdverseEventSuspectEntity xmlns="http://hl7.org/fhir"></AdverseEventSuspectEntity>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->instance) $this->instance->xmlSerialize(true, $sxe->addChild('instance'));
        if (null !== $this->causality) $this->causality->xmlSerialize(true, $sxe->addChild('causality'));
        if (null !== $this->causalityAssessment) $this->causalityAssessment->xmlSerialize(true, $sxe->addChild('causalityAssessment'));
        if (null !== $this->causalityProductRelatedness) $this->causalityProductRelatedness->xmlSerialize(true, $sxe->addChild('causalityProductRelatedness'));
        if (null !== $this->causalityMethod) $this->causalityMethod->xmlSerialize(true, $sxe->addChild('causalityMethod'));
        if (null !== $this->causalityAuthor) $this->causalityAuthor->xmlSerialize(true, $sxe->addChild('causalityAuthor'));
        if (null !== $this->causalityResult) $this->causalityResult->xmlSerialize(true, $sxe->addChild('causalityResult'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}
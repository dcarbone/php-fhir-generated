<?php namespace PHPFHIRGenerated\FHIRElement;

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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement;

/**
 * Indicates how the medication is/was taken or should be taken by the patient.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRDosage extends FHIRElement implements \JsonSerializable
{
    /**
     * Indicates the order in which the dosage instructions should be applied or interpreted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $sequence = null;

    /**
     * Free text dosage instructions e.g. SIG.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * Supplemental instruction - e.g. "with meals".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $additionalInstruction = array();

    /**
     * Instructions in terms that are understood by the patient or consumer.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $patientInstruction = null;

    /**
     * When medication should be administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public $timing = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $asNeededBoolean = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $asNeededCodeableConcept = null;

    /**
     * Body site to administer to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $site = null;

    /**
     * How drug should enter body.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $route = null;

    /**
     * Technique for administering medication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $method = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $doseRange = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $doseQuantity = null;

    /**
     * Upper limit on medication per unit of time.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $maxDosePerPeriod = null;

    /**
     * Upper limit on medication per administration.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $maxDosePerAdministration = null;

    /**
     * Upper limit on medication per lifetime of the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $maxDosePerLifetime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $rateRatio = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $rateRange = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $rateQuantity = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Dosage';

    /**
     * Indicates the order in which the dosage instructions should be applied or interpreted.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Indicates the order in which the dosage instructions should be applied or interpreted.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $sequence
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Free text dosage instructions e.g. SIG.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Free text dosage instructions e.g. SIG.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $text
     * @return $this
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Supplemental instruction - e.g. "with meals".
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getAdditionalInstruction()
    {
        return $this->additionalInstruction;
    }

    /**
     * Supplemental instruction - e.g. "with meals".
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $additionalInstruction
     * @return $this
     */
    public function addAdditionalInstruction($additionalInstruction)
    {
        $this->additionalInstruction[] = $additionalInstruction;
        return $this;
    }

    /**
     * Instructions in terms that are understood by the patient or consumer.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPatientInstruction()
    {
        return $this->patientInstruction;
    }

    /**
     * Instructions in terms that are understood by the patient or consumer.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $patientInstruction
     * @return $this
     */
    public function setPatientInstruction($patientInstruction)
    {
        $this->patientInstruction = $patientInstruction;
        return $this;
    }

    /**
     * When medication should be administered.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getTiming()
    {
        return $this->timing;
    }

    /**
     * When medication should be administered.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $timing
     * @return $this
     */
    public function setTiming($timing)
    {
        $this->timing = $timing;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAsNeededBoolean()
    {
        return $this->asNeededBoolean;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $asNeededBoolean
     * @return $this
     */
    public function setAsNeededBoolean($asNeededBoolean)
    {
        $this->asNeededBoolean = $asNeededBoolean;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAsNeededCodeableConcept()
    {
        return $this->asNeededCodeableConcept;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $asNeededCodeableConcept
     * @return $this
     */
    public function setAsNeededCodeableConcept($asNeededCodeableConcept)
    {
        $this->asNeededCodeableConcept = $asNeededCodeableConcept;
        return $this;
    }

    /**
     * Body site to administer to.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Body site to administer to.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $site
     * @return $this
     */
    public function setSite($site)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * How drug should enter body.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * How drug should enter body.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $route
     * @return $this
     */
    public function setRoute($route)
    {
        $this->route = $route;
        return $this;
    }

    /**
     * Technique for administering medication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Technique for administering medication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $method
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getDoseRange()
    {
        return $this->doseRange;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $doseRange
     * @return $this
     */
    public function setDoseRange($doseRange)
    {
        $this->doseRange = $doseRange;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDoseQuantity()
    {
        return $this->doseQuantity;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $doseQuantity
     * @return $this
     */
    public function setDoseQuantity($doseQuantity)
    {
        $this->doseQuantity = $doseQuantity;
        return $this;
    }

    /**
     * Upper limit on medication per unit of time.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getMaxDosePerPeriod()
    {
        return $this->maxDosePerPeriod;
    }

    /**
     * Upper limit on medication per unit of time.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $maxDosePerPeriod
     * @return $this
     */
    public function setMaxDosePerPeriod($maxDosePerPeriod)
    {
        $this->maxDosePerPeriod = $maxDosePerPeriod;
        return $this;
    }

    /**
     * Upper limit on medication per administration.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getMaxDosePerAdministration()
    {
        return $this->maxDosePerAdministration;
    }

    /**
     * Upper limit on medication per administration.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $maxDosePerAdministration
     * @return $this
     */
    public function setMaxDosePerAdministration($maxDosePerAdministration)
    {
        $this->maxDosePerAdministration = $maxDosePerAdministration;
        return $this;
    }

    /**
     * Upper limit on medication per lifetime of the patient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getMaxDosePerLifetime()
    {
        return $this->maxDosePerLifetime;
    }

    /**
     * Upper limit on medication per lifetime of the patient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $maxDosePerLifetime
     * @return $this
     */
    public function setMaxDosePerLifetime($maxDosePerLifetime)
    {
        $this->maxDosePerLifetime = $maxDosePerLifetime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getRateRatio()
    {
        return $this->rateRatio;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $rateRatio
     * @return $this
     */
    public function setRateRatio($rateRatio)
    {
        $this->rateRatio = $rateRatio;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getRateRange()
    {
        return $this->rateRange;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $rateRange
     * @return $this
     */
    public function setRateRange($rateRange)
    {
        $this->rateRange = $rateRange;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getRateQuantity()
    {
        return $this->rateQuantity;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $rateQuantity
     * @return $this
     */
    public function setRateQuantity($rateQuantity)
    {
        $this->rateQuantity = $rateQuantity;
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
        if (null !== $this->sequence) $json['sequence'] = $this->sequence;
        if (null !== $this->text) $json['text'] = $this->text;
        if (0 < count($this->additionalInstruction)) {
            $json['additionalInstruction'] = [];
            foreach($this->additionalInstruction as $additionalInstruction) {
                $json['additionalInstruction'][] = $additionalInstruction;
            }
        }
        if (null !== $this->patientInstruction) $json['patientInstruction'] = $this->patientInstruction;
        if (null !== $this->timing) $json['timing'] = $this->timing;
        if (null !== $this->asNeededBoolean) $json['asNeededBoolean'] = $this->asNeededBoolean;
        if (null !== $this->asNeededCodeableConcept) $json['asNeededCodeableConcept'] = $this->asNeededCodeableConcept;
        if (null !== $this->site) $json['site'] = $this->site;
        if (null !== $this->route) $json['route'] = $this->route;
        if (null !== $this->method) $json['method'] = $this->method;
        if (null !== $this->doseRange) $json['doseRange'] = $this->doseRange;
        if (null !== $this->doseQuantity) $json['doseQuantity'] = $this->doseQuantity;
        if (null !== $this->maxDosePerPeriod) $json['maxDosePerPeriod'] = $this->maxDosePerPeriod;
        if (null !== $this->maxDosePerAdministration) $json['maxDosePerAdministration'] = $this->maxDosePerAdministration;
        if (null !== $this->maxDosePerLifetime) $json['maxDosePerLifetime'] = $this->maxDosePerLifetime;
        if (null !== $this->rateRatio) $json['rateRatio'] = $this->rateRatio;
        if (null !== $this->rateRange) $json['rateRange'] = $this->rateRange;
        if (null !== $this->rateQuantity) $json['rateQuantity'] = $this->rateQuantity;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Dosage xmlns="http://hl7.org/fhir"></Dosage>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->sequence) $this->sequence->xmlSerialize(true, $sxe->addChild('sequence'));
        if (null !== $this->text) $this->text->xmlSerialize(true, $sxe->addChild('text'));
        if (0 < count($this->additionalInstruction)) {
            foreach($this->additionalInstruction as $additionalInstruction) {
                $additionalInstruction->xmlSerialize(true, $sxe->addChild('additionalInstruction'));
            }
        }
        if (null !== $this->patientInstruction) $this->patientInstruction->xmlSerialize(true, $sxe->addChild('patientInstruction'));
        if (null !== $this->timing) $this->timing->xmlSerialize(true, $sxe->addChild('timing'));
        if (null !== $this->asNeededBoolean) $this->asNeededBoolean->xmlSerialize(true, $sxe->addChild('asNeededBoolean'));
        if (null !== $this->asNeededCodeableConcept) $this->asNeededCodeableConcept->xmlSerialize(true, $sxe->addChild('asNeededCodeableConcept'));
        if (null !== $this->site) $this->site->xmlSerialize(true, $sxe->addChild('site'));
        if (null !== $this->route) $this->route->xmlSerialize(true, $sxe->addChild('route'));
        if (null !== $this->method) $this->method->xmlSerialize(true, $sxe->addChild('method'));
        if (null !== $this->doseRange) $this->doseRange->xmlSerialize(true, $sxe->addChild('doseRange'));
        if (null !== $this->doseQuantity) $this->doseQuantity->xmlSerialize(true, $sxe->addChild('doseQuantity'));
        if (null !== $this->maxDosePerPeriod) $this->maxDosePerPeriod->xmlSerialize(true, $sxe->addChild('maxDosePerPeriod'));
        if (null !== $this->maxDosePerAdministration) $this->maxDosePerAdministration->xmlSerialize(true, $sxe->addChild('maxDosePerAdministration'));
        if (null !== $this->maxDosePerLifetime) $this->maxDosePerLifetime->xmlSerialize(true, $sxe->addChild('maxDosePerLifetime'));
        if (null !== $this->rateRatio) $this->rateRatio->xmlSerialize(true, $sxe->addChild('rateRatio'));
        if (null !== $this->rateRange) $this->rateRange->xmlSerialize(true, $sxe->addChild('rateRange'));
        if (null !== $this->rateQuantity) $this->rateQuantity->xmlSerialize(true, $sxe->addChild('rateQuantity'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}
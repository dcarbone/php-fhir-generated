<?php namespace PHPFHIRGenerated\FHIRResource\FHIRMedicationDispense;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * Indicates that a medication product is to be or has been dispensed for a named person/patient.  This includes a description of the medication product (supply) provided and the instructions for administering the medication.  The medication dispense is the result of a pharmacy system responding to a medication order.
 */
class FHIRMedicationDispenseDosageInstruction extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Free text dosage instructions can be used for cases where the instructions are too complex to code. When coded instructions are present, the free text instructions may still be present for display to humans taking or administering the medication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * Additional instructions such as "Swallow with plenty of water" which may or may not be coded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $additionalInstructions = null;

    /**
     * The timing schedule for giving the medication to the patient.  The Schedule data type allows many different expressions.  For example, "Every  8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:";  "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public $timing = null;

    /**
     * Indicates whether the Medication is only taken when needed within a specific dosing schedule (Boolean option), or it indicates the precondition for taking the Medication (CodeableConcept).  

Specifically if 'boolean' datatype is selected, then the following logic applies:  If set to True, this indicates that the medication is only taken when needed, within the specified schedule. (choose any one of asNeeded*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $asNeededBoolean = null;

    /**
     * Indicates whether the Medication is only taken when needed within a specific dosing schedule (Boolean option), or it indicates the precondition for taking the Medication (CodeableConcept).  

Specifically if 'boolean' datatype is selected, then the following logic applies:  If set to True, this indicates that the medication is only taken when needed, within the specified schedule. (choose any one of asNeeded*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $asNeededCodeableConcept = null;

    /**
     * A coded specification of the anatomic site where the medication first enters the body. (choose any one of site*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $siteCodeableConcept = null;

    /**
     * A coded specification of the anatomic site where the medication first enters the body. (choose any one of site*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $siteReference = null;

    /**
     * A code specifying the route or physiological path of administration of a therapeutic agent into or onto a subject.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $route = null;

    /**
     * A coded value indicating the method by which the medication is intended to be or was introduced into or on the body.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $method = null;

    /**
     * The amount of therapeutic or other substance given at one administration event. (choose any one of dose*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $doseRange = null;

    /**
     * The amount of therapeutic or other substance given at one administration event. (choose any one of dose*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public $doseQuantity = null;

    /**
     * Identifies the speed with which the medication was or will be introduced into the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100 ml/hr.  May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.   Currently we do not specify a default of '1' in the denominator, but this is being discussed. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8 hours. (choose any one of rate*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $rateRatio = null;

    /**
     * Identifies the speed with which the medication was or will be introduced into the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100 ml/hr.  May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.   Currently we do not specify a default of '1' in the denominator, but this is being discussed. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8 hours. (choose any one of rate*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $rateRange = null;

    /**
     * The maximum total quantity of a therapeutic substance that may be administered to a subject over the period of time,  e.g. 1000mg in 24 hours.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $maxDosePerPeriod = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicationDispense.DosageInstruction';

    /**
     * Free text dosage instructions can be used for cases where the instructions are too complex to code. When coded instructions are present, the free text instructions may still be present for display to humans taking or administering the medication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Free text dosage instructions can be used for cases where the instructions are too complex to code. When coded instructions are present, the free text instructions may still be present for display to humans taking or administering the medication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $text
     * @return $this
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Additional instructions such as "Swallow with plenty of water" which may or may not be coded.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAdditionalInstructions()
    {
        return $this->additionalInstructions;
    }

    /**
     * Additional instructions such as "Swallow with plenty of water" which may or may not be coded.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $additionalInstructions
     * @return $this
     */
    public function setAdditionalInstructions($additionalInstructions)
    {
        $this->additionalInstructions = $additionalInstructions;
        return $this;
    }

    /**
     * The timing schedule for giving the medication to the patient.  The Schedule data type allows many different expressions.  For example, "Every  8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:";  "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013".
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getTiming()
    {
        return $this->timing;
    }

    /**
     * The timing schedule for giving the medication to the patient.  The Schedule data type allows many different expressions.  For example, "Every  8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:";  "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013".
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $timing
     * @return $this
     */
    public function setTiming($timing)
    {
        $this->timing = $timing;
        return $this;
    }

    /**
     * Indicates whether the Medication is only taken when needed within a specific dosing schedule (Boolean option), or it indicates the precondition for taking the Medication (CodeableConcept).  

Specifically if 'boolean' datatype is selected, then the following logic applies:  If set to True, this indicates that the medication is only taken when needed, within the specified schedule. (choose any one of asNeeded*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAsNeededBoolean()
    {
        return $this->asNeededBoolean;
    }

    /**
     * Indicates whether the Medication is only taken when needed within a specific dosing schedule (Boolean option), or it indicates the precondition for taking the Medication (CodeableConcept).  

Specifically if 'boolean' datatype is selected, then the following logic applies:  If set to True, this indicates that the medication is only taken when needed, within the specified schedule. (choose any one of asNeeded*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $asNeededBoolean
     * @return $this
     */
    public function setAsNeededBoolean($asNeededBoolean)
    {
        $this->asNeededBoolean = $asNeededBoolean;
        return $this;
    }

    /**
     * Indicates whether the Medication is only taken when needed within a specific dosing schedule (Boolean option), or it indicates the precondition for taking the Medication (CodeableConcept).  

Specifically if 'boolean' datatype is selected, then the following logic applies:  If set to True, this indicates that the medication is only taken when needed, within the specified schedule. (choose any one of asNeeded*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAsNeededCodeableConcept()
    {
        return $this->asNeededCodeableConcept;
    }

    /**
     * Indicates whether the Medication is only taken when needed within a specific dosing schedule (Boolean option), or it indicates the precondition for taking the Medication (CodeableConcept).  

Specifically if 'boolean' datatype is selected, then the following logic applies:  If set to True, this indicates that the medication is only taken when needed, within the specified schedule. (choose any one of asNeeded*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $asNeededCodeableConcept
     * @return $this
     */
    public function setAsNeededCodeableConcept($asNeededCodeableConcept)
    {
        $this->asNeededCodeableConcept = $asNeededCodeableConcept;
        return $this;
    }

    /**
     * A coded specification of the anatomic site where the medication first enters the body. (choose any one of site*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSiteCodeableConcept()
    {
        return $this->siteCodeableConcept;
    }

    /**
     * A coded specification of the anatomic site where the medication first enters the body. (choose any one of site*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $siteCodeableConcept
     * @return $this
     */
    public function setSiteCodeableConcept($siteCodeableConcept)
    {
        $this->siteCodeableConcept = $siteCodeableConcept;
        return $this;
    }

    /**
     * A coded specification of the anatomic site where the medication first enters the body. (choose any one of site*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSiteReference()
    {
        return $this->siteReference;
    }

    /**
     * A coded specification of the anatomic site where the medication first enters the body. (choose any one of site*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $siteReference
     * @return $this
     */
    public function setSiteReference($siteReference)
    {
        $this->siteReference = $siteReference;
        return $this;
    }

    /**
     * A code specifying the route or physiological path of administration of a therapeutic agent into or onto a subject.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * A code specifying the route or physiological path of administration of a therapeutic agent into or onto a subject.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $route
     * @return $this
     */
    public function setRoute($route)
    {
        $this->route = $route;
        return $this;
    }

    /**
     * A coded value indicating the method by which the medication is intended to be or was introduced into or on the body.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * A coded value indicating the method by which the medication is intended to be or was introduced into or on the body.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $method
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * The amount of therapeutic or other substance given at one administration event. (choose any one of dose*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getDoseRange()
    {
        return $this->doseRange;
    }

    /**
     * The amount of therapeutic or other substance given at one administration event. (choose any one of dose*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $doseRange
     * @return $this
     */
    public function setDoseRange($doseRange)
    {
        $this->doseRange = $doseRange;
        return $this;
    }

    /**
     * The amount of therapeutic or other substance given at one administration event. (choose any one of dose*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getDoseQuantity()
    {
        return $this->doseQuantity;
    }

    /**
     * The amount of therapeutic or other substance given at one administration event. (choose any one of dose*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $doseQuantity
     * @return $this
     */
    public function setDoseQuantity($doseQuantity)
    {
        $this->doseQuantity = $doseQuantity;
        return $this;
    }

    /**
     * Identifies the speed with which the medication was or will be introduced into the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100 ml/hr.  May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.   Currently we do not specify a default of '1' in the denominator, but this is being discussed. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8 hours. (choose any one of rate*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getRateRatio()
    {
        return $this->rateRatio;
    }

    /**
     * Identifies the speed with which the medication was or will be introduced into the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100 ml/hr.  May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.   Currently we do not specify a default of '1' in the denominator, but this is being discussed. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8 hours. (choose any one of rate*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $rateRatio
     * @return $this
     */
    public function setRateRatio($rateRatio)
    {
        $this->rateRatio = $rateRatio;
        return $this;
    }

    /**
     * Identifies the speed with which the medication was or will be introduced into the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100 ml/hr.  May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.   Currently we do not specify a default of '1' in the denominator, but this is being discussed. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8 hours. (choose any one of rate*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getRateRange()
    {
        return $this->rateRange;
    }

    /**
     * Identifies the speed with which the medication was or will be introduced into the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100 ml/hr.  May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.   Currently we do not specify a default of '1' in the denominator, but this is being discussed. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8 hours. (choose any one of rate*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $rateRange
     * @return $this
     */
    public function setRateRange($rateRange)
    {
        $this->rateRange = $rateRange;
        return $this;
    }

    /**
     * The maximum total quantity of a therapeutic substance that may be administered to a subject over the period of time,  e.g. 1000mg in 24 hours.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getMaxDosePerPeriod()
    {
        return $this->maxDosePerPeriod;
    }

    /**
     * The maximum total quantity of a therapeutic substance that may be administered to a subject over the period of time,  e.g. 1000mg in 24 hours.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $maxDosePerPeriod
     * @return $this
     */
    public function setMaxDosePerPeriod($maxDosePerPeriod)
    {
        $this->maxDosePerPeriod = $maxDosePerPeriod;
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
        if (null !== $this->text) $json['text'] = json_encode($this->text);
        if (null !== $this->additionalInstructions) $json['additionalInstructions'] = json_encode($this->additionalInstructions);
        if (null !== $this->timing) $json['timing'] = json_encode($this->timing);
        if (null !== $this->asNeededBoolean) $json['asNeededBoolean'] = json_encode($this->asNeededBoolean);
        if (null !== $this->asNeededCodeableConcept) $json['asNeededCodeableConcept'] = json_encode($this->asNeededCodeableConcept);
        if (null !== $this->siteCodeableConcept) $json['siteCodeableConcept'] = json_encode($this->siteCodeableConcept);
        if (null !== $this->siteReference) $json['siteReference'] = json_encode($this->siteReference);
        if (null !== $this->route) $json['route'] = json_encode($this->route);
        if (null !== $this->method) $json['method'] = json_encode($this->method);
        if (null !== $this->doseRange) $json['doseRange'] = json_encode($this->doseRange);
        if (null !== $this->doseQuantity) $json['doseQuantity'] = json_encode($this->doseQuantity);
        if (null !== $this->rateRatio) $json['rateRatio'] = json_encode($this->rateRatio);
        if (null !== $this->rateRange) $json['rateRange'] = json_encode($this->rateRange);
        if (null !== $this->maxDosePerPeriod) $json['maxDosePerPeriod'] = json_encode($this->maxDosePerPeriod);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicationDispenseDosageInstruction xmlns="http://hl7.org/fhir"></MedicationDispenseDosageInstruction>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->text) $this->text->xmlSerialize(true, $sxe->addChild('text'));
        if (null !== $this->additionalInstructions) $this->additionalInstructions->xmlSerialize(true, $sxe->addChild('additionalInstructions'));
        if (null !== $this->timing) $this->timing->xmlSerialize(true, $sxe->addChild('timing'));
        if (null !== $this->asNeededBoolean) $this->asNeededBoolean->xmlSerialize(true, $sxe->addChild('asNeededBoolean'));
        if (null !== $this->asNeededCodeableConcept) $this->asNeededCodeableConcept->xmlSerialize(true, $sxe->addChild('asNeededCodeableConcept'));
        if (null !== $this->siteCodeableConcept) $this->siteCodeableConcept->xmlSerialize(true, $sxe->addChild('siteCodeableConcept'));
        if (null !== $this->siteReference) $this->siteReference->xmlSerialize(true, $sxe->addChild('siteReference'));
        if (null !== $this->route) $this->route->xmlSerialize(true, $sxe->addChild('route'));
        if (null !== $this->method) $this->method->xmlSerialize(true, $sxe->addChild('method'));
        if (null !== $this->doseRange) $this->doseRange->xmlSerialize(true, $sxe->addChild('doseRange'));
        if (null !== $this->doseQuantity) $this->doseQuantity->xmlSerialize(true, $sxe->addChild('doseQuantity'));
        if (null !== $this->rateRatio) $this->rateRatio->xmlSerialize(true, $sxe->addChild('rateRatio'));
        if (null !== $this->rateRange) $this->rateRange->xmlSerialize(true, $sxe->addChild('rateRange'));
        if (null !== $this->maxDosePerPeriod) $this->maxDosePerPeriod->xmlSerialize(true, $sxe->addChild('maxDosePerPeriod'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}
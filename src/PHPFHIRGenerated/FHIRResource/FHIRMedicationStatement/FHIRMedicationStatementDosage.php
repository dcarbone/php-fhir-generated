<?php namespace PHPFHIRGenerated\FHIRResource\FHIRMedicationStatement;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A record of a medication that is being consumed by a patient.   A MedicationStatement may indicate that the patient may be taking the medication now, or has taken the medication in the past or will be taking the medication in the future.  The source of this information can be the patient, significant other (such as a family member or spouse), or a clinician.  A common scenario where this information is captured is during the history taking process during a patient visit or stay.   The medication information may come from e.g. the patient's memory, from a prescription bottle,  or from a list of medications the patient, clinician or other party maintains 

The primary difference between a medication statement and a medication administration is that the medication administration has complete administration information and is based on actual administration information from the person who administered the medication.  A medication statement is often, if not always, less specific.  There is no required date/time when the medication was administered, in fact we only know that a source has reported the patient is taking this medication, where details such as time, quantity, or rate or even medication product may be incomplete or missing or less precise.  As stated earlier, the medication statement information may come from the patient's memory, from a prescription bottle or from a list of medications the patient, clinician or other party maintains.  Medication administration is more formal and is not missing detailed information.
 */
class FHIRMedicationStatementDosage extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Free text dosage information as reported about a patient's medication use. When coded dosage information is present, the free text may still be present for display to humans.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * The timing schedule for giving the medication to the patient.  The Schedule data type allows many different expressions, for example.  "Every  8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:";  "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013".
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
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $siteCodeableConcept = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $siteReference = null;

    /**
     * A code specifying the route or physiological path of administration of a therapeutic agent into or onto a subject.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $route = null;

    /**
     * A coded value indicating the method by which the medication is intended to be or was introduced into or on the body.  This attribute will most often NOT be populated.  It is most commonly used for injections.  For example, Slow Push, Deep IV.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $method = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public $quantityQuantity = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $quantityRange = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $rateRatio = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $rateRange = null;

    /**
     * The maximum total quantity of a therapeutic substance that may be administered to a subject over the period of time.  For example, 1000mg in 24 hours.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $maxDosePerPeriod = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicationStatement.Dosage';

    /**
     * Free text dosage information as reported about a patient's medication use. When coded dosage information is present, the free text may still be present for display to humans.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Free text dosage information as reported about a patient's medication use. When coded dosage information is present, the free text may still be present for display to humans.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $text
     * @return $this
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * The timing schedule for giving the medication to the patient.  The Schedule data type allows many different expressions, for example.  "Every  8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:";  "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013".
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getTiming()
    {
        return $this->timing;
    }

    /**
     * The timing schedule for giving the medication to the patient.  The Schedule data type allows many different expressions, for example.  "Every  8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:";  "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013".
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
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSiteCodeableConcept()
    {
        return $this->siteCodeableConcept;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $siteCodeableConcept
     * @return $this
     */
    public function setSiteCodeableConcept($siteCodeableConcept)
    {
        $this->siteCodeableConcept = $siteCodeableConcept;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSiteReference()
    {
        return $this->siteReference;
    }

    /**
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
     * A coded value indicating the method by which the medication is intended to be or was introduced into or on the body.  This attribute will most often NOT be populated.  It is most commonly used for injections.  For example, Slow Push, Deep IV.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * A coded value indicating the method by which the medication is intended to be or was introduced into or on the body.  This attribute will most often NOT be populated.  It is most commonly used for injections.  For example, Slow Push, Deep IV.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $method
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getQuantityQuantity()
    {
        return $this->quantityQuantity;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $quantityQuantity
     * @return $this
     */
    public function setQuantityQuantity($quantityQuantity)
    {
        $this->quantityQuantity = $quantityQuantity;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getQuantityRange()
    {
        return $this->quantityRange;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $quantityRange
     * @return $this
     */
    public function setQuantityRange($quantityRange)
    {
        $this->quantityRange = $quantityRange;
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
     * The maximum total quantity of a therapeutic substance that may be administered to a subject over the period of time.  For example, 1000mg in 24 hours.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getMaxDosePerPeriod()
    {
        return $this->maxDosePerPeriod;
    }

    /**
     * The maximum total quantity of a therapeutic substance that may be administered to a subject over the period of time.  For example, 1000mg in 24 hours.
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
        if (null !== $this->text) $json['text'] = $this->text;
        if (null !== $this->timing) $json['timing'] = $this->timing;
        if (null !== $this->asNeededBoolean) $json['asNeededBoolean'] = $this->asNeededBoolean;
        if (null !== $this->asNeededCodeableConcept) $json['asNeededCodeableConcept'] = $this->asNeededCodeableConcept;
        if (null !== $this->siteCodeableConcept) $json['siteCodeableConcept'] = $this->siteCodeableConcept;
        if (null !== $this->siteReference) $json['siteReference'] = $this->siteReference;
        if (null !== $this->route) $json['route'] = $this->route;
        if (null !== $this->method) $json['method'] = $this->method;
        if (null !== $this->quantityQuantity) $json['quantityQuantity'] = $this->quantityQuantity;
        if (null !== $this->quantityRange) $json['quantityRange'] = $this->quantityRange;
        if (null !== $this->rateRatio) $json['rateRatio'] = $this->rateRatio;
        if (null !== $this->rateRange) $json['rateRange'] = $this->rateRange;
        if (null !== $this->maxDosePerPeriod) $json['maxDosePerPeriod'] = $this->maxDosePerPeriod;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicationStatementDosage xmlns="http://hl7.org/fhir"></MedicationStatementDosage>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->text) $this->text->xmlSerialize(true, $sxe->addChild('text'));
        if (null !== $this->timing) $this->timing->xmlSerialize(true, $sxe->addChild('timing'));
        if (null !== $this->asNeededBoolean) $this->asNeededBoolean->xmlSerialize(true, $sxe->addChild('asNeededBoolean'));
        if (null !== $this->asNeededCodeableConcept) $this->asNeededCodeableConcept->xmlSerialize(true, $sxe->addChild('asNeededCodeableConcept'));
        if (null !== $this->siteCodeableConcept) $this->siteCodeableConcept->xmlSerialize(true, $sxe->addChild('siteCodeableConcept'));
        if (null !== $this->siteReference) $this->siteReference->xmlSerialize(true, $sxe->addChild('siteReference'));
        if (null !== $this->route) $this->route->xmlSerialize(true, $sxe->addChild('route'));
        if (null !== $this->method) $this->method->xmlSerialize(true, $sxe->addChild('method'));
        if (null !== $this->quantityQuantity) $this->quantityQuantity->xmlSerialize(true, $sxe->addChild('quantityQuantity'));
        if (null !== $this->quantityRange) $this->quantityRange->xmlSerialize(true, $sxe->addChild('quantityRange'));
        if (null !== $this->rateRatio) $this->rateRatio->xmlSerialize(true, $sxe->addChild('rateRatio'));
        if (null !== $this->rateRange) $this->rateRange->xmlSerialize(true, $sxe->addChild('rateRange'));
        if (null !== $this->maxDosePerPeriod) $this->maxDosePerPeriod->xmlSerialize(true, $sxe->addChild('maxDosePerPeriod'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}
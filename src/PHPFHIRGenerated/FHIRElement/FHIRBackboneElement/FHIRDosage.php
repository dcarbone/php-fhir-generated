<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage\FHIRDosageDoseAndRate;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRRatio;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * Indicates how the medication is/was taken or should be taken by the patient.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRDosage
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement
 */
class FHIRDosage extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Dosage';

    /**
     * Supplemental instructions to the patient on how to take the medication  (e.g. "with meals" or"take half to one hour before food") or warnings for the patient about the medication (e.g. "may cause drowsiness" or "avoid exposure of skin to direct sunlight or sunlamps").
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $additionalInstruction = null;

    /**
     * Indicates whether the Medication is only taken when needed within a specific dosing schedule (Boolean option), or it indicates the precondition for taking the Medication (CodeableConcept).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $asNeededBoolean = null;

    /**
     * Indicates whether the Medication is only taken when needed within a specific dosing schedule (Boolean option), or it indicates the precondition for taking the Medication (CodeableConcept).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $asNeededCodeableConcept = null;

    /**
     * The amount of medication administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage\FHIRDosageDoseAndRate
     */
    public $doseAndRate = null;

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
     * Upper limit on medication per unit of time.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $maxDosePerPeriod = null;

    /**
     * Technique for administering medication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $method = null;

    /**
     * Instructions in terms that are understood by the patient or consumer.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $patientInstruction = null;

    /**
     * How drug should enter body.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $route = null;

    /**
     * Indicates the order in which the dosage instructions should be applied or interpreted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $sequence = null;

    /**
     * Body site to administer to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $site = null;

    /**
     * Free text dosage instructions e.g. SIG.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * When medication should be administered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public $timing = null;

    /**
     * FHIRDosage Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['additionalInstruction'])) {
                $this->setAdditionalInstruction($data['additionalInstruction']);
            }
            if (isset($data['asNeededBoolean'])) {
                $this->setAsNeededBoolean($data['asNeededBoolean']);
            }
            if (isset($data['asNeededCodeableConcept'])) {
                $this->setAsNeededCodeableConcept($data['asNeededCodeableConcept']);
            }
            if (isset($data['doseAndRate'])) {
                $this->setDoseAndRate($data['doseAndRate']);
            }
            if (isset($data['maxDosePerAdministration'])) {
                $this->setMaxDosePerAdministration($data['maxDosePerAdministration']);
            }
            if (isset($data['maxDosePerLifetime'])) {
                $this->setMaxDosePerLifetime($data['maxDosePerLifetime']);
            }
            if (isset($data['maxDosePerPeriod'])) {
                $this->setMaxDosePerPeriod($data['maxDosePerPeriod']);
            }
            if (isset($data['method'])) {
                $this->setMethod($data['method']);
            }
            if (isset($data['patientInstruction'])) {
                $this->setPatientInstruction($data['patientInstruction']);
            }
            if (isset($data['route'])) {
                $this->setRoute($data['route']);
            }
            if (isset($data['sequence'])) {
                $this->setSequence($data['sequence']);
            }
            if (isset($data['site'])) {
                $this->setSite($data['site']);
            }
            if (isset($data['text'])) {
                $this->setText($data['text']);
            }
            if (isset($data['timing'])) {
                $this->setTiming($data['timing']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Supplemental instructions to the patient on how to take the medication  (e.g. "with meals" or"take half to one hour before food") or warnings for the patient about the medication (e.g. "may cause drowsiness" or "avoid exposure of skin to direct sunlight or sunlamps").
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setAdditionalInstruction(FHIRCodeableConcept $additionalInstruction = null)
    {
        if (null === $additionalInstruction) {
            return $this; 
        }
        $this->additionalInstruction = $additionalInstruction;
        return $this;
    }

    /**
     * Supplemental instructions to the patient on how to take the medication  (e.g. "with meals" or"take half to one hour before food") or warnings for the patient about the medication (e.g. "may cause drowsiness" or "avoid exposure of skin to direct sunlight or sunlamps").
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAdditionalInstruction()
    {
        return $this->additionalInstruction;
    }


    /**
     * Indicates whether the Medication is only taken when needed within a specific dosing schedule (Boolean option), or it indicates the precondition for taking the Medication (CodeableConcept).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setAsNeededBoolean($asNeededBoolean)
    {
        if (null === $asNeededBoolean) {
            return $this; 
        }
        if (is_scalar($asNeededBoolean)) {
            $asNeededBoolean = new FHIRBoolean($asNeededBoolean);
        }
        if (!($asNeededBoolean instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDosage::setAsNeededBoolean - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($asNeededBoolean)
            ));
        }
        $this->asNeededBoolean = $asNeededBoolean;
        return $this;
    }

    /**
     * Indicates whether the Medication is only taken when needed within a specific dosing schedule (Boolean option), or it indicates the precondition for taking the Medication (CodeableConcept).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAsNeededBoolean()
    {
        return $this->asNeededBoolean;
    }


    /**
     * Indicates whether the Medication is only taken when needed within a specific dosing schedule (Boolean option), or it indicates the precondition for taking the Medication (CodeableConcept).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setAsNeededCodeableConcept(FHIRCodeableConcept $asNeededCodeableConcept = null)
    {
        if (null === $asNeededCodeableConcept) {
            return $this; 
        }
        $this->asNeededCodeableConcept = $asNeededCodeableConcept;
        return $this;
    }

    /**
     * Indicates whether the Medication is only taken when needed within a specific dosing schedule (Boolean option), or it indicates the precondition for taking the Medication (CodeableConcept).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAsNeededCodeableConcept()
    {
        return $this->asNeededCodeableConcept;
    }


    /**
     * The amount of medication administered.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage\FHIRDosageDoseAndRate
     * @return $this
     */
    public function setDoseAndRate(FHIRDosageDoseAndRate $doseAndRate = null)
    {
        if (null === $doseAndRate) {
            return $this; 
        }
        $this->doseAndRate = $doseAndRate;
        return $this;
    }

    /**
     * The amount of medication administered.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage\FHIRDosageDoseAndRate
     */
    public function getDoseAndRate()
    {
        return $this->doseAndRate;
    }


    /**
     * Upper limit on medication per administration.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setMaxDosePerAdministration(FHIRQuantity $maxDosePerAdministration = null)
    {
        if (null === $maxDosePerAdministration) {
            return $this; 
        }
        $this->maxDosePerAdministration = $maxDosePerAdministration;
        return $this;
    }

    /**
     * Upper limit on medication per administration.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getMaxDosePerAdministration()
    {
        return $this->maxDosePerAdministration;
    }


    /**
     * Upper limit on medication per lifetime of the patient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setMaxDosePerLifetime(FHIRQuantity $maxDosePerLifetime = null)
    {
        if (null === $maxDosePerLifetime) {
            return $this; 
        }
        $this->maxDosePerLifetime = $maxDosePerLifetime;
        return $this;
    }

    /**
     * Upper limit on medication per lifetime of the patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getMaxDosePerLifetime()
    {
        return $this->maxDosePerLifetime;
    }


    /**
     * Upper limit on medication per unit of time.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     * @return $this
     */
    public function setMaxDosePerPeriod(FHIRRatio $maxDosePerPeriod = null)
    {
        if (null === $maxDosePerPeriod) {
            return $this; 
        }
        $this->maxDosePerPeriod = $maxDosePerPeriod;
        return $this;
    }

    /**
     * Upper limit on medication per unit of time.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getMaxDosePerPeriod()
    {
        return $this->maxDosePerPeriod;
    }


    /**
     * Technique for administering medication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setMethod(FHIRCodeableConcept $method = null)
    {
        if (null === $method) {
            return $this; 
        }
        $this->method = $method;
        return $this;
    }

    /**
     * Technique for administering medication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod()
    {
        return $this->method;
    }


    /**
     * Instructions in terms that are understood by the patient or consumer.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setPatientInstruction($patientInstruction)
    {
        if (null === $patientInstruction) {
            return $this; 
        }
        if (is_scalar($patientInstruction)) {
            $patientInstruction = new FHIRString($patientInstruction);
        }
        if (!($patientInstruction instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDosage::setPatientInstruction - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($patientInstruction)
            ));
        }
        $this->patientInstruction = $patientInstruction;
        return $this;
    }

    /**
     * Instructions in terms that are understood by the patient or consumer.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPatientInstruction()
    {
        return $this->patientInstruction;
    }


    /**
     * How drug should enter body.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setRoute(FHIRCodeableConcept $route = null)
    {
        if (null === $route) {
            return $this; 
        }
        $this->route = $route;
        return $this;
    }

    /**
     * How drug should enter body.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRoute()
    {
        return $this->route;
    }


    /**
     * Indicates the order in which the dosage instructions should be applied or interpreted.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setSequence($sequence)
    {
        if (null === $sequence) {
            return $this; 
        }
        if (is_scalar($sequence)) {
            $sequence = new FHIRInteger($sequence);
        }
        if (!($sequence instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDosage::setSequence - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($sequence)
            ));
        }
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Indicates the order in which the dosage instructions should be applied or interpreted.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getSequence()
    {
        return $this->sequence;
    }


    /**
     * Body site to administer to.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSite(FHIRCodeableConcept $site = null)
    {
        if (null === $site) {
            return $this; 
        }
        $this->site = $site;
        return $this;
    }

    /**
     * Body site to administer to.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSite()
    {
        return $this->site;
    }


    /**
     * Free text dosage instructions e.g. SIG.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setText($text)
    {
        if (null === $text) {
            return $this; 
        }
        if (is_scalar($text)) {
            $text = new FHIRString($text);
        }
        if (!($text instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDosage::setText - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($text)
            ));
        }
        $this->text = $text;
        return $this;
    }

    /**
     * Free text dosage instructions e.g. SIG.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }


    /**
     * When medication should be administered.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     * @return $this
     */
    public function setTiming(FHIRTiming $timing = null)
    {
        if (null === $timing) {
            return $this; 
        }
        $this->timing = $timing;
        return $this;
    }

    /**
     * When medication should be administered.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getTiming()
    {
        return $this->timing;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAdditionalInstruction())) {
            $a['additionalInstruction'] = $v;
        }
        if (null !== ($v = $this->getAsNeededBoolean())) {
            $a['asNeededBoolean'] = $v;
        }
        if (null !== ($v = $this->getAsNeededCodeableConcept())) {
            $a['asNeededCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getDoseAndRate())) {
            $a['doseAndRate'] = $v;
        }
        if (null !== ($v = $this->getMaxDosePerAdministration())) {
            $a['maxDosePerAdministration'] = $v;
        }
        if (null !== ($v = $this->getMaxDosePerLifetime())) {
            $a['maxDosePerLifetime'] = $v;
        }
        if (null !== ($v = $this->getMaxDosePerPeriod())) {
            $a['maxDosePerPeriod'] = $v;
        }
        if (null !== ($v = $this->getMethod())) {
            $a['method'] = $v;
        }
        if (null !== ($v = $this->getPatientInstruction())) {
            $a['patientInstruction'] = $v;
        }
        if (null !== ($v = $this->getRoute())) {
            $a['route'] = $v;
        }
        if (null !== ($v = $this->getSequence())) {
            $a['sequence'] = $v;
        }
        if (null !== ($v = $this->getSite())) {
            $a['site'] = $v;
        }
        if (null !== ($v = $this->getText())) {
            $a['text'] = $v;
        }
        if (null !== ($v = $this->getTiming())) {
            $a['timing'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<Dosage xmlns="http://hl7.org/fhir"></Dosage>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}
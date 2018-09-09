<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationOtherTherapy;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationPopulation;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Indication for the Medicinal Product.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRMedicinalProductIndication
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRMedicinalProductIndication extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'MedicinalProductIndication';

    /**
     * Comorbidity (concurrent condition) or co-infection as part of the indication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $comorbidity = null;

    /**
     * The status of the disease or symptom for which the indication applies.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $diseaseStatus = null;

    /**
     * The disease, symptom or procedure that is the indication for treatment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $diseaseSymptomProcedure = null;

    /**
     * Timing or duration information as part of the indication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $duration = null;

    /**
     * The intended effect, aim or strategy to be achieved by the indication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $intendedEffect = null;

    /**
     * Information about the use of the medicinal product in relation to other therapies described as part of the indication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationOtherTherapy
     */
    public $otherTherapy = null;

    /**
     * The population group to which this applies.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationPopulation
     */
    public $population = null;

    /**
     * The medication for which this is an indication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Describe the undesirable effects of the medicinal product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $undesirableEffect = null;

    /**
     * FHIRMedicinalProductIndication Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['comorbidity'])) {
                $this->setComorbidity($data['comorbidity']);
            }
            if (isset($data['diseaseStatus'])) {
                $this->setDiseaseStatus($data['diseaseStatus']);
            }
            if (isset($data['diseaseSymptomProcedure'])) {
                $this->setDiseaseSymptomProcedure($data['diseaseSymptomProcedure']);
            }
            if (isset($data['duration'])) {
                $this->setDuration($data['duration']);
            }
            if (isset($data['intendedEffect'])) {
                $this->setIntendedEffect($data['intendedEffect']);
            }
            if (isset($data['otherTherapy'])) {
                $this->setOtherTherapy($data['otherTherapy']);
            }
            if (isset($data['population'])) {
                $this->setPopulation($data['population']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['undesirableEffect'])) {
                $this->setUndesirableEffect($data['undesirableEffect']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductIndication::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Comorbidity (concurrent condition) or co-infection as part of the indication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setComorbidity(FHIRCodeableConcept $comorbidity = null)
    {
        if (null === $comorbidity) {
            return $this; 
        }
        $this->comorbidity = $comorbidity;
        return $this;
    }

    /**
     * Comorbidity (concurrent condition) or co-infection as part of the indication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getComorbidity()
    {
        return $this->comorbidity;
    }


    /**
     * The status of the disease or symptom for which the indication applies.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setDiseaseStatus(FHIRCodeableConcept $diseaseStatus = null)
    {
        if (null === $diseaseStatus) {
            return $this; 
        }
        $this->diseaseStatus = $diseaseStatus;
        return $this;
    }

    /**
     * The status of the disease or symptom for which the indication applies.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDiseaseStatus()
    {
        return $this->diseaseStatus;
    }


    /**
     * The disease, symptom or procedure that is the indication for treatment.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setDiseaseSymptomProcedure(FHIRCodeableConcept $diseaseSymptomProcedure = null)
    {
        if (null === $diseaseSymptomProcedure) {
            return $this; 
        }
        $this->diseaseSymptomProcedure = $diseaseSymptomProcedure;
        return $this;
    }

    /**
     * The disease, symptom or procedure that is the indication for treatment.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDiseaseSymptomProcedure()
    {
        return $this->diseaseSymptomProcedure;
    }


    /**
     * Timing or duration information as part of the indication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setDuration(FHIRQuantity $duration = null)
    {
        if (null === $duration) {
            return $this; 
        }
        $this->duration = $duration;
        return $this;
    }

    /**
     * Timing or duration information as part of the indication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDuration()
    {
        return $this->duration;
    }


    /**
     * The intended effect, aim or strategy to be achieved by the indication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setIntendedEffect(FHIRCodeableConcept $intendedEffect = null)
    {
        if (null === $intendedEffect) {
            return $this; 
        }
        $this->intendedEffect = $intendedEffect;
        return $this;
    }

    /**
     * The intended effect, aim or strategy to be achieved by the indication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getIntendedEffect()
    {
        return $this->intendedEffect;
    }


    /**
     * Information about the use of the medicinal product in relation to other therapies described as part of the indication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationOtherTherapy
     * @return $this
     */
    public function setOtherTherapy(FHIRMedicinalProductIndicationOtherTherapy $otherTherapy = null)
    {
        if (null === $otherTherapy) {
            return $this; 
        }
        $this->otherTherapy = $otherTherapy;
        return $this;
    }

    /**
     * Information about the use of the medicinal product in relation to other therapies described as part of the indication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationOtherTherapy
     */
    public function getOtherTherapy()
    {
        return $this->otherTherapy;
    }


    /**
     * The population group to which this applies.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationPopulation
     * @return $this
     */
    public function setPopulation(FHIRMedicinalProductIndicationPopulation $population = null)
    {
        if (null === $population) {
            return $this; 
        }
        $this->population = $population;
        return $this;
    }

    /**
     * The population group to which this applies.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationPopulation
     */
    public function getPopulation()
    {
        return $this->population;
    }


    /**
     * The medication for which this is an indication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSubject(FHIRReference $subject = null)
    {
        if (null === $subject) {
            return $this; 
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * The medication for which this is an indication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * Describe the undesirable effects of the medicinal product.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setUndesirableEffect(FHIRReference $undesirableEffect = null)
    {
        if (null === $undesirableEffect) {
            return $this; 
        }
        $this->undesirableEffect = $undesirableEffect;
        return $this;
    }

    /**
     * Describe the undesirable effects of the medicinal product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getUndesirableEffect()
    {
        return $this->undesirableEffect;
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
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getComorbidity())) {
            $a['comorbidity'] = $v;
        }
        if (null !== ($v = $this->getDiseaseStatus())) {
            $a['diseaseStatus'] = $v;
        }
        if (null !== ($v = $this->getDiseaseSymptomProcedure())) {
            $a['diseaseSymptomProcedure'] = $v;
        }
        if (null !== ($v = $this->getDuration())) {
            $a['duration'] = $v;
        }
        if (null !== ($v = $this->getIntendedEffect())) {
            $a['intendedEffect'] = $v;
        }
        if (null !== ($v = $this->getOtherTherapy())) {
            $a['otherTherapy'] = $v;
        }
        if (null !== ($v = $this->getPopulation())) {
            $a['population'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
        }
        if (null !== ($v = $this->getUndesirableEffect())) {
            $a['undesirableEffect'] = $v;
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
            $sxe = new \SimpleXMLElement('<MedicinalProductIndication xmlns="http://hl7.org/fhir"></MedicinalProductIndication>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}
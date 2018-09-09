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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductContraindication\FHIRMedicinalProductContraindicationOtherTherapy;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductContraindication\FHIRMedicinalProductContraindicationPopulation;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * The clinical particulars - indications, contraindications etc. of a medicinal product, including for regulatory purposes.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRMedicinalProductContraindication
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRMedicinalProductContraindication extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'MedicinalProductContraindication';

    /**
     * A comorbidity (concurrent condition) or coinfection.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $comorbidity = null;

    /**
     * The disease, symptom or procedure for the contraindication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $disease = null;

    /**
     * The status of the disease or symptom for the contraindication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $diseaseStatus = null;

    /**
     * Information about the use of the medicinal product in relation to other therapies described as part of the indication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductContraindication\FHIRMedicinalProductContraindicationOtherTherapy
     */
    public $otherTherapy = null;

    /**
     * The population group to which this applies.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductContraindication\FHIRMedicinalProductContraindicationPopulation
     */
    public $population = null;

    /**
     * The medication for which this is an indication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Information about the use of the medicinal product in relation to other therapies as part of the indication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $therapeuticIndication = null;

    /**
     * FHIRMedicinalProductContraindication Constructor
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
            if (isset($data['disease'])) {
                $this->setDisease($data['disease']);
            }
            if (isset($data['diseaseStatus'])) {
                $this->setDiseaseStatus($data['diseaseStatus']);
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
            if (isset($data['therapeuticIndication'])) {
                $this->setTherapeuticIndication($data['therapeuticIndication']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductContraindication::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * A comorbidity (concurrent condition) or coinfection.
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
     * A comorbidity (concurrent condition) or coinfection.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getComorbidity()
    {
        return $this->comorbidity;
    }


    /**
     * The disease, symptom or procedure for the contraindication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setDisease(FHIRCodeableConcept $disease = null)
    {
        if (null === $disease) {
            return $this; 
        }
        $this->disease = $disease;
        return $this;
    }

    /**
     * The disease, symptom or procedure for the contraindication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDisease()
    {
        return $this->disease;
    }


    /**
     * The status of the disease or symptom for the contraindication.
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
     * The status of the disease or symptom for the contraindication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDiseaseStatus()
    {
        return $this->diseaseStatus;
    }


    /**
     * Information about the use of the medicinal product in relation to other therapies described as part of the indication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductContraindication\FHIRMedicinalProductContraindicationOtherTherapy
     * @return $this
     */
    public function setOtherTherapy(FHIRMedicinalProductContraindicationOtherTherapy $otherTherapy = null)
    {
        if (null === $otherTherapy) {
            return $this; 
        }
        $this->otherTherapy = $otherTherapy;
        return $this;
    }

    /**
     * Information about the use of the medicinal product in relation to other therapies described as part of the indication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductContraindication\FHIRMedicinalProductContraindicationOtherTherapy
     */
    public function getOtherTherapy()
    {
        return $this->otherTherapy;
    }


    /**
     * The population group to which this applies.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductContraindication\FHIRMedicinalProductContraindicationPopulation
     * @return $this
     */
    public function setPopulation(FHIRMedicinalProductContraindicationPopulation $population = null)
    {
        if (null === $population) {
            return $this; 
        }
        $this->population = $population;
        return $this;
    }

    /**
     * The population group to which this applies.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductContraindication\FHIRMedicinalProductContraindicationPopulation
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
     * Information about the use of the medicinal product in relation to other therapies as part of the indication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setTherapeuticIndication(FHIRReference $therapeuticIndication = null)
    {
        if (null === $therapeuticIndication) {
            return $this; 
        }
        $this->therapeuticIndication = $therapeuticIndication;
        return $this;
    }

    /**
     * Information about the use of the medicinal product in relation to other therapies as part of the indication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getTherapeuticIndication()
    {
        return $this->therapeuticIndication;
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
        if (null !== ($v = $this->getDisease())) {
            $a['disease'] = $v;
        }
        if (null !== ($v = $this->getDiseaseStatus())) {
            $a['diseaseStatus'] = $v;
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
        if (null !== ($v = $this->getTherapeuticIndication())) {
            $a['therapeuticIndication'] = $v;
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
            $sxe = new \SimpleXMLElement('<MedicinalProductContraindication xmlns="http://hl7.org/fhir"></MedicinalProductContraindication>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}
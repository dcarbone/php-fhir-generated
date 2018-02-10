<?php namespace PHPFHIRGenerated\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * The clinical particulars - indications, contraindications etc of a medicinal product, including for regulatory purposes.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMedicinalProductClinicals extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Describe the undesirable effects of the medicinal product.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsUndesirableEffects[]
     */
    public $undesirableEffects = [];

    /**
     * Indication for the Medicinal Product.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsTherapeuticIndication[]
     */
    public $therapeuticIndication = [];

    /**
     * Contraindication for the medicinal product.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsContraindication[]
     */
    public $contraindication = [];

    /**
     * The interactions of the medicinal product with other medicinal products, or other forms of interactions.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsInteractions[]
     */
    public $interactions = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicinalProductClinicals';

    /**
     * Describe the undesirable effects of the medicinal product.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsUndesirableEffects[]
     */
    public function getUndesirableEffects() {
        return $this->undesirableEffects;
    }

    /**
     * Describe the undesirable effects of the medicinal product.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsUndesirableEffects $undesirableEffects
     * @return $this
     */
    public function addUndesirableEffects($undesirableEffects) {
        $this->undesirableEffects[] = $undesirableEffects;
        return $this;
    }

    /**
     * Indication for the Medicinal Product.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsTherapeuticIndication[]
     */
    public function getTherapeuticIndication() {
        return $this->therapeuticIndication;
    }

    /**
     * Indication for the Medicinal Product.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsTherapeuticIndication $therapeuticIndication
     * @return $this
     */
    public function addTherapeuticIndication($therapeuticIndication) {
        $this->therapeuticIndication[] = $therapeuticIndication;
        return $this;
    }

    /**
     * Contraindication for the medicinal product.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsContraindication[]
     */
    public function getContraindication() {
        return $this->contraindication;
    }

    /**
     * Contraindication for the medicinal product.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsContraindication $contraindication
     * @return $this
     */
    public function addContraindication($contraindication) {
        $this->contraindication[] = $contraindication;
        return $this;
    }

    /**
     * The interactions of the medicinal product with other medicinal products, or other forms of interactions.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsInteractions[]
     */
    public function getInteractions() {
        return $this->interactions;
    }

    /**
     * The interactions of the medicinal product with other medicinal products, or other forms of interactions.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsInteractions $interactions
     * @return $this
     */
    public function addInteractions($interactions) {
        $this->interactions[] = $interactions;
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
            if (isset($data['undesirableEffects'])) {
                if (is_array($data['undesirableEffects'])) {
                    foreach($data['undesirableEffects'] as $d) {
                        $this->addUndesirableEffects($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"undesirableEffects" must be array of objects or null, '.gettype($data['undesirableEffects']).' seen.');
                }
            }
            if (isset($data['therapeuticIndication'])) {
                if (is_array($data['therapeuticIndication'])) {
                    foreach($data['therapeuticIndication'] as $d) {
                        $this->addTherapeuticIndication($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"therapeuticIndication" must be array of objects or null, '.gettype($data['therapeuticIndication']).' seen.');
                }
            }
            if (isset($data['contraindication'])) {
                if (is_array($data['contraindication'])) {
                    foreach($data['contraindication'] as $d) {
                        $this->addContraindication($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"contraindication" must be array of objects or null, '.gettype($data['contraindication']).' seen.');
                }
            }
            if (isset($data['interactions'])) {
                if (is_array($data['interactions'])) {
                    foreach($data['interactions'] as $d) {
                        $this->addInteractions($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"interactions" must be array of objects or null, '.gettype($data['interactions']).' seen.');
                }
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
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->undesirableEffects)) {
            $json['undesirableEffects'] = [];
            foreach($this->undesirableEffects as $undesirableEffects) {
                if (null !== $undesirableEffects) $json['undesirableEffects'][] = $undesirableEffects;
            }
        }
        if (0 < count($this->therapeuticIndication)) {
            $json['therapeuticIndication'] = [];
            foreach($this->therapeuticIndication as $therapeuticIndication) {
                if (null !== $therapeuticIndication) $json['therapeuticIndication'][] = $therapeuticIndication;
            }
        }
        if (0 < count($this->contraindication)) {
            $json['contraindication'] = [];
            foreach($this->contraindication as $contraindication) {
                if (null !== $contraindication) $json['contraindication'][] = $contraindication;
            }
        }
        if (0 < count($this->interactions)) {
            $json['interactions'] = [];
            foreach($this->interactions as $interactions) {
                if (null !== $interactions) $json['interactions'][] = $interactions;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicinalProductClinicals xmlns="http://hl7.org/fhir"></MedicinalProductClinicals>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->undesirableEffects)) {
            foreach($this->undesirableEffects as $undesirableEffects) {
                $undesirableEffects->xmlSerialize(true, $sxe->addChild('undesirableEffects'));
            }
        }
        if (0 < count($this->therapeuticIndication)) {
            foreach($this->therapeuticIndication as $therapeuticIndication) {
                $therapeuticIndication->xmlSerialize(true, $sxe->addChild('therapeuticIndication'));
            }
        }
        if (0 < count($this->contraindication)) {
            foreach($this->contraindication as $contraindication) {
                $contraindication->xmlSerialize(true, $sxe->addChild('contraindication'));
            }
        }
        if (0 < count($this->interactions)) {
            foreach($this->interactions as $interactions) {
                $interactions->xmlSerialize(true, $sxe->addChild('interactions'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}
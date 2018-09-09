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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsContraindication;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsInteractions;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsTherapeuticIndication;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsUndesirableEffects;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * The clinical particulars - indications, contraindications etc. of a medicinal product, including for regulatory purposes.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRMedicinalProductClinicals
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRMedicinalProductClinicals extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'MedicinalProductClinicals';

    /**
     * Contraindication for the medicinal product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsContraindication
     */
    public $contraindication = null;

    /**
     * The interactions of the medicinal product with other medicinal products, or other forms of interactions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsInteractions
     */
    public $interactions = null;

    /**
     * Indication for the Medicinal Product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsTherapeuticIndication
     */
    public $therapeuticIndication = null;

    /**
     * Describe the undesirable effects of the medicinal product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsUndesirableEffects
     */
    public $undesirableEffects = null;

    /**
     * FHIRMedicinalProductClinicals Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['contraindication'])) {
                $this->setContraindication($data['contraindication']);
            }
            if (isset($data['interactions'])) {
                $this->setInteractions($data['interactions']);
            }
            if (isset($data['therapeuticIndication'])) {
                $this->setTherapeuticIndication($data['therapeuticIndication']);
            }
            if (isset($data['undesirableEffects'])) {
                $this->setUndesirableEffects($data['undesirableEffects']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductClinicals::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Contraindication for the medicinal product.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsContraindication
     * @return $this
     */
    public function setContraindication(FHIRMedicinalProductClinicalsContraindication $contraindication = null)
    {
        if (null === $contraindication) {
            return $this; 
        }
        $this->contraindication = $contraindication;
        return $this;
    }

    /**
     * Contraindication for the medicinal product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsContraindication
     */
    public function getContraindication()
    {
        return $this->contraindication;
    }


    /**
     * The interactions of the medicinal product with other medicinal products, or other forms of interactions.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsInteractions
     * @return $this
     */
    public function setInteractions(FHIRMedicinalProductClinicalsInteractions $interactions = null)
    {
        if (null === $interactions) {
            return $this; 
        }
        $this->interactions = $interactions;
        return $this;
    }

    /**
     * The interactions of the medicinal product with other medicinal products, or other forms of interactions.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsInteractions
     */
    public function getInteractions()
    {
        return $this->interactions;
    }


    /**
     * Indication for the Medicinal Product.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsTherapeuticIndication
     * @return $this
     */
    public function setTherapeuticIndication(FHIRMedicinalProductClinicalsTherapeuticIndication $therapeuticIndication = null)
    {
        if (null === $therapeuticIndication) {
            return $this; 
        }
        $this->therapeuticIndication = $therapeuticIndication;
        return $this;
    }

    /**
     * Indication for the Medicinal Product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsTherapeuticIndication
     */
    public function getTherapeuticIndication()
    {
        return $this->therapeuticIndication;
    }


    /**
     * Describe the undesirable effects of the medicinal product.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsUndesirableEffects
     * @return $this
     */
    public function setUndesirableEffects(FHIRMedicinalProductClinicalsUndesirableEffects $undesirableEffects = null)
    {
        if (null === $undesirableEffects) {
            return $this; 
        }
        $this->undesirableEffects = $undesirableEffects;
        return $this;
    }

    /**
     * Describe the undesirable effects of the medicinal product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsUndesirableEffects
     */
    public function getUndesirableEffects()
    {
        return $this->undesirableEffects;
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
        if (null !== ($v = $this->getContraindication())) {
            $a['contraindication'] = $v;
        }
        if (null !== ($v = $this->getInteractions())) {
            $a['interactions'] = $v;
        }
        if (null !== ($v = $this->getTherapeuticIndication())) {
            $a['therapeuticIndication'] = $v;
        }
        if (null !== ($v = $this->getUndesirableEffects())) {
            $a['undesirableEffects'] = $v;
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
            $sxe = new \SimpleXMLElement('<MedicinalProductClinicals xmlns="http://hl7.org/fhir"></MedicinalProductClinicals>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}
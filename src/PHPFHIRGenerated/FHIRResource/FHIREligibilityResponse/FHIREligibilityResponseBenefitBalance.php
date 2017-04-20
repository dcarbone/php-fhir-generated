<?php namespace PHPFHIRGenerated\FHIRResource\FHIREligibilityResponse;

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
 * This resource provides eligibility and plan details from the processing of an Eligibility resource.
 */
class FHIREligibilityResponseBenefitBalance extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Dental, Vision, Medical, Pharmacy, Rehab etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * Dental: basic, major, ortho; Vision exam, glasses, contacts; etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $subCategory = null;

    /**
     * True if the indicated class of service is excluded from the plan, missing or False indicated the service is included in the coverage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $excluded = null;

    /**
     * A short name or tag for the benefit, for example MED01, or DENT2.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * A richer description of the benefit, for example 'DENT2 covers 100% of basic, 50% of major but exclused Ortho, Implants and Costmetic services'.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Network designation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $network = null;

    /**
     * Unit designation: individual or family.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $unit = null;

    /**
     * The term or period of the values such as 'maximum lifetime benefit' or 'maximum annual vistis'.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $term = null;

    /**
     * Benefits Used to date.
     * @var \PHPFHIRGenerated\FHIRResource\FHIREligibilityResponse\FHIREligibilityResponseFinancial[]
     */
    public $financial = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'EligibilityResponse.BenefitBalance';

    /**
     * Dental, Vision, Medical, Pharmacy, Rehab etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Dental, Vision, Medical, Pharmacy, Rehab etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Dental: basic, major, ortho; Vision exam, glasses, contacts; etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSubCategory()
    {
        return $this->subCategory;
    }

    /**
     * Dental: basic, major, ortho; Vision exam, glasses, contacts; etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $subCategory
     * @return $this
     */
    public function setSubCategory($subCategory)
    {
        $this->subCategory = $subCategory;
        return $this;
    }

    /**
     * True if the indicated class of service is excluded from the plan, missing or False indicated the service is included in the coverage.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExcluded()
    {
        return $this->excluded;
    }

    /**
     * True if the indicated class of service is excluded from the plan, missing or False indicated the service is included in the coverage.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $excluded
     * @return $this
     */
    public function setExcluded($excluded)
    {
        $this->excluded = $excluded;
        return $this;
    }

    /**
     * A short name or tag for the benefit, for example MED01, or DENT2.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A short name or tag for the benefit, for example MED01, or DENT2.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * A richer description of the benefit, for example 'DENT2 covers 100% of basic, 50% of major but exclused Ortho, Implants and Costmetic services'.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A richer description of the benefit, for example 'DENT2 covers 100% of basic, 50% of major but exclused Ortho, Implants and Costmetic services'.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Network designation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Network designation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $network
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->network = $network;
        return $this;
    }

    /**
     * Unit designation: individual or family.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Unit designation: individual or family.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $unit
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * The term or period of the values such as 'maximum lifetime benefit' or 'maximum annual vistis'.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * The term or period of the values such as 'maximum lifetime benefit' or 'maximum annual vistis'.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $term
     * @return $this
     */
    public function setTerm($term)
    {
        $this->term = $term;
        return $this;
    }

    /**
     * Benefits Used to date.
     * @return \PHPFHIRGenerated\FHIRResource\FHIREligibilityResponse\FHIREligibilityResponseFinancial[]
     */
    public function getFinancial()
    {
        return $this->financial;
    }

    /**
     * Benefits Used to date.
     * @param \PHPFHIRGenerated\FHIRResource\FHIREligibilityResponse\FHIREligibilityResponseFinancial $financial
     * @return $this
     */
    public function addFinancial($financial)
    {
        $this->financial[] = $financial;
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
        if (null !== $this->category) $json['category'] = json_encode($this->category);
        if (null !== $this->subCategory) $json['subCategory'] = json_encode($this->subCategory);
        if (null !== $this->excluded) $json['excluded'] = json_encode($this->excluded);
        if (null !== $this->name) $json['name'] = json_encode($this->name);
        if (null !== $this->description) $json['description'] = json_encode($this->description);
        if (null !== $this->network) $json['network'] = json_encode($this->network);
        if (null !== $this->unit) $json['unit'] = json_encode($this->unit);
        if (null !== $this->term) $json['term'] = json_encode($this->term);
        if (0 < count($this->financial)) {
            $json['financial'] = [];
            foreach($this->financial as $financial) {
                $json['financial'][] = json_encode($financial);
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<EligibilityResponseBenefitBalance xmlns="http://hl7.org/fhir"></EligibilityResponseBenefitBalance>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->category) $this->category->xmlSerialize(true, $sxe->addChild('category'));
        if (null !== $this->subCategory) $this->subCategory->xmlSerialize(true, $sxe->addChild('subCategory'));
        if (null !== $this->excluded) $this->excluded->xmlSerialize(true, $sxe->addChild('excluded'));
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->network) $this->network->xmlSerialize(true, $sxe->addChild('network'));
        if (null !== $this->unit) $this->unit->xmlSerialize(true, $sxe->addChild('unit'));
        if (null !== $this->term) $this->term->xmlSerialize(true, $sxe->addChild('term'));
        if (0 < count($this->financial)) {
            foreach($this->financial as $financial) {
                $financial->xmlSerialize(true, $sxe->addChild('financial'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}
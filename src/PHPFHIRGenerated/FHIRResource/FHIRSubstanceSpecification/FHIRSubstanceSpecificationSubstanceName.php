<?php namespace PHPFHIRGenerated\FHIRResource\FHIRSubstanceSpecification;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.
 */
class FHIRSubstanceSpecificationSubstanceName extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The actual name.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Name type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Language of the name.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $language = [];

    /**
     * The use context of this name for example if there is a different name a drug active ingredient as opposed to a food colour additive.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $domain = [];

    /**
     * The jurisdiction where this name applies.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $jurisdiction = [];

    /**
     * Details of the official nature of this name.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationOfficialName[]
     */
    public $officialName = [];

    /**
     * Supporting literature.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $referenceSource = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'SubstanceSpecification.SubstanceName';

    /**
     * The actual name.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName() {
        return $this->name;
    }

    /**
     * The actual name.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Name type.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Name type.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Language of the name.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getLanguage() {
        return $this->language;
    }

    /**
     * Language of the name.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $language
     * @return $this
     */
    public function addLanguage($language) {
        $this->language[] = $language;
        return $this;
    }

    /**
     * The use context of this name for example if there is a different name a drug active ingredient as opposed to a food colour additive.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getDomain() {
        return $this->domain;
    }

    /**
     * The use context of this name for example if there is a different name a drug active ingredient as opposed to a food colour additive.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $domain
     * @return $this
     */
    public function addDomain($domain) {
        $this->domain[] = $domain;
        return $this;
    }

    /**
     * The jurisdiction where this name applies.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction() {
        return $this->jurisdiction;
    }

    /**
     * The jurisdiction where this name applies.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return $this
     */
    public function addJurisdiction($jurisdiction) {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * Details of the official nature of this name.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationOfficialName[]
     */
    public function getOfficialName() {
        return $this->officialName;
    }

    /**
     * Details of the official nature of this name.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationOfficialName $officialName
     * @return $this
     */
    public function addOfficialName($officialName) {
        $this->officialName[] = $officialName;
        return $this;
    }

    /**
     * Supporting literature.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getReferenceSource() {
        return $this->referenceSource;
    }

    /**
     * Supporting literature.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $referenceSource
     * @return $this
     */
    public function addReferenceSource($referenceSource) {
        $this->referenceSource[] = $referenceSource;
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
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['language'])) {
                if (is_array($data['language'])) {
                    foreach($data['language'] as $d) {
                        $this->addLanguage($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"language" must be array of objects or null, '.gettype($data['language']).' seen.');
                }
            }
            if (isset($data['domain'])) {
                if (is_array($data['domain'])) {
                    foreach($data['domain'] as $d) {
                        $this->addDomain($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"domain" must be array of objects or null, '.gettype($data['domain']).' seen.');
                }
            }
            if (isset($data['jurisdiction'])) {
                if (is_array($data['jurisdiction'])) {
                    foreach($data['jurisdiction'] as $d) {
                        $this->addJurisdiction($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"jurisdiction" must be array of objects or null, '.gettype($data['jurisdiction']).' seen.');
                }
            }
            if (isset($data['officialName'])) {
                if (is_array($data['officialName'])) {
                    foreach($data['officialName'] as $d) {
                        $this->addOfficialName($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"officialName" must be array of objects or null, '.gettype($data['officialName']).' seen.');
                }
            }
            if (isset($data['referenceSource'])) {
                if (is_array($data['referenceSource'])) {
                    foreach($data['referenceSource'] as $d) {
                        $this->addReferenceSource($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"referenceSource" must be array of objects or null, '.gettype($data['referenceSource']).' seen.');
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
        if (isset($this->name)) $json['name'] = $this->name;
        if (isset($this->type)) $json['type'] = $this->type;
        if (0 < count($this->language)) {
            $json['language'] = [];
            foreach($this->language as $language) {
                if (null !== $language) $json['language'][] = $language;
            }
        }
        if (0 < count($this->domain)) {
            $json['domain'] = [];
            foreach($this->domain as $domain) {
                if (null !== $domain) $json['domain'][] = $domain;
            }
        }
        if (0 < count($this->jurisdiction)) {
            $json['jurisdiction'] = [];
            foreach($this->jurisdiction as $jurisdiction) {
                if (null !== $jurisdiction) $json['jurisdiction'][] = $jurisdiction;
            }
        }
        if (0 < count($this->officialName)) {
            $json['officialName'] = [];
            foreach($this->officialName as $officialName) {
                if (null !== $officialName) $json['officialName'][] = $officialName;
            }
        }
        if (0 < count($this->referenceSource)) {
            $json['referenceSource'] = [];
            foreach($this->referenceSource as $referenceSource) {
                if (null !== $referenceSource) $json['referenceSource'][] = $referenceSource;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<SubstanceSpecificationSubstanceName xmlns="http://hl7.org/fhir"></SubstanceSpecificationSubstanceName>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->name)) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (0 < count($this->language)) {
            foreach($this->language as $language) {
                $language->xmlSerialize(true, $sxe->addChild('language'));
            }
        }
        if (0 < count($this->domain)) {
            foreach($this->domain as $domain) {
                $domain->xmlSerialize(true, $sxe->addChild('domain'));
            }
        }
        if (0 < count($this->jurisdiction)) {
            foreach($this->jurisdiction as $jurisdiction) {
                $jurisdiction->xmlSerialize(true, $sxe->addChild('jurisdiction'));
            }
        }
        if (0 < count($this->officialName)) {
            foreach($this->officialName as $officialName) {
                $officialName->xmlSerialize(true, $sxe->addChild('officialName'));
            }
        }
        if (0 < count($this->referenceSource)) {
            foreach($this->referenceSource as $referenceSource) {
                $referenceSource->xmlSerialize(true, $sxe->addChild('referenceSource'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}
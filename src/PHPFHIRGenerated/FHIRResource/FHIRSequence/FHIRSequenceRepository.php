<?php namespace PHPFHIRGenerated\FHIRResource\FHIRSequence;

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
 * Raw data describing a biological sequence.
 */
class FHIRSequenceRepository extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Click and see / RESTful API / Need login to see / RESTful API with authentication / Other ways to see resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRepositoryType
     */
    public $type = null;

    /**
     * URI of an external repository which contains further details about the genetics data.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * URI of an external repository which contains further details about the genetics data.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Id of the variant in this external repository. The server will understand how to use this id to call for more info about datasets in external repository.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $datasetId = null;

    /**
     * Id of the variantset in this external repository. The server will understand how to use this id to call for more info about variantsets in external repository.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $variantsetId = null;

    /**
     * Id of the read in this external repository.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $readsetId = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Sequence.Repository';

    /**
     * Click and see / RESTful API / Need login to see / RESTful API with authentication / Other ways to see resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRepositoryType
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Click and see / RESTful API / Need login to see / RESTful API with authentication / Other ways to see resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRepositoryType $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * URI of an external repository which contains further details about the genetics data.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * URI of an external repository which contains further details about the genetics data.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }

    /**
     * URI of an external repository which contains further details about the genetics data.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName() {
        return $this->name;
    }

    /**
     * URI of an external repository which contains further details about the genetics data.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Id of the variant in this external repository. The server will understand how to use this id to call for more info about datasets in external repository.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDatasetId() {
        return $this->datasetId;
    }

    /**
     * Id of the variant in this external repository. The server will understand how to use this id to call for more info about datasets in external repository.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $datasetId
     * @return $this
     */
    public function setDatasetId($datasetId) {
        $this->datasetId = $datasetId;
        return $this;
    }

    /**
     * Id of the variantset in this external repository. The server will understand how to use this id to call for more info about variantsets in external repository.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getVariantsetId() {
        return $this->variantsetId;
    }

    /**
     * Id of the variantset in this external repository. The server will understand how to use this id to call for more info about variantsets in external repository.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $variantsetId
     * @return $this
     */
    public function setVariantsetId($variantsetId) {
        $this->variantsetId = $variantsetId;
        return $this;
    }

    /**
     * Id of the read in this external repository.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getReadsetId() {
        return $this->readsetId;
    }

    /**
     * Id of the read in this external repository.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $readsetId
     * @return $this
     */
    public function setReadsetId($readsetId) {
        $this->readsetId = $readsetId;
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
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['url'])) {
                $this->setUrl($data['url']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['datasetId'])) {
                $this->setDatasetId($data['datasetId']);
            }
            if (isset($data['variantsetId'])) {
                $this->setVariantsetId($data['variantsetId']);
            }
            if (isset($data['readsetId'])) {
                $this->setReadsetId($data['readsetId']);
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
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->url)) $json['url'] = $this->url;
        if (isset($this->name)) $json['name'] = $this->name;
        if (isset($this->datasetId)) $json['datasetId'] = $this->datasetId;
        if (isset($this->variantsetId)) $json['variantsetId'] = $this->variantsetId;
        if (isset($this->readsetId)) $json['readsetId'] = $this->readsetId;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<SequenceRepository xmlns="http://hl7.org/fhir"></SequenceRepository>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->url)) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if (isset($this->name)) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (isset($this->datasetId)) $this->datasetId->xmlSerialize(true, $sxe->addChild('datasetId'));
        if (isset($this->variantsetId)) $this->variantsetId->xmlSerialize(true, $sxe->addChild('variantsetId'));
        if (isset($this->readsetId)) $this->readsetId->xmlSerialize(true, $sxe->addChild('readsetId'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}